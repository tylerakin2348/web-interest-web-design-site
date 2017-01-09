<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tyler Akin Web Design</title>
  <link href="<?php bloginfo('template_directory');?>/assets/css/normalize.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,700" rel="stylesheet" type="text/css">

</head>
<body>
  <header id="top-header">
    <a href="index.php">
      <img class="logoReal" src="<?php bloginfo('template_directory');?>/assets/img/Web%20Site%20Design%20Logo.png">
    </a>
    <div class="blog-header">
      <!-- Site Title and Tagline can be inserted here. -->
    </div>
    <a href="#" id="show-nav">Show Navigation</a>
    <nav class="main-navigation">
      <!-- <ul class="menu">

      </ul> -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

  </header>
