<!-- Shop Sidebar -->
<div class="shop_sidebar">
    <div class="sidebar_section">
        <div class="sidebar_title">Profilim</div>
        <hr>
        @auth
        <ul class="sidebar_categories">
            <li><a href="{{ route('myprofile') }}">Hesabım</a></li>
            <li><a href="{{ route('user_cv') }}">Özgeçmişlerim</a></li>
            <li><a href="{{ route('user_apps') }}">Başvurularım</a></li>
            <li><a href="{{ route('user_jobs') }}">Paylaştığım İlanlarım</a></li>
            <li><a href="{{route('logout')}}">Çıkış Yap</a></li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}">Admin Panel</a></li>
            @endif
        </ul>
        @endauth
    </div>
</div>
