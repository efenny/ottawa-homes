<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

global $wp_query;

?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
  <main class="site-main" id="main">
    <?php $componentFile = get_stylesheet_directory() . '/components/breadcrumbs.php';
        if (file_exists($componentFile)) {
            include $componentFile;
            wp_reset_postdata();
        } ?>


    <section id="cta_block-1 ?>" class="med-blue-bg position-relative section-padding-top section-padding-bottom ">
      <div class="container">
        <div class="cta-text text-white text-center">
          <h1 class="mb-4"><?php echo get_field('title', 'options') ?></h1>
          <?php echo get_field('text', 'options') ?>
        </div>
      </div>
    </section>

    <section id="team_members" class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row">
          <?php
            if ( $wp_query->have_posts() ) { 
              while ( $wp_query->have_posts() ) {
                    $wp_query->the_post(); ?>
          <a href="<?php echo get_the_permalink(); ?>" class="col-12 col-md-4 d-flex mb-3 team-member">
            <div class="card w-100 text-center border-0">
              <figure>
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                  alt="<?php echo get_the_title(); ?>">
              </figure>
              <div class="card-body px-0">
                <h3 class="card-title "><?php echo get_the_title(); ?></h3>
                <p class="card-text"><?php echo get_field('role'); ?></p>
              </div>
            </div>
          </a>
          <?php }
            }
            wp_reset_postdata();
            ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>