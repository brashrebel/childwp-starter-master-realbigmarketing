<?php
$linkedin = get_field('linkedin_profile_url');
$twitter = get_the_author_meta('twitter');
$googleplus = get_the_author_meta('googleplus');
$staff_title = get_field('staff_title');
$staff_phone = get_field('staff_phone');
$staff_email = get_the_author_meta('email');
echo get_avatar($auth_id, 250); 
?>
<a href="http://<?php echo $linkedin; ?>" class="button extended">
	<span class="fa fa-linkedin"></span>
	Connect with me
</a>
<a href="http://twitter.com/<?php echo $twitter; ?>" class="button extended">
	<span class="fa fa-twitter"></span>
	Follow me
</a>
<a href="<?php echo $googleplus; ?>" class="button extended" rel="me">
	<span class="fa fa-google-plus"></span>
	Add me
</a>
<div class="panel">
	<span class="label">Title</span> <span class="staff-data"><?php echo $staff_title; ?></span><br/>
	<span class="label">Phone</span> <span class="staff-data"><?php echo $staff_phone; ?></span><br/>
	<span class="label">Email</span> <span class="staff-data"><?php echo $staff_email; ?></span><br/>
</div>