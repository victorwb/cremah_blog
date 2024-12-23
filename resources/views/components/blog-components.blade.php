@extends('layouts.base', ['title' => 'Around UI Kit | Blog components'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Blog components
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-grid" data-scroll="data-scroll">Post preview (Grid)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-list" data-scroll="data-scroll">Post preview (List)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-simple" data-scroll="data-scroll">Post preview (Simple)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-posts-widget" data-scroll="data-scroll">Featured posts widget</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-categories-widget" data-scroll="data-scroll">Categories widget</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-author-widget-1" data-scroll="data-scroll">Author widget style 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-author-widget-2" data-scroll="data-scroll">Author widget style 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-comments" data-scroll="data-scroll">Post comments</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Blog components
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-grid" data-scroll="data-scroll">Post preview (Grid)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-list" data-scroll="data-scroll">Post preview (List)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-simple" data-scroll="data-scroll">Post preview (Simple)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-posts-widget" data-scroll="data-scroll">Featured posts widget</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-categories-widget" data-scroll="data-scroll">Categories widget</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-author-widget-1" data-scroll="data-scroll">Author widget style 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-author-widget-2" data-scroll="data-scroll">Author widget style 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#blog-comments" data-scroll="data-scroll">Post comments</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Blog components</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Components that are related to the blog / news section of the website.</p>
        <div class="ps-md-4 mb-3">
          <span class="badge bg-warning fs-sm">Around component</span>
        </div>
      </div>


      <!-- Post preview (Grid) -->
      <section class="card border-0 mb-4" id="blog-grid">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Post preview (Grid)</h2>
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
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <article class="card border-0 bg-secondary" style="max-width: 26rem;">
                    <a href="#">
                      <img class="card-img-top" src="/img/blog/grid/01.jpg" alt="Post image">
                    </a>
                    <div class="card-body pb-4">
                      <div class="d-flex align-items-center mb-4 mt-n1">
                        <span class="fs-sm text-body-secondary">12 hours ago</span>
                        <span class="fs-xs opacity-20 mx-3">|</span>
                        <a class="badge text-nav fs-xs border" href="#">Books</a>
                      </div>
                      <h3 class="h4 card-title">
                        <a href="#">Top books for inspiration</a>
                      </h3>
                      <p class="card-text">Vulputate auctor lacus imperdiet facilisi tristique nisl pulvinar porta diam duis odio</p>
                    </div>
                    <div class="card-footer pt-3">
                      <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                        <img class="rounded-circle" src="/img/avatar/06.jpg" width="48" alt="Post author">
                        <h6 class="ps-3 mb-0">Jenny Wilson</h6>
                      </a>
                    </div>
                  </article>
                </div>
                <div class="col">
                  <article class="card border-0 bg-secondary" style="max-width: 26rem;">
                    <div class="card-body pb-4">
                      <div class="d-flex align-items-center mb-4 mt-n1">
                        <span class="fs-sm text-body-secondary">July 16, 2023</span>
                        <span class="fs-xs opacity-20 mx-3">|</span>
                        <a class="badge text-nav fs-xs border" href="#">Inspiration</a>
                      </div>
                      <h3 class="h4 card-title">
                        <a href="#">How to look for inspiration for new goals</a>
                      </h3>
                      <p class="card-text">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...</p>
                    </div>
                    <div class="card-footer pt-3">
                      <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                        <img class="rounded-circle" src="/img/avatar/08.jpg" width="48" alt="Post author">
                        <h6 class="ps-3 mb-0">Guy Hawkins</h6>
                      </a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Post preview card with image --&gt;
&lt;article class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;a href=&quot;#&quot;&gt;
    &lt;img src=&quot;assets/img/blog/grid/01.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Post image&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;card-body pb-4&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-4 mt-n1&quot;&gt;
      &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;12 hours ago&lt;/span&gt;
      &lt;span class=&quot;fs-xs opacity-20 mx-3&quot;&gt;|&lt;/span&gt;
      &lt;a href=&quot;#&quot; class=&quot;badge text-nav fs-xs border&quot;&gt;Books&lt;/a&gt;
    &lt;/div&gt;
    &lt;h3 class=&quot;h4 card-title&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;Top books for inspiration&lt;/a&gt;
    &lt;/h3&gt;
    &lt;p class=&quot;card-text&quot;&gt;Vulputate auctor lacus imperdiet facilisi tristique nisl pulvinar porta diam duis odio&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer pt-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;d-flex align-items-center text-decoration-none pb-2&quot;&gt;
      &lt;img src=&quot;assets/img/avatar/06.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;48&quot; alt=&quot;Post author&quot;&gt;
      &lt;h6 class=&quot;ps-3 mb-0&quot;&gt;Jenny Wilson&lt;/h6&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;!-- Post preview card no image --&gt;
&lt;article class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-body pb-4&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-4 mt-n1&quot;&gt;
      &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;July 16, 2023&lt;/span&gt;
      &lt;span class=&quot;fs-xs opacity-20 mx-3&quot;&gt;|&lt;/span&gt;
      &lt;a href=&quot;#&quot; class=&quot;badge text-nav fs-xs border&quot;&gt;Inspiration&lt;/a&gt;
    &lt;/div&gt;
    &lt;h3 class=&quot;h4 card-title&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;How to look for inspiration for new goals&lt;/a&gt;
    &lt;/h3&gt;
    &lt;p class=&quot;card-text&quot;&gt;Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate...&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer pt-3&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;d-flex align-items-center text-decoration-none pb-2&quot;&gt;
      &lt;img src=&quot;assets/img/avatar/08.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;48&quot; alt=&quot;Post author&quot;&gt;
      &lt;h6 class=&quot;ps-3 mb-0&quot;&gt;Guy Hawkins&lt;/h6&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Post preview (List) -->
      <section class="card border-0 mb-4" id="blog-list">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Post preview (List)</h2>
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
              <article class="row g-0 border-0">
                <a class="col-sm-5 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="#" style="background-image: url(/img/blog/list/03.jpg); min-height: 14rem" aria-label="Cover image"></a>
                <div class="col-sm-7">
                  <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="#">Destinations to inspire and restore resources</a></h3>
                    <p class="d-sm-none d-md-block">Sapien ultrices egestas at faucibus eu diam velit diam id amet nibh quam rutrum diam fermentum diam natoque scelerisque viverra molestie fames...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                      <a class="nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3" href="#">
                        8<i class="ai-share fs-lg ms-1"></i>
                      </a>
                      <a class="nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2" href="#">
                        2<i class="ai-message fs-lg ms-1"></i>
                      </a>
                      <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                      <span class="fs-sm text-body-secondary mt-2">16 hours ago</span>
                      <span class="fs-xs opacity-20 mt-2 mx-3">|</span>
                      <a class="badge text-nav fs-xs border mt-2" href="#">Travel</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Post preview card horizontal (List view) --&gt;
&lt;article class=&quot;row g-0 border-0&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;col-sm-5 bg-repeat-0 bg-size-cover bg-position-center rounded-5&quot; style=&quot;background-image: url(assets/img/blog/list/03.jpg); min-height: 14rem&quot; aria-label=&quot;Cover image&quot;&gt;&lt;/a&gt;
  &lt;div class=&quot;col-sm-7&quot;&gt;
    &lt;div class=&quot;pt-4 pb-sm-4 ps-sm-4 pe-lg-4&quot;&gt;
      &lt;h3&gt;
        &lt;a href=&quot;#&quot;&gt;Destinations to inspire and restore resources&lt;/a&gt;
      &lt;/h3&gt;
      &lt;p class=&quot;d-sm-none d-md-block&quot;&gt;Sapien ultrices egestas at faucibus eu diam velit diam id amet nibh quam rutrum diam fermentum diam natoque scelerisque viverra molestie fames...&lt;/p&gt;
      &lt;div class=&quot;d-flex flex-wrap align-items-center mt-n2&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link text-body-secondary fs-sm fw-normal p-0 mt-2 me-3&quot;&gt;
          8
          &lt;i class=&quot;ai-share fs-lg ms-1&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link text-body-secondary fs-sm fw-normal d-flex align-items-end p-0 mt-2&quot;&gt;
          2
          &lt;i class=&quot;ai-message fs-lg ms-1&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;span class=&quot;fs-xs opacity-20 mt-2 mx-3&quot;&gt;|&lt;/span&gt;
        &lt;span class=&quot;fs-sm text-body-secondary mt-2&quot;&gt;16 hours ago&lt;/span&gt;
        &lt;span class=&quot;fs-xs opacity-20 mt-2 mx-3&quot;&gt;|&lt;/span&gt;
        &lt;a href=&quot;#&quot; class=&quot;badge text-nav fs-xs border mt-2&quot;&gt;Travel&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Post preview (Simple) -->
      <section class="card border-0 mb-4" id="blog-simple">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Post preview (Simple)</h2>
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
              <article class="position-relative" style="max-width: 26rem;">
                <img class="rounded-5" src="/img/blog/list/06.jpg" alt="Post image">
                <h3 class="h4 mt-4 mb-0">
                  <a class="stretched-link" href="#">A session with a psychologist as a personal choice or a fashion trend in society</a>
                </h3>
              </article>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Simple post preview card --&gt;
&lt;article class=&quot;position-relative&quot;&gt;
  &lt;img src=&quot;assets/img/blog/list/06.jpg&quot; class=&quot;rounded-5&quot; alt=&quot;Post image&quot;&gt;
  &lt;h3 class=&quot;h4 mt-4 mb-0&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;stretched-link&quot;&gt;A session with a psychologist as a personal choice or a fashion trend in society&lt;/a&gt;
  &lt;/h3&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Featured posts widget -->
      <section class="card border-0 mb-4" id="blog-posts-widget">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Featured posts widget</h2>
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
            <div class="tab-pane fade show active" id="preview4" role="tabpanel" style="max-width: 310px;">
              <h3 class="h4 pb-1">Trending posts:</h3>
              <article class="position-relative d-flex align-items-center mb-4">
                <img class="rounded" src="/img/blog/sidebar/01.jpg" width="92" alt="Post image">
                <div class="ps-3">
                  <h4 class="h6 mb-2">
                    <a class="stretched-link" href="#">Instagram trends that will definitely work</a>
                  </h4>
                  <span class="fs-sm text-body-secondary">13 hours ago</span>
                </div>
              </article>
              <article class="position-relative d-flex align-items-center mb-4">
                <img class="rounded" src="/img/blog/sidebar/02.jpg" width="92" alt="Post image">
                <div class="ps-3">
                  <h4 class="h6 mb-2">
                    <a class="stretched-link" href="#">A session with a psychologist</a>
                  </h4>
                  <span class="fs-sm text-body-secondary">May 12, 2023</span>
                </div>
              </article>
              <article class="position-relative d-flex align-items-center">
                <img class="rounded" src="/img/blog/sidebar/03.jpg" width="92" alt="Post image">
                <div class="ps-3">
                  <h4 class="h6 mb-2">
                    <a class="stretched-link" href="#">How to look for inspiration for new goals</a>
                  </h4>
                  <span class="fs-sm text-body-secondary">June 10, 2023</span>
                </div>
              </article>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Featureed posts widget for sidebar area --&gt;
&lt;h3 class=&quot;h4 pb-1&quot;&gt;Trending posts:&lt;/h3&gt;

&lt;!-- Item --&gt;
&lt;article class=&quot;position-relative d-flex align-items-center mb-4&quot;&gt;
  &lt;img src=&quot;assets/img/blog/sidebar/01.jpg&quot; class=&quot;rounded&quot; width=&quot;92&quot; alt=&quot;Post image&quot;&gt;
  &lt;div class=&quot;ps-3&quot;&gt;
    &lt;h4 class=&quot;h6 mb-2&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;stretched-link&quot;&gt;Instagram trends that will definitely work&lt;/a&gt;
    &lt;/h4&gt;
    &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;13 hours ago&lt;/span&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;!-- Item --&gt;
&lt;article class=&quot;position-relative d-flex align-items-center mb-4&quot;&gt;
  &lt;img src=&quot;assets/img/blog/sidebar/02.jpg&quot; class=&quot;rounded&quot; width=&quot;92&quot; alt=&quot;Post image&quot;&gt;
  &lt;div class=&quot;ps-3&quot;&gt;
    &lt;h4 class=&quot;h6 mb-2&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;stretched-link&quot;&gt;A session with a psychologist&lt;/a&gt;
    &lt;/h4&gt;
    &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;May 12, 2023&lt;/span&gt;
  &lt;/div&gt;
&lt;/article&gt;

&lt;!-- Item --&gt;
&lt;article class=&quot;position-relative d-flex align-items-center&quot;&gt;
  &lt;img src=&quot;assets/img/blog/sidebar/03.jpg&quot; class=&quot;rounded&quot; width=&quot;92&quot; alt=&quot;Post image&quot;&gt;
  &lt;div class=&quot;ps-3&quot;&gt;
    &lt;h4 class=&quot;h6 mb-2&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;stretched-link&quot;&gt;How to look for inspiration for new goals&lt;/a&gt;
    &lt;/h4&gt;
    &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;June 10, 2023&lt;/span&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Categories widget -->
      <section class="card border-0 mb-4" id="blog-categories-widget">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Categories widget</h2>
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
            <div class="tab-pane fade show active" id="preview5" role="tabpanel" style="max-width: 310px;">
              <h3 class="h4">Categories:</h3>
              <ul class="nav flex-column">
                <li class="mb-2">
                  <a class="nav-link d-flex p-0 active" href="#">
                    All categories
                    <span class="fs-sm text-body-secondary ms-2">(110)</span>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="nav-link d-flex p-0" href="#">
                    Inspiration
                    <span class="fs-sm text-body-secondary ms-2">(34)</span>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="nav-link d-flex p-0" href="#">
                    Brand strategy
                    <span class="fs-sm text-body-secondary ms-2">(8)</span>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="nav-link d-flex p-0" href="#">
                    Advertisement
                    <span class="fs-sm text-body-secondary ms-2">(45)</span>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="nav-link d-flex p-0" href="#">
                    Ecommerce
                    <span class="fs-sm text-body-secondary ms-2">(17)</span>
                  </a>
                </li>
                <li>
                  <a class="nav-link d-flex p-0" href="#">
                    Travel &amp; Vacation
                    <span class="fs-sm text-body-secondary ms-2">(6)</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- List of categories links with count --&gt;
&lt;h3 class=&quot;h4&quot;&gt;Categories:&lt;/h3&gt;
&lt;ul class=&quot;nav flex-column&quot;&gt;
  &lt;li class=&quot;mb-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0 active&quot;&gt;
      All categories
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(110)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;mb-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0&quot;&gt;
      Inspiration
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(34)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;mb-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0&quot;&gt;
      Brand strategy
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(8)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;mb-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0&quot;&gt;
      Advertisement
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(45)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;mb-2&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0&quot;&gt;
      Ecommerce
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(17)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav-link d-flex p-0&quot;&gt;
      Travel &amp;amp; Vacation
      &lt;span class=&quot;fs-sm text-body-secondary ms-2&quot;&gt;(6)&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Author widget style 1 -->
      <section class="card border-0 mb-4" id="blog-author-widget-1">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Author widget style 1</h2>
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
              <div class="card border-0 bg-secondary" style="max-width: 306px;">
                <div class="card-body text-center">
                  <img class="d-block rounded-circle mx-auto mb-3" src="/img/avatar/03.jpg" width="80" alt="Author image">
                  <h3 class="h5 mb-2 pb-1">Darlene Robertson</h3>
                  <p class="fs-sm mb-4">Duis consectetur quis enim iaculis eu sagittis posuere imperdiet</p>
                  <a class="btn btn-outline-primary btn-sm" href="#">Follow the author</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Author card widget style 1 --&gt;
&lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-body text-center&quot;&gt;
    &lt;img src=&quot;assets/img/avatar/03.jpg&quot; class=&quot;d-block rounded-circle mx-auto mb-3&quot; width=&quot;80&quot; alt=&quot;Author image&quot;&gt;
    &lt;h3 class=&quot;h5 mb-2 pb-1&quot;&gt;Darlene Robertson&lt;/h3&gt;
    &lt;p class=&quot;fs-sm mb-4&quot;&gt;Duis consectetur quis enim iaculis eu sagittis posuere imperdiet&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-outline-primary btn-sm&quot;&gt;
      Follow the author
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Author widget style 2 -->
      <section class="card border-0 mb-4" id="blog-author-widget-2">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Author widget style 2</h2>
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
              <div class="border-top border-bottom py-4">
                <div class="d-flex align-items-start py-2">
                  <img class="d-block rounded-circle mb-3" src="/img/avatar/04.jpg" width="56" alt="Author image">
                  <div class="d-md-flex w-100 ps-4">
                    <div style="max-width: 26rem;">
                      <h3 class="h5 mb-2">Darlene Robertson</h3>
                      <p class="fs-sm mb-0">Porta nisl a ultrices ut libero id. Gravida mi neque, tristique justo, et pharetra laoreet nulla est nulla cras ac arcu sed mattis tristique convallis suspen enim blandit massa cursus augue dui mattis morbi velit semper nunc at etiam lacinia.</p>
                    </div>
                    <div class="pt-4 pt-md-0 ps-md-4 ms-md-auto">
                      <h3 class="h5">Share post:</h3>
                      <div class="d-flex">
                        <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram" aria-label="Instagram">
                          <i class="ai-instagram"></i>
                        </a>
                        <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" aria-label="Facebook">
                          <i class="ai-facebook"></i>
                        </a>
                        <a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Telegram" aria-label="Telegram">
                          <i class="ai-telegram fs-sm"></i>
                        </a>
                        <a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter" aria-label="Twitter">
                          <i class="ai-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Author card widget style 2 --&gt;
&lt;div class=&quot;border-top border-bottom py-4&quot;&gt;
  &lt;div class=&quot;d-flex align-items-start py-2&quot;&gt;
    &lt;img src=&quot;assets/img/avatar/04.jpg&quot; class=&quot;d-block rounded-circle mb-3&quot; width=&quot;56&quot; alt=&quot;Author image&quot;&gt;
    &lt;div class=&quot;d-md-flex w-100 ps-4&quot;&gt;
      &lt;div style=&quot;max-width: 26rem;&quot;&gt;
        &lt;h3 class=&quot;h5 mb-2&quot;&gt;Darlene Robertson&lt;/h3&gt;
        &lt;p class=&quot;fs-sm mb-0&quot;&gt;Porta nisl a ultrices ut libero id. Gravida mi neque, tristique justo, et pharetra laoreet nulla est nulla cras ac arcu sed mattis tristique convallis suspen enim blandit massa cursus augue dui mattis morbi velit semper nunc at etiam lacinia.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;pt-4 pt-md-0 ps-md-4 ms-md-auto&quot;&gt;
        &lt;h3 class=&quot;h5&quot;&gt;Share post:&lt;/h3&gt;
        &lt;div class=&quot;d-flex&quot;&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link p-2 me-2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Instagram&quot; aria-label=&quot;Instagram&quot;&gt;
            &lt;i class=&quot;ai-instagram&quot;&gt;&lt;/i&gt;
          &lt;/a&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link p-2 me-2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Facebook&quot; aria-label=&quot;Facebook&quot;&gt;
            &lt;i class=&quot;ai-facebook&quot;&gt;&lt;/i&gt;
          &lt;/a&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link p-2 me-2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Telegram&quot; aria-label=&quot;Telegram&quot;&gt;
            &lt;i class=&quot;ai-telegram fs-sm&quot;&gt;&lt;/i&gt;
          &lt;/a&gt;
          &lt;a href=&quot;#&quot; class=&quot;nav-link p-2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Twitter&quot; aria-label=&quot;Twitter&quot;&gt;
            &lt;i class=&quot;ai-twitter&quot;&gt;&lt;/i&gt;
          &lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Post comments -->
      <section class="card border-0 mb-4" id="blog-comments">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Post comments</h2>
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
              <div class="border-bottom pb-4">
                <div class="d-flex align-items-center pb-1 mb-3">
                  <img class="rounded-circle" src="/img/avatar/11.jpg" width="48" alt="Comment author">
                  <div class="ps-3">
                    <h6 class="mb-0">Jenny Wilson</h6>
                    <span class="fs-sm text-body-secondary">2 days ago at 9:20</span>
                  </div>
                </div>
                <p class="pb-2 mb-0">Pellentesque urna pharetra, quis maecenas. Sit dolor amet nulla aenean eu, ac. Nisl mi tempus, iaculis viverra vestibulum scelerisque imperdiet montes mauris massa elit pretium elementum eget tortor quis</p>
                <button class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                  Reply
                  <i class="ai-redo fs-xl ms-2"></i>
                </button>
                <div class="card card-body border-0 bg-secondary mt-4">
                  <div class="d-flex align-items-center pb-1 mb-3">
                    <img class="rounded-circle" src="/img/avatar/10.jpg" width="48" alt="Comment author">
                    <div class="ps-3">
                      <h6 class="mb-0">Ralph Edwards</h6>
                      <span class="fs-sm text-body-secondary">2 days ago at 11:45</span>
                    </div>
                  </div>
                  <p class="mb-0"><a class="fw-bold text-decoration-none" href="#">@Jenny Wilson</a> Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper est porttitor.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Comment --&gt;
&lt;div class=&quot;border-bottom pb-4&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center pb-1 mb-3&quot;&gt;
    &lt;img src=&quot;assets/img/avatar/11.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;48&quot; alt=&quot;Comment author&quot;&gt;
    &lt;div class=&quot;ps-3&quot;&gt;
      &lt;h6 class=&quot;mb-0&quot;&gt;Jenny Wilson&lt;/h6&gt;
      &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;2 days ago at 9:20&lt;/span&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;p class=&quot;pb-2 mb-0&quot;&gt;Pellentesque urna pharetra, quis maecenas. Sit dolor amet nulla aenean eu, ac. Nisl mi tempus, iaculis viverra vestibulum scelerisque imperdiet montes mauris massa elit pretium elementum eget tortor quis&lt;/p&gt;
  &lt;button type=&quot;button&quot; class=&quot;nav-link fs-sm fw-semibold px-0 py-2&quot;&gt;
    Reply
    &lt;i class=&quot;ai-redo fs-xl ms-2&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Comment reply --&gt;
  &lt;div class=&quot;card card-body border-0 bg-secondary mt-4&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center pb-1 mb-3&quot;&gt;
      &lt;img src=&quot;assets/img/avatar/10.jpg&quot; class=&quot;rounded-circle&quot; width=&quot;48&quot; alt=&quot;Comment author&quot;&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h6 class=&quot;mb-0&quot;&gt;Ralph Edwards&lt;/h6&gt;
        &lt;span class=&quot;fs-sm text-body-secondary&quot;&gt;2 days ago at 11:45&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-0&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;fw-bold text-decoration-none&quot;&gt;@Jenny Wilson&lt;/a&gt; Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper est porttitor.&lt;/p&gt;
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

<!-- Vendor scripts: JS libraries and plugins -->
<!-- <script src="/vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="/vendor/prismjs/components/prism-core.min.js"></script>
  <script src="/vendor/prismjs/components/prism-markup.min.js"></script>
  <script src="/vendor/prismjs/components/prism-clike.min.js"></script>
  <script src="/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <script src="/vendor/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script> -->