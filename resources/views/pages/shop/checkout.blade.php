@extends('layouts.base', ['title' => 'Around | Shop Checkout'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar-shop')

    <div class="d-none d-lg-block bg-secondary position-fixed top-0 start-0 h-100" style="width: 52.5%;"></div>

    <form class="needs-validation container position-relative z-2 pt-5 pb-lg-5 pb-md-4 pb-2" novalidate>
        <div class="row">
            <div class="col-lg-6">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="mt-5 pt-lg-3 pb-md-1 pb-lg-3 breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('third', ['pages', 'shop', 'catalog'])}}">Shop</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>

                <h1 class="h2 pb-3">Checkout</h1>

                <!-- Checkout form fields -->
                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">
                    1.<span class="text-decoration-underline ms-1">Shipping details</span>
                </h3>
                <div class="row g-4 pb-4 pb-md-5 mb-3 mb-md-1">
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-fn">First name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your first name" required id="c-fn">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-ln">Last name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your last name" required id="c-ln">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-email">Email</label>
                        <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required id="c-email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-phone">Phone</label>
                        <div class="position-relative"><i class="ai-phone fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" type="tel" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __" required id="c-phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-country">Country</label>
                        <select class="form-select form-select-lg" required id="c-country">
                            <option value="" selected disabled>Select a country</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Canada">Canada</option>
                            <option value="Denmark">Denmark</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-city">City</label>
                        <select class="form-select form-select-lg" required id="c-city">
                            <option value="" selected disabled>Select a city</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Brussels">Brussels</option>
                            <option value="Toronto">Toronto</option>
                            <option value="Copenhagen">Copenhagen</option>
                            <option value="New York">New York</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-zip">Zip code</label>
                        <input class="form-control form-control-lg" type="text" data-format='{"delimiter": "-", "blocks": [3, 4], "uppercase": true}' placeholder="XXX-XXXX" required id="c-zip">
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-address">Address line</label>
                        <input class="form-control form-control-lg" type="text" required id="c-address">
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-notes">Order notes <span class="text-body-secondary">(optional)</span></label>
                        <textarea class="form-control form-control-lg" rows="5" id="c-notes"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="same-address">
                            <label class="form-check-label text-dark fw-medium" for="same-address">Billing address same as delivery</label>
                        </div>
                    </div>
                </div>
                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">2.<span class="text-decoration-underline ms-1">Shipping method</span></h3>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" id="standard">
                    <label class="form-check-label d-flex justify-content-between" for="standard">
                        <span>
                            <span class="d-block fs-base text-dark fw-medium mb-1">Standard Delivery</span>
                            <span class="text-body">Delivery in 5 - 8 working days</span>
                        </span>
                        <span class="fs-base text-dark fw-semibold">$8.00</span>
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" checked id="express">
                    <label class="form-check-label d-flex justify-content-between" for="express">
                        <span>
                            <span class="d-block fs-base text-dark fw-medium mb-1">Express Shipping</span>
                            <span class="text-body">Delivery in 3 - 5 working days</span>
                        </span>
                        <span class="fs-base text-dark fw-semibold">$15.00</span>
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" id="local">
                    <label class="form-check-label d-flex justify-content-between" for="local">
                        <span>
                            <span class="d-block fs-base text-dark fw-medium mb-1">Local Pickup</span>
                            <span class="text-body">Delivery in 1 - 2 working days</span>
                        </span>
                        <span class="fs-base text-dark fw-semibold">Free</span>
                    </label>
                </div>
                <h3 class="fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3">
                    3.<span class="text-decoration-underline ms-1">Payment method</span>
                </h3>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="payment" checked id="card">
                    <label class="form-check-label" for="card">
                        <span>
                            <span class="d-block fs-base text-dark fw-medium mb-1">Credit Card</span>
                            <span class="text-body">Mastercard, Maestro, American Express, Visa are accepted</span>
                        </span>
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="payment" id="cash">
                    <label class="form-check-label" for="cash">
                        <span>
                            <span class="d-block fs-base text-dark fw-medium mb-1">Cash on Delivery</span>
                            <span class="text-body">Pay with cash upon the delivery</span>
                        </span>
                    </label>
                </div>

                <!-- Place an order button visible on screens > 991px -->
                <div class="d-none d-lg-block pt-5 mt-n3">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" checked id="save-info">
                        <label class="form-check-label" for="save-info">
                            <span class="text-body-secondary">Your personal information will be used to process your order, to support your experience on this site and for other purposes described in the </span><a class="fw-medium" href="#">privacy policy</a>
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Place an order</button>
                </div>
            </div>

            <!-- Order summary -->
            <div class="col-lg-5 offset-lg-1 pt-1">
                <h2 class="pb-2 pt-md-2 my-4 mt-lg-5">
                    Order summary <span class="fs-base fw-normal text-body-secondary">(4 items)</span>
                </h2>

                <!-- Item -->
                <div class="d-sm-flex align-items-center border-top py-4">
                    <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                        <img src="/img/shop/cart/01.png" width="110" alt="Product">
                    </a>
                    <div class="w-100 pt-1 ps-sm-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <h3 class="h5 mb-2">
                                    <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Candle in concrete bowl</a>
                                </h3>
                                <div class="d-sm-flex flex-wrap">
                                    <div class="text-body-secondary fs-sm me-3">
                                        Color: <span class="text-dark fw-medium">Gray night</span>
                                    </div>
                                    <div class="text-body-secondary fs-sm me-3">
                                        Weight: <span class="text-dark fw-medium">140g</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end ms-auto">
                                <div class="fs-5 mb-2">$11.00</div>
                                <del class="text-body-secondary ms-auto">$15.00</del>
                            </div>
                        </div>
                        <div class="count-input ms-n3">
                            <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                            <input class="form-control" type="number" value="2" readonly>
                            <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                        </div>
                        <div class="nav justify-content-end mt-n5 mt-sm-n3">
                            <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                                <i class="ai-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="d-sm-flex align-items-center border-top py-4">
                    <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                        <img src="/img/shop/cart/02.png" width="110" alt="Product">
                    </a>
                    <div class="w-100 pt-1 ps-sm-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <h3 class="h5 mb-2">
                                    <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Exquisite glass vase</a>
                                </h3>
                            </div>
                            <div class="text-end ms-auto">
                                <div class="fs-5 mb-2">$23.00</div>
                            </div>
                        </div>
                        <div class="count-input ms-n3">
                            <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                            <input class="form-control" type="number" value="1" readonly>
                            <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                        </div>
                        <div class="nav justify-content-end mt-n5 mt-sm-n3">
                            <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                                <i class="ai-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="d-sm-flex align-items-center border-top py-4">
                    <a class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0" href="{{ route('third', ['pages', 'shop', 'single'])}}">
                        <img src="/img/shop/cart/03.png" width="110" alt="Product">
                    </a>
                    <div class="w-100 pt-1 ps-sm-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <h3 class="h5 mb-2">
                                    <a href="{{ route('third', ['pages', 'shop', 'single'])}}">Set for a dinner party of 7 items</a>
                                </h3>
                            </div>
                            <div class="text-end ms-auto">
                                <div class="fs-5 mb-2">$47.00</div>
                            </div>
                        </div>
                        <div class="count-input ms-n3">
                            <button class="btn btn-icon fs-xl" type="button" data-decrement>-</button>
                            <input class="form-control" type="number" value="1" readonly>
                            <button class="btn btn-icon fs-xl" type="button" data-increment>+</button>
                        </div>
                        <div class="nav justify-content-end mt-n5 mt-sm-n3">
                            <a class="nav-link fs-xl p-2" href="#" data-bs-toggle="tooltip" title="Remove" aria-label="Remove">
                                <i class="ai-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-top pt-4 mb-3">
                    <div class="input-group input-group-sm border-dashed" style="max-width: 310px;">
                        <input class="form-control text-uppercase" type="text" placeholder="Your coupon code">
                        <button class="btn btn-secondary" type="button">Apply coupon</button>
                    </div>
                </div>
                <ul class="list-unstyled py-3 mb-0">
                    <li class="d-flex justify-content-between mb-2">
                        Subtotal:<span class="fw-semibold ms-2">$92.00</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                        Taxes:<span class="fw-semibold ms-2">$8.00</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                        Shipping cost:<span class="fw-semibold ms-2">$15.00</span>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between border-top fs-xl pt-4">
                    Total:<span class="fs-3 fw-semibold text-dark ms-2">$115.00</span>
                </div>
            </div>
        </div>

        <!-- Place an order button visible on screens < 992px -->
        <div class="d-lg-none pb-2 mt-2 mt-lg-0 pt-4 pt-lg-5">
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" checked id="save-info2">
                <label class="form-check-label" for="save-info2">
                    <span class="text-body-secondary">Your personal information will be used to process your order, to support your experience on this site and for other purposes described in the </span><a class="fw-medium" href="#">privacy policy</a>
                </label>
            </div>
            <button class="btn btn-lg btn-primary w-100 w-sm-auto" type="submit">Place an order</button>
        </div>
    </form>

</main>

<footer class="footer container position-relative z-2 pt-4 pt-xl-5 pb-4">
    <div class="nav fs-sm pb-1 pb-sm-3">
        <span class="text-body-secondary me-1">&copy; All rights reserved. Made by</span>
        <a class="nav-link d-inline fw-normal p-0" href="" target="_blank" rel="noopener">Stackbros</a>
    </div>
</footer>

@endsection