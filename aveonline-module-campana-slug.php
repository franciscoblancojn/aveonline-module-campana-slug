<?php
/**
 * Plugin Name: Aveonine Modulo de Campaña Slug
 * Plugin URI: https://github.com/franciscoblancojn/aveonline-module-campana-slug
 * Description: Agrega un modulo para agregar la url de campaña por pagina.
 * Version: 1.3.0
 * Author: franciscoblancojn
 * Author URI: https://franciscoblanco.vercel.app/
 * Text Domain: aveonine-modulo-campana-slug
 */

if (!defined('ABSPATH')) exit;


//AVMCUS_
define("AVMCUS_KEY",'AVMCUS');
define("AVMCUS_LOG",true);
define("AVMCUS_LOG_COUNT",1000);
define("AVMCUS_BASENAME",plugin_basename(__FILE__));
define("AVMCUS_DIR",plugin_dir_path( __FILE__ ));
define("AVMCUS_URL",plugin_dir_url(__FILE__));
define("AVMCUS_URL_REGISTER",'https://guias.aveonline.co/registrarse');

require_once AVMCUS_DIR . 'update.php';
github_updater_plugin_wordpress_function_v1([
    'basename'=>AVMCUS_BASENAME,
    'dir'=>AVMCUS_DIR,
    'file'=>"aveonline-module-campana-slug.php",
    'path_repository'=>'franciscoblancojn/aveonline-module-campana-slug',
    'branch'=>'master',
]);

function AVMCUS_get_version() {
    $plugin_data = get_plugin_data( __FILE__ );
    $plugin_version = $plugin_data['Version'];
    return $plugin_version;
}
add_action('elementor/widgets/register', function ($widgets_manager) {
    require_once __DIR__ . '/widgets/ave-slug-widget.php';
    $widgets_manager->register(new \Ave_Slug_Widget());
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'ave-slug-js',
        plugin_dir_url(__FILE__) . 'js/ave-slug-url.js',
        [],
        AVMCUS_get_version(),
        true
    );
});