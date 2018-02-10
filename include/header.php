<?php
require 'functions.php';

$PAGE_URL = SITE_URL.substr($_SERVER["REQUEST_URI"], 1) ;

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
    <meta property="og:url" content="<?= $PAGE_URL ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= SITE_URL ?>build/img/facebook.png">
    <title><?= $title ?> &middot; <?= $description ?></title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="build/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="build/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="build/img/favicon-16x16.png">
    <link rel="manifest" href="build/img/site.webmanifest">
    <link rel="mask-icon" href="build/img/safari-pinned-tab.svg" color="#00aae7">
    <link rel="shortcut icon" href="build/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="build/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="build/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="page-<?= $page ?>">
  <nav class="navbar navbar-default" name="top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= SITE_URL ?>">
          <img src="build/img/logo.png" class="hidden-xs hidden-sm">
          <img src="build/img/logo-30.png" class="hidden-lg hidden-md">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#initiativa">Inițiativa</a></li>
          <li class="hidden-xs hidden-sm dropdown">
            <a href="<?= $page != "acasa" ? SITE_URL : "" ?>#despre">Despre</a><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?= SITE_URL . "grupul-de-initiativa.php" ?>">Grupul de initiativa</a></li>
            </ul>
          </li>
          <li class="hidden-md hidden-lg"><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#despre">Despre</a></li>
          <li class="hidden-md hidden-lg"><a href="<?= SITE_URL . "grupul-de-initiativa.php" ?>">Grupul de inițiativă</a></li>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#semneaza">Semnează inițiativa</a></li>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#harta"><?= CAMPANIE_DE_SEMNATURI ? "Situația pe regiuni" : "Puncte de contact" ?></a></li>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#media">Media</a></li>
          <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#comunicate">Comunicate de presă</a></li>
        </ul>
      </div>
    </div>
  </nav>
