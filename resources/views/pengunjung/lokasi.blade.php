@extends('layouts.template')

@section('title', 'Lokasi')

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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($lokasis as $lokasi)
                    <div class="col-md-3 mb-5">
                        {{-- <a href="/posts?category={{$category->slug}} "> --}}
                            <div class="card bg-dark text-white">
                                <h5 class="card-title text-center flex-fill p-2 fs-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $lokasi->lokasi }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
        </div>
    </section>
    <!-- End Team Section -->

</main>
<!-- End #main -->

@endsection