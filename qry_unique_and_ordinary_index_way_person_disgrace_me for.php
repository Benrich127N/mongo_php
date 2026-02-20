<?php


$db->qry("create", "users", ["unique" => ["email", "username"],
"ordinary" => ["lastname", "status"], 

]);