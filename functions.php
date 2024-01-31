<?php


function basictheme_default_function(){
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post_thumbnails');
	load_theme_textdomain('basictheme',get_template_directory_uri().'/languages');
	
	
}
add_action('after_setup_theme','basictheme_default_function');


function wp_get_attachment( $attachment_id ) {
    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}






require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');


require_once('metabox/init.php');
require_once('metabox/functions.php');






















































?>