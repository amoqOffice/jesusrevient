<!-- Categories -->
<div class="row pt-4 g-2">
    <h5>{{ $contentCategorie->title }}</h5>
    @php
        $categories = [
            (object)[
                'color' => 'danger',
                'title' => 'Hello',
                'counter' => '20',
            ], (object)[
                'color' => 'primary',
                'title' => 'Hello 2',
                'counter' => '20',
            ]
        ];
    @endphp

    @foreach ($categories as $categorie)
        @php
            $data = App\Services\Front\Categorie::dataFormat([
                'color' => $categorie->color,
                'title' => $categorie->title,
                'counter' => $categorie->counter,
            ])
        @endphp

        {!! App\Services\Front\Categorie::frontRender($data) !!}
    @endforeach
</div>
