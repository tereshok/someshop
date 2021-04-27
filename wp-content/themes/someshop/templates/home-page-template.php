<?php
/**
 * Template Name: Home Template
 *
 *
 */
if ( is_front_page() ){
	get_header('home');
}
else {
	get_header();
}

get_footer(); 