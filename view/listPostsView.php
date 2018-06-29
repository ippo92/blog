<?php ob_start(); ?>
<?php

while ($data = $posts->fetch())
{
?>
    <div class="container">
        <div class="row">
            <article>
            <h4><?php echo $data['title'] ?></h4>
            <p><?php echo $data['creation_date']?></p>
            <p><?php echo $data['content']?></p>
            <a href="index.php?action=post&id=<?php echo $data['id']?>"<button type="button" class="btn btn-primary">Lire la suite!</button></a>
            </article>
        </div>
        </div>
<?php
}

$posts->closeCursor(); // Termine le traitement de la requête

?>
<?php $content = ob_get_clean(); ?>

<?php require('view\template.php'); ?>
