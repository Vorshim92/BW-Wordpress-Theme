<?php

function theme_files()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', [], '1.11.3');
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



add_action('init', function () {
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
        'taxonomies' => ['category'],
        'hierarchical' => false,

    ]);
});
add_action('init', function () {
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
        'hierarchical' => false,
    ]);
});
add_action('init', function () {
    register_post_type('ttiab_promotions', [
        'supports' => ['title', 'editor', 'author', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'promozioni'],
        'delete_with_user' => false,
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'labels' => [
                'name' => 'Promozioni',
                'add_new_item' => 'Aggiungi Nuova Promozione',
                'edit_item' => 'Modifica Promozione',
                'all_items' => 'Tutte le Promozioni',
                'singular_name' => 'Promozione',
                'archives' => 'Reward Programs',
            ],
        'show_in_rest' => true,
        'taxonomies' => ['category'],
        'hierarchical' => false,
    ]);
});

// add categories for attachments
function add_categories_for_attachments()
{
    register_taxonomy_for_object_type('category', 'attachment');
}
add_action('init', 'add_categories_for_attachments');
add_action( 'admin_menu', 'add_user_menu_bubble' );

function add_user_menu_bubble() {
   global $wpdb;
   global $menu;

   $memo_count = wp_count_posts( 'ttiab_reviews' )->pending;

  if ( $memo_count ) {

    foreach ( $menu as $key => $value ) {

      if ( $menu[$key][2] == 'edit.php?post_type=ttiab_reviews' ) {

        $menu[$key][0] .= ' <span class="update-plugins">' . $memo_count . '</span>';

        return;
      }
    }
  }
}

//funzione perottimizare la qualità delle immagini di copertina
add_image_size('custom-cover-thumbnail', 4000, 4000, true);
