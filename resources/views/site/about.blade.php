@extends('site.layout.main')

@section('website-page-title', 'About')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">About us</h1>

                <p class="hero-text">
                    Evovx Consultancy and Business Solutions W.L.L. is a company that was founded in Qatar In 2024. It
                    provides a wide range of services including Commercial mediation, Management consulting, Commercial
                    brokerage and Documents Clearing, and other services.
                </p>
                <p class="hero-text">
                    Our team at Evovx has a decade of experience, We aim to invest our business acumen and capabilities
                    towards achieving solutions to your business problems.
                </p>

                <div class="btn-wrapper">
                    <a href="{{ url('/contact') }}#contact-form" class="btn btn-outline">Contact Us</a>
                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/about-slide-01.jpeg') }}" width="575"
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

    {{-- #ABOUT --}}

    <section class="section about" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/hero-slide-2.jpg') }}" width="575" height="550"
                    alt="hero banner" class="img-cover">
            </figure>

            <div class="about-content">

                <p class="section-subtitle" id="about-label">Our Vision</p>

                <h class="h5 section-title">
                    To serve our clients better and to be the first-choice service provider for our clients. Which is
                    supported by strategic alliance and Certified Experience to deliver success for our clients.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Our Mission</p>
                <h class="h5 section-title">
                    To remain the leading total business and services solutions Provider Company in Qatar that guarantees
                    the Satisfaction of its clients through the provision of total Products, Services and Management, that
                    benefits the Clients Personally and Professionally.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Value</p>
                <h class="h5 section-title">
                    We provide quality assurance to execute integrated and innovative solutions. To work with ethics, care
                    about the clients and build a strong and trusted relationship with them.
                </h>

            </div>

        </div>
    </section>


    {{-- #FEATURE --}}

    {{-- <section class="feature" style="padding-bottom: 120px" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/hero-slide-3.jpg') }}" width="575" height="550"
                    alt="" class="img-cover">
            </figure>

            <div class="feature-content">

                <p class="section-subtitle" id="feautre-label">Our Solutions</p>

                <h2 class="h2 section-title">
                    Crafted for Business Consulting
                </h2>

                <p class="section-text">
                    Whether you're a seasoned consultant or just starting in the field, our
                    platform provides the perfect tools and features to support your
                    business consulting needs.
                </p>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Management Consulting
                            </span>

                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Business Mediation
                            </span>

                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Tailored Solution
                            </span>

                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Client Centric Approach
                            </span>

                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Collaboration
                            </span>

                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Client Satisfaction
                            </span>

                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </section> --}}

@endsection
