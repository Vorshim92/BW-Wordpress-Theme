<footer class="footer mytheme mt-5">
    <div class="container p-3">
        <div class="row gy-3 text-start">
            <div class="col-12 col-md-4">
                <h5>About Us</h5>
                <p class="m-2">I nostri coordinatori</p>
                <p class="m-2">Community</p>
                <p class="m-2">Lavora con noi</p>
                <p class="m-2">Cosa dicono di noi su Trustpilot</p>
                <p class="m-2"><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="col-12 col-md-4">
                <h5>Contact Us</h5>
                <p class="m-2"><i class="bi bi-geo-alt-fill"></i></i> | Address: 123 Main St, Cityville</p>
                <p class="m-2"><i class="bi bi-telephone-fill"></i> | Phone: +123 456 7890</p>
                <p class="m-2"><i class="bi bi-envelope"></i></i> | Email: info@example.com</p>


            </div>
            <div class="col-12 col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a class="m-2 fw-semibold" href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a class="m-2 fw-semibold" href="<?= site_url('/chi-siamo') ?>">Contact</a></li>
                </ul>
            </div>
            <span class="text-center">"We travel © 2024 Tutti i diritti riservati."</span>
            <hr>
            <div class="col-12 text-center">
                <i class="fs-4 mx-2 bi bi-facebook"></i>
                <i class="fs-4 mx-2 bi bi-instagram"></i>
                <i class="fs-4 mx-2 bi bi-whatsapp"></i>
                <i class="fs-4 mx-2 bi bi-twitter"></i>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>