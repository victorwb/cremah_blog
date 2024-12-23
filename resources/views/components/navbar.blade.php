@extends('layouts.base', ['title' => 'Around UI Kit | Navbar'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Navbar
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-content" data-scroll="data-scroll">Supported content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-colors" data-scroll="data-scroll">Color schemes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-offcanvas" data-scroll="data-scroll">Responsive offcanvas menu</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Navbar
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-content" data-scroll="data-scroll">Supported content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-colors" data-scroll="data-scroll">Color schemes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#navbar-offcanvas" data-scroll="data-scroll">Responsive offcanvas menu</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Navbar</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Responsive navigation header that includes support for branding, navigation, and more.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/navbar/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Supported content -->
      <section class="pb-lg-2 mb-5" id="navbar-content">
        <h2 class="h4 mb-3">Supported content</h2>
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
        <div class="tab-content pt-4 mt-2">
          <div class="tab-pane fade show active" id="preview1" role="tabpanel">
            <header class="navbar navbar-expand-lg bg-light rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse1">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action link</a></li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action link</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Yet another link</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <a class="btn btn-primary btn-sm fs-sm ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-user me-2 ms-n1"></i>
                  Sign up
                </a>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-light rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto">
                <input class="form-check-input" type="checkbox" id="theme-mode1">
                <label class="form-check-label" for="theme-mode1">
                  <i class="ai-sun fs-lg"></i>
                </label>
                <label class="form-check-label" for="theme-mode1">
                  <i class="ai-moon fs-lg"></i>
                </label>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="btn btn-outline-primary btn-sm fs-sm order-lg-3 d-none d-lg-inline-flex" href="#">
                <i class="ai-login me-2 ms-n1"></i>
                Sign in
              </a>
              <nav class="collapse navbar-collapse" id="navbarCollapse2">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                </ul>
                <a class="btn btn-outline-primary btn-sm fs-sm d-lg-none ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-login me-2 ms-n1"></i>
                  Sign in
                </a>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-light rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <div class="nav align-items-center order-lg-2 ms-auto">
                <a class="nav-link fs-4 p-2 mx-sm-1" href="#" aria-label="Search">
                  <i class="ai-search"></i>
                </a>
                <a class="nav-link fs-4 p-2 mx-sm-1" href="#" aria-label="Account">
                  <i class="ai-user"></i>
                </a>
                <a class="nav-link position-relative fs-4 p-2" href="#" aria-label="Cart">
                  <i class="ai-cart"></i>
                  <span class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1" style="padding: .25rem .375rem;">3</span>
                </a>
                <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse3" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <nav class="collapse navbar-collapse" id="navbarCollapse3">
                <ul class="navbar-nav">
                  <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
                </ul>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-light rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <div class="d-flex align-items-center order-lg-2 ms-auto">
                <a class="d-flex align-items-center text-decoration-none" href="tel:4055550128">
                  <i class="ai-phone fs-3"></i>
                  <div class="text-nowrap ps-2 d-none d-lg-block">
                    <h6 class="fs-sm lh-1 mb-0">Call&nbsp;us</h6>
                    <span class="text-body fs-xs">(405)&nbsp;555&#8209;0128</span>
                  </div>
                </a>
                <a class="d-flex align-items-center text-decoration-none ms-4" href="mailto:hello@example.com">
                  <i class="ai-messages fs-3"></i>
                  <div class="text-nowrap ps-2 d-none d-lg-block">
                    <h6 class="fs-sm lh-1 mb-0">Chat with us</h6>
                    <span class="text-body fs-xs">hello@example.com</span>
                  </div>
                </a>
              </div>
              <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse4" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse4">
                <ul class="navbar-nav">
                  <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-light rounded-3 px-3">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <div class="dropdown nav d-block order-lg-2 ms-auto">
                <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="border rounded-circle" src="/img/avatar/01.jpg" width="48" alt="Isabella Bocouse">
                  <div class="d-none d-sm-block ps-2">
                    <div class="fs-xs lh-1 opacity-60">Hello,</div>
                    <div class="fs-sm dropdown-toggle">Isabella</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end my-1">
                  <h6 class="dropdown-header fs-xs fw-medium text-body-secondary text-uppercase pb-1">Account</h6>
                  <a class="dropdown-item" href="#">
                    <i class="ai-user-check fs-lg opacity-70 me-2"></i>
                    Overview
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="ai-settings fs-lg opacity-70 me-2"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="ai-wallet fs-base opacity-70 me-2 mt-n1"></i>
                    Billing
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header fs-xs fw-medium text-body-secondary text-uppercase pb-1">Dashboard</h6>
                  <a class="dropdown-item" href="#">
                    <i class="ai-cart fs-lg opacity-70 me-2"></i>
                    Orders
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="ai-activity fs-lg opacity-70 me-2"></i>
                    Earnings
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="ai-messages fs-lg opacity-70 me-2"></i>
                    Chat
                    <span class="badge bg-danger ms-auto">4</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="ai-heart fs-lg opacity-70 me-2"></i>
                    Favorites
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="ai-logout fs-lg opacity-70 me-2"></i>
                    Sign out
                  </a>
                </div>
              </div>
              <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse5" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse5">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                  </li>
                </ul>
              </nav>
            </header>
          </div>
          <div class="tab-pane fade" id="html1" role="tabpanel">
            <pre class="line-numbers"><code class="lang-html">&lt;!-- Change to .container-fluid for full width navbar --&gt;

&lt;!-- Menu with dropdown + Button --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse1&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse1&quot;&gt;
      &lt;ul class=&quot;navbar-nav me-auto&quot;&gt;
        &lt;li class=&quot;nav-item active&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Link&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item dropdown&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
          &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown&quot;&gt;
              &lt;a href=&quot;#&quot; class=&quot;dropdown-item dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
              &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown-divider&quot;&gt; &lt;/li&gt;
            &lt;li href=&quot;#&quot;&gt;&lt;a class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-sm fs-sm ms-3 mb-4 mb-lg-0&quot;&gt;
        &lt;i class=&quot;ai-user me-2 ms-n1&quot;&gt;&lt;/i&gt;
        Sign up
      &lt;/a&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Menu + Theme mode switch + Button --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;div class=&quot;form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto&quot; data-bs-toggle=&quot;mode&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;theme-mode&quot;&gt;
      &lt;label for=&quot;theme-mode&quot; class=&quot;form-check-label&quot;&gt;
        &lt;i class=&quot;ai-sun fs-lg&quot;&gt;&lt;/i&gt;
      &lt;/label&gt;
      &lt;label for=&quot;theme-mode&quot; class=&quot;form-check-label&quot;&gt;
        &lt;i class=&quot;ai-moon fs-lg&quot;&gt;&lt;/i&gt;
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse2&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary btn-sm fs-sm order-lg-3 d-none d-lg-inline-flex&quot;&gt;
      &lt;i class=&quot;ai-login me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Sign in
    &lt;/a&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse2&quot;&gt;
      &lt;ul class=&quot;navbar-nav&quot;&gt;
        &lt;li class=&quot;nav-item active&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Services&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;About&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary btn-sm fs-sm d-lg-none ms-3 mb-4 mb-lg-0&quot;&gt;
        &lt;i class=&quot;ai-login me-2 ms-n1&quot;&gt;&lt;/i&gt;
        Sign in
      &lt;/a&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Menu + Search + Account + Shopping cart --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;div class=&quot;nav align-items-center order-lg-2 ms-auto&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link fs-4 p-2 mx-sm-1&quot; aria-label=&quot;Search&quot;&gt;
        &lt;i class=&quot;ai-search&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link fs-4 p-2 mx-sm-1&quot; aria-label=&quot;Account&quot;&gt;
        &lt;i class=&quot;ai-user&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link position-relative fs-4 p-2&quot; aria-label=&quot;Cart&quot;&gt;
        &lt;i class=&quot;ai-cart&quot;&gt;&lt;/i&gt;
        &lt;span class=&quot;badge bg-primary fs-xs position-absolute end-0 top-0 me-n1&quot; style=&quot;padding: .25rem .375rem;&quot;&gt;3&lt;/span&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;navbar-toggler ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse3&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse3&quot;&gt;
      &lt;ul class=&quot;navbar-nav&quot;&gt;
        &lt;li class=&quot;nav-item active&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Services&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;About&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Contacts&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Menu + Contact (Phone / Email) links --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;div class=&quot;d-flex align-items-center order-lg-2 ms-auto&quot;&gt;
      &lt;a href=&quot;tel:4055550128&quot; class=&quot;d-flex align-items-center text-decoration-none&quot;&gt;
        &lt;i class=&quot;ai-phone fs-3&quot;&gt;&lt;/i&gt;
        &lt;div class=&quot;text-nowrap ps-2 d-none d-lg-block&quot;&gt;
          &lt;h6 class=&quot;fs-sm lh-1 mb-0&quot;&gt;Call&amp;nbsp;us&lt;/h6&gt;
          &lt;span class=&quot;text-body fs-xs&quot;&gt;(405)&amp;nbsp;555&amp;#8209;0128&lt;/span&gt;
        &lt;/div&gt;
      &lt;/a&gt;
      &lt;a href=&quot;mailto:hello@example.com&quot; class=&quot;d-flex align-items-center text-decoration-none ms-4&quot;&gt;
        &lt;i class=&quot;ai-messages fs-3&quot;&gt;&lt;/i&gt;
        &lt;div class=&quot;text-nowrap ps-2 d-none d-lg-block&quot;&gt;
          &lt;h6 class=&quot;fs-sm lh-1 mb-0&quot;&gt;Chat with us&lt;/h6&gt;
          &lt;span class=&quot;text-body fs-xs&quot;&gt;hello@example.com&lt;/span&gt;
        &lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse4&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse4&quot;&gt;
      &lt;ul class=&quot;navbar-nav&quot;&gt;
        &lt;li class=&quot;nav-item active&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Services&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;About&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- User logged in state. User account dropdown --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;div class=&quot;dropdown nav d-block order-lg-2 ms-auto&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex align-items-center p-0&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        &lt;img src=&quot;assets/img/avatar/01.jpg&quot; class=&quot;border rounded-circle&quot; width=&quot;48&quot; alt=&quot;Isabella Bocouse&quot;&gt;
        &lt;div class=&quot;d-none d-sm-block ps-2&quot;&gt;
          &lt;div class=&quot;fs-xs lh-1 opacity-60&quot;&gt;Hello,&lt;/div&gt;
          &lt;div class=&quot;fs-sm dropdown-toggle&quot;&gt;Isabella&lt;/div&gt;
        &lt;/div&gt;
      &lt;/a&gt;
      &lt;div class=&quot;dropdown-menu dropdown-menu-end my-1&quot;&gt;
        &lt;h6 class=&quot;dropdown-header fs-xs fw-medium text-body-secondary text-uppercase pb-1&quot;&gt;Account&lt;/h6&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-user-check fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Overview
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-settings fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Settings
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-wallet fs-base opacity-70 me-2 mt-n1&quot;&gt;&lt;/i&gt;
          Billing
        &lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;h6 class=&quot;dropdown-header fs-xs fw-medium text-body-secondary text-uppercase pb-1&quot;&gt;Dashboard&lt;/h6&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-cart fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Orders
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-activity fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Earnings
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item d-flex align-items-center&quot;&gt;
          &lt;i class=&quot;ai-messages fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Chat
          &lt;span class=&quot;badge bg-danger ms-auto&quot;&gt;4&lt;/span&gt;
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-heart fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Favorites
        &lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
          &lt;i class=&quot;ai-logout fs-lg opacity-70 me-2&quot;&gt;&lt;/i&gt;
          Sign out
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler ms-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarCollapse5&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;nav class=&quot;collapse navbar-collapse&quot; id=&quot;navbarCollapse5&quot;&gt;
      &lt;ul class=&quot;navbar-nav&quot;&gt;
        &lt;li class=&quot;nav-item active&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Services&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;About&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Contacts&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/nav&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
          </div>
        </div>
      </section>


      <!-- Color schemes -->
      <section class="pb-lg-2 mb-5" id="navbar-colors">
        <h2 class="h4 mb-3">Color schemes</h2>
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
        <div class="tab-content pt-4 mt-2">
          <div class="tab-pane fade show active" id="preview2" role="tabpanel">
            <header class="navbar navbar-expand-lg navbar-dark bg-dark rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse6" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse6">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Action link</a></li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="#">Action link</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Yet another link</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <a class="btn btn-primary btn-sm fs-sm ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-user me-2 ms-n1"></i>
                  Sign up
                </a>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-primary bg-opacity-10 rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse7" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse7">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action link</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action link</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Yet another link</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li class="dropdown-divider"> </li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <a class="btn btn-primary btn-sm fs-sm ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-user me-2 ms-n1"></i>
                  Sign up
                </a>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-warning bg-opacity-10 rounded-3 px-3 mb-4">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse8" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse8">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action link</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action link</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Yet another link</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <a class="btn btn-warning btn-sm fs-sm ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-user me-2 ms-n1"></i>
                  Sign up
                </a>
              </nav>
            </header>
            <header class="navbar navbar-expand-lg bg-info bg-opacity-10 rounded-3 px-3">
              <a class="navbar-brand" href="#">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                Around
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse9" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <nav class="collapse navbar-collapse" id="navbarCollapse9">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action link</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action link</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Yet another link</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <a class="btn btn-info btn-sm fs-sm ms-3 mb-4 mb-lg-0" href="#">
                  <i class="ai-user me-2 ms-n1"></i>
                  Sign up
                </a>
              </nav>
            </header>
          </div>
          <div class="tab-pane fade" id="html2" role="tabpanel">
            <pre class="line-numbers"><code class="lang-html">&lt;!-- Dark navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg navbar-dark bg-dark&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Faded primary navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-primary bg-opacity-10&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Faded warning navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-warning bg-opacity-10&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/header&gt;

&lt;!-- Faded info navbar --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-info bg-opacity-10&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
          </div>
        </div>
      </section>


      <!-- Responsive offcanvas menu -->
      <section class="pb-2 mb-4" id="navbar-offcanvas">
        <h2 class="h4 mb-3">Responsive offcanvas menu</h2>
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
        <div class="tab-content pt-4 mt-2">
          <div class="tab-pane fade show active" id="preview3" role="tabpanel">
            <iframe class="w-100 shadow border border-light rounded-3" src="navbar-offcanvas" height="512" style="max-width: 375px;" title="Navar with offcanvas menu"></iframe>
          </div>
          <div class="tab-pane fade" id="html3" role="tabpanel">
            <pre class="line-numbers"><code class="lang-html">&lt;!-- Navbar with offcanvas menu on mobile --&gt;
&lt;header class=&quot;header navbar navbar-expand-lg fixed-top bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand pe-xl-2 me-4&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler me-2&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#primaryMenu&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;primaryMenu&quot;&gt;
      &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;mt-1 mb-0&quot;&gt;Menu&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;offcanvas-body pt-0&quot;&gt;
        &lt;ul class=&quot;navbar-nav p-0&quot;&gt;
          &lt;li class=&quot;nav-item active&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Link&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item dropdown&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot;&gt;Dropdown&lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown-item dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Dropdown&lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection