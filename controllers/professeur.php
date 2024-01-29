<?php
 require_once '../models/connexion.php';


 if(isset($_POST['ajouter'])){
$numprof=htmlspecialchars($_POST['Numprof']);
$nom=htmlspecialchars($_POST['Nom']);
$prenoms=htmlspecialchars($_POST['Prénoms']);
$tel=htmlspecialchars($_POST['Numéro de téléphone']);
$pass=htmlspecialchars($_POST['Password']);

 }
?>