<?php


$db->qry("create", "users", ["unique" => ["email", "username"],
"ordinary" => ["lastname", "status"], 

]);




$userData = [
  "email" => "benrich@gmail.com",
  "password" => password_hash("password", PASSWORD_DEFAULT),
  "firstname" => "John",


];


$result = $db->qry("insert", "users", $userData);

// if()

//in an array you can pass an array to add multiple inputs and objects to nice oh 