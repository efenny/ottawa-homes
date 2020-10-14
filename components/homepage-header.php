<section id="homepage-header"
    class="d-flex align-items-center section-padding-top section-padding-bottom dark-blue-bg position-relative" style="
    background-image:linear-gradient(90deg, #46494C 0%, rgba(70, 73, 76, 0) 68.74%),
    url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'x-large'); ?>');
    background-size: cover;
    background-position: center;">
    <div class="row position-relative w-100">
        <div class="col-12 col-md-3 offset-md-1 text-white">
            <?php $header_section = get_field('header_section');
            if( have_rows('header_section') ): while( have_rows('header_section')): the_row(); ?>
            <h1><?php echo $header_section['title'] ? $header_section['title'] : get_the_title(); ?></h1>
            <div class="text"><?php echo $header_section['text'] ?></div>
            <?php if( have_rows('buttons') ):  ?>
            <div class="button-wrapper">
                <?php while( have_rows('buttons') ) : the_row();
                            $button = get_sub_field('button'); ?>
                <a href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ?>"
                    class="btn <?php echo get_sub_field('button_class') ?>"><?php echo $button['title'] ?></a>
                <?php endwhile;
                        ?>
            </div>
            <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>