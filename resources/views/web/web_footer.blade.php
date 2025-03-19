<div class="py-5 footer btn-success">
    <div>
        <div class="container py-3">
            <div class="row">
                <div class="col-6 col-lg-2 col-md-3 ">
                    <h6 class="mb-3 text-warning fw-bold">{{ __('home.menus') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('index') }}">{{ __('home.home') }}</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('about') }}">{{ __('home.about') }}</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('news') }}">{{ __('home.ads') }}</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('archive') }}">{{ __('home.archive') }}</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('experts') }}">{{ __('home.experts') }}</a>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                    <h6 class="mb-3 text-warning fw-bold">{{ __('home.auth') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('login') }}">{{ __('home.login') }}</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="{{ route('register') }}">{{ __('home.register') }}</a>
                </div>
                <div class="col-6 col-lg-2 col-md-3">
                    <h6 class="mb-3 text-warning fw-bold">{{ __('home.contact') }}</h6>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="tel:">+998 99 582 93 81</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="tel:">+998 91 527 68 22</a>
                    <a class="py-1 text-decoration-none d-block w-100 text-white" href="tel:">+998 99 596 35 69</a>
                </div>
                <div class="col-6 col-lg-4 col-md-3 ps-lg-5">
                    <div class="col-lg-8 col-md-6">
                        <a href="{{ route('index') }}" class="brand d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none bg-white m-1 rounded p-3">
                        <img src="{{ asset('assets/img/'. __('home.logo')) }}" class="img-fluid" alt="Turkologiya">
                    </a>
                    </div>
                    <br>
                    <p>{{ __('home.phone') }}: <a class="py-1 text-decoration-none d-inline w-100 text-white" href="tel:">+998 97 911 93 81</a>.</p>
                    <p>{{ __('home.email') }}: <a class="py-1 text-decoration-none d-inline w-100 text-white" href="https://turkologiya.samdu@gmail.com">turkologiya.samdu@gmail.com</a>.</p>
                    <p>{{ __('home.adress') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-4 bg-white footer-copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="me-3 small">©2023 <b class="text-success">Turkological Researchs</b> All rights reserved</span>
                <a class="text-black-50 small mx-3 text-decoration-none" href="{{ route('login') }}">{{ __('home.login') }}</a>
                <a class="text-black-50 small mx-3 text-decoration-none" href="{{ route('register') }}">{{ __('home.register') }}</a>
            </div>
            <div class="col-md-4 text-end">
                <a target="_blank" href="https://t.me/turkologiya1" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-telegram"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-facebook"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-linkedin"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-youtube-play"></i></a>
                <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
