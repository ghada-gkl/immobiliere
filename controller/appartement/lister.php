<?
include '../../view/appartement/ajout.php';
if (isset($_POST['ok'])){
    ?>
    <form action="findAll.php" method="post">
    <h3>insertion effectuer avec succes</h3>
    <input type="submit" value="lister" name="lister"></form>
    <?}?>