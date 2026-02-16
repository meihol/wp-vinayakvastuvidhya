<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;

if(!defined('ABSPATH')) exit;

class Social extends \Elementor\Widget_Base {

	public function get_name() {
		return 'social';
	}

	public function get_title() {
		return __( 'Social Link', 'dreamit-elementor-extension' );
	}

	public function get_icon() {
		return 'eicon-social-icons';
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'social_link_section',
			[
				'label' => __( 'Social Link', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title', [
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'List Title' , 'dreamit-elementor-extension' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'social_icon',
			[
				'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
		$repeater->add_control(
			'website_link',
			[
				'label' => __( 'Link', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Repeater List', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => __( 'Facebook', 'dreamit-elementor-extension' ),
						'website_link' => __( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
					],
					[
						'list_title' => __( 'Twitter', 'dreamit-elementor-extension' ),
						'website_link' => __( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
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
					'type' => Controls_Manager::SELECT,
					'options' => [
						'one' => __( 'One', 'dreamit-elementor-extension' ),
						'two' => __( 'Two', 'dreamit-elementor-extension' ),
						'three' => __( 'Three', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
				]
			);
			$this->add_control(
				'text_align',
				[
					'label' => __( 'Alignment', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'dreamit-elementor-extension' ),
							'icon' => 'fa fa-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'dreamit-elementor-extension' ),
							'icon' => 'fa fa-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'dreamit-elementor-extension' ),
							'icon' => 'fa fa-align-right',
						],
					],
					'default' => 'center',
					'toggle' => true,
					'selectors' => [
					'{{WRAPPER}} .icon-box.style-two' => 'text-align: {{VALUE}};',
					],
					'condition'=>[
						'select_style'=> 'two',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->start_controls_tabs(
				'title_style_tabs'
			);
				$this->start_controls_tab(
					'title_style_normal_tab',
					[
						'label' => __( 'Normal', 'dreamit-elementor-extension' ),
					]
				);
				
					$this->add_control(
						'title_color',
						[
							'label' => __( 'Color', 'dreamit-elementor-extension' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .social-links ul li a' => 'color: {{VALUE}}',
							],
						]
					);
				
				$this->end_controls_tab();
				
				$this->start_controls_tab(
					'title_style_hover_tab',
					[
						'label' => __( 'Hover', 'dreamit-elementor-extension' ),
					]
				);

					$this->add_control(
						'hover_title_color',
						[
							'label' => __( 'Color', 'dreamit-elementor-extension' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .social-links ul li a:hover' => 'color: {{VALUE}}',
							],
						]
					);
				
				$this->end_controls_tab();
				
			$this->end_controls_tabs();

			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .social-links ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .social-links ul li a',
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'icon_style',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .social-links ul li a' => 'color: {{VALUE}}',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .social-links ul li a',
				]
			);

			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'icon_typography',
					'selector' => '{{WRAPPER}} .social-links ul li a',
				]
			);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		
		?>

		<?php if($settings['select_style']=='one'){ ?>

		<div class="social-links style1">
			<ul>
				<?php foreach (  $settings['list'] as $item ) { ?>
				<li><a href="<?php echo esc_url($item['website_link']['url']); ?>">
					<?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a></li>
				<?php } ?>
			</ul>
		</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

		<div class="social-links style2">
			<ul>
				<?php foreach (  $settings['list'] as $item ) { ?>
				<li><a href="<?php echo esc_url($item['website_link']['url']); ?>"><?php echo $item['list_title']; ?></a></li>
				<?php } ?>
			</ul>
		</div>

		<?php }elseif($settings['select_style']=='three'){ ?>
		
		<div class="social-links style3">
			<ul>
				<?php foreach (  $settings['list'] as $item ) { ?>
				<li><a href="<?php echo esc_url($item['website_link']['url']); ?>">
					<?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a></li>
				<?php } ?>
			</ul>
		</div>

		<?php } ?>

		<?php
	}
}