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
		_n('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on "%2$s"', get_comments_number()),
		number_format_i18n(get_comments_number()), get_the_title());
?>
	</h2>

	<ol>
<?php 
	wp_list_comments();
?>
	</ol>
<?php
	if(get_comment_pages_count() != 0 && get_option('page_comments') == true) 
	{
?>
		<nav>
			<h1>Comment navigation</h1>
			<div><?php previous_comments_link('&larr; Older Comments'); ?></div>
			<div><?php next_comments_link('Newer Comments &rarr;'); ?></div>
		</nav>
<?php
	}
?>

<?php
	if (comments_open() == false && get_comments_number() != 0) 
	{
?>
	<p>Comments are closed.</p>
<?php
	}
}
comment_form();
?>
</div>
