<section id="card_block-<?php echo $currItem; ?>"
  class="card-block <?php echo !get_sub_field('blue_background') ? '' : 'light-blue-bg'; ?> section-padding-top section-padding-bottom">

  <?php if(get_sub_field('text')) {?>
  <div class="container">
    <div class="row w-100">
      <div class="col-12 col-md-8 offset-md-2 text-center text-blue mb-5"><?php echo get_sub_field('text'); ?></div>
    </div>
  </div>
  <?php } ?>
  <div class="container">
    <div class="row justify-content-around w-100">
      <?php $cards_per_row = get_sub_field('cards_per_row'); ?>
      <?php 
            if( have_rows('cards') ):
            while( have_rows('cards') ) : the_row(); ?>

      <div class="col-12 col-md-<?php echo $cards_per_row ? 12/$cards_per_row : '4'; ?> mb-3 text-center">
        <?php if(get_sub_field('icon')) : ?>
        <figure class="mb-4">
          <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="column icon">
        </figure>
        <?php endif; ?>
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
  </div>
</section>