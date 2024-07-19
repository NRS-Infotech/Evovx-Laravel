@extends('site.layout.main')

@section('website-page-title', 'eventmanagement')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Event Management</h1>

                <p class="hero-text">
                    We make use of communication techniques such as news releases, press conferences, etc., to call
                    attention to activities to promote a company, product, or service.
                </p>

                <div class="btn-wrapper">

                    <a href="{{ url('/about') }}" class="btn btn-primary">Explore Now</a>

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
                    Event management involves planning, organizing, and executing events, ranging from small gatherings to
                    large-scale conferences, festivals, and ceremonies. It encompasses various aspects such as logistics,
                    budgeting, scheduling, marketing, and coordination with vendors and stakeholders.

                </p>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label"></p>

                <p>
                    It requires strong organizational skills, attention to detail, effective communication, problem-solving
                    abilities, and the ability to work under pressure. Professionals in this field often use event
                    management software and tools to streamline processes and enhance efficiency.

                </p>
                </h>

            </div>

        </div>
    </section>


@endsection
