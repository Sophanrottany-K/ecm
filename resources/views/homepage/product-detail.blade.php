@extends('layouts.masterHomepage')
@section('title', 'Product Details')

@section('content')
    <main class="pro-detail py-4">
        <section class="shop">
            <div class="container">
                <div class="row g-4">

                    <!-- LEFT: IMAGE -->
                    <div class="col-lg-7">
                        <div class="card border-0">
                            <div class="card-show">
                                <img id="mainImage"
                                    src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/500' }}"
                                    class="card-img rounded-4 w-100" style="height: 480px; object-fit: cover;"
                                    alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: PRODUCT INFO -->
                    <div class="col-lg-5">
                        <h1 class="h3 fw-bold mb-1">{{ $product->name }}</h1>

                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge text-bg-warning">Verified</span>
                            <span class="text-warning"><i class="bi bi-star-fill"></i> 4.8</span>
                            <a href="#reviews" class="small text-decoration-none text">(326 ​មតិយោបល់)</a>
                        </div>

                        <div class="d-flex align-items-baseline gap-3 mb-3">
                            <div class="h4 mb-0 text-warning">$ {{ number_format($product->price, 2) }}</div>
                            <div class="text-success small">
                                {{ $product->stock > 0 ? 'មានស្តុក' : 'អស់ស្តុក' }}
                            </div>
                        </div>

                        <!-- COLOR -->
                        @if ($product->color)
                            <div class="mb-3">
                                <div class="small text mb-1">ពណ៌</div>
                                <button
                                    class="btn btn-outline-secondary btn-sm rounded-pill">{{ $product->color->name }}</button>
                            </div>
                        @endif

                        <!-- SIZE -->
                        @if ($product->size)
                            <div class="mb-3">
                                <div class="small text mb-1">ទំហំ</div>
                                <button
                                    class="btn btn-outline-secondary btn-sm rounded-pill">{{ $product->size->name }}</button>
                            </div>
                        @endif

                        <!-- QUANTITY + BUTTONS -->
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                            <div class="input-group" style="max-width: 140px;">
                                <button id="minusBtn" class="btn btn-outline-secondary" type="button">-</button>
                                <input id="qtyInput" type="text" class="form-control border-secondary text-center"
                                    value="1">
                                <button id="plusBtn" class="btn btn-outline-secondary" type="button">+</button>
                            </div>

                            <!-- ADD TO CART FORM -->
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <input type="hidden" name="quantity" id="qtyHidden" value="1">
                                <button type="submit" class="btn btn-pill-primary">
                                    <i class="bi bi-bag me-2"></i> បន្ថែមទៅកន្រ្តក
                                </button>
                            </form>

                            <!-- BUY NOW -->
                            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                <i class="bi bi-box-seam me-2"></i> ទិញឥឡូវនេះ
                            </button>
                        </div>

                        <!-- SHIPPING / INFO -->
                        <ul class="list-unstyled small text mb-3">
                            <li><i class="bi bi-truck me-1"></i> ដឹកជញ្ជូន: ភ្នំពេញ 2–3ថ្ងៃ</li>
                            <li><i class="bi bi-credit-card me-1"></i> ABA • Wing • AC • Vattanac • COD</li>
                            <li><i class="bi bi-shield-check me-1"></i> ធានា 7 ថ្ងៃ ប្រសិនបើទំនិញមានបញ្ហា</li>
                        </ul>

                        <p class="small text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>

            <!-- PAYMENT MODAL -->
            <div class="modal fade" id="paymentModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="detail-card modal-content rounded-4">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="bi bi-credit-card me-2"></i>ទូទាត់ការទិញ</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/80' }}"
                                    class="rounded border" style="width:80px; height:80px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">{{ $product->name }}</div>
                                    <div class="text small">
                                        ចំនួន: <span id="modalQty">1</span><br>
                                        ពណ៌: <span>{{ $product->color->name ?? '-' }}</span><br>
                                        ទំហំ: <span>{{ $product->size->name ?? '-' }}</span>
                                    </div>
                                    <div class="text small">
                                        តម្លៃក្នុង 1៖ <span class="text-warning">$
                                            {{ number_format($product->price, 2) }}</span><br>
                                        តម្លៃសរុប៖ <span class="text-warning">$ <span
                                                id="modalTotal">{{ number_format($product->price, 2) }}</span></span>
                                    </div>
                                </div>
                            </div>

                            <form id="paymentForm" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label class="small">ឈ្មោះពេញ</label>
                                    <input type="text" class="form-control rounded-3" required>
                                </div>
                                <div class="mb-3">
                                    <label class="small">អាសយដ្ឋាន</label>
                                    <textarea class="form-control rounded-3" rows="2" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="small">វិធីទូទាត់</label>
                                    <select id="paymentMethod" class="form-select rounded-3" required>
                                        <option value="">ជ្រើសរើស</option>
                                        <option value="aba">ABA</option>
                                        <option value="wing">Wing</option>
                                        <option value="ac">AC</option>
                                        <option value="vatt">Vattanac</option>
                                        <option value="cod">COD</option>
                                    </select>
                                </div>

                                <div id="codInfo" class="alert alert-success small d-none">
                                    ទូទាត់ជាសាច់ប្រាក់ពេលទទួលទំនិញ។
                                </div>

                                <div id="walletInfo" class="d-none mb-2">
                                    <div class="alert alert-warning small">សូមស្កេន QR ហើយបញ្ចូល Slip</div>
                                    <img id="walletQR" class="rounded border mb-2" style="max-width:200px;">
                                    <p class="small"><strong>Account:</strong> <span id="walletAcc"></span></p>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">ចាកចេញ</button>
                                    <button class="btn btn-pill-primary"><i
                                            class="bi bi-check2-circle me-1"></i>បញ្ជាក់ការទិញ</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <script>
        // Quantity + modal updates
        let qty = 1;
        const qtyInput = document.getElementById('qtyInput');
        const qtyHidden = document.getElementById('qtyHidden');
        const modalQty = document.getElementById('modalQty');
        const modalTotal = document.getElementById('modalTotal');
        const unitPrice = {{ $product->price }};

        document.getElementById('minusBtn').onclick = () => {
            if (qty > 1) qty--;
            updateQty();
        };

        document.getElementById('plusBtn').onclick = () => {
            qty++;
            updateQty();
        };

        function updateQty() {
            qtyInput.value = qty;
            qtyHidden.value = qty;
            modalQty.innerText = qty;
            modalTotal.innerText = (qty * unitPrice).toFixed(2);
        }
    </script>
@endsection
