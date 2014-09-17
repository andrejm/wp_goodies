<?php 

/*
* Function to override checkout fields
*/

function custom_override_checkout_fields( $fields ) {
	// $fields['order']['order_comments']['placeholder'] = 'My new placeholder';
	// $fields['order']['order_comments']['label'] = 'My new label';
	// unset($fields['order']['order_comments']);
	// full list of fields: http://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/

	return $fields;

}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

 ?>