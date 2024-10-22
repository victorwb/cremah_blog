@extends('layouts.base', ['title' => 'Around | Shop Homepage v.1'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar-shop',['navClass' => 'bg-light'])

        <!-- Hero -->
        <section>
            <div class="jarallax bg-dark min-vh-100 py-5" data-jarallax data-type="scroll-opacity" data-speed="0.7">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
                <div class="jarallax-img" style="background-image: url(/img/landing/shop-1/hero/bg.jpg);"></div>
                <div class="container position-relative z-5 py-sm-4 py-lg-5 mt-4">

                    <!-- Text + button -->
                    <div class="row pt-lg-2 py-xl-4 py-xxl-5 mb-md-4 mb-lg-5">
                        <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 pt-5 mb-5">
                            <h1 class="display-2 text-light text-uppercase pb-sm-2 pb-md-3">Decor to create comfort at
                                home</h1>
                            <p class="text-light opacity-70 pb-3 pb-md-4 mb-3" style="max-width: 520px;">On the site you
                                will find all the wonderful decor items from photo frames to tablecloths for the dining
                                table</p><a class="btn btn-outline-light" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Explore the
                                catalog</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="fw-medium text-light text-uppercase">Most Popular</div>

                        <!-- Slider prev/next buttons -->
                        <div class="d-flex">
                            <button class="btn btn-prev btn-icon btn-sm btn-outline-light rounded-circle ms-3"
                                    type="button" id="popular-prev" aria-label="Prev">
                                <i class="ai-arrow-left"></i>
                            </button>
                            <button class="btn btn-next btn-icon btn-sm btn-outline-light rounded-circle ms-3"
                                    type="button" id="popular-next" aria-label="Next">
                                <i class="ai-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Slider (popular items) -->
                    <div class="swiper" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "navigation": {
                "prevEl": "#popular-prev",
                "nextEl": "#popular-next"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "860": {
                  "slidesPerView": 3
                },
                "1200": {
                  "slidesPerView": 4
                }
              }
            }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <a class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                   href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="card-body p-4 px-sm-3 px-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/landing/shop-1/hero/01.png" width="97" alt="Product">
                                            <div class="ps-3 ps-md-4">
                                                <h3 class="fs-sm mb-2">Exquisite glass vase</h3>
                                                <p class="fs-sm mb-0">$19.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <a class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                   href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="card-body p-4 px-sm-3 px-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/landing/shop-1/hero/02.png" width="97" alt="Product">
                                            <div class="ps-3 ps-md-4">
                                                <h3 class="fs-sm mb-2">Pot for home flowers</h3>
                                                <p class="fs-sm mb-0">$11.00
                                                    <del class="text-body-secondary fs-xs">$15.00</del>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <a class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                   href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="card-body p-4 px-sm-3 px-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/landing/shop-1/hero/03.png" width="97" alt="Product">
                                            <div class="ps-4">
                                                <h3 class="fs-sm mb-2">Ceramic soap dispenser</h3>
                                                <p class="fs-sm mb-0">$16.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <a class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                   href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="card-body p-4 px-sm-3 px-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/landing/shop-1/hero/04.png" width="97" alt="Product">
                                            <div class="ps-3 ps-md-4">
                                                <h3 class="fs-sm mb-2">Wooden clock with metal hands</h3>
                                                <p class="fs-sm mb-0">$24.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide h-auto">
                                <a class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                   href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="card-body p-4 px-sm-3 px-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/landing/shop-1/hero/05.png" width="97" alt="Product">
                                            <div class="ps-3 ps-md-4">
                                                <h3 class="fs-sm mb-2">Scented candle in ceramic shell</h3>
                                                <p class="fs-sm mb-0">$13.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row pt-2 py-md-4">
                <div class="col-lg-10 col-xl-9">
                    <p class="lead text-dark pb-md-2 pb-lg-3 mb-2">We do not believe that one style suits everyone. That
                        is why we choose three design directions for the new season. Get inspired by new trends and
                        create an atmosphere of coziness and comfort in your own home. On the site you will find all the
                        wonderful decor items from photo frames to tablecloths for the dining table.</p>
                    <a class="btn btn-lg btn-link px-0" href="#">
                        About us
                        <i class="ai-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- Categories -->
        <section class="container mt-n3 mt-sm-0 pb-5 mb-1 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <h2 class="h1 pb-3 mb-lg-4">Categories</h2>
            <div class="row g-4 pb-2 pb-md-4">
                <div class="col-md-4">

                    <!-- Card -->
                    <div class="card zoom-effect h-100 border-0 rounded-1 overflow-hidden" style="min-height: 320px;">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                        <div class="zoom-effect-wrapper rounded-1 position-absolute top-0 start-0 w-100 h-100">
                            <div
                                class="zoom-effect-img bg-size-cover bg-position-bottom-center position-absolute top-0 start-0 w-100 h-100"
                                style="background-image: url(/img/shop/categories/01.jpg);"></div>
                        </div>
                        <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3"
                           href="{{ route('third', ['pages', 'shop', 'catalog'])}}">
                            <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the living room</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-8">

                    <!-- Card -->
                    <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                        <div class="zoom-effect-wrapper rounded-1">
                            <img class="zoom-effect-img" src="/img/shop/categories/02.jpg" alt="Category image">
                        </div>
                        <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3"
                           href="{{ route('third', ['pages', 'shop', 'catalog'])}}">
                            <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the kitchen</span>
                        </a>
                    </div>

                    <div class="row g-4 pt-4">
                        <div class="col-sm-6">

                            <!-- Card -->
                            <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                                <div class="zoom-effect-wrapper rounded-1">
                                    <img class="zoom-effect-img" src="/img/shop/categories/03.jpg" alt="Category image">
                                </div>
                                <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3"
                                   href="{{ route('third', ['pages', 'shop', 'catalog'])}}">
                                    <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the bathroom</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <!-- Card -->
                            <div class="card zoom-effect border-0 rounded-1 overflow-hidden">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                                <div class="zoom-effect-wrapper rounded-1">
                                    <img class="zoom-effect-img" src="/img/shop/categories/04.jpg" alt="Category image">
                                </div>
                                <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3"
                                   href="{{ route('third', ['pages', 'shop', 'catalog'])}}">
                                    <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the bedroom</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Trending products (carousel) -->
        <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
            <div class="d-flex align-items-center justify-content-between pb-4 mb-2 mb-md-3">
                <h2 class="h1 pt-1 mb-0">Trending products</h2>

                <!-- Slider prev/next buttons -->
                <div class="d-flex">
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button"
                            id="trending-prev" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button"
                            id="trending-next" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Slider (popular items) -->
            <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": "#trending-prev",
            "nextEl": "#trending-next"
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "768": {
              "slidesPerView": 3
            },
            "1000": {
              "slidesPerView": 4
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span
                                class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                <img class="d-block mx-auto" src="/img/shop/products/01.png" width="226" alt="Product">
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Loft style lamp</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Dark gray" checked
                                           id="color1-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color1-1">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #576071;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Light gray"
                                           id="color1-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color1-2">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Blue" id="color1-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color1-3">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$21.00</span>
                            <del class="fs-sm text-body-secondary">$35.00</del>
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
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                <img class="d-block mx-auto" src="/img/shop/products/02.png" width="226" alt="Product">
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Dispenser for soap</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$16.00</span>
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
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span
                                class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                <img class="d-block mx-auto" src="/img/shop/products/03.png" width="226" alt="Product">
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Glossy round vase</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Light gray" checked
                                           id="color2-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color2-1">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Dark gray" id="color2-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color2-2">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #576071;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Blue" id="color2-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                           for="color2-3">
                                        <span class="d-block rounded-circle"
                                              style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$11.00</span>
                            <del class="fs-sm text-body-secondary">$15.00</del>
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
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span
                                class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                <img class="d-block mx-auto" src="/img/shop/products/09.png" width="226" alt="Product">
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Scented candle</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$13.00</span>
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
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0"
                                type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                <img class="d-block mx-auto" src="/img/shop/products/06.png" width="226" alt="Product">
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Living room table</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$46.00</span>
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

            <!-- View all button -->
            <div class="text-center mt-2 mt-md-0 mb-xxl-2 pt-4 pt-md-5 pb-2 pb-sm-3 pb-md-4">
                <a class="btn btn-outline-primary w-100 w-sm-auto" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">View all products</a>
            </div>
        </section>


        <!-- Collections (Binded slider) -->
        <section class="position-relative py-5">
            <div class="binded-content position-absolute top-0 start-0 w-100">
                <div
                    class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center active"
                    id="bg-1"
                    style="background: linear-gradient(270deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%), url(/img/landing/shop-1/collections/bg01.jpg);"></div>
                <div class="binded-item position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center"
                     id="bg-2"
                     style="background-image: linear-gradient(90deg, rgba(0,0,0,0.5) -0.47%, rgba(0,0,0,0) 100%), url(/img/landing/shop-1/collections/bg02.jpg);"></div>
            </div>
            <div class="container py-2 py-sm-4 py-lg-5 my-md-3 my-lg-0 my-xl-3 my-xxl-4">
                <div class="row align-items-center my-xxl-2">
                    <div class="col-md-6 position-relative z-2 mb-5 mb-md-0">
                        <div style="max-width: 580px;">

                            <!-- Swiper controls (Prev/next buttons) -->
                            <div class="d-flex pb-2 mb-3 mb-md-4 mb-xl-5">
                                <button class="btn btn-icon btn-sm btn-outline-light rounded-circle me-3" type="button"
                                        id="prev-collection" aria-label="Prev">
                                    <i class="ai-arrow-left"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-outline-light rounded-circle" type="button"
                                        id="next-collection" aria-label="Next">
                                    <i class="ai-arrow-right"></i>
                                </button>
                            </div>

                            <!-- Swiper slider -->
                            <div class="swiper" data-swiper-options='{
                  "spaceBetween": 40,
                  "loop": true,
                  "bindedContent": true,
                  "controlledSlider": "#cards",
                  "navigation": {
                    "prevEl": "#prev-collection",
                    "nextEl": "#next-collection"
                  }
                }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-swiper-binded="#bg-1">
                                        <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">Meet the
                                            guests with a stunning set for a dinner party</h2>
                                        <a class="btn btn-outline-light" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Explore all sets</a>
                                    </div>
                                    <div class="swiper-slide" data-swiper-binded="#bg-2">
                                        <h2 class="display-5 text-white text-uppercase pb-2 mb-md-4 mb-xl-5">Decor for
                                            the living room or bedrooms in wood style</h2>
                                        <a class="btn btn-outline-light" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Explore all sets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                        <div class="ps-md-4 ps-lg-0">
                            <div class="card border-0 rounded-1" style="max-width: 450px;">
                                <div class="card-body">

                                    <!-- Controlled swiper slider -->
                                    <div class="swiper" id="cards" data-swiper-options='{
                      "allowTouchMove": false,
                      "spaceBetween": 40,
                      "loop": true
                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a class="d-block pb-3 mb-2 mb-lg-3" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                                    <img src="/img/landing/shop-1/collections/th01.png"
                                                         alt="Collection">
                                                </a>
                                                <div class="d-flex mb-1">
                                                    <h3 class="h6 mb-0">
                                                        <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Set for a dinner party of 7 items</a>
                                                    </h3>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-2">$116.00</span>
                                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                                         data-bs-placement="left" title="Add to cart">
                                                        <a class="nav-link fs-lg py-2 px-1" href="#"
                                                           aria-label="Add to Cart">
                                                            <i class="ai-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <a class="d-block pb-3 mb-2 mb-lg-3" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                                    <img src="/img/landing/shop-1/collections/th02.png"
                                                         alt="Collection">
                                                </a>
                                                <div class="d-flex mb-1">
                                                    <h3 class="h6 mb-0">
                                                        <a href="{{ route('third', ['pages', 'shop', 'single'])}}">A set of flowerpots for the living
                                                            room</a>
                                                    </h3>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="me-2">$78.00</span>
                                                    <div class="nav ms-auto" data-bs-toggle="tooltip"
                                                         data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>'
                                                         data-bs-placement="left" title="Add to cart">
                                                        <a class="nav-link fs-lg py-2 px-1" href="#"
                                                           aria-label="Add to Cart">
                                                            <i class="ai-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features (carousel on screens < 992px) -->
        <section class="container py-5 mt-2 mb-3 mt-sm-3 mb-sm-4 my-md-4 my-lg-5">
            <div class="swiper pb-xxl-4 mb-xl-2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "400": {
              "slidesPerView": 2,
              "spaceBetween": 24
            },
            "700": {
              "slidesPerView": 3,
              "spaceBetween": 30
            },
            "991": {
              "slidesPerView": 4,
              "spaceBetween": 40
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide text-center text-sm-start">
                        <div class="text-primary mb-3 mb-sm-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M37.7794 10.6909L20.2794 1.94092C20.1926 1.89757 20.097 1.875 20 1.875C19.903 1.875 19.8074 1.89757 19.7206 1.94092L2.22063 10.6909C2.11674 10.7428 2.02936 10.8227 1.96832 10.9215C1.90727 11.0203 1.87496 11.1341 1.87501 11.2503V28.7503C1.87437 28.867 1.90641 28.9815 1.96749 29.0809C2.02857 29.1803 2.11626 29.2606 2.22063 29.3128L19.7206 38.0628C19.8074 38.1061 19.903 38.1287 20 38.1287C20.097 38.1287 20.1926 38.1061 20.2794 38.0628L37.7794 29.3128C37.8838 29.2606 37.9714 29.1803 38.0325 29.0809C38.0936 28.9815 38.1256 28.867 38.125 28.7503V11.2503C38.1251 11.1341 38.0928 11.0203 38.0317 10.9215C37.9706 10.8227 37.8833 10.7428 37.7794 10.6909ZM20 19.3015L15.1144 16.8584L30.7306 8.56279L36.1056 11.2503L20 19.3015ZM10.1144 14.3584L25.7306 6.06279L29.3556 7.87529L13.7413 16.1722L10.1144 14.3584ZM9.37501 15.3865L13.125 17.2615V22.2415L11.6919 20.8084C11.5747 20.6912 11.4158 20.6253 11.25 20.6253H9.37501V15.3865ZM20 3.19904L24.3575 5.37529L8.74126 13.6722L3.89751 11.2503L20 3.19904ZM3.12501 12.2615L8.12501 14.7615V21.2503C8.12501 21.416 8.19086 21.575 8.30807 21.6922C8.42528 21.8094 8.58425 21.8753 8.75001 21.8753H10.9913L13.3081 24.1922C13.3955 24.2795 13.5069 24.339 13.6281 24.3632C13.7493 24.3873 13.875 24.3749 13.9892 24.3276C14.1034 24.2803 14.201 24.2002 14.2696 24.0974C14.3383 23.9947 14.375 23.8739 14.375 23.7503V17.8865L19.375 20.3865V36.489L3.12501 28.364V12.2615ZM20.625 36.489V20.3865L36.875 12.2615V28.364L20.625 36.489Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2 mb-sm-3">Fast and free delivery</h3>
                        <p class="fs-sm mb-0">Free delivery for all orders over $200 honcus egestas lorem honcus
                            egestas</p>
                    </div>

                    <!-- Item-->
                    <div class="swiper-slide text-center text-sm-start">
                        <div class="text-primary mb-3 mb-sm-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38 27.4c-1.5 3.5-4 6.6-7.2 8.7s-6.9 3.3-10.8 3.3c-3.3 0-6.5-.8-9.4-2.4-2.4-1.3-4.4-3.1-6-5.2v3.1c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2.76.76 0 0 1-.4-.2c-.1-.1-.2-.2-.2-.4V30c0-.2.1-.3.2-.4 0 0 .1 0 .1-.1h0s.1 0 .1-.1h.1 4.8c.2 0 .3.1.4.2a.76.76 0 0 1 .2.4.76.76 0 0 1-.2.4.76.76 0 0 1-.4.2H5.1c2.3 3.3 5.7 5.7 9.6 6.9 4.2 1.3 8.8 1 12.8-.8s7.3-5 9.1-9c1.9-4 2.2-8.5 1-12.8C36.4 10.7 33.7 7 30 4.6s-8.1-3.4-12.5-2.8C13.1 2.5 9.1 4.7 6.2 8s-4.5 7.6-4.5 12c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2c-.2 0-.3-.1-.4-.2s-.2-.2-.2-.4c0-3.8 1.1-7.6 3.3-10.8S9 3.5 12.6 2C16.1.6 20 .2 23.8 1s7.2 2.6 10 5.3c2.7 2.7 4.6 6.2 5.3 10 .7 3.7.3 7.6-1.1 11.1zm-14.1-3.8c0 1-.4 2-1.1 2.8-.6.5-1.3.9-2 1.1v.7c0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5v-.7a3.09 3.09 0 0 1-2-1.1c-.7-.7-1.1-1.7-1.1-2.8 0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5c0 .7.3 1.3.7 1.8.5.5 1.1.7 1.8.7s1.3-.3 1.8-.7c.5-.5.7-1.1.7-1.8s-.3-1.8-2.7-2.5c-3-.9-3.7-2.6-3.7-3.8 0-1 .4-2 1.1-2.8.6-.6 1.3-.9 2-1.1v-.7c0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5v.7a3.09 3.09 0 0 1 2 1.1c.7.7 1.1 1.7 1.1 2.8 0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5c0-.7-.3-1.3-.7-1.8-.5-.5-1.1-.7-1.8-.7s-1.3.3-1.8.7c-.5.5-.7 1.1-.7 1.8 0 .4 0 1.7 2.7 2.5 2.4.7 3.7 2 3.7 3.8z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2 mb-sm-3">Money back guarantee</h3>
                        <p class="fs-sm mb-0">We return money within 30 days honcus egestas lorem honcus egestas</p>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide text-center text-sm-start">
                        <div class="text-primary mb-3 mb-sm-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.6825 13.683C33.6825 6.12609 27.5564 0 19.9995 0C12.4426 0 6.31646 6.12609 6.31646 13.683C4.36283 13.9263 2.51562 15.2033 2.51562 18.168V25.3136C2.51562 28.6583 4.85694 29.8746 7.07663 29.8746H9.28111C9.70091 29.8746 10.0413 29.5342 10.0413 29.1144V14.3976C10.0413 13.9778 9.70091 13.6374 9.28111 13.6374H7.83679C7.83679 6.92018 13.2823 1.47472 19.9995 1.47472C26.7167 1.47472 32.1621 6.92018 32.1621 13.6374H30.7178C30.298 13.6374 29.9577 13.9778 29.9577 14.3976V29.0916C29.9577 29.5114 30.298 29.8518 30.7178 29.8518H32.1621C31.9493 35.0741 29.4407 36.298 24.4312 36.5184V36.0091C24.4312 35.1694 23.7506 34.4888 22.9109 34.4888H18.1295C17.2898 34.4888 16.6091 35.1694 16.6091 36.0091V38.4797C16.6091 39.3194 17.2898 40 18.1295 40H22.9261C23.7658 40 24.4464 39.3194 24.4464 38.4797V38.0388C29.2659 37.8183 33.4316 36.8225 33.6825 29.8062C35.6361 29.5629 37.4833 28.2858 37.4833 25.3212V18.1756C37.4833 15.1957 35.6437 13.9263 33.6825 13.683ZM8.52094 15.1045V28.3314H7.03862C5.91357 28.3314 3.99795 27.9361 3.99795 25.2908V18.1452C3.99795 15.5226 5.89077 15.1045 7.03862 15.1045H8.52094ZM22.9261 37.3318V38.4873H18.1295V36.0167H22.9261V37.3318ZM35.963 25.3136C35.963 27.9361 34.0702 28.3542 32.9223 28.3542H31.478V15.1577H32.9603C34.0854 15.1577 36.001 15.553 36.001 18.1984L35.963 25.3136Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2 mb-sm-3">24/7 customer support</h3>
                        <p class="fs-sm mb-0">Friendly 24/7 customer support honcus egestas lorem honcus egestas</p>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide text-center text-sm-start">
                        <div class="text-primary mb-3 mb-sm-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.1422 8.0989L20.1085 0.0881401C19.8855 -0.0308936 19.6182 -0.0292231 19.3968 0.0923166L4.77905 8.10308C4.53931 8.23464 4.39062 8.48607 4.39062 8.75964V19.2237C4.3994 27.8255 9.49571 35.6074 17.377 39.0535L19.406 39.9377C19.5956 40.0204 19.8115 40.0208 20.0016 39.9385L22.2879 38.9512C30.3153 35.5798 35.5378 27.7228 35.5386 19.0162V8.75964C35.5386 8.48315 35.3862 8.22879 35.1422 8.0989ZM34.0417 19.0162C34.04 27.1226 29.1764 34.4371 21.7019 37.5742L21.6969 37.5767L19.7059 38.4362L17.9759 37.6815C10.6397 34.4738 5.89546 27.2307 5.88711 19.2237V9.20278L19.7614 1.59882L34.0417 9.20821V19.0162Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M14.2398 18.7389C13.9713 18.4244 13.4989 18.3873 13.1844 18.6558C12.8699 18.924 12.8327 19.3967 13.1013 19.7108L17.0549 24.3406C17.3188 24.6497 17.7812 24.6919 18.0961 24.4354L27.3039 16.9442C27.6247 16.6836 27.6731 16.2121 27.4121 15.8913C27.1514 15.571 26.6799 15.5221 26.3591 15.7831L17.7185 22.8124L14.2398 18.7389Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2 mb-sm-3">Secure online payment</h3>
                        <p class="fs-sm mb-0">We possess SSL / Secure сertificate honcus egestas lorem honcus
                            egestas</p>
                    </div>
                </div>

                <!-- Pagination (Bullets) -->
                <div class="swiper-pagination position-relative bottom-0 pt-1 mt-4 d-lg-none"></div>
            </div>
        </section>


        <!-- Gallery with hotsposts -->
        <section class="container pb-5 mb-lg-4 mb-xl-5">
            <h2 class="h1 pb-3 mb-lg-4">Ideas for your home</h2>
            <div class="row pb-2 pb-sm-3 pb-md-4 mb-xxl-2 g-4">
                <div class="col-md-6">
                    <div class="hotspots hotspots-alt">
                        <img class="d-block rounded-1" src="/img/landing/shop-1/gallery/01.jpg" alt="Image">
                        <a class="hotspot" style="top: 20%; left: 27%;" tabindex="0" role="button"
                           data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                           data-bs-html="true"
                           data-bs-content='<a href="{{ route('third', ['pages', 'shop', 'single'])}}" class="d-flex text-decoration-none mb-2"><span class="h6 fs-sm mb-0">Bronze floor<br>led lamp</span><i class="ai-chevron-right fs-xl text-dark ms-2"></i></a><span>$185.00</span>'
                           aria-label="Hotspot">
                            <div class="hotspot-inner"></div>
                        </a>
                        <a class="hotspot" style="top: 14.7%; right: 32.7%;" tabindex="0" role="button"
                           data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                           data-bs-html="true"
                           data-bs-content='<a href="{{ route('third', ['pages', 'shop', 'single'])}}" class="d-flex text-decoration-none mb-2"><span class="h6 fs-sm mb-0">Photo frame<br>Defacto</span><i class="ai-chevron-right fs-xl text-dark ms-2"></i></a><span>$21.00</span>'
                           aria-label="Hotspot">
                            <div class="hotspot-inner"></div>
                        </a>
                        <a class="hotspot" style="bottom: 41%; left: 34.6%;" tabindex="0" role="button"
                           data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-html="true"
                           data-bs-content='<a href="{{ route('third', ['pages', 'shop', 'single'])}}" class="d-flex text-decoration-none mb-2"><span class="h6 fs-sm mb-0">Yellow satin<br>armchair</span><i class="ai-chevron-right fs-xl text-dark ms-2"></i></a><span>$276.00</span>'
                           aria-label="Hotspot">
                            <div class="hotspot-inner"></div>
                        </a>
                        <a class="hotspot" style="bottom: 24.3%; right: 27.5%;" tabindex="0" role="button"
                           data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-html="true"
                           data-bs-content='<a href="{{ route('third', ['pages', 'shop', 'single'])}}" class="d-flex text-decoration-none mb-2"><span class="h6 fs-sm mb-0">Gary concrete<br>table stand</span><i class="ai-chevron-right fs-xl text-dark ms-2"></i></a><span>$35.00</span>'
                           aria-label="Hotspot">
                            <div class="hotspot-inner"></div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="d-block rounded-1 mb-4" src="/img/landing/shop-1/gallery/02.jpg" alt="Image">
                    <img class="rounded-1" src="/img/landing/shop-1/gallery/03.jpg" alt="Image">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="rounded-1" src="/img/landing/shop-1/gallery/04.jpg" alt="Image">
                </div>
            </div>
        </section>


        <!-- Banner + Subscription CTA -->
        <section class="container pb-5 mb-lg-4 mb-xl-5">
            <div class="row pb-2 pb-sm-3 pb-md-4 mb-xlx-1">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row pb-2 pb-sm-3 pb-lg-0 pb-xxl-2 mb-4 mb-lg-5">
                        <div class="col-md-11 col-xl-10">
                            <h2 class="h1 mb-lg-4">Discount and sales</h2>
                            <p class="mb-0">Find aute irure reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur neque congue aliqua dolor do amet sint ovar velit officia
                                reprehenderit in voluptate pariatur.</p>
                        </div>
                    </div>
                    <div class="position-relative pt-5 pb-2 py-sm-5 px-4 ps-sm-5 pe-sm-0">
                        <div
                            class="bg-primary position-absolute top-0 start-0 h-100 rounded-1 opacity-30 d-none d-sm-block"
                            style="width: calc(100% - 38px);"></div>
                        <div
                            class="bg-primary position-absolute top-0 start-0 w-100 h-100 rounded-1 opacity-30 d-sm-none"></div>
                        <div class="d-sm-flex align-items-center position-relative z-2 py-xl-3 px-2 px-sm-0 ps-xl-3">
                            <div class="text-center text-sm-start me-sm-n4 me-md-3 me-lg-n2">
                                <div class="fs-xs text-uppercase pb-4 pb-md-5 mb-2 mb-md-0 mb-lg-3">Best selling</div>
                                <h2 class="pb-3 mb-md-4">Wall clocks with a discount of up to 40%</h2>
                                <div
                                    class="countdown d-flex flex-wrap flex-lg-nowrap justify-content-center justify-content-sm-start pb-4 pb-md-5 mb-2 mb-md-0 mb-lg-3"
                                    data-countdown-date="01/01/2026 12:00:00">
                                    <div class="text-center mb-2">
                                        <div class="bg-light rounded-1 p-2">
                                            <div class="h2 fw-normal mb-0 mx-1" data-days></div>
                                        </div>
                                        <span class="text-dark fs-sm">days</span>
                                    </div>
                                    <span class="text-white fs-2 mx-2">:</span>
                                    <div class="text-center mb-2">
                                        <div class="bg-light rounded-1 p-2">
                                            <div class="h2 fw-normal mb-0 mx-1" data-hours></div>
                                        </div>
                                        <span class="text-dark fs-sm">hours</span>
                                    </div>
                                    <span class="text-white fs-2 mx-2">:</span>
                                    <div class="text-center mb-2">
                                        <div class="bg-light rounded-1 p-2">
                                            <div class="h2 fw-normal mb-0 mx-1" data-minutes></div>
                                        </div>
                                        <span class="text-dark fs-sm">mins</span>
                                    </div>
                                </div>
                                <a class="btn btn-outline-dark mb-lg-3" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Explore the catalog</a>
                            </div>
                            <div class="flex-xl-shrink-0 mx-auto ms-lg-0 me-lg-n4" style="max-width: 362px;">
                                <img class="d-block ms-n2 ms-sm-0" src="/img/landing/shop-1/banner-2.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column flex-md-row flex-lg-column h-100 ps-lg-4 me-md-4 me-lg-0 ms-lg-2">
                        <div
                            class="bg-secondary d-flex rounded-1 ps-4 ps-lg-5 py-2 py-md-3 py-lg-4 mb-4 mb-md-0 mb-lg-4 me-md-4 me-lg-0">
                            <div class="d-flex flex-column ps-0 ps-sm-3 ps-md-0 ps-xl-3 py-4 me-n5 me-sm-0">
                                <div class="fs-sm text-uppercase">Sale</div>
                                <div class="my-auto me-md-n5">
                                    <div class="h3 display-2 mb-0">10%</div>
                                    <div class="h2 mb-2">off the first order</div>
                                    <div class="fs-sm">When ordering from $120 in one payment</div>
                                </div>
                            </div>
                            <img class="d-block my-2" src="/img/landing/shop-1/banner-1.png" width="235" alt="Image">
                        </div>
                        <div class="d-flex align-items-center border rounded-1 p-4 p-lg-5 mt-lg-auto">
                            <div class="pt-3 pb-2 px-sm-3 px-md-2 px-lg-0 px-xl-3">
                                <h3 class="h2 mb-2">Subscribe to the newsletter</h3>
                                <p class="fs-sm pb-3 mb-3">Receive information about discounts and new arrivals</p>
                                <div class="input-group input-group-sm" style="max-width: 360px;">
                                    <input class="form-control" type="email" placeholder="Your email">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog -->
        <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
            <h2 class="h1 pb-3 pb-md-4">Our blog</h2>
            <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="position-relative">
                            <img class="rounded-1" src="/img/landing/shop-1/blog/01.jpg" alt="Post image">
                            <div class="pt-3 mt-3">
                                <h3 class="h4 mb-3">
                                    <a class="stretched-link" href="#">Paintings for home decor</a>
                                </h3>
                                <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel
                                    quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="position-relative">
                            <img class="rounded-1" src="/img/landing/shop-1/blog/02.jpg" alt="Post image">
                            <div class="pt-3 mt-3">
                                <h3 class="h4 mb-3">
                                    <a class="stretched-link" href="#">How to keep flowers fresh longer</a>
                                </h3>
                                <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel
                                    quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="position-relative">
                            <img class="rounded-1" src="/img/landing/shop-1/blog/03.jpg" alt="Post image">
                            <div class="pt-3 mt-3">
                                <h3 class="h4 mb-3">
                                    <a class="stretched-link" href="#">Bedroom decoration explained</a>
                                </h3>
                                <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel
                                    quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (Bullets) -->
                <div class="swiper-pagination position-relative bottom-0 pt-1 mt-4 d-lg-none"></div>
            </div>

            <!-- View all button -->
            <div class="text-center mt-2 mb-sm-1 mt-lg-0 pt-4 pt-lg-5 pb-2 pb-md-4">
                <a class="btn btn-outline-primary w-100 w-sm-auto" href="#">More articles</a>
            </div>
        </section>


        <!-- Instagram -->
        <section class="position-relative">
            <div class="container position-relative z-2">
                <div class="row align-items-center g-3 g-lg-4 mb-3 mb-lg-4">
                    <div class="col-sm-6 text-center order-sm-2">
                        <div class="ai-instagram fs-2 text-primary mb-2 mb-md-3 mb-lg-4"></div>
                        <h2 class="h1 mb-2 mb-sm-0">Follow us<br><a href="#" class="text-primary text-decoration-none">#aroundecor</a>
                        </h2>
                    </div>
                    <div class="col-6 col-sm-3 order-sm-1">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/01.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 order-sm-3">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/02.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row g-3 g-lg-4">
                    <div class="col-6 col-sm-3">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/03.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/04.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/05.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-1">
                                <img class="zoom-effect-img" src="/img/landing/shop-1/instagram/06.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block bg-dark position-absolute start-0 bottom-0 w-100" style="height: 155px;">
                <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
                     style="background-color: rgba(255,255,255, .03);"></div>
            </div>
            <div class="d-lg-none bg-dark position-absolute start-0 bottom-0 w-100" style="height: 80px;">
                <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
                     style="background-color: rgba(255,255,255, .03);"></div>
            </div>
        </section>
    </main>


    <!-- Footer-->
    <footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
             style="background-color: rgba(255,255,255, .03);"></div>
        <div class="container position-relative z-2 pt-5 pb-2" data-bs-theme="dark">

            <!-- Columns with links -->
            <div class="row" id="links">
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Useful links</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="useful" data-show-label="Useful links" data-hide-label="Useful links"
                       aria-label="Useful links"></a>
                    <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Trending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Shipping &amp; Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Delivery info</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Decors</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#decors" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="decors" data-show-label="Decors" data-hide-label="Decors" aria-label="Decors"></a>
                    <div class="collapse d-md-block" id="decors" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Vases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Mirrors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Paintings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Figurines</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Textile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Lighting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Photo frames</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Categories</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#categories" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="categories" data-show-label="Categories" data-hide-label="Categories"
                       aria-label="Categories"></a>
                    <div class="collapse d-md-block" id="categories" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Kitchen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Bathroom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Living room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Bedroom</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Showroom</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#showroom" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="showroom" data-show-label="Showroom" data-hide-label="Showroom"
                       aria-label="Showroom"></a>
                    <div class="collapse d-md-block" id="showroom" data-bs-parent="#links">
                        <ul class="nav flex-column pb-3">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">1501 Main St, Ste 50<br>Tewksbury MA
                                    01876</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="+15262200459">+1&nbsp;526&nbsp;220&nbsp;0459</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled mb-0 pb-3 pb-md-0">
                            <li class="text-light opacity-90 mb-2">Mon-Fri: 8:00 - 21:00</li>
                            <li class="text-light opacity-90 mb-2">Sat: 8:00 - 21:00</li>
                            <li class="text-light opacity-90">Sun: 8:00 - 21:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-3 mt-md-2 mt-xl-0 pt-2 pt-md-4 pt-xl-0">
                    <h3 class="h6 text-uppercase mb-1 pb-1">Download our app</h3>
                    <div class="d-flex d-xl-block d-xxl-flex">
                        <a class="btn btn-secondary px-3 py-2 mt-3 me-3" href="#">
                            <img class="mx-1" src="/img/market/appstore-light.svg" width="120" alt="App Store">
                        </a>
                        <a class="btn btn-secondary px-3 py-2 mt-3" href="#">
                            <img class="mx-1" src="/img/market/googleplay-light.svg" width="119" alt="Google Play">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nav + Switcher -->
            <div class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">

                <!-- Nav -->
                <nav class="nav d-flex mb-3 mb-sm-4">
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Support</a>
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Privacy</a>
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">Terms of
                        use</a>
                </nav>

                <!-- Language / currency switcher -->
                <div class="dropdown mb-4">
                    <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><img
                            class="me-2" src="/img/flags/en.png" width="18" alt="English / USD">Eng / USD
                    </button>
                    <div class="dropdown-menu dropdown-menu-end my-1">
                        <div class="dropdown-item">
                            <select class="form-select form-select-sm">
                                <option value="usd">$ USD</option>
                                <option value="eur">€ EUR</option>
                                <option value="ukp">£ UKP</option>
                                <option value="jpy">¥ JPY</option>
                            </select>
                        </div>
                        <a class="dropdown-item pb-1" href="#">
                            <img class="me-2" src="/img/flags/fr.png" width="18" alt="Français">
                            Français
                        </a>
                        <a class="dropdown-item pb-1" href="#">
                            <img class="me-2" src="/img/flags/de.png" width="18" alt="Deutsch">
                            Deutsch
                        </a>
                        <a class="dropdown-item" href="#">
                            <img class="me-2" src="/img/flags/it.png" width="18" alt="Italiano">
                            Italiano
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logo + Socials + Cards -->
            <div class="d-sm-flex align-items-center pt-4">
                <div class="d-sm-flex align-items-center pe-sm-2">
                    <a class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                        <span class="text-light opacity-90">Around</span>
                    </a>
                    <div class="d-flex mb-4 mb-sm-0">
                        <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Telegram">
                            <i class="ai-telegram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Piterest">
                            <i class="ai-pinterest"></i>
                        </a>
                    </div>
                </div>
                <img class="ms-sm-auto" src="/img/shop/footer-cards.png" width="187" alt="Accepted cards">
            </div>
        </div>
    </footer>

@endsection

@section('script-bottom')

@endsection
