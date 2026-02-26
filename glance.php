<?php

class Productioncontroller {


public function Update() {



//get user id from post 
$request = $_POST['order_id'];

//step 2 : Define validation 

$data = [

'order_name' => 'required|min_len 3',
'order_type' => 'required|min_len 3',
'assinged_to' => 'required',
'comment' => 'required|min_len',

];











}


}