<div class="col-6">
    <div class="card">
        <!-- Card img -->
        <div class="position-relative">
            <img class="card-img" src="data:image/png;base64, {{ generateImage(1280, 720) ?? $card->img }}" alt="Card image">
            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                        <!-- Card format icon -->
                        <div class="icon-md {{ $card->icon_color }} rounded-circle" title="Cet enseignement a une version audio"><i class="fas {{ $card->icon }}"></i></div>
                    </div>
                </div>
                <!-- Card overlay bottom -->
                <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge {{ $card->tag_color }} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $card->tag_title }}</a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-3">
            <h4 class="card-title"><a href="{{ $card->link }}" class="btn-link text-reset fw-bold">{{ preg_replace('/\s*\S{1,}(\s*)$/u', '...', substr($card->title, 0, 55)) ?? '' }}</a></h4>
            <p class="card-text">{{ preg_replace('/\s*\S{1,}(\s*)$/u', '...', substr($card->description, 0, 160)) ?? '' }}</p>
            <!-- Card info -->
            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                <li class="nav-item">
                    <div class="nav-link">
                        <div class="d-flex align-items-center position-relative">
                            <div class="avatar avatar-xs">
                                <img class="avatar-img rounded-circle" src="{{ generateImage(200, 200) ?? $card->logo }}" alt="avatar">
                            </div>
                            <span class="ms-3">par <a href="{{ $card->author_link }}" class="stretched-link text-reset btn-link">{{ $card->author_name }}</a></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item">{{ $card->date }}</li>
            </ul>
        </div>
    </div>
</div>


