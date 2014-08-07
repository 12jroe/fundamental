<?php
add_action( 'after_setup_theme', 'fundamental_setup' );
function fundamental_setup()
{
	load_theme_textdomain( 'fundamental', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'fundamental' ) )
		);
}
add_action( 'wp_enqueue_scripts', 'fundamental_load_scripts' );
function fundamental_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'fundamental_enqueue_comment_reply_script' );
function fundamental_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'fundamental_title' );
function fundamental_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'fundamental_filter_wp_title' );
function fundamental_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'fundamental_widgets_init' );
function fundamental_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Left Sidebar Widget Area', 'fundamental' ),
		'id' => 'left-primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );

	register_sidebar( array (
		'name' => __( 'Right Sidebar Widget Area', 'fundamental' ),
		'id' => 'right-primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
function fundamental_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}
add_filter( 'get_comments_number', 'fundamental_comments_number' );
function fundamental_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

function get_left_sidebar() {
	if ( is_active_sidebar( 'left-primary-widget-area' ) ) : ?>
	<div id="left-primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'left-primary-widget-area' ); ?>
	</div><!-- #left-primary-sidebar -->
	<?php endif;
}

function get_right_sidebar() {
	if ( is_active_sidebar( 'right-primary-widget-area' ) ) : ?>
	<div id="right-primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right-primary-widget-area' ); ?>
	</div><!-- #right-primary-sidebar -->
	<?php endif; 
}

function get_content_class() {
	$sidebars = 0;
	if ( is_active_sidebar( 'left-primary-widget-area' ) ) : $sidebars += 1; endif;
	if ( is_active_sidebar( 'right-primary-widget-area' ) ) : $sidebars += 1; endif;
	/*Return Dynamically Created Class for #content (ie sides_1, sides_2, or sides_0*/
	return "sides_" . $sidebars;
}