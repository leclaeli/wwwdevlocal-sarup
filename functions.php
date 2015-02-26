<?php
/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function custom_taxonomies() {

    $labels = array(
        'name'                    => _x( 'Record Type', 'Taxonomy plural name', 'text-domain' ),
        'singular_name'            => _x( 'Record Type', 'Taxonomy singular name', 'text-domain' ),
        'menu_name'                => __( 'Record Types', 'text-domain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );

    register_taxonomy( 'record-type', array( 'post' ), $args );
}

add_action( 'init', 'custom_taxonomies' );