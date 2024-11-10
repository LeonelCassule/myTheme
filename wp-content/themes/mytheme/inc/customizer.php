<?php 

function customize_register($wp_customize) {

    //Rodapé
    $wp_customize -> add_section('footer', array(
        'title' => __('Rodapé', 'myTheme'),
        'description' => sprintf(__('Opções para o rodapé','myTheme')),
        'priority' => 20
    ));

    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Meu tema de WordPress', 'myTheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_title',array(
        'label' => __('Título do rodapé', 'myTheme'),
        'section' => 'footer',
        'priority' => 1
    ));

    $wp_customize -> add_setting('footer_text', array(
        'default' => _x('Leonel Cassul Web Developer With WordPress', 'myTheme'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text',array(
        'label' => __('Texto do rodapé', 'myTheme'),
        'section' => 'footer',
        'priority' => 2
    ));
}

add_action('customize_register','customize_register');