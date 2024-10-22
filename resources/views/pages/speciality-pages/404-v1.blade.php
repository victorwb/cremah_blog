@extends('layouts.base', ['title' => 'Around | 404 Error v.1'])

@section('content')
<main class="page-wrapper">
    <div class="container d-flex flex-column justify-content-center min-vh-100 py-5">
        <lottie-player src="/json/animation-404-light.json" class="d-dark-mode-none mt-n5" background="transparent" speed="1" loop autoplay></lottie-player>
        <lottie-player class="d-none d-dark-mode-block mt-n5" src="/json/animation-404-dark.json" background="transparent" speed="1" loop autoplay></lottie-player>
        <div class="text-center pt-4 mt-lg-2">
            <h1 class="display-5">Page not found</h1>
            <p class="fs-lg pb-2 pb-md-0 mb-4 mb-md-5">The page you are looking for was moved, removed or might never existed.</p>
            <a class="btn btn-lg btn-primary" href="/">Go to homepage</a>
        </div>
    </div>
</main>
@endsection

@section('script-bottom')

@endsection