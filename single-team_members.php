<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
    <main class="site-main" id="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 -image">
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
                <div class="col-12 col-md-6 -text">
                    <div class="title">
                        <h1><?php echo get_the_title(); ?></h1>
                        <h3><?php echo get_field('role'); ?></h3>
                    </div>
                    <div class="content">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main> 
</div> 

<?php get_footer(); ?>
