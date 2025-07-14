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

    function get_sign_in($nom,$date,$genre,$email,$ville,$mdp)
    {
        $sql = "INSERT INTO membre (nom, date_naissance, genre, email, ville, mdp) VALUES ('%s','%s','%s','%s','%s','%s')";
        $requete = sprintf($sql,$nom,$date,$genre,$email,$ville,$mdp);
        $requette  = mysqli_query(dbconnect(),$requete);
    }
    
?>