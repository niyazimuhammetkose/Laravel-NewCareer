<!-- Shop Sidebar -->
<div class="shop_sidebar">
    <div class="sidebar_section">
        <div class="sidebar_title">Hesabım</div>
        <hr>
        <ul class="sidebar_categories">
            <li><a href="{{ route('user_cv') }}">Özgeçmişlerim</a></li>
            <li><a href="#">Başvurularım</a></li>
            <li><a href="{{ route('user_jobs') }}">Paylaştığım İlanlarım</a></li>
            <li><a href="#">Yorumlarım</a></li>
            <li><a href="{{route('logout')}}">Çıkış Yap</a></li>
        </ul>
    </div>
</div>
