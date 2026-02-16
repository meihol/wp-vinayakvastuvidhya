<?php

if(!defined('ABSPATH')) exit;

class Heading extends \Elementor\Widget_Base {

	public function get_name() {
		return 'simple-heading';
	}

	public function get_title() {
		return esc_html__( 'Heading', 'dreamit-elementor-extension' );
	}

	public function get_icon() {
		return 'eicon-typography-1';
	}

	public function get_categories() {
		return [ 'dreamit-category' ];
	}

	public function get_keywords() {
		return [ 'heading', 'title' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'heading_text',
			[
				'label' => esc_html__( 'Text', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'heading_title',
				[
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'html_tag',
				[
					'label' => esc_html__( 'HTML Tag', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'h1',
					'options' => [
						'h1'  => esc_html__( 'H1', 'dreamit-elementor-extension' ),
						'h2' => esc_html__( 'H2', 'dreamit-elementor-extension' ),
						'h3' => esc_html__( 'H3', 'dreamit-elementor-extension' ),
						'h4' => esc_html__( 'H4', 'dreamit-elementor-extension' ),
						'h5' => esc_html__( 'H5', 'dreamit-elementor-extension' ),
						'h6' => esc_html__( 'H6', 'dreamit-elementor-extension' ),
						'p' => esc_html__( 'p', 'dreamit-elementor-extension' ),
						'span' => esc_html__( 'span', 'dreamit-elementor-extension' ),
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
			'general_section',
			[
				'label' => __( 'General', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
						'{{WRAPPER}} .heading' => 'text-align: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'title_style',
			[
				'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .heading .heading-text' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .heading .heading-text',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .heading .heading-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<div class="heading">
			<<?php echo $settings['html_tag']; ?> class="heading-text"><?php echo $settings['heading_title']; ?></<?php echo $settings['html_tag']; ?>>
		</div>

		<?php
	}
}