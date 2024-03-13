<?php
/**
 * searchstack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package searchstack
 */

if ( ! function_exists( 'searchstack_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function searchstack_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on searchstack, use a find and replace
		 * to change 'searchstack' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'searchstack', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'searchstack' ),
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
		add_theme_support( 'custom-background', apply_filters( 'searchstack_custom_background_args', array(
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
add_action( 'after_setup_theme', 'searchstack_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function searchstack_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'searchstack_content_width', 640 );
}
add_action( 'after_setup_theme', 'searchstack_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function searchstack_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'searchstack' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'searchstack' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'searchstack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function searchstack_scripts() {
	wp_enqueue_style( 'searchstack-style', get_stylesheet_uri() );

	wp_enqueue_script( 'searchstack-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'searchstack-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'searchstack_scripts' );

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
function my_login_logo() { ?>
		<script src="/wp-content/themes/searchstack/js/p5.min.js"></script>
	<script src="/wp-content/themes/searchstack/js/vanta.topology.min.js"></script>
    <style type="text/css">
        #login h1 a, .login h1 a {
			background-image: url(https://searchstack.co.uk/wp-content/uploads/2019/11/searchstack-icon.svg);
			padding-bottom: 0px;
			width: 200px;
			height: 100px;
			background-size: contain;
			animation: logslide 1.2s ease ;
		}
		body {
			background: black !important;
		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: #fbfbfb;
			color: #777777;
			border: none !important;
			border-bottom: solid 1px rgb(137, 0, 252, 0.7) !important;
			border-radius: 0px !important;
			background: transparent !important;
			margin-top: 7px;
		}
		.wp-core-ui .button-primary {
			background: #8900fc !important;
			border: none !important;
			margin-top: 20px !important;
			width: 100% !important;
			box-shadow: none !important;
			color: white !important;
			padding: 0 12px 2px !important;
			text-shadow: none !important;
			border-radius: 0px !important;
		}
		.login label {
			font-size: 14px !important;
			font-family: Muli, sans-serif !important;
			color: #eae8e1 !important;
		}
		.login form{
			box-shadow: 0 9px 32px 0 rgba(0,0,0,.15)  !important;
			padding: 0px !important;
			border-radius: 0  !important;
			margin-bottom: 20px  !important;
			background: transparent !important;
		}
		#login {
			width: 320px;
			padding: 8% 0 0;
			margin: auto;
			background: rgb(0, 13, 45, 0.7);
			padding: 2rem 3rem !important;
			position: relative !important;
    		bottom: -3rem !important;
		}
		.forgetmenot input {
			margin: 0 !important;
		}
		.login #login_error, .login .message, .login .success {
			border-bottom: 1px solid #8900fc !important;
			padding: 12px !important;
			margin-left: 0 !important;
			margin-bottom: 20px !important;
			background-color: transparent !important;
			color: white !important;
			box-shadow: none !important;
			border-left: none  !important;
		}
		input#rememberme {
			border: solid 1px #8900fc !important;
			color: #8900fc !important;
		}
		input[type=checkbox]:checked:before {
			content: "\f147";
			margin: -3px 0 0 -4px;
			color: #8900fc !important;
		}
		a:hover, .login #nav a:hover, .login h1 a:hover {
			color: #8900fc !important;
		}
		a {
			color: #ffffff !important;
		}
		@keyframes logslide {
		  0% {
			  transform: translatey(50px);
			  opacity: 0;
			  display: block;
		  }
		  50% {
			  opacity: 0;
		  }
		  100% {
			  transform: translate(0);
			  opacity: 1;
		  }
		}
		#login {
			margin: auto  !important;
			animation: logslide 0.9s ease ;
		}
		.login-footer-block {
			position: relative;
			z-index: 99;
			background: transparent;
			color: white;
			text-align: center;
			width: 300px;
			margin: auto !important;
			font-size: 1rem;
			animation: logslide 1.5s ease ;
			padding-top: 4rem !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_bg() { ?>
	<script>
        VANTA.TOPOLOGY({
        el: ".login",
        color: 0x6549e8,
        backgroundColor: 0x40622
        })
    </script>
<?php }
add_action( 'login_form', 'my_login_bg' );

function my_login_info() { ?>
	<html>
	<div class="login-footer-block">
	<p>Site created and maintained by <a href="https://searchstack.co.uk/" target="_blank">Search Stack Web Agency</a></p>
	</div>
	</html>
	<?php }
add_action( 'login_footer', 'my_login_info' );


add_filter( 'excerpt_length', function($length) {
    return 18;
} );


/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 
function wpdocs_codex_book_init() {
	$labels = array(
		'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Book', 'textdomain' ),
		'new_item'              => __( 'New Book', 'textdomain' ),
		'edit_item'             => __( 'Edit Book', 'textdomain' ),
		'view_item'             => __( 'View Book', 'textdomain' ),
		'all_items'             => __( 'All Books', 'textdomain' ),
		'search_items'          => __( 'Search Books', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
		'not_found'             => __( 'No books found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'book', $args );
}

add_action( 'init', 'wpdocs_codex_book_init' );


add_filter('register_post_type_args', 'movies_to_films', 10, 2);
function movies_to_films($args, $post_type){

    if ($post_type == 'book'){
    	//$arr[] = array('namee')
       //array_push($args['supports'],$arr);
    	// $args['supports']['slug11'] = 'films';
    	 $args['rewrite']['slug'] = 'films';
    }

    return $args;
}*/


// my code


add_action( 'wp_enqueue_scripts', 'wp734_register_scripts' );
function wp734_register_scripts() {
    wp_register_script( 
        'custom-script', 
        get_stylesheet_directory_uri() . '/search_podcast.js', 
        array( 'jquery' ) 
    );

    wp_localize_script( 
        'custom-script', 
        'OBJ', 
        array( 'ajaxurl' => admin_url( 'admin-ajax.php' ))
    );

    wp_enqueue_script('custom-script');
}
add_action( 'wp_ajax_my_ajax_action', 'wp343_handle_ajax' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'wp343_handle_ajax' );
function wp343_handle_ajax() { 
	$blog_posts_serch="";
  $index_catsearch = $_POST['search_title'];
  $catsearch = $_POST['selectedCat'];
   
    $args = array(
    'post_type'     => 'podcast',
    'post_status'   => 'publish',
    'orderby' => 'DESC',
    'posts_per_page' => '3',
    'paged' => 1,
    'meta_key'         => 'wporg_box_id',
	'meta_value'       => $catsearch,
    'search_prod_title' => $index_catsearch
);

add_filter( 'posts_where', 'title_filter', 10, 2 );
$blog_posts_serch = new WP_Query($args);
remove_filter( 'posts_where', 'title_filter', 10, 2 );
if ( $blog_posts_serch->have_posts() ) : 
     
 include('category-post-template-search.php');
   
     endif; 
     
    
    die;
}


function title_filter( $where, &$wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
    }
    return $where;
}

function openai_integration_shortcode() {
    $output = '<button id="openai-integration-generate">Generate Text</button>';
    $output .= '<div id="openai-integration-response" style="border: 1px solid #ccc; padding: 10px; margin-top: 10px; max-width: 600px; word-wrap: break-word;"></div>';
    return $output;
}
add_shortcode('openai-integration', 'openai_integration_shortcode');