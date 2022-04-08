@extends('layouts.template')

@section('title', 'Profil')

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

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('storage/' . $profil[1]->foto_profil)}}" alt="">
                </div>

                {{-- <div class="swiper-slide">
                  <img src="{{asset('storage/' . $portofolio)}}" alt="">
                </div> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Profil Penata Rias - MUA</h3>
              <ul>
                <li><strong>Nama Brand</strong>: {{$profil[1]->name}}</li>
                <li><strong>Nama Pemilik</strong>: {{$profil[1]->nama_pemilik}}</li>
                <li><strong>Alamat</strong>: {{$profil[1]->alamat}}</li>
                <li><strong>Website</strong>: <a href="#">{{$profil[1]->sosial_media}}</a></li>
                <li><strong>Tempat Kerja</strong>: <a href="#">{{$profil[1]->tempat_kerja}}</a></li>
                <li><strong>Status</strong>: <a href="#">{{$profil[1]->status}}</a></li>
                {{-- <li><strong>Status</strong>: <a href="#">{{$portofolio[1]->pengalaman}}</a></li> --}}
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Profil Biografi</h2>
              <p>
                {{$profil[1]->profil_bio}}
              </p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

</main>
<!-- End #main -->

@endsection