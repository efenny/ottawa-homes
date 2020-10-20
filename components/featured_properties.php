<section id="featured_properties-<?php echo $currItem; ?>"
  class="position-relative section-padding-top section-padding-bottom light-blue-angled-bg overflow-hidden">
  <div class="container mb-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <?php echo get_sub_field('text'); ?>
      </div>
    </div>
  </div>

  <div class="swiper swiper-overflow">
    <div class="container">
      <div class="swiper-container row" id="slider-gallery-featured_properties">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            "post_type" => "our_listings",
            "posts_per_page" => get_sub_field('amount_to_show')
          );
          
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                  $query->the_post(); ?>

          <div class="swiper-slide col-11 col-md-4 p-0">
            <a href="<?php echo get_the_permalink(); ?>"
              class="item-wrapper property position-relative d-flex flex-column">
              <img class="w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'slider') ?>"
                alt="<?php echo get_the_title(); ?>" />
              <div class="info">
                <h3 class="text-white h4"><?php echo get_the_title(); ?></h3>
              </div>
              <?php if(has_category('sold')) : ?>
              <div class="extra bg-primary py-1 px-3 text-white">Sold!</div>
              <?php endif; ?>
              <?php if(has_category('new')) : ?>
              <div class="extra bg-success py-1 px-3 text-white">New!</div>
              <?php endif; ?>
            </a>
          </div>

          <?php }
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <!-- <a class="carousel-control-prev carousel-control-outside" id="slider-gallery-featured_properties-prev" href="">
        <div class="carousel-control-prev-icon">prev</div>
      </a>
      <a class="carousel-control-next carousel-control-outside" id="slider-gallery-featured_properties-next" href="">
        <div class="carousel-control-next-icon">next</div>
      </a> -->
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <?php $button = get_sub_field('button'); ?>
        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
          class="btn btn-secondary mt-5 <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
      </div>
    </div>
  </div>
</section>