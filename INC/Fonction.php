<?php  
    require('Connexion.php');

    function verifi_login($email,$mdp)
    {
        $base = connexion();

        $prompt = "SELECT * FROM b_membre WHERE email = '%s' AND mdp = '%s'";
        $prompt = sprintf($prompt,$email,$mdp);

        $result = mysqli_query($base,$prompt);

        $retour = mysqli_fetch_assoc($result);

        return $retour;
    }

    function get_sign_in($nom,$date,$genre,$email,$ville,$mdp)
    {
        $sql = "INSERT INTO b_membre (nom, date_naissance, genre, email, ville, mdp) VALUES ('%s','%s','%s','%s','%s','%s')";
        $requete = sprintf($sql,$nom,$date,$genre,$email,$ville,$mdp);
        $requette  = mysqli_query(dbconnect(),$requete);
    }

    function big_view() {
        $base = connexion();

        $prompt =
        "CREATE OR REPLACE v_bigview AS 
        SELECT * from b_membre mb
        JOIN b_objet ob ON mb.id_membre = ob.id_membre
        JOIN b_images_objet iob ON ob.id_objet = iob.id_objet
        JOIN b_categorie_objet catob ON ob.id_categorie = catob.id_categorie
        JOIN b_emprunt em ON ob.id_objet = em.id_objet";
    }

    function get_liste_objet() {
        $base = connexion();

        $prompt = 
        "SELECT * FROM b_objet ob
        JOIN b_categorie_objet cob ON ob.id_categorie = cob.id_categorie
        ORDER BY ob.nom_objet ASC";

        $result = mysqli_query($base,$prompt);

        $retour = array();

        while ($retour1 = mysqli_fetch_assoc($result)) 
        {
            $retour[] = $retour1;
        }

        return $retour;
    }

    function get_liste_categorie()
    {
       $base = connexion();
       
       $prompt = "SELECT * FROM b_categorie_objet";

       $result = mysqli_query($base,$prompt);

       $retour = array();

       while ($retour1 = mysqli_fetch_assoc($result)) 
       {
           $retour[] = $retour1;
       }

       return $retour;
    }

    function ajouter_image_objet($id_objet,$chemin_img)
    {
        $base = connexion();

        $prompt = "INSERT INTO b_images_objet(id_objet,nom_image) VALUES('%s','%s')";
        $prompt = sprintf($prompt,$id_objet,$chemin_img);

        mysqli_query($base,$prompt);        
    }

    function get_id_objet($nom)
    {
        $base = connexion();

        $prompt = "SELECT id_objet FROM b_objet WHERE nom_objet = '%s' ";
        $prompt = sprintf($prompt,$nom);

        $result = mysqli_query($base,$prompt);

        $retour = mysqli_fetch_assoc($result);

        return $retour['id_objet'];
    }

    function ajouter_objet($nom_o,$id_c,$idU,$chemin_img)
    {
        $base = connexion();

        $prompt = "INSERT INTO b_objet(nom_objet,id_categorie,id_membre) VALUES('%s','%s','%s')";
        $prompt = sprintf($prompt,$nom_o,$id_c,$idU);

        mysqli_query($base,$prompt);
        
        ajouter_image_objet(get_id_objet($nom_o),$chemin_img);
    }

    function get_liste_objet_filtrer_categorie($id_categorie) {
        $base = connexion();

        $prompt = 
        "SELECT * FROM b_objet ob
        JOIN b_categorie_objet cob ON ob.id_categorie = cob.id_categorie
        WHERE cob.id_categorie = %s
        ORDER BY ob.nom_objet ASC";

        $prompt = sprintf($prompt,$id_categorie);

        $result = mysqli_query($base,$prompt);

        $retour = array();

        while ($retour1 = mysqli_fetch_assoc($result)) 
        {
            $retour[] = $retour1;
        }

        return $retour;
    }
    
?>