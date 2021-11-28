@extends('layout')

@section('title')
    Appointment
@endsection

@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
         data-bs-bg="{{ asset('main/img/bg/9.jpg') }}"
         style="background-image: url(&quot;{{ asset('main/img/bg/9.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Make your order</h6>
                            <h1 class="section-title white-color">Schedule Appointment</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Appointment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__appointment-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">

                        <form id="contact-form" data-route="{{ route('appointment.submit') }}" method="post">
                            @csrf
                            <h6>Personal Information</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="first_name" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="last_name" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="mobile" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <h6>Vehicles Information</h6>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <input type="text" name="vehicle_manufacturer" placeholder="Vehicle Manufacturer">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <input type="text" name="vehicle_model" placeholder="Vehicle Model">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-item">
                                        <input type="text" name="vehicle_year" placeholder="Vehicle Year">
                                    </div>
                                </div>
                            </div>
                            <h6>What type of service do you need on your vehicle?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="description" placeholder="Enter message"></textarea>
                            </div>
                            <div class="btn-wrapper text-center mt-0">
                                <button id="submit-contact-btn" class="btn theme-btn-1 btn-effect-1 text-uppercase"
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
