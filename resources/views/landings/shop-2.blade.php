@extends('layouts.base', ['title' => 'Around | Shop Homepage v.2'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">


        @include('layouts.partials/navbar-shop',['navClass' => 'bg-light'])


        <!-- Hero -->
        <section class="position-relative mt-5">
            <div class="position-absolute w-100 h-100 top-0 start-0 bg-size-cover bg-position-center mt-4"
                 style="background-image: url(/img/landing/shop-2/hero-cta.jpg);"></div>
            <div class="container position-relative z-2 text-center pt-2 pt-sm-4 pt-lg-5">
                <h1 class="display-1 text-white pt-5 mt-3">All you need is <span
                        class="d-inline-flex align-items-center">macar<img class="mx-1"
                                                                           src="/img/landing/shop-2/hero-img.png"
                                                                           width="85" alt="Macaron">n</span></h1>
                <p class="text-white fs-xl opacity-90 mx-auto pb-3 pb-md-0 mb-4 mb-md-5" style="max-width: 640px;">Every
                    macaron is a little delight waiting to brighten your day. Dive into macarons world and let your
                    taste buds dance with delight.</p>
                <a class="btn btn-light rounded-pill" href="#">Go to Shop</a>
            </div>
            <div class="d-none d-lg-block" style="height: 360px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 260px;"></div>
            <div class="d-md-none" style="height: 160px;"></div>
        </section>


        <!-- New arrival (Carousel) -->
        <section class="container pt-5 mt-md-2 mt-lg-4 mt-xl-5">

            <!-- Slider prev/next buttons -->
            <div class="position-relative z-2 d-flex justify-content-end pt-4 pb-4 mt-2 mt-sm-3 mt-md-4 mb-n5 mb-lg-4">
                <button class="btn btn-prev btn-icon btn-sm btn-outline-dark rounded-circle ms-3" type="button"
                        id="new-prev" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-next btn-icon btn-sm btn-outline-dark rounded-circle ms-3" type="button"
                        id="new-next" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>

            <div class="row">

                <!-- Text -->
                <div class="col-lg-3 pb-3 mb-3 mb-md-4">
                    <h2 class="h1 mt-n2 mt-lg-0 mb-2 mb-lg-4">New arrivals</h2>
                    <p class="fs-lg mb-4">Explore our new mouthwatering selection that we've recently introduced.</p>
                    <a class="btn btn-dark rounded-pill" href="#">Shop boxes</a>
                </div>

                <!-- Swiper slider -->
                <div class="col-lg-9">
                    <div class="swiper" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "navigation": {
                "prevEl": "#new-prev",
                "nextEl": "#new-next"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                }
              }
            }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card-hover position-relative bg-secondary rounded mb-4">
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                                    <button
                                        class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                        type="button" aria-label="Add to Favorites">
                                        <i class="ai-heart fs-xl text-nav"></i>
                                    </button>
                                    <a class="d-block" href="#">
                                        <img class="d-block mx-auto" src="/img/landing/shop-2/products/01.png"
                                             alt="Product">
                                    </a>
                                </div>
                                <div class="d-flex mb-1">
                                    <h3 class="h6 mb-0">
                                        <a href="#">The Sunshine Box (6)</a></h3>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">$18.00</span>
                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                         data-bs-placement="left" title="Add to cart">
                                        <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                            <i class="ai-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card-hover position-relative bg-secondary rounded mb-4">
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                                    <button
                                        class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                        type="button" aria-label="Add to Favorites">
                                        <i class="ai-heart fs-xl text-nav"></i>
                                    </button>
                                    <a class="d-block" href="#">
                                        <img class="d-block mx-auto" src="/img/landing/shop-2/products/02.png"
                                             alt="Product">
                                    </a>
                                </div>
                                <div class="d-flex mb-1">
                                    <h3 class="h6 mb-0">
                                        <a href="#">Fromage (9)</a></h3>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">$24.00</span>
                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                         data-bs-placement="left" title="Add to cart">
                                        <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                            <i class="ai-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card-hover position-relative bg-secondary rounded mb-4">
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                                    <button
                                        class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                        type="button" aria-label="Add to Favorites">
                                        <i class="ai-heart fs-xl text-nav"></i>
                                    </button>
                                    <a class="d-block" href="#">
                                        <img class="d-block mx-auto" src="/img/landing/shop-2/products/03.png"
                                             alt="Product">
                                    </a>
                                </div>
                                <div class="d-flex mb-1">
                                    <h3 class="h6 mb-0">
                                        <a href="#">Rainbow (20)</a></h3>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">$58.00</span>
                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                         data-bs-placement="left" title="Add to cart">
                                        <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                            <i class="ai-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="card-hover position-relative bg-secondary rounded mb-4">
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                                    <button
                                        class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                        type="button" aria-label="Add to Favorites">
                                        <i class="ai-heart fs-xl text-nav"></i>
                                    </button>
                                    <a class="d-block" href="#">
                                        <img class="d-block mx-auto" src="/img/landing/shop-2/products/02.png"
                                             alt="Product">
                                    </a>
                                </div>
                                <div class="d-flex mb-1">
                                    <h3 class="h6 mb-0">
                                        <a href="#">Fromage (9)</a></h3>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">$24.00</span>
                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                         data-bs-placement="left" title="Add to cart">
                                        <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                            <i class="ai-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row g-4 pt-2 pt-sm-3 pt-md-4 pt-xl-5 mt-sm-2 mt-md-3 mt-xl-0">
                <div class="col-sm-6 col-lg-4">
                    <h2 class="display-2">About us</h2>
                    <p class="fs-xl mb-0">These unique macarons have their roots in a love for baking, creative
                        craftsmanship, and a quest for perfection.</p>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/01.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-lg-4">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/02.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-lg-4">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/03.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-lg-4 d-flex align-items-center">
                    <p class="fs-xl text-center mb-0">In recent years, we've dedicated ourselves to perfecting macarons,
                        creating surprising flavors. Our macarons are made with love to provide an exceptional
                        experience.</p>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/04.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-lg-4">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/05.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-lg-4 mb-2 mb-lg-0">
                    <img class="rounded-5" src="/img/landing/shop-2/gallery/06.jpg" alt="Image">
                </div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                    <div class="text-center px-xl-3 px-xxl-5">
                        <h3 class="h2 mb-4">All of our Macarons are gluten-free.</h3>
                        <a class="btn btn-dark rounded-pill" href="#">Explore our collection</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Awards -->
        <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
            <div class="overflow-auto" data-simplebar>
                <div class="row row-cols-4 g-0 py-3 my-sm-3" style="min-width: 600px;">
                    <div class="col">
                        <img class="d-block mx-auto" src="/img/landing/shop-2/awards/01.png" width="226"
                             alt="Award">
                    </div>
                    <div class="col">
                        <img class="d-block mx-auto" src="/img/landing/shop-2/awards/02.png" width="226"
                             alt="Award">
                    </div>
                    <div class="col">
                        <img class="d-block d-dark-mode-none mx-auto"
                             src="/img/landing/shop-2/awards/03-light.png" width="226" alt="Award">
                        <img class="d-none d-dark-mode-block mx-auto" src="/img/landing/shop-2/awards/03-dark.png"
                             width="226" alt="Award">
                    </div>
                    <div class="col">
                        <img class="d-block mx-auto" src="/img/landing/shop-2/awards/04.png" width="226"
                             alt="Award">
                    </div>
                </div>
            </div>
        </section>


        <!-- Custom box CTA -->
        <section class="py-5 bg-size-cover bg-position-center"
                 style="background-image: url(/img/landing/shop-2/cta-bg.jpg);">
            <div class="container py-md-3 py-lg-5 my-xl-3 my-xxl-5">
                <div class="row pt-2 pb-3 py-sm-4 py-md-5">
                    <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <h2 class="h1 mb-md-4" data-bs-theme="light">Craft Your Custom Macaron Collection</h2>
                        <p class="fs-lg text-dark opacity-70 pb-3 pb-sm-4 mb-3" data-bs-theme="light">Indecisive about
                            our delightful flavors? Craft your custom box with your favorites. Enjoy it alone or share
                            with others—it's all up to you!</p>
                        <a class="btn btn-dark rounded-pill" href="#" data-bs-theme="light">Create your own box</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Benefits -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="swiper pt-3 pb-2 py-sm-3 py-md-4 py-xl-5 my-lg-2" data-swiper-options='
          {
            "spaceBetween": 32,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "460": { "slidesPerView": 2 },
              "700": { "slidesPerView": 3 },
              "992": { "slidesPerView": 4 }
            }
          }
        '>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide text-center">
                        <img class="d-block mx-auto mb-4" src="/img/landing/shop-2/benefits/glutenfree.svg"
                             width="82" alt="Icon">
                        <h3 class="h4 pb-2 mb-1">Gluten-Free</h3>
                        <p class="fs-sm mb-0">Made without gluten, offer to savor taste and quality without
                            limitations.</p>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide text-center">
                        <img class="d-block mx-auto mb-4" src="/img/landing/shop-2/benefits/vegan.svg" width="82"
                             alt="Icon">
                        <h3 class="h4 pb-2 mb-1">Vegan</h3>
                        <p class="fs-sm mb-0">Made without animal products, they're perfect for vegans.</p>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide text-center">
                        <img class="d-block mx-auto mb-4" src="/img/landing/shop-2/benefits/natural.svg"
                             width="82" alt="Icon">
                        <h3 class="h4 pb-2 mb-1">100% Natural</h3>
                        <p class="fs-sm mb-0">We have no place for artificial additives and preservatives.</p>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide text-center">
                        <img class="d-block mx-auto mb-4" src="/img/landing/shop-2/benefits/love.svg" width="82"
                             alt="Icon">
                        <h3 class="h4 pb-2 mb-1">Made with Love </h3>
                        <p class="fs-sm mb-0">Each macaron is meticulously handcrafted with a deep passion for detail
                            and quality.</p>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
            </div>
        </section>


        <!-- Most popular -->
        <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
            <h2 class="h1 text-md-center pb-2 pb-sm-3 pb-lg-4">Most popular collection</h2>
            <div class="row pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-lg-2">
                <div class="col-sm-7 col-md-5 col-lg-6 mb-4 mb-md-0">
                    <div class="h-100 bg-size-cover bg-position-center rounded-5 me-md-4 me-xl-5"
                         style="background-image: url(/img/landing/shop-2/popular/preview.jpg);">
                        <div class="ratio ratio-16x9"></div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 py-md-4">
                    <div class="py-xl-2">
                        <h3>La Vie En Rose</h3>
                        <p>These iconic French inspired flavours will delight your senses!<br>Assorted box of 15
                            macarons composed of:</p>
                        <div class="row row-cols-1 row-cols-sm-2 mb-4">
                            <ul class="col d-flex flex-column list-unstyled m-0 gap-2 mb-2 mb-sm-0">
                                <li class="d-flex align-items-center gap-2">
                                    3
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th01.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th01.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th01.png" width="15" alt="Macaron">
                                    </div>
                                    Salted caramel
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    2
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th02.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th02.png" width="15" alt="Macaron">
                                    </div>
                                    Caramel Salé
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    2
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th03.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th03.png" width="15" alt="Macaron">
                                    </div>
                                    Simplement Chocolat
                                </li>
                            </ul>
                            <ul class="col d-flex flex-column list-unstyled m-0 gap-2">
                                <li class="d-flex align-items-center gap-2">
                                    3
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th04.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th04.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th04.png" width="15" alt="Macaron">
                                    </div>
                                    Follement Framboise
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    3
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th05.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th05.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th05.png" width="15" alt="Macaron">
                                    </div>
                                    Vanille de Madagascar
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    2
                                    <div class="text-nowrap">
                                        <img src="/img/landing/shop-2/popular/th06.png" width="15" alt="Macaron">
                                        <img src="/img/landing/shop-2/popular/th06.png" width="15" alt="Macaron">
                                    </div>
                                    Bleuets-Cassis
                                </li>
                            </ul>
                        </div>
                        <p class="mb-2">Contains allergens:</p>
                        <div class="d-flex gap-4 mb-4">
                            <div>
                                <svg class="d-block text-body mx-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                     height="27" fill="currentColor">
                                    <path
                                        d="M19.196 6.777c-.607-.954-1.182-1.857-1.234-3.611a.97.97 0 0 0 .64-.91.97.97 0 0 0-.645-.912V.967A.97.97 0 0 0 16.99 0h-6.445a.97.97 0 0 0-.967.967v.377a.97.97 0 0 0-.645.912.97.97 0 0 0 .64.91C9.521 4.92 8.947 5.824 8.34 6.777 7.681 7.812 7 8.881 7 11v8.744A2.26 2.26 0 0 0 9.256 22h9.023a2.26 2.26 0 0 0 2.256-2.256V11c0-2.119-.681-3.188-1.34-4.223zM9.9 1.934c.178 0 .322-.144.322-.322V.967c0-.178.145-.322.322-.322h6.445c.178 0 .322.145.322.322v.322H11.19c-.178 0-.322.144-.322.322s.144.322.322.322h6.445c.178 0 .322.145.322.322s-.145.322-.322.322H9.9c-.178 0-.322-.145-.322-.322s.145-.322.322-.322zm9.99 17.811c0 .889-.723 1.611-1.611 1.611H9.256c-.889 0-1.611-.723-1.611-1.611V11c0-1.931.602-2.876 1.239-3.877.624-.981 1.268-1.993 1.334-3.901h7.102c.066 1.907.709 2.92 1.334 3.901.637 1.001 1.239 1.946 1.239 3.877v8.744z"/>
                                    <path
                                        d="M8.611 13.471c-.178 0-.322.144-.322.322v5.951a.97.97 0 0 0 .967.967h9.023a.97.97 0 0 0 .967-.967V11c0-.178-.144-.322-.322-.322-2.66 0-4.007.73-5.31 1.435-1.289.698-2.506 1.358-5.003 1.358zm9.99-2.145v8.418c0 .178-.145.322-.322.322H9.256c-.178 0-.322-.145-.322-.322v-5.632c2.449-.056 3.738-.755 4.988-1.432 1.232-.668 2.399-1.299 4.681-1.354z"/>
                                </svg>
                                <span class="fs-sm text-center">Milk</span>
                            </div>
                            <div>
                                <svg class="d-block text-body mx-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                     height="27" fill="currentColor">
                                    <path
                                        d="M24.306 4.641c-.128-.674-.65-1.235-1.323-1.434-.201-.059-.412-.086-.621-.078-1.407.056-4.199.458-7.397 2.492l-.381-.827c-1.091-2.197-2.408-3.578-3.321-4.348C10.74.006 9.981-.119 9.337.119a1.89 1.89 0 0 0-.562.327c-1.068.902-2.58 2.538-3.719 5.212a.32.32 0 0 0 .179.422c.169.068.363-.01.433-.175.909-2.136 2.061-3.574 3.007-4.489-.409.804-.87 1.928-1.273 3.437-.693 2.594-1.044 5.684-1.044 9.183 0 2.325.347 4.31 1.004 5.742.225.491.484.906.769 1.24-.85-.316-1.613-.851-2.233-1.578-1.135-1.332-1.736-3.2-1.736-5.404 0-2.554.358-4.9 1.063-6.971.058-.169-.037-.352-.21-.408s-.361.036-.419.205C3.869 9 3.5 11.414 3.5 14.037c0 2.356.653 4.367 1.889 5.816A6 6 0 0 0 10.019 22a6.14 6.14 0 0 0 1.616-.214 6.05 6.05 0 0 0 1.598.213 6.87 6.87 0 0 0 2.466-.473c1.458-.56 2.852-1.617 4.031-3.057 1.023-1.249 1.896-2.53 2.595-3.808.086-.157.025-.353-.137-.437s-.362-.024-.448.133c-.68 1.243-1.531 2.491-2.529 3.709-1.107 1.351-2.405 2.34-3.756 2.859-.89.342-1.793.479-2.662.41.695-.359 1.323-.857 1.857-1.482a6.91 6.91 0 0 0 .54-.726c.773-.666 1.549-1.471 2.305-2.395 2.24-2.735 3.944-5.364 5.063-7.813.65-1.423 1.009-2.581 1.204-3.458.192 1.644.125 4.39-1.445 7.755-.07.15-.01.332.137.414a.34.34 0 0 0 .466-.147c1.896-4.066 1.682-7.287 1.386-8.844zM15.963 8.7c3.161-3.005 5.565-4.175 6.784-4.616l-6.305 7.698c-.092-1.073-.253-2.101-.48-3.082zm5.694-4.869c-2.312 1.051-4.512 2.878-5.876 4.144l-.567-1.739c2.626-1.697 4.963-2.243 6.443-2.405zM7.022 14.037c0-3.445.344-6.48 1.023-9.02.539-2.019 1.18-3.31 1.643-4.059v20.356c-.652-.158-1.254-.783-1.72-1.798-.619-1.349-.946-3.244-.946-5.478zm7.117 5.404c-.62.727-1.383 1.261-2.233 1.578a5.31 5.31 0 0 0 .769-1.24c.657-1.432 1.004-3.417 1.004-5.742 0-.178-.148-.323-.332-.323s-.332.145-.332.323c0 2.235-.327 4.129-.946 5.478-.466 1.016-1.067 1.64-1.72 1.798V.958c.928 1.499 2.44 4.935 2.643 11.584.006.178.16.319.341.313s.327-.154.322-.332c-.178-5.82-1.354-9.258-2.293-11.104.802.777 1.781 1.96 2.624 3.657 1.253 2.523 1.888 5.538 1.888 8.961 0 2.203-.6 4.072-1.736 5.404zm7.813-10.783c-1.096 2.398-2.77 4.98-4.976 7.672-.321.392-.645.761-.971 1.107.351-1.017.532-2.161.532-3.4 0-.439-.01-.872-.031-1.298l6.759-8.252c-.117.867-.443 2.265-1.314 4.171z"/>
                                </svg>
                                <span class="fs-sm text-center">Almonds</span>
                            </div>
                        </div>
                        <a class="btn btn-dark rounded-pill" href="#">Order now</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Instagram -->
        <section>
            <h2 class="container h1 pb-2 pb-sm-3 pb-lg-4">Let's be social</h2>
            <div class="overflow-auto" data-simplebar>
                <div class="row row-cols-8 g-0" style="min-width: 1200px;">

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">2048</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">320</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/01.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1764</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">283</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/02.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">4560</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">417</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/03.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1505</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">274</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/04.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">3708</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">198</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/05.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">2925</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">409</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper"><img class="zoom-effect-img"
                                                                  src="/img/landing/shop-2/instagram/06.jpg"
                                                                  alt="Image"></div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">1348</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">120</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/07.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="col">
                        <a class="card-hover zoom-effect d-block position-relative" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="d-flex align-items-center text-light position-relative z-2">
                                    <i class="ai-heart me-1"></i>
                                    <span class="text-light fs-sm me-3">963</span>
                                    <i class="ai-message me-1"></i>
                                    <span class="text-light fs-sm">98</span>
                                </div>
                            </div>
                            <div class="zoom-effect-wrapper">
                                <img class="zoom-effect-img" src="/img/landing/shop-2/instagram/08.jpg"
                                     alt="Image">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark py-5" data-bs-theme="dark">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-5 pt-sm-2 mb-lg-2">
                <div class="col-sm-5 col-md-4 col-xl-3 pb-2 pb-sm-0 mb-4 mb-sm-0">
                    <a class="navbar-brand py-0 mb-3 mb-md-4" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                        <span class="text-light opacity-90">Around</span>
                    </a>
                    <p class="text-body fs-sm pb-2 pb-md-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed.
                        Dolor elementum nunc dictum interdum amet arcu aenean eu integer</p>
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
                <div class="col-sm-6 offset-sm-1 offset-md-2 offset-xl-3">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                        <div class="col mb-4 mb-md-0">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">About us</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Our boxes</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Bestsellers</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Help center</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Delivery info</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Terms of service</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Privacy policy</a></li>
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
