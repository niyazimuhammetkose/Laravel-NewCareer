<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            @auth
                <a href="#" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ asset('assets') }}/admin/assets/images/faces/face8.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::user()->name }}</p>
                        <p class="designation">Admin</p>
                    </div>
                </a>
                <a href="{{ route('logout') }}" class="nav-link">
                    <div class="text-wrapper">
                        <p class="designation">Çıkış Yap</p>
                    </div>
                </a>
            @endauth
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_category') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Kategoriler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_jobs') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">İş İlanları</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_message') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">İletişim Mesajları</span>
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
