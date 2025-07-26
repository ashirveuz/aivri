@extends('website.layouts.app')
@section('content')
    <section class="pr-details">
        <div class="width-container">

            <div class="pr-details-in">
                <div class="row">
                    <!-- Product Images -->
                    <div class="col-md-6 mb-4">
                        <div class="first-pr-dtls-slide">
                            <div class="pr-dtls-slide">
                                <img src="{{ file_exists(public_path('storage/' . $product->featured_image)) ? asset('storage/' . $product->featured_image) : asset('assets/img/no_image.jpg') }}"
                                    alt="{{ $product->image_alt }}" class="img-fluid rounded mb-3 product-image" id="mainImage">
                                <div class="pr-dtl-small-img">
                                    <img src="{{ file_exists(public_path('storage/' . $product->featured_image)) ? asset('storage/' . $product->featured_image) : asset('assets/img/no_image.jpg') }}"
                                        alt="{{ $product->image_alt }}" class="thumbnail rounded active"
                                        onclick="changeImage(event, this.src)">

                                    @foreach ($product->additional_images as $index => $image)
                                        <img src="{{ file_exists(public_path('storage/' . $image)) ? asset('storage/' . $image) : asset('assets/img/no_image.jpg') }}"
                                            class="thumbnail rounded" alt="{{ $product->image_alt }}"
                                            onclick="changeImage(event, this.src)">
                                    @endforeach
                                </div>
                            </div>
                            <div class="main-btn-out">
                                <button type="button" class="btn main-btn">Add to Cart
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button type="button" class="btn second-btn" onclick="addToWishlist('{{ encrypt($product->id) }}',this)">Add to Wishlist <i class="fa-solid fa-star"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-md-6 right-pr-dtls-out">
                        <div class="right-pr-dtls">

                            <h2>{{ $product->name }}</h2>

                            <p class="text-muted mb-4">PKU: {{ $product->code }}</p>

                            <div class="pr-dtls-tot-amnt">
                                @if ($product->offer_percentage && $product->offer_percentage > 0)
                                    <span class="dtls-amt">{{ $product->currency_symbol . $product->current_price }}</span>
                                    <span
                                        class="text-muted dtls-amt-muted"><s>{{ $product->currency_symbol . $product->price }}</s></span>
                                @else
                                    <span class="dtls-amt">{{ $product->currency_symbol . $product->price }}</span>
                                @endif
                            </div>

                            <div class="pr-dtls-star mb-3">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-regular fa-star-half-stroke"></i></span>
                                <span class="pr-details-review">4.5 (120 reviews)</span>
                            </div>

                            <p class="pr-dtls-para">
                                {!! $product->description !!}
                            </p>

                            <div class="filter-group filter-group-color">
                                <h6>Colors</h6>
                                <div class="d-flex gap-2">
                                    <div class="color-option selected" style="background: {{ $product->color }}"></div>
                                </div>
                            </div>

                            <div class="filter-group filter-group-size">
                                <h6>Size</h6>
                                <ul>
                                    <li> {{ $product->size . 'ml' }} </li>
                                </ul>
                            </div>

                            <div class="new-size">
                                <!-- <div class="container my-4"> -->
                                <div class="row g-3">
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 mt-2 mb-3">
                                        <div class="price-card active">
                                            <div><strong>30 g (Pack of 1)</strong></div>
                                            <div>₹284.00</div>
                                            <div class="per-100g">(₹946.67 / 100 g)</div>
                                            <div class="old-price">₹299.00</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 mt-2 mb-3">
                                        <div class="price-card">
                                            <div><strong>50 g (Pack of 1)</strong></div>
                                            <div>₹387.00</div>
                                            <div class="per-100g">(₹774.00 / 100 g)</div>
                                            <div class="old-price">₹445.00</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 mt-2 mb-3">
                                        <div class="price-card">
                                            <div><strong>50 g (Pack of 2)</strong></div>
                                            <div>₹712.00</div>
                                            <div class="per-100g">(₹712.00 / 100 g)</div>
                                            <div class="old-price">₹890.00</div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-6 col-sm-4 col-md-3">
                            <div class="price-card">
                              <div><strong>80 g (Pack of 1)</strong></div>
                              <div>₹499.00</div>
                              <div class="per-100g">(₹623.75 / 100 g)</div>
                              <div class="old-price">₹565.00</div>
                            </div>
                          </div>
                          <div class="col-6 col-sm-4 col-md-3">
                            <div class="price-card">
                              <div><strong>80 g (Pack of 2)</strong></div>
                              <div>₹892.00</div>
                              <div class="per-100g">(₹557.50 / 100 g)</div>
                              <div class="old-price">₹1,100.00</div>
                            </div>
                          </div> -->
                                </div>
                                <!-- </div> -->
                            </div>

                            <div class="pr-dtls-quntity">
                                <div class="cart-incre">
                                    <label for="quantity" class="form-label">Quantity:</label>
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

                            <div class="pr-dtls-features">
                                <h5>Key Features:</h5>
                                <ul>
                                    {!! $product->key_features !!}
                                </ul>
                            </div>

                            <div class="pr-dtls-product-descptn">
                                <h5>Specifications:</h5>
                                <ul>
                                    {!! $product->specifications !!}
                                </ul>
                            </div>

                            <div class="pr-dtls-location">
                                <form>
                                    <input class="form-control" type="search" placeholder="Enter delivery pincode"
                                        aria-label="Search">
                                    <button class="btn" type="submit">Check</button>
                                </form>
                                <p>
                                    Usually delivered in 2-3 days! <br>
                                    Minimum Order Quantity : 2
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="pr-rating">
                <div class="pr-rating-in">
                    <h2 class="mb-3">Product Rating</h2>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-3 left-rating-out">
                                    <div class="left-rating">
                                        <h3>4.8</h3>
                                        <div class="left-rating-star">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-regular fa-star-half-stroke"></i></span>
                                        </div>
                                        <h6 class="text-muted">Based on 245 reviews</h6>
                                        <div class="pr-reviw-btn">
                                            <button class="btn main-btn py-2 mt-2" data-bs-toggle="modal"
                                                data-bs-target="#ratingModal">Write a Review</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 rating-bars-out">
                                    <div class="rating-bars">
                                        <div class="rating-bar mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span>5 stars</span>
                                                <small class="text-muted">70%</small>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rating-bar mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span>4 stars</span>
                                                <small class="text-muted">20%</small>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 20%;" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rating-bar mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span>3 stars</span>
                                                <small class="text-muted">5%</small>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 5%;" aria-valuenow="5" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rating-bar mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span>2 stars</span>
                                                <small class="text-muted">3%</small>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 3%;" aria-valuenow="3" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <span>1 star</span>
                                                <small class="text-muted">2%</small>
                                            </div>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 2%;" aria-valuenow="2" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <hr> -->

                        </div>
                    </div>
                </div>

                <!-- Rating Modal -->
                <div class="rating-modal">
                    <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ratingModalLabel">Write a Review</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="add-review">
                                            <label for="rating" class="form-label">Your Rating</label>
                                            <div class="star-rating">
                                                <i class="fa-solid fa-star rating-star" data-rating="1"></i>
                                                <i class="fa-solid fa-star rating-star" data-rating="2"></i>
                                                <i class="fa-solid fa-star rating-star" data-rating="3"></i>
                                                <i class="fa-solid fa-star rating-star" data-rating="4"></i>
                                                <i class="fa-solid fa-star rating-star" data-rating="5"></i>
                                                <!-- <i class="bi bi-star rating-star" data-rating="1"></i>
                                                              <i class="bi bi-star rating-star" data-rating="2"></i>
                                                              <i class="bi bi-star rating-star" data-rating="3"></i>
                                                              <i class="bi bi-star rating-star" data-rating="4"></i>
                                                              <i class="bi bi-star rating-star" data-rating="5"></i> -->
                                            </div>
                                            <input type="hidden" id="rating" name="rating" value="0">
                                        </div>
                                        <div class="rating-review">
                                            <label for="review" class="form-label">Your Review</label>
                                            <textarea class="form-control" id="review" rows="3" required></textarea>
                                        </div>
                                    </form>
                                    <div class="modal-footer-sec mt-3">
                                        <button type="button" class="btn main-btn py-3 mt-2">Submit Review</button>
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn main-btn py-3 mt-2">Submit Review</button>
                                                      </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="related-products">
        <div class="width-container">

            <div class="col-lg-12 right-pr-list">
                <h4>Related Products </h4>
                <div class="row g-4">

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">

                            <div class="most-freq-item-bg">
                                <a href="product-details.html">
                                    <img src="assets/img/most-freq-product1.png" class="img-fluid" alt="aivri">
                                </a>
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">
                            <div class="most-freq-item-bg">
                                <img src="assets/img/most-freq-product2.png" class="img-fluid" alt="aivri">
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">
                            <div class="most-freq-item-bg">
                                <img src="assets/img/most-freq-product3.png" class="img-fluid" alt="aivri">
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">
                            <div class="most-freq-item-bg">
                                <img src="assets/img/most-freq-product4.png" class="img-fluid" alt="aivri">
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">
                            <div class="most-freq-item-bg">
                                <img src="assets/img/most-freq-product1.png" class="img-fluid" alt="aivri">
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 pr-list-item">
                        <div class="pr-list-item-in">
                            <div class="most-freq-item-bg">
                                <img src="assets/img/most-freq-product2.png" class="img-fluid" alt="aivri">
                            </div>
                            <!--show icons-->
                            <div class="show-icons">
                                <div class="show-icons1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="show-icons2">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="13.75" height="15"
                                        viewBox="0 0 13.75 15">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_8212" data-name="Rectangle 8212" width="13.75"
                                                    height="15" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_7249" data-name="Group 7249">
                                            <path id="Path_38782" data-name="Path 38782"
                                                d="M13.125,65.25H.625A.625.625,0,0,1,0,64.586l.625-10A.625.625,0,0,1,1.25,54H12.5a.625.625,0,0,1,.624.586l.625,10a.625.625,0,0,1-.624.664M1.291,64H12.46l-.547-8.75H1.837Z"
                                                transform="translate(0 -50.25)" fill="currentcolor"></path>
                                            <path id="Path_38783" data-name="Path 38783"
                                                d="M51.875,6.25a.625.625,0,0,1-.625-.625v-2.5A1.877,1.877,0,0,0,49.375,1.25h-1.25A1.877,1.877,0,0,0,46.25,3.125v2.5a.625.625,0,0,1-1.25,0v-2.5A3.129,3.129,0,0,1,48.125,0h1.25A3.129,3.129,0,0,1,52.5,3.125v2.5a.625.625,0,0,1-.625.625"
                                                transform="translate(-41.875 0)" fill="currentcolor"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="most-freq-item-cont">
                                <div class="left-most-freq-item-cont">
                                    <h6>Re—touch Soft Focus Setting Powder</h6>
                                    <div class="most-freq-dtls">
                                        <span class="value">4.7</span><span class="star"><i
                                                class="fa-solid fa-star"></i></span><span class="value-count">| 184
                                            reviews</span>
                                    </div>
                                </div>
                                <div class="right-most-freq-item-cont">
                                    <h6>₹1,500 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endsection
