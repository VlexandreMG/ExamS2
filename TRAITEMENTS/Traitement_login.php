<?php 
    session_start();

    include('../INC/Fonction.php');

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $membre = verifi_login($email,$mdp);

    if($membre['email'] == null || $membre['mdp'] == null)
    {
        header('Location: ');
    }
    else
    {
        header('');
    }
    
?>