@extends('layout.main')

@section('content')
    @include('partials.navbar')
    @if (auth()->user()->role == 'admin')  
        <h1 class="fs-4 h3">Add Produk</h1>
        <form action="/produk/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode" name="kode_barang">
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Url Gambar</label>
                <input type="text" class="form-control" id="gambar" name="url_image">
            </div> 
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endif
        
    <div class="row mt-4">
        @foreach ($produk as $item)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ $item->url_image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">{{ $item->nama }}</h5>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                        <p class="card-text">Rp. {{ $item->harga }}</p>
                        <p class="card-text">Stok: {{ $item->stok }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection