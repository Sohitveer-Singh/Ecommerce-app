@extends('layouts.app')
@section('content')
    <section style="padding: 55px 0 0 0 " class="">
        <div class="container">

            <div class="">

                <h4>Search across
                    ‘4.9 Crore+‘ Businesses
                </h4>
                <!-- Search Form -->
                <form class="row g-4 mb-4">
                    <!-- Location -->
                    <div class="col-md-3 col-5">
                        <input type="text" class="form-control fs-5 py-2 py-4" placeholder="Enter your location"
                               id="location">
                    </div>
                    <div class="col-md-3 col-7">
                        <div class="form-control d-flex justify-content-between flex-row py-2">
                            <input type="text" style="border: 0;outline: none" class="fs-5 w-50 py-3"
                                   placeholder="Search" id="location">
                            <button style="width: 45px;border-radius:8px; background-color: #ae1c9a;" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     aria-hidden="true" focusable="false">
                                    <title>Search</title>
                                    <g fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                       stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="7"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------- style-section --------------->
    <section class="product fashion-style">
        <div class="container">
            <div class="style-section">
                <div class="row gy-4 gx-5 gy-lg-0">
                    <div class="col-lg-6">
                        <div class="product-wrapper wrapper-one" data-aos="fade-right">
                            <div class="wrapper-info">
                                <span class="wrapper-subtitle">NEW STYLE</span>
                                <h4 class="wrapper-details">Get 65% Offer
                                    <span class="wrapper-inner-title">& Make New</span> Fusion.
                                </h4>
                                <a href="product-sidebar" class="shop-btn">Shop Now
                                    <span>
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                                  transform="rotate(45 1.45312 0.914062)"/>
                                            <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                                  transform="rotate(135 8 7.45703)"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-wrapper wrapper-two" data-aos="fade-up">
                            <div class="wrapper-info">
                                <span class="wrapper-subtitle">Mega OFFER</span>
                                <h4 class="wrapper-details">
                                    Make your New
                                    <span class="wrapper-inner-title">Styles with Our</span>
                                    Products
                                </h4>
                                <a href="product-sidebar" class="shop-btn">Shop Now
                                    <span>
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                                  transform="rotate(45 1.45312 0.914062)"/>
                                            <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                                  transform="rotate(135 8 7.45703)"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- style-section-end --------------->

    <!--------------- category-section--------------->
    <section class="product-category">
        <div class="container">
            <div class="section-title">
                <h5>Our Categories</h5>
                <a href="product-sidebar" class="view">View All</a>
            </div>
            <div class="category-section">
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/dresses.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Dresses</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/bags.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Leather Bags</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/sweaters.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Sweaters</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/shoes.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Boots</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/gift.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Gift for Him</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="600">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/sneakers.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Sneakers</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/watch.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Watch</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/ring.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Gold Rings</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="300">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/cap.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Cap</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="400">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/glass.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Sunglass</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="500">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/baby.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Baby Shop</a>
                    </div>
                </div>
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="assets/images/homepage-one/category-img/bags.webp" alt="dress">
                    </div>
                    <div class="wrapper-info">
                        <a href="product-sidebar" class="wrapper-details">Leather Bags</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- category-section-end--------------->

    {{--    <section class="product">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-title">--}}
    {{--                <h5>Top Listings In Your Area</h5>--}}
    {{--                <a href="flash-sale" class="view">View All</a>--}}
    {{--            </div>--}}
    {{--            <div class="best-product-section">--}}
    {{--                <div class="row g-4">--}}
    {{--                    @foreach ($listings as $listing)--}}
    {{--                        <div class="col-xl-3 col-md-3">--}}
    {{--                            <a href="{{ route('public.listing.details', $listing) }}" class="product-details">--}}

    {{--                                <div class="product-wrapper" data-aos="fade-up">--}}
    {{--                                    <div class="product-img">--}}
    {{--                                        --}}{{-- <img src="{{ $listing->thumbnail }}" alt="product-img"> --}}
    {{--                                        --}}{{-- <img src="{{ Storage::url($listing->thumbnail) }}" alt="{{ $listing->name }}"> --}}
    {{--                                        <img src="{{ $listing->thumbnail_url }}" alt="{{ $listing->name }}">--}}


    {{--                                        --}}{{-- <img src="{{ asset('storage/'Read-only' . $listing->thumbnail) }}" alt="{{ $listing->name }}"> --}}


    {{--                                    </div>--}}
    {{--                                    <div class="product-info">--}}
    {{--                                        <div class="ratings">--}}
    {{--                                            <span>--}}
    {{--                                                <svg width="75" height="15" viewBox="0 0 75 15" fill="none"--}}
    {{--                                                     xmlns="http://www.w3.org/2000/svg">--}}
    {{--                                                    <path--}}
    {{--                                                        d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"--}}
    {{--                                                        fill="#FFA800" />--}}
    {{--                                                    <path--}}
    {{--                                                        d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"--}}
    {{--                                                        fill="#FFA800" />--}}
    {{--                                                    <path--}}
    {{--                                                        d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"--}}
    {{--                                                        fill="#FFA800" />--}}
    {{--                                                    <path--}}
    {{--                                                        d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"--}}
    {{--                                                        fill="#FFA800" />--}}
    {{--                                                    <path--}}
    {{--                                                        d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"--}}
    {{--                                                        fill="#FFA800" />--}}
    {{--                                                </svg>--}}
    {{--                                            </span>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="product-description">--}}
    {{--                                            {{ $listing->name }}--}}
    {{--                                            <div class="price">--}}
    {{--                                                <span class="">{{ $listing->location->address }}</span>--}}
    {{--                                                --}}{{-- <span class="new-price">$6.99</span> --}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="product-category">
        <div class="container">
            <div class="section-title">
                <h5>Our Categories</h5>
                <a href="product-sidebar" class="view">View All</a>
            </div>
            <div class="category-section">
                {{--                @foreach ($categoriesWithListing as $category)--}}
                {{--                    <a href="{{ route('public.listings.by_category', $category) }}">--}}
                {{--                        <div class="product-wrapper" data-aos="fade-right" data-aos-duration="100">--}}
                {{--                            <div class="wrapper-img">--}}
                {{--                                @if ($category->coverListing)--}}
                {{--                                    <img src="{{ $category->coverListing->thumbnail_url }}" alt="{{ $category->name }}">--}}
                {{--                                @else--}}
                {{--                                    <img src="https://via.placeholder.com/300x200.png?text={{ urlencode($category->name) }}"--}}
                {{--                                         alt="{{ $category->name }}">--}}
                {{--                                @endif--}}
                {{--                            </div>--}}
                {{--                            <div class="wrapper-info">--}}
                {{--                                <span href="product-sidebar" class="wrapper-details">{{ $category->name }}</span>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </a>--}}
                {{--                @endforeach--}}
            </div>
        </div>
    </section>
    <section class="product-category py-5">
        <div class="container">
            <div class="row g-4">

                {{--                @if ($featuredTagsWithCategories->isNotEmpty())--}}
                {{--                    @foreach ($featuredTagsWithCategories as $tag)--}}
                {{--                        <div class="col-lg-6">--}}
                {{--                            <div class="rounded-3 h-100 border p-3 shadow-sm">--}}
                {{--                                <div class="section-title mb-3">--}}
                {{--                                    <h5 class="fw-bold fs-1">Popular in #{{ $tag->name }}</h5>--}}
                {{--                                </div>--}}

                {{--                                <div class="row g-3">--}}

                {{--                                    @foreach ($tag->related_categories as $category)--}}
                {{--                                        <div class="col-4">--}}
                {{--                                            <a href="{{ route('public.listings.by_category', $category) }}"--}}
                {{--                                               class="text-decoration-none text-dark">--}}

                {{--                                                <div class=" h-100  border-0 text-center ">--}}

                {{--                                                    @if ($category->coverListing)--}}
                {{--                                                        <img src="{{ $category->coverListing->thumbnail_url }}"--}}
                {{--                                                             class="card-img-top " style="border-radius: 12px"--}}
                {{--                                                             alt="{{ $category->name }}">--}}
                {{--                                                    @else--}}
                {{--                                                        <img--}}
                {{--                                                            src="https://via.placeholder.com/300x200.png?text={{ urlencode($category->name) }}"--}}
                {{--                                                            class="card-img-top" alt="{{ $category->name }}">--}}
                {{--                                                    @endif--}}

                {{--                                                    <div class=" p-2">--}}
                {{--                                                        <h6 class="card-title small mb-0">{{ $category->name }}</h6>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            </a>--}}
                {{--                                        </div>--}}
                {{--                                    @endforeach--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    @endforeach--}}
                {{--                @endif--}}

            </div>
        </div>
    </section>

    <style>
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            transition: all 0.2s ease-in-out;
        }
    </style>


    <!--------------- flash-section--------------->
    <section class="product best-product">
        <div class="container">
            <div class="section-title">
                <h5>Recent Listing</h5>
                <a href="flash-sale" class="view">View All</a>
            </div>
            <div class="best-product-section">
                <div class="row g-4">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-9.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Half Sleeve Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$12.99</span>
                                        <span class="new-price">$6.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-10.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Feminine Wrap coat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$18.99</span>
                                        <span class="new-price">$10.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-2.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Black suit
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$10.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-4.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Rainbow Party Dress
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$19.99</span>
                                        <span class="new-price">$8.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-1.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Rainbow Sequin Skart
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$15.99</span>
                                        <span class="new-price">$7.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-11.webp" alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                fill="#FFA800"/>
                                            <path
                                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                fill="#FFA800"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="product-description">
                                    <a href="product-info" class="product-details">Red Sequin Hat
                                    </a>
                                    <div class="price">
                                        <span class="price-cut">$13.99</span>
                                        <span class="new-price">$7.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-13.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">Gradient Party Shirt
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$19.99</span>
                                            <span class="new-price">$10.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-1.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">Flower Design Dress
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$19.99</span>
                                            <span class="new-price">$8.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-12.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">Blue Suit
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$10.99</span>
                                            <span class="new-price">$5.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-3.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">Blue Party Dress
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$9.99</span>
                                            <span class="new-price">$6.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-6.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">White Hat
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$29.99</span>
                                            <span class="new-price">$26.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-5.webp"
                                        alt="product-img">
                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                                    fill="#FFA800" />
                                                <path
                                                    d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                                    fill="#FFA800" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="product-description">
                                        <a href="product-info" class="product-details">White Checked Shirt
                                        </a>
                                        <div class="price">
                                            <span class="price-cut">$19.99</span>
                                            <span class="new-price">$16.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--------------- flash-section-end--------------->

    <!--------------- footer-section--------------->
@endsection
