<div class="col-6">
    <div class="card">
        <!-- Card img -->
        <div class="position-relative">
            <img class="card-img" src="{{ $enseignement->img }}" alt="Card image">
            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                        <!-- Card format icon -->
                        <div class="icon-md bg-warning text-white rounded-circle" title="Cet enseignement a une version audio"><i class="fas fa-music"></i></div>
                    </div>
                </div>
                <!-- Card overlay bottom -->
                <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-3">
            <h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">{{ preg_replace('/\s*\S{1,}(\s*)$/u', '...', substr($enseignement->titre, 0, 55)) }}</a></h4>
            <p class="card-text">{{ preg_replace('/\s*\S{1,}(\s*)$/u', '...', substr($enseignement->description, 0, 160)) }}</p>
            <!-- Card info -->
            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                <li class="nav-item">
                    <div class="nav-link">
                        <div class="d-flex align-items-center position-relative">
                            <div class="avatar avatar-xs">
                                <img class="avatar-img rounded-circle" src="{{ asset('assets/front/images/avatar/01.jpg') }}" alt="avatar">
                            </div>
                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item">Jan 22, 2022</li>
            </ul>
        </div>
    </div>
</div>


