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
    <title>Liste objet </title>
</head>
<body>
    <h1>Liste d'objet : </h1>
    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nom objet</th>
                                <th>Categorie_objet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($obj as $ob) { ?>
                            <tr>
                                <td><?php echo $ob['nom_objet'] ?> </td>
                                <td><?php echo $ob['nom_categorie'] ?></td>
                            </tr> 
                            <?php } ?>
                        </tbody>
                    </table>
<h1>Filtre :</h1>
    <form action="Filtre.php" method="post">
        <select name="idc">
            <?php foreach ($cat as $c) { ?>
                <option value="<?php echo $c['id_categorie'] ?>"><?php echo $c['nom_categorie'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Filtrer">
    </form>

</body>
</html>