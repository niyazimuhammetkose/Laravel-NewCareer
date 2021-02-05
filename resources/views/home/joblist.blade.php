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
    {{$setting->title}} | İş İlanları
@endsection

@section('content')

    <div class="shop">
        <div class="container">
            <div class="row">

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
