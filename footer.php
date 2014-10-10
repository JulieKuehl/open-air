<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package openair
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

                <div class="fat-footer">
                    <div class="footer-one-widget col-sm-12 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
                            <div id="footer-left" class="footer-one widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-one' ); ?>
                            </div><!-- #footer-one -->
                        <?php endif; ?>
                    </div><!-- .footer-one -->
                    <div class="footer-two-widget col-sm-12 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
                            <div id="footer-two" class="footer-two widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-two' ); ?>
                            </div><!-- #footer-two -->
                        <?php endif; ?>
                    </div><!-- .footer-two -->
                    <div class="footer-three-widget col-sm-12 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
                            <div id="footer-three" class="footer-three widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-three' ); ?>
                            </div><!-- #footer-three -->
                        <?php endif; ?>
                    </div><!-- .footer-three -->
                    <div class="footer-four-widget col-sm-12 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-four' ) ) : ?>
                            <div id="footer-four" class="footer-four widget-area" role="complementary">
                                <?php dynamic_sidebar( 'footer-four' ); ?>
                            </div><!-- #footer-four -->
                        <?php endif; ?>
                    </div><!-- .footer-four -->
                </div><!-- .fat-footer -->
            </div><!-- .site-footer-inner col-sm-12 -->
        </div><!-- .row (site-footer) -->

        <div class="row">
            <div class="site-footer-inner col-sm-12">
				<div class="site-info">
					<?php do_action( 'openair_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'openair' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'openair' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'openair' ), 'openair', '<a href="http://straightforwardwebsolutions.com/" rel="designer">straightFORWARD Web Solutions</a>' ); ?>
				</div><!-- close .site-info -->

			</div><!-- .site-footer-inner col-sm-12 -->
		</div><!-- .row (site-footer) -->
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>