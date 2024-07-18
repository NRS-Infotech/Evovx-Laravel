@extends('site.layout.main')

@section('website-page-title', 'proservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">PRO Services</h1>

                <p class="hero-text">
                    Best PRO Services in Qatar, refers to the all the activities that are 
                    associated with the governmental documents and applications. Some of the
                    examples are Company license renewal process, Labor and emigration 
                    process, customs, visa services, attestation services, legal 
                    translations etc.
                </p>
                <p class="hero-text">
                    Planning to start a business in Qatar requires PRO Services in Qatar. If you 
                    already have a business and need to deal with the government authorities for 
                    various purposes, hiring a professional PRO service provider will benefit you greatly.
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

    

    <!--
        - #ABOUT
        -->

    <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580" loading="lazy" alt="about banner"
                    class="w-100">
            </figure>

            <div class="about-content">

                
                <p >
                    The demand for Mandoob services in Qatar has witnessed a substantial rise 
                    due to the ever increasing growth in the economy and has created ample of 
                    opportunities in different domains in Qatar. Helpline Group promises a 
                    plethora of PRO services and guarantees 100% efficiency and quality with 
                    their work. 
                    
                  </p>
                  <p style="margin-top: 3rem;">However, it is important to consult an agency regarding the PRO Services 
                    so that the legal processes are conducted without any hassles. Helpline 
                    Group is one such agency that fits the bill with their efficient staff, 
                    vast experience in dealing with various legal processes in Qatar. By 
                    consulting an experienced agency, clients will able to save their precious 
                    time and also will ensure proper guidance regarding the legal matters.</p>
                    <p style="margin-top: 3rem;">PRO services, or Public Relations Officer services, are the services that assist you with the documentation and
                      procedures required for obtaining various licenses, permits, visas, and approvals from the government. 
                      PRO services can save you time, money, and hassle by handling all the
                      paperwork and formalities on your behalf.</p>

                {{-- <h class="h5 section-title">
                  To serve our clients better and to be the first-choice service provider for our clients. Which is supported by strategic alliance and Certified Experience to deliver success for our clients.
                </h>

                <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Our Mission</p>
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





    <!--
        - #FEATURE
        -->

    <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="531" loading="lazy"
                    alt="feature banner" class="w-100">
            </figure>

            <div class="feature-content">

                <h2 class="h5 section-title">
                    Some of the services offered are:
                  </h2>
                 
                  <ul class="feature-list">
      
                    <li>
                      <div class="feature-card" style="margin-top: 3rem;">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Issuance/Amendment/Renewal of Commercial Registration
                        </span>
                      </div>
                      
                      
                    </li>
      
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon" >
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Issuance/Amendment/Renewal of Municipality License
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Adding or cancelling any commercial activity
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Adding or removing partners in the CR
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Processing documents in Labor/Immigration/Economic and other government departments
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Issuance/Renewal of WLL License
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for Trademark/Production Registration
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Changing Trade Name/Appointment of Manager
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for Company Classification services
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for ICV Certifications
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for government and semi government works
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Attestation of Import/Export/Company Licenses
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for Embassy/Foreign Affairs attestation services
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for attestation from India, UK, USA and Canada
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for Certificate attestation services
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                          Assistance for Legal Translation services
                        </span>
                      </div>
                    </li>
                    
      
                </ul>

            </div>

        </div>
    </section>

    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div ="container">

            <ul class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details style="margin-bottom: 3rem;">
              <summary>How Much Time Does It Take to Get PRO Services in Qatar?</summary>
                <p>The length of time it takes to obtain PRO services in Qatar varies depending on the nature and type of business you have and the service you require. However, some common
                  factors that may have an impact over time include:</p>
                  
                  <li style="list-style-type:square;;">
                    The accessibility and accuracy of the documents and information.
                  </li>
                  <li style="list-style-type:square;" >
                    The complexity and urgency of the service.
                  </li>
                  <li style="list-style-type:square;">
                    The effectiveness and responsiveness of the governmental authorities.
                  </li>
                
                  <p>Usually, it may take anywhere from a few days to a few weeks to get 
                    PRO services in Qatar. However, some services may take longer than 
                    others depending on the above factors.</p>
            </details>

            <details style="margin-bottom: 3rem;">
                
                <summary>Why Choose Us as Your PRO Service Provider in Qatar?</summary>
                <p>If you are looking for the best PRO service provider in Qatar, look no further 
                  than us. We at Helpline Group are a leading PRO service company in Qatar that 
                  offers a wide range of PRO services for all types of businesses. 
                  Whether you need to obtain a trade license, a visa, a work permit, a 
                  labor card, a health card, or any other document or approval
                  from the government, we can handle it for you with ease and efficiency. We are ready to serve you anytime, anywhere. Call us at +974 4427 1100 or What’s App us at +974 7065
                  8000.</p>
            </details>
          
            </ul>
           
        </div>
      </section>

@endsection
