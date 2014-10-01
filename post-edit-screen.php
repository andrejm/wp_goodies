<?php

/**
* Uncluttering post edit screen
*/


function my_remove_post_meta_boxes() {

	/* Publish meta box. */
	// remove_meta_box( 'submitdiv', 'post', 'normal' );

	/* Comments meta box. */
	// remove_meta_box( 'commentsdiv', 'post', 'normal' );

	/* Revisions meta box. */
	// remove_meta_box( 'revisionsdiv', 'post', 'normal' );

	/* Author meta box. */
	// remove_meta_box( 'authordiv', 'post', 'normal' );

	/* Slug meta box. */
	// remove_meta_box( 'slugdiv', 'post', 'normal' );

	/* Post tags meta box. */
	// remove_meta_box( 'tagsdiv-post_tag', 'post', 'side' ); 

	/* Category meta box. */
	// remove_meta_box( 'categorydiv', 'post', 'side' );

	/* Excerpt meta box. */
	// remove_meta_box( 'postexcerpt', 'post', 'normal' );

	/* Post format meta box. */
	// remove_meta_box( 'formatdiv', 'post', 'normal' );

	/* Trackbacks meta box. */
	// remove_meta_box( 'trackbacksdiv', 'post', 'normal' );

	/* Custom fields meta box. */
	// remove_meta_box( 'postcustom', 'post', 'normal' );

	/* Comment status meta box. */
	// remove_meta_box( 'commentstatusdiv', 'post', 'normal' );

	/* Featured image meta box. */
	// remove_meta_box( 'postimagediv', 'post', 'side' );

	/* Page attributes meta box. */
	// remove_meta_box( 'pageparentdiv', 'page', 'side' );
}
add_action( 'add_meta_boxes', 'my_remove_post_meta_boxes' );

/**
* If you remove category / tags metaboxes, remove also submenus
*/

function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}
add_action('admin_menu', 'my_remove_sub_menus');

?>