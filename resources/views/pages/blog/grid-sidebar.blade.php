@extends('layouts.base', ['title' => 'Around | Blog Grid with Sidebar'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog grid with sidebar</li>
            </ol>
        </nav>

        <div class="row mb-md-2 mb-xl-4">

            <!-- Blog posts -->
            <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
                <h1 class="pb-3 pb-lg-4">Blog grid with sidebar</h1>
                <div class="masonry-grid mb-2 mb-md-4 pb-lg-3" data-columns="2">

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">9 hours ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Brand strategy</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Business strategy for a brand of vintage bags</a>
                                </h3>
                                <p class="card-text">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/05.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Darlene Robertson</h6>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">
                                <img class="card-img-top" src="/img/blog/grid/01.jpg" alt="Post image">
                            </a>
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">12 hours ago</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Books</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">Top books for inspiration</a>
                                </h3>
                                <p class="card-text">Vulputate auctor lacus imperdiet facilisi tristique nisl pulvinar porta diam duis odio</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Jenny Wilson</h6>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">July 16, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Inspiration</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">How to look for inspiration for new goals</a>
                                </h3>
                                <p class="card-text">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/12.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Guy Hawkins</h6>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">June 10, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Ecommerce</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Sales on social networks for the eco cosmetics</a>
                                </h3>
                                <p class="card-text">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus et massa fames ac scelerisque sit commodo dignissim...</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/11.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Lillia Black</h6>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">
                                <img class="card-img-top" src="/img/blog/grid/02.jpg" alt="Post image">
                            </a>
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">January 9, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Travel</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">Ways to travel in 2022</a>
                                </h3>
                                <p class="card-text">Duis consectetur quis enim iaculis eu sagittis posuere imperdiet scelerisque</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/05.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Darlene Robertson</h6>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Post -->
                    <article class="masonry-grid-item">
                        <div class="card border-0 bg-secondary">
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center mb-4 mt-n1">
                                    <span class="fs-sm text-body-secondary">December 15, 2022</span>
                                    <span class="fs-xs opacity-20 mx-3">|</span>
                                    <a class="badge text-nav fs-xs border" href="#">Inspiration</a>
                                </div>
                                <h3 class="h4 card-title">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">Destinations to inspire and restore resources</a>
                                </h3>
                                <p class="card-text">Non purus odio venenatis velit sed tellus sed ultrices neque adipiscing sit turpis vel nisl lacus, aenean sed luctus adipiscing ut orci molestie arcu, sapien sed felis...</p>
                            </div>
                            <div class="card-footer pt-3">
                                <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                                    <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Post author">
                                    <h6 class="ps-3 mb-0">Jenny Wilson</h6>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="row gy-3 align-items-center">
                    <div class="col col-md-4 col-6 order-md-1 order-1">
                        <div class="d-flex align-items-center">
                            <span class="text-body-secondary fs-sm">Show</span>
                            <select class="form-select form-select-flush w-auto">
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                        <button class="btn btn-primary w-md-auto w-100" type="button">Load more posts</button>
                    </div>
                    <div class="col col-md-4 col-6 order-md-3 order-2">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm justify-content-end">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- Sidebar (offcanvas on sreens < 992px) -->
            <aside class="col-lg-3 offset-xl-1">
                <div class="offcanvas-lg offcanvas-end" id="sidebarBlog">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title">Sidebar</h4>
                        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarBlog" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <!-- Search box -->
                        <div class="position-relative mb-4 mb-lg-5">
                            <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                        </div>

                        <!-- Category links -->
                        <h4 class="pt-1 pt-lg-0 mt-lg-n2">Categories:</h4>
                        <ul class="nav flex-column mb-lg-5 mb-4">
                            <li class="mb-2">
                                <a class="nav-link d-flex p-0 active" href="#">
                                    All categories
                                    <span class="fs-sm text-body-secondary ms-2">(110)</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="nav-link d-flex p-0" href="#">
                                    Inspiration
                                    <span class="fs-sm text-body-secondary ms-2">(34)</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="nav-link d-flex p-0" href="#">
                                    Brand strategy
                                    <span class="fs-sm text-body-secondary ms-2">(8)</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="nav-link d-flex p-0" href="#">
                                    Advertisement
                                    <span class="fs-sm text-body-secondary ms-2">(45)</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="nav-link d-flex p-0" href="#">
                                    Ecommerce
                                    <span class="fs-sm text-body-secondary ms-2">(17)</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link d-flex p-0" href="#">
                                    Travel &amp; Vacation
                                    <span class="fs-sm text-body-secondary ms-2">(6)</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Featured posts widget -->
                        <h4 class="pt-3 pt-lg-0 pb-1">Trending posts:</h4>
                        <div class="mb-lg-5 mb-4">
                            <article class="position-relative d-flex align-items-center mb-4">
                                <img class="rounded" src="/img/blog/sidebar/01.jpg" width="92" alt="Post image">
                                <div class="ps-3">
                                    <h4 class="h6 mb-2">
                                        <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Instagram trends that will definitely work</a>
                                    </h4>
                                    <span class="fs-sm text-body-secondary">13 hours ago</span>
                                </div>
                            </article>
                            <article class="position-relative d-flex align-items-center mb-4">
                                <img class="rounded" src="/img/blog/sidebar/02.jpg" width="92" alt="Post image">
                                <div class="ps-3">
                                    <h4 class="h6 mb-2">
                                        <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">A session with a psychologist</a>
                                    </h4>
                                    <span class="fs-sm text-body-secondary">May 12, 2022</span>
                                </div>
                            </article>
                            <article class="position-relative d-flex align-items-center">
                                <img class="rounded" src="/img/blog/sidebar/03.jpg" width="92" alt="Post image">
                                <div class="ps-3">
                                    <h4 class="h6 mb-2">
                                        <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">How to look for inspiration for new goals</a>
                                    </h4>
                                    <span class="fs-sm text-body-secondary">June 10, 2022</span>
                                </div>
                            </article>
                        </div>

                        <!-- Social buttons -->
                        <h4 class="pt-3 pt-lg-0 pb-1">Join us:</h4>
                        <div class="d-flex mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
                            <a class="btn btn-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3 ms-3" href="#" aria-label="Instagram">
                                <i class="ai-instagram"></i>
                            </a>
                            <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#" aria-label="Facebook">
                                <i class="ai-facebook"></i>
                            </a>
                            <a class="btn btn-secondary btn-icon btn-sm btn-telegram rounded-circle mt-3 ms-3" href="#" aria-label="Telegram">
                                <i class="ai-telegram"></i>
                            </a>
                            <a class="btn btn-secondary btn-icon btn-sm btn-x rounded-circle mt-3 ms-3" href="#" aria-label="X">
                                <i class="ai-x"></i>
                            </a>
                        </div>

                        <!-- Banner -->
                        <div class="position-relative mb-3">
                            <div class="position-absolute w-100 text-center top-0 start-50 translate-middle-x pt-4" style="max-width: 15rem;" data-bs-theme="light">
                                <h3 class="h2 pt-3 mb-0">Your banner here!</h3>
                            </div>
                            <img class="rounded-5" src="/img/blog/sidebar/banner.jpg" alt="Banner">
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>


    <!-- Sidebar toggle button -->
    <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarBlog">
        <i class="ai-layout-column me-2"></i>
        Sidebar
    </button>

</main>

<section class="container mb-2 mb-md-3 mb-xl-4 pb-2" data-bs-theme="dark">
    <div class="position-relative bg-dark rounded-5 overflow-hidden p-md-5 p-4">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .03);"></div>
        <div class="position-relative p-xl-5 p-md-4 py-4 px-sm-3">
            <h2 class="h1 pb-md-4 pb-3 mt-n2">Stay up to date with important news!</h2>
            <div class="row gy-md-5 gy-4 gx-xl-5">
                <div class="col-lg-7">
                    <div class="row row-cols-sm-3 row-cols-2 gy-lg-4 gy-3 gx-xl-4 gx-sm-3 gx-2">
                        <div class="col">
                            <div class="form-check mb-0">
                                <label class="form-check-label fs-base fw-medium" for="advert-updates">Advertising Updates</label>
                                <input class="form-check-input" id="advert-updates" type="checkbox" checked>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-0">
                                <label class="form-check-label fs-base fw-medium" for="newsletter">Daily Newsletter</label>
                                <input class="form-check-input" id="newsletter" type="checkbox">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-0">
                                <label class="form-check-label fs-base fw-medium" for="week-in-review">Week in Review</label>
                                <input class="form-check-input" id="week-in-review" type="checkbox">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-0">
                                <label class="form-check-label fs-base fw-medium" for="inspiration">Inspiration</label>
                                <input class="form-check-input" id="inspiration" type="checkbox">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-0">
                                <label class="form-check-label fs-base fw-medium" for="psychology">Psychology</label>
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
                    <div class="form-text mt-3 fs-sm">* Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a></div>
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
                            <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                        </svg>
                    </span>
                    <span class="text-nav">Around</span>
                </a>
                <p class="mb-4 pb-lg-3 fs-xs text-body-secondary" style="max-width: 306px;">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit</p>
                <div class="d-flex mt-n3 ms-n3">
                    <a class="btn btn-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3 ms-3" href="#" aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#" aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-secondary btn-icon btn-sm btn-linkedin rounded-circle mt-3 ms-3" href="#" aria-label="LnkedIn">
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
            <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
        </p>
        <div class="pt-4 pt-lg-0"></div>
    </div>
</footer>

@endsection