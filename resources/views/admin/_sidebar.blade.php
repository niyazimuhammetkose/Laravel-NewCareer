<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            @auth
                <a href="{{route('admin_user_show',['id'=>Auth::user()->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" class="nav-link">
                    <div class="profile-image">
                        @if(Auth::user()->profile_photo_path)
                            <img class="img-xs rounded-circle" src="{{ \Illuminate\Support\Facades\Storage::url(Auth::user()->profile_photo_path) }}" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        @endif
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::user()->name }}</p>
                        <p class="designation">Admin</p>
                    </div>
                </a>
            @endauth
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_users') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Kullanıcılar</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ilanlar" aria-expanded="false" aria-controls="ilanlar">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">İş İlanları</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ilanlar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_category') }}">Kategoriler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_jobs') }}">İlanlar</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#basvurular" aria-expanded="false" aria-controls="basvurular">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">İş Başvuruları</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="basvurular">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_app') }}">Başvurular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin_cv') }}">Özgeçmişler</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_message') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">İletişim Mesajları</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_faq') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Sıkça Sorulan Sorular</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_setting') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Site Ayarları</span>
            </a>
        </li>
    </ul>
</nav>
