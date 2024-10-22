@extends('layouts.base', ['title' => 'Around | Services v.2'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="container pt-5 pb-xxl-3 mt-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services v.2</li>
            </ol>
        </nav>

        <!-- Grid -->
        <div class="row">
            <div class="col-lg-4 pb-3 mb-3">
                <h2 class="h1">Our services</h2>
                <p class="pe-5 mb-0">With the support of our result driven team you can solve many challenges.</p>
            </div>
            <div class="col-lg-8">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col">

                        <!-- Item -->
                        <div class="card border-0 bg-secondary rounded-5 mb-4">
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
                                <h3 class="h4">Development</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget molestie massa. Donec egestas nulla pariatur.</p>
                            </div>
                            <div class="card-footer border-0 pt-3 mb-3">
                                <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                    <i class="ai-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="card border-0 bg-secondary rounded-5">
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
                                <p class="mb-0">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor.</p>
                            </div>
                            <div class="card-footer border-0 pt-3 mb-3">
                                <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                    <i class="ai-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col">

                        <!-- Item -->
                        <div class="card border-0 bg-secondary rounded-5 mb-4">
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
                                <h3 class="h4">Design and branding</h3>
                                <p class="mb-0">More erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor non aute irure dolor in reprehenderit in posuere dui amet augue nisl dictum.</p>
                            </div>
                            <div class="card-footer border-0 pt-3 mb-3">
                                <a class="btn btn-icon btn-lg btn-outline-primary rounded-circle stretched-link" href="#" aria-label="Learn more">
                                    <i class="ai-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="card border-0 bg-secondary rounded-5">
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
                                <h3 class="h4">Consulting</h3>
                                <p class="mb-0">Ut eu amet ac blandit nisl malesuada lectus viverra arcu in rhoncus egestas lorem consequat sollicitudin risus, in pellentesque tellus tincidunt purus viverra dignissim.</p>
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
        </div>
    </section>


    <!-- Features -->
    <section class="container py-4 pt-sm-5 pb-md-5 my-2 my-lg-3 my-xxl-4">

        <!-- Item -->
        <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0"><img class="d-block rounded-5" src="/img/landing/corporate/features/01.jpg" alt="Image"></div>
            <div class="col-md-6 col-lg-5 order-md-1">
                <div class="pe-md-4 pe-lg-0">
                    <h2 class="h1 pb-sm-2 pb-lg-3">Let's do business together</h2>
                    <p class="fs-xl">We partner with more than 60 brands. Clients who have become our friends for many years.</p>
                    <div class="border-dashed mb-4 mt-5"></div>
                    <div class="row row-cols-3 pt-2 g-4">
                        <div class="col">
                            <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/starcraft-dark.svg" width="160" alt="Starcraft">
                            <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/starcraft-light.svg" width="160" alt="Starcraft">
                        </div>
                        <div class="col">
                            <img class="d-block mx-auto" src="/img/brands/klinos.svg" width="160" alt="Klinos">
                        </div>
                        <div class="col">
                            <img class="d-block mx-auto" src="/img/brands/auchan.svg" width="160" alt="Auchan">
                        </div>
                        <div class="col">
                            <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/champion-dark.svg" width="160" alt="Champion">
                            <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/champion-light.svg" width="160" alt="Champion">
                        </div>
                        <div class="col">
                            <img class="d-block mx-auto" src="/img/brands/suzuki.svg" width="160" alt="Suzuki">
                        </div>
                        <div class="col">
                            <img class="d-block mx-auto" src="/img/brands/philips.svg" width="160" alt="Philips">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-3 py-sm-4 py-lg-5 mb-3 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0"><img class="d-block rounded-5" src="/img/landing/corporate/features/02.jpg" alt="Image"></div>
            <div class="col-md-6 col-lg-5 order-md-1">
                <div class="pe-md-4 pe-lg-0">
                    <h2 class="h1 pb-3 mb-2 mb-lg-3 mb-xl-4">Our professional approach to your business</h2>
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col">
                            <div class="text-body-secondary mb-2">01</div>
                            <h3 class="h5">Individual approach</h3>
                            <p class="mb-1">Hac erat leo proin odio est sed sit in felis facilisi integer sed congue neque turpis dictumst.</p>
                        </div>
                        <div class="col">
                            <div class="text-body-secondary mb-2">02</div>
                            <h3 class="h5">Integrated analytics</h3>
                            <p class="mb-1">Find aute irure dolor in enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque.</p>
                        </div>
                        <div class="col">
                            <div class="text-body-secondary mb-2">03</div>
                            <h3 class="h5">Step by step work</h3>
                            <p class="mb-1">More erat leo proin odio est sed sit felis facilisi integer sed sit congue neque turpis dictumst.</p>
                        </div>
                        <div class="col">
                            <div class="text-body-secondary mb-2">04</div>
                            <h3 class="h5">Full range of services</h3>
                            <p class="mb-1">Adipiscing posuere dui, amet, augue nisl dictum justo, enim sed neque congue non quam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-3 py-sm-4 py-lg-5 my-sm-2 my-md-3 my-lg-0 my-xl-2 my-xxl-4">
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0"><img class="d-block rounded-5" src="/img/landing/corporate/features/03.jpg" alt="Image"></div>
            <div class="col-md-6 col-lg-5 order-md-1">
                <div class="pe-md-4 pe-lg-0">
                    <h2 class="h1 pb-sm-2 pb-lg-3">Full range of business and consulting services</h2>
                    <p class="fs-xl mb-lg-4">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euvert fugiat neque congue.</p>
                    <ul class="list-unstyled pb-3 mb-3 mb-lg-4">
                        <li class="d-flex pt-1 mt-2 mx-2 mx-md-0"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Forecasting and recommendations</li>
                        <li class="d-flex pt-1 mt-2 mx-2 mx-md-0"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Identification of patterns, analysis</li>
                        <li class="d-flex pt-1 mt-2 mx-2 mx-md-0"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>Segmentation by various methods</li>
                    </ul><a class="btn btn-primary" href="#">Book a free consultation</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="container pt-xxl-2 pb-5 mb-lg-4 mb-xxl-5">
        <div class="row pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-md-2">
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
                            <p class="lead mb-0">Suspendisse mauris elit, pellentesque nec purus sed, finibus finibus ipsum. Proin posuere, metus sed porttitor pellentesque, ante magna tincidunt mi, nec fermentum dui ligula vel massa. Praesent ultrices iaculis arcu iaculis ultrices. Maecenas vitae nulla odio. In laoreet, lectus in tempus ultricies. </p>
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
                            <h2 class="mb-lg-4">Exceptional work, delivery and flexibility. An excellent result.</h2>
                            <p class="lead mb-0">Leo vitae sem eget eget at in vivamus placerat sodales tristique risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu dignissim etiamier turpis tincidunt eget placerat feugiat senectusic quisque faucibus placerat sodales vitae tempor morbi tellus pulvinar tristique in turpis. </p>
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
                            <h2 class="mb-lg-4">Thanks to you, we have created a unique branding that is our pride!</h2>
                            <p class="lead mb-0">Duis sapien velit, rutrum ac rutrum dapibus, auctor ut lacus. Aenean sit amet erat augue. Aenean finibus, nibh sed malesuada maximus, nisi tellus iaculis quam, eget egestas mi felis eu urna. Quisque id nisl commodo, egestas eros ac, cursus odio. Ut nec rutrum magna, vel tempor erat. Vivamus nec tempus purus. </p>
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

                <!-- Swiper control buttons (Prev / Next) -->
                <div class="d-flex align-items-center pb-2 pb-md-0 pt-4 mt-3">
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-testimonial" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <div class="testimonials-count fw-medium flex-shrink-0 text-center" style="width: 2.5rem;"></div>
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button" id="next-testimonial" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact CTA -->
    <section class="position-relative mt-n5 mt-lg-0">
        <div class="bg-secondary position-absolute bottom-0 start-0 w-100" style="height: calc(100% - 3rem);"></div>
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-lg-6 py-5 mb-sm-2 mb-md-3 mb-lg-5 mt-3 mt-sm-4 mt-md-5">
                    <h2 class="h1 text-center text-lg-start pt-3 mt-3 mb-4">Become part <br class="d-none d-lg-inline">of our team</h2>
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
                    <div class="text-center text-lg-start pt-4"><a class="btn btn-outline-dark" href="#">Apply for a job</a></div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary d-flex flex-column align-items-center justify-content-center position-relative h-100 rounded-5 rounded-bottom-0 p-5">
                        <div class="position-relative z-2 py-sm-3 py-md-4" style="max-width: 360px;" data-bs-theme="dark">
                            <h2 class="h1">Ready to discuss your project?</h2>
                            <p class="text-body mb-0">We are a team that creates business strategies for B2B and B2C companies.</p>
                            <div class="d-flex flex-column flex-sm-row align-items-center pt-3 mt-3 mt-lg-4">
                                <a class="btn btn-light w-100 w-sm-auto me-sm-4 mb-2 mb-sm-0" href="{{ route('third', ['pages', 'contacts', 'contact-v1'])}}">Contact us</a>
                                <a class="d-inline-block text-white fw-medium p-2" href="mailto:email@example.com">email@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

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
            <div class="d-flex justify-content-center justify-content-md-start gap-3">
                <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#" aria-label="Instagram">
                    <i class="ai-instagram"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#" aria-label="Facebook">
                    <i class="ai-facebook"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-x rounded-circle" href="#" aria-label="X">
                    <i class="ai-x"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#" aria-label="LinkedIn">
                    <i class="ai-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="d-md-flex align-items-center justify-content-between text-center text-md-start">
            <a class="nav-link d-inline-block text-body-secondary fs-sm text-decoration-none order-md-2 py-1 px-0 mb-3 mb-md-0" href="#">Privacy policy</a>
            <p class="nav fs-sm order-md-1 mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
            </p>
        </div>
    </div>
</footer>

@endsection

@section('script-bottom')

@endsection