 @extends('layouts.masterHomepage')
 @section('title', 'prooduct details')
 @section('content')
     <!-- MAIN -->
     <main class="pro-detail py-4">
         <section class="shop">
             <div class="container">
                 <div class="row g-4">
                     <!-- LEFT: GALLERY -->
                     <div class="col-lg-7 left-info">
                         <div class="card border-0">
                             <div class="row">
                                 <div class="col-12 w-100 mb-3">
                                     <div class="card-show">
                                         <img class="card-img rounded-4 w-100 h-100" id="mainImage"
                                             src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                             alt="">
                                     </div>
                                 </div>
                             </div>
                             <div class="row g-2">
                                 <div class="col-3 flex-fill">
                                     <div class="card-select">
                                         <img class="card-img like rounded-3 w-100 h-100 thumbnail"
                                             src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                             alt="">
                                     </div>
                                 </div>
                                 <div class="col-3 flex-fill">
                                     <div class="card-select">
                                         <img class="card-img like rounded-3 w-100 h-100 thumbnail"
                                             src="https://panasiam.com/media/b9/00/9c/1716925612/1030020001-krama-beigeblack-01-jpg_1716925611.jpg?ts=1716925612"
                                             alt="">
                                     </div>
                                 </div>
                                 <div class="col-3 flex-fill">
                                     <div class="card-select">
                                         <img class="card-img like rounded-3 w-100 h-100 thumbnail"
                                             src="https://panasiam.com/media/56/a1/32/1716922452/1030020001-krama-petrol-01-jpg_1716922452.jpg?ts=1716922452"
                                             alt="">
                                     </div>
                                 </div>
                                 <div class="col-3 flex-fill">
                                     <div class="card-select">
                                         <img class="card-img like rounded-3 w-100 h-100 thumbnail"
                                             src="https://panasiam.com/media/cd/6f/34/1716925616/1030020001-krama-purple-01-jpg_1716925616.jpg?ts=1716925616"
                                             alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- RIGHT: INFO -->
                     <div class="col-lg-5 right-info">
                         <h1 class="h3 fw-bold mb-1">ក្រមា</h1>
                         <div class="d-flex align-items-center gap-2 mb-2">
                             <span class="badge text-bg-warning">Verified</span>
                             <span class="text-warning"><i class="bi bi-star-fill"></i> 4.8</span>
                             <a href="#reviews" class="text-decoration-none small text">(326 មតិយោបល់)</a>
                         </div>
                         <div class="d-flex align-items-baseline gap-3 mb-3">
                             <div class="h4 mb-0">$5.00</div>
                             <div class="text-success small">មាននៅក្នុងស្តុក</div>
                         </div>


                         <!-- Variants -->
                         <div class="mb-3">
                             <div class="small text mb-1">ពណ៌</div>
                             <div class="d-flex gap-2" id="colorOptions">
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">ខ្មៅ</button>
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">ទឹកក្រូច</button>
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">ខៀវ</button>
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">ស្វាយ</button>
                             </div>
                         </div>
                         <div class="mb-3">
                             <div class="small text mb-1">ទំហំ</div>
                             <div class="d-flex gap-2" id="sizeOptions">
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">S</button>
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">M</button>
                                 <button class="btn btn-outline-secondary btn-sm rounded-pill">L</button>
                             </div>
                         </div>

                         <!-- Qty + CTAs -->
                         <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                             <div class="input-group mt-2" style="max-width:140px">
                                 <button id="minusBtn" class="btn btn-outline-secondary rounded-start-5"
                                     type="button">-</button>
                                 <input id="qtyInput" type="text" class="form-control border-secondary text-center"
                                     value="1">
                                 <button id="plusBtn" class="btn btn-outline-secondary rounded-end-5" type="button">+
                                 </button>
                             </div>
                             <div>
                                 <button class="btn btn-pill-primary me-2 mt-2" data-bs-toggle="modal"
                                     data-bs-target="#cartModal"><i class="bi bi-bag me-2"></i>បន្ថែមទៅកន្រ្តក</button>
                                 <button class="btn btn-outline-secondary mt-2" data-bs-toggle="modal"
                                     data-bs-target="#paymentModal"><i class="bi bi-box-seam me-2"></i>ទិញុឥឡូវនេះ</button>
                             </div>
                         </div>

                         <!-- Trust / Meta -->
                         <ul class="list-unstyled small text mb-3">
                             <li class="mb-1"><i class="bi bi-truck me-1"></i> ការដឹកជញ្ជូន: ភ្នំពេញ 2-3 ថ្ងៃ</li>
                             <li class="mb-1"><i class="bi bi-credit-card me-1"></i> ការទូរទាត់: ABA • Wing • ACLEDA •
                                 Vattanac • COD</li>
                             <li class="mb-1"><i
                                     class="bi bi-shield-check me-1"></i>ផ្ញើត្រឡប់មកវិញដោយឥតគិតថ្លៃក្នុងរយៈពេល
                                 7 ថ្ងៃ
                                 បើសិនទំនិញមានបញ្ហា
                             </li>
                         </ul>

                         <!-- Short intro -->
                         <p class="text small">
                             សូត្រខ្មែរ ធ្វើដោយដៃ ពណ៌ធម្មជាតិ ទន់ ស្រួលប្រើ និងផលិតដោយសិប្បករក្នុងស្រុក។</p>
                     </div>
                 </div>
             </div>
             </div>

             <!-- Cart Modal -->
             <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="detail-card modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title"><i class="bi bi-bag me-2"></i>បានបន្ថែមទៅក្នុងកន្រ្តក</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>
                         <div class="modal-body">✅ ផលិតផលត្រូវបានបន្ថែមទៅក្នុងកន្រ្តករបស់អ្នក។ </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-outline-secondary rounded-5"
                                 data-bs-dismiss="modal">ចាកចេញ</button>
                             <a href="cartNcheckout.html" class="btn  btn-pill-primary">ទៅកាន់កន្រ្តក</a>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Payment Modal -->
             <div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="detail-card modal-content rounded-4">
                         <div class="modal-header">
                             <h5 class="modal-title"><i class="bi bi-credit-card me-2"></i>ទូទាត់ការទិញ</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                         </div>

                         <div class="modal-body">
                             <!-- Product summary -->
                             <div class="d-flex align-items-center gap-3 mb-3">
                                 <img src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg"
                                     alt="product" class="rounded border"
                                     style="width:80px;height:80px;object-fit:cover">
                                 <div>
                                     <div class="fw-semibold text">ក្រមាខ្មែរ</div>
                                     <div class="text">
                                         ចំនួន: <span id="modalQty">1</span><br>
                                         ពណ៌: <span id="modalColor">-</span><br>
                                         ទំហំ: <span id="modalSize">-</span>
                                     </div>
                                     <div class="text">
                                         តម្លៃក្នុង1: <span class="text-warning"> $<span
                                                 id="unitPrice">5</span></span><br>
                                         តម្លៃសរុប: <span class="text-warning"> $<span id="totalPrice">5</span></span>
                                     </div>
                                 </div>
                             </div>

                             <!-- Payment form -->
                             <form id="paymentForm" class="needs-validation" novalidate>
                                 <div class="mb-3">
                                     <label class="form-label small">ឈ្មោះពេញ</label>
                                     <input type="text" class="form-control rounded-3" placeholder="បញ្ចូលឈ្មោះ"
                                         required>
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label small">អាសយដ្ឋានដឹកជញ្ជូន</label>
                                     <textarea class="form-control rounded-3" rows="2" placeholder="ផ្ទះ លេខ... ផ្លូវ... ខណ្ឌ/ស្រុក..." required></textarea>
                                 </div>

                                 <!-- Select Payment -->
                                 <div class="mb-3">
                                     <label class="form-label small">វិធីទូទាត់</label>
                                     <select id="paymentMethod" class="form-select rounded-3" required>
                                         <option selected value="">ជ្រើសរើស</option>
                                         <option value="aba">ABA</option>
                                         <option value="wing">Wing</option>
                                         <option value="ac">AC</option>
                                         <option value="vatt">Vattanac</option>
                                         <option value="cod">COD (ទូទាត់ពេលដឹកជញ្ជូន)</option>
                                     </select>
                                 </div>

                                 <!-- COD Info -->
                                 <div id="codInfo" class="alert alert-success small d-none">
                                     អ្នកអាចទូទាត់ជាសាច់ប្រាក់ពេលទទួលផលិតផល។
                                 </div>

                                 <!-- E-wallet Info -->
                                 <div id="walletInfo" class="d-none mb-2">
                                     <div class="alert alert-warning small mb-2">
                                         សូមស្កេន QR ឬផ្ទេរប្រាក់ទៅគណនីខាងក្រោម បន្ទាប់មក Upload Slip ដើម្បីបញ្ជាក់។
                                     </div>
                                     <img id="walletQR" src="" alt="QR" class="rounded border mb-2"
                                         style="max-width:200px;display:block;">
                                     <p class="small mb-2"><strong>Account:</strong> <span id="walletAcc"></span></p>
                                     <label class="form-label small">បញ្ចូលបង្កាន់ដៃ (Slip)</label>
                                     <input type="file" class="form-control" required>
                                 </div>

                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-outline-secondary rounded-5"
                                         data-bs-dismiss="modal">ចាកចេញ</button>
                                     <button type="submit" class="btn btn-pill-primary"><i
                                             class="bi bi-check2-circle me-1"></i>បញ្ជាក់ការទិញ</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Payment Success Modal -->
             <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered">
                     <div class="detail-card modal-content rounded-4 text-center p-4">
                         <div class="modal-body">
                             <i class="bi bi-check-circle-fill text-success" style="font-size:3rem;"></i>
                             <h5 class="mt-3 fw-bold">ការទូទាត់បានជោគជ័យ</h5>
                             <p class="text mb-3">អរគុណសម្រាប់ការទិញទំនិញជាមួយ KhmerBoost 🎉</p>
                             <button type="button" class="btn btn-pill-primary rounded-pill" data-bs-dismiss="modal">
                                 បិទ
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- TABS -->
         <section class="tabs mt-5">
             <div class="container">
                 <ul class="nav nav-pills" id="pTabs" role="tablist">
                     <li class="nav-item mt-2" role="presentation">
                         <button class="btn btn-outline-secondary rounded-5 me-1 active" data-bs-toggle="tab"
                             data-bs-target="#desc" type="button">ការពិពណ៌នា</button>
                     </li>
                     <li class="nav-item mt-2" role="presentation">
                         <button class="btn btn-outline-secondary rounded-5 mx-1" data-bs-toggle="tab"
                             data-bs-target="#reviews" type="button">មតិយោបល់</button>
                     </li>
                     <li class="nav-item mt-2" role="presentation">
                         <button class="btn btn-outline-secondary rounded-5 mx-1" data-bs-toggle="tab"
                             data-bs-target="#specs" type="button">បញ្ជាក់</button>
                     </li>
                     <li class="nav-item mt-2" role="presentation">
                         <button class="btn btn-outline-secondary rounded-5 mx-1" data-bs-toggle="tab"
                             data-bs-target="#qa" type="button">Q&A</button>
                     </li>
                     <li class="nav-item mt-2" role="presentation">
                         <button class="btn btn-outline-secondary rounded-5 mx-1" data-bs-toggle="tab"
                             data-bs-target="#ship" type="button">ការដឹកជញ្ជូន</button>
                     </li>
                 </ul>

                 <div class="tab-content py-3">
                     <!-- Description -->
                     <div class="tab-pane fade show active" id="desc">
                         <div class="row g-3">
                             <div class="col-lg-8">
                                 <div class="detail-card blk">
                                     <h5 class="fw-semibold mb-2">រឿងរ៉ាវផលិតផល</h5>
                                     <p class="text mb-0">
                                         <span class="ps-5">
                                             ក្រមាខ្មែរ មានប្រវត្តិយូរចុងក្រោយពីបុរាណ
                                             ជាស្នាដៃស្និទ្ធស្នាលក្នុងជីវិតប្រជាជនខ្មែរ។
                                             វាមិនត្រឹមតែជាកន្សែងប្រើប្រាស់ប្រចាំថ្ងៃទេ ប៉ុន្តែថែមទាំងជាអត្តសញ្ញាណវប្បធម៌
                                             ដែលឆ្លុះបញ្ចាំងពីភាពសាមញ្ញ និងកម្លាំងរួមគ្នារបស់សហគមន៍។​
                                             ក្រមាខ្មែរ ត្រូវបានត្បាញដោយដៃដោយប្រើកប្បាស ឬសរសៃធម្មជាតិ។
                                             សិប្បករជ្រើសយកសរសៃកប្បាសស្អាតបង្ហាប់
                                             <button id="btnSeeMore" class="btn-see-more p-0 m-0">...មើលច្រើនទៀត</button>
                                         </span>

                                         <span id="moreText" class="d-none">
                                             និងពណ៌ជាមួយថ្នាំធម្មជាតិមុននឹងត្បាញទៅជាលំនាំជាច្រើន។
                                             រាល់ជួរដេកនៃក្រណាត់ គឺជាការចងចាំនៃជំនាញ និងភាពអត់ធ្មត់របស់សិប្បករខ្មែរ។
                                             ដើម្បីរក្សាអាយុកាល និងភាពស្រស់ស្អាត៖
                                             <br>- លាងដោយដៃជាមួយទឹកត្រជាក់ និងសាប៊ូទន់ៗ
                                             <br>- ជៀសវាងការលាងជាមួយម៉ាស៊ីន និងសារធាតុក្លិនខ្លាំង
                                             <br>- សម្របឱ្យស្ងួតក្រោមម្លប់ មិនត្រូវបង្ហាញពន្លឺថ្ងៃខ្លាំង
                                             <br>ពេលពាក់ក្រមាខ្មែរ គឺជាការពាក់អត្តសញ្ញាណ និងការរក្សាមរតកជាតិ។
                                         </span>
                                     </p>
                                 </div>
                             </div>
                             <div class="col-lg-4">
                                 <div class="detail-card blk">
                                     <h6 class="fw-semibold">អ្នកចែកចាយ</h6>
                                     <div class="d-flex align-items-center gap-2 my-2">
                                         <img src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG.png"
                                             class="rounded-circle blk" style="width:40px;height:40px">
                                         <div>
                                             <div class="fw-semibold small">Silk Weave Studio</div>
                                             <div class="small text"><i class="bi bi-geo-alt me-1"></i>Siem Reap
                                             </div>
                                         </div>
                                     </div>
                                     <a href="../pages/vendors.html"
                                         class="btn btn-pill-primary btn-sm w-100">ចូលទៅកាន់ហាង</a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Reviews -->
                     <div class="tab-pane fade" id="reviews">
                         <div class="row">
                             <div class="col-12 col-md-6 col-lg-4 mb-2">
                                 <div class="detail-card blk">
                                     <div class="d-flex align-items-center mb-2">
                                         <img src="https://i.pravatar.cc/33" alt="profile" class="profile-image" />
                                         <div class="fw-semibold">លី​ សុភា</div>
                                         <div class=" ms-auto align-items-center">
                                             <small class="date-text ms-3">មីនា 20, 2025</small>
                                         </div>

                                     </div>
                                     <div class="text">
                                         ក្រមាខ្មែរនេះមានគុណភាពល្អ ពណ៌ស្រស់ស្អាត និងជាតិខ្នាតត្រឹមត្រូវ។
                                         ខ្ញុំប្រើប្រាស់ពេលធ្វើដំណើរ
                                         និងពេលទៅវត្ត អារម្មណ៍ថា មានទំនុកចិត្តលើផលិតផលក្នុងស្រុកយើង។ ខ្ញុំសប្បាយចិត្តណាស់!
                                     </div>
                                     <div class="d-flex align-items-center mt-3 gap-1">
                                         <!-- Five stars -->
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4 mb-2">
                                 <div class="detail-card blk">
                                     <div class="d-flex align-items-center mb-2">
                                         <img src="https://i.pravatar.cc/34" alt="profile" class="profile-image" />
                                         <div class="fw-semibold">សុខ​ វណ្ណា</div>
                                         <div class=" ms-auto align-items-center">
                                             <small class="date-text ms-3">ឧសភា 10, 2025</small>
                                         </div>

                                     </div>
                                     <div class="review-text">
                                         ខ្សែក្រមាខ្មែរនេះអាចប្រើបានគ្រប់កាលៈទេសៈ ទាំងការងារ ការលេង ក៏ដូចជាការបង្ហាញសិល្បៈ។
                                         តែបើមានការរចនាថ្មីៗបន្ថែម ទំនាក់ទំនងសម័យទំនើបទៀត នឹងមាននាក់ចូលចិត្តកាន់តែច្រើន។
                                     </div>
                                     <div class="d-flex align-items-center mt-3 gap-1">
                                         <!-- Five stars -->
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star"></i></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-12 col-md-6 col-lg-4 mb-2">
                                 <div class="detail-card blk">
                                     <div class="d-flex align-items-center mb-2">
                                         <img src="https://i.pravatar.cc/35" alt="profile" class="profile-image" />
                                         <div class="fw-semibold">Ryan Wilson</div>
                                         <div class=" ms-auto align-items-center">
                                             <small class="date-text ms-3">មករា 19, 2025</small>
                                         </div>

                                     </div>
                                     <div class="review-text">
                                         ទិញជាអំណោយសម្រាប់មិត្តភក្តិនៅក្រៅប្រទេស ពួកគាត់សប្បាយចិត្តណាស់។
                                         ក្រមាខ្មែរមានន័យជាអត្តសញ្ញាណវប្បធម៌
                                         និងអាចប្រើបានពហុគោលបំណង។ ប្រាកដណាស់ខ្ញុំនឹងទិញបន្ថែមទៀត!
                                     </div>
                                     <div class="d-flex align-items-center mt-3 gap-1">
                                         <!-- Five stars -->
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                         <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row mt-3">
                             <form class="col-12">
                                 <div class="detail-card">
                                     <h5 class="mb-3 fw-bold">ការវាយតម្លៃ និងមតិយោបល់</h5>
                                     <div class="small-gray">វាយតម្លៃ</div>
                                     <div class="mb-2">
                                         <!-- Five stars -->
                                         <span class="text-warning"><i class="review-star fs-5 bi bi-star"></i></span>
                                         <span class="text-warning"><i class="review-star fs-5 bi bi-star"></i></span>
                                         <span class="text-warning"><i class="review-star fs-5 bi bi-star"></i></span>
                                         <span class="text-warning"><i class="review-star fs-5 bi bi-star"></i></span>
                                         <span class="text-warning"><i class="review-star fs-5 bi bi-star"></i></span>
                                     </div>
                                     <div class="small-gray mb-1">មតិយោបល់</div>
                                     <textarea class="form-control" placeholder="មតិយោបល់របស់អ្នក..."></textarea>
                                     <div class="text-end mt-4">
                                         <button type="button" class="btn btn-outline-secondary">បោះបង់</button>
                                         <button type="button" class="btn btn-pill-primary rounded-5">បញ្ជូល</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>

                     <!-- Specs -->
                     <div class="tab-pane fade" id="specs">
                         <div class="detail-card table-responsive">
                             <ul class="small text mb-0">
                                 <li>
                                     <span class="text">វត្ថុធាតុដើម:</span>
                                     <span class="ps-1">សូត្រ​ 100%</span>
                                 </li>

                                 <li>
                                     <span class="text">ប្រវែង:</span>
                                     <span class="ps-1">170 × 35 cm, 130 × 25 cm, 100 × 15 cm</span>
                                 </li>
                                 <li>
                                     <span class="text">គុណភាព:</span>
                                     <span class="ps-1">មិនចេញពណ៌, ងាយស្រួលប្រើប្រាស់​, ងាយស្រួលទុកដាក់</span>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <!-- Q&A -->
                     <div class="tab-pane fade" id="qa">
                         <div class="detail-card blk">
                             <p class="text small mb-2">សួរសំណួរទៅកាន់អ្នកលក់:</p>
                             <div class="input-group">
                                 <input class="form-control" placeholder="វាយបញ្ចូលសំណួររបស់អ្នក…">
                                 <button class="btn btn-outline-primary">បញ្ជូន</button>
                             </div>
                         </div>
                     </div>

                     <!-- Shipping -->
                     <div class="tab-pane fade" id="ship">
                         <div class="detail-card blk">
                             <ul class="small text mb-0">
                                 <li>ដឹកជញ្ជូនក្នុងរយៈពេល 2-3 ថ្ងៃក្នុងក្រុងភ្នំពេញ។</li>
                                 <li>ការត្រឡប់មកវិញដោយឥតគិតថ្លៃរយៈពេល 7 ថ្ងៃលើវត្ថុដែលមិនប្រើ។</li>
                                 <li>វិធីបង់ប្រាក់៖ ABA, AC, Wing, Vattanac, COD ។</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Related -->
         <section class="mt-4 related">
             <div class="container">
                 <div class="d-flex justify-content-start mb-2">
                     <h5 class="fw-semibold mb-0">អ្នកអាចនឹងចូលចិត្ត</h5>
                 </div>
                 <div class="row g-3">
                     <div class="col-6 col-lg-3">
                         <a href="product-detail.html">
                             <div class="card like border">
                                 <img class="card-img rounded-3 w-100 h-100"
                                     src="https://niront.com/cdn/shop/files/khmer-silk-fabric-186064.png?v=1745972613"
                                     alt="">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3">
                         <a href="product-detail.html">
                             <div class="card like border">
                                 <img class="card-img rounded-3 w-100 h-100"
                                     src="https://villageworks.biz/wp-content/uploads/2025/04/photo_2023-08-19_13-36-04-2.png"
                                     alt="">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3">
                         <a href="product-detail.html">
                             <div class="card like border">
                                 <img class="card-img rounded-3 w-100 h-100"
                                     src="https://i.etsystatic.com/20531055/r/il/c6a5df/6889280580/il_fullxfull.6889280580_bd7v.jpg"
                                     alt="">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3">
                         <a href="product-detail.html">
                             <div class="card like border">
                                 <img class="card-img rounded-3 w-100 h-100"
                                     src="https://khmerartisanry.us/wp-content/uploads/2020/08/DSC_0091.jpg"
                                     alt="">
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="btn-control-pro-detail">
                     <a href="products.html" class="btn-see-more text-decoration-underline p-0 mt-3">មើលច្រើនទៀត</a>
                 </div>
             </div>
             </div>
             </div>
         </section>
     </main>
 @endsection
