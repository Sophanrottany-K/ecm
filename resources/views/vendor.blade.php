@extends('layouts.master')
@section('title', 'vendor')
@section('content')
    <main>
        <section class="vendors-hero py-5">
            <div class="container">
                <div class="hero-banner position-relative rounded-4 overflow-hidden">
                    <img src="../assets/images/vendors/hero_vendor.jpg" alt="Hero Cover" class="hero-img w-100" />
                    <div class="overlay position-absolute"></div>
                    <div class="profile-card position-absolute">
                        <div class="profile-content text-center">
                            <img src="../assets/images/vendors/vendor-profile.jfif" alt="Profile"
                                class="profile-img mb-2" />
                            <h4 class="text-white mb-1">កែ សុដាវណ្ណ</h4>
                            <h6 class="text-white-50 mb-2">Kea Sodavann</h6>
                            <p class="text-white-50 mb-3">
                                អ្នកផលិតនិងចែកចាយផលិតផលកសិកម្មជាតិ
                            </p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-contact"><i class="bi bi-envelope me-1"></i>Contact</a>
                                <a href="#" class="btn btn-share"><i class="bi bi-share-fill me-1"></i>Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block position-absolute d-flex gap-3 flex-wrap">
                        <div class="feature-card">
                            <i class="bi bi-geo-alt"></i>
                            <div>
                                <strong>Location</strong>
                                <p>Siem Reap, Cambodia</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <i class="bi bi-star-fill"></i>
                            <div>
                                <strong>Rating</strong>
                                <p>4.9 / 5</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <i class="bi bi-bag-check"></i>
                            <div>
                                <strong>Sales</strong>
                                <p>1200+</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <i class="bi bi-award"></i>
                            <div>
                                <strong>Verified</strong>
                                <p>Yes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section id="products" class="py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-head d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 fw-bold m-0">ផលិតផលកសិកម្ម</h2>
                    <a class="text-soft" href="#">View all</a>
                </div>

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3 gap-2" role="tablist">
                    <li class="nav-item">
                        <button class="btn btn-glass active" data-bs-toggle="tab" data-bs-target="#best">
                            អង្ករកសិករខ្មែរ
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-glass" data-bs-toggle="tab" data-bs-target="#new">
                            ស្រូវកសិករខ្មែរ
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-glass" data-bs-toggle="tab" data-bs-target="#all">
                            ផលិតផលសរុប
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Best Tab -->
                    <div class="tab-pane fade show active" id="best">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-product-1.webp"
                                        alt="Silk Scarf" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវសែនក្រអូប</div>
                                        </div>
                                        <div class="price">$18</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendor-p-2.jfif"
                                        alt="Ceramic Bowl" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវផ្កាខ្ញី</div>
                                        </div>
                                        <div class="price">$28</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-p-3.jpg"
                                        alt="Kampot Pepper" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវសម្រូប</div>
                                        </div>
                                        <div class="price">$12</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100"
                                        src="https://niront.com/cdn/shop/files/sticky-rice-glutinous-rice-543761.png?v=1742484758"
                                        alt="Sticky Rice" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវដំណើប</div>
                                        </div>
                                        <div class="price">$12</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-p-5.webp"
                                        alt="Silk Scarf" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវដំណើបខ្មៅ</div>
                                        </div>
                                        <div class="price">$18</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-p-6.webp"
                                        alt="Rice" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវផ្កាម្លេះ</div>
                                        </div>
                                        <div class="price">$28</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 7 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-p-7.jpg"
                                        alt="Kampot Pepper" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវOM</div>
                                        </div>
                                        <div class="price">$12</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 8 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100" src="../assets/images/vendors/vendors-p-8.jpg"
                                        alt="Kampot Pepper" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">អង្ករស្រូវជង្គុងខ្មៅ</div>
                                        </div>
                                        <div class="price">$12</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- New Tab -->
                    <div class="tab-pane fade" id="new">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card card-kb p-3 h-100">
                                    <img class="product-img w-100"
                                        src="https://s3.ams.com.kh/economy/2023/11/improve-rice-crop-yields.jpg"
                                        alt="New Rice" />
                                    <div class="mt-3 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">ស្រូវផ្កាខ្ញី</div>
                                        </div>
                                        <div class="price">$18</div>
                                    </div>
                                    <div class="d-flex gap-2 mt-3">
                                        <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cartModal">
                                            <i class="bi bi-bag me-1"></i>Add to Cart
                                        </button>
                                        <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ទិញឥឡូវនេះModal">
                                            ទិញឥឡូវនេះ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All Tab -->
                </div>

                <!-- Cart Modal -->
                <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h5 class="modal-title">
                                    <i class="bi bi-bag me-2"></i> Added to Cart
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                ✅ ផលិតផលត្រូវបានបន្ថែមទៅក្នុង Cart របស់អ្នក។
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <a href="./cartNcheckout.html" class="btn btn-pill-primary">Go to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ទិញឥឡូវនេះ Modal -->
                <div class="modal fade" id="ទិញឥឡូវនេះModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light">
                                <h5 class="modal-title">ទំនាក់ទំនងមកកាន់ពួកយើងឥឡូវនេះ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex align-items-center justify-content-center mb-3 gap-4">
                                    <a href="#"> <i class="fa-brands fa-telegram icon"></i> </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram icon"></i>
                                    </a>
                                    <a href="#"> <i class="fa-brands fa-facebook icon"></i> </a>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-messenger icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- REVIEWS & TRUST -->
        <section id="reviews" class="py-5">
            <div class="container" data-aos="fade-up">
                <div class="section-head">
                    <h2 class="h4 fw-bold m-0">Reviews & Trust</h2>
                    <a class="text-soft" href="#">Write a review</a>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card-kb p-4 h-100">
                            <div class="d-flex align-items-center gap-3">
                                <div class="display-6 fw-bold">4.8</div>
                                <div>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="small text-soft">326 reviews</div>
                                </div>
                            </div>
                            <hr />
                            <div class="small">Quality</div>
                            <div class="progress mb-2">
                                <div class="progress-bar" style="width: 84%"></div>
                            </div>
                            <div class="small">Delivery</div>
                            <div class="progress mb-2">
                                <div class="progress-bar" style="width: 92%"></div>
                            </div>
                            <div class="small">Service</div>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-kb p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <img src="https://i.pravatar.cc/100?img=22" class="rounded-circle" width="48"
                                    height="48" alt />
                                <div>
                                    <div class="fw-semibold">Sophea</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star"></i>
                                    </div>
                                    <p class="mb-0 text-soft">
                                        “Great craftsmanship and fast delivery. The silk scarf is
                                        beautiful!”
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="d-flex align-items-start gap-3">
                                <img src="https://i.pravatar.cc/100?img=36" class="rounded-circle" width="48"
                                    height="48" alt />
                                <div>
                                    <div class="fw-semibold">Dara</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-half"></i>
                                    </div>
                                    <p class="mb-0 text-soft">
                                        “Authentic local products. Will order again.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </section>
    </main>
@endsection
