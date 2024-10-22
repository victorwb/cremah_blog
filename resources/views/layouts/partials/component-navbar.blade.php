<header class="navbar navbar-expand justify-content-end fixed-top" data-scroll-header>
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-xl-2 me-4" href="{{ route('second', ['components', 'typography'])}}">
      <span class="text-primary flex-shrink-0 me-2">
        <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
          <path fill="currentColor"
                d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
        </svg>
      </span>
            Around
            <span class="badge bg-warning fs-sm ms-2">UI Kit</span>
        </a>

        <!-- Navbar nav -->
        <ul class="navbar-nav d-none d-lg-flex me-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="ai-monitor fs-lg opacity-90 me-2"></i>
                    Live demo
                </a>
            </li>
        </ul>

        <!-- Theme switcher -->
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode">
                <i class="ai-sun fs-lg"></i>
            </label>
            <label class="form-check-label" for="theme-mode">
                <i class="ai-moon fs-lg"></i>
            </label>
        </div>

        <!-- Mobile menu toggler (Hamburger) -->
        <button class="navbar-toggler d-block d-lg-none ms-3 border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#componentsNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="btn btn-sm btn-primary d-none d-lg-inline-flex fs-sm ms-4" href="" target="_blank" rel="noopener">
            <i class="ai-cart d-sm-inline-block fs-xl me-2 ms-n1"></i>
            Buy now
        </a>
    </div>
</header>
