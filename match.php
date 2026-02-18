<?php


$status_code = 200;


$message = match ($status_code) {
  200, 201 => "Success",

  
  404 => "Not Found",
  500 => "Server Error",
  default => "Unknown Status",

};

echo $message;

$status_code = 500;

echo $message;
