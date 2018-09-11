<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>espace d'administration</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
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



    <section id="fond">
    <div class="container admin">
        <div class="row">
            <h3><strong>Liste des articles </strong>  <a href="index.php?action=addPost" class=" btn btn-success "> Ajouter + </a> </h3>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nom de l'article</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php

                while ($data = $posts->fetch())
                {
                    ?>
                    <tr>
                        <td><?php echo $data['title'] ?></td>
                        <td><?php echo $data['creation_date']?></td>
                        <td width="420">
                            <a href="index.php?action=post&id=<?php echo $data['id']?>" class=" btn btn-success"> Voir</a>
                            <a href="index.php?action=getUpdatePost&id=<?php echo $data['id']?>" class="btn btn-primary"> Modifier</a>
                            <a href="index.php?action=deletePost&id=<?php echo $data['id']?>" class="btn btn-danger"> Supprimer</a>
                            <a href="index.php?action=getPostComments&id=<?php echo $data['id']?>" class="btn btn-info"> Commentaires</a>
                        </td>
                    </tr>

                    <?php
                }

                $posts->closeCursor(); // Termine le traitement de la requête

                ?>

                </tbody>
            </table>
        </div>
        <div class="row">
            <h3><strong>Commentaires remontées : </strong></h3>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Contenu</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($data = $comments->fetch())
                {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($data['author'])?></td>
                        <td><?php echo htmlspecialchars($data['comment_date'])?></td>
                        <td width=""><?php echo htmlspecialchars($data['comment'])?></td>
                        <td width="250">
                            <a data-toggle="modal" data-target="#approuver<?php echo htmlspecialchars($data['id'])?>"  class="btn btn-success"> Approuver</a>
                            <a data-toggle="modal" data-target="#supprimer<?php echo htmlspecialchars($data['id'])?>"  class="btn btn-danger"> Supprimer</a>
                        </td>
                        </div>                
                            <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="approuver<?php echo htmlspecialchars($data['id'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo htmlspecialchars($data['id'])?>">Approuver ce commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Êtes-vous sûr ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <a href="index.php?action=approveComment&id=<?php echo $data['id']?>"  class="btn btn-primary">Oui</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="supprimer<?php echo htmlspecialchars($data['id'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo htmlspecialchars($data['id'])?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo htmlspecialchars($data['id'])?>">Supprimer ce commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Êtes-vous sûr ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <a href="index.php?action=deleteComment&id=<?php echo $data['id']?>"  class="btn btn-primary">Oui</a>
      </div>
    </div>
  </div>
</div>
                          
                            
                            
  
    </tr>
<?php
}
$comments->closeCursor();

?>
      
</div>


</body>
</html>
