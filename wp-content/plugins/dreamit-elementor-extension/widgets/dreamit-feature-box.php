<?php

if(!defined('ABSPATH')) exit;

class FeatureBox extends \Elementor\Widget_Base{

	public function get_name(){
		return "feature-box";
	}
	
	public function get_title(){
		return "Feature Box";
	}
	
	public function get_icon(){
		return "eicon-featured-image";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'icon_section',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'icon',
				[
					'label' => __( 'Icon', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-circle',
						'library' => 'fa-solid',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'image_section',
			[
				'label' => __( 'Image', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'select_style' => 'four',
				]
			]
		);
			$this->add_control(
				'single_image',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
					  'url' => \Elementor\Utils::get_placeholder_image_src(),
				    ],
					
				]
			);
		$this->end_controls_section();
				$this->start_controls_section(
			'image_section',
			[
				'label' => __( 'Image', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
					'select_style' => 'ten',
				]
			]
		);
			$this->add_control(
				'single_image',
				[
					'label' => __( 'Image', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
					  'url' => \Elementor\Utils::get_placeholder_image_src(),
				    ],
					
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'feature_section',
			[
				'label' => __( 'Title & Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'title_text',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your title', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'This is the title', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'description_text',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'dreamit-elementor-extension' ),
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
						'five' => __( 'Five', 'dreamit-elementor-extension' ),
						'six' => __( 'Six', 'dreamit-elementor-extension' ),
						'seven' => __( 'Seven', 'dreamit-elementor-extension' ),
						'eight' => __( 'Eight', 'dreamit-elementor-extension' ),
						'nine' => __( 'Nine', 'dreamit-elementor-extension' ),
						'ten' => __( 'Ten', 'dreamit-elementor-extension' ),
						'eleven' => __( 'Eleven', 'dreamit-elementor-extension' ),
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
						'{{WRAPPER}} .feature-box' => 'text-align: {{VALUE}};',
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
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .feature-box .feature-box-icon i',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'icon_border',
					'label' => __( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .feature-box .feature-box-icon i',
				]
			);
			$this->add_responsive_control(
				'icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .feature-box:hover .feature-box-icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .feature-box:hover .feature-box-icon i',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'hover_border',
					'label' => __( 'Hover Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .feature-box:hover .feature-box-icon i',
				]
			);
			$this->add_responsive_control(
				'hover_icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .feature-box:hover .feature-box-icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .feature-box .feature-box-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .feature-box .feature-box-icon i' => 'height: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .feature-box .feature-box-icon i' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'icon_typography',
					'selector' => '{{WRAPPER}} .feature-box .feature-box-icon i',
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
				'heading_title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			
			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-title h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .feature-box .feature-box-title h2',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'heading_description',
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
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-desc' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'selector' => '{{WRAPPER}} .feature-box .feature-box-desc',
				]
			);

			$this->add_responsive_control(
				'description_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .feature-box .feature-box-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>

			<div class="feature-box style1">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

				</div>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="feature-box style2">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

				</div>
			</div>

		<?php }elseif($settings['select_style']=='three'){ ?>

			<div class="feature-box style-three">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-number">
						
					</div>

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<div class="feature-box-desc">
						<p><?php echo $settings['description_text']; ?></p>
					</div>

					<?php if( 'yes'===$settings['show_button'] ){ ?>
					<div class="feature-btn">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i <?php echo $this->get_render_attribute_string( 'j' ); ?>></i>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			
		<?php }elseif($settings['select_style']=='four'){ ?>

			<div class="feature-box style-four">
				
				<div class="feature-box-thumb">
					<img src="<?php echo $settings['single_image']['url']; ?>" alt="">
				</div>
				
				<div class="feature-box-content">

					<div class="feature-box-icon">
						<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					</div>

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

					<?php if($settings['show_button']=='yes'){ ?>
					<div class="feature-btn">
						<a href="#">
						<?php echo $settings['button_text']; ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
					<?php } ?>

				</div>
			</div>

		<?php }elseif($settings['select_style']=='five'){ ?>

			<div class="feature-box style-five <?php echo $settings['css_class']; ?>">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<div class="feature-box-desc">
						<p><?php echo $settings['description_text']; ?></p>
					</div>

					<?php if($settings['show_button']=='yes'){ ?>
					<div class="feature-btn">
						<a href="<?php echo esc_url($settings['button_url']['url']); ?>">
						<?php echo $settings['button_text']; ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
					<?php } ?>

				</div>
			</div>
		
		<?php }elseif($settings['select_style']=='six'){ ?>

			<div class="feature-box style-six">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

				</div>
			</div>
			
		<?php }elseif($settings['select_style']=='seven'){ ?>

			<div class="feature-box style7">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<div class="feature-box-desc">
						<p><?php echo $settings['description_text']; ?></p>
					</div>

				</div>
			</div>

		<?php }elseif($settings['select_style']=='eight'){ ?>

			<div class="feature-box style-eight d-flex align-items-center <?php echo $settings['css_class']; ?>">
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>
				<div class="feature-box-content">
					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>
					<div class="feature-box-desc">
						<p><?php echo $settings['description_text']; ?></p>
					</div>
					<?php if($settings['show_button']=='yes'){ ?>
					<div class="feature-btn">
						<a href="<?php echo esc_url($settings['button_url']['url']); ?>">
						<?php echo $settings['button_text']; ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>

		<?php }elseif($settings['select_style']=='nine'){ ?>

			<div class="feature-box style9 d-flex align-items-center">
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>
				<div class="feature-box-content">
					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>
					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>
				</div>
			</div>
			
        <?php }elseif($settings['select_style']=='ten'){ ?>

			<div class="feature-box style-ten">
				
				<div class="feature-box-thumb">
					<img src="<?php echo $settings['single_image']['url']; ?>" alt="">
				</div>
				
				<div class="feature-box-content">

					<div class="feature-box-icon">
						<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					</div>

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

					<?php if($settings['show_button']=='yes'){ ?>
					<div class="feature-btn">
						<a href="#">
						<?php echo $settings['button_text']; ?>
						<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
					<?php } ?>

				</div>
			</div>
			
		<?php }elseif($settings['select_style']=='eleven'){ ?>

			<div class="feature-box style11">
				
				<div class="feature-box-icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</div>			
				
				<div class="feature-box-content">

					<div class="feature-box-title">
						<h2><?php echo $settings['title_text']; ?></h2>
					</div>

					<p class="feature-box-desc"><?php echo $settings['description_text']; ?></p>

				</div>
			</div>

		<?php } ?>

	<?php
	}
}