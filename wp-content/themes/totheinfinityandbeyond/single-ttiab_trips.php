<?php get_header(); ?>
<?php $current_post_id = get_the_ID();
$current_post_categories = wp_get_object_terms($current_post_id, 'location', array('fields' => 'ids'));

// $current_post_categories = wp_get_post_categories($current_post_id, array("cats" => wp_get_object_terms($current_post_id, 'location')));

// $args = array(
//     'location__in' => $current_post_categories,
//     'posts_per_page' => 5
// );
//
$args = array(
    'posts_per_page' => 5,
    // 'post__not_in' => array($current_post_id),
    'tax_query' => array(
        array(
            'taxonomy' => 'location',
            'field' => "term_id",
            'terms' => $current_post_categories[0],
        )
    )
);

?>

<div style="z-index: 1; position: relative;">
    <div class="cover-main"
        style="background-image: url('<?php the_post_thumbnail_url('custom-cover-thumbnail', ['id' => 'img-state']); ?>');">
        <div class="cover-contents w-100">
            <div class="text-center">
                <h1 class="display-2">Il Desiderio di Viaggiare Inizia Qui</h1>
                <h1 class="trip-title bebas">
                    <?php the_title(); ?>
                </h1>
                <h2 class="display-6 mt-5">Ogni Destinazione, una Storia da Raccontare </h2>
                <p class="">Viaggi pensati e progettati dai nostri Coordinatori </p>
                <div class="d-flex gap-5 justify-content-center">
                    <i class="bi bi-airplane fs-12"></i>
                    <i class="bi bi-people fs-12"></i>
                    <i class="bi bi-emoji-laughing fs-12"></i>
                    <i class="bi bi-flag fs-12"></i>
                    <!-- <img src="/assets/word.svg.svg" alt="" srcset=""> -->
                </div>


            </div>
            <!-- <h3 class="trip-overview">ANCHE A TE</h3> -->

            <div style="padding-top: 8px;">

            </div>
        </div>
    </div>
    <!-- For faded cover effect -->
    <div class="faded-bottom"></div>
</div>
<div class="container mt-5">
    <div class="row ">
        <div class="col-9">
            <?php the_content() ?>
        </div>

        <div class="col-12 col-md-3">
            <p class="text-secondary">Hotel suggeriti per te</p>

            <?php


            $sidebar_posts = new WP_Query($args + array(
                'post_type' => 'ttiab_promotions'
            ));
            while ($sidebar_posts->have_posts()) :
                $sidebar_posts->the_post();


                ?>
                <div class="col-12 border-bottom pb-2">
                    <div class="row ">
                        <div class="col-6">
                            <div class="multiply rounded"
                                style="width: 100%; height: 8rem; background-image: url('<?php the_post_thumbnail_url('custom-cover-thumbnail', ['id' => 'img-state']); ?>');">
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="text-secondary">Pubblicato il: <?php the_date(); ?></p>
                        </div>
                    </div>

                </div>

                <?php

            endwhile;
            wp_reset_postdata();
            ?>
            <p class="text-secondary">LE VOSTRE RECENSIONI</p>

            <?php

            $sidebar_posts = new WP_Query($args + array('post_type' => 'ttiab_reviews'));
            while ($sidebar_posts->have_posts()) :
                $sidebar_posts->the_post();


                ?>
                <div class="col-12 border-bottom pb-2">
                    <div class="row ">
                        <div class="col-6">
                            <div class="multiply rounded"
                                style="width: 100%; height: 8rem; background-image: url('<?php the_post_thumbnail_url('custom-cover-thumbnail', ['id' => 'img-state']); ?>');">
                            </div>
                        </div>
                        <div class="col-6">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="text-secondary">Pubblicato il: <?php the_date(); ?></p>
                        </div>
                    </div>

                </div>

                <?php

            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</div>
</div>
<div class="container">

    <!-- Inizio articoli -->
    <div class="row py-3 gy-4">
        <div class="col-12 col-md-8">
            <div class="row gy-3">
                <p class="text-secondary">Leggi gli articoli correlati a questo viaggio</p>
                <?php


                $query = new WP_Query($args + array('post_type' => 'post'));
                if ($query->have_posts()) { ?>

                    <?php while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="col-6 col-lg-4 col-xl-3">
                            <div class="card" style="width: 100%;height:17rem">
                                <?php the_post_thumbnail('custom-cover-thumbnail', ['class' => 'h-50', 'id' => 'img-state']); ?>
                                <div class="card-body row">
                                    <p class="card-title fw-bold"><?php the_title(); ?></p>
                                    <div class="mt-auto">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary rose">Leggi di più</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php }
                wp_reset_postdata();

                ?>
            </div>
        </div>

    </div>
    <div class="col-12">
        <?php
        echo do_shortcode('[custom_add_review]');
        ?>
    </div>
</div>

<?php get_footer(); ?>