@extends('base.admin')

@section('main_content')

    <!-- Default box -->
    <div class="card card-solid ">

        <div class="card-header">
            <h3 class="text-center">Tahrirlash</h3>
        </div>

        <div class="card-body pb-0 table-responsive">
            <form method="POST" action="{{ route('admin.issues.update',$issue->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @method('PATCH')
                <div class="modal-header">
                    <h4 class="modal-title">Jurnal sonini tahrirlash</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form-group">
                    <label for="number">Jurnal soni</label>
                    <input type="number" name="number"  class="form-control" id="number" required placeholder="Jurnal soni" value="{{ old('number', $issue->number) }}">

                    <label for="year_id">Jurnal yilini tanlang</label>
                    <select class="custom-select" id="year_id" name="year_id">
                        <!-- <option disabled selected> -- Tanlang -- </option> -->
                        @foreach($years as $year)
                            <option value = "{{ $issue->year_id }}" {{ $year->id == ($issue->year_id ? "selected":'') }}>{{ $year->year }} - yil</option>
                        @endforeach
                    </select>

                    <br>
                    <label for="file">Jurnalni rasmini yuklang</label>
                    <input type="file" name="image"  class="form-control" id="image"  placeholder="Yuklang" accept=".jpg, .png, .jpeg">

                    <br>
                    <label for="file">Jurnalni yuklang</label>
                    <input type="file" name="file"  class="form-control" id="file"  placeholder="Yuklang" accept="application/pdf">
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @include('admin.modal.issue')
@endsection
