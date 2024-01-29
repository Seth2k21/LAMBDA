<?php
 require_once '../models/connexion.php';


 if(isset($_POST['ajouter'])){
$codmat=htmlspecialchars($_POST['Codmat']);
$libmat=htmlspecialchars($_POST['Libmat']);
 }
?>