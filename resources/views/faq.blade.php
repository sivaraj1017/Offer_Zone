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
                        FAQs
                    </P>
                </div>
                <h3>
                    FAQs
                </h3>
                <p class="cl-text-2">
                    Got questions? We’ve got answers! Browse our FAQs to find information on orders, shipping,
                    <br class="d-none d-lg-block">
                    returns, and more. If you need further assistance, feel free to contact our team.
                </p>
            </div>
        </div>
    </section>
    <!-- /Page Title -->
    <!-- FAQ -->
    <section class="flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="faq-list">
                        <li class="faq-item" id="myAccount">
                            <h4 class="faq_title">My Account</h4>
                            <div class="faq_wrap" id="my-account">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#forgot-pass" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forgot-pass">
                                        <span class="text h6">1. What can I do if I forgot my password?</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="forgot-pass" class="collapse" data-bs-parent="#my-account">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2">
                                        <span class="text h6">2. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2" class="collapse" data-bs-parent="#my-account">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                In hac habitasse platea dictumst. Integer venenatis elit magna, eget
                                                auctor purus vestibulum
                                                volutpat. Maecenas hendrerit fringilla arcu, eu euismod tellus
                                                euismod quis. Orci varius natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Duis purus dolor, sagittis
                                                vitae massa eget, vestibulum varius ipsum. Quisque vitae leo congue
                                                nisl pharetra ornare tempus
                                                quis diam. Fusce a orci fringilla arcu blandit commodo id venenatis
                                                ante. Quisque quis pretium
                                                ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3">
                                        <span class="text h6">3. Maecenas rhoncus neque eu neque maximus auctor
                                            congue sed erat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3" class="collapse" data-bs-parent="#my-account">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                In hac habitasse platea dictumst. Integer venenatis elit magna, eget
                                                auctor purus vestibulum
                                                volutpat. Maecenas hendrerit fringilla arcu, eu euismod tellus
                                                euismod quis. Orci varius natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Duis purus dolor, sagittis
                                                vitae massa eget, vestibulum varius ipsum. Quisque vitae leo congue
                                                nisl pharetra ornare tempus
                                                quis diam. Fusce a orci fringilla arcu blandit commodo id venenatis
                                                ante. Quisque quis pretium
                                                ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title" data-bs-target="#lorem4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="lorem4">
                                        <span class="text h6">4. Nam vel neque ut eros mollis bibendum vel ac
                                            nisl.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4" class="collapse show" data-bs-parent="#my-account">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                In hac habitasse platea dictumst. Integer venenatis elit magna, eget
                                                auctor purus vestibulum
                                                volutpat. Maecenas hendrerit fringilla arcu, eu euismod tellus
                                                euismod quis. Orci varius natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Duis purus dolor, sagittis
                                                vitae massa eget, vestibulum varius ipsum. Quisque vitae leo congue
                                                nisl pharetra ornare tempus
                                                quis diam. Fusce a orci fringilla arcu blandit commodo id venenatis
                                                ante. Quisque quis pretium
                                                ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5">
                                        <span class="text h6">5. Duis porttitor eros at quam tincidunt
                                            tempus.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5" class="collapse" data-bs-parent="#my-account">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                In hac habitasse platea dictumst. Integer venenatis elit magna, eget
                                                auctor purus vestibulum
                                                volutpat. Maecenas hendrerit fringilla arcu, eu euismod tellus
                                                euismod quis. Orci varius natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                Duis purus dolor, sagittis
                                                vitae massa eget, vestibulum varius ipsum. Quisque vitae leo congue
                                                nisl pharetra ornare tempus
                                                quis diam. Fusce a orci fringilla arcu blandit commodo id venenatis
                                                ante. Quisque quis pretium
                                                ante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq-item" id="ordersPurchases">
                            <h4 class="faq_title">Orders & Purchases</h4>
                            <div class="faq_wrap" id="order-and-purchase">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2-1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2-1">
                                        <span class="text h6">1. Donec tempor nisl commodo erat ullamcorper
                                            fringilla.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2-1" class="collapse" data-bs-parent="#order-and-purchase">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2-2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2-2">
                                        <span class="text h6">2. Suspendisse et sem in quam maximus imperdiet ac nec
                                            nunc.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2-2" class="collapse" data-bs-parent="#order-and-purchase">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2-3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2-3">
                                        <span class="text h6">3. Cras fringilla ante sit amet ullamcorper
                                            placerat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2-3" class="collapse" data-bs-parent="#order-and-purchase">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2-4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2-4">
                                        <span class="text h6">4. Donec vestibulum leo nec erat congue
                                            laoreet.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2-4" class="collapse" data-bs-parent="#order-and-purchase">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem2-5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem2-5">
                                        <span class="text h6">5. Vestibulum ac elit et ligula tincidunt suscipit
                                            finibus vel est.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem2-5" class="collapse" data-bs-parent="#order-and-purchase">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq-item" id="returnsRefunds">
                            <h4 class="faq_title">Returns & Refunds</h4>
                            <div class="faq_wrap" id="return-and-refund">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3-1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3-1">
                                        <span class="text h6">1. Nullam elementum diam vitae posuere
                                            dignissim.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3-1" class="collapse" data-bs-parent="#return-and-refund">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3-2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3-2">
                                        <span class="text h6">2. Morbi eget justo sit amet lacus scelerisque
                                            feugiat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3-2" class="collapse" data-bs-parent="#return-and-refund">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3-3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3-3">
                                        <span class="text h6">3. Mauris vel diam a dui consectetur vehicula.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3-3" class="collapse" data-bs-parent="#return-and-refund">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3-4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3-4">
                                        <span class="text h6">4. Pellentesque aliquam leo in justo blandit, quis
                                            efficitur nulla facilisis.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3-4" class="collapse" data-bs-parent="#return-and-refund">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem3-5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem3-5">
                                        <span class="text h6">5. Ut volutpat justo sed lorem luctus semper.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem3-5" class="collapse" data-bs-parent="#return-and-refund">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq-item" id="shippingTracking">
                            <h4 class="faq_title">Shipping & Tracking</h4>
                            <div class="faq_wrap" id="shipping-and-tracking">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem6-1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem6-1">
                                        <span class="text h6">1. Nullam elementum diam vitae posuere
                                            dignissim.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem6-1" class="collapse" data-bs-parent="#shipping-and-tracking">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem6-2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem6-2">
                                        <span class="text h6">2. Morbi eget justo sit amet lacus scelerisque
                                            feugiat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem6-2" class="collapse" data-bs-parent="#shipping-and-tracking">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem6-3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem6-3">
                                        <span class="text h6">3. Mauris vel diam a dui consectetur vehicula.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem6-3" class="collapse" data-bs-parent="#shipping-and-tracking">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem6-4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem6-4">
                                        <span class="text h6">4. Pellentesque aliquam leo in justo blandit, quis
                                            efficitur nulla facilisis.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem6-4" class="collapse" data-bs-parent="#shipping-and-tracking">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem6-5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem6-5">
                                        <span class="text h6">5. Ut volutpat justo sed lorem luctus semper.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem6-5" class="collapse" data-bs-parent="#shipping-and-tracking">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq-item" id="feesBilling">
                            <h4 class="faq_title">Fees & Billing</h4>
                            <div class="faq_wrap" id="fee-and-bill">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem4-1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem4-1">
                                        <span class="text h6">1. Nullam elementum diam vitae posuere
                                            dignissim.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4-1" class="collapse" data-bs-parent="#fee-and-bill">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem4-2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem4-2">
                                        <span class="text h6">2. Morbi eget justo sit amet lacus scelerisque
                                            feugiat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4-2" class="collapse" data-bs-parent="#fee-and-bill">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem4-3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem4-3">
                                        <span class="text h6">3. Mauris vel diam a dui consectetur vehicula.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4-3" class="collapse" data-bs-parent="#fee-and-bill">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem4-4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem4-4">
                                        <span class="text h6">4. Pellentesque aliquam leo in justo blandit, quis
                                            efficitur nulla facilisis.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4-4" class="collapse" data-bs-parent="#fee-and-bill">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem4-5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem4-5">
                                        <span class="text h6">5. Ut volutpat justo sed lorem luctus semper.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem4-5" class="collapse" data-bs-parent="#fee-and-bill">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="faq-item" id="otherTopic">
                            <h4 class="faq_title">Other Topic</h4>
                            <div class="faq_wrap" id="orther-topic">
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5-1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5-1">
                                        <span class="text h6">1. Nullam elementum diam vitae posuere
                                            dignissim.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5-1" class="collapse" data-bs-parent="#orther-topic">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5-2" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5-2">
                                        <span class="text h6">2. Morbi eget justo sit amet lacus scelerisque
                                            feugiat.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5-2" class="collapse" data-bs-parent="#orther-topic">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5-3" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5-3">
                                        <span class="text h6">3. Mauris vel diam a dui consectetur vehicula.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5-3" class="collapse" data-bs-parent="#orther-topic">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5-4" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5-4">
                                        <span class="text h6">4. Pellentesque aliquam leo in justo blandit, quis
                                            efficitur nulla facilisis.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5-4" class="collapse" data-bs-parent="#orther-topic">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-faq ">
                                    <div class="accordion-title collapsed" data-bs-target="#lorem5-5" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="lorem5-5">
                                        <span class="text h6">5. Ut volutpat justo sed lorem luctus semper.</span>
                                        <span class="icon">
                                            <span class="ic-accordion-custom"></span>
                                        </span>
                                    </div>
                                    <div id="lorem5-5" class="collapse" data-bs-parent="#orther-topic">
                                        <div class="accordion-body">
                                            <p class="cl-text-2">
                                                Simply add your favorite items to the shopping cart, then proceed to
                                                checkout where you fill in
                                                your
                                                shipping and payment details before confirming the purchase.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="blog-sidebar sidebar-content-wrap sticky-top">
                        <div class="sidebar-item">
                            <div class="sb-search">
                                <h5 class="sb-title">Frequently asked questions</h5>
                                <form class="form-search-blog ">
                                    <fieldset>
                                        <input class="style-stroke-bottom" type="text" placeholder="Search..." required>
                                    </fieldset>
                                    <button type="submit" class="btn-action link">
                                        <i class="icon icon-MagnifyingGlass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <h5 class="sb-title">Categories</h5>
                            <ul class="sb-category">
                                <li><a href="#myAccount" class="link">My account</a></li>
                                <li><a href="#ordersPurchases" class="link">Orders &amp; purchases</a></li>
                                <li><a href="#returnsRefunds" class="link">Returns &amp; Refunds</a></li>
                                <li><a href="#shippingTracking" class="link">Shipping &amp; Tracking</a></li>
                                <li><a href="#feesBilling" class="link">Fees &amp; billing</a></li>
                                <li><a href="#otherTopic" class="link">Other topic</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <div class="banner-image-text type-abs style-4">
                                <a href="/shop" class="bn-image img-style">
                                    <img loading="lazy" width="450" height="608" src="assets/images/section/banner-12.jpg"
                                        alt="Image">
                                </a>
                                <div class="bn-content">
                                    <a href="/shop" class="title h3 fw-medium text-white link">
                                        Save 25% <br class="d-none d-sm-block">
                                        Today
                                    </a>
                                    <p class="desc cl-text-3 mb-28">
                                        T-Shirts, Hoodies & More
                                    </p>
                                    <a href="/shop" class="btn-action tf-btn btn-white small ">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ -->

@endsection