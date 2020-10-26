<?php

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

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 -image">

        </div>
        <div class="col-12 col-md-6 -text">
          <div class="title">
            <h1>The Ottawa listings archive</h1>
          </div>
          <div class="content">
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php get_footer(); ?>