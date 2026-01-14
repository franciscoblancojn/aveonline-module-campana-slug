<?php

use Elementor\Controls_Manager;
use Elementor\Element_Base;

add_action('elementor/element/common/_section_style/after_section_end', function ($element) {

    $element->start_controls_section(
        'ave_slug_by_page_url_section',
        [
            'label' => 'URL personalizada botones',
            'tab' => Controls_Manager::TAB_ADVANCED,
        ]
    );

    $element->add_control(
        'ave_slug_by_page_url_base',
        [
            'label' => 'Url Base',
            'type' => Controls_Manager::TEXT,
            'default'=>'https://guias.aveonline.co/registrarse?campana=',
            'description' => 'Url basica para redireccionamiento',
        ]
    );
    $element->add_control(
        'ave_slug_by_page_slug',
        [
            'label' => 'Nueva URL para botones',
            'type' => Controls_Manager::TEXT,
            'placeholder' => 'ave-slug',
            'description' => 'Slug para redireccionamiento',
        ]
    );


    $element->end_controls_section();

}, 10, 1);
