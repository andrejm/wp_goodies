<?php

/**
*
* Remove unwanted admin menu items
*
*/
function remove_menus(){
  
	// remove_menu_page( 'index.php' );                  //Dashboard
	// remove_menu_page( 'edit.php' );                   //Posts
	// remove_menu_page( 'upload.php' );                 //Media
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages
	// remove_menu_page( 'edit-comments.php' );          //Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

/**
*
* Remove metaboxes from dashboard
*
*/
function remove_dashboard_meta() {

	// remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' ); // WP news
	// remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' ); // ?
	// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' ); // ?
	// remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' ); //?
	// remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // Quick Press
	// remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' ); // Recent drafts
	// remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' ); // Recent comments
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // "At a glance"
	// remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // Activity with recently published, etc.
	// remove_meta_box( 'icl_dashboard_widget', 'dashboard', 'normal' ); //WPML widget

}
add_action( 'admin_init', 'remove_dashboard_meta' );
