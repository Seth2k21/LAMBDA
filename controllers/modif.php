<?php
  require_once '../models/connexion.php';

if(isset($_GET['id']) && (!empty($_GET['id']))){
      $_SESSION['id']=$_GET['id'];
      $libmat = $_GET['id'];
 
    $affiche = listetu($libmat);

}



if (isset($_POST['ajouter'])){
    if (!empty($_POST['ass']) && !empty($_POST['cours'])){
        $ass = htmlspecialchars($_POST['ass']);
        $cours= htmlspecialchars($_POST['cours']);
        
        
   
  
    $modif = updateee($ass,$cours,$_SESSION['id']);
    
    echo "<script>alert('Modification effectuée avec succès!'),
    window.location='../views/liste.php';</script>";
} 

else{
  
    echo "<script>alert(''),
    window.location='../views/liste.php';</script>";
}

}



















?>