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
        <div class="row">
          <div class="col-12 col-md-7">
            <h1 class="h3 mb-4">The page you are looking for is not found.</h1>
            <p>The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you
              can
              return back to the site’s homepage and see if you can find what you are looking for.
            </p>
            <a href="<?php echo get_site_url(); ?>" class="btn btn-primary">Back to homepage </a>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>