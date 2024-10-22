@extends('layouts.base', ['title' => 'Around | Single Project v.1'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar', ['navClass' => 'bg-light'])

    <section class="container py-5 mt-5 mb-2 mb-sm-3 mb-lg-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-2 pb-lg-3 pb-1 breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('third', ['pages', 'portfolio', 'list-v1'])}}">Portfolio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Single project v.1</li>
            </ol>
        </nav>

        <!-- Page title -->
        <div class="row">
            <div class="col-lg-11 col-xl-10">
                <img class="d-block d-dark-mode-none mb-2 mb-sm-3" src="/img/portfolio/brands/vintage-dark.svg" alt="Vintage">
                <img class="d-none d-dark-mode-block mb-2 mb-sm-3" src="/img/portfolio/brands/vintage-light.svg" alt="Vintage">
                <h1 class="display-2 pb-3 pb-md-4 pb-lg-5">Business strategy for a brand of vintage bags</h1>
            </div>
        </div>

        <!-- Main image -->
        <img class="d-block rounded-5 mb-3 mb-xl-4 mb-xxl-5" src="/img/portfolio/single/v1/01.jpg" alt="Image">

        <!-- Project overview -->
        <div class="border-bottom py-4 py-lg-5">
            <div class="row">
                <div class="col-lg-11 col-xl-10">
                    <p class="text-dark lead mb-2 mb-lg-3-0 mb-xl-4 mb-xxl-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 g-sm-4 pt-4 pt-xxl-5 mb-2 mb-sm-3 pb-xxl-4">
                        <div class="col">
                            <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Company</h2>
                            <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                                <li class="d-block py-1">Vintage</li>
                                <li class="d-block py-1">12-18 employees</li>
                                <li class="d-block py-1">Dublin, Ireland</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Indusrty</h2>
                            <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                                <li class="d-block py-1">E-commerce</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Services</h2>
                            <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                                <li class="d-block py-1">Email marketing</li>
                                <li class="d-block py-1">Content marketing</li>
                                <li class="d-block py-1">Social networks</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Time spent</h2>
                            <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                                <li class="d-block py-1">2021, 3 months</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project description -->
        <div class="border-bottom py-md-2 py-lg-3 py-xl-4 py-xxl-5">
            <div class="row my-5">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2 class="h1 pb-2">About the client</h2>
                    <p class="fs-lg">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur. Vel magna sit aliquet viverra morbi massa mattis urna, feugiat egestas tincidunt ipsum diam quam massa amet odio nisi duis dolor. Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
                    <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The challenge</h2>
                    <p class="fs-lg">Sit diam nunc, et pellentesque ornare elit, ut. Interdum feugiat id ut egestas tellus congue faucibus habitant semper nunc et etiam ultrices id nisi urna amet, odio mauris risus nam aliquam pharetra amet nunc, enim aliquet egestas purus penatibus ac, elit ultricies proin adipiscing suspendisse sit proin.</p>
                    <h2 class="h1 pt-3 pt-sm-4 pt-xl-5 pb-2">The solution</h2>
                    <p class="fs-lg mb-0">Est enim mollis morbi vulputate egestas commodo vitae quis sed sit ultrices nulla habitant sit faucibus orci. Eu etiam ipsum porttitor morbi urna eget aliquet aenean tristique amet tempus, vestibulum vel montes, pellentesque sit. Cursus nulla viverra elit accumsan, vitae. Phasellus sed hac at pharetra urna. Imperdiet egestas ac eget porttitor ultrices morbi ornare. Libero, lectus eget adipiscing odio ornare non maecenas non vitae libero, at feugiat urna, risus augue fringilla. Venenatis quam.</p>
                </div>
            </div>
        </div>

        <!-- Social networks -->
        <div class="row mt-5 pt-sm-2 pt-lg-3 pt-xl-4 pt-xxl-5">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="pb-sm-2">Social networks</h2>
                <p class="fs-lg mb-2 mb-sm-3 mb-lg-2">Velit non pharetra eget eu varius amet dui pharetra nam velit purus id nec aliquet auctor scelerisque egestas magna nulla. Eget posuere fames id nibh nisi sodales malesuada nisl purus. Libero, velit, in tincidunt non habitasse dui, risus eros, vel laoreet euismod sit vitae, at urna nullam lacus urna ac ut pulvinar arcu lacus porttitor aliquam.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 pt-4 pt-lg-5">
            <div class="col mb-4 mb-sm-0">
                <div class="d-flex align-items-center justify-content-center bg-secondary h-100 rounded-5 p-4 p-xl-5">
                    <img class="d-block rounded-4 my-2" src="/img/portfolio/single/v1/02.jpg" width="367" alt="Image">
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-end justify-content-center bg-secondary h-100 rounded-5 px-4 px-xl-5">
                    <img class="d-block rounded-4 rounded-bottom-0 mt-4" src="/img/portfolio/single/v1/03.jpg" width="524" alt="Image">
                </div>
            </div>
        </div>

        <!-- Content marketing -->
        <div class="row mt-5 pt-sm-2 pt-lg-3 pt-xl-4 pt-xxl-5">
            <div class="col-md-10 col-lg-8 col-xl-7 pt-md-3 pt-lg-4">
                <h2 class="pb-sm-2">Content marketing</h2>
                <p class="fs-lg mb-2 mb-sm-3 mb-lg-2">Diam at quam a sagittis non tellus penatibus massa, gravida eu sit nunc, eu, amet mattis massa tincidunt sagittis. Semper imperdiet viverra netus euismod eget sed condimentum netus. Lectus odio eros eu nibh habitant elementum elementum, morbi pharetra, amet neque in donec massa morbi sed vehicula varius ipsum et morbi eu ut.</p>
            </div>
        </div>
        <div class="row pt-4 pt-lg-5">
            <div class="col-sm-8 mb-4 mb-sm-0">
                <img class="rounded-5" src="/img/portfolio/single/v1/04.jpg" alt="Image">
            </div>
            <div class="col-sm-4">
                <img class="rounded-5" src="/img/portfolio/single/v1/05.jpg" alt="Image">
            </div>
        </div>

        <!-- Results -->
        <div class="row mt-5 pt-sm-2 pt-lg-3 pt-xl-4 pt-xxl-5">
            <div class="col-md-10 col-lg-8 col-xl-7 pt-md-3 pt-lg-4">
                <h2 class="pb-sm-2">Results</h2>
                <p class="fs-lg mb-2 mb-sm-3 mb-lg-2">Facilisi morbi habitant massa euismod. Vehicula viverra vestibulum at quis orci morbi nullam in. Etiam sit in platea faucibus venenatis. Morbi cursus vehicula nam pellentesque lacus neque aenean non. Feugiat feugiat nullam feugiat cras volutpat.</p>
            </div>
        </div>
        <div class="row pt-4 pt-lg-5">
            <div class="col-md-9 col-lg-7 col-xl-6">
                <div class="row row-cols-1 row-cols-sm-3">
                    <div class="col mb-4 mb-sm-0">
                        <div class="h1 mb-0">1200+</div>
                        <p class="fs-sm mb-0">leads for $ 2.1</p>
                    </div>
                    <div class="col mb-4 mb-sm-0">
                        <div class="h1 mb-0">130%</div>
                        <p class="fs-sm mb-0">revenue increase</p>
                    </div>
                    <div class="col mb-4 mb-sm-0">
                        <div class="h1 mb-0">124+</div>
                        <p class="fs-sm mb-0">new posts</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial -->
        <div class="py-5 my-lg-2 my-xl-4 my-xxl-5">
            <h2 class="h1 pb-2 pb-lg-4 pt-sm-4 pt-lg-5 mt-n3 mt-sm-0">Testimonial from Vintage</h2>
            <div class="card border-0 bg-secondary mb-2 mb-sm-3 mb-md-4 mb-lg-5">
                <div class="card-body px-lg-0 py-lg-5">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/21.jpg" width="86" alt="Lilian Bocouse">
                            <h4 class="mb-0">Lilian Bocouse</h4>
                            <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More projects carousel -->
        <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
            <h2 class="h1 mb-0">More case studies</h2>
            <div class="d-flex ms-auto">
                <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="prev-project" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="next-project" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="swiper pb-md-4 pb-xl-5" data-swiper-options='{
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": "#prev-project",
            "nextEl": "#next-project"
          },
          "breakpoints": {
            "576": { "slidesPerView": 2 }
          }
        }'>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide">
                    <a class="d-block position-relative" href="#">
                        <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100"></div>
                        <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/06.png" width="636" alt="Image">
                    </a>
                    <div class="pt-4 mt-sm-2">
                        <h4>
                            <a href="#">Development of an application for a national bank</a>
                        </h4>
                        <p class="mb-0">Non purus odio venenatis velit sed tellus sed ultrices neque adipiscing sit turpis lacus, aenean sed luctus adipiscing ut orci molestie arcu, sapien sed.</p>
                    </div>
                </div>

                <!-- Item-->
                <div class="swiper-slide">
                    <a class="d-block position-relative" href="#">
                        <div class="bg-danger rounded-5 position-absolute top-0 start-0 w-100 h-100"></div>
                        <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/08.png" width="636" alt="Image">
                    </a>
                    <div class="pt-4 mt-sm-2">
                        <h4>
                            <a href="#">Landing page for a marketing agency Boost</a>
                        </h4>
                        <p class="mb-0">Sit congue tellus urna phasellus sagittis interdum sed laoreet eget curabitur vel magna sit aliquet viverra morbi massa mattis urna, feugiat egestas tincidunt.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
                    <a class="d-block position-relative" href="#">
                        <div class="rounded-5 position-absolute top-0 start-0 w-100 h-100" style="background-color: #d7e4f4"></div>
                        <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/09.png" width="636" alt="Image">
                    </a>
                    <div class="pt-4 mt-sm-2">
                        <h4><a href="#">Development of an application for a task tracker</a></h4>
                        <p class="mb-0">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer bg-dark position-relative py-4 py-md-5">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .03);"></div>
    <div class="container position-relative z-2 pt-4 pt-md-2 pt-xl-4 pt-xxl-5" data-bs-theme="dark">
        <div class="row py-md-3 mb-4 mb-md-5">
            <div class="col-md-7 col-lg-6 col-xxl-5 mb-sm-4 mb-md-0">
                <h2 class="display-4 mb-4 mb-md-5">Let's start building brand together</h2>
                <div class="d-sm-flex align-items-center">
                    <a class="btn btn-lg btn-primary me-sm-3 me-lg-4" href="#">Let's work together</a>
                    <p class="text-body fs-sm py-3 py-sm-0 ps-sm-2 mb-0">Managers will contact you to discuss the project and select the best team</p>
                </div>
            </div>
            <div class="col-md-5 offset-lg-1 offset-xxl-2 d-flex flex-column">
                <div class="nav mx-n2 mx-lg-n4 mb-2 mb-sm-3">
                    <a class="nav-link text-primary px-2 px-lg-4" href="mailto:example@email.com">example@email.com</a>
                    <a class="nav-link px-3 px-lg-4" href="#">Privay policy</a>
                </div>
                <div class="nav flex-column mb-3 mb-sm-4">
                    <a class="nav-link py-1 px-0" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                    <a class="nav-link py-1 px-0" href="tel:+15262200000">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0000</a>
                </div>
                <div class="nav mx-n2 mt-auto">
                    <a class="nav-link py-1 px-2 me-2" href="#">instagram</a>
                    <a class="nav-link py-1 px-2 me-2" href="#">behance</a>
                    <a class="nav-link py-1 px-2 me-2" href="#">medium</a>
                    <a class="nav-link py-1 px-2" href="#">dribbble</a>
                </div>
            </div>
        </div>
        <p class="nav fs-sm pt-3 pb-2 pb-lg-0 mb-0">
            <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
            <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
        </p>
    </div>
</footer>

@endsection