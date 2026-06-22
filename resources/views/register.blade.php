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
                        Register
                    </P>
                </div>
                <h3 class="letter-space-0">
                    Register
                </h3>
                <p class="text-body-1 cl-text-2">
                    Be part of our growing family of new customers.
                </p>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <section class="section-log flat-spacing">
        <div class="container">
            <div class="row align-items-center gy-30">
                <div class="col-md-5 ms-auto">
                    <div class="col-left">
                        <h4 class="title mb-20">
                            Create Account
                        </h4>
                        <form action="https://tfamerce.vercel.app/account-page.html" class="form-log">
                            <div class="form-content">
                                <fieldset class="tf-field">
                                    <label for="username-register_2" class="tf-lable fw-medium">Username or email
                                        address
                                        <span class="text-primary">*</span></label>
                                    <input type="text" id="username-register_2" placeholder="Username or email address*"
                                        required="">
                                </fieldset>
                                <fieldset class="tf-field password-wrapper">
                                    <label for="password-register_2" class="tf-lable fw-medium">
                                        Password
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="password-wrapper w-100">
                                        <span class="toggle-pass icon-EyeSlash fs-20 cl-text-3"></span>
                                        <input class="password-field" type="password" id="password-register_2"
                                            placeholder="Password" required="">
                                    </div>
                                </fieldset>
                                <fieldset class="tf-field password-wrapper">
                                    <label for="re_password-register_2" class="tf-lable fw-medium">
                                        Confirm Password
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="password-wrapper w-100">
                                        <span class="toggle-pass icon-EyeSlash fs-20 cl-text-3"></span>
                                        <input class="password-field" type="password" id="re_password-register_2"
                                            placeholder="Confirm Password" required="">
                                    </div>
                                </fieldset>
                            </div>
                            <button type="submit" class="action-create-account tf-btn animate-btn">
                                Create Account
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 me-auto">
                    <div class="col-right">
                        <h4 class="mb-8">Already have an account?</h4>
                        <p class="cl-text-2 mb-20">
                            Welcome back. Sign in to access your personalized experience, saved preferences, and
                            more. We're thrilled to have you with us again!
                        </p>
                        <a href="/login" class="tf-btn animate-btn">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection