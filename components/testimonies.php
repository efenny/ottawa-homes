<section id="cta_block-<?php echo $currItem; ?>"
  class="med-blue-bg position-relative section-padding-top section-padding-bottom <?php echo get_sub_field('image') ? 'bg-image' : ''; ?>"
  style="<?php echo get_sub_field('image') ? 'background-image: url('.get_sub_field('image')['url'].');' : ''; ?>">
  <div class="row no-gutters">
    <div class="col-12 col-md-10 offset-md-1">
      <div class="row">
        <?php if( have_rows('testimonies') ):  ?>
        <?php while( have_rows('testimonies') ) : the_row(); ?>
        <div class="col-12 col-md-4 text-white text-center">
          <div class="star-rating mb-3">
            <?php echo get_sub_field('rating_out_of_5'); ?>
          </div>
          <?php echo get_sub_field('content'); ?>
          <div class="author-from">
            <div class="author"><?php echo get_sub_field('author') ?></div>
            <div class="from"><?php echo get_sub_field('from') ?></div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="row no-gutters justify-content-center mt-5">
        <?php if( have_rows('buttons') ):  ?>
        <div class="button-wrapper">
          <?php while( have_rows('buttons') ) : the_row();
                  $button = get_sub_field('button'); ?>
          <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
            class="btn btn-white <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>