<!-- Main Post START -->
<div class="row gy-4">
    @foreach ($cards as $card)
    {{-- @dd($card) --}}
        @php
            $data = App\Services\Front\Card::dataFormat([
                'img' => $card->img,
                'icon_color' => 'text-bg-warning',
                'icon_type' => 'fa fa-music',
                'tag_color' => 'text-bg-warning',
                'tag_title' => 'Techno',
                'link' => '#',
                'title' => $card->titre,
                'description' => $card->description,
                'logo' => '',
                'author_link' => '#',
                'author_name' => 'Mr Test',
                'date' => $card->date_deb,
            ])
        @endphp

        {!! App\Services\Front\Card::frontRender($data) !!}
    @endforeach
    
    <div class="justify-content-between col">
        {{ $cards->links() }}
    </div>
</div>
{{-- <img src="data:image/png;base64, {{ generateImage(100, 70) }}" alt=""> --}}
