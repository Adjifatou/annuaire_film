<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Quoi de neuf docteur: ' . $e->getMessage());

}

$bob=$bdd->query('SELECT * FROM `film`  ');

  while ($reponse=$bob->fetch())
{

	echo $reponse['id_film'] .' '.$reponse['nom_film'].' '.$reponse['type'] . '<br />';
}

$bob->closeCursor();


