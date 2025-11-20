@extends('layouts.app')
@push('styles')
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <style>
        /* Increase text size inside Select2 */
        .select2-container--default .select2-selection--multiple .select2-selection__rendered,
        .select2-container--default .select2-selection--single .select2-selection__rendered,
        .select2-container--default .select2-results__option {
            font-size: 14px !important;
            /* Adjust size here */
        }

        /* Increase height & padding for nicer feel */
        .select2-container--default .select2-selection--multiple,
        .select2-container--default .select2-selection--single {
            padding: 8px 12px !important;
            min-height: 52px !important;
            font-size: 16px !important;
        }

        /* Adjust selected tags */
        .select2-container--default .select2-selection__choice {
            font-size: 14px !important;
            padding: 5px 8px !important;
        }
    </style> --}}
    <style>
        /* Text size inside Select2 dropdown & selected items */
        .select2-container--default .select2-selection--single .select2-selection__rendered,
        .select2-container--default .select2-selection--multiple .select2-selection__rendered,
        .select2-container--default .select2-results__option {
            font-size: 16px !important;
            line-height: 1.4 !important;
        }

        /* Single + Multi box look */
        .select2-container--default .select2-selection--single,
        .select2-container--default .select2-selection--multiple {
            min-height: 52px !important;
            padding: 10px 14px !important;

            /* border: 1px solid #ced4da !important;
                                                                                                border-radius: 8px !important; */

            font-size: 16px !important;
            display: flex !important;
            align-items: center !important;
        }

        /* Adjust arrow for single select */
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 50% !important;
            transform: translateY(-50%) !important;
            right: 10px !important;
        }

        /* Selected tag pills (multi-select) */
        .select2-container--default .select2-selection__choice {
            background-color: #eef4ff !important;
            color: #333 !important;
            border: none !important;
            border-radius: 6px !important;

            padding: 5px 10px !important;
            font-size: 14px !important;

            margin-top: 4px !important;
            margin-right: 6px !important;
        }

        /* Dropdown width & spacing */
        .select2-container .select2-dropdown {
            border-radius: 8px !important;
            font-size: 16px !important;
        }
    </style>
@endpush
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-7 order-2">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title">Enter Your Business Amenities</h5>
                                {{-- <form action="">
                                    <div class="account-inner-form">
                                        <div class="review-form-name">
                                            <label for="fname" class="form-label">Business Tags*</label>
                                            <select id="tags" name="tags[]" class="form-select select2" multiple>
                                                <option></option>
                                                <option value="mobile">Mobile & Laptops</option>
                                                <option value="bags">Bags</option>
                                                <option value="sweatshirt">Sweatshirt</option>
                                                <option value="boots">Boots</option>
                                                <option value="accessories">Accessories</option>
                                                <option value="sneakers">Sneakers</option>
                                                <option value="outerwear">Outerwear</option>
                                                <option value="activewear">Activewear</option>
                                                <option value="grooming">Grooming</option>
                                                <option value="cosmetics">Cosmetics</option>
                                                <option value="watch">Watch</option>
                                            </select>
                                        </div>

                                        <div class="review-form-name">
                                            <label for="fname" class="form-label">Business Categries*</label>

                                            <select id="categories" name="categories" class="form-select select2">
                                                <option></option>
                                                <option value="mobile">Mobile & Laptops</option>
                                                <option value="bags">Bags</option>
                                                <option value="sweatshirt">Sweatshirt</option>
                                                <option value="boots">Boots</option>
                                                <option value="accessories">Accessories</option>
                                                <option value="sneakers">Sneakers</option>
                                                <option value="outerwear">Outerwear</option>
                                                <option value="activewear">Activewear</option>
                                                <option value="grooming">Grooming</option>
                                                <option value="cosmetics">Cosmetics</option>
                                                <option value="watch">Watch</option>
                                            </select>
                                        </div>



                                    </div>
                                    <div class="login-btn">
                                        <a href="/listing/logo" class="shop-btn">Submit</a>
                                    </div>
                                </form> --}}
                                <form action="{{ route('vendor.listing.amenities.store', $listing) }}" method="POST">
                                    @csrf
                                    <div class="account-inner-form">

                                        <div class="review-form-name">
                                            <label for="tags" class="form-label">Business Tags*</label>
                                            <select id="tags" name="tags[]" class="form-select select2" multiple>
                                                <option></option>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}" {{-- Check if the listing's current tags contain this tag --}}
                                                        {{ $listing->tags->contains($tag->id) ? 'selected' : '' }}>
                                                        {{ $tag->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="review-form-name">
                                            <label for="categories" class="form-label">Business Category*</label>
                                            <select id="categories" name="categories" class="form-select select2">
                                                <option></option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{-- Check if the listing's category_id matches this category --}}
                                                        {{ $listing->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('categories')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="login-btn">
                                        <button type="submit" class="shop-btn">Save and Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1">
                        <div class="contact-info-section">
                            <div class="contact-information">

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
                                        class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle border border-2 bg-white">
                                        <span class="text-primary fs-4 fs-md-1">5</span>
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
                                        {{-- <div class="col-sm-6">

                                        </div> --}}
                                        {{-- <div class="col-lg-12">
                                            <div class="address">
                                                <div class="contact-address">
                                                    <div class="address-icon">
                                                        <span>
                                                            <svg width="44" height="44" viewBox="0 0 44 44"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.1611 17.6821C17.1848 20.3432 19.3626 22.4945 22.0205 22.4843C24.6735 22.4741 26.8518 20.2773 26.8314 17.629L26.8314 17.6289C26.8098 14.9632 24.6389 12.824 21.9718 12.8353C19.3106 12.8466 17.1362 15.0295 17.1611 17.6821ZM17.1611 17.6821L17.661 17.6776L17.1611 17.6823C17.1611 17.6822 17.1611 17.6821 17.1611 17.6821ZM13.836 18.3193L13.836 18.3183C13.8642 13.6208 16.7919 10.206 20.6315 9.6048C24.7202 8.96493 28.5519 11.3061 29.7792 15.2223L29.7792 15.2224C30.451 17.3646 30.2918 19.4599 29.2268 21.4239C27.4275 24.7397 25.5965 28.0381 23.7643 31.3387C23.2175 32.3236 22.6706 33.3088 22.1245 34.2946L22.1244 34.2948C22.0724 34.3887 22.0272 34.4449 21.9956 34.4762C21.9645 34.4453 21.9201 34.39 21.869 34.2978L21.869 34.2977C21.6067 33.8243 21.3445 33.3511 21.0822 32.8778C18.9688 29.0636 16.8558 25.2502 14.7605 21.4272C14.1161 20.2514 13.8307 18.9893 13.836 18.3193ZM13.3363 18.3153L13.336 18.3153L13.3363 18.3153Z"
                                                                    fill="#AE1C9A" stroke="#AE1C9A"></path>
                                                                <circle cx="22" cy="22" r="21.5"
                                                                    stroke="#AE1C9A">
                                                                </circle>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="address-content text-justify">
                                                        <h5 class="wrapper-heading">Add Address</h5>
                                                    </div>
                                                </div>
                                                <div class="contact-map">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.2527999867!2d-74.14448761897569!3d40.6976312333577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1691924335610!5m2!1sen!2sbd"
                                                        width="524" height="270" allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div> --}}
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
    <!-- Select2 JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
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
