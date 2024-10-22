@php
    if (!isset($isDark)){
       $isDark = false;
    }
    if (!isset($isLight)){
       $isLight = false;
    }
     if (!isset($navClass)){
       $navClass = '';
    }
@endphp

<header {{ $isDark ? 'data-bs-theme=dark' : '' }} >

    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
    <div class="navbar navbar-expand-lg fixed-top {{$navClass}}" {{ $isLight ? 'data-bs-theme=light' : '' }} >
        <div class="container">

            <!-- Navbar brand (Logo) -->
            <a class="navbar-brand pe-sm-3" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                Around
            </a>

            <!-- Theme switcher -->
            <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto"
                 data-bs-toggle="mode">
                <input class="form-check-input" type="checkbox" id="theme-mode">
                <label class="form-check-label" for="theme-mode">
                    <i class="ai-sun fs-lg"></i>
                </label>
                <label class="form-check-label" for="theme-mode">
                    <i class="ai-moon fs-lg"></i>
                </label>
            </div>

            <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex"
               href=""
               target="_blank" rel="noopener">
                <i class="ai-cart fs-xl me-2 ms-n1"></i>
                Buy now
            </a>

            <!-- Mobile menu toggler (Hamburger) -->
            <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar collapse (Main navigation) -->
            <nav class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">Landings</a>
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
                                               href="{{ route('second', ['landings', 'mobile-app-showcase']) }}">Mobile
                                                App Showcase</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/mobile-app.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'product']) }}">Product
                                                Landing</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/product-landing.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'saas-1']) }}">SaaS v.1</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/saas-1.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'saas-2']) }}">SaaS v.2</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/saas-2.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'saas-3']) }}">SaaS v.3</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/saas-3.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'saas-4']) }}">
                                                SaaS v.4
                                                <span class="text-danger fs-xs ms-2">New</span>
                                            </a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/saas-4.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'shop-1']) }}">Shop Homepage
                                                v.1</a>
                                            <span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0"
                                                    style="background-image: url(/img/megamenu/shop-homepage-1.jpg);"></span>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{ route('second', ['landings', 'shop-2']) }}">
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
                                               href="{{ route('second', ['landings', 'web-studio']) }}">Web
                                                Studio</a>
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
                                               href="{{ route('second', ['landings', 'yoga-studio']) }}">Yoga
                                                Studio</a>
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">List View
                                            v.1</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'list-v2'])}}">List View
                                            v.2</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'grid-v1'])}}">Grid View
                                            v.1</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'grid-v2'])}}">Grid View
                                            v.2</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'slider'])}}">Slider View</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'single-v1'])}}">Single
                                            Project
                                            v.1</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'portfolio', 'single-v2'])}}">Single
                                            Project
                                            v.2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Catalog
                                            (Listing)</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'shop', 'single'])}}">Product Page</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'shop', 'checkout'])}}">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'blog', 'grid-sidebar'])}}">Grid View with
                                            Sidebar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'grid'])}}">Grid
                                            View no Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'blog', 'list-sidebar'])}}">List View with
                                            Sidebar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('third', ['pages', 'blog', 'list'])}}">List
                                            View no Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'blog', 'single-v1'])}}">Single post
                                            v.1</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'blog', 'single-v2'])}}">Single post
                                            v.2</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'blog', 'single-v3'])}}">Single post
                                            v.3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">About</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'about', 'agency'])}}">About - Agency</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'about', 'product'])}}">About - Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'services', 'services-v1'])}}">Services
                                            v.1</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'services', 'services-v2'])}}">Services
                                            v.2</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'services', 'services-v3'])}}">Services
                                            v.3</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('second', ['pages', 'pricing'])}}">Pricing</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Contacts</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'contacts', 'contact-v1'])}}">Contacts
                                            v.1</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'contacts', 'contact-v2'])}}">Contacts
                                            v.2</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'contacts', 'contact-v3'])}}">Contacts
                                            v.3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Specialty Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'speciality-pages',  'coming-soon-v1'])}}">Coming
                                            Soon v.1</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'speciality-pages',  'coming-soon-v2'])}}">Coming
                                            Soon v.2</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'speciality-pages',  '404-v1'])}}">404
                                            Error v.1</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'speciality-pages',  '404-v2'])}}">404
                                            Error v.2</a></li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('third', ['pages', 'speciality-pages',  '404-v3'])}}">404
                                            Error v.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-expanded="false">Auth pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signin'])}}">Sign
                                            In</a></li>
                                    <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signup'])}}">Sign
                                            Up</a></li>
                                    <li><a class="dropdown-item" href="{{ route('second', ['auth', 'signinup'])}}">Sign
                                            In / Up</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                           href="{{ route('second', ['auth', 'password-recovery'])}}">Password
                                            Recovery</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item"
                                   href="{{ route('second', ['account', 'overview'])}}">Overview</a></li>
                            <li><a class="dropdown-item"
                                   href="{{ route('second', ['account', 'settings'])}}">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('second', ['account', 'billing'])}}">Billing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('second', ['account', 'orders'])}}">Orders</a>
                            </li>
                            <li><a class="dropdown-item"
                                   href="{{ route('second', ['account', 'earning'])}}">Earnings</a></li>
                            <li><a class="dropdown-item" href="{{ route('second', ['account', 'chat'])}}">Chat
                                    (Messages)</a></li>
                            <li><a class="dropdown-item" href="{{ route('second', ['account', 'favorites'])}}">Favorites
                                    (Wishlist)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('second', ['components', 'typography'])}}">UI Kit</a>
                    </li>
                </ul>
                <div class="d-sm-none p-3 mt-n3">
                    <a class="btn btn-primary w-100 mb-1"
                       href=""
                       target="_blank" rel="noopener">
                        <i class="ai-cart fs-xl me-2 ms-n1"></i>
                        Buy now
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
