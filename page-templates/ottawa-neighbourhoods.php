<?php

/**
 * Template name: Ottawa Neighbourhoods
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
            <h1><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section id="featured" class=" section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php echo get_field('featured_map') ?>
          </div>
          <div class="col-12">
            <h2>Featured Ottawa Neighbourhoods</h2>
            <p>Find these neighbourhoods below on the above map</p>
            <ol>
              <?php
 
            $args = array(
              "post_type" => "nieghbours",
              'tax_query' => array(
                  array (
                      'taxonomy' => 'locations',
                      'field' => 'slug',
                      'terms' => 'featured',
                  )
              ),
            );
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
            
                    $query->the_post(); ?>
              <li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
              <?php }
            }
            // Restore original post data.
            wp_reset_postdata();
            
            ?>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <?php $neighArray = array(
      "kanata" => 'Kanata',
      "orleans" => 'Orleans',
      "barrhaven" => 'Barrhaven',
      "other-communities" => "Other Communities"
    ); ?>


    <?php 
    
    $numItems = count($neighArray);
    $i = 0;
    foreach ($neighArray as $key => $value) { ?>

    <section id="featured" class="section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <?php echo get_field($key.'_map') ?>
          </div>
          <div class="col-12 col-md-6">
            <h2><?php echo $value ?><?php if(++$i !== $numItems) echo ' neighborhoods'; ?> </h2>
            <ol>
              <?php
 
            $args = array(
              "post_type" => "nieghbours",
              'tax_query' => array(
                  array (
                      'taxonomy' => 'locations',
                      'field' => 'slug',
                      'terms' => $key,
                  )
              ),
            );
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
            
                    $query->the_post(); ?>
              <li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
              <?php }
            }
            // Restore original post data.
            wp_reset_postdata();
            
            ?>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>

  </main>

</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>