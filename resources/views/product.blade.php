 @extends('layouts.master')
 @section('title', 'product')
 @section('content')

     <main class="products-list">
         <!-- product -->
         <section class="product my-5" id="products">
             <div class="container" data-aos="fade-up">
                 <div class="row">
                     <!-- Sidebar Filter -->
                     <aside class="col-12 col-xl-3 mb-3">
                         <form class="pro-list-card" style="position: sticky; top: 10%">
                             <h5>Filters</h5>

                             <!-- Category -->
                             <label class="form-label">ប្រភេទ</label>
                             <select class="form-select mb-3" id="categorySelect">
                                 <option selected>ទាំងអស់</option>
                                 <option>កសិកម្ម 🌾</option>
                                 <option>សិប្បកម្ម 🧵</option>
                                 <option>អាហារ​ 😋</option>
                                 <option>ផ្សេងៗ</option>
                             </select>

                             <!-- Location -->
                             <label class="form-label">តំបន់</label>
                             <select class="form-select mb-3">
                                 <option>ទាំងអស់</option>
                                 <option>ភ្នំពេញ</option>
                                 <option>សៀមរាប</option>
                                 <option>បាត់ដំបង</option>
                                 <option>កំពង់ចាម</option>
                             </select>

                             <!-- Price Range -->
                             <label class="form-label mb-0">តម្លៃ (USD)</label>
                             <div class="d-flex justify-content-between align-items-center text-muted">
                                 <span class="text text-black-50">0</span>
                                 <span class="text text-black-50">500</span>
                             </div>
                             <input type="range" class="form-range" min="0" max="500" step="10"
                                 id="priceRange" />
                             <small class="text">តម្លៃជ្រើសរើស៖ <span id="priceValue">$250</span></small>

                             <!-- Sort -->
                             <label class="form-label">តម្រៀបតាម</label>
                             <select class="form-select mb-3">
                                 <option>ថ្មីបំផុត</option>
                                 <option>តម្លៃទាបទៅខ្ពស់</option>
                                 <option>តម្លៃខ្ពស់ទៅទាប</option>
                                 <option>ពេញនិយម</option>
                             </select>

                             <!-- Buttons -->
                             <button type="button" class="btn btn-apply btn-pill-primary" id="applyBtn">
                                 អនុវត្ត
                             </button>
                             <button type="button" class="btn btn-outline-secondary btn-reset" id="resetBtn">
                                 កំណត់ឡើងវិញ
                             </button>
                         </form>
                     </aside>

                     <!-- Products Grid -->
                     <div class="col-12 col-xl-9">
                         <div class="tab-content">
                             <!-- Best Tab -->
                             <div class="tab-pane fade show active" id="all">
                                 <div class="row g-4">
                                     <!-- Card 1 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://s3.ams.com.kh/economy/2023/04/KampongSpeupalmsugar-scaled.jpg"
                                                     alt="Palm sugar" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ស្ករត្នោត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពង់ស្ពឺ
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 2 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                                     alt="Silk scarf" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ក្រមា
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ធ្វើដោយដៃដោយសិប្បករក្នុងស្រុក
                                                         </p>
                                                     </div>
                                                     <div class="price">$5</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 3 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                                                     alt="Pepper" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ម្រេចកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពត
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 4 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/736x/6d/43/82/6d4382495c930a0fed1ad94fa5391eb8.jpg"
                                                     alt="Ceramic" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ប្រហុកអាំងជ្រុញ
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ប្រហុកអាំងជ្រុញរសជាតិឆ្ងុយឆ្ងាញ់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 5 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/1200x/54/14/74/5414749dba327dac0057c6fd6e260cb9.jpg"
                                                     alt="bag" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             កាបូបស្ពាយនារី
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             កាបូបស្ពាយនារីធ្វើពីត្រឡោកដូង
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 6 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/736x/28/45/17/28451740201af038d45fb41d5dc506e4.jpg"
                                                     alt="Rice" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ផ្លិត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផ្លិតរចនាបទបុរាណ
                                                         </p>
                                                     </div>
                                                     <div class="price">$3</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 7 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="../assets/images/product-list-img.webp" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ទឹកផ្សំគ្រឿងស្រេច
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ឆា​ ខ ចៀន និង ប្រឡាក់សាច់គ្រប់មុខ
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 8 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://static.information.gov.kh/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeVBZQWc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--2150282de703e7184751da153c49775abb212d53/x4.jpg"
                                                     alt="Kampot Pepper" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             អង្ករកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             អង្ករកំពត ឆ្ងាញ់ គុណភាបខ្ពស់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 9 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://business-cambodia.com/cms/assets/0a513d64-8e53-47b0-84a1-f213190d7f46?width=2000&height=1500"
                                                     alt="mean" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ដំណាប់មៀន
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ដំណាប់មៀនពីខេត្តបាត់ដំបង
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!-- Card 1 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://s3.ams.com.kh/economy/2023/04/KampongSpeupalmsugar-scaled.jpg"
                                                     alt="Palm sugar" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ស្ករត្នោត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពង់ស្ពឺ
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 2 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                                     alt="Silk scarf" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ក្រមា
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ធ្វើដោយដៃដោយសិប្បករក្នុងស្រុក
                                                         </p>
                                                     </div>
                                                     <div class="price">$5</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 3 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                                                     alt="Pepper" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ម្រេចកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពត
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 4 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/736x/6d/43/82/6d4382495c930a0fed1ad94fa5391eb8.jpg"
                                                     alt="Ceramic" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ប្រហុកអាំងជ្រុញ
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ប្រហុកអាំងជ្រុញរសជាតិឆ្ងុយឆ្ងាញ់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 5 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/1200x/54/14/74/5414749dba327dac0057c6fd6e260cb9.jpg"
                                                     alt="bag" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             កាបូបស្ពាយនារី
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             កាបូបស្ពាយនារីធ្វើពីត្រឡោកដូង
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 6 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://i.pinimg.com/736x/28/45/17/28451740201af038d45fb41d5dc506e4.jpg"
                                                     alt="Rice" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ផ្លិត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផ្លិតរចនាបទបុរាណ
                                                         </p>
                                                     </div>
                                                     <div class="price">$3</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 7 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="../assets/images/product-list-img.webp" alt="Kampot Pepper" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ទឹកផ្សំគ្រឿងស្រេច
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ឆា​ ខ ចៀន និង ប្រឡាក់សាច់គ្រប់មុខ
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 8 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://static.information.gov.kh/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeVBZQWc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--2150282de703e7184751da153c49775abb212d53/x4.jpg"
                                                     alt="Kampot Pepper" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             អង្ករកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             អង្ករកំពត ឆ្ងាញ់ គុណភាបខ្ពស់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 9 -->
                                     <div class="pro-list col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100 border"
                                                     src="https://business-cambodia.com/cms/assets/0a513d64-8e53-47b0-84a1-f213190d7f46?width=2000&height=1500"
                                                     alt="mean" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ដំណាប់មៀន
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ដំណាប់មៀនពីខេត្តបាត់ដំបង
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="btn-control-pro-list">
                                         <button type="button" id="showMoreBtn"
                                             class="btn-see-more text-decoration-underline p-0">
                                             មើលច្រើនទៀត
                                         </button>
                                     </div>

                                     <!-- អ្នកអាចបន្ថែម card 9, 10 ... ដូច structure ខាងលើ -->
                                 </div>
                             </div>

                             <!-- agriculture tab -->
                             <div class="tab-pane fade" id="agriculture">
                                 <div class="row g-4">
                                     <!-- Card 1 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://s3.ams.com.kh/economy/2023/04/KampongSpeupalmsugar-scaled.jpg"
                                                     alt="Palm sugar" />
                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">Verified
                                                     <i class="bi bi-patch-check-fill"></i>
                                                 </span>
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ស្ករត្នោត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពង់ស្ពឺ
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 3 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                                                     alt="Pepper" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ម្រេចកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផលិតផលដើមពីកំពត
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 8 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://static.information.gov.kh/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBeVBZQWc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--2150282de703e7184751da153c49775abb212d53/x4.jpg"
                                                     alt="Kampot Pepper" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             អង្ករកំពត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             អង្ករកំពត ឆ្ងាញ់ គុណភាបខ្ពស់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <!-- crafts tab -->
                             <div class="tab-pane fade" id="crafts">
                                 <div class="row g-4">
                                     <!-- Card 2 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://i.etsystatic.com/20254876/r/il/1d0cee/6317552416/il_fullxfull.6317552416_mx5q.jpg"
                                                     alt="Silk scarf" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ក្រមា
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ធ្វើដោយដៃដោយសិប្បករក្នុងស្រុក
                                                         </p>
                                                     </div>
                                                     <div class="price">$5</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 5 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://i.pinimg.com/1200x/54/14/74/5414749dba327dac0057c6fd6e260cb9.jpg"
                                                     alt="bag" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             កាបូបស្ពាយនារី
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             កាបូបស្ពាយនារីធ្វើពីត្រឡោកដូង
                                                         </p>
                                                     </div>
                                                     <div class="price">$18</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 6 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://i.pinimg.com/736x/28/45/17/28451740201af038d45fb41d5dc506e4.jpg"
                                                     alt="Rice" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ផ្លិត
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ផ្លិតរចនាបទបុរាណ
                                                         </p>
                                                     </div>
                                                     <div class="price">$3</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- អ្នកអាច copy structure ទៅ card 2,3,... នៅ New Tab -->
                                 </div>
                             </div>

                             <!-- food tab -->
                             <div class="tab-pane fade" id="food">
                                 <div class="row g-4">
                                     <!-- Card 4 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://i.pinimg.com/736x/6d/43/82/6d4382495c930a0fed1ad94fa5391eb8.jpg"
                                                     alt="Ceramic" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ប្រហុកអាំងជ្រុញ
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ប្រហុកអាំងជ្រុញរសជាតិឆ្ងុយឆ្ងាញ់
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <!-- Card 9 -->
                                     <div class="col-12 col-md-6 col-lg-4">
                                         <a class="text-decoration-none" href="product-detail.html">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">
                                                 <img class="product-img w-100"
                                                     src="https://business-cambodia.com/cms/assets/0a513d64-8e53-47b0-84a1-f213190d7f46?width=2000&height=1500"
                                                     alt="mean" />
                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             ដំណាប់មៀន
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             ដំណាប់មៀនពីខេត្តបាត់ដំបង
                                                         </p>
                                                     </div>
                                                     <div class="price">$12</div>
                                                 </div>
                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal"><i
                                                             class="bi bi-heart me-1"></i>ពេញចិត្ត</a>
                                                     <a href="product-detail.html"
                                                         class="btn align-content-center px-3 btn-pill-primary"><i
                                                             class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត</a>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Cart Modal -->
             <!-- <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
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
          </div> -->

             <!-- Wishlist Modal -->
             <div class="modal fade" id="wishlistModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="pro-list-card modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title">
                                 <i class="bi bi-heart me-2"></i>បានបន្ថែមទៅក្នុងបញ្ជីពេញចិត្ត
                             </h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">
                             ❤️ ផលិតផលត្រូវបានបន្ថែមទៅក្នុងបញ្ជីពេញចិត្តរបស់អ្នក។
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                 Close
                             </button>
                             <a href="./wishlist.html" class="btn btn-pill-primary">ទៅកាន់បញ្ជីពេញចិត្ត</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>
 @endsection
