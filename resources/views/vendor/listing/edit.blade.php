@extends('layouts.app')
@push('styles')
    <style>
        .step-card {
            background: #fff;
            border-radius: 14px;
            padding: 22px;
            min-height: 110px;
            border: 1px solid #e4e7ec;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            gap: 15px;
            align-items: center;
            transition: 0.25s ease;
        }

        .step-card:hover {
            transform: translateY(-4px);
            border-color: #0056d2;
            box-shadow: 0 8px 18px rgba(0,86,210,0.15);
        }

        .icon-wrapper {
            background: #eef4ff;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            display: flex !important;
            justify-content: center;
            align-items: center;
            transition: 0.25s;
            color: #0056d2;
        }

        .step-card:hover .icon-wrapper {
            background: #0056d2;
            color: #fff;
        }

        .label {
            color: #333;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: 0.25s;
        }

        .step-card:hover .label {
            color: #0056d2;
        }

        /* Active Step */
        .step-card.active {
            background: #0056d2;
            color: #fff !important;
            border-color: #0056d2;
            box-shadow: 0 10px 24px rgba(0,86,210,0.30);
        }

        .step-card.active .icon-wrapper,
        .step-card.active .label {
            background: rgba(255,255,255,0.2);
            color: #fff !important;
        }

    </style>
@endpush
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row g-3 gy-5">

                    <!-- Basic -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="sidebar-card step-card">
                            <div class="icon-wrapper">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                                </svg>
                            </div>
                            <a href="{{ route('vendor.listing.basic-details.edit', $listing) }}" class="label">Edit Basic Details</a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="sidebar-card step-card">
                            <div class="icon-wrapper">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 1 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <a href="{{ route('vendor.listing.address.edit', $listing) }}" class="label">Edit Address</a>
                        </div>
                    </div>

                    <!-- Timings -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="sidebar-card step-card">
                            <div class="icon-wrapper">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <a href="{{ route('vendor.listing.timing.edit', $listing) }}" class="label">Edit Timings</a>
                        </div>
                    </div>

                    <!-- Amenities -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="sidebar-card step-card">
                            <div class="icon-wrapper">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 21v-7a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v7"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <a href="{{ route('vendor.listing.amenities.edit', $listing) }}" class="label">Edit Amenities</a>
                        </div>
                    </div>

                    <!-- Logo/Gallery -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="sidebar-card step-card">
                            <div class="icon-wrapper">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="2.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                            </div>
                            <a href="" class="label">Edit Logo/Gallery</a>
                        </div>
                    </div>

                </div>

                {{--                <div class="row">--}}

{{--                    <div class="col-lg-3">--}}
{{--                        <div class="sidebar-card p-3 d-flex align-items-center gap-3">--}}

{{--                            <!-- Icon -->--}}
{{--                            <div class="icon-wrapper d-flex justify-content-center align-items-center">--}}
{{--                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <!-- Label -->--}}
{{--                            <a href="" class="fs-6 text-decoration-none fw-semibold text-dark flex-grow-1 item-label">--}}
{{--                                Edit Basic Details--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3">--}}
{{--                        <div class="sidebar-card p-3 d-flex align-items-center gap-3">--}}

{{--                            <!-- Icon -->--}}
{{--                            <div class="icon-wrapper d-flex justify-content-center align-items-center">--}}
{{--                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <!-- Label -->--}}
{{--                            <a href="" class="fs-6 text-decoration-none fw-semibold text-dark flex-grow-1 item-label">--}}
{{--                                Edit Address--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3">--}}
{{--                        <div class="sidebar-card p-3 d-flex align-items-center gap-3">--}}

{{--                            <!-- Icon -->--}}
{{--                            <div class="icon-wrapper d-flex justify-content-center align-items-center">--}}
{{--                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <!-- Label -->--}}
{{--                            <a href="" class="fs-6 text-decoration-none fw-semibold text-dark flex-grow-1 item-label">--}}
{{--                                Edit Timings--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3">--}}
{{--                        <div class="sidebar-card p-3 d-flex align-items-center gap-3">--}}

{{--                            <!-- Icon -->--}}
{{--                            <div class="icon-wrapper d-flex justify-content-center align-items-center">--}}
{{--                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <!-- Label -->--}}
{{--                            <a href="" class="fs-6 text-decoration-none fw-semibold text-dark flex-grow-1 item-label">--}}
{{--                                Edit Amenities--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3">--}}
{{--                        <div class="sidebar-card p-3 d-flex align-items-center gap-3">--}}

{{--                            <!-- Icon -->--}}
{{--                            <div class="icon-wrapper d-flex justify-content-center align-items-center">--}}
{{--                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">--}}
{{--                                    <path d="M12 20h9"></path>--}}
{{--                                    <path d="M16.5 3.5a2.129 2.129 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}

{{--                            <!-- Label -->--}}
{{--                            <a href="" class="fs-6 text-decoration-none fw-semibold text-dark flex-grow-1 item-label">--}}
{{--                                Edit Logo/Gallery--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
