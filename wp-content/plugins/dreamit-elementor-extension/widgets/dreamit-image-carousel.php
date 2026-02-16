<?php

if(!defined('ABSPATH')) exit;

class ImageCarousel extends \Elementor\Widget_Base{

	public function get_name(){
		return "my-carousel";
	}
	
	public function get_title(){
		return "Image Carousel";
	}
	
	public function get_icon(){
		return "eicon-button";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'button_section',
			[
				'label' => __( 'Button', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'list_title', [
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'List Title' , 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
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
				'list_content', [
					'label' => esc_html__( 'Content', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::WYSIWYG,
					'default' => esc_html__( 'List Content' , 'dreamit-elementor-extension' ),
					'show_label' => false,
				]
			);

			$repeater->add_control(
				'list_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
					],
				]
			);

			$this->add_control(
				'list',
				[
					'label' => esc_html__( 'Repeater List', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'list_title' => esc_html__( 'Title #1', 'dreamit-elementor-extension' ),
							'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
						],
						[
							'list_title' => esc_html__( 'Title #2', 'dreamit-elementor-extension' ),
							'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
						],
					],
					'title_field' => '{{{ list_title }}}',
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
						'{{WRAPPER}} .dreamit-button' => 'text-align: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'button_typography',
					'selector' => '{{WRAPPER}} .dreamit-button .button',
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
				'text_color',
				[
					'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .dreamit-button .button' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .dreamit-button .button',
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
				'text_hover_color',
				[
					'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .dreamit-button .button:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .dreamit-button .button:hover',
				]
			);

			$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'button_border',
					'label' => esc_html__( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .dreamit-button .button',
					'separator' => 'before',
				]
			);
			$this->add_responsive_control(
				'button_border_radius',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Border Radius', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .dreamit-button .button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => esc_html__( 'Box Shadow', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .dreamit-button .button',
				]
			);
			$this->add_responsive_control(
				'button_padding',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .dreamit-button .button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();


	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>



			<div class="aaa">
			<div class="my-image owl-carousel">
				<?php foreach (  $settings['list'] as $item ) { ?>
				<div class="item">
					<img src="<?php echo $item['image']['url']; ?>" alt="">
				</div>
				<?php } ?>
			</div>
			</div>


			<script>
				jQuery(document).ready(function($) {
					"use strict";

					$('.my-image').owlCarousel({
						items: 5,
						center: true,
						dots: true,
						nav: true,
						autoplayTimeout: 10000,
						navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
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
								items: 5
							}
						}
					});

				});

			</script>




		<?php }elseif($settings['select_style']=='two'){ ?>
				
			<div class="dreamit-button style2">
				<a href="<?php echo esc_url($settings['button_url']['url']); ?>">
					<?php echo $settings['button_text']; ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>
				
		<?php }elseif($settings['select_style']=='three'){ ?>		
				<div class="dreamit-button-box style3">
					<?php if( 'yes'===$settings['show_button'] ){ ?>
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i></a>
					</div>
					<?php } ?>
				</div>
			<?php }elseif($settings['select_style']=='four'){ ?>		
				<div class="dreamit-button-box style4">
					<?php if( 'yes'===$settings['show_button'] ){ ?>
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>						
						</a>
					</div>
					<?php } ?>
				</div>

		<?php } ?>

	<?php
	}
}