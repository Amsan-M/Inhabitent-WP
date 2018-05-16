

<?php $args = array(
	'name'          => __( 'Footer', 'inhabitent' ),
	'id'            => 'footer-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '',
    'after_title'   => '' ); 
    
    ?>

<?php register_sidebar( $args ); ?>
    
