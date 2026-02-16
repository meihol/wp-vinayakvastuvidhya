<?php

if(!defined('ABSPATH')) exit;

class SectionTitle extends \Elementor\Widget_Base{

	public function get_name(){
		return "section-title";
	}
	
	public function get_title(){
		return "Section Title";
	}
	
	public function get_icon(){
		return "eicon-t-letter";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function register_controls(){

		$this->start_controls_section(
			'text_section',
			[
				'label' => __( 'Text', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


			$this->add_control(
				'subtitle',
				[
					'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter subtitle', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Section subtitle', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter title', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Section title', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter description', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'general_style',
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
						'four' => __( 'four', 'dreamit-elementor-extension' ),
						'five' => __( 'Five', 'dreamit-elementor-extension' ),
						'six' => __( 'Six', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);

			$this->add_responsive_control(
				'text_align',
				[
					'label' => esc_html__( 'Alignment', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => esc_html__( 'Left', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => esc_html__( 'Center', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => esc_html__( 'Right', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'toggle' => true,
					'selectors' => [
						'{{WRAPPER}} .section-title' => 'text-align: {{VALUE}};',
					]
				]
			);

			$this->add_responsive_control(
				'width',
				[
					'type' => \Elementor\Controls_Manager::SLIDER,
					'label' => esc_html__( 'Width', 'dreamit-elementor-extension' ),
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
					'devices' => [ 'desktop', 'tablet', 'mobile' ],
					'selectors' => [
						'{{WRAPPER}} .section-title' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'subtitle_style',
			[
				'label' => __( 'Subtitle', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'subtitle_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'fields_options' => [
						'background' => [
							'label' => 'Color'
						],
						'color' => [
							'selectors' => [
								'{{SELECTOR}}' => 'color: {{VALUE}};',
							],
						]
					],
					'selector' => '{{WRAPPER}} .section-title .subtitle',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'subtitle_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .section-title .subtitle',
				]
			);
			$this->add_responsive_control(
				'subtitle_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title .subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
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
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title .title' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .section-title .title',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'highlight_text_color',
				[
					'label' => __( 'Highlight Text Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .section-title span' => 'color: {{VALUE}}',
					],
					'separator' => 'before',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'highlight_text_typography',
					'label' => __( 'Highlight Text Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .section-title span',
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'description_style',
			[
				'label' => __( 'Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'description_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .section-title .description' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .section-title .description',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .section-title .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>

			<div class="section-title style1">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>
			<div class="section-title style2">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>

		<?php }elseif($settings['select_style']=='three'){ ?>
			<div class="section-title style3">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>

		<?php }elseif($settings['select_style']=='four'){ ?>
			<div class="section-title style4">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>


		<?php }elseif($settings['select_style']=='five'){ ?>
			<div class="section-title style5">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>
			<?php }elseif($settings['select_style']=='six'){ ?>
			<div class="section-title style6">
				<?php if(!empty($settings['subtitle'])) { ?> 
					<h5 class="subtitle"><?php echo $settings['subtitle']; ?></h5>
				<?php } ?>
				
				<?php if(!empty($settings['title'])) { ?> 
					<h3 class="title"><?php echo $settings['title']; ?></h3>
				<?php } ?>
				
				<?php if(!empty($settings['description'])) { ?> 
					<p class="description"><?php echo $settings['description']; ?></p>
				<?php } ?>
			</div>
			
		<?php } ?>

		<?php 
	}

}