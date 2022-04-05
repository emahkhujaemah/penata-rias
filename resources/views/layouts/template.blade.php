<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Penata Rias |  @yield('title')</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('template')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('template')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{asset('template')}}/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('template')}}/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="{{asset('template')}}/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="{{asset('template')}}/animate.css/animate.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('css')}}/style.css" rel="stylesheet">

<!-- =======================================================
* Template Name: Eterna - v4.7.0
* Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
@include('layouts.nav')


@yield('content')


<!-- ======= Footer ======= -->
@include('layouts.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('template')}}/purecounter/purecounter.js"></script>
<script src="{{asset('template')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template')}}/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('template')}}/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('template')}}/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('template')}}/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('template')}}/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('js')}}/main.js"></script>

</body>

</html>