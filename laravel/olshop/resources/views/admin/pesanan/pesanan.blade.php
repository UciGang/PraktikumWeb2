@extends('admin.layout.app')

@section('content')
    {{-- Konten Halaman Produk niiich --}}
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/pesanan/create') }}">Tambah Pesanan</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>Nomor Handphone</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Nama Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $item)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nama_pemesan }}</td>
                            <td>{{ $item->alamat_pemesan }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jumlah_pesanan }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td><a href="{{ url('admin/pesanan/edit/' . $item->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td><a href="{{ url('admin/pesanan/delete/' . $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        @endsection
