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


 ?>