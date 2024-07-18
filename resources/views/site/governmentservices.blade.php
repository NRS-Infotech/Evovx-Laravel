@extends('site.layout.main')

@section('website-page-title', 'governmentservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Government Relations Services</h1>

                <p class="hero-text">
                    Qatar is a rapidly developing country with a dynamic economy, making it an 
              attractive destination for businesseslooking to expand their reach in the
              Middle East. However, operating in Qatar can be complex, particularly 
              when it comes to navigating the country’s government and regulatory 
              environment. This is where government relations services come in, providing 
              businesses with the necessary support to operate successfully in Qatar. In 
              this blog, we will explore government relations services in Qatar and how 
              they can benefit businesses.
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
        - #FEATURE
        -->

        <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
            <div class="container">
    
              <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="500" height="380" loading="lazy" alt="about banner"
                  class="w-100">
              </figure>
    
              <div class="feature-content">
    
                <h2 class="h5 section-title">
                  Some of the key services provided by government relations firms in Qatar include:
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
                    <p class="section-text" style="margin-top: 1.5rem;">
                      Government relations firms can help businesses navigate Qatar’s complex 
                      regulatory environment, ensuring that they comply with all 
                      relevant laws and regulations.
                    </p>
                  </li>
    
                  <li>
                    <div class="feature-card">
    
                      <div class="card-icon" >
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Permitting and licensing
                      </span>
                    </div>
                    <p class="section-text" style="margin-top: 1.5rem;">
                      Government relations firms can assist businesses in obtaining the necessary 
                      permits and licenses to operate in Qatar, ensuring that they meet all 
                      regulatory requirements.
                    </p>
                    
                    
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
                    <p class="section-text" style="margin-top: 1.5rem;">
                      Government relations firms can help businesses build and maintain 
                      positive relationships with key stakeholders, including government 
                      officials, industry associations, and other influential groups.
                    </p>
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Market research
                      </span>
                    </div>
                    <p class="section-text" style="margin-top: 1.5rem;">
                      Government relations firms can provide businesses with valuable insights 
                      into the local market, helping them understand consumer behavior, 
                      industry trends, and regulatory developments.
                    </p>
                    
                  </li>
                  <li>
                    <div class="feature-card" >
    
                      <div class="card-icon">
                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                      </div>
    
                      <span class="span">
                        Crisis management
                      </span>
                    </div>
                    <p class="section-text" style="margin-top: 1.5rem;">
                      Government relations firms can help businesses manage crises and 
                      mitigate reputational damage, particularly when it comes to dealing with government entities.
                    </p>
                    
                  </li>
                  
    
                </ul>
    
              </div>
    
            </div>
          </section>

    <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="531" loading="lazy"
              class="w-100">
          </figure>

          <div class="feature-content">

            <h2 class="h5 section-title">
              With a government relations firm in Qatar can provide businesses with a range of benefits, including:
            </h2>
           
            <ul class="feature-list">

              <li>
                <div class="feature-card" style="margin-top: 3rem;">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Access to local expertise
                  </span>
                </div>
                <p class="section-text" style="margin-top: 1.5rem;">
                  Government relations firms in Qatar have a deep understanding of the local market,
including its regulatory environment, business culture, and political landscape.
                </p>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon" >
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                  Streamlined operations
                  </span>
                </div>
                <p class="section-text" style="margin-top: 1.5rem;">
                  By working with a government relations firm, businesses can streamline their
                  operations, ensuring that they comply with all relevant laws and regulations while minimizing bureaucracy.
                </p>
                
                
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
                <p class="section-text" style="margin-top: 1.5rem;">
                  Government relations firms can help businesses navigate the regulatory 
                  requirements for market entry, enabling them to enter the market more quickly.
                </p>
                
              </li>
              <li>
                <div class="feature-card" >

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Risk mitigation
                  </span>
                </div>
                <p class="section-text" style="margin-top: 1.5rem;">
                  Government relations firms can help businesses mitigate risks, including 
                  reputational damage, regulatory violations, and political instability.
                </p>
                
              </li>
              
              

            </ul>

          </div>

        </div>
      </section>

    

      {{-- <stat> --}}

      <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div ="container">

            <ul class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details style="margin-bottom: 3rem;">
                
              <summary>Government relations services refer to the activities and strategies used to build and maintain positive relationships
                between businesses and government entities. In Qatar, government relations services can help businesses navigate
                the country’s regulatory environment, obtain necessary permits and licenses, and engage with key stakeholders.</summary>
              <!-- <p>Connect with clients and other consultants effortlessly, 
                fostering a strong professional community.</p> -->
          </details>


            
            <details style="margin-bottom: 3rem;">
              <summary>In conclusion, government relations services are an essential part of doing business in Qatar. By working with a
                government relations firm, businesses can navigate the country’s complex regulatory environment, obtain necessary
                permits and licenses, and engage with key stakeholders. By leveraging local expertise and building positive
                relationships with government entities, businesses can position themselves for success in Qatar’s dynamic economy.</p>
                  
            </details>
              
            
            </ul>
              

          
        </div>
      </section>



@endsection
