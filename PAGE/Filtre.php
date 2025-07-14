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
    <link href="../ASSETS/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="h4">Objets filtrés</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <?php foreach ($list_F as $li) { ?>
                        <li class="list-group-item"><?php echo $li['nom_objet'] ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="card-footer">
                <a href="Liste_objet.php" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</body>
</html>