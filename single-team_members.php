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

    <section class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-11 col-md-5 mb-4 mb-md-0  -image">
            <div class="px-3 px-md-0">
              <?php echo get_the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="col-11 offset-md-1 col-md-6 -text">
            <div class="title">
              <h1><?php echo get_the_title(); ?></h1>
              <h2 class="h4"><?php echo get_field('role'); ?></h2>
            </div>
            <div class="content mt-3">
              <div class="content-wrapper">
                <?php echo get_the_content();  ?>
              </div>
              <a href="<?php echo get_site_url(); ?>/<?php echo get_post_type_object(get_post_type())->rewrite['slug']; ?>"
                class="btn p-0 mt-4">Back to
                Team ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>