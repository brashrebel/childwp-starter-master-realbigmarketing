<?php
/**
 * The grid.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.0
 */
$post_slug = basename(get_permalink());
$position = get_field('staff_title');
?>

		<div id="post-<?php the_ID(); ?>" class="<?php if(is_home()) { ?>large-4 columns panel grid-item<?php } else { ?>small-6 medium-5 large-4 columns grid-item<?php } ?>">
			<a href="<?php the_permalink(); ?>">
          	<?php if ( has_post_thumbnail() ) : ?>
	            		<?php the_post_thumbnail('thumbnail', array('class' => 'th')); ?>
						<div class="slexcerpt">
							<h5><?php the_title(); ?></h5>
						</div>
			<?php elseif (is_post_type_archive('staff')) : ?>
	            		<?php echo get_avatar(get_the_author_meta('ID'), 200); ?>
						<div class="slexcerpt">
							<h4><?php the_title(); ?></h4>
							<h5><?php echo $position; ?></h5>
						</div>
	        <?php else : ?>
						<span class="fa fa-<?php echo $post_slug; ?>">
							<?php if (is_home()) { ?>
							<h4><?php the_title(); ?></h4>
							<?php } else { ?>
							<h5><?php the_title(); ?></h5>
							<?php } ?>
						</span>
						<div class="slexcerpt">
							<?php the_excerpt(); ?>
						</div>
			<?php endif; ?>
			</a>
		</div><!-- .entry-header -->