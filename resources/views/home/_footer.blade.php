<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div class="logo"><a href="{{route('home')}}">NewCareer</a></div>
                    </div>
                    <div class="footer_title">{{ $setting->company }}</div>
                    <div class="footer_phone">{{ $setting->phone }}</div>
                    <div class="footer_contact_text">{{ $setting->address }}</div>
                    <div class="footer_contact_text"><strong>Fax: </strong>{{ $setting->fax }}</div>
                    <div class="footer_contact_text"><strong>Email: </strong>{{ $setting->email }}</div>
                    <div class="footer_social">
                        <ul>
                            @if ($setting->facebook != null )<li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
                            @if ($setting->twitter != null )<li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
                            @if ($setting->instagram != null )<li><a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>@endif
                            @if ($setting->youtube != null )<li><a href="{{ $setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>@endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-2">
                <div class="footer_column">
                    <div class="footer_title">Hızlı Erişim</div>
                    <ul class="footer_list">
                        <li><a href="{{route('home')}}">Anasayfa</a></li>
                        <li><a href="{{ route('aboutus') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('references') }}">Referanslarımız</a></li>
                        <li><a href="{{ route('contact') }}">İletişim</a></li>
                        <li><a href="{{ route('faq') }}">SSS</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="footer_column">
                    @auth
                        <div class="footer_title">{{ Auth::user()->name }}</div>
                        <ul class="footer_list">
                            <li><a href="{{ route('myprofile') }}">Hesabım</a></li>
                            <li><a href="{{ route('home') }}">CV</a></li>
                            <li><a href="{{ route('home') }}">Başvurularım</a></li>
                            <li><a href="{{ route('user_jobs') }}">Paylaştığım İlanlarım</a></li>
                            <li><a href="/logout">Çıkış Yap</a></li>
                        </ul>
                    @endauth
                    @guest
                        <div class="footer_title">Müşteri Hizmetleri</div>
                        <ul class="footer_list">
                            <li><a href="/register">Kayıt Ol</a></li>
                            <li><a href="/login">Giriş Yap</a></li>
                        </ul>
                    @endguest
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{ $setting->company }}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="logos ml-sm-auto">
                        <ul class="logos_list">
                            <li><a href="/"><img src="{{ asset('assets') }}/images/logos_1.png" alt=""></a></li>
                            <li><a href="/"><img src="{{ asset('assets') }}/images/logos_2.png" alt=""></a></li>
                            <li><a href="/"><img src="{{ asset('assets') }}/images/logos_3.png" alt=""></a></li>
                            <li><a href="/"><img src="{{ asset('assets') }}/images/logos_4.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


