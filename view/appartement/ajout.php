<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>ajout d'appartement</legend>
            <form action="" method="post">
                <label for="">reference</label>
                <input type="number" name="ref">
                <label for="">proprietaire</label>
                <input type="text" name="pr">
                <label for="">localite</label>
                <input type="text" name="loc">
                <label for="">surface</label>
                <input type="number" name="sur">
                <label for="">domaine usage</label>
                <select name="domaine" id="" >
                <option value="bureau"></option>
                <option value="domicile"></option>
                </select>
                <label for="">nombre de piece</label>
                <input type="number" name="n">
                <label for="">surface de l'espace commun</label>
                <input type="number" name="com">
                <input type="submit" name="ok" value="ajouter">
            </form>
        </fieldset>
    </div>
</body>
</html>