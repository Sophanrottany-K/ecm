 @extends('layouts.masterHomepage')
 @section('title', 'product')
 @section('content')

     <main class="products-list">
         <!-- product -->
         <section class="product my-5" id="products">
             <div class="container" data-aos="fade-up">
                 <div class="row">
                     <!-- Sidebar Filter -->


                     <!-- Products Grid -->

                     <div class="tab-content pt-2">
                         <!-- Best Tab -->
                         <div class="tab-pane fade show active" id="all">
                             <div class="row g-4">
                                 <!-- Card 1 -->
                                 @foreach ($products as $product)
                                     <div class="pro-list col-12 col-sm-6 col-lg-3">
                                         <a class="text-decoration-none"
                                             href="{{ route('productHomepage.show', $product->product_id) }}">
                                             <div class="pro-list-card card-kb position-relative p-3 h-100">

                                                 <!-- Product Image -->
                                                 <img class="product-img w-100 border"
                                                     src="{{ asset('storage/' . $product->image) }}"
                                                     alt="{{ $product->name }}" />

                                                 <span style="left: 15px"
                                                     class="badge badge-verified position-absolute m-2">
                                                     Verified <i class="bi bi-patch-check-fill"></i>
                                                 </span>

                                                 <div class="mt-3 d-flex justify-content-between align-items-start">
                                                     <div>
                                                         <div class="text fw-semibold fs-4 mb-2">
                                                             {{ $product->name }}
                                                         </div>
                                                         <p class="text small text-soft fs-5">
                                                             {{ $product->description }}
                                                         </p>
                                                     </div>

                                                     <div class="price">${{ $product->price }}</div>
                                                 </div>

                                                 <div class="d-flex gap-2 mt-3">
                                                     <a class="btn align-content-center px-3 btn-pill-primary"
                                                         data-bs-toggle="modal" data-bs-target="#wishlistModal">
                                                         <i class="bi bi-heart me-1"></i>ពេញចិត្ត
                                                     </a>

                                                     <a href="{{ route('productHomepage.show', $product->product_id) }}"
                                                         class="btn align-content-center px-3 btn-pill-primary">
                                                         <i class="bi bi-arrow-right me-1"></i>ព័ត៌មានលម្អិត
                                                     </a>
                                                 </div>

                                             </div>
                                         </a>
                                     </div>
                                 @endforeach

                             </div>


                         </div>

                     </div>
                 </div>
             </div>


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
                             <a href="{{ route('wishlist') }}" class="btn btn-pill-primary">ទៅកាន់បញ្ជីពេញចិត្ត</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </main>
 @endsection
