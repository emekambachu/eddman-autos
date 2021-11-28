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
                        <p>services@eddmanautos.com</p>
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

    <div class="ltn__contact-message-area" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Send us a message</h4>
                        <form id="contact-form" data-route="{{ route('contact.submit') }}" method="post">
                            @csrf
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
                                        <select class="nice-select" name="service">
                                            <option>Select Service Type</option>
                                            <option>Car purchase </option>
                                            <option>Car sales </option>
                                            <option>Car parts</option>
                                            <option>Consultancy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="mobile" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="description" placeholder="Enter description"></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button id="submit-contact-btn"
                                        class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                        type="submit">Submit</button>
                            </div>
                        </form>
                        <p class="form-messege mb-0 mt-20 p-2"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-assets')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    <script src="{{ asset('custom/js/submissions.js') }}"></script>
@endsection
