<?php


const APP_NAME = "My Name Tutorail";

define ("BASE_PATH", __DIR__ . "/uploads");


$is_production = true;

if ($is_production){
define("DB_HOST", "lasien.cinfores.net");

}

echo APP_NAME . "<br>";
echo DB_HOST . "<br>";