
<?php ob_start(); ?>
<h1>SénéMania</h1>



<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
         <img src="<?= htmlspecialchars($data['photo_film']) ?>">
        <h3>
     
            <em><?= $data['nom_film'] ?></em>
        </h3>

        
        <p>
            <em><a href="index.php?action=post&amp;id_film=<?= $data['id_film'] ?>">Detail Film</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>