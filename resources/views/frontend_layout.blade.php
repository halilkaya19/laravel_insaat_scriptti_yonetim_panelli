<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset("frontend/css/bootstrap.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("frontend/js/owl-carousel/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/owl-carousel/owl.theme.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/owl-carousel/owl.transitions.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/rs-plugin/css/settings.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/flexslider/flexslider.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/isotope/isotope.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/css/jquery-ui.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/js/magnific-popup/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/css/style.css") }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("frontend/css/icomoon/style.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("frontend/font-awesome/css/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("frontend/css/color-scheme/yellow.css") }}" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>
    <![endif]-->
    @stack('customCss')
</head>
<body>

<div class="outer-wrapper">

    @include('frontend.includes.page_top')

    <!-- HEADER -->
    @include('frontend.includes.header_page')

    @yield('content')


    @include('frontend.includes.footer')

</div>


<!-- jQuery -->
<script src="{{ asset("frontend/js/jquery.js") }}"></script>
<script src="{{ asset("frontend/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("frontend/js/menu.js") }}"></script>
<script src="{{ asset("frontend/js/owl-carousel/owl.carousel.min.js") }}"></script>
<script src="{{ asset("frontend/js/rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
<script src="{{ asset("frontend/js/rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.easing.min.js") }}"></script>
<script src="{{ asset("frontend/js/isotope/isotope.pkgd.js") }}"></script>
<script src="{{ asset("frontend/js/jflickrfeed.min.js") }}"></script>
<script src="{{ asset("frontend/js/tweecool.js") }}"></script>
<script src="{{ asset("frontend/js/flexslider/jquery.flexslider.js") }}"></script>
<script src="{{ asset("frontend/js/easypie/jquery.easypiechart.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery-ui.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.appear.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.inview.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.countdown.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.sticky.js") }}"></script>
<script src="{{ asset("frontend/js/magnific-popup/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("frontend/js/jquery.easing/jquery.easing.js") }}"></script>
<script src="{{ asset("frontend/js/main.js") }}"></script>
<script src="{{ asset("frontend/js/gmaps/greyscale.js") }}"></script>
@stack('customJs')
</body>
</html>




