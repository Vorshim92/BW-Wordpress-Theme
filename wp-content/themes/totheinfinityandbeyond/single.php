<?php

get_header();
the_post(); ?>
<div class="container mt-5 pt-5">

    <h1><?php the_title(); ?></h1>
    <a href="<?php the_author_meta() ?>"></a>
    <img style="width:100% ;max-height:25rem;object-fit:cover" src="<?php the_post_thumbnail_url('custom-cover-thumbnail'); ?>" alt="<?php the_title(); ?>">
    <div class="row pt-4 border-bottom">
        <div class="col-12 col-md-9">

            <?php the_content(); ?>
        </div>
        <div class="col-12 col-md-3">
            <p class="text-secondary">Altri articoli suggeriti per te</p>

            <?php
            $current_post_id = get_the_ID();
            $current_post_categories = wp_get_post_categories($current_post_id)
            ?>

            <div class="row gy-2">


                <?php {
                    $args = array(
                        'posts_per_page' => 5,
                        'category__in' => $current_post_categories,
                        'post__not_in' => array($current_post_id)
                    );

                    $sidebar_posts = new WP_Query($args);
                    while ($sidebar_posts->have_posts()) :
                        $sidebar_posts->the_post();



                ?>
                        <div class="col-12 border-bottom pb-2">
                            <div class="row">
                                <div class="col-6">
                                    <div class="multiply rounded" style="width: 100%; height: 8rem; background-image: url('<?php the_post_thumbnail_url('thumbnail', ['id' => 'img-state']); ?>');">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="text-secondary">Autore: <?php the_author(); ?></p>
                                    <p class="text-secondary">Pubblicato il: <?php the_date(); ?></p>
                                </div>
                            </div>

                        </div>

                <?php

                    endwhile;
                    wp_reset_postdata();
                }
                ?>

            </div>
        </div>
    </div>

</div>


<?php


?>



<?php if (comments_open() || get_comments_number()) :
    comments_template();
endif ?>






<?php
get_footer();
