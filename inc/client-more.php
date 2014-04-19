<?php
$client_website = get_field('client_website');
$contact_name = get_field('contact_name');
$contact_phone = get_field('contact_phone');
$contact_form = get_field('client_contact_form');
$client_email = get_field('client_email');
$client_location = get_field('client_location');
?>
<div class="large-6 columns">
	<h3>Services provided to <?php echo $title; ?></h3>
	<?php global $cpt_onomy;
	$terms = wp_get_object_terms($post->ID, 'service');
	if ($terms && !is_wp_error( $terms )) {
		echo '<ul class="button-group"';
		foreach ($terms as $term) {
		$post_slug = basename($cpt_onomy->get_term_link($term, $term->taxonomy));
		echo '<li><a href="'. $cpt_onomy->get_term_link($term, $term->taxonomy) .'" class="button">';
		echo '<span class="fa fa-'. $post_slug .'"></span>';
		echo $term->name;
		echo '</a></li>';
		}
		echo '</ul>';
	} ?>
</div>
<div class="large-6 columns">
	<h3>More info about <?php echo $title; ?></h3>
	<table>
		<tbody>
			<?php if ($client_website) { ?>
			<tr>
				<td><span class="label">Website</span></td>
				<td><a href="http://<?php echo $client_website; ?>"><?php echo $client_website; ?></a></td>
			</tr>
			<?php } ?>
			<?php if ($client_location) { ?>
			<tr>
				<td><span class="label">Location</span></td>
				<td><?php echo $client_location; ?></td>
			</tr>
			<?php } ?>
			<?php if ($contact_name) { ?>
			<tr>
				<td><span class="label">Contact name</span></td>
				<td><?php echo $contact_name; ?></td>
			</tr>
			<?php } ?>
			<?php if ($contact_phone) { ?>
			<tr>
				<td><span class="label">Phone</span></td>
				<td><?php echo $contact_phone; ?></td>
			</tr>
			<?php } ?>
			<?php if ($client_email) { ?>
			<tr>
				<td><span class="label">Email</span></td>
				<td><?php echo $client_email; ?></td>
			</tr>
			<?php } ?>
			<?php if ($contact_form) { ?>
			<tr>
				<td><span class="label">Contact form</span></td>
				<td><a href="http://<?php echo $contact_form; ?>"><?php echo $contact_form; ?></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>