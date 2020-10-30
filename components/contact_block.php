<section id="contact_block-<?php echo $currItem; ?>"
  class="section-padding-top section-padding-bottom light-blue-bg position-relative ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <?php echo get_sub_field('text') ? get_sub_field('text') : ''; ?>
      </div>
      <div class="col-12 col-md-5 offset-md-1">
        <?php echo get_sub_field('form_shortcode') ? do_shortcode(get_sub_field('form_shortcode')) : 'Please add a form shortcode'; ?>
      </div>
    </div>
  </div>
</section>