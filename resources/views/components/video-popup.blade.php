@extends('layouts.base', ['title' => 'Around UI Kit | Video popup'])



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
                            <a class="nav-link px-0 py-2" href="toasts#toasts">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Toasts
                            </a>
                        </li>
                        <li class="nav-item" id="tooltips">
                            <a class="nav-link px-0 py-2" href="tooltips#tooltips">
                                <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                                Tooltips
                            </a>
                        </li>
                        <li class="nav-item" id="video">
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Video popup
            </span>
                            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn"
                                       data-scroll="data-scroll">Play button</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1"
                                       href="#video-btn-types-colors" data-scroll="data-scroll">Types and colors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-sizing"
                                       data-scroll="data-scroll">Sizing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-image"
                                       data-scroll="data-scroll">On top of the image</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-card"
                                       data-scroll="data-scroll">Inside card</a>
                                </li>
                            </ul>
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
                <li class="nav-item" id="ig-m">
                    <a class="nav-link px-0 py-2" href="input-group#ig-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Input group
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
                    <a class="nav-link px-0 py-2" href="toasts#toasts-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Toasts
                    </a>
                </li>
                <li class="nav-item" id="tooltips-m">
                    <a class="nav-link px-0 py-2" href="tooltips#tooltips-m">
                        <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
                        Tooltips
                    </a>
                </li>
                <li class="nav-item" id="video-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Video popup
        </span>
                    <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn"
                               data-scroll="data-scroll">Play button</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-types-colors"
                               data-scroll="data-scroll">Types and colors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-sizing"
                               data-scroll="data-scroll">Sizing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-image"
                               data-scroll="data-scroll">On top of the image</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#video-btn-card"
                               data-scroll="data-scroll">Inside card</a>
                        </li>
                    </ul>
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
                <h1 class="pt-lg-4">Video popup</h1>
                <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
                    <p class="text-body-secondary">Responsive YouTube video player inside lightbox triggered by
                        specially styled button.</p>
                    <div class="ps-md-4 mb-3">
                        <span class="badge bg-warning fs-sm">Around component</span>
                    </div>
                </div>


                <!-- Play button -->
                <section class="card border-0 mb-4" id="video-btn">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Play button</h2>
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
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-primary rounded-circle"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <span class="fs-sm ps-3">Click me to watch video!</span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Play button with label --&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
    &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;
  &lt;span class=&quot;fs-sm ps-3&quot;&gt;Click me to watch video!&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Types and colors -->
                <section class="card border-0 mb-4" id="video-btn-types-colors">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Types and colors</h2>
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
                                <div class="d-flex flex-wrap mb-4">
                                    <a class="btn btn-icon btn-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-secondary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-success rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-danger rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-warning rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-info rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-dark rounded-circle m-2 me-3"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <div class="bg-dark p-2">
                                        <a class="btn btn-icon btn-light rounded-circle"
                                           href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                           aria-label="Play video">
                                            <i class="ai-play-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <a class="btn btn-icon btn-outline-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-secondary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-success rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-danger rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-warning rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-info rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-outline-dark rounded-circle m-2 me-3"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <div class="bg-dark p-2">
                                        <a class="btn btn-icon btn-outline-light rounded-circle"
                                           href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                           aria-label="Play video">
                                            <i class="ai-play-filled"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Secondary solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-secondary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Success solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-success rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Danger solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-danger rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Warning solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-warning rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Info solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-info rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Dark solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-dark rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Light solid video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-light rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Primary outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Secondary outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-secondary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Success outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-success rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Danger outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-danger rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Warning outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-warning rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Info outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-info rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Dark outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-dark rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Light outline video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-outline-light rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Sizing -->
                <section class="card border-0 mb-4" id="video-btn-sizing">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Sizing</h2>
                    </div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
                            <li class="nav-item me-3">
                                <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview3"
                                   data-bs-toggle="tab" role="tab" aria-controls="preview3" aria-selected="true">
                                    <i class="ai-show fs-lg opacity-90 me-2"></i>
                                    Preview
                                </a>
                            </li>
                            <li class="vr opacity-20 my-3 me-3"></li>
                            <li class="nav-item">
                                <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html3" data-bs-toggle="tab"
                                   role="tab" aria-controls="html3" aria-selected="false">
                                    <i class="ai-code fs-xl opacity-90 me-2"></i>
                                    HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="preview3" role="tabpanel">
                                <div class="d-flex flex-wrap align-items-center">
                                    <a class="btn btn-icon btn-xl btn-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-lg btn-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-primary rounded-circle m-2"
                                       href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                       aria-label="Play video">
                                        <i class="ai-play-filled"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Extra large video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-xl btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Large video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-lg btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Regular video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;!-- Small video button --&gt;
&lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-sm btn-primary rounded-circle&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
  &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- On top of the image -->
                <section class="card border-0 mb-4" id="video-btn-image">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">On top of the image</h2>
                    </div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
                            <li class="nav-item me-3">
                                <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview4"
                                   data-bs-toggle="tab" role="tab" aria-controls="preview4" aria-selected="true">
                                    <i class="ai-show fs-lg opacity-90 me-2"></i>
                                    Preview
                                </a>
                            </li>
                            <li class="vr opacity-20 my-3 me-3"></li>
                            <li class="nav-item">
                                <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html4" data-bs-toggle="tab"
                                   role="tab" aria-controls="html4" aria-selected="false">
                                    <i class="ai-code fs-xl opacity-90 me-2"></i>
                                    HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="preview4" role="tabpanel">
                                <div class="position-relative">
                                    <img class="d-block rounded-5" src="/img/landing/product/video-cover.jpg"
                                         alt="Video cover">
                                    <div
                                        class="d-nline-flex position-absolute top-50 start-50 translate-middle z-2 p-4">
                                        <a class="btn btn-icon btn-xl btn-primary rounded-circle stretched-link"
                                           href="https://www.youtube.com/watch?v=udMULpKcnn8" data-bs-toggle="video"
                                           aria-label="Play video">
                                            <i class="ai-play-filled"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Video button on top of the image example --&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;img src=&quot;assets/img/landing/product/video-cover.jpg&quot; class=&quot;d-block rounded-5&quot; alt=&quot;Video cover&quot;&gt;
  &lt;div class=&quot;d-nline-flex position-absolute top-50 start-50 translate-middle z-2 p-4&quot;&gt;
    &lt;a href=&quot;https://www.youtube.com/watch?v=udMULpKcnn8&quot; class=&quot;btn btn-icon btn-xl btn-primary rounded-circle stretched-link&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
      &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Inside card -->
                <section class="card border-0 mb-4" id="video-btn-card">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Inside card</h2>
                    </div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
                            <li class="nav-item me-3">
                                <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview5"
                                   data-bs-toggle="tab" role="tab" aria-controls="preview5" aria-selected="true">
                                    <i class="ai-show fs-lg opacity-90 me-2"></i>
                                    Preview
                                </a>
                            </li>
                            <li class="vr opacity-20 my-3 me-3"></li>
                            <li class="nav-item">
                                <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html5" data-bs-toggle="tab"
                                   role="tab" aria-controls="html5" aria-selected="false">
                                    <i class="ai-code fs-xl opacity-90 me-2"></i>
                                    HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="preview5" role="tabpanel">
                                <div class="card overflow-hidden" style="max-width: 23rem;">
                                    <div class="position-relative">
                                        <span
                                            class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-20"></span>
                                        <div
                                            class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 z-2">
                                            <a class="btn btn-icon btn-primary rounded-circle stretched-link"
                                               href="https://www.youtube.com/watch?v=UHQPdP8qgrk" data-bs-toggle="video"
                                               aria-label="Play video">
                                                <i class="ai-play-filled"></i>
                                            </a>
                                        </div>
                                        <img class="card-img-top" src="/img/landing/web-studio/industries/03.jpg"
                                             alt="Card image">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a class="btn btn-primary" href="#">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Video button on top of the card image --&gt;
&lt;div class=&quot;card overflow-hidden&quot;&gt;
  &lt;div class=&quot;position-relative&quot;&gt;
    &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-20&quot;&gt;&lt;/span&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 z-2&quot;&gt;
      &lt;a href=&quot;https://www.youtube.com/watch?v=UHQPdP8qgrk&quot; class=&quot;btn btn-icon btn-primary rounded-circle stretched-link&quot; data-bs-toggle=&quot;video&quot; aria-label=&quot;Play video&quot;&gt;
        &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/landing/web-studio/industries/03.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection