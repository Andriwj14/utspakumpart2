@extends('mainLayout.main')

@section('container')

<div class="row align-items-center">
    <div class="col">
        <h5>{{ $review_barang->namaBarang}}</h5>
        <p> Rp. {{ number_format($review_barang->harga, 2, ',', '.') }}</</p>
        <p> stok : {{ $review_barang->stok}}</p>
        <p>{{ $review_barang->review }}</p>
    </div>
    <div class="col">
    <img src="{{ asset('storage/'. $review_barang->photo) }}" class="card-img-top" >
    </div>
</div>

@endsection