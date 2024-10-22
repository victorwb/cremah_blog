@extends('layouts.base', ['title' => 'Around | Business Consulting'])

@section('content')

    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar')

        <!-- Hero -->
        <section class="overflow-hidden">
            <div class="container pt-2 pt-sm-4 pb-sm-2 pb-md-4 py-xl-5 mt-5">
                <div class="row align-items-center py-5 mt-md-2 my-lg-3 my-xl-4 my-xxl-5">
                    <div
                        class="col-lg-7 order-lg-2 d-flex justify-content-center justify-content-lg-end mb-4 mb-md-5 mb-lg-0 pb-3 pb-md-0">
                        <div class="parallax me-lg-n4 me-xl-n5" style="max-width: 667px;">
                            <div class="parallax-layer" data-depth="0.1">
                                <img src="/img/landing/business-consulting/hero/01.png" alt="Layer">
                            </div>
                            <div class="parallax-layer" data-depth="-0.2">
                                <img src="/img/landing/business-consulting/hero/02.png" alt="Layer">
                            </div>
                            <div class="parallax-layer" data-depth="0.25">
                                <img src="/img/landing/business-consulting/hero/03.png" alt="Layer">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <h1 class="display-3 text-center text-lg-start pb-sm-2 pb-md-3">The effective solutions for your
                            business</h1>
                        <p class="fs-lg text-center text-lg-start pb-xl-2 mx-auto mx-lg-0 mb-5"
                           style="max-width: 420px;">We are a team who creates marketing strategies for B2B and B2C
                            companies.</p>
                        <div class="input-group mx-auto mx-lg-0" style="max-width: 420px;">
                <span class="input-group-text text-body-secondary">
                  <i class="ai-mail"></i>
                </span>
                            <input class="form-control" type="email" placeholder="Enter your email">
                            <button class="btn btn-primary" type="button">Book a call</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Stats -->
        <section class="container pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xl-3 mb-xxl-5">
            <div class="bg-light rounded-5 py-4 py-md-5 px-lg-5">
                <div class="row row-cols-2 row-cols-md-4 g-0">
                    <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                        <div class="position-absolute top-50 end-0 translate-middle-y border-end"
                             style="height: 60px;"></div>
                        <div class="p-3 px-sm-0 py-sm-4">
                            <div class="h2 display-5 text-primary mb-0">540+</div>
                            <span>Happy clients</span>
                        </div>
                    </div>
                    <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                        <div class="position-absolute top-50 end-0 translate-middle-y border-end d-none d-md-block"
                             style="height: 60px;"></div>
                        <div class="p-3 px-sm-0 py-sm-4">
                            <div class="h2 display-5 text-primary mb-0">1070</div>
                            <span>Projects completed</span>
                        </div>
                    </div>
                    <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                        <div class="position-absolute top-50 end-0 translate-middle-y border-end"
                             style="height: 60px;"></div>
                        <div class="p-3 px-sm-0 py-sm-4">
                            <div class="h2 display-5 text-primary mb-0">30+</div>
                            <span>Full time specialists</span>
                        </div>
                    </div>
                    <div class="col d-md-flex justify-content-center text-center text-md-start position-relative">
                        <div class="p-3 px-sm-0 py-sm-4">
                            <div class="h2 display-5 text-primary mb-0">15</div>
                            <span>Awards won</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Services grid -->
        <section class="container py-5">
            <h2 class="h1 text-center">Our services</h2>
            <p class="text-center pb-4 mb-2 mb-lg-3">We provide a wide range of consulting services</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.7276 27.5001C1.21683 28.3857 0.916576 29.3769 0.850062 30.3971C0.783549 31.4173 0.952558 32.4391 1.34402 33.3835C1.73548 34.328 2.33891 35.1697 3.10764 35.8437C3.87638 36.5177 4.78982 37.0058 5.77734 37.2704C6.76486 37.5349 7.8 37.5689 8.80272 37.3695C9.80544 37.1701 10.7489 36.7428 11.5601 36.1206C12.3713 35.4983 13.0285 34.6979 13.4809 33.7811C13.9334 32.8643 14.1689 31.8558 14.1693 30.8334C14.1698 29.3654 13.6858 27.9382 12.7924 26.7734C11.8989 25.6085 10.6459 24.7712 9.22787 24.3913C7.80984 24.0114 6.30606 24.1101 4.94991 24.6722C3.59375 25.2344 2.46105 26.2284 1.7276 27.5001Z"></path>
                                <path
                                    d="M11.7344 10.1667L4.23438 23.1667C5.42383 22.6595 6.71498 22.4361 8.00568 22.5142C9.29638 22.5922 10.5512 22.9695 11.6709 23.6163C12.7906 24.263 13.7444 25.1615 14.4569 26.2405C15.1694 27.3196 15.621 28.5496 15.776 29.8333L19.0427 24.1667C12.8427 13.45 11.9427 12.425 11.7344 10.1667Z"></path>
                                <path
                                    d="M38.2784 27.5C37.8534 26.7833 25.6701 5.6083 25.4284 5.29996C24.4255 3.9011 22.9204 2.94436 21.2281 2.62997C19.5358 2.31559 17.7875 2.66792 16.3491 3.61323C14.9107 4.55855 13.8936 6.02357 13.5108 7.70171C13.1279 9.37984 13.409 11.141 14.2951 12.6166C14.2118 12.6166 13.8784 11.9 26.7284 34.1666C27.1662 34.925 27.749 35.5898 28.4437 36.1229C29.1383 36.656 29.9311 37.0471 30.7769 37.2739C31.6227 37.5006 32.5049 37.5585 33.373 37.4443C34.2412 37.3301 35.0784 37.046 35.8368 36.6083C36.5952 36.1706 37.2599 35.5877 37.793 34.8931C38.3262 34.1984 38.7173 33.4056 38.944 32.5598C39.1707 31.714 39.2287 30.8319 39.1145 29.9637C39.0003 29.0955 38.7162 28.2583 38.2784 27.5Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Advertising communications</h3>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint velit officia consequat duis enim velit mollit.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.6213 22.7824C26.4943 23.0213 20.6934 24.6146 15.525 27.255L8.87893 31.0927C7.12129 32.1061 4.87665 31.4978 3.86795 29.7493L0.49035 23.9008C-0.520513 22.1491 0.0820047 19.9007 1.83372 18.8898L7.33997 15.7103C7.65881 15.5262 8.06657 15.6354 8.25074 15.9543L12.5774 23.4483C12.7647 23.7727 13.1836 23.8804 13.5051 23.6822C13.816 23.4905 13.9009 23.074 13.7182 22.7577L9.36036 15.2095C9.18727 14.9097 9.27227 14.5269 9.55686 14.3297C14.1026 11.1781 17.9484 7.16404 20.9018 2.48266C22.0206 0.707687 24.6278 0.755188 25.6794 2.57599L34.9289 18.5981C35.9801 20.415 34.7215 22.7007 32.6213 22.7824ZM33.8082 11.6236C34.1506 9.6637 33.0019 7.69797 31.1452 7.02512C30.5616 6.81361 30.0322 7.44872 30.3425 7.98632C31.0812 9.2661 31.8225 10.5503 32.5721 11.8482C32.8853 12.3903 33.7004 12.2404 33.8082 11.6236ZM18.4184 35.2136L15.2546 29.7215C15.0708 29.4024 14.6625 29.2929 14.3434 29.477C12.6288 30.4663 12.564 30.5047 10.2768 31.8249C9.95788 32.009 9.84821 32.417 10.0324 32.736L13.2016 38.2245C13.6078 38.9274 14.3384 39.3096 15.0824 39.3096C15.8041 39.3096 16.0801 39.0654 17.625 38.1737C18.66 37.5762 19.0159 36.2478 18.4184 35.2136ZM38.676 6.55444C38.9948 6.37035 39.1041 5.96259 38.92 5.64375C38.736 5.32499 38.3284 5.21557 38.0093 5.39974L36.2843 6.39569C35.694 6.73653 35.9409 7.63989 36.6183 7.63989C36.8554 7.63981 36.8079 7.63297 38.676 6.55444ZM32.5456 3.09976L32.9663 1.53004C33.0616 1.17437 32.8505 0.808857 32.495 0.713521C32.139 0.618351 31.7737 0.829274 31.6783 1.18495L31.2577 2.75466C31.1444 3.17734 31.4629 3.5941 31.902 3.5941C32.1964 3.59402 32.4658 3.3976 32.5456 3.09976ZM39.9772 13.6731C40.0725 13.3175 39.8613 12.9519 39.5057 12.8566L37.9359 12.436C37.5803 12.3409 37.2148 12.5519 37.1194 12.9075C37.0241 13.2631 37.2353 13.6286 37.5909 13.724C39.3076 14.184 39.2134 14.1675 39.3336 14.1675C39.6279 14.1675 39.8973 13.971 39.9772 13.6731Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Marketing and branding</h3>
                            <p class="card-text">Find aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur neque congue.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.7306 12.5C25.4119 6.375 22.5994 2.5 19.9981 2.5C17.3969 2.5 14.5844 6.375 13.2656 12.5H26.7306Z"></path>
                                <path
                                    d="M12.5 20C12.4997 21.6722 12.6112 23.3426 12.8338 25H27.1663C27.3888 23.3426 27.5003 21.6722 27.5 20C27.5003 18.3278 27.3888 16.6574 27.1663 15H12.8338C12.6112 16.6574 12.4997 18.3278 12.5 20Z"></path>
                                <path
                                    d="M13.2656 27.5C14.5844 33.625 17.3969 37.5 19.9981 37.5C22.5994 37.5 25.4119 33.625 26.7306 27.5H13.2656Z"></path>
                                <path
                                    d="M29.2956 12.5H37.1706C35.9874 9.80721 34.1895 7.42918 31.9213 5.55667C29.6531 3.68416 26.9775 2.36928 24.1094 1.7175C26.4806 3.80375 28.3406 7.66125 29.2956 12.5Z"></path>
                                <path
                                    d="M38.0638 15H29.6887C29.895 16.6587 29.9981 18.3286 29.9975 20C29.9977 21.6715 29.8941 23.3413 29.6875 25H38.0625C38.9741 21.729 38.9741 18.271 38.0625 15H38.0638Z"></path>
                                <path
                                    d="M24.1094 38.2825C26.978 37.6311 29.654 36.3164 31.9227 34.4438C34.1914 32.5713 35.9896 30.1931 37.1731 27.5H29.2981C28.3406 32.3388 26.4806 36.1963 24.1094 38.2825Z"></path>
                                <path
                                    d="M10.7109 27.5H2.83594C4.01943 30.1931 5.81766 32.5713 8.08636 34.4438C10.3551 36.3164 13.0311 37.6311 15.8997 38.2825C13.5259 36.1963 11.6659 32.3388 10.7109 27.5Z"></path>
                                <path
                                    d="M15.8919 1.7175C13.0233 2.36893 10.3472 3.68365 8.07854 5.55618C5.80984 7.42871 4.01161 9.80692 2.82812 12.5H10.7031C11.6606 7.66125 13.5206 3.80375 15.8919 1.7175Z"></path>
                                <path
                                    d="M9.99868 20C9.99852 18.3285 10.102 16.6587 10.3087 15H1.93369C1.0221 18.271 1.0221 21.729 1.93369 25H10.3087C10.102 23.3413 9.99852 21.6715 9.99868 20Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Web and Internet marketing</h3>
                            <p class="card-text">Hac erat leo proin odio est sed sit felis facilisi integer sed congue
                                neque turpis dictumst sit sed volutpat aliquet tortor non.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M38.6803 8.92375C38.5174 7.83484 37.9698 6.84032 37.1367 6.12048C36.3036 5.40064 35.2401 5.00313 34.1391 5H5.86156C4.76054 5.00313 3.69708 5.40064 2.86395 6.12048C2.03083 6.84032 1.48319 7.83484 1.32031 8.92375L20.0003 21.0112L38.6803 8.92375Z"></path>
                                <path
                                    d="M20.6787 23.55C20.4765 23.6807 20.2408 23.7503 20 23.7503C19.7592 23.7503 19.5235 23.6807 19.3212 23.55L1.25 11.8575V30.3887C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3887V11.8562L20.6787 23.55Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Email marketing</h3>
                            <p class="card-text">Adipiscing posuere dui, amet, augue nisl dictum justo, enim. Sed neque
                                congue non quam ultrices interdum vitae vestibulum.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M34.25 2H5.25C4.12344 2.00198 3.04359 2.45039 2.24699 3.24699C1.45039 4.04359 1.00198 5.12344 1 6.25V27.75C1.00198 28.8766 1.45039 29.9564 2.24699 30.753C3.04359 31.5496 4.12344 31.998 5.25 32H8.5V38.25C8.50037 38.4929 8.5715 38.7304 8.70469 38.9336C8.83789 39.1367 9.02738 39.2966 9.25 39.3938C9.40728 39.4641 9.5777 39.5003 9.75 39.5C10.0629 39.5 10.3644 39.3827 10.595 39.1712L18.4188 32H34.25C35.3766 31.998 36.4564 31.5496 37.253 30.753C38.0496 29.9564 38.498 28.8766 38.5 27.75V6.25C38.498 5.12344 38.0496 4.04359 37.253 3.24699C36.4564 2.45039 35.3766 2.00198 34.25 2ZM28.5 24.5H11C10.6685 24.5 10.3505 24.3683 10.1161 24.1339C9.8817 23.8995 9.75 23.5815 9.75 23.25C9.75 22.9185 9.8817 22.6005 10.1161 22.3661C10.3505 22.1317 10.6685 22 11 22H28.5C28.8315 22 29.1495 22.1317 29.3839 22.3661C29.6183 22.6005 29.75 22.9185 29.75 23.25C29.75 23.5815 29.6183 23.8995 29.3839 24.1339C29.1495 24.3683 28.8315 24.5 28.5 24.5ZM28.5 18.25H11C10.6685 18.25 10.3505 18.1183 10.1161 17.8839C9.8817 17.6495 9.75 17.3315 9.75 17C9.75 16.6685 9.8817 16.3505 10.1161 16.1161C10.3505 15.8817 10.6685 15.75 11 15.75H28.5C28.8315 15.75 29.1495 15.8817 29.3839 16.1161C29.6183 16.3505 29.75 16.6685 29.75 17C29.75 17.3315 29.6183 17.6495 29.3839 17.8839C29.1495 18.1183 28.8315 18.25 28.5 18.25ZM28.5 12H11C10.6685 12 10.3505 11.8683 10.1161 11.6339C9.8817 11.3995 9.75 11.0815 9.75 10.75C9.75 10.4185 9.8817 10.1005 10.1161 9.86612C10.3505 9.6317 10.6685 9.5 11 9.5H28.5C28.8315 9.5 29.1495 9.6317 29.3839 9.86612C29.6183 10.1005 29.75 10.4185 29.75 10.75C29.75 11.0815 29.6183 11.3995 29.3839 11.6339C29.1495 11.8683 28.8315 12 28.5 12Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Working on communication</h3>
                            <p class="card-text">Molestie enim tempus egestas a at enim. Velit hendrerit nibh eget porta
                                pretium. Ipsum orci habitasse eget malesuada platea.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
                        <div class="card-body pb-0">
                            <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.8575 10.625L15.3663 24.1162C15.1318 24.3506 15.0001 24.6685 15 25V28.75C15 29.0815 15.1317 29.3995 15.3661 29.6339C15.6005 29.8683 15.9185 30 16.25 30H20C20.3315 29.9999 20.6494 29.8682 20.8838 29.6338L34.4263 16.0913C33.6525 15.3837 32.97 14.7375 32.8662 14.6337L28.8575 10.625Z"></path>
                                <path
                                    d="M38.3838 10.3662L34.6338 6.61623C34.3993 6.38189 34.0815 6.25024 33.75 6.25024C33.4185 6.25024 33.1007 6.38189 32.8662 6.61623L30.625 8.85748L36.1425 14.375L38.3838 12.1337C38.6181 11.8993 38.7497 11.5814 38.7497 11.25C38.7497 10.9185 38.6181 10.6006 38.3838 10.3662Z"></path>
                                <path
                                    d="M20 32.5H16.25C15.2554 32.5 14.3016 32.1049 13.5983 31.4017C12.8951 30.6984 12.5 29.7446 12.5 28.75V25C12.4986 24.5074 12.595 24.0193 12.7836 23.5642C12.9722 23.1091 13.2493 22.696 13.5987 22.3487L28.75 7.1975V2.5C28.75 2.16848 28.6183 1.85054 28.3839 1.61612C28.1495 1.3817 27.8315 1.25 27.5 1.25H2.5C2.16848 1.25 1.85054 1.3817 1.61612 1.61612C1.3817 1.85054 1.25 2.16848 1.25 2.5V37.5C1.25 37.8315 1.3817 38.1495 1.61612 38.3839C1.85054 38.6183 2.16848 38.75 2.5 38.75H27.5C27.8315 38.75 28.1495 38.6183 28.3839 38.3839C28.6183 38.1495 28.75 37.8315 28.75 37.5V25.3025L22.6513 31.4013C22.304 31.7507 21.8909 32.0278 21.4358 32.2164C20.9807 32.405 20.4926 32.5014 20 32.5ZM7.5 7.5H22.5C22.8315 7.5 23.1495 7.6317 23.3839 7.86612C23.6183 8.10054 23.75 8.41848 23.75 8.75C23.75 9.08152 23.6183 9.39946 23.3839 9.63388C23.1495 9.8683 22.8315 10 22.5 10H7.5C7.16848 10 6.85054 9.8683 6.61612 9.63388C6.3817 9.39946 6.25 9.08152 6.25 8.75C6.25 8.41848 6.3817 8.10054 6.61612 7.86612C6.85054 7.6317 7.16848 7.5 7.5 7.5ZM6.25 15C6.25 14.6685 6.3817 14.3505 6.61612 14.1161C6.85054 13.8817 7.16848 13.75 7.5 13.75H15C15.3315 13.75 15.6495 13.8817 15.8839 14.1161C16.1183 14.3505 16.25 14.6685 16.25 15C16.25 15.3315 16.1183 15.6495 15.8839 15.8839C15.6495 16.1183 15.3315 16.25 15 16.25H7.5C7.16848 16.25 6.85054 16.1183 6.61612 15.8839C6.3817 15.6495 6.25 15.3315 6.25 15Z"></path>
                            </svg>
                            <h3 class="h4 card-title mt-0">Business copywriting</h3>
                            <p class="card-text">Massa donec quam orci feugiat. Quis iaculis facilisi ornare aenean
                                lorem enim purus in lacus in ullamcorper diam consequat.</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="ai-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <!-- Industries (Carousel on screens < 992px) -->
        <section class="container pb-5 pt-3 pt-sm-4 pt-lg-5 my-xl-3 my-xxl-5">
            <h2 class="h1 text-center">Industries we work in</h2>
            <p class="text-center pb-4 mb-2 mb-lg-3">We have been helping businesses in the following industries for
                over a decade</p>

            <!-- Swiper slider -->
            <div class="swiper" data-swiper-options='
          {
            "spaceBetween": 24,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "576": { "slidesPerView": 2 },
              "992": { "slidesPerView": 3 }
            }
          }
        '>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 h-100">
                            <div class="card-img-top overflow-hidden">
                                <img class="rounded-5 rounded-end-0"
                                     src="/img/landing/business-consulting/industries/01.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="h4 card-title">Services</h3>
                                <ul class="ps-4 mb-n2">
                                    <li class="mb-2">Id habitasse dui habitant</li>
                                    <li class="mb-2">Rutrum tempor sit tincidunt</li>
                                    <li class="mb-2">Imperdiet est quis enim facilisis</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 h-100">
                            <div class="card-img-top overflow-hidden">
                                <img class="rounded-5 rounded-end-0"
                                     src="/img/landing/business-consulting/industries/02.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="h4 card-title">Retail</h3>
                                <ul class="ps-4 mb-n2">
                                    <li class="mb-2">Ultrices volutpat sit mattis</li>
                                    <li class="mb-2">Egestas neque arcu duis</li>
                                    <li class="mb-2">Metus magna viverra blandit</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <div class="card border-0 h-100">
                            <div class="card-img-top overflow-hidden">
                                <img class="rounded-5 rounded-end-0"
                                     src="/img/landing/business-consulting/industries/03.jpg" alt="Image">
                            </div>
                            <div class="card-body">
                                <h3 class="h4 card-title">Technology</h3>
                                <ul class="ps-4 mb-n2">
                                    <li class="mb-2">Diam diam nunc monte</li>
                                    <li class="mb-2">Nulla egestas arcu proin sit</li>
                                    <li class="mb-2">Nunc sapien turpis vulputate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
            </div>

            <!-- Read more button -->
            <div class="text-center pt-4 mt-2 mt-lg-0 pt-lg-5">
                <a class="btn btn-primary" href="#">See all industries</a>
            </div>
        </section>


        <!-- Clients (Logos autoplay slider) -->
        <section class="pb-5 pt-2 pt-sm-3 pt-md-4 pt-lg-5 my-xl-3 my-xxl-5">
            <div class="container pb-4 mb-2 mb-lg-3">
                <h2 class="h1 text-center">Our clients</h2>
                <p class="text-center mb-0">More than 2,000 clients using Around to analyze data</p>
            </div>
            <div class="swiper pb-4" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "freeMode": true,
          "speed": 10000,
          "freeModeMomentum": false,
          "breakpoints": {
            "0": { "slidesPerView": 2 },
            "400": { "slidesPerView": 3 },
            "600": { "slidesPerView": 4 },
            "800": { "slidesPerView": 5 },
            "1200": { "slidesPerView": 6 },
            "1400": { "slidesPerView": 7 },
            "1600": { "slidesPerView": 8 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/01-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/01-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/02-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/02-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/03-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/03-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/04-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/04-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/05-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/05-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/06-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/06-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/03-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/03-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/05-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/05-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/02-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/02-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper" dir="rtl" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "grabCursor": false,
          "centeredSlides": true,
          "autoplay": {
            "delay": 0,
            "disableOnInteraction": false
          },
          "freeMode": true,
          "speed": 8500,
          "freeModeMomentum": false,
          "breakpoints": {
            "0": { "slidesPerView": 2 },
            "400": { "slidesPerView": 3 },
            "600": { "slidesPerView": 4 },
            "800": { "slidesPerView": 5 },
            "1200": { "slidesPerView": 6 },
            "1400": { "slidesPerView": 7 },
            "1600": { "slidesPerView": 8 }
          }
        }'>
                <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/06-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/06-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/05-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/05-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/04-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/04-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/02-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/02-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/03-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/03-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/01-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/01-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/04-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/04-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/02-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/02-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray rounded-4">
                            <img class="d-block d-dark-mode-none mx-auto"
                                 src="/img/landing/business-consulting/clients/03-dark.svg" width="196"
                                 alt="Logo">
                            <img class="d-none d-dark-mode-block mx-auto"
                                 src="/img/landing/business-consulting/clients/03-light.svg" width="196"
                                 alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- CEO quote + Process steps -->
        <section class="overflow-hidden">
            <div class="container pb-5 pt-3 pt-md-4 pt-lg-5 my-xl-3 my-xxl-5">
                <div class="row pb-md-3 pb-lg-4 mb-2 mb-lg-3">

                    <!-- CEO quote -->
                    <div class="col-md-5 d-flex flex-column align-items-center mb-4 mb-md-0">
                        <div class="position-relative" style="max-width: 416px;">
                            <img class="d-block position-relative z-2"
                                 src="/img/landing/business-consulting/ceo.png" alt="Nicolas Black">
                            <div class="bg-primary position-absolute start-0 bottom-0 w-100"
                                 style="height: 85.4%; border-radius: 2.25rem 8rem 2.25rem 2.25rem;"></div>
                        </div>
                        <div class="text-center text-md-start pt-3 mt-3">
                            <h2 class="mb-2">Nicolas Black</h2>
                            <p class="fs-xl text-body-secondary mb-2">CEO Around Group</p>
                            <div class="position-relative pt-4" style="max-width: 500px;">
                                <div class="position-absolute top-0 start-0 w-100 text-center text-md-start ms-md-1">
                                    <svg class="text-border" width="155" height="111" viewBox="0 0 155 111"
                                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M125.969 38.7937C129.372 30.2345 134.734 21.7781 141.902 13.6311C144.17 11.053 144.48 7.34066 142.623 4.45316C141.18 2.18441 138.808 0.94696 136.23 0.94696C135.508 0.94696 134.786 0.99826 134.064 1.25633C118.905 5.69065 83.4811 21.4171 82.5014 71.8454C82.1407 91.2842 96.3717 107.99 114.883 109.898C125.144 110.93 135.353 107.578 142.933 100.772C150.512 93.914 154.844 84.117 154.844 73.9077C154.844 56.8922 142.778 41.9905 125.969 38.7937Z"></path>
                                        <path
                                            d="M32.5904 109.898C42.7999 110.93 53.0092 107.578 60.5888 100.772C68.1686 93.914 72.5 84.117 72.5 73.9077C72.5 56.8922 60.4342 41.9905 43.6248 38.7937C47.0281 30.2345 52.3905 21.7781 59.5578 13.6312C61.8265 11.0531 62.1359 7.34071 60.2794 4.45321C58.8358 2.18446 56.4638 0.947006 53.8857 0.947006C53.1641 0.947006 52.4421 0.998306 51.7202 1.25638C36.5608 5.6907 1.13734 21.4172 0.157654 71.8454V72.5671C0.157654 91.6968 14.2341 107.99 32.5904 109.898Z"></path>
                                    </svg>
                                </div>
                                <p class="fs-xl position-relative z-2 mb-0">The main task of our organization is
                                    <strong>to assess the state of your enterprise now and how you can achieve your
                                        goals.</strong> Self-assessment of current activities and review of processes
                                    formulate decisions to achieve the desired outcome.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps -->
                    <div class="col-md-7 col-lg-6 col-xxl-5 offset-lg-1 offset-xxl-2">
                        <div class="ps-md-4 ps-lg-0">
                            <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                                 data-aos-easing="ease-out-back">
                                <div
                                    class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">
                                    01
                                </div>
                                <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                    <div class="card-body ps-4">
                                        <h3 class="h5 card-title pb-2 mb-1">Formulation of the problem</h3>
                                        <p class="card-text">Find aute irure dolor in reprehenderi voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur am luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                                 data-aos-easing="ease-out-back" data-aos-delay="250">
                                <div
                                    class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">
                                    02
                                </div>
                                <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                    <div class="card-body ps-4">
                                        <h3 class="h5 card-title pb-2 mb-1">Assessment of the current state</h3>
                                        <p class="card-text">Risus quam quis at euismod vitae dui elementu eu in diam
                                            malesuada mattis ut urna integer erat nisi nibh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                                 data-aos-easing="ease-out-back" data-aos-delay="500">
                                <div
                                    class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">
                                    03
                                </div>
                                <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                    <div class="card-body ps-4">
                                        <h3 class="h5 card-title pb-2 mb-1">Business plan creation</h3>
                                        <p class="card-text">A sagittis morbi massa venenatis, egestas viverra ac elit
                                            nibh tellus nisi in nec tellus mauris feugiat gravida.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative d-flex justify-content-end my-3 py-1" data-aos="fade-left"
                                 data-aos-easing="ease-out-back" data-aos-delay="700">
                                <div
                                    class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">
                                    04
                                </div>
                                <div class="card border-0 ps-3" style="width: calc(100% - 1.75rem);">
                                    <div class="card-body ps-4">
                                        <h3 class="h5 card-title pb-2 mb-1">Strategy implementation</h3>
                                        <p class="card-text">Elementum purus, nisl ipsum sit. Amet sit praesent proin
                                            sit cras. Leo sed praesent nunc vel nec risus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials (Carousel) -->
        <section class="container mt-n3 mt-sm-n2 pb-5 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-5">
            <h2 class="h1 text-center pb-3 pb-lg-4">Testimonials</h2>

            <!-- Swiper slider -->
            <div class="swiper pb-1 pb-md-2 pb-lg-3 pb-xl-4" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "autoHeight": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "576": { "slidesPerView": 2 },
            "992": { "slidesPerView": 3 }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/22.jpg" width="60"
                                         alt="Jane Cooper">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Jane Cooper</div>
                                        <div class="fs-sm text-body-secondary">Medical Assistant</div>
                                    </div>
                                </div>
                                <p class="card-text">Sit risus metus, vel neque eu lectus duis. Vulputate facilisi at
                                    feugiat mi aenean nunc enim faucibus arcu. Diam id accumsan sit.</p>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/25.jpg" width="60"
                                         alt="Cameron Williamson">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Cameron Williamson</div>
                                        <div class="fs-sm text-body-secondary">Marketing Coordinator</div>
                                    </div>
                                </div>
                                <p class="card-text">Nam convallis maecenas leo sapien interdum id. Facilisi dictum
                                    lacinia in phasellus. Nullam id sed tempor, volutpat blandit urna sagittis, commodo
                                    vestibulum. Adipiscing dictumst nunc enim massa lacus lobortis.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/23.jpg" width="60"
                                         alt="Wade Warren">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Wade Warren</div>
                                        <div class="fs-sm text-body-secondary">President of Sales</div>
                                    </div>
                                </div>
                                <p class="card-text">Vitae tempor morbi tellus pulvinar. Ut iaculis sit tristique in
                                    turpis volutpat quam nec. Pretium eu nulla egestas ultrices. Donec in pulvinar ut
                                    fermentum a, nunc, aliquam. Integer dui dui ornare sed lacinia.</p>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/26.jpg" width="60"
                                         alt="Leslie Alexander">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Leslie Alexander</div>
                                        <div class="fs-sm text-body-secondary">CEO, Divi</div>
                                    </div>
                                </div>
                                <p class="card-text">Malesuada at ullamcorper adipiscing lobortis vestibulum. Aliquet
                                    lobortis justo arcu ut auctor porttitor amet, tortor. Justo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/24.jpg" width="60"
                                         alt="Esther Howard">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Esther Howard</div>
                                        <div class="fs-sm text-body-secondary">CEO, Slack</div>
                                    </div>
                                </div>
                                <p class="card-text">Ante turpis leo dictum adipiscing nisl magnis elementum eu. Integer
                                    consequat sed ipsum massa egestas integer proin id.</p>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/27.jpg" width="60"
                                         alt="Brooklyn Simmons">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Brooklyn Simmons</div>
                                        <div class="fs-sm text-body-secondary">Marketing Coordinator</div>
                                    </div>
                                </div>
                                <p class="card-text">In quisque dolor, aliquam faucibus. Gravida diam ornare egestas
                                    proin quis odio suspendisse pellentesque. Condimentum risus, rutrum curabitur
                                    faucibus mi a turpis morbi. Nulla euismod dolor quis amet sed.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/28.jpg" width="60"
                                         alt="Fannie Summers">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Fannie Summers</div>
                                        <div class="fs-sm text-body-secondary">VP of Sales</div>
                                    </div>
                                </div>
                                <p class="card-text">In et dui amet amet elementum urna, dictum. Eget leo ornare
                                    bibendum a fermentum. Rutrum pellentesque ipsum cras purus ac a ullamcorper. Elit ac
                                    amet quam tellus euismod ac aliquam pharetra lectus.</p>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="rounded-circle" src="/img/avatar/29.jpg" width="60"
                                         alt="Robert Fox">
                                    <div class="ps-3">
                                        <div class="h6 mb-1">Robert Fox</div>
                                        <div class="fs-sm text-body-secondary">Marketing Coordinator</div>
                                    </div>
                                </div>
                                <p class="card-text">At felis non consequat neque in ultrices tortor purus dui. At sed
                                    fermentum, egestas amet et donec euismod risus. Nulla mauris.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 mt-2 mt-md-3 mt-lg-4 pt-4"></div>
            </div>
        </section>


        <!-- Case studies -->
        <section class="container pt-2 pt-sm-4 pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
            <h2 class="h1 text-center pb-3 pb-lg-4">Recent case studies</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">

                <!-- Item -->
                <div class="col">
                    <div class="card bg-primary border-0 h-100 overflow-hidden pt-3 pt-xl-4 px-lg-3 px-xl-4">
                        <div class="card-body position-relative z-2 pb-0">
                            <h3 class="h4 card-title text-light">Robotics &amp; artificial intelligence</h3>
                            <p class="card-text text-light opacity-80 pb-sm3 pb-md-4 mb-2">Cursus volutpat pharetra vel
                                in. Felis ut nulla dui nec, vulputate viverra sit eget vel. Convallis diam nunc, vitae,
                                orci, nibh quam tristique pulvinar. In semper etiam aliquam molestie arcu. Nullam id sed
                                tempor, volutpat blandit urna sagittis, commodo vestibulum. Adipiscing dictumst nunc
                                enim massa.</p>
                            <a class="btn btn-lg btn-link text-light px-0" href="#">
                                Read case study
                                <i class="ai-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="d-flex justify-content-end mt-sm-n5 me-n4">
                            <img src="/img/landing/business-consulting/case-studies/01.png" width="347"
                                 alt="Image">
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div
                        class="card bg-primary bg-opacity-10 border-0 h-100 overflow-hidden pt-3 pt-xl-4 px-lg-3 px-xl-4">
                        <div class="card-body position-relative z-2 pb-0">
                            <h3 class="h4 card-title text-primary">Toothbrush from natural eco materials</h3>
                            <p class="card-text text-primary pb-sm3 pb-md-4 mb-2">Cursus volutpat pharetra vel in. Felis
                                ut nulla dui nec, vulputate viverra sit eget vel. Convallis diam nunc, vitae, orci, nibh
                                quam tristique pulvinar. In semper etiam aliquam molestie arcu. Nullam id sed tempor,
                                volutpat blandit urna sagittis, commodo vestibulum. Adipiscing dictumst nunc enim
                                massa.</p>
                            <a class="btn btn-lg btn-link px-0" href="#">
                                Read case study
                                <i class="ai-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="d-flex justify-content-end mt-n4 mt-sm-n5 me-n4">
                            <img src="/img/landing/business-consulting/case-studies/02.png" width="291"
                                 alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- More button -->
            <div class="text-center my-2 mt-sm-3 mt-lg-0 pt-4 pb-1 pb-sm-3 pb-md-4 pt-lg-5">
                <a class="btn btn-outline-primary" href="#">Read all case studies</a>
            </div>
        </section>


        <!-- CTA -->
        <section class="bg-primary py-5" data-bs-theme="dark">
            <div class="container pt-lg-2 pt-xl-4 pt-xxl-5 pb-1 pb-sm-3">
                <div class="row pt-sm-3 pt-md-4">
                    <div class="col-md-6 col-xl-5 offset-xl-1">
                        <h2 class="display-3">Ready to take your business to the next level?</h2>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                        <p class="text-body fs-xl pb-4 mb-2 mb-lg-3">Massa velitienes semper faucibus tristique id nibh
                            elementum, id eu aliquamd diam mi tempus at laciniarty scelerisques augue at morbi. Arcu sit
                            orcirs, risus mattissit laoreet.</p>
                        <div class="input-group">
                <span class="input-group-text text-body-secondary">
                  <i class="ai-mail"></i>
                </span>
                            <input class="form-control" type="email" placeholder="Enter your email">
                            <button class="btn btn-warning" type="button">Book a call</button>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block text-center mt-n5">
                    <svg class="text-warning ms-lg-5" width="171" height="97" viewBox="0 0 171 97" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M169.319 54.333C162.404 55.9509 155.712 58.0764 149.09 60.6764L149.07 60.6761C148.967 60.7158 148.863 60.7554 148.76 60.7951C147.3 61.3811 148.325 63.4238 149.672 63.2067C154.548 62.4134 159.994 59.8725 164.87 59.0792C148.278 73.1339 129.684 89.2549 107.779 92.6402C85.6981 96.0539 65.5665 86.7839 56.8768 66.9865C70.9662 55.0671 79.2106 35.6614 79.0299 17.6457C78.9484 10.3157 76.1485 -3.36373 65.7068 1.21851C55.8557 5.53146 52.0466 22.5213 50.5736 31.7739C48.7364 43.2858 49.7593 55.5291 53.8643 66.2014C52.787 67.0812 51.6907 67.8989 50.5755 68.6546C40.6328 75.3851 27.1039 78.8929 16.4487 72.0362C2.91045 63.3259 1.93984 44.9485 1.56902 30.4091C1.54778 29.6265 0.359869 29.6092 0.360624 30.3915C0.322634 44.0809 0.835929 59.065 10.5664 69.6857C18.5722 78.4182 30.4315 79.7753 41.3346 75.9924C46.2437 74.2834 50.7739 71.7557 54.8581 68.6348C59.9738 80.2586 68.9965 89.6956 82.2735 93.7393C113.474 103.223 141.744 83.0494 164.903 63.697L161.901 71.0334C161.267 72.5887 163.76 73.2736 164.393 71.7389C165.986 67.8713 167.569 63.9933 169.152 60.1359C169.288 60.0247 169.695 58.6127 169.821 58.491C170.122 57.1161 169.152 60.1359 169.851 58.4169C170.189 57.6087 170.517 56.79 170.855 55.9818C171.248 54.9994 170.185 54.1192 169.319 54.333ZM54.3624 59.8578C51.4872 49.1623 51.6051 37.5841 54.2025 26.8039C55.5185 21.3369 57.4405 15.8066 60.1572 10.8541C61.2311 8.89354 62.5139 6.77134 64.2307 5.31421C69.4231 0.902277 74.3649 4.80357 75.8002 10.4446C80.5272 28.9489 70.1806 51.6898 55.8431 64.5114C55.2971 63.0109 54.793 61.4698 54.3624 59.8578Z"></path>
                    </svg>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer pt-lg-5 pt-4 pb-5">
        <div class="container pt-3 mt-md-2 mt-lg-3">
            <div class="row gy-md-5 gy-4 mb-md-5 mb-4 pb-lg-2">
                <div class="col-lg-3">
                    <a class="navbar-brand d-inline-flex align-items-center mb-lg-4 mb-3" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                        <span class="text-nav">Around</span>
                    </a>
                    <p class="mb-4 pb-lg-1 fs-xs text-body-secondary" style="max-width: 306px;">The agency with
                        extensive experience that creates marketing strategies for B2B and B2C companies.</p>
                    <div class="d-flex mt-n3 ms-n3">
                        <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#"
                           aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3 ms-3" href="#"
                           aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-secondary btn-icon btn-sm btn-linkedin rounded-circle mt-3 ms-3" href="#"
                           aria-label="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-1 col-lg-9">
                    <div class="row row-cols-sm-4 row-cols-1">
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Services</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Industries</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Clients</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Reviews</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Case studies</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Contacts</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Help center</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">About</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Careers</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">News &amp; insights</a></li>
                                <li class="nav-item mb-2"><a class="nav-link p-0" href="#">Industry forecasts</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="mailto:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link p-0" href="mailto:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0000</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="text-primary fw-semibold p-0" href="#">example@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav fs-sm text-body-secondary">&copy; All rights reserved. Made by <a
                    class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a></div>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
