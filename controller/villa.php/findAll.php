<?

require_once "../model/crud.php";

if(isset($_POST['lister'])){
    include "lister.php";
$crud=new crudAppartement();
$Lesappartement=$crud->ListerApp();
include "../view/findAll.php";}