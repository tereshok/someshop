<?php if ( is_front_page() ){
	get_header('home');
}
else {
	get_header();
}

get_template_part('templates/product-card');

get_template_part('templates/sale-content');

get_footer();
