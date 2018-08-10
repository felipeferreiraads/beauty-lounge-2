<?php
include('inc/form-contact.php');

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

add_action('init', 'custom_post_types', 0);
function custom_post_types() {
  $labels = [
    'name' => _x('Tratamentos', 'Tratamentos'),
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

    $labels = [
        'name' => _x('Funcionários', 'Funcionários'),
        'singular_name' => _x('Funcionário', 'Funcionário'),
        'add_new' => _x('Adicionar Funcionário', 'Novo funcionário'),
        'add_new_item' => __('Novo Funcionário'),
        'edit_item' => __('Editar Funcionário'),
        'new_item' => __('Novo Funcionário'),
        'view_item' => __('Ver Funcionário'),
        'search_items' => __('Procurar Funcionários'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Equipe'
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
        'menu_icon' => 'dashicons-admin-users',
        'taxonomies' => ['category'],
        'supports' => ['title', 'thumbnail', 'excerpt', 'category', 'editor']
    ];

  register_post_type('equipe', $args);
  flush_rewrite_rules();

    $labels = [
        'name' => _x('Depoimentos', 'Depoimentos'),
        'singular_name' => _x('Depoimento', 'Depoimento'),
        'add_new' => _x('Adicionar Depoimento', 'Novo Depoimento'),
        'add_new_item' => __('Novo Depoimento'),
        'edit_item' => __('Editar Depoimento'),
        'new_item' => __('Novo Depoimento'),
        'view_item' => __('Ver Depoimento'),
        'search_items' => __('Procurar Depoimentos'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Depoimentos'
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
        'menu_icon' => 'dashicons-admin-users',
        'taxonomies' => ['category'],
        'supports' => ['title', 'thumbnail', 'excerpt', 'category', 'editor']
    ];

    register_post_type('depoimentos', $args);
    flush_rewrite_rules();
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'  => 'Opções',
        'menu_title'  => 'Opções',
        'menu_slug'   => 'options',
        'capability'  => 'edit_posts',
        'redirect'    => true
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Banners',
        'menu_title'  => 'Banners',
        'parent_slug' => 'options',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Informações',
        'menu_title'  => 'Informações',
        'parent_slug' => 'options',
    ));
}

function custom_gallery( $output, $atts) {
	$output = "<div class=\"carousel\">";
    $posts = get_posts(['include' => $atts['ids'], 'post_type' => 'attachment']);

	foreach($posts as $imagePost):
        $output .= "<img src='".wp_get_attachment_image_src($imagePost->ID, 'extralarge')[0]."'/>";
    endforeach;

    $output .= "</div>";

    return $output;
}

add_filter( 'post_gallery', 'custom_gallery', 10, 2 );
