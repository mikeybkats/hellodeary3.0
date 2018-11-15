<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage hello deary
 */
  get_header();
?>

<main class="projects">

  <section class="content-section-title row center-xs middle-xs">
    <div class="col-xs-12">
			<h2>
      <?php 
				$str = get_the_archive_title( '', ''); 
				$str2 = substr($str, 5);
				echo $str2;
			?>
			</h2>
        <div class="row center-xs">
          <h3 class="sub-title col-xs-8"></h3>
        </div>
      </div>
    </div>
    <div class="col-xs-12 chevron">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('content','tagpost'); ?>

<?php endwhile; else : ?>
  <p><?php _e( 'sorry, no posts found.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

