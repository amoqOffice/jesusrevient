<div class="row gy-4">
    {{-- @include('front.partials.videoCard') --}}
    {{-- @foreach ($videos as $video) --}}
        @php
            $video = [
                'img' => '',
                'icon_color' => '',
                'icon' => '',
                'title_link' => '',
                'title' => '',
                'tag_color' => '',
                'tag_title' => '',
                'date' => '',
            ];

            $video = App\Services\Front\VideoCard::dataFormat($video);
        @endphp

        {!! App\Services\Front\VideoCard::frontRender($video) !!}
    {{-- @endforeach --}}

    <div class="col-sm-6">
        <div class="card bg-transparent overflow-hidden mb-4">
            <!-- Card img -->
            <div class="position-relative rounded-3 overflow-hidden card-fold">
                <img class="card-img" src="https://img.youtube.com/vi/S154kjw5lyo/hqdefault.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay -->
                    <div class="w-100 my-auto">
                        <!-- Popup video -->
                        <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-md bg-primary d-block mx-auto rounded-circle" data-glightbox="" data-gallery="y-video">
                            <i class="bi bi-play-btn"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single.html" class="btn-link fw-bold">Best Twitter accounts for learning about investment</a></h5>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small opacity-6">
                    <li class="nav-item">
                        <div class="nav-link">
                            by <a href="#" class="text-reset btn-link">Joan</a>
                        </div>
                    </li>
                    <li class="nav-item">Mar 24, 2022</li>
                </ul>
            </div>
        </div>
    </div>
</div>
