<section id="slider_block-<?php echo $currItem; ?>">
  <div class="contaienr">
    <div class="row">
      <div class="col-12">
        <div class="gallery-wrapper">
          <?php 
          $images = get_sub_field('gallery');
          $size = 'large';
          if( $images ): ?>
          <ul>
            <?php foreach( $images as $image_id ): ?>
            <li>
              <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>