<?php
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
/*-------------------------------------
Exclude Private category from main loop
-------------------------------------*/
function rbm_exclude($query) {
if ($query->is_home()) {
	$query->set('cat', '-143');
}
return $query;
}
add_filter('pre_get_posts', 'rbm_exclude');
/*-------------------------------------
Google Analytics
-------------------------------------*/
function rbm_analytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37145568-1', 'realbigmarketing.com');
  ga('send', 'pageview');
</script><?php
}
add_action('wp_head', 'rbm_analytics', 11);
?>