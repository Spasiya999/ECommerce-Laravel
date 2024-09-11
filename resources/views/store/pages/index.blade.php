@extends('store.layouts.app')


@section('content')

<!-- START SLIDER AREA -->
@include('store.components.main-slider')
<!-- END SLIDER AREA -->

<section id="page-content" class="page-wrapper section">
    <!-- BANNER-SECTION START -->
    <div class="banner-section ptb-60">
        <div class="container">
            <div class="row">
                <!-- banner-item start -->
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item banner-2">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset('store-assets/img/banner/2.jpg') }}" alt=""></a>
                        </div>
                        <h3 class="banner-title-2"><a href="#">sony smartphone</a></h3>
                        <h3 class="pro-price">$ 869.00</h3>
                        <div class="banner-button">
                           <a href="#">Shop now <i class="zmdi zmdi-long-arrow-right"></i></a> 
                        </div>
                    </div>
                </div>
                <!-- banner-item end -->
                <!-- banner-item start -->
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item banner-3">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset('store-assets/img/banner/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="banner-info">
                            <h3 class="banner-title-2"><a href="#">Product Name</a></h3>
                            <ul class="banner-featured-list">
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                </li>
                            </ul>
                            <div class="banner-button">
                               <a href="#">Discover <i class="zmdi zmdi-long-arrow-right"></i></a> 
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- banner-item end -->
                <!-- banner-item start -->
                <div class="col-lg-4 col-md-6 d-block d-md-none d-lg-block">
                    <div class="banner-item banner-4">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset('store-assets/img/banner/4.jpg') }}" alt=""></a>
                        </div>
                        <h3 class="banner-title-2"><a href="#">phone name</a></h3>
                        <div class="banner-button">
                           <a href="#">Shop now <i class="zmdi zmdi-long-arrow-right"></i></a> 
                        </div>
                    </div>
                </div>
                <!-- banner-item end -->
            </div>
        </div>
    </div> 
    <!-- BANNER-SECTION END --> 

    <!-- FEATURED PRODUCT SECTION START -->
    <div class="featured-product-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-start mb-20">
                        <h2 class="uppercase">new products</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                        <div class="featured-product">
                            <div class="active-featured-product slick-arrow-2">
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="single-product">
                                            <img src="{{ asset('store-assets/img/product-2/1.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product">Product Name</a>
                                        </h6>
                                        <h6 class="brand-name">Sumsung</h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="single-product">
                                            <img src="{{ asset('store-assets/img/product-2/2.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product">Product Name</a>
                                        </h6>
                                        <h6 class="brand-name">Sumsung</h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="single-product">
                                            <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product">Product Name</a>
                                        </h6>
                                        <h6 class="brand-name">Sumsung</h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="single-product">
                                            <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product">Product Name</a>
                                        </h6>
                                        <h6 class="brand-name">Sumsung</h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item product-item-2">
                                    <div class="product-img">
                                        <a href="single-product">
                                            <img src="{{ asset('store-assets/') }}/img/product-2/3.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product">Product Name</a>
                                        </h6>
                                        <h6 class="brand-name">Sumsung</h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>
        </div>            
    </div>
    <!-- FEATURED PRODUCT SECTION END -->

    <!-- UP COMMING PRODUCT SECTION START -->
    <div class="up-comming-product-section ptb-60">
        <div class="container">
            <div class="row">
                <!-- up-comming-pro -->
                <div class="col-lg-8">
                    <div class="up-comming-pro gray-bg up-comming-pro-2 clearfix">
                        <div class="up-comming-pro-img f-left">
                            <a href="#">
                                <img src="{{ asset('store-assets/img/up-comming/2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="up-comming-pro-info f-left">
                            <h3><a href="#">Dummy Product Name</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                            <div class="up-comming-time-2 clearfix">
                                <div data-countdown="2019/01/15"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-block d-md-none d-lg-block">
                    <div class="banner-item banner-1">
                        <div class="ribbon-price">
                            <span>$ 896.00</span>
                        </div>
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset('store-assets/img/banner/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="banner-info">
                            <h3><a href="#">Product Name</a></h3>
                            <ul class="banner-featured-list">
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- UP COMMING PRODUCT SECTION END -->

    <!-- PRODUCT TAB SECTION START -->
    <div class="product-tab-section section-bg-tb pt-80 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-start mb-40">
                        <h2 class="uppercase">product list</h2>
                        <h6>There are many variations of passages of brands available,</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-tab pro-tab-menu pro-tab-menu-2 text-end">
                        <!-- Nav tabs -->
                        <ul class="nav" >
                            <li><a class="active" href="#popular-product" data-bs-toggle="tab">Popular Products </a></li>
                            <li><a href="#new-arrival" data-bs-toggle="tab">New Arrival</a></li>
                            <li><a href="#best-seller"  data-bs-toggle="tab">Best Seller</a></li>
                            <li><a href="#special-offer"  data-bs-toggle="tab">Special Offer</a></li>
                        </ul>
                    </div>                       
                </div>
                <div class="col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- popular-product start -->
                        <div id="popular-product" class="tab-pane active show">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/5.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/6.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/1.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/7.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- popular-product end -->
                        <!-- new-arrival start -->
                        <div id="new-arrival" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/7.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/6.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/5.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/1.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/7.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- new-arrival end -->
                        <!-- best-seller start -->
                        <div id="best-seller" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/1.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/7.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/5.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/6.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- best-seller end -->
                        <!-- special-offer start -->
                        <div id="special-offer" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/1.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/4.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/5.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/6.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/7.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product">
                                                <img src="{{ asset('store-assets/img/product-2/3.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>
                                            <h3 class="pro-price">$ 869.00</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quickview"><i
                                                        class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- special-offer end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB SECTION END -->
  
</section>

@endsection