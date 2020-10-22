<section id="page-header" class="section-padding-top section-padding-bottom dark-blue-bg position-relative"
  style="background-image:linear-gradient(90deg, #46494C 0%, rgba(70, 73, 76, 0) 68.74%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'x-large'); ?>');background-size: cover; background-position: center;">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 text-white">
        <h3>cat?</h3>
        <h1><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<?php  if ( function_exists('yoast_breadcrumb') ):?>
<section class="breadcrumbs pt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>