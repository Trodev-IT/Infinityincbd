<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Project | Infinity Incorporation Bangladesh</title>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-192x192.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-512x512.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-16x16.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-32x32.png')}}" />
    <link rel="manifest" href="{{asset('admin/assets/img/favicon/site.webmanifest')}}" />
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
					 <li><a href="{{route('aboutus')}}">About</a></li>
					 <li class="active"><a href="{{route('project')}}">Project</a></li>
{{--					 <li><a href="typo.html">News</a></li>--}}
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
<!-- content -->
<div class="review">
	 <div class="container">
		 <h2>Project</h2>
		 <div class="review-md1">
             @foreach($project as $proj)
				 <div class="col-md-4 sed-md">
				 	 <div class=" col-1">
						 <a href="{{route('singlepage',['id'=>$proj->id])}}"><img class="img-responsive" src="{{asset('storage/'.$proj->image)}}" alt=""></a>
					 	<h4><a href="{{route('singlepage',['id'=>$proj->id])}}">{{$proj->title}}</a></h4>
					 </div>
				 </div>
             @endforeach
				 <div class="clearfix"> </div>
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
{{-- <div class="footer">
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
		 <p> © 2020 InfinityincBD. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div> --}}
<!---->





</body>
</html>
