<?
require_once "../model/crud.php";
$crud=new crudAppartement();
require_once "../view/rchercher.php";
if(isset($_POST['rech'])){
    $ref=$_POST['ref'];
    $res=$crud->RecupererApp($ref);
    if($res==null){
          ?> <p>aucun appartement trouve</p><?
    }


}