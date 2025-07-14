<?php 
session_start();

include("../INC/Fonction.php");

$chemin ='../ASSETS/IMAGE/';

$taille_max = 120 * 1024 * 1024;// 120 Mo
$fichier_permise = ['Image/jpg','Image/png','Image/jpeg','Image/gif','Image/webp'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fichier'])) 
{
    $file = $_FILES['fichier'];
    if ($file['error'] !== UPLOAD_ERR_OK) 
    {
        die('Erreur lors de l upload : ' . $file['error']);
    }
    if ($file['size'] > $taille_max) 
    {
        die('Le fichier est trop grand');
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo,$file['tmp_name']);
    finfo_close($finfo);

    if (!in_array($mime,$fichier_permise)) 
    {
        die('Type de fichier non autoriser : ' . $mime);
    }

    $originalName = pathinfo($file['name'],PATHINFO_FILENAME);
    $extension = pathinfo($file['name'],PATHINFO_EXTENSION); 

    $Newname = $originalName . '_' . uniqid() . '.' . $extension;

    if (move_uploaded_file($file['tmp_name'],$chemin . $Newname)) 
    {
        // insert_video($Newname,$_SESSION['idUser']);
        header('Location: ../PAGE/Liste_objet.php');
    }
    else 
    {
        echo "Echec de deplacement du fichier";
    }

}
else 
{
    echo "Aucun fichier recu";
}
?>
