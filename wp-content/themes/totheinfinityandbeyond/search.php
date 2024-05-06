<?php
get_header();
the_post(); ?>



<div class="container">



    <?php 
    if(isset($_GET['s'])){
        $search_query=sanitize_text_field($_GET['s']);
    }
    $args=array(
        "post_type"=>'post',
        "post_per_page"=>-1,
        "s"=>$search_query,
        "category_name"=>$search_query
    );
    $search_query=new WP_Query($args);
    if($search_query->have_posts()) {
       $search_query->have_posts() ;
       the_title();
       the_content();

    }else{
        echo "risultato non trovato";
    }
     ?>
</div>

<?php
get_footer();
