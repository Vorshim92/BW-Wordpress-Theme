<div class="p-5 text-center my-5 ">
    <h1>WeTravel i numeri</h1>
    <div class="d-flex p-5 gap-5 we justify-content-center">
        <div class="p-5">
            <h2 class="display-6">250+</h2>
            <p>Itinerari in tutto il mondo</p>

        </div>
        <div class="border-start border-end p-5">
            <h2 class="display-6 ">100.000</h2>
            <p>Persone in tutta Europa sono già partite con noi </p>


        </div>
        <div class="p-5">
            <h2 class="display-6">4.7</h2>
            <p>Gradimento dei nostri viaggi</p>

        </div>



    </div>

</div>

<div class="container-fluid">
    <div class="card rounded-5 bg-black p-5 text-white">

        <p class="">Se hai trovato utile questo articolo</p>

        <div class="row commenti">
            <div class=" col-6">
                <div class="comment-form ">
                    <?php comment_form(); ?>
                </div>
            </div>



            <div class="col-6 ">
                <p>Commenti dei nostri utenti</p>
                <div class="user-comments ">
                    <?php if (have_comments()) : ?>
                        <ul class="comment-list p-0">
                            <?php
                            wp_list_comments(
                                array(
                                    'style' => 'ul',
                                    'short_ping' => true,
                                    'avatar_size' => 50,
                                )
                            );
                            ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>