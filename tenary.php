<?php


$this->dbuser =($user != "" ? $user : $this->dbuser);

//if $user is not an empty string used the $user pass else keep the dbuser is the default value $this->dbuser