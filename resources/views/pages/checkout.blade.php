@extends('layouts.main')

@section('main')
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="py-md-5 py-3">Checkout</h1>
            </div>
            <div class="col-md-7">
                <form action="{{ route('checkout.placeorder') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-4">Billing detail</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form_label">First Name</label>
                            <input type="text" name="first_name" id="firstName" class="form-control input-theme" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form_label">Last Name</label>
                            <input type="text" name="last_name" id="lastName" class="form-control input-theme" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="companyName" class="form_label">Company Name</label>
                            <input type="text" name="company_name" id="companyName" class="form-control input-theme" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="address" class="form_label">Address</label>
                            <input type="text" name="address" id="address" class="form-control input-theme" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="cityTown" class="form_label">City / Town</label>
                            <input type="text" name="city" id="cityTown" class="form-control input-theme" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="postcodeZIP" class="form_label">Postcode / ZIP</label>
                            <input type="text" name="zip_code" id="postcodeZIP" class="form-control input-theme" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form_label">Email</label>
                            <input type="email" name="email" id="email" class="form-control input-theme" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form_label">Phone</label>
                            <input type="tel" name="phone_number" id="Phone" class="form-control input-theme" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="orderNote" class="form_label">Order Note</label>
                            <textarea id="orderNote" name="description" class="form-control input-theme"></textarea>
                        </div>
                        <div class="col-12">
                            <input class="form-check-input checkout_check_input" type="radio" name="shipToAnotherAddress" id="shipToAnotherAddress" />
                            <label class="form-check-label" for="shipToAnotherAddress">
                                Ship To Another Address
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="checkout_right mx-md-5 p-md-4 p-3">
                    <h3 class="text-center fw-bold border-bottom pb-3">
                        Your Order
                    </h3>
                    <h3 class="mb-4 mt-4 fs-5">Products</h3>
                    @php $total = 0; @endphp @if(session('cart'))
                    @foreach(session('cart') as $id => $product)
                    <div class="d-flex">
                        <p>{{ $product["name"] }}</p>
                        <p class="ms-auto">{{ $product["quantity"] }}</p>
                        <p class="ms-auto">*</p>
                        <p class="ms-auto">${{ $product["price"] }}</p>
                    </div>

                    @php $total += $product['quantity']*$product['price'];
                    @endphp @endforeach @endif
                    <div class="border-top border-bottom py-3">
                        <div class="d-flex">
                            <p class="fw-600 mb-0">Subtotal</p>
                            <p class="ms-auto fw-600 mb-0">${{ $total }}</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <p class="fw-600">Total</p>
                        <p class="ms-auto fw-bold fs-24">${{ $total }}</p>
                    </div>

                    <div class="mt-3">
                        <label for="coupon" class="form_label mb-2">Have A Coupon ?</label>
                        <div class="row g-0">
                            <div class="col-sm-8">
                                <input type="text" placeholder="Coupon Code" class="form-control bg-white rounded-0 height-50 border-black" />
                            </div>
                            <div class="col-sm-4">
                                <button class="btn-3 border-0 p-0 h-100 w-100 d-block">
                                    Update Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input checkout_check_input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label fw-bold" for="flexRadioDefault1">
                                <span class="pe-2">Credit Or Debt Cards</span>
                                <img src="assets/images/cards.svg" class="imt-fluid" alt="" />
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <!-- Display a payment form -->
                        <form id="payment-form">
                            <div id="link-authentication-element">
                                <!--Stripe.js injects the Link Authentication Element-->
                            </div>
                            <div id="payment-element">
                                <!--Stripe.js injects the Payment Element-->
                            </div>
                            <button id="submit" class="btn btn-primary btn-3 rounded-0 w-100 border-0 py-3">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Pay now</span>
                            </button>
                            <div id="payment-message" class="hidden"></div>
                        </form>


                        <div id="credit_cards">
                            <img src="assets/images/visa.svg" class="img-fluid" id="visa" />
                            <img src="assets/images/master.svg" class="img-fluid" id="mastercard" />
                            <img src="assets/images/stripe.svg" class="img-fluid" id="amex" />
                        </div>

                        <div class="row g-3 pt-md-4">
                            <div class="col-md-12">
                                <input type="text" class="form-control border-0 ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Name of card holder" id="" />
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control border-0 ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="MM/YY" id="" />
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 ps-md-4 p-md-3 rounded-0 text-dark my-1" minlength="3" maxlength="3" placeholder="CVC" id="cvv" />
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control ps-md-4 p-md-3 rounded-0 border-0 text-dark my-1" placeholder="Card Number" id="cardNumber" />
                            </div>
                            <div class="col-12">
                                <button type="submit" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-primary btn-3 rounded-0 w-100 border-0 py-3">
                                    Place Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div
        class="modal fade"
        id="exampleModalToggle4"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel4"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered my_modal">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <h1 class="text-center fw-500 fs-1">Payment Failed !</h1>
                    <p class="fs-14 text-center line-height-26">
                        We couldn't process this payment for security reasons.
                        Error code: 12121212
                    </p>
                    <a
                        role="button"
                        class="btn-3 modal_btn d-inline-block w-50"
                        data-bs-dismiss="modal"
                        >Try Again</a
                    >
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="login"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel4"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-centered my_modal">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <h1 class="text-center fw-500 fs-1">Payment Failed !</h1>
                    <p class="fs-14 text-center line-height-26">
                        We couldn't process this payment for security reasons.
                        Error code: 12121212
                    </p>
                    <a
                        role="button"
                        class="btn-3 modal_btn d-inline-block w-50"
                        data-bs-dismiss="modal"
                        >Try Again</a
                    >
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('script')
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset('js/checkout.js') }}" defer></script>
@endpush