<?php


/**
 * Template name: Our Recent Sales
 * @package understrap-child
 */


// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

$args = array(
    'post_type'         => 'our_listings',
    'posts_per_page'    => 10,
    'paged'             => $paged,
    'orderby' => 'date',
    'order'   => 'DESC',
    'post_status' => 'publish',
    'suppress_filters' => true,
    'tax_query' => array(
         array (
            'taxonomy' => 'property_status',
            'field' => 'slug',
            'terms' => 'past-sold',
             'operator' => 'IN'
        )
    ),
);



$articles = new WP_Query($args );

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
          <div class="col-12 mb-4">
            <h1>Our Recent Sales</h1>
          </div>

          <?php  if ( $articles->have_posts() ) {
 
          while ( $articles->have_posts() ) {
            
          $articles->the_post();?>
          <div class="col-12 col-md-6 mb-5">
            <article class="blog-item">
              <div class="img mb-4">
                <?php echo  get_the_post_thumbnail(get_the_ID(), 'slider-blog') ?>
              </div>
              <div class="info">
                <h3 class="h4 mb-2">
                  <?php echo get_the_title(); ?><?php echo get_field('price') ? ' - $'.number_format(get_field('price')) : ''; ?>
                </h3>
              </div>
            </article>
          </div>

          <?php }
          
          wp_reset_postdata();
          
          } else { ?>
          <div class="col-12">
            <h3 class="text-center">There are currently no properties that fit this criteria. Please check back soon.
            </h3>
          </div>
          <?php } ?>
          <?php if ( $articles->have_posts() ) : ?>
          <div class="col-12">
            <?php include get_stylesheet_directory() . '/components/pagination-nav.php'; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>