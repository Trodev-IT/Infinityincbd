<!DOCTYPE HTML>
<html>
<head>
    <title>Adventure Gaming a Games a Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Adventure Gaming  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="{{asset('js/jquery.min.js')}}"></script>

</head>
<body>
<!-- header -->
<div class="top-banner">
    <div class="header">
        <div class="container">
            <div class="headr-left">
                <div class="social">
                    <a href="#"><i class="facebook"></i></a>
                    <a href="#"><i class="twitter"></i></a>
                    <a href="#"><i class="gplus"></i></a>
                    <a href="#"><i class="pin"></i></a>
                    <a href="#"><i class="youtube"></i></a>
                </div>
                <div class="search">
                    <form>
                        <input type="submit" value="">
                        <input type="text" value="" placeholder="Search...">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="headr-right">
                <div class="details">
                    <ul>
                        <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--banner-info-->
    <div class="banner-info">
        <div class="container">
            <div class="logo">
                <h1><a href="{{route('welcome')}}">InfinityincBD</a></h1>
            </div>
            <div class="top-menu">
                <span class="menu"></span>
                <ul class="nav1">
                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('aboutus')}}">About</a></li>
                    <li><a href="{{route('project')}}">Projects</a></li>
                    <li><a href="typo.html">News</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Mail</a></li>
                </ul>
            </div>
            <!-- script-for-menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.nav1" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- /script-for-menu -->

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- banner -->
<!-- Slider-starts-Here -->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto:true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            pager:true,
        });
    });

</script>
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">

            @foreach($pics as $pi)
            <div class="slid">
                <img src="{{asset('storage/'.$pi->pics)}}"  alt=""/>
                <div class="caption">
                    <h3>{{$pi->title}}</h3>
                    <p>{{$pi->subtitle}}</p>
                </div>
            </div>
            @endforeach
        </ul>
    </div>
</div>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="top-games">
            <h3>Top Games</h3>
            <span></span>
        </div>
        <div class="top-game-grids">
            <ul id="flexiselDemo1">
                @foreach($top as $tops)
                    <li>
                        <div class="game-grid">
                            <h4>{{$tops->title}}</h4>
                            <p>{{$tops->subtitle}}</p>
                            <img src="{{asset('storage/'.$tops->pics)}}" class="img-responsive" alt=""/>
                        </div>
                    </li>
                @endforeach


            </ul>

            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover:true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
</div>
<!-- latest -->
<div class="latest">
    <div class="container">
        <div class="latest-games">
            <h3>Latest Games</h3>
            <span></span>
        </div>
        <div class="latest-top">
            <div class="col-md-5 trailer-text">
                @foreach($latest as $games)
                <div class="sub-trailer">
                    <div class="col-md-4 sub-img">
                        <img src="{{asset('storage/'.$games->pics)}}" alt="img07"/>
                    </div>
                    <div class="col-md-8 sub-text">
                        <a href="#">{{$games->title}}</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-7">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/7UHSYC_8YQs?si=FuUAZNnQiG41surc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- poster -->
<div class="poster">
    <div class="container">
        <div class="poster-info">
            <h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
            <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
                varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
                tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam, molestie sed fermentum et, elementum at dolor</p>
            <a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
        </div>
    </div>
</div>
<!-- x-box -->
<div class="x-box">
    <div class="container">
        <div class="x-box_sec">
            <div class="col-md-7 x-box-left">
                <h2>XBOX 360</h2>
                <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
                <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
                    euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus.
                    Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
                <a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
            </div>
            <div class="col-md-5 x-box-right">
                <img src="{{asset('images/xbox.jpg')}}" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 ftr-info">
                <h3>About Us</h3>
                <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus.
                    Suspendisse pharetra, metus sed rutrum pretium.</p>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Categories</h3>
                <ul class="ftr-list">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Racing</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Simulation</a></li>
                    <li><a href="#">Bike</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Platform</h3>
                <ul class="ftr-list">
                    <li><a href="#">Pc</a></li>
                    <li><a href="#">Ps4</a></li>
                    <li><a href="#">XBOX 360</a></li>
                    <li><a href="#">XBOX ONE</a></li>
                    <li><a href="#">PSP</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Information</h3>
                <ul class="ftr-list">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Wish Lists</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="copywrite">
    <div class="container">
        <p> © 2020 Adventure Gaming. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!---->
</body>
</html>
