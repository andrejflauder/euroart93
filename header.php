<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
          <?php
          bloginfo('description');
          ?>
  </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <?php wp_head();?>


  <!-- =======================================================
    Template Name: Stanley
    Template URL: https://templatemag.com/stanley-bootstrap-freelancer-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

<header>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
          <?php
          bloginfo('name');
          ?>
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <?php
            if(has_nav_menu('primary-menu')){
              wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
              ));
            }
          ?>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</header>