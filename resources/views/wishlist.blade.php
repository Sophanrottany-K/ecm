@extends('layouts.masterHomepage')
@section('title', 'Favorite')
@section('content')
    <main class="wishlist-page py-4">
        <div class="container">
            <!-- hero-banner -->
            <div class="hero-wishtlist mb-4 position-relative">
                <img class="img-fluid w-100 object-fit-cover" src="../assets/images/hero-banner-wishlist.png"
                    alt="អត្ថបទថ្មីៗពី KhmerBoost" />
                <div class="position-absolute top-50 start-50 translate-middle text-center px-3 z-3">
                    <span class="lead mb-3 text-warning">
                        ផលិតផលដែលអ្នកបានពេញចិត្ត
                    </span>
                </div>
            </div>
            <!-- Content -->
            <div class="row g-3">
                <!-- List (left) -->
                <div class="col-lg-8">
                    <div class="d-flex align-items-center justify-content-between mb-2 mt-3">
                        <h3 class="mb-0 fw-bold">
                            <i class="bi bi-heart"></i> បញ្ជីពេញចិត្ត
                        </h3>
                        <div class="d-none d-md-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-outline-secondary" id="btnSelectAll">
                                <i class="bi bi-check2-square me-1"></i> ជ្រើសទាំងអស់
                            </button>
                            <button class="btn btn-sm btn-danger btn-pill" id="btnRemoveSel">
                                <i class="bi bi-trash me-1"></i> លុបដែលបានជ្រើស
                            </button>
                            <a href="cartNcheckout.html" class="btn btn-sm btn-kb btn-pill-primary" id="btnMoveSel">
                                <i class="bi bi-bag me-1"></i> ផ្លាស់ទីទៅកន្រ្តក
                            </a>
                        </div>
                    </div>

                    <!-- Item 1 -->
                    <div class="wishlist-card d-flex align-items-center gap-3 flex-wrap">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input mt-0 item-check" type="checkbox" aria-label="select item" />
                            <img class="wishlist-thumb"
                                src="https://panasiam.com/media/dd/a6/b3/1716925621/1030020001-krama-blackgrey-01-jpg_1716925620.jpg?ts=1716925621"
                                alt="product" />
                        </div>

                        <div class="flex-grow-1">
                            <div class="fw-semibold">ក្រមាខ្មែរ</div>
                            <div class="w-meta small">
                                អ្នកលក់៖ <span class="text">តំបន់សៀមរាប</span>
                            </div>
                        </div>

                        <div class="price small">
                            <div>
                                <del class="text">$20</del>
                                <span class="fw-bold text-warning">$9</span>
                            </div>
                            <span class="badge badge-date rounded-pill mt-1">បានបញ្ចូល៖ កញ្ញា 09, 25</span>
                        </div>

                        <div class="ms-auto d-flex align-items-center gap-2">
                            <button class="btn btn-icon btn-trash border" aria-label="remove">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button class="btn btn-sm btn-add btn-pill-primary">
                                <i class="bi bi-bag me-1"></i> បន្ថែមទៅកន្រ្តក
                            </button>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="wishlist-card d-flex align-items-center gap-3 flex-wrap">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input mt-0 item-check" type="checkbox" aria-label="select item" />
                            <img class="wishlist-thumb"
                                src="https://content-asset.phsar121.com/products/uO1EioUxtfxfkgRQcixP5rfj3I81Yj6nfdzyyezC.jpg"
                                alt="product" />
                        </div>

                        <div class="flex-grow-1">
                            <div class="fw-semibold">ម្សៅរមៀត</div>
                            <div class="w-meta small">
                                អ្នកលក់៖ <span class="text">ភ្នំពេញ</span>
                            </div>
                        </div>

                        <div class="price small">
                            <div>
                                <del class="text">$20</del>
                                <span class="fw-bold text-warning">$14</span>
                            </div>
                            <span class="badge badge-date rounded-pill mt-1">បានបញ្ចូល៖ មករា 09, 25</span>
                        </div>

                        <div class="ms-auto d-flex align-items-center gap-2">
                            <button class="btn btn-icon btn-trash border" aria-label="remove">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button class="btn btn-sm btn-add btn-pill-primary">
                                <i class="bi bi-bag me-1"></i> បន្ថែមទៅកន្រ្តក
                            </button>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="wishlist-card d-flex align-items-center gap-3 flex-wrap">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input mt-0 item-check" type="checkbox" aria-label="select item" />
                            <img class="wishlist-thumb"
                                src="https://tse4.mm.bing.net/th/id/OIP.TZff3CTBQO8GIUA-5L5X9gHaHa?r=0&cb=thfc1&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="product" />
                        </div>

                        <div class="flex-grow-1">
                            <div class="fw-semibold">សាប៊ូលាងដៃក្លិន</div>
                            <div class="w-meta small">
                                អ្នកលក់៖ <span class="text">កំពង់ឆ្នាំង</span>
                            </div>
                        </div>

                        <div class="price small">
                            <div>
                                <del class="text">$20</del>
                                <span class="fw-bold text-warning">$13</span>
                            </div>
                            <span class="badge badge-date rounded-pill mt-1">បានបញ្ចូល៖ មករា 12, 25</span>
                        </div>

                        <div class="ms-auto d-flex align-items-center gap-2">
                            <button class="btn btn-icon btn-trash border" aria-label="remove">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button class="btn btn-sm btn-add btn-pill-primary">
                                <i class="bi bi-bag me-1"></i> បន្ថែមទៅកន្រ្តក
                            </button>
                        </div>
                    </div>

                    <!-- Empty-state (hidden by default / show when list cleared) -->
                    <div id="emptyState" class="right-wishlist-card empty p-4 text-center mt-3 d-none">
                        <div class="fs-5 fw-semibold mb-1">
                            មិនមានផលិតផលក្នុងបញ្ជីពេញចិត្តទេ
                        </div>
                        <p class="text- mb-3">ចូលទៅទំព័រផលិតផល ដើម្បីបន្ថែមម្តងទៀត។</p>
                        <a class="btn btn-kb btn-pill-primary" href="products.html"><i class="bi bi-grid me-1"></i>
                            រុករកផលិតផល</a>
                    </div>

                    <!-- Bulk actions (mobile) -->
                    <div class="d-md-none mt-3 d-flex gap-2">
                        <button class="btn btn-outline-secondary btn-pill-primary flex-fill" id="mSelectAll">
                            ជ្រើសទាំងអស់
                        </button>
                        <button class="btn btn-outline-danger btn-pill-primary flex-fill" id="mRemoveSel">
                            លុប
                        </button>
                        <button class="btn btn-kb btn-pill-primary flex-fill" id="mMoveSel">
                            ទៅ Cart
                        </button>
                    </div>
                </div>

                <!-- Right side (summary) -->
                <div class="col-lg-4">
                    <div class="right-wishlist-card p-3 mt-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-heart-fill"></i>
                            <span class="fw-semibold">សង្ខេបបញ្ជីពេញចិត្ត</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-1">
                            <span>ចំនួនទំនិញ</span><span class="text pe-2" id="itCount">0</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-1">
                            <span>តម្លៃសរុប (ប្រហែល)</span><span class="text-warning pe-2 fw-bold"
                                id="itTotal">$0</span>
                        </div>
                        <hr />
                        <div class="d-grid gap-2">
                            <button class="btn btn-kb btn-pill-primary" id="btnMoveAll">
                                <i class="bi bi-bag me-1"></i> ផ្លាស់ទីទាំងអស់ទៅកន្រ្តក
                            </button>
                            <button class="btn btn-danger btn-pill" id="btnClearAll">
                                <i class="bi bi-trash me-1"></i> សម្អាតទាំងអស់
                            </button>
                        </div>
                    </div>

                    <div class="right-wishlist-card p-3 mt-3">
                        <div class="fw-semibold mb-2">អាចចូលចិត្តផងដែរ</div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <img src="https://domrey.com/uploads/catalogs/MG00143.jpg" class="rounded"
                                style="width: 56px; height: 56px; object-fit: cover" alt="" />
                            <div class="small">
                                <div class="fw-semibold">ទឹកដោះគោអង្គរ</div>
                                <div class="text-warning fw-bold">$16</div>
                            </div>
                            <a href="products.html" class="btn btn-sm btn-outline-secondary ms-auto">មើល</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="https://tse1.mm.bing.net/th/id/OIP.sD1zO9cIAEVEQLKbQCRKxAHaEK?r=0&cb=thfc1&rs=1&pid=ImgDetMain&o=7&rm=3"
                                class="rounded" style="width: 56px; height: 56px; object-fit: cover" alt="" />
                            <div class="small">
                                <div class="fw-semibold">សាប៊ូកក់សក់</div>
                                <div class="text-warning fw-bold">$9</div>
                            </div>
                            <a href="products.html" class="btn btn-sm btn-outline-secondary ms-auto">មើល</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirm Delete Modal -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="right-wishlist-card modal-content">
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
    </main>

    <!-- Toast (Add to cart) -->
    <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1080">
        <div id="toastCart" class="toast align-items-center text-bg-dark border-0" role="status" aria-live="polite"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">✅ បានបន្ថែមទៅកន្រ្តកទិញទំនិញ!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection
