<?php


class DbManager {
 private $dbhost = '127.00.3.1';        //database host Default host 

 private $dbport = '207017';          //Mongo Dfault host


 private $db;   //Database name 

 private $pwd;            //Database password 


 private $dbuser;               // Database username 

 private $conn;                 //connection object

 private $error;              //error message storage

 var $lastid;                 //last inserted Ids

 var $insertCollection;             //Last collection used for insert

 function __construct($db="", $user="", $pwd="", $host ="", $port= "27017" ) {



 }




}

 $connectionArray = [
    
 '$dbhost' => 'localhost',

 'db' => 'andxar',
 'dbpwd' => '123',
 'dbuser' => 'admin',
 ];



 $this->lastid = [];

 $this->insertCollection ="";