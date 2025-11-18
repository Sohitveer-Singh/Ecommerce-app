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
                                <form action="{{ route('user.listing.amenities.update', $listing) }}" method="POST">
                                    @csrf
                                    @method('PUT')
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

