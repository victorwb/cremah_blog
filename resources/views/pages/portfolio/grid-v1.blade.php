@extends('layouts.base', ['title' => 'Around | Portfolio Grid View v.1'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <section class="container overflow-hidden py-5 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio grid v.1</li>
            </ol>
        </nav>

        <!-- Page title -->
        <h1 class="text-center pb-2 pb-md-3 pb-lg-4">Portfolio</h1>

        <div class="masonry-filterable">

            <!-- Filters -->
            <ul class="masonry-filters nav nav-pills fs-sm flex-nowrap overflow-auto text-nowrap w-100 mx-auto pb-4 mb-2 mb-sm-3" style="max-width: 590px;">
                <li class="nav-item mb-0">
                    <a class="nav-link border active" href="#" data-group="all">All</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link border" href="#" data-group="branding">Branding</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link border" href="#" data-group="ebook">E-books</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link border" href="#" data-group="identity">Identity</a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link border" href="#" data-group="product">Product</a>
                </li>
            </ul>

            <!-- Grid of portfolio items -->
            <div class="masonry-grid" data-columns="2">

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["branding"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/01.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Strategy and design for a handmade tableware company</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Branding, Strategy</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Branding, Strategy</span>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["product"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/02.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Design for eco bags and merch</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Product design</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Product design</span>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["branding"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/04.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Bottle for French perfume brand</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Packaging design</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Packaging design</span>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["ebook"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/03.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Book cover design Twin Fish</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Cover design</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Cover design</span>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["identity"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/06.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Business cards and identity for Sen Jonson</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Identity design</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Identity design</span>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-lg-5 mb-3 mb-lg-0 mb-xl-2" data-groups='["product"]'>
                    <div class="card-hover zoom-effect mx-auto" style="max-width: 620px;">
                        <div class="zoom-effect-wrapper rounded-5">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/05.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h5 mb-2">
                                <a class="stretched-link text-nav" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Toothbrushes made from eco materials</a>
                            </h2>
                            <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Product design</span>
                            <span class="fs-sm text-body-secondary d-sm-none">Product design</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Pagination -->
        <nav class="mt-n1 mb-md-2 mb-lg-3 mb-xl-4" aria-label="Portfolio pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
            </ul>
        </nav>
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

@include('layouts.partials/customizer')

@endsection