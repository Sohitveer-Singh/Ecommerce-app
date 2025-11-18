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

                                <form action="{{ route('user.listing.address.update', $listing) }}" method="POST"
                                      id="businessForm" class="account-inner-form">
                                    @csrf
                                    @method('PUT')
                                    <div class="review-form-name">
                                        <label for="address" class="form-label">Address*</label>
                                        <input type="text" id="address" name="address" class="form-control"
                                               placeholder="Full Address" value="{{old('address', $listing->location->address ?? '')}}" required>
                                    </div>

                                    <div class="review-form-name">
                                        <label for="pincode" class="form-label">Pincode*</label>
                                        <div class="input-group">
                                            <input type="text" id="pincode" name="pincode" class="form-control"
                                                   placeholder="Enter 6-digit pincode" maxlength="6" pattern="[0-9]{6}"
                                                   value="{{old('pincode', $listing->location->pincode ?? '')}}" required>
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
                                               value="{{old('city', $listing->location->city ?? '')}}" placeholder="City" required>
                                    </div>
                                    <div class="review-form-name">
                                        <label for="state" class="form-label">State*</label>
                                        <input type="text" id="state" name="state" class="form-control"
                                               value="{{old('state', $listing->location->state?? '')}}"  placeholder="State" required>
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

                                    <input type="hidden" id="latitude" value="{{$listing->location->latitude}}" name="latitude">
                                    <input type="hidden" id="longitude" value="{{$listing->location->longitude}}"  name="longitude">
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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        let map, marker;
        let hasMapInitialized = false;
        let usedFallback = false;

        document.addEventListener('DOMContentLoaded', function() {
            // Get all form elements
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
            const addressInput = document.getElementById('address');

            // --- THIS IS THE MAIN CHANGE ---
            // Call the new map initialization function
            initializeMap();
            // -------------------------------

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

            // Verify Pincode button click
            verifyButton.addEventListener('click', function() {
                const pincode = pincodeInput.value.trim();
                if (pincode.length !== 6) {
                    pincodeError.classList.remove('d-none');
                    pincodeInput.classList.add('is-invalid');
                    return;
                }

                verifyText.classList.add('d-none');
                loadingSpinner.classList.remove('d-none');
                cityInput.value = 'Loading...';
                stateInput.value = 'Loading...';

                // Multi-API fetch
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
                                reInitializeMap(locationData.lat, locationData.lng);
                                usedFallback = false;
                            } else {
                                initOrUpdateMap(locationData.lat, locationData.lng);
                            }
                        } else {
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
                    verifyText.classList.remove('d-none');
                    loadingSpinner.classList.add('d-none');
                });
            });

            // --- NEW FUNCTION ---
            // This function checks for a saved location *first*
            // before trying to geolocate the user.
            function initializeMap() {
                const savedLat = parseFloat(latitudeInput.value);
                const savedLng = parseFloat(longitudeInput.value);

                // 1. Do we have valid saved coordinates?
                if (savedLat && savedLng) {
                    // YES: Use the saved location from the database
                    usedFallback = false;
                    initOrUpdateMap(savedLat, savedLng);
                } else {
                    // NO: It's a new listing, so NOW find the user
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
                        // Geolocation not supported
                        usedFallback = true;
                        initOrUpdateMap(20.5937, 78.9629); // India fallback
                    }
                }
            }

            // This function was called "initMapWithGeolocation" before
            // NO CHANGES NEEDED inside this function
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

            // NO CHANGES NEEDED
            function reInitializeMap(lat, lng) {
                if (map) map.remove();
                hasMapInitialized = false;
                initOrUpdateMap(lat, lng);
            }

            // NO CHANGES NEEDED
            function updateLatLngFromMarker() {
                const pos = marker.getLatLng();
                latitudeInput.value = pos.lat;
                longitudeInput.value = pos.lng;
                getAddressFromCoordinates(pos.lat, pos.lng);
            }

            // NO CHANGES NEEDED
            function moveMarkerToClick(e) {
                marker.setLatLng(e.latlng);
                latitudeInput.value = e.latlng.lat;
                longitudeInput.value = e.latlng.lng;
                getAddressFromCoordinates(e.latlng.lat, e.latlng.lng);
            }

            // NO CHANGES NEEDED
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

            // NO CHANGES NEEDED
            function getAddressFromCoordinates(lat, lng) {
                fetch(
                    `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`
                )
                    .then(r => r.json())
                    .then(data => {
                        if (data?.display_name) {
                            fullAddressInput.value = data.display_name;
                            if (addressInput.value.trim() === '') {
                                addressInput.value = data.display_name;
                            }
                        }
                    }).catch(console.error);
            }

            // NO CHANGES NEEDED
            function resetForm() {
                cityInput.value = '';
                stateInput.value = '';
                pincodeInput.classList.remove('is-valid');
                pincodeInput.classList.add('is-invalid');
                pincodeError.classList.remove('d-none');
            }

            // NO CHANGES NEEDED
            businessForm.addEventListener('submit', function(e) {
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
