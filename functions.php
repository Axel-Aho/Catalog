<?php

function gtesti_script_enqueue() {
	wp_enqueue_style('bootstrapStyle',get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');
	wp_enqueue_style('newstyle',get_template_directory_uri() . '/css/gtesti.css', array(), '1.0.0', 'all');
		wp_enqueue_style('mainstyle',get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs',get_template_directory_uri() . '/js/gtesti.js', array(), '1.0.0', 'true');
	wp_enqueue_script('bootstrapjs',get_template_directory_uri() . '/js/bootsrap.js', array(), '1.0.0', 'true');
}

add_action('wp_enqueue_scripts', 'gtesti_script_enqueue');



function gtesti_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'gtesti_theme_setup');


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// Widget Locations

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Alkuperä1',
		'id'   => 'content1',
		'description'   => 'This is the widgetized contnet1.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä2',
		'id'   => 'content2',
		'description'   => 'This is the widgetized content2.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä3',
		'id'   => 'content3',
		'description'   => 'This is the widgetized content3.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä4',
		'id'   => 'content4',
		'description'   => 'This is the widgetized content4.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä5',
		'id'   => 'content5',
		'description'   => 'This is the widgetized content5.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä6',
		'id'   => 'content6',
		'description'   => 'This is the widgetized content6.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä7',
		'id'   => 'content7',
		'description'   => 'This is the widgetized content7.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä8',
		'id'   => 'content8',
		'description'   => 'This is the widgetized content8.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Alkuperä9',
		'id'   => 'content9',
		'description'   => 'This is the widgetized content9.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Progressiopalkki',
		'id'   => 'palkki',
		'description'   => 'This is the widgetized content5.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Tuotetiedot2',
		'id'   => 'tuotetiedot2',
		'description'   => 'This is the widgetized tuotetiedot 2.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));


}
