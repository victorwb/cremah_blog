@extends('layouts.base', ['title' => 'Around UI Kit | Input group'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Input group
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-position" data-scroll="data-scroll">Addon position</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-multiple" data-scroll="data-scroll">Multiple addons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-types" data-scroll="data-scroll">Different types</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-multiple-inputs" data-scroll="data-scroll">Multiple inputs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-button" data-scroll="data-scroll">Button addons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-pill" data-scroll="data-scroll">Pill shape</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-sizing" data-scroll="data-scroll">Sizing</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Input group
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-position" data-scroll="data-scroll">Addon position</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-multiple" data-scroll="data-scroll">Multiple addons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-types" data-scroll="data-scroll">Different types</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-multiple-inputs" data-scroll="data-scroll">Multiple inputs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-addon-button" data-scroll="data-scroll">Button addons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-pill" data-scroll="data-scroll">Pill shape</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ig-sizing" data-scroll="data-scroll">Sizing</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Input group</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Extend form controls by adding text, buttons, etc. on either side.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/forms/input-group/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Addon position -->
      <section class="card border-0 mb-4" id="ig-addon-position">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Addon position</h2>
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
            <div class="tab-pane fade show active" id="preview1" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="ai-lock-closed"></i>
                </span>
                <input class="form-control" type="password" placeholder="Password">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" placeholder="Recipient's e-mail">
                <span class="input-group-text">@example.com</span>
              </div>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="ai-dollar"></i>
                </span>
                <input class="form-control" type="text" placeholder="Amount">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Addon on the left --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-lock-closed&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Password&quot;&gt;
&lt;/div&gt;

&lt;!-- Addon on the right --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's e-mail&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Addons on both sides --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-dollar&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Multiple addons -->
      <section class="card border-0 mb-4" id="ig-addon-multiple">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Multiple addons</h2>
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
            <div class="tab-pane fade show active" id="preview2" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="ai-dollar"></i>
                </span>
                <span class="input-group-text">0.00</span>
                <input class="form-control" type="text" placeholder="Amount">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" placeholder="Amount">
                <span class="input-group-text">0.00</span>
                <span class="input-group-text">
                  <i class="ai-dollar"></i>
                </span>
              </div>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="ai-user"></i>
                </span>
                <span class="input-group-text">
                  <i class="ai-card"></i>
                </span>
                <input class="form-control" type="text" placeholder="Amount">
                <span class="input-group-text">0.00</span>
                <span class="input-group-text">
                  <i class="ai-dollar"></i>
                </span>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Multiple addons on left side --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-dollar&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot;&gt;
&lt;/div&gt;

&lt;!-- Multiple addons on right side --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-dollar&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Multiple addons on both sides --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-card&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-dollar&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Different types -->
      <section class="card border-0 mb-4" id="ig-addon-types">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Different types</h2>
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
            <div class="tab-pane fade show active" id="preview3" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group mb-3">
                <span class="input-group-text align-self-start mt-1">
                  <i class="ai-message"></i>
                </span>
                <textarea class="form-control" placeholder="Type your message here..." rows="6"></textarea>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text text-dark">Options</span>
                <select class="form-select">
                  <option>Choose one...</option>
                  <option>One</option>
                  <option>Two</option>
                  <option>Three</option>
                  <option>Four</option>
                  <option>Five</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input" type="checkbox">
                </div>
                <input class="form-control" type="text" placeholder="Checkbox here">
              </div>
              <div class="input-group">
                <div class="input-group-text">
                  <input class="form-check-input" type="radio" name="radio">
                </div>
                <input class="form-control" type="text" placeholder="Radio button here">
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Icon addon + textarea --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text align-self-start mt-1&quot;&gt;
    &lt;i class=&quot;ai-message&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Type your message here...&quot; rows=&quot;6&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;

&lt;!-- Textual addon + select --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text text-dark&quot;&gt;Options&lt;/span&gt;
  &lt;select class=&quot;form-select&quot;&gt;
    &lt;option&gt;Choose one...&lt;/option&gt;
    &lt;option&gt;One&lt;/option&gt;
    &lt;option&gt;Two&lt;/option&gt;
    &lt;option&gt;Three&lt;/option&gt;
    &lt;option&gt;Four&lt;/option&gt;
    &lt;option&gt;Five&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Checkbox addon + text input --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot;&gt;
  &lt;/div&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Checkbox here&quot;&gt;
&lt;/div&gt;

&lt;!-- Radio button addon + text input --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;radio&quot;&gt;
  &lt;/div&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Radio button here&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Multiple inputs -->
      <section class="card border-0 mb-4" id="ig-multiple-inputs">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Multiple inputs</h2>
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
            <div class="tab-pane fade show active" id="preview4" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group mb-3">
                <span class="input-group-text text-dark">First &amp; last name</span>
                <input class="form-control" type="text" placeholder="First name">
                <span class="border-end border-input"></span>
                <input class="form-control" type="text" placeholder="Last name">
              </div>
              <div class="input-group">
                <input class="form-control" type="time" value="07:45">
                <span class="border-end border-input"></span>
                <input class="form-control" type="time" value="09:00">
                <span class="input-group-text">
                  <i class="ai-time"></i>
                </span>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Multiple inputs with addon on the left --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text text-dark&quot;&gt;First &amp;amp; last name&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot;&gt;
  &lt;span class=&quot;border-end border-input&quot;&gt;&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot;&gt;
&lt;/div&gt;

&lt;!-- Multiple inputs with addon on the right --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; value=&quot;07:45&quot;&gt;
  &lt;span class=&quot;border-end border-input&quot;&gt;&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; value=&quot;09:00&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-time&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Button addons -->
      <section class="card border-0 mb-4" id="ig-addon-button">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Button addons</h2>
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
            <div class="tab-pane fade show active" id="preview5" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group mb-3">
                <button class="btn btn-primary" type="button">Button</button>
                <input class="form-control" type="text" placeholder="Button on the left">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" placeholder="Button on the right">
                <button class="btn btn-primary" type="button">Button</button>
              </div>
              <div class="input-group mb-3">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
                <input class="form-control" type="text" placeholder="Dropdown on the left">
              </div>
              <div class="input-group mb-3">
                <input class="form-control" type="text" placeholder="Dropdown on the right">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Buttons on the right">
                <button class="btn btn-outline-primary btn-icon me-2" type="button" aria-label="Edit">
                  <i class="ai-edit"></i>
                </button>
                <button class="btn btn-outline-danger btn-icon" type="button" aria-label="Delete">
                  <i class="ai-trash"></i>
                </button>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Button addon on the left --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Button on the left&quot;&gt;
&lt;/div&gt;

&lt;!-- Button addon on the right --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Button on the right&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Dropdown addon on the left --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Dropdown&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Dropdown on the right&quot;&gt;
&lt;/div&gt;

&lt;!-- Dropdown addon on the right --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Dropdown on the right&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Dropdown&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end my-1&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Multiple button addons --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Buttons on the right&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-icon&quot; aria-label=&quot;Edit&quot;&gt;
    &lt;i class=&quot;ai-edit&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-icon&quot; aria-label=&quot;Delete&quot;&gt;
    &lt;i class=&quot;ai-trash&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Pill shape -->
      <section class="card border-0 mb-4" id="ig-pill">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Pill shape</h2>
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
            <div class="tab-pane fade show active" id="preview6" role="tabpanel" style="max-width: 40rem;">
              <div class="input-group rounded-pill">
                <span class="input-group-text">
                  <i class="ai-search"></i>
                </span>
                <input class="form-control" type="search" placeholder="Search...">
                <button class="btn btn-primary rounded-pill" type="button">Search</button>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pill shape input group --&gt;
&lt;div class=&quot;input-group rounded-pill&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ai-search&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;search&quot; class=&quot;form-control&quot; placeholder=&quot;Search...&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill&quot;&gt;Search&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Sizing -->
      <section class="card border-0 mb-4" id="ig-sizing">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Sizing</h2>
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
              <div class="d-md-flex">
                <div class="w-100 me-md-3 mb-md-0 mb-3">
                  <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text">
                      <i class="ai-lock-closed"></i>
                    </span>
                    <input class="form-control" type="password" placeholder="Password">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">
                      <i class="ai-lock-closed"></i>
                    </span>
                    <input class="form-control" type="password" placeholder="Password">
                  </div>
                  <div class="input-group input-group-sm">
                    <span class="input-group-text">
                      <i class="ai-lock-closed"></i>
                    </span>
                    <input class="form-control" type="password" placeholder="Password">
                  </div>
                </div>
                <div class="w-100">
                  <div class="input-group input-group-lg mb-3">
                    <select class="form-select">
                      <option>Choose option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                    <button class="btn btn-primary" type="button">Submit</button>
                  </div>
                  <div class="input-group mb-3">
                    <select class="form-select">
                      <option>Choose option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                    <button class="btn btn-primary" type="button">Submit</button>
                  </div>
                  <div class="input-group input-group-sm">
                    <select class="form-select">
                      <option>Choose option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                    <button class="btn btn-primary" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Large input group --&gt;
&lt;div class=&quot;input-group input-group-lg&quot;&gt;
  ...
&lt;/div&gt;

&lt;!-- Normal input group --&gt;
&lt;div class=&quot;input-group&quot;&gt;
  ...
&lt;/div&gt;

&lt;!-- Small input group --&gt;
&lt;div class=&quot;input-group input-group-sm&quot;&gt;
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