<?php 

function templeto_meta_box_area(array $tmmetabox){
	
	$tmmetabox[] = array(
		'id' => 'myrecent-post',
		'title' => 'What\'s the post all about?',
		
	);
	
	return $tmmetabox;
}

add_filter('cmb2_meta_boxes','templeto_meta_box_area')





















?>