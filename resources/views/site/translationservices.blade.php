@extends('site.layout.main')

@section('website-page-title', 'translationservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Legal Translation Services</h1>

                <p class="hero-text">
                    Our consultancy offers professional translation services, converting written or spoken content from one
                    language to another. Our translators are proficient in multiple languages and specialize in specific
                    subject areas. We handle various documents, including legal contracts, technical manuals, marketing
                    materials, and websites. These services facilitate communication and help businesses expand across
                    linguistic barriers.
                </p>
                <p class="hero-text">
                    Translation services include various types of documents, such as legal contracts,
                    technical manuals, marketing materials, websites, and more. With these services
                    we play a crucial role in facilitating communication and expanding businesses
                    across linguistic barriers.
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
                                <img src="{{ asset('website/assets/images/services/image-05.png') }}" width="575"
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


    <section style="padding-top: 120px;" aria-labelledby="about-label">
        <div class="container">

            {{-- <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure> --}}

            <div class="about-content">
                <p>
                    Evovx provides professional legal translation services in Qatar, handling over 100 languages. We are a
                    trusted and high-quality translation agency. Our team of certified translators specializes in legal,
                    technical, medical, marketing, and commercial translations at competitive prices.
                </p>
            </div>

            <div class="about-content" style="margin-top: 3rem;">
                <p>
                    We offer authorized translation services in Qatar, ensuring maximum quality through experienced
                    translators and project coordinators. Each translator specializes in different fields, such as legal,
                    financial, or medical, and we always have a native language translator to meet your specific needs.
                </p>
            </div>
        </div>
    </section>


    <section class="section" aria-labelledby="feature-label">
        <div class="container">

            <div class="feature-content">

                <h2 class="h5 section-title">
                    Evovx Translation Services is here to meet your Translation needs and offer high-quality services which
                    includes:
                </h2>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Legal translation
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Certificate translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Court documents translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Technical Translation
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Advertising and Marketing
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Birth Certificate Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Death Certificate Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Marriage Certificate Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Divorce Decree Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Diploma Degree Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>
                            <span class="span">
                                Transcript Translation
                            </span>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>

@endsection
