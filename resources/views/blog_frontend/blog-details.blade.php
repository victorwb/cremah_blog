@extends('layouts.base', ['title' => 'Cremah | Single Post'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="container pt-5 mt-5">

        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('third', ['pages', 'blog', 'list-sidebar'])}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Single post</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">

                <!-- Post title + post meta -->
                <h1 class="pb-2 pb-lg-3">{{$blog->title}}</h1>
                <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                    <div class="d-flex align-items-center mb-4 me-4">
                        <span class="fs-sm me-2">By:</span>
                        <a class="nav-link position-relative fw-semibold p-0" href="#author" data-scroll data-scroll-offset="80">
                            Victor Shiningstar
                            <span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <span class="fs-sm me-2">Share post:</span>
                        <div class="d-flex">
                            <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" aria-label="Instagram">
                                <i class="ai-instagram"></i>
                            </a>
                            <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" aria-label="Facebook">
                                <i class="ai-facebook"></i>
                            </a>
                            <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram" aria-label="Telegram">
                                <i class="ai-telegram fs-sm"></i>
                            </a>
                            <a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="X" aria-label="X">
                                <i class="ai-x"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Post content -->
                 @foreach($blog_details as $blog_detail)
                <p class="fs-lg pt-2 pt-sm-3">{!! nl2br(e($blog_detail->text)) !!}</p>
                
                <figure class="figure">
                    <img class="figure-img rounded-5 mb-3" src="{{Storage::url($blog_detail->image)}}" alt="Image">
                    <figcaption class="figure-caption"></figcaption>
                </figure>
                @endforeach
                <!-- Tags -->
                <div class="d-flex flex-wrap pb-5 pt-3 pt-md-4 pt-xl-5 mt-xl-n2">
                    <h3 class="h6 py-1 mb-0 me-4">Relevant tags:</h3>
                    <a class="nav-link fs-sm py-1 px-0 me-3" href="#">
                        <span class="text-primary">#</span>Inspiration
                    </a>
                    <a class="nav-link fs-sm py-1 px-0 me-3" href="#">
                        <span class="text-primary">#</span>Travel
                    </a>
                    <a class="nav-link fs-sm py-1 px-0 me-3" href="#">
                        <span class="text-primary">#</span>Books
                    </a>
                </div>

                <!-- Author widget -->
                <div class="border-top border-bottom py-4" id="author">
                    <div class="d-flex align-items-start py-2">
                        <img class="d-block rounded-circle mb-3" src="/img/avatar/04.jpg" width="56" alt="Author image">
                        <div class="d-md-flex w-100 ps-4">
                            <div style="max-width: 26rem;">
                                <h3 class="h5 mb-2">Darlene Robertson</h3>
                                <p class="fs-sm mb-0">Porta nisl a ultrices ut libero id. Gravida mi neque, tristique justo, et pharetra laoreet nulla est nulla cras ac arcu sed mattis tristique convallis suspen enim blandit massa cursus augue dui mattis morbi velit semper nunc at etiam lacinia.</p>
                            </div>
                            <div class="pt-4 pt-md-0 ps-md-4 ms-md-auto">
                                <h3 class="h5">Share post:</h3>
                                <div class="d-flex">
                                    <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram" aria-label="Instagram">
                                        <i class="ai-instagram"></i>
                                    </a>
                                    <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" aria-label="Facebook">
                                        <i class="ai-facebook"></i>
                                    </a>
                                    <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram" aria-label="Telegram">
                                        <i class="ai-telegram fs-sm"></i>
                                    </a>
                                    <a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="X" aria-label="X">
                                        <i class="ai-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Comments -->
                <div class="pt-4 pt-xl-5 mt-4" id="comments">
                    <h2 class="h1 py-lg-1 py-xl-3">14 comments</h2>

                    <!-- Comment -->
                    <div class="border-bottom py-4 mt-2 mb-4">
                        <div class="d-flex align-items-center pb-1 mb-3">
                            <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Comment author">
                            <div class="ps-3">
                                <h6 class="mb-0">Albert Flores</h6>
                                <span class="fs-sm text-body-secondary">5 hours ago</span>
                            </div>
                        </div>
                        <p class="pb-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tellus lectus, tempus eu urna eu, imperdiet dignissim augue. Aliquam fermentum est a ligula bibendum, ac gravida ipsum dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur suscipit quam ut velit condimentum, nec mollis risus semper. Curabitur quis mauris eget ligula tincidunt venenatis. Sed congue pulvinar hendrerit.</p>
                        <button class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                            Reply
                            <i class="ai-redo fs-xl ms-2"></i>
                        </button>
                    </div>

                    <!-- Comment -->
                    <div class="border-bottom pt-2 pb-4">
                        <div class="d-flex align-items-center pb-1 mb-3">
                            <img class="rounded-circle" src="/img/avatar/11.jpg" width="48" alt="Comment author">
                            <div class="ps-3">
                                <h6 class="mb-0">Jenny Wilson</h6>
                                <span class="fs-sm text-body-secondary">2 days ago at 9:20</span>
                            </div>
                        </div>
                        <p class="pb-2 mb-0">Pellentesque urna pharetra, quis maecenas. Sit dolor amet nulla aenean eu, ac. Nisl mi tempus, iaculis viverra vestibulum scelerisque imperdiet montes mauris massa elit pretium elementum eget tortor quis</p>
                        <button class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                            Reply
                            <i class="ai-redo fs-xl ms-2"></i>
                        </button>

                        <!-- Comment reply -->
                        <div class="card card-body border-0 bg-secondary mt-4">
                            <div class="d-flex align-items-center pb-1 mb-3">
                                <img class="rounded-circle" src="/img/avatar/10.jpg" width="48" alt="Comment author">
                                <div class="ps-3">
                                    <h6 class="mb-0">Ralph Edwards</h6>
                                    <span class="fs-sm text-body-secondary">2 days ago at 11:45</span>
                                </div>
                            </div>
                            <p class="mb-0"><a class="fw-bold text-decoration-none" href="#">@Jenny Wilson</a> Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper est porttitor.</p>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="border-bottom py-4 mt-2 mb-4">
                        <div class="d-flex align-items-center pb-1 mb-3">
                            <img class="rounded-circle" src="/img/avatar/07.jpg" width="48" alt="Comment author">
                            <div class="ps-3">
                                <h6 class="mb-0">Esther Howard</h6>
                                <span class="fs-sm text-body-secondary">May 19, 2022</span>
                            </div>
                        </div>
                        <p class="pb-2 mb-0">Donec et sollicitudin tellus. Duis maximus, dui eget egestas mattis, purus ex tempor nulla, quis tempor sapien neque at nisl. Aliquam eu nisi ut nisl ultrices posuere. Praesent dignissim efficitur nisi, a hendrerit ipsum elementum sit amet. Vivamus non ante nisl. Nunc faucibus velit at eros mollis semper.</p>
                        <button class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                            Reply
                            <i class="ai-redo fs-xl ms-2"></i>
                        </button>
                    </div>

                    <!-- All comments button -->
                    <div class="text-end pb-5 mb-lg-1 mb-xl-3">
                        <a class="btn btn-link px-0" href="#">
                            Show all comments
                            <i class="ai-chevron-right fs-lg ms-1"></i>
                        </a>
                    </div>


                    <!-- Comment form -->
                    <div class="card border-0 bg-secondary pt-2 p-md-2 p-xl-3 p-xxl-4 mt-n3 mt-md-0">
                        <div class="card-body">
                            <h2 class="pb-2 pb-lg-3 pb-xl-4">Leave a comment</h2>
                            <form class="row needs-validation g-4" novalidate>
                                <div class="col-sm-6">
                                    <label class="form-label" for="c-name">Name</label>
                                    <input class="form-control" type="text" placeholder="Your name" required id="c-name">
                                    <div class="invalid-feedback">Please enter your name!</div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="c-email">Email</label>
                                    <input class="form-control" type="email" placeholder="Your email" required id="c-email">
                                    <div class="invalid-feedback">Please provide a valid email address!</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="c-comment">Comment</label>
                                    <textarea class="form-control" rows="4" placeholder="Type your comment here..." required id="c-comment"></textarea>
                                    <div class="invalid-feedback">Please enter a comment message!</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="c-save">
                                        <label class="form-check-label" for="c-save">Save my name and email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Post a comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sidebar (offcanvas on sreens < 992px) -->
            <aside class="col-lg-3 offset-xl-1">
                <div class="offcanvas-lg offcanvas-end" id="sidebar">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title">Sidebar</h4>
                        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <!-- Search box -->
                        <div class="position-relative mb-4 mb-lg-5">
                            <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                        </div>

                        <!-- Popular posts -->
                        <h4 class="pt-1 pt-lg-0 mt-lg-n2">Most popular:</h4>
                        <div class="mb-lg-5 mb-4">
                            <article class="position-relative pb-2 mb-3 mb-lg-4">
                                <img class="rounded-5" src="/img/blog/list/01.jpg" alt="Post image">
                                <h5 class="h6 mt-3 mb-0">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">The fashion for eco bags with vintage prints will still be relevant for more than one year</a>
                                </h5>
                            </article>
                            <article class="position-relative">
                                <img class="rounded-5" src="/img/blog/list/06.jpg" alt="Post image">
                                <h5 class="h6 mt-3 mb-0">
                                    <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">A session with a psychologist as a personal choice or a fashion trend</a>
                                </h5>
                            </article>
                        </div>

                        <!-- Recent posts -->
                        <h4 class="pt-3 pt-lg-1 mb-4">Recent posts:</h4>
                        <ul class="list-unstyled mb-lg-5 mb-4">
                            <li class="border-bottom pb-3 mb-3">
                                <span class="h6 mb-0">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Instagram trends that will definitely work and bring results in the new 2022</a>
                                </span>
                            </li>
                            <li class="border-bottom pb-3 mb-3">
                                <span class="h6 mb-0">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">A session with a psychologist as a personal choice</a>
                                </span>
                            </li>
                            <li class="border-bottom pb-3 mb-3">
                                <span class="h6 mb-0">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Travel destinations to inspire and restore resources</a>
                                </span>
                            </li>
                            <li class="border-bottom pb-3">
                                <span class="h6 mb-0">
                                    <a href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">How to look for inspiration for new goals in life?</a>
                                </span>
                            </li>
                        </ul>

                        <!-- Relevant topics -->
                        <h4 class="pt-3 pt-lg-1 mb-4">Relevant topics:</h4>
                        <div class="d-flex flex-wrap mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
                            <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Reading</a>
                            <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Inspiration</a>
                            <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Travel</a>
                            <a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Psychology</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>


    <!-- Related articles (carousel) -->
    <section class="container py-5 mt-sm-2 my-md-4 my-xl-5">
        <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4 mt-2 mt-xxl-3">
            <h2 class="h1 mb-0 me-4">Related articles</h2>
            <div class="d-flex ms-auto">
                <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-post" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="swiper pb-2 pb-sm-3 pb-md-4" data-swiper-options='
  {
    "spaceBetween": 24,
    "loop": true,
    "autoHeight": true,
    "navigation": {
      "prevEl": "#prev-post",
      "nextEl": "#next-post"
    },
    "breakpoints": {
      "576": { "slidesPerView": 2 },
      "1000": { "slidesPerView": 3 }
    }
  }
'>
            <div class="swiper-wrapper">

                <!-- Post -->
                <article class="swiper-slide">
                    <div class="position-relative">
                        <img class="rounded-5" src="/img/blog/list/01.jpg" alt="Post image">
                        <h3 class="h4 mt-4 mb-0">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">The fashion for eco bags with vintage prints will still be relevant for more than one year</a>
                        </h3>
                    </div>
                </article>

                <!-- Post -->
                <article class="swiper-slide">
                    <div class="position-relative">
                        <img class="rounded-5" src="/img/blog/list/04.jpg" alt="Post image">
                        <h3 class="h4 mt-4 mb-0">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">How to look for inspiration for new goals in life and remember to give yourself a break?</a>
                        </h3>
                    </div>
                </article>

                <!-- Post -->
                <article class="swiper-slide">
                    <div class="position-relative">
                        <img class="rounded-5" src="/img/blog/list/06.jpg" alt="Post image">
                        <h3 class="h4 mt-4 mb-0">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">A session with a psychologist as a personal choice or a fashion trend in society</a>
                        </h3>
                    </div>
                </article>

                <!-- Post -->
                <article class="swiper-slide">
                    <div class="position-relative">
                        <img class="rounded-5" src="/img/blog/list/05.jpg" alt="Post image">
                        <h3 class="h4 mt-4 mb-0">
                            <a class="stretched-link" href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">Top 10 best TV shows on Netflix for your next weekend</a>
                        </h3>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <!-- Sidebar toggle button -->
    <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
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
    </div>
</footer>

@endsection

@section('script-bottom')

@endsection