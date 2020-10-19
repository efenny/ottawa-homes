<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

global $wp_query;
// var_dump($wp_query);

?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
  <main class="site-main" id="main">

    <section id="cta_block-1 ?>" class="med-blue-bg position-relative section-padding-top section-padding-bottom ">
      <div class="container">
        <div class="cta-text text-white text-center">
          <h1 class="mb-4"><?php echo get_field('title', 'options') ?></h1>
          <?php echo get_field('text', 'options') ?>
        </div>
      </div>
    </section>

    <section class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php
            if ( $wp_query->have_posts() ) { 
              while ( $wp_query->have_posts() ) {
                    $wp_query->the_post(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="col-12 col-md-4 d-flex">
              <div class="card w-100 border-none">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title"><?php echo get_the_title(); ?></h3>
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
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>