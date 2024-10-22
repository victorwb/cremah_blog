@extends('layouts.base', ['title' => 'Around UI Kit | Buttons'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Buttons
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-solid" data-scroll="data-scroll">Solid (default)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-outline" data-scroll="data-scroll">Outline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-icons" data-scroll="data-scroll">Icons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-market" data-scroll="data-scroll">Market buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-shapes" data-scroll="data-scroll">Shapes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-sizes" data-scroll="data-scroll">Sizes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-states" data-scroll="data-scroll">States</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Buttons
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-solid" data-scroll="data-scroll">Solid (default)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-outline" data-scroll="data-scroll">Outline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-icons" data-scroll="data-scroll">Icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-market" data-scroll="data-scroll">Market buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-shapes" data-scroll="data-scroll">Shapes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-sizes" data-scroll="data-scroll">Sizes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#buttons-states" data-scroll="data-scroll">States</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Buttons</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Custom button styles for actions in forms, dialogs, etc.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Solid (default) -->
      <section class="card border-0 mb-4" id="buttons-solid">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Solid (default)</h2>
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
              <button class="btn btn-primary mb-2 me-1" type="button">Primary</button>
              <button class="btn btn-secondary mb-2 me-1" type="button">Secondary</button>
              <button class="btn btn-success mb-2 me-1" type="button">Success</button>
              <button class="btn btn-danger mb-2 me-1" type="button">Danger</button>
              <button class="btn btn-warning mb-2 me-1" type="button">Warning</button>
              <button class="btn btn-info mb-2 me-1" type="button">Info</button>
              <div class="d-inline-block mb-2 me-1 p-2 bg-dark">
                <button class="btn btn-light" type="button">Light</button>
              </div>
              <button class="btn btn-dark mb-2" type="button">Dark</button>
              <button class="btn btn-link mb-2" type="button">Link</button>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;

&lt;!-- Secondary solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;

&lt;!-- Success solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;

&lt;!-- Danger solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;

&lt;!-- Warning solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;

&lt;!-- Info solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;

&lt;!-- Light solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Info&lt;/button&gt;

&lt;!-- Dark solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;

&lt;!-- Link button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Outline -->
      <section class="card border-0 mb-4" id="buttons-outline">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Outline</h2>
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
              <button class="btn btn-outline-primary mb-2 me-1" type="button">Primary</button>
              <button class="btn btn-outline-secondary mb-2 me-1" type="button">Secondary</button>
              <button class="btn btn-outline-success mb-2 me-1" type="button">Success</button>
              <button class="btn btn-outline-danger mb-2 me-1" type="button">Danger</button>
              <button class="btn btn-outline-warning mb-2 me-1" type="button">Warning</button>
              <button class="btn btn-outline-info mb-2 me-1" type="button">Info</button>
              <div class="d-inline-block mb-2 me-1 p-2 bg-dark">
                <button class="btn btn-outline-light" type="button">Light</button>
              </div>
              <button class="btn btn-outline-dark mb-2" type="button">Dark</button>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;

&lt;!-- Secondary outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;

&lt;!-- Success outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt;

&lt;!-- Danger outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;

&lt;!-- Warning outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;

&lt;!-- Info outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;

&lt;!-- Light outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Info&lt;/button&gt;

&lt;!-- Dark outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Icons -->
      <section class="card border-0 mb-4" id="buttons-icons">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Icons</h2>
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
            <li class="nav-item me-3">
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
              <button class="btn btn-primary mb-2 me-2" type="button">
                <i class="ai-user me-2"></i>
                Profile
              </button>
              <button class="btn btn-secondary btn-icon mb-2 me-2" type="button" aria-label="Edit">
                <i class="ai-edit-alt"></i>
              </button>
              <button class="btn btn-outline-danger btn-icon mb-2 me-2" type="button" aria-label="Delete">
                <i class="ai-trash"></i>
              </button>
              <button class="btn btn-success btn-icon mb-2 me-2" type="button" aria-label="Confirm">
                <i class="ai-check"></i>
              </button>
              <button class="btn btn-warning btn-icon rounded-pill mb-2 me-2" type="button" aria-label="Rate">
                <i class="ai-star-filled"></i>
              </button>
              <button class="btn btn-outline-info btn-icon rounded-pill mb-2 me-2" type="button" aria-label="Bookmark">
                <i class="ai-bookmark"></i>
              </button>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary button with text and icon --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
  &lt;i class=&quot;ai-user me-2&quot;&gt;&lt;/i&gt;
  Profile
&lt;/button&gt;

&lt;!-- Secondary solid icon button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-icon&quot; aria-label=&quot;Edit&quot;&gt;
  &lt;i class=&quot;ai-edit-alt&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Danger outline icon button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-icon&quot; aria-label=&quot;Delete&quot;&gt;
  &lt;i class=&quot;ai-trash&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Success solid icon button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-icon&quot; aria-label=&quot;Confirm&quot;&gt;
  &lt;i class=&quot;ai-check&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Warning pill solid icon button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-icon rounded-pill&quot; aria-label=&quot;Rate&quot;&gt;
  &lt;i class=&quot;ai-star-filled&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;!-- Info pill outline icon button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info btn-icon rounded-pill&quot; aria-label=&quot;Bookmark&quot;&gt;
  &lt;i class=&quot;ai-bookmark&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Market buttons -->
      <section class="card border-0 mb-4" id="buttons-market">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Market buttons</h2>
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
              <a class="btn btn-dark btn-lg px-3 py-2 me-3 mb-3" href="#" aria-label="App Store">
                <img class="d-dark-mode-none mx-1" src="/img/market/appstore-light.svg" width="136" alt="App Store">
                <img class="d-none d-dark-mode-block mx-1" src="/img/market/appstore-dark.svg" width="136" alt="App Store">
              </a>
              <a class="btn btn-dark btn-lg px-3 py-2 mb-3" href="#" aria-label="Google Play">
                <img class="d-dark-mode-none mx-1" src="/img/market/googleplay-light.svg" width="135" alt="Google Play">
                <img class="d-none d-dark-mode-block mx-1" src="/img/market/googleplay-dark.svg" width="135" alt="Google Play">
              </a>
              <br>
              <a class="btn btn-primary btn-lg px-3 py-2 me-3 mb-3" href="#" aria-label="App Store">
                <img class="mx-1" src="/img/market/appstore-light.svg" width="136" alt="App Store">
              </a>
              <a class="btn btn-primary btn-lg px-3 py-2 mb-3" href="#" aria-label="Google Play">
                <img class="mx-1" src="/img/market/googleplay-light.svg" width="135" alt="Google Play">
              </a>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- App Store button (Dark) --&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-dark btn-lg px-3 py-2&quot; aria-label=&quot;App Store&quot;&gt;
  &lt;img src=&quot;assets/img/market/appstore-light.svg&quot; class=&quot;d-dark-mode-none mx-1&quot; width=&quot;136&quot; alt=&quot;App Store&quot;&gt;
  &lt;img src=&quot;assets/img/market/appstore-dark.svg&quot; class=&quot;d-none d-dark-mode-block mx-1&quot; width=&quot;136&quot; alt=&quot;App Store&quot;&gt;
&lt;/a&gt;

&lt;!-- Google Play button (Dark) --&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-dark btn-lg px-3 py-2&quot; aria-label=&quot;Google Play&quot;&gt;
  &lt;img src=&quot;assets/img/market/googleplay-light.svg&quot; class=&quot;d-dark-mode-none mx-1&quot; width=&quot;135&quot; alt=&quot;Google Play&quot;&gt;
  &lt;img src=&quot;assets/img/market/googleplay-dark.svg&quot; class=&quot;d-none d-dark-mode-block mx-1&quot; width=&quot;135&quot; alt=&quot;Google Play&quot;&gt;
&lt;/a&gt;

&lt;!-- App Store button (Primary) --&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-lg px-3 py-2&quot; aria-label=&quot;App Store&quot;&gt;
  &lt;img src=&quot;assets/img/market/appstore-light.svg&quot; class=&quot;mx-1&quot; width=&quot;136&quot; alt=&quot;App Store&quot;&gt;
&lt;/a&gt;

&lt;!-- Google Play button (Primary) --&gt;
&lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-lg px-3 py-2&quot; aria-label=&quot;Google Play&quot;&gt;
  &lt;img src=&quot;assets/img/market/googleplay-light.svg&quot; class=&quot;mx-1&quot; width=&quot;135&quot; alt=&quot;Google Play&quot;&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Shapes -->
      <section class="card border-0 mb-4" id="buttons-shapes">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Shapes</h2>
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
              <button class="btn btn-primary mb-2 me-1" type="button">Rounded</button>
              <button class="btn btn-primary rounded-pill mb-2 me-1" type="button">Pill button</button>
              <button class="btn btn-primary rounded-0 mb-2" type="button">Square</button>
              <div class="pt-2"></div>
              <button class="btn btn-outline-primary mb-2 me-1" type="button">Rounded</button>
              <button class="btn btn-outline-primary rounded-pill mb-2 me-1" type="button">Pill button</button>
              <button class="btn btn-outline-primary rounded-0 mb-2" type="button">Square</button>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Rounded solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Rounded&lt;/button&gt;

&lt;!-- Pill solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill&quot;&gt;Pill button&lt;/button&gt;

&lt;!-- Square solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-0&quot;&gt;Square&lt;/button&gt;

&lt;!-- Rounded outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Rounded&lt;/button&gt;

&lt;!-- Pill outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill&quot;&gt;Pill button&lt;/button&gt;

&lt;!-- Square outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-0&quot;&gt;Square&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Sizes -->
      <section class="card border-0 mb-4" id="buttons-sizes">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Sizes</h2>
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
              <button class="btn btn-primary btn-lg mb-2 me-1" type="button">Large button</button>
              <button class="btn btn-primary mb-2 me-1" type="button">Normal button</button>
              <button class="btn btn-primary btn-sm mb-2" type="button">Small button</button>
              <div class="pt-2"></div>
              <button class="btn btn-outline-primary btn-lg mb-2 me-1" type="button">Large button</button>
              <button class="btn btn-outline-primary mb-2 me-1" type="button">Normal button</button>
              <button class="btn btn-outline-primary btn-sm mb-2" type="button">Small button</button>
              <div class="row pt-2">
                <div class="col-sm-6">
                  <button class="btn btn-primary w-100 mb-3" type="button">Block level button</button>
                </div>
                <div class="col-sm-6">
                  <button class="btn btn-outline-primary w-100 mb-3" type="button">Block level button</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Large solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;

&lt;!-- Normal solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Normal button&lt;/button&gt;

&lt;!-- Small solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;!-- Large outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-lg&quot;&gt;Large button&lt;/button&gt;

&lt;!-- Normal outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Normal button&lt;/button&gt;

&lt;!-- Small outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;!-- Block solid button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100&quot;&gt;Block level button&lt;/button&gt;

&lt;!-- Block outline button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;Block level button&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- States -->
      <section class="card border-0 mb-4" id="buttons-states">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">States</h2>
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
              <button class="btn btn-primary active mb-2 me-1" type="button">Active</button>
              <button class="btn btn-secondary active mb-2 me-1" type="button">Active</button>
              <button class="btn btn-primary mb-2 me-1" type="button" disabled>Disabled</button>
              <button class="btn btn-secondary mb-2 me-1" type="button" disabled>Disabled</button>
              <button class="btn btn-primary mb-2 me-1" type="button" data-bs-toggle="button">Button toggle</button>
              <button class="btn btn-primary pe-none mb-2 me-1" type="button">
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                Loading...
              </button>
              <button class="btn btn-secondary pe-none mb-2" type="button">
                <span class="spinner-grow spinner-grow-sm me-2" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Button states --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; disabled&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;button&quot;&gt;Button toggle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary pe-none&quot;&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary pe-none&quot;&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection