@extends('layouts.base', ['title' => 'Around UI Kit | Charts'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Charts
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-line" data-scroll="data-scroll">Line chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-bar" data-scroll="data-scroll">Bar chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-pie" data-scroll="data-scroll">Pie chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-doughnut" data-scroll="data-scroll">Doughnut chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-polar" data-scroll="data-scroll">Polar area chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-radar" data-scroll="data-scroll">Radar chart</a>
              </li>
            </ul>
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
        <a class="nav-link px-0 py-2" href="carousel#carousel-m">
          <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
          Carousel (Slider)
        </a>
      </li>
      <li class="nav-item" id="charts-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Charts
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-line" data-scroll="data-scroll">Line chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-bar" data-scroll="data-scroll">Bar chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-pie" data-scroll="data-scroll">Pie chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-doughnut" data-scroll="data-scroll">Doughnut chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-polar" data-scroll="data-scroll">Polar area chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#chart-radar" data-scroll="data-scroll">Radar chart</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Charts</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Customizable responsive charts, including: Line, Bar, Pie charts and more.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>

      <div class="mb-4 pb-2">
        <h6 class="fs-sm mb-2">Data attributes API</h6>
        <p class="fs-sm mb-1">Around added extra layer of data attribute to access the core features of the plugin right in HTML document.</p>
        <code>data-chart</code><span class="fs-sm"> - to pass in data in JSON format to be displayed in line, bar, pie or other type of chart.</span>
        <p class="fs-sm pt-2">Check the code examples below.</p>
        <h6 class="pt-1 fs-sm mb-2">For more features / options visit plugin documentation website:</h6>
        <a class="fs-sm" href="https://www.chartjs.org/docs/latest/" target="_blank" rel="noopener">https://www.chartjs.org/docs/latest/</a>
      </div>


      <!-- Line chart -->
      <section class="card border-0 mb-4" id="chart-line">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Line chart</h2>
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
              <div style="max-width: 35rem;">
                <canvas data-chart='{
                      "type": "line",
                      "data": {
                        "labels": ["W1", "W2", "W3", "W4", "W5", "W6", "W7", "W8", "W9"],
                        "datasets": [
                          {
                            "label": "Dataset 1",
                            "data": [12, 9, 7, 8, 6, 4, 3, 2, 0],
                            "backgroundColor": "rgba(68,140,116,.35)",
                            "borderWidth": 2,
                            "borderColor": "#448c74",
                            "pointBackgroundColor": "#448c74",
                            "pointBorderWidth": 8,
                            "pointBorderColor": "rgba(68,140,116,.35)",
                            "pointHoverBorderColor": "#448c74",
                            "pointHoverBorderWidth": 6
                          },
                          {
                            "label": "Dataset 2",
                            "data": [2, 1, 3, 7, 9, 6, 7.7, 4, 7],
                            "backgroundColor": "rgba(237,203,80,.35)",
                            "borderWidth": 2,
                            "borderColor": "#edcb50",
                            "pointBackgroundColor": "#edcb50",
                            "pointBorderWidth": 8,
                            "pointBorderColor": "rgba(237,203,80,.35)",
                            "pointHoverBorderColor": "#edcb50",
                            "pointHoverBorderWidth": 6
                          },
                          {
                            "label": "Dataset 2",
                            "data": [1, 3, 4, 5, 6, 8, 9, 10, 11],
                            "backgroundColor": "rgba(237,80,80,.35)",
                            "borderWidth": 2,
                            "borderColor": "#ed5050",
                            "pointBackgroundColor": "#ed5050",
                            "pointBorderWidth": 8,
                            "pointBorderColor": "rgba(237,80,80,.35)",
                            "pointHoverBorderColor": "#ed5050",
                            "pointHoverBorderWidth": 6
                          }
                        ]
                      },
                      "options": {
                        "scales": {
                          "y": {
                            "beginAtZero": true,
                            "border": {
                              "color": "rgba(133,140,151,.18)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          },
                          "x": {
                            "border": {
                              "color": "rgba(133,140,151,.18)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Line chart: Multiple lines of different color + Legend --&gt;
&lt;canvas data-chart='{
  &quot;type&quot;: &quot;line&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;W1&quot;, &quot;W2&quot;, &quot;W3&quot;, &quot;W4&quot;, &quot;W5&quot;, &quot;W6&quot;, &quot;W7&quot;, &quot;W8&quot;, &quot;W9&quot;],
    &quot;datasets&quot;: [
      {
        &quot;label&quot;: &quot;Dataset 1&quot;,
        &quot;data&quot;: [12, 9, 7, 8, 6, 4, 3, 2, 0],
        &quot;backgroundColor&quot;: &quot;rgba(68,140,116,.35)&quot;,
        &quot;borderWidth&quot;: 2,
        &quot;borderColor&quot;: &quot;#448c74&quot;,
        &quot;pointBackgroundColor&quot;: &quot;#448c74&quot;,
        &quot;pointBorderWidth&quot;: 8,
        &quot;pointBorderColor&quot;: &quot;rgba(68,140,116,.35)&quot;,
        &quot;pointHoverBorderColor&quot;: &quot;#448c74&quot;,
        &quot;pointHoverBorderWidth&quot;: 6
      },
      {
        &quot;label&quot;: &quot;Dataset 2&quot;,
        &quot;data&quot;: [2, 1, 3, 7, 9, 6, 7.7, 4, 7],
        &quot;backgroundColor&quot;: &quot;rgba(237,203,80,.35)&quot;,
        &quot;borderWidth&quot;: 2,
        &quot;borderColor&quot;: &quot;#edcb50&quot;,
        &quot;pointBackgroundColor&quot;: &quot;#edcb50&quot;,
        &quot;pointBorderWidth&quot;: 8,
        &quot;pointBorderColor&quot;: &quot;rgba(237,203,80,.35)&quot;,
        &quot;pointHoverBorderColor&quot;: &quot;#edcb50&quot;,
        &quot;pointHoverBorderWidth&quot;: 6
      },
      {
        &quot;label&quot;: &quot;Dataset 2&quot;,
        &quot;data&quot;: [1, 3, 4, 5, 6, 8, 9, 10, 11],
        &quot;backgroundColor&quot;: &quot;rgba(237,80,80,.35)&quot;,
        &quot;borderWidth&quot;: 2,
        &quot;borderColor&quot;: &quot;#ed5050&quot;,
        &quot;pointBackgroundColor&quot;: &quot;#ed5050&quot;,
        &quot;pointBorderWidth&quot;: 8,
        &quot;pointBorderColor&quot;: &quot;rgba(237,80,80,.35)&quot;,
        &quot;pointHoverBorderColor&quot;: &quot;#ed5050&quot;,
        &quot;pointHoverBorderWidth&quot;: 6
      }
    ]
  },
  &quot;options&quot;: {
    &quot;scales&quot;: {
      &quot;y&quot;: {
        &quot;beginAtZero&quot;: true,
        &quot;border&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      },
      &quot;x&quot;: {
        &quot;border&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Bar chart -->
      <section class="card border-0 mb-4" id="chart-bar">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Bar chart</h2>
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
              <div style="max-width: 35rem;">
                <canvas data-chart='{
                      "type": "bar",
                      "data": {
                        "labels": ["2018", "2019", "2020", "2021", "2022", "2023"],
                        "datasets": [
                          {
                            "label": "Dataset 1",
                            "data": [12000, 9000, 7000, 8000, 11000, 6000],
                            "borderWidth": 2,
                            "borderColor": "#448c74",
                            "backgroundColor": "rgba(68,140,116,.35)",
                            "hoverBackgroundColor": "rgba(68,140,116,.75)"
                          },
                          {
                            "label": "Dataset 2",
                            "data": [3500, 5000, 8750, 1300, 3000, 8750],
                            "borderWidth": 2,
                            "borderColor": "#edcb50",
                            "backgroundColor": "rgba(237,203,80,.35)",
                            "hoverBackgroundColor": "rgba(237,203,80,.75)"
                          }
                        ]
                      },
                      "options": {
                        "scales": {
                          "y": {
                            "beginAtZero": true,
                            "border": {
                              "color": "rgba(133,140,151,.18)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          },
                          "x": {
                            "border": {
                              "color": "rgba(133,140,151,.18)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Bar chart: Multiple bars of different color + Legend --&gt;
&lt;canva data-chart='{
  &quot;type&quot;: &quot;bar&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;2018&quot;, &quot;2019&quot;, &quot;2020&quot;, &quot;2021&quot;, &quot;2022&quot;, &quot;2023&quot;],
    &quot;datasets&quot;: [
      {
        &quot;label&quot;: &quot;Dataset 1&quot;,
        &quot;data&quot;: [12000, 9000, 7000, 8000, 11000, 6000],
        &quot;borderWidth&quot;: 2,
        &quot;borderColor&quot;: &quot;#448c74&quot;,
        &quot;backgroundColor&quot;: &quot;rgba(68,140,116,.35)&quot;,
        &quot;hoverBackgroundColor&quot;: &quot;rgba(68,140,116,.75)&quot;
      },
      {
        &quot;label&quot;: &quot;Dataset 2&quot;,
        &quot;data&quot;: [3500, 5000, 8750, 1300, 3000, 8750],
        &quot;borderWidth&quot;: 2,
        &quot;borderColor&quot;: &quot;#edcb50&quot;,
        &quot;backgroundColor&quot;: &quot;rgba(237,203,80,.35)&quot;,
        &quot;hoverBackgroundColor&quot;: &quot;rgba(237,203,80,.75)&quot;
      }
    ]
  },
  &quot;options&quot;: {
    &quot;scales&quot;: {
      &quot;y&quot;: {
        &quot;beginAtZero&quot;: true,
        &quot;border&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      },
      &quot;x&quot;: {
        &quot;border&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Pie chart -->
      <section class="card border-0 mb-4" id="chart-pie">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Pie chart</h2>
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
              <div style="max-width: 32rem;">
                <canvas data-chart='{
                      "type": "pie",
                      "data": {
                        "labels": ["Dataset 1", "Dataset 2", "Dataset 3"],
                        "datasets": [
                          {
                            "label": "Value, %",
                            "data": [42, 25, 33],
                            "borderWidth": 0,
                            "backgroundColor": [
                              "#448c74",
                              "#ed5050",
                              "#edcb50"
                            ],
                            "hoverBackgroundColor": [
                              "#448c74",
                              "#ed5050",
                              "#edcb50"
                            ]
                          }
                        ]
                      },
                      "options": {
                        "plugins": {
                          "legend": {
                            "position": "right",
                            "labels": {
                              "usePointStyle": true,
                              "boxWidth": 12,
                              "boxHeight": 12,
                              "useBorderRadius": true,
                              "borderRadius": 8,
                              "padding": 20,
                              "font": {
                                "size": 15
                              }
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pie chart: Multiple slices of different color + Legend --&gt;
&lt;canvas data-chart='{
  &quot;type&quot;: &quot;pie&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;Dataset 1&quot;, &quot;Dataset 2&quot;, &quot;Dataset 3&quot;],
    &quot;datasets&quot;: [
      {
        &quot;label&quot;: &quot;Value, %&quot;,
        &quot;data&quot;: [42, 25, 33],
        &quot;borderWidth&quot;: 0,
        &quot;backgroundColor&quot;: [
          &quot;#448c74&quot;,
          &quot;#ed5050&quot;,
          &quot;#edcb50&quot;
        ],
        &quot;hoverBackgroundColor&quot;: [
          &quot;#448c74&quot;,
          &quot;#ed5050&quot;,
          &quot;#edcb50&quot;
        ]
      }
    ]
  },
  &quot;options&quot;: {
    &quot;plugins&quot;: {
      &quot;legend&quot;: {
        &quot;position&quot;: &quot;right&quot;,
        &quot;labels&quot;: {
          &quot;usePointStyle&quot;: true,
          &quot;boxWidth&quot;: 12,
          &quot;boxHeight&quot;: 12,
          &quot;useBorderRadius&quot;: true,
          &quot;borderRadius&quot;: 8,
          &quot;padding&quot;: 20,
          &quot;font&quot;: {
            &quot;size&quot;: 15
          }
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Doughnut chart -->
      <section class="card border-0 mb-4" id="chart-doughnut">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Doughnut chart</h2>
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
              <div style="max-width: 32rem;">
                <canvas data-chart='{
                      "type": "doughnut",
                      "data": {
                        "labels": ["Dataset 1", "Dataset 2", "Dataset 3"],
                        "datasets": [
                          {
                            "label": "Value, %",
                            "data": [42, 25, 33],
                            "borderWidth": 0,
                            "backgroundColor": [
                              "#448c74",
                              "#ed5050",
                              "#edcb50"
                            ],
                            "hoverBackgroundColor": [
                              "#448c74",
                              "#ed5050",
                              "#edcb50"
                            ]
                          }
                        ]
                      },
                      "options": {
                        "plugins": {
                          "legend": {
                            "position": "right",
                            "labels": {
                              "usePointStyle": true,
                              "boxWidth": 12,
                              "boxHeight": 12,
                              "useBorderRadius": true,
                              "borderRadius": 8,
                              "padding": 20,
                              "font": {
                                "size": 15
                              }
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Doughnut chart: Multiple slices of different color + Legend --&gt;
&lt;canvas data-chart='{
  &quot;type&quot;: &quot;doughnut&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;Dataset 1&quot;, &quot;Dataset 2&quot;, &quot;Dataset 3&quot;],
    &quot;datasets&quot;: [
      {
        &quot;label&quot;: &quot;Value, %&quot;,
        &quot;data&quot;: [42, 25, 33],
        &quot;borderWidth&quot;: 0,
        &quot;backgroundColor&quot;: [
          &quot;#448c74&quot;,
          &quot;#ed5050&quot;,
          &quot;#edcb50&quot;
        ],
        &quot;hoverBackgroundColor&quot;: [
          &quot;#448c74&quot;,
          &quot;#ed5050&quot;,
          &quot;#edcb50&quot;
        ]
      }
    ]
  },
  &quot;options&quot;: {
    &quot;plugins&quot;: {
      &quot;legend&quot;: {
        &quot;position&quot;: &quot;right&quot;,
        &quot;labels&quot;: {
          &quot;usePointStyle&quot;: true,
          &quot;boxWidth&quot;: 12,
          &quot;boxHeight&quot;: 12,
          &quot;useBorderRadius&quot;: true,
          &quot;borderRadius&quot;: 8,
          &quot;padding&quot;: 20,
          &quot;font&quot;: {
            &quot;size&quot;: 15
          }
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Polar area chart -->
      <section class="card border-0 mb-4" id="chart-polar">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Polar area chart</h2>
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
              <div style="max-width: 33rem;">
                <canvas data-chart='{
                      "type": "polarArea",
                      "data": {
                        "labels": ["Red", "Green", "Yellow", "Grey", "Blue"],
                        "datasets": [{
                          "label": "My dataset",
                          "data": [11, 16, 7, 3, 14],
                          "borderWidth": 0,
                          "backgroundColor": [
                            "#ed5050",
                            "#448c74",
                            "#edcb50",
                            "#e3e9ef",
                            "#3f7fca"
                          ],
                          "hoverBackgroundColor": [
                            "#ed5050",
                            "#448c74",
                            "#edcb50",
                            "#e3e9ef",
                            "#3f7fca"
                          ]
                        }]
                      },
                      "options": {
                        "scales": {
                          "r": {
                            "ticks": {
                              "backdropColor": "rgba(255,255,255,0)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Polar area chart: Multiple slices of different color + Legend --&gt;
&lt;canvas data-chart='{
  &quot;type&quot;: &quot;polarArea&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;Red&quot;, &quot;Green&quot;, &quot;Yellow&quot;, &quot;Grey&quot;, &quot;Blue&quot;],
    &quot;datasets&quot;: [{
      &quot;label&quot;: &quot;My dataset&quot;,
      &quot;data&quot;: [11, 16, 7, 3, 14],
      &quot;borderWidth&quot;: 0,
      &quot;backgroundColor&quot;: [
        &quot;#ed5050&quot;,
        &quot;#448c74&quot;,
        &quot;#edcb50&quot;,
        &quot;#e3e9ef&quot;,
        &quot;#3f7fca&quot;
      ],
      &quot;hoverBackgroundColor&quot;: [
        &quot;#ed5050&quot;,
        &quot;#448c74&quot;,
        &quot;#edcb50&quot;,
        &quot;#e3e9ef&quot;,
        &quot;#3f7fca&quot;
      ]
    }]
  },
  &quot;options&quot;: {
    &quot;scales&quot;: {
      &quot;r&quot;: {
        &quot;ticks&quot;: {
          &quot;backdropColor&quot;: &quot;rgba(255,255,255,0)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Radar chart -->
      <section class="card border-0 mb-4" id="chart-radar">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Radar chart</h2>
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
              <div style="max-width: 35rem;">
                <canvas data-chart='{
                      "type": "radar",
                      "data": {
                        "labels": ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                        "datasets": [
                          {
                            "label": "Dataset 1",
                            "data": [65, 59, 90, 81, 56, 55, 40],
                            "fill": true,
                            "backgroundColor": "rgba(237, 80, 80, .15)",
                            "borderColor": "#ed5050",
                            "pointBackgroundColor": "#ed5050",
                            "pointBorderColor": "#fff",
                            "pointHoverBackgroundColor": "#fff",
                            "pointHoverBorderColor": "#ed5050"
                          },
                          {
                            "label": "Dataset 2",
                            "data": [28, 48, 40, 19, 96, 27, 100],
                            "fill": true,
                            "backgroundColor": "rgba(63, 127, 202, .15)",
                            "borderColor": "#3f7fca",
                            "pointBackgroundColor": "#3f7fca",
                            "pointBorderColor": "#fff",
                            "pointHoverBackgroundColor": "#fff",
                            "pointHoverBorderColor": "#3f7fca"
                          }
                        ]
                      },
                      "options": {
                        "elements": {
                          "line": {
                            "borderWidth": 3
                          }
                        },
                        "scales": {
                          "r": {
                            "ticks": {
                              "backdropColor": "rgba(255,255,255,0)"
                            },
                            "grid": {
                              "color": "rgba(133,140,151,.18)"
                            }
                          }
                        }
                      }
                    }'></canvas>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Radar chart: Multiple lines of different color with fill enabled + Legend --&gt;
&lt;canvas data-chart='{
  &quot;type&quot;: &quot;radar&quot;,
  &quot;data&quot;: {
    &quot;labels&quot;: [&quot;Eating&quot;, &quot;Drinking&quot;, &quot;Sleeping&quot;, &quot;Designing&quot;, &quot;Coding&quot;, &quot;Cycling&quot;, &quot;Running&quot;],
    &quot;datasets&quot;: [
      {
        &quot;label&quot;: &quot;Dataset 1&quot;,
        &quot;data&quot;: [65, 59, 90, 81, 56, 55, 40],
        &quot;fill&quot;: true,
        &quot;backgroundColor&quot;: &quot;rgba(237, 80, 80, .15)&quot;,
        &quot;borderColor&quot;: &quot;#ed5050&quot;,
        &quot;pointBackgroundColor&quot;: &quot;#ed5050&quot;,
        &quot;pointBorderColor&quot;: &quot;#fff&quot;,
        &quot;pointHoverBackgroundColor&quot;: &quot;#fff&quot;,
        &quot;pointHoverBorderColor&quot;: &quot;#ed5050&quot;
      },
      {
        &quot;label&quot;: &quot;Dataset 2&quot;,
        &quot;data&quot;: [28, 48, 40, 19, 96, 27, 100],
        &quot;fill&quot;: true,
        &quot;backgroundColor&quot;: &quot;rgba(63, 127, 202, .15)&quot;,
        &quot;borderColor&quot;: &quot;#3f7fca&quot;,
        &quot;pointBackgroundColor&quot;: &quot;#3f7fca&quot;,
        &quot;pointBorderColor&quot;: &quot;#fff&quot;,
        &quot;pointHoverBackgroundColor&quot;: &quot;#fff&quot;,
        &quot;pointHoverBorderColor&quot;: &quot;#3f7fca&quot;
      }
    ]
  },
  &quot;options&quot;: {
    &quot;elements&quot;: {
      &quot;line&quot;: {
        &quot;borderWidth&quot;: 3
      }
    },
    &quot;scales&quot;: {
      &quot;r&quot;: {
        &quot;ticks&quot;: {
          &quot;backdropColor&quot;: &quot;rgba(255,255,255,0)&quot;
        },
        &quot;grid&quot;: {
          &quot;color&quot;: &quot;rgba(133,140,151,.18)&quot;
        }
      }
    }
  }
}'&gt;&lt;/canvas&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection
