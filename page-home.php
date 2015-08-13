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
	//VALUES
	$value_1 = get_post_meta(6, 'value_1', true);
	$value_1_text = get_post_meta(6, 'value_1_text', true);

	$value_2 = get_post_meta(6, 'value_2', true);
	$value_2_text = get_post_meta(6, 'value_2_text', true);

	$value_3 = get_post_meta(6, 'value_3', true);
	$value_3_text = get_post_meta(6, 'value_3_text', true);

	$value_4 = get_post_meta(6, 'value_4', true);
	$value_4_text = get_post_meta(6, 'value_4_text', true);

	$value_5 = get_post_meta(6, 'value_5', true);
	$value_5_text = get_post_meta(6, 'value_5_text', true);

	$value_6 = get_post_meta(6, 'value_6', true);
	$value_6_text = get_post_meta(6, 'value_6_text', true);

	$value_7 = get_post_meta(6, 'value_7', true);
	$value_7_text = get_post_meta(6, 'value_7_text', true);

	$value_8 = get_post_meta(6, 'value_8', true);
	$value_8_text = get_post_meta(6, 'value_8_text', true);

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
			
			<div class="about-values">
				<div class="value">
					<div class="value1"><i class="fa fa-smile-o"></i></div>
					<h5><?php echo $value_1; ?></h5>
					<p><?php echo $value_1_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value2"><i class="fa fa-heart-o"></i></div>
					<h5><?php echo $value_2; ?></h5>
					<p><?php echo $value_2_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value3"><i class="fa fa-thumbs-o-up"></i></div>
					<h5><?php echo $value_3; ?></h5>
					<p><?php echo $value_3_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value4"><i class="fa fa-camera"></i></div>
					<h5><?php echo $value_4; ?></h5>
					<p><?php echo $value_4_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value5"><i class="fa fa-bullhorn"></i></div>
					<h5><?php echo $value_5; ?></h5>
					<p><?php echo $value_5_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value6"><i class="fa fa-slideshare"></i></div>
					<h5><?php echo $value_6; ?></h5>
					<p><?php echo $value_6_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value7"><i class="fa fa-pencil"></i></div>
					<h5><?php echo $value_7; ?></h5>
					<p><?php echo $value_7_text; ?></p>
				</div><!--value-->
				<div class="value">
					<div class="value8"><i class="fa fa-check"></i></div>
					<h5><?php echo $value_8; ?></h5>
					<p><?php echo $value_8_text; ?></p>
				</div><!--value-->
			</div>
		</div><!--about-wrapper-->
	</section><!--about-->

<!-- =============================================
DONATE
==================================================-->
	<section class="donate">
		<div class="donate-wrapper">
			

		</div><!--donate-wrapper-->
	</section><!--donate-->

















</main><!--home-wrapper-->

<?php get_footer(); ?>