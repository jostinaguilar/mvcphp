<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once '../src/controllers/ContactController.php';

$contact = new ContactController;

if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $contact->show($_GET['id']);
    } else {
        $contact->message('Error: escribe un id');
    }
} else {
    $contact->message('Error al llamar a la api');
}
