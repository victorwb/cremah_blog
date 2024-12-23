@extends('layouts.base', ['title' => 'Around UI Kit | Cards: Basic'])



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
            <span class="nav-link px-0 py-2 active">
              <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
              Cards: Basic
            </span>
            <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-no-image" data-scroll="data-scroll">No image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-alt-style" data-scroll="data-scroll">Alternative card style</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-top-image" data-scroll="data-scroll">Image on top</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bottom-image" data-scroll="data-scroll">Image on bottom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-horizontal" data-scroll="data-scroll">Horizontal layout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-header-footer" data-scroll="data-scroll">Header and footer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-text-alignment" data-scroll="data-scroll">Text alignment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-nav-tabs" data-scroll="data-scroll">Navigation: Tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-nav-pills" data-scroll="data-scroll">Navigation: Pills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-list-group" data-scroll="data-scroll">List group inside card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bg-solid" data-scroll="data-scroll">Card styles: Solid background</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bg-faded" data-scroll="data-scroll">Card styles: Faded background and color</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-border-color" data-scroll="data-scroll">Card styles: Border and color</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-group" data-scroll="data-scroll">Layout: Card group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-grid" data-scroll="data-scroll">Layout: Masonry grid</a>
              </li>
            </ul>
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
        <span class="nav-link px-0 py-2 active">
          <i class="ai-circle-arrow-down fs-lg opacity-90 me-2"></i>
          Cards: Basic
        </span>
        <ul class="nav flex-column border-start ps-3 ms-2 mb-2">
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-no-image" data-scroll="data-scroll">No image</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-alt-style" data-scroll="data-scroll">Alternative card style</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-top-image" data-scroll="data-scroll">Image on top</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bottom-image" data-scroll="data-scroll">Image on bottom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-horizontal" data-scroll="data-scroll">Horizontal layout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-header-footer" data-scroll="data-scroll">Header and footer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-text-alignment" data-scroll="data-scroll">Text alignment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-nav-tabs" data-scroll="data-scroll">Navigation: Tabs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-nav-pills" data-scroll="data-scroll">Navigation: Pills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-list-group" data-scroll="data-scroll">List group inside card</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bg-solid" data-scroll="data-scroll">Card styles: Solid background</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-bg-faded" data-scroll="data-scroll">Card styles: Faded background and color</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-border-color" data-scroll="data-scroll">Card styles: Border and color</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-group" data-scroll="data-scroll">Layout: Card group</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm fw-normal py-1 ps-1 pe-0 mb-1" href="#card-grid" data-scroll="data-scroll">Layout: Masonry grid</a>
          </li>
        </ul>
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
      <h1 class="pt-lg-4">Cards: Basic</h1>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between pb-3">
        <p class="text-body-secondary">Flexible and extensible content container.</p>
        <p class="fs-sm fw-semibold ps-md-4">
          <a class="text-decoration-none text-nowrap" href="https://getbootstrap.com/docs/5.3/components/card/" target="_blank" rel="noopener">
            Bootstrap docs
            <i class="ai-external-link fs-lg ms-2"></i>
          </a>
        </p>
      </div>


      <!-- No image -->
      <section class="card border-0 mb-4" id="card-no-image">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">No image</h2>
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
              <div class="card" style="max-width: 22rem;">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html1" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- No image --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Alternative card style -->
      <section class="card border-0 mb-4" id="card-alt-style">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Alternative card style</h2>
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
              <div class="d-md-flex align-items-center">
                <div class="w-md-50 w-100 mb-4 mb-md-0">
                  <div class="card border-0 bg-secondary mx-auto" style="max-width: 22rem;">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="w-md-50 w-100 bg-secondary p-4">
                  <div class="card border-0 mx-auto" style="max-width: 22rem;">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html2" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Alternative card style: no border + gray background --&gt;
&lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Alternative card style: no border --&gt;
&lt;div class=&quot;card border-0&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Image on top -->
      <section class="card border-0 mb-4" id="card-top-image">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image on top</h2>
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
              <div class="card" style="max-width: 22rem;">
                <img class="card-img-top" src="/img/blog/grid/01.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html3" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image on top --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;img src=&quot;assets/img/blog/grid/01.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Image on bottom -->
      <section class="card border-0 mb-4" id="card-bottom-image">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Image on bottom</h2>
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
              <div class="card" style="max-width: 22rem;">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
                <img class="card-img-bottom" src="/img/blog/grid/03.jpg" alt="Card image">
              </div>
            </div>
            <div class="tab-pane fade" id="html4" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Image on bottom --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
  &lt;img src=&quot;assets/img/blog/grid/03.jpg&quot; class=&quot;card-img-bottom&quot; alt=&quot;Card image&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Horizontal layout -->
      <section class="card border-0 mb-4" id="card-horizontal">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Horizontal layout</h2>
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
              <div class="card overflow-hidden mb-4">
                <div class="row g-0">
                  <div class="col-sm-4 bg-repeat-0 bg-size-cover" style="background-image: url(/img/blog/list/03.jpg); min-height: 14rem;"></div>
                  <div class="col-sm-8">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card overflow-hidden">
                <div class="row g-0">
                  <div class="col-sm-4 bg-repeat-0 bg-size-cover order-sm-2" style="background-image: url(/img/blog/list/05.jpg); min-height: 14rem;"></div>
                  <div class="col-sm-8 order-sm-1">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html5" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Horizontal card: Image on the left --&gt;
&lt;div class=&quot;card overflow-hidden&quot;&gt;
  &lt;div class=&quot;row g-0&quot;&gt;
    &lt;div class=&quot;col-sm-4 bg-repeat-0 bg-size-cover&quot; style=&quot;background-image: url(assets/img/blog/list/03.jpg); min-height: 14rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;col-sm-8&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Horizontal card: Image on the right --&gt;
&lt;div class=&quot;card overflow-hidden&quot;&gt;
  &lt;div class=&quot;row g-0&quot;&gt;
    &lt;div class=&quot;col-sm-4 bg-repeat-0 bg-size-cover order-sm-2&quot; style=&quot;background-image: url(assets/img/blog/list/05.jpg); min-height: 14rem;&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;col-sm-8 order-sm-1&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Header and footer -->
      <section class="card border-0 mb-4" id="card-header-footer">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Header and footer</h2>
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
              <div class="card text-center" style="max-width: 40rem;">
                <div class="card-header">Featured</div>
                <div class="card-body">
                  <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
                <div class="card-footer fs-sm text-body-secondary">3 days ago</div>
              </div>
            </div>
            <div class="tab-pane fade" id="html6" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Header and footer --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Featured&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer fs-sm text-body-secondary&quot;&gt;3 days ago&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Text alignment -->
      <section class="card border-0 mb-4" id="card-text-alignment">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Text alignment</h2>
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
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card text-center">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card text-end">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html7" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Left aligned (default) --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Center aligned --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Right aligned --&gt;
&lt;div class=&quot;card text-end&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Navigation: Tabs -->
      <section class="card border-0 mb-4" id="card-nav-tabs">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Navigation: Tabs</h2>
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
              <div class="card text-center" style="max-width: 40rem;">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#" data-bs-toggle="tab" role="tab">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" data-bs-toggle="tab" role="tab">Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html8" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Tabs inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; role=&quot;tablist&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link disabled&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Navigation: Pills -->
      <section class="card border-0 mb-4" id="card-nav-pills">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Navigation: Pills</h2>
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
            <li class="nav-item me-3">
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
              <div class="card text-center" style="max-width: 40rem;">
                <div class="card-header">
                  <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a class="btn btn-primary" href="#">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html9" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Pills inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;
    &lt;ul class=&quot;nav nav-pills card-header-pills&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link active&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- List group inside card -->
      <section class="card border-0 mb-4" id="card-list-group">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">List group inside card</h2>
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
                <div class="col-md-6 mb-4 mb-md-0">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text text-body-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text text-body-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="list-group list-group-flush mb-4">
                        <a class="list-group-item list-group-item-action" href="#">Cras justo odio</a>
                        <a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
                        <a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
                      </div>
                      <a class="btn btn-primary" href="#">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html10" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Simple list group inside card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-body-secondary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;ul class=&quot;list-group list-group-flush mb-4&quot;&gt;
      &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
      &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
      &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Actionable list group inside card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-body-secondary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;div class=&quot;list-group list-group-flush mb-4&quot;&gt;
      &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Cras justo odio&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
      &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Vestibulum at eros&lt;/a&gt;
    &lt;/div&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Card styles: Solid background -->
      <section class="card border-0 mb-4" id="card-bg-solid">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Card styles: Solid background</h2>
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
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card border-0 bg-primary h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Primary card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-secondary h-100">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h4 class="card-title">Secondary card title</h4>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-success h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Success card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-danger h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Danger card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-warning h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Warning card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-info h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Info card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card bg-dark h-100">
                    <div class="card-header text-white border-light">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-white">Dark card title</h4>
                      <p class="card-text text-white opacity-70">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html11" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card border-0 bg-primary&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Primary card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary card --&gt;
&lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card border-0 bg-success&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Success card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card border-0 bg-danger&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Danger card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card border-0 bg-warning&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Warning card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info card --&gt;
&lt;div class=&quot;card border-0 bg-info&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Info card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark card --&gt;
&lt;div class=&quot;card bg-dark&quot;&gt;
  &lt;div class=&quot;card-header text-white border-light&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-white&quot;&gt;Dark card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-white opacity-70&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Card styles: Faded background and color -->
      <section class="card border-0 mb-4" id="card-bg-faded">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Card styles: Faded background and color</h2>
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
            <div class="tab-pane fade show active" id="preview12" role="tabpanel">
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card border-0 bg-primary bg-opacity-10 h-100">
                    <div class="card-header text-primary border-primary">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-primary">Primary card title</h4>
                      <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-success bg-opacity-10 h-100">
                    <div class="card-header text-success border-success">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-success">Success card title</h4>
                      <p class="card-text text-success">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-danger bg-opacity-10 h-100">
                    <div class="card-header text-danger border-danger">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">Danger card title</h4>
                      <p class="card-text text-danger">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-warning bg-opacity-10 h-100">
                    <div class="card-header text-warning border-warning">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-warning">Warning card title</h4>
                      <p class="card-text text-warning">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-0 bg-info bg-opacity-10 h-100">
                    <div class="card-header text-info border-info">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-info">Info card title</h4>
                      <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card bg-dark bg-opacity-10 h-100">
                    <div class="card-header text-dark border-dark">Header</div>
                    <div class="card-body">
                      <h4 class="card-title">Dark card title</h4>
                      <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html12" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card border-0 bg-primary bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-primary border-primary&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-primary&quot;&gt;Primary card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-primary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card border-0 bg-success bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-success border-success&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-success&quot;&gt;Success card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-success&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card border-0 bg-danger bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-danger border-danger&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-danger&quot;&gt;Danger card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-danger&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card border-0 bg-warning bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-warning border-warning&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-warning&quot;&gt;Warning card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-warning&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info card --&gt;
&lt;div class=&quot;card border-0 bg-info bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-info border-info&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-info&quot;&gt;Info card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-info&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark card --&gt;
&lt;div class=&quot;card bg-dark bg-opacity-10&quot;&gt;
  &lt;div class=&quot;card-header text-dark border-dark&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-dark&quot;&gt;Dark card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-dark&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Card styles: Border and color -->
      <section class="card border-0 mb-4" id="card-border-color">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Card styles: Border and color</h2>
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
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                  <div class="card border-primary h-100">
                    <div class="card-header text-primary border-primary">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-primary">Primary card title</h4>
                      <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-success h-100">
                    <div class="card-header text-success border-success">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-success">Success card title</h4>
                      <p class="card-text text-success">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-danger h-100">
                    <div class="card-header text-danger border-danger">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-danger">Danger card title</h4>
                      <p class="card-text text-danger">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-warning h-100">
                    <div class="card-header text-warning border-warning">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-warning">Warning card title</h4>
                      <p class="card-text text-warning">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-info h-100">
                    <div class="card-header text-info border-info">Header</div>
                    <div class="card-body">
                      <h4 class="card-title text-info">Info card title</h4>
                      <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card border-dark h-100">
                    <div class="card-header text-dark border-dark">Header</div>
                    <div class="card-body">
                      <h4 class="card-title">Dark card title</h4>
                      <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content within card's body.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html13" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card border-primary&quot;&gt;
  &lt;div class=&quot;card-header text-primary border-primary&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-primary&quot;&gt;Primary card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-primary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card border-success&quot;&gt;
  &lt;div class=&quot;card-header text-success border-success&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-success&quot;&gt;Success card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-success&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card border-danger&quot;&gt;
  &lt;div class=&quot;card-header text-danger border-danger&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-danger&quot;&gt;Danger card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-danger&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card border-warning&quot;&gt;
  &lt;div class=&quot;card-header text-warning border-warning&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-warning&quot;&gt;Warning card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-warning&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info card --&gt;
&lt;div class=&quot;card border-info&quot;&gt;
  &lt;div class=&quot;card-header text-info border-info&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-info&quot;&gt;Info card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-info&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark card --&gt;
&lt;div class=&quot;card border-dark&quot;&gt;
  &lt;div class=&quot;card-header text-dark border-dark&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title text-dark&quot;&gt;Dark card title&lt;/h4&gt;
    &lt;p class=&quot;card-text text-dark&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Layout: Card group -->
      <section class="card border-0 mb-4" id="card-group">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Layout: Card group</h2>
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
              <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="/img/blog/grid/01.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                    <a class="btn btn-primary" href="#">Go somewhere</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="/img/blog/grid/03.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                  <div class="card-footer">
                    <a class="btn btn-primary" href="#">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html14" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Card group --&gt;
&lt;div class=&quot;card-group&quot;&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;assets/img/blog/grid/01.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;assets/img/blog/grid/03.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h4 class=&quot;card-title&quot;&gt;Card title&lt;/h4&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
      &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </section>


      <!-- Layout: Masonry grid -->
      <section class="card border-0 mb-4" id="card-grid">
        <div class="card-body pb-0">
          <h2 class="h4 mb-n2">Layout: Masonry grid</h2>
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
              <div class="masonry-grid" data-columns="3">
                <div class="masonry-grid-item">
                  <div class="card">
                    <img class="card-img-top" src="/img/blog/grid/01.jpg" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text fs-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card border-danger">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card">
                    <img class="card-img-top" src="/img/blog/grid/02.jpg" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text fs-sm">This card has supporting text below as a natural lead-in to additional content.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card">
                    <img class="card-img" src="/img/blog/grid/03.jpg" alt="Card image">
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card border-primary text-center">
                    <div class="card-body">
                      <p class="card-text fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item">
                  <div class="card border-0 bg-secondary">
                    <div class="card-body">
                      <p class="card-text fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <span class="text-body-secondary fs-xs">Last updated 3 mins ago</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="html15" role="tabpanel">
              <pre class="line-numbers"><code class="lang-html">&lt;!-- Masonry grid: 3 columns --&gt;
&lt;div class=&quot;masonry-grid&quot; data-columns=&quot;3&quot;&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/01.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card border-danger&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/02.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/03.jpg&quot; class=&quot;card-img&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card border border-primary text-center&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;masonry-grid-item&quot;&gt;
    &lt;div class=&quot;card border-0 bg-secondary&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
        &lt;span class=&quot;text-body-secondary fs-xs&quot;&gt;Last updated 3 mins ago&lt;/span&gt;
      &lt;/div&gt;
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
