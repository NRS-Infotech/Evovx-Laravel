@extends('site.layout.main')

@section('website-page-title', 'Contact')

@section('website-main-section')
    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Get In Touch</h1>

                <p class="hero-text">
                    Our team will be pleased to respond to inquiries. Kindly contact us via
                    phone or email.
                </p>

                <div class="btn-wrapper">

                    {{-- <a href="{{url('/about')}}" class="btn btn-primary">Explore Now</a> --}}

                    <a href="#contact-form" class="btn btn-outline">Contact Us</a>

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



    <section class="section service" staria-labelledby="service-label">
        <div class="container">


            <ul class="grid-list">


                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Address</h3>

                        <p class="card-text">
                            Doha, Qatar
                        </p>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Contact Number</h3>

                        <p class="card-text">
                            986543324567

                        </p>

                    </div>
                </li>

                <li>
                    <div class="service-card">

                        <div class="card-icon">
                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                        </div>

                        <h3 class="h4 card-title">Email</h3>

                        <p class="card-text">
                            evovx@gmail.com
                        </p>

                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!--
    - #STATS
    -->

    <section class="stats" aria-label="our stats" >
        <div class="container" id="contact-form">

            <li class="stats-card has-bg-image" style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">


                <h1 class="h1 hero-title">Need Help? Contact us</h1>

                <p class="hero-text">
                    Our support team will get back to you ASAP via email.

                </p>

                <form>
                    <div class="footer-list">

                        <p class="h4 footer-list-title">Name</p>

                        <form action="" class="input-wrapper">
                            <input type="name" name="name" placeholder="Enter your name" required class="input-field">
                        </form>

                    </div>
                    <div class="footer-list">

                        <p class="h4 footer-list-title">Phone</p>

                        <form action="" class="input-wrapper">
                            <input type="integer" name="name" placeholder="Enter your phone number" required
                                class="input-field">
                        </form>

                    </div>
                    <div class="footer-list">

                        <p class="h4 footer-list-title">Email</p>

                        <form action="" class="input-wrapper">
                            <input type="name" name="name" placeholder="Enter your email" required
                                class="input-field">
                        </form>

                    </div>
                    <div class="footer-list">

                        <p class="h4 footer-list-title">Business</p>

                        <form action="" class="input-wrapper">
                            <input type="name" name="name" placeholder="Enter your business" required
                                class="input-field">
                        </form>

                    </div>
                    <div class="footer-list">

                        <p class="h4 footer-list-title">Message</p>

                        <form action="" class="input-wrapper">
                            <input type="name" name="name" placeholder="Enter your message" required
                                class="input-field">
                        </form>
                    </div>
                    <a href="contact.html" class="btn btn-outline submit">Submit</a>
        </div>

        </div>

        </form>
        </li>
        </li>
        </div>
    </section>

    <!-- Google Map -->

    <section class="about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <p>
            <center>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230886.6290772593!2d51.34718383487477!3d25.283917555996037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x44d9319f78cfd4b1!2sDoha%2C%20Qatar!5e0!3m2!1sen!2sae!4v1720788627799!5m2!1sen!2sae"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </p>
    </section>

@endsection
