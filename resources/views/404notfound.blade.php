@extends('layout')
@section('content'

    <!-- 404 -->
    <section class="section-404 flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="image">
                        <img loading="lazy" width="930" height="579" src="assets/images/section/404.svg" alt="Image">
                    </div>
                </div>
                <div class="col-12">
                    <div class="wrap">
                        <div class="content">
                            <h2 class="title">Something’s Missing</h2>
                            <p class="sub-title cl-text-2">This page is missing or you assembled the link
                                incorrectly</p>
                        </div>
                        <div class="group-btn">
                            <a href="/" class="tf-btn animate-btn">
                                Back to home page
                            </a>
                            <a href="/shop" class="tf-btn btn-stroke">
                                Product list
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /404 -->

@endsection