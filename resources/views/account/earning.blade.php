@extends('layouts.base', ['title' => 'Around | Account - Earnings'])

@section('body_attributes')
    class="bg-secondary"
@endsection

@section('content')

    <main class="page-wrapper">

        @include('layouts.partials/account-navbar')

        <!-- Page container -->
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">

                <!-- Sidebar (offcanvas on sreens < 992px) -->
                <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
                    <div class="position-lg-sticky top-0">
                        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
                        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button"
                                    data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"
                                    aria-label="Close"></button>
                            <div class="offcanvas-body">
                                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                                    <img class="d-block rounded-circle mb-2" src="/img/avatar/02.jpg" width="80"
                                         alt="Isabella Bocouse">
                                    <h3 class="h5 mb-1">Isabella Bocouse</h3>
                                    <p class="fs-sm text-body-secondary mb-0">bocouse@example.com</p>
                                </div>
                                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">
                                        Account</h4>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'overview'])}}">
                                        <i class="ai-user-check fs-5 opacity-60 me-2"></i>
                                        Overview
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'settings'])}}">
                                        <i class="ai-settings fs-5 opacity-60 me-2"></i>
                                        Settings
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'billing'])}}">
                                        <i class="ai-wallet fs-5 opacity-60 me-2"></i>
                                        Billing
                                    </a>
                                </nav>
                                <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">
                                        Dashboard</h4>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'orders'])}}">
                                        <i class="ai-cart fs-5 opacity-60 me-2"></i>
                                        Orders
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0 active"
                                       href="{{ route('second', ['account', 'earning'])}}">
                                        <i class="ai-activity fs-5 opacity-60 me-2"></i>
                                        Earnings
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'chat'])}}">
                                        <i class="ai-messages fs-5 opacity-60 me-2"></i>
                                        Chat
                                        <span class="badge bg-danger ms-auto">4</span>
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'favorites'])}}">
                                        <i class="ai-heart fs-5 opacity-60 me-2"></i>
                                        Favorites
                                    </a>
                                </nav>
                                <nav class="nav flex-column">
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['auth', 'signin'])}}">
                                        <i class="ai-logout fs-5 opacity-60 me-2"></i>
                                        Sign out
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </aside>


                <!-- Page content -->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h1 class="h2 mb-4 mb-sm-0 me-4">Your earnings</h1>
                        <div class="d-flex ms-auto">
                            <button class="btn btn-secondary me-3 me-sm-4" type="button">
                                <i class="ai-download me-2 ms-n1"></i>
                                Download
                            </button>
                            <select class="form-select">
                                <option value="Last week">Last week</option>
                                <option value="Last month">Last month</option>
                                <option value="Last 3 months">Last 3 months</option>
                                <option value="Last 6 months">Last 6 months</option>
                                <option value="Last year">Last year</option>
                            </select>
                        </div>
                    </div>
                    <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">

                            <!-- Stats -->
                            <div class="row g-3 g-xl-4">
                                <div class="col-md-4 col-sm-6">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Earnings (before taxes)</h2>
                                        <div class="h2 text-primary mb-2">$842.00</div>
                                        <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Your balance</h2>
                                        <div class="h2 text-primary mb-2">$735.00</div>
                                        <p class="fs-sm text-body-secondary mb-0">To be paid on 8/15/2023</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Lifetime earnings</h2>
                                        <div class="h2 text-primary mb-2">$9,156.74</div>
                                        <p class="fs-sm text-body-secondary mb-0">Based on list price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 py-4">

                                <!-- Sales value line chart -->
                                <div class="col-md-8">
                                    <div class="h-100 border rounded-3 p-4">
                                        <h2 class="h6 text-center text-sm-start mb-4">Sales value, USD</h2>
                                        <canvas data-chart='{
                  "type": "line",
                  "data": {
                    "labels": ["22 Jul", "", "24 Jul", "", "26 Jul", "", "28 Jul", "", "30 Jul", "", "01 Aug", "", "03 Aug", "", "05 Aug"],
                    "datasets": [
                      {
                        "label": "Sales, USD",
                        "fill": true,
                        "data": [0, 100, 200, 175, 100, 50, 75, 0, 0, 50, 50, 50, 0, 100, 0],
                        "backgroundColor": "rgba(68,140,116,.1)",
                        "borderWidth": 2,
                        "borderColor": "rgba(68,140,116,.6)",
                        "pointBackgroundColor": "#448c74",
                        "pointBorderWidth": 3,
                        "pointBorderColor": "#448c74",
                        "pointHoverBorderColor": "#448c74",
                        "pointHoverBorderWidth": 6
                      }
                    ]
                  },
                  "options": {
                    "responsive": true,
                    "scales": {
                      "y": {
                        "beginAtZero": true,
                        "border": {
                          "color": "rgba(133,140,151,.18)"
                        },
                        "grid": {
                          "color": "rgba(133,140,151,.18)"
                        }
                      },
                      "x": {
                        "border": {
                          "color": "rgba(133,140,151,.18)"
                        },
                        "grid": {
                          "color": "rgba(133,140,151,.18)"
                        }
                      }
                    }
                  }
                }'></canvas>
                                    </div>
                                </div>

                                <!-- Country sales -->
                                <div class="col-md-4">
                                    <div class="h-100 border rounded-3 p-4">
                                        <h2 class="h6 text-center text-sm-start mb-4">Your top countries</h2>
                                        <div class="d-flex justify-content-between text-body-secondary fs-sm">
                                            <span>Country</span>
                                            <span>Value</span>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                                                <img src="/img/account/flags/usa.png" width="16" alt="USA">
                                                <span class="ms-2">United States</span>
                                                <span class="ms-auto">$352</span>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 48%"
                                                     aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                                                <img src="/img/account/flags/sweden.png" width="16" alt="Sweden">
                                                <span class="ms-2">Sweden</span>
                                                <span class="ms-auto">$218</span>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 30%"
                                                     aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                                                <img src="/img/account/flags/india.png" width="16" alt="India">
                                                <span class="ms-2">India</span>
                                                <span class="ms-auto">$97</span>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 14%"
                                                     aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                                                <img src="/img/account/flags/france.png" width="16" alt="France">
                                                <span class="ms-2">France</span>
                                                <span class="ms-auto">$40</span>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 6%"
                                                     aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                                                <img src="/img/account/flags/south-africa.png" width="16"
                                                     alt="Argentina">
                                                <span class="ms-2">South Africa</span>
                                                <span class="ms-auto">$16</span>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 3%"
                                                     aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">

                                <!-- Device shares pie chart -->
                                <div class="col-md-8 col-lg-12 col-xl-8 text-center text-sm-start">
                                    <div class="border rounded-3 p-4">
                                        <h2 class="h6 mb-4">Purchases from devices, %</h2>
                                        <div class="px-sm-4 my-n4 my-sm-n5">
                                            <canvas data-chart='{
                    "type": "pie",
                    "data": {
                      "labels": ["Mobile - 64%", "Desktop - 19%", "Tablet - 10%", "Other - 7%"],
                      "datasets": [
                        {
                          "label": "Device share, %",
                          "data": [64, 19, 10, 7],
                          "borderWidth": 0,
                          "backgroundColor": [
                            "#448c74",
                            "rgba(68,140,116,.64)",
                            "rgba(68,140,116,.4)",
                            "rgba(68,140,116,.2)"
                          ]
                        }
                      ]
                    },
                    "options": {
                      "plugins": {
                        "legend": {
                          "position": "right",
                          "labels": {
                            "usePointStyle": true,
                            "boxWidth": 12,
                            "boxHeight": 12,
                            "useBorderRadius": true,
                            "borderRadius": 8,
                            "padding": 20,
                            "font": {
                              "size": 15
                            }
                          }
                        }
                      }
                    }
                  }'></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider for dark mode only -->
        <hr class="d-none d-dark-mode-block">

        <!-- Sidebar toggle button -->
        <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount">
            <i class="ai-menu me-2"></i>
            Account menu
        </button>
    </main>

    <footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
             style="background-color: rgba(255,255,255, .03);"></div>
        <div class="container position-relative z-2 pt-5 pb-2" data-bs-theme="dark">

            <!-- Columns with links -->
            <div class="row" id="links">
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Useful links</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="useful" data-show-label="Useful links" data-hide-label="Useful links"
                       aria-label="Useful links"></a>
                    <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Trending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Shipping &amp; Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Delivery info</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Decors</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#decors" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="decors" data-show-label="Decors" data-hide-label="Decors" aria-label="Decors"></a>
                    <div class="collapse d-md-block" id="decors" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Vases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Mirrors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Paintings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Figurines</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Textile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Lighting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Photo frames</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Categories</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#categories" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="categories" data-show-label="Categories" data-hide-label="Categories"
                       aria-label="Categories"></a>
                    <div class="collapse d-md-block" id="categories" data-bs-parent="#links">
                        <ul class="nav flex-column pb-2 pb-md-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Kitchen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Bathroom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Living room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">Bedroom</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 pb-2 pb-md-0">
                    <h3 class="h6 text-uppercase d-none d-md-block">Showroom</h3>
                    <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none"
                       href="#showroom" data-bs-toggle="collapse" role="button" aria-expanded="false"
                       aria-controls="showroom" data-show-label="Showroom" data-hide-label="Showroom"
                       aria-label="Showroom"></a>
                    <div class="collapse d-md-block" id="showroom" data-bs-parent="#links">
                        <ul class="nav flex-column pb-3">
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="#">1501 Main St, Ste 50<br>Tewksbury MA
                                    01876</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal px-0 py-1" href="+15262200459">+1&nbsp;526&nbsp;220&nbsp;0459</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled mb-0 pb-3 pb-md-0">
                            <li class="text-light opacity-90 mb-2">Mon-Fri: 8:00 - 21:00</li>
                            <li class="text-light opacity-90 mb-2">Sat: 8:00 - 21:00</li>
                            <li class="text-light opacity-90">Sun: 8:00 - 21:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-3 mt-md-2 mt-xl-0 pt-2 pt-md-4 pt-xl-0">
                    <h3 class="h6 text-uppercase mb-1 pb-1">Download our app</h3>
                    <div class="d-flex d-xl-block d-xxl-flex">
                        <a class="btn btn-secondary px-3 py-2 mt-3 me-3" href="#">
                            <img class="mx-1" src="/img/market/appstore-light.svg" width="120" alt="App Store">
                        </a>
                        <a class="btn btn-secondary px-3 py-2 mt-3" href="#">
                            <img class="mx-1" src="/img/market/googleplay-light.svg" width="119" alt="Google Play">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nav + Switcher -->
            <div class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">

                <!-- Nav -->
                <nav class="nav d-flex mb-3 mb-sm-4">
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Support</a>
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Privacy</a>
                    <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">Terms of
                        use</a>
                </nav>

                <!-- Language / currency switcher -->
                <div class="dropdown mb-4">
                    <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><img
                            class="me-2" src="/img/flags/en.png" width="18" alt="English / USD">Eng / USD
                    </button>
                    <div class="dropdown-menu dropdown-menu-end my-1">
                        <div class="dropdown-item">
                            <select class="form-select form-select-sm">
                                <option value="usd">$ USD</option>
                                <option value="eur">€ EUR</option>
                                <option value="ukp">£ UKP</option>
                                <option value="jpy">¥ JPY</option>
                            </select>
                        </div>
                        <a class="dropdown-item pb-1" href="#">
                            <img class="me-2" src="/img/flags/fr.png" width="18" alt="Français">
                            Français
                        </a>
                        <a class="dropdown-item pb-1" href="#">
                            <img class="me-2" src="/img/flags/de.png" width="18" alt="Deutsch">
                            Deutsch
                        </a>
                        <a class="dropdown-item" href="#">
                            <img class="me-2" src="/img/flags/it.png" width="18" alt="Italiano">
                            Italiano
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logo + Socials + Cards -->
            <div class="d-sm-flex align-items-center pt-4">
                <div class="d-sm-flex align-items-center pe-sm-2">
                    <a class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0" href="/">
                    <span class="text-primary flex-shrink-0 me-2">
                        <svg version="1.1" width="35" height="32" viewBox="0 0 36 33"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                  d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                        </svg>
                    </span>
                        <span class="text-light opacity-90">Around</span>
                    </a>
                    <div class="d-flex mb-4 mb-sm-0">
                        <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Telegram">
                            <i class="ai-telegram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3"
                           href="#" aria-label="Piterest">
                            <i class="ai-pinterest"></i>
                        </a>
                    </div>
                </div>
                <img class="ms-sm-auto" src="/img/shop/footer-cards.png" width="187" alt="Accepted cards">
            </div>
        </div>
        <div class="pt-5 pt-lg-0"></div>
    </footer>

@endsection

@section('script-bottom')

@endsection
