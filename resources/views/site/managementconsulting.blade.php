@extends('site.layout.main')

@section('website-page-title', 'managementconsulting')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Management Consulting</h1>

                <p class="hero-text">
                    Our consultancy provides professionals or firms that provide expertise and advice to organizations to help them improve their performance, efficiency, and overall effectiveness. 
                </p>
                {{-- <p class="hero-text">
                    Planning to start a business in Qatar requires PRO Services in Qatar. If you 
                    already have a business and need to deal with the government authorities for 
                    various purposes,hiring a professional PRO service provider will benefit you greatly.
                </p> --}}

                <div class="btn-wrapper">

                    {{-- <a href="{{url('/about')}}" class="btn btn-primary">Explore Now</a> --}}

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
                    They typically analyze the client's current business operations, identify 
                    areas for improvement, and offer recommendations for strategic changes or 
                    operational enhancements. Our Management consultants specialize in various areas 
                    such as strategy, operations, finance, human resources, or technology. Their 
                    objective is to assist organizations in solving specific problems, making 
                    informed decisions, and achieving their goals.
                    
                  </p>

                

            </div>

        </div>
    </section>


@endsection