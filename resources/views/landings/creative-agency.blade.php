@extends('layouts.base', ['title' => 'Around | Creative Agency'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Hero -->
        <section class="container py-5 mt-5 mb-xl-3 mb-xxl-5">
            <div class="row pt-2">

                <!-- Text + CTA button -->
                <div class="col-lg-6 d-flex flex-column mb-4 mb-lg-0 pb-sm-3 pb-lg-0">
                    <h1 class="display-1 text-uppercase fw-bold mt-auto mb-2">Creative <span
                            class="fw-normal">solutions</span> studio<span
                            class="d-none d-md-inline-block align-middle ms-4"
                            style="width: 120px; height: 2px; background-color: currentColor;"></span></h1>
                    <div class="d-flex align-items-center py-4 py-lg-5">
                        <a class="btn btn-lg btn-primary rounded-0 me-2 me-sm-3" href="#">Let's work together</a>
                        <div class="flex-shrink-sm-0">
                            <img class="d-dark-mode-none" src="/img/brands/clutch-rating-dark.svg" width="155"
                                 alt="Clutch">
                            <img class="d-none d-dark-mode-block" src="/img/brands/clutch-rating-light.svg"
                                 width="155" alt="Clutch">
                        </div>
                    </div>
                    <ul class="nav mt-auto mx-n2 pt-sm-3 pt-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link p-2" href="#">instagram</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link p-2" href="#">dribbble</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" href="#">behance</a>
                        </li>
                    </ul>
                </div>

                <!-- Services (Grid of cards) -->
                <div class="col-lg-6">
                    <div class="row row-cols-1 row-cols-sm-2 g-1">

                        <!-- Card -->
                        <div class="col">
                            <a class="card-flip" href="#">
                                <div class="card-flip-inner">
                                    <div class="card-flip-front"
                                         style="background-image: url(/img/landing/creative-agency/services/01.jpg);">
                                        <div class="d-flex flex-column h-100" data-bs-theme="light">
                                            <h2 class="fs-lg fw-normal mb-0 mt-auto">Strategy</h2>
                                        </div>
                                    </div>
                                    <div class="card-flip-back bg-secondary">
                                        <div
                                            class="d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3">
                                            <h3 class="h4">Strategy</h3>
                                            <p class="text-body mb-3">Leo vitae sem eget eget at in vivamus placerat in
                                                sodales tristique a risusiis senectusic vitae sem eget eget at in
                                                vivamus placerat in sodales.</p>
                                            <div
                                                class="text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3">
                                                <div class="btn btn-sm btn-icon btn-outline-primary rounded-circle">
                                                    <i class="ai-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card -->
                        <div class="col">
                            <a class="card-flip" href="#">
                                <div class="card-flip-inner">
                                    <div class="card-flip-front"
                                         style="background-image: url(/img/landing/creative-agency/services/02.jpg);">
                                        <div class="d-flex flex-column h-100" data-bs-theme="light">
                                            <h2 class="fs-lg fw-normal mb-0 mt-auto">Social</h2>
                                        </div>
                                    </div>
                                    <div class="card-flip-back bg-secondary">
                                        <div
                                            class="d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3">
                                            <h3 class="h4">Social</h3>
                                            <ul class="text-body ps-4 mb-3">
                                                <li class="mb-2">Social media posts</li>
                                                <li class="mb-2">Content plan</li>
                                                <li class="mb-2">Advertising launch</li>
                                                <li class="mb-2">Photo and video content</li>
                                                <li class="mb-1">Cases and portfolio</li>
                                            </ul>
                                            <div
                                                class="text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3">
                                                <div class="btn btn-sm btn-icon btn-outline-primary rounded-circle">
                                                    <i class="ai-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card -->
                        <div class="col order-sm-2">
                            <a class="card-flip" href="#">
                                <div class="card-flip-inner">
                                    <div class="card-flip-front"
                                         style="background-image: url(/img/landing/creative-agency/services/04.jpg);">
                                        <div class="d-flex flex-column h-100" data-bs-theme="light">
                                            <h2 class="fs-lg fw-normal mb-0 mt-auto">Web design</h2>
                                        </div>
                                    </div>
                                    <div class="card-flip-back bg-secondary">
                                        <div
                                            class="d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3">
                                            <h3 class="h4">Web design</h3>
                                            <p class="text-body mb-3">Pharetra in morbi quis is massa maecenas arcu
                                                vulputate in pulvinar elit non nullage a, duis tortor mi massa ipsum in
                                                eu eu eget libero.</p>
                                            <div
                                                class="text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3">
                                                <div class="btn btn-sm btn-icon btn-outline-primary rounded-circle">
                                                    <i class="ai-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card -->
                        <div class="col order-sm-1">
                            <a class="card-flip" href="#">
                                <div class="card-flip-inner">
                                    <div class="card-flip-front"
                                         style="background-image: url(/img/landing/creative-agency/services/03.jpg);">
                                        <div class="d-flex flex-column h-100" data-bs-theme="light">
                                            <h2 class="fs-lg fw-normal mb-0 mt-auto">Branding</h2>
                                        </div>
                                    </div>
                                    <div class="card-flip-back bg-secondary">
                                        <div
                                            class="d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3">
                                            <h3 class="h4">Branding</h3>
                                            <ul class="text-body ps-4 mb-3">
                                                <li class="mb-2">Identity design</li>
                                                <li class="mb-2">Brand book creation</li>
                                                <li class="mb-2">Colors and fonts</li>
                                                <li class="mb-2">Banners and covers</li>
                                                <li class="mb-1">Visual style</li>
                                            </ul>
                                            <div
                                                class="text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3">
                                                <div class="btn btn-sm btn-icon btn-outline-primary rounded-circle">
                                                    <i class="ai-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About -->
        <section class="container py-md-4 py-lg-5 mb-xl-3 mb-xxl-5">
            <div class="row pt-sm-2">
                <div class="col-xl-10">
                    <p class="fs-2 text-dark pb-md-2 mb-lg-5">From the first stages of developing a project plan idea,
                        we pay special attention <span
                            class="fw-semibold">to design solutions to existing problems,</span> create brands that
                        become part of history, and create a digital skill that harnesses the power of <span
                            class="fw-semibold">creativity and humanity.</span></p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-4 col-lg-3 mb-3">
                    <h3 class="display-1 mb-0 mb-sm-1">16</h3>
                    <span class="fs-sm">Awards in various industries</span>
                </div>
                <div class="col-sm-4 col-lg-3 mb-3">
                    <h3 class="display-1 mb-0 mb-sm-1">22</h3>
                    <span class="fs-sm">Full time specialists</span>
                </div>
                <div class="col-sm-4 col-lg-3 mb-2 mb-sm-3">
                    <h3 class="display-1 mb-0 mb-sm-1">205</h3>
                    <span class="fs-sm">Happy clients all over the world</span>
                </div>
            </div>
        </section>


        <!-- Our projects (Filterable masonry grid) -->
        <section class="container overflow-hidden pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="masonry-filterable">
                <div class="row pb-lg-4 mb-2 mb-sm-3">

                    <!-- Page title -->
                    <div class="col-xxl-3 col-lg-4 text-center text-lg-start">
                        <h1>Our Projects</h1>
                        <p class="mb-4 mb-lg-0">We will put our industry expertise for creativity to work for your
                            project</p>
                    </div>

                    <!-- Filters -->
                    <div class="col-xxl-9 col-lg-8 d-flex">
                        <ul class="masonry-filters nav nav-pills fs-sm flex-nowrap overflow-auto text-nowrap w-100 mx-auto me-lg-0 pb-3"
                            style="max-width: 456px;">
                            <li class="nav-item mb-0">
                                <a class="nav-link border active" href="#" data-group="all">All</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link border" href="#" data-group="branding">Branding</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link border" href="#" data-group="stationery">Stationery</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link border" href="#" data-group="web">Web</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Grid of portfolio items -->
                <div class="masonry-grid" data-columns="2">

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["branding"]'>
                        <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 512px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/07.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">Healthy Yellow</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Branding, Packaging</span>
                                    <span>2022</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
                        <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 704px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/08.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">Sen Jonson</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Stationery design</span>
                                    <span>2022</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["branding"]'>
                        <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 467px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/09.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">Gradient</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Branding, Packaging</span>
                                    <span>2022</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
                        <div class="zoom-effect position-relative border-bottom ms-auto pb-3" style="max-width: 605px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/10.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">D.G.Vent</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Stationery design</span>
                                    <span>2021</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
                        <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 550px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/11.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">Doe design</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Branding, Stationery</span>
                                    <span>2021</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Item -->
                    <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["web"]'>
                        <div class="zoom-effect position-relative border-bottom mx-auto pb-3" style="max-width: 470px;">
                            <div class="zoom-effect-wrapper">
                                <div class="zoom-effect-img">
                                    <img src="/img/portfolio/grid/12.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="pt-4 mt-lg-2">
                                <h2 class="h4 mb-2">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">The Studio</a>
                                </h2>
                                <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                    <span>Web design</span>
                                    <span>2020</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Button -->
                <div class="text-center pb-sm-2 pb-md-4 mt-n1 mt-lg-n2">
                    <a class="btn btn-lg btn-outline-dark rounded-0" href="#">Let's work together</a>
                </div>
            </div>
        </section>


        <!-- Clients (Logos autoplay slider) -->
        <section class="pt-sm-1 pt-lg-3 pt-xl-4">
            <div class="container text-center">
                <h2 class="h1">We partner with more than 60 brands</h2>
                <p class="pb-1 pb-sm-2 pb-md-3 pb-lg-4 mb-3">Clients who have become our friends for many years</p>
            </div>
            <div class="swiper pb-3 pb-sm-4 mb-xl-2" data-swiper-options='{
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "freeMode": true,
          "speed": 10000,
          "freeModeMomentum": false,
          "breakpoints": {
            "0": { "slidesPerView": 2 },
            "600": { "slidesPerView": 3 },
            "800": { "slidesPerView": 4 },
            "1200": { "slidesPerView": 5 },
            "1400": { "slidesPerView": 6 },
            "1600": { "slidesPerView": 7 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
                    <div class="swiper-slide">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/starcraft-dark.svg"
                             width="196" alt="Starcraft">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/starcraft-light.svg"
                             width="196" alt="Starcraft">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/auchan.svg" width="196" alt="Auchan">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/klinos.svg" width="196" alt="Klinos">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/suzuki.svg" width="196" alt="Suzuki">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/airbnb.svg" width="196" alt="Airbnb">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/philips.svg" width="196" alt="Philips">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/careem.svg" width="196" alt="Careem">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/puma-dark.svg" width="196"
                             alt="Puma">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/puma-light.svg" width="196"
                             alt="Puma">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/alpine.svg" width="196" alt="Alpine">
                    </div>
                </div>
            </div>
            <div class="swiper" dir="rtl" data-swiper-options='{
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "freeMode": true,
          "speed": 8500,
          "freeModeMomentum": false,
          "breakpoints": {
            "0": { "slidesPerView": 2 },
            "600": { "slidesPerView": 3 },
            "800": { "slidesPerView": 4 },
            "1200": { "slidesPerView": 5 },
            "1400": { "slidesPerView": 6 },
            "1600": { "slidesPerView": 7 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/heineken.svg" width="196" alt="Heineken">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/champion-dark.svg"
                             width="196" alt="Champion">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/champion-light.svg"
                             width="196" alt="Champion">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/auchan.svg" width="196" alt="Auchan">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/philips.svg" width="196" alt="Philips">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/airbnb.svg" width="196" alt="Airbnb">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/alpine.svg" width="196" alt="Alpine">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/puma-dark.svg" width="196"
                             alt="Puma">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/puma-light.svg" width="196"
                             alt="Puma">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto" src="/img/brands/foster.svg" width="196" alt="Foster">
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/starcraft-dark.svg"
                             width="196" alt="Starcraft">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/starcraft-light.svg"
                             width="196" alt="Starcraft">
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials (Carousel) -->
        <section class="container position-relative z-2 py-5 mt-n3 mt-sm-0 mb-md-3 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row py-md-4 py-lg-5">
                <div class="col-md-9 col-lg-7 order-md-2">

                    <!-- Swiper slider -->
                    <div class="swiper" data-swiper-options='{
              "spaceBetween": 40,
              "loop": true,
              "bindedContent": true,
              "autoHeight": true,
              "pagination": {
                "el": ".testimonials-count",
                "type": "fraction"
              },
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              }
            }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#testimonial-1">
                                <div class="d-flex d-md-none pt-3 mb-3">
                                    <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                                    <div class="ps-3">
                                        <h3 class="h5 mb-0">Lilia Bocouse</h3>
                                        <p class="text-body-secondary mb-0">Head of Marketing</p>
                                    </div>
                                </div>
                                <h2 class="mb-lg-4">Awesome experience with a professional team. Thank you :)</h2>
                                <p class="lead mb-0">Suspendisse mauris elit, pellentesque nec purus sed, finibus
                                    finibus ipsum. Proin posuere, metus sed porttitor pellentesque, ante magna tincidunt
                                    mi, nec fermentum dui ligula vel massa. Praesent ultrices iaculis arcu iaculis
                                    ultrices. Maecenas vitae nulla odio. In laoreet, lectus in tempus ultricies.</p>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#testimonial-2">
                                <div class="d-flex d-md-none pt-3 mb-3">
                                    <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                                    <div class="ps-3">
                                        <h3 class="h5 mb-0">Robert Fox</h3>
                                        <p class="text-body-secondary mb-0">Marketing Coordinator</p>
                                    </div>
                                </div>
                                <h2 class="mb-lg-4">Thanks to your talented team for the banding we dreamed about</h2>
                                <p class="lead mb-0">Leo vitae sem eget eget at in vivamus placerat sodales tristique
                                    risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu
                                    dignissim etiamier turpis tincidunt eget placerat feugiat senectusic quisque
                                    faucibus placerat sodales vitae tempor morbi tellus pulvinar tristique in
                                    turpis.</p>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#testimonial-3">
                                <div class="d-flex d-md-none pt-3 mb-3">
                                    <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                                    <div class="ps-3">
                                        <h3 class="h5 mb-0">Jenny Wilson</h3>
                                        <p class="text-body-secondary mb-0">CEO, Co-Founder</p>
                                    </div>
                                </div>
                                <h2 class="mb-lg-4">Thanks to you, we have created a unique branding that is our
                                    pride!</h2>
                                <p class="lead mb-0">Duis sapien velit, rutrum ac rutrum dapibus, auctor ut lacus.
                                    Aenean sit amet erat augue. Aenean finibus, nibh sed malesuada maximus, nisi tellus
                                    iaculis quam, eget egestas mi felis eu urna. Quisque id nisl commodo, egestas eros
                                    ac, cursus odio. Ut nec rutrum magna, vel tempor erat. Vivamus nec tempus purus.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-lg-1 order-md-1 mt-n3">
                    <i class="ai-quotes d-none d-md-block text-primary ms-n2 mb-1" style="font-size: 150px;"></i>

                    <!-- Contnetn binded to slider (on screens > 768px) -->
                    <div class="binded-content h-auto d-none d-md-block">
                        <div class="binded-item h-auto active" id="testimonial-1">
                            <h3 class="h5 mb-1">Lilia Bocouse</h3>
                            <p class="text-body-secondary mb-0">Head of Marketing</p>
                        </div>
                        <div class="binded-item h-auto" id="testimonial-2">
                            <h3 class="h5 mb-1">Robert Fox</h3>
                            <p class="text-body-secondary mb-0">Marketing Coordinator</p>
                        </div>
                        <div class="binded-item h-auto" id="testimonial-3">
                            <h3 class="h5 mb-1">Jenny Wilson</h3>
                            <p class="text-body-secondary mb-0">CEO, Co-Founder</p>
                        </div>
                    </div>

                    <!-- Swiper controls (Prev / Next) -->
                    <div class="d-flex align-items-center pb-2 pb-md-0 pt-4 mt-3">
                        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button"
                                id="prev-testimonial" aria-label="Prev">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <div class="testimonials-count fw-medium flex-shrink-0 text-center"
                             style="width: 2.5rem;"></div>
                        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button"
                                id="next-testimonial" aria-label="Next">
                            <i class="ai-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Team -->
        <section class="container pt-2 pt-xxl-3 pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="row pb-md-3">
                <div class="col-md-4 mb-2 mb-sm-3 mb-md-4 pb-2" style="margin-top: -120px;">
                    <div class="position-sticky top-0" style="padding-top: 120px;">
                        <h2 class="display-3 mb-0 mb-md-3 pb-lg-3">Meat our creative team</h2>
                        <a class="btn btn-lg btn-link px-0" href="#">
                            View all 16 members
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 me-sm-1 pe-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/01.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-facebook rounded-circle mx-2"
                                           href="#" aria-label="Facebook">
                                            <i class="ai-facebook"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-dribbble rounded-circle mx-2"
                                           href="#" aria-label="Dribbble">
                                            <i class="ai-dribbble"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-stack-overflow rounded-circle mx-2"
                                           href="#" aria-label="Stack Overflow">
                                            <i class="ai-stack-overflow"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Nick Black</h3>
                                    <span class="fs-lg text-body-secondary">Web Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 ms-sm-1 ps-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/02.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-facebook rounded-circle mx-2"
                                           href="#" aria-label="Facebook">
                                            <i class="ai-facebook"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-instagram rounded-circle mx-2"
                                           href="#" aria-label="Instagram">
                                            <i class="ai-instagram"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-behance rounded-circle mx-2"
                                           href="#" aria-label="Behance">
                                            <i class="ai-behance"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Emilia Denver</h3>
                                    <span class="fs-lg text-body-secondary">Identity Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 me-sm-1 pe-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/03.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-facebook rounded-circle mx-2"
                                           href="#" aria-label="Facebook">
                                            <i class="ai-facebook"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-x rounded-circle mx-2" href="#"
                                           aria-label="X">
                                            <i class="ai-x"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-google rounded-circle mx-2" href="#"
                                           aria-label="Google">
                                            <i class="ai-google"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Jane Cooper</h3>
                                    <span class="fs-lg text-body-secondary">Marketing Coordinator</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 ms-sm-1 ps-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/04.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-facebook rounded-circle mx-2"
                                           href="#" aria-label="Facebook">
                                            <i class="ai-facebook"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-dribbble rounded-circle mx-2"
                                           href="#" aria-label="Dribbble">
                                            <i class="ai-dribbble"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-behance rounded-circle mx-2"
                                           href="#" aria-label="Behance">
                                            <i class="ai-behance"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Jenny Wilson</h3>
                                    <span class="fs-lg text-body-secondary">Web Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 me-sm-1 pe-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/05.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-instagram rounded-circle mx-2"
                                           href="#" aria-label="Instagram">
                                            <i class="ai-instagram"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-dribbble rounded-circle mx-2"
                                           href="#" aria-label="Dribbble">
                                            <i class="ai-dribbble"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-behance rounded-circle mx-2"
                                           href="#" aria-label="Behance">
                                            <i class="ai-behance"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Robert Fox</h3>
                                    <span class="fs-lg text-body-secondary">Graphic Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="card-hover pb-3 mb-lg-2 mb-xl-3 ms-sm-1 ps-xl-3">
                                <div class="position-relative">
                                    <img src="/img/landing/creative-agency/team/06.jpg" alt="Image">
                                    <div
                                        class="d-flex justify-content-center position-absolute start-0 bottom-0 w-100 px-3 mb-4 opacity-0">
                                        <a class="btn btn-light btn-icon btn-sm btn-facebook rounded-circle mx-2"
                                           href="#" aria-label="Facebook">
                                            <i class="ai-facebook"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-x rounded-circle mx-2" href="#"
                                           aria-label="X">
                                            <i class="ai-x"></i>
                                        </a>
                                        <a class="btn btn-light btn-icon btn-sm btn-behance rounded-circle mx-2"
                                           href="#" aria-label="Behance">
                                            <i class="ai-behance"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-bottom pt-4 pb-3">
                                    <h3 class="h4 mb-2">Jacob Jones</h3>
                                    <span class="fs-lg text-body-secondary">Branding Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer bg-dark position-relative py-4 py-md-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
             style="background-color: rgba(255,255,255, .03);"></div>
        <div class="container position-relative z-2 pt-4 pt-md-2 pt-xl-4 pt-xxl-5" data-bs-theme="dark">
            <div class="row py-md-3 mb-4 mb-md-5">
                <div class="col-md-7 col-lg-6 col-xxl-5 mb-sm-4 mb-md-0">
                    <h2 class="display-4 mb-4 mb-md-5">Let's start building brand together</h2>
                    <div class="d-sm-flex align-items-center">
                        <a class="btn btn-lg btn-primary rounded-0 me-sm-3 me-lg-4" href="#">Let's work together</a>
                        <p class="text-body fs-sm py-3 py-sm-0 ps-sm-2 mb-0">Managers will contact you to discuss the
                            project and select the best team</p>
                    </div>
                </div>
                <div class="col-md-5 offset-lg-1 offset-xxl-2 d-flex flex-column">
                    <div class="nav mx-n2 mx-lg-n4 mb-2 mb-sm-3">
                        <a class="nav-link text-primary px-2 px-lg-4"
                           href="mailto:example@email.com">example@email.com</a>
                        <a class="nav-link px-3 px-lg-4" href="#">Privay policy</a>
                    </div>
                    <div class="nav flex-column mb-3 mb-sm-4">
                        <a class="nav-link py-1 px-0" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                        <a class="nav-link py-1 px-0" href="tel:+15262200000">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0000</a>
                    </div>
                    <div class="nav mx-n2 mt-auto">
                        <a class="nav-link py-1 px-2 me-2" href="#">instagram</a>
                        <a class="nav-link py-1 px-2 me-2" href="#">behance</a>
                        <a class="nav-link py-1 px-2 me-2" href="#">medium</a>
                        <a class="nav-link py-1 px-2" href="#">dribbble</a>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm pt-3 pb-2 pb-lg-0 mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
            </p>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
