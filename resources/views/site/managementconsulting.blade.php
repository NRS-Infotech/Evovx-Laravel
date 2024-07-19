@extends('site.layout.main')

@section('website-page-title', 'managementconsulting')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Management Consulting</h1>

                <p class="hero-text">
                    Our consultancy provides professionals or firms that provide expertise and advice to organizations to
                    help them improve their performance, efficiency, and overall effectiveness.
                </p>

                <div class="btn-wrapper">
                    <a href="{{ url('/contact') }}" class="btn btn-outline">Contact Us</a>
                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/hero-slide-1.jpg') }}" width="575"
                                    height="550" alt="" class="img-cover">
                            </figure>

                        </li>
                    </ul>
                </div>

                <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
                    <ion-icon name="arrow-back"></ion-icon>
                </button>

                <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                    <ion-icon name="arrow-forward"></ion-icon>
                </button>

            </div>

        </div>
    </section>



    <section class="section about" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure>

            <div class="about-content">
                <p>
                    They typically analyze the client's current business operations, identify
                    areas for improvement, and offer recommendations for strategic changes or
                    operational enhancements. Our Management consultants specialize in various areas
                    such as strategy, operations, finance, human resources, or technology. Their
                    objective is to assist organizations in solving specific problems, making
                    informed decisions, and achieving their goals.
                </p>
            </div>
        </div>
    </section>


@endsection
