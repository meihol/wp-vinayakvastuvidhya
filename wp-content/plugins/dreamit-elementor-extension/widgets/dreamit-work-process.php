<?php

if(!defined('ABSPATH')) exit;

class WorkProcess extends \Elementor\Widget_Base{

	public function get_name(){
		return "workprocess";
	}
	
	public function get_title(){
		return "Work Process";
	}
	
	public function get_icon(){
		return "eicon-flow";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'icon_section',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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

		$this->end_controls_section();

		$this->start_controls_section(
			'title_description_section',
			[
				'label' => __( 'Title & Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			
			$this->add_control(
				'number',
				[
					'label' => __( 'Number', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);
			$this->add_control(
				'title',
				[
					'label' => __( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your title here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'description',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => __( 'Default Description', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Type your Description here', 'dreamit-elementor-extension' ),
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
						'{{WRAPPER}} .work-process' => 'text-align: {{VALUE}};',
					],
				]
			);
			$this->add_control(
				'show_shape',
				[
					'label' => esc_html__( 'Show Separator', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => esc_html__( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
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
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .work-process .icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .work-process .icon',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'icon_border',
					'label' => __( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .work-process .icon',
				]
			);
			$this->add_responsive_control(
				'icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .work-process .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .work-process:hover .icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_icon_background_color',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .work-process:hover .icon',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'hover_border',
					'label' => __( 'Hover Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .work-process:hover .icon',
				]
			);
			$this->add_responsive_control(
				'hover_icon_border_radius',
				[
					'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .work-process:hover .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .work-process .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .work-process .icon' => 'height: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .work-process .icon' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'icon_typography',
					'selector' => '{{WRAPPER}} .work-process .icon i',
				]
			);
			
		$this->end_controls_section();
		
		$this->start_controls_section(
			'title_section_style',
			[
				'label' => __( 'Title & Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
    					'{{WRAPPER}} .work-process .content .title' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'title_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .work-process .content .title',
    			]
    		);
			$this->add_control(
				'title_margin',
				[
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .work-process .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
    					'{{WRAPPER}} .work-process .content .description' => 'color: {{VALUE}}',
    				],
    			]
    		);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'description_typography',
    				'label' => __( 'Typography', 'dreamit-elementor-extension' ),
    				'selector' => '{{WRAPPER}} .work-process .content .description',
    			]
    		);
    		$this->add_control(
				'description_margin',
				[
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .work-process .content .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>
			<div class="work-process style1">
				<div class="icon">
					<?php if( !empty($settings['select_icon']) ){
						\Elementor\Icons_Manager::render_icon( $settings['select_icon'], [ 'aria-hidden' => 'true' ] );
					}elseif( !empty($settings['select_img']) ){ ?>
						<img src="<?php echo $settings['select_img']['url']; ?>" alt="">
					<?php } ?>
				</div>
				<div class="content">
					<h3 class="title"><?php echo $settings['title']; ?></h3>
					<p class="description"><?php echo $settings['description']; ?></p>
				</div>
			</div>
		<?php }elseif($settings['select_style']=='two'){ ?>
			<div class="work_progress style-two">
				<div class="work_progress_icon">
					<span><?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
					<div class="work_progress-number">
						<span><?php echo $settings['number']; ?></span>
					</div>
				</div>			
				<div class="progress_content">
					<div class="work_progress-title">
						<h2>
							<?php echo $settings['title']; ?>
						</h2>
					</div>
					<div class="work_progress-desc">
						<p>
							<?php echo $settings['description']; ?>
						</p>
					</div>
				</div><!-- .progress_content -->
			</div>

		<?php } elseif($settings['select_style']=='three'){ ?>
			<div class="work_progress style3">
				<div class="work_progress_icon">
					<div class="work_progress-number">
						<span><?php echo $settings['number']; ?></span>
					</div>
				</div>			
				<div class="progress_content">
					<div class="work_progress-title">
						<h2>
							<?php echo $settings['title']; ?>
						</h2>
					</div>
					<div class="work_progress-desc">
						<p>
							<?php echo $settings['description']; ?>
						</p>
					</div>
				</div><!-- .progress_content -->
			</div>
        <?php } elseif($settings['select_style']=='four'){ ?>
			<div class="work_progress style4">
				<div class="icon">
					<?php if( !empty($settings['select_icon']) ){
						\Elementor\Icons_Manager::render_icon( $settings['select_icon'], [ 'aria-hidden' => 'true' ] );
					}elseif( !empty($settings['select_img']) ){ ?>
						<img src="<?php echo $settings['select_img']['url']; ?>" alt="">
					<?php } ?>
				</div>		
				<div class="progress_content">
					<div class="work_progress-title">
						<h2>
							<?php echo $settings['title']; ?>
						</h2>
					</div>
					<div class="work_progress-desc">
						<p>
							<?php echo $settings['description']; ?>
						</p>
					</div>
				</div><!-- .progress_content -->
				<div class="work_progress_icon">
					<div class="work_progress-number">
						<span><?php echo $settings['number']; ?></span>
					</div>
				</div>	
			</div>
			
		<?php }?>

		<?php
	}
}