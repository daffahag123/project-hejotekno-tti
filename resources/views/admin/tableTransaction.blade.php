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
            <div class="card-body">
                <div class="table-responsive">
                    @if($transaksi->isEmpty())
                        <div class="alert alert-info">Tidak ada transaksi yang tersedia.</div>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id Customer</th>
                                    <th>Nama Customer</th>
                                    <th>Transaction Date</th>
                                    <th>Items Purchased</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Invoice</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi as $index => $trx)
                                <tr>
                                    <td>{{ $trx->id_customer }}</td>
                                    <td>{{ $trx->customer_name }}</td>
                                    <td>{{ $trx->waktu_transaksi }}</td>
                                    <td>{{ $trx->items_purchased }}</td> 
                                    <td>Rp {{ number_format($trx->total, 0, ',', '.') }}</td>
                                    <td>{{ $trx->status }}</td> 
                                    <td>{{ $trx->pdf }}</td>
                                    <td>
                                        <!-- Button trigger modal for update -->
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateUserModal{{ $trx->id_transaksi}}">
                                            Update
                                        </button>
                                        <!-- Button trigger modal for delete -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal{{ $trx->id_transaksi}}">
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

<!-- Modal for update -->
@foreach($transaksi as $trx)
<div class="modal fade" id="updateUserModal{{ $trx->id_transaksi}}" tabindex="-1" aria-labelledby="updateUserModalLabel{{ $trx->id_transaksi}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel{{ $trx->id_transaksi}}">Update Transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('updateTransaction', ['id' => $trx->id_transaksi]) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="customerName">Nama Customer</label>
                        <input type="text" class="form-control" id="customerName" name="customer_name" value="{{ $trx->customer_name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="transactionDate">Transaction Date</label>
                        <input type="datetime" class="form-control" id="transactionDate" name="transaction_date" value="{{ $trx->waktu_transaksi }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="itemsPurchased">Items Purchased</label>
                        <input type="text" class="form-control" id="itemsPurchased" name="items_purchased" value="{{ $trx->items_purchased }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="totalPrice">Total Price</label>
                        <input type="number" class="form-control" id="totalPrice" name="total_price" value="{{ $trx->total }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Pending" {{ $trx->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Dibayar" {{ $trx->status == 'Dibayar' ? 'selected' : '' }}>Dibayar</option>
                            <option value="Dikirim" {{ $trx->status == 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
                            <option value="Selesai" {{ $trx->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="Dibatalkan" {{ $trx->status == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                            <option value="OnProcess" {{ $trx->status == 'OnProcess' ? 'selected' : '' }}>OnProcess</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="invoice">Invoice</label>
                        <input type="text" class="form-control" id="invoice" name="invoice" value="{{ $trx->pdf }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- Modal for delete -->
@foreach($transaksi as $trx)
<div class="modal fade" id="deleteUserModal{{ $trx->id_transaksi}}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{ $trx->id_transaksi}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel{{ $trx->id_transaksi}}">Delete Transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('deleteTransaction', ['id' => $trx->id_transaksi]) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="adminEmail">Admin Email</label>
                        <input type="email" class="form-control" id="adminEmail" name="adminEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="adminPassword">Admin Password</label>
                        <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
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
