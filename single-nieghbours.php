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

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="col-12 col-md-8 mb-4 mb-md-0  -content">
            <h1 class="h2"><?php echo get_the_title(); ?></h1>

            <?php echo apply_filters( 'the_content', get_the_content() ) ?>
            <!-- share -->
            <?php get_template_part('components/social_share', '', array(
                'classes' => 'mt-4' 
              )); ?>
          </article>

          <aside class="col-12 col-md-4 -categories">

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