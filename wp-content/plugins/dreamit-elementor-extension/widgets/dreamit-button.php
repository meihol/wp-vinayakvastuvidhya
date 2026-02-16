<?php

if(!defined('ABSPATH')) exit;

class DreamITButton extends \Elementor\Widget_Base{

	public function get_name(){
		return "dit-button";
	}
	
	public function get_title(){
		return "Button";
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
			$this->add_control(
				'button_text',
				[
					'label' => __( 'Text', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Click Here', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Click Here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button_url',
				[
					'label' => __( 'Link', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::URL,
					'placeholder' => __( 'https://your-link.com', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'button_icon',
				[
					'label' => __( 'Icon', 'dreamit-elementor-extension' ),
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
						'twelve' => __( 'Twelve', 'dreamit-elementor-extension' ),

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

			<div class="dreamit-button style1">
				<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
					<?php echo $settings['button_text']; ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>
				
			<div class="dreamit-button style2">
				<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
					<?php echo $settings['button_text']; ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>
				
		<?php }elseif($settings['select_style']=='three'){ ?>		
				<div class="dreamit-button style3">
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i></a>
					</div>
				</div>
			<?php }elseif($settings['select_style']=='four'){ ?>		
				<div class="dreamit-button style4">
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>						
						</a>
					</div>
				</div>

		<?php }elseif($settings['select_style']=='five'){ ?>		
				<div class="dreamit-button style5">
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>						
						</a>
					</div>
				</div>

		<?php }elseif($settings['select_style']=='six'){ ?>		
				<div class="dreamit-button style6">
						<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
						    <i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>	
							<?php echo $settings['button_text']; ?>
						</a>
						
				</div>

		<?php } elseif($settings['select_style']=='seven'){ ?>		
				<div class="dreamit-button style7">
						<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
						    <i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>	
							<?php echo $settings['button_text']; ?>
						</a>
				</div>
		<?php } elseif($settings['select_style']=='eight'){ ?>		
				<div class="dreamit-button style8">
						<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
        					<?php echo $settings['button_text']; ?>
        					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        				</a>
				</div>
        <?php } elseif($settings['select_style']=='nine'){ ?>		
				<div class="dreamit-button style9">
					<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
    					<?php echo $settings['button_text']; ?>
    					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
    				</a>
				</div>

		<?php }elseif($settings['select_style']=='ten'){ ?>		
				<div class="dreamit-button style10">
					<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
    					<?php echo $settings['button_text']; ?>
    					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
    				</a>
				</div>
        <?php }elseif($settings['select_style']=='eleven'){ ?>		
				<div class="dreamit-button style11">
					<a class="ith-button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
    					<?php echo $settings['button_text']; ?>
    					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
    				</a>
				</div>
				
		<?php }elseif($settings['select_style']=='twelve'){ ?>		
				<div class="dreamit-button style12">
					<a class="button" href="<?php echo esc_url($settings['button_url']['url']); ?>">
    					<?php echo $settings['button_text']; ?>
    					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
    				</a>
				</div>
				
		<?php }?>

	<?php
	}
}