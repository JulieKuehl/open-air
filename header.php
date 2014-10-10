<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package openair
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="site-navigation">
    <div class="container site-nav-bar">
        <div class="row site-nav-bar">
            <div class="site-navigation-inner col-sm-12 col-md-12">
                <div class="navbar navbar-default">
                    <div class="navbar-header">
                        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Your site title as branding in the menu -->
<!--                        <a class="navbar-brand" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a>-->

                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                          array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                          )
                        ); ?>
                    </div><!-- .navbar-header -->

                        <!-- Search form without submit button -->
                        <div class="header-search-form">
                            <?php $search_text = "Search"; ?>
                            <form method="get" id="searchform"
                                  action="<?php bloginfo('home'); ?>/">
                                <input type="text" value="<?php echo $search_text; ?>"
                                       name="s" id="s"
                                       onblur="if (this.value == '')
                                         {this.value = '<?php echo $search_text; ?>';}"
                                       onfocus="if (this.value == '<?php echo $search_text; ?>')
                                         {this.value = '';}" />
                                <input type="hidden" id="searchsubmit" />
                            </form>
                        </div><!-- .header-search-form -->

                </div><!-- .navbar -->
            </div><!-- .site-navigation-inner -->
        </div><!-- .row -->
    </div><!-- .container -->
</nav><!-- .site-navigation -->

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12 col-md-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                          title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
				</div><!-- site branding -->

			</div><!-- .site-header-inner -->
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- #masthead -->



<div class="main-content">
	<div class="container">
<!--		<div class="row">-->
<!--			<div id="content" class="main-content-inner col-sm-12 col-md-12">-->

