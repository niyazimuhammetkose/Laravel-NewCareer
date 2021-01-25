<!-- Header -->

<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon">
                            <img src="{{ asset('assets') }}/images/phone.png" alt="">
                        </div>
                        {{ $setting->phone }}
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon">
                            <img src="{{ asset('assets') }}/images/mail.png" alt="">
                        </div>
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                    </div>
                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_menu">
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li>
                                    <a href="{{ route('home') }}">Türkçe<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('home') }}">English</a></li>
                                        <li><a href="{{ route('home') }}">Italian</a></li>
                                        <li><a href="{{ route('home') }}">Spanish</a></li>
                                        <li><a href="{{ route('home') }}">Japanese</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="top_bar_user">
                            <div class="user_icon"><img src="{{ asset('assets') }}/images/user.svg" alt=""></div>
                            @auth
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <strong >{{ Auth::user()->name }}</strong>
                                            <ul>
                                                <li><a href="{{ route('myprofile') }}">Hesabım</a></li>
                                                <li><a href="{{ route('user_cv') }}">Özgeçmişlerim</a></li>
                                                <li><a href="{{ route('user_apps') }}">Başvurularım</a></li>
                                                <li><a href="{{ route('user_jobs') }}">Paylaştığım İlanlarım</a></li>
                                                <li><a href="/logout">Çıkış Yap</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @endauth
                            @guest
                                <div><a href="/register">Kayıt Ol</a></div>
                                <div><a href="/login">Giriş Yap</a></div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo"><a href="{{route('home')}}">NewCareer</a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="{{ route('getjobs') }}" class="header_search_form clearfix" method="post">
                                    @csrf
                                    @livewire('search')

                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">Şehir<i class="fas fa-chevron-down"></i></span>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">Tüm Şehirler</a></li>
                                                <li><a class="clc" href="#">İstanbul</a></li>
                                                <li><a class="clc" href="#">Ankara</a></li>
                                                <li><a class="clc" href="#">İzmir</a></li>
                                                <li><a class="clc" href="#">Karabük</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300"><img src="{{ asset('assets') }}/images/search.png" alt=""></button>
                                </form>
                                @livewireScripts
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="{{route('home')}}">Anasayfa</a></li>
                                <li><a href="{{ route('aboutus') }}">Hakkımızda</a></li>
                                <li><a href="{{ route('references') }}">Referanslarımız</a></li>
                                <li><a href="{{ route('contact') }}">İletişim</a></li>
                                <li><a href="{{ route('faq') }}">SSS</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>

