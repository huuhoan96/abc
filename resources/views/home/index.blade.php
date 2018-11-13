@extends('layouts.home')
@section('content')
            <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="homev6-slider-with-banners row">
                                    <div class="slider-block column-1">
                                        <div class="home-v6-slider home-slider">
                                        @foreach($sliders as $slider)
                                            <div class="slider-1">
                                                <img src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="">
                                                <div class="caption">
                                                    <div class="pre-title">12 Days of Deals </div>
                                                    <div class="title">Brilliant features, brilliant price. Efficient in every way.</div>
                                                    <!-- <div class="offer-price">$339.99</div>
                                                    <div class="sale-price">$689</div> -->
                                                    <div class="button">Xem ngay
                                                        <i class="tm tm-long-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="banners-block column-2">
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/slide-banner1.jpg ); height: 204px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title"><!-- New Arrivals -->
                                                                <br><!--  in -->
                                                                <strong><!-- Accessories --></strong>
                                                                <br> <!-- at Best Prices --></h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">
                                                            <span class="start_price"><!-- from --></span><!-- $13.79 --></span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/slide-banner2.jpg ); height: 204px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h4 class="pretitle"></h4>
                                                            <h3 class="title"><!-- catch Best -->
                                                                <br>
                                                                <strong><!-- Deals --></strong><!-- on the -->
                                                                <br> <!-- Curved TVs -->
                                                                <br><!-- Entertainment --></h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/slide-banner3.jpg ); height: 204px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h3 class="title">
                                                                <strong><!-- 20% Off Tech --></strong>
                                                                <br><!--  at Ultrabooks, -->
                                                                <br> <!-- Laptops, Tablets -->
                                                                <br><!-- Notebooks &amp; -->
                                                                <br><!-- More --></h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                        <div class="banner text-in-left">
                                            <a href="shop.html">
                                                <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/slide-banner4.jpg ); height: 204px;" class="banner-bg">
                                                    <div class="caption">
                                                        <div class="banner-info">
                                                            <h4 class="pretitle"><!-- Best Gift Idea --></h4>
                                                            <h3 class="title"><!-- Mini Two Wheel -->
                                                                <br>
                                                                <strong><!-- Self Balancing --></strong>
                                                                <br> <!-- Scooter --></h3>
                                                        </div>
                                                        <!-- .banner-info -->
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"><!-- £ --></span><!-- 339.99 --></span>
                                                            </ins>
                                                            <del>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol"><!-- £ --></span><!-- 689 --></span>
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <!-- .caption -->
                                                </div>
                                                <!-- .banner-bg -->
                                            </a>
                                        </div>
                                        <!-- .banner -->
                                    </div>
                                    <!-- .banners-block -->
                                </div>
                                <section class="section-top-categories section-categories-carousel" id="categories-carousel-3">
                                    <header class="section-header">
                                        <h2 class="section-title">
                                            Sản phẩm
                                            <br>Bán chạy</h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    <!-- .section-header -->
                                    <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-3 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:750,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                        <div class="woocommerce columns-6">
                                            <div class="products">
                                            @foreach($best_seller as $product)
                                                <div class="product-category product">
                                                    <a href="{{route('view',['slug'=>$product->slug])}}">
                                                        <img width="224" height="197" alt="Fashion" src="{{url('public/home')}}/assets/images/garden/cat-1.png">
                                                        <h2 class="woocommerce-loop-category__title">{{$product->title}}</h2>
                                                    </a>
                                                </div>
                                            @endforeach
                                            </div>
                                            <!-- .products-->
                                        </div>
                                        <!-- .woocommerce-->
                                    </div>
                                    <!-- .product-categories -->
                                </section>
                                <!-- .section-top-categories -->
                                <section class="section-single-carousel-with-tab-product type-2">
                                    <div class="row">
                                        <section class="column-3 section-products-carousel-tabs">
                                            <div class="section-products-carousel-tabs-wrap">
                                                <header class="section-header">
                                                    <ul role="tablist" class="nav justify-content-end">
                                                        <li class="nav-item"><a class="nav-link active" href="#tab-5a0483f26f2dc0" data-toggle="tab">Sản phẩm mới</a></li>
                                                        <li class="nav-item"><a class="nav-link " href="#tab-5a0483f26f2dc1" data-toggle="tab">Đang khuyến mại</a></li>
                                                        <li class="nav-item"><a class="nav-link " href="#tab-5a0483f26f2dc2" data-toggle="tab">Sản phẩm đặc biệt</a></li>
                                                    </ul>
                                                </header>
                                                <div class="tab-content">
                                                    <div id="tab-5a0483f26f2dc0" class="tab-pane active" role="tabpanel">
                                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                            <div class="container-fluid">
                                                                <div class="woocommerce columns-4">
                                                                    <div class="products">
                                                                    @foreach($new_products as $new_product)
                                                                        <div class="product">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                                <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                                <span class="price">
                                                                                    <!-- <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins> -->
                                                                                    <!-- <span class="amount"> 456.00</span> -->
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">{{$new_product->title}}</h2>
                                                                            </a>
                                                                            <div class="hover-area">
                                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                                <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                        <!-- /.product-outer -->
                                                                    </div>
                                                                </div>
                                                                <!-- .woocommerce -->
                                                            </div>
                                                            <!-- .container-fluid -->
                                                        </div>
                                                        <!-- .products-carousel -->
                                                    </div>
                                                    <!-- .tab-pane -->
                                                    <div id="tab-5a0483f26f2dc1" class="tab-pane " role="tabpanel">
                                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                            <div class="container-fluid">
                                                                <div class="woocommerce columns-4">
                                                                    <div class="products">
                                                                    @foreach($promotions as $promotion)
                                                                        <div class="product">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                                <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                                <span class="price">
                                                                                    <!-- <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> 456.00</span> -->
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">{{$promotion->title}}</h2>
                                                                            </a>
                                                                            <div class="hover-area">
                                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$promotion->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                                <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <!-- .woocommerce -->
                                                            </div>
                                                            <!-- .container-fluid -->
                                                        </div>
                                                        <!-- .products-carousel -->
                                                    </div>
                                                    <!-- .tab-pane -->
                                                    <div id="tab-5a0483f26f2dc2" class="tab-pane " role="tabpanel">
                                                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                            <div class="container-fluid">
                                                                <div class="woocommerce columns-4">
                                                                    <div class="products">
                                                                    @foreach($special_products as $special_product)
                                                                        <div class="product">
                                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                            </div>
                                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                                <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                                <span class="price">
                                                                                    <!-- <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> 456.00</span> -->
                                                                                </span>
                                                                                <!-- /.price -->
                                                                                <h2 class="woocommerce-loop-product__title">{{$special_product->title}}</h2>
                                                                            </a>
                                                                            <div class="hover-area">
                                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$special_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                                <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    </div>
                                                                </div>
                                                                <!-- .woocommerce -->
                                                            </div>
                                                            <!-- .container-fluid -->
                                                        </div>
                                                        <!-- .products-carousel -->
                                                    </div>
                                                    <!-- .tab-pane -->
                                                </div>
                                                <!-- .tab-content -->
                                            </div>
                                            <!-- .section-products-carousel-tabs-wrap -->
                                        </section>
                                        <!-- .section-products-carousel-tabs -->
                                    </div>
                                </section>
                                <!-- .section-single-carousel-with-tab-product -->
                                <section class="section-products-carousel-with-bg 6-column-carousel-bg">
                                    <div class="col-full">
                                        <div class="row">
                                            <header class="section-header">
                                                <h2 class="section-title">Drill Tools
                                                    <br>
                                                    <span>hurry up!</span>
                                                </h2>
                                                <div class="deal-countdown-timer">
                                                    <span class="deal-time-diff" style="display:none;">28800</span>
                                                    <div class="deal-countdown countdown"></div>
                                                </div>
                                                <!-- .deal-countdown-timer-->
                                                <img alt="" src="{{url('public/home')}}/assets/images/garden/bg-1.png">
                                            </header>
                                            <div class="products-carousel-with-bg">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce columns-6">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 399.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">399.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce-->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .products-carousel-with-bg -->
                                        </div>
                                        <!-- .row -->
                                    </div>
                                    <!-- .col-full -->
                                </section>
                                <!-- .section-products-carousel-with-bg -->
                                <section id="section-products-carousel-6" class="section-landscape-products-carousel section-landscape-products-carousel-with-thumbnails">
                                    <header class="section-header">
                                        <h2 class="section-title">Sự kiện & Hoạt động</h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel landscape-featured-product" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-6 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1590,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-2">
                                                <div class="products">
                                                    <div class="landscape-product-card-featured product" style="width: 733px;">
                                                    <legend>Hoạt động công ty</legend>
                                                        <div class="media">
                                                            <div id="techmarket-product-gallery-5a0483f26fb5e1" class="techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
                                                                <figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e1 .techmarket-wc-product-gallery-thumbnails__wrapper&quot;}">
                                                                @foreach($news as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <img width="600" height="600" src="{{url('uploads/news')}}/{{$new->image_cover}}" alt="gallery-image">
                                                                    </figure>
                                                                @endforeach
                                                                </figure>
                                                                <!-- /.techmarket-wc-product-gallery__wrapper -->
                                                                <figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:1}}],&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e1 .techmarket-wc-product-gallery__wrapper&quot;}">
                                                                @foreach($news as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <img width="180" height="180" title="" alt="" class="wp-post-image" src="{{url('uploads/news')}}/{{$new->image_cover}}">
                                                                    </figure>
                                                                @endforeach
                                                                </figure>
                                                                <!-- /.techmarket-wc-product-gallery-thumbnails__wrapper -->
                                                            </div>
                                                            <!-- /.techmarket-product-gallery -->
                                                            <div class="media-body" id="techmarket-product-gallery-5a0483f26fb5e1">
                                                                <figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e1 .techmarket-wc-product-gallery-thumbnails__wrapper&quot;}">
                                                                @foreach($news as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">{{$new->title}}</span></span>
                                                                            </ins>
                                                                            <del>
                                                                                <!-- <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span> -->
                                                                            </del>
                                                                        </span>
                                                                        <span class="">{!!$new->description!!}</span>
                                                                       <!--  <div class="ribbon green-label">
                                                                            <span>new!</span>
                                                                        </div> -->
                                                                        <div class="techmarket-product-rating text-right">
                                                                            <span class="review-count">{{$new->created_at}}</span>
                                                                        </div>
                                                                    </a>
                                                                    </figure>
                                                                @endforeach
                                                                </figure>                                                                
                                                            </div>
                                                            <!-- /.media-body -->
                                                        </div>
                                                        <!-- /.media -->
                                                    </div>
                                                    <!-- /.landscape-product-card-featured -->
                                                    <div class="landscape-product-card-featured product" style="width: 733px;">
                                                    <legend>Tin tự động hóa</legend>
                                                        <div class="media">
                                                            <div id="techmarket-product-gallery-5a0483f26fb5e2" class="techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
                                                                <figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e2 .techmarket-wc-product-gallery-thumbnails__wrapper&quot;}">
                                                                @foreach($news_1 as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <img width="600" height="600" src="{{url('uploads/news')}}/{{$new->image_cover}}" alt="gallery-image">
                                                                    </figure>
                                                                @endforeach
                                                                </figure>
                                                                <!-- /.techmarket-wc-product-gallery__wrapper -->
                                                                <figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:1}}],&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e2 .techmarket-wc-product-gallery__wrapper&quot;}">
                                                                @foreach($news_1 as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <img width="600" height="600" src="{{url('uploads/news')}}/{{$new->image_cover}}" alt="gallery-image">
                                                                    </figure>
                                                                @endforeach
                                                                </figure>
                                                                <!-- /.techmarket-wc-product-gallery-thumbnails__wrapper -->
                                                            </div>
                                                            <!-- /.techmarket-product-gallery -->
                                                            <div class="media-body" id="techmarket-product-gallery-5a0483f26fb5e2">
                                                                <figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-product-gallery-5a0483f26fb5e2 .techmarket-wc-product-gallery-thumbnails__wrapper&quot;}">
                                                                @foreach($news_1 as $new)
                                                                    <figure class="techmarket-wc-product-gallery__image">
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">{{$new->title}}</span></span>
                                                                                </ins>

                                                                            </span>
                                                                            <span class="">{!!$new->description!!}</span>
                                                                            <div class="techmarket-product-rating text-right">
                                                                                <span class="review-count">{{$new->created_at}}</span>
                                                                            </div>
                                                                        </a>
                                                                    </figure>
                                                                @endforeach
                                                                </figure>
                                                            </div>
                                                            <!-- /.media-body -->
                                                        </div>
                                                        <!-- /.media -->
                                                    </div>
                                                    <!-- /.landscape-product-card-featured -->
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-landscape-products-carousel -->
                                <section class="section-products-carousel" id="homev6-carousel-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Outdoor Dining Furnitures</h2>
                                        <nav class="custom-slick-nav"></nav>
                                        <!-- .custom-slick-nav -->
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel 6-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#homev6-carousel-3 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:750,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-6">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f1.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f3.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Hallo Seat Back Pad Outdoor Beige</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f1.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Light Weight Ikea Tunholmen Table</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f6.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Falster Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <span class="onsale">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                            </span>
                                                            <img src="{{url('public/home')}}/assets/images/garden/f5.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> 262.81</span>
                                                                </ins>
                                                                <del>
                                                                    <span class="amount">399.00</span>
                                                                </del>
                                                                <span class="amount"> </span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <span class="onsale">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                            </span>
                                                            <img src="{{url('public/home')}}/assets/images/garden/f2.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> 309.95</span>
                                                                </ins>
                                                                <del>
                                                                    <span class="amount">459.00</span>
                                                                </del>
                                                                <span class="amount"> </span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Tunholmen</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f5.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">White Outdoor Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f4.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Pale Blue Mammut Kids Children’s Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <span class="onsale">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                            </span>
                                                            <img src="{{url('public/home')}}/assets/images/garden/f7.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> 789.95</span>
                                                                </ins>
                                                                <del>
                                                                    <span class="amount">999.00</span>
                                                                </del>
                                                                <span class="amount"> </span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Falster Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f3.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Hallo Seat Back Pad Outdoor Beige</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f6.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">White Outdoor Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f8.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">White Outdoor Chair</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f3.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 399.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f4.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">Light Weight Ikea Tunholmen Table</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                    <div class="product">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                            <img src="{{url('public/home')}}/assets/images/garden/f7.jpg" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> 456.00</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.product-outer -->
                                                </div>
                                            </div>
                                            <!-- .woocommerce-->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-products-carousel -->
                                <div class="banner full-width-banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/big-ban1.jpg ); height: 236px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>Give Mom Her Day</strong>
                                                        <br> with Beautiful Blooms. </h3>
                                                </div>
                                                <span class="banner-action button">Browse now
                                                    <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                                </span>
                                            </div>
                                            <!-- /.caption -->
                                        </div>
                                        <!-- /.banner-b -->
                                    </a>
                                    <!-- /.section-header -->
                                </div>
                                <!-- /.banner -->
                                <section class="section-products-carousel-tabs techmarket-tabs">
                                    <div class="section-products-carousel-tabs-wrap">
                                        <header class="section-header">
                                            <h2 class="section-title">Sản phẩm nghành công nghiệp 4.0</h2>
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link active" href="#tab-5a0483f26fff70" data-toggle="tab">Giải pháp tự động hóa</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f26fff71" data-toggle="tab">Thang máy</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f26fff72" data-toggle="tab">Xử lý nước thải</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f26fff73" data-toggle="tab">Tiết kiệm năng lượng</a></li>
                                            </ul>
                                        </header>
                                        <!-- .section-header -->
                                        <div class="tab-content">
                                            <div id="tab-5a0483f26fff70" class="tab-pane active" role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">399.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 399.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f26fff71" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 399.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">399.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f26fff72" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 399.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">399.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f26fff73" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 399.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 262.81</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">399.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 309.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">459.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <span class="onsale">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                        </span>
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> 789.95</span>
                                                                            </ins>
                                                                            <del>
                                                                                <span class="amount">999.00</span>
                                                                            </del>
                                                                            <span class="amount"> </span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                    </div>
                                                                    <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                        <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                            <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> 456.00</span>
                                                                        </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                        <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-outer -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                        </div>
                                        <!-- .tab-content -->
                                    </div>
                                    <!-- .section-products-carousel-tabs-wrap -->
                                </section>
                                <!-- .section-products-carousel-tabs -->
                                <div class="fullwidth-notice stretch-full-width">
                                    <div class="col-full">
                                        <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                                    </div>
                                    <!-- .col-full -->
                                </div>
                                <!-- .fullwidth-notice -->
                                <section class="type-2 section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-3">
                                    <header class="section-header">
                                        <h2 class="section-title">Plants & Decoration</h2>
                                        <ul role="tablist" class="nav justify-content-center">
                                            <li class="nav-item"><a class="nav-link active" href="#top-20-1" data-toggle="tab">Top 20</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#digital-cameras" data-toggle="tab">Plants</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#action-cameras" data-toggle="tab">Plant Pots</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#compacts" data-toggle="tab">Plant Movers</a></li>
                                        </ul>
                                    </header>
                                    <div class="tab-content">
                                        <div role="tabpanel" id="top-20-1" class="tab-pane active">
                                            <div class="tab-product-carousel-with-featured-product">
                                                <div class="tab-carousel-products">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-5">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce-->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-carousel-products -->
                                                <div class="tab-featured-product">
                                                    <div class="woocommerce columns-1">
                                                        <div class="products">
                                                            <div class="tab-product-featured product">
                                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('public/home')}}/assets/images/garden/1.jpg">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>179.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>239.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                </a>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .tab-featured-product -->
                                            </div>
                                            <!-- .tab-product-carousel-with-featured-product -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div role="tabpanel" id="digital-cameras" class="tab-pane">
                                            <div class="tab-product-carousel-with-featured-product">
                                                <div class="tab-carousel-products">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-5">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce-->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-carousel-products -->
                                                <div class="tab-featured-product">
                                                    <div class="woocommerce columns-1">
                                                        <div class="products">
                                                            <div class="tab-product-featured product">
                                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('public/home')}}/assets/images/garden/2.jpg">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>179.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>239.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                </a>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .tab-featured-product -->
                                            </div>
                                            <!-- .tab-product-carousel-with-featured-product -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div role="tabpanel" id="action-cameras" class="tab-pane">
                                            <div class="tab-product-carousel-with-featured-product">
                                                <div class="tab-carousel-products">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-5">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce-->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-carousel-products -->
                                                <div class="tab-featured-product">
                                                    <div class="woocommerce columns-1">
                                                        <div class="products">
                                                            <div class="tab-product-featured product">
                                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('public/home')}}/assets/images/garden/3.jpg">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>179.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>239.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                </a>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .tab-featured-product -->
                                            </div>
                                            <!-- .tab-product-carousel-with-featured-product -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div role="tabpanel" id="compacts" class="tab-pane">
                                            <div class="tab-product-carousel-with-featured-product">
                                                <div class="tab-carousel-products">
                                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                                        <div class="container-fluid">
                                                            <div class="woocommerce columns-5">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 262.81</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">399.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Gerber, Rice Cereal, Single Grain</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 789.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">999.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 399.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Baby Wipes, Free and Clear</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/9.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Extra Virgin Olive Oil</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">5-Day Healthy Detox Plan</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/7.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">One Nutritional Shake, Berry</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/3.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/6.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <span class="onsale">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>150.04</span>
                                                                            </span>
                                                                            <img src="{{url('public/home')}}/assets/images/garden/2.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> 309.95</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">459.00</span>
                                                                                </del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/4.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/10.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Cacao Chip Cookies, 6 count</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/5.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/1.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Natural Force – Organic Whey Unflavored – 13.76 oz</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                            <img src="{{url('public/home')}}/assets/images/garden/8.jpg" class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                                    <span class="amount"> </span>
                                                                                </ins>
                                                                                <span class="amount"> 456.00</span>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}" rel="nofollow">Xem chi tiết</a>
                                                                            <!-- <a class="add-to-compare-link" href="compare.html">Compare</a> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.product-outer -->
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce-->
                                                        </div>
                                                        <!-- .container-fluid -->
                                                    </div>
                                                    <!-- .products-carousel -->
                                                </div>
                                                <!-- .tab-carousel-products -->
                                                <div class="tab-featured-product">
                                                    <div class="woocommerce columns-1">
                                                        <div class="products">
                                                            <div class="tab-product-featured product">
                                                                <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                    <img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="{{url('public/home')}}/assets/images/garden/4.jpg">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>179.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span>239.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                                </a>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                        <span style="width:0%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$new_product->slug])}}">Xem chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .tab-featured-product -->
                                            </div>
                                            <!-- .tab-product-carousel-with-featured-product -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </section>
                                <!-- .section-products-carousel-tabs-->
                                <section class="section-landscape-products-carousel-tab section-products-carousel-tabs best-rated-2">
                                    <div class="section-products-carousel-tabs-wrap">
                                        <header class="section-header">
                                            <h2 class="section-title">Best Rated Sellers</h2>
                                            <ul role="tablist" class="nav justify-content-end">
                                                <li class="nav-item"><a class="nav-link active" href="#tab-5a0483f2707760" data-toggle="tab">Top 20</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f2707761" data-toggle="tab">Audio &amp; Video</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f2707762" data-toggle="tab">Laptops &amp; Computers</a></li>
                                                <li class="nav-item"><a class="nav-link " href="#tab-5a0483f2707763" data-toggle="tab">Video Cameras</a></li>
                                            </ul>
                                        </header>
                                        <!-- .section-header-->
                                        <div class="tab-content">
                                            <div id="tab-5a0483f2707760" class="tab-pane active" role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:900,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-3.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-7.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-5.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-2.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $500</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-1.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-4.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-8.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-6.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $600</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f2707761" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:900,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-8.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-2.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $500</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-7.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-3.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-6.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $600</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-1.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-4.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-5.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f2707762" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:900,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-8.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-2.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $500</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-1.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-4.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-6.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $600</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-3.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-5.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-7.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                            <div id="tab-5a0483f2707763" class="tab-pane " role="tabpanel">
                                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:900,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                                    <div class="container-fluid">
                                                        <div class="woocommerce">
                                                            <div class="products">
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-1.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-6.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $600</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-5.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Ranch Dressing with Avocado Oil, Dairy-Free</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-4.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Orange Organic Dark Chocolate- 70% Cocoa</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-2.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $500</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Corn Flakes Cereal, Fruit Juice Sweetened</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-7.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Fruit Strips, Strawberry</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-3.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> $3,788.00</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span class="amount">$4,780.00</span>
                                                                                    </del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">VeganEgg, 100% Plant Based</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                                <div class="landscape-product product">
                                                                    <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                                        <div class="media">
                                                                            <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-8.jpg" alt="">
                                                                            <div class="media-body">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span class="amount"> </span>
                                                                                    </ins>
                                                                                    <span class="amount"> $800</span>
                                                                                </span>
                                                                                <!-- .price -->
                                                                                <h2 class="woocommerce-loop-product__title">Organic Creamy Peanut Butter</h2>
                                                                                <div class="techmarket-product-rating">
                                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                                    </div>
                                                                                    <span class="review-count">(0)</span>
                                                                                </div>
                                                                                <!-- .techmarket-product-rating -->
                                                                            </div>
                                                                            <!-- .media-body -->
                                                                        </div>
                                                                        <!-- .media -->
                                                                    </a>
                                                                    <!-- .woocommerce-LoopProduct-link -->
                                                                </div>
                                                                <!-- .landscape-product -->
                                                            </div>
                                                        </div>
                                                        <!-- .woocommerce -->
                                                    </div>
                                                    <!-- .container-fluid -->
                                                </div>
                                                <!-- .products-carousel -->
                                            </div>
                                            <!-- .tab-pane -->
                                        </div>
                                        <!-- .tab-content -->
                                    </div>
                                    <!-- .section-products-carousel-tabs-wrap -->
                                </section>
                                <!-- .section-landscape-products-carousel-tab -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                        <div id="secondary" class="widget-area" role="complementary">
                            <div class="widget widget_techmarket_banner_widget">
                                <div class="banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/banner-1-1.jpg ); height: 207px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>1000 mAh</strong>
                                                        <br>
                                                        <span>Power Bank Pro</span>
                                                    </h3>
                                                </div>
                                                <!-- .banner-info -->
                                                <span class="price">$ 34.99</span>
                                                <span class="banner-action button">Buy Now</span>
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                            </div>
                            <!-- .widget_techmarket_banner_widget -->
                            <div class="widget widget_techmarket_banner_widget">
                                <div class="banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/banner-2.jpg ); height: 207px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">New Arrivals
                                                        <br> in
                                                        <strong> Accesories</strong>
                                                        <br> at Best prices</h3>
                                                </div>
                                                <!-- .banner-info -->
                                                <span class="banner-action button">View all</span>
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                            </div>
                            <!-- .widget_techmarket_banner_widget -->
                            <div class="widget widget_techmarket_banner_widget">
                                <div class="banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/banner-3-1.jpg ); height: 207px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">Catch Best
                                                        <br>
                                                        <strong>Bathroom</strong>
                                                        <br>Decorations &
                                                        <br>Towels</h3>
                                                </div>
                                                <!-- .banner-info -->
                                                <span class="banner-action button">Browse</span>
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .banner -->
                            </div>
                            <!-- .widget_techmarket_banner_widget -->
                            <div class="widget widget_techmarket_features_widget">
                                <div class="features-list">
                                    <div class="features">
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                                <div class="media-body feature-text">
                                                    <strong>Free Delivery</strong>from $50</div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                                <div class="media-body feature-text">
                                                    <strong>99 % Customer</strong>Feedbacks</div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                                <div class="media-body feature-text">
                                                    <strong>365 Days </strong>for free return</div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                                <div class="media-body feature-text">
                                                    <strong>Payment</strong>Secure System</div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                        <div class="feature">
                                            <div class="media">
                                                <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                                <div class="media-body feature-text">
                                                    <strong>Only Best</strong>Brands</div>
                                            </div>
                                            <!-- .media -->
                                        </div>
                                        <!-- .feature -->
                                    </div>
                                    <!-- .features -->
                                </div>
                                <!-- .features-list -->
                            </div>
                            <!-- .widget_techmarket_features_widget -->
                            <div class="widget widget_techmarket_poster_widget" id="techmarket_poster_widget-2">
                                <div class="poster">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( {{url('public/home')}}/assets/images/garden/big-ban.jpg ); height: 703px;" class="poster-bg">
                                            <div class="caption">
                                                <div class="poster-info">
                                                    <h3 class="title">
                                                        <strong>Garden Power</strong>
                                                        <br> Tools Collection</h3>
                                                    <span class="price">
                                                        <span>starting at</span>
                                                        <br>$ 34.99</span>
                                                </div>
                                                <!-- .poster-info -->
                                                <div class="poster-caption">
                                                    <span class="poster-action button">Start Buying</span>
                                                    <span class="condition">*limited time
                                                        <br>offer</span>
                                                </div>
                                                <!-- .poster-caption -->
                                            </div>
                                            <!-- .caption -->
                                        </div>
                                        <!-- .banner-bg -->
                                    </a>
                                </div>
                                <!-- .poster -->
                            </div>
                            <!-- .widget_techmarket_poster_widget -->
                            <div class="widget widget_techmarket_products_carousel_widget">
                                <section id="single-sidebar-carousel" class="section-products-carousel">
                                    <header class="section-header">
                                        <h2 class="section-title">Pressure Washers 2017</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:4,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
                                        <div class="container-fluid">
                                            <div class="woocommerce columns-1">
                                                <div class="products">
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                    </div>
                                                    <!-- .landscape-product-widget -->
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                    </div>
                                                    <!-- .landscape-product-widget -->
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                    </div>
                                                    <!-- .landscape-product-widget -->
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/sm-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                    </div>
                                                    <!-- .landscape-product-widget -->
                                                    <div class="landscape-product-widget product">
                                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                                            <div class="media">
                                                                <img class="wp-post-image" src="{{url('public/home')}}/assets/images/garden/xs-1.jpg" alt="">
                                                                <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> 50.99</span>
                                                                        </ins>
                                                                        <del>
                                                                            <span class="amount">26.99</span>
                                                                        </del>
                                                                    </span>
                                                                    <!-- .price -->
                                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:0%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(0)</span>
                                                                    </div>
                                                                    <!-- .techmarket-product-rating -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </a>
                                                    </div>
                                                    <!-- .landscape-product-widget -->
                                                </div>
                                                <!-- .products -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .container-fluid -->
                                    </div>
                                    <!-- .products-carousel -->
                                </section>
                                <!-- .section-products-carousel -->
                            </div>
                            <!-- .widget_techmarket_products_carousel_widget -->
                        </div>
                        <!-- #secondary -->
                        <section class="brands-carousel">
                            <h2 class="sr-only">Brands Carousel</h2>
                            <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <div class="brands">
                                @foreach($partners as $partner)
                                    <div class="item">
                                        <a href="#">
                                            <figure>
                                                <figcaption class="text-overlay">
                                                    <div class="info">
                                                        <h4>{{$partner->title}}</h4>
                                                    </div>
                                                    <!-- /.info -->
                                                </figcaption>
                                                <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach
                                    <!-- .item -->
                                </div>
                            </div>
                            <!-- .col-full -->
                        </section>
                        <!-- .brands-carousel -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
@stop()