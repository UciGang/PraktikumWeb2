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
            <a href="{{ url('admin/kategori/create') }}">Tambah Kategori</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kat as $item)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->nama }}</td>
                            <td><a href="{{ url('admin/kategoriproduk/delete/' . $item->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        @endsection
