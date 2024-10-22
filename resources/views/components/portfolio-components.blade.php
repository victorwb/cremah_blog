@extends('layouts.base', ['title' => 'Around UI Kit | Portfolio components'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Portfolio components
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item"><a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-1" data-scroll="data-scroll">Grid view style 1</a></li>
              <li class="nav-item"><a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-2" data-scroll="data-scroll">Grid view style 2</a></li>
              <li class="nav-item"><a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-3" data-scroll="data-scroll">Grid view style 3</a></li>
              <li class="nav-item"><a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-list-1" data-scroll="data-scroll">List view style 1</a></li>
              <li class="nav-item"><a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-list-2" data-scroll="data-scroll">List view style 2</a></li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Portfolio components
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-1" data-scroll="data-scroll">Grid view style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-2" data-scroll="data-scroll">Grid view style 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-grid-3" data-scroll="data-scroll">Grid view style 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-list-1" data-scroll="data-scroll">List view style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#portfolio-list-2" data-scroll="data-scroll">List view style 2</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Portfolio components</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Components that are related to the portfolio section of the website.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>



      <!-- Grid view style 1 -->
      <section class="card border-0 mb-4" id="portfolio-grid-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Grid view style 1</h2>
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
              <article class="card-hover zoom-effect" style="max-width: 480px;">
                <div class="zoom-effect-wrapper rounded-5">
                  <div class="zoom-effect-img">
                    <img src="/img/portfolio/grid/02.jpg" alt="Image">
                  </div>
                </div>
                <div class="pt-4 mt-lg-2">
                  <h2 class="h5 mb-2">
                    <a class="stretched-link text-nav" href="#">Design for eco bags and merch</a>
                  </h2>
                  <span class="fs-sm text-body-secondary opacity-0 d-none d-sm-block">Product design</span>
                  <span class="fs-sm text-body-secondary d-sm-none">Product design</span>
                </div>
              </article>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Portfolio card vertical layout style 1 (Grid view) --&gt;
&lt;article class=&quot;card-hover zoom-effect&quot; style=&quot;max-width: 480px;&quot;&gt;
  &lt;div class=&quot;zoom-effect-wrapper rounded-5&quot;&gt;
    &lt;div class=&quot;zoom-effect-img&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/grid/02.jpg&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;pt-4 mt-lg-2&quot;&gt;
    &lt;h2 class=&quot;h5 mb-2&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;stretched-link text-nav&quot;&gt;Design for eco bags and merch&lt;/a&gt;
    &lt;/h2&gt;
    &lt;span class=&quot;fs-sm text-body-secondary opacity-0 d-none d-sm-block&quot;&gt;Product design&lt;/span&gt;
    &lt;span class=&quot;fs-sm text-body-secondary d-sm-none&quot;&gt;Product design&lt;/span&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Grid view style 2 -->
      <section class="card border-0 mb-4" id="portfolio-grid-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Grid view style 2</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3"><a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview2" data-bs-toggle="tab" role="tab" aria-controls="preview2" aria-selected="true"><i class="ai-show fs-lg opacity-90 me-2"></i>Preview</a></li>
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
              <article class="zoom-effect position-relative border-bottom pb-3" style="max-width: 480px;">
                <div class="zoom-effect-wrapper">
                  <div class="zoom-effect-img">
                    <img src="/img/portfolio/grid/12.jpg" alt="Image">
                  </div>
                </div>
                <div class="pt-4 mt-lg-2">
                  <h2 class="h4 mb-2">
                    <a class="stretched-link" href="#">The Studio</a>
                  </h2>
                  <div class="d-flex justify-content-between fs-lg text-body-secondary">
                    <span>Web design</span>
                    <span>2021</span>
                  </div>
                </div>
              </article>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Portfolio card vertical layout style 2 (Grid view) --&gt;
&lt;article class=&quot;zoom-effect position-relative border-bottom pb-3&quot; style=&quot;max-width: 480px;&quot;&gt;
  &lt;div class=&quot;zoom-effect-wrapper&quot;&gt;
    &lt;div class=&quot;zoom-effect-img&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/grid/12.jpg&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;pt-4 mt-lg-2&quot;&gt;
    &lt;h2 class=&quot;h4 mb-2&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;stretched-link&quot;&gt;The Studio&lt;/a&gt;
    &lt;/h2&gt;
    &lt;div class=&quot;d-flex justify-content-between fs-lg text-body-secondary&quot;&gt;
      &lt;span&gt;Web design&lt;/span&gt;
      &lt;span&gt;2021&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Grid view style 3 -->
      <section class="card border-0 mb-4" id="portfolio-grid-3">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Grid view style 3</h2>
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
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Portfolio card with flipping effect (Grid view) --&gt;
&lt;a href=&quot;#&quot; class=&quot;card-flip&quot; style=&quot;max-width: 316px;&quot;&gt;
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


      <!-- List view style 1 -->
      <section class="card border-0 mb-4" id="portfolio-list-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">List view style 1</h2>
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
              <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 mb-4 mb-md-0">
                  <a href="#">
                    <img class="rounded-5" src="/img/portfolio/list/03.jpg" width="700" alt="Image">
                  </a>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                  <div class="ms-md-2 ms-xl-4" style="max-width: 330px;">
                    <div class="text-body-secondary mb-2">Identity, Packaging</div>
                    <h2 class="mb-lg-4">
                      <a href="#">Bottle for French perfume brand</a>
                    </h2>
                    <p class="mb-0 mb-md-1 mb-lg-3">Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec eu.</p>
                    <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="#">
                      Read more
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </article>
              <article class="row align-items-center card-hover pb-4" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
                <div class="col-md-7 order-md-2 mb-4 mb-md-0">
                  <a href="#">
                    <img class="rounded-5" src="/img/portfolio/list/04.jpg" width="700" alt="Image">
                  </a>
                </div>
                <div class="col-md-5 order-md-1" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                  <div class="me-md-2 me-xl-4" style="max-width: 330px;">
                    <div class="text-body-secondary mb-2">E-book, Branding</div>
                    <h2 class="mb-lg-4">
                      <a href="#">Book cover design Twin Fish</a>
                    </h2>
                    <p class="mb-0 mb-md-1 mb-lg-3">Sed feugiat tristique enim aenean netus cum adipiscing est sem eget nulla leo vestibulum. Cras urna, proin ut ut dictum risus porttitor nulla consequat et iaculis.</p>
                    <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="#">
                      Read more
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Portfolio card horizontal layout style 1 (List view). Ideally should be placed inside .container --&gt;

&lt;!-- Image on the left --&gt;
&lt;article class=&quot;row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4&quot; data-aos=&quot;fade-up&quot; data-aos-duration=&quot;600&quot; data-aos-offset=&quot;280&quot;&gt;
  &lt;div class=&quot;col-md-7 offset-xxl-1 mb-4 mb-md-0&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/list/03.jpg&quot; class=&quot;rounded-5&quot; width=&quot;700&quot; alt=&quot;Image&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-5 col-xl-4&quot; data-aos=&quot;fade-up&quot; data-aos-duration=&quot;850&quot; data-aos-offset=&quot;180&quot; data-disable-parallax-down=&quot;md&quot;&gt;
    &lt;div class=&quot;ms-md-4 ms-lg-5 ms-xxl-0&quot; style=&quot;max-width: 330px;&quot;&gt;
      &lt;div class=&quot;text-body-secondary mb-2&quot;&gt;Identity, Packaging&lt;/div&gt;
      &lt;h2 class=&quot;mb-lg-4&quot;&gt;
        &lt;a href=&quot;#&quot;&gt;Bottle for French perfume brand&lt;/a&gt;
      &lt;/h2&gt;
      &lt;p class=&quot;mb-0 mb-md-1 mb-lg-3&quot;&gt;Egestas ultrices condimentum consectetur massa aliquam volutpat pulvinar aliquet nisi quam. Nibh commodo tristique nisi, justo, sed maecenas lectus ut nec eu.&lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex&quot;&gt;
        Read more
        &lt;i class=&quot;ai-arrow-right ms-2&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;!-- Image on the right --&gt;
&lt;article class=&quot;row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4&quot; data-aos=&quot;fade-up&quot; data-aos-duration=&quot;600&quot; data-aos-offset=&quot;280&quot;&gt;
  &lt;div class=&quot;col-md-7 order-md-2 mb-4 mb-md-0&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/list/04.jpg&quot; class=&quot;rounded-5&quot; width=&quot;700&quot; alt=&quot;Image&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-5 col-xl-4 offset-xxl-1 order-md-1&quot; data-aos=&quot;fade-up&quot; data-aos-duration=&quot;850&quot; data-aos-offset=&quot;180&quot; data-disable-parallax-down=&quot;md&quot;&gt;
    &lt;div class=&quot;me-md-4 me-lg-5 me-xxl-0&quot; style=&quot;max-width: 330px;&quot;&gt;
      &lt;div class=&quot;text-body-secondary mb-2&quot;&gt;E-book, Branding&lt;/div&gt;
      &lt;h2 class=&quot;mb-lg-4&quot;&gt;
        &lt;a href=&quot;#&quot;&gt;Book cover design Twin Fish&lt;/a&gt;
      &lt;/h2&gt;
      &lt;p class=&quot;mb-0 mb-md-1 mb-lg-3&quot;&gt;Sed feugiat tristique enim aenean netus cum adipiscing est sem eget nulla leo vestibulum. Cras urna, proin ut ut dictum risus porttitor nulla consequat et iaculis.&lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex&quot;&gt;
        Read more
        &lt;i class=&quot;ai-arrow-right ms-2&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- List view style 2 -->
      <section class="card border-0 mb-4" id="portfolio-list-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">List view style 2</h2>
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
              <div class="row align-items-center pt-xl-2 pb-4">
                <div class="col-md-7 mb-4 mb-md-0">
                  <a class="d-block position-relative" href="#">
                    <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                    <img class="d-block position-relative z-2 mx-auto" src="/img/portfolio/list/06.png" width="636" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                  </a>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="400" data-aos-offset="170">
                  <div class="ps-md-3 ps-lg-4">
                    <img class="d-block d-dark-mode-none mb-2 mb-lg-3" src="/img/portfolio/brands/champion-blue-dark.svg" alt="Champion">
                    <img class="d-none d-dark-mode-block mb-2 mb-lg-3" src="/img/portfolio/brands/champion-blue-light.svg" alt="Champion">
                    <h2 class="h4">Development of a fintech application</h2>
                    <p class="fs-sm pb-3 pb-lg-4 mb-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque.</p>
                    <a class="btn btn-sm btn-outline-dark rounded-pill" href="#">Read the full story</a>
                    <div class="d-flex align-items-center pt-2 pt-lg-3 mt-3">
                      <h6 class="text-body mb-0 me-3">Awards:</h6>
                      <img class="d-block d-dark-mode-none me-4" src="/img/portfolio/brands/vuejs-dark.svg" width="90" alt="Vue.js">
                      <img class="d-none d-dark-mode-block me-4" src="/img/portfolio/brands/vuejs-light.svg" width="90" alt="Vue.js">
                      <img class="d-block d-dark-mode-none" src="/img/portfolio/brands/deloitte-dark.svg" width="95" alt="Deloitte">
                      <img class="d-none d-dark-mode-block" src="/img/portfolio/brands/deloitte-light.svg" width="95" alt="Deloitte">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Portfolio card horizontal layout style 2 (List view). Ideally should be placed inside .container --&gt;
&lt;div class=&quot;row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4&quot;&gt;
  &lt;div class=&quot;col-md-7 col-lg-6 mb-4 mb-md-0&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;d-block position-relative&quot;&gt;
      &lt;div class=&quot;bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100&quot; data-aos=&quot;zoom-in&quot; data-aos-duration=&quot;600&quot; data-aos-offset=&quot;250&quot;&gt;&lt;/div&gt;
      &lt;img src=&quot;assets/img/portfolio/list/06.png&quot; class=&quot;d-block position-relative z-2 mx-auto&quot; width=&quot;636&quot; alt=&quot;Image&quot; data-aos=&quot;fade-in&quot; data-aos-duration=&quot;400&quot; data-aos-offset=&quot;250&quot;&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-5 col-xl-4 offset-lg-1&quot; data-aos=&quot;fade-up&quot; data-aos-duration=&quot;400&quot; data-aos-offset=&quot;170&quot;&gt;
    &lt;div class=&quot;ps-md-3 ps-lg-0&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/brands/champion-blue-dark.svg&quot; class=&quot;d-block d-dark-mode-none mb-2 mb-lg-3&quot; alt=&quot;Champion&quot;&gt;
      &lt;img src=&quot;assets/img/portfolio/brands/champion-blue-light.svg&quot; class=&quot;d-none d-dark-mode-block mb-2 mb-lg-3&quot; alt=&quot;Champion&quot;&gt;
      &lt;h2 class=&quot;h4&quot;&gt;Development of a fintech application&lt;/h2&gt;
      &lt;p class=&quot;fs-sm pb-3 pb-lg-4 mb-3&quot;&gt;Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus. Morbi et massa fames ac scelerisque sit commodo dignissim.&lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-sm btn-outline-dark rounded-pill&quot;&gt;Read the full story&lt;/a&gt;
      &lt;div class=&quot;d-flex align-items-center pt-2 pt-lg-3 mt-3&quot;&gt;
        &lt;h6 class=&quot;text-body mb-0 me-3&quot;&gt;Awards:&lt;/h6&gt;
        &lt;img src=&quot;assets/img/portfolio/brands/vuejs-dark.svg&quot; class=&quot;d-block d-dark-mode-none me-4&quot; width=&quot;90&quot; alt=&quot;Vue.js&quot;&gt;
        &lt;img src=&quot;assets/img/portfolio/brands/vuejs-light.svg&quot; class=&quot;d-none d-dark-mode-block me-4&quot; width=&quot;90&quot; alt=&quot;Vue.js&quot;&gt;
        &lt;img src=&quot;assets/img/portfolio/brands/deloitte-dark.svg&quot; class=&quot;d-block d-dark-mode-none&quot; width=&quot;95&quot; alt=&quot;Deloitte&quot;&gt;
        &lt;img src=&quot;assets/img/portfolio/brands/deloitte-light.svg&quot; class=&quot;d-none d-dark-mode-block&quot; width=&quot;95&quot; alt=&quot;Deloitte&quot;&gt;
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
