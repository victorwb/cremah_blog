@extends('layouts.base', ['title' => 'Around | Account - Chat'])

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
                                    <a class="nav-link fw-semibold py-2 px-0"
                                       href="{{ route('second', ['account', 'earning'])}}">
                                        <i class="ai-activity fs-5 opacity-60 me-2"></i>
                                        Earnings
                                    </a>
                                    <a class="nav-link fw-semibold py-2 px-0 active"
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
                    <h1 class="h2 mb-4">Chats</h1>
                    <div class="row position-relative overflow-hidden gx-2 z-1">

                        <!-- Contacts list -->
                        <div class="col-xl-4">
                            <div
                                class="offcanvas-xl offcanvas-start position-absolute position-xl-relative h-100 bg-light rounded-5 border border-xl-0"
                                id="contactsList" data-bs-scroll="true" data-bs-backdrop="false">
                                <div class="rounded-5 overflow-hidden">
                                    <div class="card-header w-100 border-0 px-4 pt-4 pb-3">
                                        <div class="d-flex d-xl-none justify-content-end mt-n2 mb-2">
                                            <button class="btn btn-outline-secondary border-0 px-3 me-n2" type="button"
                                                    data-bs-dismiss="offcanvas" data-bs-target=" #contactsList">
                                                <i class="ai-cross me-2"></i>
                                                Close
                                            </button>
                                        </div>
                                        <div class="position-relative">
                                            <input class="form-control pe-5" type="text"
                                                   placeholder="Search by name or email">
                                            <i class="ai-search fs-lg text-nav position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pb-4 pb-xl-0 pt-1" data-simplebar
                                         style="max-height: 700px;">

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/06.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Mikaela Collins</div>
                                                    <p class="text-body fs-sm mb-0">Thank you for ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">15:01</span>
                                                    <span class="badge bg-danger fs-xs lh-1 py-1 px-2">2</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/08.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Robert Fox</div>
                                                    <p class="text-body fs-sm mb-0">Documents have ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">13:10</span>
                                                    <span class="badge bg-danger fs-xs lh-1 py-1 px-2">3</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div
                                                class="d-flex align-items-center justify-content-center position-relative flex-shrink-0 rounded-circle text-primary fs-lg fw-semibold my-1"
                                                style="width: 48px; height: 48px; background-color: rgba(var(--ar-primary-rgb), .15);">
                                                FA
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Furry Aocklen</div>
                                                    <p class="text-body fs-sm mb-0">I got it, thanks 👍</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">12:04</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact (active) -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3 pe-none bg-gray"
                                           href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/19.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Mark Virgows</div>
                                                    <p class="text-body fs-sm mb-0">Ac aliquam victoria ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">11:36</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div
                                                class="d-flex align-items-center justify-content-center position-relative flex-shrink-0 rounded-circle text-info fs-lg fw-semibold my-1"
                                                style="width: 48px; height: 48px; background-color: rgba(var(--ar-info-rgb), .15);">
                                                ND
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Nadia Davidson</div>
                                                    <p class="text-body fs-sm mb-0">Nullam id devices ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">20 hr</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/09.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Alica Hawkins</div>
                                                    <p class="text-body fs-sm mb-0">Massa laoreet molit ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">23 hr</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/05.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Natalia Bocous</div>
                                                    <p class="text-body fs-sm mb-0">Awesome 🚀</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">2 days</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/20.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Marry Black</div>
                                                    <p class="text-body fs-sm mb-0">I have great news!</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">3 days</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/10.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Jerome Bell</div>
                                                    <p class="text-body fs-sm mb-0">Ok 👌</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">May 21</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Contact -->
                                        <a class="d-flex align-items-center text-decoration-none px-4 py-3" href="#">
                                            <div class="position-relative flex-shrink-0 my-1">
                                                <img class="rounded-circle" src="/img/avatar/11.jpg" width="48"
                                                     alt="Avatar">
                                                <span
                                                    class="position-absolute bottom-0 end-0 border border-white rounded-circle me-1"
                                                    style="width: .625rem; height: .625rem; background-color: #d7dde2;"></span>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-1">
                                                <div class="me-3">
                                                    <div class="h6 mb-1">Jerome Bell</div>
                                                    <p class="text-body fs-sm mb-0">Do you know how ...</p>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block fs-xs text-body-secondary">2 days</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Chat window -->
                        <div class="col-xl-8">
                            <div class="card h-100 border-0">

                                <!-- Header -->
                                <div class="navbar card-header w-100 mx-0 px-4">
                                    <div class="d-flex align-items-center w-100 px-sm-3">
                                        <button class="navbar-toggler d-xl-none me-3 me-sm-4" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#contactsList"
                                                aria-controls="contactsList" aria-label="Toggle contacts list">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="position-relative flex-shrink-0">
                                            <img class="rounded-circle" src="/img/avatar/19.jpg" width="48"
                                                 alt="Avatar">
                                            <span
                                                class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                                style="width: .625rem; height: .625rem;"></span>
                                        </div>
                                        <div class="h6 ps-2 ms-1 mb-0">Mark Virgows</div>
                                        <div class="dropdown ms-auto">
                                            <button
                                                class="btn btn-icon btn-sm btn-outline-secondary border-0 rounded-circle me-n2"
                                                type="button" data-bs-toggle="dropdown" aria-label="Actions">
                                                <i class="ai-dots-vertical fs-4 fw-bold"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end my-1">
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-user fs-base opacity-80 me-2"></i>
                                                    View profile
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-bell-off fs-base opacity-80 me-2"></i>
                                                    Disable notifications
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-edit fs-base opacity-80 me-2"></i>
                                                    Edit contact
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-trash fs-base opacity-80 me-2"></i>
                                                    Delete contact
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-logout fs-base opacity-80 me-2"></i>
                                                    Leave chat
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="ai-circle-slash fs-base opacity-80 me-2"></i>
                                                    Block user
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Body -->
                                <div class="card-body pb-0 pt-4" data-simplebar style="max-height: 580px;">
                                    <div class="text-body-secondary text-center mb-4">May 27, 2023</div>

                                    <!-- Message -->
                                    <div class="mb-3" style="max-width: 392px;">
                                        <div class="d-flex align-items-end mb-2">
                                            <div class="flex-shrink-0 pe-2 me-1">
                                                <img class="rounded-circle" src="/img/avatar/19.jpg" width="48"
                                                     alt="Avatar">
                                            </div>
                                            <div class="message-box-start text-dark">Thank you for recommending me as a
                                                designer. I have an interview tomorrow!
                                            </div>
                                        </div>
                                        <div class="fs-xs text-body-secondary text-end">11:32 am</div>
                                    </div>

                                    <!-- Message -->
                                    <div class="ms-auto mb-3" style="max-width: 392px;">
                                        <div class="d-flex align-items-end mb-2">
                                            <div class="message-box-end bg-primary text-white">Oh no thanks! I just know
                                                that you are a great specialist!
                                            </div>
                                            <div class="flex-shrink-0 ps-2 ms-1">
                                                <img class="rounded-circle" src="/img/avatar/01.jpg" width="48"
                                                     alt="Avatar">
                                            </div>
                                        </div>
                                        <div class="fs-xs text-body-secondary">
                                            <i class="ai-checks text-primary fs-xl mt-n1 me-1"></i>
                                            2:18 pm
                                        </div>
                                    </div>
                                    <div class="text-body-secondary text-center my-4">May 29, 2023</div>

                                    <!-- Message -->
                                    <div class="mb-3" style="max-width: 392px;">
                                        <div class="d-flex align-items-end mb-2">
                                            <div class="flex-shrink-0 pe-2 me-1">
                                                <img class="rounded-circle" src="/img/avatar/19.jpg" width="48"
                                                     alt="Avatar">
                                            </div>
                                            <div class="w-100">
                                                <div class="message-box-start text-dark mb-2">I have great news, I've
                                                    been hired! 🚀
                                                </div>
                                                <div class="message-box-start text-dark">Thanks again!</div>
                                            </div>
                                        </div>
                                        <div class="fs-xs text-body-secondary text-end">4:04 am</div>
                                    </div>

                                    <!-- Message -->
                                    <div class="ms-auto mb-3" style="max-width: 392px;">
                                        <div class="d-flex align-items-end mb-2">
                                            <div class="message-box-end bg-primary text-white">You are welcome!</div>
                                            <div class="flex-shrink-0 ps-2 ms-1">
                                                <img class="rounded-circle" src="/img/avatar/01.jpg" width="48"
                                                     alt="Avatar">
                                            </div>
                                        </div>
                                        <div class="fs-xs text-body-secondary">
                                            <i class="ai-check text-primary fs-xl mt-n1 me-1"></i>
                                            2:18 pm
                                        </div>
                                    </div>
                                    <div class="text-body-secondary text-center my-4">Today</div>

                                    <!-- Message -->
                                    <div class="mb-3" style="max-width: 392px;">
                                        <div class="d-flex align-items-end mb-2">
                                            <div class="flex-shrink-0 pe-2 me-1">
                                                <img class="rounded-circle" src="/img/avatar/19.jpg" width="48"
                                                     alt="Avatar">
                                            </div>
                                            <div class="message-box-start text-dark">I'm so happy to be part of the team
                                                and work with you on this new exciting project. Can't thank you enough
                                                😊
                                            </div>
                                        </div>
                                        <div class="fs-xs text-body-secondary text-end">10:17 am</div>
                                    </div>
                                </div>

                                <!-- Footer (Textarea) -->
                                <div class="card-footer w-100 border-0 mx-0 px-4">
                                    <div class="d-flex align-items-end border rounded-3 pb-3 pe-3 mx-sm-3">
                                        <textarea class="form-control border-0" rows="3" placeholder="Type a message"
                                                  style="resize: none;"></textarea>
                                        <div class="nav flex-nowrap align-items-center">
                                            <a class="nav-link text-body-secondary p-1 me-1" href="#"
                                               aria-label="Attach">
                                                <i class="ai-paperclip fs-xl"></i>
                                            </a>
                                            <a class="nav-link text-body-secondary p-1" href="#" aria-label="Emoji">
                                                <i class="ai-emoji-smile fs-xl"></i>
                                            </a>
                                            <button class="btn btn-sm btn-secondary ms-3" type="button">Send</button>
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
