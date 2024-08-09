@extends('site.layout.main')

@section('website-page-title', 'Home')

@section('website-main-section')

    <style>
        .hero {
            position: relative;
            width: 100%;
            height: auto;
            /* Remove fixed height */
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            /* Ensure the content is on top */
            text-align: center;
            padding: 2rem;
        }

        .hero-slider {
            position: relative;
            /* Change to relative to fit content */
            width: 100%;
            height: auto;
            /* Remove fixed height */
            overflow: hidden;
            z-index: 1;
            /* Slider behind the content */
        }

        .slider-inner {
            width: 100%;
            height: auto;
            /* Adjust height to auto */
        }

        .slider-container {
            display: flex;
            width: 100%;
            height: auto;
            /* Adjust height to auto */
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .slider-item {
            flex: 0 0 100%;
            width: 100%;
            height: auto;
            /* Adjust height to auto */
            overflow: hidden;
            /* Ensure content doesn’t overflow */
        }

        .slider-item figure {
            margin: 0;
            width: 100%;
            height: auto;
            /* Adjust height to auto */
        }

        .img-cover {
            width: 100%;
            height: auto;
            /* Adjust height to auto */
            object-fit: contain;
            /* Ensures the image contains the area */
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            z-index: 3;
            visibility: visible;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slider-btn.prev {
            left: 10px;
        }

        .slider-btn.next {
            right: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .hero-content {
                padding: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                padding: 0.5rem;
            }

            .slider-btn {
                width: 30px;
                height: 30px;
            }
        }

        @media (max-width: 480px) {
            .hero-content {
                padding: 0.5rem;
            }

            .slider-btn {
                width: 25px;
                height: 25px;
            }
        }

        /* Centering the project card */
        .project-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
            text-align: center;
            /* Center text */
            padding: 1rem;
            /* Padding around the card content */
            border: 1px solid #ddd;
            /* Optional border for better visual separation */
            border-radius: 8px;
            /* Optional rounded corners */
            background-color: #fff;
            /* Optional background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Optional shadow */
        }

        /* Wrapper to center the avatar circle */
        .avatar-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        /* Avatar circle styling */
        .avatar-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f0f0;
            /* Optional background color */
        }

        .avatar-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures image covers the circle */
        }
    </style>


    <section class="has-bg-image" aria-label="home">
        <div class="hero-content-wrapper">
            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">
                            <figure style="--width: 100vw; --height: 100vh;">
                                <img src="{{ asset('website/assets/images/home/hero-01.jpg') }}" alt=""
                                    class="img-cover">
                            </figure>
                        </li>

                        <li class="slider-item">
                            <figure style="--width: 100vw; --height: 100vh;">
                                <img src="{{ asset('website/assets/images/home/hero-02.jpeg') }}" alt=""
                                    class="img-cover">
                            </figure>
                        </li>

                        <li class="slider-item">
                            <figure style="--width: 100vw; --height: 100vh;">
                                <img src="{{ asset('website/assets/images/home/hero-03.jpg') }}" alt=""
                                    class="img-cover">
                            </figure>
                        </li>

                        <li class="slider-item">
                            <figure style="--width: 100vw; --height: 100vh;">
                                <img src="{{ asset('website/assets/images/home/hero-04.png') }}" alt=""
                                    class="img-cover">
                            </figure>
                        </li>

                        <li class="slider-item">
                            <figure style="--width: 100vw; --height: 100vh;">
                                <img src="{{ asset('website/assets/images/home/hero-05.webp') }}" alt=""
                                    class="img-cover">
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

    <!-- #ABOUT -->
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

    <!-- #FEATURE -->
    <section class="feature" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/hero-slide-3.jpg') }}" width="575" height="550"
                    alt="" class="img-cover">
            </figure>

            <div class="feature-content">

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
    </section>


    <section class="service" style="padding-top: 120px;" aria-labelledby="service-label">
        <div class="container">

            <h2 class="h2 section-title">What We Do?</h2>

            <ul class="grid-list">

                <li>
                    <a href="{{ url('/consultancyservice') }}">
                        <div class="service-card">

                            <div class="card-image">
                                <img src="{{ asset('website/assets/images/services/image-07.png') }}"
                                    alt="Corporate Gifting" style="width: 100%; border-radius: var(--radius-6);">
                            </div>

                            <h3 class="h4 card-title">Consultancy Service</h3>

                            <a href="{{ url('/consultancyservice') }}" class="btn-text">
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

                {{-- ############### --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

                {{-- <li>
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
                </li> --}}

            </ul>

        </div>
    </section>


    <!-- #PROJECT -->
    <section class="section project" aria-labelledby="project-label">
        <div class="container">

            <h2 class="h2 section-title">What Our Clients Say</h2>

            <ul class="grid-list">

                <li>
                    <div class="project-card">
                        <div class="avatar-wrapper">
                            <div class="avatar-circle">
                                <img src="https://www.gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20?d=identicon&s=200"
                                    loading="lazy" alt="User Avatar">
                            </div>
                        </div>

                        <div class="card-content">
                            <p class="card-text">
                                “Working with Evovx Consultancy Services has been a fantastic experience. Their team really
                                understood our challenges and provided solutions that made a real difference. Our operations
                                are now smoother and more efficient, and we couldn’t be happier with the results.”
                            </p>

                            <ul class="card-meta-list">
                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                                    <span class="meta-text">Sophia Martinez</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="project-card">
                        <div class="avatar-wrapper">
                            <div class="avatar-circle">
                                <img src="https://www.gravatar.com/avatar/3e23e8160039594a33894f6564e1b134?d=identicon&s=200"
                                    loading="lazy" alt="User Avatar">
                            </div>
                        </div>

                        <div class="card-content">
                            <p class="card-text">
                                “We’ve seen a huge improvement in our project outcomes since partnering with Evovx
                                Consultancy.
                                Their approach is innovative and they’re incredibly responsive to our needs. It’s clear
                                they’re
                                dedicated to our success, and it’s made a big impact on our productivity.”
                            </p>

                            <ul class="card-meta-list">
                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                                    <span class="meta-text">James Anderson</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="project-card">
                        <div class="avatar-wrapper">
                            <div class="avatar-circle">
                                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=identicon&s=200"
                                    loading="lazy" alt="User Avatar">
                            </div>
                        </div>

                        <div class="card-content">
                            <p class="card-text">
                                “Evovx Consultancy Services exceeded our expectations. They took the time to understand our
                                unique needs and delivered tailored solutions that truly worked for us. Their support has
                                been
                                invaluable, and we’re thrilled with the results.”
                            </p>

                            <ul class="card-meta-list">
                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                                    <span class="meta-text">Emma Wilson</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>

@endsection
