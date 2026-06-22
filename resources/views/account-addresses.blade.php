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
                            <a href="/account" class="link-account">
                                <i class="icon icon-HouseLine"></i>
                                <span class="text h6 fw-medium">Dashboard</span>
                            </a>
                            <a href="/accountorders" class="link-account">
                                <i class="icon icon-Package"></i>
                                <span class="text h6 fw-medium">Your Orders</span>
                            </a>
                            <a href="/accountaddress" class="link-account active">
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
                        <h4 class="account-title">My Address</h4>
                        <div class="account-my_address">
                            <form class="form-account-address">
                                <div class="form-content">
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="first-name" class="tf-lable fw-medium">
                                                First Name<span class="text-primary">*</span>
                                            </label>
                                            <input type="text" id="first-name" placeholder="First Name" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="last-name" class="tf-lable fw-medium">
                                                Last Name<span class="text-primary">*</span>
                                            </label>
                                            <input type="text" id="last-name" placeholder="Last Name" required>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="company" class="tf-lable fw-medium">
                                                Company name (optional)
                                            </label>
                                            <select name="company" id="company">
                                                <option value="1" selected disabled>Option</option>
                                                <option value="2">Themesflat</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="country" class="tf-lable fw-medium">
                                                Country / Region<span class="text-primary">*</span>
                                            </label>
                                            <select name="country" id="country" required>
                                                <option value="" selected disabled>Country / Region</option>
                                                <option value="2">Viet Nam</option>
                                                <option value="3">Korean</option>
                                                <option value="4">Japan</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="street" class="tf-lable fw-medium">Street Address<span
                                                    class="text-primary">*</span></label>
                                            <input type="text" id="street" placeholder="Street Address" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="town" class="tf-lable fw-medium">
                                                Town / City<span class="text-primary">*</span>
                                            </label>
                                            <input type="text" id="town" placeholder="Town / City" required>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="state" class="tf-lable fw-medium">State<span
                                                    class="text-primary">*</span></label>
                                            <input type="text" id="state" placeholder="State" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="zip" class="tf-lable fw-medium">
                                                ZIP<span class="text-primary">*</span>
                                            </label>
                                            <input type="text" id="zip" placeholder="ZIP" required>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="phone" class="tf-lable fw-medium">Phone<span
                                                    class="text-primary">*</span></label>
                                            <input type="number" id="phone" placeholder="Phone" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="email" class="tf-lable fw-medium">
                                                Email<span class="text-primary">*</span>
                                            </label>
                                            <input type="email" id="email" placeholder="Email" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <button type="submit" class="btn-action-submit tf-btn animate-btn">
                                    Update Address
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Acount -->

@endsection