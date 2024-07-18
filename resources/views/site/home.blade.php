@extends('site.layout.main')

@section('website-page-title', 'Home')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">EVOVX Consultancy & Business Solution</h1>

                {{-- <p class="hero-text">
                    Evovx Consultancy and Business Solutions W.L.L. is a company that was founded
                     in Qatar In 2024. It provides a wide range of services including Commercial 
                     mediation, Management consulting, Commercial brokerage and Documents 
                     Clearing, and other services. </p> --}}

                <div class="btn-wrapper" style="margin-top: 3rem;" >

                    <a href="{{url('/about')}}" class="btn btn-primary">Explore Now</a>

                    <a href="{{url('/contact')}}#contact-form" class="btn btn-outline">Contact Us</a>

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

    <!-- #ABOUT -->
    <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/hero-slide-2.jpg') }}" width="575" height="550"
                                        alt="hero banner" class="img-cover">
            </figure>

            <div class="about-content">


                <p class="section-subtitle" id="about-label">Our Vision</p>

                <h class="h5 section-title">
                    To serve our clients better and to be the first-choice service provider for our clients. Which is supported by strategic alliance and Certified Experience to deliver success for our clients.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Our Mission</p>
                <h class="h5 section-title">
                    To remain the leading total business and services solutions Provider Company in Qatar that guarantees the Satisfaction of its clients through the provision of total Products, Services and Management, that benefits the Clients Personally and Professionally.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Value</p>
                <h class="h5 section-title">
                    We provide quality assurance to execute integrated and innovative solutions. To work with ethics, care about the clients and build a strong and trusted relationship with them.
                </h>

                <!-- <ul>

          <li class="about-item">
            <div class="accordion-card expanded" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Our Vision</spna>
                </button>
              </h3>

              <p class="accordion-content">
                To serve our clients better and to be the first-choice service provider
            for our clients. Supported by strategic alliance and certified
            experience to deliver success for our clients.
              </p>

            </div>
          </li>

          <li class="about-item">
            <div class="accordion-card" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Our Mission</spna>
                </button>
              </h3>

              <p class="accordion-content">
                To remain leading total business and services solutions provider company
             in Qatar who guarantees the satisfaction of its clients through the
             provision of total products, Services and management, that benefits
             the clients personally and professionally.
              </p>

            </div>
          </li>

          <li class="about-item">
            <div class="accordion-card" data-accordion>

              <h3 class="card-title">
                <button class="accordion-btn" data-accordion-btn>
                  <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                  <spna class="span h5">Values</spna>
                </button>
              </h3>

              <p class="accordion-content">
                To be honest, we provide quality assurance to execute integrated and
            innovated solutions. To work with ethics, care about the clients and
            build a strong and trusted relationship with them.
              </p>

            </div>
          </li>

        </ul> -->

            </div>

        </div>
    </section>

    <!-- #FEATURE -->
    <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/hero-slide-3.jpg') }}" width="575" height="550" alt=""
                                    class="img-cover">
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

    <!-- #STATS -->
    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div="container">

        <ul class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details style="margin-bottom: 3rem;">
                <summary>Seasoned Professionals</summary>
                <p>Provide opportunities for continuous learning and career growth. Offer challenging and interesting
                    projects that allow professionals to use and expand their skills.</p>
            </details>

            <details style="margin-bottom: 3rem;">

                <summary>Premier Support</summary>
                <p>Receive personalized support with a dedicated account
                    manager who understands your business needs and goals.</p>
            </details>

            <details style="margin-bottom: 3rem;">

                <summary>Business Solution</summary>
                <p>Connect with clients and other consultants effortlessly,
                    fostering a strong professional community.</p>
            </details>

        </ul>

        <!-- <li>
          <p class="hero-text">
            <span class="span">Seasoned Professionals</span>

            <spna class="span">Seasoned Professionals</spna>
          </p>
        </li> -->

        <!-- <li>
          <p class="card-text">
            <span class="span">Premier Support</span>

            <spna class="span">Receive personalized support with a dedicated account
               manager who understands your business needs and goals.</spna>
          </p>
        </li> -->

        <!-- <li>
          <p class="card-text">
            <span class="span">Business Solution</span>

            <spna class="span">Connect with clients and other consultants effortlessly,
              fostering a strong professional community.</spna>
          </p>
        </li> -->

        </div=>
    </section>

    <!-- Services -->

    <section class="section service" aria-labelledby="service-label">
        <div class="container">

            <p class="section-subtitle" id="service-label">What We Do?</p>

            <!-- <h2 class="h2 section-title">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      </h2> -->

            <ul class="grid-list">

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Notary Attestation Services</h3>

                        <!-- <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p> -->

                        <a href="{{url('/notaryattestation')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="shield-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">PRO Services</h3>

                        <!-- <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p> -->

                        <a href="{{url('/proservices')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Certificate Attestation Services</h3>

                        <!-- <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p> -->

                        <a href="{{url('/certificateattestation')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="flag-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Government Relations Services</h3>

                        <!-- <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p> -->

                        <a href="{{url('/governmentservices')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>
                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="language-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Legal Translation Services</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/translationservices')}}" class="btn-text">
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

                        <h3 class="h4 card-title">Going Digital</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/goingdigital')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>
                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Management Consulting</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/managementconsulting')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>
                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="business-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Commercial Brokerage</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/commercialbrokerage')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>
                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="gift-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Customized Gifts</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/customizedgift')}}" class="btn-text">
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

                        <h3 class="h4 card-title">Event Management</h3>

                        <!-- <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p> -->

                        <a href="{{url('/eventmanagement')}}" class="btn-text">
                            <span class="span">Learn More</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </li>

            </ul>

        </div>
    </section>

    <!-- #PROJECT -->
    <section class="section project" aria-labelledby="project-label">
        <div class="container">


            <h2 class="h2 section-title">
                What Our Users Says</h2>


            <ul class="grid-list">

                <li>
                    <div class="project-card">

                        <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                            <img src="{{ asset('website/assets/images/blog-1.jpg') }}" width="560" height="350" loading="lazy"
                                alt="Lorem Ipsum is simply dummy text" class="img-cover">
                        </figure>

                        <div class="card-content">

                            <p class="card-text">
                                “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're
                                building
                                a community for a more focused and engaging experience. This is the platform for you.
                            </p>

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Musharof Chy</span>
                                </li>

                                {{-- <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-04-14">DD MM YYYY</time>
                                </li> --}}


                            </ul>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="project-card">

                        <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                            <img src="{{ asset('website/assets/images/blog-2.jpg') }}" width="560" height="350" loading="lazy"
                                alt="Lorem Ipsum is simply dummy text" class="img-cover">
                        </figure>

                        <div class="card-content">

                            <p class="card-text">
                                “Our community members consistently express their admiration for our platform, highlighting
                                its
                                intuitive design, clean interface, and distraction-free environment.
                            </p>

                            <ul class="card-meta-list">


                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Devid Weilium</span>
                                </li>
                                {{-- <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-03-29">DD MM YYYY</time>
                                </li> --}}

                            </ul>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="project-card">

                        <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                            <img src="{{ asset('website/assets/images/blog-3.jpg') }}" width="560" height="350" loading="lazy"
                                alt="Lorem Ipsum is simply dummy text" class="img-cover">
                        </figure>

                        <div class="card-content">

                            <p class="card-text">
                                “Our members have expressed their admiration for our platform, emphasizing its user-friendly
                                interface and sleek design. They appreciate how it minimizes distractions.
                            </p>

                            <ul class="card-meta-list">
                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Lethium Frenci</span>
                                </li>

                                {{-- <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-02-26">DD MM YYYY</time>
                                </li> --}}
                            </ul>

                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </section>

@endsection
