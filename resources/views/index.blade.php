<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KhmerBoost</title>
    <!-- link favicon logo identify of topic  -->

    <!-- framework-css bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <!-- lib swiper.js  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- link bootstrap icon cdn-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
    />
    <!-- ************ link style ********* -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Khmer font -->

    <link
      href="https://fonts.googleapis.com/css2?family=Suwannaphum:wght@100;300;400;700;900&display=swap"
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />

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
        <nav class="navbar navbar-expand-xxl py-0">
          <div class="container">
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
              <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="#">ទំព័ដើម</a>
                </li>
    
                <!-- Products mega (desktop) -->
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link kb-underline" href="pages/products.html" aria-expanded="false">ផលិតផល</a>
                </li>
    
                <!-- Vendors mega (desktop) -->
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle kb-underline" href="#" aria-expanded="false">អ្នកផលិត</a>
                  <div class="dropdown-menu" data-mega>
                    <div class="row g-3">
                      <div class="col-12 col-md-12 menu-col">
                        <div class="menu-title">រុករក</div>
                        <a href="pages/vendors-list.html"><i class="bi bi-people"></i> បញ្ជីអ្នកលក់</a>
    
                        <div class="menu-title">សម្រាប់អ្នកលក់</div>
                        <a href="pages/guides.html"><i class="bi bi-journal-text"></i>
                          មគ្គុទេសក៍អ្នកលក់</a>
                      </div>
                    </div>
                  </div>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link" href="pages/blog.html">ប្លុក</a>
                </li>
    
                <!-- Tourism mega (desktop) -->
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle kb-underline" href="#" aria-expanded="false">ទេសចរណ៍</a>
                  <div class="dropdown-menu" data-mega>
                    <div class="row g-3 g-lg-2">
                      <div class="col-12 col-md-12 menu-col">
                        <div class="menu-title">រុករក</div>
                        <a href="pages/tourisim.html"><i class="bi bi-geo-alt"></i> គោលដៅទេសចរណ៍</a>
                      </div>
                      <div class="col-12 col-md-12 menu-col">
                        <div class="menu-title">ម្ហូបអាហារ</div>
                        <a href="pages/food_khmer.html"><i class="bi bi-egg"></i> ម្ហូបអាហារ</a>
                      </div>
                      <div class="col-12 col-md-12 menu-col">
                        <div class="menu-title">ព្រឹត្តិការណ៍</div>
                        <a href="pages/event.html"><i class="bi bi-calendar-event"></i> ព្រឹត្តិការណ៍
                          និងពិព័រណ៍</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/about.html">អំពីយើង</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/contact.html">ទំនាក់ទំនង</a>
                </li>
              </ul>
    
              <!-- Search (desktop) -->
              <form class="d-none d-lg-flex pill-search w-25 position-relative" role="search">
                <input class="form-control w-100" type="search" placeholder="ស្វែររកផលិតផល" aria-label="Search"
                  id="navbar-search" />
                <button class="btn border-0 ms-0 btn-pill-primary " type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </form>
    
              <!-- Right (desktop) -->
              <ul class="navbar-nav ms-0 ms-lg-4 align-items-center d-none d-lg-flex">
                <li class="nav-item dropdown me-2">
                  <button data-theme-toggle class="btn btn-theme-mode" aria-pressed="false" title="Toggle theme">
                    <i class="bi bi-sun"></i>
                  </button>
                </li>
                <li class="nav-item me-2 position-relative">
                  <a href="pages/login.html" class="nav-link position-relative">
                    <i class="bi bi-cart3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
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
              <button class="accordion-button collapsed offcanvas-link text-start" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                អ្នកផលិត
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body w-100">
                <a class="offcanvas-link text-start d-inline-block mb-2" href="pages/products.html">បញ្ជីនាក់លក់
                </a>
                <a class="offcanvas-link text-start d-inline-block" href="pages/guides.html">មគ្គុទ្ទេសក៍នាក់លក់
                </a>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="Tourism">
              <button class="accordion-button collapsed offcanvas-link text-start" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsetourism" aria-expanded="false" aria-controls="collapsetourism">
                ទេសចរណ៍
              </button>
            </h2>
            <div id="collapsetourism" class="accordion-collapse collapse" aria-labelledby="Tourism"
              data-bs-parent="#accordionExample">
              <div class="accordion-body w-100">
                <a class="offcanvas-link text-start d-inline-block mb-2" href="pages/tourisim.html">គោលដៅទេសចរណ៍
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
            <button type="button" class="border-0 bg-transparent btn btn-pill-primary" data-bs-toggle="modal"
              data-bs-target="#authQ">
              ចាកចេញ
            </button>
          </div>
        </div>
      </div>
    </div>

    <main>
      <!-- hero banner area -->
      <section class="hero-banner position-relative overflow-hidden">
        <div class="container">
          <div class="hero-card rounded-4 position-relative">
            <div class="row g-5 align-items-center">
              <!-- Left: Copy + Actions -->
              <div class="col-lg-6">
                <div class="ps-2">
                  <div class="d-inline-flex align-items-center gap-2 mb-3">
                    <span class="badge rounded-pill text-dark-emphasis fs-5"
                      >វេទិកាពាណិជ្ជកម្មសហការពីកម្ពុជា</span
                    >
                    <span class="d-none d-md-inline"></span>
                    <span class="text-muted small d-none d-md-inline"
                      >ស្ថាបនាកម្មសហគមន៍ • Community-driven</span
                    >
                  </div>

                  <h1 class="display-5 fw-bold lh-tight mb-3">
                    <span class="kb-gradient-text">Boost Khmer Business</span>
                  </h1>

                  <p class="lead hero-sub mb-4">
                    វេទិកាដើម្បីលើកកម្ពស់ផលិតផលក្នុងស្រុក និងទំនុកចិត្ត — from
                    farms & workshops to your home.
                  </p>

                  <!--  search + CTAs stacked on mobile -->
                  <div class="d-flex gap-3 mb-4">
                    <div class="d-flex flex-wrap gap-2">
                      <a
                        href="pages/login.html"
                        class="btn btn-pill-primary btn-lg"
                        ><i class="bi bi-bag me-2"></i>ចាប់ផ្តើមទិញ</a
                      >
                      <!-- user action ux flow will going to page auth  -->
                      <a
                        href="pages/login.html"
                        class="btn btn-pill-primary btn-lg rounded-pill"
                        ><i class="bi bi-box-seam me-2"></i>ចូលរួមជាអ្នកលក់</a
                      >
                    </div>
                  </div>

                  <!-- trust by buyer  -->
                  <div class="d-flex flex-wrap align-items-center gap-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar-stack me-2">
                        <img
                          src="https://i.pravatar.cc/60?img=12"
                          class="avatar rounded-circle border border-2 border-white"
                          alt="រូបអ្នកទិញ"
                        />
                        <img
                          src="https://i.pravatar.cc/60?img=24"
                          class="avatar rounded-circle border border-2 border-white"
                          alt="រូបអ្នកទិញ"
                        />
                        <img
                          src="https://i.pravatar.cc/60?img=36"
                          class="avatar rounded-circle border border-2 border-white"
                          alt="រូបអ្នកទិញ"
                        />
                      </div>
                      <small class="text-muted"
                        >អតិថិជនជាង ១០,០០០ នាក់ ពេញចិត្ត</small
                      >
                    </div>
                    <div class="vr d-none d-md-inline"></div>
                  </div>
                </div>
              </div>

              <!-- Right: Visual  -->
              <div class="col-lg-6">
                <div class="position-relative px-2 px-lg-4">
                  <!-- Main visual element-->
                  <img
                    class="img-fluid rounded-4 shadow-strong w-100 object-fit-cover"
                    src="assets/images/hero-banner-kb.jpg"
                    alt="Khmer handicraft"
                  />

                  <div
                    class="floating-card shadow-lg rounded-4 ms-3 ms-lg-4 d-none d-lg-block animate"
                    style="width: 220px"
                  >
                    <div class="d-flex align-items-center gap-3">
                      <img
                        src="assets/images/product-img-2.jpg"
                        class="rounded-3 object-fit-cover"
                        style="width: 56px; height: 56px"
                        alt="product"
                      />
                      <div>
                        <div class="fw-semibold">ម្រេចកំពត</div>
                        <small class="text-success">
                          <i class="bi bi-graph-up-arrow me-1"></i> កំពុងពេញនិយម
                        </small>
                      </div>
                    </div>
                  </div>

                  <!-- floating element for special  -->
                  <div
                    class="floating-card shadow rounded-4 mb-3 me-3 me-lg-4 d-none d-lg-block animate"
                    style="width: 260px"
                  >
                    <div class="card-body">
                      <div
                        class="d-flex align-items-center justify-content-between mb-2"
                      >
                        <span class="fw-semibold"
                          >ព្រឹត្តិការណ៍ពិសេសថ្ងៃនេះ</span
                        >
                        <i class="bi bi-stars"></i>
                      </div>
                      <ul class="list-unstyled mb-0 small">
                        <li class="d-flex align-items-center gap-2">
                          <i class="bi bi-check2-circle"></i> កន្សែងសូត្រថ្មី
                        </li>
                        <li class="d-flex align-items-center gap-2">
                          <i class="bi bi-check2-circle"></i>
                          ស្ករត្នោតអ័រហ្គានិច
                        </li>
                        <li class="d-flex align-items-center gap-2">
                          <i class="bi bi-check2-circle"></i> សិប្បកម្មពីសៀមរាប
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero banner -->

      <!-- Partner -->
      <section class="py-5 partners-area">
        <div class="container">
          <div class="section-header mb-4">
            <h3>ដៃគូរសហការណ៍</h3>
            <p class="text-secondary mb-0">
              សហការជាមួយរដ្ឋាភិបាល • អង្គការ • ក្រុមហ៊ុនឯកជន • សហគមន៍
            </p>
          </div>

          <div
            class="swiper"
            id="partnersSwiper"
            aria-label="Partners carousel"
          >
            <div class="swiper-wrapper">
              <!-- MOC -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img
                      src="assets/images/partner-moc.png"
                      alt="ក្រសួងពាណិជ្ជកម្ម"
                    />
                  </div>
                  <div class="partner-name">ក្រសួងពាណិជ្ជកម្ម</div>
                  <div class="partner-meta">Government Partner</div>
                </div>
              </div>

              <!-- ABA -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img src="assets/images/partner-aba.png" alt="ABA Bank" />
                  </div>
                  <div class="partner-name">ABA Bank</div>
                  <div class="partner-meta">Banking Partner</div>
                </div>
              </div>

              <!-- Wing -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img
                      src="assets/images/partner-wing.jpg"
                      alt="Wing Cambodia"
                    />
                  </div>
                  <div class="partner-name">Wing</div>
                  <div class="partner-meta">Fintech Partner</div>
                </div>
              </div>

              <!-- Fair Trade Cambodia -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img
                      src="assets/images/partner-fade-trade.png"
                      alt="Fair Trade Cambodia"
                    />
                  </div>
                  <div class="partner-name">Fair Trade Cambodia</div>
                  <div class="partner-meta">NGO Partner</div>
                </div>
              </div>

              <!-- TrueMoney -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img
                      src="assets/images/partner-vatanak.jpg"
                      alt="TrueMoney"
                    />
                  </div>
                  <div class="partner-name">TrueMoney</div>
                  <div class="partner-meta">Payment Partner</div>
                </div>
              </div>

              <!-- Oxfam -->
              <div class="swiper-slide">
                <div class="partner-tile">
                  <div class="partner-logo">
                    <img
                      src="assets/images/partner-ox.png"
                      alt="Oxfam Cambodia"
                    />
                  </div>
                  <div class="partner-name">Oxfam Cambodia</div>
                  <div class="partner-meta">NGO Partner</div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <!-- PRODUCT-FEATURE -->
      <section class="product-feature py-5 mb-5">
        <div class="container">
          <div class="section-head">
            <h2 class="h3 fw-bold m-0 d-inline-block">ផលិតផលក្នុងស្រុក</h2>
          </div>

          <!-- មុខងារជ្រើស -->
          <div class="row mb-3">
            <div class="col-12">
              <ul
                class="nav nav-pills flex-wrap gap-2"
                id="pf-pills"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link btn-glass px-3 active"
                    id="pf-all-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pf-all"
                    type="button"
                    role="tab"
                    aria-controls="pf-all"
                    aria-selected="true"
                  >
                    ទាំងអស់
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link btn-glass px-3"
                    id="pf-food-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pf-food"
                    type="button"
                    role="tab"
                    aria-controls="pf-food"
                    aria-selected="false"
                  >
                    អាហារ
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link btn-glass px-3"
                    id="pf-souvenir-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pf-souvenir"
                    type="button"
                    role="tab"
                    aria-controls="pf-souvenir"
                    aria-selected="false"
                  >
                    វត្ថុអនុស្សាវរីយ៍
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link btn-glass px-3"
                    id="pf-craft-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pf-craft"
                    type="button"
                    role="tab"
                    aria-controls="pf-craft"
                    aria-selected="false"
                  >
                    សិប្បកម្ម
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link btn-glass px-3"
                    id="pf-organic-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pf-organic"
                    type="button"
                    role="tab"
                    aria-controls="pf-organic"
                    aria-selected="false"
                  >
                    ផលិតផលសរីរាង្គ
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <!-- បញ្ជីផលិតផល -->
          <div class="tab-content pt-2">
            <!-- ទាំងអស់ -->
            <div
              class="tab-pane fade show active"
              id="pf-all"
              role="tabpanel"
              aria-labelledby="pf-all-tab"
              tabindex="0"
            >
              <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/product-img-1.jpg"
                          alt="Palm sugar"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Palm sugar -->
                        <h5 class="card-title">ស្ករត្នោត</h5>
                        <!-- EN: Organic product from Kampong Speu -->
                        <p class="card-text text-muted">
                          ផលិតផលអ័រហ្គានិកពីខេត្តកំពង់ស្ពឺ
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$4.50</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/products/il_fullxfull.6317552416_mx5q.avif"
                          alt="Silk scarf"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Silk scarf -->
                        <h5 class="card-title">ក្រមា</h5>
                        <!-- EN: Handwoven by local artisans -->
                        <p class="card-text text-muted small">
                          ត្បាញដោយដៃដោយសិប្បករខ្មែរ
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$12.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/product-img-2.jpg"
                          alt="Pepper"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Kampot pepper -->
                        <h5 class="card-title">ម្រេចកំពត</h5>
                        <!-- EN: Geographical Indication (GI) -->
                        <p class="card-text text-muted small">
                          សញ្ញាសម្គាល់ភូមិសាស្ត្រ (GI)
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$7.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 4 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/product-img-3.jpg"
                          alt="Ceramic"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Handmade ceramic -->
                        <h5 class="card-title">សេរ៉ាមិចធ្វើដោយដៃ</h5>
                        <!-- EN: Minimal rustic design -->
                        <p class="card-text text-muted small">
                          រចនាបែបសាមញ្ញជាយទំនើប
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$18.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 5 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3 bg-warning-subtle"
                          src="assets/images/kiriku.png"
                          alt="Ceramic"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Handmade ceramic -->
                        <h5 class="card-title">សេរ៉ាមិចធ្វើដោយដៃ</h5>
                        <!-- EN: Minimal rustic design -->
                        <p class="card-text text-muted small">
                          រចនាបែបសាមញ្ញជាយទំនើប
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$18.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 6 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/sabo.png"
                          alt="Ceramic"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Handmade ceramic -->
                        <h5 class="card-title">សេរ៉ាមិចធ្វើដោយដៃ</h5>
                        <!-- EN: Minimal rustic design -->
                        <p class="card-text text-muted small">
                          រចនាបែបសាមញ្ញជាយទំនើប
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$18.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 7 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3"
                          src="assets/images/Mchhou krerng.webp"
                          alt="Ceramic"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Handmade ceramic -->
                        <h5 class="card-title">សេរ៉ាមិចធ្វើដោយដៃ</h5>
                        <!-- EN: Minimal rustic design -->
                        <p class="card-text text-muted small">
                          រចនាបែបសាមញ្ញជាយទំនើប
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$18.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- CARD 8 -->
                <div class="col-12 col-sm-6 col-lg-3">
                  <a
                    href="pages/cartNcheckout.html"
                    class="text-decoration-none text-dark"
                  >
                    <div class="card card-kb h-100">
                      <div class="position-relative">
                        <img
                          class="card-img-top rounded-3 border"
                          src="assets/images/angkor-milke.jpeg"
                          alt="Ceramic"
                        />
                        <span
                          class="badge badge-verified position-absolute start-0 m-2"
                        >
                          Verified

                          <i class="bi bi-patch-check-fill"></i>
                        </span>
                        <button
                          type="button"
                          class="btn btn-glass btn-sm position-absolute top-0 end-0 m-2 active-heart"
                        >
                          <i class="bi bi-heart"></i>
                        </button>
                      </div>
                      <div class="card-body">
                        <!-- EN: Handmade ceramic -->
                        <h5 class="card-title">សេរ៉ាមិចធ្វើដោយដៃ</h5>
                        <!-- EN: Minimal rustic design -->
                        <p class="card-text text-muted small">
                          រចនាបែបសាមញ្ញជាយទំនើប
                        </p>
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="price">$18.00</div>
                          <button class="btn btn-pill-primary btn-sm">
                            <i class="bi bi-bag me-1"></i>ដាក់ចូលកន្រ្តក
                          </button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <!-- Food -->
            <div
              class="tab-pane fade"
              id="pf-food"
              role="tabpanel"
              aria-labelledby="pf-food-tab"
              tabindex="0"
            >
              <h5 class="alert alert-warning">មិនទាន់មានផលិតផលទេ</h5>
            </div>

            <!-- Souvenir -->
            <div
              class="tab-pane fade"
              id="pf-souvenir"
              role="tabpanel"
              aria-labelledby="pf-souvenir-tab"
              tabindex="0"
            >
              <h5 class="alert alert-warning">មិនទាន់មានផលិតផលទេ</h5>
            </div>

            <!-- Craft -->
            <div
              class="tab-pane fade"
              id="pf-craft"
              role="tabpanel"
              aria-labelledby="pf-craft-tab"
              tabindex="0"
            >
              <h5 class="alert alert-warning">មិនទាន់មានផលិតផលទេ</h5>
            </div>

            <!-- Organic -->
            <div
              class="tab-pane fade"
              id="pf-organic"
              role="tabpanel"
              aria-labelledby="pf-organic-tab"
              tabindex="0"
            >
              <h5 class="alert alert-warning">មិនទាន់មានផលិតផលទេ</h5>
            </div>
          </div>
        </div>
      </section>
      <!-- END PRODUCTS -->

      <!-- VENDORS -->
      <section class="py-5 vendors-hero">
        <div class="container">
          <hr class="mx-auto w-100" />
          <!-- Header -->
          <div
            class="d-flex flex-wrap align-items-end justify-content-between gap-3 section-head mb-3"
          >
            <div>
              <h2 class="h3 fw-bold m-0">អ្នកលក់ឆ្នើម</h2>
              <small class="text-muted">សហគមន៍ផលិតផលជាតិ • Verified </small>
            </div>
          </div>

          <!-- Grid -->
          <div class="row g-4" id="vendor-grid">
            <!-- Vendor 1 -->
            <div
              class="col-12 col-md-6 col-lg-4 vendor-card"
              data-tags="organic gi handicraft"
            >
              <article class="card card-kb h-100 rounded-4 overflow-hidden">
                <!-- Cover -->
                <div class="position-relative">
                  <img
                    src="assets/images/vendors/vendor-cover.jpg"
                    class="vendor-cover w-100"
                    alt="Angkor Organics cover"
                  />
                  <span
                    class="badge badge-verified position-absolute top-0 start-0 m-2"
                  >
                    Verified <i class="bi bi-patch-check-fill"></i>
                  </span>
                  <span
                    class="badge text-bg-light text-dark position-absolute bottom-0 end-0 m-2"
                    >GI</span
                  >
                </div>

                <!-- Body -->
                <div class="card-body">
                  <!-- Avatar + meta -->
                  <div class="d-flex align-items-center gap-3 mb-2">
                    <img
                      src="assets/images/commender/testi-1.avif"
                      class="vendor-avatar rounded-circle border border-3 border-white"
                      alt="Angkor Organics logo"
                    />
                    <div class="flex-grow-1">
                      <div class="card-title">អង្គរសរីរាង្គ</div>
                      <div class="small card-title">
                        <i class="bi bi-geo-alt me-1"></i>សៀមរាប
                      </div>
                    </div>
                    <div class="text-end">
                      <div class="small fw-semibold card-title">
                        4.8 <i class="bi bi-star-fill"></i>
                      </div>
                      <small class="text-muted card-title">320 reviews</small>
                    </div>
                  </div>

                  <!-- Tags -->
                  <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge text-bg-light text-dark">សិរីរាង្គ</span>
                    <span class="badge text-bg-light text-dark">ម្រេច</span>
                    <span class="badge text-bg-light text-dark">ធ្វើដោយដៃ</span>
                  </div>

                  <!-- Mini products -->
                  <div class="mini-strip d-flex justify-content-center mb-3">
                    <img
                      src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                      class="mini-thumb rounded-3"
                      alt="Kampot pepper"
                    />
                    <img
                      src="https://i.etsystatic.com/20254876/r/il/1d0cee/6317552416/il_fullxfull.6317552416_mx5q.jpg"
                      class="mini-thumb rounded-3"
                      alt="Krama scarf"
                    />
                    <img
                      src="https://www.thefairtradevillage.com/wp-content/uploads/2019/06/FTV-Ceramics-Product_AHA-7323.jpg"
                      class="mini-thumb rounded-3"
                      alt="Ceramics"
                    />
                  </div>

                  <!-- Stats -->
                  <div class="row text-center g-2 mb-3">
                    <div class="col">
                      <div class="small card-title">ផលិតផល</div>
                      <div class="fw-semibold card-title">128</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការកម្មង់</div>
                      <div class="fw-semibold card-title">1.9k</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការឆ្លើយតប</div>
                      <div class="fw-semibold card-title">98%</div>
                    </div>
                  </div>

                  <!-- Actions -->
                  <div class="d-flex justify-content-center gap-2">
                    <a href="./vendors.html" class="btn btn-pill-primary w-75"
                      ><i class="bi bi-shop me-1"></i>ចូលមើលហាង</a
                    >
                  </div>
                </div>
              </article>
            </div>

            <!-- Vendor 2 -->
            <div
              class="col-12 col-md-6 col-lg-4 vendor-card"
              data-tags="handicraft souvenir"
            >
              <article class="card card-kb h-100 rounded-4 overflow-hidden">
                <div class="position-relative">
                  <img
                    src="assets/images/vendors/vendor-cover-2.jpg"
                    class="vendor-cover w-100"
                    alt="Khmer Craft cover"
                  />
                  <span
                    class="badge badge-verified position-absolute top-0 start-0 m-2"
                    >Verified <i class="bi bi-patch-check-fill"></i
                  ></span>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3 mb-2">
                    <img
                      src="assets/images/vendors/120.jfif"
                      class="vendor-avatar rounded-circle border border-3 border-white"
                      alt="Khmer Craft logo"
                    />
                    <div class="flex-grow-1">
                      <div class="fw-semibold card-title">សិប្បកម្មខ្មែរ</div>
                      <div class="small card-title">
                        <i class="bi bi-geo-alt me-1"></i>ភ្នំពេញ
                      </div>
                    </div>
                    <div class="text-end">
                      <div class="small fw-semibold text-warning">
                        4.7 <i class="bi bi-star-fill"></i>
                      </div>
                      <small class="card-title fs-6">189 reviews</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge text-bg-light text-dark"
                      >ត្បាញដោយដៃ</span
                    >
                    <span class="badge text-bg-light text-dark"
                      >វត្ថុអនុស្សាវរីយ៍</span
                    >
                  </div>
                  <div
                    class="mini-strip d-flex justify-content-center gap-2 mb-3"
                  >
                    <img
                      src="assets/images/vendors/v-krama.jpg"
                      class="mini-thumb rounded-3"
                      alt="Krama"
                    />
                    <img
                      src="assets/images/vendors/v-woodcrat.jpg"
                      class="mini-thumb rounded-3"
                      alt="Basket"
                    />
                    <img
                      src="assets/images/vendors/v-souvenir.jpg"
                      class="mini-thumb rounded-3"
                      alt="Wood craft"
                    />
                  </div>
                  <div class="row text-center g-2 mb-3">
                    <div class="col">
                      <div class="small card-title">ផលិតផល</div>
                      <div class="fw-semibold card-title">76</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការកម្មង់</div>
                      <div class="fw-semibold card-title">980</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការឆ្លើយតប</div>
                      <div class="fw-semibold card-title">96%</div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center gap-2">
                    <a href="./vendors.html" class="btn btn-pill-primary w-75"
                      ><i class="bi bi-shop me-1"></i>ចូលមើលហាង</a
                    >
                  </div>
                </div>
              </article>
            </div>

            <!-- Vendor 3 -->
            <div
              class="col-12 col-md-6 col-lg-4 vendor-card"
              data-tags="organic"
            >
              <article class="card card-kb h-100 rounded-4 overflow-hidden">
                <div class="position-relative">
                  <img
                    src="assets/images/Blogs/blog-2.gif"
                    class="vendor-cover w-100"
                    alt="Farmer Market cover"
                  />
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3 mb-2">
                    <img
                      src="https://i.pravatar.cc/120?img=24"
                      class="vendor-avatar rounded-circle border border-3 border-white"
                      alt="Green Fields logo"
                    />
                    <div class="flex-grow-1">
                      <div class="card-title">ចម្ការ</div>
                      <div class="small card-title">
                        <i class="bi bi-geo-alt me-1"></i>ខេត្តកំពង់ចាម
                      </div>
                    </div>
                    <div class="text-end">
                      <div class="small fw-semibold card-title">
                        4.6 <i class="bi bi-star-fill"></i>
                      </div>
                      <small class="card-title">142 reviews</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge text-bg-light text-dark card-title"
                      >សរីរាង្គ</span
                    >
                    <span class="badge text-bg-light pb-0">ផ្លែឈើ</span>
                  </div>
                  <div
                    class="mini-strip d-flex gap-2 mb-3 justify-content-center"
                  >
                    <img
                      src="assets/images/e-organic-1.jpg"
                      class="mini-thumb rounded-3 w-50"
                      alt="Mango"
                    />
                    <img
                      src="assets/images/vendors/v-organic.jpg"
                      class="mini-thumb rounded-3"
                      alt="Banana"
                    />
                    <img
                      src="assets/images/vendors/vendors-home.avif"
                      class="mini-thumb rounded-3"
                      alt="Grapes"
                    />
                  </div>
                  <div class="row text-center g-2 mb-3">
                    <div class="col">
                      <div class="small card-title">ផលិតផល</div>
                      <div class="fw-semibold card-title">54</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការកម្ម៉ង់</div>
                      <div class="fw-semibold card-title">720</div>
                    </div>
                    <div class="col">
                      <div class="small card-title">ការឆ្លើយតប</div>
                      <div class="fw-semibold card-title">99%</div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center gap-2">
                    <a href="./vendors.html" class="btn btn-pill-primary w-75"
                      ><i class="bi bi-shop me-1"></i>ចូលមើលហាង</a
                    >
                  </div>
                </div>
              </article>
            </div>

            <!-- TODO: Duplicate vendor-card blocks for more vendors -->
          </div>
        </div>
      </section>

      <!-- SECTION COUNTER  -->
      <section class="py-5 counter-area">
        <div class="container">
          <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
              <div class="glass-soft p-4 h-100">
                <i class="bi bi-shop fs-1 text-support"></i>
                <div
                  data-purecounter-start="0"
                  data-purecounter-end="300"
                  data-purecounter-duration="2"
                  class="purecounter fs-2 fw-bold"
                ></div>
                <div class="text-support fs-4">អ្នកលក់</div>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="glass-soft p-4 h-100">
                <i class="bi bi-box mx-2 text-support fs-1"></i>
                <div
                  data-purecounter-start="0"
                  data-purecounter-end="500"
                  data-purecounter-duration="2"
                  class="purecounter fs-2 fw-bold"
                ></div>
                <div class="text-support fs-4">ផលិតផល</div>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="glass-soft p-4 h-100">
                <i class="bi bi-clipboard-check fs-1 text-support"></i>
                <div
                  data-purecounter-start="0"
                  data-purecounter-end="1500"
                  data-purecounter-duration="2"
                  class="purecounter fs-2 fw-bold"
                ></div>
                <div class="text-support fs-4">ការបញ្ជាទិញ</div>
              </div>
            </div>

            <div class="col-6 col-lg-3">
              <div class="glass-soft p-4 h-100">
                <i class="bi bi-hand-thumbs-up fs-1 text-support"></i>
                <div
                  data-purecounter-start="0"
                  data-purecounter-end="98"
                  data-purecounter-duration="2"
                  data-purecounter-suffix="%"
                  class="purecounter fs-2 fw-bold"
                ></div>
                <div class="text-support fs-4">ការពេញចិត្ត</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION COUNTER -->

      <!-- TESTIMONIALS -->
      <section class="testimo-area py-5">
        <div class="container">
          <div class="section-head mb-3">
            <h2 class="h3 fw-bold">មតិយោបល់ពីអ្នកប្រើប្រាស់</h2>
            <p class="card-text">ទំនុកចិត្តពីអតិថិជន និង Vendors</p>
          </div>
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card glass-soft h-100 shadow-sm p-4 rounded-4">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="assets/images/commender/testi-1.avif"
                    class="rounded-circle me-3"
                    style="width: 64px; height: 64px"
                    alt=""
                  />
                  <div>
                    <div class="fw-semibold card-title">រចនា</div>
                    <small class="card-title">អ្នកទិញ</small>
                  </div>
                </div>
                <p class="mb-0 card-title">
                  “ខ្ញុំទិញម្រេចកំពតតាម KhmerBoost មានគុណភាពល្អ និងទុកចិត្តបាន។”
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card glass-soft h-100 shadow-sm p-4 rounded-4">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="assets/images/commender/testi-2.avif"
                    class="rounded-circle me-3"
                    style="width: 64px; height: 64px"
                    alt=""
                  />
                  <div>
                    <div class="fw-semibold card-title">រតនា</div>
                    <small class="card-title">អ្នកផលិត</small>
                  </div>
                </div>
                <p class="mb-0 card-title card-title">
                  “វេទិកានេះជួយឲ្យផលិតផលខ្ញុំទៅដល់អតិថិជនថ្មីៗ។”
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card glass-soft h-100 shadow-sm p-4 rounded-4">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="assets/images/commender/testi-3.avif"
                    class="rounded-circle me-3"
                    style="width: 64px; height: 64px"
                    alt=""
                  />
                  <div>
                    <div class="fw-semibold card-title">រដ្ឋា</div>
                    <small class="card-title">អ្នកទិញ</small>
                  </div>
                </div>
                <p class="mb-0 card-title">
                  “ទិញក្រមាដែលវាយដោយដៃ ស្អាត និងដឹកជញ្ជូនលឿន។”
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- GUIDES -->
      <section class="py-5">
        <div class="container">
          <div
            class="d-flex align-items-end justify-content-between mb-4 section-head"
          >
            <h2 class="h3 fw-bold m-0">មគ្គុទ្ទេសក៍</h2>
            <a href="#" class="link-underline link-underline-opacity-0"
              >មើលទាំងអស់</a
            >
          </div>

          <div class="row g-4">
            <!-- Seller Guide -->
            <div class="col-12 col-md-4">
              <div class="card card-kb h-100 rounded-4 shadow-sm">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="avatar-56 d-inline-flex align-items-center justify-content-center rounded-circle bg-dark-subtle me-3"
                    >
                      <i class="bi bi-shop fs-4"></i>
                    </div>
                    <div>
                      <h5 class="card-title mb-0">មគ្គុទ្ទេសក៍អ្នកលក់</h5>
                      <small>Seller Guide</small>
                    </div>
                  </div>
                  <ul class="small ps-3 mb-4 card-title">
                    <li>បង្កើត Store & បន្ថែមផលិតផល</li>
                    <li>តម្លៃ, ស្តុក, និងរូបភាព</li>
                    <li>ការទទួលប្រាក់ (ABA/Wing/TrueMoney)</li>
                  </ul>
                  <a
                    href="/pages/guides.html"
                    class="btn btn-pill-primary w-100"
                  >
                    <i class="bi bi-journal-text me-2"></i>អានការណែនាំ
                  </a>
                </div>
              </div>
            </div>
            <!-- Seller Guide -->
            <div class="col-12 col-md-4">
              <div class="card card-kb h-100 rounded-4 shadow-sm">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="avatar-56 d-inline-flex align-items-center justify-content-center rounded-circle bg-dark-subtle me-3"
                    >
                      <i class="bi bi-shield-check fs-4"></i>
                    </div>
                    <div>
                      <h5 class="card-title mb-0">គោលការណ៍ទុកចិត្ត</h5>
                      <small>ការផ្ទៀងផ្ទាត់ & សុវត្ថិភាព</small>
                    </div>
                  </div>
                  <ul class="small ps-3 mb-4 card-title">
                    <li>Badge ផលិតផល/អ្នកលក់បានផ្ទៀងផ្ទាត់</li>
                    <li>ប្រភពផលិតផល & Transparency</li>
                    <li>Reviews & Ratings</li>
                  </ul>
                  <a href="#" class="btn btn-pill-primary w-100">
                    <i class="bi bi-patch-check me-2"></i>មើលគោលការណ៍
                  </a>
                </div>
              </div>
            </div>
            <!-- buyer Guide -->
            <div class="col-12 col-md-4">
              <div class="card card-kb h-100 rounded-4 shadow-sm">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div
                      class="avatar-56 d-inline-flex align-items-center justify-content-center rounded-circle bg-dark-subtle me-3"
                    >
                      <i class="bi bi-cart-check fs-4"></i>
                    </div>
                    <div>
                      <h5 class="card-title mb-0">មគ្គុទ្ទេសក៍អ្នកទិញ</h5>
                      <small>ការណែនាំពីអ្នកទិញ</small>
                    </div>
                  </div>
                  <ul class="small ps-3 mb-4 card-title">
                    <li>ស្វែងរក & ច្រោះតាម Category/តម្លៃ/តំបន់</li>
                    <li>Cart & Checkout (COD/QR Payments)</li>
                    <li>តាមដានការកម្មង់</li>
                  </ul>
                  <a href="#" class="btn btn-pill-primary rounded-pill w-100">
                    <i class="bi bi-hand-index-thumb me-2"></i>តោះចាប់ផ្តើមទិញ
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Blog Area -->
      <section class="py-5 blog-area">
        <div class="container">
          <!-- Section Header -->
          <div
            class="d-flex align-items-center justify-content-between mb-4 section-head"
          >
            <h2 class="h3 fw-bold m-0">ព័ត៌មាន និងអត្ថបទ</h2>
            <a href="#" class="link-underline link-underline-opacity-0"
              >មើលទាំងអស់</a
            >
          </div>

          <!-- Blog Cards -->
          <div class="row g-4">
            <!-- Card Blog 1 -->
            <div class="col-12 col-md-6 col-lg-8">
              <a
                href="../pages/blog-details.html"
                class="text-decoration-none text-dark"
              >
                <article class="card card-blog h-100 rounded-4">
                  <figure class="kb-media m-0 position-relative">
                    <img
                      class="card-img-top blog-img"
                      src="assets/images/Blogs/blog-mrech-1.jpg"
                      alt="blog1"
                      loading="lazy"
                      decoding="async"
                    />
                    <span
                      class="badge badge-verified position-absolute start-0 m-2"
                    >
                      Tip <i class="bi bi-exclamation-circle"></i>
                    </span>
                  </figure>

                  <div class="blog-overlay p-4">
                    <div class="blog-overlay-content">
                      <h5 class="card-title mb-2 text-light">
                        អត្ថប្រយោជន៍ GI ក្នុងម្រេចកំពត និងស្ករត្នោតកំពង់ស្ពឺ
                      </h5>
                      <p class="card-text mb-3 text-light">
                        GI ជួយផ្ដល់ការទុកចិត្ត និងបង្កើនតម្លៃផលិតផលជាតិ
                        ដោយធានាគុណភាព និងប្រភពដើម។
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <span class="btn btn-pill-primary">
                        អានបន្ថែម <i class="bi bi-arrow-right-circle"></i>
                      </span>
                    </div>
                  </div>
                </article>
              </a>
            </div>

            <!-- Card 2 Blog-->
            <div class="col-12 col-md-6 col-lg-4">
              <a
                href="../pages/blog-details.html"
                class="text-decoration-none text-dark"
              >
                <article class="card card-blog h-100 rounded-4">
                  <figure class="kb-media m-0 position-relative">
                    <img
                      class="card-img-top blog-img"
                      src="assets/images/Blogs/blog-2.gif"
                      alt="blog1"
                      loading="lazy"
                      decoding="async"
                    />
                    <span
                      class="badge badge-verified position-absolute start-0 m-2"
                    >
                      Tip <i class="bi bi-exclamation-circle"></i>
                    </span>
                  </figure>

                  <div class="blog-overlay p-4">
                    <div class="blog-overlay-content">
                      <h5 class="card-title mb-2 text-light">
                        វិធីសម្គាល់ផលិតផលសរីរាង្គត្រឹមត្រូវ
                      </h5>
                      <p class="card-text mb-3 text-light">
                        អ្នកទិញគួរតែពិនិត្យផ្លាកសញ្ញា Organic
                        និងសញ្ញាផ្ទៀងផ្ទាត់ មុនពេលទិញផលិតផលក្នុងស្រុក។
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <span class="btn btn-pill-primary">
                        អានបន្ថែម <i class="bi bi-arrow-right-circle"></i>
                      </span>
                    </div>
                  </div>
                </article>
              </a>
            </div>

            <!-- Card 3 -->

            <div class="col-12 col-md-6 col-lg-6">
              <a
                href="../pages/blog-details.html"
                class="text-decoration-none text-dark"
              >
                <article class="card card-blog h-100 rounded-4">
                  <figure class="kb-media m-0 position-relative">
                    <img
                      class="card-img-top blog-img"
                      src="assets/images/Blogs/blog-3.jpg"
                      alt="blog1"
                      loading="lazy"
                      decoding="async"
                    />
                    <span
                      class="badge badge-verified position-absolute start-0 m-2"
                    >
                      Tip <i class="bi bi-exclamation-circle"></i>
                    </span>
                  </figure>

                  <div class="blog-overlay p-4">
                    <div class="blog-overlay-content">
                      <h5 class="card-title mb-2 text-light">
                        ករណីជោគជ័យ៖ Angkor Organics
                      </h5>
                      <p class="card-text mb-3 text-light">
                        Vendor តូចមួយបានបង្កើនការលក់ 300% តាម KhmerBoost
                        ដោយប្រើរូបភាពស្អាត និងការផ្ទៀងផ្ទាត់។
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <span class="btn btn-pill-primary">
                        អានបន្ថែម <i class="bi bi-arrow-right-circle"></i>
                      </span>
                    </div>
                  </div>
                </article>
              </a>
            </div>

            <!-- card 4 -->
            <div class="col-12 col-md-6 col-lg-6">
              <a
                href="../pages/blog-details.html"
                class="text-decoration-none text-dark"
              >
                <article class="card card-blog h-100 rounded-4">
                  <figure class="kb-media m-0 position-relative">
                    <img
                      class="card-img-top blog-img"
                      src="assets/images/Blogs/blog-4.jpg"
                      alt="blog1"
                      loading="lazy"
                      decoding="async"
                    />
                    <span
                      class="badge badge-verified position-absolute start-0 m-2"
                    >
                      Tip <i class="bi bi-exclamation-circle"></i>
                    </span>
                  </figure>

                  <div class="blog-overlay p-4">
                    <div class="blog-overlay-content">
                      <h5 class="card-title mb-2 text-light">
                        គន្លឹះ ៥ សម្រាប់អ្នកលក់ Online ចាប់ផ្តើមថ្មី
                      </h5>
                      <p class="card-text mb-3 text-light">
                        រូបភាពស្អាត តម្លៃច្បាស់ ដឹកជញ្ជូនលឿន ទទួល Review ល្អ
                        និងចូលរួមព្រឹត្តិការណ៍។
                      </p>
                    </div>
                    <div class="d-flex justify-content-end">
                      <span class="btn btn-pill-primary">
                        អានបន្ថែម <i class="bi bi-arrow-right-circle"></i>
                      </span>
                    </div>
                  </div>
                </article>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- HOMEPAGE: EVENTS CTA -->
      <section class="py-5 events-cta">
        <div class="container">
          <div
            class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4"
          >
            <div>
              <h2 class="h4 m-0 mb-2">ព្រឹត្តិការណ៍នាពេលខាងមុខ</h2>
              <p class="card-title m-0">
                កុំខកខានការតាំងពិព័រណ៍ និងពិព័រណ៍ពីផលិតផលក្នុងស្រុក
              </p>
            </div>
            <a
              href="/pages/event.html"
              class="link-underline link-underline-opacity-0 card-title"
              >មើលព្រឹត្តិការណ៍ទាំងអស់</a
            >
          </div>

          <div class="event-cta-card">
            <div class="event-cta-media">
              <img
                src="https://cjbi.asia/images/1717212770wapxc-d4.png"
                alt="Featured event banner"
                class="event-cta-img"
              />
              <div class="event-cta-badge">
                <i class="bi bi-calendar-event"></i>
                <span>Sept 12–14, 2025</span>
              </div>
            </div>

            <div class="event-cta-body">
              <div class="d-flex align-items-center gap-2 mb-2">
                <span
                  class="badge rounded-pill bg-primary-subtle text-primary-emphasis"
                  >Business Expo</span
                >
                <span class="sep-dot"></span>
                <span class="small card-title"
                  ><i class="bi bi-geo-alt"></i> អនុសញ្ញាភ្នំពេញ មជ្ឈមណ្ឌល</span
                >
              </div>

              <h3 class="h5 mb-2">ពិព័រណ៍ពីផលិតផលក្នុងស្រុក 2025</h3>
              <p class="text-muted mb-3 text-allTheme">
                ការតាំងពិពណ៍បង្ហាញផលិតផលខ្មែរ សិប្បកម្មសិប្បករ
                និងការច្នៃប្រឌិតកសិកម្ម។ បណ្តាញ ការបង្ហាញ
                និងការផ្គូផ្គងអ្នកទិញ-អ្នកលក់។
              </p>

              <div class="d-flex flex-wrap align-items-center gap-2">
                <a href="pages/register.html" class="btn btn-pill-primary"
                  >ចុះឈ្មោះ</a
                >
                <a href="" class="btn btn-pill-primary">ព័ត៍មានលំអិត</a>
              </div>

              <!-- Optional countdown -->
              <div
                class="countdown small card-title mt-3"
                data-countdown="2025-09-12T09:00:00"
              >
                Starts in: <span class="cd-d">--</span>d
                <span class="cd-h">--</span>h <span class="cd-m">--</span>m
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CHECKOUT STEPS -->

      <!-- CTA -->
      <section class="py-5">
        <div class="container">
          <div
            class="glass-soft p-4 p-lg-5 d-lg-flex align-items-center justify-content-between rounded-xl"
          >
            <div class="mb-3 mb-lg-0">
              <h3 class="fw-bold mb-2">ចូលរួមជាអ្នកលក់ / អ្នកផលិត</h3>
              <p class="card-text mb-0">
                បង្កើនការមើលឃើញ និងលក់ជាមួយ KhmerBoost – ការផ្ទៀងផ្ទាត់
                និងជំនួយផ្នែកពាណិជ្ជកម្ម។
              </p>
            </div>
            <a href="./pages/register.html" class="btn btn-pill-primary btn-lg"
              ><i class="bi bi-person-plus me-2"></i>តស់ចាប់ផ្តើម</a
            >
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer-framed py-3">
      <div class="container position-relative footer-inner">
        <!-- Top: CTA / Newsletter -->
        <div class="row g-4 align-items-center mb-4">
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/images/logo.png"
                alt="kb-logo"
                class="logo-footer flex-shrink-0"
              />
              <p class="mb-0 text-footer">
                បណ្តាញពាណិជ្ជកម្មសហការសម្រាប់កម្ពុជា — ផលិតផលក្នុងស្រុក •
                ការផ្ទៀងផ្ទាត់ • ទំនុកចិត្ត
              </p>
            </div>
          </div>
        </div>

        <hr class="footer-sep" />

        <!-- Middle: Columns -->
        <div class="row g-5">
          <div class="col-md-4">
            <h6 class="fw-semibold mb-3 text-title">About KhmerBoost</h6>
            <p class="text-footer">
              វេទិកាពាណិជ្ជកម្មសហការដែលភ្ជាប់អ្នកផលិត អ្នកលក់
              និងអ្នកទិញក្នុងប្រទេស ដោយផ្តោតលើភាពទុកចិត្ត និងការផ្ទៀងផ្ទាត់។
            </p>
            <div class="d-flex gap-2 mt-3">
              <a class="social-btn" href="#" aria-label="facebook"
                ><i class="bi bi-facebook"></i
              ></a>
              <a
                class="social-btn"
                href="https://t.me/khmer_boost"
                aria-label="telegram"
                ><i class="bi bi-telegram"></i
              ></a>
              <a class="social-btn" href="#" aria-label="messenger"
                ><i class="bi bi-messenger"></i
              ></a>
            </div>
          </div>

          <div class="col-md-4">
            <h6 class="fw-semibold mb-3 text-title">Quick Links</h6>
            <ul class="list-unstyled link-grid">
              <li>
                <a class="footer-link" href="/pages/products.html">ផលិតផល</a>
              </li>
              <li>
                <a class="footer-link" href="/pages/vendors-list.html"
                  >អ្នកផលិត</a
                >
              </li>
              <li>
                <a class="footer-link" href="/pages/event.html"
                  >ព្រឹត្តិការណ៍</a
                >
              </li>
              <li>
                <a class="footer-link" href="/pages/tourisim.html">ទេសចរណ៍</a>
              </li>
              <li>
                <a class="footer-link" href="/pages/guides.html"
                  >មគ្គុទ្ទេសក៍</a
                >
              </li>
              <li><a class="footer-link" href="/pages/blog.html">ប្លុក</a></li>
              <li><a class="footer-link" href="#">Privacy</a></li>
              <li><a class="footer-link" href="#">Terms</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h6 class="fw-semibold mb-3 text-title">ទំនាក់ទំនងមកកាន់យើង</h6>
            <ul class="list-unstyled text-footer">
              <li class="d-flex align-items-center mb-2">
                <i class="bi bi-telephone me-2 opacity-75"></i> +855 12 345 678
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="bi bi-envelope me-2 opacity-75"></i>
                hello@khmerboost.com
              </li>
              <li class="d-flex align-items-center">
                <i class="bi bi-geo-alt me-2 opacity-75"></i> Phnom Penh,
                Cambodia
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom: Legal -->
        <div
          class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 small text-footer-weak"
        >
          <div>© <span id="year"></span> KhmerBoost. All rights reserved.</div>
          <div class="mt-2 mt-md-0">
            Made by Group12 • <a class="footer-link" href="#">Back to top</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/themeMode.js"></script>

    <!-- counter lib js  -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
      new PureCounter();
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      const partnersSwiper = new Swiper("#partnersSwiper", {
        loop: true,
        autoplay: { delay: 2200, disableOnInteraction: false },
        speed: 700,
        spaceBetween: 12,
        // Responsive slides per view
        slidesPerView: 1.2,
        breakpoints: {
          480: { slidesPerView: 2 },
          640: { slidesPerView: 2.5 },
          768: { slidesPerView: 3 },
          992: { slidesPerView: 4 },
          1200: { slidesPerView: 5 },
        },
        pagination: { el: ".swiper-pagination", clickable: true },
      });
    </script>

    <!-- <script>
    // Year
    document.getElementById("year").textContent = new Date().getFullYear();

    // Navbar elevate on scroll
    (function () {
      const nav = document.getElementById("kbNav");
      const onScroll = () =>
        nav.classList.toggle("navbar-elevate", window.scrollY > 12);
      document.addEventListener("scroll", onScroll);
      onScroll();
    })();
  </script> -->

    <script>
      const btnheart = document.querySelectorAll(".active-heart");
      const iconH = document.querySelectorAll(".card a .bi-heart");
      console.log(iconH);
      for (let items of btnheart) {
        items.addEventListener("click", (e) => {
          e.preventDefault();

          let icon = items.lastElementChild;

          if (icon.classList.contains("bi-heart")) {
            icon.classList.remove("bi-heart");
            icon.classList.add("bi-heart-fill");
          } else {
            icon.classList.remove("bi-heart-fill");
            icon.classList.add("bi-heart");
          }
        });
      }
    </script>
    <!--  event  -->
    <script>
      (function () {
        const el = document.querySelector(".events-cta .countdown");
        if (!el) return;
        const targetISO = el.getAttribute("data-countdown");
        const target = new Date(targetISO).getTime();

        function tick() {
          const now = Date.now();
          const dist = Math.max(0, target - now);
          const d = Math.floor(dist / (1000 * 60 * 60 * 24));
          const h = Math.floor((dist / (1000 * 60 * 60)) % 24);
          const m = Math.floor((dist / (1000 * 60)) % 60);
          el.querySelector(".cd-d").textContent = String(d);
          el.querySelector(".cd-h").textContent = String(h).padStart(2, "0");
          el.querySelector(".cd-m").textContent = String(m).padStart(2, "0");
        }
        tick();
        setInterval(tick, 30_000); // update every 30s
      })();
    </script>
  </body>
</html>
