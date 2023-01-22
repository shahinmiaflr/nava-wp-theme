<?php

function HelloWorld(){
    return "<h1>Hello Friends</h1>";
}

add_shortcode('hw', 'HelloWorld');


function HelloWorldAtts($navaatts){
    
   extract(shortcode_atts(array(
        'text' => "Hello Friends two"
        ), $navaatts, 'hwt'));
        return  '<h1>'. $text . '</h1>';    
}

add_shortcode('hwt', 'HelloWorldAtts');

function hwdt( $navaatts, $navacontent = NULL){
    extract( shortcode_atts( array(
        'text' => 'Hello Double tag value'
    ), $navaatts, 'hdt'
    ));
    
    return  '<h1>'. $text .' - '.'</h1>'.'<p>'. do_shortcode( $navacontent ) .'</p>';
}

add_shortcode('hdt', 'hwdt');