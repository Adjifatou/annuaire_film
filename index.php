
<?php

require('controller/frontend.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id_film']) && $_GET['id_film'] > 0) {
            post();
        }
        else {
            echo 'Erreur : ';
        }
    }
}
else {
    listPosts();
}