<?php 
session_start();

include('../INC/Fonction.php');

$nom = $_POST['nom'];
$date_naissance = $_POST['date_naissance'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];



if(isset($nom) && isset($date_naissace) && isset($email) && isset($mdp) && isset($genre) && isset($ville) )
{
    $membre = get_sign_in($nom,$date_naissance,$email,$mdp,$genre,$ville);
    header('Location: ../PAGE/Login.php');
}
else
{
    header('Location: ../PAGE/Inscription.php?error=1');;
}
?>