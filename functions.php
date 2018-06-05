<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

add_filter('default_hidden_meta_boxes', 'show_hidden_meta_boxes', 10, 2);

function show_hidden_meta_boxes($hidden, $screen) {
    if ( 'post' == $screen->base ) {
        foreach($hidden as $key=>$value) {
            if ('postexcerpt' == $value) {
                unset($hidden[$key]);
                break;
            }
        }
    }

    return $hidden;
}

add_action('init', 'post_treatments', 0);
function post_treatments() {
  $labels = [
    'name' => _x('z', 'Tratamentos'),
    'singular_name' => _x('Tratamento', 'Tratamento'),
    'add_new' => _x('Adicionar Tratamento', 'Novo tratamento'),
    'add_new_item' => __('Novo Tratamento'),
    'edit_item' => __('Editar Tratamento'),
    'new_item' => __('Novo Tratamento'),
    'view_item' => __('Ver Tratamento'),
    'search_items' => __('Procurar Tratamentos'),
    'not_found' =>  __('Nenhum registro encontrado'),
    'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
    'parent_item_colon' => '',
    'menu_name' => 'Tratamentos'
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'public_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-products',
    'taxonomies' => ['category'],
    'supports' => ['title', 'thumbnail', 'excerpt', 'category', 'editor']
  ];

  register_post_type('tratamentos', $args);
  flush_rewrite_rules();
}