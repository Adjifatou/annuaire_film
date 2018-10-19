

<?php ob_start(); ?>
<p><a href="index.php">Retour à la liste des films</a></p>

<h1> <?= htmlspecialchars($post['nom_film']) ?></h1>


<div class="news">
    <h3>
       
        
        <img src="<?=$post['photo_film'] ?>">
    </h3>
    <h2>Description</h2>
    <p>
        <?= nl2br(htmlspecialchars($post['description'])) ?>

        <p>Date de sortie : <?=$post['an_sortie'] ?></p>
         <p>Genre : <?=$post['genre'] ?></p>
          <p>realisateur : <?=$post['realisateur'] ?></p>
         	

    </p>
</div>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
