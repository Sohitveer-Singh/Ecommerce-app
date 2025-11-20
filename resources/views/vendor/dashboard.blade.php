@extends('layouts.user.app')
@push('styles')
@endpush
@section('content')

    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
             aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="user-profile">
                <div class="user-title">
                    <p class="paragraph">Hello, Sajjad</p>
                    <h5 class="heading">Welcome to your Profile </h5>
                </div>
                <div class="profile-section">
                    <div class="row g-5">
                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Active Listing</p>
                                        <h5 class="mb-0">{{$completedListings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Inactive Listing</p>
                                        <h5 class="mb-0">{{$pendingListings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Total Listing</p>
                                        <h5 class="mb-0">{{$listings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="info-section">
                                <div class="seller-info">
                                    <h5 class="heading">Personal Information</h5>
                                    <div class="info-list">
                                        <div class="info-title">
                                            <p>Name:</p>
                                            <p>Email:</p>
                                            <p>Phone:</p>
                                            <p>City:</p>
                                            <p>Zip:</p>
                                        </div>
                                        <div class="info-details">
                                            <p>Sajjad</p>
                                            <p><a href="https://quomodothemes.website/cdn-cgi/l/email-protection"
                                                  class="__cf_email__"
                                                  data-cfemail="bcd8d9d1d3d9d1ddd5d0fcdbd1ddd5d092dfd3d1">[email&#160;protected]</a>
                                            </p>
                                            <p>023 434 54354</p>
                                            <p>Haydarabad, Rord 34</p>
                                            <p>3454</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="devider"></div>
                                <div class="shop-info">
                                    <h5 class="heading">Shop Information</h5>
                                    <div class="info-list">
                                        <div class="info-title">
                                            <p>Name:</p>
                                            <p>Email:</p>
                                            <p>Phone:</p>
                                            <p>City:</p>
                                            <p>Zip:</p>
                                        </div>
                                        <div class="info-details">
                                            <p>ShopUs Super-Shop</p>
                                            <p><a href="https://quomodothemes.website/cdn-cgi/l/email-protection"
                                                  class="__cf_email__"
                                                  data-cfemail="9afefff7f5fff7fbf3f6dafdf7fbf3f6b4f9f5f7">[email&#160;protected]</a>
                                            </p>
                                            <p>023 434 54354</p>
                                            <p>Haydarabad, Rord 34</p>
                                            <p>3454</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
             aria-labelledby="v-pills-profile-tab" tabindex="0">
            <div class="seller-application-section">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="account-section">
                            <div class="review-form">
                                <div class="account-inner-form">
                                    <div class="review-form-name">
                                        <label for="firname" class="form-label">First Name*</label>
                                        <input type="text" id="firname" class="form-control"
                                               placeholder="First Name">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="latname" class="form-label">Last Name*</label>
                                        <input type="text" id="latname" class="form-control"
                                               placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="account-inner-form">
                                    <div class="review-form-name">
                                        <label for="gmail" class="form-label">Email*</label>
                                        <input type="email" id="gmail" class="form-control"
                                               placeholder="user@gmail.com">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="telephone" class="form-label">Phone*</label>
                                        <input type="tel" id="telephone" class="form-control"
                                               placeholder="+880388**0899">
                                    </div>
                                </div>
                                <div class="review-form-name">
                                    <label for="region" class="form-label">Country*</label>
                                    <select id="region" class="form-select">
                                        <option>Choose...</option>
                                        <option>Bangladesh</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                    </select>
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="addres" class="form-label">Address*</label>
                                    <input type="text" id="addres" class="form-control"
                                           placeholder="Enter your Address">
                                </div>
                                <div class="account-inner-form city-inner-form">
                                    <div class="review-form-name">
                                        <label for="teritory" class="form-label">Town / City*</label>
                                        <select id="teritory" class="form-select">
                                            <option>Choose...</option>
                                            <option>Newyork</option>
                                            <option>Dhaka</option>
                                            <option selected>London</option>
                                        </select>
                                    </div>
                                    <div class="review-form-name">
                                        <label for="post" class="form-label">Postcode / ZIP*</label>
                                        <input type="number" id="post" class="form-control"
                                               placeholder="0000">
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <a href="user-profile#" class="shop-btn cancel-btn">Cancel</a>
                                    <a href="user-profile#" class="shop-btn update-btn">Update Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-upload-section">
                            <div class="logo-wrapper">
                                <h5 class="comment-title">Update Logo</h5>
                                <p class="paragraph">Size300x300. Gifs work
                                    too.Max 5mb.</p>
                                <div class="logo-upload">
                                    <img src="assets/images/homepage-one/sallers-cover.png" alt="upload"
                                         class="upload-img" id="upload-img">
                                    <div class="upload-input">
                                        <label for="input-file">
                                                            <span>
                                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                                                                        fill="white"></path>
                                                                </svg>
                                                            </span>
                                        </label>
                                        <input type="file"
                                               accept="image/jpeg, image/jpg, image/png, image/webp"
                                               id="input-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
             aria-labelledby="v-pills-order-tab" tabindex="0">
            <div class="payment-section">
                <div class="wrapper">
                    <div class="wrapper-item">
                        <div class="wrapper-img">
                            <img src="assets/images/homepage-one/payment-img-1.png" alt="payment">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="heading">Dutch Bangl Bank Lmtd</h5>
                            <p class="paragraph">Bank **********5535</p>
                            <p class="verified">Verified</p>
                        </div>
                    </div>
                    <a href="user-profile#" class="shop-btn">Manage</a>
                </div>
                <hr>
                <div class="wrapper">
                    <div class="wrapper-item">
                        <div class="wrapper-img">
                            <img src="assets/images/homepage-one/payment-img-2.png" alt="payment">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="heading">Master Card</h5>
                            <p class="paragraph">Bank **********5535</p>
                            <p class="verified">Verified</p>
                        </div>
                    </div>
                    <a href="user-profile#" class="shop-btn">Manage</a>
                </div>
                <hr>
                <div class="wrapper">
                    <div class="wrapper-item">
                        <div class="wrapper-img">
                            <img src="assets/images/homepage-one/payment-img-3.png" alt="payment">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="heading">Paypal Account</h5>
                            <p class="paragraph">Bank **********5535</p>
                            <p class="verified">Verified</p>
                        </div>
                    </div>
                    <a href="user-profile#" class="shop-btn">Manage</a>
                </div>
                <hr>
                <div class="wrapper">
                    <div class="wrapper-item">
                        <div class="wrapper-img">
                            <img src="assets/images/homepage-one/payment-img-4.png" alt="payment">
                        </div>
                        <div class="wrapper-content">
                            <h5 class="heading">Visa Card</h5>
                            <p class="paragraph">Bank **********5535</p>
                            <p class="verified">Verified</p>
                        </div>
                    </div>
                    <a href="user-profile#" class="shop-btn">Manage</a>
                </div>
                <hr>
                <div class="wrapper-btn">
                    <a href="user-profile#" class="shop-btn" onclick="modalAction('.cart')">Add Cart</a>

                    <!-- cart-modal -->
                    <div class="modal-wrapper cart">
                        <div onclick="modalAction('.cart')" class="anywhere-away"></div>

                        <!-- change this -->
                        <div class="login-section account-section modal-main">
                            <div class="review-form">
                                <div class="review-content">
                                    <h5 class="comment-title">Add New Card</h5>
                                    <div class="close-btn">
                                        <img src="assets/images/homepage-one/close-btn.png"
                                             onclick="modalAction('.cart')" alt="close-btn">
                                    </div>
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="cnumber" class="form-label">Card Number*</label>
                                    <input type="number" id="cnumber" class="form-control"
                                           placeholder="*** *** ***">
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="holdername" class="form-label">Card Holder Name*</label>
                                    <input type="text" id="holdername" class="form-control"
                                           placeholder="Demo Name">
                                </div>
                                <div class="account-inner-form">
                                    <div class="review-form-name">
                                        <label for="expirydate" class="form-label">Expiry Date*</label>
                                        <input type="date" id="expirydate" class="form-control">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="cvv" class="form-label">CVV*</label>
                                        <input type="number" id="cvv" class="form-control"
                                               placeholder="21232">
                                    </div>
                                </div>
                                <div class="login-btn text-center">
                                    <a href="user-profile#" onclick="modalAction('.cart')"
                                       class="shop-btn">Add
                                        Card</a>
                                </div>
                            </div>
                        </div>
                        <!-- change this -->

                    </div>
                    <a href="user-profile#" class="shop-btn bank-btn" onclick="modalAction('.bank')">Add
                        Bank</a>

                    <!-- bank-modal -->
                    <div class="modal-wrapper bank">
                        <div onclick="modalAction('.bank')" class="anywhere-away"></div>

                        <!-- change this -->
                        <div class="login-section account-section modal-main">
                            <div class="review-form">
                                <div class="review-content">
                                    <h5 class="comment-title">Add Bank Account</h5>
                                    <div class="close-btn">
                                        <img src="assets/images/homepage-one/close-btn.png"
                                             onclick="modalAction('.bank')" alt="close-btn">
                                    </div>
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="accountnumber" class="form-label">Account
                                        Number*</label>
                                    <input type="number" id="accountnumber" class="form-control"
                                           placeholder="*** *** ***">
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="accountholdername" class="form-label">Card Holder
                                        Name*</label>
                                    <input type="text" id="accountholdername" class="form-control"
                                           placeholder="Demo Name">
                                </div>
                                <div class="account-inner-form">
                                    <div class="review-form-name">
                                        <label for="branchname" class="form-label">Branch*</label>
                                        <input type="text" id="branchname" class="form-control"
                                               placeholder="Demo Branch">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="ipscode" class="form-label">IPSC Code</label>
                                        <input type="number" id="ipscode" class="form-control"
                                               placeholder="21232">
                                    </div>
                                </div>
                                <div class="login-btn text-center">
                                    <a href="user-profile#" onclick="modalAction('.bank')"
                                       class="shop-btn">Add Bank
                                        Account</a>
                                </div>
                            </div>
                        </div>
                        <!-- change this -->

                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-order" role="tabpanel"
             aria-labelledby="v-pills-order-tab" tabindex="0">
            <div class="cart-section">
                <table>
                    <tbody>
                    <tr class="table-top-row table-row">
                        <td class="table-wrapper wrapper-product">
                            <h5 class="table-heading">PRODUCT</h5>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">PRICE</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">QUANTITY</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TOTAL</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">ACTION</h5>
                            </div>
                        </td>
                    </tr>
                    <tr class="ticket-row table-row">
                        <td class="table-wrapper wrapper-product">
                            <div class="wrapper">
                                <div class="wrapper-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-1.webp"
                                         alt="img">
                                </div>
                                <div class="wrapper-content">
                                    <h5 class="heading">Classic Design Skart</h5>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$20.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                    <span class="number">1</span>
                                    <span class="plus">
                                                            +
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$40.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                            </div>
                        </td>
                    </tr>
                    <tr class="ticket-row table-row">
                        <td class="table-wrapper wrapper-product">
                            <div class="wrapper">
                                <div class="wrapper-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-2.webp"
                                         alt="img">
                                </div>
                                <div class="wrapper-content">
                                    <h5 class="heading">Classic Black Suit</h5>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$20.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                    <span class="number">1</span>
                                    <span class="plus">
                                                            +
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$40.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                            </div>
                        </td>
                    </tr>
                    <tr class="ticket-row table-row">
                        <td class="table-wrapper wrapper-product">
                            <div class="wrapper">
                                <div class="wrapper-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-3.webp"
                                         alt="img">
                                </div>
                                <div class="wrapper-content">
                                    <h5 class="heading">Blue Party Dress</h5>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$20.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                    <span class="number">1</span>
                                    <span class="plus">
                                                            +
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$40.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                            </div>
                        </td>
                    </tr>
                    <tr class="ticket-row table-row">
                        <td class="table-wrapper wrapper-product">
                            <div class="wrapper">
                                <div class="wrapper-img">
                                    <img src="assets/images/homepage-one/product-img/product-img-4.webp"
                                         alt="img">
                                </div>
                                <div class="wrapper-content">
                                    <h5 class="heading">Classic Party Dress</h5>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$20.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <div class="quantity">
                                                        <span class="minus">
                                                            -
                                                        </span>
                                    <span class="number">1</span>
                                    <span class="plus">
                                                            +
                                                        </span>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="heading">$40.00</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                                    <span>
                                                        <svg width="10" height="10" viewBox="0 0 10 10"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                fill="#AAAAAA"></path>
                                                        </svg>
                                                    </span>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
             aria-labelledby="v-pills-wishlist-tab" tabindex="0">

            <div class="wishlist">
                <div class="cart-content">
                    <h5 class="cart-heading">SpaceRace</h5>
                    <p>Order ID: <span class="inner-text">#4345</span></p>
                </div>
                <div class="cart-section wishlist-section">
                    <table>
                        <tbody>
                        <tr class="table-top-row table-row">
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">PRODUCT</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">PRICE</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-1.webp"
                                             alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Classic Design Skart</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$20.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-2.webp"
                                             alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Classic Black Suit</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$20.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-3.webp"
                                             alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Blue Party Dress</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$20.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="assets/images/homepage-one/product-img/product-img-4.webp"
                                             alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Classic Party Dress</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$20.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                                        <span>
                                                            <svg width="10" height="10" viewBox="0 0 10 10"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                                    fill="#AAAAAA"></path>
                                                            </svg>
                                                        </span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-btn">
                    <a href="user-profile#" class="clean-btn">Clean Wishlist</a>
                    <a href="user-profile#" class="shop-btn">View Cards</a>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
             aria-labelledby="v-pills-address-tab" tabindex="0">
            <div class="profile-section address-section addresses">
                <div class="row gy-md-0 g-5">
                    <div class="col-md-6">
                        <div class="seller-info">
                            <h5 class="heading">Address-01</h5>
                            <div class="info-list">
                                <div class="info-title">
                                    <p>Name:</p>
                                    <p>Email:</p>
                                    <p>Phone:</p>
                                    <p>City:</p>
                                    <p>Zip:</p>
                                </div>
                                <div class="info-details">
                                    <p>Sajjad</p>
                                    <p><a href="https://quomodothemes.website/cdn-cgi/l/email-protection"
                                          class="__cf_email__"
                                          data-cfemail="a2c6c7cfcdc7cfc3cbcee2c5cfc3cbce8cc1cdcf">[email&#160;protected]</a>
                                    </p>
                                    <p>023 434 54354</p>
                                    <p>Haydarabad, Rord 34</p>
                                    <p>3454</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="seller-info">
                            <h5 class="heading">Address-02</h5>
                            <div class="info-list">
                                <div class="info-title">
                                    <p>Name:</p>
                                    <p>Email:</p>
                                    <p>Phone:</p>
                                    <p>City:</p>
                                    <p>Zip:</p>
                                </div>
                                <div class="info-details">
                                    <p>Sajjad</p>
                                    <p><a href="https://quomodothemes.website/cdn-cgi/l/email-protection"
                                          class="__cf_email__"
                                          data-cfemail="5e3a3b33313b333f37321e39333f3732703d3133">[email&#160;protected]</a>
                                    </p>
                                    <p>023 434 54354</p>
                                    <p>Haydarabad, Rord 34</p>
                                    <p>3454</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a href="user-profile#" class="shop-btn" onclick="modalAction('.submit')">Add New
                            Address</a>
                        <!-- modal -->
                        <div class="modal-wrapper submit">
                            <div onclick="modalAction('.submit')" class="anywhere-away"></div>

                            <!-- change this -->
                            <div class="login-section account-section modal-main">
                                <div class="review-form">
                                    <div class="review-content">
                                        <h5 class="comment-title">Add Your Address</h5>
                                        <div class="close-btn">
                                            <img src="assets/images/homepage-one/close-btn.png"
                                                 onclick="modalAction('.submit')" alt="close-btn">
                                        </div>
                                    </div>
                                    <div class="account-inner-form">
                                        <div class="review-form-name">
                                            <label for="firstname" class="form-label">First
                                                Name*</label>
                                            <input type="text" id="firstname" class="form-control"
                                                   placeholder="First Name">
                                        </div>
                                        <div class="review-form-name">
                                            <label for="lastname" class="form-label">Last Name*</label>
                                            <input type="text" id="lastname" class="form-control"
                                                   placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="account-inner-form">
                                        <div class="review-form-name">
                                            <label for="useremail" class="form-label">Email*</label>
                                            <input type="email" id="useremail" class="form-control"
                                                   placeholder="user@gmail.com">
                                        </div>
                                        <div class="review-form-name">
                                            <label for="userphone" class="form-label">Phone*</label>
                                            <input type="tel" id="userphone" class="form-control"
                                                   placeholder="+880388**0899">
                                        </div>
                                    </div>
                                    <div class="review-form-name address-form">
                                        <label for="useraddress" class="form-label">Address*</label>
                                        <input type="text" id="useraddress" class="form-control"
                                               placeholder="Enter your Address">
                                    </div>
                                    <div class="account-inner-form city-inner-form">
                                        <div class="review-form-name">
                                            <label for="usercity" class="form-label">Town /
                                                City*</label>
                                            <select id="usercity" class="form-select">
                                                <option>Choose...</option>
                                                <option>Newyork</option>
                                                <option>Dhaka</option>
                                                <option selected>London</option>
                                            </select>
                                        </div>
                                        <div class="review-form-name">
                                            <label for="usernumber" class="form-label">Postcode /
                                                ZIP*</label>
                                            <input type="number" id="usernumber" class="form-control"
                                                   placeholder="0000">
                                        </div>
                                    </div>
                                    <div class="login-btn text-center">
                                        <a href="user-profile#" onclick="modalAction('.submit')"
                                           class="shop-btn">Add Address</a>
                                    </div>
                                </div>
                            </div>
                            <!-- change this -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-review" role="tabpanel"
             aria-labelledby="v-pills-review-tab" tabindex="0">

            <div class="top-selling-section">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-5.webp"
                                     alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="review-date">
                                    <p>July 22, 2022</p>
                                </div>
                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="product-sidebar" class="product-details">Rainbow
                                        Sequin Dress
                                    </a>
                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                    </p>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart" class="product-btn">Edit Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-6.webp"
                                     alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="review-date">
                                    <p>July 22, 2022</p>
                                </div>
                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="product-sidebar" class="product-details">Rainbow
                                        Sequin Dress
                                    </a>
                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                    </p>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart" class="product-btn">Edit Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-7.webp"
                                     alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="review-date">
                                    <p>July 22, 2022</p>
                                </div>
                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="product-sidebar" class="product-details">Rainbow
                                        Sequin Dress
                                    </a>
                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                    </p>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart" class="product-btn">Edit Review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <img src="assets/images/homepage-one/product-img/product-img-8.webp"
                                     alt="product-img">
                            </div>
                            <div class="product-info">
                                <div class="review-date">
                                    <p>July 22, 2022</p>
                                </div>
                                <div class="ratings">
                                                    <span>
                                                        <svg width="75" height="15" viewBox="0 0 75 15"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="product-sidebar" class="product-details">Rainbow
                                        Sequin Dress
                                    </a>
                                    <p>Didn't I tell you not put your phone on charge because weekend?
                                    </p>
                                </div>
                            </div>
                            <div class="product-cart-btn">
                                <a href="cart" class="product-btn">Edit Review</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-password" role="tabpanel"
             aria-labelledby="v-pills-password-tab" tabindex="0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="form-section">
                        <form action="user-profile#">
                            <div class="currentpass form-item">
                                <label for="currentpass" class="form-label">Current Password*</label>
                                <input type="password" class="form-control" id="currentpass"
                                       placeholder="******">
                            </div>
                            <div class="password form-item">
                                <label for="pass" class="form-label">Password*</label>
                                <input type="password" class="form-control" id="pass"
                                       placeholder="******">
                            </div>
                            <div class="re-password form-item">
                                <label for="repass" class="form-label">Re-enter Password*</label>
                                <input type="password" class="form-control" id="repass"
                                       placeholder="******">
                            </div>
                        </form>
                        <div class="form-btn">
                            <a href="user-profile#" class="shop-btn">Upldate Password</a>
                            <a href="user-profile#" class="shop-btn cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reset-img text-end">
                        <img src="assets/images/homepage-one/reset.webp" alt="reset">
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-ticket" role="tabpanel"
             aria-labelledby="v-pills-ticket-tab" tabindex="0">
            <div class="support-ticket">
                <a href="user-profile#" class="shop-btn" onclick="modalAction('.ticket')">Add New
                    Support</a>

                <!-- ticket-modal -->
                <div class="modal-wrapper ticket">
                    <div onclick="modalAction('.ticket')" class="anywhere-away"></div>

                    <!-- change this -->
                    <div class="login-section account-section modal-main">
                        <div class="review-form">
                            <div class="review-content">
                                <h5 class="comment-title">Add New Ticket</h5>
                                <div class="close-btn">
                                    <img src="assets/images/homepage-one/close-btn.png"
                                         onclick="modalAction('.ticket')" alt="close-btn">
                                </div>
                            </div>
                            <div class="review-form-name address-form">
                                <label for="ticket" class="form-label">First Name*</label>
                                <input type="text" id="ticket" class="form-control"
                                       placeholder="Name">
                            </div>
                            <div class="account-inner-form">
                                <div class="review-form-name">
                                    <label for="ticketaddress" class="form-label">Email Address*</label>
                                    <input type="email" id="ticketaddress" class="form-control"
                                           placeholder="email@gmail.com">
                                </div>
                                <div class="review-form-name">
                                    <label for="ticketphone" class="form-label">Phone Number*</label>
                                    <input type="tel" id="ticketphone" class="form-control"
                                           placeholder="******">
                                </div>
                            </div>
                            <div class="review-form-name address-form">
                                <label for="ticketmassage" class="form-label">Description*</label>
                                <textarea name="ticketmassage" id="ticketmassage" cols="10" rows="3"
                                          class="form-control"
                                          placeholder="Write Here your Description"></textarea>
                            </div>
                            <div class="login-btn text-center">
                                <a href="user-profile#" onclick="modalAction('.ticket')"
                                   class="shop-btn">Add Ticekt
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- change this -->

                </div>
                <div class="ticket-section">
                    <table>
                        <tbody>
                        <tr class="table-top-row table-row">
                            <td class="table-wrapper">
                                <h5 class="table-heading">NO</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">TIME</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">REPORT</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#354</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#355</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#356</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#357</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#358</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#359</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="ticket-row table-row">
                            <td class="table-wrapper">
                                <p class="ticker-number">#360</p>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-date">11th Oct, 2023</p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <p class="ticket-info">Printing and typesetting industry
                                        standard <span class="inner-text">dummy text ever
                                                                since</span></p>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center table-wrapper-img">
                                    <div class="comment-img">
                                                            <span>
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.34526 0.0234375C12.2264 0.133021 14.9269 1.30005 16.7549 4.04172C18.878 7.22662 18.2288 11.3601 15.1868 13.87C12.3535 16.2076 9.12958 16.6592 5.65976 15.5326C5.41809 15.4537 5.23754 15.4516 5.0071 15.5696C3.56972 16.3032 2.03046 16.7262 0.439223 16.9705C0.315577 16.9893 0.142753 16.923 0.0528284 16.8351C0.000840854 16.7841 0.0268346 16.5747 0.0914679 16.4986C0.912029 15.5403 1.12209 14.3635 1.33847 13.1811C1.42909 12.6855 1.33144 12.2891 1.06799 11.8466C-1.05226 8.27848 0.068284 3.93424 3.68564 1.57994C5.29725 0.530871 7.07607 0.043679 9.34526 0.0234375ZM7.79406 8.08444C7.80179 8.72589 8.33993 9.25705 8.98556 9.25845C9.64384 9.25984 10.189 8.71053 10.1813 8.05373C10.1735 7.40461 9.64665 6.88949 8.98978 6.8881C8.31886 6.8874 7.78633 7.42066 7.79406 8.08444ZM4.80618 6.8874C4.14018 6.87972 3.59009 7.41647 3.5915 8.07118C3.5929 8.70844 4.12894 9.24588 4.77457 9.25845C5.41809 9.27031 5.96326 8.74613 5.97731 8.10259C5.99206 7.42834 5.4778 6.89508 4.80618 6.8874ZM11.9966 8.08235C12.0022 8.72868 12.532 9.25635 13.1797 9.25984C13.8316 9.26333 14.3923 8.70355 14.3838 8.05722C14.3747 7.41298 13.8415 6.89089 13.1895 6.8888C12.5151 6.886 11.991 7.41089 11.9966 8.08235Z"
                                                                        fill="#27AE60"/>
                                                                </svg>
                                                            </span>
                                    </div>
                                    <div class="delete-img">
                                                            <span>
                                                                <svg width="16" height="19" viewBox="0 0 16 19"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.7879 5.95508C14.7102 6.91333 14.6353 7.84896 14.5582 8.7853C14.3801 10.9315 14.2028 13.0776 14.0219 15.2238C13.9604 15.9503 13.9208 16.6802 13.8176 17.4018C13.7074 18.1756 13.0827 18.719 12.3039 18.7225C9.39528 18.7352 6.48733 18.7367 3.57867 18.7218C2.71582 18.7176 2.09748 18.0823 2.01904 17.158C1.79291 14.4959 1.58161 11.8332 1.36254 9.17114C1.28269 8.19735 1.19859 7.22426 1.11733 6.25117C1.10955 6.15931 1.10673 6.06744 1.10107 5.95578C5.66688 5.95508 10.2171 5.95508 14.7879 5.95508ZM4.26485 8.06096C4.26343 8.06096 4.26272 8.06096 4.26131 8.06096C4.28675 8.46023 4.31219 8.8595 4.33692 9.25877C4.47826 11.5258 4.61818 13.7921 4.76234 16.0591C4.78354 16.3926 5.0019 16.6067 5.29305 16.6053C5.59834 16.6039 5.81175 16.3665 5.8167 16.0188C5.81811 15.9368 5.81246 15.8541 5.8068 15.7722C5.66476 13.4818 5.52413 11.1915 5.37997 8.90119C5.34959 8.41995 5.32273 7.938 5.27256 7.45817C5.24076 7.15783 5.04289 7.00025 4.74185 7.00095C4.45635 7.00166 4.25142 7.22143 4.24153 7.53166C4.23729 7.70833 4.25707 7.885 4.26485 8.06096ZM11.6213 8.05813C11.6199 8.05813 11.6185 8.05813 11.6171 8.05813C11.6262 7.89348 11.6432 7.72883 11.6418 7.56488C11.6397 7.24758 11.451 7.0271 11.1733 7.00166C10.8991 6.97622 10.6595 7.16561 10.6072 7.46736C10.5775 7.64049 10.5726 7.81787 10.5613 7.99383C10.4737 9.39092 10.386 10.788 10.2998 12.1851C10.2214 13.4529 10.1387 14.7213 10.0687 15.9898C10.049 16.346 10.2574 16.5848 10.5606 16.6032C10.8673 16.6223 11.0991 16.4046 11.121 16.0534C11.2899 13.3886 11.4552 10.7237 11.6213 8.05813ZM8.47025 11.8169C8.47025 10.4757 8.47096 9.1344 8.47025 7.79384C8.47025 7.25394 8.29712 6.99742 7.93954 6.99954C7.57914 7.00095 7.41307 7.25111 7.41307 7.79879C7.41236 10.4693 7.41236 13.1398 7.41378 15.8103C7.41378 15.951 7.38197 16.1319 7.45405 16.2223C7.58055 16.3792 7.77701 16.5778 7.94307 16.5771C8.10914 16.5764 8.30418 16.3757 8.42856 16.2181C8.50064 16.1269 8.46813 15.946 8.46813 15.8061C8.47166 14.4754 8.47025 13.1462 8.47025 11.8169Z"
                                                                        fill="#EB5757"/>
                                                                    <path
                                                                        d="M4.21259 2.75226C4.22602 2.49644 4.22955 2.29646 4.24863 2.09788C4.32848 1.26118 4.94611 0.650617 5.78564 0.63931C7.22231 0.62023 8.66039 0.62023 10.0971 0.63931C10.9366 0.650617 11.5549 1.26048 11.6348 2.09718C11.6539 2.29575 11.6574 2.49574 11.6694 2.7353C11.7966 2.74095 11.9196 2.75085 12.0425 2.75155C12.9379 2.75297 13.8332 2.74873 14.7286 2.75367C15.4197 2.75721 15.8868 3.18969 15.8861 3.81439C15.8854 4.43838 15.419 4.87298 14.7272 4.87369C10.2038 4.87581 5.67964 4.87581 1.15623 4.87369C0.464398 4.87298 -0.0027105 4.43909 -0.00341717 3.8151C-0.00412384 3.1911 0.462987 2.75721 1.15411 2.75438C2.16536 2.74873 3.17661 2.75226 4.21259 2.75226ZM10.591 2.7353C10.591 2.59821 10.5917 2.49291 10.591 2.38832C10.5861 1.86821 10.4129 1.69508 9.88717 1.69437C8.56993 1.69296 7.2534 1.69155 5.93616 1.69508C5.49661 1.69649 5.31147 1.8774 5.2938 2.30706C5.28815 2.44415 5.29309 2.58195 5.29309 2.7353C7.06967 2.7353 8.80525 2.7353 10.591 2.7353Z"
                                                                        fill="#EB5757"/>
                                                                </svg>

                                                            </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
@push('scripts')
@endpush
