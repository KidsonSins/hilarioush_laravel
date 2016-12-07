<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hilarioush English Boarding School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/frontend/font-awesome/css/font-awesome.min.css')  }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/frontend/css/all.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/frontend/css/styles.css') }} " />
    @yield('styles')
</head>

<body itemscope>
<div class="theme-layout">

    <div class="header-container stick transparent">
        <header>
            <div class="container">
                <div class="logo-sec">
                    <a href="/"><img src="{{ asset('dist/frontend/images/hilarioush.png') }}" alt=""></a>
                </div>
                <!-- logo -->
                <nav>
                    <ul>
                        <li class=""><a href="/" title="">Home</a></li>
                        <li class=""><a href="/about" title="">About</a></li>
                        <li class=""><a href="/news" title="">News and Events</a></li>
                        <li class=""><a href="/gallery" title="">Gallery</a></li>
                        <li><a href="/contact" title="">Contact</a></li>
                    </ul>

                </nav>
                <!-- nav -->
                <span class="responsive-btn"><a href="#" title=""><i class="fa fa-align-center"></i></a></span>
            </div>
        </header>
        <div class="responsive-menu">
            <ul>
                <li class=""><a href="/" title="">Home</a></li>
                <li class=""><a href="/about" title="">About</a></li>
                <li class=""><a href="/news" title="">News and Events</a></li>
                <li class=""><a href="/gallery" title="">Gallery</a></li>
                <li><a href="/contact" title="">Contact</a></li>
            </ul>
        </div>
        <!-- Responsive Menu -->
    </div>
    <!-- Header Container -->
@yield('content')


    <footer class="">

        <div class="block bar-off darkblue-layer">
            <div data-velocity="-.1" style="background: url({{ asset('dist/frontend/images/myimg3asdf.jpg') }}) repeat scroll 50% 0 transparent;background-size:cover;" class="parallax"></div>
            <div class="container">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="about-widget">
                                    <a href="#"><img src="{{ asset('dist/frontend/images/footerlogo.png') }}" alt="" style="max-width:90%;"></a>
                                    <p id="mytypeit">
                                        Hilarioush English Boarding School, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sed deserunt similique adipisci et ratione unde illum, nesciunt! Molestias suscipit tempora et? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, tempore. Sed, dolor. .</p>
                                </div>
                            </div>
                            <!-- Widget -->
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Major Programs</h4>
                                    <span>Hilarioush English Boarding School</span>
                                </div>
                                <ul>
                                    <li> <i class="fa fa-home"></i>Program one Program one</li>
                                    <li> <i class="fa fa-deviantart"></i>Program one Program one</li>
                                    <li> <i class="fa fa-tasks"></i>Program one Program one</li>
                                    <li> <i class="fa fa-twitch"></i>Program one Program one</li>
                                    <li> <i class="fa fa-dashboard"></i>Program one Program one</li>
                                </ul>
                                <!-- ul -->
                            </div>
                            <!-- Luxury Offers -->
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Quick Links</h4>
                                    <span>Hilarioush</span>
                                </div>
                                <ul class="mywhite">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="">Contact us</a></li>

                                </ul>
                                <!-- ul -->
                            </div>
                            <!-- Luxury Offers -->
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Contact Us</h4>
                                    <span>we are not far</span>
                                </div>
                                <ul>
                                    <li><i class="fa fa-home"></i>Address: Kathmandu, Nepal</li>
                                    <li><i class="fa fa-mobile-phone"></i>Mobile:+977-1-4784428/4784429</li>
                                    <li><i class="fa fa-clipboard"></i>Email:info@gmail.com</li>
                                    <li><i class="fa fa-fax"></i>Fax:9841XXXXXX</li>
                                    <li><i class="fa fa-server"></i>Website:www.hilarioush.edu.np</li>
                                </ul>
                                <!-- ul -->
                            </div>
                            <!-- Luxury Offers -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widgets -->
            </div>
        </div>
    </footer>
    <!-- footer -->
    <div class="bottom-footer">
        <div class="container">
            <p id="mytypeit">&copy; 2015 <a href="#">Hilarioush School</a> - All Rights Reserved - Made By <a href="#">JaVaS</a></p>
        </div>
        <!-- container -->
    </div>
    <!-- after-footer -->

</div>
<script src="{{ asset('dist/frontend/js/all.js') }} " type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/jquery.typeit/3.0.1/typeit.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(window).load(function() {
        jQuery('.tp-banner').show().revolution({
            delay: 15000,
            startwidth: 1170,
            startheight: 650,
            autoHeight: "off",
            navigationType: "none",
            hideThumbs: 10,
            fullWidth: "on",
            fullScreen: "off",
            fullScreenOffsetContainer: ""
        });
        $('#example3').typeIt({
            speed: 75
        });
        $('#mytypeit').typeIt({
            speed: 30
        });
        /*================== SERVICES CAROUSEL ======================*/
        $('.service-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 30000,
            smartSpeed: 2000,
            loop: true,
            dots: false,
            nav: true,
            margin: 10,
            items: 3,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                767: {
                    items: 3
                },
                980: {
                    items: 3
                }
            }
        });
        /*================== CLIENTS CAROUSEL ======================*/
        $('.clients-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 30000,
            smartSpeed: 2000,
            loop: true,
            dots: false,
            nav: true,
            margin: 10,
            items: 5,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 3
                },
                767: {
                    items: 4
                },
                980: {
                    items: 5
                }
            }
        });


        $('.gallery-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 30000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 10,
            items: 4,
            autoHeight: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    });
</script>
<script>

    $(document).ready(function() {

        var owl = $("#h_news");

        owl.owlCarousel({
            items : 2, //10 items above 1000px browser width
            itemsDesktop : [1000,2], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });

        // Custom Navigation Events
//        $(".next").click(function(){
//            owl.trigger('owl.next');
//        })
//        $(".prev").click(function(){
//            owl.trigger('owl.prev');
//        })
//        $(".play").click(function(){
//            owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
//        })
//        $(".stop").click(function(){
//            owl.trigger('owl.stop');
//        })

    });
</script>

@yield('scripts')
</body>

</html>

