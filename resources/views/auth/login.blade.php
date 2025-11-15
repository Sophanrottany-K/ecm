<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce | @yield('title')</title>
    <!-- link favicon logo identify of topic  -->

    <!-- framework-css bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <!-- lib swiper.js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- link bootstrap icon cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <!-- ************ link style ********* -->
    <!-- Khmer font -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/login.css" />

    <link href="https://fonts.googleapis.com/css2?family=Suwannaphum:wght@100;300;400;700;900&display=swap"
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet" />

    <link rel="icon" href="assets/images/logo.png" />
</head>



<div class="overlay-login "></div>
<section class="main-login align-content-center position-relative py-5 px-3 px-lg-0 "
    style="background: url(../assets/images/bglogin2.jpg);background-repeat: no-repeat;background-size: cover;background-position: center; height: 100vh;">
    <div class="container ">
        <div class="row flex-row-reverse  gx-0 gx-lg-4 rounded-4 card-modern z-3 ">
            <div class="col-12 col-lg-6 px-0 d-none d-lg-block">
                <!-- Swiper -->
                <div class="swiper mySwiper ">
                    <a class="link-back" href="../index.html">
                        <i class="bi bi-arrow-left-short fs-4"></i>
                        <span>ត្រឡប់ទៅកាន់ទំព័រដើម</span>
                    </a>

                    <div class="txt-overlay rounded-4">
                        <div class="login-overlay-txt">
                            <q>
                                <b>Buy Khmer, support Khmer.</b>
                            </q>
                            <p class="txt-design">KHMER BOOST </p>
                        </div>
                    </div>
                    <div class="swiper-wrapper rounded-4">
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/e-organic-1.jpg"
                                alt="image-product">
                        </div>
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/bglogin2.jpg" alt="image-product">
                        </div>
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/e-product-3.jpg"
                                alt="image-product">
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>

            </div>
            <div class="col-12 col-lg-6 px-lg-5">

                <div class="d-flex align-items-center flex-column pe-0 pe-lg-5" data-aos="fade-right"
                    data-aos-delay="100">
                    <div class="header mb-3 mb-lg-4 ">
                        <div class="d-flex align-items-center">
                            <img src="../assets/images/logo.png" alt="image-logo">
                            <h5 class="d-inline-block m-0">KhmerBoost</h5>
                        </div>
                        <h3 class="title mb-3">ចូលទៅកាន់គណនី</h3>
                        <p class="description">
                            សូមបញ្ចូលព័ត៌មានរបស់អ្នកអោយបានត្រឹមត្រូវ ដើម្បីចូលប្រើប្រាស់គណនី។</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login.post') }}" class="row g-4 g-lg-3 needs-validation"
                        novalidate>
                        @csrf
                        <div class="input">
                            <label for="email" class="form-label">អ៊ីមែល *</label>
                            <input id="email" type="email" class="form-control" name="email" required autofocus>
                            <!-- <div class="invalid-feedback">Wrong Email! Please try again.</div> -->
                        </div>
                        <div class="input position-relative">
                            <label for="password" class="form-label">ពាក្យសម្ងាត់ *</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <i class="bi bi-eye-slash-fill icon-show"
                                style="position: absolute; top: 55%; right:30px; cursor: pointer; font-size: 20px;"></i>
                            <!-- <div class="invalid-feedback">Wrong Password! Please try again.</div> -->
                        </div>
                        <div class="mb-1 mb-md-2 d-flex justify-content-between align-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="checkMe" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    ចងចាំខ្ញុំ
                                </label>
                            </div>
                            <a href="../pages/forgotPassowrd.html" class="forgot-password me-2">ភ្លេចពាក្យសម្ងាត់?</a>
                        </div>

                        <button type="submit"
                            class="btn-primary py-1 py-md-2 w-50 mx-auto rounded-5 mb-3  d-inline-block text-center text-decoration-none">ចូលគណនី</button>
                    </form>

                    <div class="d-flex justify-content-around">
                        <hr class="d-inline-block" width="30%"><span class="d-inline-block text-nowrap">ឬ
                            ភ្ជាប់ជាមួយនឹងគណនី Google</span>
                        <hr width="30%">
                    </div>

                    <!-- login with google  -->
                    <a href="#"
                        class=" btn btn-outline-dark border-secondary-subtle text-nowrap py-1 py-md-2 px-5 rounded-5 mt-2 mb-3 d-inline-flex justify-content-center align-content-center">
                        <i class="bi bi-google"></i>
                        <span class="ms-2">
                            ចូលគណនីជាមួយ Google
                        </span>
                    </a>

                    <div class="text-center mb-5 mb-md-0">
                        <span class="text-nowrap">មិនមានគណនីមែនទេ?<a href="{{ route('register.role') }}"
                                class="ms-2">ចុះឈ្មោះ</a>
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
