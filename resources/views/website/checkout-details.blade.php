@extends('website.layouts.app')
@section('content')
    <section class="common-section order-details">
        <div class="width-container">
            <!-- <div class="common-headding">
          <h2 class="mb-4">Order Details </h2>
        </div> -->
            <div class="row">

                <div class="col-lg-8 left-checkout-detls">
                    <!-- checkout profile -->
                    <div class="checkout-prf">
                        <div class="checkout-prf-login">
                            <h6>Login Details</h6>
                            <p>+91 8129 220 310</p>
                        </div>
                        <button class="btn" type="button">Change</button>
                    </div>
                    <!-- delivery address -->
                    <div class="checkout-prf">
                        <div class="checkout-prf-login">
                            <h6>Delivery Address</h6>
                            <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                        </div>
                        <button class="btn" type="button">Change</button>
                    </div>
                    <!-- order summary -->
                    <div class="left-checkout-detls-in">
                        <div class="checkout-dtls-item-num">
                            <h6>Order Summary </h6>
                        </div>
                        <div class="checkout-out-ttl">
                            <div class="checkout-out">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="checkout-img">
                                            <img src="assets/img/most-freq-product1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="mt-2 cart-incre">
                                            <div class="input-group position-relative shop-quantity">
                                                <a href="#" class="shop-down position-absolute"><i
                                                        class="fa-solid fa-minus"></i></a>
                                                <input type="number" class="form-control form-control-sm quantity-input"
                                                    value="1" min="1">
                                                <a href="#" class="shop-up position-absolute"><i
                                                        class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="checkout-all-data">
                                            <div class="checkout-data">
                                                <h5>Product 1</h5>
                                                <p>Category: NAtural Oil</p>
                                            </div>
                                            <div class="checkout-amnt">
                                                <p>$99.99 <small>$120.99</small></p>
                                            </div>
                                            <div class="checkout-amnt-off">
                                                <p>92% Off <span>1 Coupon Applied </span></p>
                                            </div>
                                            <button class="btn cancel">Remove </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 right-checkout-out">
                                        <div class="right-checkout">
                                            Delivery in 2 days, Sat
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-lg-4 ord-delivery-dtls-out">
                    <div class="card cart-summary">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Order Summary</h5>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Subtotal</span>
                                <span>$199.97</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Shipping</span>
                                <span>$10.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Tax</span>
                                <span>$20.00</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-4">
                                <strong>Total</strong>
                                <strong>$229.97</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection