<?php

if(!defined('ABSPATH')) exit;

class Testimonial extends \Elementor\Widget_Base{

	public function get_name(){
		return "testimonial";
	}
	
	public function get_title(){
		return "Testimonial";
	}
	
	public function get_icon(){
		return "eicon-blockquote";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function register_controls(){

		$this->start_controls_section(
			'slider', [
				'label' => __( 'Slider', 'dreamit-elementor-extension' ),
			]
		);
		
			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$repeater->add_control(
				'quote_text',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'rows' => 6,
					'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Enter your Quote', 'dreamit-elementor-extension' ),
				]
			);
			$repeater->add_control(
				'name',
				[
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Your Name', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your Name', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'designation',
				[
					'label' => esc_html__( 'Designation', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Web Developer', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your designation', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$repeater->add_control(
				'rating',
				[
					'label' => esc_html__( 'Rating', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 5,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'slides',
				[
					'label' => esc_html__( 'Testimonial List', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'name' => esc_html__( 'Your Name', 'dreamit-elementor-extension' ),
							'quote_text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
						],
						[
							'name' => esc_html__( 'Title #2', 'dreamit-elementor-extension' ),
							'quote_text' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
						],
					],
					'title_field' => '{{{ name }}}',
				]
			);

		$this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'general_section',
			[
				'label' => __( 'General', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
						'four' => __( 'Four', 'dreamit-elementor-extension' ),
						'five' => __( 'Fivee', 'dreamit-elementor-extension' ),
						'six' => __( 'Six', 'dreamit-elementor-extension' ),
						'seven' => __( 'Seven', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'quote_section',
			[
				'label' => __( 'Quote', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'conditions' => [
				    'relation' => 'or',
					'terms' => [
						[
			                'terms' => [
				                [
			                        'name' => 'select_style',
			                        'operator' => '==',
			                        'value' => 'one'
			                    ],
			                ]
			            ],
			            [
			                'terms' => [
			                    [
			                         'name' => 'select_style',
			                         'operator' => '==',
			                         'value' => 'three'
				                ],
			                ]
						]
					]
				]
			]
		);
    		$this->add_control(
    			'quote_text_color',
    			[
    				'label' => __( 'Text Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .single_testimonial .testi_content .em_testi_text' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_control(
    			'quote_background_color',
    			[
    				'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
    				'type' => \Elementor\Controls_Manager::COLOR,
    				'selectors' => [
    					'{{WRAPPER}} .single_testimonial .testi_content' => 'background-color: {{VALUE}}',
    					'{{WRAPPER}} .single_testimonial .testi_content::before' => 'border-left-color: {{VALUE}}; border-top-color: {{VALUE}}',
    				],
    			]
    		);
		$this->end_controls_section();

		$this->start_controls_section(
			'icon_section_style',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .testi_thumb:before' => 'color: {{VALUE}};',
					],
				]
			);
			
			$this->add_control(
				'icon_background_color',
				[
					'label' => __( 'Icon Background Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .testi_thumb:before' => 'background-color: {{VALUE}};',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section_style',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			
			$this->add_control(
				'name_color',
				[
					'label' => __( 'Name Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .testimonial .testimonial-item .name' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'name_typography',
					'selector' => '{{WRAPPER}} .testimonial .testimonial-item .name',
				]
			);
			$this->add_control(
				'designation_color',
				[
					'label' => __( 'Designation Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testimonial .testimonial-item .designation' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'designation_typography',
					'selector' => '{{WRAPPER}} .testimonial .testimonial-item .designation',
				]
			);

			$this->add_control(
				'quote_color',
				[
					'label' => __( 'Description Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testimonial .testimonial-item .quote' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'quote_typography',
					'selector' => '{{WRAPPER}} .testimonial .testimonial-item .quote',
				]
			);

			$this->add_control(
				'rating_color',
				[
					'label' => __( 'Rating Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'separator' => 'before',
					'selectors' => [
						'{{WRAPPER}} .testi-star i.active' => 'color: {{VALUE}};',
					],
				]
			);
			
		$this->end_controls_section();
		
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$slides = isset($settings['slides']) ? $settings['slides'] : '';

		?>
		
		<?php if($settings['select_style']=='one'){ ?>

			<div class="testimonial style1">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
					<div class="testimonial-item">
						<div class="author">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
							<div class="bio">
								<h4 class="name"><?php echo $slide['name']; ?></h4>
								<h5 class="designation"><?php echo $slide['designation']; ?></h5>
							</div>
						</div>
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: false,
						autoplayTimeout: 10000,
						margin: 30,
						dots: true,
						nav: false,
						items: 6,
						navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 2
							},
							992: {
								items: 2
							},
							1365: {
								items: 3
							},
							1600: {
								items: 3
							},
							1920: {
								items: 3
							}
						}
					})
				});

			</script>

		<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="testimonial style2">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
					<div class="testimonial-item">
						<div class="author">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
						<div class="bio">
							<h4 class="name"><?php echo $slide['name']; ?></h4>
							<h5 class="designation"><?php echo $slide['designation']; ?></h5>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: false,
						autoplayTimeout: 10000,
						margin: 30,
						dots: false,
						nav: false,
						items: 6,
						navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 1
							},
							1920: {
								items: 1
							}
						}
					})
				});

			</script>

		<?php }elseif($settings['select_style']=='three'){ ?>

			<div class="testimonial style3">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
						<div class="testimonial-item">
					    <div class="testimonial-content">
						<div class="author">
							<img src="<?php echo $slide['image']['url']; ?>" alt="">
						</div>
						<div class="bio">
							<h4 class="name"><?php echo $slide['name']; ?></h4>
							<h5 class="designation"><?php echo $slide['designation']; ?></h5>
						</div>
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
						
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: false,
						autoplayTimeout: 10000,
						margin: 20,
						dots: false,
						nav: true,
						items: 6,
						navText: ["<i class='flaticon flaticon-left-arrow'></i>", "<i class='flaticon flaticon-right-arrow'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 2
							},
							1920: {
								items: 2
							}
						}
					})
				});

			</script>
			
		<?php }elseif($settings['select_style']=='four'){ ?>

			<div class="testimonial style4">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
					<div class="testimonial-item">
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
						<div class="author">
							<div class="bio">
								<h4 class="name"><?php echo $slide['name']; ?></h4>
								<h5 class="designation"><?php echo $slide['designation']; ?></h5>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: false,
						autoplayTimeout: 10000,
						margin: 30,
						dots: true,
						nav: false,
						items: 6,
						navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 1
							},
							1365: {
								items: 1
							},
							1600: {
								items: 1
							},
							1920: {
								items: 1
							}
						}
					})
				});

			</script>
			
			<?php }elseif($settings['select_style']=='five'){ ?>

			<div class="testimonial style5">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
						<div class="testimonial-item">
					    <div class="testimonial-content">
						
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
						
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
    						<div class="author">
    							<img src="<?php echo $slide['image']['url']; ?>" alt="">
    						</div>
    						<div class="bio">
    							<h4 class="name"><?php echo $slide['name']; ?></h4>
    							<h5 class="designation"><?php echo $slide['designation']; ?></h5>
    						</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: true,
						autoplayTimeout: 10000,
						margin: 20,
						dots: true,
						nav: true,
						items: 6,
						navText: ["<i class='flaticon flaticon-left-arrow'></i>", "<i class='flaticon flaticon-right-arrow'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 2
							},
							1920: {
								items: 2
							}
						}
					})
				});

			</script>

		<?php }elseif($settings['select_style']=='six'){ ?>

			<div class="testimonial style6">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
						<div class="testimonial-item">
						   <div class="author_thumb">
						        <div class="author">
    							    <img src="<?php echo $slide['image']['url']; ?>" alt="">
    						    </div>
    						</div>
    						<div class="bio">
    							<h4 class="name"><?php echo $slide['name']; ?></h4>
    							<h5 class="designation"><?php echo $slide['designation']; ?></h5>
    						</div>
					    <div class="testimonial-content">
						
						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
						
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
    						
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: true,
						autoplayTimeout: 10000,
						margin: 20,
						dots: true,
						nav: true,
						items: 6,
						navText: ["<i class='flaticon flaticon-left-arrow'></i>", "<i class='flaticon flaticon-right-arrow'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 2
							},
							1920: {
								items: 3
							}
						}
					})
				});

			</script>
			
			<?php }elseif($settings['select_style']=='seven'){ ?>

			<div class="testimonial style7">
				<div class="testimonial-carousel owl-carousel">
					<?php foreach ($slides as $slide) { ?>
						<div class="testimonial-item">
						   <div class="author_thumb">
						        <div class="author">
    							    <img src="<?php echo $slide['image']['url']; ?>" alt="">
    						    </div>
    						</div>
    						<div class="bio">
    							<h4 class="name"><?php echo $slide['name']; ?></h4>
    							<h5 class="designation"><?php echo $slide['designation']; ?></h5>
    						</div>
    						<div class="reviews_rating">
							<?php if( $slide['rating']==5 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==4 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>

							<?php if( $slide['rating']==3 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==2 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>												
							<?php } ?>

							<?php if( $slide['rating']==1 ){ ?>
								<div class="testi-star">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							<?php } ?>
						</div>
					    <div class="testimonial-content">
						<p class="quote"><?php echo $slide['quote_text']; ?></p>
    						
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<script>
				
				jQuery(document).ready(function($) {
					"use strict";
					$('.testimonial-carousel').owlCarousel({
						loop: true,
						autoplay: true,
						autoplayTimeout: 10000,
						margin: 20,
						dots: true,
						nav: false,
						items: 6,
						navText: ["<i class='flaticon flaticon-left-arrow'></i>", "<i class='flaticon flaticon-right-arrow'></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 1
							},
							1250: {
								items: 2
							},
							1920: {
								items: 2
							}
						}
					})
				});

			</script>

		<?php }?>

		<?php
	}
	



}

