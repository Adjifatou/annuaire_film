<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="couleurssss">
  <center>
<h1>SénéMania</h1>
</center>
<div class="container">
  <form method="POST">
    <input type="text" name="nom_film" placeholder="Nom film">
    <input type="text" name="type" placeholder="Type">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="an_sortie" placeholder="Annee de sortie">
    <input type="text" name="genre" placeholder="Genre">
    <input type="text" name="realisateur" placeholder="le realisateur">
    <input type="text" name="photo_film" placeholder="lien photo film">
    <input type="submit" name="valide" value="INSERT">

  </form>

  <?php
  //ouverture d'une connexion a la base de donnee
  $objetPdo = new PDO('mysql:host=localhost;dbname=annuaire','root','');

  //preparation requete

  $pdoStat = $objetPdo->prepare('INSERT INTO film(nom_film, type, description, an_sortie, genre, realisateur, photo_film) VALUES (:nom_film, :type, :description, :an_sortie, :genre, :realisateur, :photo_film)');

  //on lie les marquers

  $pdoStat->bindParam("nom_film",$_POST['nom_film']);
  $pdoStat->bindParam("type",$_POST['type']);
  $pdoStat->bindParam("description",$_POST['description']);
  $pdoStat->bindParam("an_sortie",$_POST['an_sortie']);
  $pdoStat->bindParam("genre",$_POST['genre']);
  $pdoStat->bindParam("realisateur",$_POST['realisateur']);
  $pdoStat->bindParam("photo_film",$_POST['photo_film']);


  //execution
  $insertIsok = $pdoStat->execute();

  if ($insertIsok)
  {
    $message = 'succes';
  }
  else
  {
    $message = 'Erreur';
  }
   ?>

  <p>
    <?php
      echo "$message";
     ?>
  </p>


</div>

</body>
</html>
