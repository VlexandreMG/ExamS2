<?php 
    session_start();
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
    <form action="../TRAITEMENTS/Traitement_ajout_image.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Nom de l'image" required>
        <input type="text" name="categorie">
        <input type="file" name="fichier">
        <input type="hidden" name="idUser" value="<?php echo $id_user; ?>">
        <input type="submit" value="Ajouter l'image">
    </form>
</body>
</html>
