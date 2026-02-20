<?php

try{

$pwd = urlencode($this->pwd ?? "");
}

catch (Exception $e) {

$this->error = $e->getMessage();
}