<?php
//ouverture d'une connexion a la base de donnees CONTACT

$objetPdo= new PDO('mysql:host=localhost;dbname=annuaire','root','');


//preparation requettes

$pdoStat = $objetPdo -> prepare('SELECT * FROM film');

//execute requettes

$executeIsok = $pdoStat -> execute();

//recuperation des films

$mesfilm = $pdoStat ->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="public/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">   
  <!-- Brand -->
  <a class="navbar-brand" href="../index.php">Sénémania</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">les realisateurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">les acteurs</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">les genres</a>
      </li> 
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="lister.php">supprimer un film</a>
          <a class="dropdown-item" href="ajout.php">ajouter un film</a>
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
    </ul>
  </div> 
</nav>

    <center><h1>films à supprimer</h1></center>

        <br> 
        <br> 
      <div class="row">
      <?php foreach ($mesfilm as $mesfilm): ?>
      
      <div class="col-md-3 col-sm-6 mb-4">
        
        <img src="<?= $mesfilm['photo_film'] ?>">
        <br> 
        <?= $mesfilm['nom_film'] ?>
        <br> 
        <a href="supprimer.php? nummesfilm=<?= $mesfilm["id_film"]?>">Supprimer</a> 
      </div>
        <br> 
        <br> 
    <?php endforeach; ?>
 </div>
   
  </body>
</html>
