<?php

/**
 * casinos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package casinos
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('casinos_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function casinos_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on casinos, use a find and replace
		 * to change 'casinos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('casinos', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');



		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'casinos'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'casinos_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);


		add_theme_support('post-formats', array('casino'));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;


add_action('after_setup_theme', 'casinos_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casinos_content_width()
{
	$GLOBALS['content_width'] = apply_filters('casinos_content_width', 640);
}
add_action('after_setup_theme', 'casinos_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casinos_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'casinos'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'casinos'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'casinos_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function casinos_scripts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@700&family=Raleway:wght@400;600&display=swap', false);

	wp_enqueue_style('casinos-style', get_template_directory_uri() . '/dist/css/style.css');
	wp_style_add_data('casinos-style', 'rtl', 'replace');

	wp_enqueue_script('casinos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'casinos_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACF Custom Post Fields
 */
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_6037d25224d6b',
		'title' => 'Casino Posts',
		'fields' => array(
			array(
				'key' => 'field_6037d27d7b73f',
				'label' => 'Casino Link',
				'name' => 'casino_link',
				'type' => 'url',
				'instructions' => 'Por aqui o link para o casino',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_6037e3691d136',
				'label' => 'Casino Imagem',
				'name' => 'casino_imagem',
				'type' => 'image',
				'instructions' => 'Adionar imagem do casino',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_6037e9e8d5d48',
				'label' => 'Casino Descrição',
				'name' => 'casino_descricao',
				'type' => 'textarea',
				'instructions' => 'Escrever aqui a descrição do casino',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_6037eb7624bc3',
				'label' => 'Ratings',
				'name' => 'ratings',
				'type' => 'range',
				'instructions' => 'Adicionar o valor do rating de 1 a 10',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'min' => '',
				'max' => 10,
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_6037ee8a6f57d',
				'label' => 'Review Link',
				'name' => 'review_link',
				'type' => 'url',
				'instructions' => 'Link para reviews',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_6037ef2f952ee',
				'label' => 'Montante Bonus',
				'name' => 'montante_bonus',
				'type' => 'number',
				'instructions' => 'Adicionar valor do bonus',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6037f12ad7506',
				'label' => 'Recomendado?',
				'name' => 'recomendado',
				'type' => 'checkbox',
				'instructions' => 'Selecionar se recomenda este casino',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Sim' => 'Sim',
				),
				'allow_custom' => 0,
				'default_value' => array(),
				'layout' => 'vertical',
				'toggle' => 0,
				'return_format' => 'value',
				'save_custom' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;