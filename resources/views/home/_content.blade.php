@section('slider')
    @include('home._slider')
@show

<!-- İlginizi Çekebilecek İlanlar -->

<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">İlginizi Çekebilecek İlanlar</div>
                        <ul class="clearfix">
                            <li class="active"></li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    <div class="bestsellers_panel panel active">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_1.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note 4</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_2.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Samsung J730F...</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_3.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Nomi Black White</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_4.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Samsung Charm Gold</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item discount">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_5.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Beoplay H7</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                            <!-- Best Sellers Item -->
                            <div class="bestsellers_item">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><img src="{{ asset('assets') }}/images/best_6.png" alt=""></div>
                                    <div class="bestsellers_content">
                                        <div class="bestsellers_category"><a href="#">Headphones</a></div>
                                        <div class="bestsellers_name"><a href="product.html">Huawei MediaPad T3</a></div>
                                        <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="bestsellers_price discount">$225<span>$300</span></div>
                                    </div>
                                </div>
                                <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                <ul class="bestsellers_marks">
                                    <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                    <li class="bestsellers_mark bestsellers_new">new</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Bana Uygun İlanlar -->

<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="row">
                    <div class="col-lg-12" >

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="arrivals_slider slider">

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">BANA UYGUN İLANLAR</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">UZMAN</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">YÖNETİCİ</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">YENİ MEZUN</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">İŞÇİ VE MAVİ YAKA</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Item -->
                                <div class="arrivals_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets') }}/images/new_1.jpg" alt=""></div>
                                        <div class="product_content">
                                            <div class="product_price">225 Adet İlan</div>
                                            <div class="product_name"><div><a href="product.html">HİZMET PERSONELİ</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button">İncele</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
                        <div class="char_title">Bugün Yayınlanan İlanlar</div>
                        <div class="char_subtitle">520 Adet</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-4 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center ">
                    <div class="char_icon"><img src="{{ asset('assets') }}/images/char_2.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Part-time İlanlar</div>
                        <div class="char_subtitle">450 Adet</div>
                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-4 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center ">
                    <div class="char_icon"><img src="{{ asset('assets') }}/images/char_3.png" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Stajyer İlanları</div>
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
