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
                        Login
                    </P>
                </div>
                <h3 class="letter-space-0">
                    Login
                </h3>
                <p class="text-body-1 cl-text-2">
                    Sign in to access your personalized experience.
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
                            Login
                        </h4>
                        <form action="https://tfamerce.vercel.app/account-page.html" class="form-log">
                            <div class="form-content">
                                <fieldset class="tf-field">
                                    <label for="user-name-log-2" class="tf-lable fw-medium">Username or email
                                        address
                                        <span class="text-primary">*</span></label>
                                    <input type="text" id="user-name-log-2" placeholder="Username or email address*"
                                        required="">
                                </fieldset>
                                <fieldset class="tf-field password-wrapper">
                                    <label for="pass-log-2" class="tf-lable fw-medium">
                                        Password
                                        <span class="text-primary">*</span>
                                    </label>
                                    <div class="password-wrapper w-100">
                                        <span class="toggle-pass icon-EyeSlash fs-20 cl-text-3"></span>
                                        <input class="password-field" type="password" id="pass-log-2" placeholder="Password"
                                            required="">
                                    </div>
                                </fieldset>
                                <fieldset class="field-bottom">
                                    <div class="checkbox-wrap">
                                        <input class="tf-check style-2" type="checkbox" id="remember-2">
                                        <label for="remember-2">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="/forgetpassword" class="link text-decoration-underline">
                                        <span class="text-caption-01 fw-semibold">
                                            Forgot Your Password?
                                        </span>
                                    </a>
                                </fieldset>
                            </div>
                            <button type="submit" class="tf-btn animate-btn">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 me-auto">
                    <div class="col-right">
                        <h4 class="mb-8">New Customer</h4>
                        <p class="cl-text-2 mb-20">
                            Be part of our growing family of new customers! Join us today
                            and unlock a world of exclusive benefits, offers, and personalized experiences.
                        </p>
                        <a href="/register" class="tf-btn animate-btn">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection