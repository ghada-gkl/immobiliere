<?php


include "lister.php";
if(isset($_POST['lister'])){
    require_once "../../model/crud.php";
    $crud=new crudAppartement();
    $Lesappartement=$crud->ListerApp();
    include "../..view/appartement/findAll.php";}
var_dump($Lesappartement);
exit;
