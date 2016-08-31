<?php
/*
Theme Name: Pharmacy Theme
Theme URI: http://pharmacycurrent.com
Author: Patrick Peters
Description: Wordpress theme built from bootstrap framework 
Tags: responsive, bootstrap, pharmacy
file: functions.php 
License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0)
License URI: http://creativecommons.org/licenses/by-sa/3.0/
 
Some other comments or urls here that will prove useful reminders to you or another developer
*/

//REGISTER WIDGETS
 if ( function_exists('register_sidebars') ) {
 register_sidebar(array(
 'name' => 'Footer Widget 1',
 'id' => 'footer1',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ));
 register_sidebar(array(
 'name' => 'Footer Widget 2',
 'id' => 'footer2',
 'before_widget' => '',
 'after_widget' => '',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ));
}	

//javascript enqueue
function pharmacy_enqueue() 
{
	wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery') );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.js', array('jquery') ); 
	wp_enqueue_script( 'jquery-rss-lib', get_template_directory_uri() . '/jquery-rss-gh-pages/lib/jquery-1.6.4.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'jquery-rss-src', get_template_directory_uri() . '/jquery-rss-gh-pages/src/jquery.rss.js', array( 'jquery' ) );
	wp_enqueue_script('rss-feed', get_template_directory_uri() . '/js/rss-feed.js', array( 'jquery' ) );
	wp_enqueue_script( 'cloudfare', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js', array( 'jquery' ) );
	wp_enqueue_script('mailchimp-validate', get_template_directory_uri() . '/js/mc-validate.js', array('jquery'));
	wp_enqueue_script('mailchimp-dynamic', get_template_directory_uri() . '/js/mc-dynamic.js', array('jquery'));
	wp_enqueue_script('rss-madness', get_template_directory_uri() . '/js/rss-feed-news.js', array('jquery'));
	wp_enqueue_script('resources', get_template_directory_uri() . '/js/resources.js', array('jquery'));
}
add_action('wp_footer', 'pharmacy_enqueue');

//Menu Registration
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' ),
      'secondary' => __( 'Secondary' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*** Add Bootstrap dropdown-menu class to submenu items **/
/**** See https://gist.github.com/johnmegahan/1597994 and http://goodandorgreat.wordpress.com/2012/01/12/update-2-using-twitter-bootstrap-dropdown-menus-with-wordpress/ */
add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
 
function bootstrap_setup(){
 
add_action( 'init', 'register_menu' );
function register_menu(){
register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
}
 
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
 
function start_lvl( &$output, $depth ) {
 
$indent = str_repeat( "\t", $depth );
$output	.= "\n$indent<ul class=\"dropdown-menu\">\n";
}
 
function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
$li_attributes = '';
$class_names = $value = '';
 
$classes = empty( $item->classes ) ? array() : (array) $item->classes;
$classes[] = ($args->has_children) ? 'dropdown' : '';
$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
$classes[] = 'menu-item-' . $item->ID;
 
 
$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
 
$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
 
$item_output = $args->before;
$item_output .= '<a'. $attributes .'>';
$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
$item_output .= $args->after;
 
$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
 
function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
if ( !$element )
return;
$id_field = $this->db_fields['id'];
 
//display this element
if ( is_array( $args[0] ) )
$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
else if ( is_object( $args[0] ) )
$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
$cb_args = array_merge( array(&$output, $element, $depth), $args);
call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
$id = $element->$id_field;
 
// descend only when the depth is right and there are childrens for this element
if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
foreach( $children_elements[ $id ] as $child ){
 
if ( !isset($newlevel) ) {
$newlevel = true;
//start the child delimiter
$cb_args = array_merge( array(&$output, $depth), $args);
call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
}
$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
}
unset( $children_elements[ $id ] );
}
 
if ( isset($newlevel) && $newlevel ){
//end the child delimiter
$cb_args = array_merge( array(&$output, $depth), $args);
call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
}
 
//end this element
$cb_args = array_merge( array(&$output, $element, $depth), $args);
call_user_func_array(array(&$this, 'end_el'), $cb_args);
}
}
 
}
 
endif;





function pharmacytheme_setup() 
{
	//CREATE CUSTOM IMAGE SIZES
	add_theme_support( 'post-thumbnails' );
add_image_size( 'medium_large', '768', '0', false ); 
add_image_size( 'medium_large', '768', '0', false ); 
add_image_size( 'post-thumbnail', '825', '510', array( "1", "") ); 
add_image_size( 'slider_image', '1200', '700', array( "center", "center") );  
}
add_action( 'wp_footer', 'pharmacytheme_setup' );

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );



	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );
