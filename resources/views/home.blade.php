@extends('layout.main')

@section('content')
    @include('partials.navbar') 
    <h1 class="fs-4 h3">Home</h1> 
    <div class="row">
        @foreach ($produk as $item)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ $item->url_image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">{{ $item->nama }}</h5>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                        <p class="card-text">Rp. {{ $item->harga }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text">Stok: {{ $item->stok }}</p>
                            <form action="/keranjang/add" method="POST">
                                @csrf
                                <input type="hidden" name="id_produk" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-primary">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

@endsection