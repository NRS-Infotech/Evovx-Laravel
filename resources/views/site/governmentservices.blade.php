@extends('site.layout.main')

@section('website-page-title', 'governmentservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Government Relations Services</h1>

                <p class="hero-text">
                    Qatar's dynamic economy makes it an attractive destination for businesses expanding in the Middle East.
                    However, navigating its government and regulatory environment can be complex. Evovx's government
                    relations services provide essential support for successful business operations. These services help
                    businesses obtain necessary permits and licenses, engage with key stakeholders, and build positive
                    relationships with government entities. By leveraging local expertise and navigating the regulatory
                    environment, businesses can position themselves for success in Qatar's economy.
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
                                <img src="{{ asset('website/assets/images/services/image-04.png') }}" width="575"
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


    <section class="section" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            {{-- <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="500" height="380"
                    loading="lazy" alt="about banner" class="w-100">
            </figure> --}}

            <div class="feature-content">

                <h2 class="h5 section-title">
                    Some of the key services provided by Evovx for government relations in Qatar include:
                </h2>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">
                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Regulatory compliance
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Permitting and licensing
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Stakeholder engagement
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Market research
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Crisis management
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Access to local expertise
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Streamlined operations
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Faster market entry:
                            </span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </section>

@endsection
