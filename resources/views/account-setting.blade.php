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
                            <a href="/accountaddresses" class="link-account">
                                <i class="icon icon-Tag"></i>
                                <span class="text h6 fw-medium">My Address</span>
                            </a>
                            <a href="/accountsettings" class="link-account active">
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
                        <h4 class="account-title">Setting</h4>
                        <div class="account-my_address setting">
                            <p class="mb-12 h6 fw-medium">Infomation</p>
                            <p class="mb-12">Upload Avatar <span class="text-primary">*</span></p>
                            <div class="account-avatar mb-20">
                                <div class="avatar-image">
                                    <img class="avatarPreview" loading="lazy" width="120" height="120"
                                        src="assets/images/avatar/avatar-1.jpg" alt="Image">
                                </div>
                                <div class="avatar-upload">
                                    <p class="fw-semibold mb-4">Upload File</p>
                                    <p class="text-caption-01 cl-text-2 mb-12">JPG 80x90px</p>
                                    <div class="upload-wrapper">
                                        <label class="upload-btn text-label">
                                            Choose File
                                            <input type="file" id="fileInput" accept="image/*" hidden>
                                        </label>
                                        <span id="fileName" class="text-caption-02 cl-text-3">No file Choose</span>
                                    </div>
                                </div>
                            </div>
                            <form class="form-setting">
                                <div class="form-content">
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="first-name" class="tf-lable fw-medium">First Name <span
                                                    class="text-primary">*</span></label>
                                            <input type="text" id="first-name" placeholder="First Name" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="last-name" class="tf-lable fw-medium">
                                                Last Name
                                                <span class="text-primary">*</span>
                                            </label>
                                            <input type="text" id="last-name" placeholder="Last Name" required>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="phone-number" class="tf-lable fw-medium">Phone Number <span
                                                    class="text-primary">*</span></label>
                                            <input type="number" id="phone-number" placeholder="First Name" required>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="email" class="tf-lable fw-medium">
                                                Email Address
                                                <span class="text-primary">*</span>
                                            </label>
                                            <input type="email" id="email" placeholder="Last Name" required>
                                        </fieldset>
                                    </div>
                                    <div class="tf-grid-layout sm-col-2">
                                        <fieldset class="tf-field">
                                            <label for="gender" class="tf-lable fw-medium">
                                                Gender
                                            </label>
                                            <select name="gender" id="gender" required>
                                                <option value="" selected disabled>Gender</option>
                                                <option value="2">Male</option>
                                                <option value="3">Female</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="tf-field">
                                            <label for="dofb" class="tf-lable fw-medium">
                                                Day of Birth
                                            </label>
                                            <input type="date" id="dofb" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-12 h6 fw-medium">Change Password</p>
                                    <div class="form-content">
                                        <fieldset class="tf-field password-wrapper">
                                            <label for="current-password" class="tf-lable fw-medium">
                                                Current password
                                                <span class="text-primary">*</span>
                                            </label>
                                            <div class="password-wrapper w-100">
                                                <span class="toggle-pass icon-Eye"></span>
                                                <input class="password-field" type="password" id="current-password"
                                                    placeholder="Current password" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="tf-field password-wrapper">
                                            <label for="new-password" class="tf-lable fw-medium">
                                                New password
                                                <span class="text-primary">*</span>
                                            </label>
                                            <div class="password-wrapper w-100">
                                                <span class="toggle-pass icon-Eye"></span>
                                                <input class="password-field" type="password" id="new-password"
                                                    placeholder="New password" required>
                                            </div>
                                        </fieldset>
                                        <fieldset class="tf-field password-wrapper">
                                            <label for="confirm-password" class="tf-lable fw-medium">
                                                Confirm new password:
                                                <span class="text-primary">*</span>
                                            </label>
                                            <div class="password-wrapper w-100">
                                                <span class="toggle-pass icon-Eye"></span>
                                                <input class="password-field" type="password" id="confirm-password"
                                                    placeholder="Confirm new password" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="btn-submit">
                                    <button type="submit" class="tf-btn animate-btn">
                                        Save Change
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Acount -->

@endsection