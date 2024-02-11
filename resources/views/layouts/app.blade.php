<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Uchiha SHop</title>

    <!-- link BS-5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Link Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet" />

    {{-- Icon BS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- CSS Internal --}}
    <style>
        .font {
            font-family: "Protest Revolution", sans-serif;
            font-size: 30px;
        }

        .font1 {
            font-family: "Protest Revolution", sans-serif;
            font-size: 25px;
        }

        #carouselExampleCaptions .carousel-inner .carousel-item img {
            height: 707px;
            /* Atur tinggi gambar sesuai kebutuhan Anda */
            object-fit: cover;
            /* Atur agar gambar tidak terpotong */
        }
    </style>

    {{-- Short Icon --}}
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand font" href="{{ url('/index') }}">
                    Uchiha Shop
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li>
                            <a href="{{ url('/product') }}" class="nav-link font1">Product</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="nav-link font1">About</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item font">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item font">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                @if (auth()->user()->role == "admin")
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="nav-link font1">Dashboard</a>
                                </li>
                                @endif
                                <a id="navbarDropdown" class="nav-link dropdown-toggle font" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item font1" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- footer -->
        <footer class="bg-dark text-white py-2">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Uchiha Shop</h5>
                        <p>Alamat: Jl. Uchiha No. 1, Konoha</p>
                        <p>Telepon: 123-456-789</p>
                        <p>Email: info@uchihashop.com</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mx-3">Links</h5>
                        <a href=""><i class="bi bi-facebook fs-1 mx-3"></i></a>
                        <a href=""><i class="bi bi-instagram fs-1 mx-3"></i></a>
                        <a href=""><i class="bi bi-twitter-x fs-1 mx-3"></i></a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <p>&copy; 2024 Uchiha Shop. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
