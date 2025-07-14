<?php 
include('../INC/Fonction.php');
$liste = get_all_membre();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des membres : </h1>
    <table border=1px>
        <tr>
            <th>Nom</th>
        </tr>

        <?php foreach ($liste as $ls) { ?>
            <tr>
                <td>
                <a href="Fiche_membre.php?id_membre=<?php echo $ls["id_membre"] ?>" 
                class="text-decoration-none">
                <?php echo $ls["nom"];?>
                </a>
                </td>
            </tr>
        <?php }?>
    </table>    
</body>
</html>