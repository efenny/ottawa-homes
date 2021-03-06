<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php do_action('wp_body_open'); ?>
  <div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->

    <?php if(get_field('global_header', 'options')['notification']): ?>
    <div class="notifcation-bar pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-white text-center">
            <?php echo get_field('global_header', 'options')['notification']; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>



    <div class="header-wrapper">
      <header id="wrapper-navbar" class="thenav scroll goDown" itemscope itemtype="http://schema.org/WebSite">
        <div class="search-bar">
          <?php echo get_search_form(); ?>
          <button class="close-search-btn">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <nav class="navbar  navbar-expand-md bg-white">
          <?php if (!has_custom_logo()) { ?>
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_field('global_header', 'options')['logo']['url']; ?>"
              alt="<?php echo get_bloginfo('name'); ?> logo">
          </a>
          <?php } else {
						the_custom_logo();
					} ?>

          <div class="right-wrapper d-flex align-items-center">
            <div class="menu-wrapper">
              <a id="burgertoggler" href="#" class="navbar-toggler mobile-square burger d-flex d-md-none"
                data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <div class="mobile-burger">
                  <span class="burger-bars">
                  </span>
                </div>
              </a>

              <?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 4,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
            </div>
            <div class="search-wrapper">
              <button class="search-btn">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>

        </nav><!-- .site-navigation -->

      </header><!-- #wrapper-navbar end -->
    </div>