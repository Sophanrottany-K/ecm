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

<div class="overlay-login"></div>
<section class="main-login align-content-center position-relative py-5 py-lg-0 px-3 px-lg-0"
    style="
        background: url(../assets/images/bglogin2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      ">
    <div class="container">
        <div class="row gx-0 gx-lg-4 rounded-4 card-modern flex-row">
            <div class="col-12 col-lg-6 d-none d-lg-block">
                <!-- Swiper -->
                <div class="swiper mySwiper" data-aos="fade-right">
                    <a class="link-back" href="../index.html">
                        <i class="bi bi-arrow-left-short fs-4"></i>
                        <span>ត្រឡប់ទៅកាន់ទំព័រដើម</span>
                    </a>

                    <div class="txt-overlay rounded-4">
                        <div class="login-overlay-txt">
                            <q>
                                <b>Buy Khmer, support Khmer.</b>
                            </q>
                            <p class="txt-design">KHMER BOOST</p>
                        </div>
                    </div>
                    <div class="swiper-wrapper rounded-4">
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/e-organic-1.jpg"
                                alt="image-product" />
                        </div>
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/bglogin2.jpg" alt="image-product" />
                        </div>
                        <div class="swiper-slide rounded-4">
                            <img class="main-login-img h-100" src="../assets/images/e-product-3.jpg"
                                alt="image-product" />
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-center align-content-center mt-0 mt-lg-2 px-1 px-lg-5"
                    data-aos="fade-left" data-aos-delay="200">
                    <div class="header">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/logo.png" alt="image-logo" />
                            <h5 class="d-inline-block m-0">KhmerBoost</h5>
                        </div>
                        <h3 class="title">ចុះឈ្មោះគណនី</h3>
                        <p class="description">សូមបំពេញព័ត៌មានរបស់អ្នកដូចខាងក្រោម។</p>
                    </div>

                    <form action="./login.html" class="row g-4 g-lg-3 needs-validation" novalidate>
                        <div class="input col-6">
                            <label for="first-name" class="form-label">នាមខ្លួន​ *</label>
                            <input class="form-control rounded-5" id="first-name" type="text"
                                placeholder="បញ្ជូលនាមខ្លួន" required />
                        </div>
                        <div class="input col-6">
                            <label for="last-name" class="form-label">នាមត្រកូល *</label>
                            <input class="form-control rounded-5" id="last-name" type="text"
                                placeholder="បញ្ជូលនាមត្រកូល" required />
                        </div>
                        <div class="input col-12">
                            <label for="phonenumber" class="form-label">
                                លេខទូរស័ព្ទ *</label>
                            <input class="form-control rounded-5" id="phonenumber" type="tel"
                                placeholder="បញ្ជូលលេខទូរស័ព្ទ" required />
                        </div>
                        <div class="input">
                            <label for="email-register" class="form-label">អ៊ីមែល *</label>
                            <input class="form-control rounded-5" id="email-register" type="email"
                                placeholder="បញ្ជូលអាស័យដ្ឋានអ៊ីមែល" required />
                            <!-- <div class="invalid-feedback">Wrong Email! Please try again.</div> -->
                        </div>
                        <div class="input position-relative">
                            <label for="password-register" class="form-label">ពាក្យសម្ងាត់ *</label>
                            <input class="form-control rounded-5" id="password-register" type="password"
                                placeholder="បញ្ជូលពាក្យសម្ងាត់" required />
                            <i class="bi bi-eye-slash-fill icon-show"
                                style="
                      position: absolute;
                      top: 55%;
                      right: 30px;
                      cursor: pointer;
                      font-size: 20px;
                    "></i>
                            <!-- <div class="invalid-feedback">Wrong Password! Please try again.</div> -->
                        </div>
                        <div class="d-flex justify-content-between align-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="checkMe" id="remember-me"
                                    required />
                                <label class="form-check-label" for="remember-me">
                                    ត្រូវប្រាកដថាអ្នកយល់ព្រមតាមលខ័ណ្ឌរបស់គេហ័ទំព័រយើង
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                            class="btn-primary py-2 w-50 mx-auto rounded-5 mb-3 text-center text-decoration-none">
                            ចុះឈ្មោះ
                        </button>
                    </form>

                    <div class="text-center mb-5 mb-md-0">
                        <span class="text-nowrap">មានគណនីរួចហើយ?<a href="../pages/login.html"
                                class="ms-2">ចូលគណនី</a>
                        </span>
                    </div>
                    <!--
                    <div class="text-center mb-5">
                        <span class="text-nowrap">ចងចាំពាក្យសម្ងាត់?<a href="../pages/login.html"
                                class="ms-2">ចូល</a>
                        </span>
                    </div>
 -->
                </div>
            </div>
        </div>
    </div>
</section>
