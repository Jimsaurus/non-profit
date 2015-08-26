<?php

/*
	Template Name: Home Page
*/
// ========================================================
//Custom Fields
// ========================================================

	//HERO ===================================================
	$hero_title = get_field('hero_title');
	$hero_tagline = get_field('hero_tagline');
	//ABOUT ===================================================
	$about_title = get_field('about_title');
	$about_tagline = get_field('about_tagline');
	$about_text = get_field('about_text');
	//VALUES ===================================================
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

	//DONATE ===================================================
	$donate_title = get_field('donate_title');
	$donate_tagline = get_field('donate_tagline');
	$donate_text = get_field('donate_text');

	//TEAM ===================================================
	$team_title = get_field('team_title');
	$team_tagline = get_field('team_tagline');

	//EVENTS
	$events_title = get_field('events_title');
	$events_tagline = get_field('events_tagline');
	//GALLERY ===================================================
	$gallery_title = get_field('gallery_title');
	$gallery_tagline = get_field('gallery_tagline');
	$gallery = get_field('gallery_wrapper');
	//CONTACT ===================================================
	$contact_title = get_field('contact_title');
	$contact_tagline = get_field('contact_tagline');
	$contact_form = get_field('contact');

// ========================================================
// END CUSTOM FIELDS
// ========================================================

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
			<span class="hero-button">DONATE NOW</span>
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
<!-- 				<div class="value">
					<div class="value5"><i class="fa fa-bullhorn"></i></div>
					<h5><?php echo $value_5; ?></h5>
					<p><?php echo $value_5_text; ?></p>
				</div><!--value- -->
<!-- 				<div class="value">
					<div class="value6"><i class="fa fa-slideshare"></i></div>
					<h5><?php echo $value_6; ?></h5>
					<p><?php echo $value_6_text; ?></p>
				</div>value -->
<!-- 				<div class="value">
					<div class="value7"><i class="fa fa-pencil"></i></div>
					<h5><?php echo $value_7; ?></h5>
					<p><?php echo $value_7_text; ?></p>
				</div><!--value-->
<!-- 				<div class="value">
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
			<h4><?php echo $donate_title; ?></h4>
			<p class="lead"><?php echo $donate_tagline; ?></p>
			<p class='about-text'><?php echo $donate_text; ?></p>
			<span class="hero-button">HELP TODAY</span>
		</div><!--donate-wrapper-->
	</section><!--donate-->

<!-- =============================================
TEAM
==================================================-->
	<section class="team">
		<div class="team-wrapper">
			<h4><?php echo $team_title; ?></h4>
			<p class="lead"><?php echo $team_tagline; ?></p>
			<div class="team-member-wrapper">
				<!-- define the loop -->
				<?php $loop = new WP_Query(array( 'post_type' => 'team_member', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<!-- loop through the team members -->
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				<!-- TEAM MEMBER -->
				<div class="team-member">
					<div class="member-image">
						<div class="member-face">
							<img src="<?php the_field('member_image'); ?>" alt="<?php the_field('member_image'); ?>">
						</div><!--member-face-->
						<div class="member-social">
							<a href="<?php the_field('member_twitter');  ?> "><span><i class="fa fa-twitter"></i></span></a>
							<a href="<?php the_field('member_facebook');  ?>"><span><i class="fa fa-facebook"></i></span></a>
							<a href="<?php the_field('member_flickr');  ?>"><span><i class="fa fa-flickr"></i></span></a>
						</div><!--member-social-->
					</div><!-- member-image-->
					<div class="member-name">
						<h5><?php the_field('member_name'); ?></h5>
						<p>- <?php the_field('member_job'); ?> -</p>
					</div><!--member-name-->
				</div><!--team-member-->
				<?php endwhile; ?>
			</div><!--team-member-wrapper-->
		</div><!--team-wrapper-->
	</section><!--team-->

<!-- =============================================
EVENTS
==================================================-->
	<section class="events">
		<div class="triangle"></div>
		<div class="events-outer-wrapper">
			<h4><?php echo $events_title; ?></h4>
			<p class="lead"><?php echo $events_tagline; ?></p>
			<div class="events-wrapper">
				<!-- display lastest posts -->
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<div class ="home-post-item"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </div> ';
					}
				?>
			</div>

		</div>
	</section><!--events-->

<!-- =============================================
GALLERY
==================================================-->
	<section class="gallery">
		<div class="triangle"></div>
		<div class="gallery-wrapper">
			<h4><?php echo $gallery_title; ?></h4>
			<p class="lead"><?php echo $gallery_tagline; ?></p>
			<div class="gallery-items-wrapper">
				<?php 
				if( $gallery ): ?>
				    
				        <?php foreach( $gallery as $image ): ?>
				        	<div class="gallery-item">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </div><!--gallery-item-->
				        <?php endforeach; ?>
				    
				<?php endif; ?>
			</div><!--gallery-items-wrapper -->
		</div><!--gallery-wrapper-->
	</section><!--gallery-->




</main><!--home-wrapper-->
<?php get_footer(); ?>
