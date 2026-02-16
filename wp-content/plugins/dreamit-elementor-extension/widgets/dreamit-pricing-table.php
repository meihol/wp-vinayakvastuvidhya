<?php

if(!defined('ABSPATH')) exit;

class PricingTable extends \Elementor\Widget_Base{

	public function get_name(){
		return "pricingtable";
	}
	
	public function get_title(){
		return "Pricing Table";
	}
	
	public function get_icon(){
		return "eicon-price-table";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'package_section',
			[
				'label' => __( 'Package Info', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'single_img',
				[
				    'label' => esc_html__('Image','dreamit-elementor-extension'),
				    'type'=> \Elementor\Controls_Manager::MEDIA,
				    'default' => [
					  'url' => \Elementor\Utils::get_placeholder_image_src(),
				    ],
				]
			);
			$this->add_control(
				'name',
				[
					'label' => __( 'Name', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __( 'Basic', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Enter Title', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'title',
				[
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Default title', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your title here', 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);
			$this->add_control(
				'description',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'rows' => 5,
					'default' => esc_html__( 'Default description', 'dreamit-elementor-extension' ),
					'placeholder' => esc_html__( 'Type your description here', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'currency',
				[
					'label' => __( 'Currency', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __( '$', 'dreamit-elementor-extension' ),
					'placeholder' => __( '$', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'price',
				[
					'label' => __( 'Price', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __( '99', 'dreamit-elementor-extension' ),
					'placeholder' => __( '99', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'month',
				[
					'label' => __( 'Month', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => __( 'Month', 'dreamit-elementor-extension' ),
					'placeholder' => __( 'Month', 'dreamit-elementor-extension' ),
				]
			);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'list_icon',
				[
					'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-check',
						'library' => 'fa-solid',
					],
					'recommended' => [
						'fa-solid' => [
							'circle',
							'dot-circle',
							'square-full',
						],
						'fa-regular' => [
							'circle',
							'dot-circle',
							'square-full',
						],
					],
				]
			);

			$repeater->add_control(
				'list_title', [
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'List Title' , 'dreamit-elementor-extension' ),
					'label_block' => true,
				]
			);

			$this->add_control(
				'feature_list',
				[
					'label' => esc_html__( 'Feature List', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => $repeater->get_controls(),
					'default' => [
						[
							'list_title' => esc_html__( 'Special Feature #1', 'dreamit-elementor-extension' ),
						],
						[
							'list_title' => esc_html__( 'Special Feature #2', 'dreamit-elementor-extension' ),
						],
					],
					'title_field' => '{{{ list_title }}}',
				]
			);

			$this->add_control(
				'show_active',
				[
					'label' => __( 'Active Table', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => __( 'Yes', 'dreamit-elementor-extension' ),
					'label_off' => __( 'No', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
				]
			);

		$this->end_controls_section();

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
				'button_link',
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


/**
 * Style Tab
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
					],
					'default' => 'one',
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'name_style',
			[
				'label' => __( 'Package Name', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'name_color',
				[
					'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .package-name' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'name_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .package-name',
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'name_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .pricing .package-name',
				]
			);
			$this->add_responsive_control(
				'name_padding',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .package-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'title_description_style',
			[
				'label' => __( 'Title & Description', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'title_heading',
				[
					'label' => esc_html__( 'Title', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::HEADING,
				]
			);
			$this->add_control(
				'title_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-title' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .pricing-title',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'description_heading',
				[
					'label' => esc_html__( 'Description', 'dreamit-elementor-extension' ),
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
						'{{WRAPPER}} .pricing .description' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .description',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();
		$this->start_controls_section(
			'currency_style',
			[
				'label' => __( 'Currency', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'currency_color',
				[
					'label' => __( 'Currency Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .price-item .currency' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'currency_typography',
					'label' => __( 'Currency Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .price-item .currency',
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'price_style',
			[
				'label' => __( 'Price', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'price_color',
				[
					'label' => __( 'Price Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .price-item .tk' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'price_typography',
					'label' => __( 'Price Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .price-item .tk',
				]
			);

		$this->end_controls_section();
		$this->start_controls_section(
			'month_style',
			[
				'label' => __( 'Month', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'month_color',
				[
					'label' => __( 'Month Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .price-item .month' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'month_typography',
					'label' => __( 'Month Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .price-item .month',
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'features_style',
			[
				'label' => __( 'Features', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'feature_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-body ul li' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'feature_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .pricing-body ul li',
				]
			);
			$this->add_responsive_control(
				'feature_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-body ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'features_icon_style',
			[
				'label' => __( 'Features Icon', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'features_icon_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-body ul li i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'features_icon_typography',
					'label' => __( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .pricing-body ul li i',
				]
			);
			$this->add_responsive_control(
				'features_icon_margin',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-body ul li i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'selector' => '{{WRAPPER}} .pricing .pricing-botton .button',
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
						'{{WRAPPER}} .pricing .pricing-botton .button' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .pricing .pricing-botton .button',
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
						'{{WRAPPER}} .pricing .pricing-botton .button:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .pricing .pricing-botton .button:hover',
				]
			);

			$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'button_border',
					'label' => esc_html__( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .pricing-botton .button',
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
						'{{WRAPPER}} .pricing .pricing-botton .button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => esc_html__( 'Box Shadow', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .pricing .pricing-botton .button',
				]
			);
			$this->add_responsive_control(
				'button_padding',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .pricing .pricing-botton .button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

		<?php if($settings['select_style']=='one'){ ?>
			<div class="pricing style1 <?php if('yes' === $settings['show_active']){echo esc_attr('active');}?>">
				<div class="pricing-head">
					<div class="pricing_img">
						<img src="<?php echo $settings['single_img']['url']; ?>" alt="" />
					</div>
					<div class="price-item">
						<?php if( !empty($settings['currency']) ){ ?>
							<span class="currency"><?php echo $settings['currency']; ?></span>
						<?php } ?>	
						<?php if( !empty($settings['price']) ){ ?>
							<span class="tk"><?php echo $settings['price']; ?></span>
						<?php } ?>		
						<?php if( !empty($settings['month']) ){ ?>
							<span class="month"><?php echo $settings['month']; ?></span>
						<?php } ?>	
					</div>
				</div>
				<h3 class="pricing-title"><?php echo $settings['title']; ?></h3>
				<div class="pricing-body">
					<ul class="features">																	
						<?php foreach (  $settings['feature_list'] as $item ) { ?>
							<li>
								<?php \Elementor\Icons_Manager::render_icon( $item['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
								<?php echo $item['list_title']; ?>
							</li>
						<?php } ?>														
					</ul>
					<a class="pricing-button" href="<?php echo esc_url($settings['button_link']['url']); ?>" class="singinp"><?php echo $settings['button_text']; ?></a>
				</div>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>
			<div class="single_pricing style-two <?php if('yes' === $settings['show_active']){echo esc_attr('active');}?>">
				<div class="pricing_content <?php if('yes' === $settings['change_curve']){echo esc_attr('pricing-3');}?>">
					<div class="pricing_top_bar">
						<div class="pricing_head">	
							<div class="pricing_title">
								<h3><?php echo $settings['title']; ?></h3>
							</div>
						</div>
						<div class="price_item">
							<div class="price_item_inner">
								<div class="price_item_inner_center">
									<?php if( !empty($settings['currency']) ){ ?>
									<span class="curencyp"><?php echo $settings['currency']; ?></span>
									<?php } ?>
									<?php if( !empty($settings['price']) ){ ?>
									<span class="tk"><?php echo $settings['price']; ?></span>
									<?php } ?>
									<?php if( !empty($settings['month']) ){ ?>
									<span class="monthp">
										<span class="month_inner">
											<span class="bootmp"><?php echo $settings['month']; ?></span>
										</span>
									</span>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="pricing_img">
							<img src="<?php echo $settings['image']['url']; ?>" alt="" />
						</div>	
					</div><!-- .pricing_top_bar -->
					<div class="pricing_body">
						<div class="featur">
							<ul>																	
								<?php foreach (  $settings['slides'] as $item ) { ?>
										<li><?php echo $item['item_field']; ?></li>
								<?php } ?>														
							</ul>
						</div>
						<div class="pricing_bottom">
							<div class="order_now">				
								<a href="<?php echo esc_url($settings['button_link']['url']); ?>" class="singinp"><?php echo $settings['button_text']; ?></a>		
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php }?>

		<?php

	}
}