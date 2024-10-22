@extends('layouts.base', ['title' => 'Around UI Kit | Gallery (Lightbox)'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Gallery (Lightbox)
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-image" data-scroll="data-scroll">Media: Image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-video" data-scroll="data-scroll">Media: Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-iframe" data-scroll="data-scroll">Media: Iframe (Google map)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-zoom" data-scroll="data-scroll">Zoom effect</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-thumbnails" data-scroll="data-scroll">Thumbnails</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-card" data-scroll="data-scroll">Inside card</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Gallery (Lightbox)
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-image" data-scroll="data-scroll">Media: Image</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-video" data-scroll="data-scroll">Media: Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-iframe" data-scroll="data-scroll">Media: Iframe (Google map)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-zoom" data-scroll="data-scroll">Zoom effect</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-thumbnails" data-scroll="data-scroll">Thumbnails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#gallery-card" data-scroll="data-scroll">Inside card</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Gallery (Lightbox)</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">JavaScript based lightbox component for presenting various types of media.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Media: Image -->
      <section class="card border-0 mb-4" id="gallery-image">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Media: Image</h2>
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
              <div class="gallery">
                <a class="gallery-item d-block card-hover" href="/img/portfolio/single/v1/04.jpg" style="max-width: 460px;">
                  <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Image caption</div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                  </div>
                  <img class="d-block rounded-4" src="/img/portfolio/single/v1/04.jpg" alt="Image caption">
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image gallery --&gt;
&lt;div class=&quot;gallery&quot;&gt;
  &lt;a href=&quot;assets/img/portfolio/single/v1/04.jpg&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
    &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
      &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
        Image caption
      &lt;/div&gt;
      &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/portfolio/single/v1/04.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Image caption&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Media: Video -->
      <section class="card border-0 mb-4" id="gallery-video">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Media: Video</h2>
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
              <div class="gallery" data-video="true">
                <a class="gallery-item d-block card-hover" href="https://www.youtube.com/watch?v=udMULpKcnn8" style="max-width: 500px;">
                  <div class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3">
                    <i class="ai-play-filled"></i>
                  </div>
                  <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                    <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Video caption</div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                  </div>
                  <img class="d-block rounded-4" src="/img/landing/product/video-cover.jpg" alt="Video caption">
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Video gallery --&gt;
&lt;div class=&quot;gallery&quot; data-video=&quot;true&quot;&gt;
  &lt;a href=&quot;https://www.youtube.com/watch?v=udMULpKcnn8&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
    &lt;div class=&quot;btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle z-3&quot;&gt;
      &lt;i class=&quot;ai-play-filled&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
      &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
        Video caption
      &lt;/div&gt;
      &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/landing/product/video-cover.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Video caption&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Media: Iframe (Google map) -->
      <section class="card border-0 mb-4" id="gallery-iframe">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Media: Iframe (Google map)</h2>
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
              <div class="gallery">
                <a class="gallery-item d-block card-hover" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua" data-iframe="true" style="max-width: 500px;">
                  <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Google map embed</div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                  </div>
                  <img class="d-block rounded-4" src="/img/map.jpg" alt="Google map embed">
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Iframe (Google map) --&gt;
&lt;div class=&quot;gallery&quot;&gt;
  &lt;a href=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua&quot; class=&quot;gallery-item d-block card-hover&quot; data-iframe=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
      &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
        Google map embed
      &lt;/div&gt;
      &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/map.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Google map embed&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Zoom effect -->
      <section class="card border-0 mb-4" id="gallery-zoom">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Zoom effect</h2>
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
              <div class="gallery">
                <a class="gallery-item d-block card-hover zoom-effect" href="/img/portfolio/single/v1/04.jpg" style="max-width: 460px;">
                  <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Image caption</div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                  </div>
                  <div class="zoom-effect-wrapper rounded-4">
                    <img class="zoom-effect-img" src="/img/portfolio/single/v1/04.jpg" alt="Image caption">
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image gallery with zooming hover effect --&gt;
&lt;div class=&quot;gallery&quot;&gt;
  &lt;a href=&quot;assets/img/portfolio/single/v1/04.jpg&quot; class=&quot;gallery-item d-block card-hover zoom-effect&quot;&gt;
    &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
      &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
        Image caption
      &lt;/div&gt;
      &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;zoom-effect-wrapper rounded-4&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/single/v1/04.jpg&quot; class=&quot;zoom-effect-img&quot; alt=&quot;Image caption&quot;&gt;
    &lt;/div&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Thumbnails -->
      <section class="card border-0 mb-4" id="gallery-thumbnails">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Thumbnails</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3rounded-4">
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
              <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" data-thumbnails="true">
                <div class="col">
                  <a class="gallery-item d-block card-hover" href="/img/landing/corporate/features/01.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                      <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                      <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Image #1</div>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <img class="d-block rounded-4" src="/img/landing/corporate/features/01.jpg" alt="Image #1">
                  </a>
                </div>
                <div class="col">
                  <a class="gallery-item d-block card-hover" href="/img/landing/corporate/features/02.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                      <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                      <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Image #2</div>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <img class="d-block rounded-4" src="/img/landing/corporate/features/02.jpg" alt="Image #2">
                  </a>
                </div>
                <div class="col">
                  <a class="gallery-item d-block card-hover" href="/img/landing/corporate/features/03.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0">
                      <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                      <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">Image #3</div>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <img class="d-block rounded-4" src="/img/landing/corporate/features/03.jpg" alt="Image #3">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Gallery grid with enabled thumbnails --&gt;
&lt;div class=&quot;gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4&quot; data-thumbnails=&quot;true&quot;&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a href=&quot;assets/img/landing/corporate/features/01.jpg&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
        &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
        &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
          Image #1
        &lt;/div&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;img src=&quot;assets/img/landing/corporate/features/01.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Image #1&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a href=&quot;assets/img/landing/corporate/features/02.jpg&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
        &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
        &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
          Image #2
        &lt;/div&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;img src=&quot;assets/img/landing/corporate/features/02.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Image #2&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a href=&quot;assets/img/landing/corporate/features/03.jpg&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
        &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
        &lt;div class=&quot;position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3&quot;&gt;
          Image #3
        &lt;/div&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;img src=&quot;assets/img/landing/corporate/features/03.jpg&quot; class=&quot;d-block rounded-4&quot; alt=&quot;Image #3s&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Inside card -->
      <section class="card border-0 mb-4" id="gallery-card">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Inside card</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3rounded-4">
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
              <div class="card gallery overflow-hidden rounded-5" style="max-width: 23rem;">
                <a class="gallery-item d-block card-hover" href="/img/landing/web-studio/industries/03.jpg">
                  <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                  </div>
                  <img class="card-img-top" src="/img/landing/web-studio/industries/03.jpg" alt="Card image">
                </a>
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Gallery inside card --&gt;
&lt;div class=&quot;card overflow-hidden rounded-5&quot;&gt;
  &lt;a href=&quot;assets/img/landing/web-studio/industries/03.jpg&quot; class=&quot;gallery-item d-block card-hover&quot;&gt;
    &lt;div class=&quot;d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden z-2 opacity-0&quot;&gt;
      &lt;i class=&quot;ai-zoom-in fs-2 text-white position-relative z-2&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/landing/web-studio/industries/03.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
  &lt;/a&gt;
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
