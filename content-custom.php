<?php
/**
 * The default template for custom post types.
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
       
		</header><!-- .entry-header -->
		<?php if( get_theme_mod( 'wpforge_post_display' ) == 'excerpt' || is_home()) { ?>
            <div class="entry-summary small-10 columns front-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
		<?php } else { ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'wpforge' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpforge' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
		<?php } // end if ?>

		<footer class="entry-meta">
			<?php wpforge_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'wpforge' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>

		</footer><!-- .entry-meta -->
	</article><!-- #post -->
