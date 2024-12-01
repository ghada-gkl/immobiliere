<?
require_once "../controller/modifier.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? foreach($app as $val){
    ?>
    <div class="container">
        <fieldset>
            <legend>ajout d'appartement</legend>
            <form action="" method="post">
                <label for="">reference</label>
                <input type="number" name="ref"><?=$val[0]?>
                <label for="">proprietaire</label>
                <input type="text" name="pr"><?=$val[1]?>
                <label for="">localite</label>
                <input type="text" name="loc"><?=$val[2]?>
                <label for="">surface</label>
                <input type="number" name="sur"><?=$val[3]?>
                <label for="">domaine usage</label>
                <select name="domaine" id="" ><?=$val[4]?>
                <option value="bureau"></option>
                <option value="domicile"></option>
                </select>
                <label for="">nombre de piece</label>
                <input type="number" name="n"><?=$val[5]?>
                <label for="">surface de l'espace commun</label>
                <input type="number" name="com"><?=$val[6]?>
                <input type="submit" name="ok" value="modifier">
            </form>
        </fieldset>
    </div>
    <?}?>
</body>
</html>