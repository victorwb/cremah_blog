@extends('layouts.base', ['title' => 'Cremah | Blog Homepage'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Page title -->
        <section class="container pt-5 pb-4 pb-lg-0 my-md-2 my-lg-5">
            <div class="row pt-5 pb-4 pb-lg-5 mb-2 mt-1 mt-sm-2 my-xl-3">
                <div class="col-md-7">
                    <h1 class="display-3 fw-medium text-uppercase mb-0">Blogs about life, work and business</h1>
                </div>
                <div class="col-md-5 col-lg-4 offset-lg-1 pt-3 pt-md-2">
                    <p class="mb-0">A lot of useful information about health, beauty, travel and life in our blog.
                        Simple and accessible about all important aspects of life.</p>
                </div>
            </div>
            <hr>
        </section>


        <!-- Featured posts -->
        <section class="container mt-2 mt-md-0 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">

            <!-- Filters -->
            <div class="row align-items-center">
                <div class="col-sm-8 col-lg-4 col-xl-3 offset-xl-1 order-sm-2 mb-3 mb-sm-0">
                    <div class="position-relative mb-lg-2">
                        <i class="ai-search fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control rounded-pill ps-5" type="search" placeholder="Enter keywords..">
                    </div>
                </div>
                <div class="col-sm-4 col-lg-8 order-sm-1">

                    <!-- Visible on screens > 991px -->
                    <div class="d-none d-lg-flex flex-wrap align-items-center">
                        <h3 class="h6 mb-2 me-4">Topics:</h3>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Nature</a>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Design</a>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Books</a>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Fashion</a>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2 me-3" href="#">Inspiration</a>
                        <a class="btn btn-outline-secondary px-4 rounded-pill mb-2" href="#">Psychology</a>
                    </div>

                    <!-- Visible on screens < 992px -->
                    <div class="dropdown d-lg-none">
                        <button class="btn btn-outline-secondary dropdown-toggle rounded-pill w-100" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Topics
                        </button>
                        <div class="dropdown-menu my-1">
                            <a class="dropdown-item" href="#">Nature</a>
                            <a class="dropdown-item" href="#">Design</a>
                            <a class="dropdown-item" href="#">Books</a>
                            <a class="dropdown-item" href="#">Fashion</a>
                            <a class="dropdown-item" href="#">Inspiration</a>
                            <a class="dropdown-item" href="#">Psychology</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-sm-2 mt-lg-0 pt-4 pt-lg-5 pb-md-4">
                <div class="col-md-7 pb-2 pb-md-0 mb-4 mb-md-0">

                    <!-- Article -->
                     @foreach($blogs as $blog)
                     
                    <article class="pb-5 pt-sm-1 mb-lg-3 mb-xl-4">
                    @foreach($blog_details as $blog_detail)
                    @if($blog_detail->blog_id==$blog->id && $blog_detail->position==1 )
                        <a href="{{ route('blogs.show',[$blog->id])}}">
                            <img class="rounded-5" src="{{Storage::url($blog_detail->image)}}" alt="Image">
                        </a>
                        <h2 class="h3 pt-3 mt-2 mt-md-3">
                            <a href="{{ route('blogs.show',[$blog->id])}}">{{$blog->title}}</a>
                        </h2>
                        
                        <p>{{Str::limit($blog_detail->text, 180)}}</p>
                        @endif
                        @endforeach 
                        <div class="d-flex flex-wrap align-items-center pt-1 mt-n2">
                            <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                                6
                                <i class="ai-share fs-lg ms-1"></i>
                            </a>
                            <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                               href="#">
                                12
                                <i class="ai-message fs-lg ms-1"></i>
                            </a>
                            <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                            <span class="fs-sm text-body-secondary mt-2">12 hours ago</span>
                            <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                            <a class="badge text-nav fs-xs border mt-2" href="#">{{$blog->type}}</a>
                        </div>
                    </article>
 
              @endforeach     
                    <!-- More articles button -->
                    <a class="btn btn-primary mt-n2 mt-sm-n1 mt-md-0" href="{{ route('third', ['pages', 'blog', 'list-sidebar'])}}">Read all
                        articles</a>
                </div>


                <!-- Relevant articles sidebar -->
                <aside class="col-md-5 col-xl-4 offset-xl-1" style="margin-top: -115px;">
                    <div class="position-sticky top-0 ps-md-4 ps-xl-0" style="padding-top: 125px;">
                        <h2 class="h4">Relevant articles</h2>

                        <!-- Article -->
                        <article class="my-1 my-lg-0 py-2 py-lg-3">
                            <h3 class="h6 mb-2 mb-lg-3">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Instagram trends that will definitely work and bring
                                    results in the new 2022</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mt-n2">
                                <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                                    4
                                    <i class="ai-share fs-lg ms-1"></i>
                                </a>
                                <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                   href="#">
                                    6
                                    <i class="ai-message fs-lg ms-1"></i>
                                </a>
                                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                                <span class="fs-sm text-body-secondary mt-2">9 hours ago</span>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="my-1 my-lg-0 py-2 py-lg-3">
                            <h3 class="h6 mb-2 mb-lg-3">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">A session with a psychologist as a personal choice or a
                                    fashion trend in society</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mt-n2">
                                <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                                    7
                                    <i class="ai-share fs-lg ms-1"></i>
                                </a>
                                <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                   href="#">
                                    12
                                    <i class="ai-message fs-lg ms-1"></i>
                                </a>
                                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                                <span class="fs-sm text-body-secondary mt-2">2 days ago</span>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="my-1 my-lg-0 py-2 py-lg-3">
                            <h3 class="h6 mb-2 mb-lg-3">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">Travel destinations to inspire and restore resources</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mt-n2">
                                <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                                    5
                                    <i class="ai-share fs-lg ms-1"></i>
                                </a>
                                <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                   href="#">
                                    11
                                    <i class="ai-message fs-lg ms-1"></i>
                                </a>
                                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                                <span class="fs-sm text-body-secondary mt-2">3 days ago</span>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="my-1 my-lg-0 py-2 py-lg-3">
                            <h3 class="h6 mb-2 mb-lg-3">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">How to look for inspiration for new goals in life and
                                    remember to give yourself a break?</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mt-n2"><a
                                    class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">18<i
                                        class="ai-share fs-lg ms-1"></i></a><a
                                    class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                    href="#">26<i class="ai-message fs-lg ms-1"></i></a><span
                                    class="fs-xs opacity-20 mt-2 mx-3">|</span><span
                                    class="fs-sm text-body-secondary mt-2">July 13, 2022</span></div>
                        </article>

                        <!-- Article -->
                        <article class="my-1 my-lg-0 py-2 py-lg-3">
                            <h3 class="h6 mb-2 mb-lg-3">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">The 15 best books every person should read</a>
                            </h3>
                            <div class="d-flex flex-wrap align-items-center mt-n2">
                                <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                                    15
                                    <i class="ai-share fs-lg ms-1"></i>
                                </a>
                                <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2"
                                   href="#">
                                    23
                                    <i class="ai-message fs-lg ms-1"></i>
                                </a>
                                <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                                <span class="fs-sm text-body-secondary mt-2">May 25, 2022</span>
                            </div>
                        </article>
                    </div>
                </aside>
            </div>
        </section>


        <!-- Popular articles (Carousel) -->
        <section class="bg-secondary py-5">
            <div class="container d-flex align-items-center pt-lg-2 pt-xl-4 pt-xxl-5 pb-3 mt-1 mt-sm-3 mb-3 my-md-4">
                <h2 class="h1 mb-0">Most popular</h2>

                <!-- Slider control buttons (Prev / Next) -->
                <div class="d-flex ms-auto">
                    <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button"
                            id="prev-popular" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button"
                            id="next-popular" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Swiper slider -->
            <div class="container-start">
                <div class="swiper" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": "#prev-popular",
              "nextEl": "#next-popular"
            },
            "breakpoints": {
              "576": {
                "slidesPerView": "auto"
              }
            }
          }'>
                    <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                     
                     @foreach($blog_details as $blog_detail)
                     @if($blog_detail->blog_id==$blog->id && $blog_detail->position==1 )
                        <!-- Item -->
                        <article class="swiper-slide w-sm-auto h-auto">
                            <div class="card h-100 border-0 mx-auto" style="max-width: 416px;">
                                <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">
                                    <img class="card-img-top" src="{{Storage::url($blog_detail->image)}}" alt="Post image">
                                </a>
                                <div class="card-body pb-4">
                                    <div class="d-flex align-items-center mb-4 mt-n1">
                                        <span class="fs-sm text-body-secondary">12 hours ago</span>
                                        <span class="fs-xs opacity-20 mx-3">|</span>
                                        <a class="badge text-nav fs-xs border" href="#">Books</a>
                                    </div>
                                    <h3 class="h4 card-title">
                                        <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">{{$blog->title}}</a>
                                    </h3>
                                    <p class="card-text">{{Str::limit($blog_detail->text, 180)}}</p>
                                </div>
                                <!-- <div class="card-footer pt-3">
                                    <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                        <img class="rounded-circle" src="/img/avatar/06.jpg" width="48"
                                             alt="Post author">
                                        <h6 class="ps-3 mb-0">Jenny Wilson</h6>
                                    </a>
                                </div> -->
                            </div>
                        </article>
                        @endif
                        @endforeach
                        @endforeach
                        
                    </div>
                </div>
            </div>

            <!-- All articles button -->
            <div class="container text-center pt-4 pb-1 pb-sm-3 pb-md-4 py-lg-5 mb-xl-1 mb-xxl-4 mt-2 mt-lg-0">
                <a class="btn btn-primary mb-1" href="{{ route('third', ['pages', 'blog', 'grid-sidebar'])}}">Read all articles</a>
            </div>
        </section>


        <!-- Latest posts -->
        <section class="container py-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">
            <h2 class="h1 pb-3 py-md-4">Latest posts</h2>
            <div class="row pb-md-4 pb-lg-5">

                <!-- Featured article -->
                <div class="col-lg-6 pb-2 pb-lg-0 mb-4 mb-lg-0">
                    <article
                        class="card h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center me-lg-4"
                        style="background-image: url(/img/landing/blog/04.jpg);">
                        <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                        <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                            <h3 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                <a class="stretched-link text-light" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Travel destinations to
                                    inspire and restore resources</a>
                            </h3>
                            <p class="card-text text-light opacity-70">Morbi et massa scelerisque sit commodo dignissim
                                faucibus vel quisque proin lectus laoreet pharetra at condimentum...</p>
                            <div class="d-flex align-items-center">
                                <span class="fs-sm text-light opacity-50">9 hours ago</span>
                                <span class="fs-xs text-light opacity-30 mx-3">|</span>
                                <a class="badge text-ligh fs-xs border border-light" href="#">Travel</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Other articles -->
                <div class="col-lg-6">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">

                        <!-- Article -->
                        <article class="col py-1 py-xl-2">
                            <div class="border-bottom pb-4 ms-xl-3">
                                <h3 class="h4">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">The 15 best books every person should read</a>
                                </h3>
                                <p>Egestas neque sceleri semper sit at eu cursus faucibus velit cras aliquam sed dictum
                                    at at orci...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">12 hours ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Books</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col py-1 py-xl-2">
                            <div class="border-bottom pb-4 ms-xl-3">
                                <h3 class="h4">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">Destinations to inspire and restore resources</a>
                                </h3>
                                <p>Purus lectus odio lacus nibh habitant ac sapien malesuada sed convallis adipiscing
                                    eget convallis...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">3 days ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Travel</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col py-1 py-xl-2">
                            <div class="border-bottom pb-4 ms-xl-3">
                                <h3 class="h4">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">The fashion for eco bags with vintage prints</a>
                                </h3>
                                <p>Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin
                                    lectus...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">12 hours ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Fashion</a>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col py-1 py-xl-2">
                            <div class="border-bottom pb-4 ms-xl-3">
                                <h3 class="h4">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">How to look for inspiration for new goals</a>
                                </h3>
                                <p>Nec gravida senectus donec vivamus quam urna facilisis viverra eget in suspendisse
                                    dignissim...</p>
                                <div class="d-flex align-items-center">
                                    <span class="fs-sm text-body-secondary">3 days ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Psychology</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
     <!-- Read more button -->
            <div class="text-center pt-4 mt-2 mt-lg-0 pt-lg-5 pb-sm-2 pb-md-4">
                <a class="btn btn-primary" href="{{ route('third', ['pages', 'blog', 'grid-sidebar'])}}">Read all articles</a>
            </div>
        </section>
    </main>


    <!-- Subscription -->
    <section class="container mb-2 mb-md-3 mb-xl-4 pb-2" data-bs-theme="dark">
        <div class="position-relative bg-dark rounded-5 overflow-hidden p-md-5 p-4">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background-color: rgba(255, 255, 255, .03);"></div>
            <div class="position-relative p-xl-5 p-md-4 py-4 px-sm-3">
                <h2 class="h1 pb-md-4 pb-3 mt-n2">Stay up to date with important news!</h2>
                <div class="row gy-md-5 gy-4 gx-xl-5">
                    <div class="col-lg-7">
                        <div class="row row-cols-sm-3 row-cols-2 gy-lg-4 gy-3 gx-xl-4 gx-sm-3 gx-2">
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium" for="advert-updates">Advertising
                                        Updates</label>
                                    <input class="form-check-input" id="advert-updates" type="checkbox" checked>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium" for="newsletter">Daily
                                        Newsletter</label>
                                    <input class="form-check-input" id="newsletter" type="checkbox">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium" for="week-in-review">Week in
                                        Review</label>
                                    <input class="form-check-input" id="week-in-review" type="checkbox">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium"
                                           for="inspiration">Inspiration</label>
                                    <input class="form-check-input" id="inspiration" type="checkbox">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium"
                                           for="psychology">Psychology</label>
                                    <input class="form-check-input" id="psychology" type="checkbox">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check mb-0">
                                    <label class="form-check-label fs-base fw-medium" for="design">Design</label>
                                    <input class="form-check-input" id="design" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="input-group rounded-pill">
                            <input class="form-control" type="text" placeholder="Your email">
                            <button class="btn btn-primary rounded-pill" type="button">Button</button>
                        </div>
                        <div class="form-text mt-3 fs-sm">* Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy
                                policy</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer pt-lg-5 pt-4 pb-5">
        <div class="container">
            <div class="row gy-md-5 gy-4 mb-md-5 mb-4 pb-lg-2">
                <div class="col-lg-3">
                    <a class="navbar-brand d-inline-flex align-items-center mb-lg-4 mb-3" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                        <span class="text-nav">Cremah</span>
                    </a>
                    <p class="mb-4 pb-lg-3 fs-xs text-body-secondary" style="max-width: 306px;">Morbi et massa fames ac
                        scelerisque sit commodo dignissim faucibus vel quisque proin lectus laoreet sem adipiscing
                        sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit</p>
                    <div class="d-flex mt-n3 ms-n3">
                        <a class="btn btn-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3 ms-3" href="#"
                           aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#"
                           aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-linkedin rounded-circle mt-3 ms-3" href="#"
                           aria-label="LnkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-1 col-lg-9">
                    <div class="row row-cols-sm-4 row-cols-1">
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Relevant blogs</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Top author</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Latest news</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Business</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Marketing</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Design</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Psychology</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Books</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Inspiration</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Analytics</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Ecommerce</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Brand strategy</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Travels</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0 text-primary" href="#">example@gmail.com</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="#">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank"
                   rel="noopener">Shiningstar</a>
            </p>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection