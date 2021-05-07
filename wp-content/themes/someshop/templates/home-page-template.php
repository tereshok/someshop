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

get_template_part('templates/product-card');

get_footer(); 