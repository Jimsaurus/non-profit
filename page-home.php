<?php

/*
	Template Name: Home Page
*/
// ========================================================
//Custom Fields
// ========================================================

	//HERO ===================================================
	$hero_title = get_post_meta(6, 'hero_title', true);
	$hero_tagline = get_post_meta(6, 'hero_tagline', true);
	//ABOUT ===================================================
	$about_title = get_post_meta(6, 'about_title', true);
	$about_tagline = get_post_meta(6, 'about_tagline', true);
	$about_text = get_post_meta(6, 'about_text', true);
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
	$donate_title = get_post_meta(6, 'donate_title', true);
	$donate_tagline = get_post_meta(6, 'donate_tagline', true);
	$donate_text = get_post_meta(6, 'donate_text', true);

	//TEAM ===================================================
	$team_title = get_post_meta(6, 'team_title', true);
	$team_tagline = get_post_meta(6, 'team_tagline', true);
		//MEMBERS
		$member_1_name = get_post_meta(6, 'member_1_name', true);
		$member_1_job = get_post_meta(6, 'member_1_job', true);
		$member_1_image = get_post_meta(6, 'member_1_image', true);
		$member_1_facebook = get_post_meta(6, 'member_1_facebook', true);
		$member_1_twitter = get_post_meta(6, 'member_1_twitter', true);
		$member_1_flickr = get_post_meta(6, 'member_1_flickr', true);

		$member_2_name = get_post_meta(6, 'member_2_name', true);
		$member_2_job = get_post_meta(6, 'member_2_job', true);
		$member_2_image = get_post_meta(6, 'member_2_image', true);
		$member_2_facebook = get_post_meta(6, 'member_2_facebook', true);
		$member_2_twitter = get_post_meta(6, 'member_2_twitter', true);
		$member_2_flickr = get_post_meta(6, 'member_2_flickr', true);

		$member_3_name = get_post_meta(6, 'member_3_name', true);
		$member_3_job = get_post_meta(6, 'member_3_job', true);
		$member_3_image = get_post_meta(6, 'member_3_image', true);
		$member_3_facebook = get_post_meta(6, 'member_3_facebook', true);
		$member_3_twitter = get_post_meta(6, 'member_3_twitter', true);
		$member_3_flickr = get_post_meta(6, 'member_3_flickr', true);

		$member_4_name = get_post_meta(6, 'member_4_name', true);
		$member_4_job = get_post_meta(6, 'member_4_job', true);
		$member_4_image = get_post_meta(6, 'member_4_image', true);
		$member_4_facebook = get_post_meta(6, 'member_4_facebook', true);
		$member_4_twitter = get_post_meta(6, 'member_4_twitter', true);
		$member_4_flickr = get_post_meta(6, 'member_4_flickr', true);
	//EVENTS
	$events_title = get_post_meta(6, 'events_title', true);
	$events_tagline = get_post_meta(6, 'events_tagline', true);

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

				<!-- TEAM MEMBER 1 -->
				<div class="team-member team-member-1">
					<div class="member-image">
						<div class="member-face">
							<img src="http://localhost:8888/bootcamp-projects/week-7-project/wp-content/uploads/2015/08/member-1-image.jpg" alt="">
						</div><!--member-face-->
						<div class="member-social">
							<a href="#"><span><i class="fa fa-twitter"></i></span></a>
							<a href="#"><span><i class="fa fa-facebook"></i></span></a>
							<a href="#"><span><i class="fa fa-flickr"></i></span></a>
						</div><!--member-social-->
					</div><!-- member-image-->
					<div class="member-name">
						<h5><?php echo $member_1_name; ?></h5>
						<p>- <?php echo $member_1_job; ?> -</p>
						
					</div><!--member-name-->
				</div><!--team-member-->

				<!-- TEAM MEMBER 2 -->
				<div class="team-member team-member-2">
					<div class="member-image">
						<div class="member-face">
							<img src="http://localhost:8888/bootcamp-projects/week-7-project/wp-content/uploads/2015/08/member-1-image.jpg" alt="">
						</div><!--member-face-->
						<div class="member-social">
							<a href="#"><span><i class="fa fa-twitter"></i></span></a>
							<a href="#"><span><i class="fa fa-facebook"></i></span></a>
							<a href="#"><span><i class="fa fa-flickr"></i></span></a>
						</div><!--member-social-->
					</div><!-- member-image-->
					<div class="member-name">
						<h5><?php echo $member_1_name; ?></h5>
						<p>- <?php echo $member_1_job; ?> -</p>
					</div><!--member-name-->
				</div><!--team-member-->

				<!-- TEAM MEMBER 3 -->
				<div class="team-member team-member-3">
					<div class="member-image">
						<div class="member-face">
							<img src="http://localhost:8888/bootcamp-projects/week-7-project/wp-content/uploads/2015/08/member-1-image.jpg" alt="">
						</div><!--member-face-->
						<div class="member-social">
							<a href="#"><span><i class="fa fa-twitter"></i></span></a>
							<a href="#"><span><i class="fa fa-facebook"></i></span></a>
							<a href="#"><span><i class="fa fa-flickr"></i></span></a>
						</div><!--member-social-->
					</div><!-- member-image-->
					<div class="member-name">
						<h5><?php echo $member_1_name; ?></h5>
						<p>- <?php echo $member_1_job; ?> -</p>
					</div><!--member-name-->
				</div><!--team-member-->

				<!-- TEAM MEMBER 4 -->
				<div class="team-member team-member-4">
					<div class="member-image">
						<div class="member-face">
							<img src="http://localhost:8888/bootcamp-projects/week-7-project/wp-content/uploads/2015/08/member-1-image.jpg" alt="">
						</div><!--member-face-->
						<div class="member-social">
							<a href="#"><span><i class="fa fa-twitter"></i></span></a>
							<a href="#"><span><i class="fa fa-facebook"></i></span></a>
							<a href="#"><span><i class="fa fa-flickr"></i></span></a>
						</div><!--member-social-->
					</div><!-- member-image-->
					<div class="member-name">
						<h5><?php echo $member_1_name; ?></h5>
						<p>- <?php echo $member_1_job; ?> -</p>
					</div><!--member-name-->
				</div><!--team-member-->

			</div><!--team-member-wrapper-->
		</div><!--team-wrapper-->
	</section><!--team-->

<!-- =============================================
EVENTS
==================================================-->
	<section class="events">
		<div class="triangle"></div>
		<div class="events-wrapper">
			<h4><?php echo $events_title; ?></h4>
			<p class="lead"><?php echo $events_tagline; ?></p>
			<div class="events-wrapper">
				<!-- display lastest posts -->
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<div><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </div> ';
					}
				?>
			</div>
			
		</div>
	</section><!--events-->












</main><!--home-wrapper-->
<?php get_footer(); ?>