<?php

$business_services_query = new WP_Query(
    array(
        'post_type' => 'business_services',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

$personal_services_query = new WP_Query(
    array(
        'post_type' => 'personal_services',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

?>

<!-- WORDPRESS TEMPLATE FOR FOOTER -->


<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__inner-col">
                <div class="one__top">
                    <h5>Contact Details</h5>
                    <div class="one__top-row">
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/phone-1.png"
                            alt="Footer contact icon" class="one__top-icon" />
                        <span>Phone:</span><a href="tel:97206811">(+61 3) 9720 6811</a>
                    </div>
                    <div class="one__top-row">
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/mail@4x.png"
                            alt="Footer mail icon" class="one__top-icon" />
                        <span>Email:</span><a href="mailto:elysiumafs.com.au">mail@elysiumafs.com.au</a>
                    </div>
                    <div class="one__top-row">
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/edit.png"
                            alt="Footer contact icon" class="one__top-icon" />
                        <span>Mailing:</span><a>PO Box 9249, Scoresby, VIC, 3179</a>
                    </div>
                </div>
                <div class="one__bottom">
                    <h5>Our Locations</h5>
                    <div class="one__bottom-row">
                        <div class="one__bottom-row-head">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png"
                                alt="Footer phone icon" class="one__bottom-icon" />
                            <span>Scoresby</span>
                        </div>
                        <p>1/2 Keith Campbell Court, Scoresby, VIC, 3179</p>
                        <a href="">Get Directions <img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                                alt="Directions Arrow Icon" class="one__bottom-icon-direction" /></a>
                    </div>
                    <div class="one__bottom-row">
                        <div class="one__bottom-row-head">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png"
                                alt="Footer map icon" class="one__bottom-icon" />
                            <span>Malvern
                            </span>
                        </div>
                        <p>Suite 9, 1 Milton Parade, Malvern, VIC, 3144</p>
                        <a href="">Get Directions <img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                                alt="Directions Arrow Icon" class="one__bottom-icon-direction" /></a>
                    </div>
                    <div class="one__bottom-row">
                        <div class="one__bottom-row-head">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png"
                                alt="Footer map icon" class="one__bottom-icon" />
                            <span>Monbulk
                            </span>
                        </div>
                        <p>130 Main Road, Monbulk, VIC, 3793</p>
                        <a href="">Get Directions <img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/Arrow-1.png"
                                alt="Directions Arrow Icon" class="one__bottom-icon-direction" /></a>
                    </div>
                </div>
            </div>
            <div class="footer__inner-col">
                <h5>Business</h5>
                <div class="footer__inner-col-links">
                    <?php
                    if ($business_services_query->have_posts()) {
                        while ($business_services_query->have_posts()) {
                            $business_services_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();

                            echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
            </div>
            <div class="footer__inner-col">
                <h5>Personal</h5>
                <div class="footer__inner-col-links">
                    <?php
                    if ($personal_services_query->have_posts()) {
                        while ($personal_services_query->have_posts()) {
                            $personal_services_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();

                            echo '<a href="' . $link . '" class="footer__link">' . $title . '</a>';
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
            </div>
            <div class="footer__inner-col between">
                <div>
                    <h5>Quick Links</h5>
                    <div class="footer__inner-col-links">
                        <!-- Quick Links Here -->a
                        <div>b</div>
                        <div>b</div>
                        <div>b</div>
                        <div>b</div>
                    </div>
                </div>
                <div class="footer__socials">
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/logo-1-1.png" />
                    <div class="footer__socials-row">
                        <a href=""><img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/instagram.png" /></a>
                        <a href=""><img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/facebook-02.png" /></a>
                        <a href=""><img
                                src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/youtube.png" /></a>
                    </div>
                </div>
            </div>

        </div>
        <hr />
        <div class="footer__terms">
            <div>
                <p>
                    &copy;
                    <?php echo do_shortcode('[current_year]'); ?>
                    Elysium Accounting & Financial Solutions Pty Ltd | All Rights Reserved | ABN 67 704 847 486 |
                    'Liability limited by a scheme approved under Professional Standards Legislation.'
                </p>
            </div>
            <div>
                <a href="">Terms Of Use</a>
                <a href="">Privacy Policy</a>
            </div>
        </div>
</footer>

</body>

</html>

<?php wp_footer(); ?>