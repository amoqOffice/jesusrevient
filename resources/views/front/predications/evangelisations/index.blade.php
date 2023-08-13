@extends('front/layouts/app', ['title' => 'Evangélisations'])

@php
    use App\Services\Front\SimpleBreadcrumb;
    use App\Services\Front\Title;
    use App\Services\Front\ContentVideoCard;
    use App\Services\Front\ContentTopic;
    use App\Services\Front\ContentRecentPost;

    $breadcrumb = [];

    $title = [];

    $contentVideo = [];

    $contentTopic = [];

    $contentRecentPost = [];
@endphp

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('front.partials.breadcrumbSimple')
                {{-- <div class="container" data-sticky> --}}
                <div class="container">
                    @include('front.partials.title')
                    <div class="row pt-1">

                        <!-- Main Post -->
                        <div class="col-lg-9">
                            @include('front.partials.contentVideoCard')
                        </div>

                        <!-- Sidebar START -->
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            {{-- <div data-sticky data-margin-top="80" data-sticky-for="767"> --}}
                            <div>
                                @include('front.partials.contentTopic')
                                @include('front.partials.contentRecentPost')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
