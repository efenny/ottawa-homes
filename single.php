<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
  <main class="site-main" id="main">
    <section class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="col-12 col-md-8 mb-4 mb-md-0  -content">
            <h1 class="h2"><?php echo get_the_title(); ?></h1>
            <?php get_template_part('components/single-byline', '', array(
                'classes' => 'mt-2 mb-2'
              )); ?>
            <figure class="featured-image mb-3">
              <?php echo get_the_post_thumbnail($post_id, 'large', array(
                  'alt' => get_the_title()
                )); ?>
              <?php if(get_the_post_thumbnail_caption()): ?>
              <figcaption class="mt-3"><?php echo get_the_post_thumbnail_caption(); ?></figcaption>
              <?php endif; ?>
            </figure>
            <?php echo get_the_content();  ?>
            <!-- share -->
            <?php get_template_part('components/social_share', '', array(
                'classes' => 'mt-4'
              )); ?>
          </article>
          <aside class="col-12 col-md-4 -categories">
            <h3>Categories</h3>
            <ul class="cats">
              <?php echo wp_list_categories(array(
              'title_li' => ''
            )); ?>
            </ul>
          </aside>
          <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>