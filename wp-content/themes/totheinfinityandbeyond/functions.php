<?php

function theme_files()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
    wp_enqueue_style('main-styles', get_theme_file_uri('/assets/main.css'), ['bootstrap']);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', ['in_footer' => true]);
    wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/script.js'), [], '202404261134', ['strategy' => 'defer']);
}

add_action('wp_enqueue_scripts', 'theme_files');


function theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

function create_sidebar_cards()
{ ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li><?php
    }

add_action('init', function()
{
    register_post_type('ttiab_reviews', [
        'supports' => ['title', 'editor', 'author', 'thumbnail'],
        'rewrite' => ['slug' => 'recensioni'],
        'delete_with_user' => false,
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'labels' => [
            'name' => 'Recensioni',
            'add_new_item' => 'Aggiungi Nuova Recensione',
            'edit_item' => 'Modifica Nuova Recensione',
            'all_items' => 'Tutte le Recensione',
            'singular_name' => 'Recensione',
            'archives' => 'Reward Programs',
        ],
        'show_in_rest' => true,
    ]);
});
add_action('init', function()
{
    register_post_type('ttiab_trips', [
        'supports' => ['title', 'editor', 'author', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'viaggi'],
        'delete_with_user' => false,
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'labels' => [
            'name' => 'Viaggi',
            'add_new_item' => 'Aggiungi Nuovo Viaggio',
            'edit_item' => 'Modifica Viaggio',
            'all_items' => 'Tutte i Viaggi',
            'singular_name' => 'Viaggio',
            'archives' => 'Reward Programs',
        ],
        'show_in_rest' => true,
        'taxonomies' => ['category'],
        'hierarchical'       => false,
    ]);
});

// add categories for attachments
function add_categories_for_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'add_categories_for_attachments' );
