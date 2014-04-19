<?php $args = array(
		'post_type'   => 'feature',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'ASC',
		'orderby'             => 'date',
		//Pagination Parameters
		'posts_per_page'         => 3,
	);
$feature_query = new WP_Query( $args ); ?>
<div class="row home-features" data-equalizer>
	<?php while ( $feature_query->have_posts() ) : $feature_query->the_post();
	get_template_part( 'content', 'grid' );
	endwhile;
	?>
</div>