<?php
$ctaTitle = !empty(get_sub_field('title')) ? get_sub_field('title') : '';
$ctaText = !empty(get_sub_field('text')) ? get_sub_field('text') : '';
$ctaButton = !empty(get_sub_field('button')) ? get_sub_field('button') : array('url' => '', 'title' => '', 'target' => '');

// Generating the style attribute based on the settings
$ctaStyle .= !empty(get_sub_field('background_color')) ? 'style="background-color:' . get_sub_field('background_color') . ';"' : '';
?>

<section id="ctaBlock<?php echo $currItem; ?>" class="py-5 position-relative" <?php echo $ctaStyle; ?>>
    <div class="container">
        <div class="cta-text">
            <h3><?php echo $ctaTitle; ?></h3>
            <div class="pt-3 pb-2"><?php echo $ctaText; ?></div>
            <a href="<?php echo $ctaButton['url']; ?>" target="<?php echo $ctaButton['target']; ?>" class="btn btn-primary"><?php echo $ctaButton['title']; ?></a>
        </div>
    </div>
</section>

<style>

.cta-text{
    max-width:700px;
    margin:auto;
    position:relative;
    text-align: center;
}

</style>