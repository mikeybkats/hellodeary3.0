<?php 
  /* Template Name: phptest */
?>

<?php get_header(); ?>

<main class="hello">
<div class="row center-xs">
<div class="col-xs-6">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
  $posts = get_posts( array('posts_per_page'=> 8)); 
  $post_id = get_the_ID();
  foreach ($posts as $post) : setup_postdata( $post ); ?>


<?php 
  $tags = get_tags( array( 'hide_empty' => false ) );
  $title = get_the_title( $post );
  if ( $tags ) {
    if ( has_tag( 'video' ) ) {
          echo '<h2>' . $title . '</h2>';
        foreach ( $tags as $tag ) {
          echo '<p>' . $tag->term_id . '</p>'; 
          echo '<p>' . $tag->name . '</p>'; 
          echo '<p>' . $tag->slug . '</p>'; 
        }
      } 
    }
   
?>
<?php endforeach; ?>

</div></div>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

