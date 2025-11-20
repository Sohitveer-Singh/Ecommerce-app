@extends('layouts.app')
@section('content')
    <section class="contact product footer-padding">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-7 order-2">
                        <div class="question-section login-section">
                            <div class="review-form">
                                <h5 class="comment-title" style="margin-bottom: 0px !important;">Enter Your Business Timing
                                </h5>

                                <p class="comment-title" style="margin: 0;">Let your customers know when you are open for
                                    business</p>

                                <div class="container py-4">

                                    <!-- Header -->
                                    <div class="text-md-start mb-4 text-center">
                                        <div
                                            class="d-flex justify-content-center justify-content-md-start mb-3 flex-wrap gap-2">
                                            <button type="button" class="btn btn-sm btn-outline-secondary action-btn"
                                                    onclick="handleClick(this); applyWeekdayHours()">
                                                Set Weekday Hours
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary action-btn"
                                                    onclick="handleClick(this); applyToAll('open')">
                                                Apply to All Days
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary action-btn"
                                                    onclick="handleClick(this); copyPreviousDay()">
                                                Copy Previous Day
                                            </button>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger mb-3">
                                            <h6 class="alert-heading fw-bold">Please fix the following errors:</h6>
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('vendor.listing.timing.store', $listing) }}" method="POST"
                                          id="businessHoursForm">
                                        @csrf
                                        <div class="business-days">
                                            @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $index => $day)
                                                <div class="row g-3 g-md-2 align-items-center border-bottom day-row py-3"
                                                     data-day-index="{{ $index }}">
                                                    <div class="col-12 col-md-3 col-lg-2">
                                                        <span class="fw-semibold text-dark">{{ $day }}</span>
                                                    </div>

                                                    <div class="col-12 col-md-4 col-lg-3">
                                                        <select name="day_status[{{ $index }}]"
                                                                class="form-select form-select-sm day-status-select"
                                                                data-day="{{ $index }}"
                                                                onchange="handleStatusChange(this)">
                                                            <option value="open">Open</option>
                                                            <option value="24hours">24 Hours</option>
                                                            <option value="closed">Closed</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12 col-md-5 col-lg-7">
                                                        <div class="row g-2 time-inputs"
                                                             id="time-inputs-{{ $index }}">
                                                            <div class="col-6">
                                                                <label class="form-label small d-none d-md-block">Open
                                                                    at</label>
                                                                <input type="time" name="open_time[{{ $index }}]"
                                                                       class="form-control form-control-sm open-time"
                                                                       value="09:00">
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label small d-none d-md-block">Close
                                                                    at</label>
                                                                <input type="time" name="close_time[{{ $index }}]"
                                                                       class="form-control form-control-sm close-time"
                                                                       value="17:00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        {{-- <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">
                                            Save and Continue
                                        </button> --}}

                                        <div class="login-btn">
                                            <button type="submit" class="shop-btn">Submit</button>
                                        </div>
                                    </form>
                                    <!-- ✅ Compact CSS -->
                                    <style>
                                        .day-block {
                                            background: #f8f9fa;
                                            border-radius: 6px;
                                            padding: 10px 12px;
                                            border: 1px solid #e5e7eb;
                                        }

                                        .day-block .col-md-3 {
                                            padding-left: 6px !important;
                                            padding-right: 6px !important;
                                        }
                                    </style>


                                </div>

                                <!-- ✅ CSS -->
                                <style>
                                    .day-block {
                                        background: #f8f9fa;
                                        border-radius: 8px;
                                        padding: 15px;
                                        border: 1px solid #e9ecef;
                                    }
                                </style>

                                <!-- ✅ JavaScript -->
                                {{-- <script>
                                    function handleStatusChange(select) {
                                        let i = select.dataset.day;
                                        let open = document.querySelector(`[name="open_time[${i}]"]`);
                                        let close = document.querySelector(`[name="close_time[${i}]"]`);

                                        if (select.value === "24hours" || select.value === "closed") {
                                            open.disabled = true;
                                            close.disabled = true;
                                        } else {
                                            open.disabled = false;
                                            close.disabled = false;
                                        }
                                    }

                                    function applyToAll() {
                                        let open0 = document.querySelector(`[name="open_time[0]"]`).value;
                                        let close0 = document.querySelector(`[name="close_time[0]"]`).value;

                                        document.querySelectorAll(".open-time").forEach(i => i.value = open0);
                                        document.querySelectorAll(".close-time").forEach(i => i.value = close0);
                                    }

                                    function copyPreviousDay() {
                                        for (let i = 1; i < 7; i++) {
                                            let prevOpen = document.querySelector(`[name="open_time[${i-1}]"]`).value;
                                            let prevClose = document.querySelector(`[name="close_time[${i-1}]"]`).value;

                                            document.querySelector(`[name="open_time[${i}]"]`).value = prevOpen;
                                            document.querySelector(`[name="close_time[${i}]"]`).value = prevClose;
                                        }
                                    }

                                    function applyWeekdayHours() {
                                        let open0 = document.querySelector(`[name="open_time[0]"]`).value;
                                        let close0 = document.querySelector(`[name="close_time[0]"]`).value;

                                        for (let i = 1; i <= 4; i++) {
                                            document.querySelector(`[name="open_time[${i}]"]`).value = open0;
                                            document.querySelector(`[name="close_time[${i}]"]`).value = close0;
                                        }
                                    }
                                </script> --}}
                                {{-- <script>
                                    function handleStatusChange(select) {
                                        const dayIndex = select.dataset.day;
                                        const timeInputs = document.getElementById(`time-inputs-${dayIndex}`);
                                        const inputs = timeInputs.querySelectorAll('input');
                                        const openInput = timeInputs.querySelector('.open-time');
                                        const closeInput = timeInputs.querySelector('.close-time');

                                        switch (select.value) {
                                            case '24hours':
                                                inputs.forEach(input => {
                                                    input.readOnly = true; // <-- Use readOnly
                                                    input.classList.add('bg-light'); // <-- Add visual cue
                                                });
                                                openInput.value = '00:00';
                                                closeInput.value = '23:59';
                                                break;

                                            case 'closed':
                                                inputs.forEach(input => {
                                                    input.readOnly = true; // <-- Use readOnly
                                                    input.classList.add('bg-light'); // <-- Add visual cue
                                                });
                                                openInput.value = '';
                                                closeInput.value = '';
                                                break;

                                            default: // 'open'
                                                inputs.forEach(input => {
                                                    input.readOnly = false; // <-- Use readOnly
                                                    input.classList.remove('bg-light'); // <-- Remove visual cue
                                                });
                                                // Restore default times if they were blank
                                                if (openInput.value === '') openInput.value = '09:00';
                                                if (closeInput.value === '') closeInput.value = '17:00';
                                        }
                                    }

                                    // Make sure to update the other helper functions to use the new logic
                                    function applyToAll(status) {
                                        document.querySelectorAll('.day-status-select').forEach(select => {
                                            select.value = status;
                                            handleStatusChange(select); // This will now apply the correct readonly state
                                        });
                                    }

                                    function copyPreviousDay() {
                                        const days = document.querySelectorAll('.day-row');
                                        for (let i = 1; i < days.length; i++) {
                                            const prevDay = days[i - 1];
                                            const currentDay = days[i];

                                            const prevStatus = prevDay.querySelector('.day-status-select').value;
                                            const currentStatusSelect = currentDay.querySelector('.day-status-select');
                                            currentStatusSelect.value = prevStatus;

                                            // This function will now correctly set values AND readonly states
                                            handleStatusChange(currentStatusSelect);

                                            if (prevStatus === 'open') {
                                                currentDay.querySelector('.open-time').value = prevDay.querySelector('.open-time').value;
                                                currentDay.querySelector('.close-time').value = prevDay.querySelector('.close-time').value;
                                            }
                                        }
                                    }

                                    function applyWeekdayHours() {
                                        document.querySelectorAll('.day-row').forEach((day, index) => {
                                            const select = day.querySelector('.day-status-select');
                                            if (index < 5) { // Monday - Friday (0-4)
                                                select.value = 'open';
                                                day.querySelector('.open-time').value = '09:00';
                                                day.querySelector('.close-time').value = '17:00';
                                            } else { // Saturday & Sunday (5-6)
                                                select.value = 'closed';
                                            }
                                            handleStatusChange(select); // This will now apply the correct readonly state
                                        });
                                    }
                                </script> --}}


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

{{-- @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            initializeForm();
        });

        function initializeForm() {
            document.querySelectorAll('.day-status-select').forEach(select => {
                handleStatusChange(select);
            });
        }

        function handleStatusChange(select) {
            const dayIndex = select.dataset.day;
            const timeInputs = document.getElementById(`time-inputs-${dayIndex}`);
            const inputs = timeInputs.querySelectorAll('input');
            const openInput = timeInputs.querySelector('.open-time');
            const closeInput = timeInputs.querySelector('.close-time');

            switch (select.value) {
                case '24hours':
                    inputs.forEach(input => input.disabled = true);
                    openInput.value = '00:00';
                    closeInput.value = '23:59';
                    break;
                case 'closed':
                    inputs.forEach(input => input.disabled = true);
                    openInput.value = '';
                    closeInput.value = '';
                    break;
                default: // 'open'
                    inputs.forEach(input => input.disabled = false);
            }
        }

        function applyToAll(status) {
            document.querySelectorAll('.day-status-select').forEach(select => {
                select.value = status;
                handleStatusChange(select);
            });
        }

        function copyPreviousDay() {
            const days = document.querySelectorAll('.day-row');
            for (let i = 1; i < days.length; i++) {
                const prevDay = days[i - 1];
                const currentDay = days[i];

                const prevStatus = prevDay.querySelector('.day-status-select').value;
                const currentStatusSelect = currentDay.querySelector('.day-status-select');
                currentStatusSelect.value = prevStatus;

                handleStatusChange(currentStatusSelect);

                if (prevStatus === 'open') {
                    currentDay.querySelector('.open-time').value = prevDay.querySelector('.open-time').value;
                    currentDay.querySelector('.close-time').value = prevDay.querySelector('.close-time').value;
                }
            }
        }

        function applyWeekdayHours() {
            document.querySelectorAll('.day-row').forEach((day, index) => {
                const select = day.querySelector('.day-status-select');
                if (index < 5) { // Monday - Friday (0-4)
                    select.value = 'open';
                    day.querySelector('.open-time').value = '09:00';
                    day.querySelector('.close-time').value = '17:00';
                } else { // Saturday & Sunday (5-6)
                    select.value = 'closed';
                }
                handleStatusChange(select);
            });
        }

        function handleClick(button) {
            document.querySelectorAll('.action-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }
    </script>
@endpush --}}

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Run this on page load to set the initial states correctly
            initializeForm();
        });

        function initializeForm() {
            document.querySelectorAll('.day-status-select').forEach(select => {
                handleStatusChange(select);
            });
        }

        /**
         * This is the corrected function.
         * It uses .readOnly instead of .disabled.
         */
        function handleStatusChange(select) {
            const dayIndex = select.dataset.day;
            const timeInputs = document.getElementById(`time-inputs-${dayIndex}`);
            const inputs = timeInputs.querySelectorAll('input');
            const openInput = timeInputs.querySelector('.open-time');
            const closeInput = timeInputs.querySelector('.close-time');

            // Reset state
            inputs.forEach(input => {
                input.readOnly = false; // <-- Use readOnly
                input.classList.remove('bg-light'); // <-- Remove Bootstrap class
            });

            switch (select.value) {
                case '24hours':
                    inputs.forEach(input => {
                        input.readOnly = true; // <-- Use readOnly
                        input.classList.add('bg-light'); // <-- Add visual cue
                    });
                    openInput.value = '00:00';
                    closeInput.value = '23:59';
                    break;
                case 'closed':
                    inputs.forEach(input => {
                        input.readOnly = true; // <-- Use readOnly
                        input.classList.add('bg-light'); // <-- Add visual cue
                    });
                    openInput.value = '';
                    closeInput.value = '';
                    break;
                default: // 'open'
                    // Restore default times if they were blank
                    if (openInput.value === '') openInput.value = '09:00';
                    if (closeInput.value === '') closeInput.value = '17:00';
            }
        }

        function applyToAll(status) {
            document.querySelectorAll('.day-status-select').forEach(select => {
                select.value = status;
                handleStatusChange(select); // This will now apply the correct readonly state
            });
        }

        function copyPreviousDay() {
            const days = document.querySelectorAll('.day-row');
            for (let i = 1; i < days.length; i++) {
                const prevDay = days[i - 1];
                const currentDay = days[i];

                const prevStatus = prevDay.querySelector('.day-status-select').value;
                const currentStatusSelect = currentDay.querySelector('.day-status-select');
                currentStatusSelect.value = prevStatus;

                // This will now apply the correct readonly state and values
                handleStatusChange(currentStatusSelect);

                if (prevStatus === 'open') {
                    currentDay.querySelector('.open-time').value = prevDay.querySelector('.open-time').value;
                    currentDay.querySelector('.close-time').value = prevDay.querySelector('.close-time').value;
                }
            }
        }

        function applyWeekdayHours() {
            document.querySelectorAll('.day-row').forEach((day, index) => {
                const select = day.querySelector('.day-status-select');
                if (index < 5) { // Monday - Friday (0-4)
                    select.value = 'open';
                    day.querySelector('.open-time').value = '09:00';
                    day.querySelector('.close-time').value = '17:00';
                } else { // Saturday & Sunday (5-6)
                    select.value = 'closed';
                }
                handleStatusChange(select); // This will now apply the correct readonly state
            });
        }

        function handleClick(button) {
            document.querySelectorAll('.action-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }
    </script>
@endpush
