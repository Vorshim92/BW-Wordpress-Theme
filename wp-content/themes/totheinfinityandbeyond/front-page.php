<?php




get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <section class="destination-photos pb-5">
            <div class="">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $args = array(
                            'post_type' => 'ttiab_trips',
                            'posts_per_page' => -1
                        );

                        $query = new WP_Query($args);
                        $first_item = true;

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>
                                <div class="carousel-item <?php if ($first_item) {
                                                                echo 'active';
                                                                $first_item = false;
                                                            } ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" id="carouselImg" class="d-block w-100" alt="Disneyland Photo 1">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Descrizione dello slide</h5>
                                        <p>Una breve descrizione dello slide...</p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Esplora</a>
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
                            <div class="col-xl-3 col-md-6">
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









        <div class="row m-5 ">
            <div class="col-12">
                <section class="mb-5" id="section-details">
                    <div class="container-fluid" id="fadeInLeftBig">
                        <div id="card-home" class="p-4 card  rounded-5">
                            <div class="row  justify-content-start align-items-center g-2">
                                <div class="col-xl-6 col-lg-12"><img class="rounded-5" id="front-page-img" src="<?php echo get_template_directory_uri(); ?>/assets/ass-viaggio-ok-travel.jpg" alt=""></div>
                                <div class="ps-3 col-xl-6 col-lg-12 ">
                                    <h2>IL BENESSERE DI VIAGGIARE</h2>
                                    <p>Il benessere di viaggiare è una ricerca interiore e un'esplorazione del mondo esterno che offre innumerevoli benefici per il corpo, la mente e lo spirito. Viaggiare ci permette di allontanarci dalla routine quotidiana, di aprire la mente a nuove culture, esperienze e prospettive. È un'opportunità per scoprire luoghi incredibili, incontrare persone interessanti e creare ricordi indelebili.

                                        Uno dei maggiori benefici del viaggiare è il suo impatto positivo sulla salute mentale.
                                        Lontani dalle preoccupazioni e dallo stress della vita quotidiana, possiamo rilassarci, rigenerarci e ricaricare le batterie. Attraverso l'esplorazione di luoghi nuovi, stimoliamo la nostra creatività e aumentiamo il senso di meraviglia e gratitudine per il mondo che ci circonda.
                                        Inoltre, viaggiare ci sfida a essere flessibili, adattabili e aperti al cambiamento. Affrontiamo nuove situazioni, superiamo le barriere linguistiche e culturali e impariamo a risolvere i problemi in modo efficace. Queste esperienze ci rendono più resilienti e ci insegnano preziose lezioni di vita.

                                        Non possiamo ignorare l'impatto positivo che il viaggiare ha sulla nostra salute fisica. Esplorando nuovi luoghi, spesso ci impegniamo in attività all'aria aperta come escursioni, nuoto o passeggiate, che favoriscono il movimento e il benessere fisico. Inoltre, viaggiando possiamo sperimentare una dieta più varia e nutriente, arricchendo il nostro corpo con sapori e alimenti locali.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <div class="col-12 mb-5">
                <section id="section-details">
                    <div class="container-fluid " id="fadeInRight">
                        <div id="card-home" class="p-4 card  rounded-5">
                            <div class="row flex-wrap-reverse justify-content-start align-items-center g-2">
                                <div class="col-xl-6 col-lg-12  ">
                                    <h2>ISPIRAZIONE E CRESCITA PERSONALE</h2>
                                    <p>Viaggiare è una fonte inesauribile di ispirazione e crescita personale. Oltre ai benefici già menzionati, ci sono numerosi altri modi in cui il viaggiare contribuisce al nostro benessere globale. </p>
                                    <ul>
                                        <li>
                                            Espansione delle prospettive: Viaggiando, siamo esposti a nuove idee, tradizioni e punti di vista, che ci aiutano a sviluppare una mente aperta e inclusiva.

                                        </li>
                                        <li>Aumento della fiducia in sé stessi: Affrontare nuove sfide e situazioni durante i viaggi ci permette di superare i nostri limiti e di acquisire fiducia nelle nostre capacità.</li>

                                        <li>
                                            Riduzione dello stress: Lontani dalla routine quotidiana, possiamo scollegarci dalle preoccupazioni e dallo stress, favorendo una maggiore serenità e tranquillità mentale.

                                        </li>
                                        <li>Stimolazione sensoriale: Esplorando nuovi luoghi, ci immergiamo in esperienze sensoriali uniche, attraverso la vista, il suono, il gusto, il tatto e l'odore, che stimolano i nostri sensi e ci rendono più consapevoli del mondo circostante.</li>
                                        <li>Crescita personale: Il viaggiare ci spinge al di fuori della nostra zona di comfort, ci costringe a fare scelte e ci offre l'opportunità di imparare e crescere costantemente.</li>
                                        <li>
                                            Memorie indelebili: Le esperienze di viaggio sono spesso tra le più memorabili della nostra vita, creando ricordi che durano per sempre e che ci portiamo nel cuore.

                                        </li>
                                        <li>
                                            Promozione della creatività: Esplorando luoghi nuovi e stimolanti, possiamo sbloccare la nostra creatività e trovare ispirazione per nuove idee e progetti.

                                        </li>
                                        <li> Apprezzamento della diversità: Viaggiando, impariamo ad apprezzare la ricchezza della diversità umana e naturale, rafforzando il nostro senso di appartenenza a un'unica comunità globale.</li>
                                    </ul>

                                </div>
                                <div class="col-xl-6 col-lg-12"><img class="rounded-5" id="front-page-img" src="<?php echo get_template_directory_uri(); ?>/assets/2149153260.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>


            <div class="col-12 mb-5">
                <section id="section-details">
                    <div class="container-fluid " id="fadeInLeftBig">
                        <div id="card-home" class="p-4 card  rounded-5">
                            <div class="row  justify-content-start align-items-center g-2">
                                <div class="col-xl-6 col-lg-12"><img id="front-page-img" class="rounded-5" src="<?php echo get_template_directory_uri(); ?>/assets/iStock-527115069.jpg" alt=""></div>
                                <div class="col-xl-6 col-lg-12 ">

                                    <h2>RESPONSABILE E SOSTENIBILE</h2>
                                    <p>Attraverso il turismo responsabile e sostenibile, possiamo contribuire alla conservazione dell'ambiente e al sostegno delle comunità locali. Il viaggiare ci offre l'opportunità di connetterci con la natura, di apprezzare la sua bellezza e di impegnarci nella sua protezione.

                                        Infine, il viaggiare ci permette di creare legami significativi con le persone che incontriamo lungo il percorso. Attraverso lo scambio culturale e l'ospitalità locale, possiamo costruire ponti tra le diverse culture e promuovere la comprensione e la pace nel mondo.

                                        In sintesi, il benessere di viaggiare va oltre la semplice vacanza: è un'esperienza trasformativa che arricchisce il nostro essere in molti modi. Ci insegna a vivere pienamente, ad apprezzare la bellezza del mondo e a coltivare una gioia e una gratitudine durature per la vita.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-12 mb-5">
                <section id="section-details">
                    <div class="container-fluid " id="fadeInRight">
                        <div id="card-home" class="p-4 card  rounded-5">
                            <div class="row flex-wrap-reverse justify-content-start align-items-center g-2">
                                <div class="ps-3 col-xl-6 col-lg-12 ">
                                    <h2>CONCLUSIONE</h2>
                                    <p>
                                        In conclusione, il viaggiare è molto più di una semplice attività ricreativa; è un'esperienza che arricchisce il nostro essere in molti modi. Oltre a offrirci momenti di relax e divertimento, il viaggiare ci spinge a esplorare, imparare e crescere, contribuendo al nostro benessere fisico, mentale e spirituale. <br>

                                        Attraverso il viaggiare, ci allontaniamo dalla nostra routine quotidiana, ci immergiamo in nuove culture e realtà, e ci apriamo a esperienze che ci arricchiscono profondamente. Questa avventura ci porta a scoprire lati inaspettati di noi stessi, ad ampliare le nostre prospettive e ad accogliere la diversità con gioia e gratitudine.<br>

                                        Inoltre, il viaggiare ci offre l'opportunità di creare ricordi indelebili, di forgiare legami significativi con le persone che incontriamo lungo il percorso e di contribuire alla conservazione e al rispetto dell'ambiente e delle comunità locali.<br>

                                        In un mondo sempre più connesso digitalmente, il viaggiare ci ricorda l'importanza di sperimentare il mondo attraverso i nostri sensi, di abbracciare l'incertezza e l'avventura e di coltivare una profonda connessione con noi stessi, con gli altri e con il mondo che ci circonda.<br>

                                        Perciò, che si tratti di un'avventura lontana o di una gita nel parco locale, prendersi il tempo per viaggiare è un investimento prezioso nel nostro benessere complessivo e una testimonianza del desiderio innato dell'essere umano di esplorare, scoprire e crescere.</p>
                                </div>
                                <div class="col-xl-6 col-lg-12"><img id="front-page-img" class="rounded-5" src="<?php echo get_template_directory_uri(); ?>/assets/city.jpg" alt=""></div>

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