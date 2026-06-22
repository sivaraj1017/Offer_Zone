@extends('layout')
@section('content')

    <!-- Page Tile Single -->
    <div class="section-page-title-single flat-spacing-3">
        <div class="container">
            <div class="main-page-title">
                <div class="breadcrumbs">
                    <a href="/" class="text-caption-01 cl-text-3 link">Home</a>
                    <i class="icon icon-CaretRightThin cl-text-3"></i>
                    <a href="/shop" class="text-caption-01 cl-text-3 link">Shop</a>
                    <i class="icon icon-CaretRightThin cl-text-3"></i>
                    <P class="text-caption-01">
                        Lyocell Wrap Top
                    </P>
                </div>
                <div class="nav-post-list">
                    <a href="/productdetails" class="link nav-post-item nav-post-prev">
                        <i class="icon icon-CaretLeft"></i>
                    </a>
                    <a href="/shop" class="link nav-all-post nav-post-link">
                        <i class="icon icon-SquaresFour"></i>
                    </a>
                    <a href="/productdetails" class="link nav-post-item nav-post-next">
                        <i class="icon icon-CaretRightThin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Tile Single -->
    <!-- Product Single -->
    <section class="section-product-single tf-main-product section-image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-product-media-wrap sticky-top">
                        <div class="product-thumbs-slider style-row row_left">
                            <div class="flat-wrap-media-product">
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started"
                                    data-spacing="0">
                                    <div class="swiper-wrapper">
                                        <!-- item 1 -->
                                        <div class="swiper-slide" data-color="green" data-size="L">
                                            <a href="assets/images/product/single/detail-1.jpg" target="_blank" class="item"
                                                data-pswp-width="576px" data-pswp-height="768px">
                                                <img loading="lazy" width="576" height="768"
                                                    data-zoom="assets/images/product/single/detail-1.jpg"
                                                    src="assets/images/product/single/detail-1.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <!-- item 2 -->
                                        <div class="swiper-slide" data-color="green" data-size="S">
                                            <a href="assets/images/product/single/detail-1_2.jpg" target="_blank"
                                                class="item" data-pswp-width="576px" data-pswp-height="768px">
                                                <img loading="lazy" width="576" height="768"
                                                    data-zoom="assets/images/product/single/detail-1_2.jpg"
                                                    src="assets/images/product/single/detail-1_2.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <!-- item 3 -->
                                        <div class="swiper-slide" data-color="green" data-size="M">
                                            <a href="assets/images/product/single/detail-1_3.jpg" target="_blank"
                                                class="item" data-pswp-width="576px" data-pswp-height="768px">
                                                <img loading="lazy" width="576" height="768"
                                                    data-zoom="assets/images/product/single/detail-1_3.jpg"
                                                    src="assets/images/product/single/detail-1_3.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <!-- item 4 -->
                                        <div class="swiper-slide" data-color="green" data-size="XL">
                                            <a href="assets/images/product/single/detail-1_4.jpg" target="_blank"
                                                class="item" data-pswp-width="576px" data-pswp-height="768px">
                                                <img loading="lazy" width="576" height="768"
                                                    data-zoom="assets/images/product/single/detail-1_4.jpg"
                                                    src="assets/images/product/single/detail-1_4.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <!-- item 5 -->
                                        <div class="swiper-slide" data-color="gray" data-size="M">
                                            <a href="assets/images/product/single/detail-1_5.jpg" target="_blank"
                                                class="item" data-pswp-width="576px" data-pswp-height="768px">
                                                <img loading="lazy" width="576" height="768"
                                                    data-zoom="assets/images/product/single/detail-1_5.jpg"
                                                    src="assets/images/product/single/detail-1_5.jpg" alt="img-product">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical"
                                data-preview="7">
                                <div class="swiper-wrapper stagger-wrap">
                                    <!-- item 1 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 2 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_2.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 3 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_3.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 4 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_4.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 5 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_5.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 6 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_6.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 7 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_7.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <!-- item 8 -->
                                    <div class="swiper-slide stagger-item">
                                        <div class="item">
                                            <img loading="lazy" width="82" height="110"
                                                src="assets/images/product/single/detail-1_8.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tf-product-info-wrap position-relative mt-md-0">
                        <div class="tf-zoom-main sticky-top"></div>
                        <div class="tf-product-info-list other-image-zoom">
                            <div class="tf-product-info-heading">
                                <p class="product-infor-cate text-caption-01 mb-4">
                                    Clothing
                                </p>
                                <h3 class="product-infor-name mb-12">
                                    Lyocell Wrap Top
                                </h3>
                                <div class="product-infor-meta mb-20">
                                    <div class="meta_rate">
                                        <div class="star-wrap normal d-flex align-items-center">
                                            <i class="icon icon-Star"></i>
                                            <i class="icon icon-Star"></i>
                                            <i class="icon icon-Star"></i>
                                            <i class="icon icon-Star"></i>
                                            <i class="icon icon-Star"></i>
                                        </div>
                                        <span class="text-caption-01 cl-text-2">
                                            (134 reviews)
                                        </span>
                                    </div>
                                    <div class="br-line type-vertical"></div>
                                    <div class="meta_sold">
                                        <i class="icon icon-Lightning text-primary"></i>
                                        <span class="text-caption-01 cl-text-2">18 sold in last 32 hours</span>
                                    </div>
                                    <div class="br-line type-vertical"></div>
                                    <div class="meta_prd_code text-caption-01">
                                        <span class="cl-text-2">SKU:</span>
                                        <span>53453412</span>
                                    </div>
                                </div>
                                <div class="product-infor-price mb-12">
                                    <h4 class="price-on-sale">$79.99</h4>
                                    <div class="br-line type-vertical"></div>
                                    <p class="cl-text-3 text-decoration-line-through">$98.99</p>
                                    <span class="badge-sale text-white fw-semibold text-caption-02">
                                        -25%
                                    </span>
                                </div>
                                <p class="product-infor-desc cl-text-2 mb-12">
                                    The garments labelled as Committed are products that have been produced using
                                    sustainable fibres or processes, reducing their environmental impact.
                                </p>
                                <div class="product-infor-reality lh-24">
                                    <div class="ic d-flex">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="24" height="24" rx="4" fill="#101010" />
                                            <path
                                                d="M19.4569 11.7975C19.435 11.7481 18.9056 10.5738 17.7287 9.39687C16.1606 7.82875 14.18 7 12 7C9.81999 7 7.83937 7.82875 6.27124 9.39687C5.09437 10.5738 4.56249 11.75 4.54312 11.7975C4.51469 11.8614 4.5 11.9306 4.5 12.0006C4.5 12.0706 4.51469 12.1398 4.54312 12.2037C4.56499 12.2531 5.09437 13.4269 6.27124 14.6038C7.83937 16.1713 9.81999 17 12 17C14.18 17 16.1606 16.1713 17.7287 14.6038C18.9056 13.4269 19.435 12.2531 19.4569 12.2037C19.4853 12.1398 19.5 12.0706 19.5 12.0006C19.5 11.9306 19.4853 11.8614 19.4569 11.7975ZM12 14.5C11.5055 14.5 11.0222 14.3534 10.6111 14.0787C10.1999 13.804 9.87951 13.4135 9.69029 12.9567C9.50107 12.4999 9.45157 11.9972 9.54803 11.5123C9.64449 11.0273 9.88259 10.5819 10.2322 10.2322C10.5819 9.8826 11.0273 9.6445 11.5123 9.54804C11.9972 9.45157 12.4999 9.50108 12.9567 9.6903C13.4135 9.87952 13.804 10.2 14.0787 10.6111C14.3534 11.0222 14.5 11.5055 14.5 12C14.5 12.663 14.2366 13.2989 13.7678 13.7678C13.2989 14.2366 12.663 14.5 12 14.5Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <span class="text-caption-01">
                                        28 people are viewing this right now
                                    </span>
                                </div>
                            </div>
                            <div class="br-line"></div>
                            <div class="tf-product-variant">
                                <div class="variant-picker-item variant-color">
                                    <div class="variant-picker-label">
                                        <div>
                                            Colors:
                                            <span
                                                class="variant-picker-label-value value-currentColor text-capitalize fw-medium">Gray</span>
                                        </div>
                                    </div>
                                    <div class="variant-picker-values">
                                        <div class="hover-tooltip tooltip-bot color-btn style-image active"
                                            data-color="green">
                                            <div class="img">
                                                <img loading="lazy" width="60" height="60"
                                                    src="assets/images/product/single/img_square/detail-1_2.jpg"
                                                    data-src="assets/images/product/single/img_square/detail-1_2.jpg"
                                                    alt="img">
                                            </div>
                                            <span class="tooltip">Green</span>
                                        </div>
                                        <div class="hover-tooltip tooltip-bot color-btn style-image" data-color="gray">
                                            <div class="img">
                                                <img loading="lazy" width="60" height="60"
                                                    src="assets/images/product/single/img_square/detail-1_5.jpg"
                                                    data-src="assets/images/product/single/img_square/detail-1_5.jpg"
                                                    alt="img">
                                            </div>
                                            <span class="tooltip">Gray</span>
                                        </div>
                                        <div class="hover-tooltip tooltip-bot color-btn style-image" data-color="black">
                                            <div class="img">
                                                <img loading="lazy" width="60" height="60"
                                                    src="assets/images/product/single/img_square/detail-1_7.jpg"
                                                    data-src="assets/images/product/single/img_square/detail-1_7.jpg"
                                                    alt="img">
                                            </div>
                                            <span class="tooltip">Black</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="variant-picker-item variant-size">
                                    <div class="variant-picker-label">
                                        <div>
                                            Size:
                                            <span
                                                class="variant-picker-label-value value-currentSize text-capitalize fw-medium">M</span>
                                        </div>
                                        <a href="#findSize" data-bs-toggle="modal"
                                            class="tf-btn-line-2 style-primary text-caption-01 fw-semibold">
                                            Size Guide
                                        </a>
                                    </div>
                                    <div class="variant-picker-values">
                                        <span class="size-btn" data-size="S" data-price="39.99">S</span>
                                        <span class="size-btn active" data-size="M" data-price="59.99">M</span>
                                        <span class="size-btn" data-size="L" data-price="79.99">L</span>
                                        <span class="size-btn" data-size="XL" data-price="89.99">XL</span>
                                        <span class="size-btn disabled" data-size="XX" data-price="99.99">XXL</span>
                                    </div>
                                </div>
                                <div class="tf-product-total-quantity">
                                    <p class="">
                                        Quantity:
                                    </p>
                                    <div class="group-action">
                                        <div class="wg-quantity">
                                            <button class="btn-quantity btn-decrease">
                                                <i class="icon icon-minus"></i>
                                            </button>
                                            <input class="quantity-product" type="text" name="number" value="1">
                                            <button class="btn-quantity btn-increase">
                                                <i class="icon icon-plus"></i>
                                            </button>
                                        </div>
                                        <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                            class="btn-action-price tf-btn type-xl animate-btn w-100">
                                            Add To Cart
                                            <span class="d-none d-sm-block d-md-none d-lg-block">&nbsp;-&nbsp;</span>
                                            <span class="price-add d-none d-sm-block d-md-none d-lg-block">$79.99</span>
                                        </a>
                                    </div>
                                    <a href="/checkout" class="tf-btn type-xl btn-primary animate-btn w-100">
                                        Buy It Now
                                    </a>
                                </div>
                            </div>
                            <div class="tf-product-extra-link">
                                <a href="#compare" data-bs-toggle="offcanvas" class="product-extra-icon link">
                                    <i class="icon icon-ArrowsLeftRight"></i>
                                    Compare
                                </a>
                                <a href="#ask" data-bs-toggle="modal" class="product-extra-icon link">
                                    <i class="icon icon-Question"></i>
                                    Ask A Question
                                </a>
                                <a href="#findSize" data-bs-toggle="modal" class="product-extra-icon link">
                                    <i class="icon icon-Ruler"></i>
                                    Size Guide
                                </a>
                                <a href="#share" data-bs-toggle="modal" class="product-extra-icon link">
                                    <i class="icon icon-ShareNetwork"></i>
                                    Share
                                </a>
                            </div>
                            <div class="br-line"></div>
                            <div class="tf-product-delivery-return">
                                <div class="product-delivery">
                                    <i class="icon icon-Timer"></i>
                                    <p>
                                        Estimated Delivery:
                                        <span class="fw-semibold">
                                            12-26 Days
                                        </span>
                                        (International),
                                        <span class="fw-semibold">
                                            3-6 Days
                                        </span>
                                        (United States)
                                    </p>
                                </div>
                                <div class="product-delivery return">
                                    <i class="icon icon-ArrowClockwise"></i>
                                    <p>
                                        Return within
                                        <span class="fw-semibold">
                                            45 Days
                                        </span>
                                        of purchase. Duties & taxes are non-refundable.
                                    </p>
                                </div>
                            </div>
                            <div class="tf-product-trust-seal">
                                <p class="h6 text-seal">Guranteed Safe Checkout:</p>
                                <ul class="list-card">
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/visa.svg" alt="card">
                                    </li>
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/master-card.svg" alt="card">
                                    </li>
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/amex.svg" alt="card">
                                    </li>
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/paypal.svg" alt="card">
                                    </li>
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/water.svg" alt="card">
                                    </li>
                                    <li class="card-item">
                                        <img width="50" height="32" src="assets/images/payment/discover.svg" alt="card">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tf-sticky-btn-atc">
        <div class="container">
            <div class="tf-height-observer w-100 d-flex align-items-center">
                <div class="tf-sticky-atc-product d-flex align-items-center">
                    <div class="atc-product-side">
                        <div class="prd_img">
                            <img loading="lazy" width="60" height="80" src="assets/images/product/single/detail-1_2.jpg"
                                alt="Image">
                        </div>
                        <div class="prd_info d-none d-lg-grid">
                            <p class="name__prd fw-medium lh-24">Lyocell wrap top</p>
                            <p class="distribute__prd text-caption-01 cl-text-3">Green, XS, Cotton</p>
                            <p class="price__prd fw-semibold">$79.00</p>
                        </div>
                    </div>
                </div>
                <div class="tf-sticky-atc-infos">
                    <form class="">
                        <div class="tf-sticky-atc-variant-price">
                            <p class="title">Size:</p>
                            <div class="tf-select style-2">
                                <select>
                                    <option selected="selected">M</option>
                                    <option>S</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="tf-product-info-quantity">
                            <p class="title">Quantity:</p>
                            <div class="wg-quantity style-2">
                                <button class="btn-quantity minus-btn">
                                    <i class="icon icon-minus"></i>
                                </button>
                                <input class="quantity-product" type="text" name="number" value="1">
                                <button class="btn-quantity plus-btn">
                                    <i class="icon icon-plus"></i>
                                </button>
                            </div>
                        </div>
                        <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn btn-add-to-cart">
                            Add To Cart - $79.99
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Product Single -->
    <!-- Product Description -->
    <section class="section-product-description flat-spacing flat-animate-tab">
        <div class="container">
            <ul class="tab-btn-wrap-v1" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#description" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                        <span class="h5 fw-medium">Description</span>
                    </a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#customer-reviews" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                        <span class="h5 fw-medium">Customer Reviews</span>
                    </a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#shipping-returns" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                        <span class="h5 fw-medium">Shipping & Returns</span>
                    </a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#return-policies" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                        <span class="h5 fw-medium">Return Policies</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="description" role="tabpanel">
                    <div class="tab-content_desc tf-grid-layout md-col-2">
                        <div class="box-desc">
                            <h5 class="desc_title">Stretch Strap Top</h5>
                            <div class="desc_info">
                                <p class="cl-text-2">
                                    Nodding to retro styles, this Hyperbola T-shirt is defined by its
                                    off-the-shoulder design. It's spun from a green stretch cotton jersey and
                                    adorned with an embroidered.
                                </p>
                                <p class="cl-text-2">
                                    Thick knitted fabric. Short design. Straight design. Rounded neck.
                                    Sleeveless.
                                    Straps. Unclosed. Cable knit finish. Co-ord.
                                </p>
                            </div>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">Composition, Origin And Care Guidelines</h5>
                            <ul class="list">
                                <li class="cl-text-2">- Composition: 55% polyester, 30% acrylic, 13% polyamide,
                                    2% elastane</li>
                                <li class="cl-text-2">- Designed in Barcelona</li>
                                <li class="cl-text-2">- Origin</li>
                                <li class="cl-text-2">- Manufacture: USA</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="customer-reviews" role="tabpanel">
                    <div class="product-desc_review">
                        <div class="box-rating">
                            <div class="rating-ratio">
                                <p class="text-display fw-medium">
                                    4.8
                                </p>
                                <div class="star-wrap normal d-flex align-items-center">
                                    <i class="icon icon-Star fs-24"></i>
                                    <i class="icon icon-Star fs-24"></i>
                                    <i class="icon icon-Star fs-24"></i>
                                    <i class="icon icon-Star fs-24"></i>
                                    <i class="icon icon-Star fs-24"></i>
                                </div>
                                <p class="rate-number">
                                    (1,968 Ratings)
                                </p>
                            </div>
                            <div class="rating-progress-list">
                                <div class="rate-progress-star fw-medium">
                                    <span class="number-star">5</span>
                                    <i class="icon icon-Star fs-20 cl-text-yellow"></i>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 60%;"></div>
                                    </div>
                                    <span class="number-percent">60%</span>
                                </div>
                                <div class="rate-progress-star fw-medium">
                                    <span class="number-star">4</span>
                                    <i class="icon icon-Star fs-20 cl-text-yellow"></i>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 20%;"></div>
                                    </div>
                                    <span class="number-percent">20%</span>
                                </div>
                                <div class="rate-progress-star fw-medium">
                                    <span class="number-star">3</span>
                                    <i class="icon icon-Star fs-20 cl-text-yellow"></i>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%;"></div>
                                    </div>
                                    <span class="number-percent">10%</span>
                                </div>
                                <div class="rate-progress-star fw-medium">
                                    <span class="number-star">2</span>
                                    <i class="icon icon-Star fs-20 cl-text-yellow"></i>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 7%;"></div>
                                    </div>
                                    <span class="number-percent">7%</span>
                                </div>
                                <div class="rate-progress-star fw-medium">
                                    <span class="number-star">1</span>
                                    <i class="icon icon-Star fs-20 cl-text-yellow"></i>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 3%;"></div>
                                    </div>
                                    <span class="number-percent">3%</span>
                                </div>
                            </div>
                            <a href="#" class="action tf-btn animate-btn">
                                Write a review
                            </a>
                        </div>
                        <div class="box-comment">
                            <div class="head">
                                <h4>03 Comments</h4>
                                <div class="sort-by">
                                    <span class="text-caption-01">Sort by:</span>
                                    <div class="select-wrap select-sort-comment">
                                        <select class="select-2">
                                            <option value="1" selected="">Most Recent</option>
                                            <option value="2">Last Week</option>
                                            <option value="3">Today</option>
                                        </select>
                                        <i class="icon icon-CaretDown"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="wg-comment">
                                <div class="comment-list">
                                    <div class="box-comment">
                                        <div class="comment_info">
                                            <div class="info_image">
                                                <img loading="lazy" width="60" height="60"
                                                    src="assets/images/avatar/avatar-2.jpg" alt="Image">
                                            </div>
                                            <div class="info_author">
                                                <p class="h6 author__name">
                                                    Top-tier cookware designed for performance
                                                </p>
                                                <p class="author_date text-caption-01 cl-text-3">
                                                    1 days ago
                                                </p>
                                            </div>
                                        </div>
                                        <p class="comment_text text-body-1">
                                            The set arrived quickly, and I was impressed with how sturdy and sleek
                                            the pieces feel. The non-stick ceramic surface is excellent, and it’s
                                            easy to clean.
                                        </p>
                                        <div class="comment_reply">
                                            <div class="comment_info">
                                                <div class="info_image">
                                                    <img loading="lazy" width="60" height="60"
                                                        src="assets/images/avatar/avatar-1.jpg" alt="Image">
                                                </div>
                                                <div class="info_author">
                                                    <p class="h6 author__name">
                                                        Reply from Amerce
                                                    </p>
                                                    <p class="author_date text-caption-01 cl-text-3">
                                                        1 days ago
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="comment_text text-body-1">
                                                I bought this set as a gift. The craftsmanship is top-notch, and
                                                customer service was super helpful with my inquiries.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <div class="comment_info">
                                            <div class="info_image">
                                                <img loading="lazy" width="60" height="60"
                                                    src="assets/images/avatar/avatar-3.jpg" alt="Image">
                                            </div>
                                            <div class="info_author">
                                                <p class="h6 author__name">
                                                    Top-tier cookware designed for performance
                                                </p>
                                                <p class="author_date text-caption-01 cl-text-3">
                                                    1 days ago
                                                </p>
                                            </div>
                                        </div>
                                        <p class="comment_text text-body-1">
                                            Great experience overall! Easy checkout process, fast shipping, and the
                                            cookware was just as described.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-write-comment">
                            <div class="head">
                                <h5>Write a review:</h5>
                                <div class="star-wrap rate-click d-flex align-items-center">
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                    <i class="icon icon-Star"></i>
                                </div>
                            </div>
                            <form class="form-rating">
                                <div class="form-content mb-24">
                                    <div class="tf-grid-layout md-col-2">
                                        <div class="tf-grid-layout">
                                            <fieldset class="tf-field">
                                                <label for="review" class="tf-lable fw-medium">Review Title</label>
                                                <input type="text" id="review" placeholder="Give your review a title"
                                                    required="">
                                            </fieldset>
                                            <fieldset class="tf-field">
                                                <label for="email" class="tf-lable fw-medium">Your Email <span
                                                        class="text-primary">*</span></label>
                                                <input type="email" id="email" placeholder="Your email (private)"
                                                    required="">
                                            </fieldset>
                                            <fieldset class="tf-field">
                                                <label for="name" class="tf-lable fw-medium">Your Name <span
                                                        class="text-primary">*</span></label>
                                                <input type="text" id="name" placeholder="You Name (Public)" required="">
                                            </fieldset>
                                        </div>
                                        <fieldset class="tf-field d-flex flex-column">
                                            <label for="name" class="tf-lable fw-medium">Review</label>
                                            <textarea name="message" id="message" placeholder="Write your comment here"
                                                class="h-md-100"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="checkbox-wrap">
                                        <input class="tf-check" type="checkbox" id="save">
                                        <label for="save" class="cl-text-2">
                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="tf-btn animate-btn">
                                    Submit Review
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="shipping-returns" role="tabpanel">
                    <div class="tab-content_desc desc-2 tf-grid-layout sm-col-2 xl-col-4">
                        <div class="box-desc">
                            <h5 class="desc_title">We've got your back</h5>
                            <div class="desc_info">
                                <p class="cl-text-2">
                                    Free returns within 14 days (excludes final sale and made-to-order items,
                                    face masks and certain products containing hazardous or flammable materials,
                                    such as fragrances and aerosols)
                                </p>
                            </div>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">Import duties information</h5>
                            <div class="desc_info">
                                <p class="cl-text-2">
                                    Delivery duties are included in the item price when shipping to all EU
                                    countries (excluding the Canary Islands), plus The United Kingdom, USA,
                                    Canada, China Mainland, Australia, New Zealand.
                                </p>
                            </div>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">Estimated delivery</h5>
                            <ul class="list">
                                <li class="cl-text-2">- Express: May 10 - May 17</li>
                                <li class="cl-text-2">- Sending from USA</li>
                            </ul>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">More information?</h5>
                            <ul class="list">
                                <li class="cl-text-2">- Orders & delivery</li>
                                <li class="cl-text-2">- Duties & taxes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="return-policies" role="tabpanel">
                    <div class="tab-content_desc desc-3 d-grid">
                        <div class="box-desc">
                            <h5 class="desc_title">Return Policies</h5>
                            <p class="desc_info cl-text-2">
                                At Amerce, we stand behind the quality of our products. If you're not completely
                                satisfied with your purchase, we offer hassle-free returns within 30 days of
                                delivery.
                            </p>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">Return Policies</h5>
                            <ul class="list">
                                <li class="cl-text-2">- Exchange your item for a different size, color, or style, or
                                    receive a full refund.</li>
                                <li class="cl-text-2">- All returned items must be unworn, in their original
                                    packaging, and with tags attached.</li>
                            </ul>
                        </div>
                        <div class="box-desc">
                            <h5 class="desc_title">Return Policies</h5>
                            <ul class="list">
                                <li class="cl-text-2">
                                    - Initiate your return online or contact our customer service team for
                                    assistance.
                                </li>
                                <li class="cl-text-2">
                                    - Pack your item securely and include the original packing slip.
                                </li>
                                <li class="cl-text-2">
                                    - Ship your return back to us using our prepaid shipping label.
                                </li>
                                <li class="cl-text-2">
                                    - Once received, your refund will be processed promptly.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Product Description -->
    <!-- Relate Product -->
    <div class="flat-spacing flat-animate-tab pt-0">
        <div class="container">
            <ul class="tab-btn-wrap-v1 style-2 justify-content-sm-center" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#related" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                        <span class="h4 fw-medium">Related Products</span>
                    </a>
                </li>
                <li class="nav-tab-item" role="presentation">
                    <a href="#recently" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                        <span class="h4 fw-medium">Recently Viewed</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="related" role="tabpanel">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4" data-tablet="3" data-mobile-sm="2"
                        data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-pagination="2"
                        data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                        <div class="swiper-wrapper">
                            <!-- slide 1 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-1.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-1_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 new">NEW</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
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
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 2 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-2.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-2_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 3 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-3.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-3_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 4 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-4.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-4_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                        <div class="product-countdown">
                                            <div class="js-countdown cd-has-zero" data-timer="1093120"
                                                data-labels="D : ,H : ,M : ,S">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                        </div>
                        <div class="sw-line-default style-2 tf-sw-pagination"></div>
                    </div>
                </div>
                <div class="tab-pane" id="recently" role="tabpanel">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4" data-tablet="3" data-mobile-sm="2"
                        data-mobile="2" data-space-lg="30" data-space-md="20" data-space="10" data-pagination="2"
                        data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                        <div class="swiper-wrapper">
                            <!-- slide 3 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-3.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-3_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 4 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-4.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-4_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                        <div class="product-countdown">
                                            <div class="js-countdown cd-has-zero" data-timer="1093120"
                                                data-labels="D : ,H : ,M : ,S">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 1 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-1.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-1_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 new">NEW</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
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
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                            <!-- slide 2 -->
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product_wrapper">
                                        <a href="/productdetails" class="product-img">
                                            <img class="img-product" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-2.jpg" alt="Product">
                                            <img class="img-hover" loading="lazy" width="330" height="440"
                                                src="assets/images/product/product-2_2.jpg" alt="Product">
                                        </a>
                                        <ul class="product-action_list">
                                            <li class="wishlist">
                                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-ArrowsLeftRight"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="offcanvas"
                                                    class="hover-tooltip tooltip-left box-icon">
                                                    <span class="icon icon-Eye"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="product-badge_list">
                                            <li class="product-badge_item text-caption-01 sale">-25%</li>
                                        </ul>
                                        <div class="product-action_bot">
                                            <a href="#quickAdd" data-bs-toggle="modal"
                                                class="tf-btn btn-white small  w-100">
                                                Quick Add

                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product_info">
                                        <a href="/productdetails"
                                            class="name-product lh-24 fw-medium link-underline-text">
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
                            </div>
                        </div>
                        <div class="sw-line-default style-2 tf-sw-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Relate Product -->

@endsection