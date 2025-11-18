@extends('layouts.app')
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-7 order-2">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title">Enter Your Business Address</h5>

                                <form action="{{ route('user.listing.address.store', $listing) }}" method="POST"
                                      id="businessForm" class="account-inner-form">
                                    @csrf

                                    <div class="review-form-name">
                                        <label for="address" class="form-label">Address*</label>
                                        <input type="text" id="address" name="address" class="form-control"
                                               placeholder="Full Address" required>
                                    </div>

                                    <div class="review-form-name">
                                        <label for="pincode" class="form-label">Pincode*</label>
                                        <div class="input-group">
                                            <input type="text" id="pincode" name="pincode" class="form-control"
                                                   placeholder="Enter 6-digit pincode" maxlength="6" pattern="[0-9]{6}"
                                                   required>
                                            <button type="button" id="verifyPincode" class="btn btn-primary shop-btn-sm">
                                                <span id="verifyText">Verify</span>
                                                <span id="loadingSpinner" class="d-none">
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                          aria-hidden="true"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <p id="pincodeError" class="text-danger d-none mt-1">Invalid pincode format.
                                        </p>
                                    </div>

                                    <div class="review-form-name">
                                        <label for="city" class="form-label">City*</label>
                                        <input type="text" id="city" name="city" class="form-control"
                                               placeholder="City" required>
                                    </div>
                                    <div class="review-form-name">
                                        <label for="state" class="form-label">State*</label>
                                        <input type="text" id="state" name="state" class="form-control"
                                               placeholder="State" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="address">
                                            <div class="contact-address">
                                                <label class="form-label">Confirm Location on Map*</label>
                                            </div>
                                            <div class="contact-map">
                                                <div id="map"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" id="latitude" name="latitude">
                                    <input type="hidden" id="longitude" name="longitude">
                                    <input type="hidden" id="full_address" name="full_address">

                                    <div class="login-btn">
                                        <button type="submit" class="shop-btn">Submit Address</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1">
                        <div class="contact-information">
                            {{-- <h5 class="d-none d-lg-block wrapper-heading">Business Details</h5> --}}
                            {{-- <div class="d-flex justify-content-center justify-content-lg-start align-items-center">

                                    <div class="rounded-circle border-primary bg-primary d-flex justify-content-center align-items-center border border-2"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-1 text-white">1</span>
                                    </div>

                                    <div style="border: 1px solid;width:40px; "></div>
                                    <div class="rounded-circle border-primary bg-primary d-flex justify-content-center align-items-center border border-2"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-1 text-white">2</span>
                                    </div>

                                    <div style="border: 1px solid;width:40px; "></div>
                                    <div class="rounded-circle border-primary bg-primary d-flex justify-content-center align-items-center border border-2"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-1 text-white">3</span>
                                    </div>
                                    <div style="border: 1px solid;width:40px; "></div>
                                    <div class="rounded-circle border-primary d-flex justify-content-center align-items-center border border-2 bg-white"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-1 text-primary">4</span>
                                    </div>
                                    <div style="border: 1px solid;width:40px; "></div>
                                    <div class="rounded-circle border-primary d-flex justify-content-center align-items-center border border-2 bg-white"
                                        style="width: 60px; height: 60px;">
                                        <span class="fs-1 text-primary">5</span>
                                    </div>
                                </div> --}}
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
                                    class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle border border-2 bg-white">
                                    <span class="fs-4 fs-md-1 text-primary">3</span>
                                </div>

                                <div class="step-line"></div>

                                <!-- ✅ Step 4 -->
                                <div
                                    class="rounded-circle border-primary d-flex justify-content-center align-items-center step-circle border border-2 bg-white">
                                    <span class="text-primary fs-4 fs-md-1">4</span>
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
    </section>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        /* 2. Custom Styles (from 1st snippet) */
        #map {
            height: 400px;
            /* Give the map a defined height */
            width: 100%;
            border-radius: 8px;
            border: 1px solid #ddd;
            z-index: 1;
            /* Ensures map controls are clickable */
        }

        /* Form validation styles (Bootstrap 5 compatible) */
        .is-invalid {
            /* Styles are likely in your main CSS, but just in case */
            border-color: #dc3545 !important;
        }

        .is-valid {
            border-color: #198754 !important;
        }

        /* Small button for verify */
        .shop-btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            /* Adjust as needed */
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        let map, marker;
        let hasMapInitialized = false;
        let usedFallback = false;

        document.addEventListener('DOMContentLoaded', function() {
            // Updated element selectors to match your new form
            const pincodeInput = document.getElementById('pincode');
            const cityInput = document.getElementById('city');
            const stateInput = document.getElementById('state');
            const verifyButton = document.getElementById('verifyPincode');
            const verifyText = document.getElementById('verifyText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const pincodeError = document.getElementById('pincodeError');
            const businessForm = document.getElementById('businessForm');
            const latitudeInput = document.getElementById('latitude');
            const longitudeInput = document.getElementById('longitude');
            const fullAddressInput = document.getElementById('full_address');
            // Also grabbing the address input for later
            const addressInput = document.getElementById('address');


            initMapWithGeolocation();

            // Pincode input validation
            pincodeInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 6);
                if (this.value.length === 6) {
                    pincodeError.classList.add('d-none');
                    pincodeInput.classList.remove('is-invalid');
                } else if (this.value.length > 0) {
                    pincodeError.classList.remove('d-none');
                    pincodeInput.classList.add('is-invalid');
                } else {
                    pincodeError.classList.add('d-none');
                    pincodeInput.classList.remove('is-invalid');
                }
            });

            verifyButton.addEventListener('click', function() {
                const pincode = pincodeInput.value.trim();
                if (pincode.length !== 6) {
                    pincodeError.classList.remove('d-none');
                    pincodeInput.classList.add('is-invalid');
                    return;
                }

                // Updated to use 'd-none' which matches Bootstrap
                verifyText.classList.add('d-none');
                loadingSpinner.classList.remove('d-none');
                cityInput.value = 'Loading...';
                stateInput.value = 'Loading...';

                // Same robust multi-API fetch
                Promise.allSettled([
                    fetch(`/get-location/${pincode}`).then(r => r.json()),
                    fetch(`https://api.postalpincode.in/pincode/${pincode}`).then(r => r.json()),
                    fetch(
                        `https://nominatim.openstreetmap.org/search?format=json&postalcode=${pincode}&country=India&limit=1`
                    ).then(r => r.json())
                ]).then(results => {
                    let locationData = null;

                    // 1. Check local API
                    if (results[0].status === 'fulfilled' && results[0].value.success) {
                        locationData = {
                            lat: results[0].value.latitude,
                            lng: results[0].value.longitude,
                            city: results[0].value.city,
                            state: results[0].value.state
                        };
                    }
                    // 2. Check postalpin.in
                    else if (results[1].status === 'fulfilled' &&
                        results[1].value[0]?.Status === 'Success' &&
                        results[1].value[0].PostOffice?.length > 0) {
                        const postOffice = results[1].value[0].PostOffice[0];
                        locationData = {
                            city: postOffice.District || postOffice.Block || postOffice.Name,
                            state: postOffice.State,
                            lat: null,
                            lng: null
                        };
                    }
                    // 3. Check Nominatim
                    else if (results[2].status === 'fulfilled' && results[2].value.length > 0) {
                        const osmResult = results[2].value[0];
                        locationData = {
                            city: osmResult.display_name.split(',')[0] || '',
                            state: osmResult.address?.state || '',
                            lat: parseFloat(osmResult.lat),
                            lng: parseFloat(osmResult.lon)
                        };
                    }

                    if (locationData) {
                        cityInput.value = locationData.city || '';
                        stateInput.value = locationData.state || '';
                        pincodeInput.classList.add('is-valid');
                        pincodeInput.classList.remove('is-invalid');
                        pincodeError.classList.add('d-none');

                        if (locationData.lat && locationData.lng) {
                            if (usedFallback) {
                                // We were on a fallback, re-init the map at the correct spot
                                reInitializeMap(locationData.lat, locationData.lng);
                                usedFallback = false;
                            } else {
                                // Map is already good, just move the view
                                initOrUpdateMap(locationData.lat, locationData.lng);
                            }
                        } else {
                            // No coords from pincode, find them using the city
                            findCoordinatesByCity(locationData.city, locationData.state);
                        }
                    } else {
                        resetForm();
                        alert('Location not found. Please enter city and state manually.');
                    }
                }).catch(error => {
                    console.error('Error fetching location:', error);
                    resetForm();
                    alert('Error fetching location details. Please enter details manually.');
                }).finally(() => {
                    // Use 'd-none'
                    verifyText.classList.remove('d-none');
                    loadingSpinner.classList.add('d-none');
                });
            });

            function initMapWithGeolocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            usedFallback = false;
                            initOrUpdateMap(position.coords.latitude, position.coords.longitude);
                        },
                        (error) => {
                            console.warn('Geolocation failed:', error.message);
                            usedFallback = true;
                            initOrUpdateMap(20.5937, 78.9629); // India fallback
                        }, {
                            enableHighAccuracy: true,
                            timeout: 10000,
                            maximumAge: 0
                        }
                    );
                } else {
                    usedFallback = true;
                    initOrUpdateMap(20.5937, 78.9629); // India fallback
                }
            }

            function initOrUpdateMap(lat, lng) {
                latitudeInput.value = lat;
                longitudeInput.value = lng;

                if (!hasMapInitialized) {
                    map = L.map('map').setView([lat, lng], 13);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);

                    marker = L.marker([lat, lng], {
                        draggable: true
                    }).addTo(map);
                    marker.on('dragend', updateLatLngFromMarker);
                    map.on('click', moveMarkerToClick);

                    getAddressFromCoordinates(lat, lng);
                    hasMapInitialized = true;
                } else {
                    map.setView([lat, lng], 13);
                    marker.setLatLng([lat, lng]);
                    getAddressFromCoordinates(lat, lng);
                }
            }

            function reInitializeMap(lat, lng) {
                if (map) map.remove();
                hasMapInitialized = false;
                initOrUpdateMap(lat, lng);
            }

            function updateLatLngFromMarker() {
                const pos = marker.getLatLng();
                latitudeInput.value = pos.lat;
                longitudeInput.value = pos.lng;
                getAddressFromCoordinates(pos.lat, pos.lng);
            }

            function moveMarkerToClick(e) {
                marker.setLatLng(e.latlng);
                latitudeInput.value = e.latlng.lat;
                longitudeInput.value = e.latlng.lng;
                getAddressFromCoordinates(e.latlng.lat, e.latlng.lng);
            }

            function findCoordinatesByCity(city, state) {
                if (!city) return;
                const query = encodeURIComponent(`${city}, ${state}, India`);
                fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}&limit=1`)
                    .then(r => r.json())
                    .then(data => {
                        if (data.length > 0) {
                            const lat = parseFloat(data[0].lat);
                            const lon = parseFloat(data[0].lon);
                            if (usedFallback) {
                                reInitializeMap(lat, lon);
                                usedFallback = false;
                            } else {
                                initOrUpdateMap(lat, lon);
                            }
                        }
                    }).catch(console.error);
            }

            function getAddressFromCoordinates(lat, lng) {
                fetch(
                    `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`
                )
                    .then(r => r.json())
                    .then(data => {
                        if (data?.display_name) {
                            fullAddressInput.value = data.display_name;
                            // Bonus: auto-fill the main address field if it's empty
                            if (addressInput.value.trim() === '') {
                                addressInput.value = data.display_name;
                            }
                        }
                    }).catch(console.error);
            }

            function resetForm() {
                cityInput.value = '';
                stateInput.value = '';
                pincodeInput.classList.remove('is-valid');
                pincodeInput.classList.add('is-invalid');
                pincodeError.classList.remove('d-none');
            }

            businessForm.addEventListener('submit', function(e) {
                // Final check on submit
                if (!latitudeInput.value || !longitudeInput.value) {
                    e.preventDefault();
                    alert(
                        'Please verify your pincode or allow location access to set your map location before submitting.'
                    );
                }
            });
        });
    </script>
@endsection
