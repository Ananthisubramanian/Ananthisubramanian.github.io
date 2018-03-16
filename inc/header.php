<?php include('custom_function.php') ;?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?= $desc?>">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="<?= base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- Montseraat google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <!-- PrettyPhoto plugin CSS -->
    <link href="<?= base_url()?>assets/css/prettyPhoto.css" rel="stylesheet" media="screen" title="prettyPhoto main stylesheet" charset="utf-8">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="<?= base_url()?>">
          	<img src="<?= base_url()?>assets/img/serenity-logo.png" alt="logo">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#overview">overview</a></li>
            <li><a href="#location_map">location map</a></li>
            <li><a href="#floor_plans">floor plans & amenities</a></li>
            <li><a href="#ongoing_construction">ongoing construction</a></li>
            <li><a href="#promoter_group">promoter group</a></li>
          </ul>
          <ul class="nav navbar-nav right">
            <li><a href="#contact_us"><img src="<?= base_url()?>assets/img/contacgt.png" alt="contacgt"> Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>