<?php 
  /* Template Name: projects */
?>

<?php get_header(); ?>

<main class="projects">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $posts = get_posts( array('posts_per_page'=> 8));
    $post_id = get_the_ID();
    $value = 0;
    $devValue = 0;
  ?>
      <div class="design-projects-nav projects-nav">
        <ul class="projects-nav-list">
          <?php 
            foreach ($posts as $post) : setup_postdata( $post ); 
              $development = has_tag( 'development', $post );
              $design = has_tag( 'design', $post );
          ?>
            <?php if ( $design > 0 ) : ?>
              <li class="nav-list-item design-indicator hide" ><a href="" class="indicator" value="<?php echo $value; ?>"></a></li>
              <?php $value++; ?>
            <?php endif; ?>
            <?php if ( $development > 0 ) : ?>
              <li class="nav-list-item development-indicator"><a href="" class="indicator" value="<?php echo $devValue; ?>"></a></li>
              <?php $devValue++; ?>
            <?php endif; ?>
          <?php endforeach; ?>
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

  <section class="projects-tab-section middle-xs center-xs row">
    <div class="col-xs-12 tab-container">
      <div class="row center-xs middle-xs">
          <div class="col-xs-6 col-sm-6 design-tab"><a href=""><p>design</p></a></div>
          <div class="col-xs-6 col-sm-6 development-tab"><a href=""><p class="active">development</p></a></div>
      </div>
    </div>
  </section>


  <?php
    $value = 0;
    $devValue = 0;
    foreach ($posts as $post) : setup_postdata( $post ); 
      $development = has_tag( 'development', $post );
      $design = has_tag( 'design', $post );
      $video = has_tag( 'video', $post );
  ?>
  
  <?php if ( $design > 0 ) : ?>
    <section class="design-section hide row slide  middle-xs center-xs project-row" id=" " value="<?php echo $value; ?>">
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
            <?php
              if ( has_tag('video') > 0 ){  
                $class='video-button';
                $id=$key;
                $target='_self';
              }
              else {
                $class='';
                $id='';
                $target='_blank';
              }
            ?>
              <a href="<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>" id="<?php echo $id; ?>" target="<?php echo $target; ?>">
              <div class="btn button-blue <?php echo $class; ?>">
                  <h4>VIEW</h4>
                </div>
              </a>
          </div>
        </div>
      </div>
    </section>
    <?php $value++; ?>
  <?php endif; ?>

  <?php if ( $development > 0 ) : ?>
    <section class="development-section row slide  middle-xs center-xs project-row" id=" " value="<?php echo $devValue; ?>">
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
    <?php $devValue++; ?>
  <?php endif; ?>

<?php
endforeach;
?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

