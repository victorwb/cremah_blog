@extends('layouts.base', ['title' => 'Around UI Kit | Icon font'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Icon font
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ui-icons" data-scroll="data-scroll">UI icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#brand-icons" data-scroll="data-scroll">Brand icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#yoga-icons" data-scroll="data-scroll">Yoga demo icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#coworking-icons" data-scroll="data-scroll">Coworking demo icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#influencer-icons" data-scroll="data-scroll">Influencer demo icons</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Icon font
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#ui-icons" data-scroll="data-scroll">UI icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#brand-icons" data-scroll="data-scroll">Brand icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#yoga-icons" data-scroll="data-scroll">Yoga demo icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#coworking-icons" data-scroll="data-scroll">Coworking demo icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#influencer-icons" data-scroll="data-scroll">Influencer demo icons</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Icon font</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Collection of vector icons in the format of font. To add icon simply apply css class listed under each icon to <code>&lt;i&gt;</code> or <code>&lt;span&gt;</code> tag.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>

      <section class="card border-0 mb-4">
        <div class="card-body text-center">


          <!-- UI Icons -->
          <h2 class="h4 pb-2 pb-lg-3 mb-4" id="ui-icons">UI icons</h2>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            <div class="col">
              <i class="h2 text-nav fw-normal ai-activity"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-activity</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-align-center"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-align-center</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-align-justify"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-align-justify</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-align-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-align-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-align-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-align-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-anchor"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-anchor</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-archive"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-archive</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-down-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-down-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-down-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-down-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-down"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-down</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-up-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-up-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-up-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-up-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-arrow-up"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-arrow-up</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-at"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-at</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-award"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-award</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bar-chart-1"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bar-chart-1</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bar-chart-2"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bar-chart-2</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bar-chart-3"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bar-chart-3</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-battery"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-battery</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-battery-1"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-battery-1</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-battery-2"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-battery-2</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-battery-3"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-battery-3</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-battery-charge"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-battery-charge</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bell"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bell</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bell-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bell-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bell-off"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bell-off</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bell-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bell-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bluetooth"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bluetooth</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-book"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-book</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bookmark-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bookmark-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bookmark-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bookmark-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bookmark"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bookmark</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-box"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-box</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-briefcase"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-briefcase</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-briefcase-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-briefcase-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bulb"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bulb</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-bulb-alt"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-bulb-alt</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-calendar"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-calendar</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-calendar-check"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-calendar-check</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-calendar-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-calendar-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-calendar-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-calendar-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-calendar-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-calendar-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-camera"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-camera</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-camera-off"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-camera-off</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-capsule"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-capsule</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-card"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-card</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cart"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cart</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cast"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cast</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chart"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chart</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-check"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-check</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-check-alt"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-check-alt</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-checks"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-checks</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevron-down"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevron-down</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevron-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevron-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevron-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevron-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevron-up"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevron-up</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevrons-down"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevrons-down</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevrons-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevrons-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevrons-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevrons-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chevrons-up"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chevrons-up</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chip"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chip</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-alert"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-alert</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-arrow-down"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-arrow-down</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-arrow-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-arrow-left</div>
            </div>
            <div class="col"><i class="h2 text-nav fw-normal ai-circle-arrow-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-arrow-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-arrow-up"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-arrow-up</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-check"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-check</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-check-filled"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-check-filled</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-help"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-help</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-info"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-info</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-slash"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-slash</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-circle-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-circle-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-clipboard"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-clipboard</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-download"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-download</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-drizzle"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-drizzle</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-lightning"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-lightning</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-rain"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-rain</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-snow"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-snow</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cloud-upload"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cloud-upload</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-code"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-code</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-code-curly"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-code-curly</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-collapse"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-collapse</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-command"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-command</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-compass"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-compass</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-copy"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-copy</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-crop"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-crop</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cross"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cross</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cross-alt"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cross-alt</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-crosshair"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-crosshair</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cup"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cup</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cup-hot"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cup-hot</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dashboard"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dashboard</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-database"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-database</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-delete"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-delete</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-disc"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-disc</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-discount"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-discount</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dislike"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dislike</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dollar"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dollar</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dots"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dots</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dots-horizontal"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dots-horizontal</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dots-vertical"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dots-vertical</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-download"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-download</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-drawer"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-drawer</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-droplet"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-droplet</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-edit"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-edit</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-edit-alt"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-edit-alt</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-emoji-happy"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-emoji-happy</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-emoji-meh"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-emoji-meh</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-emoji-sad"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-emoji-sad</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-emoji-smile"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-emoji-smile</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-emoji-surprise"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-emoji-surprise</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-expand"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-expand</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-external-link"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-external-link</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-fast-forward"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-fast-forward</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-file"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-file</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-file-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-file-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-file-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-file-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-file-text"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-file-text</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-filter"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-filter</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-flag"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-flag</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-folder"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-folder</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-folder-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-folder-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-folder-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-folder-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-gift"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-gift</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-globe"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-globe</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-grid"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-grid</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-hard-drive"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-hard-drive</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-hashtag"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-hashtag</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-headphone"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-headphone</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-heart"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-heart</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-heart-filled"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-heart-filled</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-help"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-help</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-hide"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-hide</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-home"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-home</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-horizontal-align-center"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-horizontal-align-center</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-horizontal-align-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-horizontal-align-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-horizontal-align-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-horizontal-align-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-image"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-image</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-inbox"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-inbox</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-joystick"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-joystick</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-key"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-key</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-layer"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-layer</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-layout-column"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-layout-column</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-layout-grid"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-layout-grid</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-layout-row"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-layout-row</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-layout-side"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-layout-side</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-like"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-like</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-link"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-link</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-list"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-list</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-lock-closed"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-lock-closed</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-lock-open"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-lock-open</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-login"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-login</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-logout"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-logout</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-mail"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-mail</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-mail-filled"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-mail-filled</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-map-pin"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-map-pin</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-map"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-map</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-maximize"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-maximize</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-menu"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-menu</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-message"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-message</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-message-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-message-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-message-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-message-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-messages"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-messages</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-microphone"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-microphone</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-microphone-off"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-microphone-off</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-minimize"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-minimize</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-mobile"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-mobile</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-monitor"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-monitor</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-moon"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-moon</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-movie"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-movie</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-music"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-music</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-note"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-note</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-octagon-alert"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-octagon-alert</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-octagon"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-octagon</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-open-book"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-open-book</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-paint-roll"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-paint-roll</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-paperclip"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-paperclip</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pause"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pause</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pen"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pen</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pencil"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pencil</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-phone"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-phone</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-phone-call"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-phone-call</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-phone-in"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-phone-in</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-phone-out"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-phone-out</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-phone-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-phone-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pie-chart"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pie-chart</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pin"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pin</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-planet"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-planet</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-play"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-play</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-play-filled"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-play-filled</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-play-next"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-play-next</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-play-previous"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-play-previous</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-plug"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-plug</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-power"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-power</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-printer"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-printer</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-printer"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-printer</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pulse"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pulse</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-quotes"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-quotes</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-redo"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-redo</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-refresh"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-refresh</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-repeat"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-repeat</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rewind"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rewind</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rocket"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rocket</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rotate-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rotate-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rotate-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rotate-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rss"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rss</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-save"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-save</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-scan"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-scan</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-search"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-search</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-search-settings"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-search-settings</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-send"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-send</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-server"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-server</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-settings"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-settings</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-share"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-share</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-shield"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-shield</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-shopping-bag"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-shopping-bag</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-show"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-show</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-shuffle"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-shuffle</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-slider"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-slider</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-speaker"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-speaker</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-square"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-square</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-square-info"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-square-info</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-square-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-square-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-square-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-square-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-square-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-square-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-star"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-star</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-star-half"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-star-half</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-star-filled"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-star-filled</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-sticker"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-sticker</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-sun"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-sun</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-table"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-table</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-table-column"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-table-column</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-table-row"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-table-row</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tablet"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tablet</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tag"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tag</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-terminal"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-terminal</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-time"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-time</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-toggle-left"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-toggle-left</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-toggle-right"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-toggle-right</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tool"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tool</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-trash"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-trash</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-triangle"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-triangle</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-triangle-alert"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-triangle-alert</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-undo"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-undo</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-upload"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-upload</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user-check"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user-check</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user-group"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user-group</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user-minus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user-minus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user-plus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user-plus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-user-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-user-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vertical-align-bottom"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vertical-align-bottom</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vertical-align-center"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vertical-align-center</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vertical-align-top"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vertical-align-top</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-video"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-video</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-video-off"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-video-off</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-volume"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-volume</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-volume-1"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-volume-1</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-volume-2"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-volume-2</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-volume-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-volume-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vote-down"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vote-down</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vote-up"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vote-up</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-wallet"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-wallet</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-wifi"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-wifi</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-wifi-off"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-wifi-off</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-zoom-in"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-zoom-in</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-zoom-out"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-zoom-out</div>
            </div>
          </div>


          <!-- Brand icons -->
          <h2 class="h4 pt-4 pb-2 pb-lg-3 my-4" id="brand-icons">Brand icons</h2>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            <div class="col">
              <i class="h2 text-nav fw-normal ai-airbnb"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-airbnb</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-apple"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-apple</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-behance"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-behance</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-blogger"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-blogger</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-codepen"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-codepen</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-discord"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-discord</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-disqus"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-disqus</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dribbble"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dribbble</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-dropbox"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-dropbox</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-evernote"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-evernote</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-facebook"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-facebook</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-flickr"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-flickr</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-foursquare"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-foursquare</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-github"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-github</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-google"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-google</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-google-drive"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-google-drive</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-google-play"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-google-play</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-hangouts"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-hangouts</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-instagram"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-instagram</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-kickstarter"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-kickstarter</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-linkedin"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-linkedin</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-medium"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-medium</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-messenger"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-messenger</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-odnoklassniki"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-odnoklassniki</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-patreon"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-patreon</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-paypal"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-paypal</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-pinterest"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-pinterest</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-quora"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-quora</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-reddit"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-reddit</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-skype"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-skype</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-slack"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-slack</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-snapchat"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-snapchat</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-soundcloud"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-soundcloud</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-spotify"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-spotify</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-stack-overflow"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-stack-overflow</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-steam"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-steam</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-telegram"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-telegram</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tiktok"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tiktok</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tinder"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tinder</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-trello"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-trello</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-tumblr"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-tumblr</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-twitch"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-twitch</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-viber"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-viber</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vimeo"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vimeo</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-vk"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-vk</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-wechat"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-wechat</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-whatsapp"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-whatsapp</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-wordpress"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-wordpress</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-x"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-x</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-xing"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-xing</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-yelp"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-yelp</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-youtube"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-youtube</div>
            </div>
          </div>


          <!-- Yoga demo icons -->
          <h2 class="h4 pt-4 pb-2 pb-lg-3 my-4" id="yoga-icons">Yoga demo icons</h2>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            <div class="col">
              <i class="h2 text-nav fw-normal ai-cafe"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-cafe</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-flower"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-flower</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-rug"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-rug</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-sofa"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-sofa</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-spa"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-spa</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-towel"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-towel</div>
            </div>
          </div>


          <!-- Coworking demo icons -->
          <h2 class="h4 pt-4 pb-2 pb-lg-3 my-4" id="coworking-icons">Coworking demo icons</h2>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            <div class="col">
              <i class="h2 text-nav fw-normal ai-canteen"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-canteen</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-clock"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-clock</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-parking"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-parking</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-shower"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-shower</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-space"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-space</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-stairs"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-stairs</div>
            </div>
          </div>


          <!-- Influencer demo icons -->
          <h2 class="h4 pt-4 pb-2 pb-lg-3 my-4" id="influencer-icons">Influencer demo icons</h2>
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
            <div class="col">
              <i class="h2 text-nav fw-normal ai-body"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-body</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-chat"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-chat</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-drop"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-drop</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-fruit"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-fruit</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-heart-alt"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-heart-alt</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-stones"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-stones</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-target"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-target</div>
            </div>
            <div class="col">
              <i class="h2 text-nav fw-normal ai-weight"></i>
              <div class="border-top border-bottom mt-1 py-1 fs-sm">ai-weight</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection