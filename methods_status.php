<?php


class go {


//create 
$data = validate(input);

$model = new Model();

$response = $model->insert($data);



//read (get)

$id = $_GET['id'];

$productModel = new ProductModel;

$response = $ProductModel->get(['id' => $id]);



//update
$id = $_POST['id'];

$data = $validated($input);

$model = new Model;

$response = $model->update(['id' => '$id']);




//delete 


$id = $_POST['id'];

$model = new Model();

$response = $model->delete(['id' => $data]);




}