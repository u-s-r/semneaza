<?php
require 'functions.php';

$data = get_data();
?>
<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inițiativa cetățenească de modificare a Constituției">
    <meta name="author" content="USR">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:title" content="Fără penali în funcții publice">
    <meta property="og:description" content="Inițiativa cetățenească de modificare a Constituției">
    <meta property="og:image" content="<?= SITE_URL ?>build/img/facebook.png">
    <link href="build/img/favicon.ico" rel="apple-touch-icon">
    <link href="build/img/favicon.ico" rel="icon">
    <title>Fără penali în funcții publice &middot; Inițiativa cetățenească de modificare a Constituției</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="build/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="page-<?= $page ?>">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= SITE_URL ?>">
          <img src="build/img/logo.png" alt="USR">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="<?= $page != "acasa" ? SITE_URL : "" ?>#despre" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Despre  <span class="glyphicon glyphicon-menu-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?= $page != "grupul-de-initiativa" ? SITE_URL . "/grupul-de-initiativa.php" : "" ?>">Grupul de initiativa</a></li>
            </ul>
          </li>
          <?php if (CAMPANIE_DE_SEMNATURI) { ?>
            <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#semneaza">Semnează inițativa</a></li>
            <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#harta">Situația pe regiuni</a></li>
          <?php } ?>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#media">Media</a></li>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#comunicate">Comunicate de presă</a></li>
        </ul>
      </div>
    </div>
  </nav>
