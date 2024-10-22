@extends('layouts.base', ['title' => 'Around | Account Billing'])

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
                                    <a class="nav-link fw-semibold py-2 px-0 active"
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
                                    <a class="nav-link fw-semibold py-2 px-0"
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
                    <h1 class="h2 mb-4">Billing</h1>

                    <!-- Payment methods -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-card text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Payment methods</h2>
                            </div>
                            <div class="alert alert-danger d-flex mb-4">
                                <i class="ai-octagon-alert fs-xl me-2"></i>
                                <p class="mb-0">Your primary credit card expired on 01/04/2023. Please add a new card or
                                    update this one.</p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-4">

                                <!-- Payment method (primary) -->
                                <div class="col">
                                    <div class="card h-100 rounded-3 p-3 p-sm-4">
                                        <div class="d-flex align-items-center pb-2 mb-1">
                                            <h3 class="h6 text-nowrap text-truncate mb-0">Isabella Bocouse</h3>
                                            <span
                                                class="badge bg-primary bg-opacity-10 text-primary fs-xs ms-3">Primary</span>
                                            <div class="d-flex ms-auto">
                                                <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Edit"
                                                        aria-label="Edit">
                                                    <i class="ai-edit-alt"></i>
                                                </button>
                                                <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Delete"
                                                        aria-label="Delete">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <svg width="52" height="42" viewBox="0 0 52 42" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6402 28.2865H18.5199L21.095 12.7244H25.2157L22.6402 28.2865ZM15.0536 12.7244L11.1255 23.4281L10.6607 21.1232L10.6611 21.124L9.27467 14.1256C9.27467 14.1256 9.10703 12.7244 7.32014 12.7244H0.8262L0.75 12.9879C0.75 12.9879 2.73586 13.3942 5.05996 14.7666L8.63967 28.2869H12.9327L19.488 12.7244H15.0536ZM47.4619 28.2865H51.2453L47.9466 12.7239H44.6345C43.105 12.7239 42.7324 13.8837 42.7324 13.8837L36.5873 28.2865H40.8825L41.7414 25.9749H46.9793L47.4619 28.2865ZM42.928 22.7817L45.093 16.9579L46.3109 22.7817H42.928ZM36.9095 16.4667L37.4975 13.1248C37.4975 13.1248 35.6831 12.4463 33.7916 12.4463C31.7469 12.4463 26.8913 13.3251 26.8913 17.5982C26.8913 21.6186 32.5902 21.6685 32.5902 23.7803C32.5902 25.8921 27.4785 25.5137 25.7915 24.182L25.1789 27.6763C25.1789 27.6763 27.0187 28.555 29.8296 28.555C32.6414 28.555 36.8832 27.1234 36.8832 23.2271C36.8832 19.1808 31.1331 18.8041 31.1331 17.0449C31.1335 15.2853 35.1463 15.5113 36.9095 16.4667Z"
                                                    fill="#2566AF"/>
                                                <path
                                                    d="M10.6611 22.1235L9.2747 15.1251C9.2747 15.1251 9.10705 13.7239 7.32016 13.7239H0.8262L0.75 13.9874C0.75 13.9874 3.87125 14.6235 6.86507 17.0066C9.72766 19.2845 10.6611 22.1235 10.6611 22.1235Z"
                                                    fill="#E6A540"/>
                                            </svg>
                                            <div class="ps-3 fs-sm">
                                                <div class="text-dark">Visa •••• 9016</div>
                                                <div class="text-body-secondary">Debit - Expires 03/24</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment method -->
                                <div class="col">
                                    <div class="card h-100 rounded-3 p-3 p-sm-4">
                                        <div class="d-flex align-items-center pb-2 mb-1">
                                            <h3 class="h6 text-nowrap text-truncate mb-0">Isabella Bocouse</h3>
                                            <div class="d-flex ms-auto">
                                                <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Edit"
                                                        aria-label="Edit">
                                                    <i class="ai-edit-alt"></i>
                                                </button>
                                                <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Delete"
                                                        aria-label="Delete">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <svg width="52" height="42" viewBox="0 0 52 42" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M31.4109 30.6159H20.5938V10.7068H31.4111L31.4109 30.6159Z"
                                                      fill="#FF5F00"/>
                                                <path
                                                    d="M21.28 20.6617C21.28 16.6232 23.1264 13.0256 26.0016 10.7072C23.8252 8.94968 21.1334 7.99582 18.3618 8.00001C11.5344 8.00001 6 13.6688 6 20.6617C6 27.6547 11.5344 33.3235 18.3618 33.3235C21.1334 33.3277 23.8254 32.3738 26.0018 30.6163C23.1268 28.2983 21.28 24.7005 21.28 20.6617Z"
                                                    fill="#EB001B"/>
                                                <path
                                                    d="M46.0028 20.6617C46.0028 27.6547 40.4684 33.3235 33.641 33.3235C30.8691 33.3276 28.1768 32.3738 26 30.6163C28.876 28.2979 30.7224 24.7005 30.7224 20.6617C30.7224 16.623 28.876 13.0256 26 10.7072C28.1768 8.94974 30.8689 7.99589 33.6408 8.00001C40.4682 8.00001 46.0026 13.6688 46.0026 20.6617"
                                                    fill="#F79E1B"/>
                                            </svg>
                                            <div class="ps-3 fs-sm">
                                                <div class="text-dark">MasterCard •••• 4242</div>
                                                <div class="text-body-secondary">Checking - Expires 01/25</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment method -->
                                <div class="col">
                                    <div class="card h-100 rounded-3 p-3 p-sm-4">
                                        <div class="d-flex align-items-center pb-2 mb-1">
                                            <h3 class="h6 text-nowrap text-truncate mb-0">Isabella Bocouse</h3>
                                            <div class="d-flex ms-auto">
                                                <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Edit"
                                                        aria-label="Edit">
                                                    <i class="ai-edit-alt"></i>
                                                </button>
                                                <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Delete"
                                                        aria-label="Delete">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <svg width="52" height="42" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 52 42">
                                                <path fill="#03a9f4"
                                                      d="M37.3,11.8c-0.2-0.1-0.5-0.1-0.7,0c-0.2,0.1-0.4,0.3-0.4,0.6c0,0.2-0.1,0.5-0.1,0.7c-1.4,6.3-4.2,9.4-8.5,9.4h-6.4c-0.3,0-0.6,0.2-0.7,0.6l-2.1,10L18,35.5c-0.2,1.2,0.5,2.3,1.7,2.5c0.1,0,0.3,0,0.4,0h4.3c1,0,1.8-0.7,2.1-1.6l1.7-6.9h3.7c4.4,0,7.4-3.5,8.5-9.8l0,0C41.1,16.7,39.9,13.5,37.3,11.8z"/>
                                                <path fill="#283593"
                                                      d="M36,6.5c-1.4-1.6-3.4-2.5-5.5-2.5H18.6c-1.8,0-3.3,1.3-3.5,3l-3.7,24.4c-0.2,1.2,0.6,2.3,1.8,2.4c0.1,0,0.2,0,0.3,0H19c0.3,0,0.6-0.2,0.7-0.6l2-9.4h5.8c5.1,0,8.4-3.5,9.9-10.5c0.1-0.3,0.1-0.6,0.1-0.8C38,10.3,37.4,8.1,36,6.5z"/>
                                            </svg>
                                            <div class="ps-2 fs-sm">
                                                <div class="text-dark">Electronic payment system</div>
                                                <div class="text-body-secondary">bocouse@example.com</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add payment method -->
                                <div class="col">
                                    <div
                                        class="card h-100 justify-content-center align-items-center border-dashed rounded-3 py-5 px-3 px-sm-4">
                                        <a class="stretched-link d-flex align-items-center fw-semibold text-decoration-none"
                                           href="#addCard" data-bs-toggle="modal">
                                            <i class="ai-circle-plus fs-xl me-2"></i>
                                            Add new payment methods
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Billing address -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-map-pin text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Billing address</h2>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-4">

                                <!-- Address (primary) -->
                                <div class="col">
                                    <div class="card h-100 rounded-3 p-3 p-sm-4">
                                        <div class="d-flex align-items-center pb-2 mb-1">
                                            <h3 class="h6 text-nowrap text-truncate mb-0">Billing address #1</h3>
                                            <span
                                                class="badge bg-primary bg-opacity-10 text-primary fs-xs ms-3">Primary</span>
                                            <div class="d-flex ms-auto">
                                                <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Edit"
                                                        aria-label="Edit">
                                                    <i class="ai-edit-alt"></i>
                                                </button>
                                                <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Delete"
                                                        aria-label="Trash">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mb-0">314 Robinson Lane,<br>Wilmington, DE 19805,<br>USA</p>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col">
                                    <div class="card h-100 rounded-3 p-3 p-sm-4">
                                        <div class="d-flex align-items-center pb-2 mb-1">
                                            <h3 class="h6 text-nowrap text-truncate mb-0">Billing address #2</h3>
                                            <div class="d-flex ms-auto">
                                                <button class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Edit"
                                                        aria-label="Edit">
                                                    <i class="ai-edit-alt"></i>
                                                </button>
                                                <button class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2"
                                                        type="button" data-bs-toggle="tooltip" title="Delete"
                                                        aria-label="Delete">
                                                    <i class="ai-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="mb-0">401 Magnetic Drive Unit 2,<br>Toronto, Ontario, M3J 3H9<br>Canada
                                        </p>
                                    </div>
                                </div>

                                <!-- Add address -->
                                <div class="col">
                                    <div
                                        class="card h-100 justify-content-center align-items-center border-dashed rounded-3 py-5 px-3 px-sm-4">
                                        <a class="stretched-link d-flex align-items-center fw-semibold text-decoration-none my-sm-3"
                                           href="#addAddress" data-bs-toggle="modal">
                                            <i class="ai-circle-plus fs-xl me-2"></i>
                                            Add new address
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4 mt-sm-2 mt-md-3">
                                <h3 class="h6 mb-1">Tax location</h3>
                                <p class="mb-0">United States - 10% VAT</p>
                            </div>
                            <div class="alert alert-info d-flex mb-0">
                                <i class="ai-circle-info fs-xl me-2"></i>
                                <p class="mb-0">Your text location determines the taxes that are applied to your bill.
                                    <a href="#" class="alert-link">Learn more</a></p>
                            </div>
                        </div>
                    </section>
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
