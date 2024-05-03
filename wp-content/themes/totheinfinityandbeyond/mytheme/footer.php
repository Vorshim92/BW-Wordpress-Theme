<footer class="footer mytheme">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-6">
                <h5>About Us</h5>
                <p><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Services</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Address: <?php echo get_option('contact_address'); ?></li>
                    <li>Phone: <?php echo get_option('contact_phone'); ?></li>
                    <li>Email: <?php echo get_option('contact_email'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


