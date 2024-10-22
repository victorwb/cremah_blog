@extends('layouts.base', ['title' => 'Around | Contacts v.1'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="bg-secondary py-5">
        <div class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contacts v.1</li>
                </ol>
            </nav>

            <!-- Page title -->
            <h1 class="display-2">Contacts</h1>
            <p class="fs-lg pb-4 mb-2 mb-sm-3">Get in touch with us by completing the below form or call us now</p>

            <!-- Details cards -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4 pb-2 pb-sm-4 pb-lg-5">

                <!-- Address -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Address</h4>
                            <p class="fs-lg fw-medium pb-3 mb-3">514 Magnolia St. Orlando, FL 32806</p>
                            <a class="btn btn-sm btn-outline-primary" href="#">
                                <i class="ai-map-pin me-1"></i>
                                Get directions
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Phone</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-1 mb-2">
                                    <span class="d-block fs-sm text-body-secondary mb-1">Main office</span>
                                    <a class="nav-link fs-lg p-0" href="tel:+178632256033">+1&nbsp;(786)&nbsp;322&nbsp;560&nbsp;33</a>
                                </li>
                                <li>
                                    <span class="d-block fs-sm text-body-secondary mb-1">Reception room</span>
                                    <a class="nav-link fs-lg p-0" href="tel:+178630056044">+1&nbsp;(786)&nbsp;300&nbsp;560&nbsp;44</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Schedule -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Schedule</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-1 mb-2">
                                    <span class="d-block fs-sm text-body-secondary mb-1">Mon - Thu</span>
                                    <div class="d-flex align-items-center">
                                        <span class="text-nav fs-lg fw-medium">10:00</span>
                                        <span class="border-top mx-4" style="width: 36px; height: 1px;"></span>
                                        <span class="text-nav fs-lg fw-medium">22:00</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="d-block fs-sm text-body-secondary mb-1">Fri - Sat</span>
                                    <div class="d-flex align-items-center">
                                        <span class="text-nav fs-lg fw-medium">10:00</span>
                                        <span class="border-top mx-4" style="width: 36px; height: 1px;"></span>
                                        <span class="text-nav fs-lg fw-medium">20:00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col">
                    <div class="card border-0 h-100">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Email</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-1 mb-2">
                                    <span class="d-block fs-sm text-body-secondary mb-1">Main office</span>
                                    <a class="nav-link fs-lg p-0" href="mailto:office@example.com">office@example.com</a>
                                </li>
                                <li>
                                    <span class="d-block fs-sm text-body-secondary mb-1">Reception room</span>
                                    <a class="nav-link fs-lg p-0" href="mailto:reception@example.com">reception@example.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 250px;"></div>
    </section>


    <!-- Contact form -->
    <section class="container" style="margin-top: -260px;" data-bs-theme="dark">
        <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">

            <!-- Decorative shapes -->
            <svg class="position-absolute end-0 mt-n2" width="242" height="331" viewBox="0 0 242 331" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M172.014 250.127C137.236 227.74 112.349 192.144 144.586 153.591C157.686 137.932 176.759 127.973 196.524 122.046C234.647 110.639 277.027 113.361 313.349 129.576C338.19 140.666 361.129 159.183 369.934 184.502C383.476 223.496 359.75 260.161 321.569 273.118C288.832 284.223 247.685 279.513 214.885 269.837C201.003 265.743 185.745 258.966 172.014 250.127Z" fill="#121519" fill-opacity=".07"></path>
                <path d="M20.3265 69.264C19.7064 43.0736 29.8071 17.1878 62.3851 19.8622C75.6229 20.9505 87.9525 27.2066 98.3563 35.3132C118.426 50.9253 132.424 73.896 136.952 98.6413C140.044 115.562 138.424 134.218 127.978 148C111.901 169.236 83.4531 170.283 62.5246 155.209C44.5807 142.281 32.0983 119.217 25.3391 98.6799C22.4836 89.9885 20.5616 79.6021 20.3265 69.264Z" fill="#121519" fill-opacity=".07"></path>
            </svg>
            <svg class="position-absolute start-0 bottom-0 ms-3" width="169" height="217" viewBox="0 0 169 217" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.2574 90.0177C29.666 97.6253 26.6254 106.591 24.9502 114.96C19.9522 140.043 26.4112 168.792 49.6162 181.885C66.0705 191.17 91.0017 189.904 108.062 183.692C125.725 177.266 135.045 168.04 142.29 150.389C151.409 128.174 150.912 99.6904 125.93 91.6429C115.423 88.254 104.723 86.5065 94.2249 82.5889C84.6622 79.0248 74.8545 72.1766 64.4411 71.6149C50.8011 70.8777 40.9122 79.0146 34.2574 90.0177Z" fill="#121519" fill-opacity="0.07"></path>
                <path d="M147.005 75.6331C152.135 70.7783 156.106 64.2374 159.153 57.9073C166.014 43.6372 174.127 22.1368 160.207 9.68505C152.924 3.17188 139.243 3.86644 130.324 5.29774C118.428 7.20428 107.295 8.85077 96.5031 14.783C85.8056 20.6599 79.0155 33.6997 77.0014 45.6686C75.4978 54.5776 79.63 63.6672 84.7391 70.7453C91.8208 80.5571 103.503 84.2003 114.817 84.3975C121.101 84.5081 127.716 84.0527 133.89 82.8121C138.932 81.7962 143.273 79.1597 147.005 75.6331Z" fill="#121519" fill-opacity="0.07"></path>
            </svg>
            <div class="card-body position-relative z-2 py-5">
                <form class="mx-auto" style="max-width: 800px;">
                    <h2 class="h1 card-title text-center pb-4">Get a free consultation</h2>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="name">Name</label>
                            <input class="form-control form-control-lg" type="text" placeholder="Your name" required id="name">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="company">Company</label>
                            <input class="form-control form-control-lg" type="text" placeholder="Your company name" id="company">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="email">Email</label>
                            <input class="form-control form-control-lg" type="email" placeholder="Email address" required id="email">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fs-base" for="phone">Phone</label>
                            <input class="form-control form-control-lg" type="text" placeholder="Phone number" id="phone">
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label fs-base" for="message">How can we help?</label>
                            <textarea class="form-control form-control-lg" rows="6" placeholder="Enter your message here..." required id="message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="seo">
                                <label class="form-check-label fs-base" for="seo">SEO Website Audit</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="email-marketing" checked>
                                <label class="form-check-label fs-base" for="email-marketing">Email Marketing</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="social">
                                <label class="form-check-label fs-base" for="social">Social Networks</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="content-marketing">
                                <label class="form-check-label fs-base" for="content-marketing">Content Marketing</label>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center pt-4">
                            <button class="btn btn-lg btn-light" type="submit">Send a request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<footer class="footer py-5">
    <div class="container pt-md-2 pt-lg-3 pt-xl-4">
        <div class="row pb-5 pt-sm-2 mb-lg-2">
            <div class="col-md-12 col-lg-3 pb-2 pb-lg-0 mb-4 mb-lg-0">
                <a class="navbar-brand py-0 mb-3 mb-lg-4" href="/">
                    <span class="text-primary flex-shrink-0 me-2">
                        <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                        </svg>
                    </span>
                    <span class="text-nav">Around</span>
                </a>
                <p class="fs-sm pb-2 pb-lg-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed. Dolor elementum nunc dictum</p>
                <div class="d-flex gap-3">
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#" aria-label="Facabook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#" aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#" aria-label="LinkedIn">
                        <i class="ai-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
                <ul class="nav flex-column">
                    <li><a class="nav-link py-1 px-0" href="#">Services</a></li>
                    <li><a class="nav-link py-1 px-0" href="#">Reviews</a></li>
                    <li><a class="nav-link py-1 px-0" href="#">Case studies</a></li>
                    <li><a class="nav-link py-1 px-0" href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
                <ul class="nav flex-column">
                    <li><a class="nav-link py-1 px-0" href="mailto:contact@example.com">contact@example.com</a></li>
                    <li><a class="nav-link py-1 px-0" href="tel:+15262200459">+1&nbsp;526&nbsp;220&nbsp;0459</a></li>
                    <li><a class="nav-link py-1 px-0" href="tel:+15262200444">+1&nbsp;526&nbsp;220&nbsp;0444</a></li>
                </ul>
            </div>
            <div class="col-sm-5 col-lg-4 col-xl-3 offset-lg-1">
                <h3 class="h6 mb-2">Stay up to date</h3>
                <p class="fs-sm">Subscribe to our news and case studies</p>
                <div class="input-group input-group-sm">
                    <input class="form-control" type="text" placeholder="Your email">
                    <button class="btn btn-primary" type="button">Subscribe</button>
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