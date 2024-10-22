@extends('layouts.base', ['title' => 'Portfolio List View v.1'])

@section('content')

<main class="page-wrapper">
    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="overflow-hidden">
        <div class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio list v.1</li>
                </ol>
            </nav>

            <!-- Page title -->
            <h1 class="text-center pb-3 pb-md-4 pb-lg-5 mb-lg-0 mb-xl-2 mb-xxl-4">Case studies</h1>

            <!-- Item -->
            <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 offset-xxl-1 mb-4 mb-md-0">
                    <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <img class="rounded-5" src="/img/portfolio/list/01.jpg" width="700" alt="Image">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
                        <div class="text-body-secondary mb-2">Branding, Strategy</div>
                        <h2 class="mb-lg-4">
                            <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Design for eco bags and merch</a>
                        </h2>
                        <p class="mb-0 mb-md-1 mb-lg-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo dignissim vel.</p>
                        <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                            Read more
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Item -->
            <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 order-md-2 mb-4 mb-md-0">
                    <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <img class="rounded-5" src="/img/portfolio/list/02.jpg" width="700" alt="Image">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4 offset-xxl-1 order-md-1" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="me-md-4 me-lg-5 me-xxl-0" style="max-width: 330px;">
                        <div class="text-body-secondary mb-2">Branding</div>
                        <h2 class="mb-lg-4">
                            <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Handmade tableware company</a>
                        </h2>
                        <p class="mb-0 mb-md-1 mb-lg-3">Feugiat elit tempor, malesuada rutrum amet quis duis facilisi viverra. Quam ut in gravida dignissim eget mauris pretium facilisi dui varius amet et quam massa auctor odio.</p>
                        <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                            Read more
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Item -->
            <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 offset-xxl-1 mb-4 mb-md-0">
                    <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <img class="rounded-5" src="/img/portfolio/list/03.jpg" width="700" alt="Image">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
                        <div class="text-body-secondary mb-2">Identity, Packaging</div>
                        <h2 class="mb-lg-4"><a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Bottle for French perfume brand</a></h2>
                        <p class="mb-0 mb-md-1 mb-lg-3">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec eu.</p>
                        <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                            Read more
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Item -->
            <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 order-md-2 mb-4 mb-md-0">
                    <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <img class="rounded-5" src="/img/portfolio/list/04.jpg" width="700" alt="Image">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4 offset-xxl-1 order-md-1" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="me-md-4 me-lg-5 me-xxl-0" style="max-width: 330px;">
                        <div class="text-body-secondary mb-2">E-book, Branding</div>
                        <h2 class="mb-lg-4">
                            <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Book cover design Twin Fish</a>
                        </h2>
                        <p class="mb-0 mb-md-1 mb-lg-3">Sed feugiat tristique enim aenean netus cum adipiscing est sem eget nulla leo vestibulum. Cras urna, proin ut ut dictum risus porttitor nulla consequat et iaculis.</p>
                        <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                            Read more
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Item -->
            <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 offset-xxl-1 mb-4 mb-md-0">
                    <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                        <img class="rounded-5" src="/img/portfolio/list/05.jpg" width="700" alt="Image">
                    </a>
                </div>
                <div class="col-md-5 col-xl-4" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
                        <div class="text-body-secondary mb-2">Branding, Strategy</div>
                        <h2 class="mb-lg-4">
                            <a href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Business cards and identity for Sen Jonson</a>
                        </h2>
                        <p class="mb-0 mb-md-1 mb-lg-3">Lectus lacus, ac justo, ullamcorper egestas at felis arcu arcu venenatis praesent odio. Odio vulputate purus placerat ultrices faucibus sem sed magna est elementum.</p>
                        <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                            Read more
                            <i class="ai-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </article>
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