@extends('layouts.base', ['title' => 'Around UI Kit | Dropdowns'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Dropdowns
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-static" data-scroll="data-scroll">Static examples</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-dark" data-scroll="data-scroll">Dark dropdowns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-forms" data-scroll="data-scroll">Forms inside dropdown</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-directions" data-scroll="data-scroll">Directions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-alignment" data-scroll="data-scroll">Menu alignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-split-button" data-scroll="data-scroll">Split button</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Dropdowns
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-static" data-scroll="data-scroll">Static examples</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-dark" data-scroll="data-scroll">Dark dropdowns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-forms" data-scroll="data-scroll">Forms inside dropdown</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-directions" data-scroll="data-scroll">Directions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-alignment" data-scroll="data-scroll">Menu alignment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#dropdowns-split-button" data-scroll="data-scroll">Split button</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Dropdowns</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Toggle contextual overlays for displaying lists of links or other content.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/dropdowns/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Static examples -->
      <section class="card border-0 mb-4" id="dropdowns-static">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Static examples</h2>
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
              <div class="dropdown-menu d-inline-block align-top me-4 mb-4" style="position: static; width: 13rem;">
                <a class="dropdown-item" href="#">Regular link</a>
                <a class="dropdown-item" href="#">Another regular link</a>
                <a class="dropdown-item active" href="#">Active link</a>
                <a class="dropdown-item disabled" href="#">Disabled link</a>
              </div>
              <div class="dropdown-menu d-inline-block align-top me-4 mb-4" style="position: static; width: 13rem;">
                <h6 class="dropdown-header">Dropdown header</h6>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
              <div class="dropdown-menu d-inline-block align-top mb-2" style="position: static; width: 13rem;">
                <a class="dropdown-item" href="#">
                  <i class="ai-home me-2"></i>
                  Home
                  <span class="badge bg-secondary ms-2">2</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-user me-2"></i>
                  Profile
                  <span class="badge bg-danger ms-2">3</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-messages me-2"></i>
                  Messages
                  <span class="badge bg-success ms-2">5</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-settings me-2"></i>
                  Settings
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic dropdown --&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Regular link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another regular link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item active&quot;&gt;Active link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item disabled&quot;&gt;Disabled link&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Dropdown with header and divider --&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
  &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Separeted link&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Dropdown with icons and badges --&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-home me-2&quot;&gt;&lt;/i&gt;
    Regular link
    &lt;span class=&quot;badge bg-secondary ms-2&quot;&gt;2&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-user me-2&quot;&gt;&lt;/i&gt;
    Profile
    &lt;span class=&quot;badge bg-danger ms-2&quot;&gt;3&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-messages me-2&quot;&gt;&lt;/i&gt;
    Messages
    &lt;span class=&quot;badge bg-success ms-2&quot;&gt;5&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-settings me-2&quot;&gt;&lt;/i&gt;
    Settings
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Dark dropdowns -->
      <section class="card border-0 mb-4" id="dropdowns-dark">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Dark dropdowns</h2>
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
              <div class="dropdown-menu dropdown-menu-dark d-inline-block align-top me-4 mb-4" style="position: static; width: 13rem;">
                <a class="dropdown-item" href="#">Regular link</a>
                <a class="dropdown-item" href="#">Another regular link</a>
                <a class="dropdown-item active" href="#">Active link</a>
                <a class="dropdown-item disabled" href="#">Disabled link</a>
              </div>
              <div class="dropdown-menu dropdown-menu-dark d-inline-block align-top me-4 mb-4" style="position: static; width: 13rem;">
                <h6 class="dropdown-header">Dropdown header</h6>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
              <div class="dropdown-menu dropdown-menu-dark d-inline-block align-top mb-2" style="position: static; width: 13rem;">
                <a class="dropdown-item" href="#">
                  <i class="ai-home me-2"></i>
                  Home
                  <span class="badge bg-secondary ms-2">2</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-user me-2"></i>
                  Profile
                  <span class="badge bg-danger ms-2">3</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-messages me-2"></i>
                  Messages
                  <span class="badge bg-success ms-2">5</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="ai-settings me-2"></i>
                  Settings
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic dark dropdown --&gt;
&lt;div class=&quot;dropdown-menu dropdown-menu-dark&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Regular link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another regular link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item active&quot;&gt;Active link&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item disabled&quot;&gt;Disabled link&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Dark dropdown with header and divider --&gt;
&lt;div class=&quot;dropdown-menu dropdown-menu-dark&quot;&gt;
  &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
  &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Separeted link&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Dark dropdown with icons and badges --&gt;
&lt;div class=&quot;dropdown-menu dropdown-menu-dark&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-home me-2&quot;&gt;&lt;/i&gt;
    Regular link
    &lt;span class=&quot;badge bg-secondary ms-2&quot;&gt;2&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-user me-2&quot;&gt;&lt;/i&gt;
    Profile
    &lt;span class=&quot;badge bg-danger ms-2&quot;&gt;3&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-messages me-2&quot;&gt;&lt;/i&gt;
    Messages
    &lt;span class=&quot;badge bg-success ms-2&quot;&gt;5&lt;/span&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;
    &lt;i class=&quot;ai-settings me-2&quot;&gt;&lt;/i&gt;
    Settings
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Forms inside dropdown -->
      <section class="card border-0 mb-4" id="dropdowns-forms">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Forms inside dropdown</h2>
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
              <div class="dropdown-menu d-block mb-2" style="position: static; width: 19rem;">
                <form class="p-4" autocomplete="off">
                  <div class="mb-3">
                    <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                    <input class="form-control" type="email" id="exampleDropdownFormEmail" placeholder="email@example.com" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                    <input class="form-control" type="password" id="exampleDropdownFormPassword" placeholder="Password" required>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">Remember me</label>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Sign In</button>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Forms inside dropdown --&gt;
&lt;div class=&quot;dropdown-menu&quot; style=&quot;width: 19rem;&quot;&gt;
  &lt;form class=&quot;p-4&quot;&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label for=&quot;exampleDropdownFormEmail&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail&quot; placeholder=&quot;email@example.com&quot; required&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label for=&quot;exampleDropdownFormPassword&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword&quot; placeholder=&quot;Password&quot; required&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;dropdownCheck&quot;&gt;
        &lt;label for=&quot;dropdownCheck&quot; class=&quot;custom-control-label&quot;&gt;Remember me&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign In&lt;/button&gt;
  &lt;/form&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Directions -->
      <section class="card border-0 mb-4" id="dropdowns-directions">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Directions</h2>
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
            <li class="nav-item me-3">
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
              <div class="btn-group dropdown d-inline-block mb-3 me-2">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="btn-group dropup d-inline-block mb-3 me-2">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="btn-group dropend d-inline-block mb-3 me-2">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropend</button>
                <div class="dropdown-menu mx-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="btn-group dropstart d-inline-block mb-3 me-2">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;Dropstart</button>
                <div class="dropdown-menu mx-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Dropdown --&gt;
&lt;div class=&quot;btn-group dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropdown
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dropup --&gt;
&lt;div class=&quot;btn-group dropup&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropup
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dropend --&gt;
&lt;div class=&quot;btn-group dropend&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropend
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu mx-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dropstart --&gt;
&lt;div class=&quot;btn-group dropstart&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropstart
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu mx-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Menu alignment -->
      <section class="card border-0 mb-4" id="dropdowns-alignment">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Menu alignment</h2>
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
              <div class="btn-group dropdown mb-3">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Right-aligned menu example</button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Right-aligned dropdown --&gt;
&lt;div class=&quot;btn-group dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Right-aligned menu example
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end my-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Split button -->
      <section class="card border-0 mb-4" id="dropdowns-split-button">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Split button</h2>
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
              <div class="btn-group me-2 mb-3">
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle dropdown</span>
                </button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="btn-group me-2 mb-3">
                <button class="btn btn-outline-primary" type="button">Button</button>
                <button class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle dropdown</span>
                </button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Solid split button --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Outline split button --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    ...
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