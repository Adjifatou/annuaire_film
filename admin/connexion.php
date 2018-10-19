<?php
//ouverture d'une connexion a la base de donnees CONTACT

$objetPdo= new PDO('mysql:host=localhost;dbname=annuaire','root','');


$reponse=$objetPdo->query('SELECT admin, password FROM admin') or die(print_r($objetPdo->errorInfo()));
if((isset($_POST['admin']) AND isset($_POST['password'])))
{
    while($donnees=$reponse->fetch())
    {

        //if(((strcmp($_POST['admin'], $donnees['admin'])==0) AND password_verify($_POST['password'], $donnees['password'])))
        if(($_POST['admin'] == $donnees['admin'] AND $_POST['password'] == $donnees['password']))
        {
            session_start();
            $_SESSION['user']=$donnees['admin'];
            echo ('Success');
            header('location: lister.php');
        } else {
            header('location: index.php');
            echo 'password incorrect';
        }
    }
}

 ?>
