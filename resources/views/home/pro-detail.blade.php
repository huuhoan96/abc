<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Techmarket HTML</title>
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
    <link rel="stylesheet" type="text/css" href="{{url('public/css')}}/mystyle.css" media="all" />
    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="{{url('public/home')}}/assets/css/config.css">
    <link rel="stylesheet" href="{{url('public')}}/css/mystyle.css">
    <!-- Demo Purpose Only. Should be removed in production : END -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('uploads/logo')}}/Logo-hl.png">
</head>
<body class="woocommerce-active single-product full-width normal">
    <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v4">
            <div class="col-full">
                <ul id="menu-top-bar-left" class="nav justify-content-center">
                    <li class="menu-item animate-dropdown text-left">
                        <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">Công ty cổ phẩn công nghệ hợp long &#8211; Hoplongtech Automation</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Quality Guarantee of products" href="shop.html">Ưu đãi dành cho đối tác &#8211; Bán hàng cùng hoplongtech</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Fast returnings program" href="track-your-order.html">Khuyến mại hot</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="No additional fees" href="contact-v2.html"><i class="tm tm-order-tracking"></i>Miễn phí vận chuyển</a>
                    </li>
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .top-bar-v1 -->
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
                                        <a title="Logitech Sale" href="product-category.html">Liên hệ</a>
                                    </li>
                                    <li class="techmarket-flex-more-menu-item dropdown" style="display: none;">
                                        <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                        <ul class="overflow-items dropdown-menu"></ul>
                                        <!-- . -->
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
                                            <span class="search-btn fa fa-search">  Tìm kiếm</span>
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
                                                                <img src="assets/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                            </a>
                                                            <span class="quantity">1 ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                            </span>
                                                        </li>
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="assets/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
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
                                <a href="home-v1.html" class="custom-logo-link" rel="home">
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
<!-- .header-v1 -->
<!-- ============================================================= Header End ============================================================= -->
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="home-v1.html">Home</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span><a href="product-category.html">{{$product->category->title}}</a>
                <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>{{$product->title}}
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="product product-type-simple">
                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper thumb-count-4">
                                <span class="onsale">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">- </span>30%</span>
                                    </span>
                                    <!-- .onsale -->
                                    <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                        <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                <figure class="woocommerce-product-gallery__wrapper ">
                                                    <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
                                                        <a href="{{url('public/home')}}/assets/images/products/big-card.jpg" tabindex="0">
                                                            <img width="600" height="600" src="{{url('uploads/product')}}/bien-tan-schneider-atv320u55n4b-55kw-380v.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-3.jpg" class="woocommerce-product-gallery__image">
                                                        <a href="{{url('public/home')}}/assets/images/products/big-card-2.jpg" tabindex="-1">
                                                            <img width="600" height="600" src="{{url('uploads/product')}}/ATV610C16N4.png" class="attachment-shop_single size-shop_single" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
                                                        <a href="{{url('public/home')}}/assets/images/products/big-card-1.jpg" tabindex="-1">
                                                            <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{url('public/home')}}/assets/images/products/deals-sm-5.jpg" class="woocommerce-product-gallery__image">
                                                        <a href="{{url('public/home')}}/assets/images/products/big-4.jpg" tabindex="-1">
                                                            <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt=""> </a>
                                                        </div>
                                                        <div data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
                                                            <a href="{{url('public/home')}}/assets/images/products/big-card-2.jpg" tabindex="-1">
                                                                <img width="600" height="600" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_single size-shop_single" alt="">
                                                            </a>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <!-- .woocommerce-product-gallery -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery-images -->
                                            <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                                <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                    <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-1.jpg" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{url('uploads/product')}}/bien-tan-schneider-atv320u55n4b-55kw-380v.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                    </figure>
                                                    <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-3.jpg" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{url('uploads/product')}}/ATV610C16N4.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                    </figure>
                                                    <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                    </figure>
                                                    <figure data-thumb="{{url('public/home')}}/assets/images/products/big-4.jpg" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                    </figure>
                                                    <figure data-thumb="{{url('public/home')}}/assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
                                                        <img width="180" height="180" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                    </figure>
                                                </figure>
                                                <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery-thumbnails -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery -->
                                    </div>
                                    <!-- .product-images-wrapper -->
                                    <div class="summary entry-summary">
                                        <div class="single-product-header">
                                            <h1 class="product_title entry-title">{{$product->title}}</h1>
                                            @if(Session::has('success'))
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <strong>{{Session::get('success')}}</strong>
                                                </div>
                                            @endif
                                            <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                        </div>
                                        <!-- .single-product-header -->
                                        <div class="single-product-meta">
                                            <!-- <div class="brand"> -->
<!--                                                 <a href="#">
                                                    <img alt="galaxy" src="{{url('public/home')}}/assets/images/brands/5.png">
                                                </a> -->
                                                <!-- </div> -->
                                                <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="product-category.html">Danh mục: {{$product->category->title}}</a>
                                                    </span>
                                                    <span class="sku_wrapper">Mã sản phẩm:
                                                        <span class="sku">{{$product->product_code}}</span>
                                                    </span>
                                                </div>
                                                <div class="product-label">
                                                    <div class="additional-info">
                                                        <i class="tm tm-free-delivery"></i>Miễn phí 
                                                        <strong>vận chuyển</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .single-product-meta -->
                                            <div class="rating-and-sharing-wrapper">
                                                <div class="woocommerce-product-rating">
                                                    <div class="star-rating">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on
                                                            <span class="rating">1</span> customer rating</span>
                                                        </div>
                                                        <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                                    </div>
                                                </div>
                                                <!-- .rating-and-sharing-wrapper -->
                                                <div class="woocommerce-product-details__short-description">
                                                    <ul>
                                                        <li>Multimedia Speakers</li>
                                                        <li>120 watts peak</li>
                                                        <li>Front-facing subwoofer</li>
                                                        <li>Refresh Rate: 120Hz (Effective)</li>
                                                        <li>Backlight: LED</li>
                                                        <li>Smart Functionality: Yes, webOS 3.0</li>
                                                        <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                                        <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                                    </ul>
                                                    <!-- {{$product->specifications}} -->
                                                </div>
                                                <!-- .woocommerce-product-details__short-description -->
                                                <div class="product-actions-wrapper">
                                                    <div class="product-actions">
                                                        <p class="price">
                                                            <del>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                </del>
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>
                                                                    </ins>
                                                                </p>
                                                                <!-- .single-product-header -->
                                                                <div class="modal fade" id="modal-id">
                                                                    <div class="modal-dialog  modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <h4 class="modal-title"><span style="color: red">Tổng đài hỗ trợ: 1900.6536</span></h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="{{route('send_mail')}}" method="POST" role="form">
                                                                                    <legend>Nhập thông tin để nhận báo giá</legend>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label" for="">Họ tên :*</label>
                                                                                        <input type="text" name="name" class="form-control" id="" required placeholder="Nhập họ tên">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label" for="">Email :</label>
                                                                                        <input type="email" name="email" class="form-control" id="" required placeholder="Nhập email">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                     <!--                                                                    <label class="control-label" for="">Sản phẩm:</label> -->
                                                                                     <input type="hidden" name="product_id" class="form-control" id="" value="{{$product->id}}">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                     <!--                                                                    <label class="control-label" for="">Sản phẩm:</label> -->
                                                                                     <input type="hidden" name="product" class="form-control" id="" value="{{$product->title}}">
                                                                                 </div>
                                                                                 <div class="form-group">
                                                                                    <label class="control-label" for="">Số điện thoại :*</label>
                                                                                    <input type="number" name="phone" class="form-control" id="" required placeholder="Nhập số điện thoại">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label" for="">Nội dung :</label>
                                                                                    <textarea name="content" rows=8 placeholder="Nội dung.."></textarea>
                                                                                </div>
                                                                                @csrf
                                                                                <div class="form-group text-right">
                                                                                    <button type="submit" class="btn btn-primary">Gửi</button>  
                                                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form enctype="multipart/form-data" method="post" class="cart">
                                                                <a class="single_add_to_cart_button button alt bgbtn" data-toggle="modal" href='#modal-id'>Yêu cầu báo giá</a>
                                                                <button class="single_add_to_cart_button button" value="185" name="add-to-cart" type="button">Hotline đặt hàng: 1900.6536</button>
                                                            </form>
                                                            <!-- .cart -->
                                                            <!--  <a class="add-to-compare-link" href="compare.html">Add to compare</a> -->
                                                        </div>
                                                        <!-- .product-actions -->
                                                    </div>
                                                    <!-- .product-actions-wrapper -->
                                                </div>
                                                <!-- .entry-summary -->
                                            </div>
                                            <!-- .single-product-wrapper -->
    
                                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                                <ul role="tablist" class="nav tabs wc-tabs">
                                                    <li class="nav-item accessories_tab">
                                                        <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-accessories" href="#tab-accessories">Ảnh thực tế</a>
                                                    </li>
                                                    <li class="nav-item description_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Tổng quan</a>
                                                    </li>
                                                    <li class="nav-item specification_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">Thông số kỹ thuật</a>
                                                    </li>
                                                    <li class="nav-item reviews_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews" href="#tab-reviews">Đánh giá (1)</a>
                                                    </li>
                                                </ul>
                                                <!-- /.ec-tabs -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-accessories" role="tabpanel">
                                                        <div class="accessories">
                                                            <div class="accessories-wrapper">
                                                                <div class="accessories-product columns-5">
                                                                    <div class="products">
                                                                        <div class="product">
                                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                                <span class="price">
                                                                                    <del>
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                                        </del>
                                                                                        <ins>
                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                                            </ins>
                                                                                        </span>
                                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                                    </a>
                                                                                    <div class="checkbox accessory-checkbox">
                                                                                        <label>
                                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product">
                                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                                        <span class="price">
                                                                                            <del>
                                                                                                <span class="woocommerce-Price-amount amount">
                                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                                                </del>
                                                                                                <ins>
                                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                                        <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                                                    </ins>
                                                                                                </span>
                                                                                                <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                                            </a>
                                                                                            <div class="checkbox accessory-checkbox">
                                                                                                <label>
                                                                                                    <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product">
                                                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                                                <span class="price">
                                                                                                    <del>
                                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                                            <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                                                        </del>
                                                                                                        <ins>
                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                                                            </ins>
                                                                                                        </span>
                                                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                                                    </a>
                                                                                                    <div class="checkbox accessory-checkbox">
                                                                                                        <label>
                                                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="product">
                                                                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                                                        <span class="price">
                                                                                                            <del>
                                                                                                                <span class="woocommerce-Price-amount amount">
                                                                                                                    <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                                                                </del>
                                                                                                                <ins>
                                                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                                                        <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                                                                    </ins>
                                                                                                                </span>
                                                                                                                <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                                                            </a>
                                                                                                            <div class="checkbox accessory-checkbox">
                                                                                                                <label>
                                                                                                                    <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="product">
                                                                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                                                                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('uploads/product')}}/preobrazovatel-chastoty-schneider-electric-altivar-312-atv312-11kvt-380v-3f-atv312hd11n4.jpg">
                                                                                                                <span class="price">
                                                                                                                    <del>
                                                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                                                            <!-- <span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span> -->
                                                                                                                        </del>
                                                                                                                        <ins>
                                                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                                                <!-- <span class="woocommerce-Price-currencySymbol">$</span>997.00</span> -->
                                                                                                                            </ins>
                                                                                                                        </span>
                                                                                                                        <!-- <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> -->
                                                                                                                    </a>
                                                                                                                    <div class="checkbox accessory-checkbox">
                                                                                                                        <label>
                                                                                                                            <!-- <input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove -->
                                                                                                                        </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!-- /.products -->
                                                                                                        </div>
                                                                                                        <!-- .row -->

                                                                                                        <!-- .accessories-product-total-price -->
                                                                                                    </div>
                                                                                                    <!-- .accessories-wrapper -->
                                                                                                </div>
                                                                                                <!-- .accessories -->
                                                                                            </div>
                                                                                            <div class="tab-pane panel wc-tab" id="tab-description" role="tabpanel">
                                                                                                <h2>Description</h2>
                                                                                                <h1 style="text-align: center;">Exceptional color. Authentic images.</h1>
                                                                                                <p style="text-align: center;max-width: 1160px;margin: auto auto 60px;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                                                                <div style="text-align: center;">
                                                                                                    <iframe width="854" height="480" allowfullscreen="allowfullscreen" src="embed/K5OGs8a3vlM?ecver=1"></iframe>
                                                                                                </div>
                                                                                                <div class="outer-wrap">
                                                                                                    <div class="content-info">
                                                                                                        <h1 style="text-align: left;">Dynamic brightness
                                                                                                            <br> reveals hidden details</h1>
                                                                                                            <p style="text-align: left;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus
                                                                                                                <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit.
                                                                                                                <br> Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                                                                            </div>
                                                                                                            <!-- .content-info -->
                                                                                                            <div class="image-info">
                                                                                                                <img src="{{url('public/home')}}/assets/images/products/des1.png" alt="">
                                                                                                            </div>
                                                                                                            <!-- .image-info -->
                                                                                                        </div>
                                                                                                        <!-- .outer-wrap -->
                                                                                                        <div class="outer-wrap">
                                                                                                            <div class="image-info">
                                                                                                                <img src="{{url('public/home')}}/assets/images/products/des2.png" class="alignnone" alt="">
                                                                                                            </div>
                                                                                                            <!-- .image-info -->
                                                                                                            <div class="content-info">
                                                                                                                <h1 style="text-align: right;">An incredible view,
                                                                                                                    <br> wherever you sit</h1>
                                                                                                                    <p style="text-align: right;">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus
                                                                                                                        <br> scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                                                                                    </div>
                                                                                                                    <!-- .content-info -->
                                                                                                                </div>
                                                                                                                <!-- .outer-wrap -->
                                                                                                            </div>
                                                                                                            <div class="tab-pane" id="tab-specification" role="tabpanel">
                                                                                                                <div class="tm-shop-attributes-detail like-column columns-3">
                                                                                                                    <h3 class="tm-attributes-title">General</h3>
                                                                                                                    <table class="shop_attributes">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <th>Brand</th>
                                                                                                                                <td>
                                                                                                                                    <p><a href="#" rel="tag">Galaxy</a></p>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Label</th>
                                                                                                                                <td>
                                                                                                                                    <p><a href="#" rel="tag">A+</a></p>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!-- /.shop_attributes -->
                                                                                                                    <h3 class="tm-attributes-title">Technical Specs</h3>
                                                                                                                    <table class="shop_attributes">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <th>Screen Size</th>
                                                                                                                                <td>40″</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Aspect Ratio</th>
                                                                                                                                <td>16:9</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>3DTV</th>
                                                                                                                                <td>No</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Recommended Resolution</th>
                                                                                                                                <td>1080p</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Panel</th>
                                                                                                                                <td>LED</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Tuner</th>
                                                                                                                                <td>ATSC/Clear QAM Tuners</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Refresh Rate</th>
                                                                                                                                <td>120Hz</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Refresh Rate</th>
                                                                                                                                <td>120Hz</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!-- /.shop_attributes -->
                                                                                                                    <h3 class="tm-attributes-title">Connectivity</h3>
                                                                                                                    <table class="shop_attributes">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <th>HDMI</th>
                                                                                                                                <td>2 In</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Digital Audio</th>
                                                                                                                                <td>1 Optical Out</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Other Connectors</th>
                                                                                                                                <td>1 x RF In</td>
                                                                                                                                <td>1 x Audio Out (Mini Jack)</td>
                                                                                                                                <td>1 x RS232C</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>LAN</th>
                                                                                                                                <td>1</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Composite A/V</th>
                                                                                                                                <td>1 In</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>USB</th>
                                                                                                                                <td>2</td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <th>Component Video</th>
                                                                                                                                <td>1 in
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!-- /.shop_attributes -->
                                                                                                                </div>
                                                                                                                <!-- /.tm-shop-attributes-detail -->
                                                                                                            </div>
                                                                                                            <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                                                                                                <div class="techmarket-advanced-reviews" id="reviews">
                                                                                                                    <div class="advanced-review row">
                                                                                                                        <div class="advanced-review-rating">
                                                                                                                            <h2 class="based-title">Review (1)</h2>
                                                                                                                            <div class="avg-rating">
                                                                                                                                <span class="avg-rating-number">5.0</span>
                                                                                                                                <div title="Rated 5.0 out of 5" class="star-rating">
                                                                                                                                    <span style="width:100%"></span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!-- /.avg-rating -->
                                                                                                                            <div class="rating-histogram">
                                                                                                                                <div class="rating-bar">
                                                                                                                                    <div title="Rated 5 out of 5" class="star-rating">
                                                                                                                                        <span style="width:100%"></span>
                                                                                                                                    </div>
                                                                                                                                    <div class="rating-count">1</div>
                                                                                                                                    <div class="rating-percentage-bar">
                                                                                                                                        <span class="rating-percentage" style="width:100%"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="rating-bar">
                                                                                                                                    <div title="Rated 4 out of 5" class="star-rating">
                                                                                                                                        <span style="width:80%"></span>
                                                                                                                                    </div>
                                                                                                                                    <div class="rating-count zero">0</div>
                                                                                                                                    <div class="rating-percentage-bar">
                                                                                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="rating-bar">
                                                                                                                                    <div title="Rated 3 out of 5" class="star-rating">
                                                                                                                                        <span style="width:60%"></span>
                                                                                                                                    </div>
                                                                                                                                    <div class="rating-count zero">0</div>
                                                                                                                                    <div class="rating-percentage-bar">
                                                                                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="rating-bar">
                                                                                                                                    <div title="Rated 2 out of 5" class="star-rating">
                                                                                                                                        <span style="width:40%"></span>
                                                                                                                                    </div>
                                                                                                                                    <div class="rating-count zero">0</div>
                                                                                                                                    <div class="rating-percentage-bar">
                                                                                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="rating-bar">
                                                                                                                                    <div title="Rated 1 out of 5" class="star-rating">
                                                                                                                                        <span style="width:20%"></span>
                                                                                                                                    </div>
                                                                                                                                    <div class="rating-count zero">0</div>
                                                                                                                                    <div class="rating-percentage-bar">
                                                                                                                                        <span class="rating-percentage" style="width:0%"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <!-- /.rating-histogram -->
                                                                                                                        </div>
                                                                                                                        <!-- /.advanced-review-rating -->
                                                                                                                        <div class="advanced-review-comment">
                                                                                                                            <div id="review_form_wrapper">
                                                                                                                                <div id="review_form">
                                                                                                                                    <div class="comment-respond" id="respond">
                                                                                                                                        <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                                                                                                        <form novalidate="" class="comment-form" id="commentform" method="post" action="{{route('comment')}}">
                                                                                                                                            <div class="comment-form-rating">
                                                                                                                                                <label>Your Rating</label>
                                                                                                                                                <p class="stars">
                                                                                                                                                    <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                            <p class="comment-form-comment">
                                                                                                                                                <label for="comment">Your Review</label>
                                                                                                                                                <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                                                                                            </p>
                                                                                                                                            <p class="comment-form-author">
                                                                                                                                                <label for="author">Name
                                                                                                                                                    <span class="required">*</span>
                                                                                                                                                </label>
                                                                                                                                                <input type="text" aria-required="true" size="30" value="" name="name" id="author" required>
                                                                                                                                            </p>
                                                                                                                                            <p class="comment-form-email">
                                                                                                                                                <label for="email">Email
                                                                                                                                                    <span class="required">*</span>
                                                                                                                                                </label>
                                                                                                                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" required>
                                                                                                                                            </p>
                                                                                                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                                                                                            @csrf
                                                                                                                                            <p class="form-submit">
                                                                                                                                                <input type="submit" class="submit" id="submit">
                                                                                                                                                <!-- <input type="hidden" id="comment_post_ID" value="185" name="comment_post_ID"> -->
                                                                                                                                                <!-- <input type="hidden" value="0" id="comment_parent" name="comment_parent"> -->
                                                                                                                                            </p>
                                                                                                                                        </form>
                                                                                                                                        <!-- /.comment-form -->
                                                                                                                                    </div>
                                                                                                                                    <!-- /.comment-respond -->
                                                                                                                                </div>
                                                                                                                                <!-- /#review_form -->
                                                                                                                            </div>
                                                                                                                            <!-- /#review_form_wrapper -->
                                                                                                                        </div>
                                                                                                                        <!-- /.advanced-review-comment -->
                                                                                                                    </div>
                                                                                                                    <!-- /.advanced-review -->
                                                                                                                    <div id="comments">
                                                                                                                        <ol class="commentlist">
                                                                                                                            <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                                                                                                <div class="comment_container" id="comment-83">
                                                                                                                                    <div class="comment-text">
                                                                                                                                        <div class="star-rating">
                                                                                                                                            <span style="width:100%">Rated
                                                                                                                                                <strong class="rating">5</strong> out of 5</span>
                                                                                                                                            </div>
                                                                                                                                            <p class="meta">
                                                                                                                                                <strong itemprop="author" class="woocommerce-review__author">first last</strong>
                                                                                                                                                <span class="woocommerce-review__dash">&ndash;</span>
                                                                                                                                                <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date">June 21, 2017</time>
                                                                                                                                            </p>
                                                                                                                                            <div class="description">
                                                                                                                                                <p>Wow great product</p>
                                                                                                                                            </div>
                                                                                                                                            <!-- /.description -->
                                                                                                                                        </div>
                                                                                                                                        <!-- /.comment-text -->
                                                                                                                                    </div>
                                                                                                                                    <!-- /.comment_container -->
                                                                                                                                </li>
                                                                                                                                <!-- /.comment -->
                                                                                                                            </ol>
                                                                                                                            <!-- /.commentlist -->
                                                                                                                        </div>
                                                                                                                        <!-- /#comments -->
                                                                                                                    </div>
                                                                                                                    <!-- /.techmarket-advanced-reviews -->
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                    <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
<!--                                         <header class="section-header">
                                            <h2 class="section-title">Sản phẩm khác</h2>
                                            <nav class="custom-slick-nav"></nav>
                                        </header> -->
                                        <!-- <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($new_products as $pro)
                                                        <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="{{route('view',['slug'=>$pro->slug])}}">
                                                                <div class="media">
                                                                    <img class="wp-post-image" src="{{url('uploads/product')}}/admin123.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <span class="price"> -->
                                                                            <!-- <ins>
                                                                                <span class="amount"> </span>
                                                                            </ins>
                                                                            <span class="amount"> $600</span> -->
                                                                        <!-- </span> -->
                                                                        <!-- .price -->
                                                                        <!-- <h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                                <span style="width:0%">
                                                                                    <strong class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div> -->
                                                                            <!-- .techmarket-product-rating -->
                                                                        <!-- </div> -->
                                                                        <!-- .media-body -->
                                                                    <!-- </div> -->
                                                                    <!-- .media -->
                                                                <!-- </a> -->
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                            <!-- </div> -->
                                                            <!-- @endforeach -->
                                                            <!-- .landscape-product -->

                                                        <!-- </div> -->
                                                    <!-- </div> -->
                                                    <!-- .woocommerce -->
                                                <!-- </div> -->
                                                <!-- .container-fluid -->
                                            <!-- </div> -->
                                            <!-- .products-carousel -->
                                            <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                                <section class="related">
                                                    <header class="section-header">
                                                        <h2 class="section-title">Sản phẩm cùng loại</h2>
                                                        <nav class="custom-slick-nav"></nav>
                                                    </header>
                                                    <!-- .section-header -->
                                                    <div class="products">
                                                        @foreach($others as $other)
                                                        <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                                                <img src="{{url('uploads/product')}}/4271093_orig.jpg" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"> 456.00</span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">{{$other->title}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$other->slug])}}" rel="nofollow">Xem chi tiết</a>

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- /.product-outer -->
                                                    </div>
                                                </section>
                                                <!-- .single-product-wrapper -->
                                            </div>
                                            <!-- .tm-related-products-carousel -->
                                        </section>
                                        <!-- .section-landscape-products-carousel -->
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
                                    <!-- .product -->
                                </main>
                                <!-- #main -->
                            </div>
                            <!-- #primary -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-full -->
                </div>
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
        <!-- For demo purposes – can be removed on production -->
        <script src="{{url('public/home')}}/switchstylesheet/switchstylesheet.js"></script>
        <!-- For demo purposes – can be removed on production : End -->
    </body>
    </html>