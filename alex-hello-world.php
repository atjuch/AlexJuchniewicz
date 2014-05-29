<?php
/*
Plugin Name: alex-hello-world
Plugin URI: http://alexjuchniewicz.com
Description: my very first plugin
Version: 1.0
Author: Alex Juchniewicz
Author URI: http://alexjuchniewicz.com
License: GPL
*/

//Hooks a function to a filter action, 'the_content' being the action, 'hello_world' the function.
add_filter('the_content','hello_world');

//Callback function
function hello_world($content)
{
	//Checking if on post page.
	if ( is_single() ) {
		//Adding custom content to end of post.
		return $content . "<h1 style=\"color:#eb911d\"> Hello Josh Strebel - my first plugin worked that I wrote!!! </h1>";
	}
	else {
		//else on blog page / home page etc, just return content as usual.
		return $content;
	}
}

?>