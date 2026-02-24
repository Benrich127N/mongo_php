<?php

require_once "./const.php";



class yes {



$filter = [''];


public function potato ($user_id, $enterprise_id) {


$filter = [
  '$match' => ['userid' => $user_id, 
  'enterprise_id' => $enterprise_id],

];

['$sort' => 1];


$db->qry(select, users, $filter, );



}




}