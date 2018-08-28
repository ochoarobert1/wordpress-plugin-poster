<?php

$labels = array(
    'name'                  => _x( 'Slides', 'Post Type General Name', 'wordpress-carousel-poster' ),
    'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'wordpress-carousel-poster' ),
    'menu_name'             => __( 'Slides', 'wordpress-carousel-poster' ),
    'name_admin_bar'        => __( 'Slides', 'wordpress-carousel-poster' ),
    'archives'              => __( 'Archivo de Slides', 'wordpress-carousel-poster' ),
    'attributes'            => __( 'Atributo de Slide', 'wordpress-carousel-poster' ),
    'parent_item_colon'     => __( 'Slide Padre:', 'wordpress-carousel-poster' ),
    'all_items'             => __( 'Todos los Slides', 'wordpress-carousel-poster' ),
    'add_new_item'          => __( 'Agregar Nuevo Slide', 'wordpress-carousel-poster' ),
    'add_new'               => __( 'Agregar Nuevo', 'wordpress-carousel-poster' ),
    'new_item'              => __( 'Nuevo Slide', 'wordpress-carousel-poster' ),
    'edit_item'             => __( 'Editar Slide', 'wordpress-carousel-poster' ),
    'update_item'           => __( 'Actualizar Slide', 'wordpress-carousel-poster' ),
    'view_item'             => __( 'Ver Slide', 'wordpress-carousel-poster' ),
    'view_items'            => __( 'Ver Slides', 'wordpress-carousel-poster' ),
    'search_items'          => __( 'Buscar Slide', 'wordpress-carousel-poster' ),
    'not_found'             => __( 'No hay resultados', 'wordpress-carousel-poster' ),
    'not_found_in_trash'    => __( 'No hay resultados en papelera', 'wordpress-carousel-poster' ),
    'featured_image'        => __( 'Imagen del Slide', 'wordpress-carousel-poster' ),
    'set_featured_image'    => __( 'Colocar Imagen del Slide', 'wordpress-carousel-poster' ),
    'remove_featured_image' => __( 'Remover Imagen del Slide', 'wordpress-carousel-poster' ),
    'use_featured_image'    => __( 'Usar como Imagen del Slide', 'wordpress-carousel-poster' ),
    'insert_into_item'      => __( 'Insertar en Slide', 'wordpress-carousel-poster' ),
    'uploaded_to_this_item' => __( 'Cargado a este Slide', 'wordpress-carousel-poster' ),
    'items_list'            => __( 'Listado de Slides', 'wordpress-carousel-poster' ),
    'items_list_navigation' => __( 'Navegación del Listado de Slides', 'wordpress-carousel-poster' ),
    'filter_items_list'     => __( 'Filtro del Listado de Slides', 'wordpress-carousel-poster' ),
);
$args = array(
    'label'                 => __( 'Slide', 'wordpress-carousel-poster' ),
    'description'           => __( 'Slides del Carousel', 'wordpress-carousel-poster' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => false,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
);
register_post_type( 'wcp-slide', $args );

