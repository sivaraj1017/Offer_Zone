@extends('layout')
@section('content')

    <!-- Page Title -->
    <section class="section-page-title text-center flat-spacing-2 pb-0">
        <div class="container">
            <div class="main-page-title">
                <div class="breadcrumbs">
                    <a href="/" class="text-caption-01 cl-text-3 link">Home</a>
                    <i class="icon icon-CaretRightThin cl-text-3"></i>
                    <P class="text-caption-01">
                        Your Wishlist
                    </P>
                </div>
                <h3>
                    Your Wishlist
                </h3>
                <p class="text-body-1 cl-text-2">
                    Explore your saved favorites, manage your wishlist effortlessly,
                    <br class="d-none d-lg-block">
                    and keep track of the items you love most.
                </p>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <!-- Wishlist -->
    <div class="section-wishlist flat-spacing">
        <div class="container">
            <div class="tf-grid-layout tf-col-2 md-col-3 xl-col-4 wrapper-wishlist">
                <!-- Product 1 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-1.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-1_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 new">NEW</li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                        <div class="product-marquee_sale">
                            <div class="marquee-wrapper">
                                <div class="initial-child-container">
                                    <!-- 1 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 2 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 3 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 4 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 5 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Lyocell wrap top
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$69,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$99,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-warm-beige"></span>
                                <img src="assets/images/product/product-1.jpg"
                                    data-src="assets/images/product/product-1.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Dark Blue</span>
                                <span class="swatch-value bg-midnight-blue"></span>
                                <img src="assets/images/product/product-1_3.jpg"
                                    data-src="assets/images/product/product-1_3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">White</span>
                                <span class="swatch-value bg-white"></span>
                                <img src="assets/images/product/product-1_4.jpg"
                                    data-src="assets/images/product/product-1_4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-2.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-2_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Buttons cotton top
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$29,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$49,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-warm-brown"></span>
                                <img src="assets/images/product/product-2.jpg"
                                    data-src="assets/images/product/product-2.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-beige"></span>
                                <img src="assets/images/product/product-2_3.jpg"
                                    data-src="assets/images/product/product-2_3.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-3.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-3_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Wool Midi Coat
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$15,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$25,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-olive-brown"></span>
                                <img src="assets/images/product/product-3.jpg"
                                    data-src="assets/images/product/product-3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-dark-blue"></span>
                                <img src="assets/images/product/product-3_3.jpg"
                                    data-src="assets/images/product/product-3_3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Light</span>
                                <span class="swatch-value bg-warm-beige"></span>
                                <img src="assets/images/product/product-3_4.jpg"
                                    data-src="assets/images/product/product-3_4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-4.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-4_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            linen slim-fit shirt
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$45,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$79,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-dark-blue-2"></span>
                                <img src="assets/images/product/product-4.jpg"
                                    data-src="assets/images/product/product-4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-5.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-5_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 new">NEW</li>
                        </ul>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            High neck midi wool coat
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$9,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$19,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-olive-brown"></span>
                                <img src="assets/images/product/product-5.jpg"
                                    data-src="assets/images/product/product-5.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-dark-blue"></span>
                                <img src="assets/images/product/product-5_3.jpg"
                                    data-src="assets/images/product/product-5_3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-beige"></span>
                                <img src="assets/images/product/product-5_4.jpg"
                                    data-src="assets/images/product/product-5_4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-6.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-6_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Square metallic frame sunglasses
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$34,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$59,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-warm-brown-2"></span>
                                <img src="assets/images/product/product-6.jpg"
                                    data-src="assets/images/product/product-6.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-cool-gray"></span>
                                <img src="assets/images/product/product-6_3.jpg"
                                    data-src="assets/images/product/product-6_3.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-7.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-7_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <ul class="product-badge_list">
                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                        </ul>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                        <div class="product-marquee_sale">
                            <div class="marquee-wrapper">
                                <div class="initial-child-container">
                                    <!-- 1 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 2 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 3 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 4 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                    <!-- 5 -->
                                    <div class="marquee-child-item">
                                        HOT SALE 25% OFF
                                    </div>
                                    <i class="icon icon-Star2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Leather shopper bag with stitching
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$22,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$39,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-warm-beige"></span>
                                <img src="assets/images/product/product-7.jpg"
                                    data-src="assets/images/product/product-7.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Warm Brown</span>
                                <span class="swatch-value bg-caramel"></span>
                                <img src="assets/images/product/product-7_3.jpg"
                                    data-src="assets/images/product/product-7_3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-sand-beige"></span>
                                <img src="assets/images/product/product-7_4.jpg"
                                    data-src="assets/images/product/product-7_4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-8.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-8_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Leather shopper bag with stitching
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$67,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$99,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Pink</span>
                                <span class="swatch-value bg-rose-taupe"></span>
                                <img src="assets/images/product/product-8.jpg"
                                    data-src="assets/images/product/product-8.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-dark-blue-2"></span>
                                <img src="assets/images/product/product-8_3.jpg"
                                    data-src="assets/images/product/product-8_3.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Pink</span>
                                <span class="swatch-value bg-blush-pink"></span>
                                <img src="assets/images/product/product-8_4.jpg"
                                    data-src="assets/images/product/product-8_4.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="/productdetails" class="product-img">
                            <img class="img-product" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-9.jpg" alt="Product">
                            <img class="img-hover" loading="lazy" width="330" height="440"
                                src="assets/images/product/product-9_2.jpg" alt="Product">
                        </a>
                        <ul class="product-action_list">
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-ArrowsLeftRight"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-Eye"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <span class="product-action_remove remove box-icon hover-tooltip tooltip-left">
                            <i class="icon icon-trash"></i>
                            <span class="tooltip">Remove</span>
                        </span>
                        <div class="product-action_bot">
                            <a href="#quickAdd" data-bs-toggle="modal" class="tf-btn btn-white small  w-100">
                                Quick Add

                            </a>
                        </div>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="1093120" data-labels="D : ,H : ,M : ,S">
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="/productdetails" class="name-product lh-24 fw-medium link-underline-text">
                            Oval shoulder bag
                        </a>
                        <div class="star-wrap d-flex align-items-center">
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                            <i class="icon icon-Star"></i>
                        </div>
                        <div class="price-wrap">
                            <span class="price-new text-primary fw-semibold">$12,99</span>
                            <span class="price-old text-caption-01 cl-text-3">$21,99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Purple</span>
                                <span class="swatch-value bg-lavender"></span>
                                <img src="assets/images/product/product-9.jpg"
                                    data-src="assets/images/product/product-9.jpg" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-dark-blue"></span>
                                <img src="assets/images/product/product-9_3.jpg"
                                    data-src="assets/images/product/product-9_3.jpg" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="wd-full">
                    <div class="tf-page-pagination justify-content-center">
                        <a href="#" class="pag-item">1</a>
                        <p class="pag-item active">2</p>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item">
                            <i class="icon icon-CaretRightThin"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Wishlist -->

@endsection