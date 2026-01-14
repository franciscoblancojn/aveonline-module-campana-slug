<?php
/**
 * Plugin Name: Aveonine Modulo de Campaña Slug
 * Plugin URI: https://github.com/franciscoblancojn/aveonline-module-campana-slug
 * Description: Agrega un modulo para agregar la url de campaña por pagina.
 * Version: 1.0.0
 * Author: franciscoblancojn
 * Author URI: https://franciscoblanco.vercel.app/
 * Text Domain: aveonine-modulo-campana-slug
 */

if (!defined('ABSPATH')) exit;

// Verificar Elementor
add_action('plugins_loaded', function () {
    if (!did_action('elementor/loaded')) {
        return;
    }

    require_once __DIR__ . '/includes/controls.php';
    require_once __DIR__ . '/includes/frontend.php';
});
