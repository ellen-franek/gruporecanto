<?php

function debug($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
    define('TEMPLATE', get_bloginfo('template_url') . '/');
    define('HOME', get_bloginfo('url') . '/');

/*-----------------------------------------------------------------------------------*/
/* Criando Option Informações Gerais
/*-----------------------------------------------------------------------------------*/

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Informações Gerais',
        'menu_title' 	=> 'Informações Gerais',
        'menu_slug' 	=> 'informacoes_gerais',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false
    ));
}

/*-----------------------------------------------------------------------------------*/
/* Registra menu
/*-----------------------------------------------------------------------------------*/
function register_my_menus() { 
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

/*-----------------------------------------------------------------------------------*/
/* Imagem Destacada
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');



/*-----------------------------------------------------------------------------------*/
/* Sidebars
/*-----------------------------------------------------------------------------------*/
add_action('widgets_init', 'my_sidebars');
function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Sidebar Blog',
            'id' => 'sidebar-blog',
            'description' => 'Sidebar para Blog',
            'after_widget' => '',
            'before_widget' => '',
        )
    );
}
// Remove update notifications for specific
// function filter_plugin_updates( $value ) {
//     unset( $value->response['admin-columns-pro/admin-columns-pro.php'] );
//     unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
//     return $value;
// }
// add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');


   function remove_nofollow($string) {
	$string = str_ireplace(' rel="nofollow"', '', $string);
	return $string;
}
add_filter('the_content', 'remove_nofollow');




// Remove Query Strings
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
     $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Remove RSD Links
remove_action( 'wp_head', 'rsd_link' ) ;

// Disable Emoticons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove Shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Disable Embeds
function disable_embed(){
    wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed' );

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Hide WordPress Version
remove_action( 'wp_head', 'wp_generator' ) ;

// Remove WLManifest Link
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

// Remove JQuery Migrate
function deregister_qjuery() { 
    if ( !is_admin() ) {
    wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'deregister_qjuery');

// Disable Self Pingback
function disable_pingback( &$links ) {
    foreach ( $links as $l => $link )
    if ( 0 === strpos( $link, get_option( 'home' ) ) )
    unset($links[$l]);
}
add_action( 'pre_ping', 'disable_pingback' );

// Disable Heartbeat
function stop_heartbeat() {
    wp_deregister_script('heartbeat');
}
add_action( 'init', 'stop_heartbeat', 1 );

// Disable Dashicons on Front-end
function wpdocs_dequeue_dashicon() {
    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

// Disable Contact Form 7 JS/CSS
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function return_canon () {
    $canon_page = get_pagenum_link(1);
    return $canon_page;
}
    
function canon_paged() {
    if (is_paged()) {
        add_filter( 'wpseo_canonical', 'return_canon' );
    }
}

add_filter('wpseo_head','canon_paged');


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDP8UGsVc0xP00AG03ZeTd6lSNlRz-npUo');
}
add_action('acf/init', 'my_acf_init');