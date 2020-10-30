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
        <div class="row">


          <?php  if ( have_posts() ) { ?>
          <div class="col-12 mb-4">
            <h1>Search Results for: <?php echo get_search_query(); ?></h1>
          </div>
          <?php  while ( have_posts() ) {
            
         the_post();?>
          <div class="col-12  mb-5">
            <article class="blog-item">
              <a href="<?php echo get_the_permalink(); ?>">
                <div class="info">
                  <h3 class="h4 mb-2">
                    <?php echo get_the_title(); ?><?php echo get_field('price') ? ' - $'.number_format(get_field('price')) : ''; ?>
                  </h3>
                </div>
              </a>
            </article>
          </div>

          <?php }
          
          wp_reset_postdata();?>

          <?php } else { ?>
          <div class="col-12 col-md-12 mb-5">
            <h1>There are no results for: <?php echo get_search_query(); ?></h1>
            <p>Plase search another term or head back to the hompage.</p>
          </div>
          <div class="col-12 col-md-6">
            <?php echo get_search_form(); ?>
            <a href="<?php echo get_site_url(); ?>" class="btn btn-secondary mt-5">Back to homepage </a>

          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>