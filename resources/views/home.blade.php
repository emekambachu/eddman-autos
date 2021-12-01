@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <!-- SLIDER AREA START (slider-6) -->
    <div class="ltn__slider-area ltn__slider-3 ltn__slider-6 section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white">

            <!-- ltn__slide-item  -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-5 text-color-white bg-image bg-overlay-theme-black-80" data-bs-bg="{{ asset('main/img/slider/41.jpg') }}">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">

                                                <h4 class="slide-title animated ">
                                                    Dealers and suppliers <br>  Of Auto spare parts</h4>
                                                <div class="btn-wrapper animated">
                                                    <a href="{{ url('services') }}"
                                                       class="theme-btn-1 btn btn-effect-1">
                                                        Services</a>
                                                    <a href="{{ url('products') }}"
                                                       class="btn btn-transparent btn-effect-2 white-color">
                                                        Products</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('main/home/h1.png') }}" alt="#">
                                    <span class="call-to-circle-1"></span>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ltn__slide-item  -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-5 text-color-white bg-image bg-overlay-theme-black-80" data-bs-bg="{{ asset('main/img/slider/41.jpg') }}">
                <div class="ltn__slide-item-inner text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h3 class="slide-title animated">
                                                    Professional Car <br>  Service Provide</h3>
                                                <div class="btn-wrapper animated">
                                                    <a href="{{ url('about') }}"
                                                       class="theme-btn-1 btn btn-effect-1">About</a>
                                                    <a href="{{ url('contact') }}"
                                                       class="btn btn-transparent btn-effect-2 white-color">Contact us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset('main/home/h2.png') }}" alt="#">
                                    <span class="call-to-circle-1"></span>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-80 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <ul class="ltn__parallax-effect-wrap ltn__parallax-effect-active"
                            data-friction-x="0.1"
                            data-friction-y="0.1"
                            data-scalar-x="15"
                            data-scalar-y="25">
                            <li class="layer" data-depth="0.00"></li>
                            <li class="layer" data-depth="0.10">
                                <div class="ltn__effect-img ltn__effect-img-top-left">
                                    <img src="{{ asset('main/home/h3.jpg') }}" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.30">
                                <div class="ltn__effect-img ltn__effect-img-top-right">
                                    <img src="{{ asset('main/home/h4.jpg') }}" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.50">
                                <div class="ltn__effect-img ltn__effect-img-center-left">
                                    <img src="{{ asset('main/home/h5.jpg') }}" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.20">
                                <div class="ltn__effect-img ltn__effect-img-center-right">
                                    <img src="{{ asset('main/home/h6.jpg') }}" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.20">
                                <div class="ltn__effect-img ltn__effect-img-bottom-left">
                                    <img src="{{ asset('main/home/h7.jpg') }}" alt="#">
                                </div>
                            </li>
                            <li class="layer" data-depth="0.50">
                                <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                                    <div class="about-us-img-info">
                                        <div class="about-us-img-info-inner">
                                            <h1><span class="counter">10</span><span>+</span></h1>
                                            <h6><span>Years</span> Of Experience</h6>
                                            <span class="dots-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// About Us</h6>
                            <h1 class="section-title">Get Amazing Service From Us<span>.</span></h1>
                            <p>At Edman Autos, we offer an extensive selection of auto parts, truck parts, import parts, performance parts and automotive accessories, so you can easily find the quality parts you need at the lowest price. Explore our wide inventory to find both OEM car parts and aftermarket car parts for your vehicle.</p>
                        </div>

                        <hr>
                        <div class="about-call-us">
                            <div class="call-us-icon">
                                <img src="{{ asset('main/img/icons/7.png') }}" alt="Icon Image">
                            </div>
                            <div class="call-us-info">
                                <p>Call us 24/7. We can answer all your questions.</p>
                                <h2><a href="tel:09064110019">09064110019, </a> <small> or </small> <a href="tel:09130917401">09130917401</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- WHY CHOOSE US AREA START -->
    <div class="ltn__why-choose-us-area section-bg-1 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Why Choose Us</h6>
                            <h1 class="section-title">Your satisfaction Is Our Priority<span>.</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="why-choose-us-feature-item">
                                    <div class="why-choose-us-feature-icon">
                                        <i class="icon-car-parts-1"></i>
                                    </div>
                                    <div class="why-choose-us-feature-brief">
                                        <h3><a href="">Buy affordable vehicles from the US</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="why-choose-us-feature-item">
                                    <div class="why-choose-us-feature-icon">
                                        <i class="icon-automobile"></i>
                                    </div>
                                    <div class="why-choose-us-feature-brief">
                                        <h3><a href="">Buy all kinds of vehicle spare parts</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us-img-wrap">
                        <div class="why-choose-us-img-1 text-start">
                            <img src="{{ asset('main/home/h8.jpg') }}" alt="Image">
                        </div>
                        <div class="why-choose-us-img-2 text-end">
                            <img src="{{ asset('main/home/h9.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WHY CHOOSE US AREA END -->

    <!-- SERVICE AREA START (Service 1) -->
    <div class="ltn__service-area ltn__primary-bg before-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Service</h6>
                        <h1 class="section-title white-color">What We Do<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="{{ asset('main/home/h12.jpg') }}" alt="#">
                            <div class="service-item-icon">
                                <i class="icon-mechanic"></i>
                            </div>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="">Car sales</a></h3>
                            <p>Let us help you get the car of your choice at very affordable prices</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="{{ asset('main/home/h10.jpg') }}" alt="#">
                            <div class="service-item-icon">
                                <i class="icon-car-parts-3"></i>
                            </div>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="">Car parts</a></h3>
                            <p>We supply car parts for all kinds of car brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <img src="{{ asset('main/home/h11.jpg') }}" alt="#">
                            <div class="service-item-icon">
                                <i class="icon-repair"></i>
                            </div>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="">Consultancy</a></h3>
                            <p>Let our auto professionals help you find solution to your vehicle problems</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Products</h6>
                        <h1 class="section-title">Car Parts</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_3_1">Wheels</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_3_2" class="">Sounds</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_3_3" class="">Featured</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_3_4" class="">Colors</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="{{ asset('main/img/product/1.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="">Wheel Bearing Retainer</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="{{ asset('main/img/product/2.png') }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                        <li class="new-badge">Sale</li>
                                                        <li class="soldout-badge">Sold Out</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Brake Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="{{ asset('main/img/product/3.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Shock Mount Insulator</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/4.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Tail Light Lens</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="{{ asset('main/img/product/5.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Coil Spring Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->

                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/7.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">OE Replica Wheels</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/4.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Tail Light Lens</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="">
                                                    <img src="{{ asset('main/img/product/5.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Coil Spring Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/7.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">OE Replica Wheels</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/1.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Wheel Bearing Retainer</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/2.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Brake Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/3.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Shock Mount Insulator</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/7.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">OE Replica Wheels</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/1.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Wheel Bearing Retainer</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/4.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Tail Light Lens</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/5.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Coil Spring Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/2.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Brake Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/3.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Shock Mount Insulator</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/5.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Coil Spring Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/2.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Brake Conversion Kit</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/7.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">OE Replica Wheels</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/1.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Wheel Bearing Retainer</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/4.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Tail Light Lens</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href=""><img src="{{ asset('main/img/product/3.png') }}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal"
                                                               data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal"
                                                               data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal"
                                                               data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="">Shock Mount Insulator</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->

    <!-- CALL TO ACTION START (call-to-action-2) -->
    <div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="{{ asset('main/img/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-2 text-center">
                        <h2>Get A Free Service Or Make A Call</h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="{{ url('appointment') }}">
                                <i class="fas fa-phone-volume"></i> Book an appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 section-title-style-3">
                        <div class="section-brief-in">
                            <p>We also understand how important it is to get the right parts that you need when you buy car parts. That’s why all of our parts come with our Guaranteed Exact Fit promise.</p>
                        </div>
                        <div class="section-title-in">
                            <h6 class="section-subtitle ltn__secondary-color">// Why Choose Us</h6>
                            <h1 class="section-title">Get Extra Benefits<span>.</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row  justify-content-center">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Body Color</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-exterior"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Glass Change</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3 text-right text-end">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-6"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Air Condition Repair</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-banner-img text-center mb-30">
                        <img src="{{ asset('main/img/others/2.png') }}" alt="#">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row  justify-content-center">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-7"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Tyre Repairs</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-8"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Pure Diagnostic</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="icon-car-parts-3"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h2><a href="">Engine Lock</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- CALL TO ACTION START ( Service Form ) -->
    <div class="ltn__service-form-wrap-area">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-11 offset-xl-1">
                    <div class="ltn__service-form-area ltn__service-form-1 ltn__service-form-margin bg-image bg-overlay-theme-black-60 pt-115 pb-95" data-bs-bg="{{ asset('main/img/bg/2.jpg') }}">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 align-self-center">
                                <div class="ltn__service-form-brief">
                                    <div class="section-title-area ltn__section-title-2 mb-0">
                                        <h6 class="section-subtitle white-color">// Call To Action</h6>
                                        <h1 class="section-title white-color">Get An Free Service
                                            From Us.</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 align-self-center">
                                <div class="ltn__service-form-wrap ltn__service-form-color-white">
                                    <form action="#" class="ltn__service-form-box">
                                        <ul>
                                            <li>
                                                <select class="nice-select">
                                                    <option>Service Name</option>
                                                    <option>Car Repair </option>
                                                    <option>Engine Repairing </option>
                                                    <option>Oil Change</option>
                                                    <option>Car Wash</option>
                                                </select>
                                            </li>
                                            <li>
                                                <div class="input-item input-item-date mb-0 ltn__custom-icon">
                                                    <input type="text" name="date" placeholder="DATE">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="btn-wrapper">
                                                    <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Check Availability</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/1.png') }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/2.png') }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/3.png') }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/4.png') }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/5.png') }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset('main/img/brand-logo/3.png') }}" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->
@endsection
