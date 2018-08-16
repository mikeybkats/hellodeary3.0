<?php
  /* Template Name: case-study */
?>

<?php get_header(); ?>

<main class="case-study">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="case-study-hero content-section-title row center-xs middle-xs" >
    <div class="col-xs-12 relative-title">
      <h2 class="hello-deary"><?php the_title(); ?></h2>
      <div class="row center-xs">
      <h3 class="sub-title"><?php the_content(); ?></h3>
      </div>
    </div>
    <div class="background-hero" style="background:url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center/cover no-repeat; background-position: 50% 0%;"></div>
    <div class="col-xs-12 chevron">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </section>

  <section class="case-study row center-xs middle-xs">
    <div class="col-xs-12 col-sm-8">
    <?php if (get_field('text-block-title')): ?>
      <h3 class="sub-title"><?php the_field('text-block-title'); ?></h3>
    <?php endif; ?>
    <?php if (get_field('text-block-content')): ?>
      <p class="project-description"><?php the_field('text-block-content'); ?></p> 
    <?php endif;?>
    </div>
  </section>

  <section class="case-study block-image-section row center-xs middle-xs">
    <div class="col-xs-12 col-sm-8">
      <?php if (get_field('image-block')): ?>
        <div class="block-image" style="background:url('<?php the_field('image-block'); ?>') center center/cover no-repeat; background-position: 50% 0%;"></div>
      <?php endif; ?>
      <?php if (get_field('image-block-caption')): ?>
        <h3 class="image-block-caption"><?php the_field('image-block-caption') ?></h3>
      <?php endif; ?>
    </div>
  </section>

  <section class="case-study row center-xs middle-xs">
    <div class="col-xs-12 col-sm-8">
      <div class="row center-xs middle-xs">
        <div class="col-xs-12 col-sm-4">
          <?php if (get_field('three-lists-left')): ?>
            <?php the_field('three-lists-left'); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php if (get_field('three-lists-middle')): ?>
            <?php the_field('three-lists-middle'); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php if (get_field('three-lists-right')): ?>
            <?php the_field('three-lists-right'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
