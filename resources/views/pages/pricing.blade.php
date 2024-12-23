@extends('layouts.base', ['title' => 'Around | Pricing'])

@section('content')

<main class="page-wrapper">

    @include('layouts.partials/navbar',['navClass' => 'bg-light'])

    <section class="container py-5 mt-5 mb-lg-3 mb-xl-4 mb-xxl-5">

        <!-- Page title -->
        <div class="text-center pb-3 pt-lg-2 pt-xl-4 my-1 my-sm-3 my-lg-4">
            <h1 class="display-2">Pricing plans</h1>
            <p class="fs-lg mb-0">Select a service plan that best suits your business needs</p>
        </div>

        <!-- Plans -->
        <div class="row row-cols-3 flex-nowrap pb-4 overflow-auto">

            <!-- Plan -->
            <div class="col" style="min-width: 19rem;">
                <div class="card h-100 py-lg-4">
                    <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                        <h3>Light</h3>
                        <div class="display-2 text-primary">$8</div>
                        <div class="mb-4">per month</div>
                        <p class="mb-4 pb-4">Phasellus in hendrerit interdum lorem proin pretium dictum urna</p>
                        <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                    </div>
                </div>
            </div>

            <!-- Plan -->
            <div class="col" style="min-width: 19rem;">
                <div class="card border-primary bg-primary h-100 py-lg-4">
                    <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                        <h3 class="text-light">Premium</h3>
                        <div class="display-2 text-light">$72</div>
                        <div class="text-light opacity-70 mb-4">per month</div>
                        <p class="text-light opacity-70 mb-4 pb-4">Morbi et massa fames ac scelerisque sit commodo dignissim aucibus</p>
                        <button class="btn btn-light w-100" type="button">Get this plan now</button>
                    </div>
                </div>
            </div>

            <!-- Plan -->
            <div class="col" style="min-width: 19rem;">
                <div class="card h-100 py-lg-4">
                    <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
                        <h3>Medium</h3>
                        <div class="display-2 text-primary">$36</div>
                        <div class="mb-4">per month</div>
                        <p class="mb-4 pb-4">Enim aenean phasellus in hendrerit interdum lorem proin pretium</p>
                        <button class="btn btn-primary w-100" type="button">Get this plan now</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Comparison table -->
        <div class="text-center pt-md-1 pt-lg-2">
            <button class="btn btn-more btn-link fs-4" type="button" data-show-label="Compare plans" data-hide-label="Compare plans" data-bs-toggle="collapse" data-bs-target="#comparePlans" aria-label="Compare plans"></button>
        </div>
        <div class="collapse show" id="comparePlans">
            <div class="table-responsive pt-sm-2 pt-lg-3">
                <table class="table text-center text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Light</span></th>
                            <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Premium</span></th>
                            <th scope="col" class="border-0 py-3"><span class="h5 mb-0">Medium</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="text-body fw-medium">Billed monthly</span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">$18</span></td>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">$72</span></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">$36</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Members
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><span class="text-dark">Just you</span></td>
                            <td class="border-0 py-3"><span class="text-dark">Unlimited</span></td>
                            <td class="border-0 py-3"><span class="text-dark">3 members</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Guest access
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">Just you</span></td>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">Unlimited</span></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">3 members</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    File uploads
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><span class="text-dark">2 GB</span></td>
                            <td class="border-0 py-3"><span class="text-dark">30 GB</span></td>
                            <td class="border-0 py-3"><span class="text-dark">10 GB</span></td>
                        </tr>
                        <tr>
                            <th scope="col" class="border-0 text-start pt-4 pb-3 ps-4">
                                <div class="h5 pt-1 mb-0">Collaboration</div>
                            </th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="text-body fw-medium">Real-time collaboration</span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Link sharing
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Collaborative workspace
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Filter views
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><span class="text-dark">3</span></td>
                            <td class="border-0 py-3"><span class="text-dark">Unlimited</span></td>
                            <td class="border-0 py-3"><span class="text-dark">12</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Teams
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="col" class="border-0 text-start pt-4 pb-3 ps-4">
                                <div class="h5 pt-3 mb-0">Features</div>
                            </th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="text-body fw-medium">Web, desktop, &amp; mobile apps</span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Reminders
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="text-body fw-medium">Priorities</span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Comments
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="text-body fw-medium">Integrations</span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">5</span></td>
                            <td class="border-0 bg-secondary py-3"><span class="text-dark">Unlimited</span></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><span class="text-dark">15</span></td>
                        </tr>
                        <tr>
                            <th scope="col" class="border-0 text-start pt-4 pb-3 ps-4">
                                <div class="h5 pt-3 mb-0">Admin &amp; security</div>
                            </th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                            <th scope="col" class="border-0 py-3">&nbsp;</th>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Admin &amp; member roles
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 text-start py-3 ps-4"><span class="text-body fw-medium">Team billing</span></th>
                            <td class="border-0 py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="border-0 bg-secondary rounded-3 rounded-end-0 text-start py-3 ps-4">
                                <span class="d-flex align-items-center text-body fw-medium">
                                    Priority support
                                    <i class="ai-circle-info fs-lg ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="right" data-bs-html="true" data-bs-content="Feature description text"></i>
                                </span>
                            </th>
                            <td class="border-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                            <td class="border-0 bg-secondary py-3"><i class="ai-check fs-xl text-success"></i></td>
                            <td class="border-0 rounded-3 rounded-start-0 bg-secondary py-3"><i class="ai-cross fs-xl text-danger"></i></td>
                        </tr>
                        <tr>
                            <td class="border-0 pt-4">&nbsp;</td>
                            <td class="border-0 pt-4">
                                <button class="btn btn-outline-primary mt-3" type="button">Get started $18</button>
                            </td>
                            <td class="border-0 pt-4">
                                <button class="btn btn-outline-primary mt-3" type="button">Get started $72</button>
                            </td>
                            <td class="border-0 pt-4">
                                <button class="btn btn-outline-primary mt-3" type="button">Get started $36</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Testimonials (tabs) -->
    <section class="container mt-n3 mt-sm-0 py-md-3 py-lg-4">
        <h2 class="text-center pb-3 mb-lg-4">More than 2,000 clients using Around to analyze data</h2>

        <!-- Nav tabs -->
        <div class="overflow-auto pb-3 pb-xl-4 mb-3 mb-lg-4">
            <ul class="nav nav-tabs justify-content-between flex-nowrap text-nowrap p-0 m-0" role="tablist" style="min-width: 1000px;">
                <li class="nav-item mb-0">
                    <a class="nav-link active" href="#foster" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/foster-color.svg" width="140" alt="Foster">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/foster-gray.svg" width="140" alt="Foster">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/foster-light.svg" width="140" alt="Foster">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#klinos" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/klinos-color.svg" width="131" alt="Klinos">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/klinos-gray.svg" width="131" alt="Klinos">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/klinos-light.svg" width="131" alt="Klinos">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#champion" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/champion-color.svg" width="162" alt="Champion">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/champion-gray.svg" width="162" alt="Champion">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/champion-light.svg" width="162" alt="Champion">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#airbnb" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/airbnb-color.svg" width="132" alt="Airbnb">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/airbnb-gray.svg" width="132" alt="Airbnb">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/airbnb-light.svg" width="132" alt="Airbnb">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#starcraft" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/starcraft-color.svg" width="158" alt="StarCraft">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/starcraft-gray.svg" width="158" alt="StarCraft">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/starcraft-light.svg" width="158" alt="StarCraft">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="#alpine" data-bs-toggle="tab" role="tab">
                        <div class="swap-image">
                            <img class="swap-to" src="/img/landing/saas-1/brands/alpine-color.svg" width="146" alt="Alpine">
                            <div class="swap-from">
                                <img class="d-dark-mode-none" src="/img/landing/saas-1/brands/alpine-gray.svg" width="146" alt="Alpine">
                                <img class="d-none d-dark-mode-block" src="/img/landing/saas-1/brands/alpine-light.svg" width="146" alt="Alpine">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tabs content -->
        <div class="card border-0 bg-secondary">
            <div class="tab-content card-body px-lg-0 py-lg-5">

                <!-- Testimonial (active tab) -->
                <div class="tab-pane fade show active" id="foster" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/13.jpg" width="86" alt="Lilianna Bocouse">
                            <h4 class="mb-0">Lilianna Bocouse</h4>
                            <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data we need to make strategic decisions. All tools are constantly being improved and contain a lot of useful and interesting information. Thanks to Around, we can constantly analyze our big data quickly and efficiently.”</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial (tab) -->
                <div class="tab-pane fade" id="klinos" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/14.jpg" width="86" alt="Darell Steward">
                            <h4 class="mb-0">Darell Steward</h4>
                            <p class="fs-lg text-body-secondary mb-0">Project Manager</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut ante.”</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial (tab) -->
                <div class="tab-pane fade" id="champion" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/15.jpg" width="86" alt="Annette Black">
                            <h4 class="mb-0">Annette Black</h4>
                            <p class="fs-lg text-body-secondary mb-0">Lead Designer</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial (tab) -->
                <div class="tab-pane fade" id="airbnb" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/16.jpg" width="86" alt="Ralph Edwards">
                            <h4 class="mb-0">Ralph Edwards</h4>
                            <p class="fs-lg text-body-secondary mb-0">CEO, Co-Founder</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra, quis semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci. Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus placerat fringilla.”</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial (tab) -->
                <div class="tab-pane fade" id="starcraft" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/17.jpg" width="86" alt="Jane Cooper">
                            <h4 class="mb-0">Jane Cooper</h4>
                            <p class="fs-lg text-body-secondary mb-0">Strategic Advisor</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Morbi at fermentum enim, pulvinar malesuada quam. Morbi sit amet tellus luctus, vulputate arcu nec, consectetur diam. Proin est lacus, interdum ac aliquam sit amet, aliquam eget leo. Donec condimentum erat quam, tincidunt tempus augue consectetur a. Donec quis purus dictum, iaculis mi fringilla.”</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial (tab) -->
                <div class="tab-pane fade" id="alpine" role="tabpanel">
                    <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">
                            <img class="d-block rounded-circle mb-3" src="/img/avatar/18.jpg" width="86" alt="Albert Flores">
                            <h4 class="mb-0">Albert Flores</h4>
                            <p class="fs-lg text-body-secondary mb-0">Business Analyst</p>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <p class="text-dark lead mb-0">“Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus placerat fringilla. Aliquam congue risus tortor, sed posuere leo faucibus sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dui ante, rutrum eget vehicula sed.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools -->
    <section class="container overflow-hidden py-5 mt-2 mt-sm-3 my-2 my-lg-4 my-xl-5">
        <div class="row align-items-center pb-1 pb-sm-3 pb-md-4">
            <div class="col-md-5 text-center text-md-start pe-md-5 pe-lg-0 pe-xxl-4 ps-xl-5 mb-5 mb-md-0">
                <h2 class="h1 pb-3 pb-xl-2 mb-lg-4 mb-xl-5">Join Around with your favorite tools that you use daily and keep things on track</h2>
                <a class="btn btn-primary" href="#">See all integrations</a>
            </div>
            <div class="col-md-7 col-lg-6 offset-lg-1">
                <div class="position-relative mx-auto" style="max-width: 510px;">
                    <img class="d-block d-dark-mode-none" src="/img/landing/saas-2/tools/circle-gray-1.png" style="animation: rotate-cw 100s linear infinite;" alt="Circle">
                    <img class="d-none d-dark-mode-block" src="/img/landing/saas-2/tools/circle-light-1.png" style="animation: rotate-cw 100s linear infinite;" alt="Circle">
                    <img class="d-block d-dark-mode-none position-absolute top-0 start-0" src="/img/landing/saas-2/tools/circle-gray-2.png" style="animation: rotate-ccw 50s linear infinite;" alt="Circle">
                    <img class="d-none d-dark-mode-block position-absolute top-0 start-0" src="/img/landing/saas-2/tools/circle-light-2.png" style="animation: rotate-ccw 50s linear infinite;" alt="Circle">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-1.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="1200" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-2.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="450" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-3.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="600" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-4.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="750" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-5.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="900" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-6.png" data-aos="fade" data-aos-duration="600" data-aos-offset="250" data-aos-delay="1050" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-7.png" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-8.png" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250" data-aos-delay="150" alt="Icon">
                    <img class="position-absolute top-0 start-0 z-2" src="/img/landing/saas-2/tools/icon-9.png" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250" data-aos-delay="300" alt="Icon">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ (Accordion) -->
    <section class="bg-secondary py-5">
        <div class="container py-lg-3 py-xl-5">
            <div class="row pt-1 pb-2 py-sm-4">
                <div class="col-md-4 text-center text-md-start">
                    <h2 class="h1">Any questions? Check out the FAQ</h2>
                    <p class="pb-3 pb-sm-4">Et felis vitae ac venenatis lacus cras etiam risus scelerisque auctor adipiscing in a porta</p>
                    <div class="d-none d-md-flex justify-content-center">
                        <svg class="text-warning ms-n4" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 offset-lg-1">
                    <div class="accordion" id="faq">
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#questionOne" aria-expanded="true" aria-controls="questionOne">Is there a free trial?</button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="questionOne" aria-labelledby="headingOne" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Adipiscing sagittis neque egestas id platea accumsan. Morbi inpa platea urna curabitur habitant pulvinar lacinia neque. Netus gravida amet, aliquam quam turpis aliquet cras. Find aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu nulla pariatur. Sit amet, adipiscing elit.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">How do refunds work?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionTwo" aria-labelledby="headingTwo" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Quisque rutrum sit amet magna sit amet tristique. Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas, mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante. Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionThree" aria-expanded="false" aria-controls="questionThree">Do you offer student discounts?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionThree" aria-labelledby="headingThree" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Proin ac quam eget velit luctus tincidunt vel in nunc. Maecenas cursus erat lacus, id interdum elit accumsan in. Mauris placerat dapibus sem, condimentum interdum nulla varius ac. Mauris quam mauris, rhoncus et tortor vel, tempus dignissim libero. Curabitur sed odio in odio elementum cursus.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionFour" aria-expanded="false" aria-controls="questionFour">What happens if I run out of credit?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionFour" aria-labelledby="headingFour" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel. Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionFive" aria-expanded="false" aria-controls="questionFive">Do you have monthly and yearly billing options?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionFive" aria-labelledby="headingFive" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Vestibulum faucibus lectus eget augue pharetra, quis semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci. Phasellus at varius arcu. Ut nec lobortis velit.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionSix" aria-expanded="false" aria-controls="questionSix">What happens when I change plans?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionSix" aria-labelledby="headingSix" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Nunc non placerat mi, sit amet hendrerit lacus. Quisque cursus lorem vitae placerat ultrices. Morbi ut orci sit amet quam vulputate lobortis. Donec vulputate mi nec nisi tincidunt commodo. Nullam efficitur tincidunt tellus accumsan pellentesque. Suspendisse elementum blandit orci.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h3 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questionSeven" aria-expanded="false" aria-controls="questionSeven">How do I cancel my paid plan?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="questionSeven" aria-labelledby="headingSeven" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm">Morbi a consequat diam. Fusce sit amet faucibus erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque id est dictum, suscipit neque id, ornare nibh. Cras lacinia, est non ultrices porttitor, arcu orci rhoncus leo, egestas condimentum lorem.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer bg-dark py-5" data-bs-theme="dark">
    <div class="container pt-md-2 pt-lg-3 pt-xl-4">
        <div class="row pb-5 pt-sm-2 mb-lg-2">
            <div class="col-md-4 col-lg-3 pb-2 pb-md-0 mb-4 mb-md-0">
                <a class="navbar-brand py-0 mb-3 mb-md-4" href="/">
                    <span class="text-primary flex-shrink-0 me-2">
                        <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                        </svg>
                    </span>
                    <span class="text-white opacity-90">Around</span>
                </a>
                <p class="text-body fs-sm pb-2 pb-md-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed. Dolor elementum nunc dictum interdum amet arcu aenean eu integer</p>
                <div class="d-flex gap-3">
                    <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" href="#" aria-label="Facebook">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle" href="#" aria-label="Instagram">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#" aria-label="LinkedIn">
                        <i class="ai-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-lg-7 col-xl-6 offset-lg-2 offset-xl-3">
                <div class="row row-cols-1 row-cols-sm-3">
                    <div class="col mb-4 mb-md-0">
                        <h4 class="h6 fw-bold pb-lg-1">Company</h4>
                        <ul class="nav flex-column">
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Features</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Reviews</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">How it works</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col mb-4 mb-md-0">
                        <h4 class="h6 fw-bold pb-lg-1">Support</h4>
                        <ul class="nav flex-column">
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Help center</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Terms of service</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Legal</a></li>
                            <li><a class="nav-link fw-normal py-1 px-0" href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="h6 fw-bold pb-2 mb-0 mb-lg-1">Install App</h4>
                        <a class="btn btn-secondary px-3 py-2 mt-3 me-3 me-md-0" href="#">
                            <img class="mx-1 d-dark-mode-none" src="/img/market/appstore-dark.svg" width="120" alt="App Store">
                            <img class="mx-1 d-none d-dark-mode-block" src="/img/market/appstore-light.svg" width="120" alt="App Store">
                        </a>
                        <a class="btn btn-secondary px-3 py-2 mt-3 me-3 me-md-0" href="#">
                            <img class="mx-1 d-dark-mode-none" src="/img/market/googleplay-dark.svg" width="119" alt="Google Play">
                            <img class="mx-1 d-none d-dark-mode-block" src="/img/market/googleplay-light.svg" width="119" alt="Google Play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav fs-sm mb-0">
            <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
            <a class="nav-link fw-normal p-0 ms-1" href="" target="_blank" rel="noopener">Stackbros</a>
        </p>
    </div>
</footer>

@endsection

@section('script-bottom')

@endsection