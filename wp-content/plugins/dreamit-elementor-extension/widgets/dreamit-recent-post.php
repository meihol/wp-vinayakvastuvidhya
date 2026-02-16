<?php

if(!defined('ABSPATH')) exit;

class RecentPost extends \Elementor\Widget_Base{

	public function get_name(){
		return "recent-post";
	}
	
	public function get_title(){
		return "Recent Post";
	}
	
	public function get_icon(){
		return "eicon-table-of-contents";
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
					'label' => __( 'Button Text', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your button text', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'Read More', 'dreamit-elementor-extension' ),
				]
			);
			$this->add_control(
				'show_button',
				[
					'label' => __( 'Show Button', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => __( 'Show', 'dreamit-elementor-extension' ),
					'label_off' => __( 'Hide', 'dreamit-elementor-extension' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			$this->add_control(
				'button_icon',
				[
					'label' => __( 'Button Icon', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fa fa-angle-right',
						'library' => 'solid',
					],
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
		$this->end_controls_section();

		$this->start_controls_section(
			'meta_section_style',
			[
				'label' => __( 'Post Meta', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'meta_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .meta' => 'color: {{VALUE}};',
						'{{WRAPPER}} .blog-post .post-item .content .meta a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'meta_typography',
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .meta, {{WRAPPER}} .blog-post .post-item .content .meta a',
				]
			);
			$this->add_responsive_control(
				'meta_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .blog-post .post-item .content .title a' => 'color: {{VALUE}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .title',
				]
			);
			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
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
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .description' => 'color: {{VALUE}};',
					],
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'description_typography',
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .description',
				]
			);
			$this->add_responsive_control(
				'description_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .read-more',
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
						'{{WRAPPER}} .blog-post .post-item .content .read-more' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .read-more',
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
						'{{WRAPPER}} .blog-post .post-item .content .read-more:hover' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'hover_background',
					'label' => esc_html__( 'Background', 'dreamit-elementor-extension' ),
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .read-more:hover',
				]
			);

			$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'button_border',
					'label' => esc_html__( 'Border', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .read-more',
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
						'{{WRAPPER}} .blog-post .post-item .content .read-more' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'box_shadow',
					'label' => esc_html__( 'Box Shadow', 'dreamit-elementor-extension' ),
					'selector' => '{{WRAPPER}} .blog-post .post-item .content .read-more',
				]
			);
			$this->add_responsive_control(
				'button_padding',
				[
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'label' => esc_html__( 'Padding', 'dreamit-elementor-extension' ),
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .blog-post .post-item .content .read-more' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>

        <?php if($settings['select_style']=='one'){ ?>

			<div class="recent-post style1">
				<div class="post-carousel">
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2 ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="post-item">
							<div class="post-thumb">
								<?php the_post_thumbnail('luxury-blog-default'); ?>
							</div>
							<div class="content">
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 7,''); ?></a></h3>
								<div class="meta">
									<div class="date">
										<?php echo get_the_time(get_option('date_format')); ?>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

		<?php }elseif($settings['select_style']=='two'){ ?>
		
			<div class=" blog_style_two">				
				<div class="blog_wrap blog_carousel owl-carousel owl-loaded curosel-style">
				
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="luxury-single-blog_adn ">

										<!-- BLOG THUMB -->
										
										<div class="luxury-blog-thumb_adn ">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('luxury-blog-default'); ?></a>
											<div class="luxury-blog-meta-top">
												<?php the_category();?>
											</div>
										</div>									
										
										<!-- BLOG CONTENT -->
										<div class="em-blog-content-area_adn ">

											<!-- BLOG META -->
											<div class="luxury-blog-meta-left ">
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
											</div>	

											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
											</div>

											<!-- BLOG BUTTON -->
											<?php if( 'yes'===$settings['show_button'] ){ ?>
											<div class="luxury-blog-readmore">
												<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $settings['button_text']; ?><?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
											</div>
											<?php } ?>
											
										</div>
										
									</div>
								
								</div>
	
									
							</div>
						
						</div>
					<?php endwhile; ?>
					
				</div>
			</div>
    		<script>
    			jQuery(document).ready(function($) {
    				"use strict";
                	/* Blog Curousel */
                	$('.blog_carousel').owlCarousel({
                		dots: true,
                		nav: true,
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
                				items: 2
                			}
                		}
                	})	
            		});
            	</script>
            	<?php }elseif($settings['select_style']=='three'){ ?>
		
			<div class=" blog_style_three">				
				<div class="blog_wrap blog_carousel owl-carousel owl-loaded curosel-style">
				
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="luxury-single-blog_adn ">

										<!-- BLOG THUMB -->
										
										<div class="luxury-blog-thumb_adn ">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('luxury-blog-default'); ?></a>
										</div>									
										
										<!-- BLOG CONTENT -->
										<div class="em-blog-content-area_adn ">

											<!-- BLOG META -->
											<div class="luxury-blog-meta-left ">
												<span><?php echo get_the_time(get_option('date_format')); ?></span>
											</div>	

											<!-- BLOG TITLE -->
											<div class="blog-page-title_adn ">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
											</div>

											<!-- BLOG BUTTON -->
											<?php if( 'yes'===$settings['show_button'] ){ ?>
											<div class="luxury-blog-readmore">
												<a href="<?php the_permalink(); ?>" class="learn_btn"><?php echo $settings['button_text']; ?><?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
											</div>
											<?php } ?>
											
										</div><!-- .em-blog-content-area_adn -->
										
									</div>
								
								</div> <!--  END SINGLE BLOG -->
	
									
							</div>
						
						</div>
					<?php endwhile; ?>
					
				</div>
			</div>
    		<script>
    			jQuery(document).ready(function($) {
    				"use strict";
                	/* Blog Curousel */
                	$('.blog_carousel').owlCarousel({
                		dots: true,
                		nav: true,
                		autoplayTimeout: 10000,
                		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
                		responsive: {
                			0: {
                				items: 1
                			},
                			768: {
                				items: 1
                			},
                			992: {
                				items: 2
                			},
                			1920: {
                				items: 2
                			}
                		}
                	})	
            		});
            	</script>

            <?php }elseif($settings['select_style']=='four'){ ?>
		
			<div class="blog-post style4 blog_style_two">				
				<div class="blog_wrap blog_carousel owl-carousel owl-loaded curosel-style">
				
					<?php $the_query = new \WP_Query( array( 'post_type' => 'post' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<!-- single blog -->
						<div class="col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										
										<div class="luxury-blog-thumb_adn ">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('luxury-blog-default'); ?></a>
										</div>									
										
										<div class="content">
											<div class="blog-meta-left">
												<span><i class="bi bi-calendar-date"></i><?php echo get_the_time(get_option('date_format')); ?></span>
												<span><i class="bi bi-chat-dots-fill"></i>Comments (0)</span>
											</div>	

											<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<p class="description"><?php echo wp_trim_words( get_the_content(), 12, '' ); ?></p>

											<?php if( 'yes'===$settings['show_button'] ){ ?>
												<a href="<?php the_permalink(); ?>" class="read-more"><?php echo $settings['button_text']; ?><?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
											<?php } ?>
											
										</div>
									
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					
				</div>
			</div>
    		<script>
    			jQuery(document).ready(function($) {
    				"use strict";
                	/* Blog Curousel */
                	$('.blog_carousel').owlCarousel({
                		dots: false,
                		nav: false,
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
                				items: 3
                			},
                			1920: {
                				items: 3
                			}
                		}
                	})	
            		});
            	</script>
		
		<?php } ?>

		<?php
	}
}