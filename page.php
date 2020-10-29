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

<div class="wrapper pb-0 pt-0" id="page-wrapper">
  <main class="site-main" id="main">
    <?php $componentFile = get_stylesheet_directory() . '/components/breadcrumbs.php';
        if (file_exists($componentFile)) {
            include $componentFile;
            wp_reset_postdata();
        } ?>
    <section class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="mb-5"><?php echo get_the_title(); ?></h1>
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