<?php
require_once 'vendor/autoload.php';
require('model/frontend.php');

function listPosts()
{
    $posts = getPosts();
   
    return $posts;


  //  require('view/frontend/listPostsView.twig');
}


function post()
{
    $post = getPost($_GET['id_film']);
  
return $post;
    //require('view/frontend/postView.php');
}



if (!isset(($_GET['id_film'] ))) {

$loader = new Twig_loader_Filesystem('view/frontend');
    $twig= new Twig_Environment($loader,[
        'cache' =>false, //__DIR__.'/temp'
    ]);


    echo $twig->render("listPostsView.twig",['req'=>getPosts()]);

}
else

{

$loader = new Twig_loader_Filesystem('view/frontend');
    $twig= new Twig_Environment($loader,[
        'cache' =>false, //__DIR__.'/temp'
    ]);
        

        echo $twig->render("PostView.twig",['post'=>post()]);
               
}