<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <link rel="icon" href="assets/favicon.png" type="image/png">
        <link rel="shortcut icon" href="assets/favicon.ico" type="img/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="assets/js/jquery.1.8.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/jquery-scrolltofixed.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/jquery.isotope.js"></script>
        <script type="text/javascript" src="assets/js/wow.js"></script>
        <script type="text/javascript" src="assets/js/classie.js"></script>
        
    </head>
    <body>
        <section class="main-section client-part" id="top">
        </section>
        <nav class="main-nav-outer" id="test">
            <!--main-nav-start-->
            <div class="container">
                <ul class="main-nav">
                    <li><a href="#">Tentang JING!</a></li>
<!--                    <li><a href="#service">Services</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>-->
                    <li class="small-logo"><a href="#top"><img src="assets/img/small-logo.png" alt="logo-jing-kecil"></a></li>
                    <li><a href="#">Jadi Mitra JING!</a></li>
<!--                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>-->
                </ul>
                <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        
        <script type="text/javascript">
        $(document).ready(function (e) {
            $('#test').scrollToFixed();
            $('.res-nav_click').click(function () {
                $('.main-nav').slideToggle();
                return false

            });

        });
    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function () {

            $('.main-nav li a, .servicelink').bind('click', function (event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, 'easeInOutExpo');
                /*
                 if you don't want to use the easing effects:
                 $('html, body').stop().animate({
                 scrollTop: $($anchor.attr('href')).offset().top
                 }, 1000);
                 */
                if ($(window).width() < 768) {
                    $('.main-nav').hide();
                }
                event.preventDefault();
            });
        })
    </script>

    <script type="text/javascript">
        $(window).load(function () {


            var $container = $('.portfolioContainer'),
                    $body = $('body'),
                    colW = 375,
                    columns = null;


            $container.isotope({
                // disable window resizing
                resizable: true,
                masonry: {
                    columnWidth: colW
                }
            });

            $(window).smartresize(function () {
                // check if columns has changed
                var currentColumns = Math.floor(($body.width() - 30) / colW);
                if (currentColumns !== columns) {
                    // set new column count
                    columns = currentColumns;
                    // apply width to container manually, then trigger relayout
                    $container.width(columns * colW)
                            .isotope('reLayout');
                }

            }).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function () {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });
    </script>
        
    </body>
</html>