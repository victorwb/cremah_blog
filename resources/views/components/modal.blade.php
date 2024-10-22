@extends('layouts.base', ['title' => 'Around UI Kit | Modal'])

@section('css')
    <style>
        .example-modal .modal {
            display: block;
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            z-index: 1;
        }
    </style>
@endsection

@section('content')

    <!-- Small modal -->
    <div class="modal fade" id="modalSmall" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Default modal -->
    <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Large modal -->
    <div class="modal fade" id="modalLarge" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra large modal -->
    <div class="modal fade" id="modalXL" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Long modal -->
    <div class="modal fade" id="modalLong" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fs-sm">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scrolling content -->
    <div class="modal fade" id="modalScroll" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fs-sm">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered modal -->
    <div class="modal fade" id="modalCentered" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Full screen modal -->
    <div class="modal fade" id="modalFullscreen" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                            data-bs-dismiss="modal">Close
                    </button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>


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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Modal
            </span>
                            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-markup"
                                       data-scroll="data-scroll">Modal markup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-tabs-forms"
                                       data-scroll="data-scroll">Tabs and forms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-demo"
                                       data-scroll="data-scroll">Live demo (variants)</a>
                                </li>
                            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Modal
        </span>
                    <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-markup"
                               data-scroll="data-scroll">Modal markup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-tabs-forms"
                               data-scroll="data-scroll">Tabs and forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#modal-demo"
                               data-scroll="data-scroll">Live demo (variants)</a>
                        </li>
                    </ul>
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
                <h1 class="pt-lg-4">Modal</h1>
                <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
                    <p class="text-body-secondary">Add dialogs to your site for lightboxes, user notifications, etc.</p>
                    <p class="fs-sm fw-semibold ps-md-4">
                        <a class="text-decoration-none text-nowrap"
                           href="https://getbootstrap.com/docs/5.3/components/modal/" target="_blank" rel="noopener">
                            Bootstrap docs
                            <i class="ai-external-link fs-lg ms-2"></i>
                        </a>
                    </p>
                </div>


                <!-- Modal markup -->
                <section class="card border-0 mb-4" id="modal-markup">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Modal markup</h2>
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
                                <div class="example-modal">
                                    <div class="modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal title</h4>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer flex-column flex-sm-row">
                                                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0"
                                                            type="button" data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3"
                                                            type="button">Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Modal markup --&gt;
&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h4 class=&quot;modal-title&quot;&gt;Modal title&lt;/h4&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p&gt;Modal body text goes here.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer flex-column flex-sm-row&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100 w-sm-auto ms-sm-3&quot;&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Tabs and forms -->
                <section class="card border-0 mb-4" id="modal-tabs-forms">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Tabs and forms</h2>
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
                                <div class="example-modal">
                                    <div class="modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <ul class="nav nav-tabs flex-nowrap text-nowrap mb-n2"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link flex-column flex-sm-row px-3 px-sm-4 active"
                                                               href="#signin" data-bs-toggle="tab" role="tab"
                                                               aria-selected="true">
                                                                <i class="ai-login me-sm-2 ms-sm-n1"></i>
                                                                <span class="d-none d-sm-inline">Sign in</span>
                                                                <span
                                                                    class="fs-sm fw-medium d-sm-none pt-1">Sign in</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link flex-column flex-sm-row px-3 px-sm-4"
                                                               href="#signup" data-bs-toggle="tab" role="tab"
                                                               aria-selected="false">
                                                                <i class="ai-user me-sm-2 ms-sm-n1"></i>
                                                                <span class="d-none d-sm-inline">Sign up</span>
                                                                <span
                                                                    class="fs-sm fw-medium d-sm-none pt-1">Sign up</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body tab-content">
                                                    <form class="tab-pane fade show active mt-n2" autocomplete="off"
                                                          id="signin">
                                                        <div class="mb-3 mb-sm-4">
                                                            <label class="form-label" for="email1">Email address</label>
                                                            <input class="form-control" type="email" id="email1"
                                                                   placeholder="johndoe@example.com">
                                                        </div>
                                                        <div class="mb-3 mb-sm-4">
                                                            <label class="form-label" for="pass1">Password</label>
                                                            <div class="password-toggle">
                                                                <input class="form-control" type="password" id="pass1">
                                                                <label class="password-toggle-btn">
                                                                    <input class="password-toggle-check"
                                                                           type="checkbox"><span
                                                                        class="password-toggle-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 d-flex flex-wrap justify-content-between">
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="remember">
                                                                <label class="form-check-label" for="remember">Remember
                                                                    me</label>
                                                            </div>
                                                            <a class="fs-sm" href="#">Forgot password?</a>
                                                        </div>
                                                        <button class="btn btn-primary w-100" type="submit">Sign in
                                                        </button>
                                                    </form>
                                                    <form class="tab-pane fade" autocomplete="off" id="signup">
                                                        <div class="mb-3 mb-sm-4">
                                                            <label class="form-label" for="name">Full name</label>
                                                            <input class="form-control" type="text" id="name"
                                                                   placeholder="John Doe">
                                                        </div>
                                                        <div class="mb-3 mb-sm-4">
                                                            <label class="form-label" for="email2">Email address</label>
                                                            <input class="form-control" type="email" id="email2"
                                                                   placeholder="johndoe@example.com">
                                                        </div>
                                                        <div class="mb-3 mb-sm-4">
                                                            <label class="form-label" for="pass2">Password</label>
                                                            <div class="password-toggle">
                                                                <input class="form-control" type="password" id="pass2">
                                                                <label class="password-toggle-btn">
                                                                    <input class="password-toggle-check"
                                                                           type="checkbox">
                                                                    <span class="password-toggle-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="pass3">Confirm
                                                                password</label>
                                                            <div class="password-toggle">
                                                                <input class="form-control" type="password" id="pass3">
                                                                <label class="password-toggle-btn">
                                                                    <input class="password-toggle-check"
                                                                           type="checkbox">
                                                                    <span class="password-toggle-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary w-100" type="submit">Sign up
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Modal with tabs and forms --&gt;
&lt;div class=&quot;modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;ul class=&quot;nav nav-tabs flex-nowrap text-nowrap mb-n2&quot; role=&quot;tablist&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#signin&quot; class=&quot;nav-link flex-column flex-sm-row px-3 px-sm-4 active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
              &lt;i class=&quot;ai-login me-sm-2 ms-sm-n1&quot;&gt;&lt;/i&gt;
              &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Sign in&lt;/span&gt;
              &lt;span class=&quot;fs-sm fw-medium d-sm-none pt-1&quot;&gt;Sign in&lt;/span&gt;
            &lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#signup&quot; class=&quot;nav-link flex-column flex-sm-row px-3 px-sm-4&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
              &lt;i class=&quot;ai-user me-sm-2 ms-sm-n1&quot;&gt;&lt;/i&gt;
              &lt;span class=&quot;d-none d-sm-inline&quot;&gt;Sign up&lt;/span&gt;
              &lt;span class=&quot;fs-sm fw-medium d-sm-none pt-1&quot;&gt;Sign up&lt;/span&gt;
            &lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body tab-content&quot;&gt;
        &lt;form class=&quot;tab-pane fade show active mt-n2&quot; id=&quot;signin&quot; autocomplete=&quot;off&quot;&gt;
          &lt;div class=&quot;mb-3 mb-sm-4&quot;&gt;
            &lt;label for=&quot;email1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email1&quot; placeholder=&quot;johndoe@example.com&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-3 mb-sm-4&quot;&gt;
            &lt;label for=&quot;pass1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
            &lt;div class=&quot;password-toggle&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pass1&quot;&gt;
              &lt;label class=&quot;password-toggle-btn&quot;&gt;
                &lt;input class=&quot;password-toggle-check&quot; type=&quot;checkbox&quot;&gt;
                &lt;span class=&quot;password-toggle-indicator&quot;&gt;&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-4 d-flex flex-wrap justify-content-between&quot;&gt;
            &lt;div class=&quot;form-check mb-2&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;remember&quot;&gt;
              &lt;label for=&quot;remember&quot; class=&quot;form-check-label&quot;&gt;Remember me&lt;/label&gt;
            &lt;/div&gt;
            &lt;a href=&quot;#&quot; class=&quot;fs-sm&quot;&gt;Forgot password?&lt;/a&gt;
          &lt;/div&gt;
          &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary w-100&quot;&gt;Sign in&lt;/button&gt;
        &lt;/form&gt;
        &lt;form class=&quot;tab-pane fade&quot; id=&quot;signup&quot; autocomplete=&quot;off&quot;&gt;
          &lt;div class=&quot;mb-3 mb-sm-4&quot;&gt;
            &lt;label for=&quot;name&quot; class=&quot;form-label&quot;&gt;Full name&lt;/label&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;name&quot; placeholder=&quot;John Doe&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-3 mb-sm-4&quot;&gt;
            &lt;label for=&quot;email2&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email2&quot; placeholder=&quot;johndoe@example.com&quot;&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-3 mb-sm-4&quot;&gt;
            &lt;label for=&quot;pass2&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
            &lt;div class=&quot;password-toggle&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pass2&quot;&gt;
              &lt;label class=&quot;password-toggle-btn&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;password-toggle-check&quot;&gt;
                &lt;span class=&quot;password-toggle-indicator&quot;&gt;&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-4&quot;&gt;
            &lt;label for=&quot;pass3&quot; class=&quot;form-label&quot;&gt;Confirm password&lt;/label&gt;
            &lt;div class=&quot;password-toggle&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pass3&quot;&gt;
              &lt;label class=&quot;password-toggle-btn&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;password-toggle-check&quot;&gt;
                &lt;span class=&quot;password-toggle-indicator&quot;&gt;&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary w-100&quot;&gt;Sign up&lt;/button&gt;
        &lt;/form&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Live demo -->
                <section class="card border-0 mb-4" id="modal-demo">
                    <div class="card-body pb-0">
                        <h2 class="h4 mb-n2">Live demo</h2>
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
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalSmall">Small modal
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalDefault">Default modal
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalLarge">Large modal
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalXL">Extra large modal
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalLong">Long modal
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalScroll">Srolling content
                                </button>
                                <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalCentered">Vertically centered modal
                                </button>
                                <button class="btn btn-outline-secondary mb-3" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalFullscreen">Full screen modal
                                </button>
                            </div>
                            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Launch modal button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modalId&quot;&gt;
Launch modal
&lt;/button&gt;

&lt;!-- Small modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-sm&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Default modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Large modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-lg&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Extra large modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-xl&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal with srolling content --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Vertically centered modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Full screen modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-fullscreen&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
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
