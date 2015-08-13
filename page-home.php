<?php

/*
	Template Name: Home Page
*/

//Custom Fields
	//HERO
	$hero_title = get_post_meta(6, 'hero_title', true);
	$hero_tagline = get_post_meta(6, 'hero_tagline', true);
	//ABOUT
	$about_title = get_post_meta(6, 'about_title', true);
	$about_tagline = get_post_meta(6, 'about_tagline', true);
	$about_text = get_post_meta(6, 'about_text', true);

//get the header
get_header();  ?>
<main class="home-wrapper">

<!-- =============================================
HERO  
==================================================-->
	<section class="hero">
		<div class="hero-wrapper">
			<h2><?php echo $hero_title; ?></h2>
			<h3><?php echo $hero_tagline; ?></h3>
			<a href=""><i class="fa fa-angle-double-down"></i></a>
		</div><!-- hero-wrapper-->
	</section><!--hero-->

<!-- =============================================
ABOUT
==================================================-->
	
	<section class="about">
		<div class="about-wrapper">
			<h4><?php echo $about_title; ?></h4>
			<p class="lead"><?php echo $about_tagline; ?></p>
			<p class="about-text"><?php echo $about_text; ?></p>
			
		</div><!--about-wrapper-->
	</section><!--about-->

















</main><!--home-wrapper-->

<?php get_footer(); ?>