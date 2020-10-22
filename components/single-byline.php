<div class="by-line <?php echo $args['classes'] ? $args['classes'] : ''; ?>">
  <span class="published">Published on <?php echo get_the_date(); ?></span> in <?php $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
    
    echo '<span class="cat">' . $category_link . '</span> ';
}  ?> by <span class="author"><?php echo get_the_author_meta('nicename'); ?></span>

</div>