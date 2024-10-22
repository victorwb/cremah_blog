@extends('layouts.base', ['title' => 'Around | Services v.3'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="jarallax bg-dark py-5" data-jarallax data-speed="0.6" data-bs-theme="dark">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-60"></div>
        <div class="jarallax-img" style="background-image: url(/img/services/v3/hero-bg.jpg);"></div>
        <div class="container position-relative z-2 pt-5 pb-md-2 pb-lg-3 pb-xl-4 pb-xxl-5">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="pt-lg-3 mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services v.3</li>
                </ol>
            </nav>

            <!-- Page title -->
            <div class="d-none d-xxl-block" style="height: 170px;"></div>
            <div class="d-none d-lg-block d-xxl-none" style="height: 120px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
            <div class="d-md-none" style="height: 40px;"></div>
            <h1 class="display-2 mb-4">Our services</h1>
            <p class="text-body mb-0" style="max-width: 480px;">Web studio Around is a team that creates effective websites and applications that will help you grow your business.</p>

            <!-- Features -->
            <div class="d-none d-xxl-block" style="height: 220px;"></div>
            <div class="d-none d-lg-block d-xxl-none" style="height: 160px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 100px;"></div>
            <div class="d-md-none" style="height: 50px;"></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-1 pb-md-3">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="/img/services/v3/icons/time-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Individual approach</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="/img/services/v3/icons/cog-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Integrated analytics</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="/img/services/v3/icons/monitor-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Step by step work</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="/img/services/v3/icons/size-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Full range of services</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section class="container py-4 py-sm-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 offset-xl-1 order-md-2 pb-2 mb-4 mb-md-0">
                <img class="rounded-5" src="/img/services/v3/01.jpg" alt="Image">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1">
                <div class="pe-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Web &amp; App development</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean auctor cursus tortor non fermentum. Fusce ornare pulvinar nibh, sed facilisis eros congue pretium. Suspendisse et fermentum massa.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/monitor-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/monitor-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Custom websites</h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/cloud-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/cloud-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Cloud computing</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis pellentesque facilisi commo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 pb-2 mb-4 mb-md-0"><img class="rounded-5" src="/img/services/v3/02.jpg" alt="Image"></div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Mobile app design</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">More erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor. Adipiscing posuere dui, amet, augue nisl dictum justo, enim sed neque congue non quam ultrices interdum vitae.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3"><img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/cog-dark.svg" width="28" alt="Icon"><img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/cog-light.svg" width="28" alt="Icon"></div>
                            <h3 class="h5 mb-2">For iOS &amp; Android</h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3"><img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/time-dark.svg" width="28" alt="Icon"><img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/time-light.svg" width="28" alt="Icon"></div>
                            <h3 class="h5 mb-2">Speed optimization</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis pellentesque facilisi commo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 offset-xl-1 order-md-2 pb-2 mb-4 mb-md-0">
                <img class="rounded-5" src="/img/services/v3/03.jpg" alt="Image">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1">
                <div class="pe-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">UI &amp; UX design</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor do amet sint velit officia amet minim mollit non deserunt ullamco est sit aliqua dolor malesuada fames ac ante ipsum.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/monitor-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/monitor-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">All business niches </h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="/img/services/v3/icons/size-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="/img/services/v3/icons/size-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Customer focus</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis pellentesque facilisi commo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Partners -->
    <section class="container pt-2 pt-sm-0">
        <h2 class="h1 text-center">We partner with more than 60 brands</h2>
        <p class="text-center pb-2 pb-sm-3">Clients who have become our friends for many years</p>
        <div class="row row-cols-3 row-cols-md-4 g-2 g-md-4">
            <div class="col">
                <img class="d-block mx-auto" src="/img/brands/auchan.svg" width="220" alt="Auchan">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="/img/brands/suzuki.svg" width="220" alt="Suzuki">
            </div>
            <div class="col">
                <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/champion-dark.svg" width="220" alt="Champion">
                <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/champion-light.svg" width="220" alt="Champion">
            </div>
            <div class="col">
                <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/starcraft-dark.svg" width="220" alt="Starcraft">
                <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/starcraft-light.svg" width="220" alt="Starcraft">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="/img/brands/klinos.svg" width="220" alt="Klinos">
            </div>
            <div class="col">
                <img class="d-block d-dark-mode-none mx-auto" src="/img/brands/puma-dark.svg" width="220" alt="Puma">
                <img class="d-none d-dark-mode-block mx-auto" src="/img/brands/puma-light.svg" width="220" alt="Puma">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="/img/brands/airbnb.svg" width="220" alt="Airbnb">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="/img/brands/philips.svg" width="220" alt="Philips">
            </div>
        </div>
    </section>


    <!-- Skills (Carousel) -->
    <section class="py-5 my-2 my-lg-3 my-xl-4 my-xxl-5">
        <div class="container d-flex align-items-center justify-content-between pt-sm-3 pt-md-4 pt-xl-5 pb-4 mb-sm-2 mb-md-3">
            <h2 class="h1 mb-0">Our skills</h2>

            <!-- Slaider control button (Prev / Next) -->
            <div class="d-flex gap-3">
                <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle" type="button" id="prev-skill" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle" type="button" id="next-skill" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper slider -->
        <div class="container-start pb-2 pb-sm-3 pb-md-4 pb-lg-5">
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
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                        <img src="/img/landing/web-studio/skills/figma.svg" width="72" alt="Figma">
                                    </div>
                                </div>
                                <div class="card-flip-back p-0 bg-transparent">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                        <img src="/img/landing/web-studio/skills/figma.svg" width="52" alt="Figma">
                                        <p class="fs-sm pt-3 mb-0">Figma is convenient online service for interface development and prototyping with the ability to work together in real time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 bg-secondary h-100">
                            <div class="card-body mx-auto" style="max-width: 416px;">
                                <p class="fs-lg mb-1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere finibus dui, eget scelerisque ipsum suscipit nec. Praesent nec quam in ipsum ultricies ultricies et sagittis dui. Sed condimentum felis at pretium."</p>
                                <img src="/img/brands/foster.svg" width="150" alt="Foster">
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                            <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                <div class="card-flip-front p-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                        <img src="/img/landing/web-studio/skills/css3.svg" width="72" alt="CSS3">
                                    </div>
                                </div>
                                <div class="card-flip-back p-0 bg-transparent">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                        <img src="/img/landing/web-studio/skills/css3.svg" width="52" alt="CSS3">
                                        <p class="fs-sm pt-3 mb-0">Cascading Style Sheets Level 3 is the iteration of the CSS standard used in the styling and formatting of Web pages.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 bg-secondary h-100">
                            <div class="card-body mx-auto" style="max-width: 416px;">
                                <p class="fs-lg mb-1">"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tincidunt imperdiet hendrerit. Fusce tortor turpis, facilisis ac efficitur eget, aliquet ut odio. Curabitur in vestibulum tellus."</p>
                                <img class="d-dark-mode-none" src="/img/brands/champion-dark.svg" width="150" alt="Champion">
                                <img class="d-none d-dark-mode-inline-block" src="/img/brands/champion-light.svg" width="150" alt="Champion">
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                            <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                <div class="card-flip-front p-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                                        <img src="/img/landing/web-studio/skills/bootstrap.svg" width="72" alt="Bootstrap">
                                    </div>
                                </div>
                                <div class="card-flip-back p-0 bg-transparent">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                        <img src="/img/landing/web-studio/skills/bootstrap.svg" width="52" alt="Bootstrap">
                                        <p class="fs-sm pt-3 mb-0">Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 bg-secondary h-100">
                            <div class="card-body mx-auto" style="max-width: 416px;">
                                <p class="fs-lg mb-1">"Nulla facilisi. Curabitur dictum sodales aliquam. Etiam tortor augue, ultrices in efficitur sit amet, luctus dapibus magna. Vivamus eu lacus elementum, ultrices massa vitae, elementum lorem. Proin feugiat egestas dolor."</p>
                                <img src="/img/brands/alpine.svg" width="150" alt="Alpine">
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card card-flip card-hover border-0 w-sm-auto h-100 bg-secondary rounded-5">
                            <div class="card-flip-inner mx-auto" style="max-width: 306px;">
                                <div class="card-flip-front p-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100"><img src="/img/landing/web-studio/skills/python.svg" width="72" alt="Python"></div>
                                </div>
                                <div class="card-flip-back p-0 bg-transparent">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100"><img src="/img/landing/web-studio/skills/python.svg" width="52" alt="Python">
                                        <p class="fs-sm pt-3 mb-0">Python is a programming language that lets you work quickly and integrate systems more effectively.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide w-sm-auto h-auto">
                        <div class="card border-0 bg-secondary h-100">
                            <div class="card-body mx-auto" style="max-width: 416px;">
                                <p class="fs-lg mb-1">"Suspendisse potenti. Nulla vel varius urna. Donec at libero ipsum. Nullam scelerisque tempus malesuada. Donec vehicula odio est, at faucibus purus sollicitudin ut. Fusce mollis ultrices ex sed pellentesque velit euismod."</p>
                                <img class="d-dark-mode-none" src="/img/brands/deloitte-dark.svg" width="150" alt="Deloitte">
                                <img class="d-none d-dark-mode-inline-block" src="/img/brands/deloitte-light.svg" width="150" alt="Deloitte">
                            </div>
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
                    <a class="btn btn-lg btn-primary me-sm-3 me-lg-4" href="#">Let's work together</a>
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

@section('script-bottom')

@endsection