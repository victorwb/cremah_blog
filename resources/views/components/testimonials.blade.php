@extends('layouts.base', ['title' => 'Around UI Kit | Testimonials / reviews'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Testimonials / reviews
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#quotation" data-scroll="data-scroll">Quotation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-1" data-scroll="data-scroll">Testimonial: Style 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-2" data-scroll="data-scroll">Testimonial: Style 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-3" data-scroll="data-scroll">Testimonial: Style 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-4" data-scroll="data-scroll">Testimonial: Style 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#review" data-scroll="data-scroll">Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonials-slider-1" data-scroll="data-scroll">Testimonials slider: Style 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonials-slider-2" data-scroll="data-scroll">Testimonials slider: Style 2</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Testimonials / reviews
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#quotation" data-scroll="data-scroll">Quotation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-1" data-scroll="data-scroll">Testimonial: Style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-2" data-scroll="data-scroll">Testimonial: Style 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-3" data-scroll="data-scroll">Testimonial: Style 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonial-4" data-scroll="data-scroll">Testimonial: Style 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#review" data-scroll="data-scroll">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonials-slider-1" data-scroll="data-scroll">Testimonials slider: Style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#testimonials-slider-2" data-scroll="data-scroll">Testimonials slider: Style 2</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Testimonials / reviews</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">This component is designed to showcase testimonials from satisfied clients or reviews of the products on your website.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Quotation -->
      <section class="card border-0 mb-4" id="quotation">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Quotation</h2>
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
              <div class="card border-0 bg-secondary">
                <div class="card-body">
                  <figure>
                    <blockquote class="blockquote">
                      <p>Ut pellentesque bibendum dignissim a molestie ultrices diam ut vel neque tincidunt eget sed ut quis sit semper nunc at etiam lacinia quam laoreet eget id sapien a pharetra, ornare diam dignissim neque tincidunt ultrices.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">Darlene Robertson</figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Quotation --&gt;
&lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;figure&gt;
      &lt;blockquote class=&quot;blockquote&quot;&gt;
        &lt;p&gt;Ut pellentesque bibendum dignissim a molestie ultrices diam ut vel neque tincidunt eget sed ut quis sit semper nunc at etiam lacinia quam laoreet eget id sapien a pharetra, ornare diam dignissim  neque tincidunt ultrices.&lt;/p&gt;
      &lt;/blockquote&gt;
      &lt;figcaption class=&quot;blockquote-footer&quot;&gt;Darlene Robertson&lt;/figcaption&gt;
    &lt;/figure&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonial: Style 1 -->
      <section class="card border-0 mb-4" id="testimonial-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonial: Style 1</h2>
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
              <div class="row row-cols-1 row-cols-md-2 align-items-center g-4">
                <div class="col">
                  <div class="bg-secondary p-4">
                    <div class="card border-0">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img class="rounded-circle" src="/img/avatar/22.jpg" width="60" alt="Jane Cooper">
                          <div class="ps-3">
                            <div class="h6 mb-1">Jane Cooper</div>
                            <div class="fs-sm text-body-secondary">Medical Assistant</div>
                          </div>
                        </div>
                        <p class="card-text">Sit risus metus, vel neque eu lectus duis. Vulputate facilisi at feugiat mi aenean nunc enim faucibus arcu. Diam id accumsan sit semper nunc.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-0 bg-secondary">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <img class="rounded-circle" src="/img/avatar/23.jpg" width="60" alt="Wade Warren">
                        <div class="ps-3">
                          <div class="h6 mb-1">Wade Warren</div>
                          <div class="fs-sm text-body-secondary">President of Sales</div>
                        </div>
                      </div>
                      <p class="card-text">Vitae tempor morbi tellus pulvinar. Ut iaculis sit tristique in turpis volutpat quam nec. Pretium eu nulla egestas ultrices. Donec in pulvinar ut fermentum a, nunc, aliquam.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonial style 1: Light card --&gt;
&lt;div class=&quot;card border-0&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
      &lt;img src=&quot;assets/img/avatar/22.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;60&quot; alt=&quot;Jane Cooper&quot;&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;div class=&quot;h6 mb-1&quot;&gt;Jane Cooper&lt;/div&gt;
        &lt;div class=&quot;fs-sm text-body-secondary&quot;&gt;Medical Assistant&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;card-text&quot;&gt;Sit risus metus, vel neque eu lectus duis. Vulputate facilisi at feugiat mi aenean nunc enim faucibus arcu. Diam id accumsan sit semper nunc.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Testimonial style 1: Gray card --&gt;
&lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
      &lt;img src=&quot;assets/img/avatar/23.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;60&quot; alt=&quot;Wade Warren&quot;&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;div class=&quot;h6 mb-1&quot;&gt;Wade Warren&lt;/div&gt;
        &lt;div class=&quot;fs-sm text-body-secondary&quot;&gt;President of Sales&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;card-text&quot;&gt;Vitae tempor morbi tellus pulvinar. Ut iaculis sit tristique in turpis volutpat quam nec. Pretium eu nulla egestas ultrices. Donec in pulvinar ut fermentum a, nunc, aliquam.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonial: Style 2 -->
      <section class="card border-0 mb-4" id="testimonial-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonial: Style 2</h2>
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
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html3" data-bs-toggle="tab" role="tab" aria-controls="html3" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview3" role="tabpanel">
              <div class="pt-4 mt-3">
                <div class="card border-0 bg-info bg-opacity-10 h-100 text-center" style="max-width: 636px;">
                  <div class="polygon-avatar bg-info mx-auto translate-middle-y">
                    <img src="/img/landing/mobile-app-showcase/testimonials/01.png" alt="Nick Williams">
                  </div>
                  <div class="card-body pt-0 mt-n4">
                    <p class="card-text fs-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis libero vitae sem ornare ornare. Aliquam ut sapien vitae quam blandit egestas. Quisque nulla elit, fermentum et tincidunt tempor, rutrum at leo. Curabitur massa quam, aliquam eu sapien sed.</p>
                  </div>
                  <div class="card-footer border-0 pt-0">
                    <div class="h4 mb-1">Nick Williams</div>
                    <span>Student</span>
                  </div>
                </div>
              </div>
              <div class="pt-5 mt-4">
                <div class="card border-0 bg-warning bg-opacity-10 h-100 text-center" style="max-width: 636px;">
                  <div class="polygon-avatar bg-warning mx-auto translate-middle-y">
                    <img src="/img/landing/mobile-app-showcase/testimonials/02.png" alt="Lili Bocouse">
                  </div>
                  <div class="card-body pt-0 mt-n4">
                    <p class="card-text fs-xl">Proin interdum purus non quam convallis, quis dignissim leo cursus. Praesent finibus elit nisl, sed ultrices elit lobortis in. Donec laoreet sit amet nulla quis hendrerit. Praesent venenatis mattis ante. Praesent justo elit, suscipit a libero sit amet, luctus posuere mi.</p>
                  </div>
                  <div class="card-footer border-0 pt-0">
                    <div class="h4 mb-1">Lili Bocouse</div>
                    <span>Student</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonial style 2: Info card example. Can be any color --&gt;
&lt;div class=&quot;card border-0 bg-info bg-opacity-10 h-100 text-center&quot;&gt;
  &lt;div class=&quot;polygon-avatar bg-info mx-auto translate-middle-y&quot;&gt;
    &lt;img src=&quot;assets/img/landing/mobile-app-showcase/testimonials/01.png&quot; alt=&quot;Nick Williams&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0 mt-n4&quot;&gt;
    &lt;p class=&quot;card-text fs-xl&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis libero vitae sem ornare ornare. Aliquam ut sapien vitae quam blandit egestas. Quisque nulla elit, fermentum et tincidunt tempor, rutrum at leo. Curabitur massa quam, aliquam eu sapien sed.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-0 pt-0&quot;&gt;
    &lt;div class=&quot;h4 mb-1&quot;&gt;Nick Williams&lt;/div&gt;
    &lt;span&gt;Student&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Testimonial style 2: Warning card example. Can be any color --&gt;
&lt;div class=&quot;card border-0 bg-warning bg-opacity-10 h-100 text-center&quot;&gt;
  &lt;div class=&quot;polygon-avatar bg-info mx-auto translate-middle-y&quot;&gt;
    &lt;img src=&quot;assets/img/landing/mobile-app-showcase/testimonials/02.png&quot; alt=&quot;Lili Bocouse&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0 mt-n4&quot;&gt;
    &lt;p class=&quot;card-text fs-xl&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis libero vitae sem ornare ornare. Aliquam ut sapien vitae quam blandit egestas. Quisque nulla elit, fermentum et tincidunt tempor, rutrum at leo. Curabitur massa quam, aliquam eu sapien sed.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-0 pt-0&quot;&gt;
    &lt;div class=&quot;h4 mb-1&quot;&gt;Lili Bocouse&lt;/div&gt;
    &lt;span&gt;Student&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonial: Style 3 -->
      <section class="card border-0 mb-4" id="testimonial-3">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonial: Style 3</h2>
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
              <div class="d-flex align-items-center" style="max-width: 570px;">
                <div class="bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5" style="padding: .375rem;">
                  <img class="rounded-circle" src="/img/avatar/44.jpg" width="80" alt="Avatar">
                </div>
                <div class="card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3">
                  <div class="card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0">
                    <p class="fs-xl">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus tortor quis eleifend."</p>
                    <div class="h5 fw-bold mb-0">Eleanor Pena</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonial style 3 --&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;div class=&quot;bg-light rounded-circle flex-shrink-0 position-relative z-2 me-n5&quot;&gt;
    &lt;img src=&quot;assets/img/avatar/44.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;80&quot; alt=&quot;Avatar&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card bg-secondary border-0 rounded-4 py-3 ps-4 ps-sm-5 pe-3&quot;&gt;
    &lt;div class=&quot;card-body py-3 px-2 p-sm-4 ms-4 ms-sm-0&quot;&gt;
      &lt;p class=&quot;fs-xl&quot;&gt;&quot;Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus tortor quis eleifend.&quot;&lt;/p&gt;
      &lt;div class=&quot;h5 fw-bold mb-0&quot;&gt;Eleanor Pena&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonial: Style 4 -->
      <section class="card border-0 mb-4" id="testimonial-4">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonial: Style 4</h2>
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
              <div class="card border-0 bg-secondary p-1 p-sm-0 p-md-2" style="max-width: 416px;">
                <img src="/img/landing/saas-4/integrations/magento-light.svg" class="d-block d-dark-mode-none mx-auto" width="165" alt="Magento">
                <img src="/img/landing/saas-4/integrations/magento-dark.svg" class="d-none d-dark-mode-block mx-auto" width="165" alt="Magento">
                <div class="card-body text-center pt-1">
                  <p class="pb-3 mb-3">Differentiate your app from the competition with this SaaS platform's outstanding performance and exceptional API for implementing AI models into your application.</p>
                  <img src="/img/avatar/51.jpg" class="d-inline-block rounded-circle" width="80" alt="Avatar">
                  <div class="pt-2 mt-1">
                    <h3 class="h5 mb-1">Christopher Davis</h3>
                    <p class="fs-sm text-body-secondary mb-0">Network Administrator</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonial style 4 --&gt;
&lt;div class=&quot;card border-0 bg-secondary p-1 p-sm-0 p-md-2&quot;&gt;
  &lt;img src=&quot;assets/img/landing/saas-4/integrations/magento-light.svg&quot; class=&quot;d-block d-dark-mode-none mx-auto&quot; width=&quot;165&quot; alt=&quot;Magento&quot;&gt;
  &lt;img src=&quot;assets/img/landing/saas-4/integrations/magento-dark.svg&quot; class=&quot;d-none d-dark-mode-block mx-auto&quot; width=&quot;165&quot; alt=&quot;Magento&quot;&gt;
  &lt;div class=&quot;card-body text-center pt-1&quot;&gt;
    &lt;p class=&quot;pb-3 mb-3&quot;&gt;Differentiate your app from the competition with this SaaS platform's outstanding performance and exceptional API for implementing AI models into your application.&lt;/p&gt;
    &lt;img src=&quot;assets/img/avatar/51.jpg&quot; class=&quot;d-inline-block rounded-circle&quot; width=&quot;80&quot; alt=&quot;Avatar&quot;&gt;
    &lt;div class=&quot;pt-2 mt-1&quot;&gt;
      &lt;h3 class=&quot;h5 mb-1&quot;&gt;Christopher Davis&lt;/h3&gt;
      &lt;p class=&quot;fs-sm text-body-secondary mb-0&quot;&gt;Network Administrator&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Review -->
      <section class="card border-0 mb-4" id="review">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Review</h2>
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
              <div class="d-md-flex gap-3">
                <div class="text-center p-3 p-sm-4" style="max-width: 400px;">
                  <div class="d-flex justify-content-center fs-lg mb-4">
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                  </div>
                  <p class="mb-3">"Tools are constantly improved and contain a lot of useful information."</p>
                  <div class="d-flex align-items-center justify-content-center text-start pt-2">
                    <img class="rounded-circle" src="/img/avatar/31.jpg" width="60" alt="James Hendrix">
                    <div class="ps-3">
                      <div class="h6 mb-1">James Hendrix</div>
                      <div class="fs-sm text-body-secondary">Marketing specialist</div>
                    </div>
                  </div>
                </div>
                <div class="text-center p-3 p-sm-4" style="max-width: 400px;">
                  <div class="d-flex justify-content-center fs-lg mb-4">
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-warning mx-2"></i>
                    <i class="ai-star-filled text-body-secondary opacity-40 mx-2"></i>
                  </div>
                  <p class="mb-3">"We can easily analyze our big data quickly and efficiently all the time."</p>
                  <img class="d-inline-block" src="/img/landing/saas-1/brands/capterra.svg" width="196" alt="Capterra">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Review: Avatar + Name + Position --&gt;
&lt;div class=&quot;text-center p-3 p-sm-4&quot;&gt;
  &lt;div class=&quot;d-flex justify-content-center fs-lg mb-4&quot;&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;p class=&quot;mb-3&quot;&gt;"Tools are constantly improved and contain a lot of useful information."&lt;/p&gt;
  &lt;div class=&quot;d-flex align-items-center justify-content-center text-start pt-2&quot;&gt;
    &lt;img src=&quot;assets/img/avatar/31.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;60&quot; alt=&quot;James Hendrix&quot;&gt;
    &lt;div class=&quot;ps-3&quot;&gt;
      &lt;div class=&quot;h6 mb-1&quot;&gt;James Hendrix&lt;/div&gt;
      &lt;div class=&quot;fs-sm text-body-secondary&quot;&gt;Marketing specialist&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Review: Company logo --&gt;
&lt;div class=&quot;text-center p-3 p-sm-4&quot;&gt;
  &lt;div class=&quot;d-flex justify-content-center fs-lg mb-4&quot;&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-warning mx-2&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ai-star-filled text-body-secondary opacity-40 mx-2&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;p class=&quot;mb-3&quot;&gt;"We can easily analyze our big data quickly and efficiently all the time."&lt;/p&gt;
  &lt;img src=&quot;assets/img/landing/saas-1/brands/capterra.svg&quot; class=&quot;d-inline-block&quot; width=&quot;196&quot; alt=&quot;Capterra&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonials slider: Style 1 -->
      <section class="card border-0 mb-4" id="testimonials-slider-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonials slider: Style 1</h2>
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
              <div class="card border-0 bg-secondary overflow-hidden">
                <div class="card-body position-relative z-2 py-lg-5">
                  <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-2">
                    <div class="col-md-4 mb-3 mb-md-0">
                      <div class="binded-content">
                        <div class="binded-item active" id="author1">
                          <img class="d-block rounded-circle mb-3" src="/img/avatar/21.jpg" width="86" alt="Lilianna Bocouse">
                          <h4 class="mb-0">Lilianna Bocouse</h4>
                          <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                        </div>
                        <div class="binded-item" id="author2">
                          <img class="d-block rounded-circle mb-3" src="/img/avatar/33.jpg" width="86" alt="Darell Steward">
                          <h4 class="mb-0">Darell Steward</h4>
                          <p class="fs-lg text-body-secondary mb-0">Project Manager</p>
                        </div>
                        <div class="binded-item" id="author3">
                          <img class="d-block rounded-circle mb-3" src="/img/avatar/34.jpg" width="86" alt="Annette Black">
                          <h4 class="mb-0">Annette Black</h4>
                          <p class="fs-lg text-body-secondary mb-0">Lead Designer</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="swiper" data-swiper-options='{
                            "spaceBetween": 40,
                            "loop": true,
                            "autoHeight": true,
                            "bindedContent": true,
                            "pagination": {
                              "el": "#testimonials-bullets",
                              "clickable": true
                            }
                          }'>
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" data-swiper-binded="#author1">
                            <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                          </div>
                          <div class="swiper-slide" data-swiper-binded="#author2">
                            <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus.”</p>
                          </div>
                          <div class="swiper-slide" data-swiper-binded="#author3">
                            <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3" id="testimonials-bullets"></div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonials slider: Style 1 --&gt;
&lt;div class=&quot;card border-0 bg-secondary overflow-hidden&quot;&gt;
  &lt;div class=&quot;card-body position-relative z-2 px-lg-0 py-lg-5&quot;&gt;
    &lt;div class=&quot;row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5&quot;&gt;
      &lt;div class=&quot;col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0&quot;&gt;

        &lt;!-- Binded items--&gt;
        &lt;div class=&quot;binded-content&quot;&gt;

          &lt;!-- Item--&gt;
          &lt;div class=&quot;binded-item active&quot; id=&quot;author1&quot;&gt;&lt;img class=&quot;d-block rounded-circle mb-3&quot; src=&quot;assets/img/avatar/21.jpg&quot; width=&quot;86&quot; alt=&quot;Lilianna Bocouse&quot;&gt;
            &lt;h4 class=&quot;mb-0&quot;&gt;Lilianna Bocouse&lt;/h4&gt;
            &lt;p class=&quot;fs-lg text-body-secondary mb-0&quot;&gt;Head of Marketing&lt;/p&gt;
          &lt;/div&gt;

          &lt;!-- Item--&gt;
          &lt;div class=&quot;binded-item&quot; id=&quot;author2&quot;&gt;&lt;img class=&quot;d-block rounded-circle mb-3&quot; src=&quot;assets/img/avatar/33.jpg&quot; width=&quot;86&quot; alt=&quot;Darell Steward&quot;&gt;
            &lt;h4 class=&quot;mb-0&quot;&gt;Darell Steward&lt;/h4&gt;
            &lt;p class=&quot;fs-lg text-body-secondary mb-0&quot;&gt;Project Manager&lt;/p&gt;
          &lt;/div&gt;

          &lt;!-- Item--&gt;
          &lt;div class=&quot;binded-item&quot; id=&quot;author3&quot;&gt;&lt;img class=&quot;d-block rounded-circle mb-3&quot; src=&quot;assets/img/avatar/34.jpg&quot; width=&quot;86&quot; alt=&quot;Annette Black&quot;&gt;
            &lt;h4 class=&quot;mb-0&quot;&gt;Annette Black&lt;/h4&gt;
            &lt;p class=&quot;fs-lg text-body-secondary mb-0&quot;&gt;Lead Designer&lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class=&quot;col-md-8 col-lg-7&quot;&gt;

        &lt;!-- Swiper slider--&gt;
        &lt;div class=&quot;swiper&quot; data-swiper-options='{
          &quot;spaceBetween&quot;: 40,
          &quot;loop&quot;: true,
          &quot;autoHeight&quot;: true,
          &quot;bindedContent&quot;: true,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;#testimonials-bullets&quot;,
            &quot;clickable&quot;: true
          }
        }'&gt;
          &lt;div class=&quot;swiper-wrapper&quot;&gt;

            &lt;!-- Item--&gt;
            &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#author1&quot;&gt;
              &lt;p class=&quot;text-dark lead mb-0&quot;&gt;“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”&lt;/p&gt;
            &lt;/div&gt;

            &lt;!-- Item--&gt;
            &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#author2&quot;&gt;
              &lt;p class=&quot;text-dark lead mb-0&quot;&gt;“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut ante.”&lt;/p&gt;
            &lt;/div&gt;

            &lt;!-- Item--&gt;
            &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#author3&quot;&gt;
              &lt;p class=&quot;text-dark lead mb-0&quot;&gt;“Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Swiper pagination (bullets)--&gt;
&lt;div class=&quot;swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3&quot; id=&quot;testimonials-bullets&quot;&gt;&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonials slider: Style 2 -->
      <section class="card border-0 mb-4" id="testimonials-slider-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Testimonials slider: Style 2</h2>
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
              <div class="row py-4">
                <div class="col-md-9 order-md-2">
                  <div class="swiper" data-swiper-options='{
                        "spaceBetween": 40,
                        "loop": true,
                        "bindedContent": true,
                        "autoHeight": true,
                        "pagination": {
                          "el": ".testimonials-count",
                          "type": "fraction"
                        },
                        "navigation": {
                          "prevEl": "#prev-testimonial",
                          "nextEl": "#next-testimonial"
                        }
                      }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" data-swiper-binded="#item-1">
                        <div class="d-flex d-md-none pt-3 mb-3">
                          <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                          <div class="ps-3">
                            <h3 class="h5 mb-0">Lilia Bocouse</h3>
                            <p class="text-body-secondary mb-0">Head of Marketing</p>
                          </div>
                        </div>
                        <h2 class="mb-lg-4">Awesome experience with a professional team. Thank you :)</h2>
                        <p class="lead mb-0">Suspendisse mauris elit, pellentesque nec purus sed, finibus finibus ipsum. Proin posuere, metus sed porttitor pellentesque, ante magna tincidunt mi, nec fermentum dui ligula vel massa. Praesent ultrices iaculis arcu iaculis ultrices. Maecenas vitae nulla odio. In laoreet, lectus in tempus ultricies iaculis arcu. </p>
                      </div>
                      <div class="swiper-slide" data-swiper-binded="#item-2">
                        <div class="d-flex d-md-none pt-3 mb-3">
                          <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                          <div class="ps-3">
                            <h3 class="h5 mb-0">Robert Fox</h3>
                            <p class="text-body-secondary mb-0">Marketing Coordinator</p>
                          </div>
                        </div>
                        <h2 class="mb-lg-4">Thanks to your talented team for the banding we dreamed about</h2>
                        <p class="lead mb-0">Leo vitae sem eget eget at in vivamus placerat sodales tristique risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu dignissim etiamier turpis tincidunt eget placerat feugiat senectusic quisque faucibus placerat sodales vitae tempor morbi tellus pulvinar tristique in turpis. </p>
                      </div>
                      <div class="swiper-slide" data-swiper-binded="#item-3">
                        <div class="d-flex d-md-none pt-3 mb-3">
                          <i class="ai-quotes d-md-none text-primary display-3 mt-n2"></i>
                          <div class="ps-3">
                            <h3 class="h5 mb-0">Jenny Wilson</h3>
                            <p class="text-body-secondary mb-0">CEO, Co-Founder</p>
                          </div>
                        </div>
                        <h2 class="mb-lg-4">Thanks to you, we have created a unique branding that is our pride!</h2>
                        <p class="lead mb-0">Duis sapien velit, rutrum ac rutrum dapibus, auctor ut lacus. Aenean sit amet erat augue. Aenean finibus, nibh sed malesuada maximus, nisi tellus iaculis quam, eget egestas mi felis eu urna. Quisque id nisl commodo, egestas eros ac, cursus odio. Ut nec rutrum magna, vel tempor erat. Vivamus nec tempus purus. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 order-md-1 mt-n3">
                  <i class="ai-quotes d-none d-md-block text-primary ms-n2 mb-1" style="font-size: 150px;"></i>
                  <div class="binded-content h-auto d-none d-md-block">
                    <div class="binded-item h-auto active" id="item-1">
                      <h3 class="h5 mb-1">Lilia Bocouse</h3>
                      <p class="text-body-secondary mb-0">Head of Marketing</p>
                    </div>
                    <div class="binded-item h-auto" id="item-2">
                      <h3 class="h5 mb-1">Robert Fox</h3>
                      <p class="text-body-secondary mb-0">Marketing Coordinator</p>
                    </div>
                    <div class="binded-item h-auto" id="item-3">
                      <h3 class="h5 mb-1">Jenny Wilson</h3>
                      <p class="text-body-secondary mb-0">CEO, Co-Founder</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center pb-2 pb-md-0 pt-4 mt-3">
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-testimonial" aria-label="Prev">
                      <i class="ai-arrow-left"></i>
                    </button>
                    <div class="testimonials-count fw-medium flex-shrink-0 text-center" style="width: 2.5rem;"></div>
                    <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle ms-3" type="button" id="next-testimonial" aria-label="Next">
                      <i class="ai-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Testimonials slider: Style 2 --&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-9 col-lg-7 order-md-2&quot;&gt;

    &lt;!-- Swiper slider--&gt;
    &lt;div class=&quot;swiper&quot; data-swiper-options='{
      &quot;spaceBetween&quot;: 40,
      &quot;loop&quot;: true,
      &quot;bindedContent&quot;: true,
      &quot;autoHeight&quot;: true,
      &quot;pagination&quot;: {
        &quot;el&quot;: &quot;.testimonials-count&quot;,
        &quot;type&quot;: &quot;fraction&quot;
      },
      &quot;navigation&quot;: {
        &quot;prevEl&quot;: &quot;#prev-testimonial&quot;,
        &quot;nextEl&quot;: &quot;#next-testimonial&quot;
      }
    }'&gt;
      &lt;div class=&quot;swiper-wrapper&quot;&gt;

        &lt;!-- Item--&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#testimonial-1&quot;&gt;
          &lt;div class=&quot;d-flex d-md-none pt-3 mb-3&quot;&gt;&lt;i class=&quot;ai-quotes d-md-none text-primary display-3 mt-n2&quot;&gt;&lt;/i&gt;
            &lt;div class=&quot;ps-3&quot;&gt;
              &lt;h3 class=&quot;h5 mb-0&quot;&gt;Lilia Bocouse&lt;/h3&gt;
              &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;Head of Marketing&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h2 class=&quot;mb-lg-4&quot;&gt;Awesome experience with a professional team. Thank you :)&lt;/h2&gt;
          &lt;p class=&quot;lead mb-0&quot;&gt;Suspendisse mauris elit, pellentesque nec purus sed, finibus finibus ipsum. Proin posuere, metus sed porttitor pellentesque, ante magna tincidunt mi, nec fermentum dui ligula vel massa. Praesent ultrices iaculis arcu iaculis ultrices. Maecenas vitae nulla odio. In laoreet, lectus in tempus ultricies.  &lt;/p&gt;
        &lt;/div&gt;

        &lt;!-- Item--&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#testimonial-2&quot;&gt;
          &lt;div class=&quot;d-flex d-md-none pt-3 mb-3&quot;&gt;&lt;i class=&quot;ai-quotes d-md-none text-primary display-3 mt-n2&quot;&gt;&lt;/i&gt;
            &lt;div class=&quot;ps-3&quot;&gt;
              &lt;h3 class=&quot;h5 mb-0&quot;&gt;Robert Fox&lt;/h3&gt;
              &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;Marketing Coordinator&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h2 class=&quot;mb-lg-4&quot;&gt;Thanks to your talented team for the banding we dreamed about&lt;/h2&gt;
          &lt;p class=&quot;lead mb-0&quot;&gt;Leo vitae sem eget eget at in vivamus placerat sodales tristique risusiis senectusic quisque faucibus est justo egetert lobortis ultrices eu dignissim etiamier turpis tincidunt eget placerat feugiat senectusic quisque faucibus placerat sodales vitae tempor morbi tellus pulvinar tristique in turpis.  &lt;/p&gt;
        &lt;/div&gt;

        &lt;!-- Item--&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#testimonial-3&quot;&gt;
          &lt;div class=&quot;d-flex d-md-none pt-3 mb-3&quot;&gt;&lt;i class=&quot;ai-quotes d-md-none text-primary display-3 mt-n2&quot;&gt;&lt;/i&gt;
            &lt;div class=&quot;ps-3&quot;&gt;
              &lt;h3 class=&quot;h5 mb-0&quot;&gt;Jenny Wilson&lt;/h3&gt;
              &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;CEO, Co-Founder&lt;/p&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h2 class=&quot;mb-lg-4&quot;&gt;Thanks to you, we have created a unique branding that is our pride!&lt;/h2&gt;
          &lt;p class=&quot;lead mb-0&quot;&gt;Duis sapien velit, rutrum ac rutrum dapibus, auctor ut lacus. Aenean sit amet erat augue. Aenean finibus, nibh sed malesuada maximus, nisi tellus iaculis quam, eget egestas mi felis eu urna. Quisque id nisl commodo, egestas eros ac, cursus odio. Ut nec rutrum magna, vel tempor erat. Vivamus nec tempus purus.  &lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-3 offset-lg-1 order-md-1 mt-n3&quot;&gt;
    &lt;i class=&quot;ai-quotes d-none d-md-block text-primary ms-n2 mb-1&quot; style=&quot;font-size: 150px;&quot;&gt;&lt;/i&gt;

    &lt;!-- Contnetn binded to slider (on screens &gt; 768px)--&gt;
    &lt;div class=&quot;binded-content h-auto d-none d-md-block&quot;&gt;
      &lt;div class=&quot;binded-item h-auto active&quot; id=&quot;testimonial-1&quot;&gt;
        &lt;h3 class=&quot;h5 mb-1&quot;&gt;Lilia Bocouse&lt;/h3&gt;
        &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;Head of Marketing&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;binded-item h-auto&quot; id=&quot;testimonial-2&quot;&gt;
        &lt;h3 class=&quot;h5 mb-1&quot;&gt;Robert Fox&lt;/h3&gt;
        &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;Marketing Coordinator&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;binded-item h-auto&quot; id=&quot;testimonial-3&quot;&gt;
        &lt;h3 class=&quot;h5 mb-1&quot;&gt;Jenny Wilson&lt;/h3&gt;
        &lt;p class=&quot;text-body-secondary mb-0&quot;&gt;CEO, Co-Founder&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Swiper controls--&gt;
    &lt;div class=&quot;d-flex align-items-center pb-2 pb-md-0 pt-4 mt-3&quot;&gt;
      &lt;button class=&quot;btn btn-icon btn-sm btn-outline-primary rounded-circle me-3&quot; type=&quot;button&quot; id=&quot;prev-testimonial&quot; aria-label=&quot;Prev&quot;&gt;
        &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;div class=&quot;testimonials-count fw-medium flex-shrink-0 text-center&quot; style=&quot;width: 2.5rem;&quot;&gt;&lt;/div&gt;
      &lt;button class=&quot;btn btn-icon btn-sm btn-outline-primary rounded-circle ms-3&quot; type=&quot;button&quot; id=&quot;next-testimonial&quot; aria-label=&quot;Next&quot;&gt;
        &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>


<!-- Back to top button -->
<a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
  <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
  </svg>
  <i class="ai-arrow-up"></i>
</a>

@endsection
