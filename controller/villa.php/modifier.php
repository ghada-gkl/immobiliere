<?php
require_once "../model/crud.php";

$crud = new crudAppartement();

if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    $app = $crud->RecupererApp($ref);
}

include "../view/modifier.php";

if (isset($_POST['ok'])) {
    $r = $_POST['ref'];
    $p = $_POST['pr'];
    $l = $_POST['loc'];
    $s = $_POST['sur'];
    $d = $_POST['domaine'];
    $n = $_POST['n'];
    $c = $_POST['com'];

    $a = new appartement(null, $r, $p, $l, $s, $d, $n, $c);
    $ligne = $crud->ModifierApp($a);

    if ($ligne) {
        header('Location: ajout.php');
        exit();
    }
}
