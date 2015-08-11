<?php 

/**
 * Add new columns to the post table
 *
 * @param Array $columns - Current columns on the list post
 */
function add_new_columns( $columns ) {
 	$column_meta = array( 'meta' => 'Custom Column' );
	$columns = array_slice( $columns, 0, 2, true ) + $column_meta + array_slice( $columns, 2, NULL, true );
	return $columns;
}
// Add a column to the edit post list
add_filter( 'manage_edit-post_columns', 'add_new_columns');

function add_portfolio_columns($columns) {
    return array_merge($columns, 
              array('client' => __('Client'),
                    'project_date' =>__( 'Project Date')));
}
add_filter('manage_portfolio_posts_columns' , 'add_portfolio_columns');

/**
 * Display data in new columns
 *
 * @param  $column Current column
 *
 * @return Data for the column
 */
function custom_columns( $column ) {
	global $post;

	switch ( $column ) {
		case 'meta':
			$metaData = get_post_meta( $post->ID, 'twitter_url', true );

			echo $metaData;
		break;
	}
}
// Add action to the manage post column to display the data
add_action( 'manage_posts_custom_column' , 'custom_columns' );
 

// Register the column as sortable
function register_sortable_columns( $columns ) {
    $columns['meta'] = 'Custom Column';

    return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'register_sortable_columns' );

 ?>