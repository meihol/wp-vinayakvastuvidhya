<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "consen_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Theme Options', 'consen' ),
        'page_title'           => esc_html__( 'Theme Options', 'consen' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */


    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('General', 'consen'),
        'id'        => 'main_logo_id',
        'desc'      => esc_html__('Wellcome Our Theme Option', 'consen'),
        'customizer_width' => '400px',
        'icon'      => 'el-icon-cog',
    ) );


/*========================
consen Typography FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Typography Area', 'consen'),
        'id'         => 'consen_tyfo_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
			/*
				array(
					'id'          => 'consen_body_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Body Typography Style', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'output'      => array('
						body,p						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_all_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Headibg Typography Style', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1, h2, h3, h4, h5, h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				
				array(
					'id'          => 'consen_heading_typographyh1',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H1', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_typographyh2',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H2', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h2				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_typographyh3',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H3', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h3			
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_typographyh4',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H4', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h4				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_typographyh5',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H5', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h5					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'consen_heading_typographyh6',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H6', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),					
				

				
			*/					
            ),
			
    ) );
	
/*========================
END consen Typography FIELD
=========================*/
	
	//total header area
     Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header area', 'consen'),
        'id'        => 'consen_header_area',
        'desc'      => esc_html__('Header options', 'consen'),
        'icon'      => 'el-icon-tasks',      
        'fields'    => array(
		
             array(
                    'id'        => 'consen_header_display_none_hide',
					'desc'      => esc_html__('All Menu OFF/ON section', 'consen'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header Hide', 'consen'),
                    'default'   => false,
                ),			
             array(
                    'id'        => 'consen_header_top_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top section all your single page. But If you want to only show header top in home and others page, Please goes to your page, there you can see header top OFF/ON section. Please set It', 'consen'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top', 'consen'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'consen_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header Top layout', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htopt_box' => esc_html__('Box Layout','consen'),
                        'htopt_full' => esc_html__('Full Layout','consen'),
                    ),
                    'default'   => 'htopt_box'
                ),			
                array(
                    'id'        => 'consen_main_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header layout', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'hmenul_box' => esc_html__('Box Layout','consen'),
                        'hmenu_full' => esc_html__('Full Layout','consen'),
                    ),
                    'default'   => 'hmenul_box'
                ),

				
            )
        ));	
	
     //Header Top
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Style ', 'consen'),
        'id'        => 'consen_header_top',
        'desc'      => esc_html__('Insert header top info', 'consen'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
                array(
                    'id'        => 'consen_top_right_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Your Top Header Style', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'header_top_1' => esc_html__('Left Address Right Icon','consen'),
                        'header_top_2' => esc_html__('Left Icon Right Address','consen'),
                        'header_top_3' => esc_html__(' Left Opening Middle Icon Right Login','consen'),
                        'header_top_4' => esc_html__('Left Address Right Icon & Search','consen'),
                    ),
                    'default'   => 'header_top_1'
                ),
                array(
                    'id'        => 'consen_top_imgicon',
                    'type'      => 'media',
                    'url'      => true,
                    'title'     => esc_html__('Top Icon Image', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                ),
				array(
                    'id'       => 'consen_header_top_wel',
                    'type'     => 'text',
                    'title'    => esc_html__('Welcome Text', 'consen'),
					'default'	=> esc_html__('Welcome! To Consen Finalce Consulti', 'consen'),
                ),
                array(
                    'id'       => 'consen_header_top_follow',
                    'type'     => 'text',
                    'title'    => esc_html__('Follow Title', 'consen'),
					'default'	=> esc_html__('Follow Us', 'consen'),
                ),
                array(								
                    'id'        => 'consen_header_top_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Header Top Icon Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p span i, .top-address p a
					')
                ),				
                array(								
                    'id'        => 'consen_header_top_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Header Top Address Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span,
								.em-quearys-menu i,
								.top-form-control button.top-quearys-style
					')
                ),
                array(								
                    'id'        => 'consen_header_top_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Icon Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i,
								.top-address p span i
					')
                ),
                array(								
                    'id'        => 'consen_header_opening_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Opening BG Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.top-address.menu_18 span,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),				
                array(								
                    'id'        => 'consen_hoeder_top_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top Section BG Color', 'consen'),
                    'default'  => '',
                    'output'    => array('
						.consen-header-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'consen_header_top_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.consen-header-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'consen'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'consen'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );

    //Header social Icon
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Header Social Icon', 'consen' ),
        'id'         => 'consen_social_section',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'     => array(	
                array(
                    'id'       => 'consen_social_icons',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Insert Social Icons', 'consen'),
                    'subtitle' => esc_html__('Enter social links', 'consen'),
                    'mode'     => 'text',
					'label'    => true,
                    'options'  => array(        
                        'facebook'     => '',
                        'twitter'      => '',
                        'instagram'    => '',
                        'tumblr'       => '',
                        'pinterest'    => '',
                        'linkedin'     => '',
                        'behance'      => '',
                        'dribbble'     => '',
                        'youtube'      => '',
                        'vimeo'        => '',
                        'rss'          => '',
                    ),
					'default' => array(
						'facebook'     => esc_url('https://www.facebook.com/'),
						'twitter'     => esc_url('https://twitter.com/'),
						'instagram'	=> esc_url('https://instagram.com/'),
						'tumblr'     => '',
						'pinterest'     => '',
						'linkedin'     => '',
						'behance'     => '',
						'dribbble'     => esc_url('https://dribbble.com/'),
						'youtube'     => '',
						'vimeo'     => '',
						'rss'     => '',
					),
                ),
            )
    ) );
    //Header Logo
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Logo', 'consen'),
        'id'        => 'consen_header_logo',
        'desc'      => esc_html__('Header Logo', 'consen'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array( 
                array(
                    'id'        => 'consen_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Default Logo', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here.ex: - it is work in default menu.', 'consen'),
                ),
                array(
                    'id'        => 'consen_onepage_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('One Page Menu Logo', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex:- it is work in one page menu', 'consen'),
                ),
                array(
                    'id'        => 'consen_ts_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Transparent Menu Logo', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'consen'),
                ),
                array(
                    'id'        => 'consen_retina_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Retina Logo', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in Retina Logo', 'consen'),
                ),
                array(
                    'id'        => 'consen_mobile_top_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Mobile Logo', 'consen'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 1801x48px.', 'consen'),
                ),				
                array(
                    'id'        => 'consen_logo_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Height', 'consen'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set height ex-100px', 'consen'),
                ),	
                array(
                    'id'        => 'consen_logo_widget',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Width', 'consen'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set Width ex-100px', 'consen'),
                ),
                array(
                    'id'        => 'consen_line_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Create logo spacing massing', 'consen'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-15px', 'consen'),
					'default'   =>'15px',
                ),
                array(
                    'id'       => 'consen_mobile_image_logo',
                    'type'     => 'text',
					'mode'      => false,
                    'title'    => esc_html__('Logo Text', 'consen'),
                    'desc' => esc_html__('Insert text ex: - "consen", Must be use "" for logo text ', 'consen'),
					'default'	=> esc_html__('"consen"', 'consen'),	
                ),
				array(								
                    'id'        => 'consen_mobilebg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu BG Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container .mean-bar,.mean-container .mean-nav',
					)
                ),
				array(								
                    'id'        => 'consen_mobileicon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu Icon Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container a.meanmenu-reveal span',
						'color' => '.mean-container a.meanmenu-reveal,.mean-container .mean-bar::before,.meanmenu-reveal.meanclose:hover'
					)
                ),					
				
            ),
    ) );

    //Header Menu
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu', 'consen'),
        'id'        => 'consen_menu',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(
				
                array(
                    'id'        => 'consen_defaulth_menu_layout',
					'desc'      => esc_html__('Please set a menu for your all single page. But, For your home and others main page menu, Please goes to your page, there you can see header menu section. Please set a  menu style there', 'consen'),						
                    'type'      => 'select',
                    'title'     => esc_html__('Select Default Menu For All Single Page', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
						'111' => esc_html__( 'Default Header Menu', 'consen' ),								
						'2' => esc_html__( 'Header Transparent Menu ', 'consen' ),
						'3' => esc_html__( 'Header Transparent Menu ', 'consen' ),
                    ),
                    'default'   => '111'
                ),	
                array(								
                    'id'        => 'consen_brand_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Theme Brand Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.section-title.t_left span, .work_progress-number span'
					)
                ),
				array(
                    'id'       => 'consen_header_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'consen'),
                    'desc' => esc_html__('Insert text', 'consen'),
					'default'	=> esc_html__('Get A Quote', 'consen'),					
                ),
                array(
                    'id'       => 'consen_header_button_url',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'consen'),
                    'desc' => esc_html__('Insert url ex: - http://webitkurigram.com/', 'consen'),					
                ),
                array(								
                    'id'        => 'consen_Button_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button & Search Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
					)
                ),
                array(								
                    'id'        => 'consen_Button_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button & Search BG Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),
              array(								
                    'id'        => 'consen_Buttonht_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
                array(								
                    'id'        => 'consen_Buttonhtb_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button BG Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),							
                array(								
                    'id'        => 'consen_menu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Main Menu Section BG Color', 'consen'),
                    'default'  => '',
                    'output'    => array('
						.consen_nav_area
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	

	/*		
				array(
					'id'          => 'consen_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Main Menu Text style', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.consen_menu > ul > li > a,
						.heading_style_2 .consen_menu > ul > li > a,
						.heading_style_3 .consen_menu > ul > li > a,
						.heading_style_4 .consen_menu > ul > li > a,
						.heading_style_3.tr_btn  .consen_menu > ul > li > a,
						.heading_style_3.tr_white_btn .consen_menu > ul > li > a,
						.heading_style_5 .consen_menu > ul > li > a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
			
*/			
                array(								
                    'id'        => 'consen_menu_texts_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Hover Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.consen_menu > ul > li:hover > a,.consen_menu > ul > li.current > a',
					'background-color' => '.consen_menu > ul > li > a::before,.consen_menu > ul > li.current:hover > a::before,.consen_menu > ul > li.current > a:before'
					)
                ),
                array(								
                    'id'        => 'consen_menu_bg_sticky_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Main Menu Sticky BG Color', 'consen'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
					.consen_nav_area.prefix,
					.hbg2
					'
					)
                ),					
		/*									
                array(								
                    'id'        => 'consen_menu_sticky_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.consen_nav_area.prefix .consen_menu > ul > li > a,.hbg2 .consen_menu > ul > li > a,
					.consen_nav_area.prefix .consen_menu > ul > li.current > a
					',
					'background-color' => '
					.consen_nav_area.prefix .consen_menu > ul > li > a::before,
					.hbg2 .consen_menu > ul > li > a::before
					
					'
					)
                ),	
			
			*/
                array(								
                    'id'        => 'consen_menu_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Current Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.consen_nav_area.prefix .consen_menu > ul > li.current > a,
					.hbg2 .consen_menu > ul > li.current > a
					',
					'background-color' => '
						.consen_nav_area.prefix .consen_menu > ul > li.current > a::before					
					'
					)
                ),	
				
                array(								
                    'id'        => 'consen_submenu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Sub Menu BG Color', 'consen'),
                    'default'  => '',
                    'output'    => array('
						.consen_menu ul .sub-menu
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
			
			/*
				array(
					'id'          => 'consen_sub_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Menu Font style', 'consen'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.consen_menu ul .sub-menu li a
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
				
				*/
                array(								
                    'id'        => 'consen_submenu_hover_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Menu Hover Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.consen_menu ul .sub-menu li:hover > a,
						.consen_menu ul .sub-menu .sub-menu li:hover > a,
						.consen_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.consen_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a																'
					)
                ),				
				array(
					'id'             => 'menu_spacing',
					'type'           => 'spacing',
					'output'         => array('.consen_nav_area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'consen'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'consen'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
					
            ),
    ) );


       //Header Side Bar
       Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Side Bar', 'consen'),
        'id'        => 'consen_header_sidebar',
        'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(	
            array(
                'id'       => 'consen_sidebar_title',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Title', 'consen'),
                'default'	=> esc_html__('About Us', 'consen'),					
            ),                 
            array(
                'id'       => 'consen_sidebar_desc',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Desc', 'consen'),
                'default'	=> esc_html__('The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review ', 'consen'),					
            ),               
            array(
                'id'       => 'consen_sidebar_contact_title',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Contact Title', 'consen'),
                'default'	=> esc_html__('Contact Info', 'consen'),					
            ),                
            array(
                'id'       => 'consen_sidebar_contact_location',
                'type'     => 'text',
                'title'    => esc_html__('Insert Company Location ', 'consen'),
                'default'	=> esc_html__('Chicago 12, Melborne City, USA', 'consen'),					
            ),                
            array(
                'id'       => 'consen_sidebar_contact_phone',
                'type'     => 'text',
                'title'    => esc_html__('Insert Phone Number', 'consen'),
                'default'	=> esc_html__('(111) 111-111-1111', 'consen'),					
            ),                
            array(
                'id'       => 'consen_sidebar_contact_mail',
                'type'     => 'text',
                'title'    => esc_html__('Insert Email Address ', 'consen'),
                'default'	=> esc_html__('Example@gmail.com', 'consen'),					
            ),                
            array(
                'id'       => 'consen_sidebar_contact_openhour',
                'type'     => 'text',
                'title'    => esc_html__('Opening Hour Text', 'consen'),
                'default'	=> esc_html__('Week Days: 09.00 to 18.00 Sunday: Closed', 'consen'),					
            ),
            array(								
                'id'        => 'consen_sidebar_title_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Title Text Color', 'consen'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-title h2'
                )
            ),              
            array(								
                'id'        => 'consen_sidebar_desc_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Desc Text Color', 'consen'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-desc p'
                )
            ),                
            array(								
                'id'        => 'consen_sidebar_contact_title_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Text Color', 'consen'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info h2'
                )
            ),                
            array(								
                'id'        => 'consen_sidebar_icon_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Icon Color', 'consen'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info ul li i'
                )
            ),                
            array(								
                'id'        => 'consen_sidebar_icon_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Icon Text Color', 'consen'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info ul li'
                )
            ),
            array(
                'id'       => 'consen_sidebar_social_icons',
                'type'     => 'sortable',
                'title'    => esc_html__('Sidebar Social Icons', 'consen'),
                'subtitle' => esc_html__('Enter social links', 'consen'),
                'mode'     => 'text',
                'label'    => true,
                'options'  => array(        
                    'facebook'     => '',
                    'twitter'      => '',
                    'instagram'    => '',
                    'tumblr'       => '',
                    'pinterest'    => '',
                    'linkedin'     => '',
                    'behance'      => '',
                    'dribbble'     => '',
                    'youtube'      => '',
                    'vimeo'        => '',
                    'rss'          => '',
                ),
                'default' => array(
                    'facebook'     => esc_url('https://www.facebook.com/'),
                    'twitter'     => esc_url('https://twitter.com/'),
                    'instagram'	=> esc_url('https://instagram.com/'),
                    'tumblr'     => '',
                    'pinterest'     => '',
                    'linkedin'     => '',
                    'behance'     => '',
                    'dribbble'     => esc_url('https://dribbble.com/'),
                    'youtube'     => '',
                    'vimeo'     => '',
                    'rss'     => '',
                ),
            ),
        ),
    ) );

// End Sidebar


/*========================
END consen HEADER FIELD
=========================*/


/*========================
consen BREADCRUMB FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Breadcrumb Area', 'consen'),
        'id'         => 'consen_bread_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
    array(
     'id'   => 'info_normal',
     'type' => 'info',
     'desc' => esc_html__('Notice:- If you want to more breadrucmb control. Please see every page bottom area. We Added More Field Here','consen')
    ),    
	array(
		'id'        => 'consen_breadcrumb_bg',
		'type'      => 'background',
		'output'    => array('.breadcumb-area,.breadcumb-blog-area'),
		'title'     => esc_html__('Breadcrumb Background', 'consen'),
		'subtitle'  => esc_html__('Breadcrumb background with image, color.', 'consen'),
		'default'  => array(
			'background-color' => '',
		)
	),
	array(        
		'id'        => 'consen_bread_title_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Title Color', 'consen'),
		'default'  => '',
		'output'    => array(
			'color' => '.brpt h2,.breadcumb-inner h2'
		)
    ),  
			
/*			
    array(
     'id'          => 'consen_breadcrumb_typography',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Text And Font style', 'consen'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .breadcumb-inner ul,     
      .breadcumb-inner li,
      .breadcumb-inner li a      
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'consen'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),
			
*/			
	array(        
		'id'        => 'consen_bread_current_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Current Text Color', 'consen'),
		'default'  => '',
		'output'    => array(
			'color' => '.breadcumb-inner li:nth-last-child(-n+1)'
		)
	),     
    array(
     'id'             => 'spacing',
     'type'           => 'spacing',
     'output'         => array('.breadcumb-area'),
     'mode'           => 'padding',
     'units'          => array('em', 'px'),
     'units_extended' => 'false',
     'title'          => esc_html__('Padding Option', 'consen'),
     'subtitle'       => esc_html__('Allow your users to choose the spacing or margin they want.', 'consen'),
     'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
     'default'            => array(
      'padding-top'     => '', 
      'padding-right'   => '', 
      'padding-bottom'  => '', 
      'padding-left'    => '',
      'units'          => 'px', 
     )
    ),    
        
            ),
    ) );
/*========================
END consen BREADCRUMB FIELD
=========================*/


/*========================
consen circle FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Default Color', 'consen'),
        'id'         => 'consen_tm_defaultpage',  
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
				array(
				 'id'   => 'thdfinfo_normal',
				 'type' => 'info',
				 'desc' => esc_html__('Notice:- we set our all color in our adns, But only carousel Arrow, contact button and scroll button color will be change by below option','consen')
				),  
				array(        
					'id'        => 'thdft',
					'type'      => 'color',
					'title'     => esc_html__('Text Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'color' => '.curosel-style .owl-nav div,.slick-prev:before, .slick-next:before'
					)
				),
				array(        
					'id'        => 'thdftbt',
					'type'      => 'color',
					'title'     => esc_html__('BG Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'background-color' => '.curosel-style .owl-nav div,.slick-prev, .slick-next,.em-slick-slider-new.em-image-sliderslick .slick-dots li button,.mc4wp-form-fields button',
						'border-color' => '.curosel-style .owl-nav div'
					)
				),   				
				array(        
					'id'        => 'thdefhbg',
					'type'      => 'color',
					'title'     => esc_html__('Hover BG Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'background' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp,.slick-prev:hover,.slick-prev:focus,.slick-next:hover,.slick-next:focus ,.em-slick-slider-new.em-image-sliderslick .slick-dots .slick-active button,.mc4wp-form-fields button:hover',
						'border-color' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp,.slick-prev:hover,.slick-next:hover'
					)
				),
				array(        
					'id'        => 'tmdfht',
					'type'      => 'color',
					'title'     => esc_html__('Hover Text Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'color' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp i,.slick-prev:hover:before, .slick-next:hover:before'
					)
				),


				array(        
					'id'        => 'thdefhbgctc',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Text Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton,.sbuton'
					)
				),
				array(        
					'id'        => 'thdefhbgcbtbgh',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button BG Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton,.sbuton',
						'border-color' => '.home-2 .sbuton,.sbuton'
					)
				),				array(        
					'id'        => 'thdefhbgcbth',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover BG Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton:hover,.sbuton:hover',
						'border-color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),
				array(        
					'id'        => 'tmdfhtcbtnht',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover Text Color', 'consen'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),
                array(								
                    'id'        => 'consen_menu_bg_videocolor',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('EM Video Widget Ovelrlay Color', 'consen'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => .3
					),
					'output'    => array(
					'background-color' => '
					.single-video::before
					'
					)
                ),						
				
				

        ),
    ) );
/*========================
END consen circle FIELD
=========================*/

/*========================
consen BLOG FIELD
=========================*/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Area', 'consen' ),
        'id'          => 'consen_blog_section_area',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'consen_blog_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.consen-single-blog'),
                    'title'     => esc_html__('Blog Item BG Color', 'consen'),
                    'subtitle'  => esc_html__('BG color', 'consen'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),

                array(								
                    'id'        => 'consen_blog_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6,					
						.single-blog-content h1, .single-blog-content h2, .single-blog-content h3, .single-blog-content h4, .single-blog-content h5, .single-blog-content h6,
						.blog-content h2 a,.blog-left-side .widget h2,.blog-page-title a,.consen-single-blog-title h2						
					')
                ),	
                array(								
                    'id'        => 'consen_blog_title_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.blog-content h2 a:hover,
					.blog-page-title h2 a:hover
					')
                ),
                array(								
                    'id'        => 'consen_blog_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Post Meta Icon Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.consen-blog-meta-left i
					')
                ),
                array(								
                    'id'        => 'consen_blog_text_meta_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Post Meta Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.consen-blog-meta.txp-meta .consen-blog-meta-left a, .consen-blog-meta.txp-meta .consen-blog-meta-left span,
					
					')
                ),
               				
                array(								
                    'id'        => 'consen_blog_btn_txt_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.blog_readmore_btn
					
					
					')
                ),
				 array(								
                    'id'        => 'consen_blog_btn_border_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Border Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.blog_readmore_btn
					
					
					')
                ),
                array(								
                    'id'        => 'consen_blog_btnhover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Hover Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.consen-single-blog:hover .blog_readmore_btn, .consen-blog-meta-left a, .consen-blog-meta-left span
					
					
					')
                ),				
				array(								
                    'id'        => 'consen_blog_btnhover_colorbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Btn Hover BG & Border Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.consen-single-blog:hover .blog_readmore_btn',
					'background-color' => '.consen-single-blog:hover .blog_readmore_btn ,.consen-blog-meta-left',
					)
                ),

				
                array(
                    'id'        => 'consen_blog_widget_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.blog-left-side.widget > div'),
                    'title'     => esc_html__('Blog Sidebar BG Color', 'consen'),
                    'subtitle'  => esc_html__('BG color', 'consen'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
				 array(	
                    'id'        => 'consen_sidebar_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '.blog-left-side .widget h2'
					)
                ),
                array(								
                    'id'        => 'consen_sidebar_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li,
							.blog-left-side .widget ul li a,
							.blog-left-side .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text
						')
                ),	
                array(								
                    'id'        => 'consen_sidebar_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li a:hover,
							.blog-left-side .widget ul li:hover::before
						')
                ),					
                array(								
                    'id'        => 'consen_blog_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon & Title bar Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.consen-single-icon-inner a,.reply_date span.span_right,.consen_btn',
					'border-color' => '.consen-single-icon-inner a,.consen_btn',
					'background' => '.blog-left-side .widget h2::before,.commment_title h3::before,table#wp-calendar td#today,.footer-middle .widget h2::before',
					)
                ),
				array(								
                    'id'        => 'consen_blog_social_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.consen-single-icon-inner a:hover,.consen_btn:hover',
					'border-color' => '.consen-single-icon-inner a:hover,.consen_btn:hover',
					)
                ),
				
				array(								
                    'id'        => 'consen_blog_pagina_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.paginations a',
					'border-color' => '.paginations a',
					)
                ),				
				
				array(								
                    'id'        => 'consen_blog_pagina_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					'border-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					)
                ),					
				array(
                    'id'        => 'consen_blog_socialsharesh_hide',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Social share Show/Hide', 'consen'),
                    'default'   => true,
                ),												
            )
    ) );		
/*========================
END consen BLOG FIELD
=========================*/
	 
/*========================
consen 404 FIELD
=========================*/	 
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('404 Area', 'consen'),
        'id'         => 'consen_error_page',  
        'desc'       => esc_html__('Use this section to upload background images, select background color', 'consen'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
                array(
                    'id'        => 'consen_background_404',
                    'type'      => 'background',
                    'output'    => array('.not-found-area'),
                    'title'     => esc_html__('404 Page Background Color', 'consen'),
                    'subtitle'  => esc_html__('404 background with image, color.', 'consen'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'consen_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner h2,.not-found-inner'
					)
                ),	
                array(								
                    'id'        => 'consen_sub_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Title Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner p,.not-found-inner strong'
					)
                ),
                array(								
                    'id'        => 'consen_not_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Return Link Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner a'
					)
                ),					
                array(
                    'id'        => '404_info',
                    'type'      => 'editor',
                    'title'     => esc_html__('404 Information', 'consen'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'consen'),
                    'default'   => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'consen'),
                ), 
				array(
					'id'             => 'consen_notfound_spacing',
					'type'           => 'spacing',
					'output'         => array('.not-found-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'consen'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'consen'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),

				
            ),
    ) );

/*========================
consen FOOTER FIELD
=========================*/	 
	
    //Footer area
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Area', 'consen'),
        'id'        => 'footer_area_id',
        'desc'      => esc_html__('Customize Your Footer', 'consen'),
        'icon'      => 'el-icon-cog',
        'fields'    => array(      
                 array(
                    'id'       => 'consen_widget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Widget Section Hide/show', 'consen'),
                    'default'  => false,
                ),				
				array(
                    'id'       => 'consen_copyright_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Copyright Section Show/Hide', 'consen'),
                    'default'  => true,
                ),

                array(
                    'id'        => 'consen_footer_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Footer layout', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'footer_box' => esc_html__('Box Layout','consen'),
                        'footer_full' => esc_html__('Full Layout','consen'),
                    ),
                    'default'   => 'footer_box'
                ),							
								
            )
    ) );
	// footer widget area 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Widget Section', 'consen' ),
        'id'          => 'consen_widget_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'consen_widget_column_count',
                    'type'      => 'select',
                    'title'     => esc_html__('Widget Column Count', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1','consen'),
                        '2' => esc_html__('Column 2','consen'),
                        '3' => esc_html__('Column 3','consen'),
                        '4' => esc_html__('Column 4','consen'),
                        '6' => esc_html__('Column 6','consen'),
                    ),
                    'default'   =>'4'
                ),		
				 array(	
                    'id'        => 'consen_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Title Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-middle .widget h2'
					)
                ),
                array(								
                    'id'        => 'consen_copyright_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p
						')
                ),			
                array(								
                    'id'        => 'consen_copyright_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .recent-post-text > h4 a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						')
                ),		
                array(								
                    'id'        => 'consen_widget_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Widget Section BG Color', 'consen'),
                    'default'  => '',
                    'output'    => array('
									.footer-middle
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				array(
					'id'             => 'consen_widget_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-middle'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'consen'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'consen'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
            )
    ) );	
    //footer copyright text
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Copyright Info', 'consen'),
        'id'        => 'consen_copyright',
        'desc'      => esc_html__('Insert your copyright style', 'consen'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'    => array(
                array(
                    'id'        => 'consen_footer_copyright_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Copyright Style Layout', 'consen'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'copy_s1' => esc_html__('Copyright Text Style','consen'),
                        'copy_s2' => esc_html__('Copyright Text and Right Menu','consen'),
                        'copy_s3' => esc_html__('Copyright Text and Left Menu','consen'),
                        'copy_s4' => esc_html__('Copyright Text and Social Icon','consen'),
                    ),
                    'default'   => 'copy_s2'
                ),		
                array(
                    'id'        => 'consen_copyright_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Copyright information', 'consen'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'consen'),
                    'default'	=> esc_html__('Copyright &copy; consen all rights reserved.', 'consen'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),
                array(								
                    'id'        => 'consen_copyright_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text p,.footer-menu ul li a'
					)
                ),
                array(								
                    'id'        => 'consen_copyright_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Hover Color', 'consen'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text a, .footer-menu ul li a:hover'
					)
                ),				
                array(								
                    'id'        => 'consen_copyright_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Copyright Section BG Color', 'consen'),
                    'default'  => '',
                    'output'    => array('
					.footer-bottom
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),						
				array(
					'id'             => 'consen_copyright_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-bottom'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'consen'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'consen'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'consen'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				
            ),
    ) );
			
/* ========================
    END consen FOOTER FIELD
=========================*/	
    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'consen' ),
        'desc'            => esc_html__( 'This Section should be visible only in Customizer', 'consen' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'consen' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'consen' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'consen' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => esc_html__('Opt 1','consen'),
                    '2' => esc_html__('Opt 2','consen'),
                    '3' => esc_html__('Opt 3','consen')
                ),
                'default'         => '2'
            ),
        )
    ) );   	 	 
    /*
     * <--- END SECTIONS
     */
