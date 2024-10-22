@extends('layouts.base', ['title' => ''])

@section('content')

<main class="page-wrapper">
    <div class="d-flex flex-column position-relative h-100 pt-5">

        <!-- Home button-->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 z-2 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Back to home" aria-label="Back to home">
            <i class="ai-home"></i>
        </a>

        <div class="container mt-auto">
            <div class="row align-items-center">

                <!-- Sign in form -->
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="card border-0 bg-primary py-md-3 py-lg-4 px-lg-4 px-xl-5" data-bs-theme="dark">
                        <div class="card-body">
                            <h1 class="py-2 pb-lg-3">Sign in to Around</h1>
                            <form>
                                <div class="pb-3 mb-3">
                                    <div class="position-relative">
                                        <i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                                        <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y text-light opacity-80 ms-3"></i>
                                        <div class="password-toggle">
                                            <input class="form-control form-control-lg ps-5" type="password" placeholder="Password" required>
                                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                                <input class="password-toggle-check" type="checkbox">
                                                <span class="password-toggle-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                                    <div class="form-check my-1">
                                        <input class="form-check-input" type="checkbox" id="keep-signedin">
                                        <label class="form-check-label ms-1" for="keep-signedin">Keep me signed in</label>
                                    </div>
                                    <a class="text-light fs-sm fw-semibold text-decoration-none my-1" href="{{ route('second', ['auth', 'password-recovery'])}}">Forgot password?</a>
                                </div>
                                <button class="btn btn-lg btn-light w-100 mb-4" type="submit">Sign in</button>

                                <!-- Sign in with social account -->
                                <h2 class="h6 text-center pt-3 pt-lg-4 mb-4">Or sign in with your social account</h2>
                                <div class="row row-cols-1 row-cols-sm-2 gy-3 pb-2">
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
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <div class="ps-md-3 ps-lg-5 ps-xl-0">
                        <h2 class="h1 pb-2 pb-lg-3">No account? Sign up</h2>
                        <form class="needs-validation" novalidate>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 row-cols-lg-2">
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
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="container nav fs-sm pt-5 mt-auto mb-5">
            <span class="text-body-secondary">&copy; All rights reserved. Made by</span><a class="nav-link d-inline-block p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
        </div>
    </div>
</main>


@endsection

@section('script-bottom')

@endsection