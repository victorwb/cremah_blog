@extends('layouts.base', ['title' => 'Around | Coworking Space'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Hero with contact form -->
        <section class="pt-5">
            <div class="container position-relative z-2 pt-5 mt-3 mt-sm-4 mt-md-5">
                <div class="row pt-xl-3 pt-xxl-4">
                    <div class="col-lg-7 col-xxl-6">
                        <h1 class="display-3 text-center text-lg-start">The best space for work and business
                            meetings</h1>
                    </div>
                    <div class="col-lg-5 offset-xxl-1 pt-sm-3">
                        <p class="fs-lg text-center text-lg-start pb-3 pb-sm-0 pb-md-2 mb-4 mb-sm-5">Magna in purus in
                            facilisis pretium eleifend in nullamer magna morbi eleifend vel convallis quis utrices neque
                            tellus purus in facilisis pretium eleifend vel convallis.</p>

                        <!-- Contact form -->
                        <div class="card border-0 bg-primary py-4 px-xxl-4">
                            <form class="card-body" data-bs-theme="dark">
                                <h2 class="h3 card-title text-white text-center pb-2 pb-xxl-3">Reserve your spot</h2>
                                <div class="mb-3">
                                    <label class="form-label fs-base" for="space">Space</label>
                                    <select class="form-select form-select-lg" required id="space">
                                        <option value="" disabled>Choose space</option>
                                        <option value="Coworking main room">Coworking main room</option>
                                        <option value="Coworking terrace">Coworking terrace</option>
                                        <option value="Skype room 1" selected>Skype room 1</option>
                                        <option value="Skype room 2">Skype room 2</option>
                                        <option value="Meeting room 1">Meeting room 1</option>
                                        <option value="Meeting room 2">Meeting room 2</option>
                                        <option value="Gaming room">Gaming room</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fs-base" for="company">Company size</label>
                                    <input class="form-control form-control-lg" type="number" value="1" required
                                           id="company">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date and time</label>
                                    <div class="position-relative">
                                        <input class="form-control form-control-lg date-picker pe-5" type="text"
                                               placeholder="Choose date/time"
                                               data-datepicker-options='{"enableTime": true, "altInput": true, "altFormat": "F j, Y H:i", "dateFormat": "Y-m-d H:i"}'>
                                        <i class="ai-calendar position-absolute top-50 end-0 translate-middle-y fs-lg text-white opacity-80 me-3"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fs-base" for="email">Email address</label>
                                    <input class="form-control form-control-lg" type="email"
                                           placeholder="johnDoe@example.com" required id="email">
                                </div>
                                <div
                                    class="d-flex flex-column flex-sm-row flex-lg-column flex-xxl-row align-items-center justify-content-center justify-content-lg-start pt-3 pt-xxl-4">
                                    <button
                                        class="btn btn-light w-100 w-sm-auto w-lg-100 w-xxl-auto mb-2 mb-sm-0 mb-lg-2 mb-xxl-0 me-sm-3 me-lg-0 me-xxl-3"
                                        type="submit">Book space now
                                    </button>
                                    <a class="d-flex align-items-center fs-sm fw-semibold text-white text-decoration-none px-3 py-2"
                                       href="tel:+15262200459">
                                        <i class="ai-phone fs-xl me-2"></i>
                                        +1&nbsp;526&nbsp;220&nbsp;0459
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parallax image -->
            <div class="jarallax" data-jarallax data-speed="0.6">
                <div class="jarallax-img"
                     style="background-image: url(/img/landing/coworking-space/parallax-image.jpg);"></div>
                <div class="d-none d-xxl-block" style="height: 830px; margin-top: -470px;"></div>
                <div class="d-none d-xl-block d-xxl-none" style="height: 780px; margin-top: -490px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="height: 700px; margin-top: -560px;"></div>
                <div class="d-none d-sm-block d-lg-none" style="height: 520px; margin-top: -450px;"></div>
                <div class="d-sm-none" style="height: 500px; margin-top: -450px;"></div>
            </div>
        </section>


        <!-- About (Features) -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-xl-5 mx-auto mb-sm-2 mb-md-3 mb-lg-4"
                 style="max-width: 525px;">
                <h2 class="h1">About Around</h2>
                <p class="mb-0">Enim aenean phasellus in hendrerit interdum lorem proin pretium, dictum urna suspendisse
                    quis risus vivamus.</p>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 gy-sm-2 g-md-4">
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-space display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">362 m²</div>
                    </div>
                </div>
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-shower display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">5 showers</div>
                    </div>
                </div>
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-clock display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">24/7 acces</div>
                    </div>
                </div>
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-parking display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">2 parkings</div>
                    </div>
                </div>
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-stairs display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">3 floors</div>
                    </div>
                </div>
                <div class="col card border-0 bg-transparent p-xxl-2">
                    <div class="card-body text-center p-3 p-sm-4">
                        <i class="ai-canteen display-1 fw-normal text-primary mb-3 mb-sm-4"></i>
                        <div class="h2 fw-normal mb-0">2 cafes</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="text-center pb-3 pt-sm-3 pt-md-4 mx-auto mt-xxl-1 mb-3 mb-lg-4" style="max-width: 525px;">
                <h2 class="h1">Our space</h2>
                <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin
                    lectus et massa.</p>
            </div>

            <!-- Navs -->
            <ul class="nav nav-tabs flex-nowrap overflow-auto text-nowrap w-100 mx-auto pb-3 mb-3 mb-lg-4"
                role="tablist" style="max-width: 646px;">
                <li class="nav-item mb-0">
                    <a class="nav-link active" href="#" role="tab">All</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#" role="tab">Open space</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#" role="tab">Lounge zone</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#" role="tab">Kitchen</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#" role="tab">Parking</a>
                </li>
            </ul>

            <!-- Gallery grid -->
            <div class="gallery row g-4 g-sm-3 g-lg-4 pb-2 pb-sm-4 pb-xl-5 mb-lg-2 mb-xl-0 mb-xxl-2">
                <div class="col-sm-5">
                    <a class="d-block gallery-item card-hover zoom-effect"
                       href="/img/landing/coworking-space/gallery/01.jpg">
                        <div
                            class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                            <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                        </div>
                        <div class="zoom-effect-wrapper rounded-5">
                            <img class="zoom-effect-img" src="/img/landing/coworking-space/gallery/th01.jpg"
                                 alt="Open space">
                        </div>
                    </a>
                </div>
                <div class="col-sm-7">
                    <a class="d-block gallery-item card-hover zoom-effect"
                       href="/img/landing/coworking-space/gallery/02.jpg">
                        <div
                            class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                            <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                        </div>
                        <div class="zoom-effect-wrapper rounded-5">
                            <img class="zoom-effect-img" src="/img/landing/coworking-space/gallery/th02.jpg"
                                 alt="Kitchen">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="d-block gallery-item card-hover zoom-effect"
                       href="/img/landing/coworking-space/gallery/03.jpg">
                        <div
                            class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                            <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                        </div>
                        <div class="zoom-effect-wrapper rounded-5">
                            <img class="zoom-effect-img" src="/img/landing/coworking-space/gallery/th03.jpg"
                                 alt="Lounge zone">
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a class="d-block gallery-item card-hover zoom-effect"
                       href="/img/landing/coworking-space/gallery/04.jpg" style="max-width: 458px;">
                        <div
                            class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                            <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                        </div>
                        <div class="zoom-effect-wrapper rounded-5">
                            <img class="zoom-effect-img" src="/img/landing/coworking-space/gallery/th04.jpg"
                                 alt="Open space">
                        </div>
                    </a>
                </div>
                <div class="col-sm-5">
                    <a class="d-block gallery-item card-hover zoom-effect"
                       href="/img/landing/coworking-space/gallery/05.jpg">
                        <div
                            class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                            <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                        </div>
                        <div class="zoom-effect-wrapper rounded-5"><img class="zoom-effect-img"
                                                                        src="/img/landing/coworking-space/gallery/th05.jpg"
                                                                        alt="Cafe"></div>
                    </a>
                </div>
            </div>
        </section>


        <!-- Features (Why choose Around) -->
        <section class="bg-secondary py-5">
            <div class="container py-lg-3 py-xl-4 py-xxl-5">
                <h2 class="h1 text-center pt-1 pt-sm-3 pt-md-4 pb-3 pb-sm-4 pb-lg-5">Why choose Around as a coworking
                    space</h2>
                <div class="row align-items-center pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5" data-aos="fade-up"
                     data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                    <div class="col-md-6 pb-1 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                        <img class="d-block rounded-5 mx-auto" src="/img/landing/coworking-space/features/01.jpg"
                             width="470" alt="Image">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="850"
                         data-aos-offset="200" data-disable-parallax-down="md">
                        <div class="ps-md-4 ps-lg-0">
                            <h3 class="h2 pb-md-2 pb-lg-3">Fixed workplace when buying a monthly pass</h3>
                            <p class="mb-4 pb-md-2 pb-lg-0 mb-lg-5">Morbi et massa fames ac scelerisque sit commodo
                                dignissim aucibus vel quisque proin lectus laoreet adipiscing sollicitudin erat massa
                                tellus lorem.</p>
                            <a class="btn btn-sm btn-primary" href="#">Buy a monthly pass</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5" data-aos="fade-up"
                     data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                    <div class="col-md-6 pb-1 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                        <div class="position-relative overflow-hidden mx-auto" style="max-width: 503px;">
                            <img class="position-relative z-2" src="/img/landing/coworking-space/features/02.png"
                                 alt="Image">
                            <img class="position-absolute top-0 start-0 d-dark-mode-none"
                                 src="/img/landing/coworking-space/features/circles-dark.png" alt="Image"
                                 style="animation: rotate-cw 60s linear infinite;">
                            <img class="position-absolute top-0 start-0 d-none d-dark-mode-block"
                                 src="/img/landing/coworking-space/features/circles-light.png" alt="Image"
                                 style="animation: rotate-cw 60s linear infinite;">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="850"
                         data-aos-offset="200" data-disable-parallax-down="md">
                        <div class="ps-md-4 ps-lg-0">
                            <h3 class="h2 pb-md-2 pb-lg-3">Buy passes for a team of 5 or more members with a <span
                                    class="text-danger">20% discount</span></h3>
                            <p class="mb-0">Scelerisque et massa fames ac morbi sit commodo dignissim aucibus vel
                                quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem aenean
                                phasellus in hendrerit interdum lorem proin pretium, dictum urna suspendisse quis
                                risus.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pb-2 pb-sm-4 pb-lg-5" data-aos="fade-up" data-aos-duration="600"
                     data-aos-offset="300" data-disable-parallax-down="md">
                    <div class="col-md-6 pb-1 pb-sm-3 pb-md-0 mb-4 mb-md-0">
                        <img class="d-block rounded-5 mx-auto" src="/img/landing/coworking-space/features/03.jpg"
                             width="470" alt="Image">
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="850"
                         data-aos-offset="200" data-disable-parallax-down="md">
                        <div class="ps-md-4 ps-lg-0">
                            <h3 class="h2 pb-md-2 pb-lg-3">Private fully equipped halls for online meetings and
                                conferences</h3>
                            <ul class="list-unstyled fs-lg mb-0">
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Faucibus vel quisque lectus laoreet sem
                                </li>
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Egestas in porta netus semper at nunc
                                </li>
                                <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                    <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                    Sed amet est at faucibus dolor sed
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Video showreel -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row text-center text-md-start pb-3 pt-1 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-0 mb-3 mb-lg-4">
                <div class="col-md-6">
                    <h2 class="h1 mb-md-0">Our working atmosphere</h2>
                </div>
                <div class="col-md-6 pt-2">
                    <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim aucibus vel quisque proin
                        lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem aenean.</p>
                </div>
            </div>
            <div class="rounded-5 overflow-hidden">
                <div class="jarallax ratio ratio-16x9 d-flex align-items-center justify-content-center" data-jarallax
                     data-speed="0.6">
                    <div class="jarallax-img"
                         style="background-image: url(/img/landing/coworking-space/parallax-image.jpg);"></div>
                    <div class="w-auto position-relative p-4">
                        <a class="btn btn-icon btn-xl btn-primary rounded-circle stretched-link"
                           href="https://www.youtube.com/watch?v=IxRVa1DbSAg" data-bs-toggle="video"
                           aria-label="Play video">
                            <i class="ai-play-filled"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials + CTA -->
        <section class="container pt-5 mt-1 mt-sm-2 mt-lg-4 mt-xxl-5">
            <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-xxl-2">

                <!-- CTA -->
                <div class="col-md-5 col-xl-4 offset-lg-1 mt-0 mt-md-n5 mb-5 mb-md-0">
                    <div class="pe-md-4">
                        <h2 class="h1 text-center text-md-start mb-4">More than 2,000 clients use Around as a work
                            space</h2>
                        <ul class="list-unstyled d-flex d-md-block flex-wrap justify-content-center pb-2 pb-lg-0 mb-4 mb-lg-5">
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                24/7 access to the workplace
                            </li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Private fully equipped halls
                            </li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Fixed workplace
                            </li>
                        </ul>
                        <div class="text-center text-md-start">
                            <a class="btn btn-lg btn-primary" href="#">Start free 14-day trial</a>
                        </div>
                    </div>
                </div>

                <!-- Testimonials (Carousel) -->
                <div class="col-md-7 col-lg-6">
                    <div class="card border-0 bg-secondary py-1 p-lg-4">
                        <div class="card-body">
                            <div class="swiper" data-swiper-options='
                  {
                    "spaceBetween": 30,
                    "loop": true,
                    "navigation": {
                      "prevEl": "#prev-testimonial",
                      "nextEl": "#next-testimonial"
                    }
                  }
                '>
                                <div class="swiper-wrapper">

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <p class="lead text-dark pb-3 mb-3">"Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Sed et tempus erat, a vulputate dui. Orci varius natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut luctus
                                            molestie massa sit amet dapibus. Cras pulvinar lacinia sollicitudin
                                            malesuada vestibulum."</p>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="/img/avatar/30.jpg" width="60"
                                                 alt="Jenny Wilson">
                                            <div class="ps-3">
                                                <h3 class="h4 mb-0">Jenny Wilson</h3>
                                                <div class="fs-lg text-body-secondary">Head of Marketing</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <p class="lead text-dark pb-3 mb-3">"Turpis augue pulvinar est adipiscing netus.
                                            Arcu at aliquet venenatis elementum. Mi at gravida id nullam imperdiet a
                                            proin dolor. Egestas facilisis venenatis quisque viverra donec et. Augue
                                            convallis eu a volutpat sed ullamcorper. At dictumst sapien, tristique vitae
                                            nec massa."</p>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="/img/avatar/31.jpg" width="60"
                                                 alt="Esther Howard">
                                            <div class="ps-3">
                                                <h3 class="h4 mb-0">Esther Howard</h3>
                                                <div class="fs-lg text-body-secondary">CEO, Co-Founder</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <p class="lead text-dark pb-3 mb-3">"Cursus fames sollicitudin nunc eget sceler
                                            tortor. Sem amet, velit posuere ipsum id. Mi feugiat at vulputate vel
                                            pellentesque proin viverra. Massa, tellus orci, aenean nulla leo maecenas
                                            sed. Magna at aliquam dictum velit dolor phasellus donec et mi. Aenean
                                            adipiscing amet mauris."</p>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="/img/avatar/32.jpg" width="60"
                                                 alt="Nick Wenirten">
                                            <div class="ps-3">
                                                <h3 class="h4 mb-0">Nick Wenirten</h3>
                                                <div class="fs-lg text-body-secondary">Web Developer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider control buttons (Prev / Next) -->
                    <div class="d-flex justify-content-center justify-content-md-start pt-4">
                        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button"
                                id="prev-testimonial" aria-label="Prev">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle" type="button"
                                id="next-testimonial" aria-label="Next">
                            <i class="ai-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-xl-5 mb-3 mb-lg-4">Choose a convenient plan</h2>

            <!-- Plans -->
            <div class="row row-cols-3 flex-nowrap pb-3 overflow-auto">

                <!-- Plan -->
                <div class="col" style="min-width: 19rem;">
                    <div class="card h-100 py-lg-4">
                        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                            <h3>Light</h3>
                            <div class="display-2 text-primary">$8</div>
                            <div class="mb-4">per day</div>
                            <p class="mb-4 pb-4">Phasellus in hendrerit interdum lorem proin pretium dictum urna</p>
                            <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                        </div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col" style="min-width: 19rem;">
                    <div class="card border-primary bg-primary h-100 py-lg-4">
                        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                            <h3 class="text-light">Pro</h3>
                            <div class="display-2 text-light">$97</div>
                            <div class="text-light opacity-70 mb-4">per month</div>
                            <p class="text-light opacity-70 mb-4 pb-4">Morbi et massa fames ac scelerisque sit commodo
                                dignissim aucibus</p>
                            <button class="btn btn-light w-100" type="button">Get this plan now</button>
                        </div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col" style="min-width: 19rem;">
                    <div class="card h-100 py-lg-4">
                        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                            <h3>Medium</h3>
                            <div class="display-2 text-primary">$36</div>
                            <div class="mb-4">per week</div>
                            <p class="mb-4 pb-4">Enim aenean phasellus in hendrerit interdum lorem proin pretium</p>
                            <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Address (Map) -->
        <section class="container pt-5 mt-sm-2 mt-md-3 mt-lg-4 mt-xxl-5 mb-n4 mb-md-n2 mb-lg-0">

            <!-- Map for screens < 992px -->
            <div class="d-lg-none rounded-5 overflow-hidden">
                <div class="interactive-map" data-map-options='{
            "center": [51.5074, 0.29],
            "zoom": 10,
            "scrollWheelZoom": false,
            "markers": [
              {
                "position": [51.59, 0.3338],
                "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in London</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>Lorem ipsum dolor sit amet elit.</p></div>"
              },
              {
                "position": [51.4074, 0.1838],
                "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in London</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>Lorem ipsum dolor sit amet elit.</p></div>"
              }
            ]
          }' style="height: 350px;"></div>
            </div>
            <div class="position-relative overflow-hidden rounded-5 px-lg-5 mt-lg-3 mt-xl-5">
                <div class="d-none d-xxl-block" style="height: 160px;"></div>
                <div class="d-none d-xl-block d-xxl-none" style="height: 130px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="height: 100px;"></div>
                <div class="position-relative z-5 ms-lg-5" style="max-width: 530px;">
                    <div class="card border-0">
                        <div class="card-body">
                            <h2 class="h4 mb-sm-4">Around Space</h2>
                            <div class="d-sm-flex mb-3">
                                <div class="mb-3 mb-sm-0 me-sm-4">
                                    <p class="mb-0">5211 Valley Apt. 667 Victoria Hill Rd., London</p>
                                    <p class="mb-0">+1 526 220 0459</p>
                                </div>
                                <div class="d-none d-sm-block border-end"></div>
                                <div class="ms-sm-4">
                                    <p class="mb-0">5217 Apartment. 705 Childerditch Ln., London</p>
                                    <p class="mb-0">+1 526 220 5439</p>
                                </div>
                            </div>
                            <a href="milto:email@xample.com">email@xample.com</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xxl-block" style="height: 160px;"></div>
                <div class="d-none d-xl-block d-xxl-none" style="height: 130px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="height: 100px;"></div>

                <!-- Map for screens > 992px -->
                <div class="d-none d-lg-block interactive-map position-absolute z-1 top-0 start-0 w-100 h-100"
                     data-map-options='{
            "center": [51.5074, -0.1278],
            "zoom": 10,
            "scrollWheelZoom": false,
            "markers": [
              {
                "position": [51.5900, 0.3338],
                "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in London</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>5217 Apartment. 705 Childerditch Ln.</p></div>"
              },
              {
                "position": [51.4074, 0.1838],
                "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in London</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>5211 Valley Apt. 667 Victoria Hill Rd.</p></div>"
              }
            ]
          }'></div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container pt-lg-3 mt-xl-3">
            <div class="border-bottom text-center pb-4">
                <ul class="nav justify-content-center py-1 pb-sm-2">
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between pt-4 mt-2 mt-sm-0">
                <div class="d-flex justify-content-center order-sm-2 mb-4 mb-sm-0">
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
                <p class="nav fs-sm order-sm-1 text-center mb-0">
                    <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                    <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank"
                       rel="noopener">Stackbros</a>
                </p>
            </div>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
