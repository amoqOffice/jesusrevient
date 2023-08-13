<!-- Card item START -->
<div class="col-sm-6">
    <div class="card">
        <!-- Card img -->
        <div class="position-relative card-fold">
            <img class="card-img lazy entered loaded" data-src="{{ asset('assets/front/images/blog/4by3/06.jpg') ?? $videoCard->img }}" alt="Card image" data-ll-status="loaded" src="{{ 'https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg' ?? $videoCard->img }}">
            {{-- <img class="card-img lazy entered loaded" data-src="{{ asset('assets/front/images/blog/4by3/06.jpg') }}" alt="Card image" data-ll-status="loaded" src="{{ asset('assets/front/images/blog/4by3/06.jpg') }}">https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg --}}
            <div class="card-img-overlay d-flex align-items-start flex-column p-3" style="background: #00000087">
                <!-- Card overlay Top -->
                <div class="w-100 mt-auto d-flex justify-content-end">
                    <div class="text-center mx-auto">
                        <!-- Card format icon -->
                        <a href="#"><div class="icon-lg {{ $videoCard->icon_color }} rounded-circle" title="cliquer pour suivre la vidéo"><i class="{{ 'fas fa-play' ?? $videoCard->icon }}"></i></div></a>
                    </div>
                </div>
                <!-- Card overlay bottom -->
                <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <!-- <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small 6+
                        +-fw-bold"></i>Travel</a> -->
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-3">
            <h4 class="card-title mb-3"><a href="{{ $videoCard->title_link }}" class="btn-link text-reset fw-bold">{{ $videoCard->title }}</a></h4>

            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                <li class="nav-item">
                    <a href="#" class="badge {{ $videoCard->tag_color }}"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $videoCard->tag_title }}</a>
                </li>
                <li class="nav-item">{{ $videoCard->date }}</li>
            </ul>
        </div>
    </div>
</div>
