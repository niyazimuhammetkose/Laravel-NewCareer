@extends('layouts.home')

@section('headerjs')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting();
    @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/shop_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/styles/blog_single_responsive.css">
@endsection

@section('title')
    {{$setting->title}} | {{$data->title}}
@endsection

@section('content')

    <div class="shop">
        <div class="container">
            <div class="row">

                <!--
                <div class="col-lg-3">

                    Shop Sidebar
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">
                                <li><a href="#">Computers & Laptops</a></li>
                                <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Smartphones & Tablets</a></li>
                                <li><a href="#">TV & Audio</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Car Electronics</a></li>
                                <li><a href="#">Video Games & Consoles</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle color_subtitle">Color</div>
                            <ul class="colors_list">
                                <li class="color"><a href="#" style="background: #b19c83;"></a></li>
                                <li class="color"><a href="#" style="background: #000000;"></a></li>
                                <li class="color"><a href="#" style="background: #999999;"></a></li>
                                <li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
                                <li class="color"><a href="#" style="background: #df3b3b;"></a></li>
                                <li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
                            </ul>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                <li class="brand"><a href="#">Apple</a></li>
                                <li class="brand"><a href="#">Beoplay</a></li>
                                <li class="brand"><a href="#">Google</a></li>
                                <li class="brand"><a href="#">Meizu</a></li>
                                <li class="brand"><a href="#">OnePlus</a></li>
                                <li class="brand"><a href="#">Samsung</a></li>
                                <li class="brand"><a href="#">Sony</a></li>
                                <li class="brand"><a href="#">Xiaomi</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                -->

                <div class="col-lg-8 offset-2">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{ $count }}</span> ilan bulundu</div>
                            <div class="shop_sorting">
                                <span>Sırala:</span>
                                <ul>
                                    <li>
                                        <span class="sorting_text">Aramanıza uygun ilanlar<i class="fas fa-chevron-down"></i></span>
                                        <ul>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>Aramanıza uygun ilanlar</li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Tarihe göre sıralanmış ilanlar</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Single Blog Post -->

                        <div class="single_post_text">

                            @foreach($datalist as $rs)
                                <div class="single_post_quote text-center">
                                    <div class="quote_text"><h6>{{ $rs->firma_adi }}</h6></div>
                                    <div class="quote_name"><a href="{{route('job',['id' => $rs->id, 'slug' => $rs->slug])}}">{{ $rs->title }}</a></div>
                                    <div class="quote_image"><a>{{ $rs->sehir }}</a></div>
                                </div>

                            @endforeach
                        </div>
                    </div>

                    <!-- Shop Page Navigation -->

                    <div class="shop_page_nav d-flex flex-row">
                        <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                        <ul class="page_nav d-flex flex-row">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">21</a></li>
                        </ul>
                        <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                    </div>

                </div>

            </div>


        </div>
    </div>
    </div>

@endsection
