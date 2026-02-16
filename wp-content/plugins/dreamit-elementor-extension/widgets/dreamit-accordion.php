<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if(!defined('ABSPATH')) exit;


class DITAccordion extends Widget_Base{

	public function get_name(){
		return "ditaccordion";
	}
	
	public function get_title(){
		return "Accordion";
	}
	
	public function get_icon(){
		return "eicon-accordion";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function register_controls(){

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title & Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
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
			$repeater->add_control(
				'description_text',
				[
					'label' => __( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your paragraph', 'dreamit-elementor-extension' ),
					'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dreamit-elementor-extension' ),
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
							'title_text' => __( 'Title #1', 'dreamit-elementor-extension' ),
							'description_text' => __( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
						],
						[
							'title_text' => __( 'Title #2', 'dreamit-elementor-extension' ),
							'description_text' => __( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
						],
					],
					'title_field' => '{{{ title_text }}}',
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
					'type' => Controls_Manager::CHOOSE,
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
						'{{WRAPPER}} .faq-box' => 'text-align: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'title_section_style',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .faq-box .accordion' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .faq-box .accordion, {{WRAPPER}} .elementor-icon-box-content .elementor-icon-box-title a',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'border',
					'label' => __( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .faq-box .accordion',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .faq-box .accordion' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'description_section_style',
			[
				'label' => __( 'Description', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'description_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .faq-box .panel p' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'selector' => '{{WRAPPER}} .faq-box .panel p',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .faq-box .panel p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		
		?>

		<?php if($settings['select_style']=='one'){ ?>





		<ul class="my-accordion">

			<?php foreach (  $settings['list'] as $item ) { ?>
			<li>
				<a><?php echo $item['title_text']; ?></a>
				<p><?php echo $item['description_text']; ?></p>
			</li>
			<?php } ?>

		</ul>


            		<script>
            			jQuery(document).ready(function($) {
            				"use strict";
        
        	    $('.my-accordion > li:eq(0) a').addClass('active').next().slideDown();
        
        	    $('.my-accordion a').click(function() {
        	        var dropDown = $(this).closest('li').find('p');
        
        	        $(this).closest('.my-accordion').find('p').not(dropDown).slideUp();
        
        	        if ($(this).hasClass('active')) {
        	            $(this).removeClass('active');
        	        } else {
        	            $(this).closest('.my-accordion').find('a.active').removeClass('active');
        	            $(this).addClass('active');
        	        }
        
        	        dropDown.stop(false, true).slideToggle();
        
        	        j.preventDefault();
        	    });

            		});
            	</script>	

		<?php }elseif($settings['select_style']=='two'){ ?>

        		<ul class="my-accordion style-two">
        			<?php foreach (  $settings['list'] as $item ) { ?>
        			<li>
        				<a><?php echo $item['title_text']; ?></a>
        				<p><?php echo $item['description_text']; ?></p>
        			</li>
        			<?php } ?>
        
        		</ul>
            	<script>
            		jQuery(document).ready(function($) {
            			"use strict";
        
        	    $('.my-accordion > li:eq(0) a').addClass('active').next().slideDown();
        
        	    $('.my-accordion a').click(function() {
        	        var dropDown = $(this).closest('li').find('p');
        
        	        $(this).closest('.my-accordion').find('p').not(dropDown).slideUp();
        
        	        if ($(this).hasClass('active')) {
        	            $(this).removeClass('active');
        	        } else {
        	            $(this).closest('.my-accordion').find('a.active').removeClass('active');
        	            $(this).addClass('active');
        	        }
        
        	        dropDown.stop(false, true).slideToggle();
        
        	        j.preventDefault();
        	    });

            		});
            	</script>	
            	
         <?php }elseif($settings['select_style']=='three'){ ?>

        		<ul class="my-accordion style-two three">
        			<?php foreach (  $settings['list'] as $item ) { ?>
        			<li>
        				<a><?php echo $item['title_text']; ?></a>
        				<p><?php echo $item['description_text']; ?></p>
        			</li>
        			<?php } ?>
        
        		</ul>
            	<script>
            		jQuery(document).ready(function($) {
            			"use strict";
        
        	    $('.my-accordion > li:eq(0) a').addClass('active').next().slideDown();
        
        	    $('.my-accordion a').click(function() {
        	        var dropDown = $(this).closest('li').find('p');
        
        	        $(this).closest('.my-accordion').find('p').not(dropDown).slideUp();
        
        	        if ($(this).hasClass('active')) {
        	            $(this).removeClass('active');
        	        } else {
        	            $(this).closest('.my-accordion').find('a.active').removeClass('active');
        	            $(this).addClass('active');
        	        }
        
        	        dropDown.stop(false, true).slideToggle();
        
        	        j.preventDefault();
        	    });

            		});
            	</script>
            <?php }elseif($settings['select_style']=='four'){ ?>

        		<ul class="my-accordion style-two three four">
        			<?php foreach (  $settings['list'] as $item ) { ?>
        			<li>
        				<a><?php echo $item['title_text']; ?></a>
        				<p><?php echo $item['description_text']; ?></p>
        			</li>
        			<?php } ?>
        
        		</ul>
            	<script>
            		jQuery(document).ready(function($) {
            			"use strict";
        
        	    $('.my-accordion > li:eq(0) a').addClass('active').next().slideDown();
        
        	    $('.my-accordion a').click(function() {
        	        var dropDown = $(this).closest('li').find('p');
        
        	        $(this).closest('.my-accordion').find('p').not(dropDown).slideUp();
        
        	        if ($(this).hasClass('active')) {
        	            $(this).removeClass('active');
        	        } else {
        	            $(this).closest('.my-accordion').find('a.active').removeClass('active');
        	            $(this).addClass('active');
        	        }
        
        	        dropDown.stop(false, true).slideToggle();
        
        	        j.preventDefault();
        	    });

            		});
            	</script>
		<?php }
	}
}

