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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="wrappers">
            <h1>Billet simple pour l'<span class="alaska">Alaska</span></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#articles">Articles</a></li>
                    <li><a href="index.php/#contact">Contact</a></li>
                    <li><a href="#">Administration</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="fond">
        <div class="container admin">
            <div class="row">
                <h3><strong>Liste des articles </strong>  <a href="" class=" btn btn-success "> Ajouter + </a> </h3>
             
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
                            <a href="index.php?action=post&id=<?php echo $data['id']?>" class=" btn btn-success"> <span class="glyphicon glyphicon-eye-open"></span> Voir</a>
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
                                <tr>
                                    <td>Jean</td>
                                    <td>21/01/1998</td>
                                    <td width=""> Ceci est un test de commentaires !</td>
                                    <td width="250">
                                    <a href="" class="btn btn-primary"> Modifier</a>
                                    <a href="" class="btn btn-danger"> Supprimer</a>
                                    </td>
                                </tr>
                    </div>
                </div>


