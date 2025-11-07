<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

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
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Khmer font -->

    <link href="https://fonts.googleapis.com/css2?family=Suwannaphum:wght@100;300;400;700;900&display=swap"
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet" />

    <link rel="icon" href="assets/images/logo.png" />
</head>

<body>
    <!-- Announcement -->
    <div class="ann-bar small py-2 text-center">
        <div class="container d-flex justify-content-around">
            <!-- add animation using swipper js -->
            <span class="me-3">Free shipping over $50</span>
        </div>
    </div>

    <header>

        <div class="container-fluid">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-xl py-0">
                <div class="container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo.png" alt="brand-logo" class="logo-kb" data-theme-logo />
                    </a>

                    <!-- Mobile toggler -> opens Offcanvas -->
                    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
                        <i class="bi bi-list-nested fs-1"></i>
                    </button>

                    <!-- Desktop nav (keep your dropdown-mega here) -->
                    <div class="collapse navbar-collapse" id="nav">
                        <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('index') }}">ទំព័ដើម</a>
                            </li>

                            <!-- Products mega (desktop) -->
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link kb-underline" href="{{ route('product') }}"
                                    aria-expanded="false">ផលិតផល</a>
                            </li>

                            <!-- Vendors mega (desktop) -->
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle kb-underline" href=""
                                    aria-expanded="false">អ្នកផលិត</a>
                                <div class="dropdown-menu" data-mega>
                                    <div class="row g-3">
                                        <div class="col-12 col-md-12 menu-col">
                                            <div class="menu-title">រុករក</div>
                                            <a href="{{ route('vendor-list') }}"><i class="bi bi-people"></i>
                                                បញ្ជីអ្នកលក់</a>

                                            <div class="menu-title">សម្រាប់អ្នកលក់</div>
                                            <a href="pages/guides.html"><i class="bi bi-journal-text"></i>
                                                មគ្គុទេសក៍អ្នកលក់</a>
                                        </div>
                                    </div>
                                </div>
                            </li>



                            <!-- Tourism mega (desktop) -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">អំពីយើង</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">ទំនាក់ទំនង</a>
                            </li>
                        </ul>

                        <!-- Search (desktop) -->
                        <form class="d-none d-lg-flex pill-search w-25 position-relative" role="search">
                            <input class="form-control w-100" type="search" placeholder="ស្វែររកផលិតផល"
                                aria-label="Search" id="navbar-search" />
                            <button class="btn border-0 ms-0 btn-pill-primary " type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>

                        <!-- Right (desktop) -->
                        <ul class="navbar-nav ms-0 ms-lg-4 align-items-center d-none d-lg-flex">
                            <li class="nav-item dropdown me-2">
                                <button data-theme-toggle class="btn btn-theme-mode" aria-pressed="false"
                                    title="Toggle theme">
                                    <i class="bi bi-sun"></i>
                                </button>
                            </li>
                            <li class="nav-item me-2 position-relative">
                                <a href="{{ route('cartNcheckout') }}" class="nav-link position-relative">
                                    <i class="bi bi-cart3"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
                                </a>
                            </li>
                            <div class="d-flex gap-2 mt-2">
                                <a href="pages/login.html" class="btn btn-outline-primary fw-medium">ចូលប្រើ</a>
                                <a href="pages/register.html" class="btn btn-pill-primary fw-medium">ចុះឈ្មោះ</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- OFFCANVAS (mobile only) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileMenuLabel">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="brand-logo" class="logo-kb w-50 h-50" data-theme-logo />
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-2" accordion>
            <a class="offcanvas-link text-start" href="index.html">ទំព័រដើម</a>

            <a class="offcanvas-link text-start" href="pages/products.html">ផលិតផល</a>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed offcanvas-link text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            អ្នកផលិត
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body w-100">
                            <a class="offcanvas-link text-start d-inline-block mb-2"
                                href="pages/products.html">បញ្ជីនាក់លក់
                            </a>
                            <a class="offcanvas-link text-start d-inline-block"
                                href="pages/guides.html">មគ្គុទ្ទេសក៍នាក់លក់
                            </a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Tourism">
                        <button class="accordion-button collapsed offcanvas-link text-start" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsetourism" aria-expanded="false"
                            aria-controls="collapsetourism">
                            ទេសចរណ៍
                        </button>
                    </h2>
                    <div id="collapsetourism" class="accordion-collapse collapse" aria-labelledby="Tourism"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body w-100">
                            <a class="offcanvas-link text-start d-inline-block mb-2"
                                href="pages/tourisim.html">គោលដៅទេសចរណ៍
                            </a>
                            <a class="offcanvas-link text-start d-inline-block" href="pages/event.html">ព្រឹត្តិការណ៍
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="offcanvas-link text-start" href="./blog.html">ប្លុក</a>
            <a class="offcanvas-link text-start" href="./about.html">អំពីយើង</a>
            <a class="offcanvas-link text-start" href="./contact.html">ទំនាក់ទំនង</a>

            <div class="border-top pt-3 mt-3 d-flex justify-content-between align-items-center gap-3">
                <div class="d-flex align-items-center gap-3">

                    <button data-theme-toggle class="btn btn-theme-mode" title="Toggle theme" type="button">
                        <i class="bi bi-sun"></i>
                    </button>
                    <a href="pages/cartNcheckout.html" class="nav-link-chart position-relative">
                        <i class="bi bi-cart3 fs-5"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
                    </a>
                </div>
                <div class="d-inline-flex align-items-center gap-2">
                    <a href="pages/orderHistory.html" class="d-inline-block btn btn-pill-primary">
                        ប្រវត្តិកម្មង់
                    </a>
                    <button type="button" class="border-0 bg-transparent btn btn-pill-primary"
                        data-bs-toggle="modal" data-bs-target="#authQ">
                        ចាកចេញ
                    </button>
                </div>
            </div>
        </div>
    </div>
