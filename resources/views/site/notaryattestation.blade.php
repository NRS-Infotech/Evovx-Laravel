@extends('site.layout.main')

@section('website-page-title', 'notaryattestation')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Notary Attestation Services</h1>

                <p class="hero-text">
                    Getting a certificate notarized makes it a legally valid authenticated
                    document. And it is an important milestone to get your immigration process
                    cleared before moving to any foreign country. Helpline
                    Group will assist you to get your
                    Notary certificate attestation in Qatar.
                </p>
                <p class="hero-text">
                    Each country follows different rules for notary public services, in the
                    same way, Qatar also follows many rules for Notary public services in
                    Qatar.
                </p>

                <div class="btn-wrapper">
                    <a href="{{ url('/contact') }}" class="btn btn-outline">Contact Us</a>
                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/Notary Services.jpg') }}" width="575"
                                    height="550" alt="" class="img-cover">
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
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure>

            <div class="about-content">


                <p>
                    Notarizing your certificate is a powerful risk management tool to prevent
                    fraud and identity theft. It is the next level of verification that states
                    the authenticity of the people signing in the document.

                </p>
                <p style="margin-top: 3rem;">
                    A certificate whether it is a personal or commercial document that is
                    notarized is considered to be a self-authenticated legal document.
                </p>

                <p style="margin-top: 3rem;">
                    We are an authorized agency by many embassies and various government
                    departments. We provide services in the entire gulf region.

                </p>
                <p style="margin-top: 3rem;">
                    We do Notary services from India, UK, USA for Educational, Marriage,
                    Birth, Experience, School Transfer certificates, Company documents, and
                    Export Import documents. Contact Helpline Group today to get assistance for notary public attestation
                    Services Qatar.

                </p>
            </div>

        </div>
    </section>

@endsection
