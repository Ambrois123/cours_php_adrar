<?php
if(isset($_GET['form_name']) && isset($_GET['form_price'])){
    if(!empty($_GET['form_name']) && !empty($_GET['form_price'])){
            echo "tout marche";
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet chaussures</title>
</head>
<body>
    <h1>Catalogue chaussures</h1>
    <?php include("./menu.php"); ?>
    <h2>Ajouter une chaussure</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
        <label for="form_name">Nom :</label>
        <input type="text" name="form_name">
        <label for="form_price">Prix :</label>
        <input type="number" name="form_price">
        <input type="submit" value="Envoyer" name="form_submit">
    </form>
</body>
</html>