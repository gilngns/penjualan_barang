@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h2 class="font1 text-center">All Product</h2>
        </div>
        <div class="container mt-5">
            <div class="row">
                @foreach ($dataproduk as $item)
                    <div class="col-md-4 col-sm-6 mb-3 btn hvr-grow">
                        <div class="card">
                            <img src="{{ asset('image/upload/' . $item->foto) }}" height="100%" width="100%" srcset="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                                <p class="fw-bold">{{ $item->deskripsi }}</p>
                                <p class="card-text">Rp. {{ $item->harga }}</p>
                                <p>Stock : {{ $item->jumlah_tersedia }}</p>
                                <a href="#" class="btn btn-danger">Buy</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $dataproduk->links() }}
            </div>
        </div>
    </div>
@endsection
