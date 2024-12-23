@extends('layouts.base', ['title' => 'Around | Yoga Studio'])

@section('html_attributes')
    data-bs-theme="dark"
@endsection

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['isLight' => true])

        <!-- Hero slider -->
        <section class="position-relative min-vh-100 py-5" data-bs-theme="light">

            <!-- Background image slider -->
            <div class="swiper swiper-scale-effect position-absolute top-0 start-0 w-100 h-100" data-swiper-options='{
          "effect": "fade",
          "speed": 800,
          "autoplay": {
            "delay": 7000,
            "disableOnInteraction": false
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          }
        }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-cover bg-position-top-center"
                             style="background-image: url(/img/landing/yoga-studio/hero/01.jpg);"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-cover bg-position-top-center"
                             style="background-image: url(/img/landing/yoga-studio/hero/02.jpg);"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-cover bg-position-top-center"
                             style="background-image: url(/img/landing/yoga-studio/hero/03.jpg);"></div>
                    </div>
                </div>
                <div class="swiper-pagination mb-4"></div>
            </div>

            <!-- Content -->
            <div class="container position-relative z-2 py-lg-3 py-xl-5 my-5">
                <div class="row pt-md-3 py-xxl-5 my-5">
                    <div class="col py-5 mb-md-4 mb-lg-5">
                        <h1 class="display-1 text-uppercase mb-4">Yoga Studio</h1>
                        <p class="d-block text-body fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px;">The best yoga and
                            meditation practices, adapted at a high level to the needs of the modern pace of life.</p>
                        <div class="position-relative d-inline-flex align-items-center">
                            <a class="btn btn-icon btn-lg btn-primary rounded-circle stretched-link"
                               href="https://www.youtube.com/watch?v=SZCxKjgReQ4" data-bs-toggle="video"
                               aria-label="Play video">
                                <i class="ai-play-filled"></i>
                            </a>
                            <span class="text-body fs-lg fw-semibold ms-3">Watch Video</span></div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features (Advantages) slider -->
        <section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-3 mt-lg-0">
                <div class="row pb-3 mb-3 mb-lg-4">
                    <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
                        <h2 class="h1 mb-sm-0 mx-auto me-sm-4" style="max-width: 440px;">Advantages that make us a
                            unique place</h2>
                        <p class="pt-2 mb-0 mx-auto" style="max-width: 420px;">The best yoga and meditation practices,
                            adapted a ta high level to the needs of the modern pace of life.</p>
                    </div>
                </div>
            </div>
            <div class="container-start pe-0">
                <div class="swiper" data-swiper-options='{
            "slidesPerView": "auto",
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": "#prev-feature",
              "nextEl": "#next-feature"
            }
          }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/spa-area.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-spa h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Spa area</h3>
                                    <p class="card-text">Orci purus, in tellus sit bibendum scelerisque adipiscing
                                        venenatis.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/changing-room.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-towel h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Changing room</h3>
                                    <p class="card-text">Non est nullam amet netus ut vitae, penatibus lacus a ut sed
                                        molestie lectus lobortis.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/free-lessons.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-flower h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Free lessons</h3>
                                    <p class="card-text">Nisi vestibulum quam amet, egestas aliquam cursus mauris
                                        dignissim tellus.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/lounge-cafe.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-cafe h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Lounge cafe</h3>
                                    <p class="card-text">Amet diam imperdiet nisi non eu, pharetra lorem amet, ac ut
                                        aliquam diam sed cras.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/bright-halls.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-sofa h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Bright halls</h3>
                                    <p class="card-text">Non est nullam amet netus ut vitae, penatibus lacus a ut sed
                                        molestie lectus lobortis.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                                <div
                                    class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5"
                                    style="background-image: url(/img/landing/yoga-studio/features/free-rugs.jpg);"></div>
                                <div class="card-body text-center">
                                    <i class="ai-rug h1 fw-normal text-primary d-block mb-4"></i>
                                    <h3>Free rugs</h3>
                                    <p class="card-text">Amet diam imperdiet nisi non eu, pharetra lorem amet, ac ut
                                        aliquam diam sed cras.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide w-auto h-auto">
                            <div class="card border-0 bg-primary card-hover h-100 py-4" style="max-width: 306px;"><img
                                    class="position-absolute top-0 start-0"
                                    src="/img/landing/yoga-studio/features/flower.svg" width="306" alt="Decor">
                                <div class="card-body position-relative z-2 text-center">
                                    <h3 class="text-white">Get started a free trial</h3>
                                    <p class="text-white fs-sm">The best yoga practices, adapted at a high level to the
                                        needs of the modern pace of life.</p><a class="btn btn-light text-primary"
                                                                                href="#">Try a free lesson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider controls (Prev / Next buttons) -->
                <div class="container d-flex justify-content-center justify-content-sm-end pt-3 mt-3 mt-lg-4">
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button"
                            id="prev-feature" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle" type="button"
                            id="next-feature" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>


        <!-- Classes (Tabs) -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-3">Our classes</h2>
            <p class="text-center pb-3 mb-3 mb-lg-4">Whether you are a beginner or an experienced yoga</p>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs flex-nowrap overflow-auto text-nowrap w-100 mx-auto pb-3 mb-3 mb-lg-4"
                role="tablist" style="max-width: 892px;">
                <li class="nav-item mb-0">
                    <a class="nav-link active" href="#beginners" data-bs-toggle="tab" role="tab">Beginners</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#stretching" data-bs-toggle="tab" role="tab">Stretching</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#fly-yoga" data-bs-toggle="tab" role="tab">Fly-yoga</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#for-pregnant" data-bs-toggle="tab" role="tab">For pregnant</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#healthy-back" data-bs-toggle="tab" role="tab">Healthy back</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#relax-yoga" data-bs-toggle="tab" role="tab">Relax yoga</a>
                </li>
            </ul>


            <!-- Tab content -->
            <div class="tab-content">

                <!-- Beginers -->
                <div class="tab-pane fade show active" id="beginners" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/beginners.jpg"
                                 alt="Beginners">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">Yoga for beginners</h2>
                                <p class="pb-3 mb-3 mb-xl-4">Purus magna lectus feugiat arcu tellus vitae urna neque, eu
                                    velit in vulputate sodales ut tellus amet lorem sit consectetur quisque justo
                                    laoreet proin.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-cafe d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Lounge cafe</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stretching -->
                <div class="tab-pane fade" id="stretching" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/stretching.jpg"
                                 alt="Stretching">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">Stretching</h2>
                                <p class="pb-3 mb-3 mb-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse id lectus nec nunc bibendum facilisis pellentesque ut eros. Praesent
                                    bibendum sed mi aliquet tempus.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-cafe d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Lounge cafe</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fly-yoga -->
                <div class="tab-pane fade" id="fly-yoga" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/fly-yoga.jpg"
                                 alt="Fly-yoga">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">Fly-yoga</h2>
                                <p class="pb-3 mb-3 mb-xl-4">Varius purus dui nunc faucibus mauris iaculis tortor enim
                                    cursus quisque eu, vel amet massa suscipit cursus sit mattis quis magnis dignissim
                                    dui fames tortor amet quis.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-rug d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Free rugs</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For pregnant -->
                <div class="tab-pane fade" id="for-pregnant" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/for-pregnant.jpg"
                                 alt="For pregnant">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">For pregnant</h2>
                                <p class="pb-3 mb-3 mb-xl-4">At duis est ante tortor, dictum dictumst nisl erat. Tellus
                                    erat pharetra eget vestibulum. Netus eu sit cursus et vehicula porttitor nulla
                                    turpis a. In volutpat at orci.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-cafe d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Lounge cafe</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Healthy back -->
                <div class="tab-pane fade" id="healthy-back" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/healthy-back.jpg"
                                 alt="Healthy back">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">Healthy back</h2>
                                <p class="pb-3 mb-3 mb-xl-4">Facilisi tempus pharetra, egestas dolor. Nulla lorem
                                    interdum cursus habitasse. Morbi aliquam, mauris, varius nulla tortor ut nullam. Est
                                    eu eu eget fames leo nisl est.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-cafe d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Lounge cafe</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Relax yoga -->
                <div class="tab-pane fade" id="relax-yoga" role="tabpanel">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">
                            <img class="rounded-5" src="/img/landing/yoga-studio/classes/relax-yoga.jpg"
                                 alt="Relax yoga">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                            <div class="ps-md-4 ps-lg-0">
                                <h2 class="mb-xl-4">Relax yoga</h2>
                                <p class="pb-3 mb-3 mb-xl-4">Aliquam risus, leo mattis commodo id pretium. In sapien,
                                    lacus, cursus id vulputate. Pellentesque quis et posuere maecenas sed aenean quisque
                                    ut. Pellentesque sed at.</p>
                                <div class="row row-cols-2 g-4 pb-2 pb-xl-0 mb-4 mb-xl-5">
                                    <div class="col">
                                        <i class="ai-towel d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Changing rooms</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-cafe d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Lounge cafe</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-sofa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Bright halls</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                    <div class="col">
                                        <i class="ai-spa d-block h2 text-primary fw-normal pb-2 mb-1"></i>
                                        <h3 class="h6 mb-2">Spa area</h3>
                                        <p class="fs-sm mb-0">Neque, blandit consectetur viverra placerat ante.</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary w-100 w-sm-auto" href="#">Try a free lesson</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Trainers (Grid) -->
        <section class="container pb-2 pb-sm-3 pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-4 pt-lg-5 pb-2 mb-3 mb-lg-4 mt-md-3 mt-lg-0">We employ the best
                trainers</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/01.jpg" width="340" alt="Alisa Black">
                        <h3 class="h5 mb-1">Alisa Black</h3>
                        <p class="mb-0 text-body-secondary">Fly-yoga trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#"><img
                            class="card-lifted d-block rounded-5 mb-3"
                            src="/img/landing/yoga-studio/trainers/02.jpg" width="340" alt="Michelle Yang">
                        <h3 class="h5 mb-1">Michelle Yang</h3>
                        <p class="mb-0 text-body-secondary">Fly-yoga and relax trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/03.jpg" width="340" alt="Robert Fox">
                        <h3 class="h5 mb-1">Robert Fox</h3>
                        <p class="mb-0 text-body-secondary">Stretching trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/04.jpg" width="340" alt="Jane Cooper">
                        <h3 class="h5 mb-1">Jane Cooper</h3>
                        <p class="mb-0 text-body-secondary">Fly-yoga trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/05.jpg" width="340" alt="Cody Fisher">
                        <h3 class="h5 mb-1">Cody Fisher</h3>
                        <p class="mb-0 text-body-secondary">Fly-yoga and relax trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/06.jpg" width="340" alt="Jenny Wilson">
                        <h3 class="h5 mb-1">Jenny Wilson</h3>
                        <p class="mb-0 text-body-secondary">Women's practices</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/07.jpg" width="340" alt="Annette Black">
                        <h3 class="h5 mb-1">Annette Black</h3>
                        <p class="mb-0 text-body-secondary">Fly-yoga trainer</p>
                    </a>
                </div>
                <div class="col text-center pt-2">
                    <a class="card-hover card-lifted d-inline-block text-decoration-none" href="#">
                        <img class="card-lifted d-block rounded-5 mb-3"
                             src="/img/landing/yoga-studio/trainers/08.jpg" width="340" alt="Ralph Edwards">
                        <h3 class="h5 mb-1">Ralph Edwards</h3>
                        <p class="mb-0 text-body-secondary">Stretching trainer, healthy back</p>
                    </a>
                </div>
            </div>
        </section>


        <!-- Schedule -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pb-3 pt-sm-3 pt-lg-5 mb-3 mb-lg-4">Schedule</h2>
            <div class="calendar" data-calendar-options='{
          "initialDate": "2022-08-01",
          "headerToolbar": {
            "left": "prev,next today",
            "center": "title",
            "right": "dayGridMonth,timeGridWeek,listWeek"
          },
          "eventTimeFormat": {
            "hour": "2-digit",
            "minute": "2-digit",
            "hour12": false
          },
          "events": [
            {
              "title": "Stretching",
              "start": "2022-08-01T16:30",
              "end": "2022-08-01T18:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-purple"]
            },
            {
              "title": "For pregnant",
              "start": "2022-08-02T07:30",
              "end": "2022-08-02T09:40",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-warning"]
            },
            {
              "title": "Healthy back",
              "start": "2022-08-02T12:00",
              "end": "2022-08-02T13:30",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-info"]
            },
            {
              "title": "Relax yoga",
              "start": "2022-08-02T18:45",
              "end": "2022-08-02T20:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-danger"]
            },
            {
              "title": "Beginners",
              "start": "2022-08-03T11:00",
              "end": "2022-08-03T13:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-success"]
            },
            {
              "title": "Relax yoga",
              "start": "2022-08-03T12:35",
              "end": "2022-08-03T14:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-danger"]
            },
            {
              "title": "Fly yoga",
              "start": "2022-08-04T09:00",
              "end": "2022-08-04T11:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-primary"]
            },
            {
              "title": "For pregnant",
              "start": "2022-08-05T07:30",
              "end": "2022-08-05T09:40",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-warning"]
            },
            {
              "title": "Beginners",
              "start": "2022-08-08T11:00",
              "end": "2022-08-03T13:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-success"]
            },
            {
              "title": "Relax yoga",
              "start": "2022-08-08T12:35",
              "end": "2022-08-03T14:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-danger"]
            },
            {
              "title": "For pregnant",
              "start": "2022-08-09T07:30",
              "end": "2022-08-09T09:40",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-warning"]
            },
            {
              "title": "Fly yoga",
              "start": "2022-08-10T09:00",
              "end": "2022-08-10T11:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-primary"]
            },
            {
              "title": "Stretching",
              "start": "2022-08-11T16:30",
              "end": "2022-08-11T18:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-purple"]
            },
            {
              "title": "Healthy back",
              "start": "2022-08-11T12:00",
              "end": "2022-08-11T13:30",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-info"]
            },
            {
              "title": "Relax yoga",
              "start": "2022-08-12T12:35",
              "end": "2022-08-12T14:00",
              "classNames": ["event-custom-style", "bg-light", "text-nav", "border-0", "rounded-1", "p-2", "ps-3", "border-start", "border-5", "border-danger"]
            }
          ]
        }'></div>
            <div class="text-center pt-4 pt-md-5 mt-2 mt-sm-3 mt-md-0">
                <a class="btn btn-outline-primary fs-base" href="#">Try a free lesson</a>
            </div>
        </section>


        <!-- CTA -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="bg-primary rounded-5 overflow-hidden mt-2 mt-sm-4 mt-lg-5">
                <img class="position-absolute top-50 start-0 translate-middle-y d-none d-md-block"
                     src="/img/landing/yoga-studio/cta/bg.svg" width="186" alt="Background flower">
                <div class="row position-relative z-2 align-items-center">
                    <div class="col-md-6 col-lg-5 offset-lg-1">
                        <div class="text-center text-md-start py-5 px-4 px-sm-5 pe-md-0 ps-lg-4 ps-xl-5">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                                <span class="bg-white opacity-70 me-2 d-none d-md-block"
                                      style="width: 40px; height: 1px; margin-top: -1px;"></span>
                                <span
                                    class="fs-xs fw-semibold text-white opacity-70 text-uppercase">Special offer</span>
                            </div>
                            <h2 class="h1 text-white pb-2 pb-sm-3">Get 30% off when you buy an annual pass</h2>
                            <a class="btn btn-outline-light fs-base" href="#">Buy an annual pass</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="d-block mx-auto mx-md-0 mt-n4 mt-md-0"
                             src="/img/landing/yoga-studio/cta/image.png" width="534" alt="Image">
                    </div>
                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-2">
                <div class="row">

                    <!-- Sticky sidebar -->
                    <div class="col-md-5 col-xl-4 mb-5 mb-md-0" style="margin-top: -125px;">
                        <div class="position-sticky top-0" style="padding-top: 125px;">
                            <h2 class="h1 pb-2 pb-lg-3">Choose a suitable subscription</h2>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="mb-4">The best yoga and meditation practices, adapted at a high level to
                                        the needs of the modern pace of life.</p>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <svg class="d-block flex-shrink-0 text-primary" width="24" height="24"
                                         viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.9266 11.9488V7.48998C11.9266 7.22049 11.7181 7 11.4633 7C11.2085 7 11 7.22049 11 7.48998V12.1448C11 12.2673 11.0463 12.3898 11.139 12.4878L16.2124 15.853C16.305 15.951 16.4208 16 16.5367 16C16.6525 16 16.7683 15.951 16.861 15.853C17.0463 15.657 17.0463 15.363 16.861 15.167L11.9266 11.9488Z"></path>
                                        <path
                                            d="M12 1C5.92609 1 1 5.92609 1 12C1 18.0739 5.92609 23 12 23C18.0739 23 23 18.0739 23 12C23 5.92609 18.0739 1 12 1ZM12 22.0435C6.45217 22.0435 1.95652 17.5478 1.95652 12C1.95652 6.45217 6.45217 1.95652 12 1.95652C17.5478 1.95652 22.0435 6.45217 22.0435 12C22.0435 17.5478 17.5478 22.0435 12 22.0435Z"></path>
                                    </svg>
                                    <div class="ps-2 ms-1">
                                        <div class="text-nav fw-medium">lesson duration 90 minutes</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <svg class="d-block flex-shrink-0 text-primary" width="24" height="24"
                                         viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 24C4.935 24 0 19.065 0 13C0 6.935 4.935 2 11 2C13.109 2 15.161 2.601 16.934 3.739C17.166 3.888 17.234 4.197 17.085 4.43C16.935 4.662 16.626 4.73 16.394 4.581C14.782 3.546 12.917 3 11 3C5.486 3 1 7.486 1 13C1 18.514 5.486 23 11 23C16.514 23 21 18.514 21 13C21 12.67 20.984 12.345 20.953 12.024C20.926 11.749 21.127 11.504 21.402 11.478C21.682 11.455 21.922 11.652 21.948 11.927C21.982 12.28 22 12.638 22 13C22 19.065 17.065 24 11 24Z"></path>
                                        <path
                                            d="M12.5002 15.2502C12.3723 15.2502 12.2442 15.2012 12.1462 15.1042L7.64625 10.6042C7.45125 10.4092 7.45125 10.0922 7.64625 9.89725C7.84125 9.70225 8.15825 9.70225 8.35325 9.89725L12.4992 14.0432L23.1462 3.39625C23.3412 3.20125 23.6583 3.20125 23.8533 3.39625C24.0483 3.59125 24.0483 3.90825 23.8533 4.10325L12.8532 15.1032C12.7562 15.2012 12.6282 15.2502 12.5002 15.2502Z"></path>
                                    </svg>
                                    <div class="ps-2 ms-1">
                                        <div class="text-nav fw-medium">subscription valid for 30 days</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="d-block flex-shrink-0 text-primary" width="24" height="24"
                                         viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.479 10.9238C23.9514 10.4634 24.1181 9.78767 23.9144 9.15956C23.7101 8.53144 23.1781 8.08307 22.5245 7.98791L16.7134 7.14354C16.4659 7.1075 16.252 6.95227 16.1415 6.72784L13.5435 1.46216C13.2518 0.870571 12.6597 0.50293 11.9999 0.50293C11.3405 0.50293 10.7485 0.870571 10.4568 1.46216L7.85829 6.72784C7.74776 6.95227 7.53342 7.1075 7.28592 7.14354L1.47479 7.98839C0.821687 8.08307 0.289688 8.53144 0.0854429 9.15956C-0.118322 9.78767 0.0484385 10.4634 0.520845 10.9238L4.72541 15.0221C4.90467 15.197 4.98684 15.4489 4.94455 15.6949L3.95216 21.4825C3.84067 22.1327 4.10258 22.7772 4.6365 23.1655C5.16994 23.5543 5.86438 23.6047 6.44924 23.2967L11.6462 20.5641C11.8677 20.4478 12.1321 20.4478 12.3536 20.5641L17.551 23.2967C17.8048 23.4303 18.0797 23.4961 18.3531 23.4961C18.7083 23.4961 19.062 23.3851 19.3638 23.1655C19.8977 22.7772 20.1596 22.1327 20.0481 21.4825L19.0552 15.6954C19.013 15.4489 19.0951 15.1975 19.2744 15.0226L23.479 10.9238ZM18.1085 15.8578L19.1009 21.6449C19.1509 21.9362 19.0379 22.2144 18.7986 22.3884C18.5588 22.5619 18.2604 22.583 17.9985 22.4465L12.801 19.7135C12.5506 19.5823 12.2748 19.516 11.9999 19.516C11.725 19.516 11.4496 19.5823 11.1988 19.714L6.0023 22.4465C5.73943 22.583 5.44099 22.5619 5.20166 22.3884C4.96234 22.2144 4.84988 21.9366 4.89938 21.6449L5.89177 15.8578C5.98741 15.2994 5.80238 14.7294 5.39678 14.3344L1.19173 10.2356C0.979796 10.0289 0.90771 9.73769 0.9995 9.45655C1.09081 9.17494 1.32004 8.98174 1.61272 8.93897L7.42337 8.0946C7.9842 8.01338 8.4691 7.6616 8.71948 7.15315L11.318 1.88747C11.4487 1.62219 11.7039 1.46408 11.9994 1.46408C12.2955 1.46408 12.5502 1.62219 12.6814 1.88747L15.2798 7.15315C15.5302 7.6616 16.0146 8.01338 16.5755 8.0946L22.3866 8.93897C22.6793 8.98174 22.9085 9.17494 22.9998 9.45655C23.0911 9.73769 23.0195 10.0289 22.8076 10.2356L18.603 14.3339C18.1974 14.7294 18.0124 15.2989 18.1085 15.8578Z"></path>
                                    </svg>
                                    <div class="ps-2 ms-1">
                                        <div class="text-nav fw-medium">valid for all types of classes</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Pricing list -->
                    <div class="col-md-7 offset-xl-1">
                        <div class="ps-md-4 ps-xxl-5">

                            <!-- Pricing card -->
                            <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                                    <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                                        <h3 class="mb-2">4 lessons</h3>
                                        <p class="fs-lg mb-0">Valid for all types of classes</p>
                                    </div>
                                    <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                                        <div class="h3 text-primary mb-0 mb-sm-2">$40</div>
                                        <span class="fs-sm">$10 per class</span>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto"
                                            type="button">Buy
                                    </button>
                                </div>
                            </div>

                            <!-- Pricing card -->
                            <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                                    <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                                        <h3 class="mb-2">8 lessons</h3>
                                        <p class="fs-lg mb-0">Valid for all types of classes</p>
                                    </div>
                                    <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                                        <div class="h3 text-primary mb-0 mb-sm-2">$72</div>
                                        <span class="fs-sm">$9 per class</span>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto"
                                            type="button">Buy
                                    </button>
                                </div>
                            </div>

                            <!-- Pricing card -->
                            <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                                    <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                                        <h3 class="mb-2">16 lessons</h3>
                                        <p class="fs-lg mb-0">Valid for all types of classes</p>
                                    </div>
                                    <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                                        <div class="h3 text-primary mb-0 mb-sm-2">$120</div>
                                        <span class="fs-sm">$7 per class</span>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto"
                                            type="button">Buy
                                    </button>
                                </div>
                            </div>

                            <!-- Pricing card -->
                            <div class="card border-0 bg-secondary rounded-4 position-relative">
                                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                                    <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                                        <h3 class="mb-2">Yoga for pregnant</h3>
                                        <p class="fs-lg mb-0">Valid for all types of classes</p>
                                    </div>
                                    <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                                        <div class="h3 text-primary mb-0 mb-sm-2">$12</div>
                                        <span class="fs-sm">per class</span>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto"
                                            type="button">Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Instagram -->
        <section class="position-relative pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="bg-secondary position-absolute start-0 bottom-0 w-100 d-none d-sm-block"
                 style="height: 110px;"></div>
            <div class="bg-secondary position-absolute start-0 bottom-0 w-100 d-sm-none" style="height: 80px;"></div>
            <div class="container position-relative z-2 pt-2 pt-sm-4 pt-lg-5 mt-md-2 mt-lg-0">
                <h2 class="h1 text-center pb-3 mb-3 mb-lg-4">See more photos on <a href="#"
                                                                                   class="text-primary text-decoration-none">Instagram</a>
                </h2>
                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="row g-3 g-sm-4">
                            <div class="col-5">
                                <a class="d-block card-hover zoom-effect" href="#">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                        <i class="ai-instagram lead text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-5">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/yoga-studio/instagram/01.jpg"
                                             alt="Instagram image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-7">
                                <a class="d-block card-hover zoom-effect" href="#">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                        <i class="ai-instagram lead text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-25"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-5">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/yoga-studio/instagram/02.jpg"
                                             alt="Instagram image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-7">
                                <a class="d-block card-hover zoom-effect" href="#">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                        <i class="ai-instagram lead text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-20"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-5">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/yoga-studio/instagram/04.jpg"
                                             alt="Instagram image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-5">
                                <a class="d-block card-hover zoom-effect" href="#">
                                    <div
                                        class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                        <i class="ai-instagram lead text-white position-relative z-2"></i>
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-20"></div>
                                    </div>
                                    <div class="zoom-effect-wrapper rounded-5">
                                        <img class="zoom-effect-img"
                                             src="/img/landing/yoga-studio/instagram/05.jpg"
                                             alt="Instagram image">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <a class="d-block card-hover zoom-effect" href="#">
                            <div
                                class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                                <i class="ai-instagram lead text-white position-relative z-2"></i>
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-20"></div>
                            </div>
                            <div class="zoom-effect-wrapper rounded-5">
                                <img class="zoom-effect-img" src="/img/landing/yoga-studio/instagram/03.jpg"
                                     alt="Instagram image">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer bg-secondary py-5">
        <div class="container pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
            <div class="border-bottom text-center pb-4">
                <a class="navbar-brand d-inline-flex text-nav py-0 mb-3 mb-md-4" href="/">
            <span class="text-primary flex-shrink-0 me-2">
              <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                      d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg>
            </span>
                    <span>Around</span>
                </a>
                <ul class="nav justify-content-center py-1 pb-sm-2">
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 px-3 mx-1" href="#">Schedule</a>
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
                <div class="d-flex justify-content-center gap-3 order-sm-2 mb-4 mb-sm-0">
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#"
                       aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#"
                       aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle" href="#"
                       aria-label="YouTube">
                        <i class="ai-youtube"></i>
                    </a>
                </div>
                <p class="nav fs-sm order-sm-1 justify-content-center mb-0">
                    <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                    <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank"
                       rel="noopener">Stackbros</a>
                </p>
            </div>
        </div>
    </footer>

@endsection
