<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <input wire:model="search" name="search" type="text" class="header_search_input" list="mylist" placeholder="Pozisyon, firma adı, sektör..." >
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{ $rs->title }}">
                    {{ $rs->category->title }}
                </option>
            @endforeach
        </datalist>
    @endif
</div>
