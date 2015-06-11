<!DOCTYPE html>
<html>
    <head>
        <title>Coder Framework</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Peculiar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="views/media/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="views/media/css/style.css" rel='stylesheet' type='text/css' />
        <script src="views/media/js/jquery-1.11.0.min.js"></script>
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="views/media/js/move-top.js"></script>
        <script type="text/javascript" src="views/media/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>

        <!--start-smoth-scrolling-->
        <!--animated-css-->
        <link href="views/media/css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="views/media/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--animated-css-->  
    </head>
    <body>
        <!--start-banner-->
        <div class="banner" id="home">
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="banner-1">
                        </div>
                    </li>
                    <li>
                        <div class="banner-2">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="header">
                <div class="logo">
                    <a href="./">Coder-Framework</a>
                </div>
                <div class="navigation">
                    <span class="menu"></span> 
                    <ul class="navig">
                        <li><a href="index.php" class="scroll">HOME</a><span>|</span></li>
                        <li><a href="#portfolio" class="scroll">PORTFOLIO</a><span>|</span></li>
                        <?php if(Session::_get('User')): ?>
                            <li><a href="index.php?c=site/logout">LOGOUT</a><span>|</span></li>
                        <?php else: ?>
                            <li><a href="index.php?c=site/login">LOG IN</a><span>|</span></li>
                        <?php endif; ?>
                        <li><a href="#contact" class="scroll">CONTACT</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="banner-bottom">
                <ul>
                    <li><a href="#"><span class="twt"> </span></a></li>
                    <li><a href="#"><span class="t"> </span></a></li>
                    <li><a href="#"><span class="g"> </span></a></li>
                </ul>
            </div>
        </div>	
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function() {
                $(" ul.navig").slideToggle("slow", function() {
                });
            });
        </script>
        <!-- script-for-menu -->
        <!--Slider-Starts-Here-->
        <script src="views/media/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function() {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--End-slider-script-->
        <!--end-banner-->

    