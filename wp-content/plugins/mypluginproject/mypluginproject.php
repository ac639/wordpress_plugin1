<?php
/**
* Plugin Name: mypluginproject
* Plugin URI: https://www.github.com/ac639
* Description: First plugin for is373 mini project
* Version: 1.0
* Author: Andre C.
* Author URI: https://www.github.com/ac639
**/
function mypluginproject_replace_with_link( $content) {
     $lookup = array('$Github');   
     $replace = array('<a href="http://github.com/ac639">Github</a>');
     return str_replace( $lookup, $replace, $content);
}

add_filter('the_content', 'mypluginproject_replace_with_link');

