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
      <div class="block-image-container">
      <?php if (get_field('image-block')): ?>
        <div class="block-image" style="background:url('<?php the_field('image-block'); ?>') center center/cover no-repeat; background-position: 50% 0%;">
          <div class="browser-bar" style="
              background:url('<?php echo site_url(); ?>/wp-content/uploads/2018/08/browser-bar.png');
              background-repeat: no-repeat;
              background-size: cover;
            "
          >
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if (get_field('image-block-caption')): ?>
        <h3 class="image-block-caption"><?php the_field('image-block-caption') ?></h3>
      <?php endif; ?>
    </div>
  </section>

  <section class="case-study study-three-column row center-xs middle-xs">
    <div class="col-xs-12 col-sm-9">
      <div class="row center-xs">
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

  <section class="case-study banner row middle-xs">
    <div class="banner-title">
      <?php if (get_field('banner-title')): ?>
        <h3 class="sub-title"><?php the_field('banner-title'); ?></h3>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row">
        <div class="banner-content">
          <?php if (get_field('banner-content')): ?>
            <p class="project-description"><?php the_field('banner-content'); ?></p> 
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>

  <section class="case-study banner row middle-xs">
    <div class="banner-title">
      <?php if (get_field('banner-title')): ?>
        <h3 class="sub-title"><?php the_field('banner-title-2'); ?></h3>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row">
        <div class="banner-list">
          <?php if (get_field('banner-content')): ?>
            <?php the_field('banner-content-2'); ?> 
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>

  <section class="case-study block-image-section row center-xs middle-xs">

    <div class="col-xs-12 col-sm-8 how-does-it-work">
      <h2 class="title"><?php
        if (get_field('how-does-it-work-title')){
          the_field('how-does-it-work-title'); 
        }
      ?></h2>
    </div>
    <div class="col-xs-12 col-sm-8 case-study-image-container">
      <div class="block-image-container">
      <?php if (get_field('image-block-2')): ?>
        <div class="block-image" style="background:url('<?php the_field('image-block-2'); ?>') center center/cover no-repeat; background-position: 50% 0%;">
          <div class="browser-bar" style="
              background:url('<?php echo site_url(); ?>/wp-content/uploads/2018/08/browser-bar.png');
              background-repeat: no-repeat;
              background-size: cover;
            "
          >
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if (get_field('image-block-2-caption')): ?>
        <h3 class="image-block-caption"><?php the_field('image-block-2-caption'); ?></h3>
      <?php endif; ?>
    </div>

    <div class="col-xs-12 col-sm-8 case-study-image-container">
      <div class="block-image-container">
      <?php if (get_field('image-block-3')): ?>
        <div class="block-image" style="background:url('<?php the_field('image-block-3'); ?>') center center/cover no-repeat; background-position: 50% 0%;">
          <div class="browser-bar" style="
              background:url('<?php echo site_url(); ?>/wp-content/uploads/2018/08/browser-bar.png');
              background-repeat: no-repeat;
              background-size: cover;
            "
          >
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if (get_field('image-block-3-caption')): ?>
        <h3 class="image-block-caption"><?php the_field('image-block-3-caption'); ?></h3>
      <?php endif; ?>
    </div>

    <div class="col-xs-12 col-sm-8">
      <?php if (get_field('project-diagram-caption')): ?>
        <h3 class="image-block-caption"><?php the_field('project-diagram-caption'); ?></h3>
      <?php endif; ?>
      <?php if (get_field('project-diagram')): ?>
        <img src="<?php the_field('project-diagram'); ?>">
      <?php endif; ?>
    </div>  

  </section>

  <section class="row center-xs middle-xs case-study view-project">
    <div class="col-xs-12 col-sm-8">
      <div class="row center-xs">
        <div class="col-xs-12 col-sm-4 button-container">
        <a href="<?php echo get_field('project_link'); ?>">
          <div class="btn button-blue">
            <h4>VIEW PROJECT</h4>
          </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 button-container">
        <a href="https://www.synapse.org/">
          <div class="btn button-blue">
            <h4>VISIT SYNAPSE</h4>
          </div>
          </a>
        </div>
      </div>
    </div>  

  </section>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no pages found.' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
