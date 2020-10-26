<?php $section_margin = get_sub_field('section_margin'); ?>
<section id="col_text-<?php echo $currItem; ?>"
  class="section-col-text-img position-relative <?php echo $section_margin['top'] ? 'section-margin-top' : '';?> <?php echo $section_margin['bottom'] ? 'section-margin-bottom' : ''; ?>">
  <div class="row no-gutters align-items-center <?php echo get_sub_field('blue_background') ? 'light-blue-bg': ''; ?>">


    <div class="col-12 col-md-<?php echo get_sub_field('column_ratios'); ?> mr-auto ">
      <?php if(get_sub_field('left_or_right_image')) : ?>

      <div class="row">
        <div class="col-12 col-9 offset-md-1">
          <?php echo get_sub_field('text') ? get_sub_field('text') : ''; ?>
          <?php if( have_rows('buttons') ):  ?>
          <div class="button-wrapper mt-4">
            <?php while( have_rows('buttons') ) : the_row();
                    $button = get_sub_field('button'); ?>
            <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
              class="btn <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>

      <?php else: ?>
      <?php $image =  get_sub_field('image');
            if($image) { ?>

      <figure>
        <?php echo wp_get_attachment_image($image, 'x-large'); ?>
      </figure>

      <?php } ?>

      <?php endif; ?>
    </div>



    <div class="col-12 col-md-<?php echo (12 - get_sub_field('column_ratios')) ?>  ">

      <?php if(!get_sub_field('left_or_right_image')) : ?>

      <?php echo get_sub_field('text') ? get_sub_field('text') : ''; ?>
      <?php if( have_rows('buttons') ):  ?>
      <div class="button-wrapper mt-4">
        <?php while( have_rows('buttons') ) : the_row();
                    $button = get_sub_field('button'); ?>
        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
          class="btn <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>

      <?php else: ?>
      <?php $image =  get_sub_field('image');
            if($image) { ?>

      <figure>
        <?php echo wp_get_attachment_image($image, 'x-large'); ?>
      </figure>

      <?php } ?>

      <?php endif; ?>
    </div>

  </div>
</section>