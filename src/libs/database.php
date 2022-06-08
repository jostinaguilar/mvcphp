<?php

class Database
{
    private string $host;
    private string $username;
    private string $password;
    private string $database;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '123abc';
        $this->database = 'contactsdb';
    }

    public function connect(): mysqli
    {
        $con = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($con->connect_errno) {
            echo 'Fail connect to Database (' . $con->connect_errno . ' )' . $con->connect_error;
        }

        return $con;
    }
}
