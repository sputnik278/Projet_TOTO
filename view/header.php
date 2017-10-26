<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- do not forget to -> https://validator.w3.org/ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Liste des etudian de Webforce3">
    <meta name="description" content="Site web evaluation">
    <meta name="note" CONTENT="Sorry still under construction">
    <meta name="subject" CONTENT="Web TOTO">
    <meta name="operator" CONTENT="Web TOTO !">
    <meta name="author" content="Web TOTO">
    <meta name="copyright" content="2017 Web TOTO !">
    <meta name="revisit-after" content="30 days">
    <meta http-equiv="expires" content="never">
    <meta name="distribution" content="global">
    <meta name="robots" content="all">
    <meta name="rating" content="general">
    <meta name="creation_date" CONTENT="2017-09-01">
  
    <!--CSS local-->
    <!--<link rel="stylesheet" type="text/css" href="lib/normalize.css">-->
    <!--<link rel="stylesheet" type="text/css" href="lib/reset.css">-->
    <!--<link rel="stylesheet" type="text/css" href="lib/jquery-ui/jquery-ui.min.css">-->
    <!--<link rel="stylesheet" type="text/css" href="lib/jquery-ui/jquery-ui.structure.min.css">-->
    <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!--CDN-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <title>Web TOTO</title>
</head>
<body>
<?php
/* - view/header.php :
  * mettre en place un menu en haut de page (bootstrap est pas mal ^^) avec les liens suivants :
    ** Home => index.php
    ** Toutes les sessions => index.php
    ** Toutes les étudiants => list.php
    ** Ajout d'un étudiant => add.php */
?>
    <nav>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/index.php">Toutes les sessions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/list.php">Touts les étudiants</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/add.php">Ajout d'un étudiant</a>
  </li>
</ul>
</nav>
<?php
/* -- Part 6 = recherche --
-----------------------------
  
- view/header.php :
  * dans la barre de menu, ajouter un formulaire permettant d'effectuer une recherche
    Ce formulaire renvoie sur list.php avec le mot recherchée en GET
  
- public/list.php :
  * récupérer le paramètre GET contenant le mot recherché
  * si l'ID est fourni :
    ** modifier la requête pour filtrer sur le mot recherché dans les champs textuels suivants :
      nom/prénom/email/ville de l'étudiant
    ** afficher "x résultat(s) pour le mot XX" avant le tableau (<table>) des étudiants
*/
?>