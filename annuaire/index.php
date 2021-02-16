<?php 
require_once './vendor/autoload.php';



function film(){

	$bdd = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'root', '');

$film=$bdd->query('SELECT * FROM `film`  ');
return $film;
}


$loader = new Twig_loader_Filesystem(__DIR__.'/model');
	$twig= new Twig_Environment($loader,[
		'cache' =>false, //__DIR__.'/temp'
	]);

	echo $twig->render("home.twig",['film'=>film()]);

//   while ($reponse=$bob->fetch())
// {

// 	echo $reponse['id_film'] .' '.$reponse['nom_film'].' '.$reponse['type'] . '<br />';
// }

// $bob->closeCursor();


