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
        'post_author' => get_current_user_id()
    );

    $post_id = wp_insert_post($nuovo_articolo);

    if ($post_id) {
        echo "Articolo pubblicato con successo!";
    } else {
        echo "Si è verificato un errore durante la pubblicazione dell'articolo.";
    }
}
?>

<div id="primary" class="content-area">
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
</div>
