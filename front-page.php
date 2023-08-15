<!-- WORDPRESS TEMPLATE FOR FRONT PAGE -->
<?php get_header();

?>

<main class="front-page">
    <section class="fp__banner">
        <div class="fp__banner-overlay"></div>
        <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/towfiqu-barbhuiya-JhevWHCbVyw-unsplash-1-min-2-scaled.jpg"
            alt="" class="fp__banner-img" />


        <div class="fp__banner-inner">
            <div class="container">
                <h1 class="fp__banner-inner-title">Creating solutions for your future</h1>
            </div>
        </div>
    </section>

    <section class="fp__help">
        <div class="container">
            <div class="fp__help-intro">
                <h2>How We Can Help You</h2>
                <div class="dot" />
            </div>
        </div>
    </section>

    <section class="fp__business">
        <!-- fp__business divided into 2 divs so we can apply bg at 50% height -->
        <div class="fp__business-top"></div>
        <div class="fp__business-bottom"></div>
        <div class="container">
            <div class="fp__business-card">
                <div class="fp__business-card-left">
                    <h3>Business Services</h3>
                    <p>Here is a list of services we are currently providing to our clients</o>
                    <div class="fp-grid">
                        <div class="fp-grid__child">A</div>
                        <div class="fp-grid__child">B</div>
                        <div class="fp-grid__child">C</div>
                        <div class="fp-grid__child">D</div>
                        <div class="fp-grid__child">E</div>
                        <div class="fp-grid__child">F</div>
                        <div class="fp-grid__child">G</div>
                        <div class="fp-grid__child">H</div>
                    </div>
                </div>
                <div class="fp__business-card-right">
                    <img src="http://elancewebsitelocal.local/wp-content/uploads/2023/08/towfiqu-barbhuiya-JhevWHCbVyw-unsplash-1-min-2-scaled.jpg"
                        alt="" class="fp__business-card-right-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="fp__personal">
        <div class="container">
            <h1>DEF</h1>
        </div>
    </section>
</main>




<?php get_footer(); ?>