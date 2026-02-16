<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;

class Brand extends Widget_Base{

	public function get_name(){
		return "brand";
	}
	
	public function get_title(){
		return "Brand";
	}
	
	public function get_icon(){
		return "eicon-star-o";
	}
	
	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'brands_section',
			[
				'label' => esc_html__( 'Brands', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'brand_name', [
				'label' => esc_html__( 'Brand Name', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Brand Name' , 'dreamit-elementor-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'brand_logo',
			[
				'label' => esc_html__( 'Brand Logo', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
		$this->add_control(
			'brand_list',
			[
				'label' => esc_html__( 'Brand List', 'dreamit-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'brand_name' => esc_html__( 'Title #1', 'dreamit-elementor-extension' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
					],
					[
						'brand_name' => esc_html__( 'Title #2', 'dreamit-elementor-extension' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'dreamit-elementor-extension' ),
					],
				],
				'title_field' => '{{{ brand_name }}}',
			]
		);

		$this->end_controls_section();


/*
==========
Style Tab
==========
*/

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'dreamit-elementor-extension' ),
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
					],
					'default' => 'one',
					
				]
			);
		$this->end_controls_section();
	}

	protected function render(){

		$settings = $this->get_settings_for_display();
		
		?>

			<?php if($settings['select_style']=='one'){ ?>

			<div class="brand style1">
				<div class="brand-carousel owl-carousel">
					<?php foreach (  $settings['brand_list'] as $item ) { ?>
					<div class="brand-item">
						<img src="<?php echo $item['brand_logo']['url']; ?>" alt="">
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";
                    	
                    $('.brand-carousel').owlCarousel({
                    	loop: true,
                    	autoplay: true,
                    	autoplayTimeout: 4000,
                    	dots: false,
                    	nav: false,
                    	navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                    	responsive: {
                    		0: {
                    			items: 2
                    		},
                    		768: {
                    			items: 3
                    		},
                    		992: {
                    			items: 4
                    		},
                    		1500: {
                    			items: 5
                    		},
                    		1920: {
                    			items: 5
                    		}
                    	}
                    })
				});
			</script>

			<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="brand style2">
				<div class="brand-carousel owl-carousel">
					<?php foreach (  $settings['brand_list'] as $item ) { ?>
					<div class="brand-item">
						<img src="<?php echo $item['brand_logo']['url']; ?>" alt="">
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";
                        
                    $('.brand-carousel').owlCarousel({
                    	loop: true,
                    	autoplay: true,
                    	autoplayTimeout: 4000,
                    	dots: false,
                    	nav: false,
                    	navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                    	responsive: {
                    		0: {
                    			items: 2
                    		},
                    		768: {
                    			items: 3
                    		},
                    		992: {
                    			items: 4
                    		},
                    		1500: {
                    			items: 5
                    		},
                    		1920: {
                    			items: 5
                    		}
                    	}
                    })
				});
			</script>
			
				<?php }elseif($settings['select_style']=='three'){ ?>

			<div class="brand style3">
				<div class="brand-carousel owl-carousel">
					<?php foreach (  $settings['brand_list'] as $item ) { ?>
					<div class="brand-item">
						<img src="<?php echo $item['brand_logo']['url']; ?>" alt="">
					</div>
					<?php } ?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";
                        
                    $('.brand-carousel').owlCarousel({
                    	loop: true,
                    	autoplay: false,
                    	autoplayTimeout: 4000,
                    	dots: false,
                    	nav: false,
                    	navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                    	responsive: {
                    		0: {
                    			items: 2
                    		},
                    		768: {
                    			items: 3
                    		},
                    		992: {
                    			items: 4
                    		},
                    		1500: {
                    			items: 5
                    		},
                    		1920: {
                    			items: 5
                    		}
                    	}
                    })
				});
			</script>
			
			<?php } ?>

		<?php
	}
	
}