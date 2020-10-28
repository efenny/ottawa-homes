  <div class="pagination-nav">
    <?php
    $big = 999999999; // need an unlikely integer
    
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $articles->max_num_pages,
        'next_text' => 'Next >',
        'prev_text' => '< Previous'
    ) );
    ?>
  </div>