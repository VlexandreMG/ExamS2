<?php 
    session_start();
    include('../INC/Fonction.php');
    $id_user = $_SESSION['idUser'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout image</title>
</head>
<body>
    <form action="../TRAITEMENTS/Traitement_ajout.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Nom de l'objet">
        <select name="categorie" >
            <?php
                $categories = get_liste_categorie();
                foreach ($categories as $cat) 
                { ?>
                    <option value=" <?php echo $cat['id_categorie'] ?>"> <?php echo $cat['nom_categorie'] ?></option>;
                <?php } ?> 
            ?>
        </select>
        <input type="file" name="fichier">
        <input type="submit" value="Ajouter l'image">
    </form>
</body>
</html>
