<?php

if(!defined('ABSPATH')) exit;

class FlipBox extends \Elementor\Widget_Base{

	public function get_name(){
		return "flipbox";
	}
	
	public function get_title(){
		return "Flip Box";
	}
	
	public function get_icon(){
		return "eicon-flip-box";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

    protected function register_controls(){

        $this->start_controls_section(
            'front_part',
            [
                'label' => esc_html__( 'Front Part', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'front_icon_type',
                [
                    'label' => esc_html__( 'Icon Type', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'default' => 'icon',
                    'options' => [
                        'none' => [
                            'title' => esc_html__( 'None', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-close',
                        ],
                        'icon' => [
                            'title' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-star',
                        ],
                        'image' => [
                            'title' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-image',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_control(
                'front_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'front_image',
                [
                    'label' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'front_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_control(
                'front_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => __('Front Title', 'dreamit-elementor-extension' ),
                    'separator' => 'before', 
                    'label_block' => true,
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'front_desc',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
                    'default' => __( 'Front Description Here', 'dreamit-elementor-extension' ),
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'back_part',
            [
                'label' => esc_html__( 'Back Part', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'back_icon_type',
                [
                    'label' => esc_html__( 'Icon Type', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'label_block' => false,
                    'default' => 'icon',
                    'options' => [
                        'none' => [
                            'title' => esc_html__( 'None', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-close',
                        ],
                        'icon' => [
                            'title' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-star',
                        ],
                        'image' => [
                            'title' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-image',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_control(
                'back_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'condition' => [
                      'back_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'back_image',
                [
                    'label' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'back_icon_type' => 'image'
                    ]
                ]
            );

            $this->add_control(
                'back_title',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'label_block' => true,
                    'default' => __('Back Title', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
                    'separator' => 'before', 
                ]
            );

            $this->add_control(
                'back_desc',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'default' => __('Back Description Here', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'back_btn_heading',
                [
                    'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'back_btn_text',
                [
                    'label' => __( 'Text', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'dynamic' => [
                        'active' => true,
                    ],
                    'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                    'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'back_btn_link',
                [
                    'label' => __( 'Link', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'back_btn_icon',
                [
                    'label' => __( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                ]
            );

        $this->end_controls_section(); 

/*
==========
Style Tab
==========
*/    

        $this->start_controls_section(
            'flip_box_style',
            [
                'label' => esc_html__( 'General', 'dreamit-elementor-extension' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'select_style',
                [
                    'label' => __( 'Select Style', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => [
                        'one' => __( 'One', 'dreamit-elementor-extension' ),
                        'two' => __( 'Two', 'dreamit-elementor-extension' ),
                    ],
                    'default' => 'one',
                    
                ]
            );
            $this->add_control(
                'flip_direction',
                [
                    'label' => esc_html__( 'Flip Direction', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'default' => 'flip-right',
                    'label_block' => false,
                    'options' => [
                        'flip-right' => [
                            'title' => esc_html__( 'Left To Right', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-right',
                        ],
                        'flip-top' => [
                            'title' => esc_html__( 'Bottom To Top', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-top',
                        ],
                        'flip-bottom' => [
                            'title' => esc_html__( 'Top To Bottom', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-v-align-bottom',
                        ],
                        'flip-left' => [
                            'title' => esc_html__( 'Right To Left', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-h-align-left',
                        ],
                    ],
                    'toggle' => false,
                ]
            );

            $this->add_responsive_control(
                'flip_box_height',
                [
                    'label' => esc_html__( 'Height', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => ['px'],
                    'range' => [
                        'px' => [
                            'min' => 100,
                            'max' => 1000,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'flip_box_front_style',
            [
                'label' => esc_html__( 'Front Part', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'font_background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'front_border',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front',
                ]
            );

            $this->add_control(
                'front_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'front_box_shadow',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front',
                ]
            );

            $this->add_control(
                'front_icon_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'front_icon_color',
                [
                    'label' => __( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'front_icon_background_color',
                [
                    'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'front_icon_border',
                    'label' => __( 'Border', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front .icon i',
                ]
            );
            $this->add_responsive_control(
                'front_icon_border_radius',
                [
                    'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'front_icon_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'front_icon_height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'front_icon_width',
                [
                    'label' => __( 'Width', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .icon i' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_icon_typography',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front .icon i',
                ]
            );

            $this->add_control(
                'front_title_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'front_title_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .front-title' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front .front-title',
                ]
            );

            $this->add_responsive_control(
                'front_title_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .front-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'front_desc_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'front_desc_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .front-desc' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'front_desc_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-front .front-desc',
                ]
            );

            $this->add_responsive_control(
                'front_desc_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-front .front-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();



        $this->start_controls_section(
            'flip_box_back_style',
            [
                'label' => esc_html__( 'Back Part', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_background',
                    'label' => __( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'back_border',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back',
                ]
            );

            $this->add_control(
                'back_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'back_box_shadow',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back',
                ]
            );

            $this->add_control(
                'back_icon_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Icon Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                    'condition' => [
                      'front_icon_type' => 'icon'
                    ],
                ]
            );

            $this->add_control(
                'back_icon_color',
                [
                    'label' => __( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'back_icon_background_color',
                [
                    'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'back_icon_border',
                    'label' => __( 'Border', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .icon i',
                ]
            );
            $this->add_responsive_control(
                'back_icon_border_radius',
                [
                    'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'back_icon_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'back_icon_height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'back_icon_width',
                [
                    'label' => __( 'Width', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .icon i' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_icon_typography',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .icon i',
                ]
            );

            $this->add_control(
                'back_title_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Title Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'back_title_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-title' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_title_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-title',
                ]
            );

            $this->add_responsive_control(
                'back_title_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'back_desc_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Description Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_control(
                'back_desc_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-desc' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_desc_typography',
                    'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-desc',
                ]
            );

            $this->add_responsive_control(
                'back_desc_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'back_btn_style',
                [
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'label' => esc_html__( 'Button Style', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'back_btn_typography',
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-btn',
                ]
            );

            $this->start_controls_tabs(
                'style_tabs'
            );

            $this->start_controls_tab(
                'style_normal_tab',
                [
                    'label' => esc_html__( 'Normal', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'back_btn_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-btn' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_btn_background',
                    'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-btn',
                ]
            );

            $this->end_controls_tab();

            $this->start_controls_tab(
                'style_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'dreamit-elementor-extension' ),
                ]
            );

            $this->add_control(
                'back_btn_text_hover_color',
                [
                    'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-btn:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'back_btn_hover_background',
                    'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-btn:hover',
                ]
            );

            $this->end_controls_tab();

            $this->end_controls_tabs();

            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'back_btn_border',
                    'label' => esc_html__( 'Border', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-btn',
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'back_btn_border_radius',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'back_btn_box_shadow',
                    'label' => esc_html__( 'Box Shadow', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .flip-box .flip-box-back .back-btn',
                ]
            );
            $this->add_responsive_control(
                'back_btn_padding',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .flip-box .flip-box-back .back-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        
        ?>

        <?php if($settings['select_style']=='one'){ ?>

        <div class="flip-box style1">
            <div class="flip-box-inner <?php echo $settings['flip_direction'];?>">
                <div class="flip-box-front">
                    <div class="content">
                        <div class="icon">
                            <?php if( !empty($settings['front_icon']) ) { ?>
                                <?php \Elementor\Icons_Manager::render_icon( $settings['front_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php }elseif( !empty($settings['front_image']['url']) ){ ?>
                                <img src="<?php echo $settings['front_image']['url']; ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php if( !empty($settings['front_title']) ) { ?>
                            <h2 class="front-title"><?php echo $settings['front_title']; ?></h2>
                        <?php } ?>

                        <?php if( !empty($settings['front_desc']) ) { ?>
                            <p class="front-desc"><?php echo esc_attr($settings['front_desc']);?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="flip-box-back">
                    <div class="content">
                        <div class="icon">
                            <?php if( !empty($settings['back_icon']) ) { ?>
                                <?php \Elementor\Icons_Manager::render_icon( $settings['back_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php }elseif( !empty($settings['back_image']['url']) ){ ?>
                                <img src="<?php echo $settings['back_image']['url']; ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php if( !empty($settings['back_title']) ) { ?>
                            <h2 class="back-title"><?php echo $settings['back_title']; ?></h2>
                        <?php } ?>

                        <?php if( !empty($settings['back_desc']) ) { ?>
                            <p class="back-desc"><?php echo esc_attr($settings['back_desc']);?></p>
                        <?php } ?>

                        <?php if( !empty($settings['back_btn_text']) ) { ?>
                        <a class="back-btn" href="<?php echo esc_url($settings['back_btn_link']['url']);?>">
                            <?php echo $settings['back_btn_text'];?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['back_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php }elseif($settings['select_style']=='two'){ ?>

        <div class="flip-box style-two">
            <div class="flip-box-inner <?php echo esc_attr($settings['flip_direction']);?>">
                <div class="flip-box-wrap">
                    <div class="front-part">
                        <div class="front-content-part">
                            <?php if( !empty($settings['front_icon']) || !empty($settings['front_image']['url'])){?>
                                <div class="front-icon-part">
                                    <?php if(!empty($settings['front_icon'])) : ?>
                                        <span class="front-icon"><i class="<?php echo esc_attr($settings['front_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['front_image'])) : ?>
                                        <span class="front-img">
                                            <img src="<?php echo $settings['front_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>

                            <?php if(!empty($settings['front_title'])) { ?>
                                <div class="front-title-part">
                                    <h2 class="front-title"><?php echo esc_attr($settings['front_title']);?></h2>                                
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['front_desc'])) : ?>
                                <div class="front-desc-part">
                                    <p class="front-desc"><?php echo esc_attr($settings['front_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['front_btn_text'])) : ?>
                                <div class="front-btn-part">
                                    <a class="front-btn <?php echo esc_attr($settings['front_btn_icon_position']);?>" href="<?php echo esc_url($settings['front_btn_link']['url']);?>">
                                        <span class="front-btn-txt"><?php echo esc_attr($settings['front_btn_text']);?></span>
                                        <?php if(!empty($settings['front_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['front_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="back-part">
                        <div class="back-background-overlay"></div>
                        <div class="back-content-part">
                            <?php if( !empty($settings['back_icon']) || !empty($settings['back_image']['url'])){?>
                                <div class="back-icon-part">
                                    <?php if(!empty($settings['back_icon'])) : ?>
                                        <span class="back-icon"><i class="<?php echo esc_attr($settings['back_icon']['value']);?>"></i></span>
                                    <?php endif; ?>
                                    <?php if(!empty($settings['back_image'])) : ?>
                                        <span class="back-img">
                                            <img src="<?php echo $settings['back_image']['url']; ?>" alt="">
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php }?>

                            <?php if(!empty($settings['back_title'])) { ?>
                                <div class="back-title-part">
                                    
                                    <h2 class="back-title"><?php echo esc_attr($settings['back_title']);?></h2>
                                    
                                </div>
                            <?php } ?>

                            <?php if(!empty($settings['back_desc'])) : ?>
                                <div class="back-desc-part">
                                    <p class="back-desc"><?php echo esc_attr($settings['back_desc']);?></p>
                                </div>
                            <?php endif; ?>

                            <?php if(!empty($settings['back_btn_text'])) : ?>
                                <div class="back-btn-part">
                                    <a class="back-btn <?php echo esc_attr( $settings['back_btn_icon_position'] );?>" href="<?php echo esc_url($settings['back_btn_link']['url']);?>">
                                        <span class="back-btn-txt"><?php echo esc_attr($settings['back_btn_text']);?></span>
                                        <?php if(!empty($settings['back_btn_icon'])) : ?>
                                            <i class="<?php echo esc_attr($settings['back_btn_icon']);?>"></i>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>


        <?php
    }
}