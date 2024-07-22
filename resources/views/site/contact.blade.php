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
                                <img src="{{ asset('website/assets/images/hero-slide-1.jpg') }}" width="575"
                                    height="550" alt="" class="img-cover">
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
                            Al-Gharafa Zone (51), Al-Hidab St. No. (787), Bldg. No. (55),2nd Floor, Office No. 35, P.O. BOX
                            63678 Doha, Qatar
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
                            +974 44919000 <br>
                            +974 3000 0899

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
                            info@evovx.com
                        </p>

                    </div>
                </li>
            </ul>
        </div>
    </section>


    {{-- #STATS --}}
    <section class="" aria-label="our stats">
        <div class="container" id="contact-form">
            <li class="stats-card has-bg-image"
                style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">
                <h1 class="h1 hero-title">Need Help? Contact us</h1>
                <p class="hero-text">Our support team will get back to you ASAP via email.</p>
                <form id="contactForm" class="input-wrapper">
                    @csrf
                    <div class="footer-list">
                        <p class="h4 footer-list-title">Name</p>
                        <input type="text" name="name" placeholder="Enter your name" required class="input-field">
                    </div>
                    <div class="footer-list">
                        <p class="h4 footer-list-title">Phone</p>
                        <input type="tel" name="phone" placeholder="Enter your phone number" class="input-field">
                    </div>
                    <div class="footer-list">
                        <p class="h4 footer-list-title">Email</p>
                        <input type="email" name="email" placeholder="Enter your email" required class="input-field">
                    </div>
                    <div class="footer-list">
                        <p class="h4 footer-list-title">Business</p>
                        <input type="text" name="business" placeholder="Enter your business" required
                            class="input-field">
                    </div>
                    <div class="footer-list">
                        <p class="h4 footer-list-title">Message</p>
                        <textarea name="message" placeholder="Enter your message" required class="input-field" rows="4"></textarea>
                    </div>
                    <div class="justify-content-center">
                        <button type="submit" class="btn btn-outline submit">Submit</button>
                    </div>
                </form>
                <div id="formMessages"></div>
            </li>
        </div>
    </section>

    <!-- Google Map -->
    <section class="section" aria-labelledby="about-label">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230886.6290772593!2d51.34718383487477!3d25.283917555996037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x44d9319f78cfd4b1!2sDoha%2C%20Qatar!5e0!3m2!1sen!2sae!4v1720788627799!5m2!1sen!2sae"
                width="100%" height="600" style="border:1px solid #60697b;" allowfullscreen="false" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route('contact.store') }}',
                data: formData,
                success: function(response) {
                    $('#formMessages').html('<div class="alert alert-success">' + response
                        .message + '</div>');
                    $('#contactForm')[0].reset();
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value) {
                        errorMessage += '<li>' + value[0] + '</li>';
                    });
                    errorMessage += '</ul></div>';
                    $('#formMessages').html(errorMessage);
                }
            });
        });
    });
</script>
