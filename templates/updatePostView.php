<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier un article</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>
      tinymce.init({
          selector:'textarea',
          language_url: 'js/tinymce/langs/fr_FR.js',
          language: 'fr_FR',
          branding: false,
          height: '300'
      });
  </script>
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
           
                    <h3><strong>Modification d'un article : </strong> </h3>
                    <form action="index.php?action=updatePost&id=<?php echo $post['id']?>" method="post" class="form-horizontal">
                            <fieldset>
                            
                        
                            <div class="form-group">
                              <label class="control-label" for="title">Titre</label>  
                              <div class="">
                              <input id="title" name="title" type="text" placeholder="Titre de l'article" class="form-control input-md" value="<?php echo $post['title']?>"/>
                            
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              <label class="control-label" for="content">Contenu</label>
                              <div class="">                     
                                <textarea class="form-control" id="content" name="content"><?php echo $post['content']?></textarea>
                              </div>
                            </div>
                            
                            
                            <div class="form-group">
                              
                              <div class="">
                                <input id="Modifier" name="Modifier"  type="submit" class="btn btn-primary" value="Modifier"/>
                              </div>
                            </div>
                            
                            </fieldset>
                            </form>
                   
                </div>
        </section>

</body>

    </html>