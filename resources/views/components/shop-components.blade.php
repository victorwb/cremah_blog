@extends('layouts.base', ['title' => 'Around UI Kit | Shop components'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Shop components
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-product-card" data-scroll="data-scroll">Product card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-horizontal-card" data-scroll="data-scroll">Tiny horizontal card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-category-card" data-scroll="data-scroll">Category card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-cart-item" data-scroll="data-scroll">Shopping cart item</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-categories-filter" data-scroll="data-scroll">Categories filter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-price-range" data-scroll="data-scroll">Price range slider</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-color-filter" data-scroll="data-scroll">Color filter (custom checkboxes)</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Shop components
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-product-card" data-scroll="data-scroll">Product card</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-horizontal-card" data-scroll="data-scroll">Tiny horizontal card</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-category-card" data-scroll="data-scroll">Category card</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-cart-item" data-scroll="data-scroll">Shopping cart item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-categories-filter" data-scroll="data-scroll">Categories filter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-price-range" data-scroll="data-scroll">Price range slider</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#shop-color-filter" data-scroll="data-scroll">Color filter (custom checkboxes)</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Shop components</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Components that are related to the e-commerce section of the website.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Product card -->
      <section class="card border-0 mb-4" id="shop-product-card">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Product card</h2>
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
              <div style="max-width: 306px;">
                <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span class="badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                  <button class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0" type="button" aria-label="Add to Favorites">
                    <i class="ai-heart fs-xl text-nav"></i>
                  </button>
                  <div class="swiper swiper-nav-onhover" data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                    <a class="swiper-wrapper" href="#">
                      <div class="swiper-slide p-2 p-xl-4">
                        <img class="d-block mx-auto" src="/img/shop/products/08.png" width="226" alt="Product">
                      </div>
                    </a>
                    <button class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0" type="button" aria-label="Prev">
                      <i class="ai-chevron-left fs-xl text-nav"></i>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0" type="button" aria-label="Next">
                      <i class="ai-chevron-right fs-xl text-nav"></i>
                    </button>
                  </div>
                </div>
                <div class="d-flex mb-1">
                  <h3 class="h6 mb-0">
                    <a href="#">Analogue wall clock</a>
                  </h3>
                  <div class="d-flex ps-2 mt-n1 ms-auto">
                    <div class="ms-1">
                      <input class="btn-check" type="radio" name="color" value="Turquoise" checked id="color1">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color1">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a8c2c0;"></span>
                      </label>
                    </div>
                    <div class="ms-1">
                      <input class="btn-check" type="radio" name="color" value="Lilac" id="color2">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color2">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #b4a9c3;"></span>
                      </label>
                    </div>
                    <div class="ms-1">
                      <input class="btn-check" type="radio" name="color" value="Blue" id="color3">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color3">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <span class="me-2">$25.00</span>
                  <del class="fs-sm text-body-secondary">$37.00</del>
                  <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs" role="tooltip"><div class="tooltip-inner bg-light text-body-secondary p-0"></div></div>' data-bs-placement="left" title="Add to cart">
                    <a class="nav-link fs-lg py-2 px-1" href="#" aria-label="Add to Cart">
                      <i class="ai-cart"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Product card with image slider and color options --&gt;
&lt;div style=&quot;max-width: 306px;&quot;&gt;
  &lt;div class=&quot;card-hover position-relative bg-secondary rounded-1 p-3 mb-4&quot;&gt;
    &lt;span class=&quot;badge bg-danger bg-opacity-10 text-danger position-absolute top-0 start-0 mt-3 ms-3&quot;&gt;Sale&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 z-5 opacity-0&quot; aria-label=&quot;Add to Favorites&quot;&gt;
      &lt;i class=&quot;ai-heart fs-xl text-nav&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;div class=&quot;swiper swiper-nav-onhover&quot; data-swiper-options='{&quot;loop&quot;: true, &quot;navigation&quot;: {&quot;prevEl&quot;: &quot;.btn-prev&quot;, &quot;nextEl&quot;: &quot;.btn-next&quot;}}'&gt;
      &lt;a href=&quot;#&quot; class=&quot;swiper-wrapper&quot;&gt;
        &lt;div class=&quot;swiper-slide p-2 p-xl-4&quot;&gt;
          &lt;img class=&quot;d-block mx-auto&quot; src=&quot;assets/img/shop/products/08.png&quot; width=&quot;226&quot; alt=&quot;Product&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-slide p-2 p-xl-4&quot;&gt;
          &lt;img class=&quot;d-block mx-auto&quot; src=&quot;assets/img/shop/products/08.png&quot; width=&quot;226&quot; alt=&quot;Product&quot;&gt;
        &lt;/div&gt;
      &lt;/a&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0&quot; aria-label=&quot;Prev&quot;&gt;
        &lt;i class=&quot;ai-chevron-left fs-xl text-nav&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0&quot; aria-label=&quot;Next&quot;&gt;
        &lt;i class=&quot;ai-chevron-right fs-xl text-nav&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex mb-1&quot;&gt;
    &lt;h3 class=&quot;h6 mb-0&quot;&gt;&lt;a href=&quot;#&quot;&gt;Analogue wall clock&lt;/a&gt;&lt;/h3&gt;
    &lt;div class=&quot;d-flex ps-2 mt-n1 ms-auto&quot;&gt;
      &lt;div class=&quot;ms-1&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color1&quot; name=&quot;color&quot; value=&quot;Turquoise&quot; checked&gt;
        &lt;label for=&quot;color1&quot; class=&quot;btn btn-icon btn-xs btn-outline-secondary rounded-circle&quot;&gt;
          &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: .625rem; height: .625rem; background-color: #a8c2c0;&quot;&gt;&lt;/span&gt;
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ms-1&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color2&quot; name=&quot;color&quot; value=&quot;Lilac&quot;&gt;
        &lt;label for=&quot;color2&quot; class=&quot;btn btn-icon btn-xs btn-outline-secondary rounded-circle&quot;&gt;
          &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: .625rem; height: .625rem; background-color: #b4a9c3;&quot;&gt;&lt;/span&gt;
        &lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ms-1&quot;&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color3&quot; name=&quot;color&quot; value=&quot;Blue&quot;&gt;
        &lt;label for=&quot;color3&quot; class=&quot;btn btn-icon btn-xs btn-outline-secondary rounded-circle&quot;&gt;
          &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: .625rem; height: .625rem; background-color: #a1b7d9;&quot;&gt;&lt;/span&gt;
        &lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;span class=&quot;me-2&quot;&gt;$25.00&lt;/span&gt;
    &lt;del class=&quot;fs-sm text-body-secondary&quot;&gt;$37.00&lt;/del&gt;
    &lt;div class=&quot;nav ms-auto&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-template='&lt;div class=&quot;tooltip fs-xs&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;tooltip-inner bg-light text-body-secondary p-0&quot;&gt;&lt;/div&gt;&lt;/div&gt;' data-bs-placement=&quot;left&quot; title=&quot;Add to cart&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link fs-lg py-2 px-1&quot; aria-label=&quot;Add to Cart&quot;&gt;
        &lt;i class=&quot;ai-cart&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Tiny horizontal card -->
      <section class="card border-0 mb-4" id="shop-horizontal-card">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Tiny horizontal card</h2>
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
              <a class="card h-100 rounded-1 text-decoration-none px-xxl-1" href="#" style="max-width: 306px;">
                <div class="card-body p-4 px-sm-3 px-md-4">
                  <div class="d-flex align-items-center">
                    <img src="/img/landing/shop-1/hero/01.png" width="97" alt="Product">
                    <div class="ps-3 ps-md-4">
                      <h3 class="fs-sm mb-2">Exquisite glass vase</h3>
                      <p class="fs-sm mb-0">$15.00
                        <del class="text-body-secondary fs-xs ms-1">$19.00</del>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Tiny horizontal product card --&gt;
&lt;a href=&quot;#&quot; class=&quot;card h-100 rounded-1 text-decoration-none px-xxl-1&quot; style=&quot;max-width: 306px;&quot;&gt;
  &lt;div class=&quot;card-body p-4 px-sm-3 px-md-4&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
      &lt;img src=&quot;assets/img/landing/shop/hero/01.png&quot; width=&quot;97&quot; alt=&quot;Product&quot;&gt;
      &lt;div class=&quot;ps-3 ps-md-4&quot;&gt;
        &lt;h3 class=&quot;fs-sm mb-2&quot;&gt;Exquisite glass vase&lt;/h3&gt;
        &lt;p class=&quot;fs-sm mb-0&quot;&gt;
          $15.00
          &lt;del class=&quot;text-body-secondary fs-xs ms-1&quot;&gt;$19.00&lt;/del&gt;
        &lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Category card -->
      <section class="card border-0 mb-4" id="shop-category-card">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Category card</h2>
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
              <div class="card zoom-effect border-0 rounded-1 overflow-hidden" style="max-width: 416px;">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
                <div class="zoom-effect-wrapper rounded-1">
                  <img class="zoom-effect-img" src="/img/shop/categories/04.jpg" alt="Category image">
                </div>
                <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3" href="#">
                  <span class="bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4">For the bedroom</span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Category card --&gt;
&lt;div class=&quot;card zoom-effect border-0 rounded-1 overflow-hidden&quot; style=&quot;max-width: 416px;&quot;&gt;
  &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2&quot;&gt;&lt;/span&gt;
  &lt;div class=&quot;zoom-effect-wrapper rounded-1&quot;&gt;
    &lt;img src=&quot;assets/img/shop/categories/04.jpg&quot; class=&quot;zoom-effect-img&quot; alt=&quot;Category image&quot;&gt;
  &lt;/div&gt;
  &lt;a href=&quot;#&quot; class=&quot;card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3&quot;&gt;
    &lt;span class=&quot;bg-light text-dark rounded-pill fs-sm fw-semibold lh-1 py-3 px-4&quot;&gt;
      For the bedroom
    &lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Shopping cart item -->
      <section class="card border-0 mb-4" id="shop-cart-item">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Shopping cart item</h2>
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
              <div class="d-sm-flex align-items-center" style="max-width: 540px;">
                <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0" href="#">
                  <img src="/img/shop/cart/01.png" width="110" alt="Product">
                </a>
                <div class="w-100 pt-1 ps-sm-4">
                  <div class="d-flex">
                    <div class="me-3">
                      <h3 class="h5 mb-2">
                        <a href="#">Candle in concrete bowl</a>
                      </h3>
                      <div class="d-flex flex-wrap">
                        <div class="text-body-secondary fs-sm me-3">
                          Color:
                          <span class="text-dark fw-medium ms-1">Gray night</span>
                        </div>
                        <div class="text-body-secondary fs-sm me-3">
                          Weight:
                          <span class="text-dark fw-medium ms-1">140g</span>
                        </div>
                      </div>
                    </div>
                    <div class="text-end ms-auto">
                      <div class="fs-5 mb-2">$11.00</div>
                      <del class="text-body-secondary ms-auto">$15.00</del>
                    </div>
                  </div>
                  <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                    <input class="form-control" type="number" value="1" readonly>
                    <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                  </div>
                  <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                      <i class="ai-trash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Shopping cart item --&gt;
&lt;div class=&quot;d-sm-flex align-items-center&quot; style=&quot;max-width: 540px;&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0&quot;&gt;
    &lt;img src=&quot;assets/img/shop/cart/01.png&quot; width=&quot;110&quot; alt=&quot;Product&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;w-100 pt-1 ps-sm-4&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
      &lt;div class=&quot;me-3&quot;&gt;
        &lt;h3 class=&quot;h5 mb-2&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;Candle in concrete bowl&lt;/a&gt;
        &lt;/h3&gt;
        &lt;div class=&quot;d-flex flex-wrap&quot;&gt;
          &lt;div class=&quot;text-body-secondary fs-sm me-3&quot;&gt;
            Color:
            &lt;span class=&quot;text-dark fw-medium ms-1&quot;&gt;Gray night&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;text-body-secondary fs-sm me-3&quot;&gt;
            Weight:
            &lt;span class=&quot;text-dark fw-medium ms-1&quot;&gt;140g&lt;/span&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;text-end ms-auto&quot;&gt;
        &lt;div class=&quot;fs-5 mb-2&quot;&gt;$11.00&lt;/div&gt;
        &lt;del class=&quot;text-body-secondary ms-auto&quot;&gt;$15.00&lt;/del&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;count-input ms-n3&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon fs-xl&quot; data-decrement&gt;-&lt;/button&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;1&quot; readonly&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon fs-xl&quot; data-increment&gt;+&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;nav justify-content-end mt-n5 mt-sm-n3&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;nav-link fs-xl p-2&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Remove&quot; aria-label=&quot;Remove&quot;&gt;
        &lt;i class=&quot;ai-trash&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Categories filter -->
      <section class="card border-0 mb-4" id="shop-categories-filter">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Categories filter</h2>
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
              <h3 class="h5">Categories</h3>
              <div class="accordion accordion-alt" id="shopCategories" style="max-width: 280px;">
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#livingRoom" aria-expanded="true" aria-controls="livingRoom">
                      <span class="fs-base">Living room</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse show" id="livingRoom" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lr-all">
                        <label class="form-check-label d-flex align-items-center" for="lr-all">
                          <span class="text-nav fw-medium">View all</span>
                          <span class="fs-xs text-body-secondary ms-auto">573</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked id="lr-vases">
                        <label class="form-check-label d-flex align-items-center" for="lr-vases">
                          <span class="text-nav fw-medium">Vases</span>
                          <span class="fs-xs text-body-secondary ms-auto">234</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lr-mirrors">
                        <label class="form-check-label d-flex align-items-center" for="lr-mirrors">
                          <span class="text-nav fw-medium">Mirrors</span>
                          <span class="fs-xs text-body-secondary ms-auto">182</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lr-paintings">
                        <label class="form-check-label d-flex align-items-center" for="lr-paintings">
                          <span class="text-nav fw-medium">Paintings</span>
                          <span class="fs-xs text-body-secondary ms-auto">133</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lr-furniture">
                        <label class="form-check-label d-flex align-items-center" for="lr-furniture">
                          <span class="text-nav fw-medium">Furniture</span>
                          <span class="fs-xs text-body-secondary ms-auto">24</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#kitchen" aria-expanded="false" aria-controls="kitchen">
                      <span class="fs-base">Kitchen</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="kitchen" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kitchen-all">
                        <label class="form-check-label d-flex align-items-center" for="kitchen-all">
                          <span class="text-nav fw-medium">View all</span>
                          <span class="fs-xs text-body-secondary ms-auto">586</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kitchen-cutlery">
                        <label class="form-check-label d-flex align-items-center" for="kitchen-cutlery">
                          <span class="text-nav fw-medium">Cutlery</span>
                          <span class="fs-xs text-body-secondary ms-auto">387</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kitchen-storage">
                        <label class="form-check-label d-flex align-items-center" for="kitchen-storage">
                          <span class="text-nav fw-medium">Storage</span>
                          <span class="fs-xs text-body-secondary ms-auto">124</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kitchen-bins">
                        <label class="form-check-label d-flex align-items-center" for="kitchen-bins">
                          <span class="text-nav fw-medium">Waste bins</span>
                          <span class="fs-xs text-body-secondary ms-auto">59</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kitchen-sinks">
                        <label class="form-check-label d-flex align-items-center" for="kitchen-sinks">
                          <span class="text-nav fw-medium">Sinks</span>
                          <span class="fs-xs text-body-secondary ms-auto">16</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#bathroom" aria-expanded="false" aria-controls="bathroom">
                      <span class="fs-base">Bathroom</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="bathroom" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-all">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-all">
                          <span class="text-nav fw-medium">View all</span>
                          <span class="fs-xs text-body-secondary ms-auto">1416</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-showers">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-showers">
                          <span class="text-nav fw-medium">Showers</span>
                          <span class="fs-xs text-body-secondary ms-auto">113</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-basins">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-basins">
                          <span class="text-nav fw-medium">Basins</span>
                          <span class="fs-xs text-body-secondary ms-auto">98</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-dispensers">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-dispensers">
                          <span class="text-nav fw-medium">Dispensers</span>
                          <span class="fs-xs text-body-secondary ms-auto">205</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-cleaning">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-cleaning">
                          <span class="text-nav fw-medium">Cleaning</span>
                          <span class="fs-xs text-body-secondary ms-auto">747</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom-holders">
                        <label class="form-check-label d-flex align-items-center" for="bathroom-holders">
                          <span class="text-nav fw-medium">Holders</span>
                          <span class="fs-xs text-body-secondary ms-auto">253</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#bedroom" aria-expanded="false" aria-controls="bedroom">
                      <span class="fs-base">Bedroom</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="bedroom" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-all">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-all">
                          <span class="text-nav fw-medium">View all</span>
                          <span class="fs-xs text-body-secondary ms-auto">1219</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-furniture">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-furniture">
                          <span class="text-nav fw-medium">Furniture</span>
                          <span class="fs-xs text-body-secondary ms-auto">43</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-linen">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-linen">
                          <span class="text-nav fw-medium">Bed linen</span>
                          <span class="fs-xs text-body-secondary ms-auto">528</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-lighting">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-lighting">
                          <span class="text-nav fw-medium">Lighting</span>
                          <span class="fs-xs text-body-secondary ms-auto">391</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-storage">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-storage">
                          <span class="text-nav fw-medium">Storage</span>
                          <span class="fs-xs text-body-secondary ms-auto">75</span>
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bedroom-mirrors">
                        <label class="form-check-label d-flex align-items-center" for="bedroom-mirrors">
                          <span class="text-nav fw-medium">Mirrors</span>
                          <span class="fs-xs text-body-secondary ms-auto">182</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Categories filter (accordion width checkboxes) --&gt;
&lt;h3 class=&quot;h5&quot;&gt;Categories&lt;/h3&gt;
&lt;div class=&quot;accordion accordion-alt&quot; id=&quot;shopCategories&quot;&gt;

  &lt;!-- Category collapse --&gt;
  &lt;div class=&quot;accordion-item mb-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button fs-xl fw-medium py-2&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#livingRoom&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;livingRoom&quot;&gt;
        &lt;span class=&quot;fs-base&quot;&gt;Living room&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;livingRoom&quot; data-bs-parent=&quot;#shopCategories&quot;&gt;
      &lt;div class=&quot;accordion-body py-1 mb-1&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;lr-all&quot;&gt;
          &lt;label for=&quot;lr-all&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;View all&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;573&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;lr-vases&quot; checked&gt;
          &lt;label for=&quot;lr-vases&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Vases&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;234&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;lr-mirrors&quot;&gt;
          &lt;label for=&quot;lr-mirrors&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Mirrors&lt;/span&gt;&lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;182&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;lr-paintings&quot;&gt;
          &lt;label for=&quot;lr-paintings&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Paintings&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;133&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;lr-furniture&quot;&gt;
          &lt;label for=&quot;lr-furniture&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Furniture&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;24&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Category collapse --&gt;
  &lt;div class=&quot;accordion-item mb-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button collapsed fs-xl fw-medium py-2&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#kitchen&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;kitchen&quot;&gt;
        &lt;span class=&quot;fs-base&quot;&gt;Kitchen&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;kitchen&quot; data-bs-parent=&quot;#shopCategories&quot;&gt;
      &lt;div class=&quot;accordion-body py-1 mb-1&quot;&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;kitchen-all&quot;&gt;
          &lt;label for=&quot;kitchen-all&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;View all&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;586&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;kitchen-cutlery&quot;&gt;
          &lt;label for=&quot;kitchen-cutlery&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Cutlery&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;387&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;kitchen-storage&quot;&gt;
          &lt;label for=&quot;kitchen-storage&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Storage&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;124&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;kitchen-bins&quot;&gt;
          &lt;label for=&quot;kitchen-bins&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Waste bins&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;59&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;kitchen-sinks&quot;&gt;
          &lt;label for=&quot;kitchen-sinks&quot; class=&quot;form-check-label d-flex align-items-center&quot;&gt;
            &lt;span class=&quot;text-nav fw-medium&quot;&gt;Sinks&lt;/span&gt;
            &lt;span class=&quot;fs-xs text-body-secondary ms-auto&quot;&gt;16&lt;/span&gt;
          &lt;/label&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Add as many categories as you need --&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Price range slider -->
      <section class="card border-0 mb-4" id="shop-price-range">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Price range slider</h2>
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
              <h3 class="h5">Price</h3>
              <div class="range-slider" data-start-min="280" data-start-max="720" data-min="0" data-max="1000" data-step="1" data-tooltip-prefix="$" style="max-width: 280px;">
                <div class="range-slider-ui"></div>
                <div class="d-flex">
                  <div class="d-flex align-items-center w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="price-min">From</label>
                    <input class="form-control form-control-sm range-slider-value-min" type="number" style="max-width: 6rem;" id="price-min">
                  </div>
                  <div class="d-flex align-items-center justify-content-end w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="price-max">To</label>
                    <input class="form-control form-control-sm range-slider-value-max" type="number" style="max-width: 6rem;" id="price-max">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Price range slider (based on noUISlider) --&gt;
&lt;h3 class=&quot;h5&quot;&gt;Price&lt;/h3&gt;
&lt;div class=&quot;range-slider&quot; data-start-min=&quot;280&quot; data-start-max=&quot;720&quot; data-min=&quot;0&quot; data-max=&quot;1000&quot; data-step=&quot;1&quot; data-tooltip-prefix=&quot;$&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;price-min&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;From&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;price-min&quot; class=&quot;form-control form-control-sm range-slider-value-min&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;price-max&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;To&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;price-max&quot; class=&quot;form-control form-control-sm range-slider-value-max&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Color filter (custom checkboxes) -->
      <section class="card border-0 mb-4" id="shop-color-filter">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Color filter (custom checkboxes)</h2>
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
              <h3 class="h5">Color</h3>
              <div class="d-flex">
                <div class="me-2 mb-2">
                  <input class="btn-check" type="checkbox" value="Soft beige" checked id="beige">
                  <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="beige">
                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #d9c9a1;"></span>
                  </label>
                </div>
                <div class="me-2 mb-2">
                  <input class="btn-check" type="checkbox" value="Bluish sky" id="blue">
                  <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="blue">
                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #a1b7d9;"></span>
                  </label>
                </div>
                <div class="me-2 mb-2">
                  <input class="btn-check" type="checkbox" value="Green grass" id="green">
                  <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="green">
                    <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #74947d;"></span>
                  </label>
                </div>
                <div class="me-2 mb-2">
                  <input class="btn-check" type="checkbox" value="Woody brown" id="wood">
                  <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="wood">
                    <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #af8352; background-image: url(/img/shop/pattern/wood.jpg);"></span>
                  </label>
                </div>
                <div class="mb-2">
                  <input class="btn-check" type="checkbox" value="Gray marble" id="marble">
                  <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="marble">
                    <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Color filter (custom checkboxes) --&gt;
&lt;h3 class=&quot;h5&quot;&gt;Color&lt;/h3&gt;
&lt;div class=&quot;d-flex&quot;&gt;

  &lt;!-- Solid color (checked) --&gt;
  &lt;div class=&quot;me-2 mb-2&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;blue&quot; value=&quot;Bluish sky&quot;&gt;
    &lt;label for=&quot;blue&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary rounded-circle&quot;&gt;
      &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: 1.5rem; height: 1.5rem; background-color: #a1b7d9;&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- Image pattern --&gt;
  &lt;div class=&quot;me-2 mb-2&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;wood&quot; value=&quot;Woody brown&quot;&gt;
    &lt;label for=&quot;wood&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary rounded-circle&quot;&gt;
      &lt;span class=&quot;d-block bg-size-cover bg-position-center rounded-circle&quot; style=&quot;width: 1.5rem; height: 1.5rem; background-color: #af8352; background-image: url(assets/img/shop/pattern/wood.jpg);&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;

  &lt;!-- Add as many color checkboxes as you need --&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection
