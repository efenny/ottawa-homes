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
        </div>

        <?php endwhile;
            endif; ?>
    </div>
</section>