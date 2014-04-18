<?php
/**
 * The grid.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.0
 */
$post_slug = basename(get_permalink());
?>

		<div id="post-<?php the_ID(); ?>" class="small-6 large-3 columns grid-item">
			<a href="<?php the_permalink(); ?>">
          	<?php if ( has_post_thumbnail() ) : ?>
	            		<?php the_post_thumbnail('thumbnail'); ?>
	            	
	        <?php else : ?>
						<span class="fa fa-<?php echo $post_slug; ?>"></span>
			<?php endif; ?>
			</a>
		</div><!-- .entry-header -->