<?php
$fav_quote = get_field('favorite_quote');
$fav_books = get_field('favorite_books');
$fav_music = get_field('favorite_music');
$fav_movies = get_field('favorite_movies');
$fav_tv = get_field('favorite_tv_show');
$fav_executive = get_field('famous_executive_i_admire');
$os = get_field('os_of_choice');
?>
<div class="staff-more row">
	<div class="large-6 columns">
		<h3>More info about <?php echo $title; ?></h3>
		<table>
			<tbody>
				<?php if ($fav_quote) { ?>
					<tr>
						<td><span class="label">Favorite quote</span></td>
						<td><?php echo $fav_quote; ?></td>
					</tr>
				<?php } ?>
				<?php if ($fav_books) { ?>
				<tr>
					<td><span class="label">Favorite books</span></td>
					<td><?php echo $fav_books; ?></td>
				</tr>
				<?php } ?>
				<?php if ($fav_music) { ?>
				<tr>
					<td><span class="label">Favorite music</span></td>
					<td><?php echo $fav_music; ?></td>
				</tr>
				<?php } ?>
				<?php if ($fav_movies) { ?>
				<tr>
					<td><span class="label">Favorite movies</span></td>
					<td><?php echo $fav_movies; ?></td>
				</tr>
				<?php } ?>
				<?php if ($fav_tv) { ?>
				<tr>
					<td><span class="label">Favorite TV shows</span></td>
					<td><?php echo $fav_tv; ?></td>
				</tr>
				<?php } ?>
				<?php if ($fav_executive) { ?>
				<tr>
					<td><span class="label">Famous executive I admire</span></td>
					<td><?php echo $fav_executive; ?></td>
				</tr>
				<?php } ?>
				<?php if ($os) { ?>
				<tr>
					<td><span class="label">OS of choice</span></td>
						<td><?php echo $os; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="large-6 columns">
		<h3>Blog posts by <?php echo $title; ?></h3>
		<?php $args = array(
				
				//Author Parameters
				'author'      => $auth_id,
				//Type & Status Parameters
				'post_type'   => 'post',
				'post_status' => 'publish',
				
				//Order & Orderby Parameters
				'order'               => 'DESC',
				'orderby'             => 'date',
				//Pagination Parameters
				'posts_per_page'         => 6,
			);
	$staff_query = new WP_Query( $args ); ?>
		<div class="row">
			<?php while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?>
			<div class="staff-posts large-6 columns">
				<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()){
				the_post_thumbnail('thumbnail', array('class' => 'th'));
				} else {
				echo get_avatar($auth_id, 150);
				}
				?>
				<h4><?php the_title(); ?></h4>
				</a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</div>