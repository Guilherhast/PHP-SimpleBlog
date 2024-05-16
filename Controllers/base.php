<?php

// Form functions

// Auxiliary functions
function r_getOne($id){
	return "{\"message\":\"This should return one element with id: $id.\"}";
}

function r_getAll(){
	return "{\"message\":\"This should return all elements.\"}";
}

// Crud functions
function r_get(){
	return  array_key_exists('id', $_GET)? r_getOne($_GET['id']): r_getAll();
}

function r_post(){
	return "{\"message\":\"This should create another element.\"}";
}

function r_update(){
	$id = $_GET['id'];
	return "{\"message\":\"This should update the element with id: $id.\"}";
}

function r_delete(){
	$id = $_GET['id'];
	return "{\"message\":\"This should delete the element with id: $id.\"}";
}

// Handling requests
$controler = array(
	'GET' => 'r_get',
	'POST' => 'r_post',
	'UPDATE' => 'r_update',
	'PUT' => 'r_update',
	'DELETE' => 'r_delete',
);

$dbm = "";

$req_type = $_SERVER['REQUEST_METHOD'];
error_log($req_type);
echo $controler[$req_type]($dbm);

?>
