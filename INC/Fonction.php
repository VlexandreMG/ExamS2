<?php  
    require('Connexion.php');

    function verifi_login($email,$mdp)
    {
        $base = connexion();

        $prompt = "SELECT * FROM membre WHERE email = '%s' AND mdp = '%s'";
        $prompt = sprintf($prompt,$email,$mdp);

        $result = mysqli_query($base,$prompt);

        $retour = mysqli_fetch_assoc($result);

        return $retour;
    }
?>