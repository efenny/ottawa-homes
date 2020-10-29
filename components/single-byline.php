<div class="by-line <?php echo $args['classes'] ? $args['classes'] : ''; ?>">
  <span class="published">Published on <?php echo get_the_date(); ?></span> in <?php $categories = wp_get_post_categories(get_the_ID(), array(
      'fields' => 'all'
  ));
foreach( $categories as $category ) {
    
    echo '<span class="cat">' . $category->name . '</span> ';
}  ?> by <span class="author"><?php echo get_the_author_meta('nicename'); ?></span>

</div>