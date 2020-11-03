<?php

/**
 * Template name: Small Neighbourhood Template
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

    <section class="section-padding-top mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1><?php echo get_the_title(); ?> Real Estate</h1>
          </div>
        </div>
      </div>
    </section>

    <?php

        // Check value exists.
        if (have_rows('flexible_content_components')) {
            $currItem = 0;
            // Loop through rows.
            while (have_rows('flexible_content_components')) {
                the_row();
                $currItem++; //used to avoid duplicate ids on html elements

                //includes all the layouts that were used by the user in the order that they used it.
                // located in the components folder only if it exists
                $componentFile = get_stylesheet_directory() . '/components/' . get_row_layout() . '.php';
                if (file_exists($componentFile)) {
                    include $componentFile;
                    wp_reset_postdata();
                }
                // End loop.

            }; //endwhile

        }; //endif

        ?>
    <?php if(get_field('neighbourhood_to_show')) : ?>
    <section id="featured" class=" section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mb-3">
              <?php echo get_the_title(); ?> Communities
            </h2>
            <?php if(get_field('community_text')) : ?>
            <div class="content mb-3">
              <?php echo get_field('community_text'); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php
 
            $args = array(
              "post_type" => "nieghbours",
              'post_status' => 'publish',
              'tax_query' => array(
                  array (
                      'taxonomy' => 'locations',
                      'field' => 'slug',
                      'terms' => get_field('neighbourhood_to_show')->slug,
                  )
              ),
            );
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
            
                    $query->the_post(); ?>
        <article class="row align-items-center">
          <div class="col-12 col-md-4">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'slider'); ?>
          </div>
          <div class="col-12 col-md-8 ">
            <div class="info pl-0 pl-md-5 mt-3 mt-md-0">
              <h3><?php echo get_the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 15, '...') ?></p>
              <a href="<?php echo get_the_permalink(); ?>" class="read-more">Read More ></a>
            </div>
          </div>
        </article>

        <?php }
            }
            // Restore original post data.
            wp_reset_postdata();
            
            ?>


      </div>
    </section>
    <?php endif; ?>

    <?php if(get_field('map_iframe')) : ?>
    <section class="map section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="iframe-wrapper">
              <?php echo get_field('map_iframe'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </main>

</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>