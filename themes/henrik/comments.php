<?php
if (post_password_required() == true) {
	return;
}

function format_comment($comment, $args, $depth) {
  echo '<li class="card bg-light mb-3">';
  echo '<div class="card-body media">';
  printf('<img class="mr-3 " alt="%s" src="%s"/>', $comment->comment_author, get_avatar_url($comment->comment_author_email, array('size'=>40)));
  echo '<div class="media-body">';
  echo '<p>' . $comment->comment_author . '<br/><span class="small">' . $comment->comment_date . ' | ';
  comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
  echo '</p>';
  echo '<div>' . $comment->comment_content . '</div>';
  echo '</div>';
  echo '</div>';
  echo '</li>';
}

$field_format = '<div class="form-group">' .
                  '<label for="%s">%s%s</label> ' .
                  '<input id="%s" class="form-control" name="%s" type="%s" value="%s" %s %s/>' .
                '</div>';

$author_field = sprintf(
  $field_format,
  'author',
  __('Name'),
  $req ? '*' : '',
  'author',
  'author',
  'text',
  esc_attr($commenter['comment_author']),
  $aria_req,
  $html_req);

$email_field = sprintf(
  $field_format,
  'email',
  __('Email'),
  $req ? '*' : '',
  'email',
  'email',
  $html5 ? 'email' : 'text',
  esc_attr($commenter['comment_author_email']),
  $aria_req,
  $html_req);

$url_field = sprintf(
  $field_format,
  'url',
  __('Website'),
  '',
  'url',
  'url',
  $html5 ? 'url' : 'text',
  esc_attr($commenter['comment_author_url']),
  '',
  '');

$comment_field = '<div class="form-group">' .
                   '<label for="%s">%s</label> ' .
                   '<textarea id="%s" class="form-control" name="%s" required>' .
                   '</textarea>' .
                 '</div>';

$comment_field = sprintf(
  $comment_field,
  'comment',
  __('Comment'),
  'comment',
  'comment');

$fields = array(
    'author' => $author_field,
    'email'  => $email_field,
    'url'    => $url_field
);

$fields = array(
    'fields' => $fields,
    'comment_field' => $comment_field,
    'class_submit' => 'btn btn-primary',
    'submit_field' => '<div>%1$s %2$s</div>'
);
?>
<?php if(have_comments() == true) { ?>
  <h2>
  <?php
    printf(
      _n('One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number()),
      number_format_i18n(get_comments_number()), get_the_title());
  ?>
  </h2>
  <ol class="list-unstyled"><?php wp_list_comments(array('callback'=>'format_comment')); ?></ol>
  <?php if(get_comment_pages_count() != 0 && get_option('page_comments') == true) { ?>
    <nav>
      <h1>Comment navigation</h1>
      <div><?php previous_comments_link('&larr; Older Comments'); ?></div>
      <div><?php next_comments_link('Newer Comments &rarr;'); ?></div>
    </nav>
  <?php } if (comments_open() == false && get_comments_number() != 0) { ?>
    <p>Comments are closed.</p>
  <?php } ?>
<hr/>
<?php } ?>
<?php comment_form($fields); ?>
