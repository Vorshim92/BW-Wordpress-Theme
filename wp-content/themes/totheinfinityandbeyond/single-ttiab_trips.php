<?php get_header(); ?>

<div class="container">
    <!-- inizio articoli -->
    <div class="row py-3 gy-4">

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
                if ($query->have_posts()) { ?>
                    <div class="col-12 col-md-8">
                        <div class="row gy-3">
                            <p class="text-secondary">Leggi gli articoli correlati a questo viaggio</p>
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
                        </div>
                    </div>
                <?php } else {
                    echo 'Nessun articolo trovato nella categoria con ID ' . $cat_id . '.';
                }
                wp_reset_postdata();
            }
        } else {
            echo 'Il post non ha categorie associate.';
        } ?>

        <div class="col-12 col-md-4 border p-4 rounded">
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
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <p class="text-secondary">Hai vissuto questa esperienza con noi e vuoi pubblicare il tuo articolo?</p>
                <p class="text-secondary">qui puoi farlo <a href="#" class="fw-light">Leggi la politica delle recensioni</a> </p>
                <form method="post" action="">
                    <label for="titolo">Titolo:</label><br>
                    <input type="text" id="titolo" name="titolo" required><br><br>

                    <label for="contenuto">Contenuto:</label><br>
                    <textarea id="contenuto" name="contenuto" style="width:100%;height:10rem" required></textarea><br><br>

                    <input type="submit" name="submit" value="Pubblica Articolo" style="background-color:#E09F05" class="border-0 text-white rounded p-1">
                </form>
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
