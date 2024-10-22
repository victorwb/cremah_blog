<!DOCTYPE html>
<html lang="en" data-bs-theme="light" @yield('html_attributes')>

<head>
    @include('layouts.partials/title-meta', ['title' => $title])

    @include('layouts.partials/head-css')
</head>

<body @yield('body_attributes')>

@include('layouts.partials/loader')

@yield('content')

@include('layouts.partials/customizer')

@include('layouts.partials/back-to-top')

@include('layouts.partials/footer-scripts')

</body>

</html>
