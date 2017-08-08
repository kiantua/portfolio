<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');  
}

add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	/* $classes содержит
	Array(
		[1] => menu-item
		[2] => menu-item-type-post_type
		[3] => menu-item-object-page
		[4] => menu-item-284
	)
	*/
	$classes[] = 'my__class';

	return $classes;
}

function register_my_widgets(){
	register_sidebar( array(
		'name' => "Левая боковая панель сайта",
		'id' => 'left-sidebar',
		'description' => 'Эти виджеты будут показаны в левой колонке сайта',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );


?>