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
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	// Big Ideas 2
	register_sidebar( array(
		'name' => 'Big Ideas Column 2',
		'id' => 'big_ideas_2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	// Big Ideas 3
	register_sidebar( array(
		'name' => 'Big Ideas Column 3',
		'id' => 'big_ideas_3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	// Real Results 1
	register_sidebar( array(
		'name' => 'Real Results Column 1',
		'id' => 'real_results_1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	// Real Results 2
	register_sidebar( array(
		'name' => 'Real Results Column 2',
		'id' => 'real_results_2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	// Real Results 3
	register_sidebar( array(
		'name' => 'Real Results Column 3',
		'id' => 'real_results_3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
}
add_action('widgets_init', 'rbm_menu_widget_areas');
/*-------------------------------------
Increase number of posts shown on clients and services
-------------------------------------*/
function rbm_increase_num_posts($query) {
	if ($query->is_main_query()) {
		if ($query->is_post_type_archive( 'service' ) || $query->is_post_type_archive( 'customer' )) {
			$query->set('posts_per_page', 30);
			wp_reset_query();
			return;
		}
	}
}
add_action('pre_get_posts', 'rbm_increase_num_posts', 1);
?>