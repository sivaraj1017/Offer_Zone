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
    <section class="flat-spacing flat-animate-tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="sidebar-account-wrap sidebar-content-wrap sticky-top d-lg-block d-none">
                        <div class="my-account-nav">
                            <a href="/account" class="link-account">
                                <i class="icon icon-HouseLine"></i>
                                <span class="text h6 fw-medium">Dashboard</span>
                            </a>
                            <a href="/accountorders" class="link-account active">
                                <i class="icon icon-Package"></i>
                                <span class="text h6 fw-medium">Your Orders</span>
                            </a>
                            <a href="/accountaddress" class="link-account">
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
                        <h4 class="account-title">Your Orders</h4>
                        <div class="account-my_order">
                            <ul class="tab-btn-wrap-v1 style-2" role="tablist">
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#all-order" data-bs-toggle="tab" class="tf-btn-tab active" role="tab">
                                        <span class="h6 fw-medium">All Order</span>
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#pending" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                        <span class="h6 fw-medium">Pending</span>
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#delivery" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                        <span class="h6 fw-medium">Delivery</span>
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#completed" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                        <span class="h6 fw-medium">Completed</span>
                                    </a>
                                </li>
                                <li class="nav-tab-item" role="presentation">
                                    <a href="#canceled" data-bs-toggle="tab" class="tf-btn-tab" role="tab">
                                        <span class="h6 fw-medium">Canceled</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="all-order" role="tabpanel">
                                    <div class="my-order_list d-grid gap-24">
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-delivery">
                                                        Delivery
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-1.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-3.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                    <a href="#" class="action-order tf-btn btn-stroke small">
                                                        Cancel Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-pending">
                                                        Pending
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-4.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                    <a href="#" class="action-order tf-btn btn-stroke small">
                                                        Cancel Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-completed">
                                                        Completed
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-6.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-canceled">
                                                        Canceled
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-8.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pending" role="tabpanel">
                                    <div class="my-order_list d-grid gap-24">
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-pending">
                                                        Pending
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-4.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                    <a href="#" class="action-order tf-btn btn-stroke small">
                                                        Cancel Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="delivery" role="tabpanel">
                                    <div class="my-order_list d-grid gap-24">
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-delivery">
                                                        Delivery
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-1.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-3.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                    <a href="#" class="action-order tf-btn btn-stroke small">
                                                        Cancel Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="completed" role="tabpanel">
                                    <div class="my-order_list d-grid gap-24">
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-completed">
                                                        Completed
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-6.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="canceled" role="tabpanel">
                                    <div class="my-order_list d-grid gap-24">
                                        <div class="wg-my-order">
                                            <div class="order-heading">
                                                <div class="order_number fw-medium">
                                                    Order Number:
                                                    <span class="number-code fw-semibold">S184989823</span>
                                                </div>
                                                <div class="order_status fw-medium">
                                                    Order Status:
                                                    <div class="tb-order_status text-label stt-canceled">
                                                        Canceled
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <div class="order_prd_item">
                                                    <div class="prd__image">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="assets/images/product/square/product-8.jpg" alt="Image">
                                                    </div>
                                                    <div class="prd__info">
                                                        <p class="name fw-medium">Contrasting sheepskin sweatshirt
                                                        </p>
                                                        <p class="type cl-text-2">XL/Blue </p>
                                                    </div>
                                                    <div class="prd__price fw-medium">
                                                        <span class="quantity">1</span>
                                                        x
                                                        <span class="price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="group-btn">
                                                    <a href="#orderDetail" data-bs-toggle="modal"
                                                        class="action-order tf-btn small animate-btn">
                                                        Order Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Acount -->X

@endsection