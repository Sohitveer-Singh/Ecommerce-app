@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <!--------------- products-sidebar-section--------------->
    <section class="product product-sidebar footer-padding">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-12">
                    <div class="product-sidebar-section" data-aos="fade-up">
                        <div class="row g-5">

                            <div class="category-section">
                                @foreach($categories as $category)

                                    <div class="product-wrapper" data-aos="fade-right"
                                         data-aos-duration="{{100 * $loop->iteration }}">
                                        <a href="{{route('public.listings.by_category',$category)}}">
                                            <div class="wrapper-img">
                                                <img src="{{$category->thumbnail_url}}" alt="dress">
                                            </div>
                                            <div class="wrapper-info">
                                                <span class="wrapper-details">{{$category->name}}</span>
                                            </div>
                                        </a>
                                    </div>

                                @endforeach
                            </div>  </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--------------- products-sidebar-section-end--------------->
@endsection
