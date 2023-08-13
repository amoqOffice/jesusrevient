<div class="border {{ $breadcrumb->color ?? '' }}  p-4 text-center rounded-3">
    <h1>{{ $breadcrumb->title }}</h1>
    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
        <ol class="breadcrumb {{ $breadcrumb->seperator ?? 'breadcrumb-dots' }} m-0">
            @foreach ($breadcrumb->elements as $breadcrumb_element)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb_element['text_link'] }}"><i class="{{ $breadcrumb_element['text_icon'] ?? 'bi bi-home' }} me-1"></i> {{ $breadcrumb_element['text'] ?? 'ok' }}</a></li>
            @endforeach
            
            <li class="breadcrumb-item active"> {{ $breadcrumb->active_text }}</li>
        </ol>
    </nav>
</div>
