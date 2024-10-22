<!-- Theme switcher (color modes) -->
@vite(['resources/js/theme-switcher.js'])

<!-- Import Google font (Inter) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"
      id="google-font">


@vite([
    'node_modules/img-comparison-slider/dist/styles.css',
    'node_modules/swiper/swiper-bundle.min.css',
    'node_modules/aos/dist/aos.css',
    'node_modules/lightgallery/css/lightgallery-bundle.min.css',
    'node_modules/leaflet/dist/leaflet.css',
    'node_modules/flatpickr/dist/flatpickr.min.css',
    'node_modules/jarallax/dist/jarallax.min.css',
    'node_modules/simplebar/dist/simplebar.min.css',
    'node_modules/prismjs/themes/prism.min.css',
    'node_modules/prismjs/plugins/toolbar/prism-toolbar.min.css',
    'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.min.css',
    'node_modules/nouislider/dist/nouislider.min.css'
])

@yield('css')

@vite(['resources/scss/theme.scss','resources/icons/around-icons.min.css'])

<!-- Customizer theme -->
<style id="customizer-styles">
    :root {
    }

    .btn-primary {
    }

    .btn-warning {
    }

    .btn-info {
    }

    .btn-success {
    }

    .btn-danger {
    }

    .btn-outline-primary {
    }

    .btn-outline-warning {
    }

    .btn-outline-info {
    }

    .btn-outline-success {
    }

    .btn-outline-danger {
    }

    .accordion-button:not(.collapsed)::after {
    }</style>

<!-- Page loading styles -->
<style>
    .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
    }

    [data-bs-theme="dark"] .page-loading {
        background-color: #121519;
    }

    .page-loading.active {
        opacity: 1;
        visibility: visible;
    }

    .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
    }

    .page-loading.active > .page-loading-inner {
        opacity: 1;
    }

    .page-loading-inner > span {
        display: block;
        font-family: "Inter", sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
    }

    [data-bs-theme="dark"] .page-loading-inner > span {
        color: #fff;
        opacity: .6;
    }

    .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
    }

    [data-bs-theme="dark"] .page-spinner {
        background-color: rgba(255, 255, 255, .25);
    }

    @-webkit-keyframes spinner {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes spinner {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }
</style>

<!-- Page loading scripts -->
<script>
    (function () {
        window.onload = function () {
            const preloader = document.querySelector('.page-loading')
            preloader.classList.remove('active')
            setTimeout(function () {
                preloader.remove()
            }, 1500)
        }
    })()
</script>
