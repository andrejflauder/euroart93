<?php

function customizer_settings($wp_customizer){

	$wp_customizer->add_section('header',array(
		'title'=>__('Header Settings', 'Daily'),
		'priority'=>70
	));
	$wp_customizer->add_setting('header_image',array(
		'capability'=>'edit_theme_options'
	));
	$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
		'label'=>__('Header Image','Daily'),
		'section'=>'header'
	)));
	$wp_customizer->add_setting('header_title',array(
		'capability'=>'edit_theme_options'
	));
	$wp_customizer->add_control(new WP_Customize_Control($wp_customizer,'header_title',array(
		'label'=>__('Title','Daily'),
		'section'=>'header'
	)));

	$wp_customizer->add_setting('header_description',array(
		'capability'=>'edit_theme_options'
	));
	$wp_customizer->add_control(new WP_Customize_Control($wp_customizer,'header_description',array(
		'label'=>__('Text','Daily'),
		'section'=>'header'
	)));

	

}
add_action('customize_register','customizer_settings');

function footer_settings($wp_footer){

	$wp_footer->add_section('footer',array(
		'title'=>__('Footer Settings', 'Daily'),
		'priority'=>70
	));


	$wp_footer->add_setting('footer_title',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_title',array(
		'label'=>__('Title','Daily'),
		'section'=>'footer'
	)));
	$wp_footer->add_setting('footer_address',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_address',array(
		'label'=>__('Text','Daily'),
		'section'=>'footer'
	)));


	$wp_footer->add_setting('footer_links',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_links',array(
		'label'=>__('Title','Daily'),
		'section'=>'footer'
	)));
	$wp_footer->add_setting('footer_social',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_social',array(
		'label'=>__('Text','Daily'),
		'section'=>'footer'
	)));


	$wp_footer->add_setting('footer_about',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_about',array(
		'label'=>__('Title','Daily'),
		'section'=>'footer'
	)));
	$wp_footer->add_setting('footer_text_about',array(
		'capability'=>'edit_theme_options'
	));
	$wp_footer->add_control(new WP_Customize_Control($wp_footer,'footer_text_about',array(
		'label'=>__('Text','Daily'),
		'section'=>'footer'
	)));



	

}
add_action('customize_register','footer_settings');
?>