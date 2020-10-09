<section id="contentCards<?php echo $currItem; ?>" class="py-5">
    <div class="container">
        <div class="row">
            <?php if (have_rows('cards')) { ?>
                <?php while (have_rows('cards')) {
                    the_row(); ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-top mb-4" style="background-image:url('<?php echo get_sub_field('card_image')['sizes']['large']; ?>')"></div>
                                <h5 class="card-title"><?php the_sub_field('card_title'); ?></h5>
                                <p class="card-text mb-3"><?php the_sub_field('card_text');?></p>
                                <a href="<?php echo get_sub_field('card_link')['url']; ?>" target="<?php echo get_sub_field('card_link')['target']; ?>" class="btn btn-primary"><?php echo get_sub_field('card_link')['title']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            <?php }  ?>
        </div>
    </div>
</section>

<style>
    .card-img-top {
        height:200px;
        background-size:cover;
        background-position:center;
    }
</style>