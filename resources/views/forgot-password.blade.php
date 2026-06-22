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
                        Forgot Password
                    </P>
                </div>
                <h3 class="letter-space-0">
                    Forgot Password
                </h3>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <section class="section-log flat-spacing">
        <div class="container">
            <div class="row align-items-center gy-30">
                <div class="col-md-5 ms-auto">
                    <div class="col-left">
                        <h4 class="title mb-10">
                            Reset your password
                        </h4>
                        <p class="cl-text-2 mb-20">
                            We’ll send instructions to reset your password.
                        </p>
                        <form action="https://tfamerce.vercel.app/login.html" class="form-log">
                            <div class="form-content">
                                <fieldset class="tf-field">
                                    <label for="forgot-user2" class="tf-lable fw-medium">
                                        Username or email address
                                        <span class="text-primary">*</span>
                                    </label>
                                    <input type="text" id="forgot-user2" placeholder="Username or email address*"
                                        required="">
                                </fieldset>
                            </div>
                            <button type="submit" class="tf-btn animate-btn">
                                Get Reset Code
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