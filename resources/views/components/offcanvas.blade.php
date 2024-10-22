@extends('layouts.base', ['title' => 'Around UI Kit | Offcanvas'])



@section('content')

<!-- Left offcanvas example -->
<div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title">Left offcanvas</h5>
    <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.</p>
  </div>
</div>

<!-- Top offcanvas example -->
<div class="offcanvas offcanvas-top" id="offcanvasTop" tabindex="-1">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title">Top offcanvas</h5>
    <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.</p>
  </div>
</div>

<!-- Right offcanvas example -->
<div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title">Right offcanvas</h5>
    <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.</p>
  </div>
</div>

<!-- Bottom offcanvas example -->
<div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title">Bottom offcanvas</h5>
    <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.</p>
  </div>
</div>


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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Offcanvas
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-components" data-scroll="data-scroll">Offcanvas components</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-placement" data-scroll="data-scroll">Placement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-mobile" data-scroll="data-scroll">Mobile menu offcanvas (responsive)</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Offcanvas
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-components" data-scroll="data-scroll">Offcanvas components</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-placement" data-scroll="data-scroll">Placement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#offcanvas-mobile" data-scroll="data-scroll">Mobile menu offcanvas (responsive)</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Offcanvas</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Build hidden sidebars into your project for navigation, shopping carts, widgets etc.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/offcanvas/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Offcanvas components -->
      <section class="card border-0 mb-4" id="offcanvas-components">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Offcanvas components</h2>
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
              <div class="offcanvas offcanvas-start shadow dark-mode-shadow-none rounded-3 my-2" data-offcanvas-show="true" tabindex="-1" style="position: static; transform: none; visibility: visible;">
                <div class="offcanvas-header border-bottom">
                  <h5 class="offcanvas-title">Menu</h5>
                  <button class="btn-close" type="button" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="max-height: 16.5rem;">
                  <ul class="nav flex-column mt-n2">
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2 active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">User Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Our Works</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Our Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Help Center</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 py-2" href="#">Support</a>
                    </li>
                  </ul>
                </div>
                <div class="offcanvas-header d-flex border-top">
                  <button class="btn btn-outline-primary w-100 me-2" type="button"><i class="ai-login me-1"></i>Sign In</button>
                  <button class="btn btn-primary w-100" type="button"><i class="ai-user me-1"></i>Sign Up</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvas&quot; tabindex=&quot;-1&quot;&gt;

  &lt;!-- Header --&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot;&gt;Menu&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Body --&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;ul class=&quot;nav flex-column mt-n2&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Home&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;User Profile&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Services&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Our Works&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;About&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Our Team&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Dashboard&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Contacts&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link px-0 py-2 active&quot;&gt;Help Center&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;

  &lt;!-- Footer --&gt;
  &lt;div class=&quot;offcanvas-header d-flex border-top&quot;&gt;
    &lt;button class=&quot;btn btn-outline-primary w-100 me-2&quot; type=&quot;button&quot;&gt;
      &lt;i class=&quot;ai-login me-1&quot;&gt;&lt;/i&gt;
      Sign In
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-primary w-100&quot; type=&quot;button&quot;&gt;
      &lt;i class=&quot;ai-user me-1&quot;&gt;&lt;/i&gt;
      Sign Up
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Placement -->
      <section class="card border-0 mb-4" id="offcanvas-placement">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Placement</h2>
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
              <button class="btn btn-outline-secondary me-2 my-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">Toggle left offcanvas</button>
              <button class="btn btn-outline-secondary me-2 my-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop">Toggle top offcanvas</button>
              <button class="btn btn-outline-secondary me-2 my-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Toggle right offcanvas</button>
              <button class="btn btn-outline-secondary my-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom">Toggle bottom offcanvas</button>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Offcanvas position: Left --&gt;

&lt;!-- Toogle button --&gt;
&lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasLeft&quot;&gt;Toggle left offcanvas&lt;/button&gt;

&lt;!-- Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasLeft&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot;&gt;Left offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Offcanvas position: Top --&gt;

&lt;!-- Toogle button --&gt;
&lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot;&gt;Toggle top offcanvas&lt;/button&gt;

&lt;!-- Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-top&quot; id=&quot;offcanvasTop&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot;&gt;Top offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Offcanvas position: Right --&gt;

&lt;!-- Toogle button --&gt;
&lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot;&gt;Toggle right offcanvas&lt;/button&gt;

&lt;!-- Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;offcanvasRight&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot;&gt;Right offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Offcanvas position: Bottom --&gt;

&lt;!-- Toogle button --&gt;
&lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot;&gt;Toggle bottom offcanvas&lt;/button&gt;

&lt;!-- Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-bottom&quot; id=&quot;offcanvasBottom&quot; tabindex=&quot;-1&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot;&gt;Bottom offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Mobile menu offcanvas (responsive) -->
      <section class="card border-0 mb-4" id="offcanvas-mobile">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Mobile menu offcanvas (responsive)</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview3" data-bs-toggle="tab" role="tab" aria-controls="preview3" aria-selected="true"><i class="ai-show fs-lg opacity-90 me-2"></i>Preview</a>
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
              <iframe class="w-100 shadow rounded-3" src="navbar-offcanvas" height="512" style="max-width: 375px;" title="Navar with offcanvas menu"></iframe>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Navbar with offcanvas menu on mobile --&gt;
&lt;header class=&quot;header navbar navbar-expand-lg fixed-top bg-light&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;navbar-brand pe-xl-2 me-4&quot;&gt;
      &lt;span class=&quot;text-primary flex-shrink-0 me-2&quot;&gt;
        &lt;svg version=&quot;1.1&quot; width=&quot;35&quot; height=&quot;32&quot; viewBox=&quot;0 0 36 33&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
          &lt;path fill=&quot;currentColor&quot; d=&quot;M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z&quot;&gt;
        &lt;/svg&gt;
      &lt;/span&gt;
      Around
    &lt;/a&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler me-2&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#primaryMenu&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;primaryMenu&quot;&gt;
      &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;mt-1 mb-0&quot;&gt;Menu&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;offcanvas-body pt-0&quot;&gt;
        &lt;ul class=&quot;navbar-nav p-0&quot;&gt;
          &lt;li class=&quot;nav-item active&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Home&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Link&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item dropdown&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot;&gt;Dropdown&lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown-item dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot;&gt;Dropdown&lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;dropdown-item&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection