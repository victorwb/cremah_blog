@extends('layouts.base', ['title' => 'Around UI Kit | Steps'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Steps
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-horizontal" data-scroll="data-scroll">Horizontal layout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-hover" data-scroll="data-scroll">Animate on hover</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-alignment" data-scroll="data-scroll">Alignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-vertical" data-scroll="data-scroll">Vertical layout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-no-connector" data-scroll="data-scroll">No connector</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-cards" data-scroll="data-scroll">Card style</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-icons" data-scroll="data-scroll">Icons instead of numbers</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Steps
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-horizontal" data-scroll="data-scroll">Horizontal layout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-hover" data-scroll="data-scroll">Animate on hover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-alignment" data-scroll="data-scroll">Alignment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-vertical" data-scroll="data-scroll">Vertical layout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-no-connector" data-scroll="data-scroll">No connector</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-cards" data-scroll="data-scroll">Card style</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#steps-icons" data-scroll="data-scroll">Icons instead of numbers</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Steps</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Component is designed to showcase numbered steps of the process or timeline.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Horizontal layout -->
      <section class="card border-0 mb-4" id="steps-horizontal">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Horizontal layout</h2>
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
              <div class="steps steps-horizontal-md">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Horizontal steps --&gt;
&lt;!-- Convert steps to horizontal layout on certain breakpoint by adding steps-horizontal-sm, steps-horizontal-md, steps-horizontal-lg, steps-horizontal-xl, steps-horizontal-xxl --&gt;
&lt;div class=&quot;steps steps-horizontal-md&quot;&gt;

  &lt;!-- Active step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;01&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Choose your course&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;02&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Learn by doing&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;03&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Get instant feedback&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Animate on hover -->
      <section class="card border-0 mb-4" id="steps-hover">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Animate on hover</h2>
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
              <div class="steps steps-horizontal-md steps-hoverable">
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Animate steps on hover --&gt;
&lt;!-- Create hoverable steps by adding "steps-hoverable" class --&gt;
&lt;div class=&quot;steps steps-horizontal-md steps-hoverable&quot;&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;01&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Choose your course&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;02&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Learn by doing&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;03&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Get instant feedback&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Alignment -->
      <section class="card border-0 mb-4" id="steps-alignment">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Alignment</h2>
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
              <div class="steps steps-horizontal-md steps-center pb-md-2 pb-lg-3 mb-5">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
              <div class="steps steps-horizontal-md steps-end">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Center aligned steps --&gt;
&lt;div class=&quot;steps steps-horizontal-md steps-center&quot;&gt;
  ...
&lt;/div&gt;

&lt;!-- Right aligned steps --&gt;
&lt;div class=&quot;steps steps-horizontal-md steps-end&quot;&gt;
  ...
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Vertical layout -->
      <section class="card border-0 mb-4" id="steps-vertical">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Vertical layout</h2>
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
              <div class="steps" style="max-width: 500px;">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Vertical steps (default) --&gt;
&lt;div class=&quot;steps&quot;&gt;

  &lt;!-- Active step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;01&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Choose your course&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;02&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Learn by doing&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;03&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Get instant feedback&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- No connector -->
      <section class="card border-0 mb-4" id="steps-no-connector">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">No connector</h2>
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
              <div class="steps steps-no-connector" style="max-width: 500px;">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner">01</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Choose your course</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">02</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Learn by doing</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner">03</div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Get instant feedback</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Steps without connector --&gt;
&lt;!-- Remove the connector between steps by adding "steps-no-connector" class --&gt;
&lt;div class=&quot;steps steps-no-connector&quot;&gt;

  &lt;!-- Active step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;01&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Choose your course&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;02&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Learn by doing&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner&quot;&gt;03&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Get instant feedback&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Card style -->
      <section class="card border-0 mb-4" id="steps-cards">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Card style</h2>
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
              <div style="max-width: 500px;">
                <div class="position-relative d-flex justify-content-end mb-3 py-1">
                  <div class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">01</div>
                  <div class="card ps-3" style="width: calc(100% - 1.75rem);">
                    <div class="card-body ps-4">
                      <h3 class="h5 card-title pb-2 mb-1">Formulation of the problem</h3>
                      <p class="card-text">Find aute irure dolor in reprehenderi voluptate velit esse cillum dolore eu fugiat nulla pariatur luctus.</p>
                    </div>
                  </div>
                </div>
                <div class="position-relative d-flex justify-content-end mt-3 py-1">
                  <div class="btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none">02</div>
                  <div class="card border-0 bg-secondary ps-3" style="width: calc(100% - 1.75rem);">
                    <div class="card-body ps-4">
                      <h3 class="h5 card-title pb-2 mb-1">Assessment of the current state</h3>
                      <p class="card-text">Risus quam quis at euismod vitae dui elementu eu in diam malesuada mattis ut urna integer erat nibh.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Card like steps --&gt;
&lt;!-- Card with border (default) example --&gt;
&lt;div class=&quot;position-relative d-flex justify-content-end my-3 py-1&quot;&gt;
  &lt;div class=&quot;btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none&quot;&gt;01&lt;/div&gt;
  &lt;div class=&quot;card ps-3&quot; style=&quot;width: calc(100% - 1.75rem);&quot;&gt;
    &lt;div class=&quot;card-body ps-4&quot;&gt;
      &lt;h3 class=&quot;h5 card-title pb-2 mb-1&quot;&gt;Formulation of the problem&lt;/h3&gt;
      &lt;p class=&quot;card-text&quot;&gt;Find aute irure dolor in reprehenderi voluptate velit esse cillum dolore eu fugiat nulla pariatur luctus.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card with gray background example --&gt;
&lt;div class=&quot;position-relative d-flex justify-content-end my-3 py-1&quot;&gt;
  &lt;div class=&quot;btn btn-lg btn-icon btn-primary fs-xl fw-bold rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 pe-none&quot;&gt;02&lt;/div&gt;
  &lt;div class=&quot;card border-0 bg-secondary ps-3&quot; style=&quot;width: calc(100% - 1.75rem);&quot;&gt;
    &lt;div class=&quot;card-body ps-4&quot;&gt;
      &lt;h3 class=&quot;h5 card-title pb-2 mb-1&quot;&gt;Assessment of the current state&lt;/h3&gt;
      &lt;p class=&quot;card-text&quot;&gt;Risus quam quis at euismod vitae dui elementu eu in diam malesuada mattis ut urna integer erat nibh.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Icons instead of numbers -->
      <section class="card border-0 mb-4" id="steps-icons">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Icons instead of numbers</h2>
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
              <div class="steps" style="max-width: 500px;">
                <div class="step active">
                  <div class="step-number">
                    <div class="step-number-inner fs-4">
                      <i class="ai-search"></i>
                    </div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Research &amp; Analysis</h5>
                    <p class="mb-0">Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner fs-4">
                      <i class="ai-layout-side"></i>
                    </div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Prototyping</h5>
                    <p class="mb-0">Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-number">
                    <div class="step-number-inner fs-4">
                      <i class="ai-monitor"></i>
                    </div>
                  </div>
                  <div class="step-body">
                    <h5 class="pb-1 mb-2">Pixel-perfect UI Design</h5>
                    <p class="mb-0">Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Steps with icons instead of numbers --&gt;
&lt;div class=&quot;steps&quot;&gt;

  &lt;!-- Active step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner fs-4&quot;&gt;
        &lt;i class=&quot;ai-search&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Research &amp;amp; Analysis&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Nulla faucibus mauris pellentesque blandit faucibus non. Sit ut et at suspendisse gravida hendrerit.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner fs-4&quot;&gt;
        &lt;i class=&quot;ai-layout-side&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Prototyping&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Tristique sed pharetra feugiat tempor sagittis. Ultricies eu bibendum adipiscing lacinia.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Step --&gt;
  &lt;div class=&quot;step active&quot;&gt;
    &lt;div class=&quot;step-number&quot;&gt;
      &lt;div class=&quot;step-number-inner fs-4&quot;&gt;
        &lt;i class=&quot;ai-monitor&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;step-body&quot;&gt;
      &lt;h5 class=&quot;pb-1 mb-2&quot;&gt;Pixel-perfect UI Design&lt;/h5&gt;
      &lt;p class=&quot;mb-0&quot;&gt;Duis euismod enim, facilisis risus tellus pharetra lectus diam neque. Nec ultrices mi faucibus est.&lt;/p&gt;
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