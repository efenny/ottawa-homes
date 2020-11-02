<section id="latest_blog_posts-<?php echo $currItem; ?>"
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
      <div class="swiper-container row" id="slider-gallery-latest_blog_posts">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            "post_type" => "post",
            'post_status' => 'publish',
            "posts_per_page" => get_sub_field('amount_to_show')
          );
          
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                  $query->the_post(); ?>

          <div class="swiper-slide col-11 col-md-4 p-0">
            <a href="<?php echo get_the_permalink(); ?>" class="item-wrapper blog-item position-relative">
              <figure>
                <img class="w-100 mb-3"
                  src="<?php echo has_post_thumbnail(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID(), 'slider-blog') : catch_that_image(); ?>"
                  alt="<?php echo get_the_title(); ?>" />
              </figure>
              <div class="info">
                <h3 class="h4 mb-2"><?php echo get_the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_content(), 15, '...') ?></p>
                <div class="read-more">Read More ></div>
              </div>
            </a>
          </div>

          <?php }
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <!-- <a class="carousel-control-prev carousel-control-outside" id="slider-gallery-latest_blog_posts-prev" href="">
        <div class="carousel-control-prev-icon">prev</div>
      </a>
      <a class="carousel-control-next carousel-control-outside" id="slider-gallery-latest_blog_posts-next" href="">
        <div class="carousel-control-next-icon">next</div>
      </a> -->
    </div>
  </div>
</section>