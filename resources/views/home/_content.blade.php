@section('slider')
    @include('home._slider')
@show

<!-- İlginizi Çekebilecek İlanlar -->

<div class="trends">
    <div class="trends_background" style="background-image:url({{ asset('assets') }}/images/trends_background.jpg)"></div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title">İlginizi Çekebilecek İlanlar</h2>
                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->

                    <div class="owl-carousel owl-theme trends_slider">

                    @foreach($picked as $rs)
                        <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item">
                                    <div class="image_list">
                                        @if($rs->image)
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="100" alt="">
                                        @endif
                                    </div>
                                    <div class="trends_content">
                                        <div class="trends_category"><a>{{ $rs->firma_adi }}</a></div>
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="{{route('job',['id' => $rs->id, 'slug' => $rs->slug])}}">{{ $rs->title }}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bana Uygun İlanlar -->

<div class="trends">
    <div class="container">

        <div class="row">

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    @auth
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">BANA UYGUN İLANLAR</a></div>
                            <div class="trends_text">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="">
                            </div>
                        </div>
                    @endauth
                    @guest
                            <div class="advert_content">
                                <div class="advert_title"><a href="#">BANA UYGUN İLANLAR</a></div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image">
                                    <img src="{{ asset('assets') }}/images/adv_3.png" alt="">
                                </div>
                            </div>
                    @endguest
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">UZMAN</a></div>
                        <div class="trends_text">350 İş İlanı</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image">
                            <img src="{{ asset('assets') }}/images/uzman.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">YÖNETİCİ</a></div>
                        <div class="trends_text">350 İş İlanı</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image">
                            <img src="{{ asset('assets') }}/images/yonetici.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">YENİ MEZUN</a></div>
                        <div class="trends_text">350 İş İlanı</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image">
                            <img src="{{ asset('assets') }}/images/mezun.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">İŞÇİ VE MAVİ YAKA</a></div>
                        <div class="trends_text">350 İş İlanı</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image">
                            <img src="{{ asset('assets') }}/images/isci.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 advert_col">

                <!-- Advert Item -->

                <div class="advert d-flex flex-row align-items-center justify-content-start">
                    <div class="advert_content">
                        <div class="advert_title"><a href="#">HİZMET PERSONELİ</a></div>
                        <div class="trends_text">350 İş İlanı</div>
                    </div>
                    <div class="ml-auto">
                        <div class="advert_image">
                            <img src="{{ asset('assets') }}/images/hizmet_personeli.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Bugün Yayınlanan/Part-time/Staj -->

<div class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-4 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center ">
                    <div class="char_icon"><img src="{{ asset('assets') }}/images/char_1.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title"><a href="#">Bugün Yayınlanan İlanlar</a></div>
                        <div class="char_subtitle">520 Adet</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-4 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center ">
                    <div class="char_icon"><img src="{{ asset('assets') }}/images/char_2.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title"><a href="#">Part-time İlanlar</a></div>
                        <div class="char_subtitle">450 Adet</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-4 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center ">
                    <div class="char_icon"><img src="{{ asset('assets') }}/images/char_3.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title"><a href="#">Stajyer İlanları</a></div>
                        <div class="char_subtitle">200 Adet</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@section('category')
    @include('home._category')
@show

<!-- Sektöre Göre/Departmana Göre/İllere Göre(İçerik Değişecek) -->

<div class="popular_categories">
    <div class="container">
        <div class="row col-lg-12">
            <div class="col-lg-4">
                <div class="popular_categories_content">
                    <div class="footer_title">Sektöre Göre İlanlar</div>
                    <div>
                        <ul>
                            <li>Satış</li>
                            <li>Sağlık</li>
                            <li>Tekstil</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="popular_categories_content">
                    <div class="footer_title">Departmanlara Göre İlanlar</div>
                    <div>
                        <ul>
                            <li>Satış</li>
                            <li>Sağlık</li>
                            <li>Tekstil</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="popular_categories_content">
                    <div class="footer_title">İllere Göre İlanlar</div>
                    <div>
                        <ul>
                            <li>Satış</li>
                            <li>Sağlık</li>
                            <li>Tekstil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kullanıcı Yorumları -->

<div class="reviews">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Memnun Kullanıcılarımız</h3>
                    <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                </div>

                <div class="reviews_slider_container">

                    <!-- Reviews Slider -->
                    <div class="owl-carousel owl-theme reviews_slider">

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_1.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_2.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_3.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_1.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Roberto Sanchez</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_2.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Brandon Flowers</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Slider Item -->
                        <div class="owl-item">
                            <div class="review d-flex flex-row align-items-start justify-content-start">
                                <div><div class="review_image"><img src="{{ asset('assets') }}/images/review_3.jpg" alt=""></div></div>
                                <div class="review_content">
                                    <div class="review_name">Emilia Clarke</div>
                                    <div class="review_rating_container">
                                        <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="review_time">2 day ago</div>
                                    </div>
                                    <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="reviews_dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>
