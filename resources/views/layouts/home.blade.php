<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage" ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Công ty cổ phẩn công nghệ hợp long - Hoplongtech Automation</title>
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-grid.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/bootstrap-reboot.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/font-techmarket.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/techmarket-font-awesome.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/slick-style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/animate.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/style.css" media="all" />
        <script src="{{url('public/js')}}/appm.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/assets/css/colors/orange.css" media="all" /> -->
        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
<!--         <link href="{{url('public/home')}}/assets/css/colors/blue.css" rel="alternate stylesheet" title="Blue color">
        <link href="{{url('public/home')}}/assets/css/colors/flat-green.css" rel="alternate stylesheet" title="Flat Green color">
        <link href="{{url('public/home')}}/assets/css/colors/green.css" rel="alternate stylesheet" title="Green color">
        <link href="{{url('public/home')}}/assets/css/colors/orange.css" rel="alternate stylesheet" title="Orange color">
        <link href="{{url('public/home')}}/assets/css/colors/red.css" rel="alternate stylesheet" title="Red color">
        <link href="{{url('public/home')}}/assets/css/colors/yellow.css" rel="alternate stylesheet" title="Yellow color"> -->
        <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
        <!-- Demo Purpose Only. Should be removed in production : END -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="{{url('uploads/logo/Logo-hl.png')}}">
         
    </head>
    <body class="garden-market page-template-template-homepage-v6 woocommerce-active" ng-controller="checkboxCtrl">
        <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v4">
            <div class="col-full">
                <ul id="menu-top-bar-left" class="nav justify-content-center">
<!--                     <li class="menu-item animate-dropdown">
                        <a title="No additional fees" href="contact-v2.html"><i class="tm tm-order-tracking"></i>Miễn phí vận chuyển</a>
                    </li> -->
                   <!--  <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                        <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                            <i class="fa fa-language"></i>Vietnamese
                            <span class="caret"></span>
                        </a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item animate-dropdown">
                                <a title="INR" href="#">Vietnamese</a>
                            </li>
                            <li class="menu-item animate-dropdown">
                                <a title="AED" href="#">English</a>
                            </li>
                        </ul>
                       
                    </li> -->
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
            <!-- .top-bar-v2 -->
            <header id="masthead" class="site-header header-v4" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                                    <ul id="menu-primary-menu" class="nav yamm">
                                        <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                            <a title="hop-long-tech" href="{{route('home')}}">Trang chủ</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                            <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Giới thiệu<span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Wishlist" href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Add to compare" href="compare.html">Add to compare</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a title="About Us" href="about.html">About Us</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Track Order" href="track-your-order.html">Track Order</a>
                                                </li>
                                            </ul>
                                            <!-- .dropdown-menu -->
                                        </li>

                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Logitech Sale" href="product-category.html">Tin tức</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Du-an-hop-long-tech" href="{{route('projects')}}">Dự án</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Download" href="{{route('downloads')}}">Download</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Logitech Sale" href="product-category.html">Liên hệ</a>
                                    </li>

                                    <li class="techmarket-flex-more-menu-item dropdown" style="display: none;">
                                        <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                        <ul class="overflow-items dropdown-menu"></ul>
                                     
                                    </li>
                                 </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                    <div class="logo">  
                                        <img src="{{url('uploads/logo/w-logo.png')}}" alt="">
                                    </div>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div id="departments-menu" class="dropdown departments-menu">
                                <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="tm tm-departments-thin"></i>
                                    <span>All Departments</span>
                                </button>
                                <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                    <li class="highlight menu-item animate-dropdown">
                                        <a title="Top 100 Offers" href="home-v3.html">Top 100 sản phẩm bán chạy</a>
                                    </li>
                                    @foreach($categorys as $category)
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                        <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">{{$category->title}}<span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="{{url('uploads/category')}}/category1.jpg" class="" alt="" />
                                                            </div>
                                                            <!-- .kc_single_image -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .bg-yamm-content -->
                                                    <div class="row yamm-content-row">
                                                    @foreach($category->childs as $child)
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        <li class="nav-title ttitle">{{$child->title}}</li>
                                                                        @foreach($child->childs as $chil)
                                                                        <li><a href="{{route('view',['slug'=>$chil->slug])}}">{{$chil->title}}</a></li>
                                                                        @endforeach
                                                                        <li class="nav-divider"></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <!-- .kc_text_block -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .kc_column -->
                                                    @endforeach
                                                    </div>
                                                    <!-- .kc_row -->
                                                </div>
                                                <!-- .yamm-content -->
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- .departments-menu -->
                            <form class="navbar-search" method="get">
                                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                                <div class="input-group">
                                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                                    <div class="input-group-addon search-categories">
                                        <select name='product_cat' id='product_cat' class='postform resizeselect'>
                                            <option value='0' selected='selected'>All Categories</option>
                                            <option class="level-0" value="television">Televisions</option>
                                            <option class="level-0" value="home-theater-audio">Home Theater &amp; Audio</option>
                                            <option class="level-0" value="headphones">Headphones</option>
                                            <option class="level-0" value="digital-cameras">Digital Cameras</option>
                                            <option class="level-0" value="cells-tablets">Cells &amp; Tablets</option>
                                            <option class="level-0" value="smartwatches">Smartwatches</option>
                                            <option class="level-0" value="games-consoles">Games &amp; Consoles</option>
                                            <option class="level-0" value="printer">Printer</option>
                                            <option class="level-0" value="tv-video">TV &amp; Video</option>
                                            <option class="level-0" value="home-entertainment">Home Entertainment</option>
                                            <option class="level-0" value="tvs">TVs</option>
                                            <option class="level-0" value="speakers">Speakers</option>
                                            <option class="level-0" value="computers-laptops">Computers &amp; Laptops</option>
                                            <option class="level-0" value="laptops">Laptops</option>
                                            <option class="level-0" value="ultrabooks">Ultrabooks</option>
                                            <option class="level-0" value="notebooks">Notebooks</option>
                                            <option class="level-0" value="desktop-pcs">Desktop PCs</option>
                                            <option class="level-0" value="mac-computers">Mac Computers</option>
                                            <option class="level-0" value="all-in-one-pc">All in One PC</option>
                                            <option class="level-0" value="audio-music">Audio &amp; Music</option>
                                            <option class="level-0" value="pc-components">PC Components</option>
                                        </select>
                                    </div>
                                    <!-- .input-group-addon -->
                                    <div class="input-group-btn">
                                        <input type="hidden" id="search-param" name="post_type" value="product" />
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                            <span class="search-btn fa fa-search"></span>
                                        </button>
                                    </div>
                                    <!-- .input-group-btn -->
                                </div>
                                <!-- .input-group -->
                            </form>
                            <!-- .navbar-search -->
                            <ul class="header-compare nav navbar-nav">
                                <li class="nav-item">
                                    <a href="compare.html" class="nav-link">
                                        <i class="tm tm-compare"></i>
                                        <span id="top-cart-compare-count" class="value">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .header-compare -->
                            <ul class="header-wishlist nav navbar-nav">
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">
                                        <i class="tm tm-favorites"></i>
                                        <span id="top-cart-wishlist-count" class="value">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .header-wishlist -->
                            <ul id="site-header-cart" class="site-header-cart menu">
                                <li class="animate-dropdown dropdown ">
                                    <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                        <i class="tm tm-shopping-bag"></i>
                                        <span class="count">2</span>
                                        <span class="amount">
                                            <span class="price-label">Your Cart</span>&#036;136.99</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-mini-cart">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="widget_shopping_cart_content">
                                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                            </a>
                                                            <span class="quantity">1 ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                            </span>
                                                        </li>
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                                            </a>
                                                            <span class="quantity">1 ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <!-- .cart_list -->
                                                    <p class="woocommerce-mini-cart__total total">
                                                        <strong>Subtotal:</strong>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                                    </p>
                                                    <p class="woocommerce-mini-cart__buttons buttons">
                                                        <a href="cart.html" class="button wc-forward">View cart</a>
                                                        <a href="checkout.html" class="button checkout wc-forward">Checkout</a>
                                                    </p>
                                                </div>
                                                <!-- .widget_shopping_cart_content -->
                                            </div>
                                            <!-- .widget_shopping_cart -->
                                        </li>
                                    </ul>
                                    <!-- .dropdown-menu-mini-cart -->
                                </li>
                            </ul>
                            <!-- .site-header-cart -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                    <div class="logo">
                                        <img src="{{url('uploads/logo/w-logo.png')}}" alt="">
                                    </div>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <li class="my-account">
                                        <a href="login-and-register.html" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="compare.html" class="has-icon">
                                            <i class="tm tm-compare"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .columns-3 -->
                            </div>
                            <!-- .handheld-header-links -->
                        </div>
                        <!-- /.row -->
                        <div class="techmarket-sticky-wrap">
                            <div class="row">
                                <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                    <button class="btn navbar-toggler" type="button">
                                        <i class="tm tm-departments-thin"></i>
                                        <span>Menu</span>
                                    </button>
                                    <div class="handheld-navigation-menu">
                                        <span class="tmhm-close">Close</span>
                                        <ul id="menu-departments-menu-1" class="nav">
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="Value of the Day" href="product-category.html">Value of the Day</a>
                                            </li>
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="Top 100 Offers" href="product-category.html">Top 100 Offers</a>
                                            </li>
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="New Arrivals" href="product-category.html">New Arrivals</a>
                                            </li>
                                            @foreach($categorys as $category)
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">{{$category->title}}<span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img src="{{url('public/home')}}/assets/images/megamenu.jpg" class="" alt="" />
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                            @foreach($category->childs as $child)
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title ttitle">{{$child->title}}</li>
                                                                                @foreach($child->childs as $chil)
                                                                                <li><a href="{{route('view',['slug'=>$chil->slug])}}">{{$chil->title}}</a></li>
                                                                                @endforeach
                                                                                <li class="nav-divider"></li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            @endforeach
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- .handheld-navigation-menu -->
                                </nav>
                                <!-- .handheld-navigation -->
                                <div class="site-search">
                                    <div class="widget woocommerce widget_product_search">
                                        <form role="search" method="get" class="woocommerce-product-search">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                            <input type="submit" value="Search" />
                                            <input type="hidden" name="post_type" value="product" />
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                </a>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- .techmarket-sticky-wrap -->
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>
            <!-- .header-v4 -->
            <!-- ============================================================= Header End ============================================================= -->
            @yield('content')
            <!-- #content -->
            <footer class="site-footer footer-v1">
                    <div class="col-full">
                        <div class="before-footer-wrap">
                            <div class="col-full">
                                <div class="footer-newsletter">
                                    <div class="media">
                                        <i class="footer-newsletter-icon tm tm-newsletter"></i>
                                        <div class="media-body">
                                            <div class="clearfix">
                                                <div class="newsletter-header">

                                                </div>
                                                <!-- .newsletter-header -->
                                                <div class="newsletter-body">
                                                    <form class="newsletter-form">
                                                        <input type="text" placeholder="Nhập email để nhận tin khuyến mại">
                                                        <button type="submit" class="btn btn-info" type="button">Submit</button>
                                                    </form>
                                                </div>
                                                <!-- .newsletter body -->
                                            </div>
                                            <!-- .clearfix -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .footer-newsletter -->
                                <div class="footer-social-icons">
                                    <ul class="social-icons nav">
                                        <li class="nav-item">
                                            <a class="sm-icon-label-link nav-link" href="#">
                                                <i class="fa fa-facebook"></i> Facebook</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="sm-icon-label-link nav-link" href="#">
                                                    <i class="fa fa-twitter"></i> Twitter</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="sm-icon-label-link nav-link" href="#">
                                                        <i class="fa fa-google-plus"></i> Google+</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="sm-icon-label-link nav-link" href="#">
                                                            <i class="fa fa-vimeo-square"></i> Vimeo</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="sm-icon-label-link nav-link" href="#">
                                                                <i class="fa fa-rss"></i> RSS</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .footer-social-icons -->
                                                </div>
                                                <!-- .col-full -->
                                            </div>
                                            <!-- .before-footer-wrap -->
                                            <div class="footer-widgets-block">
                                                <div class="row">
                                                    <div class="footer-contact">
                       <!--  <div class="footer-logo">
                            <a href="home-v1.html" class="custom-logo-link" rel="home">
                                <span class="logo">
                                    <img src="{{'uploads/logo/Logo-hl.png'}}" alt="">
                                </span>
                            </a>
                        </div> -->
                        <div class="contact-payment-wrap">
                            <div class="footer-contact-info">
                                <div class="media">
                                    <span class="media-left icon media-middle">
                                        <i class="tm tm-call-us-footer"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="call-us-title">Hỗ trợ kỹ thuật</span>
                                        <div class="support">
                                           <ul>
                                               @foreach($supports as $support)
                                               <li>{{$support->username}}</li>
                                               @endforeach
                                           </ul>
                                       </div>
                                        <!-- <address class="footer-contact-address">17 Princess Road, London, Greater London NW1 8JR, UK</address>
                                        <a href="#" class="footer-address-map-link">
                                            <i class="tm tm-map-marker"></i>Find us on map</a> -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .footer-contact-info -->
                                <div class="footer-payment-info">
                                    <div class="media">
                                        <span class="media-left icon media-middle">
                                            <i class="tm tm-safe-payments"></i>
                                        </span>
                                        <div class="media-body">
                                            <h5 class="footer-payment-info-title">Hỗ trợ kinh doanh</h5>
                                            <div class="support">
                                               <ul>
                                                   @foreach($sp as $support)
                                                   <li>{{$support->username}}</li>
                                                   @endforeach
                                               </ul>
                                           </div>
                                           <!-- .footer-payment-icons -->
                                        <!-- <div class="footer-secure-by-info">
                                            <h6 class="footer-secured-by-title">Secured by:</h6>
                                            <ul class="footer-secured-by-icons">
                                                <li class="nav-item">
                                                    <img class="secure-icons-image" src="{{url('public/home')}}/assets/images/secured-by/norton.svg" alt="norton" />
                                                </li>
                                                <li class="nav-item">
                                                    <img class="secure-icons-image" src="{{url('public/home')}}/assets/images/secured-by/mcafee.svg" alt="mcafee" />
                                                </li>
                                            </ul>
                                        </div> -->
                                        <!-- .footer-secure-by-info -->
                                    </div>
                                    <!-- .media-body -->
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .footer-payment-info -->
                        </div>
                        <!-- .contact-payment-wrap -->
                    </div>
                    <!-- .footer-contact -->
                    <div class="footer-widgets">
                        <div class="columns">
                            <aside class="widget widget_nav_menu clearfix">
                                <div class="body">
                                    <h4 class="widget-title">Liên hệ trực tiếp</h4>
                                    <div class="menu-footer-menu-1-container">
                                        <ul id="menu-footer-menu-1" class="menu">
                                            <li class="menu-item">
                                                <a href="shop.html">Telephone: 1900 6536</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Hà Nội: 096 166 8883</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Hồ Chí Minh: 090 367 2286</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu-footer-menu-1-container -->
                                </div>
                                <!-- .body -->
                            </aside>
                            <!-- .widget -->
                        </div>
                        <!-- .columns -->
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0860379292235!2d105.86366231536579!3d20.98918798601982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a306587d5%3A0x2baa745cbbabe5e8!2sHH01+New+Horizon+City!5e0!3m2!1svi!2s!4v1541150670947" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- .columns -->
                    </div>
                    <!-- .footer-widgets -->
                </div>
                <!-- .row -->
            </div>
            <!-- .footer-widgets-block -->
            <div class="site-info">
                <div class="col-full">
                    <div class="copyright">Copyright &copy; 2017 <a href="home-v1.html">Techmarket</a> Theme. All rights reserved.</div>
                    <!-- .copyright -->
                    <div class="credit">Made with
                        <i class="fa fa-heart"></i> by bcube.</div>
                        <!-- .credit -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- .site-info -->
            </div>
            <!-- .col-full -->
        </footer>
            <!-- .site-footer -->
        </div>
        <!-- For demo purposes – can be removed on production -->
        <!-- For demo purposes – can be removed on production : End -->
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/tether.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/hidemaxlistitem.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/hidemaxlistitem.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/scrollup.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/waypoints-sticky.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/pace.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/slick.min.js"></script>
        <script type="text/javascript" src="{{url('public/home')}}/assets/js/scripts.js"></script>
        <script src="{{url('public/js')}}/angular.min.js"></script>
        <script src="{{url('public/js')}}/app-angular.js"></script>
        <script src="{{url('public/js')}}/dirPagination.js"></script>

        <!-- For demo purposes – can be removed on production -->
        <script src="{{url('public/home')}}/switchstylesheet/switchstylesheet.js"></script>
        <!-- For demo purposes – can be removed on production : End -->
    </body>
</html>