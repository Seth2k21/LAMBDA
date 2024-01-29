<?php
require_once '../models/connexion.php';

if (isset($_POST['connection'])) {
    if (isset($_POST['email']) && isset($_POST['pass'])) {

        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);

        $exist = connectionadmin($email, $pass);

        if ($exist) {
            foreach ($exist as $data) {
                // Ne stockez pas le mot de passe dans la session
                $_SESSION['email'] = $data['email'];

                echo "<script>alert('Connexion réussie'),
                window.location='../views/liste.php';</script>";
                exit; // Assurez-vous de terminer le script après la redirection
            }
        } else {
            echo "<script>alert('Mot de passe ou email incorrects !!!'),
            window.location='../views/login.php';</script>";
            exit; // Assurez-vous de terminer le script après la redirection
        }
    }
}
?>
