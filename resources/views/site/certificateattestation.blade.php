@extends('site.layout.main')

@section('website-page-title', 'certificateattestation')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Certificate Attestation Services</h1>

                <p class="hero-text">
                    Helpline group is an ISO-certified and internationally recognized company for certificate attestation in Qatar.  We are an embassy-approved company providing assistance in the attestation process of all kinds of certificates for various purposes.  The long 20 years of rich experience in the field glorifies the service that we have rendered to our customers.  The transparent, customer-oriented, ethical, and reliable services provided at Helpline Group, make us the No.1 in Qatar in the field of certificate attestation services.
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
                <p class="section-subtitle" id="about-label">Documents required for Qatar Attestation(Educational Certificate) </p>
                <li>
                    <div class="feature-card" style="margin-top: 3rem;">
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Original Document(depends upon the issuing country)
                      </span>
                    </div>
                    
                    
                  </li>
                  <li>
                    <div class="feature-card" ">
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Final Mark sheet / Transcripts
                      </span>
                    </div>
                    
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon" >
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Passport Copy of the candidate
                      </span>
                    </div>
                    
                    
                  </li>
            
                  <p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Attestation Process for Qatar</p>
                <li>
                    <div class="feature-card" style="margin-top: 3rem;">
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Notary Attestation from home country
                      </span>
                    </div>
                    
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Foreign Affairs Attestation from Home Country
                      </span>
                    </div>
                    
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Embassy Attestation
                      </span>
                    </div>
                    
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Ministry Of Foreign Affairs from Qatar
                      </span>
                    </div>
                    
                    
                  </li>
                
                <p style="margin-top: 3rem;">
                    We are the leading provider of different types of certificate attestation services in 
                    Qatar. As a global leader in Certificate attestation, we are branded as 
                    the best certificate attestation agency in Qatar or trustworthy brand for
                    Certificate attestation services in Qatar. We can streamline the process 
                    and provide you with adequate assistance to get your certificates attested at low cost.
                    
                  </p>
            </div>

        </div>
    </section>





    <!--
        - #FEATURE
        -->

    <section class="about" aria-labelledby="about-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="580" loading="lazy"
                    alt="about banner" class="w-100">
            </figure>

            <div class="feature-content">
                <p class="section-subtitle" id="about-label">Our long service in the field of certificate attestation proclaims our credibility.
                    Our highly customer-focused & cost-effective approach has made us the top Document/Certificate 
                    Attestation provider in Qatar with a large customer base. </p>

                {{-- <h2 class="h5 section-title">
                Our long service in the field of certificate attestation proclaims our credibility.
                Our highly customer-focused & cost-effective approach has made us the top Document/Certificate 
                Attestation provider in Qatar with a large customer base.
                  </h2> --}}
                 
                  <ul class="feature-list">
      
                    <li>
                      <div class="feature-card" style="margin-top: 3rem;">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Degree Certificate Attestation in Qatar
                        </span>
                      </div>
                      
                      
                    </li>
      
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon" >
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                        UK and Us Certificate Attestation/Legalization
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Marriage Certificate Attestation in Qatar
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                        Indian Educational Certificate Attestation
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                        Private Certificate Attestation in Qatar
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Private Diploma Certificate Attestation
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Mark list Attestation in Qatar
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Birth Certificate Attestation in Qatar
                        </span>
                      </div>
                      
                      
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Experience Certificate Attestation 
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Transfer Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Death Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Divorce Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Medical Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Transcript Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Police Clearance Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="feature-card" >
      
                        <div class="card-icon">
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Salary Certificate Attestation in Qatar
                        </span>
                      </div>
                    </li>
                    
      
                </ul>

            </div>

        </div>
    </section>

    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div ="container" >

            <ul class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details >
              <summary>The Motto of the Helpline Group attestation service is Quick delivery, transparency, credibility, and customer satisfaction. You can reach the
                Helpline Group to experience the best and most secure certificate attestation services in Qatar for your every need.</summary>
                
            </details>

            {{-- <details style="margin-bottom: 3rem;">
                
                <summary>The Motto of the Helpline Group (https://qatarhelplinegroup.com) attestation service is Quick delivery, transparency, credibility, and customer satisfaction. You can reach the
                    Helpline Group to experience the best and most secure certificate attestation services in Qatar for your every need.</summary>
                
            </details> --}}
          
            </ul>
           
        </div>
      </section>

@endsection
