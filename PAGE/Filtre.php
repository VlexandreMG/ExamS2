<?php 
    include('../INC/Fonction.php');

    $idc = $_POST['idc'];

    $list_F = get_liste_objet_filtrer_categorie($idc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objet filtrer</title>
</head>
<body>
    <?php foreach ($list_F as $li) { ?>
        <?php echo $li['nom_objet'] , "</br>" ?>
    <?php } ?>

    <a href="Liste_objet.php">Retour</a>
</body>
</html>