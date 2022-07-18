<?php
  $posts_pagination = get_the_posts_pagination(
    array(
      'prev_text' => esc_html__( 'Previous page',  'fashion-boutique-pro' ),
      'next_text' => esc_html__( 'Next page',  'fashion-boutique-pro' ),
    )
  );

  if ( $posts_pagination ) {
    echo $posts_pagination;
  }
?>