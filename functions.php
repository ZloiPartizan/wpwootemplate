<?php
/**
 * swimmers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swimmers
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';

/**
 * Подключение виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';

/**
 * Подключение стилей и скриптов
 */
require get_template_directory() . '/includes/enqueue-script-style.php';

/**
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';
require get_template_directory() . '/includes/ajax.php';

/**
 * Подключение навигации
 */
require get_template_directory() . '/includes/navigation.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}

/**
 * Carbon Fields все функции
 */ 
add_action( 'after_setup_theme', 'crb_load');
function crb_load(){
    load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'swimmers_register_custom_fields' );
function swimmers_register_custom_fields() {
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
    require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

add_action('init', 'create_global_variable');
function create_global_variable() {
    global $swimmers_vars;
    $swimmers_vars = [
        'footer_tel' => carbon_get_theme_option('est_footer_tel'),
        'whats_url'=> carbon_get_theme_option('swimmers_whats_url'),
        'tg_url'=> carbon_get_theme_option('swimmers_tg_url')
    ];
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('coach', [
    'labels' => [
      'name'               => 'Тренеры', // Основное название для типа записи
      'singular_name'      => 'Тренер', // Название для одной записи этого типа
      'add_new'            => 'Добавить тренера', // для добавления новой записи
      'add_new_item'       => 'Добавление тренера', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование тренера', // для редактирования типа записи
      'new_item'           => 'Новый тренер', // текст новой записи
      'view_item'          => 'Смотреть тренера', // для просмотра записи этого типа.
      'search_items'       => 'Искать тренера', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'menu_name'          => 'Тренеры', // название меню
    ],
    'menu_icon'          => 'dashicons-groups',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
    'has_archive'        => true, // Общая страница
    'rewrite'            => ['slug' => 'coaches']
   ] );
}

add_action( 'init', 'register_post_types2' );
function register_post_types2() {
  register_post_type('pool', [
    'labels' => [
      'name'               => 'Бассейны', // Основное название для типа записи
      'singular_name'      => 'Бассейн', // Название для одной записи этого типа
      'add_new'            => 'Добавить бассейн', // для добавления новой записи
      'add_new_item'       => 'Добавление бассейн', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование бассейн', // для редактирования типа записи
      'new_item'           => 'Новый бассейн', // текст новой записи
      'view_item'          => 'Смотреть бассейн', // для просмотра записи этого типа.
      'search_items'       => 'Искать бассейн', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'menu_name'          => 'Бассейны', // название меню
    ],
    'menu_icon'          => 'dashicons-universal-access-alt',
    'public'             => true,
    'menu_position'      => 6,
    'supports'           => ['title', 'thumbnail', 'page-attributes'],
    'has_archive'        => true, // Общая страница
    'rewrite'            => ['slug' => 'pools']
   ] );
}



