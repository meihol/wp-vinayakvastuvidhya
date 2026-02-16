<?php

if(!defined('ABSPATH')) exit;

class NavBar extends \Elementor\Widget_Base{

	public function get_name(){
		return "navbar";
	}
	
	public function get_title(){
		return "Nav Bar";
	}
	
	public function get_icon(){
		return "eicon-menu-bar";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	private function get_available_menus() {
		$menus = wp_get_nav_menus();

		$options = [];

		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}

		return $options;
	}

	protected function register_controls(){

		$this->start_controls_section(
			'menu_section',
			[
				'label' => __( 'Menu', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$menus = $this->get_available_menus();

			if ( ! empty( $menus ) ) {
				$this->add_control(
					'select_menu',
					[
						'label' => __( 'Select Menu', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::SELECT,
						'options' => $menus,
						'default' => array_keys( $menus )[0],
						'save_default' => true,
						'separator' => 'after',
						'description' => sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to manage your menus.', 'elementor-pro' ), admin_url( 'nav-menus.php' ) ),
					]
				);
			} else {
				$this->add_control(
					'select_menu',
					[
						'type' => \Elementor\Controls_Manager::RAW_HTML,
						'raw' => '<strong>' . __( 'There are no menus in your site.', 'elementor-pro' ) . '</strong><br>' . sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to create one.', 'elementor-pro' ), admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
						'separator' => 'after',
						'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
					]
				);
			}

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
						'start' => [
							'title' => __( 'Left', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-center',
						],
						'end' => [
							'title' => __( 'Right', 'dreamit-elementor-extension' ),
							'icon' => 'eicon-text-align-right',
						],
					],
					'selectors' => [
						'{{WRAPPER}} .nav-menu ul' => 'justify-content: {{VALUE}};',
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
					'selector' => '{{WRAPPER}} .nav-menu ul li a',
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
						'{{WRAPPER}} .nav-menu ul li a' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .nav-menu ul li a',
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
						'{{WRAPPER}} .nav-menu ul li a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .nav-menu ul li a:hover',
				]
			);

			$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'button_border',
					'label' => esc_html__( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .nav-menu ul li a',
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
						'{{WRAPPER}} .nav-menu ul li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => esc_html__( 'Box Shadow', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .nav-menu ul li a',
				]
			);
			$this->add_responsive_control(
				'button_padding',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .nav-menu ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'sub_menu_style',
			[
				'label' => esc_html__( 'Sub Menu', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		
            $this->start_controls_tabs(
            	'sub_menu_style_tabs'
            );
            
            $this->start_controls_tab(
            	'sub_menu_style_normal_tab',
            	[
            		'label' => esc_html__( 'Normal', 'dreamit-elementor-extension' ),
            	]
            );
            
			$this->add_control(
				'sub_menu_color',
				[
					'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .nav-menu ul li .sub-menu li a' => 'color: {{VALUE}}',
					],
				]
			);
            $this->end_controls_tab();
            
            $this->start_controls_tab(
            	'sub_menu_style_hover_tab',
            	[
            		'label' => esc_html__( 'Hover', 'dreamit-elementor-extension' ),
            	]
            );
            
			$this->add_control(
				'sub_menu_hover_color',
				[
					'label' => esc_html__( 'Text Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .nav-menu ul li .sub-menu li a:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
    			\Elementor\Group_Control_Background::get_type(),
    			[
    				'name' => 'sub_menu_item_background',
    				'types' => [ 'classic', 'gradient' ],
    				'selector' => '{{WRAPPER}} .nav-menu ul li .sub-menu li a:hover',
    			]
    		);
            $this->end_controls_tab();
            
            $this->end_controls_tabs();
		
		

			
		$this->end_controls_section();
		
		$this->start_controls_section(
			'mobile_menu_style',
			[
				'label' => esc_html__( 'Mobile Menu', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

            $this->add_control(
				'hamburger_icon_color',
				[
					'label' => esc_html__( 'Hamburger Icon Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .nav-menu .menu-toggle i' => 'color: {{VALUE}}',
					],
				]
			);
    		$this->add_group_control(
    			\Elementor\Group_Control_Typography::get_type(),
    			[
    				'name' => 'hamburger_icon_typography',
    				'selector' => '{{WRAPPER}} .nav-menu .menu-toggle i',
    			]
    		);
		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>

			<div class="nav-menu">

				<?php

					wp_nav_menu( array(
						'menu' => $settings['select_menu'],
						'menu_class' => 'menu-ul'
					));

				?>

				<div class="menu-toggle">
					<div class="open"><i class="fa fa-bars" aria-hidden="true"></i></div>
				</div>

			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";

					$('.menu-toggle').click(function(){
						$('.menu-ul').slideToggle();
					});
					
					$('.nav-menu .menu-item-has-children').click(function(){
						$(this).children('.sub-menu').slideToggle();
					});
					
				});
			</script>

		<?php }elseif($settings['select_style']=='two'){ ?>
				
			<div class="dreamit-button style2">
				<a href="<?php echo esc_url($settings['button_url']['url']); ?>">
					<?php echo $settings['button_text']; ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>
				
		<?php }elseif($settings['select_style']=='three'){ ?>		
				<div class="dreamit-button-box style3">
					<?php if( 'yes'===$settings['show_button'] ){ ?>
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i></a>
					</div>
					<?php } ?>
				</div>
			<?php }elseif($settings['select_style']=='four'){ ?>		
				<div class="dreamit-button-box style4">
					<?php if( 'yes'===$settings['show_button'] ){ ?>
					<div class="dreamit-button">
						<a href="#">
							<?php echo $settings['button_text']; ?>
							<i class="<?php echo esc_attr($settings['button_icon']['value']); ?>"></i>						
						</a>
					</div>
					<?php } ?>
				</div>

		<?php } ?>

	<?php
	}
}