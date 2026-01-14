<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Ave_Slug_Widget extends Widget_Base {

    public function get_name() {
        return 'ave_slug_widget';
    }

    public function get_title() {
        return 'Ave Campaign Slug';
    }

    public function get_icon() {
        return 'eicon-link';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Configuración de campaña',
            ]
        );

        $this->add_control(
            'url_replace',
            [
                'label' => 'URL a remplasar',
                'type' => Controls_Manager::TEXT,
                'default' => AVMCUS_URL_REGISTER,
            ]
        );
        $this->add_control(
            'url_base',
            [
                'label' => 'URL Base',
                'type' => Controls_Manager::TEXT,
                'default' => AVMCUS_URL_REGISTER.'?campana=',
            ]
        );

        $this->add_control(
            'slug',
            [
                'label' => 'Slug',
                'type' => Controls_Manager::TEXT,
                'placeholder' => 'ave-slug',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if (empty($settings['slug'])) return;

        $final_url = esc_url($settings['url_base'] . $settings['slug']);
        ?>
        <div class="ave-slug-widget"
             data-ave-url-replace="<?php echo $settings['url_replace']; ?>"
             data-ave-url="<?php echo $final_url; ?>">
        </div>
        <?php
    }
}
