@extends('site.layout.main')

@section('website-page-title', 'certificateattestation')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Certificate Attestation Services</h1>

                <p class="hero-text">
                    Evovx is an ISO-certified and internationally recognised company for certificate attestation in Qatar.
                    Embassy-approved, we assist in the attestation of all types of certificates for various purposes. With
                    20 years of experience, we offer transparent, customer-oriented, ethical, and reliable services, making
                    us the No. 1 certificate attestation provider in Qatar.
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
                                <img src="{{ asset('website/assets/images/services/image-03.png') }}" width="575"
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

    {{-- <section class="" style="color: white; font-size: 21px;" aria-label="our stats">
        <ul class="stats-card has-bg-image"
            style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">
            <div>
                <p>The Motto of the Evovx attestation service is Quick delivery, transparency, credibility, and
                    customer satisfaction. You can reach the
                    Evovx to experience the best and most secure certificate attestation services in Qatar for your
                    every need.</p>
            </div>
        </ul>
    </section> --}}

    <section class="section" aria-labelledby="about-label">
        <div class="container">

            <div class="about-content">
                <p>
                    We are the leading provider of certificate attestation services in Qatar. As a global leader, we are
                    branded as the best and most trustworthy certificate attestation agency in Qatar. We streamline the
                    process and offer assistance to get your certificates attested at a low cost.
                </p>
            </div>

            {{-- <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure> --}}

            <div class="feature-content">

                <ul class="feature-list">
                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Degree Certificate Attestation in Qatar</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">UK and US Certificate Attestation/Legalization</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Marriage Certificate Attestation in Qatar</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Indian Educational Certificate Attestation</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Private Certificate Attestation in Qatar</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Private Diploma Certificate Attestation</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Mark list Attestation in Qatar</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Birth Certificate Attestation in Qatar</span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">Company Documents Attestation</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
