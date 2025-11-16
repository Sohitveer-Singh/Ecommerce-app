@extends('layouts.app')

@section('breadcrumbs')
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-breadcrumb">
                <span><a href="{{route('public.index')}}">Home</a></span>
                <span class="breadcrumb-divider ">  / </span>
                <span><a href="{{route('public.memberships')}}">Memberships</a></span>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!--------------- products-info-section--------------->
    <section style="margin-bottom: 60px" class="bg-light py-5">
        <div class="container">

            <!-- Heading -->
            <div class="mb-5 text-center">
                <h1 class="fw-bold display-4">Membership</h1>
                <p class="text-muted fs-4">Choose the plan that fits your business needs</p>
            </div>

            <!-- Plans Row -->
            <div class="row g-4">

                <!-- PLAN CARD -->
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-4 d-flex flex-column border-0 shadow-sm">
                        <div class="card-body d-flex flex-column p-5 text-center">

                            <!-- Icon -->
                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                 style="width:70px; height:70px; background:linear-gradient(to right,#3b82f6,#6366f1);">
                                <i class="bi bi-stars fs-2 text-white"></i>
                            </div>

                            <!-- Title -->
                            <h4 class="fw-semibold fs-4 mb-3">Popular</h4>

                            <!-- Price -->
                            <p class="fw-bold display-5 mb-1">₹472</p>
                            <p class="text-muted fs-5 mb-4">Billed annually (GST included)</p>

                            <hr>

                            <!-- Features -->
                            <ul class="list-unstyled flex-grow-1 my-4 text-start">
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Shop Listing</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Name</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Phone</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Gallery</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Business Hours</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Google Map</li>
                            </ul>

                            <!-- CTA -->
                            <a href="#" class="btn w-100 fw-semibold rounded-pill fs-5 mt-auto py-3 text-white"
                               style="background:linear-gradient(to right,#3b82f6,#6366f1);">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>


                <!-- GOLD PLAN -->
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-4 d-flex flex-column border-0 shadow-sm">
                        <div class="card-body d-flex flex-column p-5 text-center">

                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                 style="width:70px; height:70px; background:linear-gradient(to right,#10b981,#0d9488);">
                                <i class="bi bi-gem fs-2 text-white"></i>
                            </div>

                            <h4 class="fw-semibold fs-4 mb-3">Gold</h4>

                            <p class="fw-bold display-5 mb-1">₹944</p>
                            <p class="text-muted fs-5 mb-4">Billed annually (GST included)</p>

                            <hr>

                            <ul class="list-unstyled flex-grow-1 my-4 text-start">
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>All Popular Features
                                </li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>50 Product List</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Website Link</li>
                            </ul>

                            <a class="btn w-100 fw-semibold rounded-pill fs-5 mt-auto py-3 text-white"
                               style="background:linear-gradient(to right,#10b981,#0d9488);">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>


                <!-- DIAMOND PLAN -->
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-4 d-flex flex-column border-0 shadow-sm">
                        <div class="card-body d-flex flex-column p-5 text-center">

                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                 style="width:70px; height:70px; background:linear-gradient(to right,#f59e0b,#f97316);">
                                <i class="bi bi-shield-check fs-2 text-white"></i>
                            </div>

                            <h4 class="fw-semibold fs-4 mb-3">Diamond</h4>

                            <p class="fw-bold display-5 mb-1">₹1,475</p>
                            <p class="text-muted fs-5 mb-4">Billed annually</p>

                            <hr>

                            <ul class="list-unstyled flex-grow-1 my-4 text-start">
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>All Gold Features
                                </li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>100 Product List
                                </li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Social Media Links
                                </li>
                            </ul>

                            <a class="btn w-100 fw-semibold rounded-pill fs-5 mt-auto py-3 text-white"
                               style="background:linear-gradient(to right,#f59e0b,#f97316);">
                                Get Started
                            </a>

                        </div>
                    </div>
                </div>


                <!-- PLATINUM PLAN -->
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 rounded-4 d-flex flex-column border-0 shadow-sm">
                        <div class="card-body d-flex flex-column p-5 text-center">

                            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                                 style="width:70px; height:70px; background:linear-gradient(to right,#d97706,#b45309);">
                                <i class="bi bi-trophy fs-2 text-white"></i>
                            </div>

                            <h4 class="fw-semibold fs-4 mb-3">Platinum</h4>

                            <p class="fw-bold display-5 mb-1">₹2,950</p>
                            <p class="text-muted fs-5 mb-4">Billed annually</p>

                            <hr>

                            <ul class="list-unstyled flex-grow-1 my-4 text-start">
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>All Diamond Features
                                </li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Top in City</li>
                                <li class="fs-5 mb-3"><i class="bi bi-check2 text-success me-2"></i>Top in District</li>
                            </ul>

                            <a class="btn w-100 fw-semibold rounded-pill fs-5 mt-auto py-3 text-white"
                               style="background:linear-gradient(to right,#d97706,#b45309);">
                                Get Started
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--------------- products-info-end--------------->

    <!--------------- weekly-section-end--------------->
@endsection
