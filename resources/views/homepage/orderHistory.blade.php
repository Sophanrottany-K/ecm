 @extends('layouts.masterHomepage')
 @section('title', 'Order History')
 @section('content')
     <main>

         <!-- Order section  -->
         <section class="order-area py-5 pt-0">
             <div class="container">

                 <div class="hero-order mb-5 position-relative">
                     <div class="bg-overlay-order"></div>
                     <img class="img-fluid w-100 object-fit-cover " src="../assets/images/background-orderpage.jpg"
                         alt="អត្ថបទថ្មីៗពី KhmerBoost" />
                     <div class="position-absolute top-50 start-50 translate-middle text-center px-3 z-3">

                         <span class="lead mb-3 text-warning ">
                             ប្រវត្តិកម្មង់អីវ៉ាន់
                         </span>

                     </div>
                 </div>

                 <h2 class="mb-4">ការបញ្ជាទិញរបស់អ្នក </h2>
                 <!-- order 1 -->
                 <div class="container-order-info ">
                     <div class="row bg-order dropItem mx-2 mx-md-0">
                         <div class=" col-12 col-lg-12">
                             <div class="row align-items-center justify-content-center rounded-3 mb-2 mb-lg-0">
                                 <div class="col-6 col-md-4 col-lg-1">
                                     <div class="order-content">
                                         <div class="product-name text-nowrap">
                                             <h6>កម្មង់ID</h6>
                                             <p>#KB-01</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-2">
                                     <div class="order-content ">
                                         <div class="product-name ">
                                             <h6>កាលបរិច្ចេទបានទិញ</h6>
                                             <p><span>មករា </span><span>02, </span><span>2025</span></p>

                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-1">
                                     <div class="order-content">
                                         <div class="product-name text-nowrap">
                                             <h6>តម្លៃសរុប</h6>
                                             <p> $19.00</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-2">
                                     <div class="order-content">
                                         <div class="product-name align-content-center ">
                                             <button type="button" class="btn btn-pill-primary " data-bs-toggle="modal"
                                                 data-bs-target="#invoiceModal">
                                                 មើលវិក័យប័ត្រ
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-12 col-md-2 col-lg-1">
                                     <div class="order-content">
                                         <button type="button" class="product-name border-0 bg-transparent">
                                             <i class="bi bi-chevron-down"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!-- ========= order item =========== -->
                     <div class="row mt-2 g-2 items-order ">
                         <div class="col-12 ">
                             <div class="d-flex bg-item-order flex-wrap ">
                                 <div class="col-6 col-md-1">
                                     <div class="order-content product-img mx-auto">
                                         <img src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                             alt="product">
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ផលិតផល</h6>
                                             <p>ក្រមាខ្មែរ</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>status</h6>
                                             <p>កំពុងដឹកជញ្ជូន</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>បញ្ជុះតម្លៃ</h6>
                                             <p>0%</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ចំនួន</h6>
                                             <p> 3</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>តម្លៃ</h6>
                                             <p>$5</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-12 ">
                             <div class="d-flex bg-item-order flex-wrap">
                                 <div class="col-6 col-md-1">
                                     <div class="order-content product-img mx-auto">
                                         <img src="https://kohsantepheapdaily.com.kh/wp-content/uploads/2014/12/cb697714-53f6-4810-9404-dcdcbcf22efb.jpg"
                                             alt="product">
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ផលិតផល</h6>
                                             <p>ម្រេចកំពត</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>status</h6>
                                             <p>កំពុងដឹកជញ្ជូន</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>បញ្ជុះតម្លៃ</h6>
                                             <p>30%</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ចំនួន</h6>
                                             <p> 10</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>តម្លៃ</h6>
                                             <p><del>$20</del> $14</p>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- end order 1 -->
                 <!-- order 2 -->
                 <div class="container-order-info">
                     <div class="row bg-order dropItem mx-2 mx-md-0">
                         <div class=" col-12 col-lg-12">
                             <div class="row align-items-center justify-content-center rounded-3 mb-2 mb-lg-0">
                                 <div class="col-6 col-md-4 col-lg-1">
                                     <div class="order-content">
                                         <div class="product-name text-nowrap">
                                             <h6>កម្មង់ID</h6>
                                             <p>#KB-02</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-2">
                                     <div class="order-content ">
                                         <div class="product-name ">
                                             <h6>កាលបរិច្ចេទបានទិញ</h6>
                                             <p><span>មករា </span><span>10, </span><span>2025</span></p>

                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-1">
                                     <div class="order-content">
                                         <div class="product-name text-nowrap">
                                             <h6>តម្លៃសរុប</h6>
                                             <p> $43.00</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-4 col-lg-2">
                                     <div class="order-content">
                                         <div class="product-name align-content-center ">
                                             <button type="button" class="btn btn-pill-primary " data-bs-toggle="modal"
                                                 data-bs-target="#invoiceModal2">
                                                 មើលវិក័យប័ត្រ
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-12 col-md-2 col-lg-1">
                                     <div class="order-content">
                                         <button type="button" class="product-name border-0 bg-transparent">
                                             <i class="bi bi-chevron-down"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!-- ========= order item =========== -->
                     <div class="row mt-2 g-2 items-order ">
                         <div class="col-12">
                             <div class="d-flex flex-wrap bg-item-order">
                                 <div class="col-6 col-md-1">
                                     <div class="order-content product-img mx-auto">
                                         <img src="../assets/images/sabo.png" alt="product">
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ផលិតផល</h6>
                                             <p>សាប៊ូលាងចាន</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>status</h6>
                                             <p>កំពុងដឹកជញ្ជូន</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>បញ្ជុះតម្លៃ</h6>
                                             <p>35%</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>ចំនួន</h6>
                                             <p> 30</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-6 col-md-2">
                                     <div class="order-content">
                                         <div class="product-name ">
                                             <h6>តម្លៃ</h6>
                                             <p> <del>$20</del>$13</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <!-- end order 2 -->

                 <!-- Invoice Modal -->
                 <div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg modal-dialog-centered">
                         <div class="modal-content px-5 py-4 rounded-4">

                             <div class="modal-header border-0">
                                 <h5 class="modal-title fs-4" id="invoiceModalLabel">វិក័យប័ត្រ #KB-01</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div id="liveAlertPlaceholder" class="position-absolute z-2 w-75 p-2"></div>
                             <div class="modal-body">
                                 <!-- Seller / Customer Info -->
                                 <div class="row mb-3">
                                     <div class="col-md-6">
                                         <h6>មកពី:</h6>
                                         <p>
                                             KampotShop Co., Ltd.<br>
                                             #45 Street 123, Phnom Penh<br>
                                             Kampot@gamil.com
                                         </p>
                                     </div>
                                     <div class="col-md-6 text-end">
                                         <h6>ទៅកាន់:</h6>
                                         <p>
                                             Sok Dara<br>
                                             #12 Street 271, Phnom Penh<br>
                                             +855 12 345 678
                                         </p>
                                     </div>
                                 </div>

                                 <!-- Order Info -->
                                 <table class="table table-bordered " rules="col">
                                     <thead class="table-light">
                                         <tr>
                                             <th>ផលិតផល</th>
                                             <th>ចំនួន</th>
                                             <th>តម្លៃ</th>
                                             <th>បញ្ជុះតម្លៃ</th>
                                             <th>សល់តម្លៃ</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>ក្រមាខ្មែរ </td>
                                             <td>3</td>
                                             <td>$5.00</td>
                                             <td>0%</td>
                                             <td>$5.00</td>
                                         </tr>
                                         <tr>
                                             <td>ម្រេចកំពត</td>
                                             <td>10</td>
                                             <td>$20.00</td>
                                             <td>30%</td>
                                             <td>$14.00</td>
                                         </tr>
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <th colspan="4" class="text-end">តម្លៃសរុប</th>
                                             <th>$19.00</th>
                                         </tr>
                                     </tfoot>
                                 </table>

                                 <!-- Payment & Delivery -->
                                 <p>
                                     <strong class="mb-2 d-inline-block">បង់ប្រាក់តាមរយះ:</strong> <span>ACLADA
                                         Bank</span><br>
                                     <strong class="mb-2 d-inline-block">ដឹកជញ្ជូនតាមរយះ:</strong> <span>J&T
                                         Express</span><br>
                                     <strong class="mb-2 d-inline-block">វិក័យប័ត្រថ្ងៃខែ:</strong> <span>មករា 02,
                                         2025</span>
                                 </p>
                             </div>

                             <div class="modal-footer border-0 justify-content-center gap-3 mt-0">
                                 <button type="button" class="btn btn-danger rounded-pill"
                                     data-bs-dismiss="modal">ត្រឡប់ក្រោយ</button>
                                 <button type="button" class="btn btn-pill-primary align-content-center"
                                     id="liveAlertBtn"><i class="bi bi-cloud-arrow-down-fill me-2"></i><span>ទាញយកជា
                                         PDF</span></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end invoice modal -->
                 <!-- Invoice Modal 2-->
                 <div class="modal fade" id="invoiceModal2" tabindex="-1" aria-labelledby="invoiceModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog modal-lg modal-dialog-centered">
                         <div class="modal-content px-5 py-4 rounded-4">

                             <div class="modal-header border-0">
                                 <h5 class="modal-title  fs-4" id="invoiceModalLabel">វិក័យប័ត្រ #KB-02</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div id="liveAlertPlaceholder" class="position-absolute z-2 w-75 p-2"></div>
                             <div class="modal-body">
                                 <!-- Seller / Customer Info -->
                                 <div class="row mb-3">
                                     <div class="col-md-6">
                                         <h6>មកពី:</h6>
                                         <p>
                                             KampotShop Co., Ltd.<br>
                                             #45 Street 123, Phnom Penh<br>
                                             Kampot@gamil.com
                                         </p>
                                     </div>
                                     <div class="col-md-6 text-end">
                                         <h6>ទៅកាន់:</h6>
                                         <p>
                                             Sok Dara<br>
                                             #12 Street 271, Phnom Penh<br>
                                             +855 12 345 678
                                         </p>
                                     </div>
                                 </div>

                                 <!-- Order Info -->
                                 <table class="table table-bordered " rules="col">
                                     <thead class="table-light">
                                         <tr>
                                             <th>ផលិតផល</th>
                                             <th>ចំនួន</th>
                                             <th>តម្លៃ</th>
                                             <th>បញ្ជុះតម្លៃ</th>
                                             <th>សល់តម្លៃ</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>សាប៊ូលាងចាន (Dishwashing Liquid) </td>
                                             <td>30</td>
                                             <td>$20.00</td>
                                             <td>35%</td>
                                             <td>$16.00</td>
                                         </tr>

                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <th colspan="4" class="text-end">តម្លៃសរុប</th>
                                             <th>$58.00</th>
                                         </tr>
                                     </tfoot>
                                 </table>

                                 <!-- Payment & Delivery -->
                                 <p>
                                     <strong class="mb-2 d-inline-block">បង់ប្រាក់តាមរយះ:</strong> <span>ACLADA
                                         Bank</span><br>
                                     <strong class="mb-2 d-inline-block">ដឹកជញ្ជូនតាមរយះ:</strong> <span>J&T
                                         Express</span><br>
                                     <strong class="mb-2 d-inline-block">វិក័យប័ត្រថ្ងៃខែ:</strong> <span>មករា 10,
                                         2025</span>
                                 </p>
                             </div>

                             <div class="modal-footer border-0 justify-content-center gap-3 mt-0">
                                 <button type="button" class="btn btn-danger rounded-pill"
                                     data-bs-dismiss="modal">ត្រឡប់ក្រោយ</button>
                                 <button type="button" class="btn btn-pill-primary align-content-center"
                                     id="liveAlertBtn"><i class="bi bi-cloud-arrow-down-fill me-2 "></i><span>ទាញយកជា
                                         PDF</span></button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end invoice modal 2-->

         </section>
         <!-- end order seciton -->
     </main>
 @endsection
