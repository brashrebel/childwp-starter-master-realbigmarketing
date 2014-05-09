<?php
// Job requirements
$requirements = get_field('requirements');
if($requirements)
{
	echo '<h3>Requirements</h3>';
	echo '<ul>';
	foreach($requirements as $row) {
		echo '<li>' . $row['requirement'] . '</li>';
	}
	echo '</ul>';
}
// Bonus skills
$skills = get_field('additional_skills');
if($skills)
{
	echo '<h3>Additional skills we would value</h3>';
	echo '<ul>';
	foreach($skills as $row) {
		echo '<li>' . $row['skill'] . '</li>';
	}
	echo '</ul>';
}
// Message
echo 'If you believe that you qualify and would be interested in meeting with us, please fill out this short application form and we will get right back with you.';
// Application form
$form_id = get_field('form_id');
echo do_shortcode('[gravityform id="'.$form_id.'" name="Job Application" title="false" description="false" ajax="true"]');
?>