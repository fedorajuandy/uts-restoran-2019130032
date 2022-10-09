<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ATOZ | @yield('title', 'Comfy Restaurant')</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>

  <body>
    {{-- Navbar --}}
    <nav role="navigation" class="navbar navbar-expand-lg sticky-top navbar-dark shadow-lg bg-dark">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">ATOZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    <a class="nav-link {{ Route::is('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                    <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a>
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </div>
            </div>
        </div>
    </nav>

    <main role="main" class="bg-light inner cover">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="pb-2 pt-3 bg-dark">
        <div class="container text-light text-center">
            <h6>&copy; {{ date("Y") }} <a href="{{ route('home') }}">ATOZ Restaurant</a></h6>
        </div>
    </footer>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
  </body>
</html>
