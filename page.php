<?php

/**
 * Template name: Flexible Content 
 * @package understrap-child
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');


?>


<section id="page-header" class="section-padding-top pb-3">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12">
        <?php if(is_single()) : ?>
        <h3><?php echo get_the_category()[0]->name; ?></h3>
        <?php endif; ?>
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<?php $componentFile = get_stylesheet_directory() . '/components/breadcrumbs.php';
if (file_exists($componentFile)) {
    include $componentFile;
    wp_reset_postdata();
} ?>


<div class="wrapper pb-0 pt-3" id="page-wrapper">
  <main class="site-main" id="main">
    <section class="section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <?php echo apply_filters('the_content', $post->post_content); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>