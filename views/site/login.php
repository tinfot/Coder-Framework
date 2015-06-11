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
                        <li><a href="index.php?c=site/login">LOG IN</a><span>|</span></li>
                        <li><a href="#contact" class="scroll">CONTACT</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
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
        <div class="clearfix"></div>
        <!--Contact-Starts-Here-->
        <div class="contact" id="contact" style="margin-top: 100px;">
            <div class="container">
                <div class="contact-main">
                    <div class="col-md-6 contact-left wow bounceInLeft" data-wow-delay="0.4s">
                        <h3>Log in</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <ul>
                            <li><p>T: 212-555-1211</p></li>
                            <li><p><a href="mailto:example@email.com"> E: info@techandall.com </a></p></li>
                            <li><p>F:<a href="#"> facebook.com/techandall</a></p></li>
                        </ul>
                    </div>
                    <div class="col-md-6 contact-left wow bounceInRight" data-wow-delay="0.4s" style="margin-top:45px;">
                        <form method="post" action="index.php?c=site/login-save">
                            <input name="Login[username]" type="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Username';
                                    }"/>
                            <input name="Login[password]" type="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }"/>
                            <div class="contact-but">
                                <input type="submit" value="SEND" />
                            </div>
                        </form>                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--Contact-Ends-Here-->


        <!--Footer-Starts-Here-->
        <div class="footer">
            <div class="conatiner">
                <div class="footer-text wow bounce" data-wow-delay="0.1s">
                    <p>TEMPLATE BY <a href="http://w3layouts.com/"> W3LAYOUTS</a></p>
                    <ul>
                        <li><a href="#"><span class="twt"> </span></a></li>
                        <li><a href="#"><span class="t"> </span></a></li>
                        <li><a href="#"><span class="g"> </span></a></li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear' 
                     };
                     */

                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!--Footer-Ends-Here-->
    </body>
</html>