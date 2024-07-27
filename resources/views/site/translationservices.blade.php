@extends('site.layout.main')

@section('website-page-title', 'translationservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">Legal Translation Services</h1>

                <p class="hero-text">
                    Our consultancy offers professional translation services, converting written or spoken content from one
                    language to another. Our translators are proficient in multiple languages and specialize in specific
                    subject areas. We handle various documents, including legal contracts, technical manuals, marketing
                    materials, and websites. These services facilitate communication and help businesses expand across
                    linguistic barriers.
                </p>
                <p class="hero-text">
                    Translation services include various types of documents, such as legal contracts,
                    technical manuals, marketing materials, websites, and more. With these services
                    we play a crucial role in facilitating communication and expanding businesses
                    across linguistic barriers.
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
                                <img src="{{ asset('website/assets/images/services/image-05.png') }}" width="575"
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


    <section class="section about" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure>

            <div class="about-content">
                <p>
                    We Speak more than 100 Languages. Evovx provides professional legal translation
                    services in Qatar for all types of documentation requirements. Evovx, the
                    best translation agency operates from Doha,Qatar and the surrounding Gulf Region.
                    You can trust our high-quality translation services to meet your needs. We
                    are a team of professional certified translators in Qatar who are having multi-task skills
                    to hear your words to make you happy. You can meet a customer-oriented culture in our
                    office. As the best translation company in Qatar, we provide quality translation services in Qatar in
                    legal, technical, medical, marketing, and commercial industries at a very
                    competitive price. You can meet a trustworthy Authorized translation
                    service in Qatar with us.

                </p>
            </div>
        </div>
    </section>


    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <ul class="stats-card has-bg-image"
            style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <details style="margin-bottom: 3rem;">
                <summary>When, we translate English to Arabic in Qatar we utilize a team of experienced and authorized
                    translators in Qatar and project coordinators to ensure maximum quality in legal
                    translation service in Qatar. Each certified translator in Qatar specializes in a different field such
                    as legal, financial, or medical. We always have a native language translator
                    who can expertly handle your specific needs for Arabic translation in Qatar. Also, our project
                    coordinators are fully trained to handle the technical details of your project,
                    regardless of format.</summary>
            </details>

            <details style="margin-bottom: 3rem;">

                <summary>If you need translation service in Qatar to translate English to Arabic documents, we use a team
                    that has specialized document translators who are experienced in many
                    different types of document translation, including birth and death certificates, marriage certificates,
                    divorce decrees, diplomas, transcripts, and any other Arabic document
                    you may need translated. Additionally, we have excellent Arabic software engineers and quality assurance
                    editors who can localize any software product or website. We can
                    professionally translate any Arabic website, no matter if it is a static HTML website or an advanced
                    Java, PHP, or Perl driven website. In the age of globalization, we live in today,
                    you should definitely consider localizing your website to Arabic! You can see us as a branded company in
                    legal translation service in Qatar.</summary>
            </details>

            <details style="margin-bottom: 3rem;">
                <summary>If you need to translate a document into French, Arabic, Italian, Swedish, Bosnian, Chinese, Czech,
                    Dutch, Afrikaans, Canadian, Farsi, Greek, Hawaiian, Hebrew, Hindi, Irish, Polish,
                    Russian, Spanish, Tamil, Thai, Urdu, German, Hungarian, Korean, Latin, Norwegian, Portuguese, Tagalog,
                    English, then, your search ends here with one of the best translation
                    companies in Qatar, that means Evovx!</summary>

            </details>
        </ul>
    </section>


    <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

            <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="531"
                    loading="lazy" alt="feature banner" class="w-100">
            </figure>

            <div class="feature-content">

                <h2 class="h5 section-title">
                    The Evovx is here to meet your English to Arabic Translation needs and offer superior services
                    for the following industries by our expert team for legal translation
                    services in Qatar
                </h2>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Legal translation
                            </span>
                        </div>


                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Certificate translation
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Court documents translation
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Technical Translation
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Advertising and Marketing
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Consumer Products and Retail
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Financial
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Government
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Website Translation
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Life Sciences
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Manufacturing
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Media and Entertainment
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Non-Profits and Associations
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Technology
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
