<section id="card_block-<?php echo $currItem; ?>" class="light-blue-bg section-padding-top section-padding-bottom">
  <?php if(get_sub_field('text')) {?>
  <div class="row no-gutters w-100">
    <div class="col-12 text-center text-blue mb-5"><?php echo get_sub_field('text'); ?></div>
  </div>
  <?php } ?>
  <div class="row no-gutters justify-content-around w-100">
    <?php 
            if( have_rows('cards') ):
            while( have_rows('cards') ) : the_row(); ?>

    <div class="col-12 col-md-3 text-center">
      <figure class="mb-4">
        <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="column icon">
      </figure>
      <div class="col-text">
        <?php echo get_sub_field('text'); ?>
      </div>
      <?php if( have_rows('buttons') ):  ?>
      <div class="button-wrapper mt-4">
        <?php while( have_rows('buttons') ) : the_row();
                    $button = get_sub_field('button'); ?>
        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
          class="btn <?php echo get_sub_field('button_class') ? get_sub_field('button_class') : 'btn-secondary'; ?>"><?php echo $button['title'] ?></a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>

    <?php endwhile;
            endif; ?>
  </div>
</section>