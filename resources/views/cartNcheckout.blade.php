@extends('layouts.masterHomepage')
@section('title', 'Cart & Checkout')

@section('content')

    <main class="cart-page py-4">
        <div class="container">

            <h3 class="fw-bold mb-4">
                <i class="bi bi-bag me-1"></i> កន្រ្តកទំនិញ
            </h3>

            <div class="row g-4">
                <div class="col-lg-8">

                    @php
                        $totalItems = 0;
                        $totalPrice = 0;
                    @endphp

                    @if ($cart && $cart->items->count() > 0)
                        @foreach ($cart->items as $item)
                            @if ($item->product)
                                @php
                                    $subtotal = $item->product->price * $item->quantity;
                                    $totalItems += $item->quantity;
                                    $totalPrice += $subtotal;
                                @endphp

                                <div class="cart-card d-flex justify-content-between flex-wrap mb-3">

                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ $item->product->image ? asset('storage/' . $item->product->image) : 'https://via.placeholder.com/80' }}"
                                            width="80" alt="{{ $item->product->name }}">

                                        <div>
                                            <h6 class="fw-semibold">{{ $item->product->name }}</h6>
                                            <span
                                                class="text-warning fw-bold">${{ number_format($item->product->price, 2) }}</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">

                                        <!-- Update Quantity -->
                                        <form action="{{ route('cart.update', $item->product_id) }}" method="POST"
                                            class="d-flex">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" class="form-control text-center" name="quantity"
                                                value="{{ $item->quantity }}" min="1" style="width:70px">
                                            <button class="btn btn-primary btn-sm ms-2">Update</button>
                                        </form>

                                        <!-- Remove Item -->
                                        <form action="{{ route('cart.remove', $item->product_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>កន្រ្តកទំនិញរបស់អ្នកទទេ។</p>
                    @endif

                </div>

                <div class="col-lg-4">
                    <div class="cart-card p-3">

                        <h6 class="fw-bold mb-3">សង្ខេបការទិញ</h6>

                        <div class="d-flex justify-content-between mb-2">
                            <span>ចំនួនទំនិញ</span>
                            <span>{{ $totalItems }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>តម្លៃសរុប</span>
                            <span class="text-warning fw-bold">${{ number_format($totalPrice, 2) }}</span>
                        </div>

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
                        <div class="d-flex flex-column gap-3">
                            @php
                                $totalQty = 0;
                                $totalPrice = 0;
                            @endphp

                            @foreach ($cart->items as $item)
                                @php
                                    $product = $item->product;
                                    $subtotal = $item->quantity * $product->price;
                                    $totalQty += $item->quantity;
                                    $totalPrice += $subtotal;
                                @endphp

                                <div class="d-flex align-items-center gap-3 justify-content-between">
                                    <div>
                                        <div class="text">{{ $product->name }}</div>
                                        <div class="text">{{ $product->description ?? '-' }}</div>
                                    </div>
                                    <div>
                                        <div class="text">ចំនួន: <span class="modalQty">{{ $item->quantity }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text">តម្លៃសរុប: <span
                                                class="text-warning">${{ number_format($subtotal, 2) }}</span></div>
                                    </div>
                                </div>
                            @endforeach

                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <div>ចំនួនសរុប:</div>
                                <div id="totalQty">{{ $totalQty }}</div>
                            </div>
                            <div class="d-flex justify-content-between fw-bold">
                                <div>តម្លៃសរុប:</div>
                                <div class="text-warning" id="totalPrice">${{ number_format($totalPrice, 2) }}</div>
                            </div>
                        </div>


                        <!-- Payment form -->
                        <form id="paymentForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label class="form-label small">ឈ្មោះពេញ</label>
                                <input type="text" class="form-control rounded-3" placeholder="បញ្ចូលឈ្មោះ" required />
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
