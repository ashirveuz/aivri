@extends('website.layouts.app')
@section('content')
    <section class="sec-cart">
        <div class="width-container">
            <div class="profile-in">
                <!-- <div class="common-headding">
                    <h2 class="mb-4">My Profile </h2>
                  </div> -->
                <div class="profile-content">
                    <!-- <div class="container py-5"> -->
                    <div class="row">

                        <!-- Main Content -->
                        <div class="col-12">
                            <div class="">
                                <div class="p-0">
                                    <div class="row">
                                        <!-- Sidebar -->
                                        <div class="col-lg-3">
                                            <div class="left-profile">

                                                <div class="col-md-12 profile-header-out">
                                                    <div class="profile-header">
                                                        <!-- <div class="position-absolute top-0 end-0 p-3">
                                                            <button class="btn btn-light"><i class="fas fa-edit me-2"></i>Edit Cover</button>
                                                        </div> -->
                                                    </div>
                                                    <div class="profile-head-dtls-out">
                                                        <div class="profile-head-dtls">
                                                            <img src="https://randomuser.me/api/portraits/men/40.jpg"
                                                                class="rounded-circle profile-pic" alt="Profile Picture">
                                                            <button class="btn">
                                                                <i class="fas fa-camera"></i>
                                                            </button>
                                                        </div>
                                                        <h3 class="mt-3 mb-1">Alex Johnso</h3>
                                                        <p class="text-muted mb-3">Senior Product Designer</p>
                                                        <!-- <div class="d-flex justify-content-center gap-2 mb-4">
                                                            <button class="btn btn-outline-primary"><i class="fas fa-envelope me-2"></i>Message</button>
                                                            <button class="btn btn-primary"><i class="fas fa-user-plus me-2"></i>Connect</button>
                                                        </div> -->
                                                    </div>
                                                </div>

                                                <div class="p-4">
                                                    <div class="nav flex-column nav-pills">

                                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="pills-home-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-home"
                                                                    type="button" role="tab" aria-controls="pills-home"
                                                                    aria-selected="true">
                                                                    <i class="fas fa-user me-2"></i> Profile
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-history-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-history"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-history" aria-selected="false">
                                                                    Order History
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-cart-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-cart"
                                                                    type="button" role="tab" aria-controls="pills-cart"
                                                                    aria-selected="false">
                                                                    Cart
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-wishlist-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-wishlist"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-wishlist" aria-selected="false">
                                                                    WishList
                                                                </button>
                                                            </li>
                                                            <!-- <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-cart" aria-selected="false">
                                                              Cart
                                                            </button>
                                                          </li> -->
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Area -->
                                        <div class="col-lg-9">
                                            <div class="right-profile">
                                                <!-- Personal Information -->
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                        aria-labelledby="pills-home-tab" tabindex="0">
                                                        <div class="main-profile-list-out">

                                                            <div class="main-profile-list">
                                                                <h5 class="mb-4">Profile </h5>
                                                                <div class="row">
                                                                    <div class="col-md-4 main-profile-list-cart-out">
                                                                        <div class="main-profile-list-cart">
                                                                            <svg class="cart-icon"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="30" height="30"
                                                                                viewBox="0 0 13.75 15">
                                                                                <defs>
                                                                                    <clipPath id="clip-path">
                                                                                        <rect id="Rectangle_8212"
                                                                                            data-name="Rectangle 8212"
                                                                                            width="13.75" height="15"
                                                                                            fill="none"></rect>
                                                                                    </clipPath>
                                                                                </defs>
                                                                                <g id="Group_7249" data-name="Group 7249">
                                                                                    <path id="Path_38782"
                                                                                        data-name="Path 38782"
                                                                                        d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                                                        transform="translate(0 -50.25)"
                                                                                        fill="currentcolor"></path>
                                                                                    <path id="Path_38783"
                                                                                        data-name="Path 38783"
                                                                                        d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                                                        transform="translate(-41.875 0)"
                                                                                        fill="currentcolor"></path>
                                                                                </g>
                                                                            </svg>
                                                                            <h3>10 Products</h3>
                                                                            <p>In your Cart</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 main-profile-list-cart-out">
                                                                        <div class="main-profile-list-cart">
                                                                            <i class="fa-regular fa-star"></i>
                                                                            <h3>10 Products</h3>
                                                                            <p>In Wishlist</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 main-profile-list-cart-out">
                                                                        <div class="main-profile-list-cart">
                                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                                            <h3>10 Products</h3>
                                                                            <p>In your Order</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="personal-info">
                                                                <h5 class="mb-4">Personal Information</h5>
                                                                <div class="row g-3">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">First Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Alex">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Johnson">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">Email</label>
                                                                        <input type="email" class="form-control"
                                                                            value="alex.johnson@example.com">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label">Phone</label>
                                                                        <input type="tel" class="form-control"
                                                                            value="+1 (555) 123-4567">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Bio</label>
                                                                        <textarea class="form-control" rows="4">Product designer with 5+ years of experience in creating user-centered digital solutions. Passionate about solving complex problems through simple and elegant designs.</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="pills-history" role="tabpanel"
                                                        aria-labelledby="pills-history-tab" tabindex="0">
                                                        <div class="profile-order-history">
                                                            <h5 class="mb-4">My Orders</h5>
                                                            <div class="order-list">

                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab"
                                                                        role="tablist">
                                                                        <button class="nav-link active" id="nav-home-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-home" type="button"
                                                                            role="tab" aria-controls="nav-home"
                                                                            aria-selected="true">
                                                                            All
                                                                        </button>
                                                                        <button class="nav-link" id="nav-shipped-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-shipped" type="button"
                                                                            role="tab" aria-controls="nav-shipped"
                                                                            aria-selected="false">
                                                                            Shipped
                                                                        </button>
                                                                        <button class="nav-link" id="nav-delivered-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-delivered" type="button"
                                                                            role="tab" aria-controls="nav-delivered"
                                                                            aria-selected="false">
                                                                            Delivered
                                                                        </button>
                                                                        <button class="nav-link" id="nav-cancelled-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-cancelled" type="button"
                                                                            role="tab" aria-controls="nav-cancelled"
                                                                            aria-selected="false">
                                                                            Cancelled
                                                                        </button>
                                                                        <button class="nav-link" id="nav-returned-tab"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#nav-returned" type="button"
                                                                            role="tab" aria-controls="nav-returned"
                                                                            aria-selected="false">
                                                                            Returned
                                                                        </button>
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active" id="nav-home"
                                                                        role="tabpanel" aria-labelledby="nav-home-tab"
                                                                        tabindex="0">

                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist">Delivered </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist ordered-hist2">Shipped
                                                                            </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist ordered-hist3">
                                                                                Cancelled </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-shipped"
                                                                        role="tabpanel" aria-labelledby="nav-shipped-tab"
                                                                        tabindex="0">
                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist ordered-hist2">Shipped
                                                                            </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-delivered"
                                                                        role="tabpanel"
                                                                        aria-labelledby="nav-delivered-tab"
                                                                        tabindex="0">
                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist">Delivered </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-cancelled"
                                                                        role="tabpanel"
                                                                        aria-labelledby="nav-cancelled-tab"
                                                                        tabindex="0">
                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist ordered-hist3">
                                                                                Cancelled </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-returned"
                                                                        role="tabpanel" aria-labelledby="nav-returned-tab"
                                                                        tabindex="0">
                                                                        <!-- order history listing -->
                                                                        <div class="order-history-cont">
                                                                            <div class="ordered-hist ordered-hist4">
                                                                                Returned </div>
                                                                            <div class="delivered-num">
                                                                                <div class="delivered-date">04/05/2025
                                                                                    <span> | </span>Order No:
                                                                                    WH1235864745963
                                                                                </div>
                                                                                <div class="delivered-amt">Total: $125
                                                                                </div>
                                                                            </div>
                                                                            <div class="order-dtls-pr">
                                                                                <div class="left-order-dtls-pr">
                                                                                    <div class="ordered-item-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                    <div class="ordered-item-cont">
                                                                                        <h6>Product 1</h6>
                                                                                        <p>$125 x 1</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="right-order-dtls-pr">
                                                                                    <h6>Order Details</h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cart" role="tabpanel"
                                                        aria-labelledby="pills-cart-tab" tabindex="0">
                                                        <div class="profile-cart-dtls-out">
                                                            <div class="profile-cart-dtls">
                                                                <h5 class="mb-4">My Cart</h5>
                                                            </div>
                                                            <div class="prof-cart-items">

                                                                <div class="card mb-4">
                                                                    <div class="card-body">
                                                                        <div class="col-md-12 cart-page-out">
                                                                            <div
                                                                                class="row justify-content-center align-items-center cart-item mb-3">
                                                                                <div class="col-md-2 cart-img-out">
                                                                                    <div class="cart-img">
                                                                                        <img src="assets/img/most-freq-product1.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="cart-data">
                                                                                        <h5 class="card-title">Product 1
                                                                                        </h5>
                                                                                        <p class="text-muted">Category:
                                                                                            Electronics</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="cart-incre">
                                                                                        <div
                                                                                            class="input-group position-relative shop-quantity">
                                                                                            <a href="#"
                                                                                                class="shop-down position-absolute"><i
                                                                                                    class="fa-solid fa-minus"></i></a>
                                                                                            <input type="number"
                                                                                                class="form-control form-control-sm quantity-input"
                                                                                                value="1"
                                                                                                min="1">
                                                                                            <a href="#"
                                                                                                class="shop-up position-absolute"><i
                                                                                                    class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 text-end">
                                                                                    <div class="cart-amnt">
                                                                                        <p class="fw-bold">$99.99</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 cart-dl-out">
                                                                                    <button
                                                                                        class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 cart-page-out">
                                                                            <div
                                                                                class="row justify-content-center align-items-center cart-item mb-3">
                                                                                <div class="col-md-2 cart-img-out">
                                                                                    <div class="cart-img">
                                                                                        <img src="assets/img/most-freq-product3.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="cart-data">
                                                                                        <h5 class="card-title">Product 1
                                                                                        </h5>
                                                                                        <p class="text-muted">Category:
                                                                                            Electronics</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="cart-incre">
                                                                                        <div
                                                                                            class="input-group position-relative shop-quantity">
                                                                                            <a href="#"
                                                                                                class="shop-down position-absolute"><i
                                                                                                    class="fa-solid fa-minus"></i></a>
                                                                                            <input type="number"
                                                                                                class="form-control form-control-sm quantity-input"
                                                                                                value="1"
                                                                                                min="1">
                                                                                            <a href="#"
                                                                                                class="shop-up position-absolute"><i
                                                                                                    class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 text-end">
                                                                                    <div class="cart-amnt">
                                                                                        <p class="fw-bold">$99.99</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 cart-dl-out">
                                                                                    <button
                                                                                        class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12 cart-page-out">
                                                                            <div
                                                                                class="row justify-content-center align-items-center cart-item mb-3">
                                                                                <div class="col-md-2 cart-img-out">
                                                                                    <div class="cart-img">
                                                                                        <img src="assets/img/most-freq-product4.png"
                                                                                            alt="Product 1"
                                                                                            class="img-fluid rounded">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="cart-data">
                                                                                        <h5 class="card-title">Product 1
                                                                                        </h5>
                                                                                        <p class="text-muted">Category:
                                                                                            Electronics</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="cart-incre">
                                                                                        <div
                                                                                            class="input-group position-relative shop-quantity">
                                                                                            <a href="#"
                                                                                                class="shop-down position-absolute"><i
                                                                                                    class="fa-solid fa-minus"></i></a>
                                                                                            <input type="number"
                                                                                                class="form-control form-control-sm quantity-input"
                                                                                                value="1"
                                                                                                min="1">
                                                                                            <a href="#"
                                                                                                class="shop-up position-absolute"><i
                                                                                                    class="fa-solid fa-plus"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 text-end">
                                                                                    <div class="cart-amnt">
                                                                                        <p class="fw-bold">$99.99</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 cart-dl-out">
                                                                                    <button
                                                                                        class="btn btn-sm btn-outline-danger">
                                                                                        <i class="fa-solid fa-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 cart-summary-out">
                                                                <div class="profile-cart-item-in">
                                                                    <!-- Promo Code -->
                                                                    <div class="card promo-code-out">
                                                                        <div class="card-body">
                                                                            <h5>Apply Promo Code</h5>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Enter promo code">
                                                                                <button class="btn btn-outline-secondary"
                                                                                    type="button">Apply</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Cart Summary -->
                                                                    <div class="card cart-summary">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title mb-4">Order Summary</h5>
                                                                            <div
                                                                                class="d-flex justify-content-between mb-3">
                                                                                <span>Subtotal</span>
                                                                                <span>$199.97</span>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex justify-content-between mb-3">
                                                                                <span>Shipping</span>
                                                                                <span>$10.00</span>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex justify-content-between mb-3">
                                                                                <span>Tax</span>
                                                                                <span>$20.00</span>
                                                                            </div>
                                                                            <hr>
                                                                            <div
                                                                                class="d-flex justify-content-between mb-4">
                                                                                <strong>Total</strong>
                                                                                <strong>$229.97</strong>
                                                                            </div>
                                                                            <button class="btn sec-cart-btn">Proceed to
                                                                                Checkout</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="pills-wishlist" role="tabpanel"
                                                        aria-labelledby="pills-wishlist-tab" tabindex="0">

                                                    </div>
                                                </div>

                                                <!-- Settings Cards -->
                                                <!-- <div class="row g-4 mb-4">
                                                        <div class="col-md-6">
                                                            <div class="settings-card card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div>
                                                                            <h6 class="mb-1">Two-Factor Authentication</h6>
                                                                            <p class="text-muted mb-0 small">Add an extra layer of
                                                                                security</p>
                                                                        </div>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" type="checkbox" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="settings-card card">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div>
                                                                            <h6 class="mb-1">Email Notifications</h6>
                                                                            <p class="text-muted mb-0 small">Receive activity updates
                                                                            </p>
                                                                        </div>
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" type="checkbox" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                <!-- Recent Activity -->
                                                <!-- <div>
                                                        <h5 class="mb-4">Recent Activity</h5>
                                                        <div class="activity-item mb-3">
                                                            <h6 class="mb-1">Updated profile picture</h6>
                                                            <p class="text-muted small mb-0">2 hours ago</p>
                                                        </div>
                                                        <div class="activity-item mb-3">
                                                            <h6 class="mb-1">Changed password</h6>
                                                            <p class="text-muted small mb-0">Yesterday</p>
                                                        </div>
                                                        <div class="activity-item">
                                                            <h6 class="mb-1">Updated billing information</h6>
                                                            <p class="text-muted small mb-0">3 days ago</p>
                                                        </div>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>


    <section class="custom-full-pr">
        <div class="width-container h-100">
            <div class="custom-full-pr-cont">
                <button class="btn">CUSTOMER LOVED, BEST SELLING</button>
                <h2>Signature Makeup Products</h2>
                <p>Explore our soft, vegan, high quality brushes that offer precision and control.</p>
            </div>
        </div>
    </section>

    <section class="home-pr-search">
        <div class="width-container">
            <div class="home-pr-search-innr">
                <h3>Receive 15% off your first order</h3>
                <p>No spam, just the good stuff. Pinky promise.</p>
                <form>
                    <input class="form-control" type="search" placeholder="Email Address" aria-label="Search">
                    <button class="btn" type="submit">Subscribe </button>
                </form>
            </div>
        </div>
    </section>
@endsection
