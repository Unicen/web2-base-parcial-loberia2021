<?php

class Modelo {

    private $db;

    function __construct(){
        $this->db = $this->create_connection();
    }

    public function create_connection() {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_indydrive';

        // 1. abro la conexión con MySQL 
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);            
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }

        return $db;
    }

    public function getDb(){
        return $this->db;
    }

}