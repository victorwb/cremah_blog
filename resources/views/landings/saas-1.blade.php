@extends('layouts.base', ['title' => 'Around | SaaS v.1'])

@section('html_attributes')
    data-bs-theme="dark"
@endsection

@section('content')
    <!-- Page wrapper -->
    <main class="page-wrapper">

        @include('layouts.partials/navbar',['navClass' => 'bg-light'])

        <!-- Hero -->
        <section class="position-relative pt-5">
            <div class="position-absolute top-0 start-0 w-100" style="height: 79%;">
                <div class="bg-primary position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="position-absolute start-0 bottom-0 w-100 overflow-hidden mb-n1"
                     style="padding-bottom: 6.2%; color: var(--ar-body-bg);">
                    <svg class="position-absolute start-0 bottom-0 w-100 h-100" viewBox="0 0 3000 185.4"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                              d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
                    </svg>
                </div>
            </div>
            <svg class="position-absolute end-0 z-2 mt-4 mt-sm-5" width="836" height="755" fill="none" stroke="white"
                 stroke-miterlimit="10" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.253 754.495c-18.309-66.796-31.642-139.581-6.067-203.929 33.531-84.307 126.54-131.543 216.622-142.348 90.082-10.831 180.803 7.052 271.284 13.945s187.376.931 261.969-50.776C868.476 299.694 902.433 159.981 995.762 75.54 1073.58 5.151 1191.04-18.081 1289.8 17.446M89.774 754.494c-17.324-63.177-29.938-132.049-5.748-192.911 31.722-79.756 119.701-124.438 204.913-134.657 85.239-10.246 171.036 6.68 256.621 13.2s177.263.878 247.812-48.035c97.852-67.835 129.947-199.99 218.248-279.853 73.61-66.584 184.74-88.565 278.15-54.954M158.305 754.496c-16.313-59.585-28.235-124.492-5.402-181.894 29.912-75.206 112.862-117.333 193.231-126.966 80.368-9.661 161.269 6.307 241.983 12.427 80.715 6.148 167.151.825 233.655-45.293 92.264-63.949 122.522-188.574 205.768-263.886 69.4-62.805 174.17-83.509 262.26-51.814M226.834 754.495c-15.328-55.965-26.532-116.96-5.083-170.876 28.103-70.655 106.023-110.228 181.521-119.276 75.499-9.074 151.503 5.908 227.321 11.683s157.011.772 219.497-42.553c86.675-60.09 115.097-177.157 193.31-247.891 65.2-59 163.64-78.453 246.37-48.674M295.359 754.495c-14.344-52.372-24.802-109.429-4.763-159.859 26.266-66.104 99.183-103.122 169.812-111.584 70.628-8.489 141.736 5.535 212.657 10.937s146.899.719 205.366-39.811c81.087-56.205 107.699-165.741 180.859-231.925 60.99-55.193 153.1-73.396 230.48-45.533"
                    stroke-opacity=".12"></path>
            </svg>
            <div class="container position-relative z-5 pt-5 mt-4 mt-lg-5" data-bs-theme="dark">
                <div class="row justify-content-center text-center pt-md-2 pt-lg-0 pt-xl-2 pb-5 mb-md-2">
                    <div class="col-lg-10 col-xl-9 col-xxl-8"><span
                            class="badge bg-light bg-opacity-10 fs-sm text-white px-3 mb-4">Take your data to the next level</span>
                        <h1 class="display-3 mb-sm-4">One dashboard to manage all your businesses</h1>
                        <p class="text-body pb-3 mb-3 mb-lg-4">Using basic data skills you can improve your business
                            stuff with Around</p>
                        <a class="btn btn-lg btn-warning" href="#">Start free 14-day trial</a>
                    </div>
                </div>
                <div class="bg-black rounded-4 p-2 mx-auto" style="max-width: 1160px;">
                    <div class="overflow-hidden" style="border-radius: calc(var(--ar-border-radius) * 1.25);">
                        <img-comparison-slider class="m-n1">
                            <figure slot="first"><img src="/img/landing/saas-1/hero/dashboard-dark.jpg"
                                                      alt="Dashboard Dark Mode"></figure>
                            <figure slot="second"><img src="/img/landing/saas-1/hero/dashboard-light.jpg"
                                                       alt="Dashboard Light Mode"></figure>
                            <div slot="handle" style="width: 42px;">
                                <svg class="text-primary rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                                    </g>
                                    <path fill="white"
                                          d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z"></path>
                                </svg>
                            </div>
                        </img-comparison-slider>
                    </div>
                </div>
            </div>
        </section>


        <!-- Reviews (Carousel on screen < 992px) -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pb-sm-2 pb-lg-3 mt-lg-2 mx-auto" style="max-width: 740px;">
                Customers have consistently rated Around 4.7/5 stars</h2>
            <div class="swiper" data-swiper-options='
          {
            "spaceBetween": 24,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": { "slidesPerView": 2 },
              "992": { "slidesPerView": 3 }
            }
          }
        '>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="text-center p-3 p-sm-4 m-lg-2">
                            <div class="d-flex justify-content-center fs-lg mb-4">
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                            </div>
                            <p class="mb-3">“Around provides us with the detailed and accurate data we need.”</p>
                            <img class="d-inline-block d-dark-mode-none"
                                 src="/img/landing/saas-1/brands/clutch-dark.svg" width="196" alt="Clutch">
                            <img class="d-none d-dark-mode-inline-block"
                                 src="/img/landing/saas-1/brands/clutch-light.svg" width="196" alt="Clutch">
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="text-center p-3 p-sm-4 m-lg-2">
                            <div class="d-flex justify-content-center fs-lg mb-4">
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                            </div>
                            <p class="mb-3">“Tools are constantly improved and contain a lot of useful information.”</p>
                            <img class="d-inline-block" src="/img/landing/saas-1/brands/product-hunt.svg"
                                 width="196" alt="Product Hunt">
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                        <div class="text-center p-3 p-sm-4 m-lg-2">
                            <div class="d-flex justify-content-center fs-lg mb-4">
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-warning mx-2"></i>
                                <i class="ai-star-filled text-body-secondary opacity-40 mx-2"></i>
                            </div>
                            <p class="mb-3">"We can easily analyze our big data quickly and efficiently all the
                                time."</p><img class="d-inline-block"
                                               src="/img/landing/saas-1/brands/capterra.svg" width="196"
                                               alt="Capterra">
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative bottom-0 d-lg-none"></div>
            </div>
        </section>


        <!-- Features grid -->
        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="row pt-2 pt-md-4 pt-lg-3 pt-xl-4 g-4 g-sm-3 g-md-4">
                <div class="col-lg-8 order-lg-2">
                    <div class="d-md-flex h-100 bg-primary rounded-5 overflow-hidden px-4 px-sm-5 pt-5">
                        <div class="d-md-flex px-2 px-sm-0 px-xl-2 px-xxl-4 pt-xl-3">
                            <div class="text-center text-md-start pe-md-5 pb-3 pb-md-0 me-xxl-3 mb-4 md-0">
                                <h2 class="h1 text-white pb-2 pb-md-3 mb-lg-4">How Does It Work?</h2>
                                <a class="btn btn-icon btn-xl btn-warning rounded-circle"
                                   href="https://www.youtube.com/watch?v=j5Rb-OkP-Go" data-bs-toggle="video"
                                   aria-label="Play video">
                                    <i class="ai-play-filled"></i>
                                </a>
                            </div>
                            <div class="w-100 flex-md-shrink-0 mx-auto" style="max-width: 472px;">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/features/01-light.png"
                                     alt="Image">
                                <img class="d-none d-dark-mode-block"
                                     src="/img/landing/saas-1/features/01-dark.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-lg-1">
                    <div class="card border-0 bg-secondary h-100 py-lg-2 py-xl-4">
                        <div class="card-body">
                            <h3>Target your audience effectively</h3>
                            <p class="mb-0">Nisl in enim, gravida risus enim risus non et in iaculis non facilisis eget
                                blandit id vulputate morbi proin vitae tincidunt vestibulum viverra. Quis odio mauris
                                velit egestas risus vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-lg-3">
                    <div class="card border-0 bg-secondary h-100 py-lg-2 py-xl-4">
                        <div class="card-body">
                            <h3>Build dashboard in minutes</h3>
                            <p class="mb-0">Facilisi eu neque amet, orci tellus nibh amet tincidunt nunc, feugiat arcu
                                vulputate duis. Quis odio mauris, in sed pharetra velit egestas risus purus
                                tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-lg-4">
                    <div class="card border-0 bg-secondary h-100 py-lg-2 py-xl-4">
                        <div class="card-body">
                            <h3>Easily download your tables and data</h3>
                            <p class="mb-0">Cursus dolor sagittis, nisi sit pharetra pharetra ornare nec diam id in in
                                commodo mattis at retium at id nisi ullamcorper tortor augue parturient at tellus lorem
                                enim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-lg-5">
                    <div class="card border-0 bg-secondary h-100 py-lg-2 py-xl-4">
                        <div class="card-body">
                            <h3>Access to dashboard from all devices</h3>
                            <p class="mb-0">Ac pharetra pharetra morbi turpis auctor vel eget amet nulla diam facilisis
                                sit morbi sit aliquam in amet ultrices aliquet leo facilisis lorem proin pharetra
                                ornare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features list -->
        <section class="container pt-5 pb-4 mb-2 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row justify-content-center pt-2 pt-sm-3 pt-md-4 mt-lg-2 pb-lg-2 pb-xl-0">
                <div class="col-sm-11 col-md-9 col-lg-8 col-xl-7 col-xxl-6 text-center">
                    <h2 class="h1 mb-0">Powerful and highly customizable data analysis tool</h2>
                </div>
            </div>

            <!-- Item -->
            <div class="row align-items-center py-4 py-lg-5 my-sm-2 my-md-4 my-lg-0 my-xl-2 my-xxl-4" data-aos="fade-up"
                 data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 pt-xl-2 offset-xl-1 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
                    <img class="d-dark-mode-none" src="/img/landing/saas-1/features/02-light.png" width="636"
                         alt="Image">
                    <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/features/02-dark.png"
                         width="636" alt="Image">
                </div>
                <div class="col-md-6 col-xl-5 order-md-1 pt-xl-2" data-aos="fade-up" data-aos-duration="850"
                     data-aos-offset="200" data-disable-parallax-down="md">
                    <div class="pe-md-3 pe-xl-0">
                        <span
                            class="badge bg-primary bg-opacity-10 text-primary fs-sm mb-3 mb-lg-4">Team activities</span>
                        <h3 class="h2 mb-lg-4">Key performance indicators of marketing activities</h3>
                        <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque
                            proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean
                            phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus
                            et.</p>
                    </div>
                </div>
            </div>


            <!-- Item -->
            <div class="row align-items-center py-4 py-lg-5 my-sm-2 my-md-4 my-lg-0 my-xl-2 my-xxl-4" data-aos="fade-up"
                 data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 pt-xl-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
                    <img class="d-dark-mode-none" src="/img/landing/saas-1/features/03-light.png" width="636"
                         alt="Image">
                    <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/features/03-dark.png"
                         width="636" alt="Image">
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1 pt-xl-2" data-aos="fade-up" data-aos-duration="850"
                     data-aos-offset="200" data-disable-parallax-down="md">
                    <div class="ps-md-3 ps-xl-0">
                        <span
                            class="badge bg-primary bg-opacity-10 text-primary fs-sm mb-3 mb-lg-4">Team activities</span>
                        <h3 class="h2 mb-lg-4">Key performance indicators of marketing activities</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Segmenting the audience is easy and simple
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Functional dashboard for managing your data
                            </li>
                            <li class="d-flex pt-1 mt-2">
                                <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                                Key performance indicators of team interaction
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="row align-items-center py-4 py-lg-5 my-sm-2 my-md-4 my-lg-0 my-xl-2 my-xxl-4" data-aos="fade-up"
                 data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-md-6 offset-xl-1 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
                    <img class="d-dark-mode-none" src="/img/landing/saas-1/features/04-light.png" width="636"
                         alt="Image">
                    <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/features/04-dark.png"
                         width="636" alt="Image">
                </div>
                <div class="col-md-6 col-xl-5 order-md-1" data-aos="fade-up" data-aos-duration="850"
                     data-aos-offset="200" data-disable-parallax-down="md">
                    <div class="pe-md-3 pe-xl-0">
                        <span class="badge bg-primary bg-opacity-10 text-primary fs-sm mb-3 mb-lg-4">Segmentation</span>
                        <h3 class="h2 mb-lg-4">Segmentation of the audience using different methods</h3>
                        <p class="mb-0">Facilisi eu neque amet, orci tellus nibh amet tincidunt nunc, feugiat arcu
                            vulputate duis. Quis odio mauris, in sed pharetra velit egestas risus purus tincidunt. Nisl
                            in enim, gravida risus enim risus non et in iaculis non facilisis eget blandit id
                            vulputate.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Industries -->
        <section class="bg-dark border-top border-light py-2 py-sm-3 py-md-4 py-lg-5" data-bs-theme="dark">
            <div class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
                <h2 class="h1 text-center text-md-start mt-lg-n3 pb-4 pb-md-5" style="max-width: 660px;">Around suitable
                    for any business, from stores to agencies</h2>
                <div class="row pt-sm-2 pt-md-0 pt-xl-1 pt-xxl-3">
                    <div class="col-md-6 col-xl-5 offset-xl-1 order-md-2 pb-4 pb-md-0 mb-2 mb-md-0">

                        <!-- Images (binded content) -->
                        <div class="binded-content" style="max-width: 526px;">
                            <div class="binded-item active" id="marketers-image">
                                <div class="from-bottom">
                                    <div
                                        class="d-flex justify-content-center position-absolute top-0 start-0 w-100 h-100">
                                        <div class="bg-primary rounded-5 h-100" style="width: 88.2%;"></div>
                                    </div>
                                    <img class="d-block position-relative z-2"
                                         src="/img/landing/saas-1/industries/01.png" alt="Image">
                                </div>
                            </div>
                            <div class="binded-item" id="agencies-image">
                                <div class="from-bottom">
                                    <div
                                        class="d-flex justify-content-center position-absolute top-0 start-0 w-100 h-100">
                                        <div class="bg-info rounded-5 h-100" style="width: 88.2%;"></div>
                                    </div>
                                    <img class="d-block position-relative z-2"
                                         src="/img/landing/saas-1/industries/02.png" alt="Image">
                                </div>
                            </div>
                            <div class="binded-item" id="ecommerce-image">
                                <div class="from-bottom">
                                    <div
                                        class="d-flex justify-content-center position-absolute top-0 start-0 w-100 h-100">
                                        <div class="bg-warning rounded-5 h-100" style="width: 88.2%;"></div>
                                    </div>
                                    <img class="d-block position-relative z-2"
                                         src="/img/landing/saas-1/industries/03.png" alt="Image">
                                </div>
                            </div>
                            <div class="binded-item" id="startups-image">
                                <div class="from-bottom">
                                    <div
                                        class="d-flex justify-content-center position-absolute top-0 start-0 w-100 h-100">
                                        <div class="bg-danger rounded-5 h-100" style="width: 88.2%;"></div>
                                    </div>
                                    <img class="d-block position-relative z-2"
                                         src="/img/landing/saas-1/industries/04.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs flex-nowrap overflow-auto text-nowrap pb-3 mb-3 mb-xl-4" role="tablist">
                            <li class="nav-item mb-0">
                                <a class="nav-link active" href="#marketers-text" data-bs-toggle="tab"
                                   data-binded-content="#marketers-image" role="tab">Marketers</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" href="#agencies-text" data-bs-toggle="tab"
                                   data-binded-content="#agencies-image" role="tab">Agencies</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" href="#ecommerce-text" data-bs-toggle="tab"
                                   data-binded-content="#ecommerce-image" role="tab">E-Commerce</a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" href="#startups-text" data-bs-toggle="tab"
                                   data-binded-content="#startups-image" role="tab">Startups</a>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content pt-lg-2 pt-xl-3">
                            <div class="tab-pane fade show active" id="marketers-text" role="tabpanel">
                                <h3 class="mb-lg-4">Track user journey from first interaction to conversion</h3>
                                <p class="text-body">Porttitor in mauris tellus ipsum commodo praesent nunc vel integer
                                    mi at tristique id faucibus pretium vestibulum massa nisl at massa sagittis congue
                                    ac uismod tortor dictum enim tincidunt gravida odio. Auctor arcu ante malesuada
                                    pharetra gravida nunc euismod egestas quam dolor ut vel venenatis quis egestas
                                    orci.</p>
                                <a class="btn btn-lg btn-link px-0 mt-n2 mt-lg-0" href="#">
                                    Learn more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="agencies-text" role="tabpanel">
                                <h3 class="mb-lg-4">Analyze your marketing activities quickly and efficiently</h3>
                                <p class="text-body">Phasellus sed orci, praesent sed integer egestas imperdiet morbi
                                    vitae vel diam risus in sed elit semper est malesuada venenatis egestas diam
                                    consequat sit scelerisque integer sit nisl nunc.</p>
                                <a class="btn btn-lg btn-link px-0 mt-n2 mt-lg-0" href="#">
                                    Learn more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="ecommerce-text" role="tabpanel">
                                <h3 class="mb-lg-4">Track the user's path to the order on all product interaction
                                    paths</h3>
                                <p class="text-body">Sollicitudin et donec tincidunt arcu cras felis ipsum dolor
                                    sollicitudin. Nec purus, lobortis tristique pellentesque venenatis. Varius nulla
                                    quis morbi lectus sit dui viverra mi. Amet in diam vitae non at euismod massa orci
                                    at dis libero facilisi lacus morbi. Magna vitae ac condimentum enim vitae cras
                                    egestas elementum.</p>
                                <a class="btn btn-lg btn-link px-0 mt-n2 mt-lg-0" href="#">
                                    Learn more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="startups-text" role="tabpanel">
                                <h3 class="mb-lg-4">Track fast growth with important data</h3>
                                <p class="text-body">Porttitor in mauris tellus ipsum commodo praesent nunc vel integer
                                    mi at tristique id faucibus pretium vestibulum massa nisl at massa sagittis congue
                                    ac uismod tortor dictum enim tincidunt gravida odio. Auctor arcu ante malesuada
                                    pharetra gravida nunc euismod egestas quam dolor ut vel venenatis quis egestas
                                    orci.</p>
                                <a class="btn btn-lg btn-link px-0 mt-n2 mt-lg-0" href="#">
                                    Learn more
                                    <i class="ai-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Pricing -->
        <section class="bg-secondary pt-2 py-sm-3 py-md-4 py-lg-5">
            <div class="container py-5 mt-lg-3 mt-xl-4 mt-xxl-5 mb-lg-2 mb-xl-4">
                <h2 class="h1 text-center mt-lg-n3 mb-2 mb-sm-0">Pricing</h2>
                <div class="price-switch-wrapper mt-sm-n4">
                    <div class="text-center py-3 mb-3" data-bs-toggle="price">
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" id="monthly" name="price" data-monthly-switch
                                   checked>
                            <label class="form-check-label text-dark fs-base fw-medium" for="monthly">Monthly
                                payment</label>
                        </div>
                        <div class="form-check d-inline-flex align-items-end me-sm-n5">
                            <div class="d-inline-flex">
                                <input class="form-check-input me-2" type="radio" id="annual" name="price"
                                       data-annual-switch>
                                <label class="form-check-label text-dark fs-base fw-medium" for="annual">Annual
                                    payment</label>
                            </div>
                            <div class="d-inline-block text-center ps-3 ms-sm-4">
                                <div class="text-danger fs-sm fw-bold mb-sm-1">Save 20%</div>
                                <svg class="text-danger ms-n4 d-none d-sm-block" width="52" height="38"
                                     viewBox="0 0 52 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M50.5002 1C50.3336 5.33333 48.5 13 44.0002 20.5C39.5005 28 29.0002 32.5 28.5002 23C28.0002 13.5 39.5002 7 36.5002 14.5C33.5002 22 18.5 35.5 4 30"
                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"></path>
                                    <path
                                        d="M3.83039 29.8565C6.35946 29.7566 8.93618 29.122 11.2178 28.1747L11.2178 28.1748L11.2196 28.1739C11.5476 28.0299 11.7182 27.6503 11.5867 27.3359C11.448 26.9871 11.0624 26.8028 10.7213 26.9517C7.91141 28.0931 4.64686 28.7829 1.62704 28.4553L1.62706 28.4551L1.62094 28.4549C1.27015 28.4384 0.944127 28.6914 0.902297 29.0451L0.902167 29.045L0.901827 29.0501C0.896722 29.1266 0.902407 29.2007 0.917743 29.2707C0.94057 29.4967 1.07932 29.7124 1.30195 29.8067C4.07984 31.0931 5.87728 34.0754 7.0096 36.882L7.00959 36.882L7.01015 36.8833C7.13957 37.1912 7.5283 37.3687 7.86577 37.2206L7.86579 37.2205C8.19919 37.0741 8.36065 36.6916 8.22031 36.3385L8.22006 36.3379C7.2736 34.0027 5.84935 31.53 3.83039 29.8565Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-3 flex-nowrap overflow-auto pb-4">

                        <!-- Plan -->
                        <div class="col" style="min-width: 19rem;">
                            <div class="card border-0 h-100 py-lg-3">
                                <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                                    <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                                        <div class="bg-info rounded flex-shrink-0 p-2">
                                            <img class="d-block m-1" src="/img/landing/saas-1/pricing/starter.svg"
                                                 width="44" alt="Icon">
                                        </div>
                                        <div class="ps-3">
                                            <h3 class="h4 text-info mb-0">Starter</h3>
                                            <div class="d-flex align-items-end">
                                                <span class="h5 mb-1 me-1">$</span>
                                                <span class="h2 mb-0" data-monthly-price>15.00</span>
                                                <span class="h2 mb-0 d-none" data-annual-price>12.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-1 pb-4">
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            In lorem eget amet sit
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Sodales sit velit ornare
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Tristique suspendisse proin
                                        </li>
                                        <li class="d-flex text-body-secondary pb-1 mb-2">
                                            <i class="ai-cross lead opacity-80 me-2"></i>
                                            Nunc nullam in dignissim
                                        </li>
                                        <li class="d-flex text-body-secondary pb-1 mb-2">
                                            <i class="ai-cross lead opacity-80 me-2"></i>
                                            Imperdiet amet suspendisse
                                        </li>
                                        <li class="d-flex text-body-secondary pb-1 mb-2">
                                            <i class="ai-cross lead opacity-80 me-2"></i>
                                            Tristique nibh erat et quis
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline-primary w-100" type="button">Get this plan now
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Plan -->
                        <div class="col" style="min-width: 19rem;">
                            <div class="card border-primary h-100 py-lg-3">
                                <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                                    <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                                        <div class="bg-primary rounded flex-shrink-0 p-2">
                                            <img class="d-block m-1"
                                                 src="/img/landing/saas-1/pricing/business.svg" width="44"
                                                 alt="Icon">
                                        </div>
                                        <div class="ps-3">
                                            <h3 class="h4 text-primary mb-0">Business</h3>
                                            <div class="d-flex align-items-end">
                                                <span class="h5 mb-1 me-1">$</span>
                                                <span class="h2 mb-0" data-monthly-price>35.00</span>
                                                <span class="h2 mb-0 d-none" data-annual-price>28.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-1 pb-4">
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            In lorem eget amet sit
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Sodales sit velit ornare
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Tristique suspendisse proin
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Nunc nullam in dignissim
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Imperdiet amet suspendisse
                                        </li>
                                        <li class="d-flex text-body-secondary pb-1 mb-2">
                                            <i class="ai-cross lead opacity-80 me-2"></i>
                                            Tristique nibh erat et quis
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                                </div>
                            </div>
                        </div>

                        <!-- Plan -->
                        <div class="col" style="min-width: 19rem;">
                            <div class="card border-0 h-100 py-lg-3">
                                <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                                    <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                                        <div class="bg-warning rounded flex-shrink-0 p-2">
                                            <img class="d-block m-1" src="/img/landing/saas-1/pricing/premium.svg"
                                                 width="44" alt="Icon">
                                        </div>
                                        <div class="ps-3">
                                            <h3 class="h4 text-warning mb-0">Premium</h3>
                                            <div class="d-flex align-items-end">
                                                <span class="h5 mb-1 me-1">$</span>
                                                <span class="h2 mb-0" data-monthly-price>50.00</span>
                                                <span class="h2 mb-0 d-none" data-annual-price>40.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-1 pb-4">
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            In lorem eget amet sit
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Sodales sit velit ornare
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Tristique suspendisse proin
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Nunc nullam in dignissim
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Imperdiet amet suspendisse
                                        </li>
                                        <li class="d-flex pb-1 mb-2">
                                            <i class="ai-check fs-xl mt-1 me-2"></i>
                                            Tristique nibh erat et quis
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline-primary w-100" type="button">Get this plan now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5">
            <h2 class="text-center pt-5 pb-3 mb-lg-4 mt-lg-3 mt-xl-4 mt-xxl-5">More than 2,000 clients using Around to
                analyze data</h2>

            <!-- Nav tabs -->
            <div class="overflow-auto pb-3 pb-xl-4 mb-3 mb-lg-4">
                <ul class="nav nav-tabs justify-content-between flex-nowrap text-nowrap p-0 m-0" role="tablist"
                    style="min-width: 1000px;">
                    <li class="nav-item mb-0">
                        <a class="nav-link active" href="#foster" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/foster-color.svg" width="140"
                                     alt="Foster">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/foster-gray.svg"
                                         width="140" alt="Foster">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/foster-light.svg" width="140"
                                         alt="Foster">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#klinos" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/klinos-color.svg" width="131"
                                     alt="Klinos">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/klinos-gray.svg"
                                         width="131" alt="Klinos">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/klinos-light.svg" width="131"
                                         alt="Klinos">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#champion" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/champion-color.svg"
                                     width="162" alt="Champion">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none"
                                         src="/img/landing/saas-1/brands/champion-gray.svg" width="162"
                                         alt="Champion">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/champion-light.svg" width="162"
                                         alt="Champion">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#airbnb" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/airbnb-color.svg" width="132"
                                     alt="Airbnb">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/airbnb-gray.svg"
                                         width="132" alt="Airbnb">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/airbnb-light.svg" width="132"
                                         alt="Airbnb">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#starcraft" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/starcraft-color.svg"
                                     width="158" alt="StarCraft">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none"
                                         src="/img/landing/saas-1/brands/starcraft-gray.svg" width="158"
                                         alt="StarCraft">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/starcraft-light.svg" width="158"
                                         alt="StarCraft">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mb-0">
                        <a class="nav-link" href="#alpine" data-bs-toggle="tab" role="tab">
                            <div class="swap-image">
                                <img class="swap-to" src="/img/landing/saas-1/brands/alpine-color.svg" width="146"
                                     alt="Alpine">
                                <div class="swap-from">
                                    <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/alpine-gray.svg"
                                         width="146" alt="Alpine">
                                    <img class="d-none d-dark-mode-block"
                                         src="/img/landing/saas-1/brands/alpine-light.svg" width="146"
                                         alt="Alpine">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tabs content -->
            <div class="card border-0 bg-secondary">
                <div class="tab-content card-body px-lg-0 py-lg-5">

                    <!-- Testimonial (active tab) -->
                    <div class="tab-pane fade show active" id="foster" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0"><img
                                    class="d-block rounded-circle mb-3" src="/img/avatar/13.jpg" width="86"
                                    alt="Lilianna Bocouse">
                                <h4 class="mb-0">Lilianna Bocouse</h4>
                                <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data
                                    we need to make strategic decisions. All tools are constantly being improved and
                                    contain a lot of useful and interesting information. Thanks to Around, we can
                                    constantly analyze our big data quickly and efficiently.”</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="klinos" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0"><img
                                    class="d-block rounded-circle mb-3" src="/img/avatar/14.jpg" width="86"
                                    alt="Darell Steward">
                                <h4 class="mb-0">Darell Steward</h4>
                                <p class="fs-lg text-body-secondary mb-0">Project Manager</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel.
                                    Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id
                                    eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut
                                    ante.”</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="champion" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                                <img class="d-block rounded-circle mb-3" src="/img/avatar/15.jpg" width="86"
                                     alt="Annette Black">
                                <h4 class="mb-0">Annette Black</h4>
                                <p class="fs-lg text-body-secondary mb-0">Lead Designer</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique.
                                    Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas,
                                    mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante.
                                    Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="airbnb" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                                <img class="d-block rounded-circle mb-3" src="/img/avatar/16.jpg" width="86"
                                     alt="Ralph Edwards">
                                <h4 class="mb-0">Ralph Edwards</h4>
                                <p class="fs-lg text-body-secondary mb-0">CEO, Co-Founder</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra, quis
                                    semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum
                                    turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci.
                                    Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus
                                    placerat fringilla.”</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="starcraft" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                                <img class="d-block rounded-circle mb-3" src="/img/avatar/17.jpg" width="86"
                                     alt="Jane Cooper">
                                <h4 class="mb-0">Jane Cooper</h4>
                                <p class="fs-lg text-body-secondary mb-0">Strategic Advisor</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Morbi at fermentum enim, pulvinar malesuada quam. Morbi
                                    sit amet tellus luctus, vulputate arcu nec, consectetur diam. Proin est lacus,
                                    interdum ac aliquam sit amet, aliquam eget leo. Donec condimentum erat quam,
                                    tincidunt tempus augue consectetur a. Donec quis purus dictum, iaculis mi
                                    fringilla.”</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial (tab) -->
                    <div class="tab-pane fade" id="alpine" role="tabpanel">
                        <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                            <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                                <img class="d-block rounded-circle mb-3" src="/img/avatar/18.jpg" width="86"
                                     alt="Albert Flores">
                                <h4 class="mb-0">Albert Flores</h4>
                                <p class="fs-lg text-body-secondary mb-0">Business Analyst</p>
                            </div>
                            <div class="col-md-8 col-lg-7">
                                <p class="text-dark lead mb-0">“Phasellus at varius arcu. Ut nec lobortis velit. Mauris
                                    vel risus quis lacus placerat fringilla. Aliquam congue risus tortor, sed posuere
                                    leo faucibus sed. Orci varius natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Ut dui ante, rutrum eget vehicula sed.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Mobile app CTA -->
        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row align-items-center justify-content-center py-2 py-sm-3 py-md-4 my-xl-2" data-aos="fade-up"
                 data-aos-duration="600" data-aos-offset="300" data-disable-parallax-down="md">
                <div class="col-6 col-sm-5 col-md-4 offset-md-1 order-sm-2 pb-4 pb-sm-0 mb-2 mb-sm-0">
                    <img class="d-dark-mode-none" src="/img/landing/saas-1/cta/device-light.png" width="414"
                         alt="Mobile screen">
                    <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/cta/device-dark.png"
                         width="414" alt="Mobile screen">
                </div>
                <div class="col-sm-7 col-md-6 col-xl-5 offset-xl-1 order-sm-1" data-aos="fade-up"
                     data-aos-duration="850" data-aos-offset="200" data-disable-parallax-down="md">
                    <div class="pe-sm-3 pe-md-0">
                        <h2 class="h1 pb-1 pb-sm-2 pb-lg-3">Download Around app for any devices</h2>
                        <p class="mb-0">Now there is a mobile application so that you can always quickly and
                            conveniently track your data morbi et massa fames ac scelerisque sit commodo dignissim.</p>
                        <div class="d-flex justify-content-between pt-4 pt-lg-5 mt-sm-2" style="max-width: 450px;">
                            <div class="pe-2">
                                <h3 class="h4 mb-2">Editor's choice</h3>
                                <p class="mb-sm-4">rating 4.7, 187K+ reviews</p>
                                <a class="btn btn-primary btn-lg px-3 py-2" href="#">
                                    <img class="mx-1" src="/img/market/appstore-light.svg" width="136"
                                         alt="App Store">
                                </a>
                            </div>
                            <div class="ps-2">
                                <h3 class="h4 mb-2">App of the day</h3>
                                <p class="mb-sm-4">rating 4.8, 30K+ reviews</p>
                                <a class="btn btn-primary btn-lg px-3 py-2" href="#">
                                    <img class="mx-1" src="/img/market/googleplay-light.svg" width="135"
                                         alt="Google Play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- CTA -->
        <section class="container">
            <div class="bg-dark rounded-5 position-relative overflow-hidden py-5 px-4 px-sm-5">
                <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
                     style="background-color: rgba(255,255,255, .02);"></div>
                <svg class="position-absolute start-0 bottom-0 z-2" width="713" height="410" viewBox="0 0 713 410"
                     fill="none" stroke="white" stroke-opacity="0.12" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M682.907 484.533C695.503 444.57 705.228 400.872 691.238 361.386C672.894 309.65 617.745 278.967 563.532 270.375C509.32 261.768 454.065 270.505 399.207 272.603C344.348 274.702 285.906 268.882 241.992 235.917C181.111 190.21 163.777 104.969 109.285 51.7863C63.8512 7.45308 -6.63234 -9.27787 -67.1491 9.9424"></path>
                    <path
                        d="M641.482 482.967C653.4 445.169 662.6 403.82 649.367 366.472C632.013 317.53 579.846 288.506 528.564 280.379C477.267 272.236 425.011 280.507 373.121 282.492C321.231 284.477 265.935 278.97 224.403 247.786C166.796 204.54 150.415 123.91 98.8593 73.6098C55.8807 31.6733 -10.8023 15.8433 -68.0415 34.0275"></path>
                    <path
                        d="M600.052 481.4C611.277 445.751 619.968 406.784 607.477 371.559C591.113 325.409 541.928 298.044 493.561 290.383C445.194 282.705 395.92 290.508 346.984 292.363C298.047 294.234 245.913 289.041 206.762 259.639C152.445 218.868 137.002 142.834 88.3989 95.4004C47.876 55.8447 -14.9912 40.9323 -68.9688 58.0798"></path>
                    <path
                        d="M558.622 479.833C569.168 446.349 577.336 409.73 565.601 376.644C550.227 333.287 504.025 307.582 458.589 300.385C413.153 293.173 366.862 300.493 320.893 302.251C274.925 304.009 225.953 299.128 189.168 271.507C138.142 233.198 123.636 161.774 77.9686 117.223C39.9006 80.0639 -19.166 66.0526 -69.8661 82.164"></path>
                    <path
                        d="M517.195 478.267C527.064 446.932 534.691 412.678 523.729 381.732C509.361 341.167 466.125 317.121 423.62 310.39C381.115 303.643 337.806 310.496 294.806 312.141C251.807 313.785 205.981 309.216 171.561 283.377C123.825 247.544 110.24 180.715 67.5263 139.03C31.9133 104.268 -23.3529 91.1578 -70.7753 106.233"></path>
                </svg>
                <svg class="position-absolute top-0 end-0 z-2" width="317" height="367" viewBox="0 0 317 367"
                     fill="none" stroke="white" stroke-opacity="0.12" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M766.907 366.533C779.503 326.57 789.228 282.872 775.238 243.386C756.894 191.65 701.745 160.967 647.532 152.375C593.32 143.768 538.065 152.505 483.207 154.603C428.348 156.702 369.906 150.882 325.992 117.917C265.111 72.2101 247.777 -13.031 193.285 -66.2137C147.851 -110.547 77.3677 -127.278 16.8509 -108.058"></path>
                    <path
                        d="M725.482 364.967C737.4 327.169 746.6 285.82 733.367 248.472C716.013 199.53 663.846 170.506 612.564 162.379C561.267 154.236 509.011 162.507 457.121 164.492C405.231 166.477 349.935 160.97 308.403 129.786C250.796 86.5396 234.415 5.91023 182.859 -44.3902C139.881 -86.3267 73.1977 -102.157 15.9585 -83.9725"></path>
                    <path
                        d="M684.052 363.4C695.277 327.751 703.968 288.784 691.477 253.559C675.113 207.409 625.928 180.044 577.561 172.383C529.194 164.705 479.92 172.508 430.984 174.363C382.047 176.234 329.913 171.041 290.762 141.639C236.445 100.868 221.002 24.8341 172.399 -22.5996C131.876 -62.1553 69.0088 -77.0677 15.0312 -59.9202"></path>
                    <path
                        d="M642.622 361.833C653.168 328.349 661.336 291.73 649.601 258.644C634.227 215.287 588.025 189.582 542.589 182.385C497.153 175.173 450.862 182.493 404.893 184.251C358.925 186.009 309.953 181.128 273.168 153.507C222.142 115.198 207.636 43.7743 161.969 -0.777178C123.901 -37.9361 64.834 -51.9474 14.1339 -35.836"></path>
                    <path
                        d="M601.195 360.267C611.064 328.932 618.691 294.678 607.729 263.732C593.361 223.167 550.125 199.121 507.62 192.39C465.115 185.643 421.806 192.496 378.806 194.141C335.807 195.785 289.981 191.216 255.561 165.377C207.825 129.544 194.24 62.7152 151.526 21.0304C115.913 -13.7317 60.6471 -26.8422 13.2247 -11.7668"></path>
                </svg>
                <div class="position-relative z-3 text-center px-3 px-sm-0 pb-2 py-sm-3 py-md-4 py-lg-5"
                     data-bs-theme="dark">
                    <h2 class="display-3 pt-xl-2">Get Started with Around</h2>
                    <p class="text-body fs-lg pb-4 pb-lg-5 mb-2 mb-sm-3 mb-lg-0 mb-xl-2">Using basic data skills you can
                        analysis and improve your business indicators.</p>
                    <a class="btn btn-lg btn-primary mb-lg-2 mb-xl-4" href="#">Start free 14-day trial</a>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-5 pt-sm-2 mb-lg-2">
                <div class="col-md-4 col-lg-3 pb-2 pb-md-0 mb-4 mb-md-0">
                    <a class="navbar-brand py-0 mb-3 mb-md-4" href="/">
              <span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor"
                        d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg>
              </span>
                        <span class="text-nav">Around</span>
                    </a>
                    <p class="fs-sm pb-2 pb-md-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed. Dolor
                        elementum nunc dictum interdum amet arcu aenean eu integer</p>
                    <div class="d-flex gap-3">
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#"
                           aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#"
                           aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#"
                           aria-label="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 col-xl-6 offset-lg-2 offset-xl-3">
                    <div class="row row-cols-1 row-cols-sm-3">
                        <div class="col mb-4 mb-md-0">
                            <h4 class="h6 fw-bold pb-lg-1">Company</h4>
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Features</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Reviews</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">How it works</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <h4 class="h6 fw-bold pb-lg-1">Support</h4>
                            <ul class="nav flex-column">
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Help center</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Terms of service</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Legal</a></li>
                                <li><a class="nav-link fw-normal py-1 px-0" href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4 class="h6 fw-bold pb-2 mb-0 mb-lg-1">Install App</h4>
                            <a class="btn btn-secondary px-3 py-2 mt-3 me-3 me-md-0" href="#">
                                <img class="mx-1 d-dark-mode-none" src="/img/market/appstore-dark.svg" width="120"
                                     alt="App Store">
                                <img class="mx-1 d-none d-dark-mode-block" src="/img/market/appstore-light.svg"
                                     width="120" alt="App Store">
                            </a>
                            <a class="btn btn-secondary px-3 py-2 mt-3 me-3 me-md-0" href="#">
                                <img class="mx-1 d-dark-mode-none" src="/img/market/googleplay-dark.svg"
                                     width="119" alt="Google Play">
                                <img class="mx-1 d-none d-dark-mode-block" src="/img/market/googleplay-light.svg"
                                     width="119" alt="Google Play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
            </p>
        </div>
    </footer>
@endsection

@section('script-bottom')

@endsection
