<?php

include_once("DatabaseConnection.php");
include_once("DdService.php");
include_once("Requests.php");

class HomePage
{
    private $db;
    private $dd;
    private $req;

    public $result;

    public function __construct()
    {
        $this->db = new DatabaseConnection();
        $this->dd = new DdService();

        $this->req = new Requests($this->db);
        
        $this->result = $this->req->getTableDatas();

        $this->dd->show($_REQUEST);
    }

}