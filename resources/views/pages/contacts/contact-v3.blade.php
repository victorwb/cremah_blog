@extends('layouts.base', ['title' => 'Around | Contacts v.3'])

@section('css')
@vite(['node_modules/leaflet/dist/leaflet.css'])
@endsection

@section('content')

<main class="page-wrapper">
    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">

        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contacts v.3</li>
            </ol>
        </nav>

        <!-- Page title -->
        <h1 class="display-2 pb-2 mb-sm-4 mb-lg-5">Contacts</h1>

        <!-- Contact details -->
        <div class="border-top pb-sm-3 pt-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 pt-2">

                <!-- Address -->
                <div class="col pb-2">
                    <h4 class="mb-lg-4">Address</h4>
                    <p class="fs-lg fw-medium pb-3 mb-3">514 Magnolia St. Orlando, FL 32806</p>
                    <a class="btn btn-primary" href="#">
                        <i class="ai-map-pin me-1"></i>
                        Get directions
                    </a>
                </div>

                <!-- Phone -->
                <div class="col pb-2">
                    <h4 class="mb-lg-4">Phone</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="pb-1 mb-2">
                            <span class="d-block fs-sm text-body-secondary mb-1">Main office</span>
                            <a class="nav-link fs-lg p-0" href="tel:+178632256033">+1&nbsp;(786)&nbsp;322&nbsp;560&nbsp;33</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block fs-sm text-body-secondary mb-1">Reception room</span>
                            <a class="nav-link fs-lg p-0" href="tel:+178630056044">+1&nbsp;(786)&nbsp;300&nbsp;560&nbsp;44</a>
                        </li>
                        <li>
                            <span class="d-block fs-sm text-body-secondary mb-1">Franchise</span>
                            <a class="nav-link fs-lg p-0" href="tel:+178630050055">+1&nbsp;(786)&nbsp;300&nbsp;500&nbsp;55</a>
                        </li>
                    </ul>
                </div>

                <!-- Schedule -->
                <div class="col pb-2">
                    <h4 class="mb-lg-4">Schedule</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="pb-1 mb-2">
                            <span class="d-block fs-sm text-body-secondary mb-1">Mon - Thu</span>
                            <div class="d-flex align-items-center">
                                <span class="text-nav fs-lg fw-medium">10:00</span>
                                <span class="border-top mx-4" style="width: 36px; height: 1px;"></span>
                                <span class="text-nav fs-lg fw-medium">22:00</span>
                            </div>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block fs-sm text-body-secondary mb-1">Fri - Sat</span>
                            <div class="d-flex align-items-center">
                                <span class="text-nav fs-lg fw-medium">10:00</span>
                                <span class="border-top mx-4" style="width: 36px; height: 1px;"></span>
                                <span class="text-nav fs-lg fw-medium">20:00</span>
                            </div>
                        </li>
                        <li>
                            <span class="d-block fs-sm text-body-secondary mb-1">Sun</span>
                            <div class="d-flex align-items-center">
                                <span class="text-nav fs-lg fw-medium">12:00</span>
                                <span class="border-top mx-4" style="width: 36px; height: 1px;"></span>
                                <span class="text-nav fs-lg fw-medium">16:00</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Email -->
                <div class="col pb-2">
                    <h4 class="mb-lg-4">Email</h4>
                    <a class="nav-link fs-lg p-0" href="mailto:email@example.com">email@example.com</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Map-->
    <section class="position-relative">
        <div class="d-none d-xl-block" style="height: 570px;"></div>
        <div class="d-none d-lg-block d-xl-none" style="height: 450px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 380px;"></div>
        <div class="d-md-none" style="height:280px;"></div>
        <div class="interactive-map position-absolute top-0 start-0 w-100 h-100" data-map-options='{
  "center": [28.5384, -81.3789],
  "zoom": 10,
  "scrollWheelZoom": false,
  "markers": [
    {
      "position": [28.5384, -81.3789],
      "popup": "&lt;div class=&#39;p-3&#39;&gt;&lt;h6&gt;We are in Orlando, FL&lt;/h6&gt;&lt;p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;&gt;514 Magnolia St. Orlando, FL 32806&lt;/p&gt;&lt;/div&gt;"
    }
  ]
}'></div>
    </section>

</main>

<footer class="footer bg-dark pb-3 pt-sm-3 py-md-4 py-lg-5" data-bs-theme="dark">
    <div class="container pb-4 pt-5">
        <div class="d-md-flex align-items-center justify-content-between pb-1 pb-md-0 mb-4 mb-md-5">
            <nav class="nav justify-content-center justify-content-md-start pb-sm-2 pb-md-0 mb-4 mb-md-0 ms-md-n3">
                <a class="nav-link py-1 px-0 mx-3" href="#">Services</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Reviews</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Team</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Blog</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Contact</a>
            </nav>
            <div class="d-flex justify-content-center justify-content-md-start me-md-n2">
                <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#" aria-label="Instagram">
                    <i class="ai-instagram"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#" aria-label="Facebook">
                    <i class="ai-facebook"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-x rounded-circle mx-2" href="#" aria-label="X">
                    <i class="ai-x"></i>
                </a>
                <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#" aria-label="LinkedIn">
                    <i class="ai-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="d-md-flex align-items-center justify-content-between text-center text-md-start">
            <a class="nav-link d-inline-block text-body-secondary fs-sm text-decoration-none order-md-2 py-1 px-0 mb-3 mb-md-0" href="#">Privacy policy</a>
            <p class="nav fs-sm order-md-1 mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link d-inline fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
            </p>
        </div>
    </div>
</footer>

@endsection

@section('script-bottom')

@endsection