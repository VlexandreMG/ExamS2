<?php 
    include('../INC/Fonction.php');

    $obj = get_liste_objet();
    $cat = get_liste_categorie();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste objet</title>
    <link href="../ASSETS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">
                <h1 class="h3">Liste d'objets</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nom objet</th>
                                <th>Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($obj as $ob) { ?>
                            <tr>
                                <td><?php echo $ob['nom_objet'] ?></td>
                                <td><?php echo $ob['nom_categorie'] ?></td>
                            </tr> 
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="h3">Filtrer les objets</h1>
            </div>
            <div class="card-body">
                <form action="Filtre.php" method="post" class="row g-3 align-items-center">
                    <div class="col-md-8">
                        <select name="idc" class="form-select">
                            <?php foreach ($cat as $c) { ?>
                                <option value="<?php echo $c['id_categorie'] ?>"><?php echo $c['nom_categorie'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary w-100">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>