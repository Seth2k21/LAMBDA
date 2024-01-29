<?php
require '../controllers/affichetud.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>modele1</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height:80px;background-color:green;color:red;">
            <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-globe"></i>&nbsp;Gprésences</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:yellow;" href=""><i class="fa fa-home"></i>&nbsp;Accueil</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:yellow;" href="listeadm.php"><i class="fa fa-wpexplorer"></i>&nbsp;Assiduité</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" style="color:yellow;" href="logout.php"><i class="fa fa-sign-in"></i>&nbsp;Déconnexion</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    
    <div style="margin-top: 50px;">
        <div class="">
            <div class="row">
                <div class="col-10 col-md-10 offset-1" style="background-color: #c6c6c6;min-height: 500px;">

     <div class="container mt-4">
        <h1 class="text-center">LISTE DES ETUDIANTS </h1>

        <table class="table mt-4 text-center">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">sexe</th>
      <th scope="col">Tel</th>
      <th scope="col">statuts</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($affiche as $affiches): ?>
    <tr>
       <th scope="row"> <input type="hidden" <?= $affiches['matri'] ?>></th>
      <td><?= $affiches['nom'] ?></td>
      <td><?= $affiches['prenoms'] ?></td>
      <td><?= $affiches['sexe'] ?></td>
      <td><?= $affiches['numtelephone'] ?></td>
      <td><a href="modif.php?id=<?= $affiches['matri']  ?>"><button type="button" class="btn btn-warning">Présence ou Absence</button></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
       
</div>

                 
            
            </div>
            </div>
        </div>
    </div>


    <div class="footer-basic">
        <footer>
            <p class="copyright mt-5 text-center">Company Name © 2023 @AKPLA</p>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
