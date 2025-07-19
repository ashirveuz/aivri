@extends('website.layouts.app')
@section('content')
    <section class="common-section order-details">
        <div class="width-container">
            <!-- <div class="common-headding">
          <h2 class="mb-4">Order Details </h2>
        </div> -->
            <div class="row">

                <div class="col-lg-8 left-order-details">
                    <div class="order-dtls-in">
                        <!-- order id -->
                        <div class="order-dtls-item-num">
                            <h6>Order ID: OD333989042326008100</h6>
                        </div>
                        <!-- order item -->
                        <div class="order-dtls-item">
                            <div class="row align-items-center">
                                <div class="col-md-8 left-order-dtls-item">
                                    <div class="left-order-dtls-item-cont">
                                        <h4>Berry Addiction 50ML</h4>
                                        <div class="left-order-dtls-item-content">Category: Oil and Lotions</div>
                                        <div class="left-order-dtls-item-content">Seller: IvriLotionsIndia</div>
                                        <h6>₹2,699</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 right-order-dtls-item">
                                    <div class="right-order-dtls-item-img">
                                        <img src="assets/img/most-freq-product1.png" alt="Product 1"
                                            class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Activity -->
                        <div class="order-activity">
                            <h5>Order Activity</h5>
                            <div class="activity-item green">
                                <h6>Order Confirmed <span> Thu, 27th Mar '25</span></h6>
                                <p>Thursday </p>
                            </div>
                            <div class="activity-item red">
                                <h6>Cancelled <span> Oct 14, 2022</span></h6>
                                <p>Monday</p>
                            </div>
                        </div>
                        <!-- order cancelled -->
                        <div class="cancel-order-dtls">
                            Your order was cancelled as per your request.
                        </div>
                    </div>
                    <!-- return order item -->
                    <div class="order-dtls-item return-order-dtls-item">
                        <a href="return-details.html">
                            <div class="row align-items-center">
                                <div class="col-md-8 left-order-dtls-item">
                                    <div class="left-order-dtls-item-cont">
                                        <h4>Berry Addiction 50ML</h4>
                                        <div class="left-order-dtls-item-content">Category: Oil and Lotions</div>
                                        <div class="left-order-dtls-item-content">Seller: IvriLotionsIndia</div>
                                        <h6>₹2,699</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 right-order-dtls-item">
                                    <div class="right-order-dtls-item-img">
                                        <img src="assets/img/most-freq-product1.png" alt="Product 1"
                                            class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="return-cont">
                                <span></span>
                                Returned
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 ord-delivery-dtls-out">
                    <!-- download invoice -->
                    <div class="download-invoice">
                        <button class="btn" type="button"><span><i class="fa-solid fa-file"></i></span>
                            Download Invoice
                        </button>
                    </div>
                    <!-- Cart Summary -->
                    <div class="ord-delivery-dtls">
                        <div class="ord-delivery-dtls-in">
                            <span><i class="fa-solid fa-house"></i></span>
                            Nellicode, Calicut CyberPark
                        </div>
                        <div class="ord-delivery-dtls-in">
                            <span><i class="fa-solid fa-user"></i></span>
                            +91 8129 220 310
                        </div>
                    </div>

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
