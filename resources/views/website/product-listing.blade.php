@extends('website.layouts.app')
@section('content')
    <section class="sec-cart sec-wish-list">
        <div class="width-container">

            <!-- <div class="container py-5"> -->
            <!-- Top Bar -->
            <div class="pr-list-head">
                <h4>Product Collection</h4>
                <div class="pr-list-head-in">
                    <span class="text-muted">Sort by:</span>
                    <button class="sort-btn">
                        Newest <i class="bi bi-chevron-down ms-2"></i>
                    </button>
                </div>
            </div>

            <div class="row g-4">
                <!-- Filters Sidebar -->
                <div class="col-lg-3 left-pr-list">
                    <div class="filter-sidebar p-4 shadow-sm">
                        <div class="filter-group">
                            <h6>Categories</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="electronics">
                                <label class="form-check-label" for="electronics">
                                    Electronics
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="clothing">
                                <label class="form-check-label" for="clothing">
                                    Clothing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="accessories">
                                <label class="form-check-label" for="accessories">
                                    Accessories
                                </label>
                            </div>
                        </div>

                        <div class="filter-group filter-group-range">
                            <h6>Price Range</h6>

                            <div class="range_container">
                                <div class="sliders_control">
                                    <input id="fromSlider" type="range" value="10" min="0" max="100" />
                                    <input id="toSlider" type="range" value="40" min="0" max="100" />
                                </div>
                                <div class="form_control">
                                    <div class="form_control_container">
                                        <!-- <div class="form_control_container__time">Min</div> -->
                                        <input class="form_control_container__time__input" type="number" id="fromInput"
                                            value="10" min="0" max="100" />
                                    </div>
                                    <div class="form_control_container">
                                        <!-- <div class="form_control_container__time">Max</div> -->
                                        <input class="form_control_container__time__input" type="number" id="toInput"
                                            value="40" min="0" max="100" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-group-size">
                            <h6>Size</h6>
                            <ul>
                                <li>100ml</li>
                                <li>200ml</li>
                                <li>500ml</li>
                            </ul>
                        </div>

                        <div class="filter-group filter-group-color">
                            <h6>Colors</h6>
                            <div class="d-flex gap-2">
                                <div class="color-option selected" style="background: #000000;"></div>
                                <div class="color-option" style="background: #dc2626;"></div>
                                <div class="color-option" style="background: #2563eb;"></div>
                                <div class="color-option" style="background: #16a34a;"></div>
                            </div>
                        </div>

                        <div class="filter-group filter-group-rating">
                            <h6>Rating</h6>
                            <div class="form-check mb-2 custom-radio">
                                <input type="radio" name="rating" id="rating4">
                                <label for="rating4">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <!-- 4 & above -->
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="form-check mb-2 custom-radio">
                                <input type="radio" name="rating" id="rating3">
                                <label for="rating3">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <!-- 3 & above -->
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="form-check mb-2 custom-radio">
                                <input type="radio" name="rating" id="rating2">
                                <label for="rating2">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <!-- 2 & above -->
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <button class="btn main-btn w-100 py-3">Apply Filters</button>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-lg-9 right-pr-list">
                    <div class="row g-4">
                        <div class="col-md-4 pr-list-item">
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

                        <div class="col-md-4 pr-list-item">
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

                        <div class="col-md-4 pr-list-item">
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

                        <div class="col-md-4 pr-list-item">
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

                        <div class="col-md-4 pr-list-item">
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

                        <div class="col-md-4 pr-list-item">
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
            <!-- </div> -->

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
