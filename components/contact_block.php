<section id="contact_block-<?php echo $currItem; ?>" class="section-col-text-img position-relative ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php echo get_sub_field('text'); ?>
            </div>
            <div class="col-12 col-md-6">
                <?php echo do_shortcode(get_sub_field('contact_shortcode')); ?>
            </div>
        </div>
    </div>
</section>