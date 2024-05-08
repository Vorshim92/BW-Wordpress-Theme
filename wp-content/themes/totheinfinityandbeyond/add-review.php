<?php
$current_post_id = get_the_ID();
$current_post_categories = wp_get_post_categories($current_post_id);


if (isset($_POST['submit'])) {
    $titolo = sanitize_text_field($_POST['titolo']);
    $contenuto = wp_kses_post($_POST['contenuto']);
    $nuovo_articolo = array(
        'post_title' => $titolo,
        'post_content' => $contenuto,
        'post_status' => 'pending',
        'post_author' => get_current_user_id(),
        'post_type' => 'ttiab_reviews',
        'post_category' => $current_post_categories,
        'post-thumbnails' => "url"
    );
    $post_id = wp_insert_post($nuovo_articolo);
    if ($post_id) {
        echo "Articolo pubblicato con successo!";
    } else {
        echo "Si è verificato un errore durante la pubblicazione dell'articolo.";
    }
}
?>
<div class="bg-black pb-5 text-white">
    <div class="container pt-5">

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p class="text-secondary">Hai vissuto questa esperienza con noi e vuoi pubblicare il tuo articolo?</p>
            <p class="text-secondary">qui puoi farlo <a href="#" class="fw-light">Leggi la politica delle recensioni</a> </p>
            <form method="post" action="">
                <label for="titolo">Titolo:</label><br>
                <input type="text" id="titolo" name="titolo" required><br><br>

                <label for="contenuto">Contenuto:</label><br>
                <textarea id="contenuto" name="contenuto" style="width:100%;height:10rem" required></textarea><br><br>

                <input type="submit" name="submit" value="Pubblica Articolo" style="background-color:#E09F05" class="border-0 text-white rounded p-1">
            </form>
        </div><!-- #post-<?php the_ID(); ?> -->
    </div>

</div>