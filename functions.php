<?php 
//$uri = get_template_directory_uri();

 //$GLOBALS["uri"] = get_template_directory_uri();

// function getCurrentCatID() {  
// 	global $wp_query;  
// 	if(is_category() || is_single()){  
// 		$cat_ID = get_query_var('cat');  
// 	}  
// 	return $cat_ID;  
// }

if (function_exists('add_theme_support')) {
 add_theme_support('menus');
}
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' ); 
}

register_post_type('team',array(
'labels'=>array(
    'name'          =>'Team',
    'add_new_item'  =>'Add New Item'
    ),
'public'=>true,
'menu_icon'=>'dashicons-groups',
'supports'=>array('title','editor','thumbnail'),
'has_archive'  => true
));

register_post_type('portfolio',array(
'labels'=>array(
    'name'          =>'Portfolio',
    'add_new_item'  =>'Add New Item'
    ),
'public'=>true,
'menu_icon'=>'dashicons-index-card',
'supports'=>array('title','thumbnail'),
'has_archive'  => true
));

//dashicons-admin-users
//dashicons-groups
//dashicons-index-card

?>