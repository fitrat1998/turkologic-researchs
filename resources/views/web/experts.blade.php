@extends('base.web')

@section('title', __('home.experts'))
@section('description',  __('home.journal_name'))
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}" class="text-success">
                            <i class="bi bi-house"></i> {{ __('home.home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('home.experts') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">


    <!-- Team members section-->
    <section class="py-5 bg-white">
        <div class="container2 my-5">
            <div class="text-center">
                <h2 class="fw-bold text-body">{{ __('home.experts') }}</h2>
                <br><br>
            </div>
     </section>

  <section class="text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-12 col-md-6 ">


        <div class="row m-5">
         @foreach($experts as $expert)
            @if($expert->fio == "Bosh muharrir: Juliboy ELTAZAROV")
                <div class="col-md-6">
                  <div class="card shadow-sm h-100">
                     @if($expert->image)
                        <img class="" src="{{ asset('images/experts/' . $expert->image) }}" alt="">
                        @else
                        <img class="" src="{{ asset('images/experts/default-expert.png') }}" alt="">
                    @endif
                    <div class="card-body">
                        
                        @if(__('home.home') == "Bosh sahifa")
                                <p class="card-text">{{ $expert->fio }}</p>
                        @elseif(__('home.home') == "Ana sayfa")
                            <p class="card-text">{{ $expert->fio_tr }}</p>
                        @elseif(__('home.home') == "Home")
                            <p class="card-text">{{ $expert->fio_en }}</p>
                        @endif
                      <div class="d-flex justify-content-between align-items-center">
                        
                        @if(__('home.home') == "Bosh sahifa")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_uz }}
                            </small>
                        @elseif(__('home.home') == "Ana sayfa")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_tr }}
                            </small>
                        @elseif(__('home.home') == "Home")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_en }}
                            </small>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
            @endif

            @if($expert->fio == "Bosh muharrir o‘rinbosari: Roxila RUZMANOVA")
                <div class="col-md-6">
                  <div class="card shadow-sm h-100">
                     @if($expert->image)
                        <img class="" src="{{ asset('images/experts/' . $expert->image) }}" alt="">
                        @else
                        <img class="" src="{{ asset('images/experts/default-expert.png') }}" alt="">
                    @endif
                    <div class="card-body">
                        @if(__('home.home') == "Bosh sahifa")
                            <p class="card-text">{{ $expert->fio }}</p>
                        @elseif(__('home.home') == "Ana sayfa")
                            <p class="card-text">{{ $expert->fio_tr }}</p>
                        @elseif(__('home.home') == "Home")
                            <p class="card-text">{{ $expert->fio_en }}</p>
                        @endif
                      <div class="d-flex justify-content-between align-items-center">
                        <!-- <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                        </div> -->
                        @if(__('home.home') == "Bosh sahifa")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_uz }}
                            </small>
                        @elseif(__('home.home') == "Ana sayfa")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_tr }}
                            </small>
                        @elseif(__('home.home') == "Home")
                            <small class="text-body-secondary text-center">
                                {{ $expert->malumot_en }}
                            </small>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
            @endif

             @endforeach
          
            
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($experts as $expert)
                  @if("Bosh muharrir o‘rinbosari: Roxila RUZMANOVA" != $expert->fio && "Bosh muharrir: Juliboy ELTAZAROV" != $expert->fio)
                    <div class="col">
                      <div class="card shadow-sm h-100">
                        @if($expert->image)
                        <img class="" src="{{ asset('images/experts/' . $expert->image) }}" alt="">
                        @else
                        <img class="" src="{{ asset('images/experts/default-expert.png') }}" alt="">
                        @endif
                        <div class="card-body">
                            @if(__('home.home') == "Bosh sahifa")
                                <p class="card-text">{{ $expert->fio }}</p>
                            @elseif(__('home.home') == "Ana sayfa")
                                <p class="card-text">{{ $expert->fio_tr }}</p>
                            @elseif(__('home.home') == "Home")
                                <p class="card-text">{{ $expert->fio_en }}</p>
                            @endif
                          <div class="d-flex justify-content-between align-items-center">
                            @if(__('home.home') == "Bosh sahifa")
                                <small class="text-body-secondary text-center">
                                    {{ $expert->malumot_uz }}
                                </small>
                            @elseif(__('home.home') == "Ana sayfa")
                                <small class="text-body-secondary text-center">
                                    {{ $expert->malumot_tr }}
                                </small>
                            @elseif(__('home.home') == "Home")
                                <small class="text-body-secondary text-center">
                                    {{ $expert->malumot_en }}
                                </small>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                   @endif
                @endforeach 
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
<!-- <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                @foreach($experts as $expert)
                    <div class="col mb-5 mb-5 mb-xl-0 ">
                        <div class="text-center bg-white shadow">
                            <img class="img-fluid rounded-1 mt-2 mb-4 px-4" width="200" height="250px" src="{{ asset('images/experts/' . $expert->image) }}" alt="..." />
                            <h5 class="fw-bold text-body">{{ $expert->fio }}</h5>
                            <div class="text-muted">{{ $expert->ishjoyi }} , {{ $expert->lavozim }}</div>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div> -->