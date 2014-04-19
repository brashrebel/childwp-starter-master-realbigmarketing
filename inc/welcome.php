<?php $welcome_page = 1580; ?>
<div class="row welcome">
	<div class="large-9 columns">
		<h3><?php echo get_page($welcome_page)->post_title; ?></h3>
		<?php echo get_page($welcome_page)->post_content; ?>
	</div>
	<div class="large-3 columns">
		<a href="/customer/" class="button">
			Read more about our clients
		</a>
	</div>
</div>