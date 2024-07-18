@extends('site.layout.main')

@section('website-page-title', 'goingdigital')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Going Digital</h1>

                <p class="hero-text">
                    Our Approach to Document Imaging & Scanning documents can be a very time consuming project for an organization, 
              however when outsourced, you take advantage of the expertise, resources 
              and technology which reduces your cost and more importantly your time and 
              productivity.
                </p>
                <p class="hero-text">
                    Deciding to go digital
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
                <p class="section-subtitle" id="about-label">Where to start?</p>

                
                <p >
                    Al Bidda Warehousing will help you identify what is the best strategy when
converting your physical documents into digital files since each organization
has different record access requirements, retention period dates and policies
when it comes to document and information management. At times, there is
a need to go 100% digital, for example, when a company wants to make
information accessible at all times to numerous offices across the country or
when information is scattered across multiple locations and needs a central
location to access it on a regular basis.
                    
                  </p>
                  <p style="margin-top: 3rem;">On the flip side, many organizations only implement a day forward scanning
                    program or scan individual files on an ad hoc basis. Whatever the goal, Al
                    Bidda WareHousing makes the planning, preparation and conversion
                    process efficient and convenient. Always, when deciding to go digital, the
                    retention period for each document should be evaluated to stay compliant
                    and avoid unnecessary imaging costs.</p>
                   

                

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
                    Al Bidda WareHousing offers the following scanning programs:
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
                      <p class="section-text" style="margin-top: 1.5rem;">
                        For bulk conversion of existing documents into
      digital format.
                      </p>
                      
                      
                    </li>
      
                    <li>
                      <div class="feature-card">
      
                        <div class="card-icon" >
                          <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                        </div>
      
                        <span class="span">
                            Day Forward Imaging
                        </span>
                      </div>
                      <p class="section-text" style="margin-top: 1.5rem;">
                        Regular imaging of newly created documents.
                      </p>
                      
                      
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
                      <p class="section-text" style="margin-top: 1.5rem;">
                        On demand scan requests and ad hoc batch scanning
                        </p> 
                    </li>
                </ul>
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
                <p class="section-subtitle" id="about-label">The Preparation</p>

                
                <p >
                    Once the scanning strategy and plan has been determined, Al Bidda
WareHousing will pick up the documents that need to be converted with
one of our secure transportation vehicles and will transport them back to our
scanning facility. All documents then undergo a preparation process – this is
where majority of the time is allocated to in an imaging project. Files and
documents are organized, staples and fasteners are removed, corners are
straightened, damaged pages are taped, etc. We can handle all paper sizes,
from sticky notes to oversized drawings, all planned for in the appropriate
sequence.
<p class="section-subtitle" style="margin-top: 3rem;" id="about-label">Scanning & Quality Control</p>
                  </p>
                  <p style="margin-top: 3rem;">After all documents go through the preparation process, they are then ready
                    to be fed through our state-of-the-art, high-speed scanners. Most
                    documents can be fed through scanner feeders, however, when necessary, Al
                    Bidda WareHousing also uses flatbeds to scan special size and special
                    handling documents. All of our scanners can produce black and white or
                    colour images and are equipped with auto-improvement features to ensure
                    the best quality scan. Our document specialists monitor the scanning
                    process and perform a quality check for readability and clarity. Al Bidda
                    WareHousing offers a satisfaction guarantee for all scanning projects.</p>
                   

                

            </div>

        </div>
    </section>


    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div ="container">

            <ul class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details style="margin-bottom: 3rem;">
              <summary>Let's talk about improving your business marketing</summary>
                <p>Our priorities have always remained the same, to help companies maximize their marketing ROI, accelerate customer growth, and gain a lasting competitive edge in their industries. Our background in financial mathematics and digital marketing, give us an analytical and quantitative approach to do just that.</p>
                  
                  
            </details>

            
          
            </ul>
           
        </div>
      </section>

@endsection
