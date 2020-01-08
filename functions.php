<?php
/**
 * 
 * sharfik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sharfik
 */

if ( ! function_exists( 'sharfik_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sharfik_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sharfik, use a find and replace
		 * to change 'sharfik' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sharfik', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'sharfik' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sharfik_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sharfik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sharfik_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sharfik_content_width', 640 );
}
add_action( 'after_setup_theme', 'sharfik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sharfik_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Категории', 'sharfik' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sharfik' ),
		'before_widget' => '<section id="%1$s" class="footer_menu">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Страницы', 'sharfik' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'sharfik' ),
		'before_widget' => '<section id="%1$s" class="footer_menu">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Партнёры', 'sharfik' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'sharfik' ),
		'before_widget' => '<section id="%1$s" class="footer_menu">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="">',
		'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Социальные сети', 'sharfik' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'sharfik' ),
			'before_widget' => '<section id="%1$s" class="footer_menu>',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="col col_16">',
			'after_title'   => '</h4>',
			) );
			register_sidebar( array(
				'name'          => esc_html__( 'О нас', 'sharfik' ),
				'id'            => 'sidebar-5',
				'description'   => esc_html__( 'Add widgets here.', 'sharfik' ),
				'before_widget' => '<section id="%1$s" class="footer_menu">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="col col_13 no_margin_right">',
				'after_title'   => '</h3>',
				
	) );
}

add_action( 'widgets_init', 'sharfik_widgets_init' );

function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );
/**
 * Enqueue scripts and styles.
 */

function sharfik_scripts() {
	wp_enqueue_style( 'sharfik-style', get_stylesheet_uri() );

	
	
	wp_enqueue_script( 'ajax-search', get_template_directory_uri() . '/js/ajax-search.js', array(), '');
	wp_localize_script( 'ajax-search', 'search', array(
		'url' -> admin_url( 'admin-ajax.php' ),
		'nonce'  -> wp_create_nonce( 'search-nonce' )
	) );
	wp_enqueue_script( 'sharfik-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sharfik-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sharfik_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
/*** перенос woocommerce.css в файл шаблона ***/
function woo_style() {
	wp_register_style( 'mihalica-woocommerce', get_template_directory_uri() . '/woocommerce.css', null, 1.0, 'screen' );
	wp_enqueue_style( 'mihalica-woocommerce' ); } add_action( 'wp_enqueue_scripts', 'woo_style' );
	/*** ФИНАЛ перенос woocommerce.css в файл шаблона ***/

	register_nav_menus(array(
		'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
		'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
	));
	add_action('wp_footer','wooexperts_remove_block_data',0);
add_action('admin_enqueue_scripts','wooexperts_remove_block_data',0);
function wooexperts_remove_block_data(){ 
    remove_filter('wp_print_footer_scripts',array('Automattic\WooCommerce\Blocks\Assets','print_script_block_data'),1);
    remove_filter('admin_print_footer_scripts',array('Automattic\WooCommerce\Blocks\Assets','print_script_block_data'),1);
}
add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {
/*add_theme_support( 'wc-product-gallery-zoom' ); */
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
};


add_filter ('woocommerce_enqueue_styles', '__return_empty_array');

add_image_size( 'trueslider', 160, 120, true ); // где 640 это ширина, а 480 - высота слайдера