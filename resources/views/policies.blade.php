@extends('layout')

@section('title')
    Policies
@endsection

@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('main/img/bg/9.jpg') }}"
         style="background-image: url(&quot;{{ asset('main/img/bg/9.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="section-title white-color">Our Policies</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Our Policies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="">Core Returns Policy</h1>
                            <p>We will return the core deposit of every customer except in cases, when the part is visibly damaged, when the core is incomplete, or the wrong core is returned. You must return the cores within 90 days of purchase for full credit. We guarantee all good cores will be refunded within two weeks of receiving the core. If you have waited for a long time and have not received any information about the core credits, you can contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="">Easy return policy</h1>
                            <p>Just like our mission statement to make it easy to Buy Auto Parts, we make it just as easy to return them. If you have purchased your part within 60 days, send it back in the same condition as it was received and get your money back.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="">International Shipping Policy</h1>
                            <p>We are happy to ship worldwide. Our shipping service is fast and professional, and includes tracking. International customers are responsible for any and all taxes, duties, or other additional fees associated with the delivery. We are not able to send international packages marked as a gift, or with any stated value other than the actual invoice value of the package. All the parts we sell are designed for use on vehicles originally sold in the USA. We cannot guarantee correct fitment for any part outside the USA. We are happy to help you confirm fitment, and verify your part numbers before you purchase. If you have any questions, please contact us. We have happy customers in nearly every country in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="">Tax policy</h1>
                            <p>In accordance with applicable state and local laws, we are required to charge sales tax. Eddman Autos does not benefit from the collection of sales taxes and we remit the taxes collected directly to the appropriate taxing jurisdiction.<br>
                                As a rule, it is the laws of the state of delivery that determine whether sales tax will be due on your transaction. Taxes that appear in your online order confirmation are estimated. The actual taxes charged to your credit card will be calculated based on the applicable state and local sales taxes when your order is shipped.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
