<?php
/**
 * Plugin Name: Aveonine Modulo de Campaña Slug
 * Plugin URI: https://github.com/franciscoblancojn/aveonline-module-campana-slug
 * Description: Agrega un modulo para agregar la url de campaña por pagina.
 * Version: 1.0.2
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
github_updater_plugin_wordpress([
    'basename'=>AVMCUS_BASENAME,
    'dir'=>AVMCUS_DIR,
    'file'=>"index.php",
    'path_repository'=>'franciscoblancojn/aveonline-module-campana-slug',
    'branch'=>'master',
    'token_array_split'=>[
        "g",
        "h",
        "p",
        "_",
        "G",
        "4",
        "W",
        "E",
        "W",
        "F",
        "p",
        "V",
        "U",
        "E",
        "F",
        "V",
        "x",
        "F",
        "U",
        "n",
        "b",
        "M",
        "k",
        "P",
        "R",
        "x",
        "o",
        "f",
        "t",
        "Y",
        "8",
        "z",
        "j",
        "t",
        "4",
        "E",
        "x",
        "b",
        "i",
        "9"
    ]
]);

add_action('elementor/widgets/register', function ($widgets_manager) {
    require_once __DIR__ . '/widgets/ave-slug-widget.php';
    $widgets_manager->register(new \Ave_Slug_Widget());
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'ave-slug-js',
        plugin_dir_url(__FILE__) . 'js/ave-slug-url.js',
        [],
        '1.0',
        true
    );
});