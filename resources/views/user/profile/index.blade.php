@extends('layouts.user.app')
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

        .custom-rounded-btn {
            position: relative;
            display: inline-block;
            height: 45px;
            padding: 12px 14px;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;

            width: 168.734px;

            font-family: Inter, sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            text-align: center;
            text-decoration: none;
            color: #fff;

            background-color: rgb(174, 28, 154);
            border-radius: 30px;
            margin-left: 8px;

            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-rounded-btn:hover {
            /* opacity: 0.85; */

            background-color: rgb(174, 28, 154);
        }

    </style>
@endpush

@section('content')
    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

        <div class="tab-pane fade show active" id="v-pills-order" role="tabpanel"
             aria-labelledby="v-pills-order-tab" tabindex="0">
            <div class="user-profile">
                <div class="user-title">
                    <p class="paragraph">Hello, Sajjad</p>
                    <h5 class="heading">Welcome to your Listings </h5>
                </div>

                <div class="profile-section">
                    <div class="row g-5">
                        <div class="col-12">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Profile
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Financials
                                    </button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contact" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">Firm
                                    </button>
                                    <button class="nav-link" id="nav-loan-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-loan" type="button" role="tab"
                                            aria-controls="nav-loan" aria-selected="false">Loan
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab" tabindex="0">

                                    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                                        <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab" tabindex="0">
                                            <div class="seller-application-section">
                                                <form action="{{ route('user.profile.update') }}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row mx-3 mx-lg-0 ">
                                                        <div class=" order-2 order-lg-1 col-lg-7">

                                                            @if(session('success'))
                                                                <div
                                                                    class="alert alert-success">{{ session('success') }}</div>
                                                            @endif

                                                            <div class="row g-4 mt-5">

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">First Name*</label>
                                                                    <input type="text" class="input-basic"
                                                                           name="first_name"
                                                                           value="{{ old('first_name', auth()->user()->first_name) }}"
                                                                           placeholder="First Name" required>
                                                                    @error('first_name') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Last Name*</label>
                                                                    <input type="text" class="input-basic"
                                                                           name="last_name"
                                                                           value="{{ old('last_name', auth()->user()->last_name) }}"
                                                                           placeholder="Last Name" required>
                                                                    @error('last_name') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Email*</label>
                                                                    <input type="email" class="input-basic" name="email"
                                                                           value="{{ old('email', auth()->user()->email) }}"
                                                                           placeholder="user@gmail.com" required>
                                                                    @error('email') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Phone*</label>
                                                                    <input type="text" class="input-basic" name="phone"
                                                                           value="{{ old('phone', auth()->user()->phone) }}"
                                                                           placeholder="+91 8909998989" required>
                                                                    @error('phone') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Address*</label>
                                                                    <input type="text" class="input-basic"
                                                                           name="address"
                                                                           value="{{ old('address', auth()->user()->address) }}"
                                                                           placeholder="Enter Your Address" required>
                                                                    @error('address') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-6">
                                                                    <label class="label-basic">Country*</label>
                                                                    <select name="country" class="input-basic" required>
                                                                        <option value="">Select</option>
                                                                        @foreach(config('countries') as $code => $name)
                                                                            <option value="{{ $code }}"
                                                                                {{ old('country', auth()->user()->country) == $code ? 'selected' : '' }}>
                                                                                {{ $name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('country') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">City*</label>
                                                                    <input type="text" class="input-basic" name="city"
                                                                           value="{{ old('city', auth()->user()->city) }}"
                                                                           placeholder="City" required>
                                                                    @error('city') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">District*</label>
                                                                    <input type="text" class="input-basic"
                                                                           name="district"
                                                                           value="{{ old('district', auth()->user()->district) }}"
                                                                           placeholder="District" required>
                                                                    @error('district') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Pincode*</label>
                                                                    <input type="text" class="input-basic"
                                                                           name="pincode"
                                                                           value="{{ old('pincode', auth()->user()->pincode) }}"
                                                                           placeholder="Pincode" required>
                                                                    @error('pincode') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12 mt-5">
                                                                    <div class="form-btn">
                                                                        {{-- CHANGED: From <a> to <button> to enable form submission --}}
                                                                        <button type="submit"
                                                                                style="margin: 0; border:none; cursor:pointer;"
                                                                                class="shop-btn cancel-btn">
                                                                            Update
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class=" order-1 order-lg-2 mt-2  col-lg-5">
                                                            <div class="img-upload-section mt-5">
                                                                <div class="logo-wrapper">
                                                                    <h5 class="comment-title">Update Logo</h5>
                                                                    <p class="paragraph">Size 300x300. Max 5mb.</p>

                                                                    <div class="logo-upload">
                                                                        {{-- Logic: Show uploaded image if exists, else show default --}}
                                                                        <img
                                                                            src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('assets/images/homepage-one/sallers-cover.png') }}"
                                                                            alt="upload" class="upload-img"
                                                                            id="upload-img">

                                                                        <div class="upload-input">
                                                                            <label for="input-file">
                                <span>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                            fill="white"></path>
                                        <path
                                            d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                                                                            </label>
                                                                            <input type="file" name="profile_picture"
                                                                                   accept="image/jpeg, image/jpg, image/png, image/webp"
                                                                                   id="input-file"
                                                                                   onchange="document.getElementById('upload-img').src = window.URL.createObjectURL(this.files[0])">
                                                                        </div>
                                                                    </div>
                                                                    @error('profile_photo') <small
                                                                        class="text-danger">{{ $message }}</small> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>


                                    </div>

                                </div>
{{--skas--}}
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab" tabindex="0">
                                    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                                        <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab" tabindex="0">
                                            <div class="seller-application-section">
                                                <div class="row mx-3 mx-lg-0 ">
                                                    <div class=" col-lg-12">
                                                        <form action="{{ route('user.profile.update-financials') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="row g-4 mt-5">

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Upi Id*</label>
                                                                    <input type="text" class="input-basic" name="upi_id"
                                                                           value="{{ old('upi_id', auth()->user()->upi_id) }}"
                                                                           placeholder="Enter Your Upi Id" required>
                                                                    @error('upi_id') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Pan Card Number*</label>
                                                                    <input type="text" class="input-basic" name="pan_number" style="text-transform: uppercase"
                                                                           value="{{ old('pan_number', auth()->user()->pan_number) }}"
                                                                           placeholder="Pan Number" required>
                                                                    @error('pan_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Pan Card Picture*</label>
                                                                    <input type="file" class="input-basic" name="pan_photo"
                                                                           accept="image/*,application/pdf">
                                                                    @if(auth()->user()->pan_photo_path)
                                                                        <small class="text-success">✓ File currently uploaded</small>
                                                                    @endif
                                                                    @error('pan_photo') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Aadhar Card Number*</label>
                                                                    <input type="text" class="input-basic" name="aadhar_number"
                                                                           value="{{ old('aadhar_number', auth()->user()->aadhar_number) }}"
                                                                           placeholder="Aadhar Number" required>
                                                                    @error('aadhar_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Aadhar Card Picture*</label>
                                                                    <input type="file" class="input-basic" name="aadhar_photo"
                                                                           accept="image/*,application/pdf">
                                                                    @if(auth()->user()->aadhar_photo_path)
                                                                        <small class="text-success">✓ File currently uploaded</small>
                                                                    @endif
                                                                    @error('aadhar_photo') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Father Name*</label>
                                                                    <input type="text" class="input-basic" name="father_name"
                                                                           value="{{ old('father_name', auth()->user()->father_name) }}"
                                                                           placeholder="Enter Father Name" required>
                                                                    @error('father_name') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Upload QR Code (Optional)</label>
                                                                    <input type="file" class="input-basic" name="upi_qr"
                                                                           accept="image/*">
                                                                    @if(auth()->user()->upi_qr_path)
                                                                        <small class="text-success">✓ File currently uploaded</small>
                                                                    @endif
                                                                    @error('upi_qr') <small class="text-danger">{{ $message }}</small> @enderror

                                                                </div>

                                                                <div class="col-lg-12 mt-5">
                                                                    <div class="form-btn">
                                                                        <button type="submit" style="margin: 0; border:none; cursor:pointer;"
                                                                                class="shop-btn cancel-btn">
                                                                            Update KYC
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
{{----}}
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                     aria-labelledby="nav-contact-tab" tabindex="0">
                                    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                                        <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab" tabindex="0">
                                            <div class="seller-application-section">
                                                <form action="{{ route('user.profile.update-firm') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row mx-3 mx-lg-0">
                                                        <div class="col-lg-12">

                                                            @if(session('success'))
                                                                <div class="alert alert-success">{{ session('success') }}</div>
                                                            @endif

                                                            <div class="row g-4 mt-5">

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Firm Name*</label>
                                                                    <input type="text" class="input-basic" name="firm_name"
                                                                           value="{{ old('firm_name', auth()->user()->firm_name) }}"
                                                                           placeholder="Enter Firm Name" required>
                                                                    @error('firm_name') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Firm Type*</label>
                                                                    <select name="firm_type" class="input-basic" required>
                                                                        <option value="">Select Type</option>
                                                                        @php
                                                                            $types = ['Proprietorship', 'Partnership', 'LLP', 'Pvt Ltd', 'Public Ltd', 'Other'];
                                                                        @endphp
                                                                        @foreach($types as $type)
                                                                            <option value="{{ $type }}"
                                                                                {{ old('firm_type', auth()->user()->firm_type) == $type ? 'selected' : '' }}>
                                                                                {{ $type }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('firm_type') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">GST Number*</label>
                                                                    <input type="text" class="input-basic" name="gst_number"
                                                                           style="text-transform: uppercase"
                                                                           value="{{ old('gst_number', auth()->user()->gst_number) }}"
                                                                           placeholder="GSTIN Number" required>
                                                                    @error('gst_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Composition Number (Optional)</label>
                                                                    <input type="text" class="input-basic" name="composition_number"
                                                                           value="{{ old('composition_number', auth()->user()->composition_number) }}"
                                                                           placeholder="Enter Composition Scheme Number">
                                                                    @error('composition_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Firm Address*</label>
                                                                    <textarea class="input-basic" name="firm_address" rows="3"
                                                                              style="height: auto; padding-top: 15px;"
                                                                              placeholder="Enter Complete Firm Address" required>{{ old('firm_address', auth()->user()->firm_address) }}</textarea>
                                                                    @error('firm_address') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12 mt-5">
                                                                    <div class="form-btn">
                                                                        <button type="submit" style="margin: 0; border:none; cursor:pointer;"
                                                                                class="shop-btn cancel-btn">
                                                                            Update Firm Details
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
{{--                                                <div class="row mx-3 mx-lg-0 ">--}}
{{--                                                    <div class=" order-2 order-lg-1 col-lg-7">--}}

{{--                                                        <div class="row g-4 mt-5">--}}

{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">First Name*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="First Name">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">Last Name*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="Last Name">--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">Email*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="user@gmail.com">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">Phone*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="+91 8909998989">--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-12">--}}
{{--                                                                <label class="label-basic">Country*</label>--}}
{{--                                                                <select name="country" class="input-basic" required>--}}
{{--                                                                    <option value="">Select</option>--}}

{{--                                                                    @foreach(config('countries') as $code => $name)--}}
{{--                                                                        <option--}}
{{--                                                                            value="{{ $code }}" {{ old('country') == $code ? 'selected' : '' }}>--}}
{{--                                                                            {{ $name }}--}}
{{--                                                                        </option>--}}
{{--                                                                    @endforeach--}}

{{--                                                                </select>--}}
{{--                                                                @error('country')--}}
{{--                                                                <small class="text-danger">{{ $message }}</small>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-lg-12">--}}
{{--                                                                <label class="label-basic">Address*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="Enter Your Address">--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">District*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="District">--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <label class="label-basic">City*</label>--}}
{{--                                                                <input type="text" class="input-basic"--}}
{{--                                                                       placeholder="City">--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-lg-12 mt-5">--}}
{{--                                                                <div class="form-btn">--}}
{{--                                                                    <a href="user-profile#" style="margin: 0;"--}}
{{--                                                                       class="shop-btn cancel-btn">--}}
{{--                                                                        Update--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class=" order-1 order-lg-2 mt-2  col-lg-5">--}}
{{--                                                        <div class="img-upload-section mt-5">--}}
{{--                                                            <div class="logo-wrapper">--}}
{{--                                                                <h5 class="comment-title">Update Logo</h5>--}}
{{--                                                                <p class="paragraph">Size300x300. Gifs work--}}
{{--                                                                    too.Max 5mb.</p>--}}
{{--                                                                <div class="logo-upload">--}}
{{--                                                                    <img--}}
{{--                                                                        src="assets/images/homepage-one/sallers-cover.png"--}}
{{--                                                                        alt="upload" class="upload-img" id="upload-img">--}}
{{--                                                                    <div class="upload-input">--}}
{{--                                                                        <label for="input-file">--}}
{{--                                                            <span>--}}
{{--                                                                <svg width="32" height="32" viewBox="0 0 32 32"--}}
{{--                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                    <path--}}
{{--                                                                        d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"--}}
{{--                                                                        fill="white"></path>--}}
{{--                                                                    <path--}}
{{--                                                                        d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"--}}
{{--                                                                        fill="white"></path>--}}
{{--                                                                </svg>--}}
{{--                                                            </span>--}}
{{--                                                                        </label>--}}
{{--                                                                        <input type="file"--}}
{{--                                                                               accept="image/jpeg, image/jpg, image/png, image/webp"--}}
{{--                                                                               id="input-file">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-loan" role="tabpanel"
                                     aria-labelledby="nav-loan-tab" tabindex="0">
                                    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

                                        <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
                                             aria-labelledby="v-pills-profile-tab" tabindex="0">
                                            <div class="seller-application-section">
                                                <form action="{{ route('user.profile.update-firm') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row mx-3 mx-lg-0">
                                                        <div class="col-lg-12">

                                                            @if(session('success'))
                                                                <div class="alert alert-success">{{ session('success') }}</div>
                                                            @endif

                                                            <div class="row g-4 mt-5">

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Firm Name*</label>
                                                                    <input type="text" class="input-basic" name="firm_name"
                                                                           value="{{ old('firm_name', auth()->user()->firm_name) }}"
                                                                           placeholder="Enter Firm Name" required>
                                                                    @error('firm_name') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">Firm Type*</label>
                                                                    <select name="firm_type" class="input-basic" required>
                                                                        <option value="">Select Type</option>
                                                                        @php
                                                                            $types = ['Proprietorship', 'Partnership', 'LLP', 'Pvt Ltd', 'Public Ltd', 'Other'];
                                                                        @endphp
                                                                        @foreach($types as $type)
                                                                            <option value="{{ $type }}"
                                                                                {{ old('firm_type', auth()->user()->firm_type) == $type ? 'selected' : '' }}>
                                                                                {{ $type }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('firm_type') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label class="label-basic">GST Number*</label>
                                                                    <input type="text" class="input-basic" name="gst_number"
                                                                           style="text-transform: uppercase"
                                                                           value="{{ old('gst_number', auth()->user()->gst_number) }}"
                                                                           placeholder="GSTIN Number" required>
                                                                    @error('gst_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Composition Number (Optional)</label>
                                                                    <input type="text" class="input-basic" name="composition_number"
                                                                           value="{{ old('composition_number', auth()->user()->composition_number) }}"
                                                                           placeholder="Enter Composition Scheme Number">
                                                                    @error('composition_number') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label class="label-basic">Firm Address*</label>
                                                                    <textarea class="input-basic" name="firm_address" rows="3"
                                                                              style="height: auto; padding-top: 15px;"
                                                                              placeholder="Enter Complete Firm Address" required>{{ old('firm_address', auth()->user()->firm_address) }}</textarea>
                                                                    @error('firm_address') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>

                                                                <div class="col-lg-12 mt-5">
                                                                    <div class="form-btn">
                                                                        <button type="submit" style="margin: 0; border:none; cursor:pointer;"
                                                                                class="shop-btn cancel-btn">
                                                                            Update Firm Details
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    {{--    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#completedListingsTable').DataTable({--}}
    {{--                "order": [--}}
    {{--                    [3, "desc"]--}}
    {{--                ],--}}
    {{--                // Add this language option--}}
    {{--                "language": {--}}
    {{--                    "emptyTable": "No completed listings found."--}}
    {{--                }--}}
    {{--            });--}}
    {{--            $('#pendingListingsTable').DataTable({--}}
    {{--                "order": [--}}
    {{--                    [3, "desc"]--}}
    {{--                ],--}}
    {{--                // Add this language option--}}
    {{--                "language": {--}}
    {{--                    "emptyTable": "No pending listings found."--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endpush
