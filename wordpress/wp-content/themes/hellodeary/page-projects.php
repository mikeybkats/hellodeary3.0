<?php 
  /* Template Name: projects */
?>

<?php get_header(); ?>

<section class="projects-tab-section middle-xs center-xs row">
  <div class="col-xs-12 tab-container">
    <div class="row center-xs middle-xs">
        <div class="col-xs-6 col-sm-6 design-tab"><p>design</p></div>
        <div class="col-xs-6 col-sm-6 development-tab"><p>development</p></div>
    </div>
  </div>
</section>

<main class="projects bitterColor">

  <div class="projects-nav">
    <ul class="projects-nav-list">
      <li class="nav-list-item"><a href="" class="indicator"></a></li>
      <li class="nav-list-item"><a href="" class="indicator"></a></li>
      <li class="nav-list-item"><a href="" class="indicator"></a></li>
      <li class="nav-list-item"><a href="" class="indicator"></a></li>
      <li class="nav-list-item"><a href="" class="indicator"></a></li>
    </ul>
  </div>

  <section class="content-section-title row center-xs middle-xs">
    <div class="col-xs-12">
      <h2>Projects</h2>
        <div class="row center-xs">
          <h3 class="sub-title col-xs-8">Good things made with good technologies.</h3>
        </div>
      </div>
    </div>
    <div class="col-xs-12 chevron">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
  $posts = get_posts( array('posts_per_page'   => 8));
  $post_id = get_the_ID();
  foreach ($posts as $post) : setup_postdata( $post ); 
    $development = has_tag( 'development', $post );
    $design = has_tag( 'design', $post );
  ?>
  
  <?php if ( $design > 0 ) : ?>
    <section class="design-section hide row slide  middle-xs center-xs project-row" id=" ">
      <?php if ( has_post_thumbnail() ) : ?>
        <div id="project-image-id" class="col-xs-12 col-md-10 project-image" style="background:url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center/cover no-repeat; background-position: 50% 0%;"   title="<?php the_title_attribute(); ?>"></div>
      <?php endif; ?>
      <div class="project-info col-xs-10 col-sm-4 col-md-3">
        <h2><?php the_title(); ?></h2>
        <h3 class="sub-title"><?php $key="typeOrRole"; echo get_post_meta($post->ID, $key, true); ?></h3>
        <h3 class="sub-sub-title"><?php $key="technologies"; echo get_post_meta($post->ID, $key, true); ?></h3>
        <p class="project-description"><?php $key="description"; echo get_post_meta($post->ID, $key, true); ?></p>
        <div class="row center-xs">
          <div class="col-xs-12 button-container">
            <a href="<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>" target="_blank">
              <div class="btn button-blue">
                <h4>VIEW</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( $development > 0 ) : ?>
    <section class="development-section row slide  middle-xs center-xs project-row" id=" ">
      <?php if ( has_post_thumbnail() ) : ?>
        <div id="project-image-id" class="col-xs-12 col-md-10 project-image" style="background:url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center/cover no-repeat; background-position: 50% 0%;"   title="<?php the_title_attribute(); ?>"></div>
      <?php endif; ?>
      <div class="project-info col-xs-10 col-sm-4 col-md-3">
        <h2><?php the_title(); ?></h2>
        <h3 class="sub-title"><?php $key="typeOrRole"; echo get_post_meta($post->ID, $key, true); ?></h3>
        <h3 class="sub-sub-title"><?php $key="technologies"; echo get_post_meta($post->ID, $key, true); ?></h3>
        <p class="project-description"><?php $key="description"; echo get_post_meta($post->ID, $key, true); ?></p>
        <div class="row center-xs">
          <div class="col-xs-12 button-container">
            <a href="<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>" target="_blank">
              <div class="btn button-blue">
                <h4>VIEW</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php
endforeach;
?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

