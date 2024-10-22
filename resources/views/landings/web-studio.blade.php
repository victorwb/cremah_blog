@extends('layouts.base', ['title' => 'Around | Web Studio'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Hero -->
        <section class="container-fluid py-5 mt-4 px-sm-4 px-md-5">
            <div
                class="bg-dark rounded-5 position-relative overflow-hidden py-5 px-3 px-sm-4 px-xl-5 mt-2 mx-md-n3 mx-lg-auto"
                style="max-width: 1660px;" data-bs-theme="dark">
                <div class="jarallax position-absolute top-0 start-0 w-100 h-100 mt-5" data-jarallax data-speed="0.6">
                    <div class="jarallax-img position-absolute w-100 h-100"
                         style="background-image: url(/img/landing/web-studio/hero-wave.png);"></div>
                </div>
                <div class="bg-white position-absolute top-0 start-0 w-100 h-100" style="opacity: 2%;"></div>
                <div class="container position-relative z-2 pt-xl-4 pt-xxl-5 pb-sm-2">
                    <div class="row pt-md-3 pt-lg-5">
                        <div class="col-lg-6 col-xxl-5 pb-lg-5 mb-xl-5">
                            <h1 class="display-1 text-center text-lg-start mb-xxl-5">Web studio of effective <span
                                    class="text-primary">development</span></h1>
                        </div>
                        <div class="col-lg-5 col-xl-4 offset-lg-1 offset-xxl-2 d-flex flex-column pt-2 pt-md-4">
                            <p class="text-body fs-xl text-center text-lg-start pb-2 pb-md-0 mb-4 mb-md-5">We build
                                websites, tools and applications that offer beautiful web presence and ultimate user
                                experience.</p>
                            <div
                                class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start pb-3 pb-sm-5">
                                <a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto me-sm-3 me-xl-4 mb-2 mb-sm-0"
                                   href="#">Let's partner</a><a
                                    class="btn btn-lg btn-link text-white w-100 w-sm-auto px-2"
                                    href="{{ route('third', ['pages', 'portfolio', 'list-v2'])}}">View Case Studies<i
                                        class="ai-arrow-right ms-2"></i></a></div>
                            <ul class="list-inline d-xl-flex text-center text-lg-start mt-auto mb-0 mb-sm-2">
                                <li class="d-inline-flex align-items-center text-body text-nowrap pt-1 me-4">
                                    <i class="ai-check-alt text-primary fs-xl me-2"></i>
                                    Full spectrum of services
                                </li>
                                <li class="d-inline-flex align-items-center text-body text-nowrap pt-1">
                                    <i class="ai-check-alt text-primary fs-xl me-2"></i>
                                    Flexible work terms
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Awards -->
        <section class="container pb-5 pt-lg-3 pt-xl-4 pt-xxl-5 mt-n2 mt-md-0">
            <div
                class="row justify-content-center row-cols-2 row-cols-3 row-cols-md-5 gx-0 gx-sm-3 gx-md-2 gx-lg-3 gx-xl-4">
                <div class="col">
                    <div class="py-sm-2 my-xl-1">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/clutch-rating-dark.svg"
                             width="196" alt="Clutch">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/clutch-rating-light.svg"
                             width="196" alt="Clutch">
                    </div>
                </div>
                <div class="col">
                    <div class="py-sm-2 my-xl-1">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/deloitte-dark.svg"
                             width="196" alt="Deloitte">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/deloitte-light.svg"
                             width="196" alt="Deloitte">
                    </div>
                </div>
                <div class="col">
                    <div class="py-sm-2 my-xl-1">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/vuejs-dark.svg" width="196"
                             alt="Vue.js">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/vuejs-light.svg"
                             width="196" alt="Vue.js">
                    </div>
                </div>
                <div class="col">
                    <div class="py-sm-2 my-xl-1">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/awwwards-dark.svg"
                             width="196" alt="Awwwards">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/awwwards-light.svg"
                             width="196" alt="Awwwards">
                    </div>
                </div>
                <div class="col">
                    <div class="py-sm-2 my-xl-1">
                        <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/clutch-dark.svg"
                             width="196" alt="Clutch">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/clutch-light.svg"
                             width="196" alt="Clutch">
                    </div>
                </div>
            </div>
        </section>


        <!-- Services (Carousel on screns < 992px) -->
        <section class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5 mt-xxl-4 pb-lg-2 pb-xl-4 pb-xxl-5">
            <h2 class="h1 text-center pb-3 pb-lg-4">Our services</h2>
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
                        <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                            <div class="card-body">
                                <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-warning"
                                          d="M50,15.1V8.7c0-2.1-1.7-3.9-3.9-3.9H9.9C7.7,4.8,6,6.5,6,8.7v6.4H50z M35.7,10h7.7c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3h-7.7c-0.7,0-1.3-0.6-1.3-1.3C34.4,10.5,35,10,35.7,10z M22.8,10c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3C21.6,10.5,22.1,10,22.8,10z M17.7,10c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3C16.4,10.5,17,10,17.7,10z M12.5,10c0.7,0,1.3,0.6,1.3,1.3c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3C11.2,10.5,11.8,10,12.5,10z"
                                          fill="currentColor"></path>
                                    <path class="text-primary"
                                          d="M6,17.7v27.1c0,2.1,1.7,3.9,3.9,3.9h36.3c2.1,0,3.9-1.7,3.9-3.9V17.7H6z M21.1,36c0.6,0.4,0.6,1.3,0.2,1.8c-0.4,0.6-1.3,0.6-1.8,0.2L13,32.9c-0.6-0.5-0.6-1.5,0-2l6.4-5.2c0.6-0.4,1.4-0.4,1.8,0.2c0.4,0.6,0.4,1.4-0.2,1.8l-5.2,4.1L21.1,36z M33.1,23.4l-7.7,18c-0.3,0.7-1,1-1.7,0.7c-0.7-0.3-1-1-0.7-1.7l7.7-18c0.3-0.7,1-1,1.7-0.7S33.3,22.7,33.1,23.4z M43,32.9L36.5,38c-0.6,0.4-1.4,0.4-1.8-0.2c-0.4-0.6-0.4-1.4,0.2-1.8l5.2-4.1l-5.2-4.1c-0.6-0.4-0.6-1.3-0.2-1.8c0.4-0.6,1.3-0.6,1.8-0.2l6.4,5.2C43.6,31.4,43.6,32.4,43,32.9z"
                                          fill="currentColor"></path>
                                </svg>
                                <h3>Web development</h3>
                                <p class="card-text">Pellentesque bibendum congue massa urna. Tempus hendrerit non
                                    molestie nulla enim, est vitae nisl amet.</p>
                            </div>
                            <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                                <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
                                    <i class="ai-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                            <div class="card-body">
                                <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-primary"
                                          d="M39.2,0H16.8c-3.1,0-5.6,2.5-5.6,5.6V9h33.6V5.6C44.8,2.5,42.3,0,39.2,0z M30.2,6.7h-4.5c-0.6,0-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1h4.5c0.6,0,1.1,0.5,1.1,1.1S30.9,6.7,30.2,6.7z"
                                          fill="currentColor"></path>
                                    <path class="text-primary"
                                          d="M11.2,47v3.4c0,3.1,2.5,5.6,5.6,5.6h22.4c3.1,0,5.6-2.5,5.6-5.6V47H11.2L11.2,47z M28,51.5c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1c0.6,0,1.1,0.5,1.1,1.1C29.1,51,28.6,51.5,28,51.5z"
                                          fill="currentColor"></path>
                                    <path class="text-warning"
                                          d="M11.2,11.2v33.6h33.6V11.2H11.2z M23.6,30.8c0.3,0.3,0.4,0.8,0.1,1.2s-0.9,0.5-1.2,0.3l-4.2-3.5c-0.4-0.4-0.4-1,0-1.4l4.2-3.5c0.4-0.3,0.9-0.3,1.2,0.1c0.3,0.3,0.3,0.9-0.1,1.2L20.2,28L23.6,30.8z M31.3,22.3l-5,12.2c-0.2,0.4-0.7,0.6-1.1,0.5c-0.4-0.1-0.6-0.7-0.4-1.1l5-12.2c0.2-0.5,0.7-0.7,1.1-0.5C31.3,21.3,31.5,21.9,31.3,22.3z M37.7,28.7l-4.2,3.5c-0.3,0.3-0.9,0.2-1.2-0.3C32,31.6,32,31,32.4,30.7l3.4-2.8l-3.4-2.8c-0.3-0.3-0.4-0.8-0.1-1.2c0.3-0.3,0.8-0.4,1.2-0.1l4.2,3.5C38.1,27.7,38.1,28.3,37.7,28.7z"
                                          fill="currentColor"></path>
                                </svg>
                                <h3>Mobile development</h3>
                                <p class="card-text">Amet, consectetur rhoncus, libero, morbi malesuada feugiat nulla
                                    feugiat mi vitae est pharetra nisi velit tincidunt.</p>
                            </div>
                            <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                                <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
                                    <i class="ai-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card bg-secondary border-0 h-100 text-center text-decoration-none" href="#">
                            <div class="card-body">
                                <svg class="d-block mx-auto mb-4" width="56" height="56" viewBox="0 0 56 56" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-primary"
                                          d="M4.85938 44.8138C4.86158 46.9513 6.59422 48.6836 8.73171 48.6861H47.455C49.5925 48.6836 51.3252 46.9513 51.3274 44.8138V19.5857H4.85938V44.8138ZM17.1606 25.736C18.4048 25.7451 19.4943 26.5717 19.839 27.7671H25.1642V26.509C25.1642 26.055 25.5324 25.6876 25.9856 25.6876H30.1451C30.5987 25.6876 30.9665 26.055 30.9665 26.509V27.7671H36.2432C36.6499 26.4437 37.9634 25.6168 39.3323 25.8221C40.7012 26.0278 41.714 27.2039 41.714 28.5885C41.714 29.9728 40.7012 31.1488 39.3323 31.3541C37.9634 31.5595 36.6499 30.7333 36.2432 29.4099H33.1578C34.698 30.8298 35.5718 32.8308 35.5667 34.9254V38.1795H36.6811C37.1343 38.1795 37.5025 38.5477 37.5025 39.0009V43.16C37.5025 43.6136 37.1343 43.9814 36.6811 43.9814H32.5216C32.068 43.9814 31.7002 43.6136 31.7002 43.16V39.0009C31.7002 38.5477 32.068 38.1795 32.5216 38.1795H33.9239V34.9254C33.9297 32.8187 32.7996 30.8727 30.9668 29.8331V30.6673C30.9668 31.1209 30.5994 31.4887 30.1454 31.4887H25.9856C25.5324 31.4887 25.1642 31.1209 25.1642 30.6673V29.8342C23.3351 30.8756 22.2057 32.8202 22.2075 34.9254V38.1795H23.6094C24.0634 38.1795 24.4308 38.5469 24.4308 39.0009V43.1596C24.4308 43.6136 24.0634 43.981 23.6094 43.981H19.4503C18.9963 43.981 18.6289 43.6136 18.6289 43.1596V39.0009C18.6289 38.5477 18.9963 38.1795 19.4503 38.1795H20.5643V34.9254C20.5629 32.8301 21.4385 30.8298 22.9798 29.4099H19.839C19.3953 30.7744 17.993 31.5844 16.5893 31.2874C15.1852 30.9907 14.2318 29.682 14.3785 28.2548C14.5255 26.8273 15.7254 25.7407 17.1606 25.736Z"
                                          fill="currentColor"></path>
                                    <path class="text-warning"
                                          d="M51 17V10.125C51 7.85048 49.1863 6 46.957 6H9.04297C6.81368 6 5 7.85048 5 10.125V17H51ZM36.0859 11.5H44.1719C44.9161 11.5 45.5195 12.1156 45.5195 12.875C45.5195 13.6344 44.9161 14.25 44.1719 14.25H36.0859C35.3417 14.25 34.7383 13.6344 34.7383 12.875C34.7383 12.1156 35.3417 11.5 36.0859 11.5ZM22.6094 11.5C23.3536 11.5 23.957 12.1156 23.957 12.875C23.957 13.6344 23.3536 14.25 22.6094 14.25C21.8651 14.25 21.2617 13.6344 21.2617 12.875C21.2617 12.1156 21.8651 11.5 22.6094 11.5ZM17.2188 11.5C17.963 11.5 18.5664 12.1156 18.5664 12.875C18.5664 13.6344 17.963 14.25 17.2188 14.25C16.4745 14.25 15.8711 13.6344 15.8711 12.875C15.8711 12.1156 16.4745 11.5 17.2188 11.5ZM11.8281 11.5C12.5724 11.5 13.1758 12.1156 13.1758 12.875C13.1758 13.6344 12.5724 14.25 11.8281 14.25C11.0839 14.25 10.4805 13.6344 10.4805 12.875C10.4805 12.1156 11.0839 11.5 11.8281 11.5Z"
                                          fill="currentColor"></path>
                                </svg>
                                <h3>Graphic design</h3>
                                <p class="card-text">Est, nisl, ornare augue maecenas dis vitae tincidunt interdum
                                    tincidunt donec ipsum pellentesque luctus justo.</p>
                            </div>
                            <div class="card-footer border-0 px-0 pt-0 pb-4 mb-3">
                                <div class="btn btn-icon btn-outline-primary rounded-circle stretched-link">
                                    <i class="ai-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
            </div>
        </section>


        <!-- Industries (Binded accordion) -->
        <section class="container py-5 mt-2 mt-sm-3 mt-md-4">
            <h2 class="h1 text-center pt-lg-3">Industries we work in</h2>
            <p class="pb-3 pb-md-4 mb-0 mb-sm-2 mb-lg-3 text-center">Most of our projcts come from the industries
                below</p>
            <div class="row align-items-lg-center">

                <!-- Accordion -->
                <div class="col-md-6 col-lg-5 pb-2 pb-lg-0 mb-4 mb-md-0">
                    <div class="accordion accordion-alt" id="industries">
                        <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-binded-content="#finance-img" data-bs-target="#finance"
                                        aria-expanded="true" aria-controls="finance">Finance and insurance
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="finance" data-bs-parent="#industries">
                                <div class="accordion-body">Sit purus platea nunc semper auctor integer semper et ac
                                    odio eget a lacus eu duis ante sed molestie varius tempus gravida libero pretium sit
                                    etiam morbi orci et vestibulum velit.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-binded-content="#tech-img" data-bs-target="#tech" aria-expanded="false"
                                        aria-controls="tech">Startup and technology
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="tech" data-bs-parent="#industries">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vestibulum posuere finibus dui, eget scelerisque ipsum suscipit nec. Praesent nec
                                    quam in ipsum ultricies ultricies et sagittis dui.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-binded-content="#medicine-img" data-bs-target="#medicine"
                                        aria-expanded="false" aria-controls="medicine">Medicine and beauty
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="medicine" data-bs-parent="#industries">
                                <div class="accordion-body">Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Mauris tincidunt imperdiet hendrerit. Fusce
                                    tortor turpis, facilisis ac efficitur eget.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-n3 mb-lg-n2 mb-xl-1">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-binded-content="#ecommerce-img" data-bs-target="#ecommerce"
                                        aria-expanded="false" aria-controls="ecommerce">E-commerce
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="ecommerce" data-bs-parent="#industries">
                                <div class="accordion-body">Curabitur dictum sodales aliquam. Etiam tortor augue,
                                    ultrices in efficitur sit amet, luctus dapibus magna. Vivamus eu lacus elementum,
                                    ultrices massa vitae, elementum lorem.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Binded images -->
                <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                    <div class="ps-lg-4 ps-xl-0">
                        <div class="binded-content">
                            <div class="binded-item active" id="finance-img">
                                <img class="rounded-5" src="/img/landing/web-studio/industries/01.jpg"
                                     alt="Image">
                            </div>
                            <div class="binded-item" id="tech-img">
                                <img class="rounded-5" src="/img/landing/web-studio/industries/02.jpg"
                                     alt="Image">
                            </div>
                            <div class="binded-item" id="medicine-img">
                                <img class="rounded-5" src="/img/landing/web-studio/industries/03.jpg"
                                     alt="Image">
                            </div>
                            <div class="binded-item" id="ecommerce-img">
                                <img class="rounded-5" src="/img/landing/web-studio/industries/04.jpg"
                                     alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Skills (Carousel) -->
        <section class="pt-2 py-md-4 py-lg-5 mt-2 mt-xl-4 mt-xxl-5">
            <div class="container d-flex align-items-center justify-content-between pb-4 mb-sm-2 mb-md-3">
                <h2 class="h1 mb-0">Our skills</h2>

                <!-- Slider control buttons (Prev / Next) -->
                <div class="d-flex">
                    <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle" type="button" id="prev-skill"
                            aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button"
                            id="next-skill" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Swiper slider -->
            <div class="container-start">
                <div class="swiper" data-swiper-options='{
            "slidesPerView": "auto",
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": "#prev-skill",
              "nextEl": "#next-skill"
            }
          }'>
                    <div class="swiper-wrapper text-center">

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                                <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                    <div class="card-flip-front p-0">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                            <img src="/img/landing/web-studio/skills/figma.svg" width="72"
                                                 alt="Figma">
                                        </div>
                                    </div>
                                    <div class="card-flip-back p-0 bg-transparent">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                            <img src="/img/landing/web-studio/skills/figma.svg" width="52"
                                                 alt="Figma">
                                            <p class="fs-sm pt-3 mb-0">Figma is convenient online service for interface
                                                development and prototyping with the ability to work together in real
                                                time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card border-0 bg-secondary h-100">
                                <div class="card-body mx-auto" style="max-width: 416px;">
                                    <p class="fs-lg mb-1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum posuere finibus dui, eget scelerisque ipsum suscipit nec. Praesent
                                        nec quam in ipsum ultricies ultricies et sagittis dui. Sed condimentum felis at
                                        pretium."</p>
                                    <img src="/img/brands/foster.svg" width="150" alt="Foster">
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                                <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                    <div class="card-flip-front p-0">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                            <img src="/img/landing/web-studio/skills/css3.svg" width="72"
                                                 alt="CSS3">
                                        </div>
                                    </div>
                                    <div class="card-flip-back p-0 bg-transparent">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                            <img src="/img/landing/web-studio/skills/css3.svg" width="52"
                                                 alt="CSS3">
                                            <p class="fs-sm pt-3 mb-0">Cascading Style Sheets Level 3 is the iteration
                                                of the CSS standard used in the styling and formatting of Web pages.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card border-0 bg-secondary h-100">
                                <div class="card-body mx-auto" style="max-width: 416px;">
                                    <p class="fs-lg mb-1">"Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada fames ac turpis egestas. Mauris tincidunt imperdiet hendrerit. Fusce
                                        tortor turpis, facilisis ac efficitur eget, aliquet ut odio. Curabitur in
                                        vestibulum tellus."</p>
                                    <img class="d-dark-mode-none" src="/img/brands/champion-dark.svg" width="150"
                                         alt="Champion">
                                    <img class="d-none d-dark-mode-inline-block"
                                         src="/img/brands/champion-light.svg" width="150" alt="Champion">
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                                <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                    <div class="card-flip-front p-0">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                            <img src="/img/landing/web-studio/skills/bootstrap.svg" width="72"
                                                 alt="Bootstrap">
                                        </div>
                                    </div>
                                    <div class="card-flip-back p-0 bg-transparent">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                            <img src="/img/landing/web-studio/skills/bootstrap.svg" width="52"
                                                 alt="Bootstrap">
                                            <p class="fs-sm pt-3 mb-0">Powerful, extensible, and feature-packed frontend
                                                toolkit. Build and customize with Sass, utilize prebuilt grid system and
                                                components.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card border-0 bg-secondary h-100">
                                <div class="card-body mx-auto" style="max-width: 416px;">
                                    <p class="fs-lg mb-1">"Nulla facilisi. Curabitur dictum sodales aliquam. Etiam
                                        tortor augue, ultrices in efficitur sit amet, luctus dapibus magna. Vivamus eu
                                        lacus elementum, ultrices massa vitae, elementum lorem. Proin feugiat egestas
                                        dolor."</p>
                                    <img src="/img/brands/alpine.svg" width="150" alt="Alpine">
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                                <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                    <div class="card-flip-front p-0">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                            <img src="/img/landing/web-studio/skills/python.svg" width="72"
                                                 alt="Python">
                                        </div>
                                    </div>
                                    <div class="card-flip-back p-0 bg-transparent">
                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                            <img src="/img/landing/web-studio/skills/python.svg" width="52"
                                                 alt="Python">
                                            <p class="fs-sm pt-3 mb-0">Python is a programming language that lets you
                                                work quickly and integrate systems more effectively.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item-->
                        <div class="swiper-slide w-sm-auto h-auto">
                            <div class="card border-0 bg-secondary h-100">
                                <div class="card-body mx-auto" style="max-width: 416px;">
                                    <p class="fs-lg mb-1">"Suspendisse potenti. Nulla vel varius urna. Donec at libero
                                        ipsum. Nullam scelerisque tempus malesuada. Donec vehicula odio est, at faucibus
                                        purus sollicitudin ut. Fusce mollis ultrices ex sed pellentesque velit
                                        euismod."</p>
                                    <img class="d-dark-mode-none" src="/img/brands/deloitte-dark.svg" width="150"
                                         alt="Deloitte">
                                    <img class="d-none d-dark-mode-inline-block"
                                         src="/img/brands/deloitte-light.svg" width="150" alt="Deloitte">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio -->
        <section class="container pt-5 pb-sm-3 mt-2 mt-sm-4 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">
            <h2 class="h1 text-center">Recent case studies</h2>
            <p class="pb-4 mb-md-2 mb-lg-3 text-center">Below you'll find handpicked recent projects we are most proud
                of</p>

            <!-- Item -->
            <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
                <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                    <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in"
                             data-aos-duration="600" data-aos-offset="250"></div>
                        <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/06.png"
                             width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400"
                     data-aos-offset="170">
                    <div class="ps-md-3 ps-lg-0">
                        <img class="d-block d-dark-mode-none mb-2 mb-lg-3"
                             src="/img/portfolio/brands/champion-blue-dark.svg" alt="Champion">
                        <img class="d-none d-dark-mode-block mb-2 mb-lg-3"
                             src="/img/portfolio/brands/champion-blue-light.svg" alt="Champion">
                        <h2 class="h4">Development of an application for a national bank</h2>
                        <p class="fs-sm pb-3 pb-lg-4 mb-3">Morbi et massa fames ac scelerisque sit commodo dignissim
                            faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo
                            dignissim.</p>
                        <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the
                            full story</a>
                        <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
                            <h6 class="text-body mb-0 me-3">Awards:</h6>
                            <img class="d-block d-dark-mode-none me-4" src="/img/portfolio/brands/vuejs-dark.svg"
                                 width="90" alt="Vue.js">
                            <img class="d-none d-dark-mode-block me-4" src="/img/portfolio/brands/vuejs-light.svg"
                                 width="90" alt="Vue.js">
                            <img class="d-block d-dark-mode-none" src="/img/portfolio/brands/deloitte-dark.svg"
                                 width="95" alt="Deloitte">
                            <img class="d-none d-dark-mode-block" src="/img/portfolio/brands/deloitte-light.svg"
                                 width="95" alt="Deloitte">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
                <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                    <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <div class="bg-primary rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in"
                             data-aos-duration="600" data-aos-offset="250"></div>
                        <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/07.png"
                             width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400"
                     data-aos-offset="170">
                    <div class="ps-md-3 ps-lg-0">
                        <img class="d-block mb-2 mb-lg-3" src="/img/portfolio/brands/foster-green.svg"
                             alt="Foster">
                        <h2 class="h4">Design and development of a dashboard for data management</h2>
                        <p class="fs-sm pb-3 pb-lg-4 mb-3">Feugiat elit tempor, malesuada rutrum amet quis duis facilisi
                            viverra. Quam ut in gravida dignissim eget mauris pretium facilisi dui varius amet et quam
                            massa auctor.</p>
                        <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the
                            full story</a>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
                <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                    <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in"
                             data-aos-duration="600" data-aos-offset="250"></div>
                        <img class="d-block position-relative z-2 ms-auto" src="/img/portfolio/list/08.png"
                             width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400"
                     data-aos-offset="170">
                    <div class="ps-md-3 ps-lg-0">
                        <img class="d-block mb-2 mb-lg-3" src="/img/portfolio/brands/boost.svg" alt="Boost">
                        <h2 class="h4 mb-lg-4">Landing page for a marketing agency Boost</h2>
                        <ul class="list-unstyled pb-1 pb-lg-2 mb-3">
                            <li class="d-flex pb-1 mb-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Faucibus sit est dui id gravida
                            </li>
                            <li class="d-flex pb-1 mb-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Lectus in sem eu facilisis ornare
                            </li>
                            <li class="d-flex pb-1 mb-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Massa maecenas cras vivamus
                            </li>
                        </ul>
                        <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the
                            full story</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact form + Benefits -->
        <section class="bg-secondary pt-5 pb-4">
            <div class="container py-lg-2 py-xl-4 py-xxl-5">
                <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h2 class="h1">Benefits of working with us</h2>
                        <p class="pb-1 pb-md-0 mb-4 mb-md-5">Morbi et massa fames ac scelerisque sit commodo dignissim
                            faucibus vel quisque proin lectus.</p>
                        <h3 class="mb-4">Send your request!</h3>

                        <!-- Contact form -->
                        <form class="needs-validation row g-4" novalidate>
                            <div class="col-lg-10">
                                <label class="form-label fs-base" for="name">Name</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Your name" required
                                       id="name">
                                <div class="invalid-feedback">Please enter your name!</div>
                            </div>
                            <div class="col-lg-10">
                                <label class="form-label fs-base" for="email">Email</label>
                                <input class="form-control form-control-lg" type="email" placeholder="Email address"
                                       required id="email">
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                            </div>
                            <div class="col-lg-10">
                                <label class="form-label fs-base" for="message">Message</label>
                                <textarea class="form-control form-control-lg" placeholder="Your message" rows="4"
                                          required id="message"></textarea>
                                <div class="invalid-feedback">Please write your message!</div>
                            </div>
                            <div class="col-lg-10">
                                <button class="btn btn-lg btn-dark rounded-pill mt-2" type="submit">Send request
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Benefits -->
                    <div class="col-lg-7 col-xl-6 offset-xl-1">
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col">

                                <!-- Card -->
                                <div class="card border-0 mb-4">
                                    <div class="card-body">
                                        <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="text-warning"
                                                  d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z"
                                                  fill="currentColor"></path>
                                            <path class="text-primary"
                                                  d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z"
                                                  fill="currentColor"></path>
                                            <path class="text-warning"
                                                  d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <h3 class="h4" style="max-width: 180px;">Time zones ain't no thing</h3>
                                        <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu
                                            vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu
                                            eget libero.</p>
                                    </div>
                                </div>

                                <!-- Card -->
                                <div class="card border-0 bg-primary" data-bs-theme="dark">
                                    <div class="card-body">
                                        <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.7496 11.4756C25.3743 8.85089 25.3743 4.59539 22.7496 1.97068C20.1249 -0.654032 15.8694 -0.654033 13.2447 1.97068C10.6199 4.59539 10.6199 8.85089 13.2447 11.4756C15.8694 14.1003 20.1249 14.1003 22.7496 11.4756Z"
                                                fill="white"></path>
                                            <path class="text-warning"
                                                  d="M13.2173 26.3746C14.0903 24.3107 15.2282 22.395 16.6119 20.6516C12.48 16.1818 6.56698 13.3827 0 13.3827V36H11.2733C11.2733 32.6628 11.9274 29.4243 13.2173 26.3746Z"
                                                  fill="currentColor"></path>
                                            <path class="text-warning"
                                                  d="M36.0001 36.0001V13.3828C23.5089 13.3828 13.3828 23.5089 13.3828 36.0001H36.0001Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <h3 class="h4" style="max-width: 180px;">Flexible work terms</h3>
                                        <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu
                                            vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu
                                            eget libero.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col d-flex flex-column pt-4 mt-sm-3">

                                <!-- Card -->
                                <div class="card border-0 order-sm-2 mb-4 mb-sm-0">
                                    <div class="card-body">
                                        <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="text-warning"
                                                  d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z"
                                                  fill="currentColor"></path>
                                            <path class="text-primary"
                                                  d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z"
                                                  fill="currentColor"></path>
                                            <path class="text-warning"
                                                  d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <h3 class="h4" style="max-width: 180px;">Full spectrum of services</h3>
                                        <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu
                                            vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu
                                            eget libero.</p>
                                    </div>
                                </div>

                                <!-- Card -->
                                <div class="card border-0 bg-primary order-sm-1 mb-sm-4" data-bs-theme="dark">
                                    <div class="card-body">
                                        <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.4844 22.4814H36.0031V36.0001H22.4844V22.4814Z"
                                                  fill="white"></path>
                                            <path class="text-warning"
                                                  d="M8.96266 18C8.96266 13.0088 13.0088 8.96266 18 8.96266C22.9912 8.96266 27.0373 13.0088 27.0373 18H36C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36V27.0373C13.0088 27.0373 8.96266 22.9912 8.96266 18Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <h3 class="h4" style="max-width: 180px;">Impossible? We're on it</h3>
                                        <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu
                                            vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu
                                            eget libero.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer bg-secondary pt-4 pb-2 pb-md-5 pt-sm-5">
        <div class="container-fluid pb-1 pb-md-0 px-md-5">
            <div class="bg-dark rounded-5 position-relative overflow-hidden w-100 py-5 px-3 px-sm-4 px-xl-5 mx-auto"
                 style="max-width: 1660px;" data-bs-theme="dark">
                <div class="position-absolute top-50 start-50 translate-middle" style="width: 1664px;">
                    <img src="/img/landing/web-studio/footer-wave.png" alt="Wave">
                </div>
                <div class="container position-relative z-2 pt-md-3 pt-lg-4 pt-xl-5 pb-2">
                    <div class="row pb-2">
                        <div class="col-lg-4 col-xxl-3 pb-2 pb-lg-0 mb-4 mb-lg-0">
                            <div class="navbar-brand text-light py-0 me-0 pb-1 mb-3">
                  <span class="text-primary flex-shrink-0 me-2">
                    <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor"
                            d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                    </svg>
                  </span>
                                <span class="text-white opacity-90">Around</span>
                            </div>
                            <p class="text-body fs-sm mb-4">Tellus non diam morbi quam vel venenatis proin sed dolor
                                elementum nunc</p>
                            <div class="input-group input-group-sm rounded-pill">
                                <input class="form-control" type="text" placeholder="Email address">
                                <button class="btn btn-primary rounded-pill" type="button">Subscribe</button>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-2 offset-lg-1 offset-xl-2 offset-xxl-3 mb-4 mb-sm-0">
                            <h6 class="fw-bold">Company</h6>
                            <ul class="nav flex-column fs-sm">
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
                            <h6 class="fw-bold">Support</h6>
                            <ul class="nav flex-column fs-sm">
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Help center</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Terms of service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Legal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="#">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-lg-3 col-xl-2">
                            <h6 class="fw-bold">Contact us</h6>
                            <ul class="nav flex-column fs-sm">
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="tel:+15262200459">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0459</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-normal px-0 py-1" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="d-sm-flex align-items-center justify-content-between pt-4 pt-md-5 mt-2 mt-md-0 mt-lg-2 mt-xl-4">
                        <div class="d-flex justify-content-center order-sm-2 me-md-n2">
                            <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#"
                               aria-label="Instagram">
                                <i class="ai-instagram"></i>
                            </a>
                            <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#"
                               aria-label="Facebook">
                                <i class="ai-facebook"></i>
                            </a>
                            <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#"
                               aria-label="LinkedIn">
                                <i class="ai-linkedin"></i>
                            </a>
                        </div>
                        <p class="nav fs-sm order-sm-1 text-center text-sm-start pt-4 pt-sm-0 mb-0 me-4">
                            <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                            <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank"
                               rel="noopener">Stackbros</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
