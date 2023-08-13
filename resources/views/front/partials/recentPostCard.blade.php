<div class="card mb-3">
    <div class="row g-3">
        <div class="col-4">
            <img class="rounded" src="data:image/png;base64, {{ generateImage(74, 56) ?? $post->img }}" alt="">
        </div>
        <div class="col-8">
            <h6><a href="post-single-2.html" class="btn-link stretched-link text-reset fw-bold">{{ $post->title }}</a></h6>
            <div class="small mt-1">{{ $post->date }}</div>
        </div>
    </div>
</div>
