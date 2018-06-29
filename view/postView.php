<?php ob_start(); ?>
<?php

?>
    <div class="container">
        <div class="row">
            <article>
            <h4><?php echo $post['title'] ?></h4>
            <p><?php echo $post['creation_date']?></p>
            <p><?php echo $post['content']?></p>
            <h4>Commentaires :</h4>
            </article>
        </div>
        </div>

<?php

// Termine le traitement de la requête

?>


<!-- Affiche les commentaires correspondants à l'article -->
<?php

while ($data = $comments->fetch())
{
?>
    <div class="container">
        <div class="row">
            <article>
            <h6>Nom : <?php echo $data['author']?> Date : <?php echo $data['comment_date']?></h6>
            <p><?php echo $data['comment']?></p>
            </article>
        </div>
        </div>

<?php
}
// Termine le traitement de la requête

?>
<div class="container">
<form action="index.php?action=addComment&id=<?php echo $_GET['id'] ?>" method="post">
  <div class="form-group">
    <label for="author">Auteur</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Entrer votre nom">
  </div>
  <div class="form-group">
    <label for="comment">Commentaire</label>
    <input type="text" class="form-control" id="comment" name="comment" placeholder="Entrer votre commentaire">
  </div>
  <input type="submit" value="Envoyer"/>
</div>
</form>
<?php $content= ob_get_clean(); ?>

<?php require('view/template.php'); ?>