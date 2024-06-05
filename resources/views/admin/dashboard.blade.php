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
                    @if($product->isEmpty())
                        <div class="alert alert-info">Tidak ada produk yang tersedia.</div>
                    @else
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal content -->
        </div>
    </div>
</div>

<!-- Modal for update -->
@foreach ($product as $item)
    <!-- Modal for update -->
    <div class="modal fade" id="updateProductModal{{ $item->id_product }}" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel{{ $item->id_product }}" aria-hidden="true">
        <!-- Modal content -->
    </div>
@endforeach

<!-- Modal for delete -->
@foreach ($product as $item)
    <div class="modal fade" id="deleteProductModal{{ $item->id_product }}" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel{{ $item->id_product }}" aria-hidden="true">
        <!-- Modal content -->
    </div>
@endforeach

@endsection

@section('scripts')
<!-- Include Bootstrap JS if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
