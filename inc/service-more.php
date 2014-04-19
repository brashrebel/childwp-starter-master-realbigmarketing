		<?php $args = array(
				
				//Type & Status Parameters
				'post_type'   => 'customer',
				'post_status' => 'publish',
				
				//Order & Orderby Parameters
				'order'               => 'DESC',
				'orderby'             => 'date',
				//Pagination Parameters
				'posts_per_page'         => -1,
				//Taxonomy Parameters
				'tax_query' => array(
				'relation'  => 'AND',
					array(
						'taxonomy'         => 'service',
						'field'            => 'id',
						'terms'            => array( $post_id )
					)
				)
			);
	$client_query = new WP_Query( $args );
	if ($client_query->have_posts()) {
		?>
	<h3>Customers who have benefited from <?php echo $title; ?> with Real Big Marketing</h3>

		<div class="row">
			<?php while ( $client_query->have_posts() ) : $client_query->the_post();
			get_template_part( 'content', 'grid' );
			endwhile;
			wp_reset_query(); ?>
		</div>
		<?php } ?>