<?php 
session_start();

include('../INC/Fonction.php');

$nom = $_POST['nom'];
$date_naissance = $_POST['date_naissance'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];



if($nom != null || $date_naissace != null || $email != null || $mdp != null || $genre != null || $ville != null )
{
    $membre = get_sign_in($nom,$date_naissance,$genre,$email,$ville,$mdp);
    header('Location: ../PAGE/Login.php');
}
else
{
    header('Location: ../PAGE/Inscription.php?error=1');;
}
?>