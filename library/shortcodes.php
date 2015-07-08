<?php 

//[button][/button]
//Shortcode to produce a styled button
    
function button_shortcode( $atts, $content = null ) {
    
/*
Supported Attributes
size    =>  large, medium, small
color   =>  gold, black, blue, green, grey, orange, pink, red, white
target  =>  _self, _blank
*/
	
	extract( shortcode_atts( array(
		'size' => 'medium',
		'color' => 'default',
		'url' => '#',
        'target' => '_self',
        'rel' => ''
	), $atts ) );   
     
return '<a target="' . $target . '" class="button button-'. $size .' button-'. $color .'" href="'. $url .'"' . $rel . '>'. $content .'</a>';
    }
    
add_shortcode('button', 'button_shortcode');

?>