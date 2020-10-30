<?php if(get_field('large_heading')) : ?>


<section id="page-header" class="section-padding-top section-padding-bottom dark-blue-bg position-relative"
  style="background-image:linear-gradient(90deg, #46494C 0%, rgba(70, 73, 76, 0) 68.74%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'x-large'); ?>');background-size: cover; background-position: center;">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 text-white">
        <?php if(is_single()) : ?>
        <h3><?php echo get_the_category()[0]->name; ?></h3>
        <?php endif; ?>
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<?php else : ?>

<section id="page-header" class="section-padding-top pb-3">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12">
        <?php if(is_single()) : ?>
        <h3><?php echo get_the_category()[0]->name; ?></h3>
        <?php endif; ?>
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php $componentFile = get_stylesheet_directory() . '/components/breadcrumbs.php';
if (file_exists($componentFile)) {
    include $componentFile;
    wp_reset_postdata();
} ?>