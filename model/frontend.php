<?php
require_once 'vendor/autoload.php';

function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT  * FROM `film`');
    return $req;

}




function getPost($id_film)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM `film` WHERE id_film = ?');
    $req->execute(array($id_film));
    $post = $req->fetch();
    return $post;


}




function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
