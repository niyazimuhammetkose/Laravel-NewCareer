<!-- Öne Çıkan İş İlanları -->

<div class="viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title">Öne Çıkan İş İlanları</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme viewed_slider">

                        @foreach($sliderdata as $rs)
                        <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="image_list">
                                        @if($rs->image)
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="50"  alt="">
                                        @endif
                                    </div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">{{ $rs->firma_adi }}</div>
                                        <div class="viewed_name"><a href="{{route('job',['id' => $rs->id, 'slug' => $rs->slug])}}">{{ $rs->title }}</a></div>
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
