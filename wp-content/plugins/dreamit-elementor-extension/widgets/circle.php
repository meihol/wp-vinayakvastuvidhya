<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class Circle extends Widget_Base{

	public function get_name(){
		return "circle";
	}
	
	public function get_title(){
		return "Circle";
	}
	
	public function get_icon(){
		return "eicon-info-box";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function _register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
    		$this->add_control(
    			'title',
    			[
    				'label' => __( 'Title', 'dreamit-elementor-extension' ),
    				'type' => Controls_Manager::TEXT,
    			]
    		);
    		$this->add_control(
    			'progress',
    			[
    				'label' => __( 'Progress', 'dreamit-elementor-extension' ),
    				'type' => Controls_Manager::SLIDER,
    				'size_units' => [ '%' ],
    				'range' => [
    					'%' => [
    						'min' => 0,
    						'max' => 100,
    					],
    				],
    				'default' => [
    					'unit' => '%',
    					'size' => 50,
    				],
    			]
    		);
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'progress_color',
			[
				'label' => __( 'Progress Color', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progress .progress-bar' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} .progress .progress-value' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_section_style',
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
						'{{WRAPPER}} .circle-progress .progress-content h2' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .circle-progress .progress-content h2, {{WRAPPER}} .elementor-icon-box-content .elementor-icon-box-title a',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .circle-progress .progress-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
		

	}

/*
==========
Style Tab
==========
*/


	protected function render() {

	    $settings = $this->get_settings_for_display();
	    
	    ?>
	    
		<div class="circle-progress align-items-center d-flex">
			<div class="progress" data-percentage="<?php echo $settings['progress']['size']; ?>">
				<span class="progress-left">
					<span class="progress-bar"></span>
				</span>
				<span class="progress-right">
					<span class="progress-bar"></span>
				</span>
				<div class="progress-value">
					<div>
						<?php echo $settings['progress']['size']; ?>
						<span>%</span>
					</div>
				</div>
			</div>
			<div class="progress-content">
				<h2><?php echo $settings['title']; ?></h2>
			</div>
		</div>
	        
	    <?php
}
}

