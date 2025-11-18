<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
          content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus | Become A Vendor</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="css/swiper10-bundle.min.css">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="css/nouislider.min.css">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="css/aos-3.0.0.css">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="css/style.css">



</head>

<body>
<section class="account">
    <div class="d-flex justify-content-center align-items-center container" style="min-height: 100vh;">

        <div class="login-section account-section">
            <form class="review-form shadow-lg" style="height: 650px" method="POST"
                  action="{{ route('login') }}">
                @csrf
                <div class="d-flex justify-content-center align-items-center">
                    <img height="80px" src="assets/images/logos/halobuz_logo.png" alt="">
                </div>
                <h5 class="comment-title">Login Into Account</h5>


                <div class="review-form-name address-form">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" id="email" name="email" class="form-control" required
                           placeholder="user@gmail.com">
                </div>
                <div class="review-form-name address-form">
                    <label for="password" class="form-label">Password*</label>
                    <input type="password" id="password" name="password" class="form-control"
                           placeholder="Enter Password" required>
                </div>



                <div class="review-form-name checkbox">
                    <div class="checkbox-item">
                        <input type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="login-btn text-center">
                    <button type="submit" id="registerBtn" class="shop-btn">Login</button>
                    <span class="shop-account">Don't have an account ?<a
                            href="{{ route('register') }}">Register</a></span>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('registerBtn');
        const form = btn.closest('form');

        form.addEventListener('submit', function(e) {
            // Disable immediately on submit
            btn.disabled = true;
            btn.innerText = 'Please wait...';

            // Re-enable after 3 seconds (3000ms)
            setTimeout(() => {
                btn.disabled = false;
                btn.innerText = 'Create an Account';
            }, 3000);
        });
    });
</script> --}}



<!--------------- jQuery ---------------->
<script src="assets/js/jquery_3.7.1.min.js"></script>

<!--------------- bootstrap-js ---------------->
<script src="assets/js/bootstrap_5.3.2.bundle.min.js"></script>

<!--------------- Range-Slider-js ---------------->
<script src="assets/js/nouislider.min.js"></script>

<!--------------- scroll-Animation-js ---------------->
<script src="assets/js/aos-3.0.0.js"></script>

<!--------------- swiper-js ---------------->
<script src="assets/js/swiper10-bundle.min.js"></script>

<!--------------- additional-js ---------------->
<script src="assets/js/shopus.js"></script>


</body>

</html>
