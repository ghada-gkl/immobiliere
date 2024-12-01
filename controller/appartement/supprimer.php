<?
require_once "../model/crud.php";
$crud=new crudAppartement();
$ref=$_GET['ref'];
$app=$crud->SupprimerApp($ref);