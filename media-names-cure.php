<?php 
/*
Plugin Name: Media names cure
Plugin URI: https://andrzej.sk
Description: Remove weird characters from uploaded media
Version: 0.1.0
Author: Andrzej
Author URI: http://andrzej.sk
Text Domain: andrzej
Domain Path: /languages
*/

if( !function_exists( 'sanitize_filename_on_upload' ) ) {

	function sanitize_filename_on_upload($filename) {
		$tmp = explode('.', $filename);
		$ext = end($tmp);
		// Replace all weird characters
		$sanitized = preg_replace('/[^a-zA-Z0-9-_.]/','_', substr($filename, 0, -(strlen($ext)+1)));
		// Replace dots inside filename
		$sanitized = str_replace('.','-', $sanitized);
		return strtolower($sanitized.'.'.$ext);
	}

	add_filter('sanitize_file_name', 'sanitize_filename_on_upload', 10);
}
