<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if(!defined('ABSPATH')) exit;

class Portfolio extends Widget_Base{

	public function get_name(){
		return "portfolio";
	}
	
	public function get_title(){
		return "Portfolio";
	}
	
	public function get_icon(){
		return "eicon-star-o";
	}

	public function get_categories(){
		return ['dreamit-category'];
	}

	protected function register_controls(){

		$this->start_controls_section(
			'tab_section',
			[
				'label' => __( 'Tab', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'all_works_text',
				[
					'label' => __( 'All Works Text', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::TEXT,
					'dynamic' => [
						'active' => true,
					],
					'placeholder' => __( 'Enter All Works text', 'dreamit-elementor-extension' ),
					'label_block' => true,
					'default' => __( 'All', 'dreamit-elementor-extension' ),
				]
			);
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'select_column',
				[
					'label' => __( 'Select Column', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::SELECT,
					'options' => [
						'12' => __( '1 Column', 'dreamit-elementor-extension' ),
						'6'	=> __( '2 Column', 'dreamit-elementor-extension' ),
						'4'	=> __( '3 Column', 'dreamit-elementor-extension' ),
						'3'	=> __( '4 Column', 'dreamit-elementor-extension' )
					],
					'default' => '4',
				]
			);
		$this->end_controls_section();
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
			'tab_style_section',
			[
				'label' => __( 'Tab', 'dreamit-elementor-extension' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'tab_color',
				[
					'label' => __( 'Color', 'dreamit-elementor-extension' ),
					'type' => Controls_Manager::COLOR,
					'default' => '',
					'selectors' => [
						'{{WRAPPER}} .portfolio-filter ul li' => 'color: {{VALUE}}',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render(){

		$settings = $this->get_settings_for_display();

		$args = array(
			'post_type' => 'em_portfolio',
		);
		$the_query = new \WP_Query($args);

		?>

		<div class="portfolio-filter">
			<div class="filters filter-button-group">
				<ul>
					<li class="current_menu_item" data-filter="*"><?php echo $settings['all_works_text'];?></li>
					<?php
						$categories = get_terms('em_portfolio_cat');
						foreach ( $categories as $single_category ) {
					?>
					<li data-filter=".<?php echo esc_attr( $single_category->slug );?>"><?php echo esc_html( $single_category->name );?></li>
					<?php } ?>
				</ul>
			</div>

			<div class="content em_load">
				<div class="row">
					<?php while ($the_query->have_posts()) : $the_query->the_post();
						$terms = get_the_terms(get_the_ID(), 'em_portfolio_cat');
						?>
						<div class="col-md-6 col-lg-<?php echo $settings['select_column']; ?> grid-item <?php foreach( $terms as $single_slug){echo $single_slug->slug. ' ';} ?>">
							<div class="single-content">
								<div class="port-thumb">
									<?php the_post_thumbnail();?>
									<div class="picon">					
									<a class="portfolio-icon venobox" data-gall="myportfolio" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'full' );?>"><i class="fa fa-photo"></i></a>
								</div>
								<div class="video-icon">
									<?php if( !empty($settings['youtube_video_url']['url']) ){ ?>
										<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['youtube_video_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['youtube_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
									<?php } ?>
									<?php if( !empty($settings['vimeo_video_url']['url']) ){ ?>
										<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="<?php echo esc_url($settings['vimeo_video_url']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['vimeo_video_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
									<?php } ?>
								</div>
								<div class="prot_content">
									<?php foreach( $terms as $single_slugs ){ ?>
										<p><?php echo $single_slugs->name ;?></p>
									<?php } ?>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>

		<?php

	}
}