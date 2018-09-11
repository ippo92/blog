<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
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

    <section id="main-image">
        <div class="wrapper">
            <h2>Découvrer <br> <strong>un roman unique.</strong></h2>
            <a href="/blog/public/index.php?action=listPosts" id="btn" class="btn btn-primary">Je veux le lire !</a>
        </div>
        <div class="clear"></div>
    </section>

    <section id="articles">
       <div class="wrapper">
            <article style="background-image:url('../public/images/chap3.jpg');">
                <div class="overlay">
                    <h4><?php ?>Chapitre 1</h4>
                    <a href="/blog/public/index.php?action=post&id=1" id="btn1" class="btn btn-success">Lire le chapitre</a>
                </div>
            </article>
            <article style="background-image:url('../public/images/chap4.jpg')">
                    <div class="overlay">
                        <h4>Chapitre 2</h4>
                        <a href="/blog/public/index.php?action=post&id=2" id="btn1" class="btn btn-success">Lire le chapitre</a>
                    </div>
            </article>
       </div>
       <div class="clear"></div>
    </section>

    <section id="contact">
        <div class="wrapper">
            <h3>Me contacter</h3>
            <p>Si vous souhaiter me contacter à la suite d'un problème, d'une suggestion ou tous autre demande, vous pouvez passer par ce formulaire!</p>

                    <form  method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>" sclass="form-horizontal">
                            <fieldset>
                            <div class="d-flex justify-content-center align-items-center container">
                              <label class="col-md-4 control-label" for="name">nom</label>  
                              <div class="col-md-4">
                              <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md">
                                
                              </div>
                            </div>
                            
                            <div class="d-flex justify-content-center align-items-center container">
                              <label class="col-md-4 control-label" for="mail">email</label>  
                              <div class="col-md-4">
                              <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                
                              </div>
                            </div>
                            
                            <div class="d-flex justify-content-center align-items-center container">
                              <label class="col-md-4 control-label" for="Message">Votre message</label>
                              <div class="col-md-4">                     
                                <textarea class="form-control" id="message" name="message"></textarea>
                              </div>
                            </div>
                            
                            <div class="d-flex justify-content-center align-items-center container">
                              <label class="col-md-4 control-label" for="envoie"></label>
                              <div class="col-md-4">
                                <input type="submit" value="Envoyer" id="envoie" name="envoie" class="btn btn-success"></input>
                              </div>
                            </div>
                            
                            </fieldset>
                            </form>
                            
    

        </div>
        <div class="clear"></div>

    </section>

    <footer>
        <div class="wrapper">
            <h1>Billet simple pour l'<span class="alaska">Alaska</span></h1>
            <div class="credit">Projet réalisé par Mohamed salim Gourari.</div>
        </div>
    </footer>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js"></script>
</body>
</html>

