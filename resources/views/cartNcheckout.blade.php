 @extends('layouts.master')
 @section('title', 'cartNcheckout')
 @section('content')
     <main class="cart-page py-4">
         <div class="container">
             <!-- hero-banner -->
             <div class="hero-cart mb-4 position-relative">
                 <img class="img-fluid w-100 object-fit-cover" src="../assets/images/hero-banner-cart.png"
                     alt="អត្ថបទថ្មីៗពី KhmerBoost" />
                 <div class="position-absolute top-50 start-50 translate-middle text-center px-3 z-3">
                     <span class="lead mb-3 text-warning">
                         ផលិតផលដែលអ្នកបានពេញចិត្ត
                     </span>
                 </div>
             </div>
             <!-- Content -->
             <h3 class="fw-bold mb-0">
                 <i class="bi bi-bag me-1"></i> កន្រ្តកទំនិញ
             </h3>
             <div class="row g-4">
                 <!-- Cart Items -->
                 <div class="col-lg-8" id="cartItems">
                     <!-- Item 1 -->
                     <div class="cart-card d-flex align-items-center justify-content-between flex-wrap" data-price="5">
                         <div class="d-flex align-items-center gap-3">
                             <img src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg"
                                 alt="krama" />
                             <div>
                                 <h6 class="fw-semibold mb-1">ក្រមាខ្មែរ</h6>
                                 <small class="text">ពណ៌: ខ្មៅ | ទំហំ: M</small>
                                 <div class="mt-1">
                                     <span class="text-warning fw-bold item-price">$5</span>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
                             <div class="input-group" style="max-width: 140px">
                                 <button class="btn btn-outline-secondary rounded-start-5 decrease" type="button">
                                     -
                                 </button>
                                 <input type="text" class="form-control border-secondary text-center qty-input"
                                     value="3" min="1" />
                                 <button class="btn btn-outline-secondary rounded-end-5 increase" type="button">
                                     +
                                 </button>
                             </div>
                             <button class="btn btn-icon btn-trash border btn-outline-danger btn-sm remove"
                                 data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                 <i class="bi bi-trash"></i>
                             </button>
                         </div>
                     </div>

                     <!-- Item 2 -->
                     <div class="cart-card d-flex align-items-center justify-content-between flex-wrap" data-price="12">
                         <div class="d-flex align-items-center gap-3">
                             <img src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                                 alt="product" />
                             <div>
                                 <h6 class="fw-semibold mb-1">ម្រេចកំពត</h6>
                                 <small class="text">ប្រភេទ: ខ្មៅ | ទំងន់: 500g</small>
                                 <div class="mt-1">
                                     <span class="text-warning fw-bold item-price">$12</span>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
                             <div class="input-group" style="max-width: 140px">
                                 <button class="btn btn-outline-secondary rounded-start-5 decrease" type="button">
                                     -
                                 </button>
                                 <input type="text" class="form-control border-secondary text-center qty-input"
                                     value="1" min="1" />
                                 <button class="btn btn-outline-secondary rounded-end-5 increase" type="button">
                                     +
                                 </button>
                             </div>
                             <button class="btn btn-icon btn-trash border btn-sm remove" data-bs-toggle="modal"
                                 data-bs-target="#confirmDeleteModal">
                                 <i class="bi bi-trash"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Summary Box -->
                 <div class="col-lg-4">
                     <div class="cart-card">
                         <div class="d-flex align-items-center gap-2 mb-2">
                             <i class="bi bi-bag-fill"></i>
                             <span class="fw-semibold">សង្ខេបការទិញ</span>
                         </div>
                         <div class="d-flex justify-content-between mb-2">
                             <span>ចំនួនទំនិញ</span><span id="itCount">0</span>
                         </div>
                         <div class="d-flex justify-content-between mb-2">
                             <span>តម្លៃសរុប</span><span class="text-warning fw-bold" id="itTotal">$0</span>
                         </div>
                         <hr />
                         <button class="btn btn-pill-primary w-100 py-2" data-bs-toggle="modal"
                             data-bs-target="#checkoutModal">
                             បន្តទៅទូទាត់
                         </button>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Confirm Delete Modal -->
         <div class="modal fade" id="confirmDeleteModal" tabindex="-1">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="cart-card modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title">លុបទំនិញ?</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                     </div>
                     <div class="modal-body">
                         តើអ្នកប្រាកដថាចង់លុបទំនិញនេះចេញពីកន្រ្តកទេ?
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                             បោះបង់
                         </button>
                         <button type="button" class="btn btn-danger rounded-5" id="confirmDeleteBtn">
                             លុប
                         </button>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Payment Modal -->
         <div class="modal fade" id="checkoutModal" tabindex="-1" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="cart-card modal-content rounded-4">
                     <div class="modal-header">
                         <h5 class="modal-title">
                             <i class="bi bi-credit-card me-2"></i>ទូទាត់ការទិញ
                         </h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                     </div>

                     <div class="modal-body">
                         <div class="d-flex justify-content-between">
                             <div class="mb-2 fw-bold">ឈ្មោះទំនិញ</div>
                             <div class="mb-2 fw-bold pe-5">ចំនួនទំនិញ</div>
                             <div class="mb-2 fw-bold pe-5"></div>
                         </div>
                         <div class="modal-border"></div>
                         <!-- Product summary -->
                         <div class="d-flex align-items-center gap-3 mb-3 justify-content-between">
                             <div>
                                 <div class="text">ក្រមាខ្មែរ</div>
                                 <div class="text">ម្រេចកំពត</div>
                             </div>
                             <div>
                                 <div class="text">ចំនួន: <span id="modalQty">3</span></div>
                                 <div class="text">ចំនួន: <span id="modalQty">1</span></div>
                             </div>
                             <div>
                                 <div class="text">
                                     ចំនួនសរុប: <span id="modalQty">4</span>
                                 </div>
                                 <div class="text">
                                     តម្លៃសរុប:
                                     <span class="text-warning">
                                         $<span id="totalPrice">66</span></span>
                                 </div>
                             </div>
                         </div>

                         <!-- Payment form -->
                         <form id="paymentForm" class="needs-validation" novalidate>
                             <div class="mb-3">
                                 <label class="form-label small">ឈ្មោះពេញ</label>
                                 <input type="text" class="form-control rounded-3" placeholder="បញ្ចូលឈ្មោះ"
                                     required />
                             </div>
                             <div class="mb-3">
                                 <label class="form-label small">លេខទូរស័ព្ទ</label>
                                 <input type="text" class="form-control rounded-3" placeholder="បញ្ចូលលេខទូរស័ព្ទ"
                                     required />
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
                                     សូមស្កេន QR ឬផ្ទេរប្រាក់ទៅគណនីខាងក្រោម បន្ទាប់មក Upload Slip
                                     ដើម្បីបញ្ជាក់។
                                 </div>
                                 <img id="walletQR" src="" alt="QR" class="rounded border mb-2"
                                     style="max-width: 200px; display: block" />
                                 <p class="small mb-2">
                                     <strong>Account:</strong> <span id="walletAcc"></span>
                                 </p>
                                 <label class="form-label small">បញ្ចូលបង្កាន់ដៃ (Slip)</label>
                                 <input type="file" class="form-control" required />
                             </div>

                             <div class="modal-footer">
                                 <button type="button" class="btn btn-outline-secondary rounded-5"
                                     data-bs-dismiss="modal">
                                     ចាកចេញ
                                 </button>
                                 <button type="submit" class="btn btn-pill-primary">
                                     <i class="bi bi-check2-circle me-1"></i>បញ្ជាក់ការទិញ
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Payment Success Modal -->
         <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="cart-card modal-content rounded-4 text-center p-4">
                     <div class="modal-body">
                         <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem"></i>
                         <h5 class="mt-3 fw-bold">ការទូទាត់បានជោគជ័យ</h5>
                         <p class="text mb-3">
                             អរគុណសម្រាប់ការទិញទំនិញជាមួយ KhmerBoost 🎉
                         </p>
                         <button type="button" class="btn btn-pill-primary rounded-pill" data-bs-dismiss="modal">
                             បិទ
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </main>
 @endsection
