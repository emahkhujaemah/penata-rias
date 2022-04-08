@extends('layouts.template')

@section('title', 'Portofolio')

@section('content')

    <div class="hero-container">
    </div>


<!-- #main -->
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
        <ol>
            <li><a href="/">Home</a></li>
            <li>@yield('title')</li>
        </ol>
        <h2>@yield('title')</h2>  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row portfolio-container">
                {{-- {{$profiles}} --}}
                @foreach ($portofolios as $portofolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{asset('storage/' . $portofolio->gambar_utama)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="{{asset('storage/' . $portofolio->gambar_utama)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="/p-profil" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
    <div class="container">

        <div class="section-title">
        <h2>Portofolio</h2>
        <p>Kumpulan hasil dokumentasi Penata Rias - Make Up Artist(MUA) Indonesia Khususnya Indramayu</p>
        </div>

    </div>
    </section><!-- End Clients Section -->

</main>
<!-- End #main -->

@endsection