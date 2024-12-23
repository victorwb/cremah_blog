@extends('layouts.base', ['title' => 'Around | Account - Settings'])

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
                                    <a class="nav-link fw-semibold py-2 px-0 active"
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
                    <h1 class="h2 mb-4">Settings</h1>

                    <!-- Basic info -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-user text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Basic info</h2>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown">
                                    <a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0"
                                       href="#" data-bs-toggle="dropdown" aria-expanded="false"
                                       style="width: 80px; height: 80px; background-image: url(/img/avatar/02.jpg);"
                                       aria-label="Upload picture">
                                    <span class="d-block text-light text-center lh-1 pb-1"
                                          style="background-color: rgba(0,0,0,.5)">
                                        <i class="ai-camera"></i>
                                    </span>
                                    </a>
                                    <div class="dropdown-menu my-1">
                                        <a class="dropdown-item fw-normal" href="#">
                                            <i class="ai-camera fs-base opacity-70 me-2"></i>
                                            Upload new photo
                                        </a>
                                        <a class="dropdown-item text-danger fw-normal" href="#">
                                            <i class="ai-trash fs-base me-2"></i>
                                            Delete photo
                                        </a>
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <h3 class="h6 mb-1">Profile picture</h3>
                                    <p class="fs-sm text-body-secondary mb-0">PNG or JPG no bigger than 1000px wide and
                                        tall.</p>
                                </div>
                            </div>
                            <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                <div class="col-sm-6">
                                    <label class="form-label" for="fn">First name</label>
                                    <input class="form-control" type="text" value="Isabella" id="fn">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="ln">Last name</label>
                                    <input class="form-control" type="text" value="Bocouse" id="ln">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="email">Email address</label>
                                    <input class="form-control" type="email" value="bocouse@example.com" id="email">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="phone">Phone <span class="text-body-secondary">(optional)</span></label>
                                    <input class="form-control" type="tel"
                                           data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                           placeholder="+1 ___ ___ __" id="phone">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select" id="country">
                                        <option value="" selected disabled>Select country</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="USA">USA</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="language">Language</label>
                                    <select class="form-select" id="language">
                                        <option value="" selected disabled>Select language</option>
                                        <option value="English">English</option>
                                        <option value="Français">Français</option>
                                        <option value="Deutsch">Deutsch</option>
                                        <option value="Italiano">Italiano</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="timezone">Time zone</label>
                                    <select class="form-select" id="timezone">
                                        <option value="" selected disabled>Select time zone</option>
                                        <option value="AST">Atlantic Standard Time (AST)</option>
                                        <option value="EST">Eastern Standard Time (EST)</option>
                                        <option value="CST">Central Standard Time (CST)</option>
                                        <option value="MST">Mountain Standard Time (MST)</option>
                                        <option value="PST">Pacific Standard Time (PST)</option>
                                        <option value="AKST">Alaskan Standard Time (AKST)</option>
                                        <option value="HST">Hawaii-Aleutian Standard Time (HST)</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="currency">Currency</label>
                                    <select class="form-select" id="currency">
                                        <option value="" selected disabled>Select currency</option>
                                        <option value="usd">$ USD</option>
                                        <option value="eur">€ EUR</option>
                                        <option value="ukp">£ UKP</option>
                                        <option value="jpy">¥ JPY</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="bio">Bio</label>
                                    <textarea class="form-control" rows="5" placeholder="Add a bio" id="bio"></textarea>
                                </div>
                                <div class="col-12 d-sm-flex align-items-center pt-sm-2 pt-md-3">
                                    <div class="form-label text-body-secondary mb-2 mb-sm-0 me-sm-4">Gender:</div>
                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="radio" name="gender" value="Male"
                                               id="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="radio" name="gender" value="Female"
                                               checked id="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="radio" name="gender" value="Other"
                                               id="other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                                <div class="col-12 d-sm-flex align-items-center">
                                    <div class="form-label text-body-secondary mb-2 mb-sm-0 me-sm-4">Communication:
                                    </div>
                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="checkbox" name="com-email" value="Email"
                                               checked id="c-email">
                                        <label class="form-check-label" for="c-email">Email</label>
                                    </div>
                                    <div class="form-check form-check-inline mb-0">
                                        <input class="form-check-input" type="checkbox" name="com-phone" value="Phone"
                                               id="c-phone">
                                        <label class="form-check-label" for="c-phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end pt-3">
                                    <button class="btn btn-secondary" type="button">Cancel</button>
                                    <button class="btn btn-primary ms-3" type="button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Password -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-lock-closed text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Password change</h2>
                            </div>
                            <div class="row align-items-center g-3 g-sm-4 pb-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="current-pass">Current password</label>
                                    <div class="password-toggle">
                                        <input class="form-control" type="password" value="hidden@password"
                                               id="current-pass">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a class="d-inline-block fs-sm fw-semibold text-decoration-none mt-sm-4"
                                       href="{{ route('second', ['auth', 'password-recovery'])}}">Forgot password?</a>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="new-pass">New password</label>
                                    <div class="password-toggle">
                                        <input class="form-control" type="password" id="new-pass">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="confirm-pass">Confirm new password</label>
                                    <div class="password-toggle">
                                        <input class="form-control" type="password" id="confirm-pass">
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox"><span
                                                class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info d-flex my-3 my-sm-4">
                                <i class="ai-circle-info fs-xl me-2"></i>
                                <p class="mb-0">Password must be minimum 8 characters long - the more, the better.</p>
                            </div>
                            <div class="d-flex justify-content-end pt-3">
                                <button class="btn btn-secondary" type="button">Cancel</button>
                                <button class="btn btn-primary ms-3" type="button">Save changes</button>
                            </div>
                        </div>
                    </section>


                    <!-- Notifications -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-bell text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Notifications</h2>
                                <button class="btn btn-sm btn-outline-secondary ms-auto" type="button"
                                        data-bs-toggle="checkbox" data-bs-target="#checkboxList">Toggle all
                                </button>
                            </div>
                            <div id="checkboxList">
                                <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" checked
                                           id="product-sold">
                                    <label class="form-check-label ps-3 ps-sm-4" for="product-sold">
                                        <span class="h6 d-block mb-2">Product sold notifications</span>
                                        <span class="fs-sm text-body-secondary">Send an email when someone purchased one of my products</span>
                                    </label>
                                </div>
                                <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" checked
                                           id="product-update">
                                    <label class="form-check-label ps-3 ps-sm-4" for="product-update">
                                        <span class="h6 d-block mb-2">Product update notifications</span>
                                        <span class="fs-sm text-body-secondary">Send an email when a product I've purchased is updated</span>
                                    </label>
                                </div>
                                <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" id="product-comment">
                                    <label class="form-check-label ps-3 ps-sm-4" for="product-comment">
                                        <span class="h6 d-block mb-2">Product comment notifications</span>
                                        <span class="fs-sm text-body-secondary">Send an email when someone comments on one of my products</span>
                                    </label>
                                </div>
                                <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" checked
                                           id="product-review">
                                    <label class="form-check-label ps-3 ps-sm-4" for="product-review">
                                        <span class="h6 d-block mb-2">Product review notifications</span>
                                        <span class="fs-sm text-body-secondary">Send an email when someone leaves a review with his/her rating</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-switch d-flex">
                                <input class="form-check-input flex-shrink-0" type="checkbox" disabled
                                       id="daily-summary">
                                <label class="form-check-label opacity-100 ps-3 ps-sm-4" for="daily-summary">
                                    <span class="h6 text-body-secondary d-block mb-2">Daily summary emails<span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-3">Only for premium</span></span>
                                    <span class="fs-sm text-body-secondary">Send an email when someone leaves a review with his/her rating</span>
                                </label>
                            </div>
                        </div>
                    </section>


                    <!-- Delete account -->
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-trash text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Delete account</h2>
                            </div>
                            <div class="alert alert-warning d-flex mb-4">
                                <i class="ai-triangle-alert fs-xl me-2"></i>
                                <p class="mb-0">When you delete your account, your public profile will be deactivated
                                    immediately. If you change your mind before the 14 days are up, sign in with your
                                    email and password, and we'll send a link to reactivate account. <a href="#"
                                                                                                        class="alert-link">Learn
                                        more</a></p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirm">
                                <label class="form-check-label text-dark fw-medium" for="confirm">Yes, I want to delete
                                    my account</label>
                            </div>
                            <div class="d-flex flex-column flex-sm-row justify-content-end pt-4 mt-sm-2 mt-md-3">
                                <button class="btn btn-danger" type="button">
                                    <i class="ai-trash ms-n1 me-2"></i>
                                    Delete account
                                </button>
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
