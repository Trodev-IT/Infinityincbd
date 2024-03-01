<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>InfinityincBD a Games a Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="InfinityincBD  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <style>
        .blog-info {
            text-align: center;
            margin: 20px auto;
        }
        .blog-img img {
            max-width: 100%;
            height: auto;
        }
        .snglp {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        #registerButton {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        #registerButton:hover {
            background-color: #0056b3;
        }
        #countdown {
            font-size: 24px;
            font-weight: bold;
            color: #ff0000;
        }
    </style>

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
                <li class="active"><a href="{{route('project')}}">Project</a></li>
                {{--					 <li><a href="typo.html">News</a></li>--}}
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
<!---->
<div class="blog">
    <div class="container">
        <div class="col-md-8 blog-left" >
            <div class="blog-info">
                <div class="blog-info-text">
                    <div class="blog-img">
                        <img src="{{asset('storage/'.$event->event_pictuers)}}" alt=""/>
                    </div>
                    <p class="snglp">{!! $event->event_details !!}</p>


                    <a href="{{route('eventregister',['id'=>$event->id])}}" id="registerButton" class="btn btn-lg">Register</a>
{{--                    <a href="{{route('eventregister',['id'=>$event->id])}}"  class="btn btn-lg">Register</a>--}}
                </div>
                <div style="margin: 0 auto; text-align: center;">
                    <ul>
                        <li><span id="countdown"></span></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-4 single-page-right">

            <div class="recent-posts">
                <h4>Recent posts</h4>
                @foreach($even as $por)
                    @if($por->id !== $event->id)
                        <div class="recent-posts-info">
                            <div class="posts-left sngl-img">
                                <a href="{{route('details_event',['id'=>$por->id])}}"> <img src="{{asset('storage/'.$por->event_pictuers)}}" class="img-responsive zoom-img" alt=""/> </a>
                            </div>
                            <div class="posts-right">
                                <label>{{ \Carbon\Carbon::parse($por->deadline)->format('M d, Y') }}

                                </label>
                                <h5><a href="{{route('details_event',['id'=>$por->id])}}"></a>{{$por->event_name}}</h5>

                                <a href="{{route('details_event',['id'=>$por->id])}}" class="btn btn-primary hvr-rectangle-in">Read More</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
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

<script>
    // Function to update countdown
    function updateCountdown(endDate) {
        const countdownElement = document.getElementById('countdown');

        const update = () => {
            const currentTime = new Date().getTime();
            const distance = endDate - currentTime;

            if (distance <= 0) {
                countdownElement.textContent = 'Expired';
                document.getElementById('registerButton').style.display = 'none'; // Hide the register button
            } else {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        };

        update();
        setInterval(update, 1000);
    }

    // Set deadline date
    const deadline = new Date("{{$event->deadline}}").getTime();
    updateCountdown(deadline);
</script>


</body>
</html>

