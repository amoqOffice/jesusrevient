@extends('front/layouts/app', ['title' => 'Evangélisations'])

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @widget('breadcrumbSimpleFront')
                {{-- <div class="container" data-sticky> --}}
                <div class="container">
                    @widget('titleFront')
                    <div class="row pt-1">

                        <!-- Main Post -->
                        <div class="col-lg-9">
                            @widget('contentVideoCardFront')
                        </div>

                        <!-- Sidebar START -->
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            {{-- <div data-sticky data-margin-top="80" data-sticky-for="767"> --}}
                            <div>
                                @widget('contentTopicFront')
                                @widget('contentRecentPostFront')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
