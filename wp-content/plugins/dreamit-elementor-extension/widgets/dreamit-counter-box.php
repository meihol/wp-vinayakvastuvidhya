<?php

if(!defined('ABSPATH')) exit;

class CounterBox extends \Elementor\Widget_Base{

	public function get_name(){
		return "dreamit-counter";
	}
	
	public function get_title(){
		return "DreamIT Counter";
	}
	
	public function get_icon(){
		return "eicon-counter";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'section_counter',
			[
				'label' => __( 'Counter', 'dreamit-elementor-extension' ),
			]
		);

			$this->add_control(
				'serial_number',
				[
					'label' => esc_html__( 'Serial Number', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '01', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your number here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'icons_type',
				[
				    'label' => esc_html__('Icon Type','dreamit-elementor-extension'),
				    'type' => \Elementor\Controls_Manager::CHOOSE,
				    'options' =>[
					  'img' =>[
						'title' =>esc_html__('Image','dreamit-elementor-extension'),
						'icon' =>'eicon-image',
					  ],
					  'icon' =>[
						'title' =>esc_html__('Icon','dreamit-elementor-extension'),
						'icon' =>'fa fa-info',
					  ]
				    ],
				    'default' => 'icon',
				]
			 );
			 $this->add_control(
				'select_icon',
				[
					'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'condition'=>[
						'icons_type'=> 'icon',
					],
					'label_block' => true,
				]
			);
			$this->add_control(
				'select_img',
				[
				    'label' => esc_html__('Image','dreamit-elementor-extension'),
				    'type'=> \Elementor\Controls_Manager::MEDIA,
				    'default' => [
					  'url' => \Elementor\Utils::get_placeholder_image_src(),
				    ],
				    'condition' => [
					  'icons_type' => 'img',
				    ]
				]
			);

			$this->add_control(
				'number',
				[
					'label' => __( 'Number', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'default' => 100,
				]
			);

			$this->add_control(
				'suffix',
				[
					'label' => __( 'Number Suffix', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'default' => '+',
					'placeholder' => __( 'Plus', 'dreamit-elementor-extension' ),
				]
			);

			$this->add_control(
				'title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
					'dynamic' => [
						'active' => true,
					],
					'default' => __( 'Cool Number', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Cool Number', 'dreamit-elementor-extension' ),
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
					],
					'default' => 'one',
					
				]
			);
			$this->add_responsive_control(
				'text_align',
				[
					'label' => __( 'Alignment', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
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
						'{{WRAPPER}} .single-counter' => 'text-align: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'icon_style',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
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
				'icon_color',
				[
					'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .single-counter .icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .single-counter .icon i',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'icon_border',
					'label' => __( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .single-counter .icon i',
				]
			);
			$this->add_responsive_control(
				'icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .single-counter .icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_tab();

		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => __( 'Hover', 'dreamit-elementor-extension' ),
			]
		);

			$this->add_control(
				'hover_icon_color',
				[
					'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .single-counter:hover .icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .single-counter:hover .icon i',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'hover_border',
					'label' => __( 'Hover Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .single-counter:hover .icon i',
				]
			);
			$this->add_responsive_control(
				'hover_icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .single-counter:hover .icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_tab();

		$this->end_controls_tabs();

			$this->add_responsive_control(
				'icon_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .single-counter .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
			$this->add_control(
				'height',
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
						'{{WRAPPER}} .single-counter .icon i' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'width',
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
						'{{WRAPPER}} .single-counter .icon i' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'icon_typography',
					'selector' => '{{WRAPPER}} .single-counter .icon i',
				]
			);
			
		$this->end_controls_section();

		$this->start_controls_section(
			'number_style',
			[
				'label' => __( 'Number', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'number_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .single-counter #counter span' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'typography_number',
					'selector' => '{{WRAPPER}} .single-counter #counter span',
				]
			);

		$this->end_controls_section();
		


		$this->start_controls_section(
			'title_style',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .single-counter #counter h6' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'typography_title',
					'selector' => '{{WRAPPER}} .single-counter #counter h6',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .single-counter #counter h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
		$this->start_controls_section(
			'span_style',
			[
				'label' => __( 'Plus', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'span_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .counter-content .suffix' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'typography_span',
					'selector' => '{{WRAPPER}} .counter-content .suffix',
				]
			);
			$this->add_responsive_control(
				'span_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .counter-content .suffix' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>
		<?php if($settings['select_style']=='one'){ ?>

			<div class="single-counter">
				<div class="icon">			
					<?php if($settings['icons_type'] == 'icon' ){ ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['select_icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php }
					elseif($settings['icons_type'] == 'img'){ ?>
						<img src="<?php echo $settings['select_img']['url']; ?>" alt="">
					<?php } ?>
				</div>
					
				<div class="counter-content" id="counter">
					<span class="count percent" data-count="<?php echo $settings['number']; ?>">0</span>
					<span class="suffix"><?php echo $settings['suffix']; ?></span>
					<h6><?php echo $settings['title']; ?></h6>
				</div>

			</div>

			<script>

				jQuery(document).ready(function($) {
					"use strict";

					var counted = 0;
					$(window).scroll(function() {

						var oTop = $('#counter').offset().top - window.innerHeight;
						if (counted == 0 && $(window).scrollTop() > oTop) {
							$('.count').each(function() {
								var $this = $(this),
								countTo = $this.attr('data-count');
								$({
									countNum: $this.text()
								}).animate({
									countNum: countTo
								},

								{

									duration: 2000,
									easing: 'swing',
									step: function() {
										$this.text(Math.floor(this.countNum));
									},
									complete: function() {
										$this.text(this.countNum);
									}

								});
							});
							counted = 1;
						}

					});
				});

			</script>

			<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="single-counter style_two">
				<div class="icon">			
					<?php if($settings['icons_type'] == 'icon' ){ ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['select_icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php }
					elseif($settings['icons_type'] == 'img'){ ?>
						<img src="<?php echo $settings['select_img']['url']; ?>" alt="">
					<?php } ?>
				</div>
					
				<div class="counter-content" id="counter">
					<span class="count percent" data-count="<?php echo $settings['number']; ?>">0</span>
					<span class="suffix"><?php echo $settings['suffix']; ?></span>
					<h6><?php echo $settings['title']; ?></h6>
				</div>

			</div>

			<script>

				jQuery(document).ready(function($) {
					"use strict";

					var counted = 0;
					$(window).scroll(function() {

						var oTop = $('#counter').offset().top - window.innerHeight;
						if (counted == 0 && $(window).scrollTop() > oTop) {
							$('.count').each(function() {
								var $this = $(this),
								countTo = $this.attr('data-count');
								$({
									countNum: $this.text()
								}).animate({
									countNum: countTo
								},

								{

									duration: 2000,
									easing: 'swing',
									step: function() {
										$this.text(Math.floor(this.countNum));
									},
									complete: function() {
										$this.text(this.countNum);
									}

								});
							});
							counted = 1;
						}

					});
				});

			</script>
			
			<?php }elseif($settings['select_style']=='three'){ ?>

			<div class="single-counter style_three">
				<div class="icon">			
					<?php if($settings['icons_type'] == 'icon' ){ ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['select_icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php }
					elseif($settings['icons_type'] == 'img'){ ?>
						<img src="<?php echo $settings['select_img']['url']; ?>" alt="">
					<?php } ?>
				</div>
					
				<div class="counter-content" id="counter">
					<span class="count percent" data-count="<?php echo $settings['number']; ?>">0</span>
					<span class="suffix"><?php echo $settings['suffix']; ?></span>
					<h6><?php echo $settings['title']; ?></h6>
				</div>

			</div>

			<script>

				jQuery(document).ready(function($) {
					"use strict";

					var counted = 0;
					$(window).scroll(function() {

						var oTop = $('#counter').offset().top - window.innerHeight;
						if (counted == 0 && $(window).scrollTop() > oTop) {
							$('.count').each(function() {
								var $this = $(this),
								countTo = $this.attr('data-count');
								$({
									countNum: $this.text()
								}).animate({
									countNum: countTo
								},

								{

									duration: 2000,
									easing: 'swing',
									step: function() {
										$this.text(Math.floor(this.countNum));
									},
									complete: function() {
										$this.text(this.countNum);
									}

								});
							});
							counted = 1;
						}

					});
				});

			</script>
			
			<?php } ?>
		<?php
	}

}