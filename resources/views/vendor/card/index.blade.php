@extends('layouts.user.app')
@push('styles')
    <style>
        /* Wrapper Glow */
        .card-wrapper {
            width: 380px;
            max-width: 100%;
        }

        /* Outer glow */
        .card-wrapper .glow-effect {
            position: absolute;
            inset: -5px;
            border-radius: 30px;
            background: linear-gradient(to right, #7c3aed, #ec4899, #3b82f6);
            filter: blur(22px);
            opacity: 0.3;
            transition: 0.5s;
        }

        .card-wrapper:hover .glow-effect {
            opacity: 0.55;
        }

        /* Card Base */
        .animated-card {
            width: 380px;
            height: 250px;
        }

        /* Background gradient mesh */
        .bg-overlay-1 {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(147, 51, 234, 0.2), rgba(236, 72, 153, 0.2), rgba(59, 130, 246, 0.2));
        }

        /* Floating Orbs */
        .bg-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            animation: pulse 4s ease-in-out infinite;
        }

        .orb-1 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, rgba(147, 51, 234, 0.4), rgba(236, 72, 153, 0.4));
            top: -50px;
            right: -50px;
        }

        .orb-2 {
            width: 130px;
            height: 130px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.4), rgba(147, 51, 234, 0.4));
            bottom: -40px;
            left: -40px;
            animation-delay: 1s;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.4;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }
        }

        /* Radial grid pattern */
        .grid-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.07;
            background-image: radial-gradient(circle at 2px 2px, rgba(255, 255, 255, 0.2) 1px, transparent 0);
            background-size: 20px 20px;
        }

        /* Status badge */
        .status-badge {
            backdrop-filter: blur(4px);
            border: 1px solid rgba(220, 53, 69, 0.4);
            background: rgba(220, 53, 69, 0.15);
        }

        .status-dot {
            width: 10px;
            height: 10px;
            background: #dc3545;
            border-radius: 50%;
        }

        .status-badge-success {
            backdrop-filter: blur(4px);
            border: 1px solid rgba(53, 220, 61, 0.4);
            background: rgba(53, 220, 106, 0.15);
        }

        .status-dot-success {
            width: 10px;
            height: 10px;
            background: #35dc59;
            border-radius: 50%;
        }

        /* Photo box */
        .photo-box {
            width: 94px;
            height: 112px;
            background: linear-gradient(135deg, #555, #222);
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
        }

        .photo-glow {
            position: absolute;
            inset: 0;
            border-radius: 14px;
            background: linear-gradient(90deg, rgba(147, 51, 234, 0.3), rgba(236, 72, 153, 0.3));
            filter: blur(8px);
            opacity: 0.5;
        }

        /* Bottom Accent Line */
        .bottom-accent {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(to right, #9333ea, #ec4899, #3b82f6);
        }
    </style>
@endpush
@section('content')

    <!-- nav-content -->
    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">


        <div class="tab-pane fade show active" id="v-pills-payment" role="tabpanel"
             aria-labelledby="v-pills-order-tab" tabindex="0">
            <div class="payment-section">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <div class="user-title mb-5">
                    <p class="paragraph">Hello, Sajjad</p>
                    <h5 class="heading">Welcome to your Premium Discount Card </h5>
                </div>
                @if($card)
                    <div class="wrapper">

                        <div class="d-flex justify-content-center mb-4">
                            <div class="position-relative card-wrapper">

                                <!-- Glow -->
                                <div class="glow-effect"></div>

                                <!-- Card -->
                                <div
                                    class="animated-card bg-dark position-relative rounded-4 overflow-hidden text-white shadow-lg">

                                    <!-- Background Layers -->
                                    <div class="bg-overlay-1"></div>
                                    <div class="bg-orb orb-1"></div>
                                    <div class="bg-orb orb-2"></div>
                                    <div class="grid-pattern"></div>

                                    <!-- Content -->
                                    <div class="position-relative  h-100 d-flex flex-column p-4">

                                        <!-- Header -->
                                        <div class="d-flex justify-content-between align-items-start mb-4">
                                            <div>
                                                <img src="" class="img-fluid" style="max-height: 60px;">
                                                <p class="fs-5 mt-1 text-white" style="letter-spacing: 2px;">
                                                    PREMIUM DISCOUNT CARD
                                                </p>
                                            </div>


                                            @if($card->card_status == 1)
                                                <div
                                                    class="d-flex align-items-center rounded-pill status-badge-success px-3 py-1">
                                                    <span class="status-dot-success me-2"></span>
                                                    <span class="fw-semibold small">ACTIVE</span>
                                                </div>
                                            @else
                                                <div
                                                    class="d-flex align-items-center rounded-pill status-badge px-3 py-1">
                                                    <span class="status-dot me-2"></span>
                                                    <span class="fw-semibold small">INACTIVE</span>
                                                </div>
                                            @endif


                                        </div>

                                        <!-- Main Section -->
                                        <div class="d-flex align-items-center flex-grow-1 gap-4">

                                            <!-- Photo -->
                                            <div class="position-relative">
                                                <div class="photo-box">
                                                    <img src="" class="w-100 h-100"
                                                         style="object-fit: cover;">
                                                </div>
                                                <div class="photo-glow"></div>
                                            </div>

                                            <!-- User Info -->
                                            <div class="flex-grow-1">

                                                <div class="mb-3">
                                                    <p class="small text-uppercase mb-1"
                                                       style="letter-spacing:2px;color:#cacaca">Cardholder Name
                                                    </p>
                                                    <p class="fw-bold fs-5 mb-0 text-white">{{ auth()->user()->name }}</p>
                                                </div>

                                                <div class="mb-3">
                                                    <p class="small text-uppercase mb-1"
                                                       style="letter-spacing:2px;color:#cacaca">Card Number</p>
                                                    <p class="fw-semibold fs-5 text-light mb-0">{{ chunk_split($card->card_number, 4, ' ') }}

                                                    </p>
                                                </div>

                                                <div class="d-flex gap-5">
                                                    <div>
                                                        <p class="small text-uppercase mb-1"
                                                           style="letter-spacing:2px;color:#cacaca">Expires
                                                        </p>
                                                        <p class="fw-semibold fs-5 text-light mb-0">{{ $card->valid_until->format('m/y') }}</p>
                                                    </div>
                                                    <div>
                                                        <p class="small text-uppercase mb-1"
                                                           style="letter-spacing:2px;color:#cacaca">DOB</p>
                                                        <p class="fw-semibold fs-5 text-light mb-0">{{ auth()->user()->dob ?? '-' }}
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Bottom Gradient Line -->
                                        <div class="bottom-accent"></div>

                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                @else
                    <div class="wrapper-btn">
                        <button href="user-profile#" class="shop-btn" onclick="modalAction('.cart')">Get
                            Card
                        </button>

                        <!-- cart-modal -->
                        <div class="modal-wrapper cart">
                            <div onclick="modalAction('.cart')" class="anywhere-away"></div>

                            <!-- change this -->
                            <div class="login-section   account-section modal-main ">
                                <div class="review-form z-1">
                                    <div class="review-content">
                                        <h5 class="comment-title">Premium Card</h5>
                                        <div class="close-btn " style="height: 20px; width: 20px;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 style="height: 20px; width: 20px;"
                                                 onclick="modalAction('.cart')"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <line x1="5" y1="5" x2="19" y2="19"
                                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                                <line x1="19" y1="5" x2="5" y2="19"
                                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>

                                            {{--                                        <img src="assets/images/homepage-one/close-btn.png"--}}
                                            {{--                                              alt="close-btn">--}}
                                        </div>
                                    </div>
                                    <form action="{{ route('vendor.card.store') }}" method="POST">
                                        @csrf

                                        {{-- VISUAL ONLY: These inputs are disabled and will NOT be sent to the server --}}
                                        <div class="review-form-name address-form">
                                            <label class="form-label">Card Holder Name*</label>
                                            <input type="text" class="form-control" value="{{ auth()->user()->name }}"
                                                   disabled>
                                        </div>

                                        <div class="account-inner-form">
                                            <div class="review-form-name">
                                                <label class="form-label">Expiry Date*</label>
                                                <input type="date" class="form-control"
                                                       value="{{ now()->addYears(3)->format('Y-m-d') }}" disabled>
                                            </div>
                                            <div class="review-form-name">
                                                <label class="form-label">Premium*</label>
                                                <input type="number" class="form-control" value="400" disabled>
                                            </div>
                                        </div>

                                        <div class="login-btn text-center">
                                            <button type="submit" class="shop-btn border-0">Submit Request</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- change this -->

                        </div>

                    </div>
                @endif


                <hr>

            </div>
        </div>


    </div>

    <!--------------- user-profile-section-end --------------->
@endsection
@push('scripts')
@endpush
