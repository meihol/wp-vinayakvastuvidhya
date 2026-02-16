<?php
use Elementor\Group_Control_Typography;
if(!defined('ABSPATH')) exit;

class CaseStudy extends \Elementor\Widget_Base{

	public function get_name(){
		return "casestudy";
	}
	
	public function get_title(){
		return "Case Study";
	}
	
	public function get_icon(){
		return "eicon-integration";
	}
	public function get_categories(){
		return ['dreamit-category'];
	}
	
	protected function register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Video', 'dreamit-elementor-extension' ),
			]
		);
			$this->add_control(
	        	'youtube_video_url',
					[
						'label' => __( 'Video URL', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::URL,
						'label_block' => true,
                        'default' => [
                            'url' => '#'
                        ]
					]
	        );
	        $this->add_control(
	        	'youtube_video_icon',
					[
						'label' => __( 'Video Icon', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::ICONS,
						'default' => [
							'value' => 'fas fa-play',
						],
					]
	        );
	          $this->add_control(
	        	'vimeo_video_url',
					[
						'label' => __( 'Video URL', 'dreamit-elementor-extension' ),
						'type' => \Elementor\Controls_Manager::URL,
						'label_block' => true,
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
						'four' => __( 'four', 'dreamit-elementor-extension' ),
						'five' => __( 'five', 'dreamit-elementor-extension' ),
						'six' => __( 'Six', 'dreamit-elementor-extension' ),
						'seven' => __( 'Seven', 'dreamit-elementor-extension' ),
					],
					'default' => 'one',
					
				]
			);
			$this->add_control(
				'overlay_color',
				[
					'label' => __( 'Overlay Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .style-two .case-study-thumb:before' => 'background: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'title_section',
			[
				'label' => __( 'Title', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->start_controls_tabs(
				'title_style_tabs'
			);
				$this->start_controls_tab(
					'title_style_normal_tab',
					[
						'label' => __( 'Normal', 'dreamit-elementor-extension' ),
					]
				);
				
					$this->add_control(
						'title_color',
						[
							'label' => __( 'Color', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .cases-study-content h2 a' => 'color: {{VALUE}};',
							],
						]
					);
				
				$this->end_controls_tab();
				
				$this->start_controls_tab(
					'title_style_hover_tab',
					[
						'label' => __( 'Hover', 'dreamit-elementor-extension' ),
					]
				);

					$this->add_control(
						'hover_title_color',
						[
							'label' => __( 'Color', 'dreamit-elementor-extension' ),
							'type' => \Elementor\Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .cases-study-content h2 a:hover' => 'color: {{VALUE}};',
							],
						]
					);
				
				$this->end_controls_tab();
				
			$this->end_controls_tabs();

			$this->add_responsive_control(
				'title_margin',
				[
					'label' => __( 'Margin', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .cases-study-content h2 ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);

	        $this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => 
	                    '{{WRAPPER}} .cases-study-content h2 a',
				]
			);

		$this->end_controls_section();

		$this->start_controls_section(
			'category_section',
			[
				'label' => __( 'Category', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'category_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .case_category span' => 'color: {{VALUE}};',
					],
				]
			);

	        $this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'category_typography',
					'label' => esc_html__( 'Typography', 'dreamit-elementor-extension' ),
					'selector' => 
	                    '{{WRAPPER}} .case_category span',
				]
			);

		$this->end_controls_section();
		$this->start_controls_section(
			'icon_section',
			[
				'label' => __( 'Icon', 'dreamit-elementor-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'icon_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .video-icon i' => 'color: {{VALUE}}',
					],
				]
			);
			$this->add_responsive_control(
				'icon_size',
				[
					'label' => __( 'Icon Size', 'dreamit-elementor-extension' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 6,
							'max' => 300,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .video-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);
			$this->add_control(
				'inner_size',
				[
					'label' => __( 'Inner Size', 'dreamit-elementor-extension' ),
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
						'{{WRAPPER}} .video-icon i' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();
	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		?>
			<?php if($settings['select_style']=='one'){ ?>

			<div class="case-study style1">
				<div class="case-grid">
					<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post();
						$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');
					?>
					<div class="gird-item">
						<div class="image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="content">
							<a class="case-btn" href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php if( $terms ){ ?>
							<?php foreach( $terms as $single_slugs ){ ?>
								<p class="category"><?php echo $single_slugs->name ;?></p>
							<?php }} ?>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>

			<?php }elseif($settings['select_style']=='two'){ ?>

			<div class="case-study style2">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
											
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
												<div class="video-icon">
													<?php if( !empty($settings['youtube_video_url']['url']) ){ ?>
														<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['youtube_video_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['youtube_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
													<?php } ?>
													<?php if( !empty($settings['vimeo_video_url']['url']) ){ ?>
														<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['vimeo_video_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['vimeo_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
													<?php } ?>
												</div>
											</div>
										<?php } ?>
										<div class="cases-study-content">
											<div class="case_category">
												<?php if( $terms ){
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
															<?php echo $single_slugs->name ;?>
														</span>
												<?php }} ?>
											</div>
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="em-case-study-button">
												<a href="<?php the_permalink(); ?>" class="learn_btn">Read More <i class="flaticon flaticon-add"></i></a>
												 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>

			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: false,
        				autoplayTimeout: 10000,
        				dots: true,
        				dotsEeach:true,
        				nav: false,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 2
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 3
        					},
        					1365: {
        						items: 3
        					},
        					1920: {
        						items: 3
        					}
        				}
        			})		
        		});
        			</script>
			<?php } elseif($settings['select_style']=='three'){ ?>

			<div class="case-study style3">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
											
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
											</div>
										<?php } ?>
										<div class="cases-study-content">
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="case_category">
												<?php if( $terms ){
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
															<?php echo $single_slugs->name ;?>
														</span>
												<?php }} ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>

			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: false,
        				autoplayTimeout: 10000,
        				dots: true,
        				dotsEeach:true,
        				nav: false,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 2
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 3
        					},
        					1365: {
        						items: 4
        					},
        					1920: {
        						items: 4
        					}
        				}
        			})		
        		});
        			</script>
			<?php }elseif($settings['select_style']=='four'){ ?>

			<div class="case-study style4">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
											
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
											<div class="case_button">
								                <a href="<?php the_permalink(); ?>"> <i class="flaticon flaticon-right-arrow"></i></a>
											</div>
											</div>
										<?php } ?>
										<div class="cases_study_content">
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>

			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: true,
        				autoplayTimeout: 2500,
        				dots:true,
        				dotsEeach:true,
        				nav: false,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 2
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 3
        					},
        					1365: {
        						items: 4
        					},
        					1920: {
        						items: 4
        					}
        				}
        			})		
        		});
        			</script>
			<?php }elseif($settings['select_style']=='five'){ ?>

            <div class="case-study style3 style5">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
											
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
											</div>
										<?php } ?>
										<div class="cases-study-content">
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="case_category">
												<?php if( $terms ){
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
															<?php echo $single_slugs->name ;?>
														</span>
												<?php }} ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>

			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: false,
        				autoplayTimeout: 10000,
        				dots:true,
        				dotsEeach:true,
        				nav: false,
        				center:true,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 2
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 2
        					},
        					1365: {
        						items: 3
        					},
        					1920: {
        						items: 3
        					}
        				}
        			})		
        		});
        			</script>
			<?php }elseif($settings['select_style']=='six'){ ?>

            <div class="case-study style6">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
											</div>
										<?php } ?>
										<div class="cases_study_content">
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="case_category">
												<?php if( $terms ){
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
															<?php echo $single_slugs->name ;?>
														</span>
												<?php }} ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>
			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: false,
        				autoplayTimeout: 10000,
        				dots:true,
        				dotsEeach:true,
        				nav: false,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 2
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 3
        					},
        					1365: {
        						items: 4
        					},
        					1920: {
        						items: 4
        					}
        				}
        			})		
        		});
        			</script>
        		<?php }elseif($settings['select_style']=='seven'){ ?>

            <div class="case-study style6 style7">
				<div class="blog_style_adn_2">
					<div class="blog_wrap case_study_carousel owl-theme owl-carousel owl-loaded curosel-style style-two">
						
						<?php $the_query = new \WP_Query( array( 'post_type' => 'em_case_study' ) ); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
						 
							// $url = esc_url( get_post_meta( get_the_ID(), 'embed', 1 ) );
							// echo wp_oembed_get( $url );	

							$terms = get_the_terms(get_the_ID(), 'em_case_study_cat');

						?>
						<div class="col-md-12 col-xs-12 col-sm-12" >
							<div class="single_case_study">
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="dreamit-single-cases-study">
										<?php if(has_post_thumbnail()){?>
											<div class="case-study-thumb">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
											</div>
										<?php } ?>
										<div class="cases_study_content">
										    <div class="case_category">
												<?php if( $terms ){
													foreach( $terms as $single_slugs ){?>
														<span class="category-item">
															<?php echo $single_slugs->name ;?>
														</span>
												<?php }} ?>
											</div>
											<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="case_button">
								                <a href="<?php the_permalink(); ?>">Read More <i class="flaticon flaticon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>
			<script>
			jQuery(document).ready(function($) {
				"use strict";

					$('.case_study_carousel').owlCarousel({
        				loop: true,
        				autoplay: false,
        				autoplayTimeout: 10000,
        				dots:true,
        				dotsEeach:true,
        				nav: false,
        				navText: ["<i class='flaticon-back-1'></i>", "<i class='fa fa-angle-right'></i>"],
        				responsive: {
        					0: {
        						items: 1
        					},
        					768: {
        						items: 1
        					},
        					991: {
        						items: 2
        					},
        					992: {
        						items: 2
        					},
        					1000: {
        						items: 2
        					},
        					1365: {
        						items: 3
        					},
        					1920: {
        						items: 3
        					}
        				}
        			})		
        		});
        			</script>
			<?php }?>
		<?php
	}
}