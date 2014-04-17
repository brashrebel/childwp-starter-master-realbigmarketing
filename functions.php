<?php
/*-------------------------------------
New widgetized areas for Big menu
-------------------------------------*/
function rbm_menu_widget_areas() {
	// Big Ideas 1
	register_sidebar( array(
		'name' => 'Big Ideas Column 1',
		'id' => 'big_ideas_1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
	// Big Ideas 2
	register_sidebar( array(
		'name' => 'Big Ideas Column 2',
		'id' => 'big_ideas_2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
	// Big Ideas 3
	register_sidebar( array(
		'name' => 'Big Ideas Column 3',
		'id' => 'big_ideas_3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
	// Real Results 1
	register_sidebar( array(
		'name' => 'Real Results Column 1',
		'id' => 'real_results_1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
	// Real Results 2
	register_sidebar( array(
		'name' => 'Real Results Column 2',
		'id' => 'real_results_2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
	// Real Results 3
	register_sidebar( array(
		'name' => 'Real Results Column 3',
		'id' => 'real_results_3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
}
add_action('widgets_init', 'rbm_menu_widget_areas');
?>