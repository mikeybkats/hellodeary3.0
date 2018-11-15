<?php get_header(); ?>

<main class="projects">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $posts = get_posts( array('posts_per_page'=> 8));
    $post_id = get_the_id();
    $value = 0;
    $devvalue = 0;
  ?>
      <div class="design-projects-nav projects-nav">
        <ul class="projects-nav-list">
          <?php 
            foreach ($posts as $post) : setup_postdata( $post ); 
              $development = has_category( 'development', $post );
              $design = has_category( 'design', $post );
          ?>
            <?php if ( $design > 0 ) : ?>
              <li class="nav-list-item design-indicator hide" ><a href="" class="indicator" value="<?php echo $value; ?>"></a></li>
              <?php $value++; ?>
            <?php endif; ?>
            <?php if ( $development > 0 ) : ?>
              <li class="nav-list-item development-indicator"><a href="" class="indicator" value="<?php echo $devvalue; ?>"></a></li>
              <?php $devvalue++; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
  

  <section class="content-section-title row center-xs middle-xs">
    <div class="col-xs-12">
      <h2>projects</h2>
        <div class="row center-xs">
          <h3 class="sub-title col-xs-8">good things made with good technologies.</h3>
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
    $devvalue = 0;
    foreach ($posts as $post) : setup_postdata( $post ); 
      $development = has_category( 'development', $post );
      $design = has_category( 'design', $post );
      $video = has_category( 'video', $post );
      $images = has_category( 'images', $post );
      $title = the_title( $before , $after ,false);
  ?>
  

<?php
endforeach;
?>

<?php endwhile; else : ?>
  <p><?php _e( 'sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

