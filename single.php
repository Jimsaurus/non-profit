<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="post-content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>
          <div class="entry-content">
            <div class="entry-img">
              <?php the_post_thumbnail("medium"); ?>
            </div>
            <div>
              <?php hackeryou_posted_on(); ?>
              <?php the_content(); ?>
            </div>
          </div><!-- .entry-content -->
          <div class="entry-utility">
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->
        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
        <?php comments_template( '', true ); ?>
      <?php endwhile; // end of the loop. ?>
    </div> <!-- /.post-content -->
  </div><!-- .container-->
  <?php get_footer(); ?>
</div><!--.main-->
