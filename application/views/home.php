<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Home - JING, emping jagung aneka rasa dengan harga terjangkau">
        <meta name="viewport" content="width=device-width, maximum-scale=2">

        <meta property="og:title" content="JING" >
        <meta property="og:type" content="makanan.jajanan" >

        <title>Home - JING, jagung emping aneka rasa</title>

        <link rel="preload" href="assets/lib/animate/animate.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
        <link rel="preload" href="assets/lib/owlcarousel/assets/owl.carousel.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
        <link rel="preload" href="assets/css/style_1.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
        <noscript><link rel="stylesheet" href="assets/lib/animate/animate.min.css"></noscript>
        <noscript><link rel="stylesheet" href="assets/lib/owlcarousel/assets/owl.carousel.min.css"></noscript>
        <noscript><link rel="stylesheet" href="assets/css/style_1.min.css"></noscript>

        <script>
            /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
            /* This file is meant as a standalone workflow for
             - testing support for link[rel=preload]
             - enabling async CSS loading in browsers that do not support rel=preload
             - applying rel preload css once loaded, whether supported or not.
             */
            (function (w) {
                "use strict";
                // rel=preload support test
                if (!w.loadCSS) {
                    w.loadCSS = function () {};
                }
                // define on the loadCSS obj
                var rp = loadCSS.relpreload = {};
                // rel=preload feature support test
                // runs once and returns a function for compat purposes
                rp.support = (function () {
                    var ret;
                    try {
                        ret = w.document.createElement("link").relList.supports("preload");
                    } catch (e) {
                        ret = false;
                    }
                    return function () {
                        return ret;
                    };
                })();

                // if preload isn't supported, get an asynchronous load by using a non-matching media attribute
                // then change that media back to its intended value on load
                rp.bindMediaToggle = function (link) {
                    // remember existing media attr for ultimate state, or default to 'all'
                    var finalMedia = link.media || "all";

                    function enableStylesheet() {
                        link.media = finalMedia;
                    }

                    // bind load handlers to enable media
                    if (link.addEventListener) {
                        link.addEventListener("load", enableStylesheet);
                    } else if (link.attachEvent) {
                        link.attachEvent("onload", enableStylesheet);
                    }

                    // Set rel and non-applicable media type to start an async request
                    // note: timeout allows this to happen async to let rendering continue in IE
                    setTimeout(function () {
                        link.rel = "stylesheet";
                        link.media = "only x";
                    });
                    // also enable media after 3 seconds,
                    // which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
                    setTimeout(enableStylesheet, 3000);
                };

                // loop through link elements in DOM
                rp.poly = function () {
                    // double check this to prevent external calls from running
                    if (rp.support()) {
                        return;
                    }
                    var links = w.document.getElementsByTagName("link");
                    for (var i = 0; i < links.length; i++) {
                        var link = links[ i ];
                        // qualify links to those with rel=preload and as=style attrs
                        if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                            // prevent rerunning on link
                            link.setAttribute("data-loadcss", true);
                            // bind listeners to toggle media back
                            rp.bindMediaToggle(link);
                        }
                    }
                };

                // if unsupported, run the polyfill
                if (!rp.support()) {
                    // run once at least
                    rp.poly();

                    // rerun poly on an interval until onload
                    var run = w.setInterval(rp.poly, 500);
                    if (w.addEventListener) {
                        w.addEventListener("load", function () {
                            rp.poly();
                            w.clearInterval(run);
                        });
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", function () {
                            rp.poly();
                            w.clearInterval(run);
                        });
                    }
                }


                // commonjs
                if (typeof exports !== "undefined") {
                    exports.loadCSS = loadCSS;
                } else {
                    w.loadCSS = loadCSS;
                }
            }(typeof global !== "undefined" ? global : this));

        </script>

    </head>
    <body>
        <script>
            fbq('track', 'ViewContent');
        </script>
        <section class="main-section alabaster">
            <!--main-section alabaster-start-->
            <div class="container">
                <div class="row">
                    <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                        <center><img src="assets/img/jing_depan.webp" alt=""></center>
                    </figure>
                    <div class="col-lg-7 col-sm-8 featured-work">
                        <header class="section-header">
                            <h3>Apa itu JING?</h3>
                        </header>
                        <P class="padding-b">Eitss, apa yang ada di pikiranmu pertama kali kalo dengar kata JING!
                            Jangan negative thinking dulu, JING itu adalah singkatan dari “Jagung Emping”
                            Nah, kami ingin mengubah kata JING menjadi bermakna positif.
                            Seperti positifnya Jing Chips bagi penikmatnya.
                            Jing Chips adalah Snack olahan dari jagung emping home made, dipadukan dengan taburan rasa khas dan kekinian. Serta dikemas didalam packaging yang menarik.</P>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Aneka rasa jing</h3>
                </header>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-1.webp" class="testimonial-img" alt="">
                        <h3>Choco Booster</h3>
                        <h4>Let's get your mood</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.webp" class="quote-sign-left" alt="">
                            Hmm renyanhnya emping jagung yang dipadukan dengan taburan coklat asli nan tebel yang pas, menyatu di mulut
                            <br>
                            krezz.. krezz.. krezz..
                            <br>
                            yakin deh bisa mengembalikan mood kamu yang hilang
                            <img src="assets/img/quote-sign-right.webp" class="quote-sign-right" alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-2.webp" class="testimonial-img" alt="">
                        <h3>Vanillaugh</h3>
                        <h4>Make you happy</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.webp" class="quote-sign-left" alt="">
                            Percaya gak sih rasa yang satu ini bisa buat kamu bahagia?
                            <br>
                            Coba deh bayangin renyahnya emping jagung ditambah nikmatnya taburan bumbu vanilla yang harum, menyatu di mulut kamu
                            <br>
                            yummy.. banget deh
                            <img src="assets/img/quote-sign-right.webp" class="quote-sign-right" alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonial-3.webp" class="testimonial-img" alt="">
                        <h3>Greenteavity</h3>
                        <h4>Green your day</h4>
                        <p>
                            <img src="assets/img/quote-sign-left.webp" class="quote-sign-left" alt="">
                            Rasakan perpaduan krenyesnya emping jagung ditambah rasa greentea yang membuat kamu rileks
                            <br>
                            hmm..
                            <br>
                            Pastinya bakalan buat kamu semangat menjalani aktivitas
                            <img src="assets/img/quote-sign-right.webp" class="quote-sign-right" alt="">
                        </p>
                    </div>


                </div>
            </div>
        </section>

        <section class="main-section alabaster">
            <!--main-section alabaster-start-->
            <div class="container">
                <div class="featured-work">
                    <header class="section-header">
                        <h3>Mana rasa favoritmu?</h3>
                    </header>
                    <P class="padding-b">Nah, sudah tahu kan apa aja rasa dari JING, jagung emping aneka rasa,
                        ada rasa coklat, vanilla, dan greentea loh. Yang mana rasa favoritmu? Belum pernah nyoba nih?
                        Rasa kesayanganmu ada tapi nggak ada yang jual JING di daerahmu? Cari tahu jawabannya disini:    
                    </P>
                    <center><a class="link animated fadeInUp delay-1s servicelink" href="reseller">cari tahu</a></center>
                </div>
            </div>
        </section>
        <!-- JavaScript Libraries -->
        <script src="assets/lib/superfish/superfish.min.js"></script>
        <script src="assets/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/lib/counterup/counterup.min.js"></script>
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    </body>
</html>