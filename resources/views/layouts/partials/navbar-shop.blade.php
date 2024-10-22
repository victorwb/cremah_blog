@php
    if (!isset($isDark)){
       $isDark = false;
    }
     if (!isset($navClass)){
       $navClass = '';
    }
@endphp

<header class="navbar navbar-expand-lg fixed-top {{$navClass}}" {{ $isDark ? 'data-bs-theme=dark' : '' }}>
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-sm-3" href="/">
            <span class="text-primary flex-shrink-0 me-2">
              <svg width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                      d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg>
            </span>
            <span class="d-none d-sm-inline">Around</span>
        </a>

        <!-- Theme switcher -->
        <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode">
                <i class="ai-sun fs-lg"></i>
            </label>
            <label class="form-check-label" for="theme-mode">
                <i class="ai-moon fs-lg"></i>
            </label>
        </div>

        <!-- Search + Account + Cart -->
        <div class="nav align-items-center order-lg-3 ms-n1 me-3 me-sm-0">
            <a class="nav-link fs-4 p-2 mx-sm-1" href="#searchModal" data-bs-toggle="modal" aria-label="Search">
                <i class="ai-search"></i>
            </a>
            <a class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex" href="{{ route('second', ['auth', 'signin'])}}"
               aria-label="Account">
                <i class="ai-user"></i>
            </a>
            <a class="nav-link position-relative fs-4 p-2" href="#cartOffcanvas" data-bs-toggle="offcanvas"
               aria-label="Shopping cart">
                <i class="ai-cart"></i>
                <span class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1"
                      style="padding: .25rem .375rem;">3</span>
            </a>
        </div>

        <!-- Mobile menu toggler (Hamburger) -->
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar collapse (Main navigation) -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                    <div class="dropdown-menu overflow-hidden p-0">
                        <div class="d-lg-flex">
                            <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="dropdown-item" href="/">Template Intro Page</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 rounded-3 rounded-start-0"
                                            style="background-image: url(/img/megamenu/landings.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'mobile-app-showcase']) }}">Mobile App
                                            Showcase</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/mobile-app.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'product']) }}">Product
                                            Landing</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/product-landing.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'saas-1'])}}">SaaS
                                            v.1</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/saas-1.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'saas-2'])}}">SaaS
                                            v.2</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/saas-2.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'saas-3'])}}">SaaS
                                            v.3</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/saas-3.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'saas-4'])}}">
                                            SaaS v.4
                                            <span class="text-danger fs-xs ms-2">New</span>
                                        </a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/saas-4.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'shop-1']) }}">Shop
                                            Homepage v.1</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/shop-homepage-1.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'shop-2']) }}">
                                            Shop Homepage v.2
                                            <span class="text-danger fs-xs ms-2">New</span>
                                        </a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/shop-homepage-2.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'marketing-agency']) }}">Marketing
                                            Agency</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/marketing-agency.jpg);"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'creative-agency']) }}">Creative
                                            Agency</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/creative-agency.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'conference']) }}">Conference
                                            (Event)</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/conference.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'web-studio']) }}">Web Studio</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/web-studio.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'corporate']) }}">Corporate</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/corporate.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'insurance']) }}">
                                            Insurance Company
                                            <span class="text-danger fs-xs ms-2">New</span>
                                        </a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/insurance.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'business-consulting']) }}">Business
                                            Consulting</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/business-consulting.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'coworking-space']) }}">Coworking
                                            Space</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/coworking.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'yoga-studio']) }}">Yoga Studio</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/yoga-studio.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('second', ['landings', 'influencer']) }}">Influencer</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/influencer.jpg);"></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('second', ['landings', 'blog']) }}">Blog
                                            Homepage</a>
                                        <span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                            style="background-image: url(/img/megamenu/blog-homepage.jpg);"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-dropdown-column position-relative border-start z-3"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                       aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">List View v.1</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'list-v2'])}}">List View v.2</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'grid-v1'])}}">Grid View v.1</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'grid-v2'])}}">Grid View v.2</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'slider'])}}">Slider View</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Single Project
                                        v.1</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Single Project
                                        v.2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Catalog
                                        (Listing)</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'shop', 'single'])}}">Product
                                        Page</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'shop', 'checkout'])}}">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'blog', 'grid-sidebar'])}}">Grid View with
                                        Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'grid'])}}">Grid
                                        View no Sidebar</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'blog', 'list-sidebar'])}}">List View with
                                        Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'list'])}}">List
                                        View no Sidebar</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Single
                                        post v.1</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">Single
                                        post v.2</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">Single
                                        post v.3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'about', 'agency'])}}">About
                                        - Agency</a></li>
                                <li><a class="dropdown-item" href="{{ route('third', ['pages', 'about', 'product'])}}">About
                                        - Product</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'services', 'services-v1'])}}">Services v.1</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'services', 'services-v2'])}}">Services v.2</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'services', 'services-v3'])}}">Services v.3</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['pages', 'pricing'])}}">Pricing</a></li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Contacts</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'contacts', 'contact-v1'])}}">Contacts v.1</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'contacts', 'contact-v2'])}}">Contacts v.2</a>
                                </li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'contacts', 'contact-v3'])}}">Contacts v.3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Specialty Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'speciality-pages', 'coming-soon-v1'])}}">Coming
                                        Soon v.1</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'speciality-pages', 'coming-soon-v2'])}}">Coming
                                        Soon v.2</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'speciality-pages', '404-v1'])}}">404 Error
                                        v.1</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'speciality-pages', '404-v2'])}}">404 Error
                                        v.2</a></li>
                                <li><a class="dropdown-item"
                                       href="{{ route('third', ['pages', 'speciality-pages', '404-v3'])}}">404 Error
                                        v.3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                       aria-expanded="false">Account</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Auth pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signin'])}}">Sign In</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signup'])}}">Sign Up</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signinup'])}}">Sign In /
                                        Up</a></li>
                                <li><a class="dropdown-item" href="{{ route('second', ['auth', 'password-recovery'])}}">Password
                                        Recovery</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'overview'])}}">Overview</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'settings'])}}">Settings</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'billing'])}}">Billing</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'orders'])}}">Orders</a></li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'earnings'])}}">Earnings</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'chat'])}}">Chat
                                (Messages)</a></li>
                        <li><a class="dropdown-item" href="{{ route('second', ['account', 'favorites'])}}">Favorites
                                (Wishlist)</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('second', ['components', 'typography'])}}">UI Kit</a>
                </li>
                <li class="nav-item border-top mt-2 py-2 d-sm-none">
                    <a class="nav-link" href="{{ route('second', ['auth', 'signin'])}}">
                        <i class="ai-user fs-lg me-2"></i>
                        Sign In
                    </a>
                </li>
            </ul>
            <div class="d-md-none p-3 mt-n3">
                <a class="btn btn-primary w-100 mb-1"
                   href="" target="_blank"
                   rel="noopener">
                    <i class="ai-cart fs-xl me-2 ms-n1"></i>
                    Buy now
                </a>
            </div>
        </nav>
    </div>
</header>

<!-- Search modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" data-focus-input="#search">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header d-block position-relative border-0 pb-3">
                <form class="position-relative w-100 mt-2 mb-4">
                    <button class="btn-close position-absolute top-50 end-0 translate-middle-y m-0 me-n1"
                            type="reset" data-bs-dismiss="modal" aria-label="Close"></button>
                    <i class="ai-search fs-xl position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control form-control-lg px-5" type="search" placeholder="Type to search"
                           data-focus-on-open='["modal", "#searchModal"]'>
                </form>
                <div class="fs-xs fw-medium text-body-secondary text-uppercase">Suggestions</div>
            </div>
            <div class="modal-body pt-3">
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1"
                       href="{{ route('third', ['pages', 'shop', 'single'])}}">
                            <span
                                class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1">Shop</span>
                        <img src="/img/shop/cart/01.png" width="90" alt="Product">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Candle in concrete bowl</a>
                        </h4>
                        <span class="mb-0 me-2">$11.00</span>
                        <del class="fs-sm text-body-secondary ms-auto">$15.00</del>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a class="position-relative d-inline-block flex-shrink-0" href="#">
                            <span
                                class="badge bg-info position-absolute top-0 start-100 translate-middle ms-n1">Blog</span>
                        <img class="rounded-1" src="/img/landing/shop-1/instagram/02.jpg" width="90" alt="Post">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-0">
                            <a href="#">Bedroom decoration explained. Tips &amp; tricks from the field experts.</a>
                        </h4>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1"
                       href="{{ route('third', ['pages', 'shop', 'single'])}}">
                            <span
                                class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1">Shop</span>
                        <img src="/img/shop/cart/02.png" width="90" alt="Product">
                    </a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Exquisite glass vase</a>
                        </h4>
                        <span class="mb-0 me-2">$23.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Cart offcanvas -->
<div class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5" id="cartOffcanvas" style="width: 680px;">

    <!-- Title -->
    <div class="px-4 pt-3">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
            <h2 class="offcanvas-title d-flex align-items-center mb-1">
                Your cart <span class="fs-base fw-normal text-body-secondary ms-3">(3 items)</span>
            </h2>
            <button class="btn-close mb-1 me-n1" type="button" data-bs-dismiss="offcanvas"
                    data-bs-target="#cartOffcanvas" aria-label="Close"></button>
        </div>
    </div>

    <!-- Body -->
    <div class="offcanvas-body">

        <!-- Item -->
        <div class="d-sm-flex align-items-center pb-4"><a
                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                href="{{ route('third', ['pages', 'shop', 'single'])}}"><img src="/img/shop/cart/01.png" width="110"
                                                                             alt="Product"></a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Candle in concrete bowl</a>
                        </h3>
                        <div class="d-flex flex-wrap">
                            <div class="text-body-secondary fs-sm me-3">
                                Color: <span class="text-dark fw-medium">Gray night</span>
                            </div>
                            <div class="text-body-secondary fs-sm me-3">
                                Weight: <span class="text-dark fw-medium">140g</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$11.00</div>
                        <del class="text-body-secondary ms-auto">$15.00</del>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="2" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove"
                       aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-sm-flex align-items-center border-top py-4">
            <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
               href="{{ route('third', ['pages', 'shop', 'single'])}}">
                <img src="/img/shop/cart/02.png" width="110" alt="Product">
            </a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Exquisite glass vase</a>
                        </h3>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$23.00</div>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove"
                       aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-sm-flex align-items-center border-top pt-4">
            <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
               href="{{ route('third', ['pages', 'shop', 'single'])}}">
                <img src="/img/shop/cart/03.png" width="110" alt="Product">
            </a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Set for a dinner party of 7
                                items</a>
                        </h3>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">$47.00</div>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove"
                       aria-label="Remove">
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Coupon input + Total -->
    <div class="px-4 pb-3 pb-sm-4 pb-sm-5">
        <div class="d-sm-flex align-items-center border-top pt-4">
            <div class="input-group input-group-sm border-dashed mb-3 mb-sm-0 me-sm-4 me-md-5">
                <input class="form-control text-uppercase" type="text" placeholder="Your coupon code">
                <button class="btn btn-secondary" type="button">Apply coupon</button>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <span class="fs-xl me-3">Total:</span>
                <span class="h3 mb-0">$92.00</span>
            </div>
        </div>
    </div>

    <!-- Action buttons -->
    <div class="d-flex align-items-center justify-content-between px-4 pb-3">
        <div class="nav d-none d-sm-block">
            <a class="nav-link fw-semibold px-0" href="#cartOffcanvas" data-bs-dismiss="offcanvas">
                <i class="ai-chevron-left fs-xl me-2"></i>
                Back to shop
            </a>
        </div>
        <a class="btn btn-lg btn-primary w-100 w-sm-auto" href="{{ route('third', ['pages', 'shop', 'checkout'])}}">
            Proceed to checkout
            <i class="ai-chevron-right ms-2 me-n1"></i>
        </a>
    </div>
</div>
