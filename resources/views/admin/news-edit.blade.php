@extends('base.admin')

@section('title', "E'lonni tahrirlash")

@section('content_name', "E'lonni tahrirlash")

@push('page_css')
    <link rel="stylesheet" href="{{ asset('adassets/plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">E'lonni tahrirlash</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="news_form" action="{{ route('admin.news.update', ['news' => $news->id]) }}" class="card-body row" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-md-4">
                                <label>Sanani tanlang:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="date" data-inputmask-alias="datetime"
                                           data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" value="{{$news->date}}">
                                </div>
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="image">Rasm yuklash</label>
                                <input type="file" name="image"  class="form-control" id="image" placeholder="Rasm yuklang" accept="image/png, image/jpeg" >
                            </div>
                            <div class="col-md-4">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="name">Sarlavha (UZ)</label>
                                <input type="text" name="title_uz"  class="form-control" id="title_uz" required value="{{ $news->title_uz }}" placeholder="title_uz">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Title (EN)</label>
                                <input type="text" name="title_en"  class="form-control" id="title_en" required value="{{ $news->title_en }}" placeholder="title_en">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Заголовок (RU)</label>
                                <input type="text" name="title_tr"  class="form-control" id="title_tr" required value="{{ $news->text_tr }}" placeholder="text_tr">
                            </div>

                            <hr>

                            <div class="form-group col-md-4">
                                <br>
                                <label for="text_uz">Yangilik matni(UZ)</label>
                                <textarea id="text_uz" class="form-control" name="text_uz" rows="4" placeholder="Enter ...">{{$news->text_uz}}</textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <br>
                                <label for="text_uz">Yangilik matni(EN)</label>
                                <textarea id="text_en" class="form-control" name="text_en" rows="4" placeholder="Enter ...">{{$news->text_en}}</textarea>
                            </div>

                            <div class="form-group col-md-4">
                                <br>
                                <label for="text_uz">Yangilik matni(TR)</label>
                                <textarea id="text_ru" class="form-control" name="text_tr" rows="4" placeholder="Enter ...">{{$news->text_tr}}</textarea>
                            </div>
                            <!-- /.card-body -->

                        </form>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary pl-5 pr-5" form="news_form">Saqlash</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@push('page_js')
    <script src="{{ asset('adassets/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        // $('#text_uz').summernote({
        //     height: 100,
        // });
        // $('#text_en').summernote({
        //     height: 100,
        // });
        // $('#text_ru').summernote({
        //     height: 100,
        // });
    </script>
@endpush
