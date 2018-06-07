
<?php 

function red_starter_scripts() {
   wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

   wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
   wp_enqueue_script( 'red-starter-header-functions', get_template_directory_uri() . '/build/js/header-functions.min.js', array('jquery'), null, true );
   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
       wp_enqueue_script( 'comment-reply' );
   }



    
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts');


?>



<?php

function red_scripts() {
   $script_url = get_template_directory_uri() . '/build/js/app.min.js';
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'red_comments', $script_url, array( 'jquery' ), false, true );
   wp_localize_script( 'red_comments', 'red_vars', array(
    'rest_url' => esc_url_raw( rest_url() ),
    'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
    'post_id' => get_the_ID()
) );
//   wp_localize_script( 'red_comments', 'red_vars', array(
//       'ajax_url' => admin_url( 'admin-ajax.php' ),
//       'comment_nonce' => wp_create_nonce( 'red_comment_status' ),
//       'post_id' => get_the_ID()
//   ) );
}
add_action( 'wp_enqueue_scripts', 'red_scripts' );
?>






<?php


  ?>