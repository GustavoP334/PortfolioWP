<?php

function post_customizado()
{
    register_post_type('projetos',
        array(
            'labels' => array(
                'name' => 'Projetos',
                'add_new' => 'Adicionar novo Projeto',
                'add_new_item' => 'Adicionar novo Projeto',
                'edit_item' => 'Editar projeto'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-clipboard'
        )
    );
}
add_action('init','post_customizado');

function adicionando_recursos_ao_tema()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'adicionando_recursos_ao_tema');

function registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init', 'registrando_menu');
