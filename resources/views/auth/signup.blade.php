@extends('layouts.base', ['title' => 'Around | Account - Sign In / Up'])

@section('content')

<main class="page-wrapper">
    <div class="d-lg-flex position-relative h-100">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home" aria-label="Back to home">
            <i class="ai-home"></i>
        </a>

        <!-- Sign up form -->
        <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
            <div class="w-100 mt-auto" style="max-width: 526px;">
                <h1>No account? Sign up</h1>
                <p class="pb-3 mb-3 mb-lg-4">Have an account already?&nbsp;&nbsp;<a href="{{ route('second', ['auth', 'signin'])}}">Sign in here!</a></p>
                <form class="needs-validation" novalidate>
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="text" placeholder="Your name" required>
                        </div>
                        <div class="col mb-4">
                            <input class="form-control form-control-lg" type="email" placeholder="Email address" required>
                        </div>
                    </div>
                    <div class="password-toggle mb-4">
                        <input class="form-control form-control-lg" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox">
                            <span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                    <div class="password-toggle mb-4">
                        <input class="form-control form-control-lg" type="password" placeholder="Confirm password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox">
                            <span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                    <div class="pb-4">
                        <div class="form-check my-2">
                            <input class="form-check-input" type="checkbox" id="terms">
                            <label class="form-check-label ms-1" for="terms">I agree to <a href="#">Terms &amp; Conditions</a></label>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">Sign up</button>

                    <!-- Sign in with social account -->
                    <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">Or sign in with your social account</h2>
                    <div class="row row-cols-1 row-cols-sm-2 gy-3">
                        <div class="col">
                            <a class="btn btn-icon btn-outline-secondary btn-google btn-lg w-100" href="#">
                                <i class="ai-google fs-xl me-2"></i>
                                Google
                            </a>
                        </div>
                        <div class="col">
                            <a class="btn btn-icon btn-outline-secondary btn-facebook btn-lg w-100" href="#">
                                <i class="ai-facebook fs-xl me-2"></i>
                                Facebook
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Copyright -->
            <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"><span class="text-body-secondary">&copy; All rights reserved. Made by</span><a class="nav-link d-inline-block p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a></p>
        </div>


        <!-- Cover image -->
        <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(/img/account/cover.jpg);"></div>
    </div>
</main>

@endsection

@section('script-bottom')

@endsection