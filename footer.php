<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
$currentYear = Date('Y');

$global_footer = get_field('global_footer', 'options');
?>


<footer>
    <section id="top-footer" class="med-blue-bg section-padding-top section-padding-bottom text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $global_footer['logo']['url']; ?>"
                            alt="<?php echo get_bloginfo('name'); ?> logo">
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <div class="text"><?php echo $global_footer['text']; ?></div>
                    <?php if( have_rows('global_social_media', 'options') ): ?>
                    <ul class="social-media">
                        <?php while( have_rows('global_social_media', 'options') ) : the_row();?>
                        <li>
                            <a href="<?php echo get_sub_field('link')['url']; ?>" target="_blank">
                                <i class="fa fa-<?php echo get_sub_field('platform') ?>"></i>
                            </a>
                        </li>
                        <?php endwhile;?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom-footer" class="dark-blue-bg text-white text-center pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© Copyright 2020 RE/MAX Affiliates Geoff & Bobbie McGowan Realty Ltd.</p>
                    <p>Not the official website of RE/MAX Affiliates Realty Ltd. <a href="/privacy-policy">Privacy
                            Policy</a> | <a href="#">Additional Disclaimer Information</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>

</div><!-- #page we need this extra closing tag here -->

<a href="#top" id="toTop" class="show"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

</body>

</html>