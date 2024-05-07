<?php

$posts_for_aside = new WP_Query([
    'posts_per_page' => 6,
    'orderby'  => 'rand',
]); ?>

<?php
    while ($posts_for_aside->have_posts()) {
        $posts_for_aside->the_post();
        create_sidebar_cards();
    }
    wp_reset_postdata();
     ?>
