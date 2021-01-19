@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist();
@endphp

<!-- Kategorilerine Göre İlanlar (İçerik Değişecek) -->

<div class="container">
    <span class="footer_title">Kategorilerine Göre İlanlar</span>
    <ul>
        @foreach($parentCategories as $rs)
            <li>
                <a href="#" aria-expanded="true">{{ $rs->title }}</a>
                <div>
                    <div>
                        @if(count($rs->children))
                            @include('home.categorytree', ['children' => $rs->children])
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
