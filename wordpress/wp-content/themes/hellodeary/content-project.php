<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage hellodeary 
 * @since hellodeary 3.0
 */
    setup_postdata( $post ); 
    $development = has_category( 'development', $post );
    $design = has_category( 'design', $post );
    $video = has_category( 'video', $post );
    $images = has_category( 'images', $post );
    $title = the_title( $before , $after ,false);
?>
  
<?php if ( $design ) : ?>
    <section class="design-section hide row slide  middle-xs center-xs project-row" id=" " value="<?php echo $post->ID; ?>">
      <?php if ( has_post_thumbnail() ) : ?>
        <div id="project-image-id" class="col-xs-12 col-md-10 project-image" style="background:url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center/cover no-repeat; background-position: 50% 0%;"   title="<?php the_title_attribute(); ?>"></div>
      <?php endif; ?>
      <div class="project-info col-xs-12 col-sm-4 col-md-3">
        <h2 value="<?php echo $post->ID; ?>"><?php the_title(); ?></h2>

        <?php if ( get_field('role')): ?>
          <h3 class="sub-title">Role: <?php the_field('role'); ?></h3>
        <?php endif; ?>
        <?php if ( get_field('industry')): ?>
          <h3 class="sub-title">Industry: <?php the_field('industry'); ?></h3>
        <?php endif; ?>

        <div class="row start-xs tags-row"> 
            <?php $tags=get_the_tags(); ?>
            <?php foreach($tags as $key => $tag): ?>
              <div class="col-xs-4 col-sm-5 tag-container">
              <a href="/tag/<?php echo $tag->name; ?>" class="tag center-xs">
                  <h3 class="tag-text"><?php echo $tag->name; ?></h3>
                </a>
              </div>
            <?php endforeach; ?>
        </div>

        <p class="project-description"><?php echo the_content(); ?></p>
        <div class="row center-xs">
          <div class="col-xs-12 button-container">
          <?php 
            $target='_blank';
            if ( get_field('image_gallery') ){  
                  $class='images-button';
                  $id=$key;
                  $target='_self';
            }
            if ( get_field('video') ){  
                  $class2='video-button';
                  $id=$key;
                  $target='_self';
            }
          ?> 
            <a href="<?php $key="url"; echo get_post_meta($post->ID, $key, true); ?>" id="<?php echo $title; ?>" target="<?php echo $target; ?>">
            <div class="btn button-blue <?php echo $class;?> <?php echo $class2;?>">
                <h4>VIEW</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( $development ) : ?>
    <section class="development-section row slide  middle-xs center-xs project-row" id=" " value="<?php echo $post->ID; ?>">
      <?php if ( has_post_thumbnail() ) : ?>
        <div id="project-image-id" class="col-xs-12 col-md-10 project-image" style="background:url(' <?php the_post_thumbnail_url( 'full' ); ?> ') center center/cover no-repeat; background-position: 50% 0%;"   title="<?php the_title_attribute(); ?>"></div>
      <?php endif; ?>
      <div class="project-info col-xs-12 col-sm-4 col-md-3">
        <h2 value="<?php echo $post->ID; ?>"><?php the_title(); ?></h2>
        
        <?php if ( get_field('role')): ?>
          <h3 class="sub-title">Role: <?php the_field('role'); ?></h3>
        <?php endif; ?>
        <?php if ( get_field('industry')): ?>
          <h3 class="sub-title">Industry: <?php the_field('industry'); ?></h3>
        <?php endif; ?>

        <div class="row start-xs tags-row"> 
            <?php $tags=get_the_tags(); ?>
            <?php foreach($tags as $key => $tag): ?>
              <div class="col-xs-4 col-sm-5 tag-container">
                <a href="/tag/<?php echo $tag->name; ?>" class="tag center-xs">
                  <h3 class="tag-text"><?php echo $tag->name; ?></h3>
                </a>
              </div>
              
            <?php endforeach; ?>
        </div>

        <p class="project-description"><?php echo the_content(); ?></p>
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
