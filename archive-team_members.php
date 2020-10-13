<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

global $wp_query;
var_dump($wp_query);

?>

<div class="wrapper pb-0 pt-0" id="page-wrapper">
    <main class="site-main" id="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo get_field('title', 'options') ?>
                    <?php echo get_field('text', 'options') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 -image">
                    
                </div>
                <div class="col-12 col-md-6 -text">
                    <div class="title">
                        <h1>The team members archive</h1>
                    </div>
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>
    </main> 
</div> 

<?php get_footer(); ?>
