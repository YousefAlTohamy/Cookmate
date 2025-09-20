<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/recipe/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/recipe/imgs/icon.png') }}">
    <script src="https://kit.fontawesome.com/718cceb512.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <div class="container">

        <div class="menu">

            <ul>
                <div class="active">
                    <a href="{{ route('cookmates.home') }}">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <p>{{ config('app.name') }}</p>
                    </a>
                </div>
                <li>
                    <a href="{{ route('cookmates.index') }}">
                        <i class="fa-solid fa-utensils"></i>
                        <p>Recipes</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cookmates.create') }}">
                        <i class="fa-solid fa-book-open"></i>
                        <p>Add New Recipe</p>
                    </a>
                </li>
                <div class="bottom-section">
                    <li class="log-out">
                        <a class="pdj" href="{{ route('cookmates.logoutPage') }}">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="content">

        <div class="header">

            <div class="logo">
                <a href="{{ route('cookmates.home') }}">
                    <img src="{{ asset('assets/recipe/imgs/icon.png') }}" alt="Project Logo" title="CookMate">
                </a>
            </div>

            <div class="text-left">
                <h1><span class="highlight">{{ config('app.name') }}</span>.. your perfect plate</h1>
                <p>We bring you the fastest and easiest way to find recipes you love</p>
            </div>
            <div class="text-right">
                <h1>Begin with a <span class="highlight">click</span> ,end with a <span
                        class="highlight">dish</span></h1>
                <p>Choose your flavor and get ready for greatness.</p>
            </div>

        </div>

        @yield('content')

        <footer>
            <div class="footer-content">
                <p>2025 &#169; all rights reserved to {{ config('app.name') }}. </p>
                <div class="footer-links">
                    <a href="{{ route('cookmates.about') }}">About</a>
                    <a href="mailto:youseftohtoh46@gmail.com">Contact us</a>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @include('layouts.swalFire')
</body>

</html>
