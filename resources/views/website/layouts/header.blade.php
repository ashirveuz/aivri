<header>
    <!-- top header -->
    <div class="top-header">
        <div class="width-container">
            <div class="top-header-in">
                <!-- left top header -->
                <div class="left-top-header">
                    <h6> Extra <span>Sale 30%</span> off </h6>
                    <button type="button" class="btn main-btn">Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></button>
                </div>
                <!-- right top header -->
                <div class="right-top-header">
                    <ul>
                        <li><a href="#"> Track Order </a></li>
                        <li><a href="#"> Help Centre </a></li>
                        <li><a href="#"> FAQ </a></li>
                        <li><a href="{{ route('website.about') }}"> About Us </a></li>
                        <li><a href="{{ route('website.contact') }}"> Contact Us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav header -->
    <div class="main-header">
        <div class="width-container">
            <div class="main-header-in">
                <!-- header logo-->
                <div class="header-img">
                    <a href="{{ route('website.home') }}"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <!-- header search-->
                <div class="nav-search">
                    <form>
                        <input class="form-control" type="search" placeholder="What are you looking for?"
                            aria-label="Search">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>
                <!-- header nav icons -->
                <div class="right-nav-top">
                    <!-- manu -->
                    <div class="menu-outr">
                        <div class="menu-button">
                            <i class="fa-solid fa-bars open-icon"></i>
                            <i class="fa-solid fa-times close-icon"></i>
                            <span class="r-menu">Menu</span>
                        </div>

                        <!-- manu dropdown -->
                        <div class="menu-overlay">
                            <nav class="menu">
                                <a href="{{ route('website.home') }}">Home</a>
                                <a href="{{ route('website.about') }}">About</a>
                                <!-- <div class="menu-dropdown">
                <a href="#" class="dropdown-toggle">Products <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="#">Products 1</a>
                    <a href="#">Products 2 </a>
                    <a href="#">Products 3 </a>
                    <a href="#">Products 4 </a>
                </div>
                </div>
                <div class="menu-dropdown">
                <a href="#" class="dropdown-toggle">Products 2 <i class="fa-solid fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="#">Products 2 </a>
                    <a href="#">Products 2 </a>
                    <a href="#">Products 2 </a>
                </div>
                </div> -->
                                <a href="{{ route('website.products') }}">Products</a>
                                <a href="#">Careers</a>
                                <a href="{{ route('website.contact') }}">Contact Us</a>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="nav-profile">
                        <a href="{{ route('login') }}" class="btn prof-btn">
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </div>

                    <!-- cart -->
                    <div class="nav-cart">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                            aria-label="Toggle navigation">
                            <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg"
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
                            <span class="small-num1">3</span>
                        </button>
                        <div class="offcanvas offcanvas-end text-bg-dark cart-popup-haed" tabindex="-1"
                            id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Cart</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">

                                <form class="table-responsive-md shopping-cart pb-8 pb-lg-10">
                                    <table class="table table-borderless bg-dark">

                                        <tbody>
                                            <tr class="position-relative">
                                                <td class="align-middle text-center">
                                                    <a href="#" class="d-block clear-product">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </td>
                                                <td class="shop-product">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-6">
                                                            <img src="assets/img/most-freq-product1.png"
                                                                width="60" height="80"
                                                                alt="natural coconut cleansing oil">
                                                        </div>
                                                        <div class="card-text-out">
                                                            <p class="card-text mb-1">
                                                                <span
                                                                    class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                                <span
                                                                    class="fs-15px fw-bold text-body-emphasis">$29.00</span>
                                                            </p>
                                                            <p class="fw-500 text-body-emphasis">Natural Coconut
                                                                Cleansing Oil</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="input-group position-relative shop-quantity">
                                                        <a href="#" class="shop-down position-absolute"><i
                                                                class="fa-solid fa-minus"></i></a>
                                                        <input type="number"
                                                            class="form-control form-control-sm quantity-input"
                                                            value="1" min="1">
                                                        <a href="#" class="shop-up position-absolute"><i
                                                                class="fa-solid fa-plus"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="position-relative">
                                                <td class="align-middle text-center">
                                                    <a href="#" class="d-block clear-product">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </td>
                                                <td class="shop-product">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-6">
                                                            <img src="assets/img/most-freq-product1.png"
                                                                width="60" height="80"
                                                                alt="natural coconut cleansing oil">
                                                        </div>
                                                        <div class="card-text-out">
                                                            <p class="card-text mb-1">
                                                                <span
                                                                    class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>
                                                                <span
                                                                    class="fs-15px fw-bold text-body-emphasis">$29.00</span>

                                                            </p>
                                                            <p class="fw-500 text-body-emphasis">Natural Coconut
                                                                Cleansing Oil</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="align-middle">
                                                    <div class="input-group position-relative shop-quantity">
                                                        <a href="#" class="shop-down position-absolute"><i
                                                                class="fa-solid fa-minus"></i></a>
                                                        <input type="number"
                                                            class="form-control form-control-sm quantity-input"
                                                            value="1" min="1">
                                                        <a href="#" class="shop-up position-absolute"><i
                                                                class="fa-solid fa-plus"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="position-relative">
                                                <td class="align-middle text-center">
                                                    <a href="#" class="d-block clear-product">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </td>
                                                <td class="shop-product">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-6">
                                                            <img src="assets/img/most-freq-product1.png"
                                                                width="60" height="80"
                                                                alt="natural coconut cleansing oil">
                                                        </div>
                                                        <div class="cart-amt-text-out">
                                                            <p>
                                                                <span class="cross-amt">$39.00</span>
                                                                <span class="new-amt">$29.00</span>

                                                            </p>
                                                            <p class="fw-500 text-body-emphasis">Natural Coconut
                                                                Cleansing Oil</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="align-middle">
                                                    <div class="input-group position-relative shop-quantity">
                                                        <a href="#" class="shop-down position-absolute"><i
                                                                class="fa-solid fa-minus"></i></a>
                                                        <input type="number"
                                                            class="form-control form-control-sm quantity-input"
                                                            value="1" min="1">
                                                        <a href="#" class="shop-up position-absolute"><i
                                                                class="fa-solid fa-plus"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>

                                <div class="cart-btn-out">
                                    <h4>Total Amount <span>$500</span></h4>
                                    <div class="main-btn-out">
                                        <a href="#" class="main-btn">Checkout <i
                                                class="fa-solid fa-credit-card"></i> </a>
                                        <a href="cart.html" class="second-btn">View Cart <i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="nav-wishlist">
                        <a href="{{ route('website.wish-list') }}">
                            <i class="fa-regular fa-star"></i>
                            <span class="small-num2">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
