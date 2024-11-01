@extends('layouts.base', ['title' => 'Cremah | About - Agency'])

@section('content')

<main class="page-wrapper">
    
    @include('layouts.partials/navbar',['navClass' => 'bg-light','isDark' => true])

    <section class="bg-dark position-relative py-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .03);"></div>
        <div class="container position-relative z-2 py-5 mb-4 mb-sm-5" data-bs-theme="dark">
            <div class="row pb-5 mb-2 mb-sm-0 mb-lg-3">
                <div class="col-lg-10 col-xl-9">

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>

                    <h1 class="display-2 pb-2 pb-sm-3">We believe in the success of every business</h1>
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                        <li class="d-flex text-body py-1 me-4">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Forecasting and recommendations
                        </li>
                        <li class="d-flex text-body py-1 me-4">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Identification of patterns, analysis
                        </li>
                        <li class="d-flex text-body py-1">
                            <i class="ai-check-alt text-primary lead me-2"></i>
                            Segmentation by various methods
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- About -->
    <section class="container position-relative z-3" style="margin-top: -135px;">
        <div class="rounded-5 overflow-hidden">
            <div class="jarallax ratio ratio-16x9" data-jarallax data-speed="0.6">
                <div class="jarallax-img" style="background-image: url(/img/about/agency/parallax-image.jpg);"></div>
            </div>
        </div>
        <div class="row pt-5 mt-n2 mt-sm-0 mt-md-2 mt-lg-4 mt-xl-5">
            <div class="col-md-6 col-lg-5">
                <div class="fs-sm text-uppercase mb-3">What we do</div>
                <h2 class="display-6">We are a team who create marketing strategies</h2>
            </div>
            <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                <p class="fs-xl">Morbi et massa fames ac scelerisque sit commodo dignissim <strong>faucibus quisque proin</strong> lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
                <p class="fs-xl">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur. <strong>Vel magna sit aliquet viverra morbi massa mattis urna,</strong> feugiat egestas tincidunt ipsum diam quam massa amet odio nisi duis dolor.</p>
                <p class="fs-xl mb-0">Ac facilisis eros sem faucibus aliquet venenatis amet fermentum nisi. Mauris consectetur sem malesuada. viverra a non sapien odio id risus volutpat at.</p>
            </div>
        </div>
    </section>


    <!-- Approach -->
    <section class="pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
            <div class="fs-sm text-uppercase mb-3">Our Mission</div>
            <h2 class="display-6 pb-3 mb-lg-4">Professional approach </h2>
            <div class="swiper" data-swiper-options='
            {
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "576": { "slidesPerView": 2 },
                "992": { "slidesPerView": 3 }
              }
            }
          '>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 bg-secondary rounded-5 h-100">
                            <div class="card-body">
                                <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <g class="text-info">
                                        <path d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z" fill="currentColor"></path>
                                    </g>
                                    <g class="text-primary">
                                        <path d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                                <h3 class="h4">Individual approach</h3>
                                <p class="mb-0">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 bg-secondary rounded-5 h-100">
                            <div class="card-body">
                                <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <g class="text-info">
                                        <path d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z" fill="currentColor"></path>
                                    </g>
                                    <g class="text-primary">
                                        <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                                <h3 class="h4">Integrated analytics</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget molestie massa. Donec egestas nulla pariatur.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 bg-secondary rounded-5 h-100">
                            <div class="card-body">
                                <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <g class="text-primary">
                                        <path d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z" fill="currentColor"></path>
                                    </g>
                                    <g class="text-info">
                                        <path d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z" fill="currentColor"></path>
                                    </g>
                                    <g class="text-primary">
                                        <path d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                                <h3 class="h4">Step by step work</h3>
                                <p class="mb-0">More erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
            </div>
        </div>
    </section>


    <!-- How we work (Steps) -->
    <section class="container pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
                <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto" style="max-width: 530px; background-image: url(/img/about/agency/steps-image.jpg);">
                    <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                    <div class="position-relative z-2 p-4" data-bs-theme="dark">
                        <div class="text-center mx-auto" style="max-width: 275px;">
                            <span class="d-block text-body fs-sm text-uppercase mb-3">How we work</span>
                            <h2 class="display-6 mb-0">The key to success</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 ps-xl-0">
                    <div class="steps steps-hoverable">
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">01</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Formulation of the problem</h3>
                                <p class="mb-0">Find aute irure dolor in reprehenderi voluptate velit esse cillum dolore eu fugiat nulla pariatur am luctus.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">02</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Assessment of the current state</h3>
                                <p class="mb-0">Risus quam quis at euismod vitae dui elementu eu in diam malesuada mattis ut urna integer erat nisi nibh.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">03</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Business plan creation</h3>
                                <p class="mb-0">A sagittis morbi massa venenatis, egestas viverra ac elit nibh tellus nisi in nec tellus mauris feugiat gravida.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">04</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Strategy implementation</h3>
                                <p class="mb-0">Elementum purus, nisl ipsum sit. Amet sit praesent proin sit cras. Leo sed praesent nunc vel nec risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="pt-5 mt-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-3 pt-sm-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="fs-sm text-uppercase mb-3">Our team</div>
            <h2 class="display-6 pb-3 mb-lg-4">Team of professionals</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/03.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Jane Cooper</h3>
                                <p class="text-body mb-3">Head of PR department</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#" aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/01.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Guy Hawkins</h3>
                                <p class="text-body mb-3">Head of marketing</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-x rounded-circle mx-2" href="#" aria-label="X">
                                        <i class="ai-x"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/02.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Martha Winter</h3>
                                <p class="text-body mb-3">Data analyst</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#" aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/05.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Robert Fox</h3>
                                <p class="text-body mb-3">CTO</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-x rounded-circle mx-2" href="#" aria-label="X">
                                        <i class="ai-x"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-stack-overflow rounded-circle mx-2" href="#" aria-label="Stack Overflow">
                                        <i class="ai-stack-overflow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/06.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Michelle Yang</h3>
                                <p class="text-body mb-3">CEO, Founder</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#" aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card card-hover border-0 rounded-5 overflow-hidden">
                        <img src="/img/landing/corporate/team/04.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center" data-bs-theme="dark">
                                <h3 class="h5 mb-1">Albert Flores</h3>
                                <p class="text-body mb-3">Art director</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-behance rounded-circle mx-2" href="#" aria-label="Behance">
                                        <i class="ai-behance"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-dribbble rounded-circle mx-2" href="#" aria-label="Dribbble">
                                        <i class="ai-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
        <div class="container pt-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
            <div class="fs-sm text-uppercase mb-3">Testimonials</div>
            <h2 class="display-6 pb-3 mb-lg-4">What our clients say</h2>
            <div class="card border-0 bg-secondary overflow-hidden">
                <div class="card-body position-relative z-2 px-lg-0 py-lg-5">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">

                            <!-- Binded items -->
                            <div class="binded-content">

                                <!-- Item -->
                                <div class="binded-item active" id="author1">
                                    <img class="d-block rounded-circle mb-3" src="/img/avatar/21.jpg" width="86" alt="Lilianna Bocouse">
                                    <h4 class="mb-0">Lilianna Bocouse</h4>
                                    <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                                </div>

                                <!-- Item -->
                                <div class="binded-item" id="author2">
                                    <img class="d-block rounded-circle mb-3" src="/img/avatar/33.jpg" width="86" alt="Darell Steward">
                                    <h4 class="mb-0">Darell Steward</h4>
                                    <p class="fs-lg text-body-secondary mb-0">Project Manager</p>
                                </div>

                                <!-- Item -->
                                <div class="binded-item" id="author3">
                                    <img class="d-block rounded-circle mb-3" src="/img/avatar/34.jpg" width="86" alt="Annette Black">
                                    <h4 class="mb-0">Annette Black</h4>
                                    <p class="fs-lg text-body-secondary mb-0">Lead Designer</p>
                                </div>

                                <!-- Item -->
                                <div class="binded-item" id="author4">
                                    <img class="d-block rounded-circle mb-3" src="/img/avatar/35.jpg" width="86" alt="Ralph Edwards">
                                    <h4 class="mb-0">Ralph Edwards</h4>
                                    <p class="fs-lg text-body-secondary mb-0">CEO, Co-Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7">

                            <!-- Swiper slider -->
                            <div class="swiper" data-swiper-options='{
                    "spaceBetween": 40,
                    "loop": true,
                    "autoHeight": true,
                    "bindedContent": true,
                    "pagination": {
                      "el": "#testimonials-bullets",
                      "clickable": true
                    }
                  }'>
                                <div class="swiper-wrapper">

                                    <!-- Item -->
                                    <div class="swiper-slide" data-swiper-binded="#author1">
                                        <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide" data-swiper-binded="#author2">
                                        <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut ante.”</p>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide" data-swiper-binded="#author3">
                                        <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide" data-swiper-binded="#author4">
                                        <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra, quis semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci. Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus placerat fringilla.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3" id="testimonials-bullets"></div>
        </div>
    </section>


    <!-- Gallery (Carousel) -->
    <section class="position-relative pt-5 mt-2 mt-xl-4 mt-xxl-5">
        <div class="bg-secondary position-absolute start-0 bottom-0 w-100" style="height: 252px;"></div>
        <div class="container py-3 pt-sm-4 pt-lg-5 mt-xl-2 mt-xxl-3 mb-3 mb-lg-4">
            <div class="fs-sm text-uppercase mb-3">Where</div>
            <div class="d-sm-flex align-items-center justify-content-between">
                <h2 class="display-6 mb-0 me-sm-4">We are located in London</h2>

                <!-- Swiper controls (Prev/next buttons) visible on screens > 576px -->
                <div class="d-none d-sm-flex">
                    <button class="prev-gallery btn btn-icon btn-outline-primary rounded-circle me-3" type="button" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button class="next-gallery btn btn-icon btn-outline-primary rounded-circle" type="button" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Swiper slider -->
        <div class="container-start position-relative z-2 pe-0">
            <div class="swiper" data-swiper-options='{
            "slidesPerView": "auto",
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": ".prev-gallery",
              "nextEl": ".next-gallery"
            }
          }'>
                <div class="swiper-wrapper gallery align-items-end">

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/01.jpg" style="max-width: 416px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/01.jpg" alt="Gallery image #1">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/02.jpg" style="max-width: 526px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/02.jpg" alt="Gallery image #2">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/03.jpg" style="max-width: 306px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/03.jpg" alt="Gallery image #3">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/04.jpg" style="max-width: 367px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/04.jpg" alt="Gallery image #4">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/05.jpg" style="max-width: 526px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/05.jpg" alt="Gallery image #5">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-auto">
                        <a class="d-block gallery-item card-hover zoom-effect" href="/img/about/agency/gallery/06.jpg" style="max-width: 416px;">
                            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <div class="zoom-effect-img">
                                    <img src="/img/about/agency/gallery/06.jpg" alt="Gallery image #6">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Swiper controls (Prev/next buttons) visible on screens < 576px -->
            <div class="d-flex d-sm-none pt-4">
                <button class="prev-gallery btn btn-icon btn-outline-primary rounded-circle me-3" type="button" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button class="next-gallery btn btn-icon btn-outline-primary rounded-circle" type="button" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section class="bg-secondary py-5">
        <div class="container py-3 py-sm-4 py-lg-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="fs-sm text-uppercase mb-3 mt-xl-2 mt-xxl-3">Work with us</div>
            <h2 class="h1 pb-3 mb-lg-4">Our services</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 pb-xl-2 pb-xxl-3">

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Market shares analysis</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget molestie massa. Donec egestas ex et velit egestas dignissim. Sed fringilla velit turpis.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M25,25h15v15H25V25z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M10,20c0-5.5,4.5-10,10-10s10,4.5,10,10h10C40,9,31,0,20,0S0,9,0,20s9,20,20,20V30C14.5,30,10,25.5,10,20z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Marketing and branding</h3>
                            <p class="mb-0">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor do amet sint velit officia.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z" fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Strategy development</h3>
                            <p class="mb-0">More erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor non aute irure dolor in reprehenderit in.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M34.9811 16.2655C34.3635 26.3194 26.3194 34.3634 16.2656 34.981V40H40V16.2655H34.9811Z" fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path d="M15.0195 30.0413C23.3152 30.0413 30.0403 23.3163 30.0403 15.0205H15.0195V30.0413Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M29.1953 10.0415C27.141 4.19328 21.571 0 15.0208 0C6.725 0 0 6.725 0 15.0208C0 21.571 4.19328 27.141 10.0415 29.1953V10.0415H29.1953Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Email marketing</h3>
                            <p class="mb-0">Adipiscing posuere dui, amet, augue nisl dictum justo enier sed neque congue non quam ultrices interdum vitae vestibulumaute irure dolor in reprehenderit in.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path d="M19.9999 0C11.1313 0 3.61211 5.77313 0.992188 13.7659H39.0077C36.3877 5.77313 28.8686 0 19.9999 0Z" fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path d="M7.29328 16.1094H0.379453C0.131328 17.368 0 18.6684 0 19.9998C0 26.9291 3.52437 33.0348 8.87797 36.6237L18.3427 27.1589L7.29328 16.1094Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M10.9688 37.848C13.6819 39.2238 16.7505 39.9998 20.0007 39.9998C31.0464 39.9998 40.0007 31.0455 40.0007 19.9998C40.0007 18.6684 39.8694 17.3679 39.6213 16.1094H32.7074L10.9688 37.848Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Working on communication</h3>
                            <p class="mb-0">Ut eu amet ac blandit nisl malesuada lectus viverra arcu in rhoncus egestas lorem consequat sollicitudin risus, in pellentesque tellus tincidunt purus viverra dignissim.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="card h-100 border-0 rounded-5">
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Business copywriting</h3>
                            <p class="mb-0">Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper est porttitor.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                <i class="ai-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer bg-dark position-relative py-4 py-md-5" data-bs-theme="dark">
    <div class="container position-relative z-2 pt-4 pt-md-2 pt-xl-4 pt-xxl-5">
        <div class="row py-md-3 mb-4 mb-md-5">
            <div class="col-md-7 col-lg-6 col-xxl-5 mb-sm-4 mb-md-0">
                <h2 class="display-4 mb-4 mb-md-5">Let's start building brand together</h2>
                <div class="d-sm-flex align-items-center"><a class="btn btn-lg btn-primary me-sm-3 me-lg-4" href="#">Let's work together</a>
                    <p class="text-body fs-sm py-3 py-sm-0 ps-sm-2 mb-0">Managers will contact you to discuss the project and select the best team</p>
                </div>
            </div>
            <div class="col-md-5 offset-lg-1 offset-xxl-2 d-flex flex-column">
                <div class="nav mx-n2 mx-lg-n4 mb-2 mb-sm-3">
                    <a class="nav-link text-primary px-2 px-lg-4" href="mailto:example@email.com">example@email.com</a>
                    <a class="nav-link px-3 px-lg-4" href="#">Privay policy</a>
                </div>
                <div class="nav flex-column mb-3 mb-sm-4">
                    <a class="nav-link py-1 px-0" href="tel:+15262200444">+&nbsp;1&nbsp;256&nbsp;7617&nbsp;38004</a>
                    <a class="nav-link py-1 px-0" href="tel:+15262200000">+&nbsp;1&nbsp;256&nbsp;7084&nbsp;45904</a>
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
            <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Shiningstar</a>
        </p>
    </div>
</footer>


@endsection

@section('script-bottom')

@endsection