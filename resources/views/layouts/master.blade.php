<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ATOZ | @yield('title', 'Comfy Restaurant')</title>
        <link rel="shortcut icon" href="{{ asset('/img/logo.svg') }}">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>

  <body>
    <main role="main" class="bg-bistre">
        <div class="container-fluid min-vh-100 bg-dark pl-0">
            <nav role="navigation" class="navbar navbar-expand-lg fixed-top navbar-custom shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('/img/brand-navbar.svg') }}" width="auto" height="32" alt="ATOZ">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#F1DABF" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                            <a class="nav-link {{ Route::is('products') ? 'active' : '' }}" href="{{ route('products') }}">Menus</a>
                            <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">Testimonials</a>
                            <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="content bg-{{ Route::is('index') ? 'index' : (Route::is('products') ? 'products' : (Route::is('testimonials') ? 'testimonials' : 'about')) }}">
                <div class="container d-flex min-vh-100 justify-content-{{ Route::is('index') ? 'center align-content-center' : (Route::is('products') ? 'end  align-items-center' : (Route::is('testimonials') ? 'start  align-items-center' : 'end  align-items-center')) }}">
                    @yield('cover')
                </div>
            </div>
        </div>

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="pb-2 pt-3 bg-cinereous">
        <div class="container text-center">
            <h6 class="color-bistre">&copy; {{ date("Y") }} Fedora Yoshe Juandy</h6>
        </div>
    </footer>

    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
  </body>
</html>
