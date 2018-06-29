<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog en php</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>

<body>

<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
</nav>
<body class="container-fluid">
<h1 align="center">Blog en php!</h1>


<form action="index.php?action=addPost" method="post" class="form-horizontal">
<fieldset>


<legend>Ajouter un article</legend>


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
    <input id="Ajouter" name="Ajouter"  type="submit" class="btn btn-success" value="Ajouter"/>
  </div>
</div>

</fieldset>
</form>

</body>


