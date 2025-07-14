<?php 
    ini_set('display_errors', "0"); 
if ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
    if($_GET['error'] == 1)
    {
        echo "Veuillez remplir le formulaire correctement.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="../TRAITEMENTS/Traitement_login.php" method="post">
        <input type="email" name="email">
        <input type="password" name="mdp">
        <input type="submit" value="Connecter">
    </form>

    <a href="Inscription.php">Inscription</a>

</body>
</html>