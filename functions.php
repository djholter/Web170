<?php

/*
 Theme Name:   Bonsai Educational Center
 Theme URI:    http://holtergraphics.com/wordpress_s17/wp-content/themes/bonsai/
 Description:  Bonsai Educational Center Theme
 Author:       David Holter
 Author URI:   http://holtergraphics.com/wordpress_s17/
 Template:     bonsai
 Version:      1.0.0
*/

//Register menus
register_nav_menus(array(
    'main-menu' => ( 'Main' )
));
//

//Register sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
//

// thumbnails
add_theme_support( 'post-thumbnails' );
//

// excerpts
add_post_type_support( 'page', 'excerpt' );
//

// my title tag
function get_Bonsai_title_tag() {
	
	global $post;
	
	if ( is_front_page() ) { 
	
		bloginfo('description');
	
	} 
	
	elseif ( is_page() || is_single() ) { 
	
		the_title();  
	
	} 
	
	else { 
		
		bloginfo('description'); 
		
	}
	
	if ( $post->post_parent ) { 
	
		echo ' | '; 
		echo get_the_title($post->post_parent);  
		
	}
	echo ' | '; 
	bloginfo('name'); 
	echo ' | '; 
	echo 'Seattle, WA.'; 
	
}
//
?>
