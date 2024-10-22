@extends('layouts.base', ['title' => 'Around UI Kit | Tabs'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Tabs
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-icon-dropdown" data-scroll="data-scroll">With icons and dropdown</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-pill-shape" data-scroll="data-scroll">Pill shape</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-alignment" data-scroll="data-scroll">Alignment and fill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-vertical" data-scroll="data-scroll">Vertical tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-image" data-scroll="data-scroll">Image tabs</a>
              </li>
            </ul>
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
      <li class="nav-item" id="tab-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Tabs
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-icon-dropdown" data-scroll="data-scroll">With icons and dropdown</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-pill-shape" data-scroll="data-scroll">Pill shape</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-alignment" data-scroll="data-scroll">Alignment and fill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-vertical" data-scroll="data-scroll">Vertical tabs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tabs-image" data-scroll="data-scroll">Image tabs</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Tabs</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Horizontally or vertically stacked list of items. When clicked each item switch content in the tab pane.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#tabs" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- With icons and dropdown -->
      <section class="card border-0 mb-4" id="tabs-icon-dropdown">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">With icons and dropdown</h2>
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
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#home" data-bs-toggle="tab" role="tab">
                    <i class="ai-home me-2"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#profile" data-bs-toggle="tab" role="tab">
                    <i class="ai-user me-2"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#messages" data-bs-toggle="tab" role="tab">Messages</a>
                    <a class="dropdown-item" href="#settings" data-bs-toggle="tab" role="tab">Settings</a>
                  </div>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente.</p>
                </div>
                <div class="tab-pane fade" id="messages" role="tabpanel">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu.</p>
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Nav tabs --&gt;
&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#home&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;fi-home me-2&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#profile&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;fi-user me-2&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot;&gt;Dropdown&lt;/a&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a href=&quot;#messages&quot; class=&quot;dropdown-item&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Messages&lt;/a&gt;
      &lt;a href=&quot;#settings&quot; class=&quot;dropdown-item&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Settings&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Tabs content --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot;&gt;
    &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot;&gt;
    &lt;p&gt;Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;messages&quot; role=&quot;tabpanel&quot;&gt;
    &lt;p&gt;Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;settings&quot; role=&quot;tabpanel&quot;&gt;
    &lt;p&gt;Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Pill shape -->
      <section class="card border-0 mb-4" id="tabs-pill-shape">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Pill shape</h2>
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
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link rounded-pill active" href="#" data-bs-toggle="tab" role="tab">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link rounded-pill" href="#" data-bs-toggle="tab" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link rounded-pill" href="#" data-bs-toggle="tab" role="tab">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link rounded-pill disabled" href="#" data-bs-toggle="tab" role="tab">Disabled</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pill shape tabs --&gt;
&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link rounded-pill active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      Settings
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link rounded-pill disabled&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      Disabled
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Alignment and fill -->
      <section class="card border-0 mb-4" id="tabs-alignment">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Alignment and fill</h2>
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
              <ul class="nav nav-tabs justify-content-center mb-5" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" data-bs-toggle="tab" role="tab">Disabled</a>
                </li>
              </ul>
              <ul class="nav nav-tabs justify-content-end mb-5" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" data-bs-toggle="tab" role="tab">Disabled</a>
                </li>
              </ul>
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item me-2">
                  <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">Home</a>
                </li>
                <li class="nav-item me-2">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" data-bs-toggle="tab" role="tab">Disabled</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Center aligned --&gt;
&lt;ul class=&quot;nav nav-tabs justify-content-center&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;

&lt;!-- Right aligned --&gt;
&lt;ul class=&quot;nav nav-tabs justify-content-end&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;

&lt;!-- Fill tabs --&gt;
&lt;ul class=&quot;nav nav-tabs nav-fill&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item me-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;

&lt;!-- Justified tabs --&gt;
&lt;ul class=&quot;nav nav-tabs nav-justified&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item me-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Vertical tabs -->
      <section class="card border-0 mb-4" id="tabs-vertical">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Vertical tabs</h2>
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
              <ul class="nav nav-tabs flex-column" style="max-width: 16rem;" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">
                    <i class="ai-home me-2"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
                    <i class="ai-user me-2"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
                    <i class="ai-messages me-2"></i>
                    Messages
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
                    <i class="ai-settings me-2"></i>
                    Settings
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Vertical tabs --&gt;
&lt;ul class=&quot;nav nav-tabs flex-column&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;ai-home me-2&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;ai-user me-2&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;ai-message-square me-2&quot;&gt;&lt;/i&gt;
      Messages
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;i class=&quot;ai-settings me-2&quot;&gt;&lt;/i&gt;
      Settings
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Image tabs -->
      <section class="card border-0 mb-4" id="tabs-image">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image tabs</h2>
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
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">
                    <div class="swap-image">
                      <img class="swap-to" src="/img/landing/saas-1/brands/klinos-color.svg" width="131" alt="Klinos">
                      <div class="swap-from">
                        <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/klinos-gray.svg" width="131" alt="Klinos">
                        <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/klinos-light.svg" width="131" alt="Klinos">
                      </div>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
                    <div class="swap-image">
                      <img class="swap-to" src="/img/landing/saas-1/brands/champion-color.svg" width="162" alt="Champion">
                      <div class="swap-from">
                        <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/champion-gray.svg" width="162" alt="Champion">
                        <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/champion-light.svg" width="162" alt="Champion">
                      </div>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
                    <div class="swap-image">
                      <img class="swap-to" src="/img/landing/saas-1/brands/airbnb-color.svg" width="132" alt="Airbnb">
                      <div class="swap-from">
                        <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/airbnb-gray.svg" width="132" alt="Airbnb">
                        <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/airbnb-light.svg" width="132" alt="Airbnb">
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image based nav tabs --&gt;
&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;div class=&quot;swap-image&quot;&gt;
        &lt;img src=&quot;assets/img/landing/saas-1/brands/klinos-color.svg&quot; class=&quot;swap-to&quot; width=&quot;131&quot; alt=&quot;Klinos&quot;&gt;
        &lt;div class=&quot;swap-from&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/klinos-gray.svg&quot; class=&quot;d-dark-mode-none&quot; width=&quot;131&quot; alt=&quot;Klinos&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/klinos-light.svg&quot; class=&quot;d-none d-dark-mode-block&quot; width=&quot;131&quot; alt=&quot;Klinos&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;div class=&quot;swap-image&quot;&gt;
        &lt;img src=&quot;assets/img/landing/saas-1/brands/champion-color.svg&quot; class=&quot;swap-to&quot; width=&quot;162&quot; alt=&quot;Champion&quot;&gt;
        &lt;div class=&quot;swap-from&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/champion-gray.svg&quot; class=&quot;d-dark-mode-none&quot; width=&quot;162&quot; alt=&quot;Champion&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/champion-light.svg&quot; class=&quot;d-none d-dark-mode-block&quot; width=&quot;162&quot; alt=&quot;Champion&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;
      &lt;div class=&quot;swap-image&quot;&gt;
        &lt;img src=&quot;assets/img/landing/saas-1/brands/airbnb-color.svg&quot; class=&quot;swap-to&quot; width=&quot;132&quot; alt=&quot;Airbnb&quot;&gt;
        &lt;div class=&quot;swap-from&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/airbnb-gray.svg&quot; class=&quot;d-dark-mode-none&quot; width=&quot;132&quot; alt=&quot;Airbnb&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/brands/airbnb-light.svg&quot; class=&quot;d-none d-dark-mode-block&quot; width=&quot;132&quot; alt=&quot;Airbnb&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection