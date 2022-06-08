<?php

require_once '../src/lib/database.php';

class Contact
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        try {
            $query = $this->db->connect()->query("SELECT * FROM contacts ORDER BY id ASC");
            return $query;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function save($contact)
    {
        try {
            $query = $this->db->connect()->query("INSERT INTO contacts (name, lastname, phone, email) VALUES ('" . $contact['name'] . "', '" . $contact["lastname"] . "', '" . $contact["phone"] . "', '" . $contact["email"] . "')");
            return $query;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function find($id)
    {
        try {
            $query = $this->db->connect()->query("SELECT * FROM contacts WHERE id = '$id'");
            return $query;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }
}
