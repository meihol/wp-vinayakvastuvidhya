<?php

if(!defined('ABSPATH')) exit;

class PopularProduct extends \Elementor\Widget_Base{

	public function get_name(){
		return "popular-product";
	}
	
	public function get_title(){
		return "Popular Product";
	}
	
	public function get_icon(){
		return "eicon-products-archive";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'product_section',
			[
				'label' => __( 'Product', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
			$this->add_control(
				'show_price',
				[
					'label' => esc_html__( 'Show Price', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => esc_html__( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);

			$this->add_control(
				'number',
				[
					'label' => esc_html__( 'The number of products to show', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
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

			<div class="popular-product style1">
				<div class="product-carousel owl-carousel">
				<?php
					$args = array(
						'post_type' => 'product',
					);

					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) : $the_query->the_post();
								
						global $product;

						if ( empty( $product ) || ! $product->is_visible() ) {
							return;
						}
						?>

						<div class="single-product">
							<div class="image">
								<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="">
								<ul class="icon">
									<li><a href="#"><i class="bi bi-heart"></i></a></li>
									<li><a href="#"><i class="bi bi-bag-check"></i></a></li>
									<li><a href="#"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
							<div class="content">
								<a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a>

								<?php if ( 'yes' === $settings['show_price'] ) { woocommerce_template_loop_price(); } ?>
							</div>
						</div>

						<?php

						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
				</div>
			</div>
			<div class="aaa"></div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";

					$('.product-carousel').owlCarousel({
						autoplay: true,
						dots: false,
						nav: false,
						margin: 25,
						autoplayTimeout: 10000,
						navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 2
							},
							992: {
								items: 2
							},
							1920: {
								items: <?php echo $settings['number']; ?>
							}
						}
					})
				});
			</script>

		<?php }elseif($settings['select_style']=='two'){ ?>
				
			<div class="popular-product style2">
				<div class="product-carousel <?php echo $settings['number']; ?> owl-carousel">
				<?php
					$args = array(
						'post_type' => 'product',
					);

					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) : $the_query->the_post();
								
						global $product;

						if ( empty( $product ) || ! $product->is_visible() ) {
							return;
						}
						?>

						<div class="single-product">
							<div class="image">
								<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="">
								<ul class="icon">
									<li><a href="#"><i class="bi bi-heart"></i></a></li>
									<li><a href="#"><i class="bi bi-bag-check"></i></a></li>
									<li><a href="#"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
							<div class="content">
								<a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a>

								<?php if ( 'yes' === $settings['show_price'] ) { woocommerce_template_loop_price(); } ?>
							</div>
						</div>

						<?php

						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";

					$('.product-carousel.<?php echo $settings['number']; ?>').owlCarousel({
						autoplay: true,
						dots: true,
						nav: false,
						margin: 25,
						autoplayTimeout: 10000,
						navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 2
							},
							992: {
								items: 2
							},
							1920: {
								items: <?php echo $settings['number']; ?>
							}
						}
					})
				});
			</script>
				
		<?php }elseif($settings['select_style']=='three'){ ?>		

			<div class="popular-product style3">
				<div class="product-carousel <?php echo $settings['number']; ?> owl-carousel">
				<?php
					$args = array(
						'post_type' => 'product',
					);

					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) : $the_query->the_post();
								
						global $product;

						if ( empty( $product ) || ! $product->is_visible() ) {
							return;
						}
						?>

						<div class="single-product">
							<div class="image">
								<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="">
								<ul class="icon">
									<li><a href="#"><i class="bi bi-heart"></i></a></li>
									<li><a href="#"><i class="bi bi-bag-check"></i></a></li>
									<li><a href="#"><i class="bi bi-search"></i></a></li>
								</ul>
							</div>
							<div class="content">
								<a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a>

								<?php if ( 'yes' === $settings['show_price'] ) { woocommerce_template_loop_price(); } ?>
							</div>
						</div>

						<?php

						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					"use strict";

					$('.product-carousel.<?php echo $settings['number']; ?>').owlCarousel({
						autoplay: true,
						dots: false,
						nav: false,
						margin: 25,
						autoplayTimeout: 10000,
						navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
						responsive: {
							0: {
								items: 1
							},
							768: {
								items: 2
							},
							992: {
								items: 2
							},
							1920: {
								items: <?php echo $settings['number']; ?>
							}
						}
					})
				});
			</script>

		<?php }elseif($settings['select_style']=='four'){ ?>		
				

		<?php } ?>

	<?php
	}
}