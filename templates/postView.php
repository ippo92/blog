<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style2.css">
</head>
<body>

<header>
    <div class="wrappers">
        <h1>Billet simple pour l'<span class="alaska">Alaska</span></h1>
        <nav>
            <ul>
                    <li><a href="/blog/public/index.php">Accueil</a></li>
                    <li><a href="/blog/public/index.php?action=listPosts">Articles</a></li>
                    <li><a href="/blog/public/index.php#contact">Contact</a></li>
                    <li><a href="/blog/public/index.php?action=connection">Se connecter</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container-fluid">
    <h3 align="center"><?php echo $post['title'] ?></h3>
    <p><?php echo $post['content']?>.</p>
</div>
<h3>Commentaires :</h3>

<div class="container-fluid">
    <?php

while ($data = $comments->fetch())
{
?>
    <div class="row">
        <article>
            <p>Nom : <?php echo htmlspecialchars($data['author'])?> Date : <?php echo htmlspecialchars($data['comment_date'])?> <button type="button" data-toggle="modal" data-target="#confirmation<?php echo htmlspecialchars($data['id'])?>"  class="btn btn-link"> Signaler</button> </p>
            <p><?php echo htmlspecialchars($data['comment'])?></p>
        </article>
    </div>

<div class="modal fade" id="confirmation<?php echo htmlspecialchars($data['id'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo htmlspecialchars($data['id'])?>">Signaler le commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Êtes-vous sûr ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
        <a href="index.php?action=reportComment&id=<?php echo $data['id']?>"  class="btn btn-primary">Oui</a>
      </div>
    </div>
  </div>
</div>
<?php
}
$comments->closeCursor();

?>
</div>
<h3>Envoyer un commentaire</h3>
<div class="container-fluid">
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
    </form>
</div>



</body>

</html>
