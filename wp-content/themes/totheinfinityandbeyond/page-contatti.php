<?php
/*
 * Template Name: Pagina Contatti
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?> </h1>
                </header>

                <div class="entry-content">
                    <?php


                    the_content();

                    ?>
                </div>
            </article>

        <?php
        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>