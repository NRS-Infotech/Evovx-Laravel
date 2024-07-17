<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- primary meta tags -->
    <title>{{ env('APP_NAME') }} - @yield('website-page-title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <meta name="title" content="{{ env('APP_NAME') }}">
    <meta name="description" content="This is a business agency html template made by ZabiSahi">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <!-- - google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <!-- preload images -->
    <link rel="preload" as="image" href="{{ asset('website/assets/images/hero-bg.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('website/assets/images/hero-slide-1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('website/assets/images/hero-slide-2.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('website/assets/images/hero-slide-3.jpg') }}">

</head>

<body>

    <!-- #HEADER -->
    <header class="header" data-header>
        <div class="container">

            <a href="" class="navbar-link">
                <img src="{{ asset('website/assets/logo-light.svg') }}" class="logo logo-light" style="width: 100px;">
                <img src="{{ asset('website/assets/logo-dark.svg') }}" class="logo logo-dark" style="width: 100px;">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="https://linktr.ee/zabisahi" class="navbar-link">Zabi Sahi</a>
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{ url('/') }}" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="{{ url('/services') }}" class="navbar-link">Services</a>
                    </li>

                    <li>
                        <a href="{{ url('/contact') }}" class="navbar-link">Contact</a>
                    </li>

                </ul>

                <div class="wrapper">
                    <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

                    <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
                </div>

                <ul class="social-list">

                    <li>
                        <a href="https://linktr.ee/zabisahi" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://linktr.ee/zabisahi" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://linktr.ee/zabisahi" class="social-link">
                            <ion-icon name="logo-dribbble"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://linktr.ee/zabisahi" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://linktr.ee/zabisahi" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

            <!-- <a href="https://linktr.ee/zabisahi" class="btn btn-primary">Free Trial</a> -->

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>

    <main>
        <article>
