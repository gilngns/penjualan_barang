@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h2 class="font mb-4">Dashboard | Data Produk</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Produk +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Name</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Price</label>
                                    <input type="number" name="harga" class="form-control" id="harga"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Photo</label>
                                    <input type="file" name="foto" class="form-control" id="foto"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_tersedia" class="form-label">Stock</label>
                                    <input type="number" name="jumlah_tersedia" class="form-control" id="jumlah_tersedia"
                                        autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    Jumlah Data
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col-7">#</th>
                                    <th scope="col-7">Name</th>
                                    <th scope="col-7">Desc</th>
                                    <th scope="col-7">Price</th>
                                    <th scope="col-7">Photo</th>
                                    <th scope="col-7">Stock</th>
                                    <th scope="col-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataproduk as $dp)
                                    <tr>
                                        <td>{{ $dp->id }}</td>
                                        <td>{{ $dp->nama }}</td>
                                        <td>{{ $dp->deskripsi }}</td>
                                        <td>Rp. {{ $dp->harga }}</td>
                                        <td>
                                            <img src="{{ asset('image/upload/' . $dp->foto) }}" height="25%"
                                                width="25%" srcset="">
                                        </td>
                                        <td>{{ $dp->jumlah_tersedia }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.edit', $dp->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('dashboard.destroy', $dp->id) }}" class="mt-2"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $dataproduk->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
