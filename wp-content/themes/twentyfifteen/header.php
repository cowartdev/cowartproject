<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
<header id="masthead" class="site-header" role="banner">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="logo" itemprop="headline">
                    <?php if ( has_custom_logo() ) {
                      
                            orbitr_the_custom_logo(); ?>
                    <?php } else { ?>

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" class="plain"><?php bloginfo( 'name' ); ?></a>
                    <?php } ?>
                </div>        
                  </div>
                  <div class="col-md-8 col-sm-4 col-xs-12">
                            <div class="toggle"></div> <!-- toggle -->
                    <div class="sitenav">
                          <?php wp_nav_menu(array(
                          'theme_location' => 'primary-menu',
                          'echo' => true, 
                          'fallback_cb' => 'orbitr_nav_fallback')); ?>
                    </div><!-- site-nav -->
                       <div class="clear"></div>
                  </div><!-- col-md-8 col-sm-4 col-xs-12 -->
                </div><!-- row -->                
            </div><!-- container -->
        </div><!-- header-wrapper -->
    </header><!-- #masthead -->

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
