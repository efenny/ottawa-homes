<?php $section_margin = get_sub_field('section_margin'); ?>
<section id="video_text-<?php echo $currItem; ?>"
  class="section-video_text  position-relative <?php echo $section_margin['top'] ? 'section-margin-top' : '';?> <?php echo $section_margin['bottom'] ? 'section-margin-bottom' : ''; ?>">
  <div class="container">
    <?php if( have_rows('rows') ):
    while( have_rows('rows') ) : the_row();  ?>
    <div class="row">
      <div class="col-12 col-md-6 mb-md-0 mb-3">
        <div class="iframe-wrapper">
          <?php echo get_sub_field('video_iframe') ?>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <?php echo get_sub_field('text') ?>
      </div>
    </div>
    <?php endwhile;
    endif; ?>
  </div>
</section>