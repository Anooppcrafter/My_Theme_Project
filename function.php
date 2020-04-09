<? php

function wordpress_2020(){

// stylesheets
wp_enqueue_style('main_style_file',get_stylesheet_url());
	wp_enqueue_style('Css_file',get_template_directory_url().'https://themefisher.com/wp-content/cache/min/1/82eac23e78e53cc539aa235e5d5002f9.css');
//javascripts
	wp_enqueue_style('js_main_file',get_template_directory_url().'https://themefisher.com/wp-content/cache/min/1/d5681558c88ba3b5bc62f76ea5f748f2.js',array(),'1.1',true);

	//attach with action hook

	add_action("wp_enqueue_scripts","wordpress_2020");
}