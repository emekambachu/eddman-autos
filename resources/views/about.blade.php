@extends('layout')

@section('title')
    About
@endsection

@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('main/img/bg/9.jpg') }}"
         style="background-image: url(&quot;{{ asset('main/img/bg/9.jpg') }}&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to Eddman Autos</h6>
                            <h1 class="section-title white-color">What We Do</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>About</li>
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
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                        <img src="{{ asset('main/about/a1.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  RELIABLE SERVICES</h6>
                            <h1 class="section-title">We are Qualified &amp;
                                Professional<span>.</span></h1>
                            <p>At Edman Autos, we offer an extensive selection of auto parts, truck parts, import parts, performance parts and automotive accessories, so you can easily find the quality parts you need at the lowest price. Explore our wide inventory to find both OEM car parts and aftermarket car parts for your vehicle.</p>
                        </div>
                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <p>Our inventory includes auto parts for all makes sold in the United States including, Acura, Audi, BMW, Chevrolet, Chrysler, Ford, GMC, Honda, Hyundai, Mercedes Benz, Toyota, Volkswagen, Volvo and many more. When you buy auto parts from Eddman Autos, you can be confident that you will receive the highest quality auto parts at wholesale prices, and all the parts we sell come with a full warranty.</p>
                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a href="">24/7 Online Support</a></li>
                                    <li><a href="">Expert Team</a></li>
                                    <li><a href="">Pure Equipment</a></li>
                                    <li><a href="">Varieties of Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__service-area section-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// About us</h6>
                        <h1 class="section-title">Our values<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__service-item-2 white-bg">
                        <div class="service-item-icon">
                            <i class="icon-maintenance-1"></i>
                        </div>
                        <div class="service-item-brief">
                            <h3 class="animated fadeIn">
                                <a href="">Mission Statement</a></h3>
                            <p>It is the mission of Eddman Autos to create value for our Customers, Employees, and Stakeholders. We make it "Easy To Buy Auto Parts" by delivering quality products and superior service enabled by technology and backed by our guaranteed exact fit promise. We manage our business towards consistent and profitable growth, with integrity and a commitment to the people and communities where we live and work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__service-item-2 white-bg">
                        <div class="service-item-icon">
                            <i class="icon-mechanic"></i>
                        </div>
                        <div class="service-item-brief">
                            <h3 class="animated fadeIn">
                                <a href="">Returns Warranty</a>
                            </h3>
                            <p>Our returns and warranty are dubbed easy returns and easy warranty for a reason. We understand a majority of our customers are new to purchasing auto parts online so, we are here to help every step of the way. This is also why every part listed for your car is guaranteed to fit!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__service-item-2 white-bg">
                        <div class="service-item-icon">
                            <i class="icon-car-parts-3"></i>
                        </div>
                        <div class="service-item-brief">
                            <h3 class="animated fadeIn">
                                <a href="">Customer Service</a></h3>
                            <p>If you have suggestions which might make it even easier to buy auto parts, please don't hesitate to let us know!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__progress-bar-area before-bg-right pt-115 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__progress-bar-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                            <h1 class="section-title">We Have A Skillest
                                Team Ever<span>.</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="ltn__progress-bar-inner">
                            <div class="ltn__progress-bar-item">
                                <p>Car Repair</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 72%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <span>72%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Rental Service</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 74%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <span>74%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Cleaning &amp; Parts</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 81%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                        <span>81%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30"
                         data-bs-bg="{{ asset('main/about/a2.jpg') }}"
                         style="background-image: url(&quot;{{ asset('main/about/a2.jpg') }}&quot;);">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
