@extends('base.web')

@section('title',  __('home.about'))
@section('description', __('home.journal_name'))
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('index') }}" class="text-success">
                            <i class="bi bi-house"></i> {{ __('home.home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('home.about') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">
    <!-- Head -->
    <header class="py-5">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5">
                        <h1 class="display-4 fw-bold text-body mb-3">{{ __('about.about') }}</h1>
                        <p class="lead fw-normal text-dark mb-4">
                        {{ __('about.about_title') }}
                        <div class="col-lg-12"><img class="img-fluid w-100 rounded-3 mb-5 mb-lg-0"
                                                    src="{{ asset('images/site/qaror.jpg') }}" alt="..." width="400"/>
                        </div>
                        </p>
                    </div>
                    {{ __('about.about3_desc_2') }}<br>
                    <p><b>{{ __('about.about3_certificate') }}</b> <a
                            href=" https://license.gov.uz/registry/76de68b4-7aa5-4572-a015-aaf069ba8c85" target="_blank">
                            https://license.gov.uz/registry/76de68b4-7aa5-4572-a015-aaf069ba8c85</a></p>
                </div>
            </div>
        </div>
    </header>

    <!-- About section one-->
    <section class="py-5 bg-white" id="scroll-target">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid w-100 rounded-3 mb-5 mb-lg-0"
                                           src="{{ asset('images/site/guvohnoma.jpg') }}" alt="..." width="400"/></div>
                <div class="col-lg-6"><img class="img-fluid w-100 rounded-3 mb-5 mb-lg-0"
                                           src="{{ asset('images/site/davom.jpg') }}" alt="..." width="400"/></div>
                <div class="col-lg-8">


                    @php
                        function boldFirstPart($text) {
                            [$bold, $regular] = explode(':', $text, 2) + ['', ''];
                            return "<strong>{$bold}</strong>" . ($regular ? ":{$regular}" : '');
                        }
                    @endphp

                      <p class="lead fw-normal text-muted mb-0 p-2">
                        <a class="lead fw-normal text-muted" href="https://turkologiya.samdu.uz" target="_blank">{!! boldFirstPart(__('about.about3_link')) !!}</a>
                    </p>

                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_called')) !!}</p>
                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_lang')) !!}</p>
                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_org')) !!}</p>
                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_num')) !!}</p>

                    <p class="lead fw-normal text-muted mb-0 p-2">
                        <span
                            style="margin-left: 205px !important;">{{ __('about.about3_print_online') }} - @php echo date("Y"); @endphp</span>
                    </p>

                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_address')) !!}</p>
                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_count')) !!}</p>
                    <p class="lead fw-normal text-muted mb-0 p-2">{!! boldFirstPart(__('about.about3_desc')) !!}</p>

                </div>
            </div>
        </div>

    </section>
    <!-- About section one-->
    <section class="py-5" id="scroll-target">

        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 border-1">
                    <div class="text-center my-5 ">
                        <div class="col-lg-10"><img class="img-fluid w-100  rounded-3 mb-5 mb-lg-0"
                                                    src="{{ asset('images/site/malumotnoma.png') }}" alt="..."
                                                    width="400"/>
                            <h5>{{ __('about.about3_info') }}</h5>
                            <h5><b>{{ __('about.about3_info_link') }}</b><a
                                    href=" https://portal.issn.org/resource/ISSN/2992-9229" target="_blank">https://portal.issn.org/resource/ISSN/2992-9229</a>
                            </h5>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-12 border-1">
                        <div class="text-center my-5 ">
                            <div class="col-lg-10"><img class="img-fluid w-100  rounded-3 mb-5 mb-lg-0"
                                                        src="{{ asset('images/site/info.png') }}" alt="..."
                                                        width="400"/>

                                <h5 class="mt-3">{{ __('about.about3_info_final') }}</h5>
                                <h5 class="mt-3"><a href="https://oak.uz/pages/4802"
                                                    target="_blank">{{ __('about.link') }} :
                                        https://oak.uz/pages/4802</a></h5>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="container my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-4"><img class="img-fluid w-100 rounded-3 mb-5 mb-lg-0"
                                                   src="{{ asset('images/site/journal.png') }}" alt="..."/></div>
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-3 text-body">{{ __('about.about_1') }}</h2>
                            <p class="lead fw-normal text-muted mb-0">
                                {{ __('about.about_1c') }}
                                <br>
                                {{ __('about.about_1c1') }}
                                <br>
                                {{ __('about.about_1c2') }}
                                <br>
                                {{ __('about.about_1c3') }}
                            </p>
                        </div>
                    </div>
                </div>
    </section>
    <hr class="m-0">
    <!-- About section two-->
    <section class="py-5 bg-light">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-first order-lg-last"><img class="img-fluid rounded-3 mb-5 mb-lg-0"
                                                                     src="{{ asset('images/site/journal.jpg') }}"
                                                                     alt="..."/></div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3 text-body">{{ __('about.about_2') }}</h2>
                    <p class="lead fw-normal text-muted mb-0">
                        {{ __('about.about_2c') }}
                        <br>
                        {{ __('about.about_2c1') }}
                        <br>
                        {{ __('about.about_2c2') }}
                        <br>
                        {{ __('about.about_2c3') }}
                        <br>
                        {{ __('about.about_2c4') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('web.web_requirements')

@endsection

@push('page_js')
    <script>
        $('#more_btn').click(function () {

            $('#more_btn').addClass('d-none');
            $('#less_btn').removeClass('d-none');
            $('.reqd-none').removeClass('d-none');
        });

        $('#less_btn').click(function () {

            $('#more_btn').removeClass('d-none');
            $('#less_btn').addClass('d-none');
            $('.reqd-none').addClass('d-none');
        });
    </script>

@endpush


