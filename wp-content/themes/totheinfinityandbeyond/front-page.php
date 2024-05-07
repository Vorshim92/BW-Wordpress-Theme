<?php




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <section class="destination-photos pb-5">
            <div class="container-fluid ">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">


                        <?php
                        $args = array(
                            'post_type' => 'ttiab_trips',
                            'posts_per_page' => -1
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                            </div>
                            <div class="carousel-item active">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="Disneyland Photo 1"
                                    alt="Disneyland Photo 1" id="carouselImg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Descrizione dello slide</h5>
                                    <p>Una breve descrizione dello slide...</p>
                                    <a href="#" class="btn btn-primary">Esplora</a>
                                </div>
                            </div>
                            <?php
                            }
                        } else {
                            echo 'Nessun articolo trovato nel custom post type.';
                        }

                        wp_reset_postdata();
                        ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
</div>
</section>







<section class="destination-photos py-5" id="pulse">
    <div class="container text-center">
        <h1>ESPLORA LA TUA NUOVA META</h1>
        <div class="row gy-4">
            <?php
            $args = array(
                'post_type' => 'ttiab_trips',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <div class="col-3">
                        <div class="card" style="width: 100%;">
                            <?php the_post_thumbnail('custom-cover-thumbnail', ['class' => '', 'id' => 'img-state']); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo 'Nessun articolo trovato nel custom post type.';
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>









<div class="row mt-5 mx-5">
    <div class="col-12">
        <section class="mb-5" id="section-details">
            <div class="container-fluid" id="fadeInLeftBig">
                <div class="row justify-content-start align-items-center g-2">
                    <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/libri.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto
                            voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit
                            maiores modi libero saepe corrupti laboriosam!</p>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <div class="col-12 mb-5">
        <section id="section-details">
            <div class="container-fluid " id="fadeInRight">
                <div class="row justify-content-start align-items-center g-2">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto
                            voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit
                            maiores modi libero saepe corrupti laboriosam!</p>
                    </div>
                    <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/fiori.jpg" alt="">
                    </div>

                </div>
            </div>

        </section>
    </div>


    <div class="col-12 mb-5">
        <section id="section-details">
            <div class="container-fluid " id="fadeInLeftBig">
                <div class="row justify-content-start align-items-center g-2">
                    <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/deserto.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto
                            voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit
                            maiores modi libero saepe corrupti laboriosam!</p>
                    </div>

                </div>
            </div>

        </section>
    </div>
    <div class="col-12 mb-5">
        <section id="section-details">
            <div class="container-fluid " id="fadeInRight">
                <div class="row justify-content-start align-items-center g-2">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto
                            voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit
                            maiores modi libero saepe corrupti laboriosam!</p>
                    </div>
                    <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/city.jpg" alt="">
                    </div>

                </div>
            </div>

        </section>
    </div>
</div>

<!-- QUESTA RICEVE I POST START -->


<!-- QUESTA RICEVE I POST END -->



</main>
</div>








<?php get_footer(); ?>