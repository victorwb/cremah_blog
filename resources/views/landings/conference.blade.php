@extends('layouts.base', ['title' => 'Around | Conference (Event)'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['isDark' => true])

        <!-- Hero -->
        <section class="bg-dark position-relative py-5" data-bs-theme="dark">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background-image: url(/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
            <div class="container position-relative z-2 py-md-3 py-lg-4 py-xl-5">
                <div class="row align-items-center justify-content-center pt-5 pb-2 pb-sm-3 mt-sm-4">
                    <div
                        class="col-10 col-sm-8 col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
                        <div class="swiper" data-swiper-options='{
                "effect": "creative",
                "loop": true,
                "allowTouchMove": false,
                "speed": 450,
                "autoplay": {
                  "delay": 6000,
                  "disableOnInteraction": false
                },
                "creativeEffect": {
                  "prev": {
                    "shadow": true,
                    "translate": ["-20%", 0, -1]
                  },
                  "next": {
                    "translate": ["100%", 0, 0]
                  }
                },
                "thumbnails": {
                  "el": "#thumbnails",
                  "images": [
                    "/img/landing/conference/hero/th01.jpg",
                    "/img/landing/conference/hero/th02.jpg",
                    "/img/landing/conference/hero/th03.jpg"
                  ]
                }
              }' style="border-radius: 50%; border-bottom-right-radius: 0;">
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="position-relative overflow-hidden"
                                         style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                                        <img src="/img/landing/conference/hero/01.jpg" alt="Image">
                                        <div
                                            class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100"
                                            style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                            <div class="text-end pe-4 pb-4">
                                                <h3 class="h5 mb-1">Esther Howard</h3>
                                                <p class="text-body fs-sm mb-0">VP of Strategy, Stretto Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="position-relative overflow-hidden"
                                         style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                                        <img src="/img/landing/conference/hero/02.jpg" alt="Image">
                                        <div
                                            class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100"
                                            style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                            <div class="text-end pe-4 pb-4">
                                                <h3 class="h5 mb-1">Albert Flores</h3>
                                                <p class="text-body fs-sm mb-0">Product Manager, Google</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide">
                                    <div class="position-relative overflow-hidden"
                                         style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;">
                                        <img src="/img/landing/conference/hero/03.jpg" alt="Image">
                                        <div
                                            class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100"
                                            style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                                            <div class="text-end pe-4 pb-4">
                                                <h3 class="h5 mb-1">Kathryn Murphy</h3>
                                                <p class="text-body fs-sm mb-0">VP of Marketing, Glassdoor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="swiper-thumbnails swiper-thumbnails-circle flex-nowrap justify-content-end pt-4"
                             id="thumbnails"></div>
                    </div>

                    <div class="col-sm-10 col-md-6 col-lg-5 order-md-1">
                        <div class="d-flex align-items-center lead pb-3 pb-sm-4 pb-lg-5 mb-2 mb-md-3 mb-lg-0 mb-xl-2">
                            <div class="text-light">Nov 15-16, '23</div>
                            <div class="text-warning mx-3 mx-sm-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                                </svg>
                            </div>
                            <div class="text-light">Berlin, GE</div>
                        </div>
                        <h1 class="display-3 text-uppercase d-none d-lg-block pb-3 mb-4">The biggest international
                            conference</h1>
                        <h1 class="display-5 text-uppercase d-lg-none pb-1 pb-sm-2">The biggest international
                            conference</h1>
                        <p class="text-body fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2">Mattis aliquet faucibus senectus
                            feugiat sapien mi diam nibh velit nunc purus elementum faucibus lectuset mauris.</p>
                        <div class="d-sm-flex">
                            <a class="btn btn-lg btn-primary w-100 w-md-auto mb-3 mb-sm-0 me-sm-3 me-lg-4"
                               href="#tickets" data-scroll data-scroll-offset="120">
                                Buy access pass
                                <i class="ai-arrow-down ms-2 me-n2"></i>
                            </a>
                            <a class="btn btn-lg btn-outline-light w-100 w-md-auto" href="#">
                                <i class="ai-calendar me-2 ms-n2"></i>
                                Add to calendar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Statistics -->
        <section class="bg-secondary position-relative py-4 py-md-5">
            <div class="container position-relative z-2">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col">
                        <div class="py-3 my-lg-2 my-xl-3">
                            <div class="text-dark display-4 mb-1">16</div>
                            <p class="fs-xl mb-0">Speakers</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="py-3 ps-xl-4 my-lg-2 my-xl-3">
                            <div class="text-dark display-4 mb-1">12+</div>
                            <p class="fs-xl mb-0">Hours on stage</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="py-3 my-lg-2 my-xl-3">
                            <div class="text-dark display-4 mb-1">1,5k</div>
                            <p class="fs-xl mb-0">Offline attendees</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-end">
                        <div class="py-3 pe-xl-4 my-lg-2 my-xl-3">
                            <div class="text-dark display-4 mb-1">100%</div>
                            <p class="fs-xl mb-0">Good times</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Target audience -->
        <section class="container pt-5 mt-xl-3 mt-xxl-5">
            <div class="row pt-1 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2">
                <div class="col-lg-4">
                    <h2 class="h1 pb-1 pb-sm-2 mb-4">Who may attend Conference?</h2>
                </div>
                <div class="col-lg-8 col-xl-7 offset-xl-1">
                    <div class="ps-lg-4 ps-xl-0">
                        <div data-simplebar>
                            <ul class="nav nav-tabs flex-nowrap mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4 active" href="#designers"
                                       data-bs-toggle="tab" role="tab">UI/UX Designers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#developers"
                                       data-bs-toggle="tab" role="tab">Developers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#managers"
                                       data-bs-toggle="tab" role="tab">Managers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#marketers"
                                       data-bs-toggle="tab" role="tab">Marketers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content py-2 pb-md-0 pt-sm-3 pt-lg-4 mb-4 mb-md-5">
                            <div class="tab-pane fade show active" id="designers" role="tabpanel">
                                <p class="fs-xl mb-4">Ipsum sed nascetur dolor accumsan integer phasellus tincidunt.
                                    Nulla quisque pellentesque adipiscing placerat integer feugiat facilisi elit mi.
                                    Dictum nunc lacinia vel molestie laoreet aliquet ridiculus diam justo viverra.</p>
                                <ul class="fs-xl mb-0">
                                    <li class="mb-1">At donec auctor quam ut scelerisque dui.</li>
                                    <li class="mb-1">Mollis sed fringilla placerat lobortis viverra aliquam ut nisl
                                        nisi.
                                    </li>
                                    <li class="mb-1">Odio ullamcorper in praesent venenatis non non sed pharetra
                                        dipise.
                                    </li>
                                    <li class="mb-1">Lobortis dui nibh at condimentum.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="developers" role="tabpanel">
                                <p class="fs-xl mb-4">Etiam sed porta massa. In sapien metus, lobortis eu tortor id,
                                    maximus commodo enim. Phasellus feugiat mi vitae enim cursus, ut scelerisque augue
                                    scelerisque. Pellentesque habitant morbi tristique senectus et netus.</p>
                                <ul class="fs-xl mb-0">
                                    <li class="mb-1">Donec imperdiet dolor at leo sodales.</li>
                                    <li class="mb-1">Fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                                    <li class="mb-1">Lobortis ullamcorper in praesent venenatis non non sed pharetra
                                        dipise.
                                    </li>
                                    <li class="mb-1">Mollis dui nibh at condimentum.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="managers" role="tabpanel">
                                <p class="fs-xl mb-4">Ipsum sed nascetur dolor accumsan integer phasellus tincidunt.
                                    Nulla quisque pellentesque adipiscing placerat integer feugiat facilisi elit mi.
                                    Dictum nunc lacinia vel molestie laoreet aliquet ridiculus diam justo viverra.</p>
                                <ul class="fs-xl mb-0">
                                    <li class="mb-1">At donec auctor quam ut scelerisque dui.</li>
                                    <li class="mb-1">Mollis sed fringilla placerat lobortis viverra aliquam ut nisl
                                        nisi.
                                    </li>
                                    <li class="mb-1">Odio ullamcorper in praesent venenatis non non sed pharetra
                                        dipise.
                                    </li>
                                    <li class="mb-1">Lobortis dui nibh at condimentum.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="marketers" role="tabpanel">
                                <p class="fs-xl mb-4">Etiam sed porta massa. In sapien metus, lobortis eu tortor id,
                                    maximus commodo enim. Phasellus feugiat mi vitae enim cursus, ut scelerisque augue
                                    scelerisque. Pellentesque habitant morbi tristique senectus et netus.</p>
                                <ul class="fs-xl mb-0">
                                    <li class="mb-1">Donec imperdiet dolor at leo sodales.</li>
                                    <li class="mb-1">Fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                                    <li class="mb-1">Lobortis ullamcorper in praesent venenatis non non sed pharetra
                                        dipise.
                                    </li>
                                    <li class="mb-1">Mollis dui nibh at condimentum.</li>
                                </ul>
                            </div>
                        </div>
                        <a class="btn btn-lg btn-primary w-100 w-sm-auto" href="#tickets" data-scroll
                           data-scroll-offset="120">
                            Buy access pass
                            <i class="ai-arrow-down ms-2 me-n2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Speakers -->
        <section class="container py-5 mb-lg-3 mb-xl-4 mt-xl-3 my-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mb-5">Meet our speakers</h2>
            <div class="mb-4 mb-lg-5 pb-4 px-3" data-simplebar>
                <div class="row row-cols-lg-4 flex-nowrap flex-lg-wrap gy-lg-5 mx-n3">
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/36.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Marvin McKinney</h3>
                            <p class="text-body-secondary mb-0">Founder &amp; CEO, Uber</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/37.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Jenny Wilson</h3>
                            <p class="text-body-secondary mb-0">Marketer, Glassdoor</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/38.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Albert Flores</h3>
                            <p class="text-body-secondary mb-0">Product Manager, Google</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/39.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Anneta Nikson</h3>
                            <p class="text-body-secondary mb-0">Founder &amp; CEO, Perfecto</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/40.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Esther Howard</h3>
                            <p class="text-body-secondary mb-0">VP of Strategy, Stretto Inc.</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/41.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Jerome Bell</h3>
                            <p class="text-body-secondary mb-0">Strategic Advisor, Shopify</p>
                        </a>
                    </div>
                    <div class="col"><a class="d-block text-center text-decoration-none" href="#"
                                        style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/42.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Kathryn Murphy</h3>
                            <p class="text-body-secondary mb-0">Marketing Coordinator</p>
                        </a>
                    </div>
                    <div class="col">
                        <a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;">
                            <img class="rounded-circle" src="/img/avatar/43.jpg" width="120" alt="Avatar">
                            <h3 class="h5 pt-4 mb-1">Guy Hawkins</h3>
                            <p class="text-body-secondary mb-0">President of Sales</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-primary overflow-hidden py-2 py-sm-3 py-md-4 mb-sm-2 mb-md-4">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-5"></div>
                <div class="position-absolute top-0 start-0 w-100 h-100 opacity-15"
                     style="background-image: url(/img/landing/conference/noise.png); mix-blend-mode: soft-light;"></div>
                <div
                    class="card-body position-relative d-sm-flex align-items-center justify-content-between z-2 text-center">
                    <div class="d-md-flex align-items-center pe-md-4">
                        <div class="d-none d-md-block text-warning flex-shrink-0 me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                            </svg>
                        </div>
                        <h2 class="text-light pb-1 pb-md-0 mb-md-0">Do you have an experience you want to share?</h2>
                    </div>
                    <a class="btn btn-lg btn-warning me-xl-4" href="#">Become our speaker</a>
                </div>
            </div>
        </section>


        <!-- Sponsors -->
        <section class="bg-secondary pb-md-2 pt-lg-2 pb-lg-4 py-xl-4 py-xxl-5">
            <div class="container py-5">
                <h2 class="h1 text-center pb-sm-2 py-md-3 mt-sm-2 mb-lg-4">Sponsored by</h2>
                <div class="mb-4 mb-lg-5 pb-3 px-3" data-simplebar>
                    <div class="row row-cols-lg-4 flex-nowrap flex-lg-wrap gy-lg-5 mx-n3">
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/envato-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/envato-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Faucibus amet cursus accumsan eleifend tempus diam id
                                duis. Mi velit nulla purus commodo non.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/angular-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/angular-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Nulla consequat tincidunt ut aliquet quam dignissim.
                                Sagittis, enim libero ultrices eleifend congue.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/pingdom-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/pingdom-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Ornare leo sed gravida quam volutpat vulputate massa
                                aliquam. Sem lacus, quam tellus duis sit pellentesque.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/woocommerce-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/woocommerce-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Imperdiet nunc, mauris, sed at egestas. Massa laoreet
                                facilisis turpis adipiscing semper venenatis ipsum.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/magento-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/magento-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Purus eu faucibus at vel, aliquam. Faucibus nibh odio
                                sed elementum blandit ut sociis et.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/bootstrap-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/bootstrap-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Adipiscing ultrices risus maecenas libero donec nam. In
                                sollicitudin nulla sagittis, neque sit ullamcorper.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/laravel-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/laravel-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Pharetra morbi id nibh ut at risus tortor consequat.
                                Dictum urna vulputate quis ut facilisis turpis purus commodo.</p>
                        </div>
                        <div class="col" style="min-width: 225px;">
                            <img class="d-block d-dark-mode-none mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/react-dark.svg" alt="Logo">
                            <img class="d-none d-dark-mode-block mb-2 mb-lg-2"
                                 src="/img/landing/conference/sponsors/react-light.svg" alt="Logo">
                            <p class="text-body-secondary mb-2">Suspendisse luctus maecenas tristique urna turpis aenean
                                est. Porttitor porta nec tincidunt ut aliquet quam.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-2 mb-sm-3">
                    <a class="btn btn-lg btn-primary" href="#">Become sponsor</a>
                </div>
            </div>
        </section>


        <!-- Schedule -->
        <section class="container py-5 mb-lg-2 mt-lg-3 my-xl-4 my-xxl-5">
            <div class="d-md-flex align-items-center justify-content-between pt-2 pt-sm-3 pb-3 mt-md-3 mb-3 mb-lg-4">
                <div class="d-flex align-items-center mb-4 mb-md-0">
                    <h2 class="h1 mb-0">Event schedule</h2>
                    <div class="text-warning flex-shrink-0 ps-sm-1 ms-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                        </svg>
                    </div>
                </div>
                <ul class="nav nav-tabs flex-nowrap mb-0" role="tablist">
                    <li class="nav-item me-1">
                        <a class="nav-link px-3 px-sm-4 active" href="#dayOne" data-bs-toggle="tab" role="tab">Day one
                            (Nov 15)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-sm-4" href="#dayTwo" data-bs-toggle="tab" role="tab">Day two (Nov
                            16)</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content border-top border-bottom mb-3 mb-sm-4 mb-lg-5">

                <!-- Day 1 tab -->
                <div class="tab-pane fade show active" id="dayOne" role="tabpanel">
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Opening party &amp; registration</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies
                                aliquet nunc sit metus turpis enim urna nec risus vehicula pharetra diam erat ac proin
                                donec.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/05.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/09.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-1 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/12.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">What are the top ideas for startup in 2023</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et
                                euismod et tellus.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/10.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Coffee break</h3>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Workshop: leading UI/UX design trends</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce
                                convallis. Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula
                                scelerisque. </p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/19.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Group discussion: How to align and empower cross-team success</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies
                                aliquet nunc sit metus.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/09.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 2 tab -->
                <div class="tab-pane fade" id="dayTwo" role="tabpanel">
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Workshop: How Blockchain affects modern IT market</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce
                                convallis. Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula
                                scelerisque. </p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/19.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">The future of front-end frameworks</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies
                                aliquet nunc sit metus turpis enim urna nec risus vehicula pharetra diam erat ac proin
                                donec.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/05.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/09.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-1 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/12.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Coffee break</h3>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">Group discussion: How good UI desig influences our perception</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies
                                aliquet nunc sit metus.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-2 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/09.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3 my-2 my-md-3">
                        <div class="col-md-3">
                            <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-0">What are the top ideas for startup in 2024</h3>
                            <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et
                                euismod et tellus.</p>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <div class="d-inline-flex">
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/10.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-light flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Tickets (Pricing) -->
        <section class="container" id="tickets">
            <div class="row border border-light rounded-5 overflow-hidden g-0">
                <div class="col-md-7 col-xl-8">
                    <div class="card h-100 bg-dark border-0 rounded-0 py-md-3 py-lg-4 py-xl-5 px-3 px-sm-4 px-lg-5"
                         data-bs-theme="dark">
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                             style="background-image: url(/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
                        <div class="card-body position-relative z-2 py-5 px-2 mx-auto" style="max-width: 732px;">
                            <h2 class="h1">In-Person Experience</h2>
                            <p class="pb-3 mb-lg-4">Aenean sollicitudin sit convallis auctor egestas urna massa semper
                                ultrices libero suspendisse venenatis urna ac in vitae pharetra aliquam.</p>
                            <div class="display-3 text-primary fw-bold pb-3 mb-1 mb-lg-3">$299</div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Non egestas pretium iaculis venenatis ipsum cras enim et amet.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Et purus quis laoreet ipsum.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Suspendisse turpis vehicula id ornare ut ut sollicitudin tempus vel.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Justo, quam tortor leo sed varius arcu sit rhoncus.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Sed maecenas sit vestibulum id ornare habitasse sit scelerisque.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer w-100 border-0 pt-0 pb-5 px-2 mx-0">
                            <button class="btn btn-lg btn-primary" type="button">Buy ticket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4 border-top border-md-0 border-start-md border-light">
                    <div
                        class="card h-100 bg-secondary border-0 rounded-0 py-md-3 py-lg-4 py-xl-5 px-3 px-sm-4 px-lg-5">
                        <div class="card-body py-5 px-2">
                            <h2 class="h1">Live Stream</h2>
                            <p class="pb-3 mb-lg-4">Sit facilisis viverra ullamcorper vestibulum nunc tincidunt
                                egestas.</p>
                            <div class="display-3 text-primary fw-bold pb-3 mb-1 mb-lg-3">$89</div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Integer lacinia quisque etiam quis morbi aliquam commodo.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Neque, ullamcorper elit sit natoque.
                                </li>
                                <li class="d-flex pt-1 mt-2">
                                    <i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>
                                    Sed orci, lacus, nunc vestibulum mi vel etiam pulvinar erat.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer w-100 border-0 pt-0 pb-5 px-2 mx-0">
                            <button class="btn btn-lg btn-primary" type="button">Buy ticket</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials (Infinite slider) -->
        <section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 contaier text-center pt-2 pt-sm-3 pt-md-4 pb-3 mt-md-2 mt-xxl-3 mb-lg-4">What attendees
                say</h2>

            <!-- First row slider -->
            <div class="swiper pb-4" data-swiper-options='{
          "spaceBetween": 24,
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
            "0": { "slidesPerView": 1 },
            "500": { "slidesPerView": 2 },
            "900": { "slidesPerView": 3 },
            "1300": { "slidesPerView": 4 },
            "1600": { "slidesPerView": 5 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/23.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Wade Warren</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star text-body-secondary opacity-70"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Sit facilisis dolor arcu, fermentum vestibulum arcu elementum
                                    imperdiet. Mauris duis eleifend faucibus amet sagittis amet consequat aucibus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/26.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Jenny Wilson</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci
                                    feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/27.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Bessie Cooper</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-half text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci
                                    feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/32.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Ralph Edwards</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star text-body-secondary opacity-70"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Odio viverra tristique id adipiscing varius. Leo vel tincidunt amet
                                    arcu. Auctor ipsum fames lacus vestibulum. Ultricies cras et at sed sed turpis."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/28.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Cameron Williamson</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-half text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Mauris fermentum vitae volutpat orci mattis dolor malesuada porta id.
                                    Enim, dis nisi eget tincidunt bibendum leo pulvinar in. At justo hacsit diam."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/24.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Annette Black</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Nisi et venenatis vitae, purus arcu. Integer lacus maecenas rhoncus
                                    nibh aliquam, enim sollicitudin interdum hendrerit. Proin venenatis varius."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second row slider -->
            <div class="swiper" dir="rtl" data-swiper-options='{
          "spaceBetween": 24,
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
            "0": { "slidesPerView": 1 },
            "500": { "slidesPerView": 2 },
            "900": { "slidesPerView": 3 },
            "1300": { "slidesPerView": 4 },
            "1600": { "slidesPerView": 5 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/23.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Guy Hawkins</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star text-body-secondary opacity-70"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Sit facilisis dolor arcu, fermentum vestibulum arcu elementum
                                    imperdiet. Mauris duis eleifend faucibus amet sagittis amet consequat aucibus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/22.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Esther Howard</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci
                                    feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/27.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Anneta Nikson</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-half text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci
                                    feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/32.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Darrell Steward</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star text-body-secondary opacity-70"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Odio viverra tristique id adipiscing varius. Leo vel tincidunt amet
                                    arcu. Auctor ipsum fames lacus vestibulum. Ultricies cras et at sed sed turpis."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/28.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Martha Stewart</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-half text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Mauris fermentum vitae volutpat orci mattis dolor malesuada porta id.
                                    Enim, dis nisi eget tincidunt bibendum leo pulvinar in. At justo hacsit diam."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" dir="ltr">
                        <div class="card h-100 border-0 bg-secondary rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <img class="rounded-circle" src="/img/avatar/24.jpg" width="60" alt="Avatar">
                                    <div class="ps-3">
                                        <div class="h5 mb-0">Kathryn Murphy</div>
                                        <div class="text-nowrap">
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning me-1"></i>
                                            <i class="ai-star-filled text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">"Nisi et venenatis vitae, purus arcu. Integer lacus maecenas rhoncus
                                    nibh aliquam, enim sollicitudin interdum hendrerit. Proin venenatis varius."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="py-2 py-sm-3 py-md-4 my-md-2 my-xxl-3">
                <h2 class="h1 text-center pt-xxl-1">See how the previous event unfolded</h2>
                <p class="fs-lg text-center pb-3 mb-lg-4">Get inspired with a selection of the keynotes about the
                    Conference 2022</p>
                <div class="gallery row g-3 g-md-4" data-video="true">
                    <div class="col-sm-6">
                        <div class="row g-3 g-md-4">
                            <div class="col-6">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/landing/conference/gallery/01.jpg">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/conference/gallery/th01.jpg" alt="Auditorium">
                                    </div>
                                </a>

                            </div>
                            <div class="col-6">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/landing/conference/gallery/02.jpg">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img"
                                                                                    src="/img/landing/conference/gallery/th02.jpg"
                                                                                    alt="Comfortable chairs"></div>
                                </a>

                            </div>
                            <div class="col-12">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=5-A8_ocajCM">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/conference/gallery/th05.jpg"
                                             alt="Conferece showreel">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row g-3 g-md-4">
                            <div class="col-6 order-sm-2">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/landing/conference/gallery/03.jpg">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/conference/gallery/th03.jpg" alt="Whiteboard">
                                    </div>
                                </a>

                            </div>
                            <div class="col-6 order-sm-3">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="/img/landing/conference/gallery/04.jpg">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/conference/gallery/th04.jpg" alt="Coffee break">
                                    </div>
                                </a>

                            </div>
                            <div class="col-12 order-sm-1">

                                <!-- Item -->
                                <a class="gallery-item d-block card-hover zoom-effect"
                                   href="https://www.youtube.com/watch?v=Omr18ybhPKI">
                                    <div
                                        class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                                        <i class="ai-play-filled"></i>
                                    </div>
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-4">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/conference/gallery/th06.jpg"
                                             alt="Speaker on stage">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- More button -->
                <div class="text-center pb-lg-2 pb-xl-3 pb-xxl-3 pt-4 pt-md-5 mt-3 mt-md-0">
                    <a class="btn btn-lg btn-outline-primary" href="#">
                        See more
                        <i class="ai-image ms-2"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- Contact form -->
        <section class="bg-primary position-relative py-5" data-bs-theme="light">
            <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-5"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 opacity-15"
                 style="background-image: url(/img/landing/conference/noise.png); mix-blend-mode: soft-light;"></div>
            <div class="container position-relative z-2 pt-sm-2 pb-3 py-md-4 py-lg-5">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5 col-xxl-4 pb-2 pb-md-0 mb-4 mb-md-0">
                        <div class="text-warning pb-3 mb-1 mb-md-2 mb-lg-3">
                            <svg class="d-block" width="28" height="28" viewBox="0 0 28 28" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 0L14.659 4.14233C15.4424 9.06596 20.2555 12.9977 26.4868 13.8042L28 14L26.4868 14.1958C20.2555 15.0023 15.4424 18.934 14.659 23.8577L14 28L13.341 23.8577C12.5576 18.934 7.74447 15.0023 1.51323 14.1958L0 14L1.51323 13.8042C7.74447 12.9977 12.5576 9.06596 13.341 4.14234L14 0Z"></path>
                            </svg>
                        </div>
                        <h2 class="display-5 text-light mb-4 mb-md-5">This is the event that can not be missed!</h2>
                        <div class="d-flex align-items-center">
                            <div class="d-flex me-3">
                                <div class="bg-white flex-shrink-0 rounded-circle position-relative z-4"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/05.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-white flex-shrink-0 rounded-circle position-relative z-3 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-white flex-shrink-0 rounded-circle position-relative z-2 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/09.jpg" width="48" alt="Avatar">
                                </div>
                                <div class="bg-white flex-shrink-0 rounded-circle position-relative z-1 ms-n3"
                                     style="padding: 3px;">
                                    <img class="rounded-circle" src="/img/avatar/12.jpg" width="48" alt="Avatar">
                                </div>
                            </div>
                            <p class="text-light mb-0"><strong>1.5k</strong> <span class="text-light opacity-70">attendees</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 offset-lg-1 offset-xxl-2">
                        <div class="card bg-white border-0 p-1 p-sm-2 p-lg-3">
                            <form class="card-body needs-validation p-4" novalidate>
                                <div class="mb-4">
                                    <label class="form-label fs-base" for="email">Email</label>
                                    <input class="form-control form-control-lg" type="email" placeholder="Email address"
                                           required id="email">
                                    <div class="invalid-feedback">Please provide a valid email address!</div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fs-base" for="name">Name</label>
                                    <input class="form-control form-control-lg" type="text" placeholder="Your name"
                                           required id="name">
                                    <div class="invalid-feedback">Please enter your name!</div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fs-base" for="message">Message</label>
                                    <textarea class="form-control form-control-lg" rows="5" placeholder="Your message"
                                              required id="message"></textarea>
                                    <div class="invalid-feedback">Please enter your message!</div>
                                </div>
                                <button class="btn btn-lg btn-warning" type="submit">Send request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark py-5" data-bs-theme="dark">
        <div class="container pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
            <div class="border-bottom text-center pb-4">
                <a class="navbar-brand d-inline-flex text-nav py-0 mb-3 mb-md-4" href="/">
            <span class="text-primary flex-shrink-0 me-2">
              <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                      d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg>
            </span>
                    <span class="text-light opacity-90">Around</span>
                </a>
                <ul class="nav justify-content-center py-1 pb-sm-2">
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Speakers</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Event schedule</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Tickets</a></li>
                    <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between pt-4 mt-2 mt-sm-0">
                <div class="d-flex justify-content-center order-sm-2 mb-4 mb-sm-0">
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#"
                       aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="#"
                       aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle" href="#"
                       aria-label="YouTube">
                        <i class="ai-youtube"></i>
                    </a>
                </div>
                <p class="nav fs-sm order-sm-1 text-center mb-0">
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
