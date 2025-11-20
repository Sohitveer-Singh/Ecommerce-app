<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
          content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('assets/images/homepage-one/icon.png')}}">

    <!--title  -->
    <title>Shopus | Become A Vendor</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{ asset('css/swiper10-bundle.min.css') }}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5.3.2.min.css') }}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{ asset('css/aos-3.0.0.css') }}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">




</head>

<body>
<section class="account p-8">
    <div class="container">
        <div class="login-section account-section">
            <form class="review-form" method="POST" style="height: 890px" action="{{ route('vendor.register.store') }}">
                @csrf
                <div class="d-flex justify-content-center align-items-center">
                    <img height="80px" src="assets/images/logos/halobuz_logo.png" alt="">
                </div>
                <h5 class="comment-title">Create Account</h5>

                <div class="account-inner-form">
                    <div class="review-form-name">
                        <label for="fname" class="form-label">First Name*</label>
                        <input type="text" id="fname" name="first_name"
                               class="form-control @error('first_name') is-invalid @enderror"
                               value="{{ old('first_name') }}" required placeholder="First Name">
                        @error('first_name')
                        <small class="text-danger fs-5">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="review-form-name">
                        <label for="lname" class="form-label">Last Name*</label>
                        <input type="text" id="lname" name="last_name"
                               class="form-control @error('last_name') is-invalid @enderror"
                               value="{{ old('last_name') }}" required placeholder="Last Name">
                        @error('last_name')
                        <small class="text-danger fs-5">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="account-inner-form">
                    <div class="review-form-name">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" id="email" name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" required placeholder="user@gmail.com">
                        @error('email')
                        <small class="text-danger fs-5">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="review-form-name">
                        <label for="phone" class="form-label">Phone*</label>
                        <input type="tel" id="phone" name="phone"
                               class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}" required placeholder="+91 9876543210">
                        @error('phone')
                        <small class="text-danger fs-5">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="review-form-name address-form">
                    <label for="password" class="form-label">Password*</label>
                    <input type="password" id="password" name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Enter Password" required>
                    @error('password')
                    <small class="text-danger fs-5">{{ $message }}</small>
                    @enderror
                </div>

                <div class="review-form-name address-form">
                    <label for="password_confirmation" class="form-label">Confirm Password*</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           class="form-control" placeholder="Confirm Password" required>
                    @error('password_confirmation')
                    <small class="text-danger fs-5">{{ $message }}</small>
                    @enderror
                </div>

                <div class="review-form-name address-form">
                    <label for="sponsor" class="form-label">Sponsor Code (Optional)</label>
                    <input type="text" id="sponsor" name="sponsor"
                           class="form-control @error('sponsor') is-invalid @enderror"
                           placeholder="Enter Sponsor Code (if any)"
                           value="{{ old('sponsor', request()->get('ref')) }}">
                    @error('sponsor')
                    <small class="text-danger fs-5">{{ $message }}</small>
                    @enderror
                </div>

                <div class="review-form-name checkbox">
                    <div class="checkbox-item">
                        <input type="checkbox" name="terms" id="terms" required {{ old('terms') ? 'checked' : '' }}>
                        <label for="terms" class="remember" style="cursor:pointer;">
                            I agree all terms and condition in <span class="inner-text">ShopUs.</span>
                        </label>
                    </div>
                    @error('terms')
                    <small class="text-danger fs-5 d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="login-btn text-center">
                    <button type="submit" id="registerBtn" class="shop-btn">Create an Account</button>
                    <span class="shop-account">Already have an account ? <a href="{{ route('login') }}">Login</a></span>
                </div>
            </form>
            {{--            <form class="review-form" method="POST" style="height: 890px" action="{{ route('register') }}">--}}
            {{--                @csrf--}}
            {{--                <div class="d-flex justify-content-center align-items-center">--}}
            {{--                    <img height="80px" src="assets/images/logos/halobuz_logo.png" alt="">--}}
            {{--                </div>--}}
            {{--                <h5 class="comment-title">Create Account</h5>--}}
            {{--                <div class="account-inner-form">--}}
            {{--                    <div class="review-form-name">--}}
            {{--                        <label for="fname" class="form-label">First Name*</label>--}}
            {{--                        <input type="text" id="fname" name="first_name" class="form-control" required--}}
            {{--                               placeholder="First Name">--}}
            {{--                    </div>--}}
            {{--                    <div class="review-form-name">--}}
            {{--                        <label for="lname" class="form-label">Last Name*</label>--}}
            {{--                        <input type="text" id="lname" name="last_name" class="form-control" required--}}
            {{--                               placeholder="Last Name">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="account-inner-form">--}}
            {{--                    <div class="review-form-name">--}}
            {{--                        <label for="email" class="form-label">Email*</label>--}}
            {{--                        <input type="email" id="email" name="email" class="form-control" required--}}
            {{--                               placeholder="user@gmail.com">--}}
            {{--                    </div>--}}
            {{--                    <div class="review-form-name">--}}
            {{--                        <label for="phone" class="form-label">Phone*</label>--}}
            {{--                        <input type="tel" id="phone" name="phone" class="form-control" required--}}
            {{--                               placeholder="+91 9876543210">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="review-form-name address-form">--}}
            {{--                    <label for="password" class="form-label">Password*</label>--}}
            {{--                    <input type="password" id="password" name="password" class="form-control"--}}
            {{--                           placeholder="Enter Password" required>--}}
            {{--                    @error('password')--}}
            {{--                    <small class="text-danger fs-4">{{ $message }}</small>--}}
            {{--                    @enderror--}}
            {{--                </div>--}}
            {{--                <div class="review-form-name address-form">--}}
            {{--                    <label for="password_confirmation" class="form-label">Confirm Password*</label>--}}
            {{--                    <input type="password" id="password_confirmation" name="password_confirmation"--}}
            {{--                           class="form-control" placeholder="Confirm Password" required>--}}
            {{--                    @error('password_confirmation')--}}
            {{--                    <small class="text-danger fs-4">{{ $message }}</small>--}}
            {{--                    @enderror--}}
            {{--                </div>--}}
            {{--                <div class="review-form-name address-form">--}}
            {{--                    <label for="address" class="form-label">Sponsor Code (Optional)</label>--}}
            {{--                    <input type="text" id="sponsor" name="sponsor" class="form-control"--}}
            {{--                           placeholder="Enter Sponsor Code (if any)" value="{{ request()->get('ref') }}">--}}
            {{--                </div>--}}


            {{--                <div class="review-form-name checkbox">--}}
            {{--                    <div class="checkbox-item">--}}
            {{--                        <input type="checkbox" required>--}}
            {{--                        <p class="remember">--}}
            {{--                            I agree all terms and condition in <span class="inner-text">ShopUs.</span></p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="login-btn text-center">--}}
            {{--                    <button type="submit" id="registerBtn" class="shop-btn">Create an Account</button>--}}
            {{--                    <span class="shop-account">Already have an account ?<a--}}
            {{--                            href="{{ route('login') }}">Login</a></span>--}}
            {{--                </div>--}}
            {{--            </form>--}}
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('registerBtn');
        const form = btn.closest('form');

        form.addEventListener('submit', function() {
            btn.disabled = true;
            btn.innerText = 'Please wait...';
        });

        setTimeout(function() {
            document.querySelectorAll('.error-msg').forEach(function(el) {
                el.style.transition = 'opacity 0.6s';
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 600);
            });
        }, 2500); // hide after 2.5 seconds
    });
</script>




<!--------------- jQuery ---------------->
<script src="{{ asset('assets/js/jquery_3.7.1.min.js') }}"></script>

<!--------------- bootstrap-js ---------------->
<script src="{{ asset('assets/js/bootstrap_5.3.2.bundle.min.js') }}"></script>

<!--------------- Range-Slider-js ---------------->
<script src="{{ asset('assets/js/nouislider.min.js') }}"></script>

<!--------------- scroll-Animation-js ---------------->
<script src="{{ asset('assets/js/aos-3.0.0.js') }}"></script>

<!--------------- swiper-js ---------------->
<script src="{{ asset('assets/js/swiper10-bundle.min.js') }}"></script>

<!--------------- additional-js ---------------->
<script src="{{ asset('assets/js/shopus.js') }}"></script>



</body>

</html>
