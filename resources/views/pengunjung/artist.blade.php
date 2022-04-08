@extends('layouts.template')

@section('title', 'Artist')

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
            <li>Team</li>
          </ol>
          <h2>Team</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

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