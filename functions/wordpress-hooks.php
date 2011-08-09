<?php
/**
 * Oenology Theme WordPress Core Hooks
 *
 * Contains all of the Theme's functions that 
 * hook into core action/filter hooks, other 
 * than Theme Setup functions, Widget functions, 
 * and Settings API functions
 * 
 * Action Hooks:
 * - option_page_capability_{page}
 * - wp_enqueue_scripts
 * 
 * Filter Hooks
 * - body_class
 * - get_comments_number
 * - the_title
 * - use_default_gallery_style
 * - wp_list_categories
 * - wp_title
 * 
 * Callbacks
 * - wp_list_comments
 * 
 * 
 * @package 	Oenology
 * @copyright	Copyright (c) 2010, Chip Bennett
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		Oenology 2.0
 */

/**
 * Filter Capability for Theme Settings Page
 * 
 * Action Hook: option_page_capability_{page}
 * 
 * This filter implements a WordPress 3.2 fix for
 * a minor bug, in which add_theme_page() is passed
 * the "edit_theme_options" capability, but the
 * settings page form is passed through options.php,
 * which expects the "manage_options" capability.
 * 
 * The "edit_theme_options" capability is part of the
 * EDITOR user role, while "manage_options" is only
 * available to the ADMINISTRATOR role. So, users in
 * the EDITOR user role can access the Theme settings
 * page, but are unable actually to update/save the
 * Theme settings.
 * 
 * The function is hooked into a hook, introduced in
 * WordPress 3.2: "option_page_capability_{option_page}",
 * where {option_page} is the name of the options page,
 * as defined in the fourth argument of the call to
 * add_theme_page()
 * 
 * The function returns a string consisting of the
 * appropriate capability for saving Theme settings.
 * 
 * @since	Oenology 2.2
 */
function oenology_get_settings_page_cap() {
	return 'edit_theme_options';
}
// Hook into option_page_capability_{option_page}
add_action( 'option_page_capability_oenology-settings', 'oenology_get_settings_page_cap' );

/**
 * Enqueue comment-reply script
 * 
 * Action Hook: wp_enqueue_scripts
 * 
 * Enqueues the comment-reply script only
 * when appropriate; i.e. when the current
 * page template uses the comments template, 
 * the current post has comments open, and 
 * the site is configured to display threaded 
 * comments.
 * 
 * @uses	is_singular()
 * @uses	comments_open()
 * @uses	get_option()
 * @uses	wp_enqueue_script()
 * 
 * @since	Oenology 2.0
 */
function oenology_enqueue_comment_reply() {
	// on single blog post pages with comments open and threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
		// enqueue the javascript that performs in-link comment reply fanciness
		wp_enqueue_script( 'comment-reply' ); 
	}
}
// Hook into wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'oenology_enqueue_comment_reply' );


/**
 * Add layout CSS classes to the HTML body tag
 * 
 * Filter Hook: body_class
 * 
 * Filter 'body_class' to include
 * classes for page layout.
 * 
 * @uses	oenology_get_current_page_layout()	Defined in \functions\custom.php
 * 
 * @since	Oenology 2.0
 */
function oenology_filter_body_class( $classes ) {	
	$layout = 'layout-';
	$layout .= oenology_get_current_page_layout();
	$classes[] = $layout;
	return $classes;
}
// Hook custom classes into 'body_class'
add_filter( 'body_class', 'oenology_filter_body_class' );

/**
 * Output number of comments, excluding pings
 * 
 * Filter Hook: get_comments_number
 * 
 * Filter 'get_comments_number' to display correct 
 * number of comments (count only comments, not 
 * trackbacks/pingbacks)
 * 
 * @uses	is_admin()
 * @uses	get_comments()
 * @uses	separate_comments()
 * @uses	count()
 * 
 * @link	http://www.wpbeginner.com/wp-tutorials/display-the-most-accurate-comment-count-in-wordpress/ WPBeginner
 * 
 * @since	Oenology 2.0
 */
function oenology_comment_count( $count ) {  
	if ( ! is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}
// Hook custom comment number into 'get_comments_number'
add_filter('get_comments_number', 'oenology_comment_count', 0);

/**
 * Output default Post Title if none is provided
 * 
 * Filter Hook: the_title 
 * 
 * Filter 'the_title' to output '(Untitled)' if 
 * no Post Title is provided
 * 
 * @since	Oenology 2.0
 */
function oenology_untitled_post( $title ) {
	if ( '' == $title ) {
		return '<em>(' . __( 'Untitled', 'oenology' ) . ')</em>';
	} else {
		return $title;
	}
}
add_filter( 'the_title', 'oenology_untitled_post', 10, 1 );

/**
 * Remove default gallery shortcode inline styles
 * 
 * Filter Hook: use_default_gallery_style
 * 
 * Return false for the 'use_default_gallery_style'
 * filter, so that WordPress does not output 
 * <style> tags and code for galleries in the document 
 * body.
 * 
 * @since	Oenology 2.2
 */
add_filter( 'use_default_gallery_style', '__return_false' );


/**
 * Add 'current_cat' class for single posts
 * 
 * Filter Hook: wp_list_categories
 * 
 * Filter 'wp_list_categories' to add a 
 * "current-cat" CSS class declaration.
 * 
 * @link	http://www.studiograsshopper.ch/code-snippets/dynamic-category-menu-highlighting-for-single-posts/ StudioGrasshopper
 * 
 * @since	Oenology 2.0
 */
function oenology_show_current_cat_on_single($output) { 

	global $post;
 
	if( is_single() ) {
 
		$categories = wp_get_post_categories($post->ID);
 
		foreach( $categories as $catid ) {
			$cat = get_category($catid);
			// Find cat-item-ID in the string
			if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)) {
				$output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
			}
		}
 
	}
	return $output;
}
// Hook current_cat function into 'wp_list_categories'
add_filter('wp_list_categories', 'oenology_show_current_cat_on_single');

/**
 * Output optimized document titles
 * 
 * Filter Hook: wp_title
 * 
 * Filter 'wp_title' to output contextual content
 * 
 * @since	Oenology 2.0
 */
function oenology_filter_wp_title( $title, $separator ) { // taken from TwentyTen 1.0
	// Don't affect wp_title() calls in feeds.
	if ( is_feed() )
		return $title;

	// The $paged global variable contains the page number of a listing of posts.
	// The $page global variable contains the page number of a single post that is paged.
	// We'll display whichever one applies, if we're not looking at the first page.
	global $paged, $page;

	if ( is_search() ) {
		// If we're a search, let's start over:
		$title = sprintf( 'Search results for %s', '"' . get_search_query() . '"' );
		// Add a page number if we're on page 2 or more:
		if ( $paged >= 2 )
			$title .= " $separator " . sprintf( 'Page %s', $paged );
		// Add the site name to the end:
		$title .= " $separator " . get_bloginfo( 'name', 'display' );
		// We're done. Let's send the new title back to wp_title():
		return $title;
	}

	// Otherwise, let's start by adding the site name to the end:
	$title .= get_bloginfo( 'name', 'display' );

	// If we have a site description and we're on the home/front page, add the description:
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $separator " . $site_description;

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $separator " . sprintf( 'Page %s', max( $paged, $page ) );

	// Return the new title to wp_title():
	return $title;
}
// Hook into 'wp_title'
add_filter( 'wp_title', 'oenology_filter_wp_title', 10, 2 );

/**
 * Output custom comments list for pings
 * 
 * Callback: wp_list_comments() Pings
 * 
 * wp_list_comments() Callback function for 
 * Pings (Trackbacks/Pingbacks)
 * 
 * @since	Oenology 2.0
 */
function oenology_comment_list_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php }