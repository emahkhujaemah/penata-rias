<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Penata Rias | Make-Up Artist</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('template')}}/assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('vendor')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('vendor')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{asset('vendor')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('vendor')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="{{asset('vendor')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="{{asset('vendor')}}/vendor/animate.css/animate.min.css" rel="stylesheet">

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

<!-- ======= Hero Section ======= -->
<section id="hero">
<div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url({{asset('template')}}/assets/img/slide/mua.jpg)">
        <div class="carousel-container">
            <div class="carousel-content">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Penata Rias Indramayu</span></h2>
            <p class="animate__animated animate__fadeInUp">Website ini adalah website yang dibuat untuk membantu para <b>Penata Rais : Make-Up Artist (MUA)</b>  untuk menjelaskan jasa yang mereka layani dan Pengalaman yang pernah lakukan kepada pelanggan sebelumnya. Dan sebagai acuan untuk warga Indonesia, Khususnya masyarakat daerah Indramayu dalam memilih jasa penata rias sesuai dengan kriteria yang dibutuhkan.</p>
            <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
        </div>
        </div>

        <!-- Slide 2 -->
        {{-- <div class="carousel-item" style="background: url({{asset('template')}}/assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
                <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>
        </div> --}}

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    </div>
</div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img src="{{asset('template')}}/assets/img/team/team-1.jpg" alt="">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img src="{{asset('template')}}/assets/img/team/team-2.jpg" alt="">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <img src="{{asset('template')}}/assets/img/team/team-3.jpg" alt="">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>

        </div>

        </div>
    </section><!-- End Team Section -->


<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
<div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">khuza.emah24@gmail.com</a></i>
    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 822 1578 6671</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
</div>
</section>

<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
    <div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
        </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
        <h3>About Eterna</h3>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        </div>

    </div>
    </div>
</div>

<div class="container">
    <div class="copyright">
    &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('vendor')}}/vendor/purecounter/purecounter.js"></script>
<script src="{{asset('vendor')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('vendor')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('vendor')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('vendor')}}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('vendor')}}/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('vendor')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('js')}}/main.js"></script>

</body>

</html>