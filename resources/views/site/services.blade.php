@extends('site.layout.main')

@section('website-page-title', 'Services')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./assets/images/Animated Shape.svg')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">About us</h1>

                <p class="hero-text">
                    Evovx consultancy and business solutions W.L.L. It is a company that was newly
                    founded in Qatar Since 2024. Provides a wide range of services including Commercial
                    mediation, Management Consulting, Commercial brokerage and Documents Clearing and
                    more other services.
                </p>
                <p class="hero-text">
                    The professional team has a decade of experience, EVOVX aims to invest
                    its team professionalism towards your set up new business it will
                    be located in Doha, Qatar.
                </p>

                <div class="btn-wrapper">

                    <a href="#" class="btn btn-primary">Explore Now</a>

                    <a href="#" class="btn btn-outline">Contact Us</a>

                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="./assets/images/hero-slide-1.jpg" width="575" height="550" alt=""
                                    class="img-cover">
                            </figure>

                        </li>

                        <li class="slider-item">

                            <div class="hero-card">
                                <figure class="img-holder" style="--width: 575; --height: 550;">
                                    <img src="./assets/images/hero-slide-2.jpg" width="575" height="550"
                                        alt="hero banner" class="img-cover">
                                </figure>

                                <button class="play-btn" aria-label="play ZabiSahi intro">
                                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                                </button>
                            </div>

                        </li>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="./assets/images/hero-slide-3.jpg" width="575" height="550" alt=""
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





    <!--
    - #SERVICE
    -->

    <!-- <section class="section service" aria-labelledby="service-label">
    <div class="container">

      <p class="section-subtitle" id="service-label">What We Do?</p>

      <h2 class="h2 section-title">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      </h2>

      <ul class="grid-list">

        <li>
          <div class="service-card">

            <div class="card-icon">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            </div>

            <h3 class="h4 card-title">24/7 Support</h3>

            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>

            <a href="#" class="btn-text">
              <span class="span">Learn More</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>
        </li>

        <li>
          <div class="service-card">

            <div class="card-icon">
              <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
            </div>

            <h3 class="h4 card-title">Secure Payments</h3>

            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>

            <a href="#" class="btn-text">
              <span class="span">Learn More</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>
        </li>

        <li>
          <div class="service-card">

            <div class="card-icon">
              <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
            </div>

            <h3 class="h4 card-title">Daily Updates</h3>

            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>

            <a href="#" class="btn-text">
              <span class="span">Learn More</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>
        </li>

        <li>
          <div class="service-card">

            <div class="card-icon">
              <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
            </div>

            <h3 class="h4 card-title">Market Research</h3>

            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>

            <a href="#" class="btn-text">
              <span class="span">Learn More</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>
        </li>

      </ul>

    </div>
    </section> -->





    <!--
    - #ABOUT
    -->

    <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="./assets/images/about-banner.png" width="800" height="580" loading="lazy"
                    alt="about banner" class="w-100">
            </figure>

            <div class="about-content">

                <p class="section-subtitle" id="about-label">Our Vision</p>

                <h class="h5 section-title">
                    To serve our clients better and to be the first-choice service provider
                    for our clients. Supported by strategic alliance and certified
                    experience to deliver success for our clients.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Our Mission</p>
                <h class="h5 section-title">
                    To remain leading total business and services solutions provider company
                    in Qatar who guarantees the satisfaction of its clients through the
                    provision of total products, Services and management, that benefits
                    the clients personally and professionally.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Value</p>
                <h class="h5 section-title">
                    We provide quality assurance to execute integrated and
                    innovated solutions. To work with ethics, care about the clients and
                    build a strong and trusted relationship with them.
                </h>




                <!-- <ul>

          <li class="about-item">
            <div class="accordion-card expanded" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Lorem Ipsum 1</spna>
                </button>
              </h3>

              <p class="accordion-content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>

            </div>
          </li>

          <li class="about-item">
            <div class="accordion-card" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Lorem Ipsum 2</spna>
                </button>
              </h3>

              <p class="accordion-content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>

            </div>
          </li>

          <li class="about-item">
            <div class="accordion-card" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Lorem Ipsum 3</spna>
                </button>
              </h3>

              <p class="accordion-content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>

            </div>
          </li>

        </ul> -->

            </div>

        </div>
    </section>





    <!--
    - #FEATURE
    -->

    <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="./assets/images/feature-banner.png" width="800" height="531" loading="lazy"
                    alt="feature banner" class="w-100">
            </figure>

            <div class="feature-content">

                <!-- <p class="section-subtitle" id="feautre-label">Our Solutions</p> -->

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

@endsection
