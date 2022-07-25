<?php

/*
Plugin Name: HT Auto Sitemap
Plugin URI: http://www.helpfultechnology.com
Description: Create simple nested list-style sitemap of site pages
Author: Steph Gray
Version: 0.1
Author URI: http://www.helpfultechnology.com
*/

function hp_autositemap_shortcode($atts,$content){
    //get any attributes that may have been passed; override defaults
    $opts=shortcode_atts( array(
        'childof' => '',
        'depth' => '',
        'exclude' => ''
        ), $atts );
	
	$html = "<ul class='htautositemap'>";
	$html .= wp_list_pages("echo=0&title_li=&child_of=" . $opts['childof'] . "&depth=".$opts['depth'] . "&exclude=" . $opts['exclude'] . "&sort_column=menu_order");
	$html .="</ul>";
	
	return $html;
}

add_shortcode("autositemap", "hp_autositemap_shortcode");

?>