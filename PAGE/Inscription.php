<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Veuillez entre vos informations : </h1>
    <form action="../TRAITEMENTS/Traitement_inscri.php" method="post">
        <input type="text" name="nom">
        <input type="date" name="date_naissance">
        <input type="email" name="email">
        <input type="text" name="mdp">
        <input type="text" name="genre">
        <input type="text" name="ville">
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>