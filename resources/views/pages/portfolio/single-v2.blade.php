@extends('layouts.base', ['title' => 'Around | Single Project v.2'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <section class="position-relative pt-5 mb-5">
        <div class="bg-secondary position-absolute top-0 end-0 w-50 h-100 d-none d-lg-block"></div>
        <div class="bg-secondary position-absolute top-0 end-0 w-100 h-100 d-lg-none"></div>
        <div class="container position-relative z-2 py-5 pb-lg-0">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="pt-lg-2 pb-1 breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('third', ['pages', 'portfolio', 'grid-v2'])}}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single project v.2</li>
                </ol>
            </nav>

            <div class="d-lg-flex align-items-center pt-3 pb-xxl-5">
                <img class="d-block order-lg-2 me-auto me-lg-0 ms-auto" src="/img/portfolio/single/v2/01.png" width="480" alt="Image">
                <div class="order-lg-1 text-center text-lg-start pe-lg-4 py-4 py-md-5">
                    <h1 class="display-2 text-uppercase pb-3 pb-lg-4">Perfect Instagram shots and stories</h1>
                    <p class="fs-lg mx-auto mx-lg-0 mb-0" style="max-width: 530px;">Ac facilisis erosers sem in faucibus aliquet venenatis amet mentum nisi mauris consectres sem malesuada viverra a non sapien odio id risus volutpat at massa tellus.</p>
                </div>
            </div>

            <!-- Social links -->
            <ul class="nav justify-content-center justify-content-lg-start mx-n2 pt-lg-5 mb-0">
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
    </section>


    <!-- Project showcase -->
    <section class="container pt-lg-2 pt-xl-4 pt-xxl-5">
        <div class="row py-sm-3 py-md-4 py-lg-5">

            <!-- Sticky sidebar with brief -->
            <aside class="col-md-3 col-lg-2" style="margin-top: -125px;">
                <div class="d-flex d-md-block flex-wrap position-sticky top-0" style="padding-top: 130px;">
                    <div class="pb-3 mb-2 mb-lg-4 me-5 me-md-0">
                        <h2 class="fs-base fw-normal text-body-secondary mb-2">Company</h2>
                        <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                            <li class="d-block py-1">Vintage</li>
                            <li class="d-block py-1">12-18 employees</li>
                            <li class="d-block py-1">Dublin, Ireland</li>
                            <li class="d-block py-1"><a class="text-dark" href="#">Visit website</a></li>
                        </ul>
                    </div>
                    <div class="pb-3 mb-2 mb-lg-4 me-5 me-md-0">
                        <h2 class="fs-base fw-normal text-body-secondary mb-2">Indusrty</h2>
                        <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                            <li class="d-block py-1">E-commerce</li>
                        </ul>
                    </div>
                    <div class="pb-3 mb-2 mb-lg-4 me-5 me-md-0">
                        <h2 class="fs-base fw-normal text-body-secondary mb-2">Services</h2>
                        <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                            <li class="d-block py-1">Email marketing</li>
                            <li class="d-block py-1">Content marketing</li>
                            <li class="d-block py-1">Social networks</li>
                        </ul>
                    </div>
                    <div class="pb-3 mb-2 mb-lg-4">
                        <h2 class="fs-base fw-normal text-body-secondary mb-2">Time spent</h2>
                        <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                            <li class="d-block py-1">2021, 3 months</li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Description -->
            <div class="col-md-9 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">
                    <div class="border-bottom pb-3 pb-sm-4 pb-lg-5 mb-4">
                        <p class="text-dark lead mb-md-2 mb-lg-3 mb-xl-4">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et scelerisque sit commodo.</p>
                    </div>
                    <h2 class="h1 pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-2">About the client</h2>
                    <p class="fs-lg">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur. Vel magna sit aliquet viverra morbi massa mattis urna, feugiat egestas tincidunt ipsum diam quam massa amet odio nisi duis dolor. Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
                    <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The challenge</h2>
                    <p class="fs-lg">Sit diam nunc, et pellentesque ornare elit, ut. Interdum feugiat id ut egestas tellus congue faucibus habitant semper nunc et etiam ultrices id nisi urna amet, odio mauris risus nam aliquam pharetra amet nunc, enim aliquet egestas purus penatibus ac, elit ultricies proin adipiscing suspendisse sit proin.</p>
                    <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The solution</h2>
                    <p class="fs-lg mb-0">Est enim mollis morbi vulputate egestas commodo vitae quis sed sit ultrices nulla habitant sit faucibus orci. Eu etiam ipsum porttitor morbi urna eget aliquet aenean tristique amet tempus, vestibulum vel montes, pellentesque sit. Cursus nulla viverra elit accumsan, vitae. Phasellus sed hac at pharetra urna. Imperdiet egestas ac eget porttitor ultrices morbi ornare. Libero, lectus eget adipiscing odio ornare non maecenas non vitae libero, at feugiat urna, risus augue fringilla. Venenatis quam.</p>
                </div>
            </div>
        </div>

        <!-- Images -->
        <div class="row py-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="col-sm-7 mb-4 mb-sm-0">
                <div class="position-relative mb-4">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: #2663f2;" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="250"></div>
                    <img class="position-relative z-2" src="/img/portfolio/single/v2/02.png" alt="Image" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
                </div>
                <div class="position-relative">
                    <div class="bg-black position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="250"></div>
                    <img class="position-relative z-2" src="/img/portfolio/single/v2/04.png" alt="Image" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="max-height: 588px; background-color: #216d2a;" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="250"></div>
                    <img class="position-relative z-2" src="/img/portfolio/single/v2/03.png" alt="Image" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="row pt-sm-3 pt-md-4 pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="col-md-7 col-xl-6 mb-4 mb-md-0">
                <p class="text-dark lead mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et scelerisque sit commodo.</p>
            </div>
            <div class="col-md-5 offset-xl-1">
                <div class="row row-cols-2 gx-3 gx-sm-4">
                    <div class="col">
                        <div class="h2 display-1 mb-0">30+</div>
                        <p class="fs-sm mb-0">Different templates</p>
                    </div>
                    <div class="col">
                        <div class="h2 display-1 mb-0">150</div>
                        <p class="fs-sm mb-0">Happy clients all over the world</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Images -->
        <div class="position-relative w-100 mx-auto pb-1 pb-sm-3 pb-md-4" style="max-width: 1043px;">
            <img class="d-block position-relative z-5" src="/img/portfolio/single/v2/05.png" alt="Image" data-aos="fade-down-right" data-aos-duration="500" data-aos-offset="250">
            <img class="d-block position-absolute top-0 start-0 z-2" src="/img/portfolio/single/v2/06.png" alt="Image" data-aos="zoom-in" data-aos-duration="500" data-aos-offset="250">
            <img class="d-block position-absolute top-0 start-0 z-1" src="/img/portfolio/single/v2/07.png" alt="Image" data-aos="fade-down" data-aos-duration="500" data-aos-offset="250">
            <img class="d-block position-absolute top-0 start-0" src="/img/portfolio/single/v2/08.png" alt="Image" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250">
        </div>

        <!-- Images -->
        <div class="row py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="col-sm-5 mb-4 mb-sm-0">
                <div class="position-relative">
                    <div class="bg-secondary position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="250"></div>
                    <img class="position-relative z-2" src="/img/portfolio/single/v2/09.png" alt="Image" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="position-relative">
                    <div class="bg-secondary position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="700" data-aos-offset="250"></div>
                    <img class="position-relative z-2" src="/img/portfolio/single/v2/10.png" alt="Image" data-aos="zoom-in" data-aos-duration="400" data-aos-offset="250">
                </div>
            </div>
        </div>

        <!-- Results -->
        <div class="row pt-1 pt-sm-3 pt-md-4 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="col-md-11 col-lg-9 col-xl-8 pb-1 pb-sm-3 pb-md-4">
                <h2 class="h1 pb-sm-2 pb-lg-3">Results</h2>
                <p class="fs-lg mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
                <div class="row row-cols-3 pt-2 pt-sm-3 pt-md-4 pt-xl-5 my-3">
                    <div class="col">
                        <div class="h2 display-1 mb-0">30+</div>
                        <p class="fs-sm mb-0">Different templates</p>
                    </div>
                    <div class="col">
                        <div class="h2 display-1 mb-0">160%</div>
                        <p class="fs-sm mb-0">Revenue increase</p>
                    </div>
                    <div class="col">
                        <div class="h2 display-1 mb-0">150</div>
                        <p class="fs-sm mb-0">Happy clients all over the world</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Parallax background image -->
    <section class="jarallax" data-jarallax data-speed="0.6">
        <div class="ratio ratio-16x9"></div>
        <div class="jarallax-img" style="background-image: url(/img/portfolio/single/v2/parallax.jpg);"></div>
    </section>


    <!-- Testimonials (Carousel) -->
    <section class="container position-relative z-2 py-5 mt-n1 mt-sm-0 mb-1 my-md-3 my-lg-3 my-xl-4 my-xxl-5">
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
                            <h2 class="mb-lg-4">Thanks to your talented team for the banding we dreamed about</h2>
                            <p class="lead mb-0">Leo vitae sem eget eget at in vivamus placerat sodales tristique risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu dignissim etiamier turpis tincidunt eget placerat feugiat senectusic quisque faucibus placerat sodales vitae tempor morbi tellus pulvinar tristique in turpis. </p>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-binded="#testimonial-3">
                            <div class="d-flex d-md-none pt-3 mb-3"><i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
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

                <!-- Swiper controls (Prev / Next)-->
                <div class="d-flex align-items-center pt-4 mt-3">
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


    <!-- Other projects -->
    <section class="container pb-5 mb-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <h2 class="h1 pb-3 pb-lg-4">Next projects</h2>
        <div class="row row-cols-1 row-cols-sm-2 align-items-end mb-2 pb-md-4">
            <div class="col">
                <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 550px;">
                    <div class="zoom-effect-wrapper">
                        <div class="zoom-effect-img">
                            <img src="/img/portfolio/grid/11.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="pt-4 mt-lg-2">
                        <h2 class="h4 mb-2">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Doe design</a>
                        </h2>
                        <div class="d-flex justify-content-between fs-lg text-body-secondary">
                            <span>Branding, Stationery</span>
                            <span>2021</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="zoom-effect position-relative border-bottom ms-auto pb-3" style="max-width: 605px;">
                    <div class="zoom-effect-wrapper">
                        <div class="zoom-effect-img">
                            <img src="/img/portfolio/grid/10.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="pt-4 mt-lg-2">
                        <h2 class="h4 mb-2">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">D.G.Vent</a>
                        </h2>
                        <div class="d-flex justify-content-between fs-lg text-body-secondary">
                            <span>Stationery design</span>
                            <span>2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer bg-dark position-relative py-4 py-md-5">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .03);"></div>
    <div class="container position-relative z-2 pt-4 pt-md-2 pt-xl-4 pt-xxl-5" data-bs-theme="dark">
        <div class="row py-md-3 mb-4 mb-md-5">
            <div class="col-md-7 col-lg-6 col-xxl-5 mb-sm-4 mb-md-0">
                <h2 class="display-4 mb-4 mb-md-5">Let's start building brand together</h2>
                <div class="d-sm-flex align-items-center">
                    <a class="btn btn-lg btn-primary rounded-0 me-sm-3 me-lg-4" href="#">Let's work together</a>
                    <p class="text-body fs-sm py-3 py-sm-0 ps-sm-2 mb-0">Managers will contact you to discuss the project and select the best team</p>
                </div>
            </div>
            <div class="col-md-5 offset-lg-1 offset-xxl-2 d-flex flex-column">
                <div class="nav mx-n2 mx-lg-n4 mb-2 mb-sm-3">
                    <a class="nav-link text-primary px-2 px-lg-4" href="mailto:example@email.com">example@email.com</a>
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