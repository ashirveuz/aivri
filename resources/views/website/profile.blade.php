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
                                                    </div>
                                                    <div class="profile-head-dtls-out">
                                                        <div class="profile-head-dtls">
                                                            <img src="https://randomuser.me/api/portraits/men/40.jpg"
                                                                class="rounded-circle profile-pic" alt="Profile Picture"
                                                                id="profileImage">
                                                            <button class="btn" onclick="selectImage()">
                                                                <i class="fas fa-camera"></i>
                                                            </button>
                                                            <input type="file" id="imageInput" accept="image/*"
                                                                onchange="handleImageSelect(event)">
                                                        </div>
                                                        <h3 class="mt-3 mb-1">Alex Johnso</h3>
                                                        <p class="text-muted mb-3">Senior Product Designer</p>
                                                    </div>
                                                </div>

                                                <div class="full-nav-pills-out">
                                                    <div class="nav flex-column nav-pills">

                                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="pills-home-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-home"
                                                                    type="button" role="tab" aria-controls="pills-home"
                                                                    aria-selected="true">
                                                                    <!-- <i class="fas fa-user me-2"></i>  -->
                                                                    Profile
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-history-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-history"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-history" aria-selected="false">
                                                                    My Orders
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
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-address-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-address"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-address" aria-selected="false">
                                                                    Manage Address
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="pills-password-tab"
                                                                    data-bs-toggle="pill" data-bs-target="#pills-password"
                                                                    type="button" role="tab"
                                                                    aria-controls="pills-password" aria-selected="false">
                                                                    Change Password
                                                                </button>
                                                            </li>
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

                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
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
                                                                <form>
                                                                    <div class="row g-3">
                                                                        <div class="col-md-6">
                                                                            <label class="form-label">Full Name </label>
                                                                            <input type="text"
                                                                                class="form-control disable-field"
                                                                                value="Alex">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="dob"
                                                                                    class="form-label">Date of
                                                                                    Birth</label>
                                                                                <input type="date" id="dob"
                                                                                    class="form-control disable-field"
                                                                                    name="dob" required>
                                                                            </div>
                                                                        </div>

                                                                        <!-- <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="image" class="form-label">Profile Image</label>
                                                <div class="image-upload"
                                                  onclick="document.getElementById('imageInput').click()">
                                                  <input type="file" id="imageInput" accept="image/*"
                                                    onchange="handleImageUpload(event)"> -->
                                                                        <!-- <div class="upload-subtext">PNG, JPG, or GIF (Max 5MB)</div> -->
                                                                        <!-- <div id="imagePreview" class="image-preview" style="display: none;">
                                                    <img id="previewImg" src="" alt="Preview">
                                                  </div> -->
                                                                        <!-- </div>
                                              </div>
                                            </div> -->

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Gender</label>

                                                                                <div class="gender-options">
                                                                                    <div class="gender-option">
                                                                                        <input type="radio"
                                                                                            id="male"
                                                                                            class="disable-field"
                                                                                            name="gender" value="male"
                                                                                            required>
                                                                                        <label for="male">Male</label>
                                                                                    </div>
                                                                                    <div class="gender-option">
                                                                                        <input type="radio"
                                                                                            id="female"
                                                                                            class=" disable-field"
                                                                                            name="gender" value="female"
                                                                                            required>
                                                                                        <label
                                                                                            for="female">Female</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Button -->
                                                                    <div class="main-btn-out">
                                                                        <a id="reset" name="singlebutton"
                                                                            class="btn main-btn">Edit </a>
                                                                        <a id="elementId" name="singlebutton"
                                                                            class="btn second-btn"
                                                                            onclick="disableFunction()">Save</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- My Orders -->
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
                                                                        <!-- <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab" data-bs-target="#nav-returned" type="button" role="tab" aria-controls="nav-returned" aria-selected="false">
                                                              Returned
                                                            </button> -->
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
                                                                                    <h6><a
                                                                                            href="order-history-delivered.html">Order
                                                                                            Details </a></h6>
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
                                                                                    <h6><a
                                                                                            href="order-history-shipped.html">
                                                                                            Order Details </a></h6>
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
                                                                                    <h6><a
                                                                                            href="order-history-cancel.html">Order
                                                                                            Details </a></h6>
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
                                                                                    <h6><a
                                                                                            href="order-history-shipped.html">
                                                                                            Order Details </a></h6>
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
                                                                                    <h6><a
                                                                                            href="order-history-delivered.html">Order
                                                                                            Details </a></h6>
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
                                                                                    <h6><a href="order-cancel.html">Order
                                                                                            Details </a></h6>
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
                                                                                    <h6><a href="return-details.html">Order
                                                                                            Details </a></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Cart -->
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
                                                            <!-- <div class="col-lg-12 cart-summary-out">
                                                        <div class="profile-cart-item-in"> -->
                                                            <!-- Promo Code -->
                                                            <!-- <div class="card promo-code-out">
                                                              <div class="card-body">
                                                                  <h5>Apply Promo Code</h5>
                                                                  <div class="input-group mb-3">
                                                                      <input type="text" class="form-control" placeholder="Enter promo code">
                                                                      <button class="btn btn-outline-secondary" type="button">Apply</button>
                                                                  </div>
                                                              </div>
                                                          </div> -->
                                                            <!-- Cart Summary -->
                                                            <!-- <div class="card cart-summary">
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
                                                                  <button class="btn sec-cart-btn">Proceed to Checkout</button>
                                                              </div>
                                                          </div>
                                                        </div>
                                                    </div> -->
                                                        </div>
                                                        <div class="main-btn-out">
                                                            <button type="button" class="btn main-btn">Checkout <i
                                                                    class="fa-solid fa-arrow-right-long"></i> </button>
                                                        </div>
                                                    </div>

                                                    <!-- wishlist -->
                                                    <div class="tab-pane fade" id="pills-wishlist" role="tabpanel"
                                                        aria-labelledby="pills-wishlist-tab" tabindex="0">
                                                        <div class="wish-list-outr">
                                                            <div class="profile-cart-dtls">
                                                                <h5 class="mb-4">My Wish List</h5>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-lg-12 left-cart-page-out">
                                                                    <!-- Cart Items -->
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
                                                                                            <h5 class="card-title">Product
                                                                                                1</h5>
                                                                                            <p class="text-muted">Category:
                                                                                                Electronics</p>
                                                                                            <div class="cart-min-amount">
                                                                                                $175 X 1</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 cart-dl-out">
                                                                                        <a href="#"
                                                                                            class="btn view-pr-btn">
                                                                                            Add to Cart
                                                                                        </a>
                                                                                        <button
                                                                                            class="btn btn-sm btn-outline-danger">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
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
                                                                                            <h5 class="card-title">Product
                                                                                                1</h5>
                                                                                            <p class="text-muted">Category:
                                                                                                Electronics</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 cart-dl-out">
                                                                                        <a href="#"
                                                                                            class="btn view-pr-btn">
                                                                                            Add to Cart
                                                                                        </a>
                                                                                        <button
                                                                                            class="btn btn-sm btn-outline-danger">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-12 cart-page-out">
                                                                                <div
                                                                                    class="row justify-content-center align-items-center cart-item mb-3">
                                                                                    <div class="col-md-2 cart-img-out">
                                                                                        <div class="cart-img">
                                                                                            <img src="assets/img/most-freq-product2.png"
                                                                                                alt="Product 1"
                                                                                                class="img-fluid rounded">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="cart-data">
                                                                                            <h5 class="card-title">Product
                                                                                                1</h5>
                                                                                            <p class="text-muted">Category:
                                                                                                Electronics</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 cart-dl-out">
                                                                                        <a href="#"
                                                                                            class="btn view-pr-btn">
                                                                                            Add to Cart
                                                                                        </a>
                                                                                        <button
                                                                                            class="btn btn-sm btn-outline-danger">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
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
                                                                                            <h5 class="card-title">Product
                                                                                                1</h5>
                                                                                            <p class="text-muted">Category:
                                                                                                Electronics</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 cart-dl-out">
                                                                                        <a href="#"
                                                                                            class="btn view-pr-btn">
                                                                                            Add to Cart
                                                                                        </a>
                                                                                        <button
                                                                                            class="btn btn-sm btn-outline-danger">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Continue Shopping Button -->
                                                                    <div class="continue-shoping">
                                                                        <div class="main-btn-out">
                                                                            <a href="index.html" class="main-btn">Continue
                                                                                Shoping </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- address -->
                                                    <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                                        aria-labelledby="pills-address-tab" tabindex="0">

                                                        <div class="prof-new-address">
                                                            <h6>Add New Address</h6>
                                                            <button class="btn btn main-btn">Add New</button>
                                                        </div>

                                                        <!--primary address -->
                                                        <div class="manage-address">
                                                            <h5 class="mb-2">Address 1</h5>
                                                            <div class="manage-address-in">
                                                                <!-- Personal Details Section -->
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5>Personal Details </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Full Name</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            John Alexander Smith
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Phone Number</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            (555) 123-4567
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Email Address</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            john.smith@email.com
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">State/Province</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Illinois
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">State</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Springfield
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">City</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Springfield
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">ZIP Code</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            62701
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Country</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            United States
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Street Address</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            123 Main Street, Apartment 4B
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="main-btn-out">
                                                                    <a href="#" class="main-btn">Edit </a>
                                                                    <a href="#" class="second-btn">Delete </a>
                                                                    <a href="#" class="third-btn">Hide </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--address 2 -->
                                                        <div class="manage-address">
                                                            <h5 class="mb-2">Address 2</h5>
                                                            <div class="manage-address-in">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5>Personal Details </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Full Name</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            John Alexander Smith
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Phone Number</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            (555) 123-4567
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Email Address</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            john.smith@email.com
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">State/Province</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Illinois
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">State</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Springfield
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">City</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            Springfield
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">ZIP Code</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            62701
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label class="form-label">Country</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            United States
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Street Address</label>
                                                                        <div
                                                                            class="form-control-plaintext bg-light p-2 rounded">
                                                                            123 Main Street, Apartment 4B
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="main-btn-out">
                                                                    <a href="#" class="main-btn">Edit </a>
                                                                    <a href="#" class="second-btn">Delete </a>
                                                                    <a href="#" class="third-btn">Hide </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- change password -->
                                                    <div class="tab-pane fade" id="pills-password" role="tabpanel"
                                                        aria-labelledby="pills-password-tab" tabindex="0">
                                                        <div class="change-password">
                                                            <h5 class="mb-4">Change Password</h5>
                                                            <form class="change-password-form">
                                                                <div class="form-group mb-3">
                                                                    <label for="password">Password</label>
                                                                    <input type="password" id="password" name="password"
                                                                        required>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="password">Confirm Password</label>
                                                                    <input type="password" id="confirmPassword"
                                                                        name="password" required>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn main-btn py-2">Update</button>
                                                            </form>
                                                        </div>
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
@endsection
