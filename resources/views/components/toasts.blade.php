@extends('layouts.base', ['title' => 'Around UI Kit | Toasts'])



@section('content')

    @include('layouts.partials/component-navbar')


    <!-- Desktop sidebar navigation (on screens > 991px) -->
    <aside class="container position-fixed d-none d-lg-block start-50 translate-middle-x h-100 pt-5">
        <div class="row h-100 pt-5">
            <div class="col-lg-3 d-flex flex-column pb-3 pt-4" style="height: calc(100% - 2rem);">
                <div class="h-100 mt-2" data-simplebar>
                    <h3 class="h5 mb-1 pb-2">Content</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link px-0 py-2" href="typography">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Typography
                            </a>
                        </li>
                        <li class="nav-item" id="icons">
                            <a class="nav-link px-0 py-2" href="icon-font#icons">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Icon font
                            </a>
                        </li>
                        <li class="nav-item" id="code">
                            <a class="nav-link px-0 py-2" href="code#code">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Code
                            </a>
                        </li>
                        <li class="nav-item" id="imgs">
                            <a class="nav-link px-0 py-2" href="images#imgs">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Images &amp; figures
                            </a>
                        </li>
                        <li class="nav-item" id="tables">
                            <a class="nav-link px-0 py-2" href="tables#tables">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Tables
                            </a>
                        </li>
                    </ul>
                    <h3 class="h5 mb-1 pt-4 pb-2">Components</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item" id="accordion">
                            <a class="nav-link px-0 py-2" href="accordion#accordion">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Accordion
                            </a>
                        </li>
                        <li class="nav-item" id="alerts">
                            <a class="nav-link px-0 py-2" href="alerts#alerts">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Alerts
                            </a>
                        </li>
                        <li class="nav-item" id="badges">
                            <a class="nav-link px-0 py-2" href="badges#badges">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Badges
                            </a>
                        </li>
                        <li class="nav-item" id="blog">
                            <a class="nav-link px-0 py-2" href="blog-components#blog">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Blog components
                            </a>
                        </li>
                        <li class="nav-item" id="breadcrumb">
                            <a class="nav-link px-0 py-2" href="breadcrumb#breadcrumb">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Breadcrumb
                            </a>
                        </li>
                        <li class="nav-item" id="btns">
                            <a class="nav-link px-0 py-2" href="buttons#btns">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Buttons
                            </a>
                        </li>
                        <li class="nav-item" id="btn-group">
                            <a class="nav-link px-0 py-2" href="button-group#btn-group">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Button group
                            </a>
                        </li>
                        <li class="nav-item" id="cards-basic">
                            <a class="nav-link px-0 py-2" href="cards-basic#cards-basic">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Cards: Basic
                            </a>
                        </li>
                        <li class="nav-item" id="cards-hover">
                            <a class="nav-link px-0 py-2" href="cards-hover#cards-hover">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Cards: Hover effects
                            </a>
                        </li>
                        <li class="nav-item" id="carousel">
                            <a class="nav-link px-0 py-2" href="carousel#carousel">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Carousel (Slider)
                            </a>
                        </li>
                        <li class="nav-item" id="charts">
                            <a class="nav-link px-0 py-2" href="charts#charts">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Charts
                            </a>
                        </li>
                        <li class="nav-item" id="collapse">
                            <a class="nav-link px-0 py-2" href="collapse#collapse">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Collapse
                            </a>
                        </li>
                        <li class="nav-item" id="countdown">
                            <a class="nav-link px-0 py-2" href="countdown#countdown">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Countdown
                            </a>
                        </li>
                        <li class="nav-item" id="picker">
                            <a class="nav-link px-0 py-2" href="date-picker#picker">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Date / time picker
                            </a>
                        </li>
                        <li class="nav-item" id="dropdowns">
                            <a class="nav-link px-0 py-2" href="dropdowns#dropdowns">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Dropdowns
                            </a>
                        </li>
                        <li class="nav-item" id="calendar">
                            <a class="nav-link px-0 py-2" href="calendar#calendar">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Event calendar
                            </a>
                        </li>
                        <li class="nav-item" id="forms">
                            <a class="nav-link px-0 py-2" href="forms#forms">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Forms
                            </a>
                        </li>
                        <li class="nav-item" id="gallery">
                            <a class="nav-link px-0 py-2" href="gallery#gallery">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Gallery (Lightbox)
                            </a>
                        </li>
                        <li class="nav-item" id="hotspots">
                            <a class="nav-link px-0 py-2" href="hotspots#hotspots">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Hotspots
                            </a>
                        </li>
                        <li class="nav-item" id="ics">
                            <a class="nav-link px-0 py-2" href="image-comparison-slider#ics">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Image comparison slider
                            </a>
                        </li>
                        <li class="nav-item" id="ig">
                            <a class="nav-link px-0 py-2" href="input-group#ig">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Input group
                            </a>
                        </li>
                        <li class="nav-item" id="lg">
                            <a class="nav-link px-0 py-2" href="list-group#lg">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                List group
                            </a>
                        </li>
                        <li class="nav-item" id="maps">
                            <a class="nav-link px-0 py-2" href="maps#maps">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Maps
                            </a>
                        </li>
                        <li class="nav-item" id="modal">
                            <a class="nav-link px-0 py-2" href="modal#modal">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Modal
                            </a>
                        </li>
                        <li class="nav-item" id="navbar">
                            <a class="nav-link px-0 py-2" href="navbar#navbar">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Navbar
                            </a>
                        </li>
                        <li class="nav-item" id="offcanvas">
                            <a class="nav-link px-0 py-2" href="offcanvas#offcanvas">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Offcanvas
                            </a>
                        </li>
                        <li class="nav-item" id="pagination">
                            <a class="nav-link px-0 py-2" href="pagination#pagination">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Pagination
                            </a>
                        </li>
                        <li class="nav-item" id="parallax">
                            <a class="nav-link px-0 py-2" href="parallax#parallax">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Parallax
                            </a>
                        </li>
                        <li class="nav-item" id="pills">
                            <a class="nav-link px-0 py-2" href="pills#pills">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Pills
                            </a>
                        </li>
                        <li class="nav-item" id="placeholders">
                            <a class="nav-link px-0 py-2" href="placeholders#placeholders">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Placeholders
                            </a>
                        </li>
                        <li class="nav-item" id="popovers">
                            <a class="nav-link px-0 py-2" href="popovers#popovers">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Popovers
                            </a>
                        </li>
                        <li class="nav-item" id="portfolio">
                            <a class="nav-link px-0 py-2" href="portfolio-components#portfolio">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Portfolio components
                            </a>
                        </li>
                        <li class="nav-item" id="pricing">
                            <a class="nav-link px-0 py-2" href="pricing#pricing">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item" id="progress">
                            <a class="nav-link px-0 py-2" href="progress#progress">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Progress
                            </a>
                        </li>
                        <li class="nav-item" id="shop">
                            <a class="nav-link px-0 py-2" href="shop-components#shop">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Shop components
                            </a>
                        </li>
                        <li class="nav-item" id="social-btns">
                            <a class="nav-link px-0 py-2" href="social-buttons#social-btns">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Social buttons
                            </a>
                        </li>
                        <li class="nav-item" id="spinners">
                            <a class="nav-link px-0 py-2" href="spinners#spinners">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Spinners
                            </a>
                        </li>
                        <li class="nav-item" id="steps">
                            <a class="nav-link px-0 py-2" href="steps#steps">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Steps
                            </a>
                        </li>
                        <li class="nav-item" id="tabs">
                            <a class="nav-link px-0 py-2" href="tabs#tabs">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Tabs
                            </a>
                        </li>
                        <li class="nav-item" id="team">
                            <a class="nav-link px-0 py-2" href="team#team">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Team
                            </a>
                        </li>
                        <li class="nav-item" id="testimonials">
                            <a class="nav-link px-0 py-2" href="testimonials#testimonials">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Testimonials / reviews
                            </a>
                        </li>
                        <li class="nav-item" id="toasts">
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Toasts
            </span>
                            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#toast-basic"
                                       data-scroll="data-scroll">Basic example</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#toast-colors"
                                       data-scroll="data-scroll">Color variations</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" id="tooltips">
                            <a class="nav-link px-0 py-2" href="tooltips#tooltips">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Tooltips
                            </a>
                        </li>
                        <li class="nav-item" id="video">
                            <a class="nav-link px-0 py-2" href="video-popup#video">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Video popup
                            </a>
                        </li>
                    </ul>
                    <h3 class="h5 mb-1 pt-4 pb-2">Utilities</h3>
                    <ul class="nav flex-column mb-0">
                        <li class="nav-item">
                            <a class="nav-link px-0 py-2" href="https://getbootstrap.com/docs/5.3/utilities/background/"
                               target="_blank" rel="noopener">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Bootstrap
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-column">
                        <li class="nav-item" id="utils">
                            <a class="nav-link px-0 py-2" href="utilities#utils">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Around utilities
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>


    <!-- Mobile offcanvas navigation (on screens < 992px) -->
    <div class="offcanvas offcanvas-end" id="componentsNav">
        <div class="offcanvas-header align-items-center">
            <div class="d-flex align-items-center">
                <h4 class="offcanvas-title">Menu</h4>
            </div>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <ul class="nav flex-column border-bottom pb-4">
            <li class="nav-item">
                <a class="nav-link py-2" href="../index">
                    <i class="ai-monitor fs-lg opacity-90 me-2"></i>
                    Live demo
                </a>
            </li>
        </ul>
        <div class="offcanvas-body">
            <h3 class="h5 mb-1 pb-2">Content</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link px-0 py-2" href="typography">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Typography
                    </a>
                </li>
                <li class="nav-item" id="icons-m">
                    <a class="nav-link px-0 py-2" href="icon-font#icons-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Icon font
                    </a>
                </li>
                <li class="nav-item" id="code-m">
                    <a class="nav-link px-0 py-2" href="code#code-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Code
                    </a>
                </li>
                <li class="nav-item" id="imgs-m">
                    <a class="nav-link px-0 py-2" href="images#imgs-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Images &amp; figures
                    </a>
                </li>
                <li class="nav-item" id="tables-m">
                    <a class="nav-link px-0 py-2" href="tables#tables-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Tables
                    </a>
                </li>
            </ul>
            <h3 class="h5 mb-1 pt-4 pb-2">Components</h3>
            <ul class="nav flex-column">
                <li class="nav-item" id="accordion-m">
                    <a class="nav-link px-0 py-2" href="accordion#accordion-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Accordion
                    </a>
                </li>
                <li class="nav-item" id="alerts-m">
                    <a class="nav-link px-0 py-2" href="alerts#alerts-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Alerts
                    </a>
                </li>
                <li class="nav-item" id="badges-m">
                    <a class="nav-link px-0 py-2" href="badges#badges-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Badges
                    </a>
                </li>
                <li class="nav-item" id="blog-m">
                    <a class="nav-link px-0 py-2" href="blog-components#blog-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Blog components
                    </a>
                </li>
                <li class="nav-item" id="breadcrumb-m">
                    <a class="nav-link px-0 py-2" href="breadcrumb#breadcrumb-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Breadcrumb
                    </a>
                </li>
                <li class="nav-item" id="btns-m">
                    <a class="nav-link px-0 py-2" href="buttons#btns-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Buttons
                    </a>
                </li>
                <li class="nav-item" id="btn-group-m">
                    <a class="nav-link px-0 py-2" href="button-group#btn-group-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Button group
                    </a>
                </li>
                <li class="nav-item" id="cards-basic-m">
                    <a class="nav-link px-0 py-2" href="cards-basic#cards-basic-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Cards: Basic
                    </a>
                </li>
                <li class="nav-item" id="cards-hover-m">
                    <a class="nav-link px-0 py-2" href="cards-hover#cards-hover-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Cards: Hover effects
                    </a>
                </li>
                <li class="nav-item" id="carousel-m">
                    <a class="nav-link px-0 py-2" href="carousel#carousel-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Carousel (Slider)
                    </a>
                </li>
                <li class="nav-item" id="charts-m">
                    <a class="nav-link px-0 py-2" href="charts#charts-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Charts
                    </a>
                </li>
                <li class="nav-item" id="collapse-m">
                    <a class="nav-link px-0 py-2" href="collapse#collapse-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Collapse
                    </a>
                </li>
                <li class="nav-item" id="countdown-m">
                    <a class="nav-link px-0 py-2" href="countdown#countdown-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Countdown
                    </a>
                </li>
                <li class="nav-item" id="picker-m">
                    <a class="nav-link px-0 py-2" href="date-picker#picker-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Date / time picker
                    </a>
                </li>
                <li class="nav-item" id="dropdowns-m">
                    <a class="nav-link px-0 py-2" href="dropdowns#dropdowns-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Dropdowns
                    </a>
                </li>
                <li class="nav-item" id="calendar-m">
                    <a class="nav-link px-0 py-2" href="calendar#calendar-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Event calendar
                    </a>
                </li>
                <li class="nav-item" id="forms-m">
                    <a class="nav-link px-0 py-2" href="forms#forms-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Forms
                    </a>
                </li>
                <li class="nav-item" id="gallery-m">
                    <a class="nav-link px-0 py-2" href="gallery#gallery-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Gallery (Lightbox)
                    </a>
                </li>
                <li class="nav-item" id="hotspots-m">
                    <a class="nav-link px-0 py-2" href="hotspots#hotspots-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Hotspots
                    </a>
                </li>
                <li class="nav-item" id="ics-m">
                    <a class="nav-link px-0 py-2" href="image-comparison-slider#ics-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Image comparison slider
                    </a>
                </li>
                <li class="nav-item" id="lg-m">
                    <a class="nav-link px-0 py-2" href="list-group#lg-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        List group
                    </a>
                </li>
                <li class="nav-item" id="maps-m">
                    <a class="nav-link px-0 py-2" href="maps#maps-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Maps
                    </a>
                </li>
                <li class="nav-item" id="modal-m">
                    <a class="nav-link px-0 py-2" href="modal#modal-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Modal
                    </a>
                </li>
                <li class="nav-item" id="navbar-m">
                    <a class="nav-link px-0 py-2" href="navbar#navbar-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Navbar
                    </a>
                </li>
                <li class="nav-item" id="offcanvas-m">
                    <a class="nav-link px-0 py-2" href="offcanvas#offcanvas-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Offcanvas
                    </a>
                </li>
                <li class="nav-item" id="pagination-m">
                    <a class="nav-link px-0 py-2" href="pagination#pagination-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Pagination
                    </a>
                </li>
                <li class="nav-item" id="parallax-m">
                    <a class="nav-link px-0 py-2" href="parallax#parallax-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Parallax
                    </a>
                </li>
                <li class="nav-item" id="pills-m">
                    <a class="nav-link px-0 py-2" href="pills#pills-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Pills
                    </a>
                </li>
                <li class="nav-item" id="placeholders-m">
                    <a class="nav-link px-0 py-2" href="placeholders#placeholders-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Placeholders
                    </a>
                </li>
                <li class="nav-item" id="popovers-m">
                    <a class="nav-link px-0 py-2" href="popovers#popovers-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Popovers
                    </a>
                </li>
                <li class="nav-item" id="portfolio-m">
                    <a class="nav-link px-0 py-2" href="portfolio-components#portfolio-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Portfolio components
                    </a>
                </li>
                <li class="nav-item" id="pricing-m">
                    <a class="nav-link px-0 py-2" href="pricing#pricing-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Pricing
                    </a>
                </li>
                <li class="nav-item" id="progress-m">
                    <a class="nav-link px-0 py-2" href="progress#progress-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Progress
                    </a>
                </li>
                <li class="nav-item" id="shop-m">
                    <a class="nav-link px-0 py-2" href="shop-components#shop-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Shop components
                    </a>
                </li>
                <li class="nav-item" id="social-btns-m">
                    <a class="nav-link px-0 py-2" href="social-buttons#social-btns-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Social buttons
                    </a>
                </li>
                <li class="nav-item" id="spinners-m">
                    <a class="nav-link px-0 py-2" href="spinners#spinners-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Spinners
                    </a>
                </li>
                <li class="nav-item" id="steps-m">
                    <a class="nav-link px-0 py-2" href="steps#steps-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Steps
                    </a>
                </li>
                <li class="nav-item" id="tabs-m">
                    <a class="nav-link px-0 py-2" href="tabs#tabs-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Tabs
                    </a>
                </li>
                <li class="nav-item" id="team-m">
                    <a class="nav-link px-0 py-2" href="team#team-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Team
                    </a>
                </li>
                <li class="nav-item" id="testimonials-m">
                    <a class="nav-link px-0 py-2" href="testimonials#testimonials-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Testimonials / reviews
                    </a>
                </li>
                <li class="nav-item" id="toasts-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Toasts
        </span>
                    <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#toast-basic"
                               data-scroll="data-scroll">Basic example</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#toast-colors"
                               data-scroll="data-scroll">Color variations</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="tooltips-m">
                    <a class="nav-link px-0 py-2" href="tooltips#tooltips-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Tooltips
                    </a>
                </li>
                <li class="nav-item" id="video-m">
                    <a class="nav-link px-0 py-2" href="video-popup#video-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Video popup
                    </a>
                </li>
            </ul>
            <h3 class="h5 mb-1 pt-4 pb-2">Utilities</h3>
            <ul class="nav flex-column mb-0">
                <li class="nav-item">
                    <a class="nav-link px-0 py-2" href="https://getbootstrap.com/docs/5.3/utilities/background/"
                       target="_blank" rel="noopener">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Bootstrap
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item" id="utils-m">
                    <a class="nav-link px-0 py-2" href="utilities#utils-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Around utilities
                    </a>
                </li>
            </ul>
        </div>
        <div class="offcanvas-header border-top">
            <a class="btn btn-primary w-100" href="" target="_blank" rel="noopener">
                <i class="ai-cart d-sm-inline-block fs-xl me-2 ms-n1"></i>
                Buy now
            </a>
        </div>
    </div>


    <!-- Page content -->
    <section class="container pt-5 pb-4">
        <div class="row pt-5 pb-2 pb-sm-3">
            <div class="col-lg-9 offset-lg-3 position-relative z-5">
                <h1 class="pt-lg-4">Toasts</h1>
                <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
                    <p class="text-body-secondary">Push notifications to your visitors with a toast, a lightweight and
                        easily customizable alert message.</p>
                    <p class="fs-sm fw-semibold ps-md-4">
                        <a class="text-decoration-none text-nowrap"
                           href="https://getbootstrap.com/docs/5.3/components/toasts/" target="_blank" rel="noopener">
                            Bootstrap docs
                            <i class="ai-external-link fs-lg ms-2"></i>
                        </a>
                    </p>
                </div>


                <!-- Basic example -->
                <section class="card border-0 mb-4" id="toast-basic">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Basic example</h2>
                    </div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
                            <li class="nav-item me-3">
                                <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview1"
                                   data-bs-toggle="tab" role="tab" aria-controls="preview1" aria-selected="true">
                                    <i class="ai-show fs-lg opacity-90 me-2"></i>
                                    Preview
                                </a>
                            </li>
                            <li class="vr opacity-20 my-3 me-3"></li>
                            <li class="nav-item">
                                <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html1" data-bs-toggle="tab"
                                   role="tab" aria-controls="html1" aria-selected="false">
                                    <i class="ai-code fs-xl opacity-90 me-2"></i>
                                    HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="preview1" role="tabpanel">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                                     data-bs-autohide="false">
                                    <div class="toast-header">
                                        <div class="d-inline-block align-middle bg-primary rounded-circle me-2"
                                             style="width: 1.25rem; height: 1.25rem;"></div>
                                        <h6 class="mb-0 me-auto">Around</h6>
                                        <small class="fw-medium text-body-secondary">11 mins ago</small>
                                        <button class="btn-close ms-2" type="button" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">Hello, world! This is a toast message.</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic toast example (remove fade show to hide toast initially) --&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header&quot;&gt;
    &lt;div class=&quot;d-inline-block align-middle bg-primary rounded-circle me-2&quot; style=&quot;width: 1.25rem; height: 1.25rem;&quot;&gt;&lt;/div&gt;
    &lt;h6 class=&quot;mb-0 me-auto&quot;&gt;Around&lt;/h6&gt;
    &lt;small class=&quot;fw-medium text-body-secondary&quot;&gt;11 mins ago&lt;/small&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Color variations -->
                <section class="card border-0 mb-4" id="toast-colors">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Color variations</h2>
                    </div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
                            <li class="nav-item me-3">
                                <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview2"
                                   data-bs-toggle="tab" role="tab" aria-controls="preview2" aria-selected="true">
                                    <i class="ai-show fs-lg opacity-90 me-2"></i>
                                    Preview
                                </a>
                            </li>
                            <li class="vr opacity-20 my-3 me-3"></li>
                            <li class="nav-item">
                                <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html2" data-bs-toggle="tab"
                                   role="tab" aria-controls="html2" aria-selected="false">
                                    <i class="ai-code fs-xl opacity-90 me-2"></i>
                                    HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="preview2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-primary text-white">
                                                <i class="ai-bell fs-lg me-2"></i>
                                                <span class="me-auto">Primary toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-primary">Hello, world! This is a toast
                                                message.
                                            </div>
                                        </div>
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-secondary">
                                                <i class="ai-lock-open fs-lg me-2"></i>
                                                <span class="me-auto">Secondary toast</span>
                                                <button class="btn-close ms-2" type="button" data-bs-dismiss="toast"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">Hello, world! This is a toast message.</div>
                                        </div>
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-success text-white">
                                                <i class="ai-circle-check fs-lg me-2"></i>
                                                <span class="me-auto">Success toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-success">Hello, world! This is a toast
                                                message.
                                            </div>
                                        </div>
                                        <div class="toast fade show mb-4 mb-md-2" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-danger text-white">
                                                <i class="ai-circle-slash fs-lg me-2"></i>
                                                <span class="me-auto">Danger toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-danger">Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-warning text-white">
                                                <i class="ai-triangle-alert fs-lg me-2"></i>
                                                <span class="me-auto">Warning toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-warning">Hello, world! This is a toast
                                                message.
                                            </div>
                                        </div>
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-info text-white">
                                                <i class="ai-circle-info fs-lg me-2"></i>
                                                <span class="me-auto">Info toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-info">Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div class="toast fade show mb-4" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header bg-dark text-white">
                                                <i class="ai-time fs-lg me-2"></i>
                                                <span class="me-auto">Dark toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-dark">Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div class="toast fade show mb-2" role="alert" aria-live="assertive"
                                             aria-atomic="true" data-bs-autohide="false">
                                            <div class="toast-header border-0 text-white"
                                                 style="background-color: #69459e;">
                                                <i class="ai-map-pin fs-lg me-2"></i>
                                                <span class="me-auto">Custom color toast</span>
                                                <button class="btn-close btn-close-white ms-2" type="button"
                                                        data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body" style="color: #69459e;">Hello, world! This is a
                                                toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Remove class show from toast to hide it initially. Remove data-bs-autohide="false" to enable autohide behavior. --&gt;

&lt;!-- Primary toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-primary text-white&quot;&gt;
    &lt;i class=&quot;ai-bell fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;fw-medium me-auto&quot;&gt;Primary toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-primary&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-secondary&quot;&gt;
    &lt;i class=&quot;ai-lock-open fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Secondary toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close ms-2 mb-1&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-success text-white&quot;&gt;
    &lt;i class=&quot;ai-circle-check fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Success toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-success&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-danger text-white&quot;&gt;
    &lt;i class=&quot;ai-circle-slash fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Danger toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-danger&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-warning text-white&quot;&gt;
    &lt;i class=&quot;ai-triangle-alert fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Warning toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-warning&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-info text-white&quot;&gt;
    &lt;i class=&quot;ai-circle-info fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Info toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-info&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header bg-dark text-white&quot;&gt;
    &lt;i class=&quot;ai-time fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Dark toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body text-dark&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Custom color toast --&gt;
&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-autohide=&quot;false&quot;&gt;
  &lt;div class=&quot;toast-header border-0 text-white&quot; style=&quot;background-color: #69459e;&quot;&gt;
    &lt;i class=&quot;ai-map-pin fs-lg me-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;me-auto&quot;&gt;Custom color toast&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;toast-body&quot; style=&quot;color: #69459e;&quot;&gt;Hello, world! This is a toast message.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
