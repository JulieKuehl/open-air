<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package openair
 */
?>

<div class="col-sm-12 col-md-8">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'openair' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'openair' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
