@extends('layouts.base', ['title' => 'Around UI Kit | Popovers'])



@section('css')
<!-- Page specific styles -->
<style>
  .example-popover .popover {
    display: block;
    position: relative;
    width: 16.25rem;
    margin: 1rem;
    float: left;
  }

  .bs-popover-bottom-demo .popover-arrow,
  .bs-popover-top-demo .popover-arrow {
    position: absolute;
    left: 50%;
    margin-left: -.6875rem;
  }

  .bs-popover-start-demo .popover-arrow,
  .bs-popover-end-demo .popover-arrow {
    position: absolute;
    top: 50%;
    margin-top: -.5rem;
  }
</style>
@endsection

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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Popovers
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-static" data-scroll="data-scroll">Static popovers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-demo" data-scroll="data-scroll">Live demo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-toggle" data-scroll="data-scroll">Toggle on click / hover</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Popovers
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-static" data-scroll="data-scroll">Static popovers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-demo" data-scroll="data-scroll">Live demo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#popovers-toggle" data-scroll="data-scroll">Toggle on click / hover</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Popovers</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">A pop-up box that appears when the user clicks/hovers on an element.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/popovers/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Static popovers -->
      <section class="card border-0 mb-4" id="popovers-static">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Static popovers</h2>
        </div>
        <div class="card-body">
          <div class="example-popover clearfix">
            <div class="popover bs-popover-top bs-popover-top-demo" role="tooltip">
              <div class="popover-arrow"></div>
              <h3 class="popover-header">Popover top</h3>
              <div class="popover-body">Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem.</div>
            </div>
            <div class="popover bs-popover-end bs-popover-end-demo" role="tooltip">
              <div class="popover-arrow"></div>
              <h3 class="popover-header">Popover right</h3>
              <div class="popover-body">Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem.</div>
            </div>
            <div class="popover bs-popover-bottom bs-popover-bottom-demo" role="tooltip">
              <div class="popover-arrow"></div>
              <h3 class="popover-header">Popover bottom</h3>
              <div class="popover-body">Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem.</div>
            </div>
            <div class="popover bs-popover-start bs-popover-start-demo mt-2" role="tooltip">
              <div class="popover-arrow"></div>
              <h3 class="popover-header">Popover left</h3>
              <div class="popover-body">Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem.</div>
            </div>
          </div>
        </div>
      </section>


      <!-- Live demo -->
      <section class="card border-0 mb-4" id="popovers-demo">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Live demo</h2>
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
              <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" title="Popover on top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Popover on top</button>
              <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="hover" title="Popover on right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Popover on right</button>
              <button class="btn btn-outline-secondary me-2 mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" title="Popover on bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Popover on bottom</button>
              <button class="btn btn-outline-secondary mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" title="Popover on left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Popover on left</button>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Popover on top --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Popover on top&lt;/button&gt;

&lt;!-- Popover on right --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Popover on right&lt;/button&gt;

&lt;!-- Popover on bottom --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on bottom&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Popover on right&lt;/button&gt;

&lt;!-- Popover on left --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Popover on right&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Toggle on click / hover -->
      <section class="card border-0 mb-4" id="popovers-toggle">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Toggle on click / hover</h2>
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
              <button class="btn btn-primary me-2 mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Popover on click" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Toggle popover on click</button>
              <button class="btn btn-outline-primary me-2 mb-3" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" title="Popover on hover" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.">Toggle popover on hover</button>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Toggle popover on click (click is default trigger) --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; title=&quot;Popover on click&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Toggle popover on click&lt;/button&gt;

&lt;!-- Toggle popover on hover --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on hover&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;&gt;Toggle popover on hover&lt;/button&gt;</code></pre>
            </div>
            <div class="tab-pane fade" id="pug2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-pug">// Toggle popover on click (click is default trigger)
button(type=&quot;button&quot;, class=&quot;btn btn-primary&quot;, data-bs-container=&quot;body&quot;, data-bs-toggle=&quot;popover&quot;, data-bs-placement=&quot;top&quot;, title=&quot;Popover on click&quot;, data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;)
  | Toggle popover on click

// Toggle popover on hover
button(type=&quot;button&quot;, class=&quot;btn btn-outline-primary&quot;, data-bs-container=&quot;body&quot;, data-bs-toggle=&quot;popover&quot;, data-bs-placement=&quot;right&quot;, data-bs-trigger=&quot;hover&quot;, title=&quot;Popover on hover&quot;, data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus ornare.&quot;)
  | Toggle popover on hover</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection