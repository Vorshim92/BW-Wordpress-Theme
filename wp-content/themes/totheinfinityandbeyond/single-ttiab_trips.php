<?php get_header(); ?>



<div class="container">
    <?php

    $categories = get_the_category();


    if (!empty($categories)) {
        foreach ($categories as $category) {

            $cat_id = $category->term_id;


            $args = array(
                'cat' => $cat_id,
                'posts_per_page' => -1
            );


            $query = new WP_Query($args);


            if ($query->have_posts()) {

                while ($query->have_posts()) {
                    $query->the_post();

    ?>


                    <div class=" col-3 my-5">
                        <div class="card" style="width: 100%;">
                            <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid', 'id' => 'img-state']); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi di più</a>
                            </div>
                        </div>

                    </div>



    <?php
                }
            } else {

                echo 'Nessun articolo trovato nella categoria con ID ' . $cat_id . '.';
            }


            wp_reset_postdata();
        }
    } else {

        echo 'Il post non ha categorie associate.';
    }
    ?>
    <div class="col-2"> <?php get_sidebar() ?></div>


</div>
<?php get_footer();
