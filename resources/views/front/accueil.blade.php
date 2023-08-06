@extends('front/layouts/app', ['title' => 'Accueil'])

@section('content')
    @include('front/partials/homeCarousel')

    <div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

    <section class="py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('front/partials/breadcrumbSimple')
                </div>
            </div>
        </div>
    </section>

    @include('front/partials/informationBanner')

    <section class="position-relative pt-0">
        <div class="container" data-sticky-container>
            <div class="row pt-1">
                <!-- Main Post -->
                <div class="col-lg-9">
                    test
                </div>

                <!-- Sidebar START -->
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <!-- Social widget START -->
                        <div class="row g-2">
                            <div class="col-4">
                                @include('front/partials/socialNetworkCard')
                            </div>
                            <div class="col-4">
                                <a href="#" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-instagram fs-5 mb-2"></i>
                                    <h6 class="m-0">1.8M</h6>
                                    <span class="small">Followers</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                    <h6 class="m-0">22K</h6>
                                    <span class="small">Subs</span>
                                </a>
                            </div>
                        </div>

                        @include('front/partials/contentCategorie')
                        @include('front/partials/contentRecentPost')
                        @include('front/partials/contentTopic')

                        <!-- ADV widget START -->
                        <div class="col-12 col-sm-6 col-lg-12 my-4">
                            <a href="#" class="d-block card-img-flash">
                                <img src="assets/images/adv.png" alt="">
                            </a>
                            <div class="smaller text-end mt-2">ads via <a href="#" class="text-muted"><u>Bootstrap</u></a></div>
                        </div>
                        <!-- ADV widget END -->
                    </div>
                </div>
                <!-- Sidebar END -->
            </div> <!-- Row end -->
        </div>
    </section>
@endsection

@section('script')
<script src="{{ asset('assets/front/js/sticky.min.js') }}"></script>
@endsection
