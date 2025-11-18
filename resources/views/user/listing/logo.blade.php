@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-7 order-2">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title">Upload Your Business Logo</h5>
                                <form action="{{ route('user.listing.logo.store', $listing) }}" method="POST"
                                      enctype="multipart/form-data" class="mt-4">
                                    @csrf

                                    <div class="account-inner-form">
                                        <div class="review-form-name">
                                            <label for="thumbnail" class="form-label">Listing Thumbnail*</label>
                                            <input class="form-control" type="file" id="thumbnail" name="thumbnail">

                                            @error('thumbnail')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="login-btn">
                                        <button type="submit" class="shop-btn">Finish & Submit Listing</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1">
                        <div class="contact-info-section">
                            <div class="contact-information">
                                {{-- <h5 class="d-none d-lg-block wrapper-heading">Business Details</h5> --}}
                                <style>
                                    /* === Default: Mobile (sm & below) === */
                                    .step-circle {
                                        width: 40px;
                                        height: 40px;
                                    }

                                    .step-line {
                                        width: 25px;
                                        border: 1px solid #0d6efd;
                                    }

                                    /* === MD and above === */
                                    @media (min-width: 768px) {
                                        .step-circle {
                                            width: 60px;
                                            height: 60px;
                                        }

                                        .step-line {
                                            width: 40px;
                                        }
                                    }
                                </style>


                                <div class="d-flex justify-content-lg-start justify-content-center align-items-center">

                                    <!-- ✅ Step 1 (Completed) -->
                                    <div
                                        class="rounded-circle bg-primary border-primary d-flex justify-content-center align-items-center step-circle border border-2">
                                        <span class="fs-4 fs-md-1 text-white">1</span>
                                    </div>

                                    <div class="step-line"></div>

                                    <!-- ✅ Step 2 (Completed) -->
                                    <div
                                        class="rounded-circle bg-primary border-primary d-flex justify-content-center align-items-center step-circle border border-2">
                                        <span class="fs-4 fs-md-1 text-white">2</span>
                                    </div>

                                    <div class="step-line"></div>

                                    <!-- ✅ Step 3 -->
                                    <div
                                        class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle bg-primary border border-2">
                                        <span class="fs-4 fs-md-1 text-white">3</span>
                                    </div>

                                    <div class="step-line"></div>

                                    <!-- ✅ Step 4 -->
                                    <div
                                        class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle bg-primary border border-2">
                                        <span class="fs-4 fs-md-1 text-white">4</span>
                                    </div>

                                    <div class="step-line"></div>

                                    <!-- ✅ Step 5 -->
                                    <div
                                        class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle bg-primary border border-2">
                                        <span class="fs-4 fs-md-1 text-white">5</span>
                                    </div>

                                </div>
                                {{-- <div class="d-flex">

                                    <div style="height: 60px;width:60px;border:1px solid; border-radius: 50%;"
                                        class="bg-primary"></div>
                                    <div style="height: 60px;width:60px;border:1px solid; border-radius: 50%;"
                                        class="bg-primary"></div>
                                </div> --}}



                                <div class="contact-wrapper">
                                    <div class="row gy-5">
                                        <div class="col-sm-12">

                                            <h5 class="wrapper-heading d-none d-lg-block pt-4">Quick Tips</h5>
                                            <ul class="paragraph d-none d-lg-block px-4">
                                                <li>
                                                    <p class="d-none d-lg-block paragraph">
                                                        1. Use your official business name.</p>
                                                </li>
                                                <li>
                                                    <p class="d-none d-lg-block paragraph">
                                                        2. Write a clear and simple description. </p>
                                                </li>
                                                <li>
                                                    <p class="d-none d-lg-block paragraph">
                                                        3. Ensure your address is accurate for map search. </p>
                                                </li>
                                                <li>
                                                    <p class="d-none d-lg-block paragraph">
                                                        4. Use the correct pincode for better local listing. </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tags').select2({
                placeholder: "Select tags",
                allowClear: true,
                width: '100%',
            });
            $('#categories').select2({
                placeholder: "Select Categories",
                allowClear: true,
                width: '100%',
            });
        });
    </script>
@endpush
