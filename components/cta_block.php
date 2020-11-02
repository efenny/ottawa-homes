<?php
$ctaText = !empty(get_sub_field('text')) ? get_sub_field('text') : '';
$ctaButton = !empty(get_sub_field('button')) ? get_sub_field('button') : array('url' => '', 'title' => '', 'target' => '');

?>

<section id="cta_block-<?php echo $currItem; ?>"
  class="med-blue-bg position-relative section-padding-top section-padding-bottom <?php echo get_sub_field('image') ? 'bg-image' : ''; ?>"
  style="<?php echo get_sub_field('image') ? 'background-image: url('.get_sub_field('image')['url'].');' : ''; ?>">
  <div class="container">
    <div class="cta-text text-white text-center">
      <div><?php echo $ctaText; ?></div>
      <?php if( have_rows('buttons') ):  ?>
      <div class="button-wrapper mt-5">
        <?php while( have_rows('buttons') ) : the_row();
                $button = get_sub_field('button'); ?>
        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
          class="btn btn-white <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>