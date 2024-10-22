@extends('layouts.base', ['title' => 'Around | Corporate'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Hero -->
        <section class="jarallax min-vh-100 py-lg-3 py-xl-4 py-xxl-5" data-jarallax data-speed="0.65">
            <div class="jarallax-img" style="background-image: url(/img/landing/corporate/hero-bg.jpg);"></div>
            <div class="container-fluid position-relative z-2 py-5 my-md-3 my-lg-5">
                <div class="row pb-3 pt-4 pt-sm-5">
                    <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-5 offset-lg-1 pt-5">
                        <div class="card border-0 bg-primary rounded-1 py-2 py-sm-3 py-md-4" data-bs-theme="dark">
                            <div class="card-body">
                                <div class="mx-auto pt-2" style="max-width: 535px;">
                                    <h1 class="display-5 mb-4">The effective solutions for your business</h1>
                                    <p class="fs-lg pb-4 pb-lg-5 mb-2" style="max-width: 410px;">We are a team that
                                        creates business strategies for B2B and B2C companies.</p>
                                    <div class="d-flex flex-column flex-sm-row align-items-center pb-lg-2">
                                        <a class="btn btn-lg btn-light w-100 w-sm-auto me-sm-3 mb-3 mb-sm-0" href="#">Book
                                            a free consultation</a>
                                        <a class="d-flex align-items-center fw-semibold text-white text-decoration-none px-3 py-2"
                                           href="tel:+15262200459">
                                            <i class="ai-phone fs-xl me-2"></i>
                                            +1&nbsp;526&nbsp;220&nbsp;0459
                                        </a>
                                    </div>
                                    <ul class="list-unstyled d-sm-flex mb-0 pt-4 pt-sm-5 mt-lg-2 mt-xl-4">
                                        <li class="d-flex mb-2 mb-sm-0 pe-sm-1 me-sm-3">
                                            <i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>
                                            Full spectrum of services
                                        </li>
                                        <li class="d-flex">
                                            <i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>
                                            Flexible work terms
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Services -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-1">Our services</h2>
            <p class="text-center pb-3 mb-3 mb-lg-4">With the support of independent referents, you can solve many
                challenges</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/01.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path
                                        d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Market shares analysis</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget
                                molestie massa. Donec egestas ex et velit egestas dignissim. Sed fringilla velit
                                turpis.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/02.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M25,25h15v15H25V25z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M10,20c0-5.5,4.5-10,10-10s10,4.5,10,10h10C40,9,31,0,20,0S0,9,0,20s9,20,20,20V30C14.5,30,10,25.5,10,20z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Marketing and branding</h3>
                            <p class="mb-0">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur neque congue aliqua dolor do amet sint velit officia.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/03.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path
                                        d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path
                                        d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Strategy development</h3>
                            <p class="mb-0">More erat leo proin odio est sed sit felis facilisi integer sed congue neque
                                turpis dictumst sit sed volutpat aliquet tortor non aute irure dolor in reprehenderit
                                in.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none"><i
                                    class="ai-arrow-right"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/04.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path
                                        d="M34.9811 16.2655C34.3635 26.3194 26.3194 34.3634 16.2656 34.981V40H40V16.2655H34.9811Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path
                                        d="M15.0195 30.0413C23.3152 30.0413 30.0403 23.3163 30.0403 15.0205H15.0195V30.0413Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M29.1953 10.0415C27.141 4.19328 21.571 0 15.0208 0C6.725 0 0 6.725 0 15.0208C0 21.571 4.19328 27.141 10.0415 29.1953V10.0415H29.1953Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Email marketing</h3>
                            <p class="mb-0">Adipiscing posuere dui, amet, augue nisl dictum justo enier sed neque congue
                                non quam ultrices interdum vitae vestibulumaute irure dolor in reprehenderit in.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/05.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path
                                        d="M19.9999 0C11.1313 0 3.61211 5.77313 0.992188 13.7659H39.0077C36.3877 5.77313 28.8686 0 19.9999 0Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path
                                        d="M7.29328 16.1094H0.379453C0.131328 17.368 0 18.6684 0 19.9998C0 26.9291 3.52437 33.0348 8.87797 36.6237L18.3427 27.1589L7.29328 16.1094Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M10.9688 37.848C13.6819 39.2238 16.7505 39.9998 20.0007 39.9998C31.0464 39.9998 40.0007 31.0455 40.0007 19.9998C40.0007 18.6684 39.8694 17.3679 39.6213 16.1094H32.7074L10.9688 37.848Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Working on communication</h3>
                            <p class="mb-0">Ut eu amet ac blandit nisl malesuada lectus viverra arcu in rhoncus egestas
                                lorem consequat sollicitudin risus, in pellentesque tellus tincidunt purus viverra
                                dignissim.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover h-100 border-0 bg-secondary rounded-1 text-decoration-none overflow-hidden"
                       href="#">
                        <div
                            class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4"
                            style="background-image: url(/img/landing/corporate/services/06.jpg);">
                            <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path
                                        d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Business copywriting</h3>
                            <p class="mb-0">Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis
                                ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper
                                est porttitor.</p>
                        </div>
                        <div class="card-footer border-0 pt-3 mb-3">
                            <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <!-- Partners (Brands) -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-1">We partner with more than 60
                brands</h2>
            <p class="text-center pb-2 pb-sm-3">Clients who have become our friends for many years</p>
            <div class="row row-cols-3 row-cols-md-4 g-2 g-md-4 pb-2 pb-sm-3 pb-md-4 pb-xl-5">
                <div class="col">
                    <img class="d-block mx-auto" src="/img/brands/auchan.svg" width="220" alt="Auchan">
                </div>
                <div class="col">
                    <img class="d-block mx-auto" src="/img/brands/suzuki.svg" width="220" alt="Suzuki">
                </div>
                <div class="col">
                    <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/champion-dark.svg" width="220"
                         alt="Champion">
                    <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/champion-light.svg" width="220"
                         alt="Champion">
                </div>
                <div class="col"><img class="d-block d-dark-mode-none mx-auto"
                                      src="/img/brands/starcraft-dark.svg" width="220" alt="Starcraft">
                    <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/starcraft-light.svg"
                         width="220" alt="Starcraft">
                </div>
                <div class="col">
                    <img class="d-block mx-auto" src="/img/brands/klinos.svg" width="220" alt="Klinos">
                </div>
                <div class="col">
                    <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/puma-dark.svg" width="220"
                         alt="Puma">
                    <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/puma-light.svg" width="220"
                         alt="Puma">
                </div>
                <div class="col">
                    <img class="d-block mx-auto" src="/img/brands/airbnb.svg" width="220" alt="Airbnb">
                </div>
                <div class="col">
                    <img class="d-block mx-auto" src="/img/brands/philips.svg" width="220" alt="Philips">
                </div>
            </div>
        </section>


        <!-- Features -->
        <section class="bg-secondary py-5">
            <div class="container py-md-2 py-lg-4 my-xl-2 my-xxl-3">

                <!-- Item -->
                <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4"
                     data-aos="fade-up" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
                    <div
                        class="col-md-6 col-xxl-5 offset-lg-1 offset-xl-2 offset-xxl-3 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                        <div class="position-relative">
                            <img class="d-block rounded-1" src="/img/landing/corporate/features/01.jpg"
                                 alt="Image">
                            <div
                                class="d-none d-lg-block position-absolute top-0 end-0 translate-middle-y w-auto pe-1 me-4">
                                <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                                    <svg class="text-info" width="107" height="107" viewBox="0 0 107 107"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M106.192 53.0468C106.225 63.5385 103.146 73.8042 97.3443 82.5459C91.5426 91.2875 83.279 98.1125 73.5985 102.158C63.918 106.203 53.2553 107.287 42.9589 105.272C32.6624 103.257 23.1946 98.2343 15.7528 90.8387C8.31094 83.4431 3.22928 74.0068 1.15039 63.7231C-0.92849 53.4394 0.0887821 42.7702 4.07357 33.0647C8.05836 23.3591 14.8317 15.0531 23.537 9.19711C32.2424 3.34107 42.4887 0.197979 52.9804 0.16529L53.1457 53.2121L106.192 53.0468Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 order-md-1" data-aos="fade-up" data-aos-duration="800"
                         data-aos-offset="180" data-disable-parallax-down="md">
                        <div class="pe-md-4 pe-lg-0">
                            <h2 class="h1 pb-sm-2 pb-lg-3">Let's grow business together</h2>
                            <p class="fs-xl pb-3 mb-1 mb-sm-2 mb-md-3 mb-lg-4">Vitae tempor morbi tellus pulvinar ut
                                iaculis sit tristique in turpis volutpat quam nec pretium eu nulla egestas ultrices
                                donec in pulvinar ut fermentum nun aliquam.</p>
                            <a class="d-inline-flex align-items-center fw-semibold text-decoration-none" href="#">
                                Learn more
                                <i class="ai-arrow-right fs-4 ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4"
                     data-aos="fade-up" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
                    <div
                        class="col-md-6 col-xxl-5 offset-xl-1 offset-xxl-2 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                        <div class="position-relative">
                            <img class="d-block rounded-1 position-relative z-2"
                                 src="/img/landing/corporate/features/02.jpg" alt="Image">
                            <div
                                class="d-none d-lg-block position-absolute top-0 start-0 translate-middle-x w-auto pt-3 mt-5">
                                <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                                    <svg class="text-primary" width="160" height="160" viewBox="0 0 160 160"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="80" cy="80" r="80"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-5 order-md-1" data-aos="fade-up" data-aos-duration="800"
                         data-aos-offset="180" data-disable-parallax-down="md">
                        <div class="pe-md-4 pe-lg-0">
                            <h2 class="h1 pb-3 mb-2 mb-lg-3 mb-xl-4">Our professional approach to your business</h2>
                            <div class="row row-cols-1 row-cols-sm-2 g-4">
                                <div class="col">
                                    <div class="text-body-secondary mb-2">01</div>
                                    <h3 class="h5">Individual approach</h3>
                                    <p class="mb-0">Hac erat leo proin odio est sed sit in felis facilisi integer sed
                                        congue neque turpis dictumst sitsed volutpat aliquet tortor.</p>
                                </div>
                                <div class="col">
                                    <div class="text-body-secondary mb-2">02</div>
                                    <h3 class="h5">Integrated analytics</h3>
                                    <p class="mb-0">Find aute irure dolor in enderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur neque congue neque turpis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="row align-items-center py-3 py-sm-4 py-lg-5 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4"
                     data-aos="fade-up" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
                    <div
                        class="col-md-6 col-xxl-5 offset-lg-1 offset-xl-2 offset-xxl-3 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                        <div class="position-relative">
                            <img class="d-block rounded-1" src="/img/landing/corporate/features/03.jpg"
                                 alt="Image">
                            <div
                                class="d-none d-lg-block position-absolute top-0 start-50 translate-middle w-auto ms-2">
                                <div data-aos="fade-up" data-aos-duration="950" data-aos-offset="280">
                                    <svg class="text-danger" width="108" height="111" viewBox="0 0 108 111"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M68.9244 1.23484C69.1072 0.713703 69.6783 0.438641 70.1961 0.630706C78.5792 3.74012 86.1086 8.79818 92.1601 15.3932C98.4371 22.2339 102.93 30.5171 105.241 39.5091C107.552 48.501 107.61 57.9241 105.41 66.9438C103.209 75.9634 98.8179 84.3011 92.6254 91.2184C86.4328 98.1356 78.6299 103.419 69.9078 106.6C61.1857 109.782 51.8136 110.763 42.6217 109.457C33.4298 108.151 24.7018 104.598 17.2109 99.1136C9.98911 93.8259 4.13195 86.8998 0.117483 78.9106C-0.130486 78.4171 0.079957 77.8191 0.577752 77.5799L21.7446 67.4094C22.2425 67.1702 22.8384 67.3807 23.0936 67.8705C25.2883 72.084 28.4252 75.7403 32.2656 78.5522C36.3752 81.5612 41.1634 83.5102 46.2062 84.2266C51.2489 84.943 56.3905 84.4048 61.1756 82.6595C65.9606 80.9142 70.2414 78.0157 73.6387 74.2208C77.0359 70.426 79.4449 65.8518 80.6522 60.9036C81.8594 55.9553 81.8277 50.7857 80.5598 45.8526C79.2919 40.9196 76.827 36.3753 73.3834 32.6224C70.1654 29.1154 66.1855 26.4006 61.7558 24.6837C61.2409 24.4841 60.9659 23.9149 61.1488 23.3938L68.9244 1.23484Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 order-md-1" data-aos="fade-up" data-aos-duration="800"
                         data-aos-offset="180" data-disable-parallax-down="md">
                        <div class="pe-md-4 pe-lg-0">
                            <h2 class="h1 pb-sm-2 pb-lg-3">Full spectrum of business services</h2>
                            <p class="fs-xl mb-lg-4">Find aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat.</p>
                            <ul class="list-unstyled pb-3 mb-3 mb-lg-4">
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Forecasting and recommendations
                                </li>
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Identification of patterns, analysis
                                </li>
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Segmentation by various methods
                                </li>
                            </ul>
                            <a class="btn btn-primary" href="#">Book a free consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Industries -->
        <section class="bg-dark position-relative pb-5 pb-lg-0 pt-md-2 pt-lg-4 pt-xl-5" data-bs-theme="dark">
            <div class="container pb-sm-3 pb-md-4 pb-lg-0 pt-5">
                <div class="row pb-2 pb-lg-0 pt-1 pt-sm-4">
                    <div class="col-md-5 col-xl-4">
                        <h2 class="h1 text-center text-md-start pb-3 mb-0 mb-md-3 mb-lg-4">The industries which we work
                            in</h2>

                        <!-- Button visible on screens > 768px -->
                        <a class="btn btn-outline-primary d-none d-md-inline-flex" href="#">More about industries</a>
                    </div>
                    <div class="col-md-7 col-lg-6 offset-lg-1 offset-xl-2">
                        <div class="ps-md-4 ps-lg-0">

                            <!-- Accordion -->
                            <div class="accordion accordion-alt" id="industries">
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#finance" aria-expanded="true" aria-controls="finance">
                                            Finance and insurance
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse show" id="finance"
                                         data-bs-parent="#industries">
                                        <div class="accordion-body">Sit purus platea nunc semper auctor integer semper
                                            et ac odio eget a lacus eu duis ante sed molestie varius tempus gravida
                                            libero pretium sit etiam morbi orci et vestibulum velit consectetur posuere
                                            suscipit.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#tech" aria-expanded="false"
                                                aria-controls="tech">Startup and technology
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse" id="tech" data-bs-parent="#industries">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Vestibulum posuere finibus dui, eget scelerisque ipsum suscipit nec.
                                            Praesent nec quam in ipsum ultricies ultricies et sagittis dui platea nunc
                                            semper auctor.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#medicine"
                                                aria-expanded="false" aria-controls="medicine">Medicine and beauty
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse" id="medicine" data-bs-parent="#industries">
                                        <div class="accordion-body">Pellentesque habitant morbi tristique senectus et
                                            netus et malesuada fames ac turpis egestas. Mauris tincidunt imperdiet
                                            hendrerit. Fusce tortor turpis, facilisis ac efficitur eget etiam morbi orci
                                            et.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#real-estate"
                                                aria-expanded="false" aria-controls="real-estate">Real estate and
                                            catering
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse" id="real-estate"
                                         data-bs-parent="#industries">
                                        <div class="accordion-body">Aenean suscipit, lacus eu sagittis pretium, quam
                                            purus aliquet velit, in vestibulum eros massa et eros. Proin sed mollis
                                            tortor. Integer non felis condimentum, gravida metus nec, mollis mauris
                                            ultrices malesuada.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#ecommerce"
                                                aria-expanded="false" aria-controls="ecommerce">E-commerce
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse" id="ecommerce"
                                         data-bs-parent="#industries">
                                        <div class="accordion-body">Curabitur dictum sodales aliquam. Etiam tortor
                                            augue, ultrices in efficitur sit amet, luctus dapibus magna. Vivamus eu
                                            lacus elementum, ultrices massa vitae, elementum lorem tristique senectus et
                                            netus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#education"
                                                aria-expanded="false" aria-controls="education">Educational and training
                                        </button>
                                    </h3>
                                    <div class="accordion-collapse collapse" id="education"
                                         data-bs-parent="#industries">
                                        <div class="accordion-body">Sed sollicitudin interdum nunc ut pharetra. Proin
                                            vehicula volutpat mattis. Curabitur a ipsum leo. Praesent dapibus est ac
                                            risus maximus, sit amet placerat diam congue elit sem commodo justo
                                            scelerisque ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button visible on screens < 768px -->
                <div class="text-center d-md-none mt-4">
                    <a class="btn btn-outline-primary" href="#">More about industries</a>
                </div>
            </div>

            <!-- Shapes -->
            <div class="d-none d-lg-flex align-items-end mt-xl-n5">
                <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
                    <svg class="text-info" width="116" height="191" viewBox="0 0 116 191" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M58 191C90.0325 191 116 165.033 116 133L116 4C116 1.79086 114.209 7.8281e-08 112 1.74846e-07L60 2.44784e-06C26.8629 3.89631e-06 4.54735e-07 26.8629 1.9032e-06 60L5.09413e-06 133C6.49432e-06 165.033 25.9675 191 58 191Z"></path>
                    </svg>
                </div>
                <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                    <svg class="text-warning" width="199" height="120" viewBox="0 0 199 120" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect width="199" height="120" rx="60"></rect>
                    </svg>
                </div>
                <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="300">
                    <svg class="text-danger" width="169" height="169" viewBox="0 0 169 169" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="84.5" cy="84.5" r="84.5"></circle>
                    </svg>
                </div>
                <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="450">
                    <svg class="text-primary" width="169" height="169" viewBox="0 0 169 169" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.38722e-06 84.5C5.92617e-06 101.213 4.95585 117.55 14.2408 131.446C23.5258 145.342 36.7229 156.172 52.1633 162.568C67.6036 168.963 84.5937 170.637 100.985 167.376C117.377 164.116 132.433 156.068 144.251 144.251C156.068 132.433 164.116 117.377 167.376 100.985C170.637 84.5937 168.963 67.6036 162.568 52.1632C156.172 36.7229 145.342 23.5258 131.446 14.2408C117.55 4.95584 101.213 -5.92617e-06 84.5 -7.38722e-06L84.5 84.5L7.38722e-06 84.5Z"></path>
                    </svg>
                </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-md-2">
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
                                <h2 class="mb-lg-4">Thanks to your talented team for the strategy we dreamed about!</h2>
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
                                <h2 class="mb-lg-4">Exceptional work, delivery and flexibility. An excellent
                                    result.</h2>
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
                                    ac, cursus odio. Ut nec rutrum magna, vel tempor erat. Vivamus nec tempus
                                    purus. </p>
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
        <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row g-4 pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2">
                <div class="col-lg-4 d-flex flex-column">
                    <h2 class="display-2 d-none d-lg-block">Meet our team</h2>
                    <h2 class="h1 d-lg-none text-center mb-0">Meet our team</h2>
                    <div class="d-none d-lg-flex mt-auto mb-n3">
                        <div data-aos="fade-left" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                            <svg class="text-info" width="169" height="169" viewBox="0 0 169 169" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="84.5" cy="84.5" r="84.5"></circle>
                            </svg>
                        </div>
                        <div data-aos="fade-right" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                            <svg class="text-primary" width="169" height="169" viewBox="0 0 169 169" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M169 84.5C169 101.213 164.044 117.55 154.759 131.446C145.474 145.342 132.277 156.172 116.837 162.568C101.396 168.963 84.4063 170.637 68.0149 167.376C51.6235 164.116 36.567 156.068 24.7495 144.251C12.9319 132.433 4.88409 117.377 1.62364 100.985C-1.63681 84.5937 0.0365658 67.6036 6.43217 52.1632C12.8278 36.7229 23.6583 23.5258 37.5543 14.2408C51.4503 4.95583 67.7875 -6.12546e-06 84.5 -7.38722e-06L84.5 84.5L169 84.5Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/01.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Guy Hawkins</h3>
                                <p class="text-body mb-3">Head of marketing</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-x rounded-circle mx-2" href="#"
                                       aria-label="X">
                                        <i class="ai-x"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"
                                       aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/02.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Martha Winter</h3>
                                <p class="text-body mb-3">Data analyst</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"
                                       aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"
                                       aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/03.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Jane Cooper</h3>
                                <p class="text-body mb-3">Head of PR department</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"
                                       aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"
                                       aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-flex flex-column justify-content-center text-center">
                    <p class="lead px-3 mb-0">The main competencies of the team: find aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor do amet
                        sint velit officia viverra arcu in rhoncus egestas lorem consequat sollicitudin.</p>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/04.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Albert Flores</h3>
                                <p class="text-body mb-3">Art director</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-behance rounded-circle mx-2" href="#"
                                       aria-label="Behance">
                                        <i class="ai-behance"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-dribbble rounded-circle mx-2" href="#"
                                       aria-label="Dribbble">
                                        <i class="ai-dribbble"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/05.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Robert Fox</h3>
                                <p class="text-body mb-3">CTO</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-x rounded-circle mx-2" href="#"
                                       aria-label="X">
                                        <i class="ai-x"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-stack-overflow rounded-circle mx-2"
                                       href="#" aria-label="Stack Overflow">
                                        <i class="ai-stack-overflow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-md-4">
                    <div class="card card-hover border-0 rounded-1 overflow-hidden">
                        <img src="/img/landing/corporate/team/06.jpg" alt="Image">
                        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                            <div
                                class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2 text-center"
                                data-bs-theme="dark">
                                <h3 class="h5 mb-1">Michelle Yang</h3>
                                <p class="text-body mb-3">CEO, Founder</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"
                                       aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"
                                       aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"
                                       aria-label="LinkedIn">
                                        <i class="ai-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column justify-content-center text-center">
                    <div class="mx-auto" style="max-width: 245px;">
                        <h3 class="h2 mb-4">Get to know our team better</h3>
                        <a class="btn btn-outline-primary" href="#">About us</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog -->
        <section class="container py-5 mb-sm-2 mb-md-0 my-lg-3 my-xl-4 my-xxl-5">
            <h2 class="h1 text-center text-sm-start pb-3 pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mb-3 mb-lg-4">Our
                blog</h2>
            <div class="row">
                <div class="col-lg-6 pb-3 mb-2 mb-sm-3">

                    <!-- Featured article -->
                    <a class="card h-100 border-0 rounded-1 overflow-hidden text-decoration-none bg-size-cover bg-position-center"
                       href="#"
                       style="max-width: 600px; min-height: 300px; background-image: url(/img/landing/corporate/blog-img.jpg);">
                        <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                        <div class="card-body d-flex flex-column justify-content-end h-100 position-relative z-2"
                             data-bs-theme="dark">
                            <h3>New business strategies for 2022</h3>
                            <p class="text-body mb-0">Leo vitae sem eget eget at in vivamus placerat sodales tristique
                                risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu dignissim.
                                Dapibus est ac risus maximus...</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-6">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <!-- Article -->
                        <article class="col">
                            <div class="pb-4 pt-2 pt-xl-3 ms-md-3 border-bottom">
                                <h3 class="h4">
                                    <a href="#">Promotion from scratch to the first sales</a>
                                </h3>
                                <p class="mb-4">Suscipit consectetur nam hac in enim, adipiscing aenean tortor ac
                                    commodo eu nibh a tempus sed...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">August 13, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Strategy</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <div class="pb-4 pt-2 pt-xl-3 ms-md-3 border-bottom">
                                <h3 class="h4">
                                    <a href="#">New business strategies for 2022</a>
                                </h3>
                                <p class="mb-4">Orci massa sapien varius odio et vel egestas ultricies commodo tristique
                                    ullamcorper sit vitae cursus...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">August 2, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Business</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <div class="pb-4 pt-2 pt-xl-3 ms-md-3 border-bottom">
                                <h3 class="h4">
                                    <a href="#">Outgoing year results, the main news</a>
                                </h3>
                                <p class="mb-4">Mauris suscipit in tempor, platea lobortis mollis rutrum aliquam
                                    pulvinar ultricies orci augue libero...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">July 27, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Analytics</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <div class="pb-4 pt-2 pt-xl-3 ms-md-3 border-bottom">
                                <h3 class="h4">
                                    <a href="#">How to define goals and objectives</a>
                                </h3>
                                <p class="mb-4">Sed convallis integer egestas sapien sapien purus enim massa porttitor
                                    vulputate metus purus in fringilla...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">July 19, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Strategy</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <!-- All articles link -->
            <div class="text-end pb-md-4 pt-3 mt-2 mt-sm-3 mt-lg-4">
                <a class="d-inline-flex align-items-center fw-semibold text-decoration-none" href="#">
                    All articles
                    <i class="ai-arrow-right fs-4 ms-2"></i>
                </a>
            </div>
        </section>


        <!-- Contact CTA -->
        <section class="position-relative mt-n5 mt-lg-0">
            <div class="bg-secondary position-absolute bottom-0 start-0 w-100" style="height: calc(100% - 3rem);"></div>
            <div class="container position-relative z-2">
                <div class="row">
                    <div class="col-lg-6 py-5 pb-lg-0 mb-sm-2 mb-md-3 mb-lg-0 mt-3 mt-sm-4 mt-md-5">
                        <h2 class="h1 text-center text-lg-start pt-3 mt-3 mb-4">Become part <br
                                class="d-none d-lg-inline">of our team</h2>
                        <div class="d-flex justify-content-between mx-auto mx-lg-0" style="max-width: 370px;">
                            <ul class="ps-4 me-3">
                                <li class="mt-2">Financial analyst</li>
                                <li class="mt-2">Business analyst</li>
                                <li class="mt-2">Software tester</li>
                            </ul>
                            <ul class="ps-4">
                                <li class="mt-2">Head of marketing</li>
                                <li class="mt-2">Strategy advisor</li>
                                <li class="mt-2">Lead UX designer</li>
                            </ul>
                        </div>
                        <div class="text-center text-lg-start pt-4">
                            <a class="btn btn-outline-dark" href="#">Apply for a job</a>
                        </div>
                        <div class="d-none d-lg-flex justify-content-end mt-n4 me-n4">
                            <div data-aos="fade-left" data-aos-duration="700" data-aos-anchor-placement="bottom-bottom">
                                <svg class="text-danger" width="117" height="117" viewBox="0 0 117 117"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M-2.51516e-06 58.5C-3.52666e-06 70.0702 3.43096 81.3806 9.85902 91.0008C16.2871 100.621 25.4235 108.119 36.113 112.547C46.8025 116.975 58.5649 118.133 69.9128 115.876C81.2607 113.619 91.6844 108.047 99.8657 99.8657C108.047 91.6844 113.619 81.2607 115.876 69.9128C118.133 58.5649 116.975 46.8025 112.547 36.113C108.119 25.4235 100.621 16.2871 91.0009 9.85903C81.3806 3.43096 70.0702 -4.24071e-06 58.5 -5.11423e-06L58.5 58.5L-2.51516e-06 58.5Z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-right" data-aos-duration="700"
                                 data-aos-anchor-placement="bottom-bottom">
                                <svg class="text-info" width="117" height="117" viewBox="0 0 117 117"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="58.5" cy="58.5" r="58.5"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="bg-primary d-flex flex-column align-items-center justify-content-center position-relative h-100 rounded-1 rounded-bottom-0 p-5">
                            <div class="position-relative z-2 py-sm-3 py-md-4" style="max-width: 360px;"
                                 data-bs-theme="dark">
                                <h2 class="h1">Ready to discuss your project?</h2>
                                <p class="text-body mb-0">We are a team that creates business strategies for B2B and B2C
                                    companies.</p>
                                <div class="d-flex flex-column flex-sm-row align-items-center pt-3 mt-3 mt-lg-4">
                                    <a class="btn btn-light w-100 w-sm-auto me-sm-4 mb-2 mb-sm-0"
                                       href="{{ route('third', ['pages', 'contacts', 'contact-v1'])}}">Contact us</a>
                                    <a class="d-inline-block text-white fw-medium p-2" href="mailto:email@example.com">email@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer bg-dark pb-3 pt-sm-3 py-md-4 py-lg-5" data-bs-theme="dark">
        <div class="container pb-4 pt-5">
            <div class="d-md-flex align-items-center justify-content-between pb-1 pb-md-0 mb-4 mb-md-5">
                <nav class="nav justify-content-center justify-content-md-start pb-sm-2 pb-md-0 mb-4 mb-md-0 ms-md-n3">
                    <a class="nav-link py-1 px-0 mx-3" href="#">Services</a>
                    <a class="nav-link py-1 px-0 mx-3" href="#">Reviews</a>
                    <a class="nav-link py-1 px-0 mx-3" href="#">Team</a>
                    <a class="nav-link py-1 px-0 mx-3" href="#">Blog</a>
                    <a class="nav-link py-1 px-0 mx-3" href="#">Contact</a>
                </nav>
                <div class="d-flex justify-content-center justify-content-md-start me-md-n2">
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#"
                       aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#"
                       aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-x rounded-circle mx-2" href="#" aria-label="X">
                        <i class="ai-x"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#"
                       aria-label="LinkedIn">
                        <i class="ai-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="nav d-block d-md-flex align-items-center justify-content-between text-center text-md-start">
                <a class="nav-link d-inline-block text-body-secondary fs-sm text-decoration-none order-md-2 py-1 px-0 mb-3 mb-md-0"
                   href="#">Privacy policy</a>
                <p class="fs-sm order-md-1 mb-0">
                    <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                    <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank"
                       rel="noopener">Stackbros</a>
                </p>
            </div>
        </div>
    </footer>

@endsection

@section('script-bottom')

@endsection
