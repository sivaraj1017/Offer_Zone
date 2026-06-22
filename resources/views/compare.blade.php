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
                        Compare Products
                    </P>
                </div>
                <h3>
                    Compare Products
                </h3>
                <p class="text-body-1 cl-text-2">
                    Compare your favorite products side by side to find the best match for your
                    <br class="d-none d-lg-block">
                    needs, style, and everyday lifestyle.
                </p>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <!-- Compare -->
    <div class="flat-spacing">
        <div class="container">
            <div class="tf-table-compare">
                <table>
                    <thead>
                        <tr class="compare-row">
                            <th class="compare-col"></th>
                            <th class="compare-col compare-head">
                                <div class="compare-item text-center">
                                    <div class="item_image">
                                        <img loading="lazy" width="276" height="356"
                                            src="assets/images/product/product-1.jpg" alt="Image">
                                        <span class="remove">
                                            <i class="icon icon-trash"></i>
                                        </span>
                                    </div>
                                    <a href="/productdetails" class="item_name fw-medium lh-24 link">
                                        V-neck cotton T-shirt
                                    </a>
                                    <p class="item_type text-caption-01 cl-text-2">
                                        Clothes, women, T-shirt
                                    </p>
                                </div>
                            </th>
                            <th class="compare-col compare-head">
                                <div class="compare-item text-center">
                                    <div class="item_image">
                                        <img loading="lazy" width="276" height="356"
                                            src="assets/images/product/product-4.jpg" alt="Image">
                                        <span class="remove">
                                            <i class="icon icon-trash"></i>
                                        </span>
                                    </div>
                                    <a href="/productdetails" class="item_name fw-medium lh-24 link">
                                        Ramie shirt with pockets
                                    </a>
                                    <p class="item_type text-caption-01 cl-text-2">
                                        Clothes, women, T-shirt
                                    </p>
                                </div>
                            </th>
                            <th class="compare-col compare-head">
                                <div class="compare-item text-center">
                                    <div class="item_image">
                                        <img loading="lazy" width="276" height="356"
                                            src="assets/images/product/product-3.jpg" alt="Image">
                                        <span class="remove">
                                            <i class="icon icon-trash"></i>
                                        </span>
                                    </div>
                                    <a href="/productdetails" class="item_name fw-medium lh-24 link">
                                        V-neck cotton T-shirt
                                    </a>
                                    <p class="item_type text-caption-01 cl-text-2">
                                        Clothes, women, T-shirt
                                    </p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Rating</td>
                            <td class="compare-col">
                                <div class="compare_rate">
                                    <div class="star-wrap normal d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star cl-text-line"></i>
                                    </div>
                                    <span class="rate_count">
                                        (1.234)
                                    </span>
                                </div>
                            </td>
                            <td class="compare-col">
                                <div class="compare_rate">
                                    <div class="star-wrap normal d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star cl-text-line"></i>
                                    </div>
                                    <span class="rate_count">
                                        (221)
                                    </span>
                                </div>
                            </td>
                            <td class="compare-col">
                                <div class="compare_rate">
                                    <div class="star-wrap normal d-flex align-items-center">
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star"></i>
                                        <i class="icon icon-Star cl-text-line"></i>
                                    </div>
                                    <span class="rate_count">
                                        (936)
                                    </span>
                                </div>
                            </td>

                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Price</td>
                            <td class="compare-col compare-value"><span>$68.00</span></td>
                            <td class="compare-col compare-value"><span>$96.00</span></td>
                            <td class="compare-col compare-value"><span>$26.00</span></td>
                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Type</td>
                            <td class="compare-col compare-value"><span>Jacket</span></td>
                            <td class="compare-col compare-value"><span>Jacket</span></td>
                            <td class="compare-col compare-value"><span>Jacket</span></td>
                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Brand</td>
                            <td class="compare-col compare-value"><span>Gucci</span></td>
                            <td class="compare-col compare-value"><span>Channel</span></td>
                            <td class="compare-col compare-value"><span>Channel</span></td>
                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Size</td>
                            <td class="compare-col compare-value"><span>X, XS, L, M, XL</span></td>
                            <td class="compare-col compare-value"><span>X, XS, L, M, XL</span></td>
                            <td class="compare-col compare-value"><span>X, XS, L, M, XL</span></td>
                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Color</td>
                            <td class="compare-col compare-value">
                                <div class="list-compare-color justify-content-center">
                                    <span class="item bg-primary"></span>
                                    <span class="item bg-success"></span>
                                    <span class="item bg-purple"></span>
                                </div>
                            </td>
                            <td class="compare-col compare-value">
                                <div class="list-compare-color justify-content-center">
                                    <span class="item bg-primary"></span>
                                    <span class="item bg-success"></span>
                                    <span class="item bg-purple"></span>
                                </div>
                            </td>
                            <td class="compare-col compare-value">
                                <div class="list-compare-color justify-content-center">
                                    <span class="item bg-primary"></span>
                                    <span class="item bg-success"></span>
                                    <span class="item bg-purple"></span>
                                </div>
                            </td>
                        </tr>

                        <tr class="compare-row">
                            <td class="compare-col compare-title">Material</td>
                            <td class="compare-col compare-value"><span>Cotton</span></td>
                            <td class="compare-col compare-value"><span>Silk</span></td>
                            <td class="compare-col compare-value"><span>Velvet</span></td>
                        </tr>
                        <tr class="compare-row">
                            <td class="compare-col compare-title">Add To Cart</td>
                            <td class="compare-col compare-value">
                                <a href="#shoppingCart" class="tf-btn s-small animate-btn" data-bs-toggle="offcanvas">
                                    <span class="text-caption-01">
                                        Add To Cart
                                    </span>
                                </a>
                            </td>
                            <td class="compare-col compare-value">
                                <a href="#shoppingCart" class="tf-btn s-small animate-btn" data-bs-toggle="offcanvas">
                                    <span class="text-caption-01">
                                        Add To Cart
                                    </span>
                                </a>
                            </td>
                            <td class="compare-col compare-value">
                                <a href="#shoppingCart" class="tf-btn s-small animate-btn" data-bs-toggle="offcanvas">
                                    <span class="text-caption-01">
                                        Add To Cart
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Compare -->


@endsection