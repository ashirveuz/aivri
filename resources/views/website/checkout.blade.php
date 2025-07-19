@extends('website.layouts.app')
@section('content')
    <section class="common-section order-details">
        <div class="width-container">
            <div class="row">

                <div class="col-lg-8 left-checkout-detls">
                    <!-- checkout profile -->
                    <div class="checkout-prf">
                        <div class="checkout-prf-login">
                            <h6>Login Details</h6>
                            <p>+91 8129 220 310</p>
                        </div>
                        <!-- <button class="btn" type="button">Change</button> -->
                    </div>
                    <!-- checkout profile -->
                    <div class="checkout-prf">
                        <div class="checkout-prf-login">
                            <h6>Login to Checkout</h6>
                        </div>
                        <button class="btn" type="button">Login</button>
                    </div>
                    <!-- delivery address -->
                    <!-- <div class="checkout-prf"> -->



                    <div class="no-prf-login-outr">
                        <div class="no-prf-login">
                            <div class="no-prf-addres">
                                <h6>Delivery Address </h6>
                            </div>
                            <a class="btn" type="button">Add New</a>
                        </div>
                        <div class="no-prf-login">
                            <div class="no-prf-addres">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Address 1
                                    </label>
                                </div>
                                <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                            </div>
                            <a class="btn" type="button">Edit</a>
                        </div>
                        <div class="no-prf-login">
                            <div class="no-prf-addres">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Address 2
                                    </label>
                                </div>
                                <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                            </div>
                            <a class="btn" type="button">Edit</a>
                        </div>
                        <div class="no-prf-login">
                            <div class="no-prf-addres">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Address 3
                                    </label>
                                </div>
                                <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                            </div>
                            <a class="btn" type="button">Edit</a>
                        </div>
                    </div>




                    <!-- <div class="checkout-prf-addres">
                  <h6>Address 2</h6>
                  <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                  <button class="btn" type="button" >Edit</button>
                </div>
                <div class="checkout-prf-addres">
                  <h6>Address 3</h6>
                  <p>Akhil M, Mankadan House Ernipalam Calicut Post, Near Baby Hospital, Calicut, Kerala</p>
                  <button class="btn" type="button" >Edit</button>
                </div> -->
                    <!-- </div> -->
                    <!-- </div> -->


                    <div class="no-login-form">
                        <div class="personal-info mt-0">
                            <h5 class="mb-4">Personal Information</h5>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control disable-field" value="Alex">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control disable-field" value="Johnson">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control disable-field"
                                            value="alex.johnson@example.com">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" class="form-control disable-field" value="+1 (555) 123-4567">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="drop-select">
                                            <label class="form-label">Country</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="drop-select">
                                            <label class="form-label">State</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select State</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="drop-select">
                                            <label class="form-label">District</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select District</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="drop-select">
                                            <label class="form-label">City</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select City</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pincode</label>
                                        <input type="tel" class="form-control disable-field"
                                            value="+1 (555) 123-4567">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control disable-field" rows="4">Earanad Clicut, Kozhikode post, Near New bustand, 676505</textarea>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="main-btn-out">
                                    <a id="reset" name="singlebutton" class="btn main-btn">Edit </a>
                                    <a id="elementId" name="singlebutton" class="btn second-btn"
                                        onclick="disableFunction()">Save</a>
                                </div>
                            </form>
                        </div>
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
                                            <img src="assets/img/most-freq-product1.png" class="img-fluid"
                                                alt="">
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

                    <!-- confirm order -->
                    <div class="place-order">
                        <p>Confirm Order Now</p>
                        <div class="main-btn-out">
                            <button type="button" class="btn main-btn" onclick="Show_Div(Div_1)">Pay Now </button>
                        </div>
                    </div>

                    <!-- payment options -->
                    <div class="payment-opt" id="Div_1">
                        <div class="payment-opt-head">
                            <h6>Payment Options</h6>
                        </div>
                        <div class="payment-opt-cont">
                            <div class="payment-options-out">
                                <!-- UPI Option -->
                                <div class="payment-option active" data-option="upi">
                                    <div class="payment-header">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="upi" checked>
                                        <span class="upi-logo">UPI</span>
                                        <label class="form-check-label fw-medium" for="upi">
                                            UPI
                                        </label>
                                    </div>
                                    <div class="payment-details show">
                                        <div class="text-muted small">
                                            Pay by any UPI app
                                            <div class="upi-details">
                                                <input type="text" name="upi-id" class="upi-num"
                                                    placeholder="Enter UPI ID">
                                                <button type="button" class="btn">Pay Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Credit/Debit Card Option -->
                                <div class="payment-option" data-option="card">
                                    <div class="payment-header">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="card">
                                        <label class="form-check-label fw-medium" for="card">
                                            Credit / Debit / ATM Card
                                        </label>
                                    </div>
                                    <div class="payment-details">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Enter Card Number"
                                                maxlength="19">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label text-muted small">Valid thru</label>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select">
                                                    <option>MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select">
                                                    <option>YY</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                    <option>32</option>
                                                    <option>33</option>
                                                    <option>34</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="CVV"
                                                        maxlength="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" class="btn">PAY $229.97</button>
                                        </div>
                                        <div class="text-muted small">
                                            Add and secure cards as per RBI guidelines
                                        </div>
                                    </div>
                                </div>

                                <!-- Net Banking Option -->
                                <div class="payment-option" data-option="netbanking">
                                    <div class="payment-header">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="netbanking">
                                        <label class="form-check-label fw-medium" for="netbanking">
                                            Net Banking
                                        </label>
                                    </div>
                                    <div class="payment-details">
                                        <div class="net-banking-cont mb-3">
                                            <h6 class="fw-bold mb-3">Popular Banks</h6>
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="sbi">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="sbi">
                                                            <span class="bank-icon"><img src="assets/img/sbi.svg"
                                                                    alt=""></span>
                                                            State Bank of India
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="hdfc">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="hdfc">
                                                            <span class="bank-icon"><img src="assets/img/hdfc.svg"
                                                                    alt=""></span>
                                                            HDFC Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="icici">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="icici">
                                                            <span class="bank-icon"><img src="assets/img/icici.svg"
                                                                    alt=""></span>
                                                            ICICI Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="kotak">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="kotak">
                                                            <span class="bank-icon"><img src="assets/img/kotak.svg"
                                                                    alt=""></span>
                                                            Kotak Mahindra Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="axis">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="axis">
                                                            <span class="bank-icon"><img src="assets/img/axis.svg"
                                                                    alt=""></span>
                                                            Axis Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="federal">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="federal">
                                                            <span class="bank-icon"><img src="assets/img/others.svg"
                                                                    alt=""></span>
                                                            Federal Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="iob">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="iob">
                                                            <span class="bank-icon"><img src="assets/img/others.svg"
                                                                    alt=""></span>
                                                            Indian Overseas Bank
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="bankSelection" id="indianbank">
                                                        <label class="form-check-label d-flex align-items-center"
                                                            for="indianbank">
                                                            <span class="bank-icon"><img src="assets/img/others.svg"
                                                                    alt=""></span>
                                                            Indian Bank
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-bold mb-2">Other Banks</h6>
                                            <select class="form-select" id="otherBanks">
                                                <option value="">---Select Bank---</option>
                                                <option value="allahabad">Allahabad Bank</option>
                                                <option value="andhra">Andhra Bank</option>
                                                <option value="bank-of-baroda">Bank of Baroda</option>
                                                <option value="bank-of-india">Bank of India</option>
                                                <option value="bank-of-maharashtra">Bank of Maharashtra</option>
                                                <option value="canara">Canara Bank</option>
                                                <option value="central-bank">Central Bank of India</option>
                                                <option value="corporation">Corporation Bank</option>
                                                <option value="dena">Dena Bank</option>
                                                <option value="indian-bank">Indian Bank</option>
                                                <option value="oriental">Oriental Bank of Commerce</option>
                                                <option value="pnb">Punjab National Bank</option>
                                                <option value="syndicate">Syndicate Bank</option>
                                                <option value="uco">UCO Bank</option>
                                                <option value="union">Union Bank of India</option>
                                                <option value="united">United Bank of India</option>
                                                <option value="vijaya">Vijaya Bank</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" class="btn" id="netbankingPayBtn" disabled>PAY
                                                ₹154</button>
                                        </div>
                                        <div class="text-muted small">
                                            This instrument has low success, use UPI or cards for better experience
                                        </div>
                                    </div>
                                </div>

                                <!-- Cash on Delivery Option -->
                                <div class="payment-option" data-option="cod">
                                    <div class="payment-header">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="cod">
                                        <label class="form-check-label fw-medium" for="cod">
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <div class="payment-details">
                                        <div class="alert" role="alert">
                                            <!-- <i class="bi bi-exclamation-triangle-fill me-2"></i> -->
                                            A ₹9 non-refundable fee is charged to help cover handling costs for cash on
                                            delivery orders.
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-auto">
                                                <div class="captcha-container">
                                                    <canvas id="captchaCanvas" width="120" height="45"></canvas>
                                                    <button type="button" class="btn btn-link p-0 ms-2"
                                                        id="refreshCaptcha" title="Refresh">
                                                        <svg width="16" height="16" fill="currentColor"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                                            <path
                                                                d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter the characters" id="captchaInput" maxlength="6">
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn" id="confirmOrderBtn">CONFIRM
                                                    ORDER</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- EMI Option -->
                                <div class="payment-option" data-option="emi">
                                    <div class="payment-header">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="emi">
                                        <label class="form-check-label fw-medium" for="emi">
                                            EMI (Easy Installments)
                                        </label>
                                        <div class="not-applicable">
                                            Not applicable
                                            <span class="question-icon">?</span>
                                        </div>
                                    </div>
                                    <div class="payment-details">
                                        <div class="text-muted">
                                            Split your payment into easy monthly installments
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ord-delivery-dtls-out">
                    <div class="order-outr-dtls">
                        <div class="card cart-summary">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Price Details </h5>
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
                                <div class="d-flex justify-content-between">
                                    <strong>Total</strong>
                                    <strong>$229.97</strong>
                                </div>
                            </div>
                        </div>
                        <div class="card promo-code-out">
                            <div class="card-body">
                                <h5>Apply Promo Code</h5>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter promo code">
                                    <button class="btn btn-outline-secondary" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-btn-out mt-3">
                            <a href="#" class="btn main-btn">Checkout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentOptions = document.querySelectorAll('.payment-option');

            paymentOptions.forEach(option => {
                option.addEventListener('click', function(e) {
                    // Don't trigger if clicking on radio button directly
                    if (e.target.type === 'radio') return;

                    const radioButton = this.querySelector(
                        'input[type="radio"][name="paymentMethod"]');

                    // Remove active class from all options
                    paymentOptions.forEach(opt => {
                        opt.classList.remove('active');
                        const details = opt.querySelector('.payment-details');
                        if (details) {
                            details.classList.remove('show');
                        }
                    });

                    // Add active class to clicked option
                    this.classList.add('active');
                    const details = this.querySelector('.payment-details');
                    if (details) {
                        details.classList.add('show');
                    }

                    // Check the radio button
                    radioButton.checked = true;
                });
            });

            // Handle direct radio button clicks
            const radioButtons = document.querySelectorAll('input[type="radio"][name="paymentMethod"]');
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    const parentOption = this.closest('.payment-option');

                    // Remove active class from all options
                    paymentOptions.forEach(opt => {
                        opt.classList.remove('active');
                        const details = opt.querySelector('.payment-details');
                        if (details) {
                            details.classList.remove('show');
                        }
                    });

                    // Add active class to selected option
                    parentOption.classList.add('active');
                    const details = parentOption.querySelector('.payment-details');
                    if (details) {
                        details.classList.add('show');
                    }
                });
            });

            // Card number formatting
            const cardNumberInput = document.querySelector('input[placeholder="Enter Card Number"]');
            if (cardNumberInput) {
                cardNumberInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                    let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
                    if (formattedValue.length > 19) {
                        formattedValue = formattedValue.substring(0, 19);
                    }
                    e.target.value = formattedValue;
                });
            }

            // CVV input validation
            const cvvInput = document.querySelector('input[placeholder="CVV"]');
            if (cvvInput) {
                cvvInput.addEventListener('input', function(e) {
                    e.target.value = e.target.value.replace(/[^0-9]/gi, '');
                });
            }

            // Captcha functionality
            let captchaText = '';

            function generateCaptcha() {
                const canvas = document.getElementById('captchaCanvas');
                if (!canvas) return;

                const ctx = canvas.getContext('2d');
                const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                captchaText = '';

                // Clear canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // Generate random text
                for (let i = 0; i < 6; i++) {
                    captchaText += chars.charAt(Math.floor(Math.random() * chars.length));
                }

                // Draw background
                ctx.fillStyle = '#f8f9fa';
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                // Add some noise lines
                ctx.strokeStyle = '#ddd';
                ctx.lineWidth = 1;
                for (let i = 0; i < 5; i++) {
                    ctx.beginPath();
                    ctx.moveTo(Math.random() * canvas.width, Math.random() * canvas.height);
                    ctx.lineTo(Math.random() * canvas.width, Math.random() * canvas.height);
                    ctx.stroke();
                }

                // Draw text
                ctx.font = '18px Arial';
                ctx.fillStyle = '#333';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';

                for (let i = 0; i < captchaText.length; i++) {
                    const x = 20 + (i * 15);
                    const y = 20 + (Math.random() * 10 - 5);
                    const rotation = (Math.random() * 0.4 - 0.2);

                    ctx.save();
                    ctx.translate(x, y);
                    ctx.rotate(rotation);
                    ctx.fillText(captchaText[i], 0, 0);
                    ctx.restore();
                }

                // Add some noise dots
                ctx.fillStyle = '#999';
                for (let i = 0; i < 20; i++) {
                    ctx.beginPath();
                    ctx.arc(Math.random() * canvas.width, Math.random() * canvas.height, 1, 0, 2 * Math.PI);
                    ctx.fill();
                }
            }

            // Initialize captcha
            generateCaptcha();

            // Refresh captcha button
            const refreshBtn = document.getElementById('refreshCaptcha');
            if (refreshBtn) {
                refreshBtn.addEventListener('click', generateCaptcha);
            }

            // Confirm order button
            const confirmBtn = document.getElementById('confirmOrderBtn');
            const captchaInput = document.getElementById('captchaInput');

            if (confirmBtn && captchaInput) {
                confirmBtn.addEventListener('click', function() {
                    const userInput = captchaInput.value.trim();
                    if (userInput === captchaText) {
                        alert('Order confirmed! Thank you for your purchase.');
                    } else {
                        alert('Incorrect captcha. Please try again.');
                        generateCaptcha();
                        captchaInput.value = '';
                    }
                });
            }

            // Net Banking functionality
            const bankRadios = document.querySelectorAll('input[name="bankSelection"]');
            const otherBanksSelect = document.getElementById('otherBanks');
            const netbankingPayBtn = document.getElementById('netbankingPayBtn');

            function updateNetbankingPayButton() {
                const selectedBank = document.querySelector('input[name="bankSelection"]:checked');
                const otherBankSelected = otherBanksSelect && otherBanksSelect.value !== '';

                if (netbankingPayBtn) {
                    if (selectedBank || otherBankSelected) {
                        netbankingPayBtn.disabled = false;
                        netbankingPayBtn.classList.remove('btn-secondary');
                        netbankingPayBtn.classList.add('btn-warning');
                        netbankingPayBtn.style.backgroundColor = '#ff6b35';
                        netbankingPayBtn.style.borderColor = '#ff6b35';
                    } else {
                        netbankingPayBtn.disabled = true;
                        netbankingPayBtn.classList.remove('btn-warning');
                        netbankingPayBtn.classList.add('btn-secondary');
                        netbankingPayBtn.style.backgroundColor = '';
                        netbankingPayBtn.style.borderColor = '';
                    }
                }
            }

            // Handle popular bank selection
            bankRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked && otherBanksSelect) {
                        otherBanksSelect.value = '';
                    }
                    updateNetbankingPayButton();
                });
            });

            // Handle other banks selection
            if (otherBanksSelect) {
                otherBanksSelect.addEventListener('change', function() {
                    if (this.value !== '') {
                        bankRadios.forEach(radio => {
                            radio.checked = false;
                        });
                    }
                    updateNetbankingPayButton();
                });
            }

            // Handle net banking pay button
            if (netbankingPayBtn) {
                netbankingPayBtn.addEventListener('click', function() {
                    const selectedBank = document.querySelector('input[name="bankSelection"]:checked');
                    const otherBank = otherBanksSelect ? otherBanksSelect.value : '';

                    let bankName = '';
                    if (selectedBank) {
                        bankName = selectedBank.nextElementSibling.textContent.trim();
                    } else if (otherBank) {
                        bankName = otherBanksSelect.options[otherBanksSelect.selectedIndex].text;
                    }

                    if (bankName) {
                        alert(`Redirecting to ${bankName} for payment...`);
                    }
                });
            }
        });
    </script>
@endsection
