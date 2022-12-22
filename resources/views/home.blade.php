@extends('layout.main')

@section('content')
    @include('partials.navbar')
    @if (auth()->user()->role == 'admin') 
        <h1>Add Produk</h1>
    @else
        <h1>Home</h1>
    @endif
@endsection