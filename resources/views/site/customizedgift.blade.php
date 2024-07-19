@extends('site.layout.main')

@section('website-page-title', 'customizedgift')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Customized Gifts</h1>

                <p class="hero-text">
                    We Provide Personalised gifts & arts made just for you. Uniqueness lies in our services & our work speaks quality.
                </p>

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
    

    <section class="section about" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580" loading="lazy" alt="about banner"
                    class="w-100">
            </figure>

            <div class="about-content">

                <p class="section-subtitle" id="about-label"></p>

                
                <p >
                    Customized gifts refer to items that are personalized or customized according 
                    to the recipient's preferences, interests, or specific occasions. These gifts 
                    are unique because they are tailored specifically for the individual, making 
                    them thoughtful and meaningful.
                    
                  </p>
                <p class="section-subtitle" id="about-label"></p>

                <p >
                    When choosing or creating customized gifts, consider the recipient's 
                    preferences, interests, and the occasion to ensure the gift is both 
                    thoughtful and meaningful.
                    
                  </p>
            </div>

        </div>
    </section>


@endsection