<?php
/**
 * ABC ServiTodo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ABC_ServiTodo
 */

/** Integración del Plugin CMB2 al Tema */
//require_once __DIR__ . '/integrated-plugins/cmb2/init.php';
require_once dirname( __FILE__ ) .'/integrated-plugins/example-functions.php';      # Archivo de campos de ejemplo de CMB2
require_once dirname( __FILE__ ) .'/inc/custom-fields.php';							# Archivo de configuración de campos personalizados de CMB2 (v2.6.0) disponibles para el tema.

if ( ! function_exists( 'abc_servitodo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abc_servitodo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ABC ServiTodo, use a find and replace
		 * to change 'abc-servitodo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abc-servitodo', get_template_directory() . '/languages' );

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

		add_image_size(
			'slider-us',   # Nombre del tamaño de imagen que hemos registrado
			420,          # Alto de la imagen en pixeles
			370,          # Ancho de la imagen en pixeles
			true          # True si deseamos que puedo de la redimensión se haga cropping o recorte de la imagen
		);
		add_image_size(
			'section-us',   # Nombre del tamaño de imagen que hemos registrado
			540,          # Alto de la imagen en pixeles
			960,          # Ancho de la imagen en pixeles
			true          # True si deseamos que puedo de la redimensión se haga cropping o recorte de la imagen
		);
		add_image_size(
			'section-page-us',   # Nombre del tamaño de imagen que hemos registrado
			525,          # Alto de la imagen en pixeles
			394,          # Ancho de la imagen en pixeles
			true          # True si deseamos que puedo de la redimensión se haga cropping o recorte de la imagen
		);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'   => esc_html__( 'Primary Menu', 'abc-servitodo' ),
			'secondary' => esc_html__( 'Secondary Menu', 'abc-servitodo' ),
			'social'    => esc_html__( 'Social Networks Menu', 'abc-servitodo' )
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
		add_theme_support( 'custom-background', apply_filters( 'abc_servitodo_custom_background_args', array(
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
add_action( 'after_setup_theme', 'abc_servitodo_setup' );

/**
 * Custom template menu for this theme.
 */
require get_template_directory() . '/inc/custom-menu.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abc_servitodo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'abc_servitodo_content_width', 640 );
}
add_action( 'after_setup_theme', 'abc_servitodo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abc_servitodo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'abc-servitodo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'abc-servitodo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'abc_servitodo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function abc_servitodo_scripts() {
	// wp_enqueue_style( 'abc-servitodo-style', get_stylesheet_uri() );										// Enlaza automáticamente hoja de estilos style.css en el raíz del tema
	wp_enqueue_style( 'abc-servitodo-style-min', get_template_directory_uri() . '/style.min.css' );			// Enlaza hoja de estilos style.min.css en el raíz del tema
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/dist/libs/bootstrap.min.css', false );	// Enlaza hola de estilos 'Bootstrap'
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', false );	// Enlaza URL del CDN de 'Fontawesome'
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Rubik:300,400,500,700,900|Nunito:200,300,400,600,700,800,900&display=swap', false ); // Enlaza URL del CDN de fuentes de 'Google Fonts'

	//wp_enqueue_script( 'jquery' );																										// Enlaza versión de jQuery disponible de WordPress
	wp_enqueue_script( 'abc-servitodo-jquery', get_template_directory_uri() . '/dist/libs/jquery.min.js', array(), 'v4.3.1', true );		// Enlaza versión de jQuery 

	wp_enqueue_script( 'abc-servitodo-bootstrap', get_template_directory_uri() . '/dist/libs/bootstrap.min.js', array( 'abc-servitodo-jquery' ), 'v4.3.1', true );	// Enlaza JS 'Bootstrap'
	wp_enqueue_script( 'abc-servitodo-navigation', get_template_directory_uri() . '/dist/assets/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'abc-servitodo-skip-link-focus-fix', get_template_directory_uri() . '/dist/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'abc_servitodo_scripts' );

/**
 * Customizing lists of publications and pages in the WordPress administration area
 */
require get_template_directory() . '/inc/custom-admin-lists-of-posts-and-pages.php';

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

function abc_servitodo_cmb2_get_field_value( $id, $cmb2_field_name ) {
	$exists = false;
	$value = '';

	if( ! empty( get_post_meta( $id, $cmb2_field_name, true ) ) ) {
		$exists = true;
		$value = get_post_meta( $id, $cmb2_field_name, true );
	}
	
	return [
		'exists' => $exists,
		'value' => $value
	];
}

