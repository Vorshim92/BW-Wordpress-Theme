<?php
while (have_posts()) {
    // qui si lavora con i dati di un post
    the_post(); ?>
    <li>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); // fa l'echo implicito 
                ?>
        </h2>
        </a>
    </li><?php


        }
