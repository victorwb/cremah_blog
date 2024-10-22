@extends('layouts.base', ['title' => 'Around UI Kit | Carousel (Slider)'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Carousel (Slider)
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-navigation" data-scroll="data-scroll">Navigation (Prev / next buttons)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-pagination" data-scroll="data-scroll">Pagination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-multiple-slides" data-scroll="data-scroll">Multiple slides (Responsive) + Controls and pagination outside</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-fade" data-scroll="data-scroll">Fade transition</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-thumbnails" data-scroll="data-scroll">Thumbnails</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-link-to-content" data-scroll="data-scroll">Link slides to outside content</a>
              </li>
            </ul>
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
        <a class="nav-link px-0 py-2" href="cards-hover#cards-hover-m">
          <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
          Cards: Hover effects
        </a>
      </li>
      <li class="nav-item" id="carousel-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Carousel (Slider)
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-navigation" data-scroll="data-scroll">Navigation (Prev / next buttons)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-pagination" data-scroll="data-scroll">Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-multiple-slides" data-scroll="data-scroll">Multiple slides (Responsive) + Controls and pagination outside</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-fade" data-scroll="data-scroll">Fade transition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-thumbnails" data-scroll="data-scroll">Thumbnails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#carousel-link-to-content" data-scroll="data-scroll">Link slides to outside content</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Carousel (Slider)</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">A slideshow component for cycling through elements (images or slides with any content) like a carousel.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Navigation (Prev / next buttons) -->
      <section class="card border-0 mb-4" id="carousel-navigation">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Navigation (Prev / next buttons)</h2>
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
              <div class="d-flex flex-wrap align-items-center">
                <div class="d-flex my-2 me-4">
                  <button class="btn btn-prev btn-icon btn-xl btn-outline-primary rounded-circle me-2" type="button" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                  </button>
                  <button class="btn btn-next btn-icon btn-xl btn-outline-primary rounded-circle ms-2" type="button" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                  </button>
                </div>
                <div class="d-flex my-2 me-4">
                  <button class="btn btn-prev btn-icon btn-lg btn-outline-primary rounded-circle me-2" type="button" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                  </button>
                  <button class="btn btn-next btn-icon btn-lg btn-outline-primary rounded-circle ms-2" type="button" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                  </button>
                </div>
                <div class="d-flex my-2 me-4">
                  <button class="btn btn-prev btn-icon btn-outline-primary rounded-circle me-2" type="button" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                  </button>
                  <button class="btn btn-next btn-icon btn-outline-primary rounded-circle ms-2" type="button" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                  </button>
                </div>
                <div class="d-flex my-2">
                  <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-2" type="button" aria-label="Prev">
                    <i class="ai-arrow-left"></i>
                  </button>
                  <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-2" type="button" aria-label="Next">
                    <i class="ai-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Extra large prev/next buttons --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-xl btn-outline-primary rounded-circle me-2&quot; aria-label=&quot;Prev&quot;&gt;
  &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-xl btn-outline-primary rounded-circle ms-2&quot; aria-label=&quot;Next&quot;&gt;
  &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Large prev/next buttons --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-lg btn-outline-primary rounded-circle me-2&quot; aria-label=&quot;Prev&quot;&gt;
  &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-lg btn-outline-primary rounded-circle ms-2&quot; aria-label=&quot;Next&quot;&gt;
  &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Normal prev/next buttons --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-outline-primary rounded-circle me-2&quot; aria-label=&quot;Prev&quot;&gt;
  &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-outline-primary rounded-circle ms-2&quot; aria-label=&quot;Next&quot;&gt;
  &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Small prev/next buttons --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-2&quot; aria-label=&quot;Prev&quot;&gt;
  &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-2&quot; aria-label=&quot;Next&quot;&gt;
  &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Pagination -->
      <section class="card border-0 mb-4" id="carousel-pagination">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Pagination</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview2" data-bs-toggle="tab" role="tab" aria-controls="preview2" aria-selected="true"><i class="ai-show fs-lg opacity-90 me-2"></i>
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
              <div class="row row-cols-md-2 row-cols-xl-2 g-4">
                <div class="col">
                  <div class="swiper swiper-nav-onhover" data-swiper-options='{
                        "spaceBetween": 20,
                        "loop": true,
                        "pagination": {
                          "el": ".swiper-pagination",
                          "clickable": true
                        },
                        "navigation": {
                          "prevEl": ".btn-prev",
                          "nextEl": ".btn-next"
                        }
                      }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">1</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">2</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">3</div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Prev">
                      <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Next">
                      <i class="ai-arrow-right"></i>
                    </button>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="swiper swiper-nav-onhover" data-swiper-options='{
                        "spaceBetween": 20,
                        "pagination": {
                          "el": ".swiper-pagination",
                          "type": "progressbar"
                        },
                        "navigation": {
                          "prevEl": ".btn-prev",
                          "nextEl": ".btn-next"
                        }
                      }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">1</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">2</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">3</div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Prev">
                      <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Next">
                      <i class="ai-arrow-right"></i>
                    </button>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="swiper swiper-nav-onhover" data-swiper-options='{
                        "spaceBetween": 20,
                        "pagination": {
                          "el": ".swiper-pagination",
                          "type": "fraction"
                        },
                        "navigation": {
                          "prevEl": ".btn-prev",
                          "nextEl": ".btn-next"
                        }
                      }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">1</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">2</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio ratio-16x9 bg-secondary">
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">3</div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Prev">
                      <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Next">
                      <i class="ai-arrow-right"></i>
                    </button>
                    <div class="swiper-pagination text-body-secondary fs-5 lh-1 opacity-50 fw-semibold"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="ratio ratio-16x9">
                    <div class="swiper" data-swiper-options='{
                          "direction": "vertical",
                          "mousewheel": true,
                          "spaceBetween": 20,
                          "scrollbar": {
                            "el": ".swiper-scrollbar"
                          }
                        }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">1</div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">2</div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="ratio ratio-16x9 bg-secondary">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">3</div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-scrollbar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pagination: Bullets --&gt;
&lt;div class=&quot;swiper swiper-nav-onhover&quot; data-swiper-options='{
  &quot;spaceBetween&quot;: 20,
  &quot;loop&quot;: true,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;clickable&quot;: true
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Next button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Bullets --&gt;
  &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Progress bar --&gt;
&lt;div class=&quot;swiper swiper-nav-onhover&quot; data-swiper-options='{
  &quot;spaceBetween&quot;: 20,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;type&quot;:  &quot;progressbar&quot;
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Next button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Progress bar --&gt;
  &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Fraction --&gt;
&lt;div class=&quot;swiper swiper-nav-onhover&quot; data-swiper-options='{
  &quot;spaceBetween&quot;: 20,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;type&quot;: &quot;fraction&quot;
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Next button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ai-arrow-rigsht&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Fraction --&gt;
  &lt;div class=&quot;swiper-pagination text-body-secondary fs-5 lh-1 opacity-50 fw-semibold&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Scrollbar --&gt;
&lt;div class=&quot;ratio ratio-16x9&quot;&gt;
  &lt;div class=&quot;swiper&quot; data-swiper-options='{
    &quot;direction&quot;: &quot;vertical&quot;,
    &quot;mousewheel&quot;: true,
    &quot;spaceBetween&quot;: 20,
    &quot;scrollbar&quot;: {
      &quot;el&quot;: &quot;.swiper-scrollbar&quot;
    }
  }'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-16x9 bg-secondary&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Scrollbar --&gt;
    &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Multiple slides (Responsive) + Controls and pagination outside -->
      <section class="card border-0 mb-4" id="carousel-multiple-slides">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Multiple slides (Responsive) + Controls and pagination outside</h2>
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
              <div class="position-relative px-5">
                <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3" type="button" id="prev" aria-label="Prev">
                  <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3" type="button" id="next" aria-label="Next">
                  <i class="ai-arrow-right"></i>
                </button>
                <div class="swiper" data-swiper-options='{
                      "slidesPerView": 1,
                      "spaceBetween": 16,
                      "loop": true,
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": "#prev",
                        "nextEl": "#next"
                      },
                      "breakpoints": {
                        "600": {
                          "slidesPerView": 2
                        },
                        "1000": {
                          "slidesPerView": 3
                        }
                      }
                    }'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="ratio ratio-4x3 bg-info bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">1</div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="ratio ratio-4x3 bg-success bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">2</div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="ratio ratio-4x3 bg-danger bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">3</div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="ratio ratio-4x3 bg-warning bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">4</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination position-relative bottom-0 mt-4"></div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Multiple slides responsive slider with external Prev / Next buttons and bullets outside --&gt;
&lt;div class=&quot;position-relative px-5&quot;&gt;

  &lt;!-- External slider prev/next buttons --&gt;
  &lt;button type=&quot;button&quot; id=&quot;prev&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 start-0 translate-middle-y mt-n3&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; id=&quot;next&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle position-absolute top-50 end-0 translate-middle-y mt-n3&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ai-arrow-right&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Slider --&gt;
  &lt;div class=&quot;swiper&quot; data-swiper-options='{
    &quot;slidesPerView&quot;: 1,
    &quot;spaceBetween&quot;: 16,
    &quot;loop&quot;: true,
    &quot;pagination&quot;: {
      &quot;el&quot;: &quot;.swiper-pagination&quot;,
      &quot;clickable&quot;: true
    },
    &quot;navigation&quot;: {
      &quot;prevEl&quot;: &quot;#prev&quot;,
      &quot;nextEl&quot;: &quot;#next&quot;
    },
    &quot;breakpoints&quot;: {
      &quot;600&quot;: {
        &quot;slidesPerView&quot;: 2
      },
      &quot;1000&quot;: {
        &quot;slidesPerView&quot;: 3
      }
    }
  }'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-info bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-success bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-danger bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-warning bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Pagination (Bullets) --&gt;
    &lt;div class=&quot;swiper-pagination position-relative bottom-0 mt-4&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Fade transition -->
      <section class="card border-0 mb-4" id="carousel-fade">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Fade transition</h2>
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
              <div class="swiper swiper-nav-onhover" data-swiper-options='{
                    "effect": "fade",
                    "loop": true,
                    "navigation": {
                      "prevEl": ".btn-prev",
                      "nextEl": ".btn-next"
                    }
                  }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide bg-light">
                    <div class="ratio ratio-16x9 bg-info bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">First</div>
                    </div>
                  </div>
                  <div class="swiper-slide bg-light">
                    <div class="ratio ratio-16x9 bg-danger bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">Second</div>
                    </div>
                  </div>
                  <div class="swiper-slide bg-light">
                    <div class="ratio ratio-16x9 bg-warning bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">Third</div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Prev">
                  <i class="ai-arrow-left"></i>
                </button>
                <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" aria-label="Next">
                  <i class="ai-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Slider with fade transition between slides --&gt;
&lt;div class=&quot;swiper&quot; data-swiper-options='{
  &quot;effect&quot;: &quot;fade&quot;,
  &quot;loop&quot;: true,
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide bg-light&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-info bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;First&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide bg-light&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-danger bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Second&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide bg-light&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-warning bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Third&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Next button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ai-arrow-rigsht&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Thumbnails -->
      <section class="card border-0 mb-4" id="carousel-thumbnails">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Thumbnails</h2>
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
              <div class="swiper" data-swiper-options='{
                    "loop": true,
                    "thumbnails": {
                      "el": "#thumbnails",
                      "images": [
                        " /img/components/thumb01.png",
                        "/img/components/thumb02.png",
                        "/img/components/thumb03.png"
                      ]
                    }
                  }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="ratio ratio-16x9 bg-warning bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">First</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-16x9 bg-success bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">Second</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio ratio-16x9 bg-danger bg-opacity-10">
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">Third</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-thumbnails flex-nowrap" id="thumbnails"></div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Swiper slider with thumbnails example --&gt;
&lt;div class=&quot;swiper&quot; data-swiper-options='{
  &quot;loop&quot;: true,
  &quot;thumbnails&quot;: {
    &quot;el&quot;: &quot;#thumbnails&quot;,
    &quot;images&quot;: [
      &quot;assets/img/components/thumb01.png&quot;,
      &quot;assets/img/components/thumb02.png&quot;,
      &quot;assets/img/components/thumb03.png&quot;
    ]
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-warning bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;First&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-success bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Second&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-danger bg-opacity-10&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Third&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Thumbnails --&gt;
&lt;div id=&quot;thumbnails&quot; class=&quot;swiper-thumbnails flex-nowrap&quot;&gt;&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Link slides to outside content -->
      <section class="card border-0 mb-4" id="carousel-link-to-content">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Link slides to outside content</h2>
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
              <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0 pb-1 pb-md-0">
                  <div class="binded-content">
                    <div class="binded-item active" id="item1">
                      <div class="ratio ratio-4x3 bg-danger bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                          <i class="ai-image text-danger opacity-80"></i>
                        </div>
                      </div>
                    </div>
                    <div class="binded-item" id="item2">
                      <div class="ratio ratio-4x3 bg-success bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                          <i class="ai-image text-success opacity-80"></i>
                        </div>
                      </div>
                    </div>
                    <div class="binded-item" id="item3">
                      <div class="ratio ratio-4x3 bg-warning bg-opacity-10">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                          <i class="ai-image text-warning opacity-80"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 ps-xl-5">
                  <div class="swiper" data-swiper-options='{
                        "spaceBetween": 30,
                        "loop": true,
                        "bindedContent": true,
                        "navigation": {
                          "prevEl": "#prev-btn",
                          "nextEl": "#next-btn"
                        }
                      }'>
                    <div class="swiper-wrapper text-center text-md-start">
                      <div class="swiper-slide" data-swiper-binded="#item1">
                        <h3>First slide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.</p>
                      </div>
                      <div class="swiper-slide" data-swiper-binded="#item2">
                        <h3>Second slide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.</p>
                      </div>
                      <div class="swiper-slide" data-swiper-binded="#item3">
                        <h3>Third slide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center justify-content-md-start pt-2">
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-2" type="button" id="prev-btn" aria-label="Prev">
                      <i class="ai-arrow-left"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-2" type="button" id="next-btn" aria-label="Next">
                      <i class="ai-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Link swiper slides to any content via binded-content --&gt;
&lt;div class=&quot;row align-items-center&quot;&gt;
  &lt;div class=&quot;col-md-5 mb-4 mb-md-0 pb-1 pb-md-0&quot;&gt;

    &lt;!-- Binded items --&gt;
    &lt;div class=&quot;binded-content&quot;&gt;

      &lt;!-- Item --&gt;
      &lt;div id=&quot;item1&quot; class=&quot;binded-item active&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-danger bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
            &lt;i class=&quot;ai-image text-danger opacity-80&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div id=&quot;item2&quot; class=&quot;binded-item&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-success bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
            &lt;i class=&quot;ai-image text-success opacity-80&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div id=&quot;item3&quot; class=&quot;binded-item&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-warning bg-opacity-10&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
            &lt;i class=&quot;ai-image text-warning opacity-80&quot;&gt;&lt;/i&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class=&quot;col-md-7 ps-xl-5&quot;&gt;

    &lt;!-- Swiper slider --&gt;
    &lt;div class=&quot;swiper&quot; data-swiper-options='{
      &quot;spaceBetween&quot;: 30,
      &quot;loop&quot;: true,
      &quot;bindedContent&quot;: true,
      &quot;navigation&quot;: {
        &quot;prevEl&quot;: &quot;#prev-btn&quot;,
        &quot;nextEl&quot;: &quot;#next-btn&quot;
      }
    }'&gt;
      &lt;div class=&quot;swiper-wrapper text-center text-md-start&quot;&gt;

        &lt;!-- Item --&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#item1&quot;&gt;
          &lt;h3&gt; First slide&lt;/h3&gt;
          &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;

        &lt;!-- Item --&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#item2&quot;&gt;
          &lt;h3&gt; Second slide&lt;/h3&gt;
          &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;

        &lt;!-- Item --&gt;
        &lt;div class=&quot;swiper-slide&quot; data-swiper-binded=&quot;#item3&quot;&gt;
          &lt;h3&gt; Third slide&lt;/h3&gt;
          &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Slider controls (Prev / next) --&gt;
      &lt;div class=&quot;d-flex justify-content-center justify-content-md-start pt-2&quot;&gt;
        &lt;button type=&quot;button&quot; id=&quot;prev-btn&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-2&quot; aria-label=&quot;Prev&quot;&gt;
          &lt;i class=&quot;ai-arrow-left&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type=&quot;button&quot; id=&quot;next-btn&quot; class=&quot;btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-2&quot; aria-label=&quot;Next&quot;&gt;
          &lt;i class=&quot;ai-arrow-rigsht&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
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
