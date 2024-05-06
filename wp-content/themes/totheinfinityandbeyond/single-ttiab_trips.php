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
 


</div>
<?php
/*
Template Name: Aggiungi Articolo
*/

if (isset($_POST['submit'])) {
    $titolo = sanitize_text_field($_POST['titolo']);
    $contenuto = wp_kses_post($_POST['contenuto']);

    $nuovo_articolo = array(
        'post_title' => $titolo,
        'post_content' => $contenuto,
        'post_status' => 'pending',
        'post_author' => get_current_user_id(),
        'post_type' => 'ttiab_reviews'

    );

    $post_id = wp_insert_post($nuovo_articolo);

    if ($post_id) {
        echo "Articolo pubblicato con successo!";
    } else {
        echo "Si è verificato un errore durante la pubblicazione dell'articolo.";
    }
}

?>
<main id="main" class="site-main" role="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">

        </header>

        <div class="entry-content">
            <form method="post" action="">
                <label for="titolo">Titolo:</label><br>
                <input type="text" id="titolo" name="titolo" required><br><br>

                <label for="contenuto">Contenuto:</label><br>
                <textarea id="contenuto" name="contenuto" rows="8" cols="50" required></textarea><br><br>

                <input type="submit" name="submit" value="Pubblica Articolo">
            </form>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->

</main>
<?php get_footer();
