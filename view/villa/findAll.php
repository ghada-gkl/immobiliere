<?
require_once "../controller/findAll.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Liste des appartements</legend>
        <table>
            <tr><td>refernce</td>
        <td>proprietaire</td>
        <td>localite</td>
        <td>surface</td>
        <td>usage</td>
        <td>Nb NbPiece</td>
        <td>espace commun</td>
        <td>action</td></tr>
            <?foreach($Lesappartement as $app){?>
              <tr>
                <td><?=$app[0]?></td>
                <td><?=$app[1]?></td>
                <td><?=$app[2]?></td>
                <td><?=$app[3]?></td>
                <td><?=$app[4]?></td>
                <td><?=$app[5]?></td>
                <td><?=$app[6]?></td>
                <td><a href="modifier.php" <?=$app[0]?>>modifier</a></td>
                <td><a href="../controller/appartement/
                supprimer.php" <?=$app[0]?>supprimer></a></td>
              </tr>
              <?}?>
        </table>
    </fieldset>
</body>
</html>