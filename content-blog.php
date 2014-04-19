<?php
/**
 * The blog template content.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
			<?php else : ?>
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'wpforge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
          	<?php if ( has_post_thumbnail() ) : ?>
                
				<div class="small-2 columns">
	            	<a href="<?php the_permalink(); ?>">
	            		<?php the_post_thumbnail('thumbnail', array('class' => 'th')); ?>
	            	</a>
	            </div><!-- /columns -->
	        <?php else : ?>
            	<div class="small-2 columns">
            		<a href="<?php the_permalink(); ?>">
						<?php echo get_avatar(get_the_author_meta('ID'), 175); ?>
					</a>
				</div><!-- /columns -->
			<?php endif; ?>
            <!-- Comments removed by Kyle -->
		</header><!-- .entry-header -->
            <div class="entry-summary small-10 columns front-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->

		<footer class="entry-meta">
			<?php wpforge_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'wpforge' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>

		</footer><!-- .entry-meta -->
	</article><!-- #post -->
