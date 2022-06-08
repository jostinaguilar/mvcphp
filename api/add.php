<?php

require_once '../src/controllers/ContactController.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$contact = new ContactController;

if (
    isset($_POST['name']) &&
    isset($_POST['lastname']) &&
    isset($_POST['phone']) &&
    isset($_POST['email'])
) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['lastname']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email'])
    ) {
        $item = array(
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email']
        );
        $contact->store($item);
    } else {
        $contact->message('No se pueden guardar datos vacios');
    }
} else {
    $contact->message('Error al llamar a la api');
}
