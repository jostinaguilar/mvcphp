<?php

require_once '../src/models/Contact.php';

class ContactController
{
    public function index()
    {
        $getContacts = new Contact;
        $contacts = array();

        $res = $getContacts->all();

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $contact = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'lastname' => $row['lastname'],
                    'phone' => $row['phone'],
                    'email' => $row['email']
                );
                array_push($contacts, $contact);
            }
            echo json_encode($contacts);
        } else {
            $this->message('Sin Contactos ');
        }
    }

    public function store($item)
    {
        $contact = new Contact();
        $res = $contact->save($item);
        $this->message('Contacto guardado exitosamente');
    }

    public function show($id)
    {
        $getContact = new Contact;
        $contact = array();

        $res = $getContact->find($id);

        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            $contact = array(
                'name' => $row['name'],
                'lastname' => $row['lastname'],
                'phone' => $row['phone'],
                'email' => $row['email']
            );
            echo json_encode($contact);
        } else {
            $this->message('Contacto no encontrado');
        }
    }

    public function message($message)
    {
        echo json_encode(['response' => $message]);
    }
}
