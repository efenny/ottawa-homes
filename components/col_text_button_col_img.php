<?php $section_margin = get_sub_field('section_margin'); ?>
<section id="col_text-<?php echo $currItem; ?>" class="section-col-text-img position-relative <?php echo $section_margin['top'] ? 'section-margin-top' : '';?> <?php echo $section_margin['bottom'] ? 'section-margin-bottom' : ''; ?>">
    <div class="row no-gutters align-items-center <?php echo get_sub_field('left_or_right_image') ? 'flex-row': 'flex-row-reverse'; ?> <?php echo get_sub_field('blue_background') ? 'light-blue-bg': ''; ?>">
            <div class="col-12 col-md-4 offset-md-1 mr-auto -text">
                <?php echo get_sub_field('text') ? get_sub_field('text') : ''; ?>
                <?php if( have_rows('buttons') ):  ?>
                    <div class="button-wrapper">
                    <?php while( have_rows('buttons') ) : the_row();
                    $button = get_sub_field('button'); ?>
                        <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>" class="btn <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php $image =  get_sub_field('image');
            if($image) {?>
                <div class="col-12 col-md-6 -image">
                    <figure>
                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                    </figure>
                </div>
            <?php } ?>
        </div>
</section>