<?php


class Database {

public $conn;

public function __construct()
    {
      try {
        
$this->conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");

      }    

    catch(Exception $e){

echo "connection failed" . $e->getMessage();
    }

    }

public function testQuery () 
    {$query = new MongoDB\Driver\Query([]);
        $cursor = $this->conn->executeQuery("axzar.users", $query);
        return $cursor;}




}