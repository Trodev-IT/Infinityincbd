<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>About Us | Infinity Incorporation Bangladesh</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-192x192.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-512x512.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-16x16.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-32x32.png')}}" />
    <link rel="manifest" href="{{asset('admin/assets/img/favicon/site.webmanifest')}}" />
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="InfinityincBD  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="{{asset('js/jquery.min.js')}}"></script>

</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="headr-left">
            <div class="social">
                <a href="https://www.facebook.com/InfinityIncorporationBD?mibextid=ZbWKwL"><i class="facebook"></i></a>
                {{--                    <a href="#"><i class="twitter"></i></a>--}}
                {{--                    <a href="#"><i class="gplus"></i></a>--}}
                {{--                    <a href="#"><i class="pin"></i></a>--}}
                {{--                    <a href="#"><i class="youtube"></i></a>--}}
            </div>

        </div>
        <div class="headr-right">
            <div class="details">
                <ul>
                    <li><a href="mailto:infinitybdofficial@gmail.com"><span class="glyphicon glyphicon-envelope"></span>infinitybdofficial@gmail</a></li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+8801828690125</li>
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
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li class="active"><a href="{{route('aboutus')}}">About</a></li>
                <li><a href="{{route('project')}}">Project</a></li>
{{--                <li><a href="typo.html">News</a></li>--}}
                <li><a href="{{route('eventsList')}}">Events</a></li>
                <li><a href="{{route('gallary')}}">Gallery</a></li>
                <li><a href="{{route('contact')}}">Mail</a></li>
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
<!-- banner -->
<div class="banner">
    <div class="bnr2">
    </div>
</div>
<!-- About -->
<div class="about">
    <div class="container">
        <h2>About</h2>
        <div class="about-info-grids">
            <div class="col-md-5 abt-pic">
                @if(isset($about))
                    <img src="{{ asset('storage/'.$about->image) }}" class="img-responsive" alt=""/>


            </div>
            <div class="col-md-7 abt-info-pic">
                <h3>{{$about->title}}</h3>
                <p>{!! $about->subtitle !!}</p>

            </div>
            @else
                <p>No about information found.</p>
            @endif
            <div class="clearfix"></div>
        </div>
        <div class="testimonals">
            <h3>Testimonals</h3>
            <div class="testimonal-grids">
                @foreach($testimonial as $testi)
                <div class="col-md-4 testimonal-grid">
                    <div class="testi-info">
                        <p>{{$testi->title}}</p>
                        <h4>{{$testi->name}}</h4>

                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="team">
            <h3>Our Team</h3>
            @foreach($teams as $team)
            <div class="grid_4">
                <div class="team-grid">
                    <img src="{{asset('storage/'.$team->image)}}" alt="">
                    <h4>{{$team->name}}</h4>
                    <p>{{$team->description}}</p>
                </div>
            </div>
            @endforeach


            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-sm-8 ftr-info">
                <h3>About Us</h3>
                <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus.
                    Suspendisse pharetra, metus sed rutrum pretium.</p>
            </div>

            <div class="col-sm-4 ftr-grid">
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
        <p> © 2020 InfinityincBD. All rights reserved | Developed by <a href="https://trodev.com/">Trodev</a></p>
    </div>
</div>
<!---->



</body>
</html>
