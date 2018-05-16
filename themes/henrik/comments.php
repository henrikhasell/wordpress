<?php
if (post_password_required() == true) {
	return;
}
?>
<div>
<?php
if(have_comments() == true)
{
?>
	<h2>
	<?php
	printf(
		_n('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number()),
		number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'
	);
	?>
	</h2>

	<ol>
	<?php wp_list_comments(); ?>
	</ol>
	<?php
	if(get_comment_pages_count() != 0 && get_option('page_comments') == true) 
	{
	?>
		<nav>
			<h1><?php _e('Comment navigation'); ?></h1>
			<div><?php previous_comments_link(__( '&larr; Older Comments')); ?></div>
			<div><?php next_comments_link(__( 'Newer Comments &rarr;')); ?></div>
		</nav>
	<?php
	}
	?>

	<?php
	if (comments_open() == false && get_comments_number() != 0) 
	{
	?>
	<p><?php _e('Comments are closed.'); ?></p>
	<?php
	}
}

comment_form(); ?>

</div>
