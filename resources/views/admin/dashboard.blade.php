@extends('layouts.master')

@section('title')
    Dashboard || Dashboard of Hejotekno
@endsection

@section('content')
<!-- Check if there's a success message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
            {{ session('error') }}
        </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Product Table</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProductModal">
                    Tambah Produk
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Slug</th>
                                <th>Nama Product</th>
                                <th>Deskripsi Nama</th>
                                <th>Deskripsi</th>
                                <th>Kelebihan</th>
                                <th class="text-right">Harga</th>
                                <th class="text-right">Stock</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $item)
                            <tr>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->nama_product }}</td>
                                <td>{{ $item->deskripsi_nama }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->kelebihan }}</td>
                                <td class="text-right">Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td class="text-right">{{ $item->stock }}</td>
                                <td><img src="{{ asset('images/products/' . $item->gambar) }}" alt="{{ $item->nama_product }}" width=""></td>
                                <td>
                                    <!-- Button trigger modal for update -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateProductModal{{ $item->id_product }}">
                                        Update
                                    </button>
                                    <!-- Button trigger modal for delete -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProductModal{{ $item->id_product }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_product">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_nama">Deskripsi Nama</label>
                        <input type="text" class="form-control" id="deskripsi_nama" name="deskripsi_nama" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kelebihan">Kelebihan</label>
                        <textarea class="form-control" id="kelebihan" name="kelebihan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <br>
                        <button>
                          Input File<input type="file" class="form-control" id="gambar" name="gambar" required></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal for update -->
@foreach ($product as $item)
<!-- Modal for update -->
<div class="modal fade" id="updateProductModal{{ $item->id_product }}" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel{{ $item->id_product }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('product.update', $item->id_product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProductModalLabel{{ $item->id_product }}">Update Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $item->slug }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_product">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ $item->nama_product }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_nama">Deskripsi Nama</label>
                        <input type="text" class="form-control" id="deskripsi_nama" name="deskripsi_nama" value="{{ $item->deskripsi_nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kelebihan">Kelebihan</label>
                        <textarea class="form-control" id="kelebihan" name="kelebihan" required>{{ $item->kelebihan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $item->harga }}" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <br>
                        <button>
                            Input File<input type="file" class="form-control" id="gambar" name="gambar">
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Modal for delete -->
@foreach ($product as $item)
<div class="modal fade" id="deleteProductModal{{ $item->id_product }}" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel{{ $item->id_product }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="{{ route('destroy.product', $item->id_product) }}" method="POST">
    @csrf
    @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProductModalLabel{{ $item->id_product }}">Konfirmasi Hapus Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="adminUsername">Email Admin</label>
                        <input type="email" class="form-control" id="adminEmail" name="adminEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="adminPassword">Password Admin</label>
                        <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('scripts')
<!-- Include Bootstrap JS if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
