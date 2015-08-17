<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300,100,400italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); 

?>>

<header class="main-nav">
  <div class="nav-wrapper">
	<h1>
		<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
		<!-- if user uploaded an image -->
			<img src="http://localhost:8888/bootcamp-projects/week-7-project/wp-content/uploads/2015/08/logo.png" alt="">

		</a>
	</h1>
	
	<nav>
		<?php wp_nav_menu( array(
		  'container' => false,
		  'theme_locations' => 'primary'
		)); ?>
	</nav>
  </div> <!-- /.container -->
</header><!--/.main-nav-->

