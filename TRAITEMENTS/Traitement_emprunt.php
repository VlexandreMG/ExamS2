<?php 
include('../INC/Fonction.php');

$nbjour = $_POST['nbjour'];
$id_objet = $_POST['id_objet'];

$lolo = get_date($id_objet);
$valiny = mi_calcul($lolo,$nbjour);
?>