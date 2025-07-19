@extends('website.layouts.app')
@section('content')
    <section class="sec-cart sec-wish-list">
        <div class="width-container">

            <div class="wish-list-outr">
                <div class="common-headding">
                    <h2 class="mb-4 text-center">Your Wish List</h2>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7 left-cart-page-out">
                        <!-- Cart Items -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="col-md-12 cart-page-out">
                                    <div class="row justify-content-center align-items-center cart-item mb-3">
                                        <div class="col-md-2 cart-img-out">
                                            <div class="cart-img">
                                                <img src="assets/img/most-freq-product1.png" alt="Product 1"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cart-data">
                                                <h5 class="card-title">Product 1</h5>
                                                <p class="text-muted">Category: Electronics</p>
                                                <div class="cart-min-amount">$175 X 1</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 cart-dl-out">
                                            <a href="#" class="btn view-pr-btn">
                                                Add to Cart
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 cart-page-out">
                                    <div class="row justify-content-center align-items-center cart-item mb-3">
                                        <div class="col-md-2 cart-img-out">
                                            <div class="cart-img">
                                                <img src="assets/img/most-freq-product3.png" alt="Product 1"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cart-data">
                                                <h5 class="card-title">Product 1</h5>
                                                <p class="text-muted">Category: Electronics</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 cart-dl-out">
                                            <a href="#" class="btn view-pr-btn">
                                                Add to Cart
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 cart-page-out">
                                    <div class="row justify-content-center align-items-center cart-item mb-3">
                                        <div class="col-md-2 cart-img-out">
                                            <div class="cart-img">
                                                <img src="assets/img/most-freq-product2.png" alt="Product 1"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cart-data">
                                                <h5 class="card-title">Product 1</h5>
                                                <p class="text-muted">Category: Electronics</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 cart-dl-out">
                                            <a href="#" class="btn view-pr-btn">
                                                Add to Cart
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 cart-page-out">
                                    <div class="row justify-content-center align-items-center cart-item mb-3">
                                        <div class="col-md-2 cart-img-out">
                                            <div class="cart-img">
                                                <img src="assets/img/most-freq-product4.png" alt="Product 1"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cart-data">
                                                <h5 class="card-title">Product 1</h5>
                                                <p class="text-muted">Category: Electronics</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 cart-dl-out">
                                            <a href="#" class="btn view-pr-btn">
                                                Add to Cart
                                            </a>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Continue Shopping Button -->
                        <div class="continue-shoping">
                            <div class="main-btn-out">
                                <a href="index.html" class="main-btn">Continue Shoping </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
