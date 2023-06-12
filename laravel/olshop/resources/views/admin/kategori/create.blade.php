@extends('admin.layout.app')
@section('content')
    {{-- taro kode form disokin --}}
    <form method="POST" action="{{ url('admin/kategori/store') }}">
        {{ csrf_field() }}
        <h4>Form Edit Data</h4>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control" spellcheck="false"
                    data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" spellcheck="false"
                    data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
