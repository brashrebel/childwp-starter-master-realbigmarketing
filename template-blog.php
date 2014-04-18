<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

		<div id="content" class="medium-8 large-8 columns" role="main">
		<?php
		/**
		 * The WordPress Query class.
		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
		 *
		 */
			$args = array(
				
				//Type & Status Parameters
				'post_status' => 'publish',
				//Order & Orderby Parameters
				'order'               => 'DESC',
				'orderby'             => 'date',
				//Pagination Parameters
				'posts_per_page'         => 10,
			);
		
		$blog_query = new WP_Query( $args ); ?>

			<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

                    <?php get_template_part( 'content', 'blog' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
        <?php get_sidebar(); ?>
<?php get_footer(); ?>