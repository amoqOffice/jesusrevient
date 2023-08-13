<div class="col-12 col-sm-6 col-lg-12">
    <h4 class="mt-4 mb-3">{{ $contentRecentPost->title }}</h4>
    <!-- Recent post item -->
    @php
        $posts = [
            (object)[
                'img' => 'd',
                'title' => 'Titre 1',
                'date' => '20/04/2022',
            ], (object)[
                'img' => '',
                'title' => 'Titre 2',
                'date' => '20/04/2022',
            ],
        ]
    @endphp

    @foreach ($posts as $post)
        {!! App\Services\Front\RecentPost::frontRender($post) !!}
    @endforeach
</div>
