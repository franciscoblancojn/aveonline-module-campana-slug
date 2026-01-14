<?php

add_action('wp_enqueue_scripts', function () {

    if (!is_singular()) return;

    wp_enqueue_script(
        'elementor-ave-slug-url',
        plugin_dir_url(__FILE__) . '../js/ave-slug-url.js',
        ['jquery'],
        '1.0',
        true
    );

    // Obtener el post actual
    global $post;

    $document = \Elementor\Plugin::instance()->documents->get($post->ID);
    if (!$document) return;

    $settings = $document->get_settings();

    $url = $settings['ave_slug_by_page_url_base'] ?? '';
    $slug = $settings['ave_slug_by_page_slug'] ?? '';

    if ($url && $slug) {
        wp_localize_script(
            'elementor-ave-slug-url',
            'ElementorAveSlugURL',
            [
                'url' => esc_url($url.$slug),
            ]
        );
    }
});
