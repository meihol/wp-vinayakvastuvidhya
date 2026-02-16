<?php


use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;

class Tab2 extends Widget_Base{

	public function get_name(){
		return "tab";
	}
	
	public function get_title(){
		return "Tab";
	}
	
	public function get_icon(){
		return "eicon-tabs";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

    protected function register_controls(){

		$this->start_controls_section(
			'tab1_section',
			[
				'label' => __( 'Tab 1', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab1_icon',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);

			$this->add_control(
				'tab1_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab1_title2',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab1_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);

			$this->add_control(
				'tab1_content',
				[
					'label' => esc_html__( 'Tab Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'tab1_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab1_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			
			$this->add_control(
				'tab1_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab1_button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab2_section',
			[
				'label' => __( 'Tab 2', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'tab2_icon',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);

			$this->add_control(
				'tab2_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab Two', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab2_title2',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab2_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);

			$this->add_control(
				'tab2_content',
				[
					'label' => esc_html__( 'Tab Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'tab2_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab2_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			
			$this->add_control(
				'tab2_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'tab2_button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab3_section',
			[
				'label' => __( 'Tab 3', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'show_tab3',
				[
					'label' => esc_html__( 'Show Tab', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => esc_html__( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			$this->add_control(
				'tab3_icon',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);

			$this->add_control(
				'tab3_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab Three', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab3_title2',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab3_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);

			$this->add_control(
				'tab3_content',
				[
					'label' => esc_html__( 'Tab Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab3_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab3_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			
			$this->add_control(
				'tab3_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab3_button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
					'condition' => [
						'show_tab3' => 'yes'
					],
				]
			);
			
		$this->end_controls_section();

		$this->start_controls_section(
			'tab4_section',
			[
				'label' => __( 'Tab 4', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'show_tab4',
				[
					'label' => esc_html__( 'Show Tab', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => esc_html__( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'tab4_icon',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);

			$this->add_control(
				'tab4_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab Four', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab4_title2',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab4_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			
			$this->add_control(
				'tab4_content',
				[
					'label' => esc_html__( 'Tab Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab4_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab4_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			
			$this->add_control(
				'tab4_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab4_button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
					'condition' => [
						'show_tab4' => 'yes'
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'tab5_section',
			[
				'label' => __( 'Tab 5', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'show_tab5',
				[
					'label' => esc_html__( 'Show Tab', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => esc_html__( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'tab5_icon',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);

			$this->add_control(
				'tab5_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab Four', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab5_title2',
				[
					'label' => __( 'Title Two', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Tab One', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your text here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'tab5_description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXTAREA,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			
			$this->add_control(
				'tab5_content',
				[
					'label' => esc_html__( 'Tab Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab5_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab5_image',
				[
					'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			
			$this->add_control(
				'tab5_button_text',
				[
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);
			$this->add_control(
				'tab5_button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'show_external' => true,
					'condition' => [
						'show_tab5' => 'yes'
					],
				]
			);

		$this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'tab',
			[
				'label' => __( 'Tab', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->start_controls_tabs(
			'style_tabs'
		);
    		$this->start_controls_tab(
    			'style_normal_tab',
    			[
    				'label' => __( 'Normal', 'dreamit-elementor-extension' ),
    			]
    		);
        		$this->add_control(
        			'tab-background',
        			[
        				'label' => __( 'Tab Background', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li' => 'background: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'tab_text_color',
        			[
        				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li a' => 'color: {{VALUE}}',
        				],
        			]
        		);
    		$this->end_controls_tab();
    		$this->start_controls_tab(
    			'style_active_tab',
    			[
    				'label' => __( 'Active', 'dreamit-elementor-extension' ),
    			]
    		);
        		$this->add_control(
        			'active-tab-background',
        			[
        				'label' => __( 'Active Tab Background', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li.active' => 'background: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'active_tab_text_color',
        			[
        				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .tab .nav-tabs li.active a' => 'color: {{VALUE}}',
        				],
        			]
        		);
    		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
    		$this->add_control(
    			'title_color',
    			[
    				'label' => __( 'Title Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .tab .tab-content h2' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'title_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .tab .tab-content h2',
    			]
    		);
		$this->end_controls_section();

		$this->start_controls_section(
			'tab1_title2',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
    		$this->add_control(
    			'title_color',
    			[
    				'label' => __( 'Title Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .content .text h3' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'title_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .content .text h3',
    			]
    		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'description',
			[
				'label' => __( 'Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
    		$this->add_control(
    			'description_color',
    			[
    				'label' => __( 'Description Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .tab .tab-content p' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'description_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .tab .tab-content p',
    			]
    		);
		$this->end_controls_section();
		
    }

    protected function render() {

    	$settings = $this->get_settings_for_display();

    	?>

		<div class="filter-tab">
			<ul id="tabs">
				<li>
					<a id="tab1">
						<img src="<?php echo $settings['tab1_icon']['url']; ?>" alt="">
						<h3><?php echo $settings['tab1_title']; ?></h3>
											</a>
				</li>
				<li>
					<a id="tab2">
						<img src="<?php echo $settings['tab2_icon']['url']; ?>" alt="">
						<h3><?php echo $settings['tab2_title']; ?></h3>
						
					</a>
				</li>

				<?php if ( 'yes' === $settings['show_tab3'] ) { ?>
				<li>
					<a id="tab3">
						<img src="<?php echo $settings['tab3_icon']['url']; ?>" alt="">
						<h3><?php echo $settings['tab3_title']; ?></h3>
											</a>
				</li>
				<?php } ?>

				<?php if ( 'yes' === $settings['show_tab4'] ) { ?>
				<li>
					<a id="tab4">
						<img src="<?php echo $settings['tab4_icon']['url']; ?>" alt="">
						<h3><?php echo $settings['tab4_title']; ?></h3>
											</a>
				</li>
				<?php } ?>

				<?php if ( 'yes' === $settings['show_tab5'] ) { ?>
				<li>
					<a id="tab5">
						<img src="<?php echo $settings['tab5_icon']['url']; ?>" alt="">
						<h3><?php echo $settings['tab5_title']; ?></h3>
						
					</a>
				</li>
				<?php } ?>

			</ul>
			<div class="content" id="tab1C">
				<div class="text">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<img src="<?php echo $settings['tab1_image']['url']; ?>" alt="">
						</div>
						<div class="col-md-12 col-lg-6">
							<h3><?php echo $settings['tab1_title2']; ?></h3>
							<p><?php echo $settings['tab1_description']; ?></p>
							<?php echo $settings['tab1_text']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="content" id="tab2C">
				<div class="text">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<img src="<?php echo $settings['tab2_image']['url']; ?>" alt="">
						</div>
						<div class="col-md-12 col-lg-6">
							<h3><?php echo $settings['tab2_title2']; ?></h3>
							<p><?php echo $settings['tab2_description']; ?></p>
							<?php echo $settings['tab2_text']; ?>
						</div>
						
					</div>
				</div>
			</div>
			<div class="content" id="tab3C">
				<div class="text">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<img src="<?php echo $settings['tab3_image']['url']; ?>" alt="">
						</div>
						<div class="col-md-12 col-lg-6">
							<h3><?php echo $settings['tab3_title2']; ?></h3>
							<p><?php echo $settings['tab3_description']; ?></p>
							<?php echo $settings['tab3_text']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="content" id="tab4C">
				<div class="text">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<h3><?php echo $settings['tab4_title2']; ?></h3>
							<p><?php echo $settings['tab4_description']; ?></p>
							<?php echo $settings['tab4_text']; ?>
						</div>
						<div class="col-md-12 col-lg-6">
							<img src="<?php echo $settings['tab4_image']['url']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="content" id="tab5C">
				<div class="text">
					<div class="row">
						<div class="col-md-12 col-lg-6">
							<h3><?php echo $settings['tab5_title2']; ?></h3>
							<p><?php echo $settings['tab5_description']; ?></p>
							<?php echo $settings['tab5_text']; ?>
						</div>
						<div class="col-md-12 col-lg-6">
							<img src="<?php echo $settings['tab5_image']['url']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			jQuery(document).ready(function($) {
				"use strict";
				
				$('#tabs li a:not(:first)').addClass('inactive');
				$('.content').hide();
				$('.content:first').show();

				$('#tabs li a').click(function(){
					var t = $(this).attr('id');
					if($(this).hasClass('inactive')){
						$('#tabs li a').addClass('inactive');           
						$(this).removeClass('inactive');

						$('.content').hide();
						$('#'+ t + 'C').fadeIn('slow');
					}
				});

			});
		</script>
		
		<?php

	}
}