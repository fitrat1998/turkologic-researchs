<!-- <div class="feature-list py-5 border-bottom bg-white">
    <div class="container py-4">
        <heading>
            <h3 class="text-center pb-4 mb-4 fw-bold text-black">{{ __('home.doc_title') }}</h3>
        </heading>
        <div class="row">
            <div class="col-md-6 border-end">
                <img class="img-fluid p-2" src="http://axborotnoma.uz/static/images/right-image.png" alt="">
            </div>
            <div class="col-md-6 row">
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-person-bounding-box text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">1. {{ __('home.doc_1') }}</h5>
                        <p class="fs-14 mb-4">{{ __('home.doc_1val') }} <a href="{{ route('register') }}">{{ __('home.register') }}</a> </p>
                    </div>
                </div>
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-file-earmark-medical-fill text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">2. {{ __('home.doc_2') }}</h5>
                        <p class="fs-14 mb-4">{{ __('home.doc_2val') }} </p>
                    </div>
                </div>
                <div class="col-md-12 gap-4 d-flex">
                    <div><i class="bi bi-check-circle-fill text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">3. {{ __('home.doc_3') }} </h5>
                        <p class="fs-14 mb-4"> {{ __('home.doc_3val') }}  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->

<section class="py-5 border-bottom bg-white">
    <div class="container py-4">
        <div class="pb-3">
            <h4 class="mb-2 fw-bold text-black text-center">{{ __('home.doc_title') }}</h4>
        </div>
        <!-- 1st video -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-row">
            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                    <i class="bi bi-person-bounding-box text-muted display-6 icon-1"></i>
                    <div class="card-body">
                        <h4 class="card-title pb-1 fw-bold text-black mb-0">
                            1. {{ __('home.doc_1') }}
                        </h4>
                        <div class="card-text text-muted fs-14 mb-4">
                            {{ __('home.doc_1val') }}
                        </div>
                    </div>
                    <div class="card-footer border-0 bg-white border-top p-1">
                        <div class="d-grid">
                            <a href="{{ route('register') }}" class="btn btn-success btn-lg">
                                <i class="bi bi-person-add"></i> {{ __('home.register') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                    <i class="bi bi-file-earmark-medical-fill text-muted display-6 icon-1"></i>
                    <div class="card-body">
                        <h4 class="card-title pb-1 fw-bold text-black mb-0">
                            1. {{ __('home.doc_2') }}
                        </h4>
                        <div class="card-text text-muted fs-14 mb-4">
                            {{ __('home.doc_2val') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                    <i class="bi bi-check-circle-fill text-muted display-6 icon-1"></i>
                    <div class="card-body">
                        <h4 class="card-title pb-1 fw-bold text-black mb-0">
                            1. {{ __('home.doc_3') }}
                        </h4>
                        <div class="card-text text-muted fs-14 mb-4">
                            {{ __('home.doc_3val') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>