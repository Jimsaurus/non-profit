<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
	<section class="contact" id="contact">
		<div class="contact-wrapper">
			<div class="contact-header">
				<h4>SAY HELLO! DON'T BE SHY</h4>
				<p class="lead">Fill out the form below &amp; we'll be in touch!</p>
			</div><!--contact-header-->
			<div class="contact-form">
				<?php // Start the loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				  <!-- <h2><?php //the_title(); ?></h2> -->
				  <?php the_content(); ?>

				<?php endwhile; // end the loop?>
				
			</div><!--contact-form-->
		</div><!--contact-wrapper-->
	</section><!-- contact -->
    
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>