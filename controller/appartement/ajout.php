<?
require_once '../../model/crud.php';
include '../../view/ajout.php';
$crud=new crudAppartement();
if (isset($_POST['ok'])){
    $r=$_POST['ref'];$p=$_POST['pr'];
    $l=$_POST['loc'];
    $s=$_POST['sur'];
    $d=$_POST['domaine'];
    $n=$_POST['n'];
    $c=$_POST['com'];

}
$a=new appartement(null,$r,$p,$l,$s,$d,$n,$c);
$ligne=$crud->AjouterApp($a);
if($ligne){
    header('location:ajout.php');
}