<?php 

/**
 * Make defualt choices in media overlay.
 */
function xx_gallery_default_type_set_link( $settings ) {

    $settings['galleryDefaults']['link'] = 'file';
    $settings['galleryDefaults']['columns'] = '3';
    $settings['galleryDefaults']['size'] = 'medium'; //??
    return $settings;
}
add_filter( 'media_view_settings', 'xx_gallery_default_type_set_link');



function sanitize_filename_on_upload($filename) {
	$ext = end(explode('.',$filename));
	// Replace all weird characters
	$sanitized = preg_replace('/[^a-zA-Z0-9-_.]/','', substr($filename, 0, -(strlen($ext)+1)));
	// Replace dots inside filename
	$sanitized = str_replace('.','-', $sanitized);
	return strtolower($sanitized.'.'.$ext);
}

add_filter('sanitize_file_name', 'sanitize_filename_on_upload', 10);

 ?>