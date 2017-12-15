<?php 
  /* Template Name: phptest */
?>

<?php get_header(); ?>

<main class="">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php foreach ($posts as $post) : setup_postdata( $post ); ?>
  
        <div class="row center-xs">
          <div class="col-xs-12 button-container">
          <?php 
          ?> 
            <a href="<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>" id="<?php echo $title; ?>" target="<?php echo $target; ?>">
            <div class="btn button-blue <?php echo $class;?> <?php echo $class2;?>">
                <h4>VIEW</h4>
              </div>
            </a>
          </div>
 <?php endif; ?>


<?php
endforeach;
?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

