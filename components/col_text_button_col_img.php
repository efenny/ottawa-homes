<?php
$button = get_sub_field('button');
$btnLinkTarget = $button['target'];
$btnLinkTitle = $button['title'];
$btnLinkUrl = $button['url'];
$btnLinkAlt = !empty($button['alt']) ? $button['alt'] : '';
$image = !empty(get_sub_field('image')['url']) ? get_sub_field('image')['url'] : '';
?>

<section id="coltext<?php echo $currItem; ?>" class="py-5 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 features-text">
                <div class="pr-md-5">
                    <h3 class="mb-4"><?php the_sub_field('title') ?></h3>
                    <div class="mb-4"><?php the_sub_field('text') ?></div>
                    <?php if (!empty($btnLinkUrl)) { ?>
                        <a class="btn btn-primary mb-4 mb-md-0" href="<?php echo $btnLinkUrl; ?>" <?php echo $btnLinkTarget; ?> <?php echo $btnLinkAlt ?>><?php echo $btnLinkTitle ?></a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-6 block-image" style="background:url('<?php echo $image; ?>') no-repeat center center; background-size: cover; "></div>

        </div>

    </div>
</section>



<style>
    .block-image {
        min-height: 400px;
    }
</style>