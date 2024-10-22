@extends('layouts.base', ['title' => 'Around UI Kit | Tables'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Tables
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-basic" data-scroll="data-scroll">Basic example</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-dark" data-scroll="data-scroll">Dark table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-striped-rows" data-scroll="data-scroll">Striped rows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-striped-columns" data-scroll="data-scroll">Striped columns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-bordered" data-scroll="data-scroll">Bordered table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-hoverable" data-scroll="data-scroll">Hoverable rows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-contextual" data-scroll="data-scroll">Contextual colors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-color-borders" data-scroll="data-scroll">Color borders</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Tables
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-basic" data-scroll="data-scroll">Basic example</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-dark" data-scroll="data-scroll">Dark table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-striped-rows" data-scroll="data-scroll">Striped rows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-striped-columns" data-scroll="data-scroll">Striped columns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-bordered" data-scroll="data-scroll">Bordered table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-hoverable" data-scroll="data-scroll">Hoverable rows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-contextual" data-scroll="data-scroll">Contextual colors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#tables-color-borders" data-scroll="data-scroll">Color borders</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Tables</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Examples for opt-in styling of tables.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/content/tables/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Basic example -->
      <section class="card border-0 mb-4" id="tables-basic">
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
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Jane</td>
                      <td>Birkins</td>
                      <td>Support</td>
                      <td>+3 774 28 50</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
        &lt;td&gt;Jane&lt;/td&gt;
        &lt;td&gt;Birkins&lt;/td&gt;
        &lt;td&gt;Support&lt;/td&gt;
        &lt;td&gt;+3 774 28 50&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Dark table -->
      <section class="card border-0 mb-4" id="tables-dark">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Dark table</h2>
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
              <div class="table-responsive">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Jane</td>
                      <td>Birkins</td>
                      <td>Support</td>
                      <td>+3 774 28 50</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Dark table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-dark&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
        &lt;td&gt;Jane&lt;/td&gt;
        &lt;td&gt;Birkins&lt;/td&gt;
        &lt;td&gt;Support&lt;/td&gt;
        &lt;td&gt;+3 774 28 50&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Striped rows -->
      <section class="card border-0 mb-4" id="tables-striped-rows">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Striped rows</h2>
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
              <div class="table-responsive mb-3">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Light table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-striped&quot;&gt;
    &lt;thead;&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-dark table-striped&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Striped columns -->
      <section class="card border-0 mb-4" id="tables-striped-columns">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Striped columns</h2>
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
              <div class="table-responsive mb-3">
                <table class="table table-striped-columns">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-dark table-striped-columns">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Light table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-striped&quot;&gt;
    &lt;thead;&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-dark table-striped&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Bordered table -->
      <section class="card border-0 mb-4" id="tables-bordered">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Bordered table</h2>
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
              <div class="table-responsive mb-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-dark table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Light bordered table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-bordered&quot;&gt;
    &lt;thead;&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark bordered table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-dark table-bordered&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Hoverable rows -->
      <section class="card border-0 mb-4" id="tables-hoverable">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Hoverable rows</h2>
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
              <div class="table-responsive mb-3">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-dark table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Kale</td>
                      <td>Thornton</td>
                      <td>Developer</td>
                      <td>+3 285 42 88</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Light table with hoverable rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-hover&quot;&gt;
    &lt;thead;&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with hoverable rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table table-dark table-hover&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;First Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Last Name&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Contextual colors -->
      <section class="card border-0 mb-4" id="tables-contextual">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Contextual colors</h2>
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
              <div class="table-responsive">
                <table class="table" style="--ar-table-bg: transparent;">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Class</th>
                      <th scope="col">Heading</th>
                      <th scope="col">Heading</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-primary bg-opacity-10">
                      <th scope="row">1</th>
                      <td>Primary</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="bg-secondary">
                      <th scope="row">2</th>
                      <td>Secondary</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="bg-success bg-opacity-10">
                      <th scope="row">3</th>
                      <td>Success</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="bg-info bg-opacity-10">
                      <th scope="row">4</th>
                      <td>Info</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="bg-warning bg-opacity-10">
                      <th scope="row">5</th>
                      <td>Warning</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                    <tr class="bg-danger bg-opacity-10">
                      <th scope="row">6</th>
                      <td>Danger</td>
                      <td>Column content</td>
                      <td>Column content</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Table with contextual rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table&quot; style=&quot;--ar-table-bg: transparent;&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
        &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr class=&quot;bg-primary bg-opacity-10&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;Primary&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-secondary&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Secondary&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-success bg-opacity-10&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Success&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-info bg-opacity-10&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
        &lt;td&gt;Info&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-warning bg-opacity-10&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;5&lt;/th&gt;
        &lt;td&gt;Warning&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class=&quot;bg-danger bg-opacity-10&quot;&gt;
        &lt;th scope=&quot;row&quot;&gt;6&lt;/th&gt;
        &lt;td&gt;Danger&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
        &lt;td&gt;Column content&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Color borders -->
      <section class="card border-0 mb-4" id="tables-color-borders">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Color borders</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview8" data-bs-toggle="tab" role="tab" aria-controls="preview8" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html8" data-bs-toggle="tab" role="tab" aria-controls="html8" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview8" role="tabpanel">
              <div class="table-responsive mb-3">
                <table class="table table-bordered border-info">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered border-danger">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>CEO, Founder</td>
                      <td>+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anna</td>
                      <td>Cabana</td>
                      <td>Designer</td>
                      <td>+3 434 65 93</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Color borders on tables --&gt;
&lt;table class=&quot;table table-bordered border-info&quot;&gt;
  ...
&lt;/table&gt;
&lt;table class=&quot;table table-bordered border-danger&quot;&gt;
  ...
&lt;/table&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection