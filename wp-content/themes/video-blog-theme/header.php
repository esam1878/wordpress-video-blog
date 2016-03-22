<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,700,600,500,200,300,800' rel='stylesheet' type='text/css'>
  <title>UnitedVidz</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container nav-container-fix">
<div class="row logo-row-fix">
<nav class="nav-bar col-xs-12"><a href="http://localhost:8888" class="logo"> <img src="http://localhost:8888/wp-content/uploads/2016/03/Untitled-1-1.png"/>UNITED VIDEOS</a> </nav>


    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
</div>
</div>
