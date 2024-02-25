
<!DOCTYPE HTML>
<html>
<head>
    <title>InfinityincBD a Games a Category Flat Bootstarp Responsive Website Template | Gallery :: w3layouts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">

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
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('aboutus')}}">About</a></li>
                <li><a href="{{route('project')}}">Project</a></li>
                <li class="active"><a href="gallery.html">Gallery</a></li>
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
<!---->
<div class="gallery">
    <div class="container">
        <h2>Gallery</h2>
        <div class="gallery-bottom">
            <div class="gallery-1">
                @foreach($gallaries as $gall)
                <div class="col-md-3 gallery-grid">
                    <a class="example-image-link" href="{{asset('storage/'.$gall->photos)}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{asset('storage/'.$gall->photos)}}" alt=""/></a>
                </div>
                @endforeach
{{--                <div class="col-md-3 gallery-grid">--}}
{{--                    <a class="example-image-link" href="images/gl7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl7.jpg" alt=""/></a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 gallery-grid">--}}
{{--                    <a class="example-image-link" href="images/gl4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl4.jpg" alt=""/></a>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 gallery-grid">--}}
{{--                    <a class="example-image-link" href="images/gl5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gl5.jpg" alt=""/></a>--}}
{{--                </div>--}}
                <div class="clearfix"></div>
            </div>


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

<script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>


<script src="{{asset('js/bootstrap.js')}}"></script>
<!---->
</body>
</html>
