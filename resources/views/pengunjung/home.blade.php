@extends('layouts.template')

@section('title', 'Make-Up Artist')

@section('content')
<!-- ======= Hero Section ======= -->
<div class="hero-container">
</div>

<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background: url({{asset('img')}}/mua.jpg)">
            <div class="carousel-container">
                <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Penata Rias Indramayu</span></h2>
                <p class="animate__animated animate__fadeInUp">Website ini adalah website yang dibuat untuk membantu para <b>Penata Rias : Make-Up Artist (MUA)</b>  untuk menjelaskan jasa yang mereka layani dan Pengalaman yang pernah lakukan kepada pelanggan sebelumnya. Dan sebagai acuan untuk warga Indonesia, Khususnya masyarakat daerah Indramayu dalam memilih jasa penata rias sesuai dengan kriteria yang dibutuhkan.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>
            </div>

            <!-- Slide 2 -->
            {{-- <div class="carousel-item" style="background: url({{asset('template')}}/slide/slide-2.jpg)">
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
</section>
<!-- End Hero -->

<!-- #main -->
<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="row">

                @foreach ($profiles->skip(1) as $artist)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                            <img src="{{asset('storage/' . $artist->foto_profil)}}" class="img-fluid text-center" alt="{{$artist->name}}" >
                            <h4 class="text-decoration-underline pb-3 text-capitalize">{{$artist->name}}</h4>
                            <h6 class="text-danger">{{$artist->nama_pemilik}}</h6>
                            <p>{{$artist->profil_bio}}</p>
                            <div class="social">
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                {{-- <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-tiktok"></i></a> --}}
                            </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Team Section -->

</main>
<!-- End #main -->

@endsection