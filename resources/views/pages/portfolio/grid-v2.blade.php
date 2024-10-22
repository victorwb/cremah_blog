@extends('layouts.base', ['title' => 'Around | Portfolio Grid View v.2'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <section class="container overflow-hidden py-5 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio grid v.2</li>
            </ol>
        </nav>

        <div class="masonry-filterable">
            <div class="row pb-lg-4 mb-2 mb-sm-3">

                <!-- Page title -->
                <div class="col-xxl-3 col-lg-4 text-center text-lg-start">
                    <h1>Our Projects</h1>
                    <p class="mb-4 mb-lg-0">We will put our industry expertise for creativity to work for your project</p>
                </div>

                <!-- Filters -->
                <div class="col-xxl-9 col-lg-8 d-flex">
                    <ul class="masonry-filters nav nav-pills fs-sm flex-nowrap overflow-auto text-nowrap w-100 mx-auto me-lg-0 pb-3" style="max-width: 456px;">
                        <li class="nav-item mb-0">
                            <a class="nav-link border active" href="#" data-group="all">All</a>
                        </li>
                        <li class="nav-item mb-0">
                            <a class="nav-link border" href="#" data-group="branding">Branding</a>
                        </li>
                        <li class="nav-item mb-0">
                            <a class="nav-link border" href="#" data-group="stationery">Stationery</a>
                        </li>
                        <li class="nav-item mb-0">
                            <a class="nav-link border" href="#" data-group="web">Web</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Grid of portfolio items -->
            <div class="masonry-grid" data-columns="2">

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["branding"]'>
                    <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 512px;">
                        <div class="zoom-effect-wrapper">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/07.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h4 mb-2">
                                <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Healthy Yellow</a>
                            </h2>
                            <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                <span>Branding, Packaging</span>
                                <span>2022</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
                    <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 704px;">
                        <div class="zoom-effect-wrapper">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/08.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h4 mb-2">
                                <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Sen Jonson</a>
                            </h2>
                            <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                <span>Stationery design</span>
                                <span>2022</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["branding"]'>
                    <div class="zoom-effect position-relative border-bottom pb-3" style="max-width: 467px;">
                        <div class="zoom-effect-wrapper">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/09.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h4 mb-2">
                                <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Gradient</a>
                            </h2>
                            <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                <span>Branding, Packaging</span>
                                <span>2022</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
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
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["stationery"]'>
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
                </article>

                <!-- Item -->
                <article class="masonry-grid-item pb-5 mb-md-2 mb-lg-4 mb-xl-5" data-groups='["web"]'>
                    <div class="zoom-effect position-relative border-bottom mx-auto pb-3" style="max-width: 470px;">
                        <div class="zoom-effect-wrapper">
                            <div class="zoom-effect-img">
                                <img src="/img/portfolio/grid/12.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="pt-4 mt-lg-2">
                            <h2 class="h4 mb-2">
                                <a class="stretched-link" href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">The Studio</a>
                            </h2>
                            <div class="d-flex justify-content-between fs-lg text-body-secondary">
                                <span>Web design</span>
                                <span>2020</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load more button -->
            <div class="text-center pb-sm-2 pb-md-4 mt-n1 mt-lg-n2">
                <button class="btn btn-lg btn-outline-dark rounded-0" type="button">Load more projects</button>
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