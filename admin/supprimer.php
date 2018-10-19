<?php
//ouverture d'une connexion a la base de donnees CONTACT

$objetPdo= new PDO('mysql:host=localhost;dbname=annuaire','root','');

//preparation requettes

$pdoStat = $objetPdo -> prepare('DELETE FROM film WHERE id_film =:num LIMIT 1');

//liason du parametre nomme
$pdoStat -> bindvalue(':num', $_GET['nummesfilm']);

//execution
$executeIsok = $pdoStat -> execute();


if ($executeIsok)
{
  $message ='film bien supprime';
}else {
  $message = 'film pas supprime';
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Supprimer</h1>
    <p><?=$message?></p>
  </body>
</html>
