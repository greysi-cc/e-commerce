<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

    <?php
    include("header.php");
    ?>


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="g-map">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->


            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="contact-o u-h-100">
                                    <div class="contact-o__wrap">
                                        <div class="contact-o__icon"><i class="fas fa-phone-volume"></i></div>

                                        <span class="contact-o__info-text-1">LET'S HAVE A CALL</span>

                                        <span class="contact-o__info-text-2">(+52) 999 901 904</span>

                                        <span class="contact-o__info-text-2">(+52) 999 901 902</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="contact-o u-h-100">
                                    <div class="contact-o__wrap">
                                        <div class="contact-o__icon"><i class="fas fa-map-marker-alt"></i></div>

                                        <span class="contact-o__info-text-1">OUR LOCATION</span>

                                        <span class="contact-o__info-text-2">Calle 58 #558 x 67 y 69. Col. Centro., 97000</span>

                                        <span class="contact-o__info-text-2">Mérida, Yucatán · ~3.9 km</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="contact-o u-h-100">
                                    <div class="contact-o__wrap">
                                        <div class="contact-o__icon"><i class="far fa-clock"></i></div>

                                        <span class="contact-o__info-text-1">WORK TIME</span>

                                        <span class="contact-o__info-text-2">5 Days a Week</span>

                                        <span class="contact-o__info-text-2">From 9 AM to 7 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-area u-h-100">
                                    <div class="contact-area__heading">
                                        <h2>Get In Touch</h2>
                                    </div>
                                    <form class="contact-f" method="post" action="index.php">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 u-h-100">
                                                <div class="u-s-m-b-30">

                                                    <label for="c-name"></label>

                                                    <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-name" placeholder="Name (Required)" required></div>
                                                <div class="u-s-m-b-30">

                                                    <label for="c-email"></label>

                                                    <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-email" placeholder="Email (Required)" required></div>
                                                <div class="u-s-m-b-30">

                                                    <label for="c-subject"></label>

                                                    <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-subject" placeholder="Subject (Required)" required></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 u-h-100">
                                                <div class="u-s-m-b-30">

                                                    <label for="c-message"></label><textarea class="text-area text-area--border-radius text-area--primary-style" id="c-message" placeholder="Compose a Message (Required)" required></textarea></div>
                                            </div>
                                            <div class="col-lg-12">

                                                <button class="btn btn--e-brand-b-2" type="submit">Send Message</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->
        </div>
        <!--====== End - App Content ======-->


        <?php
        include("footer.php");
        ?>
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== Google Map ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-MO9uPLS-ApTqYs0FpYdVG8cFwdq6apw"></script>

    <!--====== Google Map Init ======-->
    <script src="js/map-init.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>