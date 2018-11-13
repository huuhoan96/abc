@extends('layouts.home')
@section('content')
<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <nav class="woocommerce-breadcrumb">
                    <a href="route('home')">Trang chủ</a>
                    <span class="delimiter">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    Dự án
                </nav>
                <h3>Dự án và ứng dụng</h3>
                <main id="main" class="site-main">
                <div class="row">
                    @foreach($project as $prj)
                    <div class="col-md-4">
                        <article class="post format-image hentry">
                            <div class="media-attachment">
                                <div class="post-thumbnail">
                                    <a href="{{route('detail_project',['slug'=>$prj->slug])}}">
                                        <img alt="" class="wp-post-image" src="{{url('uploads/news')}}/{{$prj->image_cover}}">
                                    </a>
                                </div>
                            </div>
                            <!-- .media-attachment -->
                            <div class="content-body">
                                <header class="entry-header">
                                    <h1 class="entry-title">
                                        <a rel="bookmark" href="blog-single.html">{{$prj->title}}</a>
                                    </h1>
                                    <!-- .entry-title -->
                                    <div class="entry-meta">
                                        <span class="cat-links">
                                            <!-- <a href="blog-single.html" rel="category tag">Laptops</a> -->
                                        </span>
                                        <span class="posted-on">
                                            <a href="blog-single.html" rel="bookmark">
                                                <time datetime="2017-03-23T08:06:09+00:00" class="entry-date published">{{$prj->created_at}}</time>
                                                <time datetime="2017-06-22T10:40:23+00:00" class="updated">June 22, 2017</time>
                                            </a>
                                        </span>
                                        <span class="author">
                                            <a title="Posts by Jane Smith" href="#" rel="author">Jane Smith</a>
                                        </span>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <!-- <div class="entry-content">
                                    <p>Mô tả abc xyz</p>
                                </div> -->
                                <!-- .post-excerpt -->
<!--                                 <div class="post-readmore">
                                    <a class="btn btn-primary" href="blog-single.html">Chi tiết</a>
                                </div> -->
                                <!-- .post-readmore -->
                                <span class="comments-link">
                                    <!-- <a href="blog-single#comments.html">Leave a comment</a> -->
                                </span>
                                <!-- .comments-link -->
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                    <!-- .post-->
                    <!-- <nav class="navigation pagination" id="post-navigation"> -->
                        <!-- <span class="screen-reader-text">Posts navigation</span> -->
                        <!-- <div class="nav-links">
                            <ul class="page-numbers">
                                <li><a href="#" class="page-numbers current">1</a></li>
                                <li>
                                    <span class="page-numbers">2</span>
                                </li>
                                <li><a href="#" class="next page-numbers">Next</a></li>
                            </ul> -->

                        <!-- </div> -->

                        <!-- .nav-links -->
                    <!-- </nav> -->
                    <div class="paginate-pj pull-right">
                        {{$project->links()}}
                    </div>
                    <!-- .navigation -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <div id="secondary" {{url('public/home')}}/class="sidebar-blog widget-area" role="complementary">
                <div class="widget widget_search" id="search-2">
                    <form action="#" class="search-form" method="get" role="search">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" name="s" value="" placeholder="Search …" class="search-field">
                        </label>
                        <input type="submit" value="Search" class="search-submit">
                    </form>
                    <!-- .search-form -->
                </div>
                <!-- .widget_search -->
<!--                 <div class="widget widget_text" id="text-2">
                    <span class="gamma widget-title">About</span>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</p>
                    </div>

                </div> -->
                <!-- .widget_text -->
                <div class="widget widget_categories" id="categories-2">
                    <span class="gamma widget-title">Tin mới</span>
                    <ul>
                    @foreach($nproject as $project)
                        <li class="cat-item cat-item-53">
                            <a href="product-category.html">{{$project->title}}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <!-- .widget_categories -->
                <div class="widget techmarket_posts_carousel_widget">
                    <section class="section-posts-carousel" id="sidebar-posts-carousel">
                        <header class="section-header">
                            <h2 class="section-title">Recent Posts</h2>
                            <div class="custom-slick-nav"></div>
                            <!-- .custom-slick-nav -->
                        </header>
                        <!-- .post-items -->
                        <div class="post-item-carousel" data-ride="tm-slick-carousel" data-wrap=".posts" data-slick="{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sidebar-posts-carousel .custom-slick-nav&quot;}">
                            <div class="posts">
                                <div class="post-item">
                                    <a href="blog-single.html" class="post-thumbnail">
                                        <div class="post-thumbnail">
                                            <img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="{{url('public/home')}}/assets/images/blog/sm-4.jpg">
                                        </div>
                                    </a>
                                    <!-- .post-thumbnail -->
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-name" tabindex="-1">Why you should choose dedicated Desktop PC Computer</a>
                                        <span class="comments-link">
                                            <a href="#">Leave a comment</a>
                                        </span>
                                    </div>
                                    <!-- .post-content -->
                                </div>
                                <!-- .post-items -->
                                <div class="post-item">
                                    <a href="blog-single.html" class="post-thumbnail">
                                        <div class="post-thumbnail">
                                            <img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="{{url('public/home')}}/assets/images/blog/sm-1.jpg">
                                        </div>
                                    </a>
                                    <!-- .post-thumbnail -->
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-name" tabindex="-1">Tech Terms you should know before your adventure</a>
                                        <span class="comments-link">
                                            <a href="#">Leave a comment</a>
                                        </span>
                                    </div>
                                    <!-- .post-content -->
                                </div>
                                <!-- .post-items -->
                                <div class="post-item">
                                    <a href="blog-single.html" class="post-thumbnail">
                                        <div class="post-thumbnail">
                                            <img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="{{url('public/home')}}/assets/images/blog/sm-2.jpg">
                                        </div>
                                    </a>
                                    <!-- .post-thumbnail -->
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-name" tabindex="-1">How to build your first 4k ready Desktop PC</a>
                                        <span class="comments-link">
                                            <a href="#">Leave a comment</a>
                                        </span>
                                    </div>
                                    <!-- .post-content -->
                                </div>
                                <!-- .post-items -->
                                <div class="post-item">
                                    <a href="blog-single.html" class="post-thumbnail">
                                        <div class="post-thumbnail">
                                            <img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="{{url('public/home')}}/assets/images/blog/sm-3.jpg">
                                        </div>
                                    </a>
                                    <!-- .post-thumbnail -->
                                    <div class="post-content">
                                        <a href="blog-single.html" class="post-name" tabindex="-1">Top 10 Best Graphical Games for testing your Hardware</a>
                                        <span class="comments-link">
                                            <a href="#">Leave a comment</a>
                                        </span>
                                    </div>
                                    <!-- .post-content -->
                                </div>
                                <!-- .post-items -->
                            </div>
                            <!-- .posts-->
                        </div>
                        <!-- .post-item-carousel -->
                    </section>
                    <!-- .section-posts-carousel -->
                </div>
                <!-- .techmarket_posts_carousel_widget -->
<!--                 <div class="widget widget_tag_cloud">
                    <span class="gamma widget-title">Tags Clouds</span>
                    <div class="tagcloud">
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">amazon like</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">Awesome</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">bootstrap</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">buy it</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">clean design</a>
                        <a style="font-size: 8pt;" class="tag-cloud-link" href="#">electronics</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">theme</a>
                        <a style="font-size: 8pt;" class="tag-cloud-link" href="#">video post format</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">woocommerce</a>
                        <a style="font-size: 22pt;" class="tag-cloud-link" href="#">wordpress</a>
                    </div>

                </div> -->
                <!-- .widget_tag_cloud -->
            </div>
            <!-- .sidebar-blog -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
@stop()