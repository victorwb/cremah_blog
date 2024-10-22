@extends('layouts.base', ['title' => 'Around UI Kit | Pricing'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Pricing
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-cards-1" data-scroll="data-scroll">Cards: Style 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-cards-2" data-scroll="data-scroll">Cards: Style 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-list" data-scroll="data-scroll">List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-table" data-scroll="data-scroll">Table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-switch" data-scroll="data-scroll">Price switch</a>
              </li>
            </ul>
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
        <a class="nav-link px-0 py-2" href="portfolio-components#portfolio-m">
          <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
          Portfolio components
        </a>
      </li>
      <li class="nav-item" id="pricing-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Pricing
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-cards-1" data-scroll="data-scroll">Cards: Style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-cards-2" data-scroll="data-scroll">Cards: Style 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-list" data-scroll="data-scroll">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-table" data-scroll="data-scroll">Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#pricing-switch" data-scroll="data-scroll">Price switch</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Pricing</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Quickly build pricing plans for subscription based pricing model.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Cards: Style 1-->
      <section class="card border-0 mb-4" id="pricing-cards-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Cards: Style 1</h2>
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
              <div class="bg-secondary p-4 m-n4 rounded-4 rounded-top-0">
                <div class="row row-cols-1 row-cols-md-2 g-4" style="max-width: 55rem;">
                  <div class="col">
                    <div class="card border-0 h-100 py-lg-3" style="max-width: 26rem;">
                      <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                        <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                          <div class="bg-info rounded flex-shrink-0 p-2">
                            <img class="d-block m-1" src="/img/landing/saas-1/pricing/starter.svg" width="44" alt="Icon">
                          </div>
                          <div class="ps-3">
                            <h3 class="h4 text-info mb-0">Starter</h3>
                            <div class="d-flex align-items-end">
                              <span class="h5 mb-1 me-1">$</span>
                              <span class="h2 mb-0">15.00</span>
                            </div>
                          </div>
                        </div>
                        <ul class="list-unstyled mb-1 pb-4">
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            In lorem eget amet sit
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Sodales sit velit ornare
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Tristique suspendisse proin
                          </li>
                          <li class="d-flex text-body-secondary pb-1 mb-2">
                            <i class="ai-cross lead opacity-80 me-2"></i>
                            Nunc nullam in dignissim
                          </li>
                          <li class="d-flex text-body-secondary pb-1 mb-2">
                            <i class="ai-cross lead opacity-80 me-2"></i>
                            Imperdiet amet suspendisse
                          </li>
                          <li class="d-flex text-body-secondary pb-1 mb-2">
                            <i class="ai-cross lead opacity-80 me-2"></i>
                            Tristique nibh erat et quis
                          </li>
                        </ul>
                        <button class="btn btn-outline-primary w-100" type="button">Get this plan now</button>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card border-primary h-100 py-lg-3" style="max-width: 26rem;">
                      <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                        <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                          <div class="bg-primary rounded flex-shrink-0 p-2">
                            <img class="d-block m-1" src="/img/landing/saas-1/pricing/business.svg" width="44" alt="Icon">
                          </div>
                          <div class="ps-3">
                            <h3 class="h4 text-primary mb-0">Business</h3>
                            <div class="d-flex align-items-end">
                              <span class="h5 mb-1 me-1">$</span>
                              <span class="h2 mb-0">35.00</span>
                            </div>
                          </div>
                        </div>
                        <ul class="list-unstyled mb-1 pb-4">
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            In lorem eget amet sit
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Sodales sit velit ornare
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Tristique suspendisse proin
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Nunc nullam in dignissim
                          </li>
                          <li class="d-flex pb-1 mb-2">
                            <i class="ai-check fs-xl mt-1 me-2"></i>
                            Imperdiet amet suspendisse
                          </li>
                          <li class="d-flex text-body-secondary pb-1 mb-2">
                            <i class="ai-cross lead opacity-80 me-2"></i>
                            Tristique nibh erat et quis
                          </li>
                        </ul>
                        <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Regular pricing plan --&gt;
&lt;div class=&quot;card border-0 h-100 py-lg-3&quot; style=&quot;max-width: 26rem;&quot;&gt;
  &lt;div class=&quot;card-body w-100 mx-auto&quot; style=&quot;max-width: 21rem;&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center border-bottom pb-4 mb-4&quot;&gt;
      &lt;div class=&quot;bg-info rounded flex-shrink-0 p-2&quot;&gt;
        &lt;img src=&quot;assets/img/landing/saas-1/pricing/starter.svg&quot; class=&quot;d-block m-1&quot; width=&quot;44&quot; alt=&quot;Icon&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h3 class=&quot;h4 text-info mb-0&quot;&gt;Starter&lt;/h3&gt;
        &lt;div class=&quot;d-flex align-items-end&quot;&gt;
          &lt;span class=&quot;h5 mb-1 me-1&quot;&gt;$&lt;/span&gt;
          &lt;span class=&quot;h2 mb-0&quot;&gt;15.00&lt;/span&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;list-unstyled mb-1 pb-4&quot;&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        In lorem eget amet sit
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Sodales sit velit ornare
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Tristique suspendisse proin
      &lt;/li&gt;
      &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
        Nunc nullam in dignissim
      &lt;/li&gt;
      &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
        Imperdiet amet suspendisse
      &lt;/li&gt;
      &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
        Tristique nibh erat et quis
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;
      Get this plan now
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Featured pricing plan --&gt;
&lt;div class=&quot;card border-primary h-100 py-lg-3&quot; style=&quot;max-width: 26rem;&quot;&gt;
  &lt;div class=&quot;card-body w-100 mx-auto&quot; style=&quot;max-width: 21rem;&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center border-bottom pb-4 mb-4&quot;&gt;
      &lt;div class=&quot;bg-primary rounded flex-shrink-0 p-2&quot;&gt;
        &lt;img src=&quot;assets/img/landing/saas-1/pricing/business.svg&quot; class=&quot;d-block m-1&quot; width=&quot;44&quot; alt=&quot;Icon&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h3 class=&quot;h4 text-primary mb-0&quot;&gt;Business&lt;/h3&gt;
        &lt;div class=&quot;d-flex align-items-end&quot;&gt;
          &lt;span class=&quot;h5 mb-1 me-1&quot;&gt;$&lt;/span&gt;
          &lt;span class=&quot;h2 mb-0&quot;&gt;35.00&lt;/span&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;list-unstyled mb-1 pb-4&quot;&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        In lorem eget amet sit
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Sodales sit velit ornare
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Tristique suspendisse proin
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Nunc nullam in dignissim
      &lt;/li&gt;
      &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
        Imperdiet amet suspendisse
      &lt;/li&gt;
      &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
        &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
        Tristique nibh erat et quis
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100&quot;&gt;
      Get this plan now
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Cards: Style 2 -->
      <section class="card border-0 mb-4" id="pricing-cards-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Cards: Style 2</h2>
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
              <div class="row row-cols-1 row-cols-md-2 g-4" style="max-width: 55rem;">
                <div class="col">
                  <div class="card h-100 py-lg-4" style="max-width: 26rem;">
                    <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                      <h3>Light</h3>
                      <div class="display-2 text-primary">$8</div>
                      <div class="mb-4">per day</div>
                      <p class="mb-4 pb-4">Phasellus in hendrerit interdum lorem proin pretium dictum urna</p>
                      <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-primary bg-primary h-100 py-lg-4" style="max-width: 26rem;">
                    <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                      <h3 class="text-light">Pro</h3>
                      <div class="display-2 text-light">$97</div>
                      <div class="text-light opacity-70 mb-4">per month</div>
                      <p class="text-light opacity-70 mb-4 pb-4">Morbi et massa fames ac scelerisque sit commodo dignissim aucibus</p>
                      <button class="btn btn-light w-100" type="button">Get this plan now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Regular pricing plan --&gt;
&lt;div class=&quot;card h-100 py-lg-4&quot; style=&quot;max-width: 26rem;&quot;&gt;
  &lt;div class=&quot;card-body w-100 mx-auto text-center&quot; style=&quot;max-width: 23rem;&quot;&gt;
    &lt;h3&gt;Light&lt;/h3&gt;
    &lt;div class=&quot;display-2 text-primary&quot;&gt;$8&lt;/div&gt;
    &lt;div class=&quot;mb-4&quot;&gt;per day&lt;/div&gt;
    &lt;p class=&quot;mb-4 pb-4&quot;&gt;Phasellus in hendrerit interdum lorem proin pretium dictum urna&lt;/p&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100&quot;&gt;
      Get this plan now
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Featured pricing plan --&gt;
&lt;div class=&quot;card border-primary bg-primary h-100 py-lg-4&quot; style=&quot;max-width: 26rem;&quot;&gt;
  &lt;div class=&quot;card-body w-100 mx-auto text-center&quot; style=&quot;max-width: 23rem;&quot;&gt;
    &lt;h3 class=&quot;text-light&quot;&gt;Pro&lt;/h3&gt;
    &lt;div class=&quot;display-2 text-light&quot;&gt;$97&lt;/div&gt;
    &lt;div class=&quot;text-light opacity-70 mb-4&quot;&gt;per month&lt;/div&gt;
    &lt;p class=&quot;text-light opacity-70 mb-4 pb-4&quot;&gt;Morbi et massa fames ac scelerisque sit commodo dignissim aucibus&lt;/p&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-light w-100&quot;&gt;
      Get this plan now
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- List -->
      <section class="card border-0 mb-4" id="pricing-list">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">List</h2>
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
              <div class="card border-0 bg-secondary rounded-4 position-relative mb-3" style="max-width: 700px;">
                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                  <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                    <h3 class="mb-2">4 lessons</h3>
                    <p class="fs-lg mb-0">Valid for all types of classes</p>
                  </div>
                  <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                    <div class="h3 text-primary mb-0 mb-sm-2">$40</div>
                    <span class="fs-sm">$10 per class</span>
                  </div>
                  <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto" type="button">Buy</button>
                </div>
              </div>
              <div class="card border-0 bg-secondary rounded-4 position-relative mb-3" style="max-width: 700px;">
                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                  <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                    <h3 class="mb-2">8 lessons</h3>
                    <p class="fs-lg mb-0">Valid for all types of classes</p>
                  </div>
                  <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                    <div class="h3 text-primary mb-0 mb-sm-2">$72</div>
                    <span class="fs-sm">$9 per class</span>
                  </div>
                  <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto" type="button">Buy</button>
                </div>
              </div>
              <div class="card border-0 bg-secondary rounded-4 position-relative" style="max-width: 700px;">
                <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                  <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width: 27rem;">
                    <h3 class="mb-2">16 lessons</h3>
                    <p class="fs-lg mb-0">Valid for all types of classes</p>
                  </div>
                  <div class="w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0" style="max-width: 8rem;">
                    <div class="h3 text-primary mb-0 mb-sm-2">$120</div>
                    <span class="fs-sm">$7 per class</span>
                  </div>
                  <button class="btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto" type="button">Buy</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Horizontal pricing plan card (List view) --&gt;
&lt;div class=&quot;card border-0 bg-secondary rounded-4 position-relative mb-3&quot;&gt;
  &lt;div class=&quot;card-body d-sm-flex align-items-start text-center text-sm-start&quot;&gt;
    &lt;div class=&quot;w-100 pe-sm-4 mb-3 mb-sm-0&quot; style=&quot;max-width: 27rem;&quot;&gt;
      &lt;h3 class=&quot;mb-2&quot;&gt;4 lessons&lt;/h3&gt;
      &lt;p class=&quot;fs-lg mb-0&quot;&gt;Valid for all types of classes&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;w-100 pe-sm-3 mx-auto me-sm-0 mb-3 mb-sm-0&quot; style=&quot;max-width: 8rem;&quot;&gt;
      &lt;div class=&quot;h3 text-primary mb-0 mb-sm-2&quot;&gt;$40&lt;/div&gt;
      &lt;span class=&quot;fs-sm&quot;&gt;$10 per class&lt;/span&gt;
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-outline-primary stretched-link w-100 w-sm-auto&quot;&gt;
      Buy
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Table -->
      <section class="card border-0 mb-4" id="pricing-table">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Table</h2>
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
              <div class="table-responsive">
                <table class="table text-center text-nowrap">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 py-3">&nbsp;</th>
                      <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Light</span></th>
                      <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Premium</span></th>
                      <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Medium</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Billed monthly</span></th>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">$18</span></td>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">$72</span></td>
                      <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">$36</span></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">Members<i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i></span></th>
                      <td class="border-0 py-3"><span class="text-dark">Just you</span></td>
                      <td class="border-0 py-3"><span class="text-dark">Unlimited</span></td>
                      <td class="border-0 py-3"><span class="text-dark">3 members</span></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">Guest access<i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i></span></th>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">Just you</span></td>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">Unlimited</span></td>
                      <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">3 members</span></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">File uploads<i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i></span></th>
                      <td class="border-0 py-3"><span class="text-dark">2 GB</span></td>
                      <td class="border-0 py-3"><span class="text-dark">30 GB</span></td>
                      <td class="border-0 py-3"><span class="text-dark">10 GB</span></td>
                    </tr>
                    <tr>
                      <th scope="col" class="border-0 text-start pt-4 pb-3 ps-4">
                        <div class="h5 pt-1 mb-0">Features</div>
                      </th>
                      <th scope="col" class="border-0 py-3">&nbsp;</th>
                      <th scope="col" class="border-0 py-3">&nbsp;</th>
                      <th scope="col" class="border-0 py-3">&nbsp;</th>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Web, desktop, &amp; mobile apps</span></th>
                      <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                      <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">Reminders<i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i></span></th>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Priorities</span></th>
                      <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                      <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">Comments<i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i></span></th>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                      <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Integrations</span></th>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">5</span></td>
                      <td class="border-0 bg-secondary py-3"><span class="text-dark">Unlimited</span></td>
                      <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">15</span></td>
                    </tr>
                    <tr>
                      <td class="border-0 pt-4">&nbsp;</td>
                      <td class="border-0 pt-4">
                        <button class="btn btn-outline-primary mt-3" type="button">Get started $18</button>
                      </td>
                      <td class="border-0 pt-4">
                        <button class="btn btn-outline-primary mt-3" type="button">Get started $72</button>
                      </td>
                      <td class="border-0 pt-4">
                        <button class="btn btn-outline-primary mt-3" type="button">Get started $36</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pricing comparison table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table text-center text-nowrap&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;&amp;nbsp;&lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;h5 mb-0&quot;&gt;Light&lt;/span&gt;
        &lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;h5 mb-0&quot;&gt;Premium&lt;/span&gt;
        &lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;h5 mb-0&quot;&gt;Medium&lt;/span&gt;
        &lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;text-body fw-medium&quot;&gt;Billed monthly&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;$18&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;$72&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 rounded-3 rounded-start-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;$36&lt;/span&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;d-flex align-items-center text-body fw-medium&quot;&gt;
            Members
            &lt;i class=&quot;ai-circle-info fs-lg ms-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-placement=&quot;right&quot; data-bs-html=&quot;true&quot; data-bs-content=&quot;Feature description text&quot;&gt;&lt;/i&gt;
          &lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;Just you&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;Unlimited&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;3 members&lt;/span&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;d-flex align-items-center text-body fw-medium&quot;&gt;Guest access&lt;i class=&quot;ai-circle-info fs-lg ms-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-placement=&quot;right&quot; data-bs-html=&quot;true&quot; data-bs-content=&quot;Feature description text&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;Just you&lt;/span&gt;&lt;/td&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;Unlimited&lt;/span&gt;&lt;/td&gt;
        &lt;td class=&quot;border-0 rounded-3 rounded-start-0 bg-secondary py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;3 members&lt;/span&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;d-flex align-items-center text-body fw-medium&quot;&gt;File uploads&lt;i class=&quot;ai-circle-info fs-lg ms-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-placement=&quot;right&quot; data-bs-html=&quot;true&quot; data-bs-content=&quot;Feature description text&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;2 GB&lt;/span&gt;&lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;30 GB&lt;/span&gt;&lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;&lt;span class=&quot;text-dark&quot;&gt;10 GB&lt;/span&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 text-start pt-4 pb-3 ps-4&quot;&gt;
          &lt;div class=&quot;h5 pt-1 mb-0&quot;&gt;Features&lt;/div&gt;
        &lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;&amp;nbsp;&lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;&amp;nbsp;&lt;/th&gt;
        &lt;th scope=&quot;col&quot; class=&quot;border-0 py-3&quot;&gt;&amp;nbsp;&lt;/th&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;text-body fw-medium&quot;&gt;Web, desktop, &amp;amp; mobile apps&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-cross fs-xl text-danger&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 rounded-3 rounded-start-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;d-flex align-items-center text-body fw-medium&quot;&gt;
            Reminders
            &lt;i class=&quot;ai-circle-info fs-lg ms-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-placement=&quot;right&quot; data-bs-html=&quot;true&quot; data-bs-content=&quot;Feature description text&quot;&gt;&lt;/i&gt;
          &lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;text-body fw-medium&quot;&gt;Priorities&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-cross fs-xl text-danger&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 rounded-3 rounded-start-0 bg-secondary py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;d-flex align-items-center text-body fw-medium&quot;&gt;
            Comments
            &lt;i class=&quot;ai-circle-info fs-lg ms-2&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-placement=&quot;right&quot; data-bs-html=&quot;true&quot; data-bs-content=&quot;Feature description text&quot;&gt;&lt;/i&gt;
          &lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 py-3&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl text-success&quot;&gt;&lt;/i&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot; class=&quot;border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4&quot;&gt;
          &lt;span class=&quot;text-body fw-medium&quot;&gt;Integrations&lt;/span&gt;
        &lt;/th&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;5&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;Unlimited&lt;/span&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 rounded-3 rounded-start-0 bg-secondary py-3&quot;&gt;
          &lt;span class=&quot;text-dark&quot;&gt;15&lt;/span&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td class=&quot;border-0 pt-4&quot;&gt;&amp;nbsp;&lt;/td&gt;
        &lt;td class=&quot;border-0 pt-4&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary mt-3&quot;&gt;Get started $18&lt;/button&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 pt-4&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary mt-3&quot;&gt;Get started $72&lt;/button&gt;
        &lt;/td&gt;
        &lt;td class=&quot;border-0 pt-4&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary mt-3&quot;&gt;Get started $36&lt;/button&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Price switch -->
      <section class="card border-0 mb-4" id="pricing-switch">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Price switch</h2>
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
              <div class="price-switch-wrapper bg-secondary p-4 m-n4 rounded-4 rounded-top-0">
                <div class="text-center py-3 mb-3" data-bs-toggle="price">
                  <div class="form-check form-check-inline pe-4">
                    <input class="form-check-input" type="radio" id="monthly" name="price" data-monthly-switch checked>
                    <label class="form-check-label text-dark fs-base fw-medium" for="monthly">Monthly payment</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="annual" name="price" data-annual-switch>
                    <label class="form-check-label text-dark fs-base fw-medium" for="annual">Annual payment</label>
                  </div>
                </div>
                <div class="card border-0 h-100 py-lg-3 mx-auto" style="max-width: 26rem;">
                  <div class="card-body w-100 mx-auto" style="max-width: 21rem;">
                    <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                      <div class="bg-info rounded flex-shrink-0 p-2">
                        <img class="d-block m-1" src="/img/landing/saas-1/pricing/starter.svg" width="44" alt="Icon">
                      </div>
                      <div class="ps-3">
                        <h3 class="h4 text-info mb-0">Starter</h3>
                        <div class="d-flex align-items-end">
                          <span class="h5 mb-1 me-1">$</span>
                          <span class="h2 mb-0" data-monthly-price>15.00</span>
                          <span class="h2 mb-0 d-none" data-annual-price>12.00</span>
                        </div>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-1 pb-4">
                      <li class="d-flex pb-1 mb-2">
                        <i class="ai-check fs-xl mt-1 me-2"></i>
                        In lorem eget amet sit
                      </li>
                      <li class="d-flex pb-1 mb-2">
                        <i class="ai-check fs-xl mt-1 me-2"></i>
                        Sodales sit velit ornare
                      </li>
                      <li class="d-flex pb-1 mb-2">
                        <i class="ai-check fs-xl mt-1 me-2"></i>
                        Tristique suspendisse proin
                      </li>
                      <li class="d-flex text-body-secondary pb-1 mb-2">
                        <i class="ai-cross lead opacity-80 me-2"></i>
                        Nunc nullam in dignissim
                      </li>
                      <li class="d-flex text-body-secondary pb-1 mb-2">
                        <i class="ai-cross lead opacity-80 me-2"></i>
                        Imperdiet amet suspendisse
                      </li>
                      <li class="d-flex text-body-secondary pb-1 mb-2">
                        <i class="ai-cross lead opacity-80 me-2"></i>
                        Tristique nibh erat et quis
                      </li>
                    </ul>
                    <button class="btn btn-outline-primary w-100" type="button">Get this plan now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pricing with monthly / anuall price switch --&gt;
&lt;div class=&quot;price-switch-wrapper&quot;&gt;

  &lt;!-- Price switch --&gt;
  &lt;div class=&quot;text-center py-3 mb-3&quot; data-bs-toggle=&quot;price&quot;&gt;
    &lt;div class=&quot;form-check form-check-inline pe-4&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;monthly&quot; name=&quot;price&quot; data-monthly-switch checked&gt;
      &lt;label class=&quot;form-check-label text-dark fs-base fw-medium&quot; for=&quot;monthly&quot;&gt;
        Monthly payment
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-check form-check-inline&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;annual&quot; name=&quot;price&quot; data-annual-switch&gt;
      &lt;label class=&quot;form-check-label text-dark fs-base fw-medium&quot; for=&quot;annual&quot;&gt;
        Annual payment
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Pricing plan --&gt;
  &lt;div class=&quot;card border-0 h-100 py-lg-3 mx-auto&quot; style=&quot;max-width: 26rem;&quot;&gt;
    &lt;div class=&quot;card-body w-100 mx-auto&quot; style=&quot;max-width: 21rem;&quot;&gt;
      &lt;div class=&quot;d-flex align-items-center border-bottom pb-4 mb-4&quot;&gt;
        &lt;div class=&quot;bg-info rounded flex-shrink-0 p-2&quot;&gt;
          &lt;img src=&quot;assets/img/landing/saas-1/pricing/starter.svg&quot; class=&quot;d-block m-1&quot; width=&quot;44&quot; alt=&quot;Icon&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;ps-3&quot;&gt;
          &lt;h3 class=&quot;h4 text-info mb-0&quot;&gt;Starter&lt;/h3&gt;
          &lt;div class=&quot;d-flex align-items-end&quot;&gt;
            &lt;span class=&quot;h5 mb-1 me-1&quot;&gt;$&lt;/span&gt;
            &lt;span class=&quot;h2 mb-0&quot; data-monthly-price&gt;15.00&lt;/span&gt;
            &lt;span class=&quot;h2 mb-0 d-none&quot; data-annual-price&gt;12.00&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;ul class=&quot;list-unstyled mb-1 pb-4&quot;&gt;
        &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
          In lorem eget amet sit
        &lt;/li&gt;
        &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
          Sodales sit velit ornare
        &lt;/li&gt;
        &lt;li class=&quot;d-flex pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-check fs-xl mt-1 me-2&quot;&gt;&lt;/i&gt;
          Tristique suspendisse proin
        &lt;/li&gt;
        &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
          Nunc nullam in dignissim
        &lt;/li&gt;
        &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
          Imperdiet amet suspendisse
        &lt;/li&gt;
        &lt;li class=&quot;d-flex text-body-secondary pb-1 mb-2&quot;&gt;
          &lt;i class=&quot;ai-cross lead opacity-80 me-2&quot;&gt;&lt;/i&gt;
          Tristique nibh erat et quis
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;
        Get this plan now
      &lt;/button&gt;
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