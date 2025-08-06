<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mini Website</title>
        <meta name="description" content="Gerow - Business Consulting HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/odometer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/jarallax.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
    </head>
    <body>


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('front.layouts.header')
        <!-- header-area-end -->


        @yield('content')


        <!-- footer-area -->
        @include('front.layouts.footer')
        <!-- footer-area-end -->


        <!-- JS here -->
        <script src="{{asset('assets/front/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.odometer.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/front/js/gsap.js')}}"></script>
        <script src="{{asset('assets/front/js/ScrollTrigger.js')}}"></script>
        <script src="{{asset('assets/front/js/SplitText.js')}}"></script>
        <script src="{{asset('assets/front/js/gsap-animation.js')}}"></script>
        <script src="{{asset('assets/front/js/jarallax.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.parallaxScroll.min.js')}}"></script>
        <script src="{{asset('assets/front/js/particles.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/front/js/aos.js')}}"></script>
        <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
    </body>
</html>
