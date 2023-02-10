<?php

class Requests
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTableDatas()
    {
        // requete pour tableau
        $sql = "SELECT * FROM todos";
        $result = $this->db->mysqli->query($sql);

        // Fermeture connexion BDD
        $this->db->mysqli->close();
        return $result;
    }
}