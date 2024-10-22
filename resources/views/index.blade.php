@extends('layouts.base', ['title' => 'Around | Multipurpose Bootstrap Template'])

@section('css')
    <style>
        .scroll-down-btn {
            display: inline-block;
            text-decoration: none;
        }

        .scroll-down-btn p {
            margin-top: 1.25rem;
            color: white;
            font-size: .875rem;
            font-weight: 500;
            letter-spacing: .375rem;
            text-indent: .375rem;
            animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
        }

        .mouse {
            background: #2c333e linear-gradient(transparent 0%, transparent 50%, white 50%, white 100%);
            position: relative;
            width: 38px;
            height: 65px;
            margin: 0 auto;
            border-radius: 6rem;
            background-size: 100% 200%;
            animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
        }

        .mouse:before, .mouse:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
        }

        .mouse:before {
            width: 34px;
            height: 61px;
            background-color: #121519;
            border-radius: 6rem;
        }

        .mouse:after {
            background-color: white;
            width: .375rem;
            height: .375rem;
            border-radius: 100%;
            animation: trackBallSlide 5s linear infinite;
        }

        @keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }
            20% {
                background-position: 0% 0%;
            }
            21% {
                background-color: #2c333e;
            }
            29.99% {
                background-color: white;
                background-position: 0% 0%;
            }
            30% {
                background-color: #2c333e;
                background-position: 0% 100%;
            }
            50% {
                background-position: 0% 0%;
            }
            51% {
                background-color: #2c333e;
            }
            59% {
                background-color: white;
                background-position: 0% 0%;
            }
            60% {
                background-color: #2c333e;
                background-position: 0% 100%;
            }
            80% {
                background-position: 0% 0%;
            }
            81% {
                background-color: #2c333e;
            }
            90%, 100% {
                background-color: white;
            }
        }

        @keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }
            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }
            15%, 19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }
            28%, 29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }
            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }
            45%, 49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }
            58%, 59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }
            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }
            75%, 79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }
            88%, 100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @keyframes nudgeMouse {
            0%, 30%, 60%, 90% {
                transform: translateY(0);
            }
            20%, 50%, 80% {
                transform: translateY(8px);
            }
        }

        @keyframes nudgeText {
            0%, 30%, 60%, 90% {
                transform: translateY(0);
            }
            20%, 50%, 80% {
                transform: translateY(2px);
            }
        }

        @keyframes colorText {
            21%, 51%, 81% {
                color: #2c333e;
            }
            30%, 60%, 90% {
                color: white;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Page wrapper -->
    <main class="page-wrapper">
        @include('layouts.partials/navbar', ['isDark' => true])


        <!-- Hero -->
        <section class="bg-dark position-relative min-vh-100 overflow-hidden pt-5" data-bs-theme="dark">
            <svg class="position-absolute top-0" width="262" height="160" viewBox="0 0 262 160" fill="none"
                 xmlns="http://www.w3.org/2000/svg" style="left: 6%;">
                <ellipse cx="131" cy="30.5" rx="131" ry="129.5" fill="white" fill-opacity=".03"></ellipse>
            </svg>
            <div class="container position-relative z-5 text-center pt-5 mt-lg-4 mt-xl-5">
                <h1 class="display-1 pt-4 mt-sm-3">
                    <span class="text-white fw-normal">Have a look </span>
                    <span class="d-inline-flex align-items-center">
              <span class="text-white">Ar</span>
              <img class="flex-shrink-0 mt-2" src="/img/landing/intro/avatar.png" width="51" alt="Image">
              <span class="text-white">und!</span>
            </span>
                </h1>
                <p class="text-body fs-xl mb-5">And you will find everything you need to build a great looking
                    website</p>
                <a class="scroll-down-btn" href="#landings" data-scroll data-scroll-offset="20">
                    <div class="mouse"></div>
                    <p>Landings</p>
                </a>
            </div>
            <div class="d-none d-lg-block" style="margin-top: -80px;"></div>
            <div class="d-none d-sm-block d-lg-none" style="margin-top: -40px;"></div>
            <div class="parallax mx-auto mb-n5" style="max-width: 1606px;">
                <div class="parallax-layer" data-depth="-0.1">
                    <img src="/img/landing/intro/hero/01.png" alt="Background shapes">
                </div>
                <div class="parallax-layer z-2" data-depth="0.12">
                    <img src="/img/landing/intro/hero/02.png" alt="Foreground shape">
                </div>
                <div class="parallax-layer z-2" data-depth="0.35">
                    <img src="/img/landing/intro/hero/03.png" alt="Foreground shape">
                </div>
                <div class="parallax-layer z-2" data-depth="0.23">
                    <img src="/img/landing/intro/hero/04.png" alt="Foreground shape">
                </div>
            </div>
        </section>


        <!-- Landings -->
        <section class="bg-gray py-2 py-lg-3 py-xl-4 py-xxl-5" id="landings">
            <div class="container py-5 mt-1 mb-2 mt-sm-2 mb-sm-3 mt-md-3 mb-md-4 my-lg-4 my-xl-5">
                <h2 class="display-5 text-center pt-xxl-2">Landing pages</h2>
                <p class="fs-lg text-center pb-3 pb-lg-0 mb-lg-5">Choose from pre-built layouts of our unique landing
                    pages</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-5 pb-xl-3">

                    <!-- Mobile App Showcase -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/mobile-app-showcase-light.jpg"
                                     alt="Mobile App Showcase">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/mobile-app-showcase-dark.jpg"
                                     alt="Mobile App Showcase">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'mobile-app-showcase']) }}">Mobile App
                                    Showcase</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Product Landing -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/product-landing-light.jpg"
                                     alt="Product Landing">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/product-landing-dark.jpg"
                                     alt="Product Landing">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'product']) }}">Product Landing</a>
                            </h3>
                        </div>
                    </div>

                    <!-- SaaS v.1 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none" src="/img/landing/intro/landings/saas-v1-light.jpg"
                                     alt="SaaS v.1">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/saas-v1-dark.jpg" alt="SaaS v.1">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'saas-1']) }}">SaaS v.1</a>
                            </h3>
                        </div>
                    </div>

                    <!-- SaaS v.2 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none" src="/img/landing/intro/landings/saas-v2-light.jpg"
                                     alt="SaaS v.2">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/saas-v2-dark.jpg" alt="SaaS v.2">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'saas-2']) }}">SaaS v.2</a>
                            </h3>
                        </div>
                    </div>

                    <!-- SaaS v.3 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none" src="/img/landing/intro/landings/saas-v3-light.jpg"
                                     alt="SaaS v.3">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/saas-v3-dark.jpg" alt="SaaS v.3">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'saas-3']) }}">SaaS v.3</a>
                            </h3>
                        </div>
                    </div>

                    <!-- SaaS v.4 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <span
                                class="badge bg-danger rouded-pill position-absolute top-0 end-0 translate-middle-y me-n2 z-2">New</span>
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none" src="/img/landing/intro/landings/saas-v4-light.jpg"
                                     alt="SaaS v.4">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/saas-v4-dark.jpg" alt="SaaS v.4">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'saas-4']) }}">SaaS v.4</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Shop Homepage v.1 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/shop-homepage-v1-light.jpg"
                                     alt="Shop Homepage v.1">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/shop-homepage-v1-dark.jpg"
                                     alt="Shop Homepage v.1">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'shop-1']) }}">Shop Homepage v.1</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Shop Homepage v.2 -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <span
                                class="badge bg-danger rouded-pill position-absolute top-0 end-0 translate-middle-y me-n2 z-2">New</span>
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/shop-homepage-v2-light.jpg"
                                     alt="Shop Homepage v.2">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/shop-homepage-v2-dark.jpg"
                                     alt="Shop Homepage v.2">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'shop-2']) }}">Shop Homepage v.2</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Marketing Agency -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/marketing-agency-light.jpg"
                                     alt="Marketing Agency">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/marketing-agency-dark.jpg"
                                     alt="Marketing Agency">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'marketing-agency']) }}">Marketing Agency</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Creative Agency -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/creative-agency-light.jpg"
                                     alt="Creative Agency">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/creative-agency-dark.jpg"
                                     alt="Creative Agency">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'creative-agency']) }}">Creative Agency</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Conference (Event) -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/conference-light.jpg" alt="Conference">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/conference-dark.jpg" alt="Conference">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'conference']) }}">Conference (Event)</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Influencer -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/influencer-light.jpg" alt="Influencer">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/influencer-dark.jpg" alt="Influencer">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'influencer']) }}">Influencer</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Business Consulting -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/business-consulting-light.jpg"
                                     alt="Business Consulting">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/business-consulting-dark.jpg"
                                     alt="Business Consulting">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'business-consulting']) }}">Business
                                    Consulting</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Corporate -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/corporate-light.jpg" alt="Corporate">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/corporate-dark.jpg" alt="Corporate">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'corporate']) }}">Corporate</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Insurance Company -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <span
                                class="badge bg-danger rouded-pill position-absolute top-0 end-0 translate-middle-y me-n2 z-2">New</span>
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/insurance-light.jpg"
                                     alt="Insurance Company">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/insurance-dark.jpg" alt="Insurance Company">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'insurance']) }}">Insurance Company</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Coworking Space -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/coworking-space-light.jpg"
                                     alt="Coworking Space">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/coworking-space-dark.jpg"
                                     alt="Coworking Space">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'coworking-space']) }}">Coworking Space</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Yoga Studio -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/yoga-studio-light.jpg" alt="Yoga Studio">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/yoga-studio-dark.jpg" alt="Yoga Studio">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'yoga-studio']) }}">Yoga Studio</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Web Studio -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/web-studio-light.jpg" alt="Web Studio">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/web-studio-dark.jpg" alt="Web Studio">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'web-studio']) }}">Web Studio</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Blog Homepage -->
                    <div class="col">
                        <div class="card-hover card-lifted mx-auto" style="max-width: 416px;">
                            <div class="card-lifted overflow-hidden rounded-3 mb-3">
                                <img class="d-dark-mode-none"
                                     src="/img/landing/intro/landings/blog-homepage-light.jpg"
                                     alt="Blog Homepage">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/intro/landings/blog-homepage-dark.jpg" alt="Blog Homepage">
                            </div>
                            <h3 class="h5 text-center mb-0">
                                <a class="stretched-link" href="{{ route('second', ['landings', 'blog']) }}">Blog Homepage</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Coming Soon -->
                    <div class="col">
                        <div class="card border-0 bg-transparent h-100">
                            <div
                                class="card-body d-flex justify-content-center align-items-center border-dashed border-2 rounded-3 py-5 mb-3">
                                <div class="py-5" style="width: 5.5rem;">
                                    <lottie-player class="d-dark-mode-none"
                                                   src="/json/animation-sandwatch-light.json"
                                                   background="transparent" speed="1" loop autoplay></lottie-player>
                                    <lottie-player class="d-none d-dark-mode-block"
                                                   src="/json/animation-sandwatch-dark.json"
                                                   background="transparent" speed="1" loop autoplay></lottie-player>
                                </div>
                            </div>
                            <h3 class="h5 text-nav text-center mb-0">Coming Soon</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Inner pages -->
        <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-3 pb-1 pb-sm-3 pb-md-4 pb-lg-5">
            <div class="container position-relative py-5 my-lg-3 my-xl-4 my-xxl-5">
                <div class="position-absolute" style="margin-left: -12.7%;" data-aos="zoom-in" data-aos-duration="500"
                     data-aos-offset="300" data-disable-parallax-down="lg">
                    <svg class="text-warning d-none d-lg-block" width="744" height="744" viewBox="0 0 744 744"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="372" cy="372" r="372"></circle>
                    </svg>
                </div>
                <div class="d-none d-xxl-block" style="height: 190px;"></div>
                <div class="d-none d-lg-block d-xxl-none" style="height: 150px;"></div>
                <div class="row justify-content-center justify-content-lg-start position-relative z-2">
                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4 text-center text-lg-start" data-aos="fade-up"
                         data-aos-duration="850" data-aos-offset="120" data-disable-parallax-down="lg">
                        <div class="d-none d-lg-block" data-bs-theme="light">
                            <h2 class="display-5 mb-4">Inner pages for everything you may need</h2>
                            <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0" data-bs-theme="light">Big collection of
                                thoroughly designed inner page templates from User Account/Dashboard to Specialty pages
                                like 404 and Coming Soon.</p>
                        </div>
                        <div class="d-lg-none">
                            <h2 class="display-5 mb-4">Inner pages for everything you may need</h2>
                            <p class="fs-lg pb-3 pb-sm-4 mb-lg-0">Big collection of thoroughly designed inner page
                                templates from User Account/Dashboard to Specialty pages like 404 and Coming Soon.</p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block" style="margin-top: -240px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="margin-top: -160px;"></div>
                <div class="d-flex position-relative z-2 mb-3">
                    <div class="flex-xxl-shrink-0 position-relative z-2"
                         style="max-width: 540px; margin-top: 26%; margin-right: -9.6%;" data-aos="fade-up"
                         data-aos-duration="500" data-aos-delay="400" data-disable-parallax-down="lg">
                        <img class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none"
                             src="/img/landing/intro/pages/01-light.jpg" alt="Page"
                             style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                            class="border rounded-3 mt-n5 mt-lg-0 d-none d-dark-mode-block"
                            src="/img/landing/intro/pages/01-dark.jpg" alt="Page"
                            style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);">
                    </div>
                    <div class="flex-xxl-shrink-0 position-relative z-1"
                         style="max-width: 481px; margin-top: 17.6%; margin-right: -8.5%;" data-aos="fade-up"
                         data-aos-duration="500" data-aos-delay="200" data-disable-parallax-down="lg">
                        <img class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none"
                             src="/img/landing/intro/pages/02-light.jpg" alt="Page"
                             style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                            class="border rounded-3 mt-n5 mt-lg-0 d-none d-dark-mode-block"
                            src="/img/landing/intro/pages/02-dark.jpg" alt="Page"
                            style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);">
                    </div>
                    <div class="flex-xxl-shrink-0" style="max-width: 510px;" data-aos="fade-up" data-aos-duration="500"
                         data-aos-offset="250" data-disable-parallax-down="lg">
                        <img class="rounded-3 d-block d-dark-mode-none"
                             src="/img/landing/intro/pages/03-light.jpg" alt="Page"
                             style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                            class="border rounded-3 d-none d-dark-mode-block"
                            src="/img/landing/intro/pages/03-dark.jpg" alt="Page"
                            style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);">
                    </div>
                </div>
            </div>
        </section>


        <!-- Light / Dark mode (Comparison slider) -->
        <section class="d-flex w-100 position-relative overflow-hidden">
            <div class="position-relative flex-xl-shrink-0 z-5 start-50 translate-middle-x my-n1"
                 style="max-width: 1920px;">
                <div class="mx-md-n5 mx-xl-0">
                    <div class="mx-n4 mx-sm-n5 mx-xl-0">
                        <div class="mx-n5 mx-xl-0">
                            <img-comparison-slider class="mx-n5 mx-xl-0">
                                <img slot="first" src="/img/landing/intro/dark-mode.jpg" alt="Dak Mode">
                                <img slot="second" src="/img/landing/intro/light-mode.jpg" alt="Light Mode">
                                <div slot="handle" style="width: 42px;">
                                    <svg class="text-primary rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                                        </g>
                                        <path fill="white"
                                              d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z"></path>
                                    </svg>
                                </div>
                            </img-comparison-slider>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-0 start-0 w-50 h-100 bg-dark"></div>
            <div class="position-absolute top-0 end-0 w-50 h-100" style="background-color: #f6f9fc;"></div>
        </section>


        <!-- Customizer -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="display-5 text-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-lg-3 mt-xxl-2 mb-0">Around customizer</h2>

            <!-- Colors -->
            <div class="row align-items-center py-4 mt-2 mt-sm-3 mt-md-4 mb-2 mb-md-3 mb-lg-4" data-aos="fade-up"
                 data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 col-lg-7 order-md-2 d-flex justify-content-end">
                    <img class="d-dark-mode-none" src="/img/landing/intro/customizer/colors-light.svg" width="593"
                         alt="Colors">
                    <img class="d-none d-dark-mode-block" src="/img/landing/intro/customizer/colors-dark.svg"
                         width="593" alt="Colors">
                </div>
                <div class="col-md-6 col-lg-5 order-md-1 mt-md-n5" data-aos="fade-up" data-aos-duration="850"
                     data-aos-offset="200" data-disable-parallax-down="md">
                    <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-4">Colors</span>
                    <h2 class="mb-4">Change theme brand colors quickly and easily</h2>
                    <p class="fs-lg mb-0 mb-lg-4">Customize theme colors to match your brand palette using the color
                        picker or just type in the color hex. Supported colors: primary, warning, success, info,
                        danger.</p>
                </div>
            </div>

            <!-- Typography -->
            <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600"
                 data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 col-lg-7">
                    <img class="d-dark-mode-none" src="/img/landing/intro/customizer/typography-light.svg"
                         width="636" alt="Typography">
                    <img class="d-none d-dark-mode-block" src="/img/landing/intro/customizer/typography-dark.svg"
                         width="636" alt="Typography">
                </div>
                <div class="col-md-6 col-lg-5 mt-md-n4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="200"
                     data-disable-parallax-down="md">
                    <span class="badge fs-sm bg-info bg-opacity-10 text-info mb-4">Typography</span>
                    <h2 class="mb-4">Set up fonts from the huge Google font collection</h2>
                    <p class="fs-lg mb-0 mb-lg-4">Easily change the font to your liking. Choose the font from Google
                        Fonts library of 1,442 open source font families. Update headings and body font sizes right from
                        customizer.</p>
                </div>
            </div>

            <!-- Borders -->
            <div class="row align-items-center py-4 my-2 my-md-3 my-lg-4" data-aos="fade-up" data-aos-duration="600"
                 data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 col-lg-7 order-md-2 d-flex justify-content-end pb-2 pb-md-0 mb-4 mb-md-0">
                    <img class="d-dark-mode-none" src="/img/landing/intro/customizer/borders-light.svg"
                         width="636" alt="Borders">
                    <img class="d-none d-dark-mode-block" src="/img/landing/intro/customizer/borders-dark.svg"
                         width="636" alt="Borders">
                </div>
                <div class="col-md-6 col-lg-5 order-md-1" data-aos="fade-up" data-aos-duration="850"
                     data-aos-offset="200" data-disable-parallax-down="md">
                    <span class="badge fs-sm bg-danger bg-opacity-10 text-danger mb-4">Borders</span>
                    <h2 class="mb-4">Rounded or square? Customize borders as you wish</h2>
                    <p class="fs-lg mb-0 mb-lg-4">It's up to you to make your website soft and friendly with increased
                        border radius or add business vibes with less rounded shapes. You can also change border
                        width.</p>
                </div>
            </div>
        </section>


        <!-- Features -->
        <section class="container py-5 mt-n3 mt-sm-n2 mt-md-0 my-lg-3 my-xl-4 my-xxl-5">
            <h2 class="display-5 text-center pt-md-3 pt-lg-4 pb-xxl-2 mt-xl-3 mb-4 mb-sm-5">More Around features</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-4 gy-sm-5 pb-md-4 pb-lg-5 mb-2 mb-lg-0 mb-xxl-2">

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 pe-lg-3 pe-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/bootstrap.png"
                             width="56" alt="Bootstrap">
                        <h3 class="h5 mb-2">Built with latest Bootstrap</h3>
                        <p class="mb-0">Around is the powerful front-end solution for websits and web apps based on
                            Bootstrap 5 - the world's most popular responsive, mobile-first front-end component
                            library.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="ps-md-3 px-lg-2 px-xl-4">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/sass.png"
                             width="56" alt="Sass">
                        <h3 class="h5 mb-2">Easy to Customize with Sass</h3>
                        <p class="mb-0">Around is built using Sass. Easily change colors, typography and much more. It
                            is the most mature, stable, and powerful CSS extension language in the world.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 ps-lg-3 ps-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/npm.png"
                             width="56" alt="Npm">
                        <h3 class="h5 mb-2">Kick-start your development</h3>
                        <p class="mb-0">Start your development process fast and easy with Npm scripts setup.
                            Configuration files are included in the download package. Full tasks automation and local
                            server hot reload.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 pe-lg-3 pe-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/js.png"
                             width="56" alt="JavaScript">
                        <h3 class="h5 mb-2">Future-proof JavaScript</h3>
                        <p class="mb-0">Around core scripts as well as all dependencies are written in vanilla JS. And
                            now with Bootstrap 5 we finally don't need jQuery any more and we can use ES6 modules to
                            structure the code.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="ps-md-3 px-lg-2 px-xl-4">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/html5.png"
                             width="56" alt="HTML5">
                        <h3 class="h5 mb-2">W3C valid HTML code</h3>
                        <p class="mb-0">All HTML files are checked with W3C validator to ensure 100% valid code. As you
                            probably know invalid HTML limits innovation, but Around is innovative at its core.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 ps-lg-3 ps-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/figma.png"
                             width="56" alt="Figma">
                        <h3 class="h5 mb-2">Premium Figma file included</h3>
                        <p class="mb-0">A well-crafted Figma design file is included in the download package. It offers
                            a visually stunning and organized layout, utilizing Figma's components and styles. </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 pe-lg-3 pe-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/touch.png"
                             width="56" alt="Touch support">
                        <h3 class="h5 mb-2">Touch-enabled sliders</h3>
                        <p class="mb-0">In the era of touch screens it's important to ensure great user experience on
                            handheld devices, when it comes to such frequently used interface component as slider.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="ps-md-3 px-lg-2 px-xl-4">
                        <img class="d-inline-block mb-3 mb-lg-4"
                             src="/img/landing/intro/features/google-fonts.png" width="56" alt="Google Fonts">
                        <h3 class="h5 mb-2">Google fonts</h3>
                        <p class="mb-0">Around uses Google font (Inter) which is free, fast to load and of very high
                            quality. Currently Google fonts library includes 1400+ font families to choose from.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col text-center text-sm-start pt-2 pt-sm-0">
                    <div class="pe-md-3 ps-lg-3 ps-xl-5">
                        <img class="d-inline-block mb-3 mb-lg-4" src="/img/landing/intro/features/vector.png"
                             width="56" alt="Vector icons">
                        <h3 class="h5 mb-2">Vector based HD ready icons</h3>
                        <p class="mb-0">Around is equiped with font-based icon pack and svg icons to ensure that
                            infographics and interface icons look sharp on any device with any screen resolution and
                            pixel density.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Subscription CTA -->
        <section class="container">
            <div class="bg-dark position-relative rounded-5 overflow-hidden px-4 pt-1 pb-2 py-sm-4 py-lg-5">
                <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
                     style="background-color: rgba(255,255,255, .03);"></div>
                <div class="position-absolute top-0 end-0 pe-5 z-2">
                    <svg class="me-5" width="514" height="254" viewBox="0 0 514 254" fill="white" fill-opacity=".03"
                         xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="257" cy="0.5" rx="257" ry="253.5"></ellipse>
                    </svg>
                </div>
                <div class="d-none d-lg-flex position-absolute start-0 bottom-0 ms-n4">
                    <div data-aos="fade-left" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                        <svg class="text-primary" width="117" height="117" viewBox="0 0 117 117" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="58.5" cy="58.5" r="58.5"></circle>
                        </svg>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                        <svg class="text-warning" width="117" height="117" viewBox="0 0 117 117" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M-2.51516e-06 58.5C-3.52666e-06 70.0702 3.43096 81.3806 9.85902 91.0008C16.2871 100.621 25.4235 108.119 36.113 112.547C46.8025 116.975 58.5649 118.133 69.9128 115.876C81.2607 113.619 91.6844 108.047 99.8657 99.8657C108.047 91.6844 113.619 81.2607 115.876 69.9128C118.133 58.5649 116.975 46.8025 112.547 36.113C108.119 25.4235 100.621 16.2871 91.0009 9.85903C81.3806 3.43096 70.0702 -4.24071e-06 58.5 -5.11423e-06L58.5 58.5L-2.51516e-06 58.5Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="position-relative z-3 text-center py-5 my-xl-3 mx-auto" style="max-width: 565px;"
                     data-bs-theme="dark">
                    <h2 class="display-5">Subscribe to Newsletter</h2>
                    <p class="text-body fs-lg pb-3 mb-3 mb-lg-4">Subscribe to our newsletter to receive early discount
                        offers, new templates info and updates.</p>
                    <form class="subscription-form validate mx-auto"
                          action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126"
                          method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate
                          style="max-width: 500px;">
                        <div class="input-group"><span class="input-group-text"><i class="ai-mail"></i></span>
                            <input class="form-control" type="email" name="EMAIL" placeholder="Enter your email"
                                   required id="subscr-email">
                            <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input class="subscription-form-antispam" type="text"
                                   name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                        </div>
                        <div class="subscription-status mx-auto"></div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center py-3"><span class="text-body-secondary">&copy; All rights reserved. Made with <span
                    class="text-danger">❤</span> by </span><a class="nav-link d-inline fw-normal p-0"
                                                              href="" target="_blank"
                                                              rel="noopener">Stackbros</a></div>
    </footer>
@endsection

@section('script-bottom')

@endsection
