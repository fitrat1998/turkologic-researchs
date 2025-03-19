@extends('base.admin')

@section('title', "Tahririyat a'zosini tahrirlash")

@section('content_name', "Tahririyat a'zosini tahrirlash")

@section('main_content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Expertni tahrirlash</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" id="news_form" action="{{ route('admin.experts.update', ['expert' => $expert->id]) }}" class="card-body row" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-md-6">
                                <label>F.I.SH:uz</label>
                                <input type="text" class="form-control" name="fio" required placeholder="F.I.SH" value="{{ $expert->fio }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>F.I.SH:tr</label>
                                <input type="text" class="form-control" name="fio_tr" required placeholder="F.I.SH" value="{{ $expert->fio_tr }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>F.I.SH:en</label>
                                <input type="text" class="form-control" name="fio_en" required placeholder="F.I.SH" value="{{ $expert->fio_en }}">
                            </div>


                            <div class="form-group col-md-6">
                                <label>Malumotlar:uz</label>
                                <input type="text" class="form-control" name="malumot_uz" required placeholder="malumot uz" value="{{ $expert->malumot_uz }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Malumotlar:tr</label>
                                <input type="text" class="form-control" name="malumot_tr" required placeholder="malumot tr" value="{{ $expert->malumot_tr }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Malumotlar:en</label>
                                <input type="text" class="form-control" name="malumot_en" required placeholder="malumot en" value="{{ $expert->malumot_en }}">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="image">Surati</label>
                                <input type="file" name="image"  class="form-control" id="image" placeholder="Rasm yuklang" accept="image/png, image/jpeg" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="id">ID</label>
                                <input type="number" name="id"  class="form-control" id="id" placeholder="ID" value="{{ $expert->id }}">
                            </div>



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
