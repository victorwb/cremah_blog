@extends('layouts.base', ['title' => 'Around UI Kit | List group'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              List group
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-basic" data-scroll="data-scroll">Basic example</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-links" data-scroll="data-scroll">Links or buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-flush" data-scroll="data-scroll">Flush</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-icons" data-scroll="data-scroll">With icons &amp; badges</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-checkboxes" data-scroll="data-scroll">Checkboxes &amp; radios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-numbered" data-scroll="data-scroll">Numbered list group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-horizontal" data-scroll="data-scroll">Horizontal list group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-horizontal-action" data-scroll="data-scroll">Actionable horizontal list group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-custom-content" data-scroll="data-scroll">Custom content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-javascript" data-scroll="data-scroll">JavaScript behavior</a>
              </li>
            </ul>
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
        <a class="nav-link px-0 py-2" href="input-group#ig-m">
          <i class="ai-circle-arrow-right fs-lg opacity-90 me-2"></i>
          Input group
        </a>
      </li>
      <li class="nav-item" id="lg-m">
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          List group
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-basic" data-scroll="data-scroll">Basic example</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-links" data-scroll="data-scroll">Links or buttons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-flush" data-scroll="data-scroll">Flush</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-icons" data-scroll="data-scroll">With icons &amp; badges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-checkboxes" data-scroll="data-scroll">Checkboxes &amp; radios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-numbered" data-scroll="data-scroll">Numbered list group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-horizontal" data-scroll="data-scroll">Horizontal list group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-horizontal-action" data-scroll="data-scroll">Actionable horizontal list group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-custom-content" data-scroll="data-scroll">Custom content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#lg-javascript" data-scroll="data-scroll">JavaScript behavior</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">List group</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Flexible component for displaying a series of content.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/list-group/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- Basic example -->
      <section class="card border-0 mb-4" id="lg-basic">
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
              <ul class="list-group" style="max-width: 350px;">
                <li class="list-group-item active">Active item here</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item disabled" aria-disabled="true">Disabled item here</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic list group --&gt;
&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item active&quot;&gt;Active item here&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;Disabled item here&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Links or buttons -->
      <section class="card border-0 mb-4" id="lg-links">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Links or buttons</h2>
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
              <div class="list-group" style="max-width: 350px;">
                <a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
                <a class="list-group-item list-group-item-action active" href="#">Active item here</a>
                <a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
                <a class="list-group-item list-group-item-action disabled" href="#" tabindex="-1" aria-disabled="true">Disabled item here</a>
                <a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Actionalbe list group --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;Active item here&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled item here&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Flush -->
      <section class="card border-0 mb-4" id="lg-flush">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Flush</h2>
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
              <ul class="list-group list-group-flush" style="max-width: 350px;">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Flush list group --&gt;
&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- With icons & badges -->
      <section class="card border-0 mb-4" id="lg-icons">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">With icons &amp; badges</h2>
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
              <ul class="list-group" style="max-width: 350px;">
                <li class="list-group-item d-flex align-items-center">
                  <i class="ai-messages text-body-secondary fs-xl me-2"></i>
                  Messages
                  <span class="badge bg-success ms-auto">14</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="ai-cart text-body-secondary fs-xl me-2"></i>
                  Orders
                  <span class="badge bg-warning ms-auto">2</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="ai-heart text-body-secondary fs-xl me-2"></i>
                  Favourites
                  <span class="badge bg-danger ms-auto">6</span>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- List group with icons and badges --&gt;
  &lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item d-flex align-items-center&quot;&gt;
      &lt;i class=&quot;ai-messages text-body-secondary fs-xl me-2&quot;&gt;&lt;/i&gt;
      Messages
      &lt;span class=&quot;badge bg-success ms-auto&quot;&gt;14&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex align-items-center&quot;&gt;
      &lt;i class=&quot;ai-cart mt-n1 text-body-secondary fs-xl me-2&quot;&gt;&lt;/i&gt;
      Orders
      &lt;span class=&quot;badge bg-warning ms-auto&quot;&gt;2&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex align-items-center&quot;&gt;
      &lt;i class=&quot;ai-heart text-body-secondary fs-xl me-2&quot;&gt;&lt;/i&gt;
      Favourites
      &lt;span class=&quot;badge bg-danger ms-auto&quot;&gt;6&lt;/span&gt;
    &lt;/li&gt;
  &lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Checkboxes & radios -->
      <section class="card border-0 mb-4" id="lg-checkboxes">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Checkboxes &amp; radios</h2>
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
              <div class="row">
                <div class="col-xl-5 col-sm-6 mb-4 mb-sm-0">
                  <div class="list-group">
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="checkbox" checked value="">Cras justo odio
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="checkbox" value="">Dapibus ac facilisis in
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="checkbox" value="">Morbi leo risus
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="checkbox" value="">Porta ac consectetur ac
                    </label>
                  </div>
                </div>
                <div class="col-xl-5 col-sm-6">
                  <div class="list-group">
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="radio" name="lg-radio" checked value="">Cras justo odio
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="radio" name="lg-radio" value="">Dapibus ac facilisis in
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="radio" name="lg-radio" value="">Morbi leo risus
                    </label>
                    <label class="list-group-item">
                      <input class="form-check-input me-2" type="radio" name="lg-radio" value="">Porta ac consectetur ac
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- List group with checkboxes --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; checked value=&quot;&quot;&gt;
    Cras justo odio
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
    Dapibus ac facilisis in
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
    Morbi leo risus
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
    Porta ac consectetur ac
  &lt;/label&gt;
&lt;/div&gt;

&lt;!-- List group with radios --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; checked value=&quot;&quot;&gt;
    Cras justo odio
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;&quot;&gt;
    Dapibus ac facilisis in
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;&quot;&gt;
   Morbi leo risus
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;&quot;&gt;
    Porta ac consectetur ac
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Numbered list group -->
      <section class="card border-0 mb-4" id="lg-numbered">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Numbered list group</h2>
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
              <ol class="list-group list-group-numbered" style="max-width: 350px;">
                <li class="list-group-item">Active item here</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ol>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Numbered list group --&gt;
&lt;ol class=&quot;list-group list-group-numbered&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Active item here&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Horizontal list group -->
      <section class="card border-0 mb-4" id="lg-horizontal">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Horizontal list group</h2>
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
              <ul class="list-group list-group-horizontal-sm mb-3">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
              </ul>
              <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item flex-fill text-center">Cras justo odio</li>
                <li class="list-group-item flex-fill text-center">Dapibus ac facilisis in</li>
                <li class="list-group-item flex-fill text-center">Morbi leo risus</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Basic horizontal list group (starting sm screen) --&gt;
&lt;ul class=&quot;list-group list-group-horizontal-sm&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Justified horizontal list group (starting sm screen) --&gt;
&lt;ul class=&quot;list-group list-group-horizontal-sm&quot;&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Actionable horizontal list group -->
      <section class="card border-0 mb-4" id="lg-horizontal-action">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Actionable horizontal list group</h2>
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
              <div class="list-group list-group-horizontal-sm">
                <a class="list-group-item list-group-item-action active text-center" href="#">Active item here</a>
                <a class="list-group-item list-group-item-action text-center" href="#">Dapibus ac facilisis in</a>
                <a class="list-group-item list-group-item-action text-center" href="#">Morbi leo risus</a>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Actionable horizontal list group (starting sm screen) --&gt;
&lt;div class=&quot;list-group list-group-horizontal-sm&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active text-center&quot;&gt;Active item here&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action text-center&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action text-center&quot;&gt;Morbi leo risus&lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Custom content -->
      <section class="card border-0 mb-4" id="lg-custom-content">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Custom content</h2>
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
              <div class="list-group" style="max-width: 420px;">
                <a class="list-group-item list-group-item-action flex-column align-items-start active py-3" href="#">
                  <div class="d-flex flex-wrap w-100 justify-content-between">
                    <h6 class="text-white">List group item heading</h6>
                    <small class="text-white opacity-60 mb-2">3 days ago</small>
                  </div>
                  <p class="fs-sm fw-normal text-white opacity-75">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat.</p>
                  <small class="text-white opacity-60">Donec id elit non mi porta.</small>
                </a>
                <a class="list-group-item list-group-item-action flex-column align-items-start py-3" href="#">
                  <div class="d-flex flex-wrap w-100 justify-content-between">
                    <h6>List group item heading</h6>
                    <small class="text-body-secondary mb-2">3 days ago</small>
                  </div>
                  <p class="fs-sm fw-normal text-body">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat.</p>
                  <small class="text-body-secondary">Donec id elit non mi porta.</small>
                </a>
                <a class="list-group-item list-group-item-action flex-column align-items-start py-3" href="#">
                  <div class="d-flex flex-wrap w-100 justify-content-between">
                    <h6>List group item heading</h6>
                    <small class="text-body-secondary mb-2">3 days ago</small>
                  </div>
                  <p class="fs-sm fw-normal text-body">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat.</p>
                  <small class="text-body-secondary">Donec id elit non mi porta.</small>
                </a>
              </div>
            </div>
            <div class="tab-pane fade" id="html9" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- List group with custom content --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start py-3 active&quot;&gt;
    &lt;div class=&quot;d-flex flex-wrap w-100 justify-content-between&quot;&gt;
      &lt;h6 class=&quot;text-white&quot;&gt;List group item heading&lt;/h6&gt;
      &lt;small class=&quot;text-white opacity-60 mb-2&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm fw-normal text-white opacity-75&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.&lt;/p&gt;
    &lt;small class=&quot;text-white opacity-60&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start py-3&quot;&gt;
    &lt;div class=&quot;d-flex flex-wrap w-100 justify-content-between&quot;&gt;
      &lt;h6&gt;List group item heading&lt;/h6&gt;
      &lt;small class=&quot;text-body-secondary mb-2&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm fw-normal text-body&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.&lt;/p&gt;
    &lt;small class=&quot;text-body-secondary&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start py-3&quot;&gt;
    &lt;div class=&quot;d-flex flex-wrap w-100 justify-content-between&quot;&gt;
      &lt;h6&gt;List group item heading&lt;/h6&gt;
      &lt;small class=&quot;text-body-secondary mb-2&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm fw-normal text-body&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit. Excepteur sint occaecat cupidatat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.&lt;/p&gt;
    &lt;small class=&quot;text-body-secondary&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- JavaScript behavior -->
      <section class="card border-0 mb-4" id="lg-javascript">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">JavaScript behavior</h2>
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
            <div class="tab-pane fade show active" id="preview10" role="tabpanel">
              <div class="row">
                <div class="col-xl-11">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="list-group" role="tablist">
                        <a class="list-group-item list-group-item-action active" href="#list-home" data-bs-toggle="list" role="tab" aria-controls="list-home" id="list-home-list">Home</a>
                        <a class="list-group-item list-group-item-action" href="#list-profile" data-bs-toggle="list" role="tab" aria-controls="list-profile" id="list-profile-list">Profile</a>
                        <a class="list-group-item list-group-item-action" href="#list-messages" data-bs-toggle="list" role="tab" aria-controls="list-messages" id="list-messages-list">Messages</a>
                        <a class="list-group-item list-group-item-action" href="#list-settings" data-bs-toggle="list" role="tab" aria-controls="list-settings" id="list-settings-list">Settings</a>
                      </div>
                    </div>
                    <div class="col-md-8 pt-4 pt-md-0">
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim.</div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo.</div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing.</div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html10" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- JavaScript behavior --&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;div class=&quot;list-group&quot; role=&quot;tablist&quot;&gt;
      &lt;a href=&quot;#list-home&quot; id=&quot;list-home-list&quot; class=&quot;list-group-item list-group-item-action active&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-home&quot;&gt;
        Home
      &lt;/a&gt;
      &lt;a href=&quot;#list-profile&quot; id=&quot;list-profile-list&quot; class=&quot;list-group-item list-group-item-action&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-profile&quot;&gt;
        Profile
      &lt;/a&gt;
      &lt;a href=&quot;#list-messages&quot; id=&quot;list-messages-list&quot; class=&quot;list-group-item list-group-item-action&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-messages&quot;&gt;
        Messages
      &lt;/a&gt;
      &lt;a href=&quot;#list-settings&quot; id=&quot;list-settings-list&quot; class=&quot;list-group-item list-group-item-action&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-settings&quot;&gt;
        Settings
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-8 pt-4 pt-md-0&quot;&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
      &lt;div id=&quot;list-home&quot; class=&quot;tab-pane fade show active&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-home-list&quot;&gt;...&lt;/div&gt;
      &lt;div id=&quot;list-profile&quot; class=&quot;tab-pane fade&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-profile-list&quot;&gt;...&lt;/div&gt;
      &lt;div id=&quot;list-messages&quot; class=&quot;tab-pane fade&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-messages-list&quot;&gt;...&lt;/div&gt;
      &lt;div id=&quot;list-settings&quot; class=&quot;tab-pane fade&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-settings-list&quot;&gt;...&lt;/div&gt;
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