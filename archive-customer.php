<?php
/**
 * The template for displaying the client archive.
 */

get_header(); ?>

	<div id="content" class="medium-8 large-8 columns" role="main">
    
    	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumbs">','</ul>'); } ?>

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h4>Our clients</h4>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'grid' );

			endwhile;

			wpforge_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>