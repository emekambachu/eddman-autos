@extends('layout')

@section('title')
    Contact us
@endsection

@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('main/img/bg/9.jpg') }}"
         style="background-image: url(&quot;{{ asset('main/img/bg/9.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="section-title white-color">Contact Us</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main/img/icons/10.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Email Address</h3>
                        <p>info@eddmanautos.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main/img/icons/11.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Phone Number</h3>
                        <p>09064110019,<br> 09130917401</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('main/img/icons/12.png') }}" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">Office address</h3>
                        <p>Airport road by Rumuahorlu junction, behind Oando filling station, port harcourt Rivers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Send us a message</h4>
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select" style="display: none;">
                                            <option>Select Service Type</option>
                                            <option>Car Repair </option>
                                            <option>Engine Repairing </option>
                                            <option>Oil Change</option>
                                            <option>Car Wash</option>
                                        </select><div class="nice-select" tabindex="0"><span class="current">Select Service Type</span><ul class="list"><li data-value="Select Service Type" class="option selected">Select Service Type</li><li data-value="Car Repair" class="option">Car Repair </li><li data-value="Engine Repairing" class="option">Engine Repairing </li><li data-value="Oil Change" class="option">Oil Change</li><li data-value="Car Wash" class="option">Car Wash</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message"></textarea>
                            </div>
                            <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get an free service</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
