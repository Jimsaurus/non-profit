<?php

/*
	Template Name: Home Page
*/

//Custom Fields
$hero_title = get_post_meta(6, 'hero_title', true);
$hero_tagline = get_post_meta(6, 'hero_tagline', true);

//get the header
get_header();  ?>
<main class="home-wrapper">

<!-- =============================================
HERO  
==================================================-->
	<section class="hero">
		<h1><?php echo $hero_title; ?></h1>
		<h2><?php echo $hero_tagline; ?></h2>
		<i class="fa fa-angle-double-down"></i>

	</section>
</main><!--home-wrapper-->


<?php get_footer(); ?>