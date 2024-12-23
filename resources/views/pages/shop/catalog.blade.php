@extends('layouts.base', ['title' => 'Around | Shop Catalog'] )

@section('css')
@vite(['node_modules/nouislider/dist/nouislider.min.css'])
@endsection

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar-shop', ['navClass' => 'bg-light'])


    <!-- Page container -->
    <div class="container py-5 mt-5 mb-lg-4 mb-xl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-2 breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Shop catalog</li>
            </ol>
        </nav>


        <!-- Banner -->
        <section class="rounded-1 overflow-hidden mb-5" style="background-color: #e3e5e9;" data-bs-theme="light">
            <div class="row align-items-center g-0">
                <div class="col-md-6 offset-xl-1 text-center text-md-start">
                    <div class="py-4 px-4 px-sm-5 pe-md-0 ps-xl-4">
                        <p class="text-body fs-xs text-uppercase pt-3 pt-md-0 mb-3 mb-lg-4">Best selling</p>
                        <h2 class="h1 pb-2 pb-xl-3">Cozy corner for the living room at a <span class="text-primary">discount up to 40%</span></h2>
                        <a class="btn btn-sm btn-outline-dark" href="#" data-bs-theme="light">Explore</a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 d-flex justify-content-end">
                    <img src="/img/shop/banner.jpg" width="491" alt="Banner">
                </div>
            </div>
        </section>


        <!-- Page title -->
        <div class="row pt-xl-3 mt-n1 mt-sm-0">
            <div class="col-lg-9 offset-lg-3 pt-lg-3">
                <h1 class="pb-2 pb-sm-3">Home decoration</h1>
            </div>
        </div>
        <div class="row pb-2 pb-sm-4">

            <!-- Sidebar (offcanvas on sreens < 992px) -->
            <aside class="col-lg-3">
                <div class="offcanvas-lg offcanvas-start" id="shopSidebar">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Filters</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" data-bs-target="#shopSidebar" aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="offcanvas-body pt-2 pt-lg-0 pe-lg-4">

                        <!-- Categories (accordion with checkboxes) -->
                        <h3 class="h5">Categories</h3>
                        <div class="accordion accordion-alt pb-2 mb-4" id="shopCategories">
                            <div class="accordion-item mb-0">
                                <h4 class="accordion-header">
                                    <button class="accordion-button fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#livingRoom" aria-expanded="true" aria-controls="livingRoom">
                                        <span class="fs-base">Living room</span>
                                    </button>
                                </h4>
                                <div class="accordion-collapse collapse show" id="livingRoom" data-bs-parent="#shopCategories">
                                    <div class="accordion-body py-1 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lr-all">
                                            <label class="form-check-label d-flex align-items-center" for="lr-all">
                                                <span class="text-nav fw-medium">View all</span>
                                                <span class="fs-xs text-body-secondary ms-auto">697</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked id="lr-vases">
                                            <label class="form-check-label d-flex align-items-center" for="lr-vases">
                                                <span class="text-nav fw-medium">Vases</span>
                                                <span class="fs-xs text-body-secondary ms-auto">234</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lr-mirrors">
                                            <label class="form-check-label d-flex align-items-center" for="lr-mirrors">
                                                <span class="text-nav fw-medium">Mirrors</span>
                                                <span class="fs-xs text-body-secondary ms-auto">182</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lr-paintings">
                                            <label class="form-check-label d-flex align-items-center" for="lr-paintings">
                                                <span class="text-nav fw-medium">Paintings</span>
                                                <span class="fs-xs text-body-secondary ms-auto">133</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lr-furniture">
                                            <label class="form-check-label d-flex align-items-center" for="lr-furniture">
                                                <span class="text-nav fw-medium">Furniture</span>
                                                <span class="fs-xs text-body-secondary ms-auto">24</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" checked id="lr-clocks">
                                            <label class="form-check-label d-flex align-items-center" for="lr-clocks">
                                                <span class="text-nav fw-medium">Clocks</span>
                                                <span class="fs-xs text-body-secondary ms-auto">49</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lr-frames">
                                            <label class="form-check-label d-flex align-items-center" for="lr-frames">
                                                <span class="text-nav fw-medium">Photo frames</span>
                                                <span class="fs-xs text-body-secondary ms-auto">75</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#kitchen" aria-expanded="false" aria-controls="kitchen">
                                        <span class="fs-base">Kitchen</span>
                                    </button>
                                </h4>
                                <div class="accordion-collapse collapse" id="kitchen" data-bs-parent="#shopCategories">
                                    <div class="accordion-body py-1 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-all">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-all">
                                                <span class="text-nav fw-medium">View all</span>
                                                <span class="fs-xs text-body-secondary ms-auto">813</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-cutlery">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-cutlery">
                                                <span class="text-nav fw-medium">Cutlery</span>
                                                <span class="fs-xs text-body-secondary ms-auto">387</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-storage">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-storage">
                                                <span class="text-nav fw-medium">Storage</span>
                                                <span class="fs-xs text-body-secondary ms-auto">124</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-bins">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-bins">
                                                <span class="text-nav fw-medium">Waste bins</span>
                                                <span class="fs-xs text-body-secondary ms-auto">59</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-holders">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-holders">
                                                <span class="text-nav fw-medium">Holders</span>
                                                <span class="fs-xs text-body-secondary ms-auto">227</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="kitchen-sinks">
                                            <label class="form-check-label d-flex align-items-center" for="kitchen-sinks">
                                                <span class="text-nav fw-medium">Sinks</span>
                                                <span class="fs-xs text-body-secondary ms-auto">16</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#bathroom" aria-expanded="false" aria-controls="bathroom">
                                        <span class="fs-base">Bathroom</span>
                                    </button>
                                </h4>
                                <div class="accordion-collapse collapse" id="bathroom" data-bs-parent="#shopCategories">
                                    <div class="accordion-body py-1 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-all">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-all">
                                                <span class="text-nav fw-medium">View all</span>
                                                <span class="fs-xs text-body-secondary ms-auto">1416</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-showers">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-showers">
                                                <span class="text-nav fw-medium">Showers</span>
                                                <span class="fs-xs text-body-secondary ms-auto">113</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-basins">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-basins">
                                                <span class="text-nav fw-medium">Basins</span>
                                                <span class="fs-xs text-body-secondary ms-auto">98</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-dispensers">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-dispensers">
                                                <span class="text-nav fw-medium">Dispensers</span>
                                                <span class="fs-xs text-body-secondary ms-auto">205</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-cleaning">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-cleaning">
                                                <span class="text-nav fw-medium">Cleaning</span>
                                                <span class="fs-xs text-body-secondary ms-auto">747</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bathroom-holders">
                                            <label class="form-check-label d-flex align-items-center" for="bathroom-holders">
                                                <span class="text-nav fw-medium">Holders</span>
                                                <span class="fs-xs text-body-secondary ms-auto">253</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-0">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#bedroom" aria-expanded="false" aria-controls="bedroom">
                                        <span class="fs-base">Bedroom</span>
                                    </button>
                                </h4>
                                <div class="accordion-collapse collapse" id="bedroom" data-bs-parent="#shopCategories">
                                    <div class="accordion-body py-1 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-all">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-all">
                                                <span class="text-nav fw-medium">View all</span>
                                                <span class="fs-xs text-body-secondary ms-auto">1219</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-furniture">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-furniture">
                                                <span class="text-nav fw-medium">Furniture</span>
                                                <span class="fs-xs text-body-secondary ms-auto">43</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-linen">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-linen">
                                                <span class="text-nav fw-medium">Bed linen</span>
                                                <span class="fs-xs text-body-secondary ms-auto">528</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-lighting">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-lighting">
                                                <span class="text-nav fw-medium">Lighting</span>
                                                <span class="fs-xs text-body-secondary ms-auto">391</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-storage">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-storage">
                                                <span class="text-nav fw-medium">Storage</span>
                                                <span class="fs-xs text-body-secondary ms-auto">75</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bedroom-mirrors">
                                            <label class="form-check-label d-flex align-items-center" for="bedroom-mirrors">
                                                <span class="text-nav fw-medium">Mirrors</span>
                                                <span class="fs-xs text-body-secondary ms-auto">182</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Price (range slider + inputs) -->
                        <h3 class="h5">Price</h3>
                        <div class="range-slider pb-3 mb-4" data-start-min="10" data-start-max="50" data-min="0" data-max="80" data-step="1" data-tooltip-prefix="$">
                            <div class="range-slider-ui"></div>
                            <div class="d-flex">
                                <div class="d-flex align-items-center w-50">
                                    <label class="form-label fs-xs me-2 mb-0" for="price-min">From</label>
                                    <input class="form-control form-control-sm range-slider-value-min" type="number" style="max-width: 6rem;" id="price-min">
                                </div>
                                <div class="d-flex align-items-center justify-content-end w-50">
                                    <label class="form-label fs-xs me-2 mb-0" for="price-max">To</label>
                                    <input class="form-control form-control-sm range-slider-value-max" type="number" style="max-width: 6rem;" id="price-max">
                                </div>
                            </div>
                        </div>

                        <!-- Color (checkboxes) -->
                        <h3 class="h5">Color</h3>
                        <div class="d-flex pb-2 mb-4">
                            <div class="me-2 mb-2">
                                <input class="btn-check" type="checkbox" value="Black" checked id="color1">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color1">
                                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #1d211f;"></span>
                                </label>
                            </div>
                            <div class="me-2 mb-2">
                                <input class="btn-check" type="checkbox" value="Soft beige" id="color2">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color2">
                                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #d9c9a1;"></span>
                                </label>
                            </div>
                            <div class="me-2 mb-2">
                                <input class="btn-check" type="checkbox" value="Bluish sky" id="color3">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color3">
                                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #a1b7d9;"></span>
                                </label>
                            </div>
                            <div class="me-2 mb-2">
                                <input class="btn-check" type="checkbox" value="Green grass" id="color4">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color4">
                                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #74947d;"></span>
                                </label>
                            </div>
                            <div class="me-2 mb-2">
                                <input class="btn-check" type="checkbox" value="Woody brown" id="color5">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color5">
                                    <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #af8352; background-image: url(/img/shop/pattern/wood.jpg);"></span>
                                </label>
                            </div>
                            <div class="mb-2">
                                <input class="btn-check" type="checkbox" value="Gray marble" id="color6">
                                <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color6">
                                    <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Brand (checkboxes) -->
                        <h3 class="h5">Brand</h3>
                        <div class="pb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Pazolinni" id="brand1">
                                <label class="form-check-label d-flex align-items-center" for="brand1">
                                    <span class="text-nav fw-medium">Pazolinni</span>
                                    <span class="fs-xs text-body-secondary ms-auto">48</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tither Room" checked id="brand2">
                                <label class="form-check-label d-flex align-items-center" for="brand2">
                                    <span class="text-nav fw-medium">Tither Room</span>
                                    <span class="fs-xs text-body-secondary ms-auto">32</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Moissy Decor" id="brand3">
                                <label class="form-check-label d-flex align-items-center" for="brand3">
                                    <span class="text-nav fw-medium">Moissy Decor</span>
                                    <span class="fs-xs text-body-secondary ms-auto">25</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Victorio Via" id="brand4">
                                <label class="form-check-label d-flex align-items-center" for="brand4">
                                    <span class="text-nav fw-medium">Victorio Via</span>
                                    <span class="fs-xs text-body-secondary ms-auto">56</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>


            <!-- Product grid -->
            <div class="col-lg-9">

                <!-- Active filters + Sorting -->
                <div class="d-flex align-items-start justify-content-between mb-4">
                    <div class="me-3">
                        <div class="nav d-md-none">
                            <a class="nav-link dropdown-toggle fs-sm p-0 mb-2" href="#activeFilters" data-bs-toggle="collapse">Active filters</a>
                        </div>
                        <div class="collapse d-md-block" id="activeFilters">
                            <div class="pt-2 pt-md-0">
                                <a class="d-inline-block border rounded-pill fs-xs fw-medium text-body text-decoration-none py-1 px-2 me-2 mb-2" href="#">
                                    <span class="d-inline-flex align-items-center text-nowrap px-1">
                                        Vases<i class="ai-circle-x fs-base ms-1"></i>
                                    </span>
                                </a>
                                <a class="d-inline-block border rounded-pill fs-xs fw-medium text-body text-decoration-none py-1 px-2 me-2 mb-2" href="#">
                                    <span class="d-inline-flex align-items-center text-nowrap px-1">
                                        Clocks<i class="ai-circle-x fs-base ms-1"></i>
                                    </span>
                                </a>
                                <a class="d-inline-block border rounded-pill fs-xs fw-medium text-body text-decoration-none py-1 px-2 me-2 mb-2" href="#">
                                    <span class="d-inline-flex align-items-center text-nowrap px-1">
                                        Tither Room<i class="ai-circle-x fs-base ms-1"></i>
                                    </span>
                                </a>
                                <a class="d-inline-block border rounded-pill fs-xs fw-medium text-body text-decoration-none py-1 px-2 me-2 mb-2" href="#">
                                    <span class="d-inline-flex align-items-center text-nowrap px-1">
                                        $10 - $50<i class="ai-circle-x fs-base ms-1"></i>
                                    </span>
                                </a>
                                <button class="btn btn-sm btn-secondary rounded-pill fw-medium py-1 px-2" type="button">
                                    <span class="px-1">Remove all filters</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-shrink-0 mb-2"><span class="text-body-secondary text-nowrap fs-sm">Sort by:</span>
                        <select class="form-select form-select-flush py-0">
                            <option value="popular">Most popular</option>
                            <option value="low-high">Low-High price</option>
                            <option value="high-low">High-Low price</option>
                            <option value="rating">Average rating</option>
                            <option value="az">A-Z order</option>
                            <option value="za">Z-A order</option>
                        </select>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/01.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Loft style lamp</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Dark gray" checked id="color1-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color1-1">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #576071;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Light gray" id="color1-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color1-2">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color1" value="Blue" id="color1-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color1-3">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$21.00</span>
                            <del class="fs-sm text-body-secondary">$35.00</del>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/02.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Dispenser for soap</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$16.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/03.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Glossy round vase</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Light gray" checked id="color2-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color2-1">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #d5d4d3;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Dark gray" id="color2-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color2-2">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #576071;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color2" value="Blue" id="color2-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color2-3">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$11.00</span>
                            <del class="fs-sm text-body-secondary">$15.00</del>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/04.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Ceramic flower pot</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Gray concrete" checked id="color3-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color3-1">
                                        <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Beige" id="color3-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color3-2">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #d9c9a1;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color3" value="Blue" id="color3-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color3-3">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$19.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/05.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Pendant lamp</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Gray" checked id="color4-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color4-1">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #bab8b7;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Woody brown" id="color4-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color4-2">
                                        <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/wood.jpg);"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color4" value="Gray marble" id="color4-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color4-3">
                                        <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$22.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/06.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Living room table</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$46.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/07.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Teapot for hot drinks</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$17.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary position-absolute top-0 start-0 mt-3 ms-3">New</span>
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/08.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Analogue wall clock</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color5" value="Turquoise" checked id="color5-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color5-1">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a8c2c0;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color5" value="Lilac" id="color5-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color5-2">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #b4a9c3;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color5" value="Blue" id="color5-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color5-3">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$25.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/09.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Scented candle</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$13.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/10.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Matte color pitcher</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color6" value="Light brown" checked id="color6-1">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color6-1">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #aea6a6;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color6" value="Beige" id="color6-2">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color6-2">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #d9c9a1;"></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input class="btn-check" type="radio" name="color6" value="Blue" id="color6-3">
                                    <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color6-3">
                                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$11.00</span>
                            <del class="fs-sm text-body-secondary">$15.00</del>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/11.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Plate with granite print</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$9.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col pb-2 pb-sm-3">
                        <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                                <i class="ai-heart fs-xl text-nav"></i>
                            </button>
                            <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img class="d-block mx-auto" src="/img/shop/products/12.png" width="226" alt="Product">
                                    </div>
                                </a>
                                <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                                    <i class="ai-chevron-left fs-xl text-nav"></i>
                                </button>
                                <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                                    <i class="ai-chevron-right fs-xl text-nav"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Exquisite glass vase</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$23.00</span>
                            <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                                <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                                    <i class="ai-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row gy-3 align-items-center pt-3 pt-sm-4 mt-md-2">
                    <div class="col col-md-4 col-6 order-md-1 order-1">
                        <div class="d-flex align-items-center">
                            <span class="text-body-secondary fs-sm">Show</span>
                            <select class="form-select form-select-flush w-auto">
                                <option value="12">12</option>
                                <option value="18">18</option>
                                <option value="24">24</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                        <button class="btn btn-primary w-md-auto w-100" type="button">Load more products</button>
                    </div>
                    <div class="col col-md-4 col-6 order-md-3 order-2">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm justify-content-end">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Sidebar toggle button -->
    <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#shopSidebar">
        <i class="ai-filter me-2"></i>
        Filters
    </button>

</main>

<footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .03);"></div>
    <div class="container position-relative z-2 pt-5 pb-2" data-bs-theme="dark">

        <!-- Columns with links -->
        <div class="row" id="links">
            <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
                <h3 class="h6 text-uppercase d-none d-md-block">Useful links</h3>
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful" data-show-label="Useful links" data-hide-label="Useful links" aria-label="Useful links"></a>
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
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#decors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="decors" data-show-label="Decors" data-hide-label="Decors" aria-label="Decors"></a>
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
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#categories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="categories" data-show-label="Categories" data-hide-label="Categories" aria-label="Categories"></a>
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
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#showroom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="showroom" data-show-label="Showroom" data-hide-label="Showroom" aria-label="Showroom"></a>
                <div class="collapse d-md-block" id="showroom" data-bs-parent="#links">
                    <ul class="nav flex-column pb-3">
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="#">1501 Main St, Ste 50<br>Tewksbury MA 01876</a>
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
                <a class="nav-link text-body-secondary fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">Terms of use</a>
            </nav>

            <!-- Language / currency switcher -->
            <div class="dropdown mb-4">
                <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><img class="me-2" src="/img/flags/en.png" width="18" alt="English / USD">Eng / USD</button>
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
                        <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                        </svg>
                    </span>
                    <span class="text-light opacity-90">Around</span>
                </a>
                <div class="d-flex mb-4 mb-sm-0">
                    <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3" href="#" aria-label="Telegram">
                        <i class="ai-telegram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3" href="#" aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3" href="#" aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3" href="#" aria-label="Piterest">
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