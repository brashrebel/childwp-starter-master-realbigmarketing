<?php
/**
 * The default template for custom post types.
 */
$post_type = get_post_type();
$title = get_the_title();
$post_id = get_the_id();
$auth_id = get_the_author_meta('ID');
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
		<header class="entry-header">
			<h1><?php echo $title; ?></h1>
		</header><!-- .entry-header -->
		<?php if ($post_type == 'staff') { ?>
					<div class="large-3 columns staff-info">
						<?php include('inc/staff-info.php'); ?>
					</div>
				<?php } ?>
        <div class="entry-content <?php if ($post_type == 'staff') { ?>large-9 columns<?php } ?>">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'wpforge' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'wpforge' ), 'after' => '</div>' ) ); ?>
            <?php if ($post_type == 'staff') { 
            	$fav_part = get_field('favorite_part_of_the_job');
            	if ($fav_part) { ?>
	            <blockquote><?php echo $fav_part; ?><cite><?php echo $title; ?></cite></blockquote>
	           <?php } } ?>
        </div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php wpforge_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'wpforge' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>

		</footer><!-- .entry-meta -->
	</article><!-- #post -->
<?php if ($post_type == 'staff') { 
	echo '<div class="staff-more row">';
	include('inc/staff-more.php');
	echo '</div>';
} elseif ($post_type == 'service') { 
	echo '<div class="service-more row">';
	include('inc/service-more.php');
	echo '</div>';
} elseif ($post_type == 'customer') { 
	echo '<div class="client-more row">';
	include('inc/client-more.php');
	echo '</div>';
} else { } ?>