<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

$args = array(
    'post_type'         => 'our_listings',
    'posts_per_page'    => 10,
    'paged'             => $paged,
    'orderby'           => 'date',
    'order'             => 'DESC',
    'tax_query' => array(
         array (
            'taxonomy' => 'property_status',
            'field' => 'slug',
            'terms' => 'past-sold',
            'operator' => 'NOT IN'
        )
    ),
);

if (!empty($_GET['filter'])) {
  $args = array(
    'post_type'         => 'our_listings',
    'posts_per_page'    => 10,
    'paged'             => $paged,
    'orderby'           => 'date',
    'order'             => 'DESC',
    'tax_query' => array(
      'relation' => 'AND',
        array (
            'taxonomy' => 'property_status',
            'field' => 'slug',
            'terms' => $_GET['filter'],
        ),
         array (
            'taxonomy' => 'property_status',
            'field' => 'slug',
            'terms' => 'past-sold',
            'operator' => 'NOT IN'
        )
    ),
);
}


$articles = new WP_Query($args );

$propertyStatsArray = array(
  'less-than-500000' => "Less than $500,000",
  'more-than-500000' => "More than $500,000",
);

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
            <h1>Our Listings</h1>
            <div class="button-nav">
              <a href="<?php echo get_post_type_archive_link('our_listings'); ?>"
                class="<?php echo !$_GET['filter'] ? 'active' : ''; ?>">All</a>
              <?php foreach ($propertyStatsArray as $key => $value) { ?>
              <a href="<?php echo get_post_type_archive_link('our_listings'); ?>?filter=<?php echo $key ?>"
                class="<?php echo $key == $_GET['filter'] ? 'active' : ''; ?>"><?php echo $value ?></a>
              <?php } ?>
            </div>
          </div>

          <?php  if ( $articles->have_posts() ) {
 
          while ( $articles->have_posts() ) {
            
          $articles->the_post();?>
          <div class="col-12 col-md-6 mb-5">
            <article class="blog-item">
              <a href="<?php echo get_the_permalink(); ?>">
                <div class="img mb-4">
                  <?php echo  get_the_post_thumbnail(get_the_ID(), 'slider-blog') ?>
                </div>
                <div class="info">
                  <h3 class="h4 mb-2">
                    <?php echo get_the_title(); ?><?php echo get_field('price') ? ' - $'.number_format(get_field('price')) : ''; ?>
                  </h3>
                </div>
              </a>
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