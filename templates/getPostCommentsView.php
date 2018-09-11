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
                        <h3><strong><?php echo $post['title'] ?>  <br> Liste des commentaires :</strong></h3>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Auteur</th>
                                    <th>Date</th>
                                    <th>Contenu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            while ($data = $comments->fetch())
                            {
                            ?>
                                <tr>
                                    <td><?php echo $data['author']?></td>
                                    <td><?php echo $data['comment_date']?></td>
                                    <td width=""> <?php echo $data['comment']?></td>
                                    <td width="250">
                                    <a href="index.php?action=deleteComment&id=<?php echo $data['id']?>" class="btn btn-danger"> Supprimer</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                $comments->closeCursor(); // Termine le traitement de la requête
                                ?>
                            
                    </div>
                </div>

    </section>
</body>

</html>