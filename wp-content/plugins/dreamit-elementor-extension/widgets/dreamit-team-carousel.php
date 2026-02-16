<?php

if(!defined('ABSPATH')) exit;

class TeamCarousel extends \Elementor\Widget_Base {

    public function get_name() {
        return 'team-carousel';
    }

    public function get_title() {
        return esc_html__( 'Team Carousel', 'dreamit-elementor-extension' );
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return [ 'dreamit-category' ];
    }

    public function get_keywords() {
        return [ 'team', 'member' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'image_section',
            [
                'label' => esc_html__( 'Image', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'image',
                [
                    'label' => esc_html__( 'Choose Image', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'text_section',
            [
                'label' => esc_html__( 'Text', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

            $this->add_control(
                'team_name',
                [
                    'label' => esc_html__( 'Name', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Atikul Islam', 'dreamit-elementor-extension' ),
                    'placeholder' => esc_html__( 'Type your name here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );

            $this->add_control(
                'team_designation',
                [
                    'label' => esc_html__( 'Designation', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'WordPress Developer', 'dreamit-elementor-extension' ),
                    'placeholder' => esc_html__( 'Type your designation here', 'dreamit-elementor-extension' ),
                    'label_block' => true,
                ]
            );

            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'social_icon',
                [
                    'label' => esc_html__( 'Icon', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fab fa-wordpress',
                        'library' => 'fa-brands',
                    ],
                    'recommended' => [
                        'fa-brands' => [
                            'android',
                            'apple',
                            'behance',
                            'bitbucket',
                            'codepen',
                            'delicious',
                            'deviantart',
                            'digg',
                            'dribbble',
                            'elementor',
                            'facebook',
                            'flickr',
                            'foursquare',
                            'free-code-camp',
                            'github',
                            'gitlab',
                            'globe',
                            'houzz',
                            'instagram',
                            'jsfiddle',
                            'linkedin',
                            'medium',
                            'meetup',
                            'mix',
                            'mixcloud',
                            'odnoklassniki',
                            'pinterest',
                            'product-hunt',
                            'reddit',
                            'shopping-cart',
                            'skype',
                            'slideshare',
                            'snapchat',
                            'soundcloud',
                            'spotify',
                            'stack-overflow',
                            'steam',
                            'telegram',
                            'thumb-tack',
                            'tripadvisor',
                            'tumblr',
                            'twitch',
                            'twitter',
                            'viber',
                            'vimeo',
                            'vk',
                            'weibo',
                            'weixin',
                            'whatsapp',
                            'wordpress',
                            'xing',
                            'yelp',
                            'youtube',
                            '500px',
                        ],
                        'fa-solid' => [
                            'envelope',
                            'link',
                            'rss',
                        ],
                    ],
                ]
            );
            $repeater->add_control(
                'social_link',
                [
                    'label' => esc_html__( 'Link', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'placeholder' => esc_html__( 'https://your-link.com', 'dreamit-elementor-extension' ),
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => true,
                        'nofollow' => true,
                    ],
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'list',
                [
                    'label' => esc_html__( 'Social List', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'social_icon' => [
                                'value' => 'fab fa-facebook',
                                'library' => 'fa-brands',
                            ],
                        ],
                        [
                            'social_icon' => [
                                'value' => 'fab fa-twitter',
                                'library' => 'fa-brands',
                            ],
                        ],
                        [
                            'social_icon' => [
                                'value' => 'fab fa-youtube',
                                'library' => 'fa-brands',
                            ],
                        ],
                    ],
                    'title_field' => '<# var migrated = "undefined" !== typeof __fa4_migrated, social = ( "undefined" === typeof social ) ? false : social; #>{{{ elementor.helpers.getSocialNetworkNameFromIcon( social_icon, social, true, migrated, true ) }}}',
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
                        '{{WRAPPER}} .heading' => 'text-align: {{VALUE}};',
                    ],
                ]
            );
        $this->end_controls_section();

        $this->start_controls_section(
            'name_style',
            [
                'label' => esc_html__( 'Name', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'name_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team .bio .name' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'name_typography',
                    'selector' => '{{WRAPPER}} .team .bio .name',
                ]
            );
            $this->add_responsive_control(
                'name_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team .bio .name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'designation_style',
            [
                'label' => esc_html__( 'Designation', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            $this->add_control(
                'designation_color',
                [
                    'label' => esc_html__( 'Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team .bio .designation' => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'designation_typography',
                    'selector' => '{{WRAPPER}} .team .bio .designation',
                ]
            );
            $this->add_responsive_control(
                'designation_margin',
                [
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'label' => esc_html__( 'Margin', 'dreamit-elementor-extension' ),
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team .bio .designation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'social_icon_style',
            [
                'label' => __( 'Social Icon', 'dreamit-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'style_tabs'
        );
        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => __( 'Normal', 'dreamit-elementor-extension' ),
            ]
        );

            $this->add_control(
                'icon_color',
                [
                    'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'icon_background_color',
                [
                    'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'icon_border',
                    'label' => __( 'Border', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .team .content .social-icon li a i',
                ]
            );
            $this->add_responsive_control(
                'icon_border_radius',
                [
                    'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => __( 'Hover', 'dreamit-elementor-extension' ),
            ]
        );

            $this->add_control(
                'hover_icon_color',
                [
                    'label' => __( 'Icon Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'hover_icon_background_color',
                [
                    'label' => __( 'Background Color', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i:hover' => 'background: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'hover_border',
                    'label' => __( 'Hover Border', 'dreamit-elementor-extension' ),
                    'selector' => '{{WRAPPER}} .team .content .social-icon li a i:hover',
                ]
            );
            $this->add_responsive_control(
                'hover_icon_border_radius',
                [
                    'label' => __( 'Border Radius', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_tab();

        $this->end_controls_tabs();

            $this->add_responsive_control(
                'icon_margin',
                [
                    'label' => __( 'Margin', 'dreamit-elementor-extension' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', 'em', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_control(
                'height',
                [
                    'label' => __( 'Height', 'dreamit-elementor-extension' ),
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
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'width',
                [
                    'label' => __( 'Width', 'dreamit-elementor-extension' ),
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
                        '{{WRAPPER}} .team .content .social-icon li a i' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'icon_typography',
                    'selector' => '{{WRAPPER}} .team .content .social-icon li a i',
                ]
            );
            
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        ?>

        <?php if($settings['select_style']=='one'){ ?>

        <div class="team style1">
            <div class="image">
                <img src="<?php echo $settings['image']['url']; ?>" alt="">
            </div>
            <div class="content">
                <div class="bio">
                    <h2 class="name"><?php echo $settings['team_name']; ?></h2>
                    <h5 class="designation"><?php echo $settings['team_designation']; ?></h5>
                </div>
                <ul class="social-icon">
                    <?php foreach (  $settings['list'] as $item ) { ?>
                        <li><a href="<?php echo esc_url($item['social_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <?php }elseif($settings['select_style']=='two'){ ?>

            <div class="team-carousel style2">
                <div class="team-wrapper owl-carousel">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?php echo $settings['image']['url']; ?>" alt="">
                            <ul class="social-icon">
                                <?php foreach (  $settings['list'] as $item ) { ?>
                                    <li><a href="<?php echo esc_url($item['social_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="bio">
                                <h2 class="name"><?php echo $settings['team_name']; ?></h2>
                                <h5 class="designation"><?php echo $settings['team_designation']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                jQuery(document).ready(function($) {
                    "use strict";

                    $('.team-wrapper').owlCarousel({
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
                                items: 2
                            }
                        }
                    })
                });
            </script>

        <?php } ?>

        <?php
    }
}