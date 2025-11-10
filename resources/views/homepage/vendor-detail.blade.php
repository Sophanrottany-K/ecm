 @extends('layouts.masterHomepage')
 @section('title', 'vendor-detail')
 @section('content')
     <main>
         <section class="vendors-hero py-5">
             <div class="container">
                 <div class="hero-banner position-relative rounded-4 overflow-hidden">
                     <img src="https://file3.qdnd.vn/data/images/0/2024/08/10/upload_2282/1605thuy15.jpg?dpi=150&quality=100&w=870"
                         alt="Hero Cover" class="hero-img w-100">
                     <div class="overlay position-absolute"></div>
                     <div class="profile-card position-absolute">
                         <div class="profile-content text-center">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwgu1A5zgPSvfE83nurkuzNEoXs9DMNr8Ww&s"
                                 alt="Profile" class="profile-img mb-2">
                             <h4 class="text-white mb-1">កែ សុដាវណ្ណ</h4>
                             <h6 class="text-white-50 mb-2">Kea Sodavann</h6>
                             <p class="text-white-50 mb-3">Professional seller with over 5 years of experience. Trusted by
                                 1200+ customers.</p>
                             <div class="d-flex justify-content-center gap-2">
                                 <a href="#" class="btn btn-contact rounded-pill"><i
                                         class="bi bi-envelope me-1"></i>Contact</a>
                                 <a href="#" class="btn btn-share round-p"><i
                                         class="bi bi-share-fill me-1"></i>Share</a>
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

                 <ul class="nav nav-tabs mb-3 gap-2 w-50 btn-glass" role="tablist">
                     <li class="nav-item "><button class="nav-link rounded-pill active" data-bs-toggle="tab"
                             data-bs-target="#best">អង្ករកសិករខ្មែរ</button></li>
                     <li class="nav-item"><button class="nav-link rounded-pill" data-bs-toggle="tab"
                             data-bs-target="#new">ស្រូវកសិករខ្មែរ</button></li>
                     <li class="nav-item"><button class="nav-link rounded-pill" data-bs-toggle="tab"
                             data-bs-target="#all">ផលិតផលសរុប</button></li>
                 </ul>

                 <div class="tab-content">
                     <div class="tab-pane fade show active" id="best">
                         <div class="row g-4">

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://hatthariceblog.wordpress.com/wp-content/uploads/2017/04/non-basmati-rice581.jpg?w=610"
                                         alt="Silk Scarf">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Silk Scarf (ក្រមា)</div>
                                             <div class="small text-soft">Handwoven | Natural dye</div>
                                         </div>
                                         <div class="price">$18</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjoDMx1Xbhg_u-yAhfcsvnT1gztQU3B2kTG-2DViIWCAJHTADJrdmPIHqC-EVHKBbgGQs&usqp=CAU"
                                         alt="Ceramic Bowl">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Ceramic Bowl Set</div>
                                             <div class="small text-soft">Minimal rustic</div>
                                         </div>
                                         <div class="price">$28</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn btn-pill-primary btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://oss6.tnaot.com/tnaot/image/2023/01/04/4dcbd76c49294d408e59140c6ea360cb.jpg"
                                         alt="Kampot Pepper">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Kampot Pepper</div>
                                             <div class="small text-soft">GI Certified</div>
                                         </div>
                                         <div class="price">$12</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://niront.com/cdn/shop/files/sticky-rice-glutinous-rice-543761.png?v=1742484758"
                                         alt="Sticky Rice">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Sticky Rice</div>
                                             <div class="small text-soft">GI Certified</div>
                                         </div>
                                         <div class="price">$12</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://143971090.cdn6.editmysite.com/uploads/1/4/3/9/143971090/s758436718286259987_c98_i1_w696.jpeg?width=640"
                                         alt="Silk Scarf">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Silk Scarf (ក្រមា)</div>
                                             <div class="small text-soft">Handwoven | Natural dye</div>
                                         </div>
                                         <div class="price">$18</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://hatthariceblog.wordpress.com/wp-content/uploads/2017/04/basmati-rice-in-a-basket-fotolia_499489743.jpg?w=1000"
                                         alt="Rice">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Rice Set</div>
                                             <div class="small text-soft">Premium Quality</div>
                                         </div>
                                         <div class="price">$28</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://image.thmeythmey.com/pictures/2024/11/09/a.jpg" alt="Kampot Pepper">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Kampot Pepper</div>
                                             <div class="small text-soft">GI Certified</div>
                                         </div>
                                         <div class="price">$12</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://static.information.gov.kh/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeVBZQWc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--2150282de703e7184751da153c49775abb212d53/x4.jpg"
                                         alt="Kampot Pepper">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">Kampot Pepper</div>
                                             <div class="small text-soft">GI Certified</div>
                                         </div>
                                         <div class="price">$12</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>

                     <div class="tab-pane fade" id="new">
                         <div class="row g-4">
                             <!-- Card 1 -->
                             <div class="col-12 col-sm-6 col-lg-3">
                                 <div class="card card-kb p-3 h-100">
                                     <img class="product-img w-100"
                                         src="https://s3.ams.com.kh/economy/2023/11/improve-rice-crop-yields.jpg"
                                         alt="New Rice">
                                     <div class="mt-3 d-flex justify-content-between align-items-start">
                                         <div>
                                             <div class="fw-semibold">New Rice</div>
                                             <div class="small text-soft">Organic</div>
                                         </div>
                                         <div class="price">$18</div>
                                     </div>
                                     <div class="d-flex gap-2 mt-3">
                                         <button class="btn  btn-pill-primary  btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#cartModal"><i class="bi bi-bag me-1"></i>Add to
                                             Cart</button>
                                         <button class="btn btn-glass btn-sm" data-bs-toggle="modal"
                                             data-bs-target="#wishlistModal"><i
                                                 class="bi bi-heart me-1"></i>Wishlist</button>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>

                     <!-- All Tab -->
                     <div class="tab-pane fade" id="all">
                         <div class="alert alert-light border d-flex align-items-center" role="alert">
                             <i class="bi bi-funnel me-2"></i> Filters coming soon (price range, category, rating)…
                         </div>
                     </div>
                 </div>
             </div>

             <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content">
                         <div class="modal-header bg-light">
                             <h5 class="modal-title"><i class="bi bi-bag me-2"></i> Added to Cart</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">✅ ផលិតផលត្រូវបានបន្ថែមទៅក្នុង Cart របស់អ្នក។</div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <a href="#" class="btn  btn-pill-primary ">Go to Cart</a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="modal fade" id="wishlistModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content">
                         <div class="modal-header bg-light">
                             <h5 class="modal-title"><i class="bi bi-heart me-2"></i> Added to Wishlist</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">❤️ ផលិតផលត្រូវបានបន្ថែមទៅក្នុង Wishlist របស់អ្នក។</div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <a href="#" class="btn  btn-pill-primary ">Go to Wishlist</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>




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
                                     <div class="text-warning"><i class="bi bi-star-fill"></i> <i
                                             class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                             class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i></div>
                                     <div class="small text-soft">326 reviews</div>
                                 </div>
                             </div>
                             <hr>
                             <div class="small">Quality</div>
                             <div class="progress mb-2">
                                 <div class="progress-bar" style="width:84%"></div>
                             </div>
                             <div class="small">Delivery</div>
                             <div class="progress mb-2">
                                 <div class="progress-bar" style="width:92%"></div>
                             </div>
                             <div class="small">Service</div>
                             <div class="progress">
                                 <div class="progress-bar" style="width:80%"></div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-8">
                         <div class="card-kb p-4 h-100">
                             <div class="d-flex align-items-start gap-3">
                                 <img src="https://i.pravatar.cc/100?img=22" class="rounded-circle" width="48"
                                     height="48" alt="">
                                 <div>
                                     <div class="fw-semibold">Sophea</div>
                                     <div class="text-warning small mb-1"><i class="bi bi-star-fill"></i><i
                                             class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                             class="bi bi-star-fill"></i><i class="bi bi-star"></i></div>
                                     <p class="mb-0 text-soft">“Great craftsmanship and fast delivery. The silk scarf is
                                         beautiful!”</p>
                                 </div>
                             </div>
                             <hr>
                             <div class="d-flex align-items-start gap-3">
                                 <img src="https://i.pravatar.cc/100?img=36" class="rounded-circle" width="48"
                                     height="48" alt="">
                                 <div>
                                     <div class="fw-semibold">Dara</div>
                                     <div class="text-warning small mb-1"><i class="bi bi-star-fill"></i><i
                                             class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                             class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
                                     <p class="mb-0 text-soft">“Authentic local products. Will order again.”</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

     </main>
 @endsection
