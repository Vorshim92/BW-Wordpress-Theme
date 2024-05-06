<?php




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- <section class="destination-intro text-center pt-5">
            <div class="container">
                <h2>Welcome to Disneyland!</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem perferendis debitis unde, pariatur corrupti fuga. Velit modi suscipit dicta laudantium, illo ratione necessitatibus. Corrupti doloribus dignissimos quas illum. Veritatis, tenetur..</p>
            </div>
        </section> -->
        <section  class="destination-photos pb-5">
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/disneyland.png" class="d-block w-100" alt="Disneyland Photo 1" id="carouselImg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Descrizione dello slide</h5>
                                <p>Una breve descrizione dello slide...</p>
                                <a href="#" class="btn btn-primary">Esplora</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/disneyland.png" class="d-block w-100" alt="Disneyland Photo 2" id="carouselImg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Descrizione dello slide</h5>
                                <p>Una breve descrizione dello slide...</p>
                                <a href="#" class="btn btn-primary">Esplora</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/disneyland.png" class="d-block w-100" alt="Disneyland Photo 3" id="carouselImg">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Descrizione dello slide</h5>
                                <p>Una breve descrizione dello slide...</p>
                                <a href="#" class="btn btn-primary">Esplora</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>


<section class="mb-5" id="section-details">
   <div class="container-fluid" id="fadeInLeftBig">
        <div
            class="row justify-content-start align-items-center g-2"
        >
            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/disneyland.png" alt=""></div>
            <div class="col-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit maiores modi libero saepe corrupti laboriosam!</p></div>
            
        </div>
   </div> 
</section>


<section id="section-details">
   <div class="container-fluid " id="fadeInRight">
        <div
            class="row justify-content-start align-items-center g-2"
        >
        <div class="col-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident expedita, iusto voluptatem perferendis iste deserunt voluptatum dolor magni, omnis hic ipsum itaque suscipit maiores modi libero saepe corrupti laboriosam!</p></div>
            <div class="col-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/disneyland.png" alt=""></div>
            
        </div>
   </div>
    
</section>

<!-- QUESTA RICEVE I POST START -->

<section class="destination-photos py-5">
    <div class="container-fluid text-center ">
        <div class="row gy-4 ">
            <?php

            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-3 ">
                        <div class="card" style="width: 100%;">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>"
                                    class="btn btn-primary"><?php _e('Read more', 'yourtheme'); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            else:

                _e('Sorry, no posts found.', 'yourtheme');
            endif;
            ?>
        </div>
    </div>
</section>

<!-- QUESTA RICEVE I POST END -->


        <section class="destination-photos py-5" id="pulse">
            <div class="container-fluid  text-center">
                <div class="row gy-4">
                 <div class="col-3">
                 <div class="card" style="width: 100%;">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/gole.png" alt="Disneyland Photo 1" class="img-fluid">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-3">
                 <div class="card" style="width: 100%;">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/gole.png" alt="Disneyland Photo 1" class="img-fluid">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-3">
                 <div class="card" style="width: 100%;">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/gole.png" alt="Disneyland Photo 1" class="img-fluid">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>
                 <div class="col-3">
                 <div class="card" style="width: 100%;">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/gole.png" alt="Disneyland Photo 1" class="img-fluid">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                 </div>


                   
                </div>
            </div>
        </section>

    </main>
</div>

<button><a href="<?php echo esc_url(get_permalink(get_page_by_path('aggiungi-articolo'))); ?>" class="button">Aggiungi Articolo</a>
</button>

<?php
/*
Template Name: Nuovo Articolo
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <form method="post" action="">
                    <label for="titolo">Titolo:</label><br>
                    <input type="text" id="titolo" name="titolo" required><br><br>

                    <label for="contenuto">Contenuto:</label><br>
                    <textarea id="contenuto" name="contenuto" rows="8" cols="50" required></textarea><br><br>

                    <input type="submit" name="submit" value="Pubblica Articolo">
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $titolo = sanitize_text_field($_POST['titolo']);
                    $contenuto = wp_kses_post($_POST['contenuto']);

                    $nuovo_articolo = array(
                        'post_title' => $titolo,
                        'post_content' => $contenuto,
                        'post_status' => 'publish',
                        'post_author' => 1
                    );

                    $post_id = wp_insert_post($nuovo_articolo);

                    if ($post_id) {
                        echo "Articolo pubblicato con successo!";
                    } else {
                        echo "Si è verificato un errore durante la pubblicazione dell'articolo.";
                    }
                }
                ?>
            </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>




<?php get_footer(); ?>

