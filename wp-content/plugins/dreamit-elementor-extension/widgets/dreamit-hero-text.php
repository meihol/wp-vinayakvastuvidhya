<?php

if(!defined('ABSPATH')) exit;

class HeroText extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hero_text';
	}

	public function get_title() {
		return esc_html__( 'Hero Text', 'dreamit-elementor-extension' );
	}

	public function get_icon() {
		return 'eicon-text';
	}

	public function get_categories() {
		return [ 'dreamit-category' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'hero_text',
			[
				'label' => esc_html__( 'Text', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'hero_subtitle',
				[
					'label' => esc_html__( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Default subtitle', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your subtitle here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'hero_title',
				[
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your title here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'hero_description',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'rows' => 10,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'hero_button',
			[
				'label' => esc_html__( 'Button', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'button_text',
				[
					'label' => esc_html__( 'Text', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Click Here', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button_link',
				[
					'label' => esc_html__( 'Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'video_icon',
				[
					'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-play',
						'library' => 'fa-solid',
					],
					'recommended' => [
						'fa-solid' => [
							'play',
							'play-circle',
						],
						'fa-regular' => [
							'play-circle',
						],
					],
				]
			);
			$this->add_control(
				'video_link',
				[
					'label' => esc_html__( 'Video Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => esc_html__( 'https://your-link.com', 'dreamit-elementor-extension' ),
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						'custom_attributes' => '',
					],
					'label_block' => true,
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
					],
					'default' => 'one',
					
				]
			);
			
		$this->end_controls_section();

		$this->start_controls_section(
			'subtitle_style',
			[
				'label' => esc_html__( 'Subtitle', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'subtitle_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .hero-text .subtitle' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'selector' => '{{WRAPPER}} .hero-text .subtitle',
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
						'{{WRAPPER}} .hero-text .title' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .hero-text .title',
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
					'selector' => '{{WRAPPER}} .hero-text .button',
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
				'button_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .hero-text .button' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'button_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .hero-text .button',
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
				'button_hover_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .hero-text .button:hover' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'button_hover_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .hero-text .button:hover',
				]
			);

			$this->end_controls_tab();

			$this->end_controls_tabs();









		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>

		<div class="hero-text style1">
			<div class="text-wrapper">
				<h5 class="subtitle"><?php echo $settings['hero_subtitle']; ?></h5>
				<h1 class="title"><?php echo $settings['hero_title']; ?></h1>
				<a class="button" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>"><?php echo $settings['button_text']; ?></a>
				<a class="video-icon" href="<?php echo esc_url( $settings['video_link']['url'] ); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
				<span class="video-title">Watch Demo</span>
			</div>
		</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

		<div class="hero-text style2">
			<div class="text-wrapper">
				<h5 class="subtitle"><?php echo $settings['hero_subtitle']; ?></h5>
				<h1 class="title"><?php echo $settings['hero_title']; ?></h1>
				<p class="description"><?php echo $settings['hero_description']; ?></p>
				<a class="hero-btn" href="<?php echo esc_url( $settings['button_link']['url'] ); ?>"><?php echo $settings['button_text']; ?></a>
				<?php if(!empty($settings['video_link']['url'])){ ?>
				<a class="video-icon" href="<?php echo esc_url( $settings['video_link']['url'] ); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
				<span class="video-title">Watch Demo</span>
				<?php } ?>
			</div>
		</div>

		<?php } ?>

		<?php
	}
}