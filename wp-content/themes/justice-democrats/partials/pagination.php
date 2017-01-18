<div class="comp-pagination">
  <?php
    // pagination
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
      'base'        => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'current'     => max( 1, get_query_var('paged') ),
      'total'       => $wp_query->max_num_pages,
      'show_all'    => false,
      'end_size'    => 2,
      'mid_size'    => 2,
      'prev_next'   => true,
      'prev_text'   => __(''),
      'next_text'   => __(''),
      'type'        => 'list'
    ) );
  ?>
</div>
