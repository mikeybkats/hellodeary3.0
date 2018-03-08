<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_content(); ?></h1>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

