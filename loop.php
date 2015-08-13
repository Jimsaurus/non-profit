<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-image">
      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
        <?php the_post_thumbnail("medium"); ?>
      </a>
    </div>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>
    <h3><?php echo get_the_date(); ?></h3>

    <section class="entry-content">
      <?php the_excerpt(); ?>
      <?php wp_link_pages( array(
        'before' => '<div class="page-link"> Pages:',
        'after' => '</div>'
        )); ?>
      </section><!-- .entry-content -->
    </article><!-- #post-## -->

    <?php comments_template( '', true ); ?>


  <?php endwhile; // End the loop.?>

<?php // Display navigation to next/previous pages when applicable ?>
  <?php if (  $wp_query->max_num_pages > 1 ) : ?>

    <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'mid_size' => 2,
  'type' => 'list',
  'prev_text' => '«',
  'next_text' => '»'
) );
?>
  <?php endif; ?> -->


