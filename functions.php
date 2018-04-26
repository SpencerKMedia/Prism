<?php
function prism_theme_styles()
{
  wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.1', 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '0.00.058', 'all');
}
add_action('wp_enqueue_scripts', 'prism_theme_styles');
function prism_theme_scripts()
{
		wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, false);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script', 'https://js.skmcdn.xyz/Sites/SpencerKMedia/script.min.js', array('jquery'), '1.0.0.500', true);
}
add_action('wp_enqueue_scripts', 'prism_theme_scripts');

function prism_theme_support()
{
    /* post formats*/
    add_theme_support('post-formats', array(
        'aside',
        'quote'
    ));

    /* post thumbnails */
    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'project',
        'slider'
    ));

    add_theme_support('custom-logo');

    add_filter( 'get_custom_logo', 'change_logo_class' );
    function theme_prefix_the_custom_logo() {

    	if ( function_exists( 'the_custom_logo' ) ) {
    		the_custom_logo();
    	}

    }

    add_filter('get_custom_logo','change_logo_class');


    function change_logo_class($html)
    {
    	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
    	return $html;
    }

    /* HTML5 */
    add_theme_support('html5');

    /* Menus */
    add_theme_support('menus');

    add_theme_support('automatic-feed-links');

    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'prism_theme_support');



function prism_translation()
{
    load_child_theme_textdomain('prism', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'prism_translation');

function prism_nav_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'prism'),
        'floating' => __('Floating Menu', 'prism'),
        'footer' => __('Footer Navigation', 'prism')
    ));
}
add_action('after_setup_theme', 'prism_nav_menus');

function new_excerpt_more($more){
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 200);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'...';
return $excerpt;
}

function skm_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="Search here" value="' . get_search_query() . '" name="s" id="s" require>
    <button class="btn btn-lg btn-site btn-grad" type="submit" id="searchsubmit"><span class="fa fa-search"></span> Search</button>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'skm_search_form' );

add_action( 'widgets_init', 'register_sidebar');
function register_the_sidebar(){
  register_sidebar(array(
    'id'      =>      'primary',
    'name'    =>      __( 'Primary Sidebar' ),
    'description'=>   __( 'A short description of the sidebar.' ),
    'before_widget'=> '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'id'      =>      'portfolio',
    'name'    =>      __( 'Portfolio Sidebar' ),
    'description'=>   __( 'A short description of the sidebar.' ),
    'before_widget'=> '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="">',
    'after_title'   => '</h4>'
  ));
}

function redirect_login_page() {
	$login_page  = home_url( '/login/' );
	$page_viewed = basename($_SERVER['REQUEST_URI']);

	if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
		wp_redirect($login_page);
		exit;
	}
}
add_action('init','redirect_login_page');
function login_failed() {
	$login_page  = home_url( '/login/' );
	wp_redirect( $login_page . '?login=failed' );
	exit;
}
add_action( 'wp_login_failed', 'login_failed' );

function verify_username_password( $user, $username, $password ) {
	$login_page  = home_url( '/login/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);
function logout_page() {
	$login_page  = home_url( '/login/' );
	wp_redirect( $login_page . "?login=false" );
	exit;
}
add_action('wp_logout','logout_page');
?>
