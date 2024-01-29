<?php
require_once '../models/connexion.php';

if (isset($_POST['ajouter'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['datenaiss']) &&
        !empty($_POST['sexe']) && !empty($_POST['adresse']) && !empty($_POST['email']) &&
        !empty($_POST['num']) && !empty($_POST['pass']) && !empty($_POST['confpass'])
    ) {

        $nom = htmlspecialchars($_POST['nom']);
        $prenoms = htmlspecialchars($_POST['prenoms']);
        $datenaiss = htmlspecialchars($_POST['datenaiss']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $numtelephone = htmlspecialchars($_POST['num']);
        $password = htmlspecialchars($_POST['pass']);
        $confpass = htmlspecialchars($_POST['confpass']);

        
        $exist = afficheEmail($email);

        if ($exist) {
            echo "<script>alert('L\'email existe déjà!'),
            window.location='../views/etudiants.php';</script>";
        } else {
            if ($password === $confpass) {
               
                ajouteretudiants($nom, $prenoms, $datenaiss, $sexe, $adresse, $email, $numtelephone, sha1($password));

                echo "<script>alert('Inscription effectuée avec succès!')</script>";
            } else {
                echo "<script>alert('Les mots de passe ne correspondent pas!'),
                 window.location='../views/etudiants.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Remplissez tous les champs!'), window.location='../views/etudiants.php';</script>";
    }
}
?>
