@extends('admin.layout.app')
@section('content')
    {{-- taro kode form disokin --}}
    @foreach ($pesanan as $pes)
        <form method="POST" action="{{ url('admin/pesanan/update/' . $pes->id) }}">
            {{ csrf_field() }}
            <h4>Form Edit Data</h4>
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" value="{{ $pes->tanggal }}" type="date" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" value="{{ $pes->nama_pemesan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" value="{{ $pes->alamat_pemesan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">Nomor Handphone</label>
                <div class="col-8">
                    <input id="no_hp" name="no_hp" value="{{ $pes->no_hp }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" value="{{ $pes->email }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $pes->jumlah_pesanan }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <input id="deskripsi" name="deskripsi" value="{{ $pes->deskripsi }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
                <div class="col-8">
                    <select id="produk_id" name="produk_id" class="custom-select">
                        @foreach ($produk as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
