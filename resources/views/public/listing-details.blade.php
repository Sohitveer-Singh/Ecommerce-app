@extends('layouts.app')
@push('styles')
    <style>
        .business-hours-table td {
            padding: 10px 14px !important;
            /* 2px extra padding */
            font-size: 17px !important;
            /* increased text size */
            /* border: none !important; */
            /* clean minimal look */
        }

        .business-hours-table strong {
            font-size: 17px !important;

        }

        td {
            border: 1px solid;
        }

        .custom-tab-style {
            display: inline-block;
            padding: 1rem 2.4rem;
            font-size: 1.6rem;
            font-weight: 600;
            color: #AE1C9A;
            background: #fff;
            border-top-left-radius: 2rem;
            border-top-right-radius: 2rem;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        /* Active look (same as .nav-link.active) */
        .custom-tab-style.active {
            background: #AE1C9A;
            color: #fff;
        }

        /* Hover style */
        .custom-tab-style:hover {
            background: rgba(174, 28, 154, 0.15);
        }
    </style>
@endpush
@section('content')
    <!--------------- products-info-section--------------->
    <section class="product product-info">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index">Home</a></span>
                <span class="devider">/</span>
                <span><a href="product-sidebar">Listing</a></span>
                <span class="devider">/</span>
                <span><a href="product-info#">{{ $listing->name }}</a></span>
            </div>
            <div class="product-info-section">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-info-img" data-aos="fade-right">
                            <div class="swiper product-top">

                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider-top-img">
                                        {{-- <img src="{{ Storage::url($listing->thumbnail) }}" alt="{{ $listing->name }}"> --}}
                                        <img src="{{ $listing->thumbnail_url }}" alt="{{ $listing->name }}">

                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-1.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-2.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-3.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-1.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-2.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-3.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-1.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-2.webp"
                                             alt="img">
                                    </div>
                                    <div class="swiper-slide slider-top-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-3.webp"
                                             alt="img">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="swiper product-bottom">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider-bottom-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-16.png" alt="img">
                                    </div>
                                    <div class="swiper-slide slider-bottom-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-17.png" alt="img">
                                    </div>
                                    <div class="swiper-slide slider-bottom-img">
                                        <img src="assets/images/homepage-one/product-img/product-slider-img-2.webp"
                                            alt="img">
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info-content" data-aos="fade-left">
                            {{-- <span class="wrapper-subtitle">Lace Store</span> --}}
                            <h5>
                                {{ $listing->name }}
                            </h5>
                            <div style="margin-top: 6px" class="price">
                                <svg class="inner-text me-1" style="width:20px; height:20px;" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>Posted {{ $listing->created_at->diffForHumans() }}</span>
                                {{-- <span>Posted 3 months ago</span> --}}
                            </div>
                            <div style="margin-top: 12px" class="ratings">
                                <span>
                                    <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
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
                                <span class="text">6 Reviews</span>
                            </div>
                            <p style="margin-top: 10px" class="content-paragraph">
                                {{ $listing->description }}
                            </p>
                            <hr>

                            <div class="product-size">
                                <P style="color:#232532" class="fs-3">Owner Details</P>
                                <div class="product-details">
                                    <p class="category">Name : <span class="inner-text">
                                            <a href="{{ route('public.listings.by_user', $listing->user->name) }}"
                                               class="inner-text small fw-normal fs-4 me-1">
                                                {{ $listing->contact_person }}
                                            </a>
                                        </span></p>
                                    <p style="margin-bottom: 6px" class="category">Joined : <span
                                            class="inner-text">{{ $listing->user->created_at->diffForHumans() }}</span></p>

                                    <div class="product-share d-flex align-items-center gap-3 text-center">
                                        <p class="m-0 pt-2">Contact :</p>

                                        <div class="social-icons d-flex align-items-center gap-4">
                                            <a href="product-info#">
                                                <span class="facebook">
                                                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V9H0V6H3V4C3 1.3 4.7 0 7.1 0C8.3 0 9.2 0.1 9.5 0.1V2.9H7.8C6.5 2.9 6.2 3.5 6.2 4.4V6H10L9 9H6.3V16H3Z"
                                                            fill="#3E75B2" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="product-info#">
                                                <span class="pinterest">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C3.6 0 0 3.6 0 8C0 11.4 2.1 14.3 5.1 15.4C5 14.8 5 13.8 5.1 13.1C5.2 12.5 6 9.1 6 9.1C6 9.1 5.8 8.7 5.8 8C5.8 6.9 6.5 6 7.3 6C8 6 8.3 6.5 8.3 7.1C8.3 7.8 7.9 8.8 7.6 9.8C7.4 10.6 8 11.2 8.8 11.2C10.2 11.2 11.3 9.7 11.3 7.5C11.3 5.6 9.9 4.2 8 4.2C5.7 4.2 4.4 5.9 4.4 7.7C4.4 8.4 4.7 9.1 5 9.5C5 9.7 5 9.8 5 9.9C4.9 10.2 4.8 10.7 4.8 10.8C4.8 10.9 4.7 11 4.5 10.9C3.5 10.4 2.9 9 2.9 7.8C2.9 5.3 4.7 3 8.2 3C11 3 13.1 5 13.1 7.6C13.1 10.4 11.4 12.6 8.9 12.6C8.1 12.6 7.3 12.2 7.1 11.7C7.1 11.7 6.7 13.2 6.6 13.6C6.4 14.3 5.9 15.2 5.6 15.7C6.4 15.9 7.2 16 8 16C12.4 16 16 12.4 16 8C16 3.6 12.4 0 8 0Z"
                                                            fill="#E12828" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="product-info#">
                                                <span class="twitter">
                                                    <svg width="18" height="14" viewBox="0 0 18 14"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.0722 1.60052C16.432 1.88505 15.7562 2.06289 15.0448 2.16959C15.7562 1.74278 16.3253 1.06701 16.5742 0.248969C15.8985 0.640206 15.1515 0.924742 14.3335 1.10258C13.6933 0.426804 12.7686 0 11.7727 0C9.85206 0 8.28711 1.56495 8.28711 3.48557C8.28711 3.7701 8.32268 4.01907 8.39382 4.26804C5.51289 4.12577 2.9165 2.73866 1.17371 0.604639C0.889175 1.13814 0.71134 1.70722 0.71134 2.34742C0.71134 3.5567 1.31598 4.62371 2.27629 5.26392C1.70722 5.22835 1.17371 5.08608 0.675773 4.83711V4.87268C0.675773 6.5799 1.88505 8.00258 3.48557 8.32268C3.20103 8.39382 2.88093 8.42938 2.56082 8.42938C2.34742 8.42938 2.09845 8.39382 1.88505 8.35825C2.34742 9.74536 3.62784 10.7768 5.15722 10.7768C3.94794 11.7015 2.45412 12.2706 0.818041 12.2706C0.533505 12.2706 0.248969 12.2706 0 12.2351C1.56495 13.2309 3.37887 13.8 5.37062 13.8C11.8082 13.8 15.3294 8.46495 15.3294 3.84124C15.3294 3.69897 15.3294 3.52113 15.3294 3.37887C16.0052 2.9165 16.6098 2.31186 17.0722 1.60052Z"
                                                            fill="#3FD1FF" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <hr>
                            <div class="product-details">

                                <P style="color:#232532" class="fs-3">Listing Details</P>
                                <p class="category">Category : <span class="inner-text">
                                        <a href="{{ route('public.listings.by_category', $listing->category) }}"
                                           class="inner-text small fw-normal fs-4 me-1">
                                            {{ $listing->category->name }}
                                        </a>
                                    </span></p>
                                <p class="tags">Tags : <span class="inner-text">
                                        @foreach ($listing->tags as $tag)
                                            <a href="{{ route('public.listings.by_tag', $tag) }}"
                                               class="inner-text small fw-normal fs-4 me-1">
                                                {{ $tag->name }}
                                            </a>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </span></p>
                                <p class="sku">Address : <span
                                        class="inner-text">{{ $listing->location->fullAddress }}</span></p>
                            </div>
                            <hr>

                            <div class="product-details">

                                <P style="color:#232532" class="fs-3">Socials</P>

                                <div class="d-flex flex-row gap-4">
                                    <div
                                        style="height: 55px; width: 55px; border: 1px solid ; border-radius: 50%;padding:12px; background: #16a34a; color: white;">
                                        <svg class="" fill="white" viewBox="0 0 24 24">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        style="height: 55px; width: 55px; border: 1px solid ; border-radius: 50%;padding:12px; background-color: #0d6efd;color:white">
                                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div
                                        style="height: 55px; width: 55px; border: 1px solid; border-radius: 50%; padding:12px; background-color: #6f42c1; color:white;">
                                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 12v8a2 2 0 002 2h8M20 4l-8 8M20 4h-6m6 0v6"></path>
                                        </svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- products-info-end--------------->


    <!--------------- products-details-section--------------->
    {{-- <section class="product product-description">
        <div class="container">
            <div class="product-detail-section">
                <nav>
                    <div class="nav nav-tabs nav-item" style="border-bottom: 0" id="nav-tab" role="tablist">

                        <button class="nav-link active" id="bussiness-hours-tab">Bussiness Hours</button>

                    </div>
                </nav>
                <div class="row" style="padding: 0 9px ">

                    <table class="business-hours-table col-lg-6 mb-0 border">
                        <tbody>
                            <tr>
                                <td><strong>Monday</strong></td>
                                <td class="text-center">
                                    <span>
                                        9:00 AM – 5:00 PM
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Tuesday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Wednesday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Thursday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Friday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Saturday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                            <tr>
                                <td><strong>Sunday</strong></td>
                                <td class="text-center">9:00 AM – 5:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="product product-description">
        <div class="container">
            <div class="product-detail-section">

                <div class="tab-content tab-item" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-review" role="tabpanel"
                         aria-labelledby="nav-review-tab" tabindex="0">
                        <div class="product-review-section" data-aos="fade-up">
                            <h5 class="intro-heading">Reviews</h5>

                            <div class="review-wrapper">
                                <div class="wrapper">
                                    <div class="wrapper-aurthor">
                                        <div class="wrapper-info">
                                            <div class="aurthor-img">
                                                <img src="assets/images/homepage-one/aurthor-img-1.webp"
                                                     alt="aurthor-img">
                                            </div>
                                            <div class="author-details">
                                                <h5>Sajjad Hossain</h5>
                                                <p>London, UK</p>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <span>
                                                <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
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
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="wrapper-description">
                                        <p class="wrapper-details">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the redi 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries but also the on leap into electronic typesetting, remaining
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-info-section">
                            <div class="contact-information">
                                {{-- <h5 class="wrapper-heading">Bussiness Hours</h5> --}}
                                {{-- <p class="paragraph">Fill the form below or write us .We will help you as soon as
                                    possible.</p> --}}
                                <div class="contact-wrapper">
                                    <div class="row gy-5">
                                        <div style="margin-top: 0px" class="">
                                            <div class="custom-tab-style active">
                                                Bussiness Hours
                                            </div>
                                            <table class="business-hours-table col-lg-12 mb-0 border">
                                                <tbody>
                                                @foreach ($listing->timings as $timing)
                                                    @if ($timing->is_closed)
                                                        <tr>
                                                            <td><strong>{{ $timing->day }}</strong></td>
                                                            <td class="text-center">
                                                                    <span>
                                                                        Closed
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td><strong>{{ $timing->day }}</strong></td>
                                                            <td class="text-center">
                                                                    <span>
                                                                        {{ date('H:i', strtotime($timing->open_time)) }} AM
                                                                        – {{ date('H:i', strtotime($timing->close_time)) }}
                                                                        PM
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                {{-- <tr>
                                                    <td><strong>Tuesday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Wednesday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Thursday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Friday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Saturday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Sunday</strong></td>
                                                    <td class="text-center">9:00 AM – 5:00 PM</td>
                                                </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- <div class="col-sm-6">
                                            <div class="wrapper phone">
                                                <div class="wrapper-img">
                                                    <span>
                                                        <svg width="44" height="44" viewBox="0 0 44 44"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M22 43C33.598 43 43 33.598 43 22C43 10.402 33.598 1 22 1C10.402 1 1 10.402 1 22C1 33.598 10.402 43 22 43ZM22 44C34.1503 44 44 34.1503 44 22C44 9.84974 34.1503 0 22 0C9.84974 0 0 9.84974 0 22C0 34.1503 9.84974 44 22 44Z"
                                                                fill="#AE1C9A"></path>
                                                            <path
                                                                d="M11.0183 18.6455C11.2024 18.761 11.3464 18.8458 11.4851 18.9382C14.2825 20.8029 17.0792 22.6676 19.8759 24.5331C21.3894 25.5429 22.6125 25.5413 24.1329 24.5277C26.9304 22.663 29.7271 20.7975 32.5237 18.9328C32.6539 18.8465 32.7856 18.7634 32.9659 18.6478C32.9782 18.8042 32.9959 18.9212 32.9959 19.0391C32.9974 22.1169 32.9997 25.1939 32.9959 28.2718C32.9944 29.6582 32.1625 30.4854 30.773 30.4862C24.9186 30.4877 19.0641 30.4877 13.2096 30.4862C11.8456 30.4854 11.0037 29.6543 11.0022 28.3003C10.9983 25.2086 11.0006 22.1169 11.0014 19.0245C11.0022 18.9151 11.0114 18.8065 11.0183 18.6455Z"
                                                                fill="#AE1C9A"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M11.001 19.8174C11.001 19.7663 11.001 19.7152 11.001 19.6641C11.001 19.6641 11.001 19.664 11.001 19.664C11.0011 19.4508 11.0011 19.2376 11.0012 19.0245C11.0017 18.9566 11.0054 18.889 11.0098 18.8091C11.0126 18.7601 11.0155 18.7066 11.0181 18.6455C11.0841 18.6869 11.1449 18.7243 11.2021 18.7596C11.3047 18.8227 11.3959 18.8789 11.4849 18.9382M11.6145 19.0246C11.6167 19.026 11.6188 19.0274 11.6209 19.0288C11.7476 19.1133 11.8744 19.1978 12.0011 19.2823C12.001 19.6829 12.0009 20.0834 12.0008 20.4839C11.6675 20.2617 11.3342 20.0396 11.001 19.8174M19.3208 25.365C16.881 23.7376 14.4411 22.1107 12.0008 20.4839C12.0007 20.616 12.0007 20.7482 12.0006 20.8803C11.9998 23.3541 11.9989 25.8265 12.002 28.299L12.002 28.2991C12.0025 28.7664 12.1435 29.0368 12.2981 29.1898C12.4539 29.344 12.7318 29.4858 13.2097 29.4862L13.2094 30.4862L13.21 29.4862C13.2099 29.4862 13.2098 29.4862 13.2097 29.4862C19.064 29.4877 24.9183 29.4877 30.7726 29.4862L30.7728 30.4829L30.7723 29.4862C30.7724 29.4862 30.7725 29.4862 30.7726 29.4862C31.2688 29.4858 31.5467 29.3418 31.6992 29.1899C31.8512 29.0386 31.9952 28.7634 31.9957 28.2707L31.9957 28.2705C31.999 25.6758 31.9978 23.0816 31.9965 20.4862C32.3297 20.264 32.6629 20.0418 32.9961 19.8196C32.9961 19.7617 32.996 19.7037 32.996 19.6457C32.996 19.6443 32.996 19.6428 32.996 19.6414C32.9959 19.4406 32.9958 19.2399 32.9957 19.0391C32.9957 18.9617 32.9881 18.8846 32.9793 18.7965C32.9748 18.7505 32.9699 18.7014 32.9657 18.6478C32.9212 18.6763 32.8797 18.7029 32.8404 18.728C32.7205 18.8046 32.6216 18.8678 32.5236 18.9328C32.4704 18.9682 32.4173 19.0037 32.3641 19.0391C32.364 19.0392 32.3638 19.0393 32.3637 19.0394C32.2411 19.1212 32.1184 19.2029 31.9958 19.2847C31.996 19.545 31.9961 19.8053 31.9962 20.0655C31.9963 20.2057 31.9964 20.346 31.9965 20.4862C31.3081 20.9452 30.6197 21.4042 29.9313 21.8633C28.1836 23.0288 26.4356 24.1945 24.6874 25.3598L24.1327 24.5277L24.6874 25.3598C24.6874 25.3598 24.6874 25.3598 24.6874 25.3598C23.8278 25.9329 22.9502 26.288 22.0029 26.2892C21.055 26.2904 20.1783 25.9371 19.3208 25.365ZM19.3208 25.365L19.8742 24.5353L19.3207 25.365C19.3207 25.365 19.3208 25.365 19.3208 25.365ZM11.4849 18.9382C11.5281 18.967 11.5713 18.9958 11.6145 19.0246L11.4849 18.9382Z"
                                                                fill="#AE1C9A"></path>
                                                            <path
                                                                d="M22.0007 14.0029C24.963 14.0029 27.9261 13.9983 30.8883 14.0052C32.1292 14.0083 33.0427 14.9295 32.9934 16.1149C32.9633 16.8296 32.5944 17.3418 32.0082 17.7308C29.4226 19.4476 26.8424 21.1722 24.2598 22.8944C23.8793 23.1485 23.5042 23.4112 23.1145 23.6515C22.3766 24.1075 21.6133 24.1275 20.8901 23.6492C17.8839 21.6605 14.8862 19.6594 11.8915 17.6538C11.1213 17.1377 10.8333 16.2889 11.0936 15.4378C11.3547 14.5837 12.1288 14.0068 13.07 14.0045C15.889 13.9968 18.7088 14.0014 21.5278 14.0014C21.6857 14.0029 21.8436 14.0029 22.0007 14.0029Z"
                                                                fill="#AE1C9A"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M32.0082 17.7308C32.5944 17.3418 32.9633 16.8296 32.9934 16.1149C33.0427 14.9295 32.1292 14.0083 30.8883 14.0052C28.7724 14.0003 26.6561 14.0012 24.5399 14.0022C23.6935 14.0025 22.8471 14.0029 22.0007 14.0029C21.8436 14.0029 21.6857 14.0029 21.5278 14.0014C20.759 14.0014 19.9902 14.001 19.2213 14.0007C17.1709 13.9998 15.1202 13.9989 13.07 14.0045C12.1288 14.0068 11.3547 14.5837 11.0936 15.4378C10.8333 16.2889 11.1213 17.1377 11.8915 17.6538C14.8862 19.6594 17.8839 21.6605 20.8901 23.6492C21.6133 24.1275 22.3766 24.1075 23.1145 23.6515C23.3977 23.4769 23.6732 23.2904 23.9487 23.104C24.0523 23.0339 24.1558 22.9638 24.2598 22.8944C24.9163 22.4566 25.5726 22.0186 26.229 21.5807C28.1545 20.2959 30.0799 19.0112 32.0082 17.7308ZM21.4417 22.8151C21.6574 22.9577 21.8376 23.0016 21.9909 23.0007C22.1486 22.9998 22.3464 22.9506 22.5888 22.8008L22.5896 22.8003C22.8536 22.6375 23.1029 22.4688 23.3716 22.287C23.4787 22.2145 23.5889 22.1399 23.7043 22.0628L23.705 22.0624C24.3607 21.6251 25.0165 21.1875 25.6725 20.7499C27.5985 19.4647 29.5255 18.179 31.4551 16.8977L31.4553 16.8976C31.8444 16.6394 31.9808 16.3923 31.9942 16.0729C32.0181 15.4929 31.5978 15.0071 30.886 15.0052M21.4417 22.8151C18.4378 20.8279 15.4419 18.8281 12.4482 16.823L21.4417 22.8151ZM12.0499 15.7302L12.0499 15.7303C11.9179 16.1618 12.0459 16.5534 12.448 16.8229M13.0727 15.0045L13.0724 15.0045C12.5581 15.0057 12.1793 15.3069 12.0499 15.7302M24.5417 15.0022C23.695 15.0025 22.848 15.0029 22.0007 15.0029H21.9984C21.8444 15.0029 21.6841 15.0029 21.523 15.0014C20.7548 15.0014 19.987 15.001 19.2194 15.0007C17.1695 14.9998 15.1212 14.9989 13.0727 15.0045M24.5417 15.0022C26.6573 15.0012 28.7714 15.0003 30.8859 15.0052L24.5417 15.0022Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="wrapper-content">
                                                    <h5 class="wrapper-heading">Email</h5>
                                                    <p class="paragraph"><a
                                                            href="https://quomodothemes.website/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="85d0f6e0f7c5e2e8e4ece9abe6eae8">[email&#160;protected]</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
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
                                                    <div class="address-content">
                                                        <h5 class="wrapper-heading">Address</h5>
                                                        <p class="paragraph">
                                                            {{ $listing->location->fullAddress }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="contact-map">
                                                    <iframe width="100%" height="250" style="border:0;"
                                                            loading="lazy" allowfullscreen
                                                            referrerpolicy="no-referrer-when-downgrade"
                                                            src="https://www.google.com/maps?q={{ $listing->location->latitude }},{{ $listing->location->longitude }}&z=15&output=embed">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-5">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title">Get In Touch</h5>
                                <div class="account-inner-form">
                                    <div class="review-form-name">
                                        <label for="fname" class="form-label">Name*</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" id="email" class="form-control"
                                               placeholder="user@gmail.com">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="subject" class="form-label">Subject*</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="review-textarea">
                                    <label for="floatingTextarea">Massage*</label>
                                    <textarea class="form-control" placeholder="Write Massage..........." id="floatingTextarea" rows="3"></textarea>
                                </div>
                                <div class="login-btn">
                                    <a href="contact-us#" class="shop-btn">Send Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="product weekly-sale product-weekly footer-padding">
        <div class="container">
            <div class="section-title">
                <h5>Recent Listing</h5>
                <a href="product-info#" class="view">View All</a>
            </div>
            <div class="weekly-sale-section">
                <div class="row g-5">
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="product-wrapper" data-aos="fade-up">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-5.webp" alt="product-img">
                                <div class="product-cart-items">
                                    <a href="product-info#" class="cart cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="wishlist" class="favourite cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="#AE1C9A" />
                                                <path
                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                    fill="#000" />
                                            </svg>

                                        </span>
                                    </a>
                                    <a href="compaire" class="compaire cart-item">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="40" height="40" rx="20" fill="white" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                    fill="black" fill-opacity="0.2" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="#181818" />
                                                <path
                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                    fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="ratings">
                                    <span>
                                        <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
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
                                        <span class="price-cut">$32.99</span>
                                        <span class="new-price">$16.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart" class="product-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($recent_listings as $listing)
                        <div class="col-xl-3 col-md-3">
                            <div class="product-wrapper" data-aos="fade-up">
                                <div class="product-img">
                                    {{-- <img src="{{ $listing->thumbnail }}" alt="product-img"> --}}
                                    <img src="{{ Storage::url($listing->thumbnail) }}" alt="{{ $listing->name }}">

                                    {{-- <img src="{{ asset('storage/'Read-only' . $listing->thumbnail) }}" alt="{{ $listing->name }}"> --}}


                                </div>
                                <div class="product-info">
                                    <div class="ratings">
                                        <span>
                                            <svg width="75" height="15" viewBox="0 0 75 15" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
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
                                        <a href="{{ route('public.listing-details', $listing) }}"
                                           class="product-details">
                                            {{ $listing->name }}
                                        </a>
                                        <div class="price">
                                            <span class="">{{ $listing->location->address }}</span>
                                            {{-- <span class="new-price">$6.99</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--------------- weekly-section-end--------------->
@endsection
