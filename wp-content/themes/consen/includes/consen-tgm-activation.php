<?php
/**
* TGM Plugin activation
 */
require_once get_template_directory() .'/includes/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'consen_register_plugin_require' );

function consen_register_plugin_require() {

	$plugins = array(
		  
	  array(
	   'name'               => esc_html__( 'dreamit elementor extension', 'consen' ),
	   'slug'               => 'dreamit-elementor-extension', 
	   'source'             => esc_url('https://wp.ditsolution.net/consen-multipurpose/wp-content/plugins/dreamit-elementor-extension.zip'),
	   'required'           => true, 
	   'force_activation'   => false, 
	   'force_deactivation' => false, 
	  ),
		array(
			'name'               => esc_html__( 'Contact form 7', 'consen' ),
			'slug'               => 'contact-form-7',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Cmb2', 'consen' ),
			'slug'               => 'cmb2',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Mailchimp for WP', 'consen' ),
			'slug'               => 'mailchimp-for-wp',
			'required'           => false, 			
		),		
		array(
			'name'               => esc_html__( 'Redux-framework', 'consen' ),
			'slug'               => 'redux-framework',
			'required'           => true, 			
		),
		array(
			'name'               => esc_html__( 'Elementor', 'consen' ),
			'slug'               => 'elementor',
			'required'           => false, 			
		),
		array(
			'name'               => esc_html__( 'One Click Demo Import', 'consen' ),
			'slug'               => 'one-click-demo-import',
			'required'           => false, 			
		),			
		array(
			'name'               => esc_html__( 'Elementor Header & Footer Builder', 'consen' ),
			'slug'               => 'header-footer-elementor',
			'required'           => false, 			
		),
		array(
    	   'name'               => esc_html__( 'Revolution Slider', 'consen' ),
    	   'slug'               => 'revslider', 
    	   'source'             => esc_url('https://wp.dreamitsolution.net/revslider.zip'),
    	   'required'           => true, 
    	   'force_activation'   => false, 
    	   'force_deactivation' => false, 
    	  ),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
