@extends('site.layout.main')

@section('website-page-title', 'goingdigital')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Going Digital</h1>

                <p class="hero-text">
                    Document imaging and scanning can be time-consuming for an organization. By outsourcing to Evovx, you
                    leverage our expertise, resources, and technology to reduce costs and significantly improve time and
                    productivity.
                </p>
                <p class="hero-text">
                    Deciding to go digital
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
                                <img src="{{ asset('website/assets/images/services/image-06.png') }}" width="575"
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


    <section class="section" aria-labelledby="about-label">
        <div class="container">

            <div class="about-content">
                <p class="section-subtitle" id="about-label">Why Choose Evovx?</p>

                <p>Evovx helps you determine the best strategy for converting physical documents into digital files,
                    tailored to your organization's record access requirements, retention periods, and policies. Whether you
                    need to go fully digital for nationwide access or manage scattered information centrally, we ensure an
                    efficient and convenient conversion process. For some organizations, a day-forward scanning program or
                    ad hoc scanning of individual files may be sufficient. Regardless of your goal, Evovx streamlines the
                    planning, preparation, and conversion while ensuring compliance and cost-effectiveness by evaluating
                    document retention periods.</p>

            </div>

            <div class="feature-content" style="padding-top: 3rem;">

                <h2 class="h5 section-title">
                    Evovx offers the following scanning programs:
                </h2>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Backfile Document Imaging
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Day Forward Imaging
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Custom Scanning Services
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

@endsection
