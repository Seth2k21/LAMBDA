
<?php
require '../controllers/fil.php';

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
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color:yellow;" href="../index.php"><i class="fa fa-home"></i>&nbsp;Accueil</a></li>
                      
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
        <h1 style="text-align:center;">INSCRIPTION DES ETUDIANTS! </h1>
        <h2 style="color:black; text-align: center">SIL</h2>
         <form action="../controllers/etudiants.php" method="post">

      <div class="mb-3">
         <label class="form-label">Nom</label>
         <input type="text" class="form-control" name="nom">
      </div> 

       <div class="mb-3">
         <label  class="form-label">Prénoms</label>
         <input type="text" class="form-control" name="prenoms" >
      </div>  
           
      <div class="mb-3">
              <label  class="form-label">Date de naissance</label>
             <input type="date" class="form-control" name="datenaiss" >
         </div> 

         <label  class="form-label">Sexe</label>
      <div class="mb-3">
         <label> <input type="radio" name="sexe" value="M"> Masculin  </label>
         <label>  <input type="radio" name="sexe" value="F"> Féminin </label>
     </div> 

          <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" >
           </div>

           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" >
           </div>

     <div class="mb-3">
          <label  class="form-label">Numéro de téléphone</label>
          <input type="number" class="form-control" name="num" >
      </div>  

      
     <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" class="form-control" name="pass">
    </div>

    <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe</label>
         <input type="password" class="form-control" name="confpass">
    </div>


    
  <button type="submit" class="btn btn-primary" name ="ajouter">Submit</button>
</form>
</div>

            
            
            
            
            
            
            
            </div>
            </div>
        </div>
    </div>


    <div class="footer-basic">
        <footer>
            <p class="copyright mt-5 text-center">Company AMCRL6 © 2023 @AKPLA</p>
        </footer>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
