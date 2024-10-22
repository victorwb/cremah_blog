@extends('layouts.base', ['title' => 'Around UI Kit | Countdown'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Countdown
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-basic" data-scroll="data-scroll">Basic example</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-no-years" data-scroll="data-scroll">Display no years</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-sizing" data-scroll="data-scroll">Sizing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-colors" data-scroll="data-scroll">Colors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-cards" data-scroll="data-scroll">Cards example</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Countdown
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-basic" data-scroll="data-scroll">Basic example</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-no-years" data-scroll="data-scroll">Display no years</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-sizing" data-scroll="data-scroll">Sizing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-colors" data-scroll="data-scroll">Colors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#countdown-cards" data-scroll="data-scroll">Cards example</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Countdown</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Timer that counts down in seconds, minutes, hours, days and years to any date.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <div class="mb-4 pb-2">
        <h6 class="fs-sm mb-2">Data attributes API</h6>
        <p class="fs-sm mb-1">Around added extra layer of data attribute to access the date option of the plugin right from the HTML document:</p>
        <code>data-countdown-date='08/13/2023 14:53:00 UTC-08:00'</code>
        <span class="fs-sm"> - UTC offset can be positive (+) or negative (-).</span>
        <p class="fs-sm mb-1">More on <strong>UTC offsets</strong> by countries <a href="https://en.wikipedia.org/wiki/Time_zone#List_of_UTC_offsets" target="_blank" rel="noopener">read here</a>.</p>
        <p class="fs-sm pt-2">Additional options and events can be passed to pligin init function in <strong>src/js/components/countdown.js</strong></p>
        <h6 class="pt-1 fs-sm mb-2">For more features / options visit plugin website:</h6>
        <a class="fs-sm" href="https://github.com/BrooonS/timezz#readme" target="_blank" rel="noopener">https://github.com/BrooonS/timezz#readme</a>
      </div>


      <!-- Basic example -->
      <section class="card border-0 mb-4" id="countdown-basic">
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
              <div class="countdown d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h4 mb-0" data-years></div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-days></div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-hours></div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-minutes></div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-seconds></div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Countdown example --&gt;
&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-years&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Display no years -->
      <section class="card border-0 mb-4" id="countdown-no-years">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Display no years</h2>
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
              <div class="countdown d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h4 mb-0" data-days></div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-hours></div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-minutes></div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-seconds></div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Countdown example without years label --&gt;
&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Sizing -->
      <section class="card border-0 mb-4" id="countdown-sizing">
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
              <div class="countdown d-flex pb-2 mb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h1 mb-0" data-years></div>
                  <span class="fs-lg">years</span>
                </div>
                <span class="blinking fs-3 mx-2">:</span>
                <div class="text-center">
                  <div class="h1 mb-0" data-days></div>
                  <span class="fs-lg">days</span>
                </div>
                <span class="blinking fs-3 mx-2">:</span>
                <div class="text-center">
                  <div class="h1 mb-0" data-hours></div>
                  <span class="fs-lg">hours</span>
                </div>
                <span class="blinking fs-3 mx-2">:</span>
                <div class="text-center">
                  <div class="h1 mb-0" data-minutes></div>
                  <span class="fs-lg">mins</span>
                </div>
                <span class="blinking fs-3 mx-2">:</span>
                <div class="text-center">
                  <div class="h1 mb-0" data-seconds></div>
                  <span class="fs-lg">secs</span>
                </div>
              </div>
              <div class="countdown d-flex pb-2 mb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h2 mb-0" data-years></div>
                  <span>years</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h2 mb-0" data-days></div>
                  <span>days</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h2 mb-0" data-hours></div>
                  <span>hours</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h2 mb-0" data-minutes></div>
                  <span>mins</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h2 mb-0" data-seconds></div>
                  <span>secs</span>
                </div>
              </div>
              <div class="countdown d-flex pb-1 mb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h3 mb-0" data-years></div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h3 mb-0" data-days></div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h3 mb-0" data-hours></div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h3 mb-0" data-minutes></div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking fs-4 mx-2">:</span>
                <div class="text-center">
                  <div class="h3 mb-0" data-seconds></div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
              <div class="countdown d-flex mb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h4 mb-0" data-years></div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-days></div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-hours></div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-minutes></div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="h4 mb-0" data-seconds></div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
              <div class="countdown d-flex mb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h5 mb-0" data-years></div>
                  <span class="fs-xs">years</span>
                </div>
                <span class="blinking fs-lg mx-2">:</span>
                <div class="text-center">
                  <div class="h5 mb-0" data-days></div>
                  <span class="fs-xs">days</span>
                </div>
                <span class="blinking fs-lg mx-2">:</span>
                <div class="text-center">
                  <div class="h5 mb-0" data-hours></div>
                  <span class="fs-xs">hours</span>
                </div>
                <span class="blinking fs-lg mx-2">:</span>
                <div class="text-center">
                  <div class="h5 mb-0" data-minutes></div>
                  <span class="fs-xs">mins</span>
                </div>
                <span class="blinking fs-lg mx-2">:</span>
                <div class="text-center">
                  <div class="h5 mb-0" data-seconds></div>
                  <span class="fs-xs">secs</span>
                </div>
              </div>
              <div class="countdown d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="h6 mb-0" data-years></div>
                  <span class="fs-xs">years</span>
                </div>
                <span class="blinking mx-2">:</span>
                <div class="text-center">
                  <div class="h6 mb-0" data-days></div>
                  <span class="fs-xs">days</span>
                </div>
                <span class="blinking mx-2">:</span>
                <div class="text-center">
                  <div class="h6 mb-0" data-hours></div>
                  <span class="fs-xs">hours</span>
                </div>
                <span class="blinking mx-2">:</span>
                <div class="text-center">
                  <div class="h6 mb-0" data-minutes></div>
                  <span class="fs-xs">mins</span>
                </div>
                <span class="blinking mx-2">:</span>
                <div class="text-center">
                  <div class="h6 mb-0" data-seconds></div>
                  <span class="fs-xs">secs</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Sizing --&gt;
&lt;!-- Apply heading classes like .h1, .h2, .h3 ..., .display-1, .display-2, .display-3 ... to numbers and body size classes like fs-xs, fs-sm, fs-lg... to labels. --&gt;
&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h1 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-lg&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-3 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h2 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-4 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h3 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-4 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h5 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-xs&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-lg mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h6 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-xs&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Colors -->
      <section class="card border-0 mb-4" id="countdown-colors">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Colors</h2>
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
              <div class="countdown d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center">
                  <div class="text-warning h4 mb-0" data-years></div>
                  <span class="text-warning fs-sm opacity-80">years</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="text-primary h4 mb-0" data-days></div>
                  <span class="text-primary fs-sm opacity-80">days</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="text-info h4 mb-0" data-hours></div>
                  <span class="text-info fs-sm opacity-80">hours</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="text-danger h4 mb-0" data-minutes></div>
                  <span class="text-danger fs-sm opacity-80">mins</span>
                </div>
                <span class="blinking fs-xl mx-2">:</span>
                <div class="text-center">
                  <div class="text-success h4 mb-0" data-seconds></div>
                  <span class="text-success fs-sm opacity-80">secs</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Different colors. Can also be any custom color --&gt;
&lt;div class=&quot;countdown d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;

  &lt;!-- Warning --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;text-warning h4 mb-0&quot; data-years&gt;&lt;/div&gt;
    &lt;span class=&quot;text-warning fs-sm opacity-80&quot;&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Primary --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;text-primary h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;text-primary fs-sm opacity-80&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Info --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;text-info h4 mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;text-info fs-sm opacity-80&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Danger --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;text-danger h4 mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;text-danger fs-sm opacity-80&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Success --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;text-success h4 mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;text-success fs-sm opacity-80&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Cards example -->
      <section class="card border-0 mb-4" id="countdown-cards">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Cards example</h2>
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
              <div class="countdown d-flex flex-wrap pb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center mb-2">
                  <div class="border rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-years></div>
                  </div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="border rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-days></div>
                  </div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="border rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-hours></div>
                  </div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="border rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-minutes></div>
                  </div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="border rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-seconds></div>
                  </div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
              <div class="bg-gray p-3 mb-4">
                <div class="countdown d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00">
                  <div class="text-center mb-2">
                    <div class="bg-light rounded-1 p-2">
                      <div class="h3 fw-normal mb-0 mx-1" data-years></div>
                    </div>
                    <span class="text-nav fs-sm">years</span>
                  </div>
                  <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                  <div class="text-center mb-2">
                    <div class="bg-light rounded-1 p-2">
                      <div class="h3 fw-normal mb-0 mx-1" data-days></div>
                    </div>
                    <span class="text-nav fs-sm">days</span>
                  </div>
                  <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                  <div class="text-center mb-2">
                    <div class="bg-light rounded-1 p-2">
                      <div class="h3 fw-normal mb-0 mx-1" data-hours></div>
                    </div>
                    <span class="text-nav fs-sm">hours</span>
                  </div>
                  <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                  <div class="text-center mb-2">
                    <div class="bg-light rounded-1 p-2">
                      <div class="h3 fw-normal mb-0 mx-1" data-minutes></div>
                    </div>
                    <span class="text-nav fs-sm">mins</span>
                  </div>
                  <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                  <div class="text-center mb-2">
                    <div class="bg-light rounded-1 p-2">
                      <div class="h3 fw-normal mb-0 mx-1" data-seconds></div>
                    </div>
                    <span class="text-nav fs-sm">secs</span>
                  </div>
                </div>
              </div>
              <div class="countdown d-flex flex-wrap pt-2 pb-4" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center mb-2">
                  <div class="bg-secondary rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-years></div>
                  </div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-secondary rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-days></div>
                  </div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-secondary rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-hours></div>
                  </div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-secondary rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-minutes></div>
                  </div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-secondary rounded-1 p-2">
                    <div class="h3 fw-normal mb-0 mx-1" data-seconds></div>
                  </div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
              <div class="countdown d-flex flex-wrap pt-2" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center mb-2">
                  <div class="bg-warning bg-opacity-10 rounded-1 p-2">
                    <div class="text-warning h3 fw-normal mb-0 mx-1" data-years></div>
                  </div>
                  <span class="text-warning fs-sm opacity-80">years</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-primary bg-opacity-10 rounded-1 p-2">
                    <div class="text-primary h3 fw-normal mb-0 mx-1" data-days></div>
                  </div>
                  <span class="text-primary fs-sm opacity-80">days</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-info bg-opacity-10 rounded-1 p-2">
                    <div class="text-info h3 fw-normal mb-0 mx-1" data-hours></div>
                  </div>
                  <span class="text-info fs-sm opacity-80">hours</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-danger bg-opacity-10 rounded-1 p-2">
                    <div class="text-danger h3 fw-normal mb-0 mx-1" data-minutes></div>
                  </div>
                  <span class="text-danger fs-sm opacity-80">mins</span>
                </div>
                <span class="blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-success bg-opacity-10 rounded-1 p-2">
                    <div class="text-success h3 fw-normal mb-0 mx-1" data-seconds></div>
                  </div>
                  <span class="text-success fs-sm opacity-80">secs</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Cards example --&gt;
&lt;!-- Style 1 (Border) --&gt;
&lt;div class=&quot;countdown d-flex flex-wrap&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center mb-2&quot;&gt;
    &lt;div class=&quot;border rounded-1 p-2&quot; data-days&gt;&lt;/div&gt;
      &lt;div class=&quot;h3 fw-normal mb-0 mx-1&quot; data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking text-body-secondary fs-2 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;!-- Style 2 (Light background) --&gt;
&lt;div class=&quot;countdown d-flex flex-wrap&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center mb-2&quot;&gt;
    &lt;div class=&quot;bg-light rounded-1 p-2&quot; data-days&gt;&lt;/div&gt;
      &lt;div class=&quot;h3 fw-normal mb-0 mx-1&quot; data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;text-nav fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking text-body-secondary fs-2 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;!-- Style 3 (Gray (secondary) background) --&gt;
&lt;div class=&quot;countdown d-flex flex-wrap&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center mb-2&quot;&gt;
    &lt;div class=&quot;bg-secondary rounded-1 p-2&quot; data-days&gt;&lt;/div&gt;
      &lt;div class=&quot;h3 fw-normal mb-0 mx-1&quot; data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking text-body-secondary fs-2 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;

&lt;!-- Style 4 (Multicolor) --&gt;
&lt;div class=&quot;countdown d-flex flex-wrap&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center mb-2&quot;&gt;
    &lt;div class=&quot;bg-primary bg-opacity-10 rounded-1 p-2&quot; data-days&gt;&lt;/div&gt;
      &lt;div class=&quot;text-primary h3 fw-normal mb-0 mx-1&quot; data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;text-primary fs-sm opacity-80&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;blinking text-body-secondary fs-2 mx-2&quot;&gt;:&lt;/span&gt;
  ...
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection
