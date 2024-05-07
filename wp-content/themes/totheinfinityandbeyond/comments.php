<div class="bg-black pb-5 text-white">

    <div class="container pt-5">
        <p class="">Se hai trovato utile questo articolo</p>

        <div class="row commenti">
            <div class="col-md-8">
                <div class="comment-form">
                    <?php comment_form(); ?>
                </div>
            </div>

            <div class="col-md-4 p-2 text-center ">
                <h1>WeTravel i numeri</h1>
                <div class="d-flex pt-5 gap-5 we">
                    <div>
                        <h2 class="display-6">250+</h2>
                        <p>Itinerari in tutto il mondo</p>

                    </div>
                    <div class="border-start border-end px-2">
                        <h2 class="display-6 ">100.000</h2>
                        <p>Persone in tutta Europa sono già partite con noi </p>
                     

                    </div>
                    <div>
                        <h2 class="display-6">4.7</h2>
                        <p>Gradimento dei nostri viaggi</p>

                    </div>



                </div>

            </div>
            <hr>
            <div class="col-12 mt-5 ">
                <p>Commenti dei nostri utenti</p>
                <div class="user-comments ">
                    <?php if (have_comments()): ?>
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