<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

setlocale(LC_MONETARY, get_locale());

$basic_details = get_field('basic_details');
?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
  <main class="site-main" id="main">


    <section id="page-header" class="large section-padding-top section-padding-bottom dark-blue-bg position-relative"
      style="background-image:linear-gradient(90deg, #46494C 0%, rgba(70, 73, 76, 0) 68.74%), url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'x-large'); ?>');background-size: cover; background-position: center;">
      <div class="container position-relative">
        <div class="row">
          <div class="col-12 text-white">
            <?php if(is_single() && get_the_category()) : ?>
            <h3><?php echo get_the_category()[0]->name; ?></h3>
            <?php endif; ?>
            <h1><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>


    <section class="section-padding-top section-padding-bottom">
      <div class="container">
        <div class="row main-content">


          <div class="col-12 col-md-6 gallery-col mb-5 mb-md-0">
            <div class="gallery-wrapper">
              <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                  <?php 
                  $images = get_field('property_photos');
                  $size = 'slider';
                  if( $images ): ?>
                  <?php foreach( $images as $image_id ): ?>
                  <div class="swiper-slide large-images"
                    data-src="<?php echo wp_get_attachment_image_src($image_id, 'full')[0]; ?>">
                    <div class="img-wrapper">
                      <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>

              <div class="gallery-thumb-wrapper">
                <div class="swiper-container gallery-thumbs">
                  <div class="swiper-wrapper">
                    <?php 
                  if( $images ): ?>
                    <?php foreach( $images as $image_id ): ?>
                    <div class="swiper-slide">
                      <div class="inner-wrapper">
                        <div class="img-wrapper">
                          <?php echo wp_get_attachment_image( $image_id, 'logo' ); ?>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

            <?php if( have_rows('buttons') ):  ?>
            <div class="button-wrapper mt-4">
              <?php while( have_rows('buttons') ) : the_row();
                    $button = get_sub_field('button'); ?>
              <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
                class="btn btn-secondary"><?php echo $button['title'] ?></a>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
          </div>


          <div class="col-12 col-md-6 -text">
            <div class="title">
              <h2 class="h4"><?php echo get_the_title(); ?></h2>
              <?php if(get_field('price')): ?><h3 class="h2">$<?php echo number_format(get_field('price')); ?></h3>
              <?php endif; ?>
            </div>
            <div class="basic-details mt-4">
              <div class="neighbourhood">
                <strong>Neighbourhood:</strong> <?php echo $basic_details['neighbourhood']; ?>
              </div>
              <div class="details mt-2">
                <?php $detail_array = array(
                  "Style" => $basic_details['style'],
                  "Type" => $basic_details['type'],
                  "MLS #" => $basic_details['mls_#'],
                  "Bedrooms" => $basic_details['bedrooms'],
                  "Bathrooms" => $basic_details['bathrooms'],
                ); 

                $result = array_filter($detail_array); 
                
                echo implode('<span class="seperator">|</span>', array_map(
                    function ($v, $k) { return $v ? "<span class='".urlencode($k)."'><strong>".$k.":</strong> ".$v."</span>" : ''; },
                    $result,
                    array_keys($result)
                ));
                
                ?>
              </div>
              <div class="description mt-4">
                <?php echo get_field('description'); ?></div>
            </div>
          </div>
          <div class="col-12 col-md-12 mt-3 mt-md-5">
            <a href="#" class="btn btn-primary btn-block">
              <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.7507 3.12562C19.3776 3.12562 19.9088 3.35494 20.3443 3.80857C20.7799 4.2672 21 4.81555 21 5.46859V7.81157H0V5.46859C0 4.81555 0.220146 4.26221 0.655652 3.80857C1.09116 3.35494 1.62238 3.12562 2.24932 3.12562H4.49863V0.782652C4.49863 0.55334 4.57042 0.368893 4.70921 0.219342C4.84799 0.0747757 5.02985 0 5.25 0H6.74795C6.96809 0 7.14517 0.0747757 7.28874 0.219342C7.42753 0.363908 7.49932 0.55334 7.49932 0.782652V3.12562H13.5007V0.782652C13.5007 0.55334 13.5725 0.368893 13.7113 0.219342C13.85 0.0747757 14.0319 0 14.2521 0H15.75C15.9701 0 16.1472 0.0747757 16.2908 0.219342C16.4296 0.363908 16.5014 0.55334 16.5014 0.782652V3.12562H18.7507ZM0 22.657V9.37687H21V22.657C21 23.3101 20.7799 23.8634 20.3443 24.317C19.9041 24.7707 19.3776 25 18.7507 25H2.24932C1.62238 25 1.09116 24.7707 0.655652 24.317C0.220146 23.8634 0 23.3101 0 22.657ZM3.56062 12.5025C3.18733 12.5025 2.9959 12.6969 2.9959 13.0907V15.0449C2.9959 15.4337 3.18254 15.6331 3.56062 15.6331H5.43665C5.80994 15.6331 6.00137 15.4387 6.00137 15.0449V13.0907C6.00137 12.7019 5.81472 12.5025 5.43665 12.5025H3.56062ZM3.56062 18.7488C3.18733 18.7488 2.9959 18.9432 2.9959 19.337V21.2911C2.9959 21.68 3.18254 21.8794 3.56062 21.8794H5.43665C5.80994 21.8794 6.00137 21.6849 6.00137 21.2911V19.337C6.00137 18.9482 5.81472 18.7488 5.43665 18.7488H3.56062ZM9.56199 12.5025C9.1887 12.5025 8.99727 12.6969 8.99727 13.0907V15.0449C8.99727 15.4337 9.18391 15.6331 9.56199 15.6331H11.438C11.8113 15.6331 12.0027 15.4387 12.0027 15.0449V13.0907C12.0027 12.7019 11.8161 12.5025 11.438 12.5025H9.56199ZM9.56199 18.7488C9.1887 18.7488 8.99727 18.9432 8.99727 19.337V21.2911C8.99727 21.68 9.18391 21.8794 9.56199 21.8794H11.438C11.8113 21.8794 12.0027 21.6849 12.0027 21.2911V19.337C12.0027 18.9482 11.8161 18.7488 11.438 18.7488H9.56199ZM15.5634 12.5025C15.1901 12.5025 14.9986 12.6969 14.9986 13.0907V15.0449C14.9986 15.4337 15.1853 15.6331 15.5634 15.6331H17.4394C17.8127 15.6331 18.0041 15.4387 18.0041 15.0449V13.0907C18.0041 12.7019 17.8175 12.5025 17.4394 12.5025H15.5634ZM15.5634 18.7488C15.1901 18.7488 14.9986 18.9432 14.9986 19.337V21.2911C14.9986 21.68 15.1853 21.8794 15.5634 21.8794H17.4394C17.8127 21.8794 18.0041 21.6849 18.0041 21.2911V19.337C18.0041 18.9482 17.8175 18.7488 17.4394 18.7488H15.5634Z"
                  fill="white" />
              </svg>
              Book an Appointment</a>
          </div>
        </div>


        <?php $more_details = get_field('more_details'); ?>
        <?php if($more_details['left_column'] || $more_details['right_column']) : ?>
        <div class="row py-5 more-details">
          <div class="col-12 col-md-6"><?php echo $more_details['left_column'] ? $more_details['left_column'] : ''; ?>
          </div>
          <div class="col-12 col-md-6"><?php echo $more_details['right_column'] ? $more_details['right_column'] : ''; ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if(get_field('map_iframe')) : ?>
        <div class="row map">
          <div class="col-12">
            <div class="iframe-wrapper">
              <?php echo get_field('map_iframe'); ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section>


    <?php $our_listings = get_field('our_listings', 'options') ?>
    <section id="contact_block" class="section-padding-top section-padding-bottom light-blue-bg position-relative ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <?php echo $our_listings['text'] ? $our_listings['text'] : ''; ?>
          </div>
          <div class="col-12 col-md-5 offset-md-1">
            <?php echo $our_listings['form_shortcode'] ? do_shortcode($our_listings['form_shortcode']) : 'Please add a form shortcode'; ?>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>