@extends('layouts.base', ['title' => 'Around UI Kit | Pagination'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Pagination
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-basic" data-scroll="data-scroll">Basic example</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-icons" data-scroll="data-scroll">With icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-sizing" data-scroll="data-scroll">Sizing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-items" data-scroll="data-scroll">Items per page selector</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Pagination
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-basic" data-scroll="data-scroll">Basic example</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-icons" data-scroll="data-scroll">With icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-sizing" data-scroll="data-scroll">Sizing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pagination-items" data-scroll="data-scroll">Items per page selector</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Pagination</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Indicate a series of related content exists across multiple pages.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/pagination/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Basic example -->
      <section class="card border-0 mb-4" id="pagination-basic">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Basic example</h2>
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
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pagination basic example --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;Prev&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link pe-none&quot;&gt;2 / 5&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active d-none d-sm-block&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        2
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;Next&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- With icons -->
      <section class="card border-0 mb-4" id="pagination-icons">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">With icons</h2>
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
              <nav class="mb-4" aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Prev page">
                      <i class="ai-arrow-left fs-xl"></i>
                    </a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next page">
                      <i class="ai-arrow-right fs-xl"></i>
                    </a>
                  </li>
                </ul>
              </nav>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="ai-arrow-left fs-xl me-2"></i>
                      Prev
                    </a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      Next
                      <i class="ai-arrow-right fs-xl ms-2"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pagination with prev / next icons only --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot; aria-label=&quot;Prev page&quot;&gt;
        &lt;/i class=&quot;ai-arrow-left fs-xl&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link pe-none&quot;&gt;2 / 5&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active d-none d-sm-block&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        2
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot; aria-label=&quot;Next page&quot;&gt;
        &lt;/i class=&quot;ai-arrow-right fs-xl&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination with prev / next icons + text --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;
        &lt;/i class=&quot;ai-arrow-left fs-xl me-2&quot;&gt;&lt;/i&gt;
        Prev
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link pe-none&quot;&gt;2 / 5&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active d-none d-sm-block&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        2
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;
        Next
        &lt;/i class=&quot;ai-arrow-right fs-xl ms-2&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Sizing -->
      <section class="card border-0 mb-4" id="pagination-sizing">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Sizing</h2>
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
              <nav class="mb-4" aria-label="Page navigation example">
                <ul class="pagination pagination-lg">
                  <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
              <nav class="mb-4" aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm">
                  <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link pe-none">2 / 5</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active d-none d-sm-block" aria-current="page">
                    <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Large size --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Normal size --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Small size --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Items per page selector -->
      <section class="card border-0 mb-4" id="pagination-items">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Items per page selector</h2>
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
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center"><span class="text-body-secondary fs-sm">Show</span>
                  <select class="form-select form-select-flush">
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="12" selected>12</option>
                    <option value="16">16</option>
                    <option value="24">24</option>
                  </select>
                </div>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <span class="page-link">2<span class="visually-hidden">(current)</span></span>
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
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pagination with items per page selector --&gt;
&lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;span class=&quot;text-body-secondary fs-sm&quot;&gt;Show&lt;/span&gt;
    &lt;select class=&quot;form-select form-select-flush&quot;&gt;
      &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
      &lt;option value=&quot;8&quot;&gt;8&lt;/option&gt;
      &lt;option value=&quot;12&quot; selected&gt;12&lt;/option&gt;
      &lt;option value=&quot;16&quot;&gt;16&lt;/option&gt;
      &lt;option value=&quot;24&quot;&gt;24&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
        &lt;span class=&quot;page-link&quot;&gt;2&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;page-link&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection