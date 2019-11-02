<?php


if(file_exists(get_template_directory() . '/inc/vc-element.php')){
	require_once get_template_directory() . '/inc/vc-element.php';
}
if(file_exists(get_template_directory() . '/inc/vc-eleme-output.php')){
	require_once get_template_directory() . '/inc/vc-eleme-output.php';
}
/**
 * project2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package project2
 */

if ( ! function_exists( 'project2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function project2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on project2, use a find and replace
		 * to change 'project2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'project2', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'project2' ),
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
		add_theme_support( 'custom-background', apply_filters( 'project2_custom_background_args', array(
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
add_action( 'after_setup_theme', 'project2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function project2_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'project2_content_width', 640 );
}
add_action( 'after_setup_theme', 'project2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function project2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'project2' ),
		'id'            => 'sidebar_1',
		'description'   => esc_html__( 'Add widgets here.', 'project2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer1', 'project2' ),
		'id'            => 'sidebar_2',
		'description'   => esc_html__( 'Add widgets here.', 'project2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'project2_widgets_init' );

/**
 * Enqueue scripts and styles.
 	
		
		
 */
 
function project2_scripts() {
	wp_enqueue_style( 'project2-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', '215', true );
	wp_enqueue_style( 'project2-skl', get_template_directory_uri() . '/assets/css/skel.css', '215', true );
	wp_enqueue_style( 'project2-stl', get_template_directory_uri() . '/assets/css/style.css', '215', true );
	wp_enqueue_style( 'project2-xla', get_template_directory_uri() . '/assets/css/style-xlarge.css', '215', true );



	wp_enqueue_script( 'project2-jquery', get_template_directory_uri() . 'assets/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'project2-skel', get_template_directory_uri() . 'assets/js/skel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'project2-layers', get_template_directory_uri() . 'assets/js/skel-layers.min.js', array(), '20151215', true );
	wp_enqueue_script( 'project2-inits', get_template_directory_uri() . 'assets/js/init.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'project2_scripts' );

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


//redux add
if (!class_exists('redux-framework') && file_exists(dirname(__FILE__) . '/redux-framework-master/ReduxCore/framework.php')){
	require_once (dirname(__FILE__) . '/redux-framework-master/ReduxCore/framework.php');
}
if (!isset($redux_demo) && file_exists(dirname(__FILE__) . '/redux-framework-master/sample/functions-confiq.php')){
	require_once (dirname(__FILE__) . '/redux-framework-master/sample/functions-confiq.php');
}








////widget footer
class simple2_widget extends WP_Widget{
function __construct(){
parent::__construct('simple2_widget',esc_html__('simple2 widget','mamurjor'),array(
'discription' => esc_html__('This is simple2 widget','mamurjor')
)
);
}


public function widget($args,$instance){
echo $args ['before_widget'];
if(!empty($instance['title'])){
echo $args ['before_title'].apply_filters('widget_title',$instance['title']).$args['after_title'];
} ?>

<div class="g-ytsubscribe" data-channel="<?php echo $instance['name']; ?>"></div>
<div class="fb-like" data-href="<?php echo $instance['Facebook_name']; ?>/" data-width="200" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
<?php
echo $args ['after_widget'];
}

public function form($instance){
$title = ! empty($instance['title'])? $instance ['title']: esc_html__('Title','mamurjor');
$youtube_name = ! empty($instance['name'])? $instance ['name']: esc_html__('Name','mamurjor');
$facebook_name = ! empty($instance['Facebook_name'])? $instance ['Facebook_name']: esc_html__('Facebook name','mamurjor');


?>




<p>
<lable
for='<?php echo esc_attr($this->get_field_id('title'))?>'
>
<?php esc_attr_e('Title','mamurjor'); ?>
</lable>
<input 

class ='widefat'
id= '<?php echo esc_attr($this->get_field_id('title'));?>'
name ='<?php echo esc_attr($this->get_field_name('title'));?>'
type="text"
value = '<?php echo esc_attr($title)?>'
>
</p>

<p>
<lable
for = '<?php echo esc_attr($this->get_field_id('name'))?>'
>
</lable>
<?php esc_attr_e('Youtube Names','mamurjor'); ?>
<input 
class = 'widefat'
id =	'<?php echo esc_attr($this->get_field_id('name'))?>'
name = <?php echo esc_attr($this->get_field_name('name'))?>
type="text"
value = '<?php echo esc_attr($youtube_name)?>'
>

</p>

<p>
<lable
for = '<?php echo esc_attr($this->get_field_id('sname'))?>'
>
</lable>
<?php esc_attr_e('Facebook Names','mamurjor'); ?>
<input 
class = 'widefat'
id =	'<?php echo esc_attr($this->get_field_id('Facebook_name'))?>'
name = <?php echo esc_attr($this->get_field_name('Facebook_name'))?>
type="text"
value = '<?php echo esc_attr($facebook_name)?>'
>

</p>




<?php }

public function update($new_instance,$old_instance){
$instance = array();
$instance ['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
$instance ['name'] = (!empty($new_instance['title']))? strip_tags($new_instance['name']):'';
$instance ['Facebook_name'] = (!empty($new_instance['title']))? strip_tags($new_instance['Facebook_name']):'';

return $instance;
}

}


function register2_simple_widgets(){
register_widget('simple2_widget');
}
add_action('widgets_init','register2_simple_widgets');
// End simple2 widget

