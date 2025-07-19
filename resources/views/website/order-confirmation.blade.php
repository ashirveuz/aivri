@extends('website.layouts.app')
@section('content')
    <section class="common-section order-details">
        <div class="width-container">
            <!-- <div class="common-headding">
          <h2 class="mb-4">Order Details </h2>
        </div> -->


            <div class="row justify-content-center mb-4">
                <div class="col-md-10 order-confirm">
                    <div class="card order-status shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-check-circle fa-3x mb-3"></i>
                            <h2>Order Confirmed!</h2>
                            <p>Thank you for your purchase. Your order has been received and is being processed.</p>
                            <h5>Order #: <span>ORD-2024-001234</span></h5>
                            <p class="mb-0 mt-1">Confirmation sent to: aivri@email.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <!-- Order Summary -->
                        <div class="col-lg-8 order-summary-out">
                            <div class="card order-summary">
                                <div class="card-header">
                                    <h5>
                                        <!-- <i class="fas fa-shopping-cart me-2"></i> -->
                                        Order Summary
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <!-- Order Items -->
                                    <div class="order-item">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-sm-3 col-md-2">
                                                <div class="order-item-img">
                                                    <img src="assets/img/most-freq-product1.png" class="img-fluid rounded"
                                                        alt="Product 1">
                                                </div>
                                            </div>
                                            <div class="col-8 col-sm-5 col-md-6 order-item-center">
                                                <h5>Wireless Bluetooth Headphones</h5>
                                                <p>Color: Black | Size: Standard</p>
                                                <h6>SKU: SC-014</h6>
                                                <div class="sm-count">
                                                    <h6>Qty: 1</h6>
                                                    <h6>$89.99</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-last">
                                                <h6>Qty: 1</h6>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-final">
                                                <h6>$89.99</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-item">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-sm-3 col-md-2">
                                                <div class="order-item-img">
                                                    <img src="assets/img/most-freq-product1.png" class="img-fluid rounded"
                                                        alt="Product 1">
                                                </div>
                                            </div>
                                            <div class="col-8 col-sm-5 col-md-6 order-item-center">
                                                <h5>Wireless Bluetooth Headphones</h5>
                                                <p>Color: Black | Size: Standard</p>
                                                <h6>SKU: SC-014</h6>
                                                <div class="sm-count">
                                                    <h6>Qty: 1</h6>
                                                    <h6>$89.99</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-last">
                                                <h6>Qty: 1</h6>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-final">
                                                <h6>$89.99</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-item">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-sm-3 col-md-2">
                                                <div class="order-item-img">
                                                    <img src="assets/img/most-freq-product1.png" class="img-fluid rounded"
                                                        alt="Product 1">
                                                </div>
                                            </div>
                                            <div class="col-8 col-sm-5 col-md-6 order-item-center">
                                                <h5>Wireless Bluetooth Headphones</h5>
                                                <p>Color: Black | Size: Standard</p>
                                                <h6>SKU: SC-014</h6>
                                                <div class="sm-count">
                                                    <h6>Qty: 1</h6>
                                                    <h6>$89.99</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-last">
                                                <h6>Qty: 1</h6>
                                            </div>
                                            <div class="col-sm-2 col-md-2 order-item-final">
                                                <h6>$89.99</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivery Information -->
                            <div class="card delivery-info">
                                <div class="card-header">
                                    <h5>
                                        <!-- <i class="fas fa-truck me-2"></i> -->
                                        Delivery Information
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 left-delivery-info">
                                            <h6>Shipping Address</h6>
                                            <p class="mb-0">
                                                <span>John Alexander Smith</span><br>
                                                123 Main Street, Apt 4B<br>
                                                Springfield, IL 62701<br>
                                                United States<br>
                                                <i class="fas fa-phone me-1"></i>(555) 123-4567
                                            </p>
                                        </div>
                                        <div class="col-md-6 right-delivery-info">
                                            <h6>Delivery Details</h6>
                                            <p><span>Estimated Delivery:</span> July 20-22, 2025</p>
                                            <p><span>Shipping Method:</span> Standard Delivery</p>
                                            <p><span>Tracking:</span> Will be provided via email</p>
                                            <p><span>Instructions:</span> Leave at front door, ring doorbell</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Price Summary & Actions -->
                        <div class="col-lg-4">
                            <div class="card price-summary-outr">
                                <div class="card-header">
                                    <h5>
                                        <!-- <i class="fas fa-receipt me-2"></i> -->
                                        Order Total
                                    </h5>
                                </div>
                                <div class="card-body price-summary">
                                    <div class="price-summary-item">
                                        <span>Subtotal:</span>
                                        <span>$145.96</span>
                                    </div>
                                    <div class="price-summary-item">
                                        <span>Shipping:</span>
                                        <span>$9.99</span>
                                    </div>
                                    <div class="price-summary-item">
                                        <span>Tax:</span>
                                        <span>$12.48</span>
                                    </div>
                                    <div class="price-summary-item">
                                        <span class="text-success">Discount:</span>
                                        <span class="text-success">-$10.00</span>
                                    </div>
                                    <hr>
                                    <div class="price-summary-item price-summary-total">
                                        <span>Total:</span>
                                        <span>$158.43</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Information -->
                            <div class="card pay-info">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <!-- <i class="fas fa-credit-card me-2"></i> -->
                                        Payment Method
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="pay-info-item">
                                        <i class="fab fa-cc-visa fa-2x me-3 text-primary"></i>
                                        <div class="pay-info-item-in">
                                            <p class="mb-0">Visa ending in 1234</p>
                                            <small class="text-muted">Charged: $158.43</small>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="pay-info-item">
                                        <i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                                        <div class="pay-info-item-in">
                                            <small class="text-muted">Billing Address:</small><br>
                                            <small>Same as shipping address</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- info Buttons -->
                            <div class="card info-btns">
                                <div class="card-body">
                                    <button class="btn">
                                        Track Order
                                    </button>
                                    <button class="btn">
                                        Download Invoice
                                    </button>
                                    <button class="btn">
                                        Email Receipt
                                    </button>
                                    <button class="btn">
                                        Need Help?
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Questions -->
                <div class="col-md-10 questions-order">
                    <div class="card questions-order-in">
                        <div class="card-body">
                            <h5>Questions about your order?</h5>
                            <p class="mb-0">Contact us at <a href="mailto:support@aivri.com">support@aivri.com</a> or call
                                <a href="tel:+15551234567">(555) 123-4567</a></p>
                            <hr>
                            <small class="text-muted">Order placed on July 17, 2025 at 2:30 PM</small>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </section>
@endsection
