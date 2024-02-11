@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <a href="{{ route('dashboard.index') }}" class="btn btn-primary">Back</a>
            <div class="card mt-4">
                <h5 class="card-header font1">Edit Data Product</h5>
                <div class="card-body">

                    <form action="{{ route('dashboard.update', $dataproduk->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="nama" class="form-control" id="name" autocomplete="off"
                                value="{{ $dataproduk->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Desc</label>
                            <input type="text" name="deskripsi" class="form-control" id="desc" autocomplete="off"
                                value="{{ $dataproduk->deskripsi }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="harga" class="form-control" id="price" autocomplete="off"
                                value="{{ $dataproduk->harga }}">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <img src="{{ asset('image/upload/' . $dataproduk->foto) }}" alt="Foto Produk"
                                style="max-width: 200px; height: auto;">
                            <input type="file" name="foto" class="form-control" id="photo" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="jumlah_tersedia" class="form-control" id="stock"
                                autocomplete="off" value="{{ $dataproduk->jumlah_tersedia }}">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
