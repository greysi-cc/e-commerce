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

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">I'M NEW CUSTOMER</h1>

                                        <span class="gl-text u-s-m-b-30">By creating an account with our store, you will be able to move through the checkout process faster, store shipping addresses, view and track your orders in your account and more.</span>
                                        <div class="u-s-m-b-15">

                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="#">CREATE AN ACCOUNT</a></div>
                                        <h1 class="gl-h1">SIGNIN</h1>

                                        <span class="gl-text u-s-m-b-30">If you have an account with us, please log in.</span>
                                        <form class="l-f-o__form">
                                            <div class="gl-s-api">
                                                <div class="u-s-m-b-15">

                                                    <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                                        <span>Signin with Facebook</span></button></div>
                                                <div class="u-s-m-b-15">

                                                    <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                                        <span>Signin with Google</span></button></div>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="login-email">E-MAIL *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="login-email" placeholder="Enter E-mail"></div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="login-password">PASSWORD *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="login-password" placeholder="Enter Password"></div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button></div>
                                                <div class="u-s-m-b-30">

                                                    <a class="gl-link" >Lost Your Password?</a></div>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="remember-me">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="remember-me">Remember Me</label></div>
                                                </div>
                                                <!--====== End - Check Box ======-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
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