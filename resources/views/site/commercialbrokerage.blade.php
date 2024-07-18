@extends('site.layout.main')

@section('website-page-title', 'commercialbrokerage')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Commercial Brokerage</h1>

                <p class="hero-text">
                    We facilitates transactions related to commercial real estate properties. 
                </p>
                {{-- <p class="hero-text">
                    Planning to start a business in Qatar requires PRO Services in Qatar. If you 
                    already have a business and need to deal with the government authorities for 
                    various purposes,hiring a professional PRO service provider will benefit you greatly.
                </p> --}}

                <div class="btn-wrapper">

                    <a href="{{url('/about')}}" class="btn btn-primary">Explore Now</a>

                    <a href="{{url('/contact')}}" class="btn btn-outline">Contact Us</a>

                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/hero-slide-1.jpg') }}" width="575" height="550" alt=""
                                    class="img-cover">
                            </figure>

                        </li>

                        {{-- <li class="slider-item">

                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="{{ asset('website/assets/images/hero-slide-2.jpg') }}" width="575" height="550"
                                        alt="hero banner" class="img-cover">
                                </figure>

                                <button class="play-btn" aria-label="play ZabiSahi intro">
                                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                                </button>
                            </div>

                        </li>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/hero-slide-3.jpg') }}" width="575" height="550" alt=""
                                    class="img-cover">
                            </figure>

                        </li> --}}

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
    


    <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580" loading="lazy" alt="about banner"
                    class="w-100">
            </figure>

            <div class="about-content">

                {{-- <p class="section-subtitle" id="about-label">Our Vision</p> --}}
                <p >
                    This typically includes leasing, buying, or selling office buildings, retail 
                    spaces, industrial properties, and other commercial assets. Our consultancy 
                    act as intermediaries between property owners and potential buyers or tenants, 
                    providing expertise in market analysis, negotiations, and property valuation. 
                    
                  </p>

                

                {{-- <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Our Mission</p>
                <h class="h5 section-title">
                  To remain the leading total business and services solutions Provider Company in Qatar that guarantees the Satisfaction of its clients through the provision of total Products, Services and Management, that benefits the Clients Personally and Professionally.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Value</p>
                <h class="h5 section-title">
                  We provide quality assurance to execute integrated and innovative solutions. To work with ethics, care about the clients and build a strong and trusted relationship with them.
                </h> --}}

            </div>

        </div>
    </section>


@endsection
