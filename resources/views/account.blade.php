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
                        My Account
                    </P>
                </div>
                <h3>
                    My Account
                </h3>
                <p class="text-body-1 cl-text-2">
                    Manage your profile, track orders, and easily update your personal details anytime,
                    <br class="d-none d-lg-block">
                    all in one convenient place.
                </p>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <!-- Acount -->
    <section class="flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="sidebar-account-wrap sidebar-content-wrap sticky-top d-lg-block d-none">
                        <div class="my-account-nav">
                            <a href="/account" class="link-account active">
                                <i class="icon icon-HouseLine"></i>
                                <span class="text h6 fw-medium">Dashboard</span>
                            </a>
                            <a href="/accountorders" class="link-account">
                                <i class="icon icon-Package"></i>
                                <span class="text h6 fw-medium">Your Orders</span>
                            </a>
                            <a href="/accountaddresses" class="link-account">
                                <i class="icon icon-Tag"></i>
                                <span class="text h6 fw-medium">My Address</span>
                            </a>
                            <a href="/accountsettings" class="link-account">
                                <i class="icon icon-GearSix"></i>
                                <span class="text h6 fw-medium">Setting</span>
                            </a>
                            <a href="/login" class="link-account">
                                <i class="icon icon-SignOut"></i>
                                <span class="text h6 fw-medium">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ms-auto">
                    <div class="my-account-content">
                        <h4 class="account-title">Dashboard</h4>
                        <div class="acount-order_stats">
                            <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="3" data-mobile-sm="2"
                                data-mobile="1" data-space-lg="20" data-space-md="15" data-space="10" data-pagination="1"
                                data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="3">
                                <div class="swiper-wrapper">
                                    <!-- item 1 -->
                                    <div class="swiper-slide">
                                        <div class="order-box">
                                            <div class="order_info">
                                                <p class="info__label cl-text-2">Awaiting Pickup</p>
                                                <h5 class="info__count type-semibold">4</h5>
                                            </div>
                                            <div class="order_icon">
                                                <i class="icon icon-HourglassMedium"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item 2 -->
                                    <div class="swiper-slide">
                                        <div class="order-box">
                                            <div class="order_info">
                                                <p class="info__label cl-text-2">Cancelled Orders</p>
                                                <h5 class="info__count type-semibold">12</h5>
                                            </div>
                                            <div class="order_icon">
                                                <i class="icon icon-ReceiptX"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item 3 -->
                                    <div class="swiper-slide">
                                        <div class="order-box">
                                            <div class="order_info">
                                                <p class="info__label cl-text-2">Total Number of Orders</p>
                                                <h5 class="info__count type-semibold">200</h5>
                                            </div>
                                            <div class="order_icon">
                                                <i class="icon icon-Package"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sw-dot-default tf-sw-pagination"></div>
                            </div>
                        </div>
                        <div class="account-my_recent">
                            <h6 class="title-case">Recent Orders</h6>
                            <div class="overflow-auto">
                                <table class="table-my_recent">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Products</th>
                                            <th>Pricing</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312453</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-1_2.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            Faux-leather trousers
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-pending">
                                                    Pending
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312452</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-2.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            Contrasting sweatshirt
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-delivery">
                                                    Delivery
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312452</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-4_2.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            V-neck knitted top
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-completed">
                                                    Completed
                                                </div>
                                            </td>

                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312452</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-5_3.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            Contrasting sweatshirt
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-pending">
                                                    Pending
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312456</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-7_2.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            Faux-leather trousers
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-delivery">
                                                    Delivery
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="tb-order-item">
                                            <td class="tb-order_code fw-medium">54312457</td>
                                            <td>
                                                <div class="tb-order_product">
                                                    <a href="/productdetails" class="img-prd">
                                                        <img loading="lazy" width="48" height="48"
                                                            src="assets/images/product/square/product-9_2.jpg" alt="Image">
                                                    </a>
                                                    <div class="infor-prd">
                                                        <a href="/productdetails" class="prd_name link fw-medium lh-24">
                                                            V-neck knitted top
                                                        </a>
                                                        <p class="prd_type cl-text-2 text-caption-01">
                                                            Women, Clothing
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-order_price fw-medium ">$45.00</td>
                                            <td>
                                                <div class="tb-order_status text-label stt-canceled">
                                                    Canceled
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Acount -->

@endsection
