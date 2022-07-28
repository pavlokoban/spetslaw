<?php
/**
 * undercoverlawyer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package undercoverlawyer
 */

if ( ! function_exists( 'undercoverlawyer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function undercoverlawyer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on undercoverlawyer, use a find and replace
		 * to change 'undercoverlawyer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'undercoverlawyer', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary Menu', 'undercoverlawyer' ),
            'bottom_menu' => esc_html__( 'Bottom Menu', 'undercoverlawyer' ),
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
		add_theme_support( 'custom-background', apply_filters( 'undercoverlawyer_custom_background_args', array(
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
add_action( 'after_setup_theme', 'undercoverlawyer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function undercoverlawyer_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'undercoverlawyer_content_width', 640 );
}
add_action( 'after_setup_theme', 'undercoverlawyer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function undercoverlawyer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'undercoverlawyer' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'undercoverlawyer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'undercoverlawyer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function undercoverlawyer_scripts() {
	//wp_enqueue_style( 'undercoverlawyer-style', get_stylesheet_uri() );

	wp_enqueue_script( 'undercoverlawyer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'undercoverlawyer-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'undercoverlawyer_scripts' );

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

// thank you redirect
  add_action('wp_footer', 'thank_you_redirect');
  function thank_you_redirect(){ ?>
      <script>
          document.addEventListener('wpcf7mailsent', function(event) {
              if(event.detail.contactFormId == '408') {
                  location = '<?php echo get_permalink( get_page_by_path( 'thank-you-contact-me' ) );?>';
              }
              else if(event.detail.contactFormId == '6') {
                  location = '<?php echo get_permalink( get_page_by_path( 'thank-you-footer' ) );?>';
              }
              else if(event.detail.contactFormId == '294') {
                  location = '<?php echo get_permalink( get_page_by_path( 'thank-you-popup' ) );?>';
              }
			 			  			  

          }, false);
      </script>
      <?php
  }
// thank you redirect

// css js include
function wp_enqueue_scripts_fun() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(),null);
    wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:400,500,700', array(), null);
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), null);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css',array(),null);
    wp_enqueue_style('style-css', get_template_directory_uri().'/style.css', array(), null);
    wp_enqueue_style('responsive-css', get_template_directory_uri().'/css/responsive.css', array(), null);
    wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.min.css', array('bootstrap-css'),null);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),null,true);
    wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.min.js', array('jquery'),null,true);
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array(),null,true);
}
add_action('wp_enqueue_scripts', 'wp_enqueue_scripts_fun',11);
//! css js include

// remove script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// remove script

// add theme option menu
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Theme Options');
}
// add theme option menu

// custom permalinks only for practice-area post type
function custom_permalinks_exclude_post_type_fun( $post_type ) {
    if ( $post_type == 'practice-areas' || $post_type == 'city' ) {
        return '__false';
    }
    return '__true';
}
add_filter( 'custom_permalinks_exclude_post_type', 'custom_permalinks_exclude_post_type_fun');
// custom permalinks only for practice-area post type

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// breadcrumbs
function breadcrumbs_func() { ob_start();
    if (function_exists('bcn_display') && !is_front_page() ) { ?>
        <div class="breadcrumbs-main">
            <div class="container container-2">
                <div class='breadcrumbs' typeof='BreadcrumbList' vocab='http://schema.org/'>
                    <?php bcn_display(); ?>
                </div>
            </div>
        </div>
        <?php
    }
    return ob_get_clean();
}
add_shortcode('breadcrumbs', 'breadcrumbs_func');
// breadcrumbs

// page menu order
function custom_book_column( $column, $post_id ) {
    global $post;

    switch ( $column ) {
        case 'menu_order' :
            echo  $post->menu_order;
            break;
    }
}
function set_custom_edit_book_columns($columns) {
    //unset( $columns['author'] );
    $columns['menu_order'] = __( 'Menu Order', 'your_text_domain' );
    return $columns;
}

function my_movie_sortable_columns( $columns ) {
    $columns['menu_order'] = 'menu_order';
    return $columns;
}

add_action( 'manage_page_posts_custom_column' , 'custom_book_column', 100, 2 );
add_filter( 'manage_page_posts_columns', 'set_custom_edit_book_columns' );
add_filter( 'manage_edit-page_sortable_columns', 'my_movie_sortable_columns' );
// page menu order

// register post type
add_action( 'init', 'codex_register_type_init' );
function codex_register_type_init() {
    $lbl_pd = array(
        'name'               => _x( 'Practice Area', 'post type general name', 'undercoverlawyer' ),
        'singular_name'      => _x( 'Practice Area', 'post type singular name', 'undercoverlawyer' ),
        'menu_name'          => _x( 'Practice Area', 'admin menu', 'undercoverlawyer' ),
        'name_admin_bar'     => _x( 'Practice Area', 'add new on admin bar', 'undercoverlawyer' ),
        'add_new'            => _x( 'Add New', 'Practice Area', 'undercoverlawyer' ),
        'add_new_item'       => __( 'Add New Practice Area', 'undercoverlawyer' ),
        'new_item'           => __( 'New Practice Area', 'undercoverlawyer' ),
        'edit_item'          => __( 'Edit Practice Area', 'undercoverlawyer' ),
        'view_item'          => __( 'View Practice Area', 'undercoverlawyer' ),
        'all_items'          => __( 'All Practice Area', 'undercoverlawyer' ),
        'search_items'       => __( 'Search Practice Area', 'undercoverlawyer' ),
        'parent_item_colon'  => __( 'Parent Practice Area:', 'undercoverlawyer' ),
        'not_found'          => __( 'No Practice Area found.', 'undercoverlawyer' ),
        'not_found_in_trash' => __( 'No Practice Area found in Trash.', 'undercoverlawyer' )
    );
    $args_pd = array(
        'labels'             => $lbl_pd,
        'description'        => __( 'Description.', 'undercoverlawyer' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'practice-areas', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => true,
        'menu_position'      => null,
        'menu_icon'          => __( 'dashicons-welcome-learn-more', 'undercoverlawyer' ),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' )
    );
    register_post_type( 'practice-areas', $args_pd );
}
// register post type

$lbl_city = array(
    'name'               => _x( 'City', 'post type general name', 'undercoverlawyer' ),
    'singular_name'      => _x( 'City', 'post type singular name', 'undercoverlawyer' ),
    'menu_name'          => _x( 'City', 'admin menu', 'undercoverlawyer' ),
    'name_admin_bar'     => _x( 'City', 'add new on admin bar', 'undercoverlawyer' ),
    'add_new'            => _x( 'Add New', 'City', 'undercoverlawyer' ),
    'add_new_item'       => __( 'Add New City', 'undercoverlawyer' ),
    'new_item'           => __( 'New City', 'undercoverlawyer' ),
    'edit_item'          => __( 'Edit City', 'undercoverlawyer' ),
    'view_item'          => __( 'View City', 'undercoverlawyer' ),
    'all_items'          => __( 'All City', 'undercoverlawyer' ),
    'search_items'       => __( 'Search City', 'undercoverlawyer' ),
    'parent_item_colon'  => __( 'Parent City:', 'undercoverlawyer' ),
    'not_found'          => __( 'No City found.', 'undercoverlawyer' ),
    'not_found_in_trash' => __( 'No City found in Trash.', 'undercoverlawyer' )
);

$args_city = array(
    'labels'             => $lbl_city,
    'description'        => __( 'Description.', 'undercoverlawyer' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'city', 'with_front' => false ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
    'menu_icon'          => __( 'dashicons-store', 'undercoverlawyer' ),
);

register_post_type( 'city', $args_city );

$lbl_cities = array(
    'name'              => _x( 'Cities', 'taxonomy general name', 'undercoverlawyer' ),
    'singular_name'     => _x( 'Cities', 'taxonomy singular name', 'undercoverlawyer' ),
    'search_items'      => __( 'Search Cities', 'undercoverlawyer' ),
    'all_items'         => __( 'All Cities', 'undercoverlawyer' ),
    'parent_item'       => __( 'Parent Cities', 'undercoverlawyer' ),
    'parent_item_colon' => __( 'Parent Cities:', 'undercoverlawyer' ),
    'edit_item'         => __( 'Edit Cities', 'undercoverlawyer' ),
    'update_item'       => __( 'Update Cities', 'undercoverlawyer' ),
    'add_new_item'      => __( 'Add New Cities', 'undercoverlawyer' ),
    'new_item_name'     => __( 'New Cities Name', 'undercoverlawyer' ),
    'menu_name'         => __( 'Cities', 'undercoverlawyer' ),
);

$args_cities = array(
    'public'            => false,
    'hierarchical'      => true,
    'labels'            => $lbl_cities,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'cities' ),
);

register_taxonomy( 'cities', array( 'city' ), $args_cities );




// active class
function my_secondary_menu_classes( $classes, $item ) {
    global $post;
    // blog single page
    $classes[] =  get_post_type();
    if ( $item->title == 'Blog' && ( is_singular('post') || is_archive() )  ) {
        $classes[] = 'current-menu-item';
    }
    
    if ( $item->title == 'Practice Areas' && ( is_singular('city') )  ) {
        $classes[] = 'current-menu-item';
    }
    //echo '<pre>'; print_r($item); echo '</pre>';
    return $classes;
}
add_filter( 'nav_menu_css_class', 'my_secondary_menu_classes', 10, 2 );
// active class

// wp list page custom meta box
class WPSE_130877_Custom_Walker extends Walker_Page {

    function start_el( &$output, $page, $depth, $args, $current_page = 0 ) {
        if ( $depth )
            $indent = str_repeat("\t", $depth);
        else
            $indent = '';
        extract($args, EXTR_SKIP);
        $css_class = array('page_item', 'page-item-'.$page->ID);
        if ( !empty($current_page) ) {
            $_current_page = get_post( $current_page );
            if ( in_array( $page->ID, $_current_page->ancestors ) )
                $css_class[] = 'current_page_ancestor';
            if ( $page->ID == $current_page )
                $css_class[] = 'current_page_item';
            elseif ( $_current_page && $page->ID == $_current_page->post_parent )
                $css_class[] = 'current_page_parent';
        }
        elseif ( $page->ID == get_option('page_for_posts') ) {
            $css_class[] = 'current_page_parent';
        }

        $css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
        $icon_class = get_post_meta($page->ID, 'icon_class', true); //Retrieve stored icon class from post meta

        $output .= $indent . '<li class="' . $css_class . '">';
        $output .= '<a href="' . get_permalink($page->ID) . '">' . $link_before;

        if($icon_class){ //Test if $icon_class exists
            $output .= '<span class="' . $icon_class . '"></span>'; //If it exists output a span with the $icon_class attached to it
        }
        //custom meta box
        $output .= get_post_meta( $page->ID, 'h1', true );
        //custom meta box
        $output .= $link_after . '</a>';

        if ( !empty($show_date) ) {
            if ( 'modified' == $show_date )
                $time = $page->post_modified;
            else
                $time = $page->post_date;
            $output .= " " . mysql2date($date_format, $time);
        }
    }
}

// wp list page custom meta box