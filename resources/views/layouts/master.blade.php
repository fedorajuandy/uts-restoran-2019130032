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
    <main role="main" class="bg-cinereous">
        <div class="container-fluid min-vh-100 bg-{{ Route::is('products') ? 'products' : Route::is('testimonials') ? 'testimonials' : Route::is('index') ? 'about' : 'index' }} bg-dark pl-0">
            <nav role="navigation" class="navbar navbar-expand-lg fixed-top navbar-custom shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('/img/brand-navbar.svg') }}" width="auto" height="32" alt="ATOZ">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                            <a class="nav-link {{ Route::is('products') ? 'active' : '' }}" href="{{ route('products') }}">Menu</a>
                            <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a>
                            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('cover')
        </div>

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="pb-2 pt-3 bg-bistre">
        <div class="container text-light text-center">
            <h6>&copy; {{ date("Y") }} Fedora Yoshe Juandy</h6>
        </div>
    </footer>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
  </body>
</html>
