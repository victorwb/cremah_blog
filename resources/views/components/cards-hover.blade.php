@extends('layouts.base', ['title' => 'Around UI Kit | Cards: Hover effects'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Cards: Hover effects
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-zoom" data-scroll="data-scroll">Image zoom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-lift" data-scroll="data-scroll">Lift</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-flip-1" data-scroll="data-scroll">Flip 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-flip-2" data-scroll="data-scroll">Flip 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-color" data-scroll="data-scroll">Color</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-content-overlay" data-scroll="data-scroll">Content overlay</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-1" data-scroll="data-scroll">Image overlay 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-2" data-scroll="data-scroll">Image overlay 2</a>
              </li>
            </ul>
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
            <a class="nav-link px-0 py-2" href="video-popup#video">
              <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
              Video popup
            </a>
          </li>
        </ul>
        <h3 class="h5 mb-1 pt-4 pb-2">Utilities</h3>
        <ul class="nav flex-column mb-0">
          <li class="nav-item">
            <a class="nav-link px-0 py-2" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank" rel="noopener">
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Cards: Hover effects
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-zoom" data-scroll="data-scroll">Image zoom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-lift" data-scroll="data-scroll">Lift</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-flip-1" data-scroll="data-scroll">Flip 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-flip-2" data-scroll="data-scroll">Flip 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-color" data-scroll="data-scroll">Color</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-content-overlay" data-scroll="data-scroll">Content overlay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-1" data-scroll="data-scroll">Image overlay 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-image-2" data-scroll="data-scroll">Image overlay 2</a>
          </li>
        </ul>
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
        <a class="nav-link px-0 py-2" href="video-popup#video-m">
          <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
          Video popup
        </a>
      </li>
    </ul>
    <h3 class="h5 mb-1 pt-4 pb-2">Utilities</h3>
    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a class="nav-link px-0 py-2" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank" rel="noopener">
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
      <h1 class="pt-lg-4">Cards: Hover effects</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Different types of effect when the user hovers over the card component.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Image zoom -->
      <section class="card border-0 mb-4" id="card-image-zoom">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image zoom</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview1" data-bs-toggle="tab" role="tab" aria-controls="preview1" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html1" data-bs-toggle="tab" role="tab" aria-controls="html1" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview1" role="tabpanel">
              <div class="card zoom-effect border-0 rounded-4 overflow-hidden" style="max-width: 460px;">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                <div class="zoom-effect-wrapper">
                  <img class="zoom-effect-img" src="/img/shop/categories/04.jpg" alt="Category image">
                </div>
                <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3" href="#">
                  <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the bedroom</span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image zoom effect on hover. Can be combined with other effects like content overlay and lift. --&gt;
&lt;div class=&quot;card zoom-effect border-0 rounded-4 overflow-hidden&quot;&gt;
  &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2&quot;&gt;&lt;/span&gt;
  &lt;div class=&quot;zoom-effect-wrapper&quot;&gt;
    &lt;img src=&quot;assets/img/shop/categories/04.jpg&quot; class=&quot;zoom-effect-img&quot; alt=&quot;Category image&quot;&gt;
  &lt;/div&gt;
  &lt;a href=&quot;#&quot; class=&quot;card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3&quot;&gt;
    &lt;span class=&quot;bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4&quot;&gt;
      For the bedroom
    &lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Lift -->
      <section class="card border-0 mb-4" id="card-lift">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Lift</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview2" data-bs-toggle="tab" role="tab" aria-controls="preview2" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html2" data-bs-toggle="tab" role="tab" aria-controls="html2" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview2" role="tabpanel">
              <a class="card-hover card-lifted d-inline-block text-center text-decoration-none" href="#">
                <img class="card-lifted d-block rounded-5 mb-3" src="/img/landing/yoga-studio/trainers/01.jpg" width="340" alt="Michelle Yang">
                <h3 class="h5 mb-1">Michelle Yang</h3>
                <p class="mb-0 text-body-secondary">Fly-yoga trainer</p>
              </a>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Lift card up on hover. Can be combined with other effects like content overlay and zoom --&gt;
&lt;a href=&quot;#&quot; class=&quot;card-hover card-lifted d-inline-block text-center text-decoration-none&quot;&gt;
  &lt;img src=&quot;assets/img/landing/yoga-studio/trainers/01.jpg&quot; class=&quot;card-lifted d-block rounded-5 mb-3&quot; width=&quot;340&quot; alt=&quot;Michelle Yang&quot;&gt;
  &lt;h3 class=&quot;h5 mb-1&quot;&gt;Michelle Yang&lt;/h3&gt;
  &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;Fly-yoga trainer&lt;/p&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Flip 1 -->
      <section class="card border-0 mb-4" id="card-flip-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Flip 1</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview3" data-bs-toggle="tab" role="tab" aria-controls="preview3" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html3" data-bs-toggle="tab" role="tab" aria-controls="html3" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview3" role="tabpanel">
              <a class="card-flip" href="#" style="max-width: 316px;">
                <div class="card-flip-inner">
                  <div class="card-flip-front" style="background-image: url(/img/landing/creative-agency/services/03.jpg);">
                    <div class="d-flex flex-column h-100" data-bs-theme="light">
                      <h2 class="fs-lg fw-normal mb-0 mt-auto">Branding</h2>
                    </div>
                  </div>
                  <div class="card-flip-back bg-secondary">
                    <div class="d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3">
                      <h3 class="h4">Branding</h3>
                      <ul class="text-body ps-4 mb-3">
                        <li class="mb-2">Identity design</li>
                        <li class="mb-2">Brand book creation</li>
                        <li class="mb-2">Colors and fonts</li>
                        <li class="mb-2">Banners and covers</li>
                        <li class="mb-1">Visual style</li>
                      </ul>
                      <div class="text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3">
                        <div class="btn btn-sm btn-icon btn-outline-primary rounded-circle">
                          <i class="ai-arrow-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Flip card on hover to reveal more content --&gt;
&lt;a href=&quot;#&quot; class=&quot;card-flip&quot;&gt;
  &lt;div class=&quot;card-flip-inner&quot;&gt;
    &lt;div class=&quot;card-flip-front&quot; style=&quot;background-image: url(assets/img/landing/creative-agency/services/03.jpg);&quot;&gt;
      &lt;div class=&quot;d-flex flex-column h-100&quot; data-bs-theme=&quot;light&quot;&gt;
        &lt;h2 class=&quot;fs-lg fw-normal mb-0 mt-auto&quot;&gt;Branding&lt;/h2&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-flip-back bg-secondary&quot;&gt;
      &lt;div class=&quot;d-flex flex-column h-100 px-sm-2 pt-sm-2 px-lg-0 pt-lg-0 px-xl-3 pt-xl-3&quot;&gt;
        &lt;h3 class=&quot;h4&quot;&gt;Branding&lt;/h3&gt;
        &lt;ul class=&quot;text-body ps-4 mb-3&quot;&gt;
          &lt;li class=&quot;mb-2&quot;&gt;Identity design&lt;/li&gt;
          &lt;li class=&quot;mb-2&quot;&gt;Brand book creation&lt;/li&gt;
          &lt;li class=&quot;mb-2&quot;&gt;Colors and fonts&lt;/li&gt;
          &lt;li class=&quot;mb-2&quot;&gt;Banners and covers&lt;/li&gt;
          &lt;li class=&quot;mb-1&quot;&gt;Visual style&lt;/li&gt;
        &lt;/ul&gt;
        &lt;div class=&quot;text-end pt-3 pt-sm-2 pt-xl-4 mt-auto me-sm-n2 me-lg-0 me-xl-n3&quot;&gt;
          &lt;div class=&quot;btn btn-sm btn-icon btn-outline-primary rounded-circle&quot;&gt;
            &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Flip 2 -->
      <section class="card border-0 mb-4" id="card-flip-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Flip 2</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview4" data-bs-toggle="tab" role="tab" aria-controls="preview4" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html4" data-bs-toggle="tab" role="tab" aria-controls="html4" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview4" role="tabpanel">
              <div class="card card-flip card-hover border-0 bg-secondary w-sm-auto h-100 rounded-5 text-center" style="max-width: 306px;">
                <div class="card-flip-inner mx-auto">
                  <div class="card-flip-front p-0">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100">
                      <img src="/img/landing/web-studio/skills/figma.svg" width="72" alt="Figma">
                    </div>
                  </div>
                  <div class="card-flip-back p-0 bg-transparent">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                      <img src="/img/landing/web-studio/skills/figma.svg" width="52" alt="Figma">
                      <p class="fs-sm pt-3 mb-0">Figma is convenient online service for interface development and prototyping with the ability to work together in real time.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Flip card on hover to reveal more content --&gt;
&lt;div class=&quot;card card-flip card-hover border-0 bg-secondary w-sm-auto h-100 rounded-5 text-center&quot; style=&quot;max-width: 306px;&quot;&gt;
  &lt;div class=&quot;card-flip-inner mx-auto&quot;&gt;
    &lt;div class=&quot;card-flip-front p-0&quot;&gt;
      &lt;div class=&quot;card-body d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 opacity-100&quot;&gt;
        &lt;img src=&quot;assets/img/landing/web-studio/skills/figma.svg&quot; width=&quot;72&quot; alt=&quot;Figma&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-flip-back p-0 bg-transparent&quot;&gt;
      &lt;div class=&quot;card-body d-flex flex-column justify-content-center align-items-center h-100&quot;&gt;
        &lt;img src=&quot;assets/img/landing/web-studio/skills/figma.svg&quot; width=&quot;52&quot; alt=&quot;Figma&quot;&gt;
        &lt;p class=&quot;fs-sm pt-3 mb-0&quot;&gt;Figma is convenient online service for interface development and prototyping with the ability to work together in real time.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Color -->
      <section class="card border-0 mb-4" id="card-color">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Color</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview5" data-bs-toggle="tab" role="tab" aria-controls="preview5" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html5" data-bs-toggle="tab" role="tab" aria-controls="html5" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview5" role="tabpanel">
              <a class="card card-hover-primary bg-secondary border-0 h-100 text-decoration-none" href="#" style="max-width: 416px;">
                <div class="card-body pb-0">
                  <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.7276 27.5001C1.21683 28.3857 0.916576 29.3769 0.850062 30.3971C0.783549 31.4173 0.952558 32.4391 1.34402 33.3835C1.73548 34.328 2.33891 35.1697 3.10764 35.8437C3.87638 36.5177 4.78982 37.0058 5.77734 37.2704C6.76486 37.5349 7.8 37.5689 8.80272 37.3695C9.80544 37.1701 10.7489 36.7428 11.5601 36.1206C12.3713 35.4983 13.0285 34.6979 13.4809 33.7811C13.9334 32.8643 14.1689 31.8558 14.1693 30.8334C14.1698 29.3654 13.6858 27.9382 12.7924 26.7734C11.8989 25.6085 10.6459 24.7712 9.22787 24.3913C7.80984 24.0114 6.30606 24.1101 4.94991 24.6722C3.59375 25.2344 2.46105 26.2284 1.7276 27.5001Z"></path>
                    <path d="M11.7344 10.1667L4.23438 23.1667C5.42383 22.6595 6.71498 22.4361 8.00568 22.5142C9.29638 22.5922 10.5512 22.9695 11.6709 23.6163C12.7906 24.263 13.7444 25.1615 14.4569 26.2405C15.1694 27.3196 15.621 28.5496 15.776 29.8333L19.0427 24.1667C12.8427 13.45 11.9427 12.425 11.7344 10.1667Z"></path>
                    <path d="M38.2784 27.5C37.8534 26.7833 25.6701 5.6083 25.4284 5.29996C24.4255 3.9011 22.9204 2.94436 21.2281 2.62997C19.5358 2.31559 17.7875 2.66792 16.3491 3.61323C14.9107 4.55855 13.8936 6.02357 13.5108 7.70171C13.1279 9.37984 13.409 11.141 14.2951 12.6166C14.2118 12.6166 13.8784 11.9 26.7284 34.1666C27.1662 34.925 27.749 35.5898 28.4437 36.1229C29.1383 36.656 29.9311 37.0471 30.7769 37.2739C31.6227 37.5006 32.5049 37.5585 33.373 37.4443C34.2412 37.3301 35.0784 37.046 35.8368 36.6083C36.5952 36.1706 37.2599 35.5877 37.793 34.8931C38.3262 34.1984 38.7173 33.4056 38.944 32.5598C39.1707 31.714 39.2287 30.8319 39.1145 29.9637C39.0003 29.0955 38.7162 28.2583 38.2784 27.5Z"></path>
                  </svg>
                  <h3 class="h4 card-title mt-0">Advertising campaigns</h3>
                  <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit.</p>
                </div>
                <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                  <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                    <i class="ai-arrow-right"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Change background and content color of the card on hover --&gt;
&lt;a href=&quot;#&quot; class=&quot;card card-hover-primary bg-secondary border-0 h-100 text-decoration-none&quot;&gt;
  &lt;div class=&quot;card-body pb-0&quot;&gt;
    &lt;svg class=&quot;d-block text-warning mb-4&quot; width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; fill=&quot;currentColor&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
      &lt;path d=&quot;M1.7276 27.5001C1.21683 28.3857 0.916576 29.3769 0.850062 30.3971C0.783549 31.4173 0.952558 32.4391 1.34402 33.3835C1.73548 34.328 2.33891 35.1697 3.10764 35.8437C3.87638 36.5177 4.78982 37.0058 5.77734 37.2704C6.76486 37.5349 7.8 37.5689 8.80272 37.3695C9.80544 37.1701 10.7489 36.7428 11.5601 36.1206C12.3713 35.4983 13.0285 34.6979 13.4809 33.7811C13.9334 32.8643 14.1689 31.8558 14.1693 30.8334C14.1698 29.3654 13.6858 27.9382 12.7924 26.7734C11.8989 25.6085 10.6459 24.7712 9.22787 24.3913C7.80984 24.0114 6.30606 24.1101 4.94991 24.6722C3.59375 25.2344 2.46105 26.2284 1.7276 27.5001Z&quot;&gt;&lt;/path&gt;
      &lt;path d=&quot;M11.7344 10.1667L4.23438 23.1667C5.42383 22.6595 6.71498 22.4361 8.00568 22.5142C9.29638 22.5922 10.5512 22.9695 11.6709 23.6163C12.7906 24.263 13.7444 25.1615 14.4569 26.2405C15.1694 27.3196 15.621 28.5496 15.776 29.8333L19.0427 24.1667C12.8427 13.45 11.9427 12.425 11.7344 10.1667Z&quot;&gt;&lt;/path&gt;
      &lt;path d=&quot;M38.2784 27.5C37.8534 26.7833 25.6701 5.6083 25.4284 5.29996C24.4255 3.9011 22.9204 2.94436 21.2281 2.62997C19.5358 2.31559 17.7875 2.66792 16.3491 3.61323C14.9107 4.55855 13.8936 6.02357 13.5108 7.70171C13.1279 9.37984 13.409 11.141 14.2951 12.6166C14.2118 12.6166 13.8784 11.9 26.7284 34.1666C27.1662 34.925 27.749 35.5898 28.4437 36.1229C29.1383 36.656 29.9311 37.0471 30.7769 37.2739C31.6227 37.5006 32.5049 37.5585 33.373 37.4443C34.2412 37.3301 35.0784 37.046 35.8368 36.6083C36.5952 36.1706 37.2599 35.5877 37.793 34.8931C38.3262 34.1984 38.7173 33.4056 38.944 32.5598C39.1707 31.714 39.2287 30.8319 39.1145 29.9637C39.0003 29.0955 38.7162 28.2583 38.2784 27.5Z&quot;&gt;&lt;/path&gt;
    &lt;/svg&gt;
    &lt;h3 class=&quot;h4 card-title mt-0&quot;&gt;Advertising campaigns&lt;/h3&gt;
    &lt;p class=&quot;card-text&quot;&gt;Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint velit officia consequat duis enim velit mollit.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-0 py-3 my-3 mb-sm-4&quot;&gt;
    &lt;div class=&quot;btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none&quot;&gt;&lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Content overlay -->
      <section class="card border-0 mb-4" id="card-content-overlay">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Content overlay</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview6" data-bs-toggle="tab" role="tab" aria-controls="preview6" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html6" data-bs-toggle="tab" role="tab" aria-controls="html6" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview6" role="tabpanel">
              <a class="card-hover d-block" href="#" style="max-width: 526px;">
                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                  <div class="position-relative z-2 text-center">
                    <i class="ai-instagram lead text-white mb-2"></i>
                    <div class="fs-sm fw-semibold text-white">#createx_std_image</div>
                  </div>
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-30"></div>
                </div>
                <img class="d-block rounded-5" src="/img/landing/yoga-studio/instagram/02.jpg" alt="Instagram image">
              </a>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Show hidden content on top of the image on hover --&gt;
&lt;a href=&quot;#&quot; class=&quot;card-hover d-block&quot;&gt;
  &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0&quot;&gt;
    &lt;div class=&quot;position-relative z-2 text-center&quot;&gt;
      &lt;i class=&quot;ai-instagram lead text-white mb-2&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;fs-sm fw-semibold text-white&quot;&gt;#createx_std_image&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-black opacity-30&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;img src=&quot;assets/img/landing/yoga-studio/instagram/02.jpg&quot; class=&quot;d-block rounded-5&quot; alt=&quot;Instagram image&quot;&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Image overlay 1 -->
      <section class="card border-0 mb-4" id="card-image-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image overlay 1</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview7" data-bs-toggle="tab" role="tab" aria-controls="preview7" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html7" data-bs-toggle="tab" role="tab" aria-controls="html7" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview7" role="tabpanel">
              <a class="card card-hover h-100 border-0 bg-secondary rounded-4 text-decoration-none overflow-hidden" href="#" style="max-width: 416px;">
                <div class="card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4" style="background-image: url(/img/landing/corporate/services/04.jpg);">
                  <div class="btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3">
                    <i class="ai-arrow-right"></i>
                  </div>
                </div>
                <div class="card-body pb-3">
                  <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <g class="text-info">
                      <path d="M34.9811 16.2655C34.3635 26.3194 26.3194 34.3634 16.2656 34.981V40H40V16.2655H34.9811Z" fill="currentColor"></path>
                    </g>
                    <g class="text-info">
                      <path d="M15.0195 30.0413C23.3152 30.0413 30.0403 23.3163 30.0403 15.0205H15.0195V30.0413Z" fill="currentColor"></path>
                    </g>
                    <g class="text-primary">
                      <path d="M29.1953 10.0415C27.141 4.19328 21.571 0 15.0208 0C6.725 0 0 6.725 0 15.0208C0 21.571 4.19328 27.141 10.0415 29.1953V10.0415H29.1953Z" fill="currentColor"></path>
                    </g>
                  </svg>
                  <h3 class="h4">Email marketing</h3>
                  <p class="mb-0">Adipiscing posuere dui, amet, augue nisl dictum justo enier sed neque congue non quam ultrices interdum vitae vestibulumaute irure dolor in reprehenderit in.</p>
                </div>
                <div class="card-footer border-0 pt-3 mb-3">
                  <div class="btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none">
                    <i class="ai-arrow-right"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Show hidden image on top of the content on hover --&gt;
&lt;a href=&quot;#&quot; class=&quot;card card-hover h-100 border-0 bg-secondary rounded-4 text-decoration-none overflow-hidden&quot;&gt;
  &lt;div class=&quot;card-body d-flex align-items-end position-absolute top-0 start-0 w-100 h-100 opacity-0 bg-size-cover bg-position-center pb-4&quot; style=&quot;background-image: url(assets/img/landing/corporate/services/04.jpg);&quot;&gt;
    &lt;div class=&quot;btn btn-icon btn-lg btn-outline-light rounded-circle pe-none mb-3&quot;&gt;
      &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pb-3&quot;&gt;
    &lt;svg class=&quot;d-block mt-1 mt-sm-0 mb-4&quot; width=&quot;40&quot; height=&quot;40&quot; viewBox=&quot;0 0 40 40&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
      &lt;g class=&quot;text-info&quot;&gt;
        &lt;path d=&quot;M34.9811 16.2655C34.3635 26.3194 26.3194 34.3634 16.2656 34.981V40H40V16.2655H34.9811Z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;
      &lt;/g&gt;
      &lt;g class=&quot;text-info&quot;&gt;
        &lt;path d=&quot;M15.0195 30.0413C23.3152 30.0413 30.0403 23.3163 30.0403 15.0205H15.0195V30.0413Z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;
      &lt;/g&gt;
      &lt;g class=&quot;text-primary&quot;&gt;
        &lt;path d=&quot;M29.1953 10.0415C27.141 4.19328 21.571 0 15.0208 0C6.725 0 0 6.725 0 15.0208C0 21.571 4.19328 27.141 10.0415 29.1953V10.0415H29.1953Z&quot; fill=&quot;currentColor&quot;&gt;&lt;/path&gt;
      &lt;/g&gt;
    &lt;/svg&gt;
    &lt;h3 class=&quot;h4&quot;&gt;Email marketing&lt;/h3&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Adipiscing posuere dui, amet, augue nisl dictum justo enier sed neque congue non quam ultrices interdum vitae vestibulumaute irure dolor in reprehenderit in.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-0 pt-3 mb-3&quot;&gt;
    &lt;div class=&quot;btn btn-icon btn-lg btn-outline-primary rounded-circle pe-none&quot;&gt;
      &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Image overlay 2 -->
      <section class="card border-0 mb-4" id="card-image-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image overlay 2</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview8" data-bs-toggle="tab" role="tab" aria-controls="preview8" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html8" data-bs-toggle="tab" role="tab" aria-controls="html8" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview8" role="tabpanel">
              <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
                <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url(/img/landing/yoga-studio/features/spa-area.jpg);"></div>
                <div class="card-body text-center">
                  <i class="ai-spa h1 fw-normal text-primary d-block mb-4"></i>
                  <h3>Spa area</h3>
                  <p class="card-text">Orci purus, in tellus sit bibendum scelerisque adipiscing venenatis.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Show hidden image on top of the content on hover --&gt;
&lt;div class=&quot;card border-0 bg-secondary card-hover h-100 py-4&quot; style=&quot;max-width: 306px;&quot;&gt;
  &lt;div class=&quot;opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5&quot; style=&quot;background-image: url(/img/landing/yoga-studio/features/spa-area.jpg);&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;card-body text-center&quot;&gt;
    &lt;i class=&quot;ai-spa h1 fw-normal text-primary d-block mb-4&quot;&gt;&lt;/i&gt;
    &lt;h3&gt;Spa area&lt;/h3&gt;
    &lt;p class=&quot;card-text&quot;&gt;Orci purus, in tellus sit bibendum scelerisque adipiscing venenatis.&lt;/p&gt;
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