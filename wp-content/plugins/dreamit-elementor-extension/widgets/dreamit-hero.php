<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;

class Hero extends Widget_Base{

	public function get_name(){
		return "hero";
	}
	
	public function get_title(){
		return "Hero Section";
	}
	
	public function get_icon(){
		return "eicon-info-box";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'label' => __( 'Hero Background', 'dreamit-elementor-extension' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .hero-section',
                ]
            );
            $this->add_control(
                'hero_subtitle',
                [
                    'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Default Subtitle', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Enter Subtitle here', 'dreamit-elementor-extension' ),
                    'separator' => 'before',
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'hero_title1',
                [
                    'label' => __( 'Title 1', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Default title', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'hero_title2',
                [
                    'label' => __( 'Title 2', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Default title', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'hero_description',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Type your Description here', 'dreamit-elementor-extension' ),
                ]
            );
            $this->add_control(
                'single_image',
                [
                    'label' => __( 'Choose Image', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'button_section',
            [
                'label' => __( 'Button', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'button_text',
                [
                    'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => __( 'Learn More', 'dreamit-elementor-extension' ),
                    'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );
			$this->add_control(
				'button_link',
				[
					'label' => __( 'Button Link', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::URL,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'show_button',
				[
					'label' => __( 'Show Button', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => __( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => __( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
		$this->end_controls_section();

        $this->start_controls_section(
            'video_section',
            [
                'label' => __( 'Video', 'dreamit-elementor-extension' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'video_title',
                [
                    'label' => __( 'Video Title', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => __( 'Enter Title', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );
			$this->add_control(
				'video_url',
				[
					'label' => __( 'Video Link', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::URL,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'video_icon',
				[
					'label' => __( 'Video Icon', 'text-domain' ),
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
            'general',
            [
                'label' => esc_html__( 'General', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
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
                        'three' => __( 'Three', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
            $this->add_responsive_control(
                'text_align',
                [
                    'label' => __( 'Alignment', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => __( 'Left', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-text-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-text-align-center',
                        ],
                        'right' => [
                            'title' => __( 'Right', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-text-align-right',
                        ],
                        'justify' => [
                            'title' => __( 'Justified', 'dreamit-elementor-extension' ),
                            'icon' => 'eicon-text-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section' => 'text-align: {{VALUE}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'section_height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1500,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section' => 'min-height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'middle_style',
            [
                'label' => esc_html__( 'Middle', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'title_heading',
                [
                    'label' => __( 'Title', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                ]
            );
            $this->add_control(
                'title_color',
                [
                    'label' => __( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .title h2' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'title_highlight_color',
                [
                    'label' => __( 'Highlight Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .title span' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typography',
                    'label' => __( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .hero-section .text-area .title h2',
                ]
            );
            $this->add_responsive_control(
                'title_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'description_heading',
                [
                    'label' => __( 'Description', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'description_color',
                [
                    'label' => __( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .description p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'description_typography',
                    'label' => __( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .hero-section .text-area .description p',
                ]
            );
            $this->add_responsive_control(
                'description_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .description p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'style_tabs'
        );
            $this->start_controls_tab(
                'button_normal_tab',
                [
                    'label' => __( 'Normal', 'dreamit-elementor-extension' ),
                ]
            );
                $this->add_control(
                    'button_color',
                    [
                        'label' => __( 'Button Color', 'dreamit-elementor-extension' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-section .text-area .hero-button a' => 'background: {{VALUE}}',
                        ],
                    ]
                );
            $this->end_controls_tab();
            $this->start_controls_tab(
                'button_hover_tab',
                [
                    'label' => __( 'Hover', 'dreamit-elementor-extension' ),
                ]
            );
                $this->add_control(
                    'button_hover_color',
                    [
                        'label' => __( 'Color', 'dreamit-elementor-extension' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-section .text-area .hero-button a:hover' => 'background: {{VALUE}}',
                        ],
                    ]
                );
            $this->end_controls_tab();
        $this->end_controls_tabs();

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'button_typography',
                    'label' => __( 'Typography', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .hero-section .text-area .hero-button a',
                ]
            );
            $this->add_responsive_control(
                'button_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .hero-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'button_padding',
                [
                    'label' => __( 'Padding', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .hero-section .text-area .hero-button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();
	}

	protected function render() {
        
        $settings = $this->get_settings_for_display();
        
        ?>
        
        <?php if($settings['select_style']=='one'){ ?>
        <div class="hero-section">
            <div class="hero-main">
                <div class="container-fluid">
                    <div class="text-area">
                        <div class="subtitle">
                            <h4><?php echo $settings['hero_subtitle']; ?></h4>
                        </div>
                        <div class="title">
                            <h2><?php echo $settings['hero_title1']; ?></h2>
                            <h3><?php echo $settings['hero_title2']; ?></h3>
                        </div>

                        <?php if( !empty($settings['hero_description']) ){ ?>
                        <div class="description"><p><?php echo $settings['hero_description']; ?></p></div>
                        <?php } ?>
                                
                        <?php if( $settings['show_button'] == 'yes' ){ ?>
                        <div class="hero-button">
                            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"><?php echo $settings['button_text']; ?><i class="flaticon-right-arrow"></i></a>
                        </div>
                        <?php } ?>
						
						<?php if( !empty($settings['video_url']['url']) ){ ?>
							<div class="hero-video-icon">
								<a href="<?php echo esc_url($settings['video_url']['url']); ?>" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true">
									<?php \Elementor\Icons_Manager::render_icon( $settings['video_icon'], [ 'aria-hidden' => 'true' ] ); ?>
								</a>
								<h6><?php echo $settings['video_title']; ?></h6>
							</div>
                        <?php } ?>
                    </div>
                        
                    <div class="single-image">
                        <img src="<?php echo esc_url($settings['single_image']['url']); ?>" alt="">
                    </div>
                </div><!-- .conteiner -->
            </div><!-- .hero-main -->
        </div>
        
        <?php }elseif($settings['select_style']=='two'){ ?>
        
        <div class="hero-section style-two">
            <div class="hero-main">
                <div class="container">
                   
                        <div class="text-area">
                            
                            <div class="subtitle">
                                <h4><?php echo $settings['hero_subtitle']; ?></h4>
                            </div>

                            <div class="title">
                                <h2><?php echo $settings['hero_title1']; ?></h2>
                                <h3><?php echo $settings['hero_title2']; ?></h3>
                            </div>
                            <?php if( !empty($settings['hero_description']) ){ ?>
                            <div class="description"><p><?php echo $settings['hero_description']; ?></p></div>
                            <?php } ?>

                            <?php if( $settings['show_button'] == 'yes' ){ ?>
                            <div class="hero-button">
                                <a href="<?php echo esc_url($settings['button_link']['url']) ?>"><?php echo $settings['button_text']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        
                </div><!-- .conteiner -->
            </div><!-- .hero-main -->
        </div>

        <?php }elseif($settings['select_style']=='three'){ ?>


        <div class="hero-section style-three">
            <div class="hero-main">
                <div class="container">
                   
                        <div class="text-area">
                            
                            <div class="subtitle">
                                <h4><?php echo $settings['hero_subtitle']; ?></h4>
                            </div>

                            <div class="title">
                                <h2><?php echo $settings['hero_title1']; ?></h2>
                                <h3><?php echo $settings['hero_title2']; ?></h3>
                            </div>
                            <?php if( !empty($settings['hero_description']) ){ ?>
                            <div class="description"><p><?php echo $settings['hero_description']; ?></p></div>
                            <?php } ?>

                            <?php if( $settings['show_button'] == 'yes' ){ ?>
                            <div class="hero-button">
                                <a href="<?php echo esc_url($settings['button_link']['url']) ?>"><?php echo $settings['button_text']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                        
                </div><!-- .conteiner -->


                <div class="shape1 bounce-animate4">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape55.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>
                <div class="shape2 bounce-animate3">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape22.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>
                <div class="shape3 bounce-animate2">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape33.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>
                <div class="shape4 rotateme">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape44.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>
                <div class="shape5 bounce-animate">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape11.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>
                <div class="shape6 bounce-animate">
                    <img src="<?php echo esc_url( plugins_url( 'assets/images/hero-shape66.png', dirname(__FILE__) ) ); ?>" alt="circle-image" />
                </div>



            </div><!-- .hero-main -->
        </div>

        <?php } ?>
        
        <?php

	}
}

