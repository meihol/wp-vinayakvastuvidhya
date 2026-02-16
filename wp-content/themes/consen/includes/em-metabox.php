<?php

add_action( 'cmb2_admin_init', 'consen_metabox' );
/*
**	Setting up custom fields for custom post types belongs to fantasic child theme for consen
*/ 

if ( !function_exists('consen_metabox') ) {
	function consen_metabox() {
		$prefix = '_consen_';

	//header metabox
 	$page_heading_style = new_cmb2_box( array(
	'id'            => $prefix . 'em_header_style_option',
	'title'         => esc_html__( 'Header Style Option', 'consen' ),
	'object_types'  => array( 'page' ), // Post type
	'priority'   => 'high',
	) );
	

	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Top Menu Style ','consen'),
			'id'      => $prefix . 'consen_header_topa',
			'type'    => 'radio_inline',
			'options' => array(
			'1' => esc_html__( 'Show Top Menu This Page', 'consen' ),
			'2'   => esc_html__( 'Hide Top Menu This Page', 'consen' ),
			),
			'default' =>'2',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Header Style','consen'),
			'id'      => $prefix . 'consen_header_style',
			'show_option_none' => true,
			'desc'   => esc_html__( 'Note: When you select 1-1,3,4,6 style menu, that time you need to set top bar menu, otherwise you can not find our real menu style.', 'consen' ), 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Default Header Menu', 'consen' ),				
				'2' => esc_html__( 'Header Menu Transparent', 'consen' ),					
				'3' => esc_html__( 'Header Style Two', 'consen' ),			
				'4' => esc_html__( 'Header OnePage Menu', 'consen' ),			
				'5' => esc_html__( 'Header Menu With Search', 'consen' ),			
			),
			'default' =>'1',
		) );	
		
		  //page metabox
		  $page_breadcrumb = new_cmb2_box( array(
		   'id'            => $prefix . 'pageid1',
		   'title'         => esc_html__( 'Breadcumb Option', 'consen' ),
		   'object_types'  => array( 'post','page','em_event','em_portfolio' ), // Post type
		   'priority'   => 'high',
		  ) );
		  
		  $page_breadcrumb->add_field( array(
		   'name'    => esc_html__('Page Title','consen'),
		   'id'      => $prefix . 'ptitle',
		   'type'    => 'radio_inline',
		   'options' => array(
			'ptitles' => esc_html__( 'Hide Title', 'consen' ),
			'ptitleh'   => esc_html__( 'Show Title', 'consen' ),
		   ),
		   'default' =>'ptitleh',
		  ) );   
		  
		  
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb','consen'),
			'id'      => $prefix . 'breadcrumbs',
			'type'    => 'radio_inline',
			'options' => array(
			'0' => esc_html__( 'Show breadcrumb', 'consen' ),
			'1'   => esc_html__( 'Hide breadcrumb', 'consen' ),
			),
			'default' =>0,
		) );
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb Title','consen'),
			'id'      => $prefix . 'btitle',
			'type'    => 'radio_inline',
			'options' => array(
			'btitles' => esc_html__( 'Show Title', 'consen' ),
			'btitleh'   => esc_html__( 'Hide Title', 'consen' ),
			),
			'default' =>'btitleh',
		) );    
		$page_breadcrumb->add_field(array(
			'name' => esc_html__( 'Page Breadcrumb Image', 'consen' ),
			'id'   => $prefix .'pageimagess',
			'desc'       => esc_html__( 'insert image here', 'consen' ),  
			'type' => 'file',
		) );  
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Align','consen'),
			'desc'             => esc_html__('Select an option','consen'),
			'id'   => $prefix .'page_text_align',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'text-center',
			'options'          => array(
			'text-left' => esc_html__( 'Align Left', 'consen' ),
			'text-center'   => esc_html__( 'Align Middle', 'consen' ),
			'text-right'     => esc_html__( 'Alige Right', 'consen' ),
			),
		) );
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Transform','consen'),
			'desc'             => esc_html__('Select an option','consen'),
			'id'   => $prefix .'page_text_transform',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'ccase',
			'options'          => array(
			'lcase' => esc_html__( 'Transform lowercase', 'consen' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'consen' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'consen' ),
			),
		) );	
		

		//Testimonial
		$testimonial = new_cmb2_box( array(
			'id'            => $prefix . 'em_testimonial',
			'title'         => esc_html__( 'Testimonial Option', 'consen' ),
			'object_types'  => array( 'em_testimonial' ), // Post type
			'priority'   => 'high',
		) );
			$testimonial->add_field( array(
				'name'       => esc_html__( 'Degignation', 'consen' ),
				'desc'       => esc_html__( 'insert Degignation here', 'consen' ),
				'id'         => $prefix . 'testi_deg',
				'type'       => 'text',
			) );	
			
							
	//Case Study
		$casestudy = new_cmb2_box( array(
			'id'            => $prefix . 'em_case_study',
			'title'         => esc_html__( 'Case Study Option', 'consen' ),
			'object_types'  => array( 'em_case_study' ), // Post type
			'priority'   => 'high',
		) );
			$casestudy->add_field( array(
				'name'       => esc_html__( 'Case Study Description', 'consen' ),
				'desc'       => esc_html__( 'Description', 'consen' ),
				'id'         => $prefix . 'casedesc',
				'type'       => 'wysiwyg',
			) );

		$casestudy->add_field( array(
				'name' => 'oEmbed',
				'id'   => 'embed',
				'type' => 'oembed',
			) );
		$casestudy->add_field( array(
			'name'    => 'Icon Field',
			'desc'    => 'Upload an image or enter an URL.',
			'id'      => 'icon_field',
			'type'    => 'file',
		) );
			
							
				
				
			//===================================
			//Portfolio Metaboxes
			//===================================  

			$portfolio = new_cmb2_box( array(
				'id'            => $prefix . 'portfolio',
				'title'         => esc_html__( 'Portfolio Option', 'consen' ),
				'object_types'  => array( 'em_portfolio', ), // Post type
				'priority'   => 'high',
			) );
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Portfolio Description', 'consen' ),
				'desc'       => esc_html__( 'Description', 'consen' ),
				'id'         => $prefix . 'portdesc',
				'type'       => 'wysiwyg',
			) );				
			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide All Option','consen'),			  
			   'id'      => $prefix . 'saloption',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_alshow' => esc_html__( 'Show', 'consen' ),
				'm_alhide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_alhide',
			  ) );			
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Image','consen'),			  
			   'id'      => $prefix . 'siimagepop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_ishow' => esc_html__( 'Show', 'consen' ),
				'm_ihide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_ishow',
			  ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Link Page','consen'),			  
			   'id'      => $prefix . 'sllink',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_lshow' => esc_html__( 'Show', 'consen' ),
				'm_lhide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_lshow',
			  ) );				  
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Youtube','consen'),			  
			   'id'      => $prefix . 'shyoutub',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_yshow' => esc_html__( 'Show', 'consen' ),
				'm_yhide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_yhide',
			  ) );				
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Youtube Video', 'consen' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'consen' ),
				'id'         => $prefix . 'pyoutube',
				'type'       => 'text_url',
			   ) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Popup Vimeo','consen'),			  
			   'id'      => $prefix . 'svvimeo',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_vshow' => esc_html__( 'Show', 'consen' ),
				'm_vhide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_vhide',
			  ) );				   
			   $portfolio->add_field( array(
				'name'       => esc_html__( 'Vimeo Video', 'consen' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'consen' ),
				'id'         => $prefix . 'pvimeo',
				'type'       => 'text_url',
			   ) );		   

			  $portfolio->add_field( array(
			   'name'    => esc_html__('Select Multi Gellary','consen'),			  
			   'id'      => $prefix . 'm_g_image_pop',
			   'type'    => 'radio_inline',
			   'options' => array(
				'm_gshow' => esc_html__( 'Show', 'consen' ),
				'm_ghide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'m_ghide',
			  ) );				   
				$portfolio->add_field( array(
					'name'       => esc_html__( 'Multiple Gellary Image', 'consen' ),
					'desc'       => esc_html__( 'insert multiple gellary image here for single page', 'consen' ),
					'id'         => $prefix . 'pgellaryu',
					'type'       => 'file_list',
				) );
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Title','consen'),			  
			   'id'      => $prefix . 'pshow_title',
			   'type'    => 'radio_inline',
			   'options' => array(
				'ptitle_show' => esc_html__( 'Show', 'consen' ),
				'ptitle_hide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'ptitle_show',
			  ) );					
			  $portfolio->add_field( array(
			   'name'    => esc_html__('Show/Hide Category','consen'),			  
			   'id'      => $prefix . 'pshow_cat',
			   'type'    => 'radio_inline',
			   'options' => array(
				'pcat_show' => esc_html__( 'Show', 'consen' ),
				'pcat_hide'   => esc_html__( 'Hide', 'consen' ),
			   ),
			   'default' =>'pcat_show',
			  ) );	
//===================================
//Pricing table metabox
//===================================
		$pricing = new_cmb2_box( array(
			'id'            => $prefix . 'pricing',
			'title'         => esc_html__( 'Price Option', 'consen' ),
			'object_types'  => array( 'em_pricing', ), // Post type
			'priority'   => 'high',
		) );
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Currency', 'consen' ),
					'desc'       => esc_html__( 'insert Currency here e.g $', 'consen' ),
					'id'         => $prefix . 'currency',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Amount', 'consen' ),
					'desc'       => esc_html__( 'insert Amount here', 'consen' ),
					'id'         => $prefix . 'price_amount',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Delay', 'consen' ),
					'desc'       => esc_html__( 'insert Year, Month, Week or Day here', 'consen' ),
					'id'         => $prefix . 'day',
					'type'       => 'text',
				) );						
				$pricing->add_field( array(
					'name'       => esc_html__( 'pricing content', 'consen' ),
					'desc'       => esc_html__( 'insert pricing Item', 'consen' ),
					'id'         => $prefix . 'pricing_item_loop',
					'type'       => 'text',
					'repeatable'      => true,
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Text', 'consen' ),
					'desc' => esc_html__( 'Insert Text Here', 'consen' ),
					'id'   => $prefix . 'button_text',
					'type' => 'text',
				) );					
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Link', 'consen' ),
					'desc' => esc_html__( 'Insert register Link', 'consen' ),
					'id'   => $prefix . 'button_link',
					'type' => 'text_url',
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Active Class', 'consen' ),
					'desc' => esc_html__( 'Add Active Class here "active"', 'consen' ),
					'id'   => $prefix . 'active',
					'type' => 'text',
				) );

				
				
		//post tab metabox
			$emtab = new_cmb2_box( array(
				'id'            => $prefix . 'em_tab',
				'title'         => esc_html__( 'Tab Option', 'consen' ),
				'object_types'  => array( 'em_tab' ), // Post type
				'priority'   => 'high',
			) );

				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Name', 'consen' ),
					'desc'       => esc_html__( 'insert tab menu here', 'consen' ),
					'id'         => $prefix . 'em_tab_menu',
					'type'       => 'text',
				) );					
									
				$emtab->add_field(array(
					'name' => esc_html__( 'Tab Menu Image', 'consen' ),
					'id'   => $prefix .'em_tab_image',
					'desc'       => esc_html__( 'insert image here', 'consen' ),  
					'type' => 'file',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Active', 'consen' ),
					'desc'       => esc_html__( 'must be set "active in" class into one post from all post, for active tab item', 'consen' ),
					'id'         => $prefix . 'em_tab_active',
					'type'       => 'text',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Icon Name', 'consen' ),
					'desc'       => esc_html__( 'Type Your favorite Font awesome Icon name', 'consen' ),
					'id'         => $prefix . 'em_tab_icon',
					'type'       => 'text',
				) );
				
					
				
				
								
//slider table metabox
	$slider = new_cmb2_box( array(
		'id'            => $prefix . 'consen_slider',
		'title'         => esc_html__( 'Slider Option', 'consen' ),
		'object_types'  => array( 'em_slider', ), // Post type
		'priority'   => 'high',
	) );
	
	
			$slider->add_field( array(
				'name'       => esc_html__( 'Title', 'consen' ),
				'desc'       => esc_html__( 'insert title here. for highlight text use <span> ex-<span>Design</span>', 'consen' ),
				'id'         => $prefix . 'em_slide_title',
				'type'       => 'textarea_small',
			) );

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate','consen'),
				'id'      => $prefix . 'em_aimate_title',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'consen' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'consen' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'consen' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'consen' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'consen' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'consen' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'consen' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'consen' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'consen' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'consen' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'consen' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'consen' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'consen' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'consen' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'consen' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'consen' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'consen' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'consen' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'consen' ),				
					'rollIn' => esc_html__( 'rollIn', 'consen' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'consen' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'consen' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'consen' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'consen' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'consen' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'consen' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'consen' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'consen' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'consen' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Duration','consen'),
				'id'      => $prefix . 'em_durations_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Delay','consen'),
				'id'      => $prefix . 'em_dealy_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'consen' ),							
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'0',
			) );		

		
		
		
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Sub Title', 'consen' ),
				'desc'       => esc_html__( 'insert sub-title here. for highlight text use <span> ex-<span>website</span>', 'consen' ),
				'id'         => $prefix . 'em_slide_subtitle',
				'type'       => 'textarea_small',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate','consen'),
				'id'      => $prefix . 'em_aimate_subtitle',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'consen' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'consen' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'consen' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'consen' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'consen' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'consen' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'consen' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'consen' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'consen' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'consen' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'consen' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'consen' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'consen' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'consen' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'consen' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'consen' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'consen' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'consen' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'consen' ),				
					'rollIn' => esc_html__( 'rollIn', 'consen' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'consen' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'consen' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'consen' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'consen' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'consen' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'consen' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'consen' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'consen' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'consen' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Duration','consen'),
				'id'      => $prefix . 'em_durations_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Delay','consen'),
				'id'      => $prefix . 'em_dealy_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'consen' ),							
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'0',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'Content', 'consen' ),
				'desc'       => esc_html__( 'insert content here', 'consen' ),
				'id'         => $prefix . 'em_slide_textarea',
				'type'       => 'textarea',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate','consen'),
				'id'      => $prefix . 'em_aimate_content',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'consen' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'consen' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'consen' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'consen' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'consen' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'consen' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'consen' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'consen' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'consen' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'consen' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'consen' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'consen' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'consen' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'consen' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'consen' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'consen' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'consen' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'consen' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'consen' ),				
					'rollIn' => esc_html__( 'rollIn', 'consen' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'consen' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'consen' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'consen' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'consen' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'consen' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'consen' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'consen' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'consen' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'consen' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Duration','consen'),
				'id'      => $prefix . 'em_durations_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Delay','consen'),
				'id'      => $prefix . 'em_dealy_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'consen' ),							
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'0',
			) );				
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 1', 'consen' ),
				'desc'       => esc_html__( 'insert button text here', 'consen' ),
				'id'         => $prefix . 'em_slide_btn1',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Slide Image', 'consen' ),
				'desc'       => esc_html__( 'insert single slide image here', 'consen' ),
				'id'         => $prefix . 'em_slide_img',
				'type'       => 'file',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate','consen'),
				'id'      => $prefix . 'em_aimate_image',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'consen' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'consen' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'consen' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'consen' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'consen' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'consen' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'consen' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'consen' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'consen' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'consen' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'consen' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'consen' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'consen' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'consen' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'consen' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'consen' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'consen' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'consen' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'consen' ),				
					'rollIn' => esc_html__( 'rollIn', 'consen' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'consen' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'consen' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'consen' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'consen' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'consen' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'consen' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'consen' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'consen' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'consen' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Duration','consen'),
				'id'      => $prefix . 'em_durations_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Delay','consen'),
				'id'      => $prefix . 'em_dealy_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'consen' ),							
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'0',
			) );		

			
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 1', 'consen' ),
				'desc'       => esc_html__( 'insert button text url here', 'consen' ),
				'id'         => $prefix . 'em_slide_btn1utl',
				'type'       => 'text_url',
			) );			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 2', 'consen' ),
				'desc'       => esc_html__( 'insert button text here', 'consen' ),
				'id'         => $prefix . 'em_slide_btn2',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 2', 'consen' ),
				'desc'       => esc_html__( 'insert button text url here', 'consen' ),
				'id'         => $prefix . 'em_slide_btn2url',
				'type'       => 'text_url',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate','consen'),
				'id'      => $prefix . 'em_aimate_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'consen' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'consen' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'consen' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'consen' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'consen' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'consen' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'consen' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'consen' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'consen' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'consen' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'consen' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'consen' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'consen' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'consen' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'consen' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'consen' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'consen' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'consen' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'consen' ),				
					'rollIn' => esc_html__( 'rollIn', 'consen' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'consen' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'consen' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'consen' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'consen' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'consen' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'consen' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'consen' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'consen' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'consen' ),				
				),
				'default' =>'bounceInUp',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Duration','consen'),
				'id'      => $prefix . 'em_durations_btn',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Delay','consen'),
				'id'      => $prefix . 'em_dealy_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'consen' ),							
					'0.1' => esc_html__( 'point 1s', 'consen' ),							
					'0.2' => esc_html__( 'point 2s', 'consen' ),							
					'0.3' => esc_html__( 'point 3s', 'consen' ),							
					'0.4' => esc_html__( 'point 4s', 'consen' ),							
					'0.5' => esc_html__( 'point 5s', 'consen' ),							
					'0.6' => esc_html__( 'point 6s', 'consen' ),							
					'0.7' => esc_html__( 'point 7s', 'consen' ),							
					'0.8' => esc_html__( 'point 8s', 'consen' ),							
					'0.9' => esc_html__( 'point 9s', 'consen' ),							
					'1.2' => esc_html__( '1 point 2s', 'consen' ),							
					'1.3' => esc_html__( '1 point 3s', 'consen' ),							
					'1.4' => esc_html__( '1 point 4s', 'consen' ),							
					'1.5' => esc_html__( '1 point 5s', 'consen' ),							
					'1.8' => esc_html__( '1 point 8s', 'consen' ),							
					'2' => esc_html__( '2s', 'consen' ),							
					'2.2' => esc_html__( '2 point 2s', 'consen' ),							
					'2.3' => esc_html__( '2 point 5s', 'consen' ),							
					'3' => esc_html__( '3s', 'consen' ),							
				),
				'default' =>'1',
			) );				
			$slider->add_field( array(
				'name'    => esc_html__('Text Alignment Style','consen'),
				'id'      => $prefix . 'em_slider_posi',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'' => esc_html__( 'Select alignment', 'consen' ),
					'text-left' => esc_html__( 'Left Alignment', 'consen' ),
					'text-center' => esc_html__( 'Center Alignment', 'consen' ),
					'text-right' => esc_html__( 'Right Alignment', 'consen' ),
				),
				'default' =>'text-center',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'More Sliders Option, Please see slider widget area', 'consen' ),
				'id'         => $prefix . 'title_heading_line',
				'type'       => 'title',
			) );				
	
			
	}
}


