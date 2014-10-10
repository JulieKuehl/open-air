<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package openair
 */

get_header(); ?>
<div id="content" class="main-content-inner col-sm-12 col-md-12">

<!-- Slider -->
<div class="row">
    <div class="front-page-slider col-sm-12 col-md-12">
        <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
    </div><!-- .front-page-slider columns -->
</div><!-- .row -->

<!-- The WordPress Loop -->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

<!-- Main content area -->
<div class="row front-page-row">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="front-page-box-img col-sm-12 col-md-6">

                <div class="img-responsive">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('front-page-box-image'); ?></a>
                </div><!-- .img-responsive -->

        </div><!-- front-page-box-img columns -->

        <div class="front-page-box-text col-sm-12 col-md-6">
                <h3 class="front-page-box-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="post_meta">By <?php the_author(); ?> | <?php the_time('F jS, Y'); ?> | <?php the_category(', '); ?> |  <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></p>
                    <p><?php the_excerpt(); ?></p>
        </div><!-- .front-page-box-text columns -->
    </div><!-- #post-ID -->
    <div class="clearfix"></div>
</div><!-- .row (front-page-row) -->

    <?php endwhile; ?>

		<?php openair_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<!-- Fat footer -->

<?php get_footer(); ?>