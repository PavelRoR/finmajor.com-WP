<?php 
/**
* загружаемые стили и скрипты
*/
 if(!is_admin()){
	 remove_action('wp_head', 'wp_print_scripts');
	 remove_action('wp_head', 'wp_print_head_scripts', 9);
	 //remove_action('wp_head', 'wp_enqueue_scripts', 1);
	 add_action('wp_footer', 'wp_print_scripts', 5);
	 //add_action('wp_footer', 'wp_enqueue_scripts', 5);
	 add_action('wp_footer', 'wp_print_head_scripts', 5);
	 //wp_deregister_script('jquery');
	  }

//  wp_deregister_script('jquery');
function load_styles_and_scripts() {
    // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	// wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	// wp_enqueue_script('jquery-2.1.1',  get_template_directory_uri().'/js/jquery-2.1.1.min.js');
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.min.js');
	
	// if(is_page('number-generator')) {
	// 	wp_enqueue_script('number-generator', get_template_directory_uri() . '/js/number-generator.js');
	// }

}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/*Добавление миниатюр*/
add_theme_support('post-thumbnails');

/*менюшки*/
register_nav_menu('main_menu', 'Главное меню сайта');
// register_nav_menu('footer_menu', 'Меню в подвале');
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
function my_wp_nav_menu_args( $args='' ){
	$args['container'] = '';
	return $args;
}
/* Цитата */
function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_action( 'excerpt_more', 'my_excerpt_more' );
function my_excerpt_more() {
    global $post;
    $link = get_permalink( $post->ID );
    // $more = " <a href='$link' class='excerpt-more'>Читать дальше</a>";
  
    return '...';
}

/*просмотры записей */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// длина заголовка
function the_title_excerpt($before = '', $after = '', $echo = true, $length = false) 
  {
    $title = get_the_title();

    if ( $length && is_numeric($length) ) {
        $title = substr( $title, 0, $length );
    }

    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_title_excerpt', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }
}
/* FAQ */
// function faq(){
// 	register_post_type('faq', array(
// 		'post_type' => 'post',
// 		'public' => true,
// 		'has_archive' => true,
// 	  	'show_in_menu'  => true,
// 		'menu_icon' => 'dashicons-welcome-learn-more',
// 		'supports' => array('title', 'editor', 'author','revisions','post-formats'),
// 		'labels' => array(
// 			'name' => 'FAQ',
// 			'all_items' => 'Все вопросы',
// 			'add_new' => 'Добавить новый',
// 			'add_new_item' => 'Добавление вопроса'
// 		)
// 	));
// }

// add_action('init', 'faq');

/* Консультанты */
// function consultants(){
// 	register_post_type('consultants', array(
// 		'post_type' => 'post',
// 		'public' => true,
// 		'has_archive' => true,
// 		'menu_icon' => 'dashicons-id',
// 		'supports' => array('title', 'editor', 'author','revisions','thumbnail'),
// 		'labels' => array(
// 			'name' => 'Консультанта',
// 			'all_items' => 'Все консультанты',
// 			'add_new' => 'Добавить консультанта',
// 			'add_new_item' => 'Добавить консультанта',
// 			'menu_name' => 'Консультанты'
// 		)
// 	));
// }

// add_action('init', 'consultants');

/* Курсы в записи */
// function cir(){
// 	register_post_type('cir', array(
// 		'post_type' => 'post',
// 		'public' => true,
// 		'has_archive' => true,
// 		'menu_icon' => 'dashicons-album',
// 		'supports' => array('title', 'author','revisions','thumbnail', 'custom-fields'),
// 		// 'taxonomies' => array('post_tag'),
// 		'labels' => array(
// 			'name' => 'Курсы в записи',
// 			'all_items' => 'Все курсы',
// 			'add_new' => 'Добавить новый',
// 			'add_new_item' => 'Добавление нового'
// 		)
// 	));
// }
// add_action('init', 'cir');

/*Виджеты
*add_theme_support('widgets');
*if(function_exists('register_sidebar'))
*    register_sidebar( array('name' => 'Слайдер'));*/

/* Кастомная страница входа в админ-панель */
function mv_custom_enter () { ?>
<style type="text/css">
    body.login {
        background: #2C2D33;
    }
</style>
<?php } 

add_action('login_enqueue_scripts', 'mv_custom_enter');

function my_login_logo(){
   echo '
   <style type="text/css">
        #login h1 a { background: url('. get_bloginfo('template_directory') .'/img/favicon.png) no-repeat 0 0 !important; height: 100px; width: 100px; }
    </style>';
}
add_action('login_head', 'my_login_logo');

function my_admin_logo() {
   echo '
    <style type="text/css">
        #header-logo { background:url('.get_bloginfo('template_directory').'/img/favicon.png) no-repeat 0 0 !important; }
    </style>';
}
add_action('admin_head', 'my_admin_logo');

function remove_page_from_query_string($query_string)
{ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }      
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');

/* redirect с http на https 
add_action('init', 'http_to_https_redirect');
function http_to_https_redirect(){
	if( is_ssl() ) return;

	if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') )
		wp_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ), 301 );
	else
		wp_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );

	exit;
}
*/
/*Замена http на https в контенте*/
add_filter('the_content', 'replace_url_to_https', 30);
function replace_url_to_https( $text ){
	$text = preg_replace('~http(://(?:www.)?'. preg_quote($_SERVER['HTTP_HOST']) .')~', 'https\1', $text );
	return $text;
}

/* Удаление версии ВП */
remove_action('wp_head', 'wp_generator'); // из заголовка
add_filter('the_generator', '__return_empty_string'); // из фидов и URL

/*Удаляем ?ver[xx-x]*/
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
/*Это для скриптов */
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
/*Это для стилей */
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


add_filter('the_generator', create_function('', 'return "";'));

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/* --------------------------------------------------------------------------
 * Отключаем REST API
 * -------------------------------------------------------------------------- */
/* Отключаем сам REST API */
add_filter('rest_enabled', '__return_false');

// ОТКЛЮЧАЕМ ФИЛЬТРЫ REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// ОТКЛЮЧАЕМ СОБЫТИЯ REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// ОТКЛЮЧАЕМ EMBEDS СВЯЗАННЫЕ С REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route');
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/* --------------------------------------------------------------------------
 * Отключаем Emojii
 * -------------------------------------------------------------------------- */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/* --------------------------------------------------------------------------
 * Удаляем лишнее из шапки
 * -------------------------------------------------------------------------- */
 /* Удаляет ссылки RSS-лент записи и комментариев */
remove_action( 'wp_head', 'feed_links', 2 ); 
/* Удаляет ссылки RSS-лент категорий и архивов */
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
/* Удаляет RSD ссылку для удаленной публикации */
remove_action( 'wp_head', 'rsd_link' ); 
/* Удаляет ссылку Windows для Live Writer */
remove_action( 'wp_head', 'wlwmanifest_link' ); 
/* Удаляет короткую ссылку */
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0); 
/* Удаляет информацию о версии WordPress */
remove_action( 'wp_head', 'wp_generator' ); 
/* Удаляет ссылки на предыдущую и следующую статьи */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/* Remove Images From Yoast Sitemap */
add_filter( 'wpseo_xml_sitemap_img', '__return_false' );

add_filter( 'xmlrpc_methods', function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );

/* Публикация Тикета сразу после отправки */
// add_filter('ns_ticket_data', 'mytheme_nanosupport_alter_ticket_status', 10 );
// function mytheme_nanosupport_alter_ticket_status($ticket_data) {
// 	$ticket_data['post_status'] = 'private';
// 	return $ticket_data;
// }
