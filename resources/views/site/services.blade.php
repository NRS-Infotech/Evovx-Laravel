@extends('site.layout.main')

@section('website-page-title', 'Services')

@section('website-main-section')

<section class="section hero has-bg-image" aria-label="home"
    style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
    <div class="container">

        <div class="hero-content">

            <h1 class="h1 hero-title">Our Services</h1>

            <p class="hero-text">
                We provide comprehensive business and consultancy services designed to
                help your organization thrive in today's competitive landscape. Our
                team of seasoned professionals brings a wealth of experience and
                expertise to each project, ensuring tailored solutions that meet your
                unique needs.
            </p>
            <p class="hero-text">
                Explore our range of services below.
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
                            <img src="{{ asset('website/assets/images/services-slide-01.jpeg') }}" width="575"
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

<!-- Services -->

<section class="section service" aria-labelledby="service-label">
    <div class="container">

        <p class="section-subtitle" id="service-label">What We Do?</p>

        <ul class="grid-list">

            <li>
                <a href="{{ url('/notaryattestation') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-01.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Notary Attestation Services</h3>

                        <a href="{{ url('/notaryattestation') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/proservices') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-02.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">PRO Services</h3>

                        <a href="{{ url('/proservices') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/certificateattestation') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-03.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Certificate Attestation Services</h3>

                        <a href="{{ url('/certificateattestation') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/governmentservices') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-04.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Government Relations Services</h3>

                        <a href="{{ url('/governmentservices') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/translationservices') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-05.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Legal Translation Services</h3>

                        <a href="{{ url('/translationservices') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/goingdigital') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-06.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Going Digital</h3>

                        <a href="{{ url('/goingdigital') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

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

            <li>
                <a href="{{ url('/customizedgift') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-09.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Customized Gifts</h3>

                        <a href="{{ url('/customizedgift') }}" class="btn-text">
                            <span class="span">Learn More</span>
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </a>
            </li>

            <li>
                <a href="{{ url('/eventmanagement') }}">
                    <div class="service-card">

                        <div class="card-image">
                            <img src="{{ asset('website/assets/images/services/image-10.png') }}"
                                alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                        </div>

                        <h3 class="h4 card-title">Event Management</h3>

                        <a href="{{ url('/eventmanagement') }}" class="btn-text">
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
