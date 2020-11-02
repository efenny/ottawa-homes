<section id="awards-<?php echo $currItem; ?>"
  class="section-col-text-img position-relative section-padding-top section-padding-bottom">
  <div class="row no-gutters">
    <div class="col-12 col-md-10 offset-1">
      <div class="swiper-container row" id="slider-gallery-awards">
        <div class="swiper-wrapper">
          <?php 
            
            $imagessss = get_sub_field('awards');
            $size = 'logo';
            
            foreach( $imagessss as $image_id ): ?>
          <div class="swiper-slide col-4 col-md-2 text-center">
            <?php echo wp_get_attachment_image( $image_id['ID'], $size ); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>