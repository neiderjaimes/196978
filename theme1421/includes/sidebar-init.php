<?php
function elegance_widgets_init() {
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array(
		'name'					=> 'Header',
		'id' 						=> 'header-sidebar',
		'description'   => __( 'Located at the top of pages.'),
		'before_widget' => '<div id="%1$s" class="widget-header">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Before Content Area
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Before Content Area',
		'id' 						=> 'before-content-area',
		'description'   => __( 'Located at the top of the Home page content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Home Content Area
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Home Content Area',
		'id' 						=> 'home-content-area',
		'description'   => __( 'Located in the middle of the Home page content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// After Content Area
	// Location: at the bottom of the Home page content 
	register_sidebar(array(
		'name'					=> 'After Content Area',
		'id' 						=> 'after-content-area',
		'description'   => __( 'Located at the bottom of the Home page content.'),
		'before_widget' => '<div id="%1$s" class="grid_8"><div class="holder">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget"><div class="holder">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>