<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Welcome - JING, emping jagung aneka rasa dengan harga terjangkau">
        <meta name="viewport" content="width=device-width, maximum-scale=2">

        <meta property="og:title" content="JING" >
        <meta property="og:type" content="makanan.jajanan" >

        <title>Welcome - JING, jagung emping aneka rasa</title>

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '868647449985926');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=868647449985926&ev=PageView&noscript=1"
                   /></noscript>
    <!-- End Facebook Pixel Code -->


    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="shortcut icon" href="assets/favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel="preload" href="assets/css/style.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
    <link rel="preload" href="assets/css/responsive.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
    <link rel="preload" href="assets/css/animate.min.css" as="style" onload="this.onload = null;this.rel = 'stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/style.min.css"></noscript>
    <noscript><link rel="stylesheet" href="assets/css/responsive.min.css"></noscript>
    <noscript><link rel="stylesheet" href="assets/css/animate.min.css"></noscript>

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

<body style="background: #FFEE02">
    <script>
        fbq('track', 'ViewContent');
    </script>

    <header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <h1 class="animated fadeInDown delay-12s">WELCOME TO JING CHIPS</h1>
            <h1 class="animated fadeInDown delay-12s">JING, jagung emping aneka rasa</h1>
            <figure class="logo animated fadeInDown delay-03s">
                <img src="assets/img/logo.webp" alt="logo-jing">
            </figure>

            <ul class="we-create animated fadeInUp delay-1s">
                <li>Gak ngeJing, gak gaul!</li>
            </ul>
            <a style="text-decoration: none" class="link animated fadeInUp delay-1s servicelink" href="home">ngejing kuy</a>
        </div>
    </header>
</body>



</html>
