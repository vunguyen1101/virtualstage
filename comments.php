<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$travelcations_comment_count = get_comments_number();

				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( 
						_nx( 
							'Comment ( %1$s )', 
							'Comments( %1$s )', 
							$travelcations_comment_count, 
							'comments title', 
							'travelcations' 
						) 
					),
					number_format_i18n( $travelcations_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);

			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( 
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => '70',
					'callback'       => 'travelcations_comment_list',
				) 
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'travelcations' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$fields = array(
		'author' => '<div class="control-name form-group"><label class="label" for="author">' . esc_html__( 'Your Name', 'travelcations' ) . '<span class="required">*</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" /></div>',
		'email'  => '<div class="control-email form-group"><label class="label" for="email">' . esc_html__( 'Your Email', 'travelcations' ) . '<span class="required">*</span></label><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" required /></div>',
	);

	$args = apply_filters(
		'travelcations_comment_form_args',
		array(
			'title_reply_before'   => '<span id="reply-title" class="gamma comment-reply-title">',
			'title_reply_after'    => '</span>',
			'title_reply'          => esc_html__( 'Write a comment', 'travelcations' ),
			'comment_notes_before' => '',
			'comment_field'        => '<div class="comment-area"><label class="label" for="comment">' . esc_html__( 'Your comment', 'travelcations' ) . '<span class="required">*</span></label><textarea id="comment" name="comment" required ></textarea></div>',
			'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
			'label_submit'         => esc_html__( 'Submit Your Comments', 'travelcations' ),
		)
	);

	comment_form( $args );
	?>

</div><!-- #comments -->
