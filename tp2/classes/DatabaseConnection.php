<?php

class DatabaseConnection {

    // // Connexion BDD
    private $dbhost = 'localhost:8889';
    private $dbuser = 'testphp';
    private $dbpass = 'testphp';
    private $dbname = "test";

    public $mysqli;

    public function __construct()
    {
        $this->mysqli = $this->setConnection();
    }

    private function setConnection(){
        $mysqli = new mysqli(
            $this->dbhost,
            $this->dbuser,
            $this->dbpass,
            $this->dbname
        );
        if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
        }
        return $mysqli;
    }



}