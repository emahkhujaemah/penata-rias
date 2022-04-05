<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
    
        <div class="logo">
        <h1><a href="/">Make-Up Artist</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
    
        <nav id="navbar" class="navbar">
        <ul>
            <li><a class="active" href="/">Home</a></li>
            {{-- <li><a href="">About</a></li> --}}
            <li><a href="/artist">Artist</a></li>
            <li><a href="/p_portofolio">Portfolio</a></li>
            <li><a href="/p_lokasi">Lokasi</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
    
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    
    </div>
    </header><!-- End Header -->