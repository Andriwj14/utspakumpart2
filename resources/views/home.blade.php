@extends('mainLayout.main')

@section('container')
  <div class="row">
  @foreach ($allBarang as $no => $barang)
  <div class="col-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/'. $barang->photo) }}" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">{{ $barang->namaBarang }}</h5>
        <p class="card-text">Rp. {{ number_format($barang->harga, 2, ',', '.') }}</p>
        <p class="card-text"> stok : {{ $barang->stok }}</p>
        <!-- <p class="card-text">{{ $barang->isi}}</p> -->
        <a href="{{ route ('reviewbr', $barang->id )}}" class="btn btn-info">Lihat selengkapnya</a>
      </div>
    </div>
  </div>
  @endforeach
  <div>
@endsection