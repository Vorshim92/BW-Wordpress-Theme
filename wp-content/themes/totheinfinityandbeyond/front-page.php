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
                                <div class="carousel-item  <?php if ($first_item) {
                                    echo 'active';
                                    $first_item = false;
                                } ?>">

                                    <div class="bg-he d-block w-100 d-flex justify-content-center
                                    align-items-center"
                                        style="background-image: url('<?php the_post_thumbnail_url(); ?>');" id="carouselImg">
                                        <div class="text-white">
                                            <h2 class="display-4">Prepara lo zaino, gli amici li portiamo noi</h2>
                                            <p class="text-center">Nuove mete ogni mese resta sincronizzato</p>
                                            <h1 class="bebas text-center"><?php the_title() ?></h1>
                                            <p class="display-6 text-center py-5">Scopri il mondo viaggiando in piccoli gruppi
                                            </p>

                                            <div class="text-center">
                                                <a href="<?php the_permalink(); ?>" class="btn-play">Esplora</a>
                                            </div>
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

                <div class="row  py-5 mb-3">
                    <div class="col-12">
                        <h1 class="fw-7">Cerchi il viaggio perfetto per l’estate?</h1>
                        <h1 class="fw-7">Parti con WeTravel</h1>
                        <p class="fs-5 py-5">
                            Non è mai troppo presto per organizzarsi le ferie: con WeTravel parti da solo o con un nuovo
                            gruppo di amici
                            -
                            massimo 15 persone che hanno più o meno la stessa età e che condividono lo stesso mood di
                            viaggio. Con il
                            gruppo
                            c’è sempre un Coordinatore, che se proprio dobbiamo trovargli una descrizione è “il miglior
                            compagno di
                            viaggio che si possa desiderare”.
                        </p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-globe-americas fs-1"></i>
                        <p class="fs-5 px-5 fw-semibold">Nuove proposte di viaggi ogni mese</p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-person-arms-up fs-1"></i>
                        <p class="fs-5 px-5 fw-semibold">Parti da solo, o viaggia in un gruppo omogeneo per età e mood
                            organizzato da noi</p>
                    </div>
                    <div class="col-4">
                        <i class="bi bi-house fs-1"></i>
                        <p class="fs-5 px-5 fw-semibold">Hotel , ristoranti partner in tutto il mondo</p>
                    </div>
                </div>



                <hr>

                <h1 class="fw-7 py-5">Le nostre proposte di questo mese</h1>
                <div class="row gy-4 pb-5">
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
                                <div class="card rounded-5" style="width: 100%;">
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
                <hr>
            </div>
        </section>





        <div class="dk">


            <div class="container  ">


                <div class="row gy-5 pb-5">
                    <div class="col-12">
                        <h1 class="text-center text-white fw-7">Che cosa succede in un viaggio WeTravel?</h1>
                    </div>
                    <div class="col-4">
                        <div class="card rounded-5" style="width: 100%;">

                            <div class="card-body  blue text-center">
                                <h2>15 Nuovi amici</h2>
                                <p class="card-text">
                                    Vogliamo creare connessioni tra persone, culture e storie e per farlo organizziamo
                                    viaggi di gruppo
                                    composti da un massimo di 15 persone, divisi in fasce di età. Partirai da solo, ma
                                    tornerai a casa
                                    con 15 nuovi amici.

                                </p>
                            </div>
                            <img src="https://strapi-imaginary.weroad.it/resource/original/85227/"
                                class="card-img-top rounded-0" alt="..." style="height: 20.5rem;object-fit:cover">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded-5" style="width: 100%;">

                            <div class="card-body yellow text-center">
                                <h2>1000 Avventure</h2>
                                <p class="card-text">
                                    Spingiamo i nostri viaggiatori ad uscire dalla loro comfort zone, e lo facciamo
                                    includendo nei
                                    nostri
                                    viaggi delle esperienze uniche che vale la pena vivere e condividere. Preparati a
                                    metterti in gioco
                                    e a scoprire nuovi lati di te.

                                </p>
                            </div>
                            <img src="https://strapi-imaginary.weroad.it/resource/original/85225/"
                                class="rounded-0 card-img-top" alt="..." style="height: 20.5rem;object-fit:cover">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rounded-5" style="width: 100%; ">

                            <div class="card-body wl text-center">
                                <h2>1 Coordinatore</h2>
                                <p class="card-text">In viaggio con te ci sarà sempre un Coordinatore WeRoad: un
                                    viaggiatore
                                    appassionato
                                    e formato che guiderà te e il gruppo in nuove avventure. In destinazioni si occuperà
                                    della parte
                                    logistica
                                    e ti garantirà un viaggio senza sbatti.
                                </p>
                            </div>
                            <img src="https://images.unsplash.com/photo-1500484083096-6a769f58a83d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29vcmRpbmF0b3JlfGVufDB8fDB8fHww"
                                class="card-img-top rounded-0" alt="..." style="height: 20.5rem;object-fit:cover">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- -------------------------------------------------------- -->
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h1 class="text-center fw-7 pb-5 mb-5">Perchè è importatnte viaggiare?</h1>
                </div>
                <div class="col-12">

                    <div class="container pb-5">

                        <div class="row rounded">
                            <div class="col-12 col-lg-4"><img style="width:100%;height:100%;object-fit:cover"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/ass-viaggio-ok-travel.jpg"
                                    alt=""></div>
                            <div class="col-12 col-lg-8 ">
                                <div class="px-5 pt-4">
                                    <h4 class="fw-7">Il benessere di viaggiare</h4>
                                    <p class="text-secondary">
                                        Il viaggiare è una ricerca interiore e un'esplorazione del mondo esterno che
                                        porta innumerevoli benefici per il corpo, la mente e lo spirito. Ci permette di
                                        allontanarci dalla routine quotidiana, aprendo la mente a nuove culture,
                                        esperienze e prospettive. È un'opportunità per scoprire luoghi incredibili,
                                        incontrare persone interessanti e creare ricordi indelebili.

                                        Uno dei suoi maggiori benefici è l'impatto positivo sulla salute mentale.
                                        Lontani dallo stress quotidiano, possiamo rilassarci, rigenerarci e ricaricare
                                        le batterie. Esplorando nuovi luoghi, stimoliamo la creatività e aumentiamo il
                                        senso di meraviglia e gratitudine per il mondo. Viaggiare ci sfida ad essere
                                        flessibili, adattabili e aperti al cambiamento, rendendoci più resilienti e
                                        insegnandoci preziose lezioni di vita.

                                        Viaggiare ha anche un impatto positivo sulla salute fisica. Spesso coinvolge
                                        attività all'aria aperta come escursioni o nuoto, favorendo il movimento e il
                                        benessere fisico. Inoltre, ci consente di sperimentare una dieta più varia e
                                        nutriente, arricchendo il nostro corpo con sapori e alimenti locali.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>

                <div class="col-12">

                    <div class="container pb-5">

                        <div class="row rounded">

                            <div class="col-12 col-lg-8 ">
                                <div class="px-5 pt-4">
                                    <h4 class="fw-7">Responsabile e sostenibile</h4>
                                    <p class="text-secondary">
                                        Attraverso il turismo responsabile e sostenibile, possiamo contribuire alla
                                        conservazione dell'ambiente e al sostegno delle comunità locali. Il viaggiare ci
                                        offre l'opportunità di connetterci con la natura, di apprezzare la sua bellezza
                                        e di impegnarci nella sua protezione. Infine, il viaggiare ci permette di creare
                                        legami significativi con le persone che incontriamo lungo il percorso.
                                        Attraverso lo scambio culturale e l'ospitalità locale, possiamo costruire ponti
                                        tra le diverse culture e promuovere la comprensione e la pace nel mondo. In
                                        sintesi, il benessere di viaggiare va oltre la semplice vacanza: è un'esperienza
                                        trasformativa che arricchisce il nostro essere in molti modi. Ci insegna a
                                        vivere pienamente, ad apprezzare la bellezza del mondo e a coltivare una gioia e
                                        una gratitudine durature per la vita.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4"><img style="width:100%;height:100%;object-fit:cover"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/iStock-527115069.jpg"
                                    alt="">
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
                <div class="col-12">

                    <div class="container pb-5">

                        <div class="row rounded">
                            <div class="col-12 col-lg-4"><img style="width:100%;height:100%;object-fit:cover"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/2149153260.jpg" alt="">
                            </div>
                            <div class="col-12 col-lg-8 ">
                                <div class="px-5 pt-4">
                                    <h4 class="fw-7">Ispirazione crescita personale</h4>
                                    <p class="text-secondary">
                                        Viaggiare è una ricca fonte di ispirazione e crescita personale. Oltre ai
                                        benefici già citati, contribuisce in vari modi al nostro benessere complessivo.

                                        Espansione delle prospettive: Esplorando nuove culture e punti di vista,
                                        sviluppiamo una mentalità aperta e inclusiva.
                                        Aumento della fiducia in sé stessi: Affrontando sfide durante i viaggi,
                                        superiamo i nostri limiti e acquisiamo fiducia nelle nostre capacità.
                                        Riduzione dello stress: Lontano dalla routine, ci disconnettiamo dalle
                                        preoccupazioni, favorendo serenità mentale.
                                        Stimolazione sensoriale: Le esperienze di viaggio coinvolgono i sensi,
                                        rendendoci più consapevoli del mondo circostante.
                                        Crescita personale: Il viaggiare ci spinge al di là della nostra zona di
                                        comfort, offrendoci costanti opportunità di apprendimento e crescita.
                                        Memorie indelebili: Le esperienze di viaggio sono memorabili, creando ricordi
                                        che durano nel tempo.
                                        Promozione della creatività: Esplorando nuovi luoghi, sblocciamo la creatività e
                                        troviamo ispirazione per nuove idee.
                                        Apprezzamento della diversità: Viaggiando, impariamo ad apprezzare la ricchezza
                                        della diversità umana e naturale, rafforzando il nostro senso di appartenenza
                                        globale.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="col-12">

                    <div class="container pb-5">

                        <div class="row rounded">
                            <div class="col-12 col-lg-8 ">
                                <div class="px-5 pt-4">
                                    <h4 class="fw-7">Conclusione</h4>
                                    <p class="text-secondary">
                                        Il viaggiare non è solo un passatempo, ma un'esperienza che arricchisce la
                                        nostra vita in molteplici modi. Oltre al relax e al divertimento, ci spinge ad
                                        esplorare, imparare e crescere, contribuendo al nostro benessere fisico, mentale
                                        e spirituale. Ci allontana dalla routine, ci apre a nuove culture e ci
                                        arricchisce profondamente, permettendoci di scoprire nuovi lati di noi stessi e
                                        ampliare le nostre prospettive. Creiamo ricordi indelebili, legami significativi
                                        e contribuiamo alla conservazione dell'ambiente e al rispetto delle comunità
                                        locali. In un'era digitalmente connessa, il viaggiare ci ricorda l'importanza di
                                        sperimentare il mondo con i nostri sensi, abbracciare l'incertezza e coltivare
                                        una profonda connessione con noi stessi, gli altri e il mondo che ci circonda.
                                        Quindi, sia che si tratti di un'avventura lontana o di una semplice gita nel
                                        parco locale, investire del tempo nel viaggiare è un investimento prezioso nel
                                        nostro benessere complessivo, testimoniando il nostro desiderio innato di
                                        esplorare, scoprire e crescere.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4"><img style="width:100%;height:100%;object-fit:cover"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/city.jpg" alt="">
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>








<?php get_footer(); ?>