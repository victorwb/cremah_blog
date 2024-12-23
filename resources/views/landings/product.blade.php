@extends('layouts.base', ['title' => 'Around | Product Landing'])

@section('html_attributes')
    data-bs-theme="dark"
@endsection

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar')

        <!-- Hero -->
        <section class="position-relative pt-sm-3 pt-md-5 mb-xl-3 mb-xxl-5">
            <div class="position-absolute top-0 end-0 overflow-hidden mt-n5 mt-md-0">
                <svg class="d-block mt-n5 mt-md-0 me-md-n5 me-xxl-0" width="1207" height="894" viewBox="0 0 1207 894"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: var(--ar-gray-100);">
                    <circle cx="639" cy="255" r="639"></circle>
                </svg>

                <!-- Animated wave -->
                <lottie-player class="position-absolute top-0 end-0 opacity-20 mt-n5 mt-md-0 me-md-n5 me-xxl-n4"
                               src="/json/animation-soundwave.json" background="transparent" speed="1" loop
                               autoplay style="max-width: 560px; height: 720px;"></lottie-player>
            </div>
            <div class="container pt-5 pb-lg-4 pb-xl-5 mt-5">
                <div class="row pt-xl-4">

                    <!-- Sticky image -->
                    <div class="col-md-5 col-lg-6 offset-xxl-1 order-md-2 position-relative mb-3 mb-md-0"
                         style="margin-top: -115px;">
                        <div
                            class="d-none d-md-block position-absolute bottom-0 end-0 text-uppercase fw-bold lh-1 pb-5 mb-4 pe-3"
                            style="color: var(--ar-gray-100); font-size: 180px; transform: translate3d(0,0,0);">
                            <div class="d-flex mb-lg-3" style="padding-left: 160px;">
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="150">A
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="200">r
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="250">o
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="300">u
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="350">n
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="400"
                                     data-aos-delay="400">d
                                </div>
                            </div>
                            <div class="d-flex">
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="300"
                                     data-aos-delay="150">M
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="300"
                                     data-aos-delay="200">u
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="300"
                                     data-aos-delay="250">s
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="300"
                                     data-aos-delay="300">i
                                </div>
                                <div data-aos="flip-right" data-aos-duration="700" data-aos-offset="300"
                                     data-aos-delay="350">c
                                </div>
                            </div>
                        </div>
                        <div class="position-sticky z-3 top-0" style="padding-top: 115px;">
                            <div class="px-5 px-md-0 ps-xl-5 ms-lg-3">
                                <img class="d-block mx-auto mx-md-0" src="/img/landing/product/hero-image.png"
                                     width="465" alt="Headphones">
                            </div>
                        </div>
                    </div>

                    <!-- Text -->
                    <div
                        class="col-md-7 col-lg-6 col-xxl-5 order-md-1 position-relative z-3 text-center text-md-start pb-sm-3 pb-md-5 pt-4 mb-md-5 mt-2">
                        <h1 class="display-3 text-uppercase mb-sm-4">
                            <span class="fw-medium">Choose only </span>
                            <span class="text-info fw-bold">high quality sound</span>
                            <img class="d-none d-xl-inline-block align-middle ms-3"
                                 src="/img/landing/product/soundwave.svg" width="200" alt="Sound wave">
                        </h1>
                        <div class="mx-auto mx-md-0" style="max-width: 400px;">
                            <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">Now you can fully hear every detail and experience
                                superior sound with a wide soundstage with deep tight bass that will surprise you.</p>
                            <a class="btn btn-outline-dark" href="#">Support us on Kickstarter</a>
                            <div
                                class="d-flex justify-content-center justify-content-md-between pt-4 pt-sm-5 mt-2 mt-sm-0 mt-lg-4 mt-xl-5 ms-md-n3">
                                <div class="px-3">
                                    <div class="h4 mb-1">60-200 Hz</div>
                                    <div class="fs-sm">frequency range</div>
                                </div>
                                <div class="px-3">
                                    <div class="h4 mb-1">0.75 kg</div>
                                    <div class="fs-sm">weight, kg</div>
                                </div>
                                <div class="px-3">
                                    <div class="h4 mb-1">60 h</div>
                                    <div class="fs-sm">working hours</div>
                                </div>
                            </div>
                            <div class="d-none d-xxl-block" style="height: 290px;"></div>
                            <div class="d-none d-md-block d-xxl-none" style="height: 240px;"></div>
                            <div class="d-md-none" style="height: 50px;"></div>
                            <div data-aos="fade-up" data-aos-duration="800" data-aos-offset="250"
                                 data-disable-parallax-down="md">
                                <h2 class="h1 pb-sm-2 pb-md-3">You can take the music anywhere in posuere the music</h2>
                                <p>Turpis nullam netus sed aliquam consectetur at felis consequat tincidunt orci varius
                                    arcu urna neque eget maecenas consequat lacus habitasse adipiscing in.</p>
                                <a class="btn btn-link text-dark px-0" href="#">
                                    Read more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Video + Features -->
        <section class="container pt-5">
            <div class="position-relative mt-sm-2 mb-4 mb-sm-5">
                <img class="d-block rounded-5" src="/img/landing/product/video-cover.jpg" alt="Video cover">
                <div class="d-nline-flex position-absolute top-50 start-50 translate-middle z-2 p-4">
                    <a class="btn btn-icon btn-xl btn-primary rounded-circle stretched-link"
                       href="https://www.youtube.com/watch?v=udMULpKcnn8" data-bs-toggle="video"
                       aria-label="Play video">
                        <i class="ai-play-filled"></i>
                    </a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-3 pt-2 pt-sm-0 pt-lg-3">
                <div class="col pb-4 mb-1">
                    <div style="max-width: 336px;">
                        <svg class="d-block mb-3 mb-lg-4" width="40" height="40" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.863 5.094C22.465 3.705 25 4.824 25 6.983v26.033c0 1.985-2.315 3.361-4.137 1.889l-9.507-8.24-3.856.001c-1.282 0-2.5-1.047-2.5-2.5v-8.333c0-1.331 1.086-2.5 2.5-2.5l3.857-.001 9.506-8.238zm1.092 1.259l-9.742 8.443a.84.84 0 0 1-.546.204H7.5c-.427 0-.833.355-.833.833v8.333c0 .427.353.833.833.833h4.167c.167 0 .38.07.546.204l9.742 8.443c.805.559 1.379-.153 1.379-.63V6.983c0-.687-.799-1.093-1.379-.63zm9.712 9.48c.427 0 .833.371.833.833v2.5H35c.46 0 .833.373.833.833 0 .427-.361.833-.833.833h-2.5v2.5c0 .46-.373.833-.833.833-.427 0-.833-.372-.833-.833v-2.5h-2.5c-.46 0-.833-.373-.833-.833a.84.84 0 0 1 .833-.833h2.5v-2.5c0-.46.373-.833.833-.833z"></path>
                        </svg>
                        <h3 class="h4">Active noise suppression</h3>
                        <p class="mb-0">Adipiscing posuere dui, amet, augue nisl dictum justo enim sed neque congue non
                            quam ultrices interdum vitae vestibulum.</p>
                    </div>
                </div>
                <div class="col pb-4 mb-1">
                    <div class="mx-sm-auto" style="max-width: 336px;">
                        <svg class="d-block mb-3 mb-lg-4" width="40" height="40" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.683 13.683C33.683 6.126 27.556 0 20 0S6.316 6.126 6.316 13.683c-1.954.243-3.801 1.52-3.801 4.485v7.146c0 3.345 2.341 4.561 4.561 4.561h2.204a.76.76 0 0 0 .76-.76V14.398a.76.76 0 0 0-.76-.76H7.837C7.837 6.92 13.282 1.475 20 1.475S32.162 6.92 32.162 13.637h-1.444a.76.76 0 0 0-.76.76v14.694a.76.76 0 0 0 .76.76h1.444c-.213 5.222-2.721 6.446-7.731 6.667v-.509a1.52 1.52 0 0 0-1.52-1.52H18.13a1.52 1.52 0 0 0-1.52 1.52v2.471A1.52 1.52 0 0 0 18.13 40h4.797a1.52 1.52 0 0 0 1.52-1.52v-.441c4.819-.221 8.985-1.216 9.236-8.233 1.954-.243 3.801-1.52 3.801-4.485v-7.146c0-2.98-1.84-4.249-3.801-4.493zM8.521 15.105v13.227H7.039c-1.125 0-3.041-.395-3.041-3.041v-7.146c0-2.623 1.893-3.041 3.041-3.041h1.482zm14.405 22.227v1.155H18.13v-2.471h4.797v1.315zm13.037-12.018c0 2.622-1.893 3.041-3.041 3.041h-1.444V15.158h1.482c1.125 0 3.041.395 3.041 3.041l-.038 7.115z"></path>
                        </svg>
                        <h3 class="h4">Memory foam ear pads</h3>
                        <p class="mb-0">Dignissim eget ultrices feugiat dolor volutpat amet et suscipit metus sed
                            laoreet platea amet, sit sem at dui tempor netus.</p>
                    </div>
                </div>
                <div class="col pb-4 mb-1">
                    <div class="ms-sm-auto" style="max-width: 336px;">
                        <svg class="d-block mb-3 mb-lg-4" width="40" height="40" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M.769 16.945a.77.77 0 0 0-.769.769v3.846a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-3.846a.77.77 0 0 0-.769-.769zm3.852-3.149a.77.77 0 0 0-.769.769v10.65a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-10.65a.77.77 0 0 0-.769-.769zm3.84-5.312a.77.77 0 0 0-.769.769v21.539a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769V9.253a.77.77 0 0 0-.769-.769zm3.848 3.846a.77.77 0 0 0-.769.769v13.077a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769V13.1a.77.77 0 0 0-.769-.769zm11.612-1.862a.77.77 0 0 0-.769.769v17.307a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769V11.237a.77.77 0 0 0-.769-.769zm7.618 1.093a.77.77 0 0 0-.769.769v15.384a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769V12.33a.77.77 0 0 0-.769-.769zm3.848 3.846a.77.77 0 0 0-.769.769v7.692a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-7.692a.77.77 0 0 0-.769-.769zm-7.696-10a.77.77 0 0 0-.769.769v27.692a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769V6.177a.77.77 0 0 0-.769-.769zM16.152 17.715a.77.77 0 0 0-.769.769v3.077a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-3.077a.77.77 0 0 0-.769-.769zm23.078-.258a.77.77 0 0 0-.769.769v3.329a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-3.329a.77.77 0 0 0-.769-.769zM19.926 15.99a.77.77 0 0 0-.769.769v6.262a.77.77 0 0 0 .769.769.77.77 0 0 0 .769-.769v-6.262a.77.77 0 0 0-.769-.769z"></path>
                        </svg>
                        <h3 class="h4">Surround sound</h3>
                        <p class="mb-0">Tellus sit quam libero, ut quam praesent mi, elementum vulputate amet viverra
                            purus sed velit morbi tellus sodales sed vitae.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Color options -->
        <section class="container pt-md-2 pt-lg-4 pt-xl-5">
            <div class="row align-items-center mt-2 mt-sm-0 pt-4 pt-sm-5">
                <div class="col-md-6 col-lg-7 col-xxl-8 order-md-2 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
                    <div class="position-relative ms-md-auto" style="max-width: 636px;">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-secondary rounded-5"
                             style="height: 91.5%;" data-aos="zoom-in" data-aos-duration="700"
                             data-aos-offset="300"></div>
                        <div class="position-relative z-2 pb-4 pb-sm-5">
                            <div class="tab-content pb-3 mb-3">
                                <div class="tab-pane" id="gray" role="tabpanel">
                                    <img class="d-block mx-auto" src="/img/landing/product/colors/gray.png"
                                         width="486" alt="Gray">
                                </div>
                                <div class="tab-pane" id="blue" role="tabpanel">
                                    <img class="d-block mx-auto" src="/img/landing/product/colors/blue.png"
                                         width="486" alt="Blue">
                                </div>
                                <div class="tab-pane show active" id="green" role="tabpanel">
                                    <img class="d-block mx-auto" src="/img/landing/product/colors/green.png"
                                         width="486" alt="Green">
                                </div>
                                <div class="tab-pane" id="pink" role="tabpanel">
                                    <img class="d-block mx-auto" src="/img/landing/product/colors/pink.png"
                                         width="486" alt="Pink">
                                </div>
                            </div>
                            <div class="h6 fs-sm text-center pb-2 mb-1" id="colorOption">Green day</div>
                            <div class="nav nav-tabs justify-content-center">
                                <div class="nav-link border-0 p-0 me-2" data-bs-toggle="tab" data-bs-target="#gray">
                                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption"
                                           value="Gray light" id="gray-color">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="gray-color" style="width: 1.25rem; height: 1.25rem;">
                                        <span class="d-block rounded-circle"
                                              style="width: .75rem; height: .75rem; background-color: #576071;"></span>
                                    </label>
                                </div>
                                <div class="nav-link border-0 p-0 me-2" data-bs-toggle="tab" data-bs-target="#blue">
                                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption"
                                           value="Blue sky" id="blue-color">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="blue-color" style="width: 1.25rem; height: 1.25rem;">
                                        <span class="d-block rounded-circle"
                                              style="width: .75rem; height: .75rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                                <div class="nav-link border-0 p-0 me-2 active" data-bs-toggle="tab"
                                     data-bs-target="#green">
                                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption"
                                           value="Green day" checked id="green-color">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="green-color" style="width: 1.25rem; height: 1.25rem;">
                                        <span class="d-block rounded-circle"
                                              style="width: .75rem; height: .75rem; background-color: #b3cca3;"></span>
                                    </label>
                                </div>
                                <div class="nav-link border-0 p-0 me-2" data-bs-toggle="tab" data-bs-target="#pink">
                                    <input class="btn-check" type="radio" name="color" data-binded-label="colorOption"
                                           value="Pink dream" id="pink-color">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="pink-color" style="width: 1.25rem; height: 1.25rem;">
                                        <span class="d-block rounded-circle"
                                              style="width: .75rem; height: .75rem; background-color: #fda9a9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-4 order-md-1">
                    <div class="pe-md-4 pe-xl-0">
                        <h2 class="h1 pb-md-2 pb-xl-3">
                            <span
                                style="background: linear-gradient(90.72deg, #cbfdb1 3.49%, #acbff1 50.67%, #efa7ec 100.79%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Multicolor</span>
                            for those who like to be bright and stand out
                        </h2>
                        <p class="mb-0">Turpis nullam netus sed aliquam consectetur at felis consequat tincidunt orci
                            varius arcu urna neque eget maecenas consequat lacus habitasse adipiscing.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- CTA -->
        <section class="container py-sm-2 py-md-3 py-lg-4 py-xl-5 mb-2 mb-sm-3 mb-md-4 mb-xxl-5">
            <div class="row align-items-center py-5">
                <div class="col-md-6 col-lg-7 col-xxl-8 order-md-2 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
                    <div class="position-relative ms-auto" style="max-width: 823px;">
                        <img class="d-block" src="/img/landing/product/cta/01.png" alt="Image" data-aos="fade-up"
                             data-aos-duration="600" data-aos-offset="300">
                        <img class="d-block position-absolute top-0 start-0" src="/img/landing/product/cta/02.png"
                             alt="Image" data-aos="fade-up" data-aos-duration="900" data-aos-offset="300">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-4 order-md-1">
                    <h2 class="h1 pb-md-2 pb-xl-3">Headphones that fit your ears perfectly</h2>
                    <p class="mb-4">Adipiscing posuere dui, amet, augue nisl dictum justo enim sed neque congue non quam
                        ultrices interdum vitae vestibulum turpis nullam netus sed aliquam.</p>
                    <div class="d-flex pb-2 pb-lg-0 mb-4 mb-lg-5">
                        <div class="me-5">
                            <h3 class="mb-1">60-200 Hz</h3>
                            <p class="fs-sm mb-0">frequency range</p>
                        </div>
                        <div>
                            <h3 class="mb-1">0.75 kg</h3>
                            <p class="fs-sm mb-0">weight, kg</p>
                        </div>
                    </div>
                    <a class="btn btn-dark" href="#">Support us on Kickstarter</a>
                </div>
            </div>
        </section>


        <!-- Product details (Image hotspots) -->
        <section class="bg-secondary position-relative py-5">
            <div class="container py-1 py-sm-4 py-xl-5 my-md-3 my-xl-0 my-xxl-4">
                <h2 class="h1 text-center pb-3 mb-3 mb-lg-4">Product details</h2>
                <div class="hotspots mx-auto" style="max-width: 650px;">
                    <img class="d-block" src="/img/landing/product/hotspots-image.png" alt="Image">
                    <div class="position-absolute" style="top: 8%; right: 16%; width: 4rem; height: 4rem;"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-offset="300">
                        <div class="hotspot" data-bs-toggle="popover" data-bs-trigger="hover"
                             title="Memory foam ear pads"
                             data-bs-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.">
                            <div class="hotspot-inner">
                                <i class="ai-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute" style="bottom: 9%; left: 48%; width: 4rem; height: 4rem;"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-offset="100" data-aos-delay="150">
                        <div class="hotspot" data-bs-toggle="popover" data-bs-trigger="hover" title="Noise suppression"
                             data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">
                            <div class="hotspot-inner">
                                <i class="ai-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute" style="bottom: 36%; left: 6%; width: 4rem; height: 4rem;"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-offset="200" data-aos-delay="300">
                        <div class="hotspot" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"
                             title="Wireless Bluetooth"
                             data-bs-content="Excepteur sint occaecat cupidatat non proident sunt culpa officia.">
                            <div class="hotspot-inner">
                                <i class="ai-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 my-2">
                    <div class="col-6 col-md-3">
                        <h3 class="mb-md-4">Other features</h3>
                        <ul class="list-unstyled pb-1 pb-sm-2 pb-lg-3 mb-4 mb-xl-5">
                            <li class="mt-2">Noise suppression</li>
                            <li class="mt-2">Memory foam ear pads</li>
                        </ul>
                        <h3 class="mb-md-4">Battery</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mt-2">Up to 60 hours life</li>
                            <li class="mt-2">Charge via Micro-USB cable</li>
                            <li class="mt-2">Fast charging technology</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3 class="mb-md-4">Connectivity</h3>
                        <ul class="list-unstyled pb-1 pb-sm-2 pb-lg-3 mb-4 mb-xl-5">
                            <li class="mt-2">Wireless Bluetooth</li>
                            <li class="mt-2">Micro-USD port</li>
                        </ul>
                        <h3 class="mb-md-4">General</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mt-2">Height: 7.9 in / 19.6 cm</li>
                            <li class="mt-2">Weight: 7.55 oz / 0,75 g</li>
                            <li class="mt-2">Form factor: On ear</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xl-4 offset-xl-1 pt-1 pt-sm-3 pt-md-0 mt-4 mt-md-0">
                        <h3 class="mb-md-4">Highlights</h3>
                        <p>Donec urna, sed molestie tincidunt elit nunc pellentesque ipsum purus a turpis elementum
                            augue magna hendrerit bibendum morbi elementum non egestas in nec donec sit magna amet et
                            mauris nisl suscipit urna in morbi sit elementum venenatis.</p>
                        <p class="mb-0">Ut sit at orci cursus gravida pretium proin nulla id purus, placerat eget mauris
                            eu ac volutpat facilisi eget morbi ullamcorper turpis nisi aconsequat cursus malesuada leo
                            ultrices nisl dictumst turpis tortor sem amet, euismod aliquam, lacus laoreet dui
                            facilisi.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="text-center pt-sm-2 pt-md-4 pt-lg-3 pt-xl-4 pb-3 mx-auto mb-3 mb-lg-4"
                 style="max-width: 720px;">
                <h2 class="h1 pt-1 pt-sm-2">Take another look at Around Max</h2>
                <p class="mb-0">Turpis nullam netus sed aliquam consectetur at felis consequat tincidunt orci varius
                    arcu urna neque eget maecenas consequat lacus habitasse adipiscing.</p>
            </div>
            <div class="row g-4 mb-3 mb-xl-0 pb-sm-2 pb-md-4 pb-xl-5">
                <div class="col-md-5 col-lg-4 order-md-1">
                    <div class="card border-0 h-100 bg-size-cover bg-position-top-center"
                         style="min-height: 280px; background-image: url(/img/landing/product/gallery/01.jpg);"></div>
                </div>
                <div class="col-md-7 col-lg-8 order-md-2">
                    <div class="card border-0 bg-secondary h-100 px-xl-4 pb-sm-2 pb-xl-4">
                        <img class="d-block mx-auto" src="/img/landing/product/gallery/03.png" width="408"
                             alt="Image">
                        <div class="card-body">
                            <h3>Eco-friendly made from recycled plastic</h3>
                            <p class="card-text">Turpis nullam netus sed aliquam at felis ante ipsum in consequat
                                tincidunt orci varius arcu urna neque maecenas consequat lacus malesuada habitasse or
                                adipiscing in lacus ipsum or natoque tincidunt arcu uter cursus et quam odio amet urna
                                neque eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 order-md-4">
                    <div class="card border-0 h-100 bg-size-cover bg-position-center"
                         style="min-height: 280px; background-image: url(/img/landing/product/gallery/02.jpg);"></div>
                </div>
                <div class="col-md-7 col-lg-8 order-md-3">
                    <div class="card border-0 bg-secondary h-100">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <img class="d-block" src="/img/landing/product/gallery/04.png" width="377"
                                     alt="Image">
                            </div>
                            <div class="col-lg-6 align-self-center mt-n4 mt-lg-0">
                                <div class="card-body">
                                    <h3>Headphones for sports, for life, for pleasure</h3>
                                    <p class="card-text">Donec urna, sed molestie tincidunt elit nunc pellentesque ipsum
                                        purus a turpis elementum augue magna hendrerit bibendum morbi elementum non
                                        egestas in nec donec sit magna amet et mauris nisl suscipit urna in morbi sit
                                        elementum venenatis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark position-relative py-5" data-bs-theme="dark">
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background-color: rgba(255, 255, 255, .03);"></div>
        <div class="container position-relative z-2 pb-xl-2 pt-2 pt-sm-3 pt-xl-4 pt-xxl-5">
            <div class="row pb-5 pt-md-3 pt-lg-4 mb-md-3 mb-lg-4">
                <div class="col-md-6 col-xxl-5 pb-3 pb-md-0 mb-2 mb-sm-3 mb-md-0">
                    <div class="h1 pb-3">Support us on Kickstarter and get <span
                            style="background: linear-gradient(90.72deg, #cbfdb1 3.49%, #acbff1 50.67%, #efa7ec 100.79%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">20% discount</span>
                        on headphones
                    </div>
                    <div class="d-flex flex-wrap pb-4 pb-xl-5 mb-md-2 mb-lg-3">
                        <div class="d-flex pe-3 me-3 mb-2">
                            <i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>
                            <span class="text-body">$4,200 pledget</span>
                        </div>
                        <div class="d-flex pe-3 me-3 mb-2">
                            <i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>
                            <span class="text-body">45 funded</span>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="ai-check-alt text-white fs-4 mt-n1 me-2"></i>
                            <span class="text-body">12 days to go</span>
                        </div>
                    </div>
                    <a class="btn btn-outline-light" href="#">Support us on Kickstarter</a>
                </div>
                <div class="col-md-5 col-xl-4 offset-md-1 offset-xl-2 offset-xxl-3">
                    <div class="row row-cols-2">
                        <div class="col">
                            <ul class="nav flex-column pb-4 mb-2 pb-md-5 mb-lg-1">
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="#">Features</a>
                                </li>
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="#">Colors</a>
                                </li>
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="#">Product details</a>
                                </li>
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="#">Privacy policy</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="#"
                                   aria-label="Instagram">
                                    <i class="ai-instagram"></i>
                                </a>
                                <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#"
                                   aria-label="Facebook">
                                    <i class="ai-facebook"></i>
                                </a>
                                <a class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle" href="#"
                                   aria-label="YouTube">
                                    <i class="ai-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column">
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="mailto:email@example.com">email@example.com</a>
                                </li>
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="tel:+15262200459">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0459</a>
                                </li>
                                <li class="nav-item mt-1">
                                    <a class="nav-link py-1 px-0" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
            </p>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
