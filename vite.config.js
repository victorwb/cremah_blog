import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                'resources/scss/theme.scss',
                'resources/icons/around-icons.min.css',
                'node_modules/img-comparison-slider/dist/styles.css',
                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/aos/dist/aos.css',
                'node_modules/lightgallery/css/lightgallery-bundle.min.css',
                'node_modules/leaflet/dist/leaflet.css',
                'node_modules/nouislider/dist/nouislider.min.css',
                'node_modules/flatpickr/dist/flatpickr.min.css',
                'node_modules/jarallax/dist/jarallax.min.css',
                'node_modules/simplebar/dist/simplebar.min.css',
                'node_modules/prismjs/themes/prism.min.css',
                'node_modules/prismjs/plugins/toolbar/prism-toolbar.min.css',
                'node_modules/prismjs/plugins/line-numbers/prism-line-numbers.min.css',
                'node_modules/nouislider/dist/nouislider.min.css',


                //js
                'resources/js/theme-switcher.js',
                'resources/js/theme.js',
                'resources/js/customizer.js'

            ],
            refresh: true,
        }),
    ],
});
