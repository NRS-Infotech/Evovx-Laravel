@extends('site.layout.main')

@section('website-page-title', 'Consultancy Service')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Consultancy Service</h1>

                <p class="hero-text">
                    Our consultancy provides professionals or firms that provide expertise and advice to organizations to
                    help them improve their performance, efficiency, and overall effectiveness.
                </p>
                {{-- <p class="hero-text">
                    Each country follows different rules for notary public services, in the
                    same way, Qatar also follows many rules for Notary public services in
                    Qatar.
                </p> --}}

                <div class="btn-wrapper">
                    <a href="{{ url('/contact') }}" class="btn btn-outline">Contact Us</a>
                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/services/image-07.png') }}" width="575"
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

    <section class="section service" aria-labelledby="service-label">
        <div class="container">

            <h2 class="h2 section-title">Consultancy Service</h2>

            <ul class="grid-list">

                <li>
                    <a href="{{ url('/managementconsulting') }}">
                        <div class="service-card">

                            <div class="card-image">
                                <img src="{{ asset('website/assets/images/services/image-07.png') }}"
                                    alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                            </div>

                            <h3 class="h4 card-title">Management Consulting</h3>

                            <a href="{{ url('/managementconsulting') }}" class="btn-text">
                                <span class="span">Learn More</span>
                                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                            </a>

                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/commercialbrokerage') }}">
                        <div class="service-card">

                            <div class="card-image">
                                <img src="{{ asset('website/assets/images/services/image-08.png') }}"
                                    alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                            </div>

                            <h3 class="h4 card-title">Commercial Brokerage</h3>

                            <a href="{{ url('/commercialbrokerage') }}" class="btn-text">
                                <span class="span">Learn More</span>
                                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                            </a>

                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </section>

@endsection
