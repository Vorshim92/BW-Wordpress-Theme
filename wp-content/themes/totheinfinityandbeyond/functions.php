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
        'taxonomies' => [''],
        'hierarchical' => false,

    ]);
});
add_action('init', function () {
    register_taxonomy('location', ["post", "ttiab_reviews", "ttiab_promotions"], array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        'show_in_rest' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x('Locations', 'taxonomy general name'),
            'singular_name' => _x('Location', 'taxonomy singular name'),
            'search_items' =>  __('Search Locations'),
            'all_items' => __('All Locations'),
            'parent_item' => __('Parent Location'),
            'parent_item_colon' => __('Parent Location:'),
            'edit_item' => __('Edit Location'),
            'update_item' => __('Update Location'),
            'add_new_item' => __('Add New Location'),
            'new_item_name' => __('New Location Name'),
            'menu_name' => __('Locations'),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'locations', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
        'show_admin_column' => true,

    ));
    register_post_type('ttiab_trips', [
        'supports' => ['title', 'editor', 'author', 'thumbnail'],
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
        'taxonomies' => ['location'],
        'hierarchical' => false,
    ]);
    register_post_type('ttiab_promotions', [
        'supports' => ['title', 'editor', 'author', 'thumbnail'],
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
        'taxonomies' => [''],
        'hierarchical' => false,
    ]);
});


// add categories for attachments
function add_categories_for_attachments()
{
    register_taxonomy_for_object_type('location', 'attachment');
}
add_action('init', 'add_categories_for_attachments');
add_action('admin_menu', 'add_user_menu_bubble');

function add_user_menu_bubble()
{
    global $wpdb;
    global $menu;

    $memo_count = wp_count_posts('ttiab_reviews')->pending;

    if ($memo_count) {

        foreach ($menu as $key => $value) {

            if ($menu[$key][2] == 'edit.php?post_type=ttiab_reviews') {

                $menu[$key][0] .= ' <span class="update-plugins">' . $memo_count . '</span>';

                return;
            }
        }
    }
}

//funzione per ottimizare la qualità delle immagini di copertina
add_image_size('custom-cover-thumbnail', 4000, 4000, true);


add_shortcode('custom_add_review', function () {
    ob_start();
    include 'add-review.php';
    return ob_get_clean();
});

function wpsnipp_remove_default_taxonomies()
{
    global $pagenow;

    register_taxonomy('post_tag', array());
    register_taxonomy('category', array());

    $tax = array('post_tag', 'category');

    if ($pagenow == 'edit-tags.php' && in_array($_GET['taxonomy'], $tax)) {
        wp_die('Invalid taxonomy');
    }
}
add_action('init', 'wpsnipp_remove_default_taxonomies');
function remove_pages_from_admin_menu()
{
    remove_menu_page('edit.php?post_type=page');
}

add_action('admin_menu', 'remove_pages_from_admin_menu');
