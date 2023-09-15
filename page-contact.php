<?php

/*
Template Name: Contact Template
*/

get_header();

?>



<section class="contact">
    <div class="container">
        <div class="contact__outer">
            <div class="contact__outer-left">
                <div class="contact__outer-left-intro">
                    <span>Contact Us</span>
                    <h3>Talk to one of our experienced team members</h3>
                </div>
                <div class="contact__outer-left-icons">
                    <div>
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/phone-1.png"
                            alt="Phone icon" />
                        <div>
                            <h5>Phone</h5>
                            <a href="tel:61397206811"><span>(+61 3) 9720 6811</span></a>
                        </div>
                    </div>
                    <div>
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/mail@4x.png"
                            alt="Footer mail icon" />
                        <div>
                            <h5>Email</h5>
                            <a href="mailto:mail@elysiumafs.com.au"><span>mail@elysiumafs.com.au</span></a>
                        </div>
                    </div>
                    <div>
                        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/edit.png"
                            alt="Footer mail icon" />
                        <div>
                            <h5>Mailing</h5>
                            <a><span>PO Box 9249, Scoresby, 3179</span></a>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <div class="contact__outer-right">
                <?php echo do_shortcode('[contact-form-7 id="286029a" title="Contact"]'); ?>
            </div>
        </div>
</section>

<section class="locations">
    <div class="container">
        <div class="locations-outer">
            <div class="locations-outer__intro">
                <h3>Our Locations</h3>
            </div>
            <div class="locations-outer__grid">
                <div class="locations-outer__grid-item">
                    <div class="locations-outer__grid-item-container">
                        <div class="locations-outer__grid-item-container-title">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png" />
                            <h4>Scoresby</h4>
                        </div>
                        <div class="locations-outer__grid-item-container-content">
                            <p>1/2 Keith Campbell Court, Scoresby, VIC, 3179</p>
                            <?php
                            get_template_part('template-parts/button/button', null, array('buttonText' => 'Get Directions', 'buttonLink' => 'https://goo.gl/maps/M1QSJV6k3yMWNDkg8', 'imgHidden' => true));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="locations-outer__grid-item">
                    <div class="locations-outer__grid-item-container">
                        <div class="locations-outer__grid-item-container-title">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png" />
                            <h4>Malvern</h4>
                        </div>
                        <div class="locations-outer__grid-item-container-content">
                            <p>Suite 9, 1 Milton Parade, Malvern, VIC, 3144</p>
                            <?php
                            get_template_part('template-parts/button/button', null, array('buttonText' => 'Get Directions', 'buttonLink' => 'https://goo.gl/maps/cJirhkomjttJmSq9A', 'imgHidden' => true));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="locations-outer__grid-item">
                    <div class="locations-outer__grid-item-container">
                        <div class="locations-outer__grid-item-container-title">
                            <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/location-01-1.png" />
                            <h4>Monbulk</h4>
                        </div>
                        <div class="locations-outer__grid-item-container-content">
                            <p>130 Main Road, Monbulk, VIC, 3793</p>
                            <?php
                            get_template_part('template-parts/button/button', null, array('buttonText' => 'Get Directions', 'buttonLink' => 'https://goo.gl/maps/uXyzCuJ1oskWRbLv9', 'imgHidden' => true));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/map', null, array());
?>

<?php
get_template_part('template-parts/call-to-action', null, array());
?>

<?php
get_template_part('template-parts/social-reel', null, array());
?>

<?php get_footer() ?>