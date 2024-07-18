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
    <!--
            - #PROJECT
            -->

    {{-- <section class="section project" aria-labelledby="project-label">
        <div class="container">

            <!-- <p class="section-subtitle" id="project-label">Case Studies</p> -->

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

                            <!-- <h3 class="h3">
                        <a href="#" class="card-title">Seasoned Professionals</a>
                      </h3> -->

                            <p class="card-text">
                                “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're
                                building a community for a more focused and engaging experience. This is the platform for
                                you.
                            </p>

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Musharof Chy</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-04-14">DD MM YYYY</time>
                                </li>


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

                            <!-- <h3 class="h3">
                        <a href="#" class="card-title">Premier Support</a>
                      </h3> -->

                            <p class="card-text">
                                “Our community members consistently express their admiration for our platform, highlighting
                                its intuitive design, clean interface, and distraction-free environment.
                            </p>

                            <ul class="card-meta-list">


                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Devid Weilium</span>
                                </li>
                                <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-03-29">DD MM YYYY</time>
                                </li>

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

                            <!-- <h3 class="h3">
                        <a href="#" class="card-title">Business Solution</a>
                      </h3> -->

                            <p class="card-text">
                                “Our members have expressed their admiration for our platform, emphasizing its user-friendly
                                interface and sleek design. They appreciate how it minimizes distractions.
                            </p>

                            <ul class="card-meta-list">
                                <li class="card-meta-item">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                    <span class="meta-text">Lethium Frenci</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                                    <time class="meta-text" datetime="2022-02-26">DD MM YYYY</time>
                                </li>



                            </ul>

                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </section> --}}

@endsection
