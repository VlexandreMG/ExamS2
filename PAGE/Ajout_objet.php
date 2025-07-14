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
    <link href="../ASSETS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 text-center">Ajouter un nouvel objet</h2>
                    </div>
                    <div class="card-body">
                        <form action="../TRAITEMENTS/Traitement_ajout.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom de l'objet</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom de l'objet" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="categorie" class="form-label">Catégorie</label>
                                <select class="form-select" id="categorie" name="categorie" required>
                                    <?php
                                        $categories = get_liste_categorie();
                                        foreach ($categories as $cat) 
                                        { ?>
                                            <option value="<?php echo $cat['id_categorie'] ?>"><?php echo $cat['nom_categorie'] ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="fichier" class="form-label">Image de l'objet</label>
                                <input class="form-control" type="file" id="fichier" name="fichier" required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Ajouter l'objet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>