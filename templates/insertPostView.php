<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ajouter un article</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

<!-- Barre de navigation -->
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


<form action="index.php?action=addPost" method="post" class="form-horizontal">
<fieldset>




<div class="form-group">
  <label class="col-md-4 control-label" for="title">Titre</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Titre de l'article" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="content">Contenu</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Ajouter">Ajouter un article</label>
  <div class="col-md-4">
    <button data-toggle="modal" data-target="#exampleModal" id="Ajouter" name="Ajouter"  type="submit" class="btn btn-success" value="Ajouter">Ajouter </button>
  </div>
</div>
<div class="modal fade" id="approuver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</fieldset>
</form>

</body>


