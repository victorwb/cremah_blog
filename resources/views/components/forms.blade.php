@extends('layouts.base', ['title' => 'Around UI Kit | Forms'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Forms
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-types" data-scroll="data-scroll">Supported input types</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-floating-labels" data-scroll="data-scroll">Floating labels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-password-toggle" data-scroll="data-scroll">Password visibility toggle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-checkboxes" data-scroll="data-scroll">Checkboxes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-radios" data-scroll="data-scroll">Radio buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-switches" data-scroll="data-scroll">Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-mode-switch" data-scroll="data-scroll">Theme mode switch</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-btns" data-scroll="data-scroll">Button toggles (Color, size options)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-count" data-scroll="data-scroll">Count input (+/-)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-range-slider" data-scroll="data-scroll">Range slider</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-sizing" data-scroll="data-scroll">Sizing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-disabled" data-scroll="data-scroll">Readonly &amp; Disabled</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-inline" data-scroll="data-scroll">Inline form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-help-text" data-scroll="data-scroll">Help text</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-validation-text" data-scroll="data-scroll">Validation: status text</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-validation-tooltips" data-scroll="data-scroll">Validation: status tooltips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-formatted" data-scroll="data-scroll">Input mask (Formatted content)</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Forms
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-types" data-scroll="data-scroll">Supported input types</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-floating-labels" data-scroll="data-scroll">Floating labels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-password-toggle" data-scroll="data-scroll">Password visibility toggle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-checkboxes" data-scroll="data-scroll">Checkboxes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-radios" data-scroll="data-scroll">Radio buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-switches" data-scroll="data-scroll">Switches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-mode-switch" data-scroll="data-scroll">Theme mode switch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-btns" data-scroll="data-scroll">Button toggles (Color, size options)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-count" data-scroll="data-scroll">Count input (+/-)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-range-slider" data-scroll="data-scroll">Range slider</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-sizing" data-scroll="data-scroll">Sizing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-disabled" data-scroll="data-scroll">Readonly &amp; Disabled</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-inline" data-scroll="data-scroll">Inline form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-help-text" data-scroll="data-scroll">Help text</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-validation-text" data-scroll="data-scroll">Validation: status text</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-validation-tooltips" data-scroll="data-scroll">Validation: status tooltips</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#forms-formatted" data-scroll="data-scroll">Input mask (Formatted content)</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Forms</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Form control styles, layout options, and custom components.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>



      <!-- Supported input types -->
      <section class="card border-0 mb-4" id="forms-types">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Supported input types</h2>
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
              <div class="mb-2 mb-md-3 mt-n3 mt-md-0 row align-items-center">
                <label class="col-md-2 col-form-label" for="text-input">Text</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" id="text-input" value="Artisanal kale">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="search-input">Search</label>
                <div class="col-md-10">
                  <input class="form-control" type="search" id="search-input" value="How do I shoot web">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="email-input">Email</label>
                <div class="col-md-10">
                  <input class="form-control" type="email" id="email-input" value="email@example.com">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="url-input">URL</label>
                <div class="col-md-10">
                  <input class="form-control" type="url" id="url-input" value="https://getbootstrap.com">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="tel-input">Phone</label>
                <div class="col-md-10">
                  <input class="form-control" type="tel" id="tel-input" value="1-(770)-334-2518">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="pass-input">Password</label>
                <div class="col-md-10">
                  <input class="form-control" type="password" id="pass-input" value="mypasswordexample">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row">
                <label class="col-md-2 col-form-label" for="textarea-input">Textarea</label>
                <div class="col-md-10">
                  <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="select-input">Select</label>
                <div class="col-md-10">
                  <select class="form-select" id="select-input">
                    <option>Choose option...</option>
                    <option>Option item 1</option>
                    <option>Option item 2</option>
                    <option>Option item 3</option>
                  </select>
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="multiselect-input">Multiselect</label>
                <div class="col-md-10">
                  <select class="form-select" id="multiselect-input" size="3" multiple>
                    <option>Option item 1</option>
                    <option>Option item 2</option>
                    <option>Option item 3</option>
                    <option>Option item 4</option>
                    <option>Option item 5</option>
                    <option>Option item 6</option>
                  </select>
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="file-input">File</label>
                <div class="col-md-10">
                  <input class="form-control" type="file" id="file-input">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="number-input">Number</label>
                <div class="col-md-10">
                  <input class="form-control" type="number" id="number-input" value="37">
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="datalist-input">Datalist</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" list="datalist-options" id="datalist-input" placeholder="Type to search...">
                  <datalist id="datalist-options">
                    <option value="San Francisco"></option>
                    <option value="New York"></option>
                    <option value="Seattle"></option>
                    <option value="Los Angeles"></option>
                    <option value="Chicago"></option>
                  </datalist>
                </div>
              </div>
              <div class="mb-2 mb-md-3 row align-items-center">
                <label class="col-md-2 col-form-label" for="range-input">Range</label>
                <div class="col-md-10">
                  <input class="form-range" type="range" id="range-input">
                </div>
              </div>
              <div class="row align-items-center">
                <label class="col-md-2 col-form-label" for="color-input">Color</label>
                <div class="col-md-10">
                  <input class="form-control form-control-color" type="color" id="color-input" value="#ed5050">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Text input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;text-input&quot; class=&quot;form-label&quot;&gt;Text&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;text-input&quot; value=&quot;Artisanal kale&quot;&gt;
&lt;/div&gt;

&lt;!-- Search input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;search-input&quot; class=&quot;form-label&quot;&gt;Search&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;search&quot; id=&quot;search-input&quot; value=&quot;How do I shoot web&quot;&gt;
&lt;/div&gt;

&lt;!-- Email input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;email-input&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;email-input&quot; value=&quot;email@example.com&quot;&gt;
&lt;/div&gt;

&lt;!-- URL Input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;url-input&quot; class=&quot;form-label&quot;&gt;URL&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;url&quot; id=&quot;url-input&quot; value=&quot;https://getbootstrap.com&quot;&gt;
&lt;/div&gt;

&lt;!-- Phone Input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;tel-input&quot; class=&quot;form-label&quot;&gt;Phone&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;tel&quot; id=&quot;tel-input&quot; value=&quot;1-(770)-334-2518&quot;&gt;
&lt;/div&gt;

&lt;!-- Password Input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;pass-input&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;password&quot; id=&quot;pass-input&quot; value=&quot;mypasswordexample&quot;&gt;
&lt;/div&gt;

&lt;!-- Textarea --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;textarea-input&quot; class=&quot;form-label&quot;&gt;Textarea&lt;/label&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;textarea-input&quot; rows=&quot;5&quot;&gt;Hello World!&lt;/textarea&gt;
&lt;/div&gt;

&lt;!-- Select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-input&quot; class=&quot;form-label&quot;&gt;Select&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;select-input&quot;&gt;
    &lt;option&gt;Choose option...&lt;/option&gt;
    &lt;option&gt;Option item 1&lt;/option&gt;
    &lt;option&gt;Option item 2&lt;/option&gt;
    &lt;option&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Multiselect --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;multiselect-input&quot; class=&quot;form-label&quot;&gt;Multiselect&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;multiselect-input&quot; size=&quot;3&quot; multiple&gt;
    &lt;option&gt;Option item 1&lt;/option&gt;
    &lt;option&gt;Option item 2&lt;/option&gt;
    &lt;option&gt;Option item 3&lt;/option&gt;
    &lt;option&gt;Option item 4&lt;/option&gt;
    &lt;option&gt;Option item 5&lt;/option&gt;
    &lt;option&gt;Option item 6&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- File input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;file-input&quot; class=&quot;form-label&quot;&gt;File&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;file-input&quot;&gt;
&lt;/div&gt;

&lt;!-- Number input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;number-input&quot; class=&quot;form-label&quot;&gt;Number&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;number&quot; id=&quot;number-input&quot; value=&quot;37&quot;&gt;
&lt;/div&gt;

&lt;!-- Datalist --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;datalist-input&quot; class=&quot;form-label&quot;&gt;Datalist&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; list=&quot;datalist-options&quot; id=&quot;datalist-input&quot; placeholder=&quot;Type to search...&quot;&gt;
  &lt;datalist id=&quot;datalist-options&quot;&gt;
    &lt;option value=&quot;San Francisco&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;Seattle&quot;&gt;
    &lt;option value=&quot;Los Angeles&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
  &lt;/datalist&gt;
&lt;/div&gt;

&lt;!-- Range input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;range-input&quot; class=&quot;form-label&quot;&gt;Range&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;range&quot; id=&quot;range-input&quot;&gt;
&lt;/div&gt;

&lt;!-- Color input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;color-input&quot; class=&quot;form-label&quot;&gt;Color&lt;/label&gt;
  &lt;input class=&quot;form-control form-control-color&quot; type=&quot;color&quot; id=&quot;color-input&quot; value=&quot;#ed5050&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Floating labels -->
      <section class="card border-0 mb-4" id="forms-floating-labels">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Floating labels</h2>
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
              <div class="form-floating mb-3">
                <input class="form-control" type="text" id="fl-text" placeholder="Your name">
                <label for="fl-text">Your name</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-select" id="fl-select">
                  <option selected>Argentina</option>
                  <option>Belgium</option>
                  <option>France</option>
                  <option>Germany</option>
                  <option>Japan</option>
                  <option>Spain</option>
                  <option>USA</option>
                </select>
                <label for="fl-select">Your country</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" id="fl-textarea" style="height: 120px;" placeholder="Your message"></textarea>
                <label for="fl-textarea">Your message</label>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Floating label: Text input --&gt;
&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;fl-text&quot; placeholder=&quot;Your name&quot;&gt;
  &lt;label for=&quot;fl-text&quot;&gt;Your name&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Floating label: Select --&gt;
&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;fl-select&quot;&gt;
    &lt;option selected&gt;Argentina&lt;/option&gt;
    &lt;option&gt;Belgium&lt;/option&gt;
    &lt;option&gt;France&lt;/option&gt;
    &lt;option&gt;Germany&lt;/option&gt;
    &lt;option&gt;Japan&lt;/option&gt;
    &lt;option&gt;Spain&lt;/option&gt;
    &lt;option&gt;USA&lt;/option&gt;
  &lt;/select&gt;
  &lt;label for=&quot;fl-select&quot;&gt;Your country&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Floating label: Textarea --&gt;
&lt;div class=&quot;form-floating&quot;&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;fl-textarea&quot; style=&quot;height: 120px;&quot; placeholder=&quot;Your message&quot;&gt;&lt;/textarea&gt;
  &lt;label for=&quot;fl-textarea&quot;&gt;Your message&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Password visibility toggle -->
      <section class="card border-0 mb-4" id="forms-password-toggle">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Password visibility toggle</h2>
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
              <div class="mb-3" style="max-width: 25rem;">
                <label class="form-label" for="pass-visibility">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="pass-visibility" value="hidden@password">
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Password visibility toggle --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label class=&quot;form-label&quot; for=&quot;pass-visibility&quot;&gt;Password&lt;/label&gt;
  &lt;div class=&quot;password-toggle&quot;&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;password&quot; id=&quot;pass-visibility&quot; value=&quot;hidden@password&quot;&gt;
    &lt;label class=&quot;password-toggle-btn&quot; aria-label=&quot;Show/hide password&quot;&gt;
      &lt;input class=&quot;password-toggle-check&quot; type=&quot;checkbox&quot;&gt;
      &lt;span class=&quot;password-toggle-indicator&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Checkboxes -->
      <section class="card border-0 mb-4" id="forms-checkboxes">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Checkboxes</h2>
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
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ex-check-1">
                <label class="form-check-label" for="ex-check-1">Check this checkbox</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ex-check-2" checked>
                <label class="form-check-label" for="ex-check-2">Uncheck this checkbox</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ex-check-3" disabled>
                <label class="form-check-label" for="ex-check-3">Disabled checkbox</label>
              </div>
              <div class="pt-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="ex-check-4">
                  <label class="form-check-label" for="ex-check-4">Check this checkbox</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="ex-check-5" checked>
                  <label class="form-check-label" for="ex-check-5">Uncheck this checkbox</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="ex-check-6" disabled>
                  <label class="form-check-label" for="ex-check-6">Disabled checkbox</label>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Stacked checkboxes --&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-1&quot;&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-1&quot;&gt;Check this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-2&quot; checked&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-2&quot;&gt;Uncheck this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-3&quot; disabled&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-3&quot;&gt;Disabled checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Inline checkboxes --&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-4&quot;&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-4&quot;&gt;Check this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-5&quot; checked&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-5&quot;&gt;Uncheck this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;ex-check-6&quot; disabled&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-check-6&quot;&gt;Disabled checkbox&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Radio buttons -->
      <section class="card border-0 mb-4" id="forms-radios">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Radio buttons</h2>
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
              <div class="form-check">
                <input class="form-check-input" type="radio" id="ex-radio-1" name="radio">
                <label class="form-check-label" for="ex-radio-1">Toggle this radio</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="ex-radio-2" name="radio" checked>
                <label class="form-check-label" for="ex-radio-2">Toggle this radio</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="ex-radio-3" name="radio" disabled>
                <label class="form-check-label" for="ex-radio-3">Disabled radio</label>
              </div>
              <div class="pt-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="ex-radio-4" name="radio2">
                  <label class="form-check-label" for="ex-radio-4">Toggle this radio</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="ex-radio-5" name="radio2" checked>
                  <label class="form-check-label" for="ex-radio-5">Toggle this radio</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="ex-radio-6" name="radio2" disabled>
                  <label class="form-check-label" for="ex-radio-6">Disabled radio</label>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Stacked radio buttons --&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-1&quot; name=&quot;radio&quot;&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-1&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-2&quot; name=&quot;radio&quot; checked&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-2&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-3&quot; name=&quot;radio&quot; disabled&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-3&quot;&gt;Disabled radio&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Inline radio buttons --&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-4&quot; name=&quot;radio2&quot;&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-4&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-5&quot; name=&quot;radio2&quot; checked&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-5&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; id=&quot;ex-radio-6&quot; name=&quot;radio2&quot; disabled&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;ex-radio-6&quot;&gt;Disabled radio&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Switches -->
      <section class="card border-0 mb-4" id="forms-switches">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Switches</h2>
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
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="customSwitch1">
                <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="customSwitch2" checked>
                <label class="form-check-label" for="customSwitch2">Toggle this switch element</label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="customSwitch3" disabled>
                <label class="form-check-label" for="customSwitch3">Disabled switch element</label>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customSwitch1&quot;&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;customSwitch1&quot;&gt;Toggle this switch element&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Checked switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customSwitch2&quot; checked&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;customSwitch2&quot;&gt;Toggle this switch element&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Disabled switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customSwitch3&quot; disabled&gt;
  &lt;label class=&quot;form-check-label&quot; for=&quot;customSwitch3&quot;&gt;Disabled switch element&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Theme mode switch -->
      <section class="card border-0 mb-4" id="forms-mode-switch">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Theme mode switch</h2>
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
              <div class="form-check form-switch mode-switch pe-lg-1">
                <input class="form-check-input" type="checkbox" id="theme-mode1">
                <label class="form-check-label" for="theme-mode1"><i class="ai-sun fs-lg"></i></label>
                <label class="form-check-label" for="theme-mode1"><i class="ai-moon fs-lg"></i></label>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Theme mode switch. Can be used oly once on the page! --&gt;
&lt;div class=&quot;form-check form-switch mode-switch&quot; data-bs-toggle=&quot;mode&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;theme-mode&quot;&gt;
  &lt;label for=&quot;theme-mode&quot; class=&quot;form-check-label&quot;&gt;
    &lt;i class=&quot;ai-sun fs-lg&quot;&gt;&lt;/i&gt;
  &lt;/label&gt;
  &lt;label for=&quot;theme-mode&quot; class=&quot;form-check-label&quot;&gt;
    &lt;i class=&quot;ai-moon fs-lg&quot;&gt;&lt;/i&gt;
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Button toggles (Color, size options) -->
      <section class="card border-0 mb-4" id="forms-btns">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Button toggles (Color, size options)</h2>
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
              <div class="row row-cols-1 row-cols-sm-2 g-4">
                <div class="col">
                  <div class="mb-4">
                    <div class="h6">
                      Color:
                      <span class="text-body-secondary fw-normal ms-1" id="colorOption">Gray marble</span>
                    </div>
                    <div class="d-flex">
                      <div class="me-2 mb-2">
                        <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Gray marble" checked id="color1">
                        <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color1">
                          <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                        </label>
                      </div>
                      <div class="me-2 mb-2">
                        <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Soft beige" id="color2">
                        <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color2">
                          <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #d9c9a1;"></span>
                        </label>
                      </div>
                      <div class="me-2 mb-2">
                        <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Bluish sky" id="color3">
                        <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color3">
                          <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #a1b7d9;"></span>
                        </label>
                      </div>
                      <div class="me-2 mb-2">
                        <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Green grass" id="color4">
                        <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color4">
                          <span class="d-block rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #74947d;"></span>
                        </label>
                      </div>
                      <div class="me-2 mb-2">
                        <input class="btn-check" type="radio" name="color" data-binded-label="colorOption" value="Woody brown" id="color5">
                        <label class="btn btn-icon btn-sm btn-outline-secondary rounded-circle" for="color5">
                          <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: 1.5rem; height: 1.5rem; background-color: #af8352; background-image: url(/img/shop/pattern/wood.jpg);"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="h6 mb-2">Small size</div>
                  <div class="d-flex">
                    <div class="me-1 mb-1">
                      <input class="btn-check" type="radio" name="color-sm" value="Gray marble" checked id="color-sm1">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color-sm1">
                        <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: .625rem; height: .625rem; background-color: #c0c0c0; background-image: url(/img/shop/pattern/marble.jpg);"></span>
                      </label>
                    </div>
                    <div class="me-1 mb-1">
                      <input class="btn-check" type="radio" name="color-sm" value="Soft beige" id="color-sm2">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color-sm2">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #d9c9a1;"></span>
                      </label>
                    </div>
                    <div class="me-1 mb-1">
                      <input class="btn-check" type="radio" name="color-sm" value="Bluish sky" id="color-sm3">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color-sm3">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #a1b7d9;"></span>
                      </label>
                    </div>
                    <div class="me-1 mb-1">
                      <input class="btn-check" type="radio" name="color-sm" value="Green grass" id="color-sm4">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color-sm4">
                        <span class="d-block rounded-circle" style="width: .625rem; height: .625rem; background-color: #74947d;"></span>
                      </label>
                    </div>
                    <div class="me-1 mb-1">
                      <input class="btn-check" type="radio" name="color-sm" value="Woody brown" id="color-sm5">
                      <label class="btn btn-icon btn-xs btn-outline-secondary rounded-circle" for="color-sm5">
                        <span class="d-block bg-size-cover bg-position-center rounded-circle" style="width: .625rem; height: .625rem; background-color: #af8352; background-image: url(/img/shop/pattern/wood.jpg);"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="h6">Weight</div>
                  <div class="d-flex">
                    <div class="me-3">
                      <input class="btn-check" type="radio" name="weight" value="140 g" checked id="weight1">
                      <label class="btn btn-outline-secondary px-2" for="weight1">
                        <span class="mx-1">140 g</span>
                      </label>
                    </div>
                    <div class="me-3">
                      <input class="btn-check" type="radio" name="weight" value="260 g" id="weight2">
                      <label class="btn btn-outline-secondary px-2" for="weight2">
                        <span class="mx-1">260 g</span>
                      </label>
                    </div>
                    <div class="me-3">
                      <input class="btn-check" type="radio" name="weight" value="440 g" id="weight3">
                      <label class="btn btn-outline-secondary px-2" for="weight3">
                        <span class="mx-1">440 g</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Color radio buttons with binded label. Change input type to checkbox to siwth to multiselect behavior. --&gt;
&lt;div class=&quot;h6&quot;&gt;
  Color:
  &lt;span class=&quot;text-body-secondary fw-normal ms-1&quot; id=&quot;colorOption&quot;&gt;
    Gray marble
  &lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;me-2 mb-2&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color1&quot; name=&quot;color&quot; data-binded-label=&quot;colorOption&quot; value=&quot;Gray marble&quot; checked&gt;
    &lt;label for=&quot;color1&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary rounded-circle&quot;&gt;
      &lt;span class=&quot;d-block bg-size-cover bg-position-center rounded-circle&quot; style=&quot;width: 1.5rem; height: 1.5rem; background-color: #c0c0c0; background-image: url(assets/img/shop/pattern/marble.jpg);&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;me-2 mb-2&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color2&quot; name=&quot;color&quot; data-binded-label=&quot;colorOption&quot; value=&quot;Soft beige&quot;&gt;
    &lt;label for=&quot;color2&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary rounded-circle&quot;&gt;
      &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: 1.5rem; height: 1.5rem; background-color: #d9c9a1;&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Small color radio button example --&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;color&quot; name=&quot;color&quot; value=&quot;Soft beige&quot;&gt;
&lt;label for=&quot;color&quot; class=&quot;btn btn-icon btn-xs btn-outline-secondary rounded-circle&quot;&gt;
  &lt;span class=&quot;d-block rounded-circle&quot; style=&quot;width: .625rem; height: .625rem; background-color: #d9c9a1;&quot;&gt;&lt;/span&gt;
&lt;/label&gt;


&lt;!-- Radio buttons with text inside. Ideal for size, weight selection --&gt;
&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div class=&quot;me-3&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;weight1&quot; name=&quot;weight&quot; value=&quot;140 g&quot; checked&gt;
    &lt;label for=&quot;weight1&quot; class=&quot;btn btn-outline-secondary px-2&quot;&gt;
      &lt;span class=&quot;mx-1&quot;&gt;140 g&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;div class=&quot;me-3&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; id=&quot;weight2&quot; name=&quot;weight&quot; value=&quot;260 g&quot;&gt;
    &lt;label for=&quot;weight2&quot; class=&quot;btn btn-outline-secondary px-2&quot;&gt;
      &lt;span class=&quot;mx-1&quot;&gt;260 g&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Count input (+/-) -->
      <section class="card border-0 mb-4" id="forms-count">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Count input (+/-)</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview9" data-bs-toggle="tab" role="tab" aria-controls="preview9" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html9" data-bs-toggle="tab" role="tab" aria-controls="html9" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview9" role="tabpanel">
              <div class="count-input me-4">
                <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                <input class="form-control" type="number" value="1" readonly>
                <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
              </div>
              <div class="count-input bg-gray rounded-3">
                <button class="btn btn-icon btn-lg fs-xl" type="button" data-decrement>-</button>
                <input class="form-control" type="number" value="2" readonly>
                <button class="btn btn-icon btn-lg fs-xl" type="button" data-increment>+</button>
              </div>
            </div>
            <div class="tab-pane fade" id="html9" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Count input naked variant --&gt;
&lt;div class=&quot;count-input&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon fs-xl&quot; data-decrement&gt;-&lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;1&quot; readonly&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon fs-xl&quot; data-decrement&gt;+&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Count input naked variant --&gt;
&lt;div class=&quot;count-input bg-gray rounded-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl&quot; data-decrement&gt;-&lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;2&quot; readonly&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg fs-xl&quot; data-decrement&gt;+&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Range slider -->
      <section class="card border-0 mb-4" id="forms-range-slider">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Range slider</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview10" data-bs-toggle="tab" role="tab" aria-controls="preview10" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html10" data-bs-toggle="tab" role="tab" aria-controls="html10" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview10" role="tabpanel" style="max-width: 20rem;">
              <h6 class="fs-sm">Two handles + inputs</h6>
              <div class="range-slider mb-4 pb-3" data-start-min="280" data-start-max="720" data-min="0" data-max="1000" data-step="1" data-tooltip-prefix="$">
                <div class="range-slider-ui"></div>
                <div class="d-flex">
                  <div class="d-flex align-items-center w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="rs-min">From</label>
                    <input class="form-control form-control-sm range-slider-value-min" type="number" style="max-width: 6rem;" id="rs-min">
                  </div>
                  <div class="d-flex align-items-center justify-content-end w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="rs-max">To</label>
                    <input class="form-control form-control-sm range-slider-value-max" type="number" style="max-width: 6rem;" id="rs-max">
                  </div>
                </div>
              </div>
              <h6 class="fs-sm">With value scale (pips)</h6>
              <div class="range-slider mb-4 pb-3" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1" data-pips="true" data-tooltip-prefix="$">
                <div class="range-slider-ui"></div>
                <div class="d-flex position-relative z-5">
                  <div class="d-flex align-items-center w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="rs-min2">From</label>
                    <input class="form-control form-control-sm range-slider-value-min" type="number" style="max-width: 6rem;" id="rs-min2">
                  </div>
                  <div class="d-flex align-items-center justify-content-end w-50">
                    <label class="form-label fs-xs me-2 mb-0" for="rs-max2">To</label>
                    <input class="form-control form-control-sm range-slider-value-max" type="number" style="max-width: 6rem;" id="rs-max2">
                  </div>
                </div>
              </div>
              <h6 class="fs-sm">One handle + no inputs</h6>
              <div class="range-slider" data-start-min="450" data-min="0" data-max="1000" data-step="1" data-tooltip-prefix="$">
                <div class="range-slider-ui"></div>
                <input class="form-control range-slider-value-min" type="hidden">
              </div>
            </div>
            <div class="tab-pane fade" id="html10" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Range slider: Two handles + inputs --&gt;
&lt;div class=&quot;range-slider&quot; data-start-min=&quot;280&quot; data-start-max=&quot;720&quot; data-min=&quot;0&quot; data-max=&quot;1000&quot; data-step=&quot;1&quot; data-tooltip-prefix=&quot;$&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;rs-min&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;From&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;rs-min&quot; class=&quot;form-control form-control-sm range-slider-value-min&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;rs-max&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;To&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;rs-max&quot; class=&quot;form-control form-control-sm range-slider-value-max&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Range slider: With value scale (pips) --&gt;
&lt;div class=&quot;range-slider&quot; data-start-min=&quot;250&quot; data-start-max=&quot;680&quot; data-min=&quot;0&quot; data-max=&quot;1000&quot; data-step=&quot;1&quot; data-pips=&quot;true&quot; data-tooltip-prefix=&quot;$&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;rs-min&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;From&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;rs-min&quot; class=&quot;form-control form-control-sm range-slider-value-min&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center w-50&quot;&gt;
      &lt;label for=&quot;rs-max&quot; class=&quot;form-label fs-xs me-2 mb-0&quot;&gt;To&lt;/label&gt;
      &lt;input type=&quot;number&quot; id=&quot;rs-max&quot; class=&quot;form-control form-control-sm range-slider-value-max&quot; style=&quot;max-width: 6rem;&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Range slider: One handle + no inputs --&gt;
&lt;div class=&quot;range-slider&quot; data-start-min=&quot;450&quot; data-min=&quot;0&quot; data-max=&quot;1000&quot; data-step=&quot;1&quot; data-tooltip-prefix=&quot;$&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;input type=&quot;hidden&quot; class=&quot;form-control range-slider-value-min&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Sizing -->
      <section class="card border-0 mb-4" id="forms-sizing">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Sizing</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview11" data-bs-toggle="tab" role="tab" aria-controls="preview11" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html11" data-bs-toggle="tab" role="tab" aria-controls="html11" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview11" role="tabpanel">
              <div class="d-sm-flex mt-n1">
                <div class="w-100 me-4">
                  <div class="mb-3">
                    <label class="form-label fs-base" for="input-lg">Large input</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Large input placeholder" id="input-lg">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="input-md">Normal input</label>
                    <input class="form-control" type="text" placeholder="Normal input placeholder" id="input-md">
                  </div>
                  <div class="mb-3 mb-sm-0">
                    <label class="form-label fs-xs" for="input-sm">Small input</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Small input placeholder" id="input-sm">
                  </div>
                </div>
                <div class="w-100">
                  <div class="mb-3">
                    <label class="form-label fs-base" for="select-lg">Large select</label>
                    <select class="form-select form-select-lg" id="select-lg">
                      <option>Large select option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="select-md">Normal select</label>
                    <select class="form-select" id="select-md">
                      <option>Normal select option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                  </div>
                  <div class="mb-3 mb-sm-0">
                    <label class="form-label fs-xs" for="select-sm">Small select</label>
                    <select class="form-select form-select-sm" id="select-sm">
                      <option>Small select option</option>
                      <option>Option item 1</option>
                      <option>Option item 2</option>
                      <option>Option item 3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html11" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Large input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-lg&quot; class=&quot;form-label fs-base&quot;&gt;Large input&lt;/label&gt;
  &lt;input type=&quot;text&quot; id=&quot;input-lg&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;Large input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Normal input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-md&quot; class=&quot;form-label&quot;&gt;Normal input&lt;/label&gt;
  &lt;input type=&quot;text&quot; id=&quot;input-md&quot; class=&quot;form-control&quot; placeholder=&quot;Normal input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Small input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-sm&quot; class=&quot;form-label fs-xs&quot;&gt;Small input&lt;/label&gt;
  &lt;input type=&quot;text&quot; id=&quot;input-sm&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Small input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Large select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-lg&quot; class=&quot;form-label fs-base&quot;&gt;Large select&lt;/label&gt;
  &lt;select id=&quot;select-lg&quot; class=&quot;form-select form-select-lg&quot;&gt;
    &lt;option&gt;Large select option&lt;/option&gt;
    &lt;option&gt;Option item 1&lt;/option&gt;
    &lt;option&gt;Option item 2&lt;/option&gt;
    &lt;option&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Normal select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-md&quot; class=&quot;form-label&quot;&gt;Normal select&lt;/label&gt;
  &lt;select id=&quot;select-md&quot; class=&quot;form-select&quot;&gt;
    &lt;option&gt;Normal select option&lt;/option&gt;
    &lt;option&gt;Option item 1&lt;/option&gt;
    &lt;option&gt;Option item 2&lt;/option&gt;
    &lt;option&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Small select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-sm&quot; class=&quot;form-label fs-xs&quot;&gt;Small select&lt;/label&gt;
  &lt;select id=&quot;select-sm&quot; class=&quot;form-select form-select-sm&quot;&gt;
    &lt;option&gt;Small select option&lt;/option&gt;
    &lt;option&gt;Option item 1&lt;/option&gt;
    &lt;option&gt;Option item 2&lt;/option&gt;
    &lt;option&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Readonly & Disabled -->
      <section class="card border-0 mb-4" id="forms-disabled">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Readonly &amp; Disabled</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview12" data-bs-toggle="tab" role="tab" aria-controls="preview12" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html12" data-bs-toggle="tab" role="tab" aria-controls="html12" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview12" role="tabpanel" style="max-width: 25rem;">
              <div class="mb-3">
                <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
              </div>
              <div class="mb-3">
                <input class="form-control" type="text" id="disabled-input" placeholder="Disabled input here..." disabled>
              </div>
              <div class="mb-3">
                <select class="form-select" id="disabled-select-input" disabled>
                  <option>Disabled select here...</option>
                  <option>Option item 1</option>
                  <option>Option item 2</option>
                  <option>Option item 3</option>
                </select>
              </div>
            </div>
            <div class="tab-pane fade" id="html12" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Readonly input --&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Readonly input here...&quot; readonly&gt;

&lt;!-- Disabled input --&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Disabled input here...&quot; disabled&gt;

&lt;!-- Disabled select --&gt;
&lt;select class=&quot;form-select&quot; disabled&gt;
  &lt;option&gt;Disabled select here...&lt;/option&gt;
  &lt;option&gt;Option item 1&lt;/option&gt;
  &lt;option&gt;Option item 2&lt;/option&gt;
  &lt;option&gt;Option item 3&lt;/option&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Inline form -->
      <section class="card border-0 mb-4" id="forms-inline">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Inline form</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview13" data-bs-toggle="tab" role="tab" aria-controls="preview13" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html13" data-bs-toggle="tab" role="tab" aria-controls="html13" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview13" role="tabpanel">
              <form class="row row-cols-sm-auto g-3 align-items-center">
                <div class="col-12">
                  <input class="form-control" type="text" placeholder="Full name" id="inline-form-input">
                </div>
                <div class="col-12">
                  <select class="form-select" id="inline-form-select">
                    <option value="">Choose</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inline-form-check">
                    <label class="form-check-label" for="inline-form-check">Remember me</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="html13" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Inline form --&gt;
&lt;form class=&quot;row row-cols-sm-auto g-3 align-items-center&quot;&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;input type=&quot;text&quot; id=&quot;inline-form-input&quot; class=&quot;form-control&quot; placeholder=&quot;Full name&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;select id=&quot;inline-form-select&quot; class=&quot;form-select&quot;&gt;
      &lt;option value=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input type=&quot;checkbox&quot; id=&quot;inline-form-check&quot; class=&quot;form-check-input&quot;&gt;
      &lt;label for=&quot;inline-form-check&quot; class=&quot;form-check-label&quot;&gt;Remember me&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Help text -->
      <section class="card border-0 mb-4" id="forms-help-text">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Help text</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview14" data-bs-toggle="tab" role="tab" aria-controls="preview14" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html14" data-bs-toggle="tab" role="tab" aria-controls="html14" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview14" role="tabpanel">
              <div class="mb-3" style="max-width: 28rem;">
                <label class="form-label" for="help-text-input">Password</label>
                <input class="form-control" type="password" id="help-text-input" placeholder="Your password here">
                <div class="form-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
              </div>
            </div>
            <div class="tab-pane fade" id="html14" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Form help text --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;help-text-input&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;password&quot; id=&quot;help-text-input&quot; placeholder=&quot;Your password here&quot;&gt;
  &lt;div class=&quot;form-text&quot;&gt;Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Validation: status text -->
      <section class="card border-0 mb-4" id="forms-validation-text">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Validation: status text</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview15" data-bs-toggle="tab" role="tab" aria-controls="preview15" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html15" data-bs-toggle="tab" role="tab" aria-controls="html15" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview15" role="tabpanel">
              <form class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustom01">First name</label>
                    <input class="form-control" type="text" id="validationCustom01" placeholder="First name" value="John" required>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustom02">Last name</label>
                    <input class="form-control" type="text" id="validationCustom02" placeholder="Last name" value="Doe" required>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustomUsername">Username</label>
                    <input class="form-control" type="text" id="validationCustomUsername" placeholder="Username" required>
                    <div class="invalid-feedback">Please choose a username.</div>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="validationCustom03">City</label>
                    <select class="form-select" id="validationCustom03" required>
                      <option value="">Choose city...</option>
                      <option value="Dallas">Dallas</option>
                      <option value="Houston">Houston</option>
                      <option value="Los Angeles">Los Angeles</option>
                      <option value="Miami">Miami</option>
                      <option value="New York">New York</option>
                    </select>
                    <div class="invalid-feedback">Please provide a valid city.</div>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label class="form-label" for="validationCustom04">State</label>
                    <select class="form-select" id="validationCustom04" required>
                      <option value="">Choose state...</option>
                      <option value="Arizona">Arizona</option>
                      <option value="Colorado">Colorado</option>
                      <option value="Florida">Florida</option>
                      <option value="Indiana">Indiana</option>
                      <option value="Kentucky">Kentucky</option>
                      <option value="Texas">Texas</option>
                    </select>
                    <div class="invalid-feedback">Please provide a valid state.</div>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label class="form-label" for="validationCustom05">Zip</label>
                    <input class="form-control" type="text" id="validationCustom05" placeholder="Zip" required>
                    <div class="invalid-feedback">Please provide a valid zip.</div>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
                <div class="mb-3 py-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit Form</button>
              </form>
            </div>
            <div class="tab-pane fade" id="html15" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Forms validation: status text --&gt;
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustom01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationCustom01&quot; placeholder=&quot;First name&quot; value=&quot;John&quot; required&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustom02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationCustom02&quot; placeholder=&quot;Last name&quot; value=&quot;Doe&quot; required&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustomUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationCustomUsername&quot; placeholder=&quot;Username&quot; required&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please choose a username.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustom03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationCustom03&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Choose city...&lt;/option&gt;
        &lt;option value=&quot;Dallas&quot;&gt;Dallas&lt;/option&gt;
        &lt;option value=&quot;Houston&quot;&gt;Houston&lt;/option&gt;
        &lt;option value=&quot;Los Angeles&quot;&gt;Los Angeles&lt;/option&gt;
        &lt;option value=&quot;Miami&quot;&gt;Miami&lt;/option&gt;
        &lt;option value=&quot;New York&quot;&gt;New York&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid city.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustom04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationCustom04&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Choose state...&lt;/option&gt;
        &lt;option value=&quot;Arizona&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;Colorado&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;Florida&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;Indiana&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;Kentucky&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;Texas&quot;&gt;Texas&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid state.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationCustom05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationCustom05&quot; placeholder=&quot;Zip&quot; required&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid zip.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;invalidCheck&quot; required&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;&gt;Agree to terms and conditions&lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;You must agree before submitting.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Validation: status tooltips -->
      <section class="card border-0 mb-4" id="forms-validation-tooltips">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Validation: status tooltips</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview16" data-bs-toggle="tab" role="tab" aria-controls="preview16" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html16" data-bs-toggle="tab" role="tab" aria-controls="html16" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview16" role="tabpanel">
              <form class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationTooltip01">First name</label>
                    <input class="form-control" type="text" id="validationTooltip01" placeholder="First name" value="John" required>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationTooltip02">Last name</label>
                    <input class="form-control" type="text" id="validationTooltip02" placeholder="Last name" value="Doe" required>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationTooltipUsername">Username</label>
                    <input class="form-control" type="text" id="validationTooltipUsername" placeholder="Username" required>
                    <div class="invalid-tooltip">Please choose a username.</div>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label" for="validationTooltip03">City</label>
                    <select class="form-select" id="validationTooltip03" required>
                      <option value="">Choose city...</option>
                      <option value="Dallas">Dallas</option>
                      <option value="Houston">Houston</option>
                      <option value="Los Angeles">Los Angeles</option>
                      <option value="Miami">Miami</option>
                      <option value="New York">New York</option>
                    </select>
                    <div class="invalid-tooltip">Please provide a valid city.</div>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label class="form-label" for="validationTooltip04">State</label>
                    <select class="form-select" id="validationTooltip04" required>
                      <option value="">Choose state...</option>
                      <option value="Arizona">Arizona</option>
                      <option value="Colorado">Colorado</option>
                      <option value="Florida">Florida</option>
                      <option value="Indiana">Indiana</option>
                      <option value="Kentucky">Kentucky</option>
                      <option value="Texas">Texas</option>
                    </select>
                    <div class="invalid-tooltip">Please provide a valid state.</div>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label class="form-label" for="validationTooltip05">Zip</label>
                    <input class="form-control" type="text" id="validationTooltip05" placeholder="Zip" required>
                    <div class="invalid-tooltip">Please provide a valid zip.</div>
                    <div class="valid-tooltip">Looks good!</div>
                  </div>
                </div>
                <div class="mb-3 py-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="invalidCheck01" required>
                    <label class="form-check-label" for="invalidCheck01">Agree to terms and conditions</label>
                    <div class="invalid-tooltip">You must agree before submitting.</div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit Form</button>
              </form>
            </div>
            <div class="tab-pane fade" id="html16" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Forms validation: status tooltips --&gt;
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltip01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationTooltip01&quot; placeholder=&quot;First name&quot; value=&quot;John&quot; required&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltip02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationTooltip02&quot; placeholder=&quot;Last name&quot; value=&quot;Doe&quot; required&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltipUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationTooltipUsername&quot; placeholder=&quot;Username&quot; required&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please choose a username.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltip03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationTooltip03&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Choose city...&lt;/option&gt;
        &lt;option value=&quot;Dallas&quot;&gt;Dallas&lt;/option&gt;
        &lt;option value=&quot;Houston&quot;&gt;Houston&lt;/option&gt;
        &lt;option value=&quot;Los Angeles&quot;&gt;Los Angeles&lt;/option&gt;
        &lt;option value=&quot;Miami&quot;&gt;Miami&lt;/option&gt;
        &lt;option value=&quot;New York&quot;&gt;New York&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid city.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltip04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationTooltip04&quot; required&gt;
        &lt;option value=&quot;&quot;&gt;Choose state...&lt;/option&gt;
        &lt;option value=&quot;Arizona&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;Colorado&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;Florida&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;Indiana&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;Kentucky&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;Texas&quot;&gt;Texas&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid state.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationTooltip05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;validationTooltip05&quot; placeholder=&quot;Zip&quot; required&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid zip.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;invalidCheck01&quot; required&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck01&quot;&gt;Agree to terms and conditions&lt;/label&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;You must agree before submitting.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit Form&lt;/button&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Input mask (Formatted content) -->
      <section class="card border-0 mb-4" id="forms-formatted">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Input mask (Formatted content)</h2>
        </div>
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs flex-nowrap align-items-center mb-n1" role="tablist">
            <li class="nav-item me-3">
              <a class="nav-link px-0 py-2 border-0 rounded-1 active" href="#preview17" data-bs-toggle="tab" role="tab" aria-controls="preview17" aria-selected="true">
                <i class="ai-show fs-lg opacity-90 me-2"></i>
                Preview
              </a>
            </li>
            <li class="vr opacity-20 my-3 me-3"></li>
            <li class="nav-item">
              <a class="nav-link px-0 py-2 border-0 rounded-1" href="#html17" data-bs-toggle="tab" role="tab" aria-controls="html17" aria-selected="false">
                <i class="ai-code fs-xl opacity-90 me-2"></i>
                HTML
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="preview17" role="tabpanel" style="max-width: 25rem;">
              <div class="mb-3">
                <label class="form-label" for="cardFormat">Card number</label>
                <div class="input-group">
                  <input class="form-control" type="text" data-format='{"creditCard": true}' placeholder="Enter credit card number" id="cardFormat">
                  <div class="input-group-text py-0">
                    <div class="credit-card-icon"></div>
                  </div>
                </div>
                <ul class="list-unstyled fs-sm pt-2">
                  <li class="mb-1"><span class="fw-semibold">Amex:</span> starts with 34/37</li>
                  <li class="mb-1"><span class="fw-semibold">VISA:</span> starts with 4</li>
                  <li class="mb-1"><span class="fw-semibold">Diners Club:</span> starts with 300-305/309</li>
                  <li class="mb-1"><span class="fw-semibold">MasterCard:</span> starts with 51-55/22-27</li>
                  <li class="mb-1"><span class="fw-semibold">JCB:</span> starts with 35/2131/1800</li>
                  <li class="mb-1"><span class="fw-semibold">Discover:</span> starts with 6011|65|644-649</li>
                </ul>
              </div>
              <div class="mb-3">
                <label class="form-label" for="phoneFormat">Phone</label>
                <input class="form-control" type="tel" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __" id="phoneFormat">
              </div>
              <div class="mb-3">
                <label class="form-label" for="dateFormat">Date</label>
                <input class="form-control" type="text" data-format='{"date": true, "delimiter": "-", "datePattern": ["Y", "m", "d"]}' placeholder="yyyy-mm-dd" id="dateFormat">
              </div>
              <div class="mb-3">
                <label class="form-label" for="dateShortFormat">Date short</label>
                <input class="form-control" type="text" data-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="mm/yy" id="dateShortFormat">
              </div>
              <div class="mb-3">
                <label class="form-label" for="timeFormat">Time</label>
                <input class="form-control" type="text" data-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm" id="timeFormat">
              </div>
              <div class="mb-3">
                <label class="form-label" for="customFormat">Custom blocks</label>
                <input class="form-control" type="text" data-format='{"blocks": [4, 3, 3, 4, 2], "delimiters": [".", " ", "/", "-"]}' placeholder="blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']" id="customFormat">
              </div>
              <div class="mb-3">
                <label class="form-label" for="prefixFormat">Prefix + uppercase</label>
                <input class="form-control" type="text" data-format='{"prefix": "PREFIX", "delimiter": "-", "blocks": [6, 4, 5, 3], "uppercase": true}' id="prefixFormat">
              </div>
            </div>
            <div class="tab-pane fade" id="html17" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Format: Credit card number --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;cardFormat&quot;&gt;Card number&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;cardFormat&quot; data-format='{&quot;creditCard&quot;: true}' placeholder=&quot;Enter credit card number&quot;&gt;
  &lt;div class=&quot;input-group-text py-0&quot;&gt;
    &lt;div class=&quot;credit-card-icon&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Format: Phone --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;phoneFormat&quot;&gt;Phone&lt;/label&gt;
  &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; id=&quot;phoneFormat&quot; data-format='{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}' placeholder=&quot;+1 ___ ___ __&quot;&gt;
&lt;/div&gt;

&lt;!-- Format: Date long --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;dateFormat&quot;&gt;Date&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;dateFormat&quot; data-format='{&quot;date&quot;: true, &quot;delimiter&quot;: &quot;-&quot;, &quot;datePattern&quot;: [&quot;Y&quot;, &quot;m&quot;, &quot;d&quot;]}' placeholder=&quot;yyyy-mm-dd&quot;&gt;
&lt;/div&gt;

&lt;!-- Format: Date short --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;dateShortFormat&quot;&gt;Date short&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;dateShortFormat&quot; data-format='{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}' placeholder=&quot;mm/yy&quot;&gt;
&lt;/div&gt;

&lt;!-- Format: Time --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;timeFormat&quot;&gt;Time&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;timeFormat&quot; data-format='{&quot;time&quot;: true, &quot;timePattern&quot;: [&quot;h&quot;, &quot;m&quot;]}' placeholder=&quot;hh:mm&quot;&gt;
&lt;/div&gt;

&lt;!-- Format: Custom blocks --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;customFormat&quot;&gt;Custom blocks&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;customFormat&quot; data-format='{&quot;blocks&quot;: [4, 3, 3, 4, 2], &quot;delimiters&quot;: [&quot;.&quot;, &quot; &quot;, &quot;/&quot;, &quot;-&quot;]}' placeholder=&quot;blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']&quot;&gt;
&lt;/div&gt;

&lt;!-- Format: Prefix + uppercase --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;prefixFormat&quot;&gt;Prefix + uppercase&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prefixFormat&quot; data-format='{&quot;prefix&quot;: &quot;PREFIX&quot;, &quot;delimiter&quot;: &quot;-&quot;, &quot;blocks&quot;: [6, 4, 5, 3], &quot;uppercase&quot;: true}'&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

@endsection
