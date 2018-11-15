<?php 
  /* Template Name: blank */
?>

<?php get_header(); ?>

<main class="blank-page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="content-section-title row center-xs middle-xs">
    <div class="col-xs-12">
      <h2><?php the_title(); ?></h2>
      <div class="row center-xs">
        <h3 class="sub-title col-xs-8">Storyboards for a kinetic poem by Shin Yu Pai.</h3>
      </div>
    </div>
    <div class="col-xs-12 chevron">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </section>

  <section class="blank-section" style="">
    <div class="row content-row around-xs center-xs middle-xs" style="">
      <div class="col-xs-12">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
