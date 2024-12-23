@extends('layouts.base', ['title' => 'Around | Portfolio List View v.2'])

@section('content')

<main class="page-wrapper">
    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <!-- Case studies list -->
    <section class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio list v.2</li>
            </ol>
        </nav>

        <!-- Page title -->
        <h1 class="pb-3">Our case studies</h1>

        <!-- Item -->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
            <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                    <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/06.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                </a>
            </div>
            <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                <div class="ps-md-3 ps-lg-0">
                    <img class="d-block d-dark-mode-none mb-2 mb-lg-3" src="/img/portfolio/brands/champion-blue-dark.svg" alt="Champion">
                    <img class="d-none d-dark-mode-block mb-2 mb-lg-3" src="/img/portfolio/brands/champion-blue-light.svg" alt="Champion">
                    <h2 class="h4">Development of an application for a national bank</h2>
                    <p class="fs-sm pb-3 pb-lg-4 mb-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo dignissim.</p>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the full story</a>
                    <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
                        <h6 class="text-body mb-0 me-3">Awards:</h6>
                        <img class="d-block d-dark-mode-none me-4" src="/img/portfolio/brands/vuejs-dark.svg" width="90" alt="Vue.js">
                        <img class="d-none d-dark-mode-block me-4" src="/img/portfolio/brands/vuejs-light.svg" width="90" alt="Vue.js">
                        <img class="d-block d-dark-mode-none" src="/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte">
                        <img class="d-none d-dark-mode-block" src="/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
            <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                    <div class="bg-primary rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/07.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                </a>
            </div>
            <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                <div class="ps-md-3 ps-lg-0">
                    <img class="d-block mb-2 mb-lg-3" src="/img/portfolio/brands/foster-green.svg" alt="Foster">
                    <h2 class="h4">Design and development of a dashboard for data management</h2>
                    <p class="fs-sm pb-3 pb-lg-4 mb-3">Feugiat elit tempor, malesuada rutrum amet quis duis facilisi viverra. Quam ut in gravida dignissim eget mauris pretium facilisi dui varius amet et quam massa auctor.</p>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the full story</a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
            <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                    <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 ms-auto" src="/img/portfolio/list/08.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                </a>
            </div>
            <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                <div class="ps-md-3 ps-lg-0">
                    <img class="d-block mb-2 mb-lg-3" src="/img/portfolio/brands/boost.svg" alt="Boost">
                    <h2 class="h4 mb-lg-4">Landing page for a marketing agency Boost</h2>
                    <ul class="list-unstyled pb-1 pb-lg-2 mb-3">
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Faucibus sit est dui id gravida
                        </li>
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Lectus in sem eu facilisis ornare
                        </li>
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Massa maecenas cras vivamus
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the full story</a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
            <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                    <div class="rounded-5 position-absolute top-0 start-0 w-100 h-100" style="background-color: #d7e4f4;" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/09.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                </a>
            </div>
            <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                <div class="ps-md-3 ps-lg-0">
                    <img class="d-block d-dark-mode-none mb-2 mb-lg-3" src="/img/portfolio/brands/champion-purple-dark.svg" alt="Champion">
                    <img class="d-none d-dark-mode-block mb-2 mb-lg-3" src="/img/portfolio/brands/champion-purple-light.svg" alt="Champion">
                    <h2 class="h4">Development of an application for a task tracker</h2>
                    <p class="fs-sm pb-3 pb-lg-4 mb-3">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec.</p>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the full story</a>
                    <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
                        <h6 class="text-body mb-0 me-3">Awards:</h6>
                        <img class="d-block d-dark-mode-none me-4" src="/img/portfolio/brands/clutch-dark.svg" width="92" alt="Clutch">
                        <img class="d-none d-dark-mode-block me-4" src="/img/portfolio/brands/clutch-light.svg" width="92" alt="Clutch">
                        <img class="d-block d-dark-mode-none" src="/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte">
                        <img class="d-none d-dark-mode-block" src="/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
            <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
                <a class="d-block position-relative" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">
                    <div class="bg-warning rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 ms-auto" src="/img/portfolio/list/10.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                </a>
            </div>
            <div class="col-md-5 col-xl-4 offset-lg-1" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                <div class="ps-md-3 ps-lg-0">
                    <img class="d-block mb-2 mb-lg-3" src="/img/portfolio/brands/foster-yellow.svg" alt="Foster">
                    <h2 class="h4 mb-lg-4">Landing page for company for audience analysis </h2>
                    <ul class="list-unstyled pb-1 pb-lg-2 mb-3">
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Faucibus sit est dui id gravida
                        </li>
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Lectus in sem eu facilisis ornare
                        </li>
                        <li class="d-flex pb-1 mb-2">
                            <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                            Massa maecenas cras vivamus
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Read the full story</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact form + Benefits -->
    <section class="bg-secondary pt-5 pb-4">
        <div class="container py-lg-2 py-xl-4 py-xxl-5">
            <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="h1">Benefits of working with us</h2>
                    <p class="pb-1 pb-md-0 mb-4 mb-md-5">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus.</p>
                    <h3 class="mb-4">Send your request!</h3>

                    <!-- Contact form -->
                    <form class="needs-validation row g-4" novalidate>
                        <div class="col-lg-10">
                            <label class="form-label fs-base" for="name">Name</label>
                            <input class="form-control form-control-lg" type="text" placeholder="Your name" required id="name">
                            <div class="invalid-feedback">Please enter your name!</div>
                        </div>
                        <div class="col-lg-10">
                            <label class="form-label fs-base" for="email">Email</label>
                            <input class="form-control form-control-lg" type="email" placeholder="Email address" required id="email">
                            <div class="invalid-feedback">Please provide a valid email address!</div>
                        </div>
                        <div class="col-lg-10">
                            <label class="form-label fs-base" for="message">Message</label>
                            <textarea class="form-control form-control-lg" placeholder="Your message" rows="4" required id="message"></textarea>
                            <div class="invalid-feedback">Please write your message!</div>
                        </div>
                        <div class="col-lg-10">
                            <button class="btn btn-lg btn-dark rounded-pill mt-2" type="submit">Send request</button>
                        </div>
                    </form>
                </div>

                <!-- Benefits -->
                <div class="col-lg-7 col-xl-6 offset-xl-1">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">

                            <!-- Card -->
                            <div class="card border-0 mb-4">
                                <div class="card-body">
                                    <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="text-warning" d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z" fill="currentColor"></path>
                                        <path class="text-primary" d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z" fill="currentColor"></path>
                                        <path class="text-warning" d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z" fill="currentColor"></path>
                                    </svg>
                                    <h3 class="h4" style="max-width: 180px;">Time zones ain't no thing</h3>
                                    <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="card border-0 bg-primary" data-bs-theme="dark">
                                <div class="card-body">
                                    <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.7496 11.4756C25.3743 8.85089 25.3743 4.59539 22.7496 1.97068C20.1249 -0.654032 15.8694 -0.654033 13.2447 1.97068C10.6199 4.59539 10.6199 8.85089 13.2447 11.4756C15.8694 14.1003 20.1249 14.1003 22.7496 11.4756Z" fill="white"></path>
                                        <path class="text-warning" d="M13.2173 26.3746C14.0903 24.3107 15.2282 22.395 16.6119 20.6516C12.48 16.1818 6.56698 13.3827 0 13.3827V36H11.2733C11.2733 32.6628 11.9274 29.4243 13.2173 26.3746Z" fill="currentColor"></path>
                                        <path class="text-warning" d="M36.0001 36.0001V13.3828C23.5089 13.3828 13.3828 23.5089 13.3828 36.0001H36.0001Z" fill="currentColor"></path>
                                    </svg>
                                    <h3 class="h4" style="max-width: 180px;">Flexible work terms</h3>
                                    <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col d-flex flex-column pt-4 mt-sm-3">

                            <!-- Card -->
                            <div class="card border-0 order-sm-2 mb-4 mb-sm-0">
                                <div class="card-body">
                                    <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="text-warning" d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z" fill="currentColor"></path>
                                        <path class="text-primary" d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z" fill="currentColor"></path>
                                        <path class="text-warning" d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z" fill="currentColor"></path>
                                    </svg>
                                    <h3 class="h4" style="max-width: 180px;">Full spectrum of services</h3>
                                    <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div class="card border-0 bg-primary order-sm-1 mb-sm-4" data-bs-theme="dark">
                                <div class="card-body">
                                    <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.4844 22.4814H36.0031V36.0001H22.4844V22.4814Z" fill="white"></path>
                                        <path class="text-warning" d="M8.96266 18C8.96266 13.0088 13.0088 8.96266 18 8.96266C22.9912 8.96266 27.0373 13.0088 27.0373 18H36C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36V27.0373C13.0088 27.0373 8.96266 22.9912 8.96266 18Z" fill="currentColor"></path>
                                    </svg>
                                    <h3 class="h4" style="max-width: 180px;">Impossible? We're on it</h3>
                                    <p class="card-text fs-sm">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer bg-secondary pt-4 pb-2 pb-md-5 pt-sm-5">
    <div class="container-fluid pb-1 pb-md-0 px-md-5">
        <div class="bg-dark rounded-5 position-relative overflow-hidden w-100 py-5 px-3 px-sm-4 px-xl-5 mx-auto" style="max-width: 1660px;" data-bs-theme="dark">
            <div class="position-absolute top-50 start-50 translate-middle" style="width: 1664px;">
                <img src="/img/landing/web-studio/footer-wave.png" alt="Wave">
            </div>
            <div class="container position-relative z-2 pt-md-3 pt-lg-4 pt-xl-5 pb-2">
                <div class="row pb-2">
                    <div class="col-lg-4 col-xxl-3 pb-2 pb-lg-0 mb-4 mb-lg-0">
                        <div class="navbar-brand text-light py-0 me-0 pb-1 mb-3">
                            <span class="text-primary flex-shrink-0 me-2">
                                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                                </svg>
                            </span>
                            <span class="text-white opacity-90">Around</span>
                        </div>
                        <p class="text-body fs-sm mb-4">Tellus non diam morbi quam vel venenatis proin sed dolor elementum nunc</p>
                        <div class="input-group input-group-sm rounded-pill">
                            <input class="form-control" type="text" placeholder="Email address">
                            <button class="btn btn-primary rounded-pill" type="button">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 offset-lg-1 offset-xl-2 offset-xxl-3 mb-4 mb-sm-0">
                        <h6 class="fw-bold">Company</h6>
                        <ul class="nav flex-column fs-sm">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
                        <h6 class="fw-bold">Support</h6>
                        <ul class="nav flex-column fs-sm">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Help center</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Terms of service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Legal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-lg-3 col-xl-2">
                        <h6 class="fw-bold">Contact us</h6>
                        <ul class="nav flex-column fs-sm">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="tel:+15262200459">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0459</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between pt-4 pt-md-5 mt-2 mt-md-0 mt-lg-2 mt-xl-4">
                    <div class="d-flex justify-content-center order-sm-2 me-md-n2">
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#" aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                    <p class="nav fs-sm order-sm-1 text-center text-sm-start pt-4 pt-sm-0 mb-0 me-4">
                        <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                        <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
