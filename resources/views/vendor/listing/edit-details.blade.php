@extends('layouts.app')
@push('styles')
    <style>
        .input-basic {
            width: 100%;
            padding: 1rem 2rem;
            height: 5rem;
            font-size: 1.4rem;
            font-family: "Jost", sans-serif;
            color: #232532;
            border: 1px solid rgba(174, 28, 154, 0.08);
            border-radius: 0.5rem;
            box-shadow: none;
        }

        .input-basic::placeholder {
            color: #797979;
        }

        .input-basic:focus {
            border-color: rgba(174, 28, 154, 0.08);
            outline: none;
        }

        .input-basic.textarea {
            padding: 3rem;
            height: auto;
        }

        .label-basic {
            font-family: "Jost", sans-serif;
            font-size: 1.5rem;
            color: #797979;
            margin-bottom: 0.5rem;
            display: block;
            margin-left: 4px;
        }
    </style>
@endpush
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-7 order-lg-2">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title" style="margin-bottom: 4px">Enter Your Business Details</h5>
                                <p class="d-none d-lg-block paragraph pb-5 text-center">Provide the essential
                                    information
                                    about your
                                    business so we can display accurate details to your customers.</p>
                                <form action="{{ route('vendor.listing.basic-details.update',$listing) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-4">

                                        <div class="col-lg-12">
                                            <label class="label-basic">Business Name*</label>
                                            <input type="text" name="name" class="input-basic" placeholder="Name"
                                                   value="{{old('name', $listing->name ?? '')}}" required>
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="label-basic">Business Description*</label>
                                            <textarea name="description" class="input-basic textarea" rows="3"
                                                      placeholder="Write Message..." required>
                                                {{ old('description', $listing->description ?? '') }}
                                            </textarea>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">Email Address*</label>
                                            <input type="email" name="email" class="input-basic"
                                                   value="{{old('email', $listing->email ?? '')}}" placeholder="Email Address" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">Contact Person Name*</label>
                                            <input type="text" name="contact_person" class="input-basic"
                                                   value="{{old('contact_person', $listing->contact_person ?? '')}}" placeholder="Name" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">Mobile Number*</label>
                                            <input type="text" name="mobile" class="input-basic"
                                                   value="{{old('mobile', $listing->mobile ?? '')}}" placeholder="Mobile Number" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">Alt Mobile Number*</label>
                                            <input type="text" name="alt_mobile" class="input-basic"
                                                   value="{{old('alt_mobile', $listing->alt_mobile ?? '')}}" placeholder="Mobile Number" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">WhatsApp Number*</label>
                                            <input type="text" name="whatsapp_no" class="input-basic"
                                                   value="{{old('whatsapp_no', $listing->whatsapp_no ?? '')}}" placeholder="WhatsApp Number">
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="label-basic">GST Number*</label>
                                            <input type="text" name="gst_number" class="input-basic"
                                                   value="{{old('gst_number', $listing->gst_number ?? '')}}" placeholder="GST Number" maxlength="15">
                                        </div>

                                    </div>

                                    <div class="login-btn">
                                        <button type="submit" class="shop-btn">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="contact-info-section">
                            <div class="contact-information">
                                {{-- <h5 class="d-none d-lg-block wrapper-heading">Business Details</h5> --}}
                                <style>
                                    /* Default (mobile first) = 40px */
                                    .step-circle {
                                        width: 40px;
                                        height: 40px;
                                    }

                                    /* Increase size on md and above */
                                    @media (min-width: 768px) {
                                        .step-circle {
                                            width: 60px;
                                            height: 60px;
                                        }
                                    }

                                    /* Line size also responsive */
                                    .step-line {
                                        width: 25px;
                                        border: 1px solid #0d6efd;
                                    }

                                    @media (min-width: 768px) {
                                        .step-line {
                                            width: 40px;
                                        }
                                    }
                                </style>


{{--                                <div class="d-flex align-items-center">--}}

{{--                                    <!-- Step 1 (Active) -->--}}
{{--                                    <div--}}
{{--                                        class="rounded-circle border-primary bg-primary d-flex justify-content-center align-items-center step-circle border border-2">--}}
{{--                                        <span class="fs-4 fs-md-1 text-white">1</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="step-line"></div>--}}

{{--                                    <!-- Step 2 -->--}}
{{--                                    <div--}}
{{--                                        class="rounded-circle d-flex justify-content-center align-items-center border-primary step-circle border border-2 bg-white">--}}
{{--                                        <span class="text-primary fs-4 fs-md-1">2</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="step-line"></div>--}}

{{--                                    <!-- Step 3 -->--}}
{{--                                    <div--}}
{{--                                        class="rounded-circle d-flex justify-content-center align-items-center border-primary step-circle border border-2 bg-white">--}}
{{--                                        <span class="text-primary fs-4 fs-md-1">3</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="step-line"></div>--}}

{{--                                    <!-- Step 4 -->--}}
{{--                                    <div--}}
{{--                                        class="rounded-circle d-flex justify-content-center align-items-center border-primary step-circle border border-2 bg-white">--}}
{{--                                        <span class="text-primary fs-4 fs-md-1">4</span>--}}
{{--                                    </div>--}}

{{--                                    <div class="step-line"></div>--}}

{{--                                    <!-- Step 5 -->--}}
{{--                                    <div--}}
{{--                                        class="rounded-circle d-flex justify-content-center align-items-center border-primary step-circle border border-2 bg-white">--}}
{{--                                        <span class="text-primary fs-4 fs-md-1">5</span>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

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
